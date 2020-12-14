-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2017 at 01:14 PM
-- Server version: 5.6.14
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE IF NOT EXISTS `tbl_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `count_message` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `post_id` varchar(100) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `upfile` text NOT NULL,
  `date_time` varchar(111) NOT NULL,
  `status` varchar(30) NOT NULL,
  `update_admin` varchar(100) NOT NULL,
  `comment_type` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `up_date` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`id`, `count_message`, `title`, `post_id`, `subject`, `description`, `upfile`, `date_time`, `status`, `update_admin`, `comment_type`, `comment`, `up_date`) VALUES
(13, 1, 'complaint', '3', 'Test Complaint', 'Or neglected agreeable of discovery concluded oh it sportsman. Week to time in john. Son elegance use weddings separate. Ask too matter formed county wicket oppose talent. He immediate sometimes or to dependent in. Everything few frequently discretion surrounded did simplicity decisively. Less he year do with no sure loud. Or neglected agreeable of discovery concluded oh it sportsman. Week to time in john. Son elegance use weddings separate. Ask too matter formed county wicket oppose talent. He immediate sometimes or to dependent in. Everything few frequently discretion surrounded did simplicity decisively. Less he year do with no sure loud. ', 'Client Management Dashboard (2).docx', 'March 19, 2017, 12:59 pm', 'Seen', 'Motin Mia', 'Regular', '', 'March 27, 2017, 12:39 pm'),
(14, 1, 'idea', '3', 'data test', 'Or neglected agreeable of discovery concluded oh it sportsman. Week to time in john. Son elegance use weddings separate. Ask too matter formed county wicket oppose talent. He immediate sometimes or to dependent in. Everything few frequently discretion surrounded did simplicity decisively. Less he year do with no sure loud. Or neglected agreeable of discovery concluded oh it sportsman. Week to time in john. Son elegance use weddings separate. Ask too matter formed county wicket oppose talent. He immediate sometimes or to dependent in. Everything few frequently discretion surrounded did simplicity decisively. Less he year do with no sure loud. ', '', 'March 19, 2017, 12:59 pm', 'Pending', '', '', '', ''),
(15, 1, 'complaint', '1', 'tets byugyusa yuhgausdv yugyads', 'It real sent your at. Amounted all shy set why followed declared. Repeated of endeavor mr position kindness offering ignorant so up. Simplicity are melancholy preference considered saw companions. Disposal on outweigh do speedily in on. Him ham although thoughts entirely drawings. Acceptance unreserved old admiration projection nay yet him. Lasted am so before on esteem vanity oh. \r\n', '', 'March 19, 2017, 1:04 pm', 'Seen', 'Motin Mia', 'Urgent', '', 'March 27, 2017, 12:42 pm'),
(16, 1, 'complaint', '13', 'test', 'test', '', 'March 25, 2017, 9:24 am', 'Seen', '', '', '', ''),
(17, 1, 'complaint', '13', 'test', 'now test', '', 'March 25, 2017, 9:24 am', 'Pending', '', '', '', ''),
(18, 1, 'idea', '1', 'Test ', 'test data', 'Desert.jpg', 'March 27, 2017, 10:35 am', 'Seen', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_id` varchar(111) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(120) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` enum('Admin','Employee') NOT NULL DEFAULT 'Employee',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `admin_id`, `username`, `password`, `name`, `type`) VALUES
(1, 'Jamal Uddin', 'shohag', 'ca4b8968f24ee88bb0dbd77312b2a095', 'Md shohag', 'Employee'),
(2, '', 'jamal', '74f56399c89f4bd03ff5e85b6bf4e85f', 'Jamal Uddin', 'Admin'),
(3, 'Jamal Uddin', 'kamal', 'aa63b0d5d950361c05012235ab520512', 'Md.Kamal Ahmed', 'Employee'),
(4, '', 'motin', '8084e925f5e23393f53ef9bdb442a100', 'Motin Mia', 'Admin'),
(9, '2', 'abdulaziz', '4911e516e5aa21d327512e0c8b197616', 'Abdulaziz', 'Admin'),
(11, 'Jamal Uddin', 'sanhori', '0623064f1d555bbad22ad7c820950af9', 'Sanhori', 'Employee'),
(13, 'Motin Mia', 'kka', 'ec7b078a5b8df149983c1210d4a1b1db', 'kKA', 'Employee');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
