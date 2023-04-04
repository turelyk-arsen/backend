-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 29, 2023 at 04:37 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `biography` varchar(1500) NOT NULL,
  `birth_year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `fullname`, `biography`, `birth_year`) VALUES
(1, 'William Shakespeare', 'William Shakespeare was an English poet, playwright, and actor, widely regarded as the greatest writer in the English language and one of the greatest playwrights in history. He was born in 1564 in Stratford-upon-Avon, England, and wrote approximately 38 plays and 154 sonnets that continue to be performed and studied today.', 1564),
(2, 'Jane Austen', 'Jane Austen was an English novelist known primarily for her six major novels, which interpret, critique and comment upon the British landed gentry at the end of the 18th century. She was born in 1775 in Steventon, England, and her works of romantic fiction are still widely read today.', 1775),
(3, 'Fyodor Dostoevsky', 'Fyodor Dostoevsky was a Russian novelist, philosopher, and short-story writer whose psychological penetration into the darkest recesses of the human heart, together with his unsurpassed moments of illumination, had an immense influence on 20th-century fiction. He was born in 1821 in Moscow, Russia, and his most famous works include Crime and Punishment, The Brothers Karamazov, and Notes from Underground.', 1821),
(4, 'Emily Bronte', 'Emily Bronte was an English novelist and poet, best known for her novel Wuthering Heights, which is now considered a classic of English literature. She was born in 1818 in Thornton, England, and lived a short life marked by ill health and reclusiveness.', 1818),
(5, 'George Orwell', 'George Orwell was an English novelist, essayist, journalist, and critic, best known for his dystopian novel Nineteen Eighty-Four and the allegorical novella Animal Farm. He was born in 1903 in Motihari, India, and his works continue to be widely read and studied for their political and social commentary.', 1903),
(6, 'Ernest Hemingway', 'Ernest Hemingway was an American novelist, short-story writer, journalist, and sportsman, known for his spare and precise prose style and his portrayal of the disillusionment of the Lost Generation. He was born in 1899 in Oak Park, Illinois, and his works, including The Sun Also Rises and A Farewell to Arms, are considered classics of 20th-century American literature.', 1899),
(7, 'Virginia Woolf', 'Virginia Woolf was an English novelist, essayist, and feminist writer, known for her stream-of-consciousness narrative style and her exploration of the inner lives of her characters. She was born in 1882 in London, England, and her best-known works include Mrs. Dalloway, To the Lighthouse, and A Room of One\'s Own.', 1882),
(8, 'Toni Morrison', 'Toni Morrison was an American novelist, essayist, editor, and professor, known for her powerful and lyrical explorations of the experiences of Black Americans, particularly Black women. She was born in 1931 in Lorain, Ohio, and her most famous works include Beloved, Song of Solomon, and The Bluest Eye.', 1931),
(9, 'J.R.R. Tolkien', 'John Ronald Reuel Tolkien was an English writer, poet, philologist, and academic. He is best known as the author of the classic high fantasy works The Hobbit, The Lord of the Rings, and The Silmarillion.', 1892),
(10, 'J.K. Rowling', 'Joanne Rowling, better known by her pen name J.K. Rowling, is a British author, philanthropist, and film producer. She is best known for writing the Harry Potter fantasy series, which has won multiple awards and sold more than 500 million copies, becoming the best-selling book series in history.', 1965),
(11, 'George R.R. Martin', 'George Raymond Richard Martin is an American novelist and screenwriter. He is best known for his epic fantasy series A Song of Ice and Fire, which was adapted into the HBO series Game of Thrones.', 1948),
(12, 'Terry Pratchett', 'Sir Terence David John Pratchett was an English author of fantasy novels, especially comical works. He is best known for his Discworld series of 41 novels.', 1948),
(13, 'Neil Gaiman', 'Neil Richard MacKinnon Gaiman is an English author of short fiction, novels, comic books, graphic novels, nonfiction, audio theatre, and films. His works include the comic book series The Sandman and novels Stardust, American Gods, Coraline, and The Graveyard Book.', 1960),
(14, 'Ursula K. Le Guin', 'Ursula Kroeber Le Guin was an American author of speculative fiction, realistic fiction, non-fiction, screenplays, librettos, essays, poetry, speeches, translations, literary critiques, chapbooks, and children`s fiction. She was primarily known for her works of speculative fiction, including the science fiction works set in the Hainish Universe and the high fantasy works of Earthsea.', 1929),
(15, 'Brandon Sanderson', 'Brandon Sanderson is an American author of epic fantasy and science fiction. He is best known for the Cosmere universe, in which most of his fantasy novels, including the Mistborn series and The Stormlight Archive series, take place.', 1975),
(16, 'Robin Hobb', 'Margaret Astrid Lindholm Ogden, better known by her pen names Robin Hobb and Megan Lindholm, is an American writer. She has written five series set in the Realm of the Elderlings, which started in 1995 with the publication of Assassin`s Apprentice and ended with Assassin`s Fate in 2017.', 1952),
(17, 'Robert Jordan', 'James Oliver Rigney Jr., better known by his pen name Robert Jordan, was an American author of epic fantasy. He is best known for the Wheel of Time series, which comprises 14 books and a prequel novel.', 1948);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `publication_date` date NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `author_id`, `title`, `publication_date`, `price`) VALUES
(1, 1, 'Romeo and Juliet', '1597-01-01', '12.99'),
(2, 1, 'Hamlet', '1603-01-01', '14.99'),
(3, 1, 'Macbeth', '1623-01-01', '11.99'),
(4, 2, 'Pride and Prejudice', '1813-01-28', '9.99'),
(5, 2, 'Sense and Sensibility', '1811-01-01', '8.99'),
(6, 2, 'Emma', '1815-12-23', '10.99'),
(7, 3, 'Crime and Punishment', '1866-01-01', '13.99'),
(8, 3, 'The Brothers Karamazov', '1880-01-01', '15.99'),
(9, 3, 'Notes from Underground', '1864-01-01', '12.99'),
(10, 4, 'Wuthering Heights', '1847-01-01', '11.99'),
(11, 4, 'The Night is Darkening Round Me', '1842-01-01', '9.99'),
(12, 4, 'Poems by Currer, Ellis, and Acton Bell', '1846-01-01', '8.99'),
(13, 5, 'Nineteen Eighty-Four', '1949-06-08', '12.99'),
(14, 5, 'Animal Farm', '1945-08-17', '10.99'),
(15, 5, 'Homage to Catalonia', '1938-01-01', '11.99'),
(16, 6, 'The Sun Also Rises', '1926-10-22', '13.99'),
(17, 6, 'A Farewell to Arms', '1929-09-27', '14.99'),
(18, 6, 'For Whom the Bell Tolls', '1940-10-21', '15.99'),
(19, 7, 'Mrs. Dalloway', '1925-05-14', '11.99'),
(20, 7, 'To the Lighthouse', '1927-05-05', '12.99'),
(21, 7, 'Orlando', '1928-10-11', '10.99'),
(22, 8, 'Beloved', '1987-09-02', '13.99'),
(23, 8, 'Song of Solomon', '1977-10-01', '12.99'),
(24, 8, 'The Bluest Eye', '1970-01-01', '10.99');

