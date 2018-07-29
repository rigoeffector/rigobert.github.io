-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2018 at 04:39 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `ID` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `achievements` varchar(100) NOT NULL,
  `Pic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`ID`, `title`, `achievements`, `Pic`) VALUES
(3, 'tttttttttttttt', 'dddddddddd', '426965.jpg'),
(4, 'dfdfdf', 'fdfdf dfdfdfdfd', '323187.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `message` varchar(3000) NOT NULL,
  `dateadded` varchar(200) NOT NULL,
  `readen` varchar(30) NOT NULL,
  `readendate` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ID`, `name`, `email`, `telephone`, `message`, `dateadded`, `readen`, `readendate`) VALUES
(5, 'dsdsd', 'dsds@fdfdfdf.co', 'dsdsd', 'dsdsdsdsdddsdsdsd sdsdsd', '2018-07-26 02:52:59', '', ''),
(7, 'dsdsd', 'dsds@fdfdfdf.co', 'dsdsd', 'dsdsdsdsdddsdsdsd sdsdsd', '2018-07-26 02:53:21', 'yes', '2018-07-26 02:54:14');

-- --------------------------------------------------------

--
-- Table structure for table `crime`
--

CREATE TABLE `crime` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address1` varchar(20) NOT NULL,
  `address2` varchar(3000) NOT NULL,
  `Details` varchar(3000) NOT NULL,
  `dateadded` varchar(200) NOT NULL,
  `readen` varchar(30) NOT NULL,
  `readendate` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crime`
--

