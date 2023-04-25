<?php

/*

Exercise 1:

We have a database "forum" with a table called "users" that contains 
the following columns:
id (integer)
username (string)
email (string)
password (string)(private)

Insert a few users inside the base to give you a data sample.

1. Create a PHP class called "User" that will represent a user 
from the database. The class should have properties for each 
column in the "users" table. Also create a getter for the private property.

2. Create a static method in the User class called "getAll" 
that retrieves all the users from the database using PDO and 
fetch them inside the User class.

3. Create a new PHP file called "users.php" that 
will display all the users in a table.

4. In the "users.php" file, use the "User::getAll" method 
to retrieve all the users from the database and display them in the table.

5. Now add the "User" class inside the "Login\" namespace and make the 
necessary changes to make the code work. Also put the User.php file inside 
the matching folder in your repository.
(people on MacOS will have to change the permissions of the folder in order to open it)

---
    <table style="width:100%">
        <?php foreach ($users as $key => $value) : ?>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            <tr>
                <td><? echo $value['id'] ?></td>
                <td><? echo $value['username'] ?></td>
                <td><? echo $value['email'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>


Exercise 2:

In the same database, create a table called "posts" that 
contains the following columns:
id (integer)
title (string)
content (longtext)

1. Create a PHP class called "Post" that will represent 
a post from the database. The class should have properties 
for each column in the "posts" table.

2. Create a static method in the Post class called "createPost" 
that inserts a new post into the database using PDO.
The method should take the title and content of the post 
as arguments.

3. In the "createPost" method, use exceptions to handle any 
errors that may occur during the insertion of the new post.
For example, if the title or content is empty, throw an 
exception with an appropriate error message.

4. Create a new PHP file called "new-post.php" that will 
display a form for creating a new post.

5. In the "new-post.php" file, use the "Post::createPost" 
method to insert a new post into the database when the 
form is submitted. If any errors occur during the insertion,
catch the exceptions and display the error message to the user.

BONUS. In the "new-post.php" file, display all the posts 
that currently are inside the "posts" table under the 
insertion form. For this you will need to create a new 
static method called "getPosts" inside the "Post" class.
This new method should fetch all the posts from the 
database and return them as JSON content.


*/