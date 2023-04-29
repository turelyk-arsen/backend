SELECT p.*, u.first_name, u.last_name
	FROM playlists p
	INNER JOIN users u ON p.user_id = u.user_id

SELECT *, a.id
	FROM songs s
	INNER JOIN artists a ON a.artists_id = s.artists_id
	WHERE a.artists_id = 2

SELECT c.title, COUNT(categ_id)
 FROM songs s
 INNER JOIN categories c a ON c.categ_id = s.categ_id
 GROUP BY categ_id;