INSERT INTO `crime` (`ID`, `name`, `email`, `address1`, `address2`, `Details`, `dateadded`, `readen`, `readendate`) VALUES
(3, 'ssdsds', 'sdsds@fssffdf.com', 'dsfdfsd', 'sfsfdfdfdjg', 'gjghghg ghghg hg hgh g hg g hghghg ghgh hghghgh hghghgh', '2018-07-26 03:12:48', 'yes', '2018-07-26 03:12:59'),
(4, 'didos', 'idooo@gmail.com', 'Gatsibo', 'mbazi', 'fdffds svdfdfd fdfsdf  fdfdsfsd fdsf sdfdsfdsfsd fsd fsd f sd fsd f sd fsd fsd ', '2018-07-29 14:37:08', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(8) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `phone` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `birthday` varchar(60) NOT NULL,
  `user_image` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fname`, `lname`, `phone`, `email`, `birthday`, `user_image`, `password`) VALUES
(4, 'fdfdf', 'fdfdf', '3443', 'dds@gmm.com', '2018-07-16', '342821.jpg', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'didosdddddd', 'rahul', '0789898', 'didos@gmgmg.com', '2018-07-04', '322913.jpg', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'sdsddsds', 'sdsdsdsd', '3232', 'email.@df.fcm', '2018-07-24', '566017.jpg', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `ID` int(11) NOT NULL,
  `message` mediumtext NOT NULL,
  `bywho` varchar(40) NOT NULL,
  `dateadded` varchar(40) NOT NULL,
  `edited` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `approvedon` varchar(30) NOT NULL,
  `district` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`ID`, `message`, `bywho`, `dateadded`, `edited`, `status`, `approvedon`, `district`) VALUES
(2, 'Jun 22, 2018 - Find the place in the code where you wish to insert the link, and insert the following code: <a href="mailto:example@email.com">your anchor text</a> (replace ''example@email.com'' with the email address you wish to be entered into the To line in yo\r\n', 'coordinators', '2018-07-28 14:12:53', '2018-07-28 14:44:53', 'yes', '2018-07-28 14:47:58', ''),
(4, 'mailto is a Uniform Resource Identifier (URI) scheme for email addresses. It is used to produce ... Using "mailto" within an HTML document to generate a link for sending email: <a href="mailto:someone@example.com">Send email</a>.mailto is a Uniform Resource Identifier (URI) scheme for email addresses. It is used to produce ... Using "mailto" within an HTML document to generate a link for sending email: <a href="mailto:someone@example.com">Send email</a>.mailto is a Uniform Resource Identifier (URI) scheme for email addresses. It is used to produce ... Using "mailto" within an HTML document to generate a link for sending email: <a href="mailto:someone@example.com">Send email</a>.mailto is a Uniform Resource Identifier (URI) scheme for email addresses. It is used to produce ... Using "mailto" within an HTML document to generate a link for sending email: <a href="mailto:someone@example.com">Send email</a>.', 'secretary', '2018-07-28 14:30:48', '', 'yes', '2018-07-28 14:50:28', ''),
(5, 'mailto is a Uniform Resource Identifier (URI) scheme for email addresses. It is used to produce ... Using "mailto" within an HTML document to generate a link for sending email: <a href="mailto:someone@example.com">Send email</a>.mailto is a Uniform Resource Identifier (URI) scheme for email addresses. It is used to produce ... Using "mailto" within an HTML document to generate a link for sending email: <a href="mailto:someone@example.com">Send email</a>.mailto is a Uniform Resource Identifier (URI) scheme for email addresses. It is used to produce ... Using "mailto" within an HTML document to generate a link for sending email: <a href="mailto:someone@example.com">Send email</a>.mailto is a Uniform Resource Identifier (URI) scheme for email addresses. It is used to produce ... Using "mailto" within an HTML document to generate a link for sending email: <a href="mailto:someone@example.com">Send email</a>.', 'secretary', '2018-07-28 14:30:50', '', '', '', ''),
(6, 'mailto is a Uniform Resource Identifier (URI) scheme for email addresses. It is used to produce ... Using "mailto" within an HTML document to generate a link for sending email: <a href="mailto:someone@example.com">Send email</a>.mailto is a Uniform Resource Identifier (URI) scheme for email addresses. It is used to produce ... Using "mailto" within an HTML document to generate a link for sending email: <a href="mailto:someone@example.com">Send email</a>.', 'coordinators', '2018-07-28 14:41:44', '', '', '', ''),
(7, 'Documentation and examples for using Bootstrap custom progress bars featuring support for stacked bars, animated backgrounds, and text labels. ... We donâ€™t use the HTML5 <progress> eleDocumentation and examples for using Bootstrap custom progress bars featuring support for stacked bars, animated backgrounds, and text labels. ... We donâ€™t use the HTML5 <progress> eleDocumentation and examples for using Bootstrap custom progress bars featuring support for stacked bars, animated backgrounds, and text labels. ... We donâ€™t use the HTML5 <progress> eleDocumentation and examples for using Bootstrap custom progress bars featuring support for stacked bars, animated backgrounds, and text labels. ... We donâ€™t use the HTML5 <progress> eleDocumentation and examples for using Bootstrap custom progress bars featuring support for stacked bars, animated backgrounds, and text labels. ... We donâ€™t use the HTML5 <progress> eleDocumentation and examples for using Bootstrap custom progress bars featuring support for stacked bars, animated backgrounds, and text labels. ... We donâ€™t use the HTML5 <progress> eleDocumentation and examples for using Bootstrap custom progress bars featuring support for stacked bars, animated backgrounds, and text labels. ... We donâ€™t use the HTML5 <progress> eleDocumentation and examples for using Bootstrap custom progress bars featuring support for stacked bars, animated backgrounds, and text labels. ... We donâ€™t use the HTML5 <progress> eleDocumentation and examples for using Bootstrap custom progress bars featuring support for stacked bars, animated backgrounds, and text labels. ... We donâ€™t use the HTML5 <progress> eleDocumentation and examples for using Bootstrap custom progress bars featuring support for stacked bars, animated backgrounds, and text labels. ... We donâ€™t use the HTML5 <progress> eleDocumentation and examples for using Bootstrap custom progress bars featuring support for stacked bars, animated backgrounds, and text labels. ... We donâ€™t use the HTML5 <progress> eleDocumentation and examples for using Bootstrap custom progress bars featuring support for stacked bars, animated backgrounds, and text labels. ... We donâ€™t use the HTML5 <progress> eleDocumentation and examples for using Bootstrap custom progress bars featuring support for stacked bars, animated backgrounds, and text labels. ... We donâ€™t use the HTML5 <progress> eleDocumentation and examples for using Bootstrap custom progress bars featuring support for stacked bars, animated backgrounds, and text labels. ... We donâ€™t use the HTML5 <progress> ele', 'coordinators', '2018-07-28 15:10:14', '', '', '', 'Bugesera'),
(8, 'dfdfdfdfdfhttps://getbootstrap.com/docs/4.0/content/tables/\r\n\r\nDue to the widespread use of tables across third-party widgets like calendars and date pickers, we''ve designed our tables to be opt-in. Just add the base class ...\r\nâ€ŽExamples Â· â€ŽTable head options Â· â€ŽBordered table Â· â€ŽSmall table\r\nYou''ve visited this page 3 times. Last visit: 6/16/18https://getbootstrap.com/docs/4.0/content/tables/\r\n\r\nDue to the widespread use of tables across third-party widgets like calendars and date pickers, we''ve designed our tables to be opt-in. Just add the base class ...\r\nâ€ŽExamples Â· â€ŽTable head options Â· â€ŽBordered table Â· â€ŽSmall table\r\nYou''ve visited this page 3 times. Last visit: 6/16/18https://getbootstrap.com/docs/4.0/content/tables/\r\n\r\nDue to the widespread use of tables across third-party widgets like calendars and date pickers, we''ve designed our tables to be opt-in. Just add the base class ...\r\nâ€ŽExamples Â· â€ŽTable head options Â· â€ŽBordered table Â· â€ŽSmall table\r\nYou''ve visited this page 3 times. Last visit: 6/16/18https://getbootstrap.com/docs/4.0/content/tables/\r\n\r\nDue to the widespread use of tables across third-party widgets like calendars and date pickers, we''ve designed our tables to be opt-in. Just add the base class ...\r\nâ€ŽExamples Â· â€ŽTable head options Â· â€ŽBordered table Â· â€ŽSmall table\r\nYou''ve visited this page 3 times. Last visit: 6/16/18https://getbootstrap.com/docs/4.0/content/tables/\r\n\r\nDue to the widespread use of tables across third-party widgets like calendars and date pickers, we''ve designed our tables to be opt-in. Just add the base class ...\r\nâ€ŽExamples Â· â€ŽTable head options Â· â€ŽBordered table Â· â€ŽSmall table\r\nYou''ve visited this page 3 times. Last visit: 6/16/18https://getbootstrap.com/docs/4.0/content/tables/\r\n\r\nDue to the widespread use of tables across third-party widgets like calendars and date pickers, we''ve designed our tables to be opt-in. Just add the base class ...\r\nâ€ŽExamples Â· â€ŽTable head options Â· â€ŽBordered table Â· â€ŽSmall table\r\nYou''ve visited this page 3 times. Last visit: 6/16/18https://getbootstrap.com/docs/4.0/content/tables/\r\n\r\nDue to the widespread use of tables across third-party widgets like calendars and date pickers, we''ve designed our tables to be opt-in. Just add the base class ...\r\nâ€ŽExamples Â· â€ŽTable head options Â· â€ŽBordered table Â· â€ŽSmall table\r\nYou''ve visited this page 3 times. Last visit: 6/16/18https://getbootstrap.com/docs/4.0/content/tables/\r\n\r\nDue to the widespread use of tables across third-party widgets like calendars and date pickers, we''ve designed our tables to be opt-in. Just add the base class ...\r\nâ€ŽExamples Â· â€ŽTable head options Â· â€ŽBordered table Â· â€ŽSmall table\r\nYou''ve visited this page 3 times. Last visit: 6/16/18https://getbootstrap.com/docs/4.0/content/tables/\r\n\r\nDue to the widespread use of tables across third-party widgets like calendars and date pickers, we''ve designed our tables to be opt-in. Just add the base class ...\r\nâ€ŽExamples Â· â€ŽTable head options Â· â€ŽBordered table Â· â€ŽSmall table\r\nYou''ve visited this page 3 times. Last visit: 6/16/18', 'coordinators', '2018-07-28 15:49:16', '', '', '', 'Bugesera');

-- --------------------------------------------------------

--
-- Table structure for table `secretary`
--

CREATE TABLE `secretary` (
  `id` int(8) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL,
  `user_image` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `secretary`
--

INSERT INTO `secretary` (`id`, `name`, `phone`, `email`, `password`, `user_image`) VALUES
(2, 'saaaaa', '2333', 'didos@gmgmg.com', 'e10adc3949ba59abbe56e057f20f883e', '2128.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `ID` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `sdescription` varchar(70) NOT NULL,
  `description` varchar(4000) NOT NULL,
  `Pic` varchar(40) NOT NULL,
  `cap` varchar(300) NOT NULL,
  `caption` varchar(400) NOT NULL,
  `Pico` varchar(300) NOT NULL,
  `dateadded` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`ID`, `title`, `sdescription`, `description`, `Pic`, `cap`, `caption`, `Pico`, `dateadded`) VALUES
(4, 'ttttwwwww', 'ssssssssss', 'dddddddd vvvvvvvvv', '100418.jpg', 'cccccccc', '', '', '2018-07-26 02:11:31'),
(5, 'rvc title', 'SHORT DESCRIPTION', 'long description', '33682.jpg', 'dfdfdf', 'dsdsdsd', '62797.jpg', '2018-07-26 02:22:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `user_image` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `district` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `user_image`, `type`, `district`) VALUES
(1, 'Admin', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', 'admin', ''),
(12, 'policing', 'policing@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '232323232323', '857016.jpg', 'policing', ''),
(3, 'secretary', 'secretary@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '12345', '45846.jpg', 'secretary', ''),
(4, 'coordinators', 'coordinator@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0909', '660862.jpg', 'coordinator', 'Bugesera'),
(11, 'dododo', 'ddofodo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '3334343', '308645.jpg', 'policing', ''),
(10, 'dfd', 'yyyy@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '34343434', '685374.jpg', 'policing', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `crime`
--
ALTER TABLE `crime`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `secretary`
--
ALTER TABLE `secretary`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `crime`
--
ALTER TABLE `crime`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `secretary`
--
ALTER TABLE `secretary`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
