<?php

use App\Models\Animal;

Route::get('/animals', function () {
    $animals = [
        new Animal(['name' => 'Lion', 'type' => 'Mammal', 'fact' => 'Lions are social animals']),
        new Animal(['name' => 'Eagle', 'type' => 'Bird', 'fact' => 'Eagles have excellent eyesight']),
    ];

    return view('animals', ['animals' => $animals]);
});

Route::get('/animals/create', function () {
    return view('create-animal');
});

Route::post('/animals/store', function () {
    // Normally, we would save the new animal to the database.
    // But for this exercise, we will just redirect to the animals list.
    return redirect('/animals');
});
