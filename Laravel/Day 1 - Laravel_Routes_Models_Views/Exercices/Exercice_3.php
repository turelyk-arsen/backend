<?php 
/*
Exercise 3: Create a simple "Animal Facts" application.

Here are some step-by-step bullet points to guide you through the process:
 
1 Create an "Animal" Model:
Go to the "app/models" folder.
Create a new file named "Animal.php".
Define a class called "Animal" with the properties "name", "type", and "fact".

2 Set up Routes for the application:
Open the "routes/web.php" file.
Create three routes:
A route to display a list of animals ("/animals").
A route to display a form to add a new animal ("/animals/create").
A route to process the form data and add the animal to the list ("/animals/store").

3 Create Views for the application:
Go to the "resources/views" folder.
Create a file named "animals.blade.php" to display the list of animals.
Create a file named "create-animal.blade.php" for the animal creation form.

4 Build the "animals.blade.php" View:
Display a title, a list of animals, and a link to add a new animal.
Use the @foreach directive to loop through the animals array and display each animal's information.

5 Build the "create-animal.blade.php" View:
Display a title and a form to add a new animal.
The form should include input fields for the "name", "type", and "fact" properties, as well as a submit button.
Set the form action to "/animals/store" and use the POST method.
(
    // Normally, we would save the new animal to the database.
    // But for this exercise, we will just redirect to the animals list.
)


6 Test your application:
Run your Laravel application.
Visit the "/animals" route to see the list of animals.
Click the "Add a new animal" link to navigate to the animal creation form.
Add a new animal using the form, and then see it added to the list after submitting the form (Note: The new animal won't be saved in this exercise since we're not using a database).

*/