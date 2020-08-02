-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 31, 2020 at 05:09 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL DEFAULT 5,
  `review` text NOT NULL DEFAULT 'No review yet.',
  `shelf` varchar(100) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `added_on` date NOT NULL,
  `added_by` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ID`, `title`, `author`, `rating`, `review`, `shelf`, `genre`, `added_on`, `added_by`) VALUES
(2, 'The Name of The WInd', 'Patrick Rothfuss', 7, 'Very good book', 'Read', 'Fantasy', '2020-07-25', 'notuday'),
(4, 'Oathbringer', 'Brandon Sanderson', 10, 'Amazing book', 'Read', 'Fantasy', '2020-07-25', 'uchhina1337'),
(16, 'Iron Gold', 'Pierce Brown', 1, 'Amazing book, does not dissapoint', 'To Read', 'Fantasy', '2020-07-29', 'uchhina1337'),
(18, 'Red Rising', 'Pierce Brown', 9, 'Amazing books, couldnt put it down', 'Read', 'Fantasy', '2020-07-29', 'uchhina1337'),
(22, 'Dark Age', 'Pierce Brown', 9, 'Its challenging to be a the 5th book in a sequel but it carries the torch of the epic without faltering!', 'Read', 'Fantasy', '2020-07-30', 'uchhina1337'),
(38, 'The Way of Kings', 'Brandon Sanderson', 9, 'Best book ever.', 'Read', 'Fantasy', '2020-07-30', 'uchhina1337'),
(40, 'The Rhythm of War', 'Brandon Sanderson', 5, 'No review yet.', 'To read', 'Fantasy', '2020-07-30', 'uchhina1337'),
(41, 'Harry Potter', 'J. K. Rowling', 5, 'Good books for a light reading session. For those who have read it already, it brings back nostalgic memories of childhood.', 'To read', 'Fiction', '2020-07-30', 'test'),
(42, 'Test', 'test auther', 2, 'none', 'Read', 'kdsjfg', '2020-07-30', 'lkajdsh'),
(43, 'The Hunger Games', 'Suzanne Collins', 7, 'In the ruins of a place once known as North America lies the nation of Panem, a shining Capitol surrounded by twelve outlying districts. The Capitol is harsh and cruel and keeps the districts in line by forcing them all to send one boy and once girl between the ages of twelve and eighteen to participate in the annual Hunger Games, a fight to the death on live TV.', 'Read', 'Fiction', '2020-07-31', 'uchhina1337'),
(44, 'The Snowman', 'Jo Nesbo', 1, '', 'To read', 'Thriller', '2020-07-31', 'uchhina1337'),
(45, 'Catching Fire', 'Suzanne Collins', 7, '', 'Read', 'Fiction', '2020-07-31', 'uchhina1337');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
