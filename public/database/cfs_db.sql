-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 04:11 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cfs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cfs_data`
--

CREATE TABLE `cfs_data` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about` text COLLATE utf8_unicode_ci NOT NULL,
  `view` int(11) NOT NULL,
  `star` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cfs_data`
--

INSERT INTO `cfs_data` (`id`, `image`, `name`, `address`, `about`, `view`, `star`) VALUES
(1, 'http://localhost/CoffeeStoreWeb/public/uploads/17308764_1879495292322136_2284954227869868252_n.jpg', 'Coffee House Cao Thắng', '86 - 88, Cao Thắng, Quận 3, TP. HCM', '\"Đi cà phê\" từ lâu không đơn thuần chỉ là uống một tách cà phê mà còn là dịp gặp mặt và trò chuyện cùng bạn bè. Tại The Coffee House, chúng tôi trân trọng và đề cao giá trị kết nối giữa con người và trải nghiệm của khách hàng.', 12, 4),
(2, 'http://localhost/CoffeeStoreWeb/public/uploads/foody-mobile-h1-jpg-888-635974314774218377.jpg', 'Rooftop Grand Lounge', 'Tầng 20 Grand Hotel, 8 Đồng Khởi,  Quận 1, TP. HCM', 'MỘT BUỔI TIỆC BUFFET TUYỆT VỜI CÙNG GRAND HOTEL SÀI GÒN', 42, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cfs_data`
--
ALTER TABLE `cfs_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cfs_data`
--
ALTER TABLE `cfs_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
