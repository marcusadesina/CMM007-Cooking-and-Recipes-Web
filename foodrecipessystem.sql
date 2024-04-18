-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2024 at 11:20 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodrecipessystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblrecipes_info`
--

CREATE TABLE `tblrecipes_info` (
  `id` int(11) NOT NULL,
  `RecipeCategories` varchar(100) NOT NULL,
  `RecipesName` varchar(100) NOT NULL,
  `ImagePath` varchar(10000) NOT NULL,
  `videoPath` varchar(2000) NOT NULL,
  `Used_Ingredients` varchar(1000) NOT NULL,
  `Instructions` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblrecipes_info`
--

INSERT INTO `tblrecipes_info` (`id`, `RecipeCategories`, `RecipesName`, `ImagePath`, `videoPath`, `Used_Ingredients`, `Instructions`) VALUES
(7, 'Dessert', 'Crips Noddle', 'uploads/noddles.jpg', '', '1. Noddles\r\n2. Water\r\n3. Onions\r\n4. Seasonings and Spices', 'Heat 1-2 tbsp vegetable oil in a frying pan to medium \r\nhigh heat and lay the noodles in the pan to form a round nest of noodles. \r\nOnce you have an even layer of noodles in the pan, press the noodles down with a spatula so that the base starts to crisp up nicely and the noodles stay in their round shape.'),
(8, 'Soup & Stew', 'Banga Soup', 'uploads/banga soup.jpg', '', '1. Canned palm nut fruit concentrate: substitute it for fresh palm fruit if it is available to you\r\n2. Banga spice (you can buy a ready mix or simply make your own by blending Ataiko and Irugeje in a dry mill)\r\n3. Beletete leaves: substitute with dried basil, bitter leaf or dried scent leaves\r\n\r\nAssorted beef: In Nigerian context, assorted beef is referred to as meat offal, eg. Tripe (shaki), lungs, liver, cow leg etc\r\nFresh Shrimps\r\nGround crayfish: substitute with dried shrimps\r\nscotch bonnet chilli: While yellow scotch bonnet is recommended, I just used anyone available to me.\r\n\r\nDried cod (panla): substitute with smoked fish\r\nPeriwinkle (optional)\r\nSeasoning cubes and beef stock\r\nSalt\r\nWater', 'Place your pot of palm oil extract on high heat and cook until red oil comes up to the surface of the Banga. If the soup is not as thick as you want it to be, then cook until it thickens. Add your cooked beef, dry fish and stock to the soup.'),
(9, 'Salads', 'ewedu soup', 'uploads/Ofe-Okazi-4.jpg', '', 'fdjgfkg', 'gkfcgk');

-- --------------------------------------------------------

--
-- Table structure for table `tblregister_user`
--

CREATE TABLE `tblregister_user` (
  `id` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Passwords` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblregister_user`
--

INSERT INTO `tblregister_user` (`id`, `Username`, `Email`, `Passwords`) VALUES
(8, 'adesinamarcus', 'adesinamarcus@gmail.com', '12345'),
(9, 'adesinamarcus', 'adesinamarcus@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblrecipes_info`
--
ALTER TABLE `tblrecipes_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblregister_user`
--
ALTER TABLE `tblregister_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblrecipes_info`
--
ALTER TABLE `tblrecipes_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblregister_user`
--
ALTER TABLE `tblregister_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
