<?php

// web.php
use Illuminate\Http\Request;

// ...

// Add these new routes
Route::get('/submit', function () {
    return view('submit');
});

Route::post('/submit', function (Request $request) {
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'tags' => 'required',
        'company' => 'required|max:255',
        'location' => 'required|max:255',
        'email' => 'required|email',
        'website' => 'required|url',
        'description' => 'required',
    ]);

    $listing = new Listing($validatedData);
    $listing->save();

    return redirect('/')->with('success', 'Listing submitted successfully');
});
