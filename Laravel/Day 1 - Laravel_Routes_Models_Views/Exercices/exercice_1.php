<?php
/*
Exercise 1: Introduction to Laravel

In this exercise, you will create a simple Laravel application that 
displays a greeting message with your name. 
We will use only the Models, Views, and Routes folders. 
Follow these steps:

1 Create a new Laravel project using the Laravel installer or Composer.

2 Create a "Greeting" model in the app/Models folder. Your Greeting model 
should have only one attribute: name.

3 In the Greeting model, add a static method called greet(). This method 
should return a string saying "Hello, [name]! Welcome to Laravel!" 
Replace [name] with the value of the name attribute.

4 Create a view called greeting.blade.php in the resources/views folder. 
This view should display the greeting message from the greet()
 method in the Greeting model.

5 In the routes folder, create a new route that displays
the greeting.blade.php view when a user visits your application's homepage.

6 In the route, create an instance of the Greeting model and set the
 name attribute to your name. Then, call the greet() method and 
 pass the result to the greeting.blade.php view.

Remember to use only the Models, Views, and Routes folders.
*/
