-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 19, 2018 at 07:19 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pnj`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `price` double NOT NULL,
  `image` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `type_id`, `name`, `price`, `image`) VALUES
(1, 1, 'Nhẫn PNJ vàng 14K đính ngọc trai Freshwater', 3861000, 'gnhryb89607.601-nhan-pnj-vang-trang-14k-dinh-ngoc-trai-freshwater.png'),
(2, 1, 'Nhẫn nam PNJ vàng 18K đính đá Saphire', 27828000, 'gntrya17597.602-nhan-nam-pnj-vang-18k-dinh-da-saphire.png'),
(3, 1, 'Nhẫn nam PNJ vàng trắng 14K đính đá Saphire', 25239000, 'gntrwa17581.600-nhan-nam-pnj-vang-trang-14k-dinh-da-sapphire.png'),
(4, 1, 'Nhẫn PNJ Vàng trắng 14K đính đá Topaz', 5983000, 'gndrwb87740.600-nhan-pnj-vang-trang-14k-dinh-da-topaz.png'),
(5, 1, 'Nhẫn Kim Cương PNJ Vàng trắng 14K', 14297000, 'GNDRWA85202.500.jpg'),
(6, 1, 'Nhẫn nam PNJ vàng 18K đính đá Citrine', 20923000, 'nhan-nam-pnj-vang-18k-dinh-da-citrine-yb86784.jpg'),
(7, 1, 'Nhẫn Kim Cương PNJ First Diamond Vàng trắng 14K', 79403000, 'gndrwa88349.5a0-nhan-pnj-first-diamond-vang-trang-14k.png'),
(8, 1, 'Nhẫn Kim cương PNJ First Diamond Vàng 14K', 8714000, 'gndrha87604.5a1-nhan-kim-cuong-pnj-vang-trang-14k.png'),
(9, 1, 'Nhẫn Kim cương PNJ vàng trắng 14K', 21889000, 'gndrwa87683.5A0-nhan-kim-cuong-pnj-vang-trang-14k-02.png'),
(10, 1, 'Nhẫn PNJ vàng 18K đính đá CZ', 5165000, 'gndrya82252.100-nhan-pnj-vang-18k-dinh-da-cz.png'),
(11, 2, 'Bông Tai Kim Cương PNJ Vàng Trắng 14K', 20920000, 'gbdrwa57853.5a0-bong-tai-kim-cuong-pnj-vang-trang-14k.jpg'),
(12, 2, 'Bông tai PNJ vàng 14K đính ngọc trai Freshwater', 5870000, 'gbdryb89604.600-bong-tai-pnj-vang-14k-dinh-ngoc-trai-freshwater_f2qf-9x.png'),
(13, 2, 'Bông tai PNJ Vàng trắng 14K đính đá Topaz', 7597000, 'gbdrwb87739.600-bong-tai-pnj-vang-trang-14k-dinh-da-topaz.png'),
(14, 2, 'Bông tai Kim cương PNJ vàng trắng 14K', 76649000, 'gbdrwa88371.5a0-bong-tai-kim-cuong-pnj-vang-trang-14k.png'),
(15, 2, 'Bông tai Kim Cương PNJ First Diamond Vàng trắng 14K', 70048000, 'gbdrwa88347.5a0-bong-tai-pnj-first-diamond-vang-trang-14k.png'),
(16, 2, 'Bông tai PNJ Vàng 18K đính đá CZ', 4292000, 'gbdrya82251.100-bong-tai-pnj-vang-18k-dinh-da-cz.png'),
(17, 2, 'Bông tai PNJ Vàng 18K đính đá CZ', 4629000, 'gbdrya81569.102-bong-tai-pnj-vang-18k-dinh-da-cz.png'),
(18, 2, 'Bông tai PNJ Vàng 18K đính đá CZ', 4129000, 'gbdrya81531.102-bong-tai-pnj-vang-18k-dinh-da-cz-1.png'),
(19, 2, 'Bông tai PNJ Vàng 18K đính đá CZ', 4869000, 'gbdrya81008.100-bong-tai-pnj-vang-18k-dinh-da-cz.png'),
(20, 2, 'Bông tai PNJ Vàng 18K đính đá ECZ', 3132000, 'gbdrya87760.100-bong-tai-pnj-vang-14k-dinh-da-ecz.png'),
(21, 3, 'Mặt dây chuyền PNJ vàng trắng 14K đính ngọc trai Akoya', 13761000, 'gmdrwb85765.601-mat-day-chuyen-pnj-vang-trang-14k-dinh-ngoc-trai-akoya.png'),
(22, 3, 'Mặt dây chuyền Kim Cương PNJ Vàng trắng 14K', 33127000, 'gmd1wa70133.5-mat-day-chuyen-kim-cuong-pnj-vang-trang-14k.jpg'),
(23, 3, 'Mặt dây chuyền PNJ Vàng trắng 14K đính đá Topaz', 5139000, 'gmdrwb87738.600-mat-day-chuyen-pnj-vang-trang-14k-dinh-da-topaz.png'),
(24, 3, 'Mặt dây chuyền Kim Cương PNJ First Diamond Vàng trắng 14K', 55779000, 'gmdrwa88348.5a0-mat-day-chuyen-pnj-first-diamond-vang-trang-14k.png'),
(25, 3, 'Mặt dây chuyền Kim Cương PNJ First Diamond Vàng 14K', 4760000, 'gmdrha87585.5a0-mat-day-chuyen-kim-cuong-pnj-first-diamond-vang-14k.png'),
(26, 3, 'Mặt Dây Chuyền Kim Cương PNJ First Diamond Vàng 18K', 4863000, 'gmdrca87557.5a0-mat-day-chuyen-kim-cuong-pnj-vang-18k-0..png'),
(27, 3, 'Mặt dây chuyền PNJ vàng 18K đính đá CZ', 3391000, 'gmdrya82250.100-mat-day-chuyen-pnj-vang-18k-dinh-da-cz.png'),
(28, 3, 'Mặt dây chuyền PNJ vàng 18K đính đá CZ', 6992000, 'gmdrya81459.100-mat-day-chuyen-pnj-vang-18k-dinh-da-cz.png'),
(29, 3, 'Mặt dây chuyền PNJ vàng 18K đính đá CZ', 5201000, 'gmdrya81007.100-mat-day-chuyen-pnj-vang-18k-dinh-da-cz.png'),
(30, 3, 'Mặt dây chuyền PNJ Vàng trắng 14K đính ngọc trai Akoya', 6220000, 'gmdrwb87734.600-mat-day-chuyen-pnj-vang-trang-14k-dinh-ngoc-trai-akoya.png'),
(31, 4, 'Vòng tay PNJ Vàng trắng 14K đính ngọc trai Akoya', 16486000, 'gvdrwb87737.600-vong-tay-pnj-vang-trang-14k-dinh-ngoc-trai-akoya.png'),
(32, 4, 'Vòng tay charm PNJ Kim Thiềm Đại Phúc vàng 24K dây màu đỏ', 4920000, 'gvxdy505969.000-vong-tay-pnj-kim-thiem-dai-phuc-vang-24k-day-mau-do.png'),
(33, 4, 'Vòng tay charm PNJ Kim Khuyển Lưu Tài vàng 24K dây màu đen', 4920000, 'gvxdy505965.000-vong-tay-pnj-kim-khuyen-luu-tai-vang-24k-day-mau-den.jpg'),
(34, 4, 'Vòng tay PNJ Hoa Hồng Vàng trắng 10K đính đá ECZ', 10825000, 'gvdrwb89411.100-vong-tay-pnj-hoa-hong-vang-trang-10k-dinh-da-ecz.jpg'),
(35, 4, 'Vòng tay PNJ Sắc xuân vàng 18K đính đá Citrine', 20658000, 'gvdryb88332.600-vong-tay-pnj-sac-xuan-vang-18k-dinh-da-citrine.jpg'),
(36, 4, 'Vòng tay PNJ vàng 14K đính đá CZ', 11235000, 'gvdrya88212.100-vong-tay-pnj-vang-14k-dinh-da-cz.jpg'),
(37, 4, 'Vòng tay PNJ vàng 14K đính đá CZ', 13583000, 'gvdrcz87971.100-vong-tay-pnj-vang-14k-dinh-da-cz.jpg'),
(38, 4, 'Vòng tay PNJ vàng 14K đính đá CZ', 10384000, 'gvdya87967.100-vong-tay-pnj-vang-14k-dinh-da-cz.jpg'),
(39, 4, 'Vòng tay PNJ vàng Ý 18K', 7159000, 'gvorxy79138.002-vong-tay-pnj-vang-y-18k.jpg'),
(40, 4, 'Vòng tay PNJ vàng Ý 18K', 7511000, 'gvoryy79138.002-vong-tay-pnj-vang-y-18k.jpg'),
(41, 5, 'Lắc tay PNJ vàng 14K đính ngọc trai Freshwater', 6310000, 'glhryb89606.600-lac-tay-pnj-vang-14k-dinh-ngoc-trai-freshwater.png'),
(42, 5, 'Lắc tay PNJ vàng 18K đính đá CZ', 12429000, 'gldrya52384.102-lac-pnj-vang-trang-18k.jpg'),
(43, 5, 'Lắc tay PNJ vàng trắng Ý 18K', 13080000, 'gldrwy81028.102-lac-pnj-vang-trang-y-18k.jpg'),
(44, 5, 'Lắc tay PNJ vàng trắng Ý 18K', 9896000, 'glarwy81497.002-lac-pnj-vang-trang-y-18k.jpg'),
(45, 5, 'Lắc tay PNJ vàng trắng 18K đính đá', 11692000, 'gldrca52384.102-lac-pnj-vang-trang-18k.jpg'),
(46, 5, 'Lắc tay PNJ vàng trắng Ý 18K', 6585000, 'gldrwy73826.002-lac-tay-pnj-vang-trang-y-18k.jpg'),
(47, 5, 'Lắc tay PNJ vàng trắng Ý 18K', 4236000, 'gldrwy77284.002-lac-tay-pnj-vang-trang-y-18k.jpg'),
(48, 5, 'Lắc tay PNJ vàng trắng Ý 18K', 4748000, 'gldrwy77285.002-lac-tay-pnj-vang-trang-y-18k.jpg'),
(49, 5, 'Lắc tay PNJ vàng 18K đính đá CZ', 10441000, 'gldrya74372.102-lac-tay-pnj-vang-18k-dinh-da-cz.jpg'),
(50, 5, 'Lắc tay PNJ vàng trắng Ý 18K đính đá CZ', 10886000, 'gldrwy84521.100-lac-tay-pnj-vang-trang-y-18k-dinh-da-cz.jpg'),
(51, 6, 'Bộ trang sức Kim Cương PNJ First Diamond Vàng trắng 14K', 17189000, 'bo-trang-suc-kim-cuong-pnj-first-diamond-vang-trang-14k-05.png'),
(52, 6, 'Bộ trang sức Kim Cương PNJ First Diamond Vàng Trắng 14K', 22726000, 'bo-trang-suc-kim-cuong-pnj-first-diamond-vang-trang-14k-03.png'),
(53, 6, 'Bộ trang sức Kim Cương PNJ First Diamond Vàng Trắng 14K', 17601000, 'bo-trang-suc-kim-cuong-pnj-first-diamond-vang-trang-14k-02.png'),
(54, 6, 'Bộ trang sức Kim Cương PNJ Vàng trắng 14K', 163116000, 'bo-trang-suc-kim-cuong-pnj-vang-trang-14k-01.png'),
(55, 6, 'Bộ trang sức Kim Cương PNJ First Diamond Vàng Trắng 14K', 65208000, 'bo-trang-suc-kim-cuong-pnj-first-diamond-vang-trang-14k.png'),
(56, 6, 'Bộ trang sức PNJ vàng 18K đính ngọc trai South Sea', 107296000, 'bo-trang-suc-pnj-vang-18k-dinh-ngoc-trai-south-sea.png'),
(57, 6, 'Bộ sản phẩm PNJ Vàng trắng 14K đính ngọc trai Akoya', 65718000, 'bo-trang-suc-pnj-vang-trang-14k-dinh-ngoc-trai-akoya.png'),
(58, 6, 'Bộ trang sức PNJ vàng 14K đính ngọc trai Freshwater', 5603000, 'bo-trang-suc-pnj-vang-14k-dinh-ngoc-trai-freshwater-03.png'),
(59, 6, 'Bộ trang sức PNJ vàng 14K đính ngọc trai Freshwater', 14232000, 'bo-trang-suc-pnj-vang-14k-dinh-ngoc-trai-freshwater-02.png'),
(60, 6, 'Bộ trang sức PNJ Vàng trắng 14K đính đá Topaz', 18783000, 'bo-trang-suc-pnj-vang-trang-14k-dinh-da-topaz.png'),
(61, 7, 'Hạt Charm Me PNJ Vàng Ý 18K đính đá Trắng', 2876000, 'GIDRYY87960.100-hat-charm-pnj-vang-18k.jpg'),
(62, 7, 'Hạt Charm Me PNJ Vàng Ý 18K đính đá Trắng', 2372000, 'GIDRYY87910.100-hat-charm-pnj-vang-18k.jpg'),
(63, 7, 'Hạt Charm Me PNJ Vàng Trắng Ý 18K đính đá Trắng', 2363000, 'GIDRWY88077.100-hat-charm-pnj-vang-trang-y-18k.jpg'),
(64, 7, 'Hạt Charm Me PNJ Vàng Trắng Ý 18K đính đá Trắng', 2803000, 'GIDRWY87976.100-hat-charm-pnj-vang-y-18k-1.jpg'),
(65, 7, 'Hạt Charm Me PNJ Vàng Trắng Ý 18K đính đá Trắng', 2314000, 'GIDRWY87975.100-hat-charm-pnj-vang-trang-y-18k.jpg'),
(66, 7, 'Hạt Charm Me PNJ Vàng Trắng Ý 18K đính đá Xanh', 4003000, 'GIDRWY87974.400-hat-charm-pnj-vang-18k.jpg'),
(67, 7, 'Hạt Charm Me PNJ Vàng Trắng Ý 18K đính đá trắng', 1707000, 'GIDRWY87972.100-hat-charm-pnj-vang-18k.jpg'),
(68, 7, 'Hạt Charm Me PNJ Vàng Trắng Ý 18K đính đá Đỏ', 2689000, 'GIDRWY87909.400-hat-charm-pnj-vang-y-18k.jpg'),
(69, 7, 'Hạt Charm Me PNJ Vàng Trắng Ý 18K đính đá Trắng', 1678000, 'GIDRWY87908.100-hat-charm-pnj-vang-y-18k.jpg'),
(70, 7, 'Hạt Charm Me PNJ Vàng Ý 18K đính đá Xanh', 2418000, 'gidrcy88152.400-hat-charm-pnj-vang-y-18k-dinh-da-xanh.png'),
(71, 8, 'Nhẫn PNJ vàng 14K đính ngọc trai Freshwater', 3861000, 'gnhryb89607.601-nhan-pnj-vang-trang-14k-dinh-ngoc-trai-freshwater.png'),
(72, 8, 'Nhẫn nam PNJ vàng 18K đính đá Saphire', 27828000, 'gntrya17597.602-nhan-nam-pnj-vang-18k-dinh-da-saphire.png'),
(73, 8, 'Nhẫn nam PNJ vàng trắng 14K đính đá Saphire', 25239000, 'gntrwa17581.600-nhan-nam-pnj-vang-trang-14k-dinh-da-sapphire.png'),
(74, 8, 'Nhẫn PNJ Vàng trắng 14K đính đá Topaz', 5983000, 'gndrwb87740.600-nhan-pnj-vang-trang-14k-dinh-da-topaz.png'),
(75, 8, 'Nhẫn Kim Cương PNJ Vàng trắng 14K', 14297000, 'GNDRWA85202.500.jpg'),
(76, 8, 'Nhẫn nam PNJ vàng 18K đính đá Citrine', 20923000, 'nhan-nam-pnj-vang-18k-dinh-da-citrine-yb86784.jpg'),
(77, 8, 'Nhẫn Kim Cương PNJ First Diamond Vàng trắng 14K', 79403000, 'gndrwa88349.5a0-nhan-pnj-first-diamond-vang-trang-14k.png'),
(78, 8, 'Nhẫn Kim cương PNJ First Diamond Vàng 14K', 8714000, 'gndrha87604.5a1-nhan-kim-cuong-pnj-vang-trang-14k.png'),
(79, 8, 'Nhẫn Kim cương PNJ vàng trắng 14K', 21889000, 'gndrwa87683.5A0-nhan-kim-cuong-pnj-vang-trang-14k-02.png'),
(80, 8, 'Nhẫn PNJ vàng 18K đính đá CZ', 5165000, 'gndrya82252.100-nhan-pnj-vang-18k-dinh-da-cz.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `name`) VALUES
(1, 'Nhẫn vàng'),
(2, 'Bông Tai'),
(3, 'Mặt dây chuyền'),
(4, 'Vòng tay'),
(5, 'Lắc tay'),
(6, 'Bộ trang sức Kim Cương'),
(7, 'Hạt Charm Me'),
(8, 'Nhẫn nam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `product_type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
