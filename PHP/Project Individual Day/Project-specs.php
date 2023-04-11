<?php
/*
Project : Build a Simple Blog
-----------------------------

In this project, you will build a simple blog using PHP, HTML, CSS, and MySQL. 
The blog will have the following features:

A home page that displays a list of blog posts.
A page for each blog post that displays the post content and comments.
A form to add new blog posts.
A form to add new comments to a blog post.

Here are the steps to complete this project:
0. User Registration Form 

create a user registration form using PHP with validation hash code to ensure the security 
of the user's information. The form will have the following fields:

Username
Email Address
Password
Confirm Password
The user will be required to fill out all fields before submitting the form.
 Upon submission, the PHP script will validate the user input, ensuring that the email 
 address is in the correct format, and the password and confirm password fields match.

Additionally, the script will use a hash function to encrypt the user's password before 
storing it in the database. 
This will ensure that the user's password is not stored in plain text and will provide an 
additional layer of security.

Here are the steps you can follow to create this register.php:
    -Create a new PHP file and name it register.php
    -Create an HTML form with the fields listed above
    -Add validation code to the PHP script to ensure that all fields are filled out correctly
    -Use PHP's hash function to encrypt the user's password before storing it in the database
    -Store the user's information in a database table

1. Create a new MySQL database and a table to store blog posts. 
The table should have columns for the post title, content, and date.

2. Create a PHP script that retrieves all the blog posts from the database and 
displays them on the home page. The blog post titles should be links that lead 
to the individual post pages.

3. Post Page : Create a PHP script that retrieves a single blog post from the database
 and displays its content on the post page. The post page should also have a 
 form to add new comments.

4. Create a PHP script that adds new blog posts to the database when the form is submitted.

5. Create a PHP script that adds new comments to a blog post when the form is submitted.

6. Create an Edit comments feature to edit a submitted comment.

8. Add validation to the form fields to ensure that they are not empty or contain invalid data.

BONUS
-----

9. BONUS Style the blog using CSS to make it look visually appealing.

10. BONUS Add pagination to the home page to limit the number of posts displayed at once.

11. BONUS Add a search bar to the home page to allow users to search for specific posts.

12.BONUS Host the blog on a web server and test it thoroughly to ensure that it works as expected.
*/