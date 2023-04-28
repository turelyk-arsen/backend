<?php

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
//thie is my homepage
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all(),

    ]);
});
//single route
Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});





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
