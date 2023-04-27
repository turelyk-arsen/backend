<?php

use App\Models\Greeting;
use App\Models\TeamMember;
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

Route::get('/', function () {
    return view('greeting', [
        'name' =>'Arsen',
        'greeting' =>Greeting::greet('Arsen')
    ]);
});

Route::get('/team', function() {
    return view('team', [
        'team' => TeamMember::allMembers()
    ]);
});

Route::get('/team/{id}', function ($id) {
    return view('team_member', [
        'member' => TeamMember::find($id)
    ]);
});