-- --------------------------------------------------------

--
-- Table structure for table `novels`
--

CREATE TABLE `novels` (
  `id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `publication_date` date NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `novels`
--

INSERT INTO `novels` (`id`, `author_id`, `title`, `publication_date`, `price`) VALUES
(1, 9, 'The Children of Húrin', '2007-04-17', '20.99'),
(2, 9, 'The Silmarillion', '1977-09-15', '12.99'),
(3, 10, 'Harry Potter and the Philosopher\'s Stone', '1997-06-26', '9.99'),
(4, 10, 'Harry Potter and the Goblet of Fire', '2000-07-08', '12.99'),
(5, 11, 'A Game of Thrones', '1996-08-01', '14.99'),
(6, 11, 'A Clash of Kings', '1998-11-16', '16.99'),
(7, 12, 'Guards! Guards!', '1989-05-01', '10.99'),
(8, 12, 'Small Gods', '1992-06-17', '9.99'),
(9, 13, 'The Sandman: Preludes & Nocturnes', '1989-01-01', '18.99'),
(10, 13, 'American Gods', '2001-06-19', '14.99'),
(11, 14, 'The Left Hand of Darkness', '1969-01-01', '11.99'),
(12, 14, 'A Wizard of Earthsea', '1968-10-01', '10.99'),
(13, 15, 'Mistborn: The Final Empire', '2006-07-17', '13.99'),
(14, 15, 'The Way of Kings', '2010-08-31', '16.99'),
(15, 16, 'Assassin\'s Apprentice', '1995-04-01', '12.99'),
(16, 16, 'Royal Assassin', '1996-03-27', '14.99'),
(17, 17, 'The Eye of the World', '1990-01-15', '11.99'),
(18, 17, 'The Great Hunt', '1990-11-15', '12.99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `novels`
--
ALTER TABLE `novels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `author_id` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
