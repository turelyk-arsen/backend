<?php


// Given the following database structure:

// PRODUCTS (id, name, description, category, price)
// CATEGORIES (id, name, description)
// ORDERS (id, product_id, order_date, customer_name, total_amount)

// Write an SQL query to:

// 1.Display all the products in the category named 'Electronics'.
// "SELECT * FROM products WHERE categories='electronics'"

// 2.For each category, display the name of the category and the total revenue generated 
// by products in that category.

// SELECT CATEGORIES.name AS category_name, SUM(ORDERS.total_amount) AS total_revenue 
// FROM CATEGORIES 
// INNER JOIN PRODUCTS ON CATEGORIES.id = PRODUCTS.category 
// INNER JOIN ORDERS ON PRODUCTS.id = ORDERS.product_id 
// GROUP BY CATEGORIES.name;

// 3.Display the average price of all products.
// SELECT AVG(price) AS average_price FROM PRODUCTS;

// Only write the SQL query, no PHP

// given this database structure:
// instruments (id, name, type, price)
// bands (id, name, bio)
// instruments_in_band(band_id, instruments_id)

//     ----------TASK 1----------
// 1st query
//display all the guitars (type) which the price is lower than 100
// select type, price from instruments where type = 'guitar' and price < 100;
// 2nd query
//display all instruments (name) for band_id = 5
// select instruments.name, band_id from instruments i inner join
// instruments_in_band ins on i.id = ins.instruments_id where ins.band_id= 5;;