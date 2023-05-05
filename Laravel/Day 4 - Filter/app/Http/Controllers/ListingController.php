<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //Get and Show all listings
    public function index()
    {
        //request()
        // +- 2 ways
        //1 
        //dd(request());
        //dd(request()->tag);
        //2
        //dd(request('tag'));

        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get(),

        ]);
    }

    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
} // end of the class
