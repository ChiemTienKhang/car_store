-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2020 at 04:42 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cost` varchar(100) NOT NULL,
  `summary` text NOT NULL,
  `address` varchar(250) NOT NULL,
  `is_sell` tinyint(1) NOT NULL,
  `title` varchar(250) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `created_at`, `updated_at`, `cost`, `summary`, `address`, `is_sell`, `title`, `image`) VALUES
(1, '2020-06-21 19:19:20', '2020-06-21 19:19:20', '2.920.000.000 đ', 'BÁN XE ĐÃ QUA SỬ DỤNG CHÍNH HÃNG TOYOTA HÙNG VƯƠNG\r\nFORTUNER 2.7V\r\nĐộng cơ xăng\r\nSố tự động 1 cầu\r\nXe nhập Indo\r\nMàu: Trắng Ngọc Trai\r\nTháng 05/2019\r\nĐi lướt: 8300 km\r\nPhụ kiện: Camera hành trình, Film, Lót sàn.\r\nPháp lý: cá nhân, biển HCM\r\n* GIÁ: 1 tỷ 099 inbox\r\nLH:', 'Quận Tân Phú', 0, 'BÁN MERCEDES E300 AMG ƯU ĐÃI LÊN ĐẾN 300 TRIỆU', '<img alt=\"\" src=\"/filemanager/images/cars/car1.jpg\" style=\"float:left; margin-right:30px; height:128px; width:128px\" />'),
(2, '2020-06-21 19:19:20', '2020-06-21 19:19:20', '558.000.000 đ', 'Xe bán tải Chevrolet Colorado 2020🚗 Xe MỸ- nhập khẩu nguyên chiếc\r\nTRẢ TRƯỚC 90 TRIỆU NHẬN XE , FULL QUÀ TẶNG!\r\n\r\nSIÊU ƯU ĐÃI => ĐỪNG VỘI MUA XE TRƯỚC KHI GỌI CHO CHÚNG TÔI ( Lh: Phước - Trưởng nhóm Bán Hàng )\r\n\r\nKHUYẾN MÃI THÁNG 06-2020 CỰC SỐC Giảm 164 TRIỆU, HỖ TRỢ : GẮN NẮP THÙNG ( CAO - THẤP), LÓT THÙNG , BẢO HIỂM VẬT CHẤT, PHIM CÁCH NHIỆT, CAMERA HÀNH TRÌNH...\r\n\r\nNGÂN HÀNG HỖ VAY TỐI ĐA, BAO HỒ SƠ KHÓ - CHỈ TRẢ TRƯỚC 70 TRIỆU NHẬN XE\r\nTHỜI ĐIỂM MUA XE TRONG NĂM 2020 =>>\r\n\r\n-Colorado 2.5 (1 cầu, tự động) 558 Triệu\r\n-Colorado 2.5 (2 cầu, tự động Bản FULL) 638 Triệu\r\n-Colorado 2.5 (High Country) 665 Triệu\r\n', 'Quận Bình Tân', 1, 'COLORADO GIẢM 164TRIỆU+ĐỦ QUÀ, NẮP LÓT THÙNG=>GỌI', '<img alt=\"\" src=\"/filemanager/images/cars/car2.jpg\" style=\"float:left; margin-right:30px; height:128px; width:128px\" />'),
(3, '2020-06-21 19:19:20', '2020-06-21 19:19:20', '590.000.000 đ', 'SIÊU ƯU ĐÃI !!!\r\nSỐ LƯỢNG CÓ HẠN\r\nTrả trước 120 triệu nhận xe.\r\nTặng: Bao da tay lái, nước hoa, dù, tappi sàn\r\nƯu đãi tiền mặt và PHỤ KIỆN chỉ trong tháng 06 này\r\n\r\n\r\n1/DỊCH VỤ CHU ĐÁO – CHUYÊN NGHIỆP\r\n📌 Cam kết chương trình khuyến mãi tốt\r\n📌 Hỗ trợ vay lên đến 70% - 95% giá trị xe, thời hạn từ 3 - 8 năm\r\n📌 Đảm bảo lãi suất ưu đãi 0% trong 6 tháng đầu , thủ tục nhanh gọn\r\n📌 Hỗ trợ khách hàng chứng minh thu nhập, cty mới thành lập, nợ chú ý, nợ xấu...\r\n📌 Đăng ký xem xe & lái thử tại nhà\r\n📌 Hỗ trợ thủ tục đăng ký, đăng kiểm xe\r\n\r\n=================================\r\n2/Giá Bán niên yết : ( có giảm giá, liên hệ để được giá tốt )\r\n🚙 Ranger MT XL 4x4 ( 2 cầu ): 590.000.000 đồng\r\n🚙 Ranger MT XLS 4x2( 1 cầu ): 615.000.000 đồng\r\n🚙 Ranger AT XLS 4x2( 1 cầu ): 640.000.000 đồng', 'Quận 9', 0, '\r\nRanger 2.2 XL 4X4. Xe có sẵn. 120 triệu nhận xe', '<img alt=\"\" src=\"/filemanager/images/cars/car3.jpg\" style=\"float:left; margin-right:30px; height:128px; width:128px\" />'),
(4, '2020-06-21 19:19:20', '2020-06-21 19:19:20', '390.000.000 đ', 'Xe gia đình 1 chủ từ đầu.\r\nKhông lỗi k đâm đụng ngập nước.\r\nBảo hiểm thân vỏ tới tháng 4/2021. Đăng kiểm tới tháng 9/2021.\r\nCamera de, dvd, cam hành trình.\r\nVỏ còn tốt.\r\nMới thay bố thắng tại hãng.\r\nMua về đổ xăng là chạy\r\nOdo chuẩn 9v\r\nBảo dưỡng đầy đủ tại hãng.\r\nMua bán nhanh gọn', 'Quận 2', 0, '\r\nBán ford ecosport số sàn xe gia đình sử dụng', '<img alt=\"\" src=\"/filemanager/images/cars/car4.jpg\" style=\"float:left; margin-right:30px; height:128px; width:128px\" />'),
(5, '2020-06-21 19:19:20', '2020-06-21 19:19:20', '345.000.000 đ', '⚡⚡⚡ Hỗ trợ lắp đặt cho khách hàng chọn lựa được những PHỤ KIỆN tối ưu dành cho xe của quý khách.\r\n🌟 Dán film cách nhiệt cao cấp của Mỹ\r\n🌟 Lót sàn simili\r\n🌟 Phủ gầm chống rỉ sét\r\n🌟 Bọc ghế cao cấp\r\n🌟 Bộ viền che mưa cửa xe\r\n🌟 Hộp đen định vị\r\n🌟 Ốp chén cửa cao cấp\r\n🌟 Camera hành trình\r\n🎁🎁🎁 Tặng ngay :\r\n🎀 Khăn lau xe cao cấp\r\n🎀 Che nắng (2 tấm)\r\n🎀 Túi đựng giày thể thao\r\n🎀 Bao da sổ bảo hành\r\n🎀 Thảm sàn Toyota\r\n🎀 10 lít nhiên liệu\r\n🎀 Giảm 50% nhớt máy chặng 5.000km (*)\r\n🎀 Miễn phí công bảo dưỡng 1.000km\r\n🎀 Miễn phí công bảo dưỡng 50.000km\r\n🎀 Miễn phí công bảo dưỡng 100.000km\r\n👉👉 Còn chờ gì nữa mà Quý Khách hàng không đến showroom trải nghiệm lái thử xe', 'Quận 1', 1, '\r\nToyota Wigo, trả góp 0% trong 6 tháng, tặng BHVC', '<img alt=\"\" src=\"/filemanager/images/cars/car5.jpg\" style=\"float:left; margin-right:30px; height:128px; width:128px\" />');
-- --------------------------------------------------------
--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `created_at`, `updated_at`, `name`) VALUES
(1, '2020-06-21 19:19:20', '2020-06-21 19:19:20', 'Tonny'),
(2, '2020-06-21 19:19:20', '2020-06-21 19:19:20', 'Kenedy'),
(3, '2020-06-21 19:19:20', '2020-06-21 19:19:20', 'Tom Dwan'),
(4, '2020-06-21 19:19:20', '2020-06-21 19:19:20', 'Nugaru'),
(5, '2020-06-21 19:19:20', '2020-06-21 19:19:20', 'Heavy');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `car_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `created_at`, `updated_at`, `car_id`, `customer_id`) VALUES
(1, '2020-06-21 19:19:20', '2020-06-21 19:19:20', 1, 1),
(2, '2020-06-21 19:19:20', '2020-06-21 19:19:20', 2, 2),
(3, '2020-06-21 19:19:20', '2020-06-21 19:19:20', 3, 3),
(4, '2020-06-21 19:19:20', '2020-06-21 19:19:20', 4, 4),
(5, '2020-06-21 19:19:20', '2020-06-21 19:19:20', 5, 5);

-- --------------------------------------------------------

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);


--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);


--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`);


--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--

