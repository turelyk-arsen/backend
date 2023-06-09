<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //Get and Show all listings
    public function index()
    {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))
                ->paginate(4),

        ]);
    }
    //Show single listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
    // Create Form View
    public function create()
    {
        return view('listings.create');
    }

    //Store Listing Data
    public function store(Request $request)
    {
        //dd($request->all());

        $formFields = $request->validate([
            'title' => 'required',
            //if you want to add more then one
            'company' => ['required', Rule::unique('listings', 'company')],
            //'listings' = our DB table that we are using
            // follow by 'company' - the field we are using in the DB 
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);
        //now, if one of those field failed, it will show an error
        // if good completed we will redirect it to the hompage

        Listing::create($formFields);
        return redirect('/')->with('message', 'Listing created successfully');
    }
} // end of the class
