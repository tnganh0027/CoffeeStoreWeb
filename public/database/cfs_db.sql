-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2017 at 12:20 PM
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
-- Table structure for table `cfm_data`
--

CREATE TABLE `cfm_data` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `about` text COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link_fb` text COLLATE utf8_unicode_ci NOT NULL,
  `link_ins` text COLLATE utf8_unicode_ci NOT NULL,
  `link_tw` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cfm_data`
--

INSERT INTO `cfm_data` (`id`, `image`, `about`, `name`, `idname`, `link_fb`, `link_ins`, `link_tw`) VALUES
(1, 'http://localhost/CoffeeStoreWeb/public/uploads/mem_1.jpg', '기억하나요 우리 함께 했던 시간 L.O.V.E LUV.', 'Binh Nguyen Khanh', 'Habbangie &hearts;', 'https://www.facebook.com/cray.jjj', '', ''),
(3, 'http://localhost/CoffeeStoreWeb/public/uploads/mem_3.jpg', '내 몸맨 nice nice body 잘빠진 다리 쌔끈한 허리.', 'Anh Truong Ngoc', 'Hyomin &hearts;', 'https://www.facebook.com/profile.php?id=100010150110239', '', ''),
(4, 'http://localhost/CoffeeStoreWeb/public/uploads/mem_2.jpg', '너와 나 지금부터 잠시 12345. 눈을 감고 가만히 서 12345.', 'Phuong Do Hoang Minh', 'Mamarong &hearts;', 'https://www.facebook.com/phuong.dohoang07', '', ''),
(5, 'http://localhost/CoffeeStoreWeb/public/uploads/mem_4.jpg', 'How are you 내 사랑 잃어버린 조각 보고 싶어 울다 지칠 때 난.', 'Tri Le Nguyen Minh', 'Elsie Ej &hearts;', 'https://www.facebook.com/tri.le.7186', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cfs_comment`
--

CREATE TABLE `cfs_comment` (
  `id` int(11) NOT NULL,
  `content` text COLLATE utf32_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_store` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `cfs_comment`
--

INSERT INTO `cfs_comment` (`id`, `content`, `id_user`, `id_store`) VALUES
(1, 'Đây là một quán ngon !\n', 1, 10),
(3, 'Rất ngon l&agrave; đằng kh&aacute;c !\n', 1, 10),
(4, 'Bạn n&ecirc;n thử n&oacute; xem !', 1, 10),
(5, 'Cũng đi qu&aacute;n n&agrave;y rồi ! Được lắm đ&oacute;&nbsp;<img alt=\"cheeky\" src=\"http://localhost/CoffeeStoreWeb/ckeditor/plugins/smiley/images/tongue_smile.png\" style=\"height:23px; width:23px\" title=\"cheeky\" />.\n', 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `cfs_data`
--

CREATE TABLE `cfs_data` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `open` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `average_cost` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `about` text COLLATE utf8_unicode_ci NOT NULL,
  `view` int(11) NOT NULL,
  `star` decimal(10,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cfs_data`
--

INSERT INTO `cfs_data` (`id`, `image`, `name`, `address`, `open`, `average_cost`, `content`, `about`, `view`, `star`) VALUES
(10, 'http://localhost/CoffeeStoreWeb/public/uploads/foody-mobile-17522861_46318500734-976-636282092868829957.jpg', 'The Original Coffee - Nguyễn Thái Sơn', '83 Nguyễn Thái Sơn, P. 4,  Quận Gò Vấp, TP. HCM', '07:00 - 23:00', '20.000đ - 50.000đ', '<p style=\"text-align:center\"><img alt=\"Có wifi\" src=\"https://static.foody.vn/s1/style/images/catico/facilities/3/wifi.png\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Có máy lạnh &amp; điều hòa\" src=\"https://static.foody.vn/s1/style/images/catico/facilities/3/maylanh.png\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Cho mua về\" src=\"https://static.foody.vn/s1/style/images/catico/facilities/3/muamangve.png\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Có chỗ đậu ôtô\" src=\"https://static.foody.vn/s1/style/images/catico/facilities/3/chodauxehoi.png\" /></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n', 'Café/Dessert - Việt Nam - Sinh viên, Nhóm hội', 180, '7.4'),
(11, 'http://localhost/CoffeeStoreWeb/public/uploads/foody-mobile-mc-cafe-mb-jpg-339-635860347713689628.jpg', 'McCafé - Trần Hưng Đạo', '2-6 Bis Trần Hưng Đạo,  Quận 1, TP. HCM', 'Cả ngày ', '25.000đ - 95.000đ', '<p style=\"text-align:center\"><img alt=\"Có wifi\" src=\"https://static.foody.vn/s1/style/images/catico/facilities/3/wifi.png\" /></p>\n\n<p style=\"text-align:center\"><img alt=\"Cho mua về\" src=\"https://static.foody.vn/s1/style/images/catico/facilities/3/muamangve.png\" /></p>\n\n<p style=\"text-align:center\">&nbsp; &nbsp;<img alt=\"Có xuất hóa đơn đỏ\" src=\"https://static.foody.vn/s1/style/images/catico/facilities/3/xuathoadon.png\" /></p>\n\n<p style=\"text-align:center\"><img alt=\"Có bàn ngoài trời\" src=\"https://static.foody.vn/s1/style/images/catico/facilities/3/banngoaitroi.png\" /></p>\n\n<p style=\"text-align:center\"><img alt=\"Có khu vực hút thuốc\" src=\"https://static.foody.vn/s1/style/images/catico/facilities/3/hutthuoc.png\" /></p>\n\n<p style=\"text-align:center\">&nbsp;&nbsp;<img alt=\"Có máy lạnh &amp; điều hòa\" src=\"https://static.foody.vn/s1/style/images/catico/facilities/3/maylanh.png\" />&nbsp;&nbsp; &nbsp;</p>\n\n<p style=\"text-align:center\"><a href=\"https://www.foody.vn/ho-chi-minh/dia-diem-co-giu-xe-may-mien-phi\">Giữ xe m&aacute;y miễn ph&iacute;</a></p>\n', 'Café/Dessert', 38, '7.4');

-- --------------------------------------------------------

--
-- Table structure for table `cfs_menu`
--

CREATE TABLE `cfs_menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `recipe` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name_store` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cfs_menu`
--

INSERT INTO `cfs_menu` (`id`, `name`, `recipe`, `price`, `name_store`) VALUES
(4, 'Ice Mocha', '', '38,000 đ', 'The Original Coffee - Nguyễn Thái Sơn'),
(5, 'Cappuccino', '', '32,000 đ', 'The Original Coffee - Nguyễn Thái Sơn'),
(8, 'On Latte', '', '38,000 đ', 'The Original Coffee - Nguyễn Thái Sơn'),
(17, 'Cà phê sữa đá ', '<p style=\"text-align:center\">C&agrave; Ph&ecirc;</p>\n\n<p style=\"text-align:center\">Sữa</p>\n\n<p style=\"text-align:center\">Đ&aacute;</p>\n', '25,000 đ', 'The Original Coffee - Nguyễn Thái Sơn'),
(18, 'Dasani Water', '<p style=\"text-align:center\">Nước suối đ&oacute;ng chai</p>\n', '20,000 đ', 'McCafé - Trần Hưng Đạo'),
(24, 'Kid Set ( Burger + Nước )', '<p style=\"text-align:center\">Burger</p>\n\n<p style=\"text-align:center\">Nước</p>\n', '60.000 đ', 'McCafé - Trần Hưng Đạo');

-- --------------------------------------------------------

--
-- Table structure for table `cfs_user`
--

CREATE TABLE `cfs_user` (
  `id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cfs_user`
--

INSERT INTO `cfs_user` (`id`, `user_email`, `user_pass`) VALUES
(1, 'elsie.ej@gmail.com', '123456'),
(2, 'phuong.do@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `userfiles`
--

CREATE TABLE `userfiles` (
  `id` int(11) NOT NULL,
  `FilePath` varchar(255) NOT NULL,
  `FileName` varchar(255) NOT NULL,
  `name_store` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userfiles`
--

INSERT INTO `userfiles` (`id`, `FilePath`, `FileName`, `name_store`) VALUES
(20, 'some_images', 'http://localhost/CoffeeStoreWeb/public/some_images/foody-original-coffee-nguyen-thai-son-179-636271469955787220.jpg', 'The Original Coffee - Nguyễn Thái Sơn'),
(21, 'some_images', 'http://localhost/CoffeeStoreWeb/public/some_images/foody-original-coffee-nguyen-thai-son-191-636166208684036902.jpg', 'The Original Coffee - Nguyễn Thái Sơn'),
(22, 'some_images', 'http://localhost/CoffeeStoreWeb/public/some_images/foody-original-coffee-nguyen-thai-son-192-636297832902546636.jpg', 'The Original Coffee - Nguyễn Thái Sơn'),
(23, 'some_images', 'http://localhost/CoffeeStoreWeb/public/some_images/foody-original-coffee-nguyen-thai-son-506-636148445231609616.jpg', 'The Original Coffee - Nguyễn Thái Sơn'),
(24, 'some_images', 'http://localhost/CoffeeStoreWeb/public/some_images/foody-original-coffee-nguyen-thai-son-526-636166208617304178.jpg', 'The Original Coffee - Nguyễn Thái Sơn'),
(25, 'some_images', 'http://localhost/CoffeeStoreWeb/public/some_images/foody-original-coffee-nguyen-thai-son-602-636150867833721969.jpg', 'The Original Coffee - Nguyễn Thái Sơn'),
(26, 'some_images', 'http://localhost/CoffeeStoreWeb/public/some_images/foody-original-coffee-nguyen-thai-son-736-636132677445375335.jpg', 'The Original Coffee - Nguyễn Thái Sơn'),
(27, 'some_images', 'http://localhost/CoffeeStoreWeb/public/some_images/foody-original-coffee-nguyen-thai-son-738-636157631203067329.jpg', 'The Original Coffee - Nguyễn Thái Sơn'),
(28, 'some_images', 'http://localhost/CoffeeStoreWeb/public/some_images/foody-original-coffee-nguyen-thai-son-782-636148445238485130.jpg', 'The Original Coffee - Nguyễn Thái Sơn'),
(29, 'some_images', 'http://localhost/CoffeeStoreWeb/public/some_images/foody-original-coffee-nguyen-thai-son-992-636150867834972087.jpg', 'The Original Coffee - Nguyễn Thái Sơn'),
(30, 'some_images', 'http://localhost/CoffeeStoreWeb/public/some_images/foody-original-coffee-nguyen-thai-son-f8363eb9-975b-49d4-8bce-59cf34c69f22-635285189193476016.jpg', 'The Original Coffee - Nguyễn Thái Sơn'),
(31, 'some_images', 'http://localhost/CoffeeStoreWeb/public/some_images/foody-mc-cafe-tran-hung-dao-139-635725177536107649.jpg', 'McCafé - Trần Hưng Đạo'),
(32, 'some_images', 'http://localhost/CoffeeStoreWeb/public/some_images/foody-mc-cafe-tran-hung-dao-427-635964082577659823.jpg', 'McCafé - Trần Hưng Đạo'),
(33, 'some_images', 'http://localhost/CoffeeStoreWeb/public/some_images/foody-mc-cafe-tran-hung-dao-476-636469524001008606.jpg', 'McCafé - Trần Hưng Đạo'),
(34, 'some_images', 'http://localhost/CoffeeStoreWeb/public/some_images/foody-mc-cafe-tran-hung-dao-589-635594348734916605.jpg', 'McCafé - Trần Hưng Đạo'),
(35, 'some_images', 'http://localhost/CoffeeStoreWeb/public/some_images/foody-mc-cafe-tran-hung-dao-644-636378079548987932.jpg', 'McCafé - Trần Hưng Đạo'),
(36, 'some_images', 'http://localhost/CoffeeStoreWeb/public/some_images/foody-mc-cafe-tran-hung-dao-849-636041132031097324.jpg', 'McCafé - Trần Hưng Đạo'),
(37, 'some_images', 'http://localhost/CoffeeStoreWeb/public/some_images/foody-mc-cafe-tran-hung-dao-942-636031655562885259.jpg', 'McCafé - Trần Hưng Đạo'),
(38, 'some_images', 'http://localhost/CoffeeStoreWeb/public/some_images/foody-mobile-mc-cafe-mb-jpg-339-635860347713689628.jpg', 'McCafé - Trần Hưng Đạo'),
(39, 'some_images', 'http://localhost/CoffeeStoreWeb/public/some_images/foody-mc-cafe-tran-hung-dao-635480578813657485.jpg', 'McCafé - Trần Hưng Đạo'),
(40, 'some_images', 'http://localhost/CoffeeStoreWeb/public/some_images/foody-mc-cafe-tran-hung-dao-635480578786357437.jpg', 'McCafé - Trần Hưng Đạo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cfm_data`
--
ALTER TABLE `cfm_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cfs_comment`
--
ALTER TABLE `cfs_comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_store` (`id_store`);

--
-- Indexes for table `cfs_data`
--
ALTER TABLE `cfs_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `cfs_menu`
--
ALTER TABLE `cfs_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_store` (`name_store`),
  ADD KEY `name_store` (`name_store`);

--
-- Indexes for table `cfs_user`
--
ALTER TABLE `cfs_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userfiles`
--
ALTER TABLE `userfiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name_store` (`name_store`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cfm_data`
--
ALTER TABLE `cfm_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cfs_comment`
--
ALTER TABLE `cfs_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cfs_data`
--
ALTER TABLE `cfs_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `cfs_menu`
--
ALTER TABLE `cfs_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `cfs_user`
--
ALTER TABLE `cfs_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `userfiles`
--
ALTER TABLE `userfiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cfs_comment`
--
ALTER TABLE `cfs_comment`
  ADD CONSTRAINT `constraint_cmt_store` FOREIGN KEY (`id_store`) REFERENCES `cfs_data` (`id`),
  ADD CONSTRAINT `constraint_cmt_user` FOREIGN KEY (`id_user`) REFERENCES `cfs_user` (`id`);

--
-- Constraints for table `cfs_data`
--
ALTER TABLE `cfs_data`
  ADD CONSTRAINT `some_images_constraint` FOREIGN KEY (`name`) REFERENCES `userfiles` (`name_store`);

--
-- Constraints for table `cfs_menu`
--
ALTER TABLE `cfs_menu`
  ADD CONSTRAINT `menu_constraint` FOREIGN KEY (`name_store`) REFERENCES `userfiles` (`name_store`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
