<?php

/*
EXERCISE 3

We will work for an Online Candy Shop. The owner wants to be able to add its products and display
them. We will take care only of saving the products in the database through a form.

In this exercise, you will have to create a new database and a form.
This form will allow you to add a new candy in the database.

Step 1 :
Create a new database called “candy_shop” and create the ‘candy’ table matching this structure :
CATEGORIES(id, title)
CANDY(id, name, price, #categ_id)
Categories are : “Gummies”, “Lollipops”, “Caramel”.

You’ll have to export the database and attach it to your evaluation folder.
Here is a tutorial on exporting a database in PHPMyAdmin :
https://help.dreamhost.com/hc/en-us/articles/214395738-phpMyAdmin-How-to-backup-or-export-a-database-or-table

Step 2 :
Now, you need to be able to add a new instrument thanks to the form.

You have to follow those recommandations :
● The form will be processed in Ajax. You can use Ajax in a classic way or with the help of
jQuery.
● Category should be a dropdown-list to choose from Gummies/Lollipops/Caramel.
● Validate the input coming from the form.
● Insert the candyin the database
● A success or error message will be displayed.

*/