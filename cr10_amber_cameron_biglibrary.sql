-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2019 at 09:00 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10_amber_cameron_biglibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `artist_id` smallint(6) NOT NULL,
  `artist_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artist_id`, `artist_name`) VALUES
(0, 'Kylie Minogue'),
(1, 'Lewis Capaldi'),
(2, 'Black Keys');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` smallint(6) NOT NULL,
  `author_name` varchar(20) NOT NULL,
  `author_surname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `author_name`, `author_surname`) VALUES
(1, 'David', 'Nicholls'),
(2, 'Liane', 'Moriarty'),
(3, 'Heather', 'Morris'),
(4, 'George RR', 'Martin'),
(5, 'John', 'Grisham');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` smallint(6) NOT NULL,
  `title` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL,
  `author_id` smallint(6) NOT NULL,
  `ISBN` bigint(13) NOT NULL,
  `description` varchar(500) NOT NULL,
  `publish_date` date NOT NULL,
  `publisher_id` smallint(6) NOT NULL,
  `status` smallint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `title`, `img`, `author_id`, `ISBN`, `description`, `publish_date`, `publisher_id`, `status`) VALUES
(2, 'Nine Perfect Strangers', 'https://assets.whsmith.co.uk/product-image/extra-large/9781405919463-10-000_1.jpg', 2, 9781405919463, 'The number one Sunday Times bestseller from the author of Big Little Lies', '2019-03-07', 1, 0),
(3, 'The Tattooist of Auschwitz', 'https://assets.whsmith.co.uk/product-image/extra-large/9781785763670-10-000_1.jpg', 3, 9781785763670, 'The heart breaking and unforgettable international bestseller', '2018-10-04', 2, 0),
(17, 'The Reckoning', 'https://assets.whsmith.co.uk/product-image/extra-large/9781473684423-10-000_1.jpg', 5, 9781444715408, 'The electrifying new novel from bestseller John Grisham', '2019-07-11', 4, 0),
(21, 'A Game of Thrones', 'https://images-na.ssl-images-amazon.com/images/I/91dSMhdIzTL.jpg', 4, 9780553588484, 'The first book in the Game of Thrones series', '1996-08-01', 3, 0),
(22, 'A Clash of Kings', 'https://images-na.ssl-images-amazon.com/images/I/91Nl6NuijHL.jpg', 4, 9780553579901, 'The Second Novel in A Song of Ice and Fire', '1999-11-16', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cd`
--

CREATE TABLE `cd` (
  `cd_id` smallint(6) NOT NULL,
  `title` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `artist_id` smallint(6) NOT NULL,
  `ISRC` varchar(12) NOT NULL,
  `description` varchar(500) NOT NULL,
  `release_date` date NOT NULL,
  `studio_id` smallint(6) NOT NULL,
  `status` smallint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cd`
--

INSERT INTO `cd` (`cd_id`, `title`, `img`, `artist_id`, `ISRC`, `description`, `release_date`, `studio_id`, `status`) VALUES
(1, 'Divinely Uninspired To A Hellish Extent', 'https://ichef.bbci.co.uk/images/ic/320xn/p07b7bsq.jpg', 1, 'B07NPSN19M', 'Divinely Uninspired To A Hellish Extent', '2019-06-14', 1, 0),
(2, 'Lets Rock', 'https://ichef.bbci.co.uk/images/ic/320xn/p07g3xj6.jpg', 2, 'B07R4WPYS5', 'The ninth studio album by American rock duo the Black Keys.', '2019-06-28', 2, 0),
(4, 'Step Back In Time - The Definitive', 'https://ichef.bbci.co.uk/images/ic/320xn/p07g3xbv.jpg', 0, 'B07R44LR62', 'The Career album contains 41 of your biggest hits plus bonus track New York City', '2019-06-28', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE `director` (
  `director_id` smallint(6) NOT NULL,
  `director_name` varchar(20) NOT NULL,
  `director_surname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`director_id`, `director_name`, `director_surname`) VALUES
(1, 'Frank', 'Darabont'),
(2, 'Francis Ford', 'Coppola'),
(3, 'Christopher', 'Nolan');

-- --------------------------------------------------------

--
-- Table structure for table `dvd`
--

