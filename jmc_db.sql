-- phpMyAdmin SQL Dump
-- version 3.3.2deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 31, 2011 at 04:09 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.2-1ubuntu4.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jmc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `idabout` int(11) NOT NULL,
  `title_about` varchar(255) DEFAULT NULL,
  `content_about` text,
  PRIMARY KEY (`idabout`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`idabout`, `title_about`, `content_about`) VALUES
(1, 'front lorem ipsum', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.'),
(2, 'left lorem ipsum', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.'),
(3, 'center lorem ipsum', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.'),
(4, 'right lorem ipsum', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.');

-- --------------------------------------------------------

--
-- Table structure for table `category_portofolio`
--

CREATE TABLE IF NOT EXISTS `category_portofolio` (
  `id_category_portofolio` int(11) NOT NULL,
  `title_category_portofolio` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_category_portofolio`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_portofolio`
--


-- --------------------------------------------------------

--
-- Table structure for table `category_setting`
--

CREATE TABLE IF NOT EXISTS `category_setting` (
  `id_category_setting` int(11) NOT NULL AUTO_INCREMENT,
  `title_category_setting` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_category_setting`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `category_setting`
--

INSERT INTO `category_setting` (`id_category_setting`, `title_category_setting`) VALUES
(1, 'contact'),
(2, 'sosial media'),
(3, 'header'),
(4, 'footer'),
(5, 'meta'),
(6, 'title');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `name_client` varchar(255) DEFAULT NULL,
  `content_client` text,
  `client_tumbh` text,
  PRIMARY KEY (`id_client`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_client`, `name_client`, `content_client`, `client_tumbh`) VALUES
(1, 'lorem ipsum', 'lorem ipsum', NULL),
(2, '3M', '3M Medan', '3M.gif'),
(3, '1001', '1001 Karoke & billiard', '1001.gif'),
(4, 'ABEL', 'ABEL \r\nJAKARTA', 'ABEL.gif'),
(5, 'borneo', NULL, 'borneo.gif'),
(6, 'brework', 'brework', 'brewok.gif'),
(7, 'Brussels', 'Brusels', 'brussels.gif'),
(8, 'centra', 'Centra', 'Centra.gif'),
(9, 'dedy', 'dedy', 'Dedy.gif'),
(10, 'dpool', 'dpool', 'dpool.gif'),
(11, 'empire', 'empire', 'empire.gif'),
(12, 'eternal', 'eternal', 'eternal.gif'),
(13, 'java', 'java', 'jaya.gif'),
(14, 'mongames', 'mongames', 'mongames.gif'),
(15, 'Odeon', 'Odeon', 'Odeon.gif'),
(16, 'pool house', 'pool house', 'pool-house.gif'),
(17, 'prostreet', 'prostreet', 'prostreet.gif'),
(18, 'vinix', 'Vinix', 'Vinix.gif');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int(11) NOT NULL,
  `title_contact` varchar(255) DEFAULT NULL,
  `content_contact` text,
  PRIMARY KEY (`id_contact`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `title_contact`, `content_contact`) VALUES
(1, 'lorem ipsum', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.');

-- --------------------------------------------------------

--
-- Table structure for table `geocode_cache`
--

CREATE TABLE IF NOT EXISTS `geocode_cache` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lng` double NOT NULL,
  `lat` double NOT NULL,
  `query` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `geocode_cache`
--

INSERT INTO `geocode_cache` (`id`, `lng`, `lat`, `query`) VALUES
(10, 110.368797, -7.797224, 'jl. magelang km.5 yogyakarta'),
(11, 110.3610443, -7.7762692, 'jalan magelang ,yogyakarta'),
(12, -1.7888458, 53.764243, '42 beanland gardens, wibsey, bradford, uk'),
(13, -1.579896, 53.8100346, '57 cardigan lane, leeds, uk'),
(14, 110.2042491, -7.7465382, 'nanggulan, kulon progo'),
(15, 110.3610443, -7.7762692, 'jalan magelang, yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `id_log` int(11) NOT NULL AUTO_INCREMENT,
  `time` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  `name_log` text,
  PRIMARY KEY (`id_log`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `log`
--


-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE IF NOT EXISTS `portofolio` (
  `id_portofolio` int(11) NOT NULL AUTO_INCREMENT,
  `title_portofolio` varchar(255) DEFAULT NULL,
  `content_portofolio` text,
  `pict_tumbh` text,
  `id_category_portofolio` int(11) NOT NULL,
  PRIMARY KEY (`id_portofolio`,`id_category_portofolio`),
  KEY `fk_portofolio_category_portofolio1` (`id_category_portofolio`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id_portofolio`, `title_portofolio`, `content_portofolio`, `pict_tumbh`, `id_category_portofolio`) VALUES
(1, 'lorem ipsum', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1),
(2, 'lorem ipsum', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1),
(3, 'sip', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1),
(4, 'joss', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `screenshot_portofolio`
--

CREATE TABLE IF NOT EXISTS `screenshot_portofolio` (
  `id_screenshot_portofolio` int(11) NOT NULL AUTO_INCREMENT,
  `title_screenshot` text,
  `id_portofolio` int(11) NOT NULL,
  `name_path` text NOT NULL,
  PRIMARY KEY (`id_screenshot_portofolio`,`id_portofolio`),
  KEY `fk_screenshot_portofolio_portofolio1` (`id_portofolio`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `screenshot_portofolio`
--

INSERT INTO `screenshot_portofolio` (`id_screenshot_portofolio`, `title_screenshot`, `id_portofolio`, `name_path`) VALUES
(1, 'screenshot', 1, '600x300.gif'),
(3, 'sip', 1, '600x300.gif'),
(4, 'miniu', 1, '600x300.gif'),
(5, 'sip', 1, '600x300.gif');

-- --------------------------------------------------------

--
-- Table structure for table `setting_content`
--

CREATE TABLE IF NOT EXISTS `setting_content` (
  `id_setting` int(11) NOT NULL AUTO_INCREMENT,
  `title_setting` varchar(255) DEFAULT NULL,
  `content_setting` text,
  `id_category_setting` int(11) NOT NULL,
  PRIMARY KEY (`id_setting`,`id_category_setting`),
  KEY `fk_setting_content_category_setting` (`id_category_setting`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `setting_content`
--

INSERT INTO `setting_content` (`id_setting`, `title_setting`, `content_setting`, `id_category_setting`) VALUES
(1, 'contact', 'DanieL, 0274 - 8377 686\r\nT-Sel : 0821 3890 4125\r\nXL: 0818 0277 \r\ne-mail : jogjamediacenter@yahoo.com', 1),
(2, 'footer', '\r\nJOGJA MEDIA CENTER\r\nJl. Magelang Km.5 Kutu Dukuh Ruko No.3 Selokan Mataram\r\nYogyakarta', 4),
(3, 'header', 'Jogja Media Center', 3),
(4, 'sosial_facebook', 'facebook.com', 2),
(5, 'sosial_twitter', 'pujexx', 2),
(6, 'sosial_ym', 'poedjex', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_ci`
--

CREATE TABLE IF NOT EXISTS `user_ci` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` int(4) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_ci`
--

INSERT INTO `user_ci` (`id`, `username`, `password`, `email`, `level`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@example.com', 1, '1');
