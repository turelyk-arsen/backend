-- 1. display all instruments (name) for the band ‘metallica’.

SELECT i.name
FROM instruments i
INNER JOIN instruments_in_band ib ON i.id = ib.instrument_id
INNER JOIN band b ON b.id = ib.band_id
WHERE b.name = 'Metallica'

-- 2. display number of instruments per band.

SELECT b.name, COUNT(*) as NbInstruments
FROM band b
INNER JOIN instruments_in_band ib ON b.id = ib.band_id
GROUP BY b.id