-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 04, 2023 at 01:31 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sfm`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `Article_ID` int NOT NULL AUTO_INCREMENT,
  `UserID` int NOT NULL,
  `PublishedDate` date NOT NULL,
  `Title` varchar(250) NOT NULL,
  `ArticleLink` varchar(250) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  PRIMARY KEY (`Article_ID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`Article_ID`, `UserID`, `PublishedDate`, `Title`, `ArticleLink`, `UserName`) VALUES
(100, 4, '2019-03-11', 'Robot Farmers??????', 'Video_Article.php', 'Peter'),
(101, 5, '2023-09-23', 'Farmers Crisis', 'Article_Page.php', 'Andrew Tate'),
(102, 6, '2023-05-20', 'Forest Burning', 'Video_Article2.php', 'Ben Dover'),
(104, 6, '2020-12-09', 'Why plants are important?', 'Article_Page2.php', 'Ben Dover');

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

DROP TABLE IF EXISTS `listings`;
CREATE TABLE IF NOT EXISTS `listings` (
  `ListingID` int NOT NULL AUTO_INCREMENT,
  `UserID` int NOT NULL,
  `ListingName` varchar(255) NOT NULL,
  `ListingCtgy` varchar(50) NOT NULL,
  `ListingPrice` decimal(10,2) NOT NULL,
  `ListingUnit` int NOT NULL,
  `ListingDesc` text NOT NULL,
  PRIMARY KEY (`ListingID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`ListingID`, `UserID`, `ListingName`, `ListingCtgy`, `ListingPrice`, `ListingUnit`, `ListingDesc`) VALUES
(1, 2, 'Cabbage', 'crops', '12.00', 4, '4 round cabbages of +/- 800g'),
(2, 2, 'Tomatoes', 'crops', '7.00', 10, 'RM0.70/120grams\r\nRM7 for a bag of 10 tomatoes (+/- grams each)');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
  `ProfileID` int NOT NULL AUTO_INCREMENT,
  `UserID` int NOT NULL,
  `ProfLink` varchar(255) NOT NULL,
  `ProfData` varchar(255) NOT NULL,
  `ProfFile` varchar(255) NOT NULL,
  PRIMARY KEY (`ProfileID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE IF NOT EXISTS `schedule` (
  `TaskID` int NOT NULL AUTO_INCREMENT,
  `UserID` int NOT NULL,
  `TaskName` varchar(250) NOT NULL,
  `TaskTime` time NOT NULL,
  `TaskStatus` varchar(250) NOT NULL,
  PRIMARY KEY (`TaskID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`TaskID`, `UserID`, `TaskName`, `TaskTime`, `TaskStatus`) VALUES
(1, 2, 'Auto-water System Check', '14:30:00', 'incomplete'),
(2, 2, 'Load Cargo', '15:30:00', 'incomplete'),
(3, 2, 'Evening Feeding Time', '18:00:00', 'incomplete'),
(4, 2, 'Morning Feeding Time', '08:10:00', 'incomplete'),
(17, 1, 'To check all systems function', '21:30:00', 'complete'),
(19, 2, 'Offload Cargo', '10:30:00', 'incomplete');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `UserID` int NOT NULL AUTO_INCREMENT,
  `UserName` varchar(100) NOT NULL,
  `UserEmail` varchar(100) NOT NULL,
  `UserPass` varchar(100) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `UserName`, `UserEmail`, `UserPass`) VALUES
(1, 'Louis', 'louis123@gmail.com', '123'),
(2, 'Melvin', 'mel@gmail.com', '1234'),
(3, 'Scott', 'scott@email.com', '123'),
(4, 'Peter', 'peter03@email.com', '123'),
(5, 'Andrew Tate', 'TopG@email.com', '123'),
(6, 'Ben Dover', 'Ben.D@email.com', '123');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `listings`
--
ALTER TABLE `listings`
  ADD CONSTRAINT `listings_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
