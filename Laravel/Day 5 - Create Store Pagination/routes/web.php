<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
// Naming Convention
// Common Resource Routes : 
// index - show all listings
// show - show single listing
// create - Show form to create new listing (will display the form)
// store - Store new listing (when the form is submitted)
// edit - Show form to edit listing (shw the edit form)
// update - Update listing (to actually updat ethe listing)
// destroy - Delete listing

//All Listings
//thie is my homepage
Route::get('/', [ListingController::class, 'index']);

//Show Create
Route::get('/listings/create', [ListingController::class, 'create']);

//Store Listing data
Route::post('/listings', [ListingController::class, 'store']);



//single route // single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);







// //Create a new Route to a new "url"
// Route::get('/hello', function () {
//     return 'Hello Laravel';
// });

// // Wildcard 
// Route::get('/posts/{id}', function ($id) {
//     //debugging helper
//     //dd($id); <- dd() is the most used
//     //ddd($id);
//     return 'This is my ID in the url: ' . $id;
// })->where('id', '[0-9]+'); // only numerci

// //Play with the url
// // ?name=Gabriel&city=Luxembourg
// Route::get('/search', function (Request $request) {
//     dd($request->name . ' ' . $request->city);
// });
// //VS Extension
// // laravel blade snippets by winnie lin
// // php namespace resolver by mehdi hassan
// // php intelephense
