<?php

	/*
	Based on this DB structure : 

	USERS (user_id, first_name, last_name, mail, password) 
	ARTISTS (artist_id, name, bio, gender, date_of_birth) 
	SONGS (song_id, title, release_date, #categ_id, #artist_id) 
	CATEGORIES (categ_id, title) 
	PLAYLISTS (playlist_id, title, creation_date, #user_id) 
	PLAYLIST_CONTENT(#playlist_id, #song_id)


	Write the SQL queries to : 
		1. Retrieve all playlists with user's full name on each playlist.
		2. Get all the songs for the artist id=2
		3. Get number of songs per categories.

	YOU DON'T NEED THE PHP CODE, JUST THE SQL QUERY.
	*/
// 1. select playlists.*, users.first_name, users.last_name from playlists inner join
// users on playlists.user_id = users.user_id;

// SELECT playlists.*, CONCAT(users.first_name, ' ', users.last_name) AS user_full_name
// FROM playlists
// INNER JOIN users ON playlists.user_id = users.user_id;

// 2. select songs.* from songs inner join artists on songs.artist_id = artists.artist_id where artist_id = 2;

// chatGPT SELECT * FROM songs WHERE artist_id = 2;
//      SELECT *, a.id
//      	FROM songs s
//      	INNER JOIN artists a ON a.artists_id = s.artists_id
//      	WHERE a.artists_id = 2

// 3. select categories.title from categories union count(songs.categ_id) from categories 

// chatGPT SELECT categories.title, COUNT(*) AS num_songs
// FROM songs
// INNER JOIN categories ON songs.categ_id = categories.categ_id
// GROUP BY categories.categ_id;

//  SELECT c.title, COUNT(categ_id)
//   FROM songs s
//   INNER JOIN categories c a ON c.categ_id = s.categ_id
//   GROUP BY categ_id;

