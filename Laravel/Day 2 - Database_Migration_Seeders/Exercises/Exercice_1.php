<?php
/*
Exercise 3: Create a form to submit a new job listing

In this exercise, you will create a form to submit new job listings,
 save the submitted data to the database, and display the new listing on 
 the homepage:
 

1 Create a new route in web.php for the submission form.
2 Create a new view file for the submission form.
3 Add a form in the new view to collect the required information for a job listing.
4 Save the submitted data to the database.
5 Display the new listing on the homepage.

Step-by-step guide:


1 In routes/web.php, add a new route for the submission form, 
linking it to a new view file called submit.blade.php. 
Also, create a new POST route to handle form submission.

Example:
*/
Route::get('/submit', function () {
    return view('submit');
});

Route::post('/submit', function (Request $request) {
    // Code to handle form submission and save data to the database 
    // will be added here.
});
/*

2 Create a new view file submit.blade.php in the resources/views folder. 
This file will contain the HTML for the submission form.

3 In submit.blade.php, create a form with input fields for the following 
information: title, tags, company, location, email, website, and description. 
Make sure to set the form's method attribute to POST and the action attribute 
to the URL for the new POST route created in step 1.

4 In the POST route handler in web.php, validate the submitted data using
 Laravel's validation methods, create a new Listing instance,
  populate it with the submitted data, and save it to the database.

5 In the listings.blade.php view, update the code to display the new 
listing along with the existing listings on the homepage.

*/