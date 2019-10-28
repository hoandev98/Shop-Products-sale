-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2016 at 03:44 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shop_cart_sessions_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(512) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `type` text NOT NULL,
  `sale` boolean NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='products that can be added to cart' AUTO_INCREMENT=41 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`,`type`, `sale`,`created`, `modified`) VALUES
(1, 'San Antonio Spurs Kawhi Leonard ', '&lt;p&gt;Kawhi Leonard San Antonio Spurs Ihone, made by Apple the official on court producers of NBA apparel and jerseys.&lt;/p&gt;\r\n&lt;p&gt;Leonard and 2 are printed on the back in authentic font.&lt;/p&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;Basic Print&lt;/li&gt;\r\n&lt;li&gt;Officially licensed NBA Product&lt;/li&gt;\r\n&lt;li&gt;NBA Hologram Sticker&lt;/li&gt;\r\n&lt;li&gt;Mens Sizing&lt;/li&gt;\r\n&lt;li&gt;100% Cotton&lt;/li&gt;\r\n&lt;li&gt;Adidas &quot;Go To Tee&quot;&lt;/li&gt;\r\n&lt;/ul&gt;', '4000.99','red','true', '2019-10-28 20:49:40', '2019-10-28 12:49:40'),

-- (40, 'For Mens San Antonio Spurs Kawhi Leonard #2 Cream White Christmas Day Swingman Basketball Jersey', '&lt;p&gt;This is 100% mesh polyester breathable and quick-dry jersey.&lt;/p&gt;\r\n&lt;p&gt;Player name and number graphics deliver classic style. priced to make you cheer.&lt;/p&gt;\r\n&lt;p&gt;It will be the best gift for you or your friend and family.&lt;/p&gt;', '32.00', '2016-11-02 20:15:38', '2016-11-02 12:15:38');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE IF NOT EXISTS `product_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='image files related to a product' AUTO_INCREMENT=105 ;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `name`, `created`, `modified`) VALUES
(1, 1, 'p1.jpg', '2019-10-28 20:58:02', '2019-10-28 12:58:02'),


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
