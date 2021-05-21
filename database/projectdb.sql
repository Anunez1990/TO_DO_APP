-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:4306
-- Generation Time: Apr 20, 2021 at 04:51 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdb`
--

-- --------------------------------------------------------
USE `an74`;
--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `taskID` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Description` varchar(400) NOT NULL,
  `Urgency` varchar(30) NOT NULL,
  `DueDate` datetime NOT NULL DEFAULT current_timestamp(),
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`taskID`, `Username`, `Title`, `Description`, `Urgency`, `DueDate`, `Status`) VALUES
(1, 'Paul15', 'Final Project', 'Create a project for manage to do tasks', 'important', '2021-05-06 00:00:00', 1),
(2, 'alexn23', 'Homework3', 'Create two classes files to add new products and new categories en db demo', 'normal', '2021-04-15 00:00:00', 1),
(3, 'Paul15', 'Homework 7', 'Test session object', 'important', '2021-04-22 14:02:48', 1),
(7, 'Paul15', 'homework5', 'final project', 'Very important', '2021-04-14 20:55:00', 0),
(8, 'Paul15', 'Assigment 10', 'project php', 'Very important', '2021-04-28 09:50:00', 1),
(10, 'Samy999', 'TASK 100', 'include all chapters', 'Very important', '2021-04-22 19:10:00', 1),
(11, 'Samy999', 'Quiz 500', 'quiz of chapters 5 and 6', 'Very important', '2021-04-27 19:36:00', 0),
(16, 'Lilinnr5', 'TASK 1000', 'submit the assigment', 'Very important', '2021-04-21 22:37:00', 0),
(20, 'Lilinnr5', 'homework5', 'Binomial distribution', 'Important', '2021-05-05 21:36:00', 1),
(21, 'Lilinnr5', 'Final test all chapters', 'Test', 'Very important', '2021-04-27 22:11:00', 1),
(22, 'Paul15', 'Quiz 5', 'final test', 'Very important', '2021-04-27 09:48:00', 0),
(23, 'Alex07', 'homework4', 'include all chapters', 'Important', '2021-04-27 10:02:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `FirstName` varchar(40) NOT NULL,
  `LastName` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Email`, `Password`, `FirstName`, `LastName`) VALUES
('Alex07', 'alex07@gmail.com', 'Alex2300', 'Alex', 'Nunez'),
('alexn23', 'alex@hotmail.com', 'Anunez1990', 'Alex', 'Nunez'),
('Bruno90', 'bruno90@gmail.com', 'Bruno900', 'Bruno', 'Dias'),
('Charly07', 'charly07@gmail.com', '07Charly', 'Charly', 'Brown'),
('Lilinnr5', 'lili@email.com', 'Lili1999', 'Liliana ', 'Nunez'),
('Paul15', 'paul10@gmail.com', 'Paul1234', 'Paul', 'Smith'),
('Samy999', 'samy9@gmail.com', 'Samy0999', 'Samy', 'McAdams');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`taskID`),
  ADD KEY `FK_Username` (`Username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `taskID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `user` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
