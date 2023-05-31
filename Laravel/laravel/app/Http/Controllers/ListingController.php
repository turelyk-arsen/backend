<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // Get and Show all listings
    public function index()
    {
        // request()
        // 2 ways

        //1 
        // dd(request());
        // dd(request()->tag);

        // 2 
        // dd(request('tag'));

        return view('listings.index', [
            // 'listings' => Listing::latest()->filter(request(['tag']))->get(),
            // 'listings' => Listing::latest()->filter(request(['tag', 'search']))->get(),
            // 'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(4),
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->simplePaginate(4),

        ]);
    }
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
    public function create()
    {
        return view('listings.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        // dd($request->file('logo));
        $formFields = $request->validate([
            'title' => 'required',
            // if you want to add more then one
            'company' => ['required', Rule::unique('listings', 'company')],
            //'listings' = our DB table that we are using
            // follow by 'company' - the field we are using in the DB
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);


        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        // now, if one of those field failed, it will show an error
        // if good completed we will redirect it to the homepage

        $formFields['user_id'] = auth()->id();
        Listing::create($formFields);
        return redirect('/')->with('message', 'Listing created successfully');
    }

    //show edit form
    public function edit(Listing $listing)
    {
        return view('listings.edit', ['listing' => $listing]);
    }

    // update listing data
    public function update(Listing $listing, Request $request)
    {
        if ($listing->user_id != auth()->id()){
            abort(403, 'Unauthorized Action');
        }
        
        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);
        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($formFields);
        return back()->with('message', 'Listing updated successfully');
    }

    public function destroy(Listing $listing)
    {
        if ($listing->user_id != auth()->id()){
            abort(403, 'Unauthorized Action');
        }
        
        $listing->delete();
        return redirect('/')->with('messege', 'Listing deleted successfully');
    }

    public function manage() {
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }
} // end of the class