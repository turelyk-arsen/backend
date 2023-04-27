<?php

use App\Models\Greeting;

Route::get('/greet/morning', function () {
    $greetingModel = new Greeting();
    $greeting = $greetingModel->getGreeting('morning');
    return view('greeting', ['greeting' => $greeting]);
});

Route::get('/greet/afternoon', function () {
    $greetingModel = new Greeting();
   s $greeting = $greetingModel->getGreeting('afternoon');
    return view('greeting', ['greeting' => $greeting]);
});

Route::get('/greet/evening', function () {
    $greetingModel = new Greeting();
    $greeting = $greetingModel->getGreeting('evening');
    return view('greeting', ['greeting' => $greeting]);
});
