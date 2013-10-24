
/*Adults Clothing database*/



SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- ----------------------------------------------------
-- Table for Loging a user and register.
CREATE TABLE IF NOT EXISTS `login`(
     `id` int(11) NOT NULL auto_increment,
     `username` varchar(20) collate latin1_general_ci NOT NULL,
     `password` varchar(20) collate latin1_general_ci NOT NULL,
     PRIMARY KEY  (`id`)
)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1;


-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `serial` int(11) NOT NULL auto_increment,
  `name` varchar(20) collate latin1_general_ci NOT NULL,
  `email` varchar(80) collate latin1_general_ci NOT NULL,
  `address` varchar(80) collate latin1_general_ci NOT NULL,
  `phone` varchar(20) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`serial`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `customers`
--


-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `serial` int(11) NOT NULL auto_increment,
  `date` date NOT NULL,
  `customerid` int(11) NOT NULL,
  PRIMARY KEY  (`serial`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `orders`
--


-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `order_detail`
--


-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `serial` int(11) NOT NULL auto_increment,
  `name` varchar(20) collate latin1_general_ci NOT NULL,
  `description` varchar(255) collate latin1_general_ci NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(80) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Inserting data for table `products`
--

INSERT INTO `products` (`serial`, `name`, `description`, `price`, `picture`) VALUES
(1, 'Blythe Taper Jeans', 'A square top block that sits low on the hips with a dropped crotch, cropped shortened inseam and a tapered leg to create a definitive carrot silhouette', 700, 'images/ME060B-21-1.jpg'),
(2, 'Hart Reyna Jeans', 'A high rise, skinny fitting, standard length, 5 pocket jean.', 300, 'images/WE057D-162-1.jpg'),
(3, 'Mather Crew Sweater', 'A regular fitting, midweight crew neck sweater.', 168, 'images/MK050D-360-1.jpg'),
(4, 'Cargo Leather Biker Jacket', 'A slim fitting leather biker jacket.', 525, 'images/ML019A-398-1.jpg'),
(5, 'Print Cigarette Jeans', 'A square top jean with a regular crotch and skinny leg that sits low on the hips.', 155, 'images/MPJ893-5-1.jpg'),
(6, 'Scratch Leus Shirt', 'A relaxed fitting, long sleeved shirt.', 245, 'images/WM078D-250-3.jpg');


-- Table structure for table `products Description`

CREATE TABLE IF NOT EXISTS `description` (
  `serial` int(11) NOT NULL auto_increment,
  `name` varchar(20) collate latin1_general_ci NOT NULL,
  `description` varchar(255) collate latin1_general_ci NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(80) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

-- inserting on description


INSERT INTO `description` (`serial`, `name`, `description`, `price`, `picture`) VALUES
(1, 'Blythe Taper Jeans', 'A square top block that sits low on the hips with a dropped crotch, cropped shortened inseam and a tapered leg to create a definitive carrot silhouette', 700, 'images/ME060B-21-1.jpg'),
(2, 'Hart Reyna Jeans', 'A high rise, skinny fitting, standard length, 5 pocket jean.', 300, 'images/WE057D-162-1.jpg'),
(3, 'Mather Crew Sweater', 'A regular fitting, midweight crew neck sweater.', 168, 'images/MK050D-360-1.jpg'),
(4, 'Cargo Leather Biker Jacket', 'A slim fitting leather biker jacket.', 525, 'images/ML019A-398-1.jpg'),
(5, 'Print Cigarette Jeans', 'A square top jean with a regular crotch and skinny leg that sits low on the hips.', 155, 'images/MPJ893-5-1.jpg'),
(6, 'Scratch Leus Shirt', 'A relaxed fitting, long sleeved shirt.', 245, 'images/WM078D-250-3.jpg')