CREATE TABLE `dvd` (
  `dvd_id` smallint(6) NOT NULL,
  `dvd_title` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL,
  `director_id` smallint(6) NOT NULL,
  `ASIN` varchar(10) NOT NULL,
  `description` varchar(500) NOT NULL,
  `release_date` date NOT NULL,
  `production_id` smallint(6) NOT NULL,
  `status` smallint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dvd`
--

INSERT INTO `dvd` (`dvd_id`, `dvd_title`, `img`, `director_id`, `ASIN`, `description`, `release_date`, `production_id`, `status`) VALUES
(1, 'The Shawshank Redemption', 'https://m.media-amazon.com/images/M/MV5BMDFkYTc0MGEtZmNhMC00ZDIzLWFmNTEtODM1ZmRlYWMwMWFmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg', 1, 'B07R8BPB6V', 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.', '1994-01-01', 1, 0),
(2, 'The Godfather', 'https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_UY268_CR3', 2, 'B001CFAXOA', 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.', '1972-01-01', 2, 0),
(3, 'The Dark Knight', 'https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_UX182_CR0,0,182,268_AL_.jpg', 3, 'B001G73S50', 'When the menace known as The Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham.', '2008-01-01', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `production_studio`
--

CREATE TABLE `production_studio` (
  `production_id` smallint(6) NOT NULL,
  `production_name` varchar(50) NOT NULL,
  `production_address` varchar(100) NOT NULL,
  `production_size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `production_studio`
--

INSERT INTO `production_studio` (`production_id`, `production_name`, `production_address`, `production_size`) VALUES
(1, 'Castle Rock Entertainment', 'New York City', 'Small'),
(2, 'Paramount Pictures', 'Hollywood', 'Large'),
(3, 'Warner Bros', 'Burbank', 'Large');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` smallint(6) NOT NULL,
  `publisher_name` varchar(50) NOT NULL,
  `publisher_address` varchar(100) NOT NULL,
  `publisher_size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisher_id`, `publisher_name`, `publisher_address`, `publisher_size`) VALUES
(1, 'Penguin', 'City of Westminster', 'Large'),
(2, 'Zaffre', 'Wimpole Street', 'Small'),
(3, 'Bantam Books', 'New Tork City', 'Medium'),
(4, 'Hodder & Stoughton', 'London', 'Large');

-- --------------------------------------------------------

--
-- Table structure for table `record_studio`
--

CREATE TABLE `record_studio` (
  `record_studio_id` smallint(6) NOT NULL,
  `studio_name` varchar(50) NOT NULL,
  `studio_address` varchar(100) NOT NULL,
  `studio_size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record_studio`
--

INSERT INTO `record_studio` (`record_studio_id`, `studio_name`, `studio_address`, `studio_size`) VALUES
(0, 'Various', 'Various', 'Large'),
(1, 'Vertigo', 'Berlin', 'Medium'),
(2, 'Easy Eye Sound', 'Nashville Tennessee', 'Small');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` smallint(1) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status`) VALUES
(0, 'Available'),
(1, 'Reserved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artist_id`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `author_id` (`author_id`,`publisher_id`),
  ADD KEY `publisher_id` (`publisher_id`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `cd`
--
ALTER TABLE `cd`
  ADD PRIMARY KEY (`cd_id`),
  ADD KEY `studio_id` (`studio_id`),
  ADD KEY `artist_id` (`artist_id`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`director_id`);

--
-- Indexes for table `dvd`
--
ALTER TABLE `dvd`
  ADD PRIMARY KEY (`dvd_id`),
  ADD KEY `director_id` (`director_id`),
  ADD KEY `production_id` (`production_id`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `production_studio`
--
ALTER TABLE `production_studio`
  ADD PRIMARY KEY (`production_id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`);

--
-- Indexes for table `record_studio`
--
ALTER TABLE `record_studio`
  ADD PRIMARY KEY (`record_studio_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `cd`
--
ALTER TABLE `cd`
  MODIFY `cd_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dvd`
--
ALTER TABLE `dvd`
  MODIFY `dvd_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisher_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`),
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`publisher_id`) REFERENCES `publisher` (`publisher_id`),
  ADD CONSTRAINT `book_ibfk_3` FOREIGN KEY (`status`) REFERENCES `status` (`status_id`);

--
-- Constraints for table `cd`
--
ALTER TABLE `cd`
  ADD CONSTRAINT `cd_ibfk_1` FOREIGN KEY (`status`) REFERENCES `status` (`status_id`),
  ADD CONSTRAINT `cd_ibfk_2` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`artist_id`),
  ADD CONSTRAINT `cd_ibfk_3` FOREIGN KEY (`studio_id`) REFERENCES `record_studio` (`record_studio_id`);

--
-- Constraints for table `dvd`
--
ALTER TABLE `dvd`
  ADD CONSTRAINT `dvd_ibfk_1` FOREIGN KEY (`status`) REFERENCES `status` (`status_id`),
  ADD CONSTRAINT `dvd_ibfk_2` FOREIGN KEY (`production_id`) REFERENCES `production_studio` (`production_id`),
  ADD CONSTRAINT `dvd_ibfk_3` FOREIGN KEY (`director_id`) REFERENCES `director` (`director_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
