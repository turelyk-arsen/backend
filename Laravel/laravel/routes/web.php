<?php

// use Illuminate\Http\Request;
use App\Models\Listing;
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

// this is my homepage
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
        // [
        //     [
        //         'id' => 1,
        //         'title' => 'Listing One',
        //         'description' => 'Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem',
        //     ],
        //     [
        //         'id' => 2,
        //         'title' => 'Listing Two',
        //         'description' => 'Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Merol Merol',
        //     ]
        // ]
    ]);
});

//single route
Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});

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
