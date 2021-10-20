-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 16, 2021 at 08:28 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paws_heaven`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `Order_ID` varchar(20) NOT NULL,
  `Member_ID` varchar(20) NOT NULL,
  `Product_ID` varchar(20) NOT NULL,
  `Review` text NOT NULL,
  PRIMARY KEY (`Order_ID`,`Member_ID`,`Product_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `Email` varchar(50) NOT NULL,
  `Member_Name` varchar(50) NOT NULL,
  `Contact_Number` varchar(11) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`Email`, `Member_Name`, `Contact_Number`, `Address`, `Password`) VALUES
('mm@gmail.com', 'mmm', '0138976672', 'mm', 'mm');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `Message_ID` int(50) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` text NOT NULL,
  PRIMARY KEY (`Message_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `Order_ID` varchar(20) NOT NULL,
  `Member_ID` varchar(20) NOT NULL,
  `Product_ID` varchar(20) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` float NOT NULL,
  `Purchase_Date` date NOT NULL,
  `Order_Status` text NOT NULL,
  PRIMARY KEY (`Order_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `Product_ID` int(20) NOT NULL AUTO_INCREMENT,
  `Product_Name` varchar(50) NOT NULL,
  `Brand` varchar(50) NOT NULL,
  `Type of Animal` varchar(20) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `Description` text NOT NULL,
  `Price` float NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Product_Status` varchar(40) NOT NULL,
  `Supplier_ID` varchar(20) NOT NULL,
  `Staff_ID` varchar(20) NOT NULL,
  PRIMARY KEY (`Product_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `Product_Name`, `Brand`, `Type of Animal`, `Category`, `Description`, `Price`, `Quantity`, `Product_Status`, `Supplier_ID`, `Staff_ID`) VALUES
(1, 'Acana Adult Dog Chicken & Greens Dry Dog Food', 'Acana', 'Dog', 'Discount', '11.4kg per pack. The product include 2 2/3kg Free-run chicken, 700g Wild-caught fish, 240g Cage-free eggs.', 278, 100, 'In Stock', 'S001', 'W001'),
(2, 'Addiction Grain Free Kangaroo & Apple Dry Dog Food', 'Addiction', 'Dog', 'Food', '1.8kg per pack. The product discover Australia’s best-kept pet food secret, the Wild Kangaroo, with Addiction’s Wild Kangaroo & Apples. Wild kangaroo meat contains the highest levels of Conjugated Linoleic Acid (CLA) of any red meat. Wild kangaroo meat is also prized as a lean, high-quality game meat with only 2% fat. This unique formula contains apples rich in antioxidants and pectin for vitality and digestive health. Addiction’s Wild Kangaroo & Apples ensures your dog receives a balanced, wellness-giving meal with an unbeatable flavor.', 74.8, 100, 'In Stock', 'S002', 'W001'),
(3, 'Aixia Kin-Can Mini Tuna With Dried Skipjack', 'Aixia', 'Cat', 'Discount', '70g per can. The product is wet cat canned food made in Japan. It is Tuna based with water canned food.', 4.7, 100, 'In Stock', 'S003', 'W001'),
(4, 'Acana Grasslands Cat Dry Food', 'Acana', 'Cat', 'Food', '1.8kg per pack. ACANA Grasslands is brimming with free-run chicken, turkey, and duck, cage-free eggs, and wild-caught fish, in WholePrey ratios of meat, organs, cartilage, and bone. ', 97.2, 100, 'In Stock', 'S001', 'W001'),
(5, 'Cindy & Friends Tofu Litter Green Tea ', 'Cindy & Friends', 'Cat', 'Hygiene', '2.8kg per pack. Cindy & Friends Eco-Friendly & Ultra Absorbent Tofu Litter with Qik-Clump technology + antibacterial is made from 100% natural plant based fibers. Created from human grade food fibers, our tofu litter has over three times the absorption power, trapping and locking in liquids almost instantly. The eco-friendly antibacterial technology kills harmful bacteria, neutralizes toxins and smell from bio-waste thus, keeping the environment clean from unpleasant odour. Formulated free of chemicals, our tofu litter does not contain any synthetic additives and is 100% sustainable and biodegradable.', 20.9, 100, 'In Stock', 'S004', 'W001'),
(6, 'DC Super Absorbent Doggy Pads', 'DC', 'Dog', 'Hygiene', '50 pcs per pack. Dimension: 60cm x 45cm', 49, 200, 'In Stock', 'S005', 'W001'),
(7, 'Trixie Denta Fun Ball 6cm Dog Toy', 'Trixie', 'Dog', 'Toys', 'The product is made of natural rubber. Its diameter is 6cm', 33.8, 50, 'In Stock', 'S006', 'W001'),
(8, 'Trustie Carrier', 'Trustie', 'Dog', 'Cage', 'A carrier for cats and small dogs. Size:\r\n54 x 33.5 x 30 cm', 130, 40, 'In Stock', 'S008', 'W001'),
(9, 'Himalaya Immunol Tablets for Immunity ', 'Himalaya', 'Dog', 'Vitamins', '60 tabs per bottle. The product is suitable for cats and dogs.', 30, 40, 'In Stock', 'S007', 'W001'),
(10, 'Trixie Cat Activity Brain Mover Strategy Game', 'Trixie', 'Cat', 'Toys', 'The product is made of plastic and it has 4 different modules that present different tasks, including a board game with 2 ball-shaped covers and various small hollows and drawers. It is non-slip due to rubber feet. Size:25x20cm', 154.9, 30, 'In Stock', 'S006', 'W001'),
(11, 'Himalaya Digyton Digestive Drops', 'Himalaya', 'Cat', 'Vitamins', '30ml per bottel. Digyton is a herbomineral formulation that works to stimulate the appetite and reduce attacks of common gastrointestinal complaints. These include diarrhoea, colic distention, flatulence, constipation, cramps, and other GI upsets.', 16, 100, 'In Stock', 'S007', 'W001'),
(12, 'Trustie Carrier (Assorted)', 'Trustie', 'Cat', 'Cage', 'Size:48.5 X W 32 X H 30 cm', 89.6, 30, 'In Stock', 'S008', 'W001'),
(13, 'Doggy Mystery Box', 'Aixia', 'Dog', 'Packages', 'There are different types of products including food, toys, cage and so on in the mystery box. The value of the box is over RM350.', 289, 30, 'In Stock', 'S003', 'W001'),
(14, 'Kittie Mystery Box', 'Acana', 'Cat', 'Packages', 'There are different types of products including food, toys, cage and so on in the mystery box. The value of the box is over RM400.', 350, 30, 'In Stock', 'S001', 'W001');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

