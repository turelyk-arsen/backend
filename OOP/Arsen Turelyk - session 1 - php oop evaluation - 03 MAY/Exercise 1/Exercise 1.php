<?php

/*
EXERCISE 1

Given this database structure :
INSTRUMENTS(id, name, type, price)
BANDS(id, name, bio)
INSTRUMENTS_IN_BAND(#band_id, #instrument_id)

You need, in a separate TXT/SQL file, to write the query to:
1. display all instruments (name) for the band ‘metallica’.

SELECT instruments.name FROM instruments
INNER JOIN instruments_in_band ON instruments_in_band.instrument_id = instruments.id
INNER JOIN bands ON bands.id = instruments_in_band.band_id WHERE bands.name = 'metallica';

2. display number of instruments per band. For each band, display the name of the band +
number of instruments.

SELECT bands.name, COUNT(*) as NumberInstruments FROM bands 
INNER JOIN instruments_in_band ON bands.id = instruments_in_band.band_id
GROUP BY bands.id

Note: Only write the SQL query, no PHP.

*/