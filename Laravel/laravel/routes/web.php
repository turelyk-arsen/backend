<?php

// use Illuminate\Http\Request;

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// this is my homepage  All Listings
Route::get(
    '/',
    [ListingController::class, 'index']
    // function () {

    // return view('listings', [
    //     // 'heading' => 'Latest Listings',
    //     'listings' => Listing::all()
    //     // [
    //     //     [
    //     //         'id' => 1,
    //     //         'title' => 'Listing One',
    //     //         'description' => 'Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem',
    //     //     ],
    //     //     [
    //     //         'id' => 2,
    //     //         'title' => 'Listing Two',
    //     //         'description' => 'Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Merol Merol',
    //     //     ]
    //     // ]
    // ]);
    // }
);

//single route

// FIRST
// Route::get('/listings/{id}', function ($id) {
//     return view('listing', [
//         'listing' => Listing::find($id)
//     ]);
// });

//SECOND
// Route::get('/listings/{id}', function ($id) {
//     $listing = Listing::find($id);
//     if ($listing) {
//         return view('listing', [
//             'listing' => $listing
//         ]);
//     } else {
//         abort('404');
//     }
// });
// Show create
Route::get('/listings/create', [ListingController::class, 'create']);

// Store listing data
Route::post('/listings', [ListingController::class, 'store']);



// // Create a new Route to a new 'url'
// Route::get('/hello', function () {
//     return 'Hello Laravel';
// });

// // Wildcard
// Route::get('/posts/{id}', function($id) {

//     // debugging helper
//     // dd($id); is the most used
//     // ddd($id);

//     return ('This is my id in the url: '.$id);
//     // return ("<h1>This is my id in the url: $id </h1>");
// })->where('id','[0-9]+'); // only numbers


// // Play with the url
// // ?name=Gabriel&city=Luxembourg
// // import class Request
// Route::get('/search', function (Request $request) {
//     dd($request->name. ' '.$request->city);
//     // return $request->name;
// });

// VS Extension
// laravel blade snippets by winnie lin
// php namespace resolver by mehdi hassan
// php intelephense

//Naming convention
// Common Resource Routes:
// index - show all listings
// show - show single listings
// create - show form to create new listing (will display the form)
// store - Store new listing (when the form is submitted)
// edit - show form to edit listing (show the edit form)
// update - update listing (to actually update the listing)
// destroy - delete listing

// show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

//update listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

//delete
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// LAST without IF/ELSE  single listing
Route::get(
    '/listings/{listing}',
    [ListingController::class, 'show']

    // function (Listing $listing) {
    // return view('listing', [
    //     'listing' => $listing
    // ]);
    // }
);

//show register/create form
Route::get('/register', [UserController::class, 'create']);

// create new user
Route::post('/users', [UserController::class, 'store']);

// logout
Route::post('/logout', [UserController::class, 'logout']);
