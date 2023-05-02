<?php

	/*
	Exercise 1 :

	We have one table : Flowers.

	In the Flowers table : 
		- id
		- name
		- price

	1. Create a page 'new-flower.php' containing a form with two (2) inputs :
		- name
		- price

	2. When the submit button is clicked :
		3.1 : 
			You have to declare and initialize an empty array $errors.
		3.2 :
			- You have to check, for each input, if it's empty or not.
			- If it's empty, add a new element in the array : error message.
			For example, if the field 'title' is empty : 
				$errors['title'] = 'Field title is empty';
		3.3 : 
			After you check every input, if the array is not empty, display all the error message from the array.
			If it's empty display a message 'Form ok'.

	4. Now, if all the input are ok, add a new flower to the database.

	5. In this part you will put all of the 'validations' (part 3 & 4) in a new file called 'addFlowersDB.php'
	You only keep the HTML form inside index.php.

	6. Now, create a new page called 'displayFlowers.php' :
		6.1 It will display all the flowers currently inside the Flowers table of your database.
		6.2 Only show the name and price of the flowers. You will have to fetch the flowers inside a 'Flower' class that you will create.

	7. Add a new class to your code, this time we call it 'Plant'.
		7.1 The Flower class should inherit from the Plant class, but it will save the flower color, where the Plant class does not.
		7.2 Create the matching 'Plants' table inside your database and add the new 'color' column inside the 'Flowers' table.
	
	8. In your HTML form, add a dropdown list to chose if you want to add a new plant or a new flower and adapt your SQL query accordingly.

*/