DROP TABLE IF EXISTS `shopping_cart`;
CREATE TABLE IF NOT EXISTS `shopping_cart` (
  `Member_ID` varchar(20) NOT NULL,
  `Product_ID` varchar(20) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` float NOT NULL,
  PRIMARY KEY (`Member_ID`,`Product_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `Staff_ID` varchar(20) NOT NULL,
  `Staff_Name` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Position` varchar(30) NOT NULL,
  PRIMARY KEY (`Staff_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Staff_ID`, `Staff_Name`, `Password`, `Position`) VALUES
('W001', 'Ahmad', 'W001Ahmad', 'Manager'),
('W002', 'Catherine', 'W002Catherine', 'Staff'),
('W003', 'Bob', 'W003Bob', 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `staff_contact`
--

DROP TABLE IF EXISTS `staff_contact`;
CREATE TABLE IF NOT EXISTS `staff_contact` (
  `Staff_ID` varchar(20) NOT NULL,
  `Contact_Number` varchar(11) NOT NULL,
  PRIMARY KEY (`Contact_Number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_contact`
--

INSERT INTO `staff_contact` (`Staff_ID`, `Contact_Number`) VALUES
('W001', '0138279911'),
('W002', '0129862789'),
('W003', '01111927711');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE IF NOT EXISTS `supplier` (
  `Supplier_ID` varchar(20) NOT NULL,
  `Supplier_Name` varchar(50) NOT NULL,
  `Street` varchar(40) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Zipcode` varchar(5) NOT NULL,
  `State` varchar(30) NOT NULL,
  PRIMARY KEY (`Supplier_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`Supplier_ID`, `Supplier_Name`, `Street`, `City`, `Zipcode`, `State`) VALUES
('S001', 'Acana Sdn. Bhd.', 'Jalan 1', 'Batu Pahat', '83000', 'Johor'),
('S002', 'Addiction Sdn. Bhd.', 'Jalan 9', 'Cheras', '43200', 'Kuala Lumpur'),
('S003', 'Aixia Sdn. Bhd.', 'Jalan 7', 'Cheras', '43200', 'Kuala Lumpur'),
('S004', 'Cindy & Friends Sdn. Bhd.', 'Jalan 23', 'Kuala Lumpur', '50000', 'Kuala Lumpur'),
('S005', 'DC Sdn. Bhd.', 'Jalan 5', 'Ayer Tawar', '32400', 'Perak'),
('S006', 'Trixie Sdn. Bhd.', 'Jalan 8', 'Batu Pahat', '83000', 'Johor'),
('S007', 'Himalaya Sdn. Bhd.', 'Jalan 1/4', 'Shah Alam', '40000', 'Selangor'),
('S008', 'Trustie Sdn. Bhd.', 'Jalan 1', 'Shah Alam', '40000', 'Selangor');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_contact`
--

DROP TABLE IF EXISTS `supplier_contact`;
CREATE TABLE IF NOT EXISTS `supplier_contact` (
  `Supplier_ID` varchar(20) NOT NULL,
  `Contact_Number` varchar(11) NOT NULL,
  PRIMARY KEY (`Contact_Number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_contact`
--

INSERT INTO `supplier_contact` (`Supplier_ID`, `Contact_Number`) VALUES
('S001', '079287718'),
('S001', '078291182'),
('S002', '039281739'),
('S003', '039928192'),
('S003', '039281199'),
('S004', '039281128'),
('S005', '0192887119'),
('S005', '0128729918');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
