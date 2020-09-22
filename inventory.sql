-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2018 at 08:23 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `status`) VALUES
(1, 'HP', '1'),
(4, 'Lenovo', '1'),
(6, 'Samsung', '1'),
(7, 'Apple', '1');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `status`) VALUES
(2, 'Computer', '1'),
(4, 'Scanner', '1'),
(5, 'Networking Device', '1'),
(6, 'Computer Accessories', '1');

-- --------------------------------------------------------

--
-- Table structure for table `inventories`
--

CREATE TABLE `inventories` (
  `id` int(11) NOT NULL,
  `item_serial` varchar(255) NOT NULL,
  `user_serial` varchar(255) NOT NULL,
  `vendor_name` varchar(255) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `bill_image` text NOT NULL,
  `inventory_image` text NOT NULL,
  `adding_date` varchar(255) NOT NULL,
  `purchase_date` varchar(255) NOT NULL,
  `warranty_ex_date` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `item_condition` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `assignment_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventories`
--

INSERT INTO `inventories` (`id`, `item_serial`, `user_serial`, `vendor_name`, `brand_name`, `category_name`, `item_name`, `bill_image`, `inventory_image`, `adding_date`, `purchase_date`, `warranty_ex_date`, `quantity`, `item_condition`, `description`, `assignment_status`) VALUES
(2, '545345', '101462', 'new vendor', 'HP updated', 'First category1', 'Laptop', 'uploads/inventory_images/5b31cde8257e7.pdf', '<p>You did not select a file to upload.</p><p>You did not select a file to upload.</p>', '', '06/10/2018', '01/02/2019', 2, 'good', 'fhyfjty nyukyuk yr6yry ertyerter', 1),
(8, '', '101462454', 'new vendor', 'HP updated', 'First category1', 'Desktop Computer', 'uploads/inventory_images/5b22319c9fe6d.pdf', '', '', '06/06/2018', '06/08/2018', 2, '', 'gtfhtrh jtyjtyjty jtyjtr grr&nbsp;', 1),
(9, 'y4463464cfdfd', '101462', 'new vendor', 'HP updated', 'First category1', 'Desktop Computer', '', '', '06/12/2018', '06/13/2018', '06/08/2018', 3, 'average', 'thtrfjyu, tgtrger er ter rty yf hty ryer grhyfjyuktrte ytye r', 1),
(11, '345345345343', '10146245', 'new vendor', 'HP updated', 'First category1', 'Laptop', '<p>You did not select a file to upload.</p>', '', '06/12/2018', '06/13/2018', '06/08/2018', 1, '', 'ty&nbsp; &nbsp;tyjhty tyhtyy tyyh&nbsp; y 56y y y y&nbsp; ytytyghghjyujet5hty&nbsp; &nbsp;t&nbsp; &nbsp;tyy 5t y yh56yh yt h tyhwega erklgnk gjgioegu0 gurjs fk&nbsp; takdm ask asdf jkl; asdf jkl;jjkl;&nbsp;', 1),
(13, '11111111', '101462', 'new vendor', 'HP updated', 'First category1', 'Laptop', '', '', '06/12/2018', '06/13/2018', '06/08/2018', 2, 'poor', 'hgyurf76 f4u676 f767y78 78', 1),
(14, '533', '101462454', '24/7 solutions Ltd', 'HP updated', 'Canon Scanner', 'Mouse', 'uploads/inventory_images/5b30971f16403.pdf', '', '06/10/2018', '06/10/2018', '06/15/2018', 2, '', 'gfhfth kkt teart g', 0),
(15, '44234', '101462', 'Global Brand', 'HP', 'Computer', 'Laptop', '', '', '07/09/2018', '', '', 1, '', 'fdgr dfgd&nbsp; gdfg dfgdfgdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `inventory_users`
--

CREATE TABLE `inventory_users` (
  `id` int(11) NOT NULL,
  `user_serial` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_department` varchar(255) NOT NULL,
  `user_designation` varchar(255) NOT NULL,
  `user_location` varchar(255) NOT NULL,
  `user_ip` varchar(255) NOT NULL,
  `user_status` int(11) NOT NULL DEFAULT '1',
  `assigned_inventory` varchar(255) NOT NULL,
  `inventory_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory_users`
--

INSERT INTO `inventory_users` (`id`, `user_serial`, `user_name`, `user_department`, `user_designation`, `user_location`, `user_ip`, `user_status`, `assigned_inventory`, `inventory_id`) VALUES
(1, '101462', 'Md. Akmal Hossain', 'JPL', 'Officer IT', 'H/O', '172.16.0.51', 1, '15', '12'),
(3, '1014625', 'Md. Aminul Islam', 'JPL', 'Officer IT', 'H/O', '172.16.0.43', 1, '7', ''),
(4, '101462454', 'Md. Zoha', 'JPL', 'Officer IT', 'H/O', '172.16.0.434', 1, '8', ''),
(5, '101462543', 'Md. Aminul Islam', 'JPL', 'Officer IT', 'H/O', '172.16.0.43', 1, '3', ''),
(6, '110130', 'Akmal Hossain', 'JPL', 'Officer IT', 'H/O', '172.16.0.121', 0, '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `vendor_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `item_price` varchar(255) NOT NULL,
  `buyer_name` varchar(255) NOT NULL,
  `purchase_date` varchar(255) NOT NULL,
  `warranty_ex_date` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `bill_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `item_name`, `vendor_name`, `quantity`, `item_price`, `buyer_name`, `purchase_date`, `warranty_ex_date`, `description`, `bill_image`) VALUES
(1, 'Toner', 'Global Brand', 2, '1000', 'Aminul Islam (IT)', '07/09/2018', '12/14/2018', 'gtgtrtyhty', 'uploads/purchase_files/5b499dd5a668d.pdf'),
(2, 'Laptop', 'Metronet', 2, '30000', 'Akmal (IT)', '06/20/2018', '06/21/2018', 'testing purposes...', 'uploads/purchase_files/5b505aee13393.png'),
(3, 'Mouse', 'Computer', 1, '', '', '06/06/2018', '06/29/2018', 'another new item for testing...', 'uploads/purchase_files/5b46e8df55831.pdf'),
(4, 'Laptop', '24/7 solutions Ltd', 1, '35000', 'Akmal (IT)', '06/06/2018', '07/20/2018', 'Testing', '<p>You did not select a file to upload.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `adding_date` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `item_name`, `category_name`, `quantity`, `adding_date`, `status`) VALUES
(1, 'Scanner', 'Scanner', 20, '06/10/2018', 1),
(2, 'Laptop', 'Computer', 5, '06/10/2018', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `mobile_number` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `username`, `mobile_number`, `password`, `status`) VALUES
(2, 'Md. Akmal Hossain', 'akmalhossain307@gmail.com', '01738279545', '21232f297a57a5a743894a0e4a801fc3', 1),
(3, 'Md. Akmal Hossain', 'akmal110130@gmail.com', '534534', '202cb962ac59075b964b07152d234b70', 1),
(4, 'Shuchi', 'shuchi@yesbd.com', '1111111', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `vendor_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `vendor_name`, `status`) VALUES
(2, 'Global Brand', '1'),
(3, 'Flora  Ltd', '1'),
(4, '24/7 solutions Ltd', '1'),
(6, 'Metronet', '1'),
(7, 'EFA Computer', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventories`
--
ALTER TABLE `inventories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory_users`
--
ALTER TABLE `inventory_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inventories`
--
ALTER TABLE `inventories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `inventory_users`
--
ALTER TABLE `inventory_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
