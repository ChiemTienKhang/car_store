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
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `created_at`, `updated_at`, `content`, `seen`, `user_id`, `post_id`) VALUES
(1, '2020-06-21 19:19:20', '2020-06-21 19:19:20', '<p>\nLorem ipsum conubia vehicula inceptos proin suspendisse aenean, eget semper sodales aliquam ipsum euismod, iaculis eget quam aliquam tincidunt mollis. \nSagittis aenean netus vulputate ut feugiat aliquam, turpis convallis a at rutrum sociosqu, ut ullamcorper mi feugiat cubilia. \nAt euismod semper ultricies dictum tellus ac etiam nam, molestie convallis eros torquent nulla inceptos vitae lacus dolor, ornare netus donec curabitur senectus felis pulvinar. \nDonec aliquam purus fermentum turpis est curabitur vestibulum dui netus, a nullam ut sed nostra lorem dui nullam, placerat tempor suspendisse congue ullamcorper duis molestie semper. \n</p>\n<p>\nFacilisis etiam cubilia vulputate urna quisque ac, mauris nec iaculis lacus rhoncus, scelerisque metus phasellus integer vehicula. \nA nostra accumsan nec tristique bibendum velit sit at molestie iaculis curabitur, sapien tincidunt interdum lectus commodo platea pellentesque imperdiet purus. \nEt etiam tortor aenean bibendum urna sem pretium lacinia magna pellentesque erat, hac congue netus porta conubia a duis sem enim scelerisque pretium, consequat primis vestibulum porta sit placerat morbi diam id quam. \nTaciti semper cubilia congue pharetra interdum ad tellus dui donec, euismod imperdiet mattis nisi congue nisi quis eros aptent ligula, elit luctus aenean maecenas venenatis potenti senectus tristique. \n</p>\n<p>\nNulla ut netus malesuada ultrices, ut tellus amet libero, massa ut porttitor. \n</p>', 0, 2, 1),
(2, '2020-06-21 19:19:20', '2020-06-21 19:19:20', '<p>\nLorem ipsum viverra luctus orci nibh curabitur pharetra, id duis quisque tempus dapibus rhoncus, ante litora netus ut varius vestibulum. \nErat ligula ipsum suscipit netus bibendum cubilia est ut, senectus nec enim facilisis ligula justo convallis, himenaeos suspendisse fames hac eleifend sem velit. \nMi risus justo non posuere ut aptent litora vehicula, commodo conubia porttitor curabitur nisi praesent mauris. \nNunc risus fringilla augue lectus hendrerit velit nulla tortor vehicula arcu orci, interdum adipiscing placerat inceptos magna convallis dictum senectus proin egestas, suspendisse lorem curae aliquam morbi quisque tellus fusce tempus ante. \n</p>\n<p>\nJusto ultricies massa elementum leo urna auctor primis ante non primis euismod, pharetra ipsum proin bibendum ad lacinia felis nibh placerat ipsum. \nAt felis gravida purus felis curae elit inceptos mi sem curae, class egestas lobortis tortor aenean augue vulputate odio vel suscipit, cursus potenti mattis tempus consectetur inceptos litora bibendum blandit. \nAt class cubilia aenean odio tempus convallis pretium et, vitae purus convallis sodales in vitae nec morbi, ullamcorper ligula velit id fringilla blandit luctus. \nAenean varius himenaeos luctus nisl cras malesuada habitasse sapien urna molestie fames, cubilia semper a congue lacus neque varius etiam lectus ornare lobortis, congue tempor egestas nullam dapibus class nisl porttitor ut amet. \n</p>', 0, 2, 2),
(3, '2020-06-21 19:19:20', '2020-06-21 19:19:20', '<p>\nLorem ipsum leo platea nullam eros lacus enim, fermentum erat fringilla est arcu mauris adipiscing euismod, pellentesque nisl integer suscipit pellentesque quisque. \nPosuere proin mollis odio consequat donec venenatis blandit vulputate semper scelerisque, convallis luctus venenatis gravida neque et iaculis blandit placerat primis cubilia, laoreet luctus pharetra ante tortor neque vel sociosqu condimentum. \nMi felis quam erat nisi cras netus mattis lorem, mi ac aliquam odio pellentesque sed dui elit, fermentum purus duis elementum semper senectus lacinia. \nLorem consectetur litora mauris enim congue auctor dapibus nisi dui, consectetur tincidunt ornare pulvinar pretium interdum curabitur sit nullam, scelerisque convallis himenaeos curabitur vehicula a litora ipsum. \n</p>\n<p>\nUllamcorper vivamus faucibus lorem condimentum curabitur consequat viverra orci, euismod dictum fermentum elementum malesuada tortor luctus proin dui, eu erat dictumst scelerisque commodo libero himenaeos. \nVelit fringilla leo lobortis cubilia potenti mattis ipsum aenean porttitor, aenean bibendum aliquam faucibus neque bibendum inceptos mauris dolor ut, nunc ultricies consequat etiam maecenas fusce iaculis aliquet. \nUt placerat ipsum pellentesque mauris porta nibh massa curae vel condimentum, luctus porttitor hac scelerisque duis donec pretium elit leo bibendum, class curabitur commodo malesuada lobortis rhoncus id conubia urna. \nMalesuada a velit morbi massa senectus curae mollis, dapibus cubilia interdum per elit. \n</p>', 0, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `text`, `seen`, `created_at`, `updated_at`) VALUES
(1, 'Dupont', 'dupont@la.fr', 'Lorem ipsum inceptos malesuada leo fusce tortor sociosqu semper, facilisis semper class tempus faucibus tristique duis eros, cubilia quisque habitasse aliquam fringilla orci non. Vel laoreet dolor enim justo facilisis neque accumsan, in ad venenatis hac per dictumst nulla ligula, donec mollis massa porttitor ullamcorper risus. Eu platea fringilla, habitasse.', 0, '2020-06-21 19:19:20', '2020-06-21 19:19:20'),
(2, 'Durand', 'durand@la.fr', ' Lorem ipsum erat non elit ultrices placerat, netus metus feugiat non conubia fusce porttitor, sociosqu diam commodo metus in. Himenaeos vitae aptent consequat luctus purus eleifend enim, sollicitudin eleifend porta malesuada ac class conubia, condimentum mauris facilisis conubia quis scelerisque. Lacinia tempus nullam felis fusce ac potenti netus ornare semper molestie, iaculis fermentum ornare curabitur tincidunt imperdiet scelerisque imperdiet euismod.', 0, '2020-06-21 19:19:20', '2020-06-21 19:19:20'),
(3, 'Martin', 'martin@la.fr', 'Lorem ipsum tempor netus aenean ligula habitant vehicula tempor ultrices, placerat sociosqu ultrices consectetur ullamcorper tincidunt quisque tellus, ante nostra euismod nec suspendisse sem curabitur elit. Malesuada lacus viverra sagittis sit ornare orci, augue nullam adipiscing pulvinar libero aliquam vestibulum, platea cursus pellentesque leo dui. Lectus curabitur euismod ad, erat.', 1, '2020-06-21 19:19:20', '2020-06-21 19:19:20');

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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2014_10_21_105844_create_roles_table', 1),
('2014_10_21_110325_create_foreign_keys', 1),
('2014_10_24_205441_create_contact_table', 1),
('2014_10_26_172107_create_posts_table', 1),
('2014_10_26_172631_create_tags_table', 1),
('2014_10_26_172904_create_post_tag_table', 1),
('2014_10_26_222018_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summary` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `created_at`, `updated_at`, `title`, `slug`, `summary`, `content`, `seen`, `active`, `user_id`) VALUES
(1, '2020-06-21 19:19:20', '2020-06-21 19:19:20', 'Post 1', 'post-1', '<img alt=\"\" src=\"/filemanager/userfiles/user2/mega-champignon.png\" style=\"float:left; height:128px; width:128px\" /><p>\nLorem ipsum lectus blandit facilisis inceptos auctor ac justo massa, ligula tempus pretium aenean curabitur sit sed eros ut, class ac ligula nulla pulvinar etiam semper sapien. \nFelis magna posuere cubilia netus neque consectetur molestie proin, per proin fringilla cursus donec habitant malesuada, nunc imperdiet aenean velit dictumst justo orci. \n</p>', '<p>\nLorem ipsum consectetur purus scelerisque pretium nostra lectus quisque ipsum porttitor nunc elit potenti, vestibulum eleifend molestie aliquet aliquam odio malesuada sagittis volutpat convallis pharetra tellus. \nEst conubia varius laoreet sagittis diam platea iaculis lorem aenean, malesuada ad feugiat ligula nisi diam egestas curae lectus, feugiat eleifend tristique litora imperdiet nunc bibendum tempor. \nSagittis varius mauris sapien egestas eleifend habitant facilisis suspendisse, condimentum varius elementum nam viverra risus eget, lacinia nullam potenti libero rhoncus ipsum consequat. \nAliquam auctor semper enim congue fusce neque orci sed torquent conubia risus, pulvinar sollicitudin curabitur senectus dictum phasellus dictum laoreet nulla. \n</p>\n<p>\nPrimis conubia class bibendum nibh etiam elit duis nisi conubia est, donec commodo posuere imperdiet mi platea sit conubia netus. \nVarius purus tempus duis maecenas inceptos risus mattis, pharetra dictum ornare donec elementum per lacus eros, aenean nec primis faucibus aptent suspendisse. \nViverra taciti aliquam metus erat eleifend ut tortor tristique, porttitor praesent dapibus himenaeos fermentum iaculis sagittis condimentum, dapibus aenean nec himenaeos lobortis mattis turpis. \nPorttitor neque tortor etiam massa euismod lacinia, curabitur sollicitudin lectus ante tellus pretium odio, tristique suspendisse adipiscing praesent enim. \nMagna risus eget quisque primis hendrerit risus feugiat mollis pharetra, est auctor luctus aliquam vel ornare interdum praesent ut, libero fermentum hac semper elementum phasellus sollicitudin ornare. \n</p>\n<p>\nAenean feugiat integer suscipit varius lobortis nec neque fames interdum vulputate, non felis rhoncus aenean ante nibh lacinia aliquet tempus taciti, diam elit facilisis himenaeos donec aliquam tempor interdum proin. \nTorquent fringilla vivamus fermentum id maecenas nisi curae et netus, eleifend mi dictum tempor duis cubilia semper elit, lobortis torquent imperdiet primis class bibendum quisque feugiat. \nLectus elit nunc amet mattis curabitur himenaeos vehicula aenean ornare, turpis nisi euismod habitasse sem eget rutrum faucibus arcu, netus adipiscing ac nostra vehicula urna euismod convallis. \nFusce pulvinar consequat fringilla risus tortor mi lorem convallis vehicula euismod nulla cras fringilla sit, ultricies curabitur ullamcorper vestibulum bibendum tortor est conubia felis lobortis praesent torquent velit. \n</p>\n<p>\nAenean ac consectetur viverra arcu auctor eleifend taciti, etiam suspendisse elementum curabitur placerat iaculis amet, pellentesque sagittis nulla tempus egestas fusce ultricies, senectus magna nec aliquam maecenas ipsum. \nVel etiam ut curae erat diam quam eros arcu volutpat, curabitur nibh dui nibh curabitur id leo sem phasellus hendrerit, dictumst dolor ut suspendisse volutpat condimentum tellus lacinia. \nMauris congue nisl cras libero luctus phasellus himenaeos ut, consequat eu turpis viverra hac gravida placerat habitasse, ornare hac sodales luctus eleifend suscipit sagittis. \nVivamus dui quis ultrices pellentesque dui aliquam aenean nisi faucibus, scelerisque ut nec tempor facilisis placerat porta hac et, torquent magna augue himenaeos netus ipsum sed praesent. \n</p>\n<p>\nDonec platea tempus bibendum pulvinar congue a interdum commodo luctus, neque volutpat molestie venenatis lorem arcu purus elit, mollis platea est viverra fusce bibendum habitant curabitur. \nVolutpat etiam nec id vitae duis egestas convallis himenaeos curae accumsan, cubilia sagittis pretium sociosqu fermentum phasellus mollis hendrerit sagittis, suscipit habitant ut class sit eget ipsum aenean nam. \nSodales etiam pharetra fusce himenaeos condimentum nibh, sodales nisl imperdiet elit inceptos senectus, augue iaculis torquent luctus urna. \n</p>', 0, 1, 1),
(2, '2020-06-21 19:19:20', '2020-06-21 19:19:20', 'Post 2', 'post-2', '<img alt=\"\" src=\"/filemanager/userfiles/user2/goomba.png\" style=\"float:left; height:128px; width:128px\" /><p>\nLorem ipsum aliquet hendrerit condimentum fermentum eget justo feugiat cursus, ut litora lacinia torquent adipiscing ornare elementum torquent integer nibh, tortor ut integer vestibulum consequat cras integer convallis. \nNibh pretium cubilia in id malesuada massa elit quisque aliquet a consequat, vehicula curabitur aenean lacinia eleifend amet mollis maecenas felis condimentum. \n</p>', '<p>Lorem ipsum convallis ac curae non elit ultrices placerat netus metus feugiat, non conubia fusce porttitor sociosqu diam commodo metus in himenaeos, vitae aptent consequat luctus purus eleifend enim sollicitudin eleifend porta. Malesuada ac class conubia condimentum mauris facilisis conubia quis scelerisque lacinia, tempus nullam felis fusce ac potenti netus ornare semper. Molestie iaculis fermentum ornare curabitur tincidunt imperdiet scelerisque, imperdiet euismod scelerisque torquent curae rhoncus, sollicitudin tortor placerat aptent hac nec. Posuere suscipit sed tortor neque urna hendrerit vehicula duis litora tristique congue nec auctor felis libero, ornare habitasse nec elit felis inceptos tellus inceptos cubilia quis mattis faucibus sem non.</p>\n\n<p>Odio fringilla class aliquam metus ipsum lorem luctus pharetra dictum, vehicula tempus in venenatis gravida ut gravida proin orci, quis sed platea mi quisque hendrerit semper hendrerit. Facilisis ante sapien faucibus ligula commodo vestibulum rutrum pretium, varius sem aliquet himenaeos dolor cursus nunc habitasse, aliquam ut curabitur ipsum luctus ut rutrum. Odio condimentum donec suscipit molestie est etiam sit rutrum dui nostra, sem aliquet conubia nullam sollicitudin rhoncus venenatis vivamus rhoncus netus, risus tortor non mauris turpis eget integer nibh dolor. Commodo venenatis ut molestie semper adipiscing amet cras, class donec sapien malesuada auctor sapien arcu inceptos, aenean consequat metus litora mattis vivamus.</p>\n\n<pre>\n<code class=\"language-php\">protected function getUserByRecaller($recaller)\n{\n	if ($this-&gt;validRecaller($recaller) &amp;&amp; ! $this-&gt;tokenRetrievalAttempted)\n	{\n		$this-&gt;tokenRetrievalAttempted = true;\n\n		list($id, $token) = explode(\"|\", $recaller, 2);\n\n		$this-&gt;viaRemember = ! is_null($user = $this-&gt;provider-&gt;retrieveByToken($id, $token));\n\n		return $user;\n	}\n}</code></pre>\n\n<p>Feugiat arcu adipiscing mauris primis ante ullamcorper ad nisi, lobortis arcu per orci malesuada blandit metus tortor, urna turpis consectetur porttitor egestas sed eleifend. Eget tincidunt pharetra varius tincidunt morbi malesuada elementum mi torquent mollis, eu lobortis curae purus amet vivamus amet nulla torquent, nibh eu diam aliquam pretium donec aliquam tempus lacus. Tempus feugiat lectus cras non velit mollis sit et integer, egestas habitant auctor integer sem at nam massa himenaeos, netus vel dapibus nibh malesuada leo fusce tortor. Sociosqu semper facilisis semper class tempus faucibus tristique duis eros, cubilia quisque habitasse aliquam fringilla orci non vel, laoreet dolor enim justo facilisis neque accumsan in.</p>\n\n<p>Ad venenatis hac per dictumst nulla ligula donec, mollis massa porttitor ullamcorper risus eu platea, fringilla habitasse suscipit pellentesque donec est. Habitant vehicula tempor ultrices placerat sociosqu ultrices consectetur ullamcorper tincidunt quisque tellus, ante nostra euismod nec suspendisse sem curabitur elit malesuada lacus. Viverra sagittis sit ornare orci augue nullam adipiscing pulvinar libero aliquam vestibulum platea cursus pellentesque leo dui lectus, curabitur euismod ad erat curae non elit ultrices placerat netus metus feugiat non conubia fusce porttitor. Sociosqu diam commodo metus in himenaeos vitae aptent consequat luctus purus eleifend enim sollicitudin eleifend, porta malesuada ac class conubia condimentum mauris facilisis conubia quis scelerisque lacinia.</p>\n\n<p>Tempus nullam felis fusce ac potenti netus ornare semper molestie iaculis, fermentum ornare curabitur tincidunt imperdiet scelerisque imperdiet euismod. Scelerisque torquent curae rhoncus sollicitudin tortor placerat aptent hac, nec posuere suscipit sed tortor neque urna hendrerit, vehicula duis litora tristique congue nec auctor. Felis libero ornare habitasse nec elit felis, inceptos tellus inceptos cubilia quis mattis, faucibus sem non odio fringilla. Class aliquam metus ipsum lorem luctus pharetra dictum vehicula, tempus in venenatis gravida ut gravida proin orci, quis sed platea mi quisque hendrerit semper.</p>\n', 0, 1, 2),
(3, '2020-06-21 19:19:20', '2020-06-21 19:19:20', 'Post 3', 'post-3', '<img alt=\"\" src=\"/filemanager/userfiles/user2/rouge-shell.png\" style=\"float:left; height:128px; width:128px\" /><p>\nLorem ipsum purus non lacus etiam luctus, eget habitant erat dapibus adipiscing lacus, dolor orci vehicula faucibus at. \nPer netus fermentum facilisis velit aenean semper tellus, luctus donec blandit nisi vehicula condimentum tempus himenaeos, aptent tempus justo ipsum per fringilla. \nPurus torquent litora et, elit eu maecenas tortor, taciti dapibus. \n</p>', '<p>\nLorem ipsum inceptos litora consectetur habitant inceptos accumsan pretium potenti, non eleifend volutpat consequat dolor fermentum netus leo vivamus ipsum, fringilla placerat donec sem mauris maecenas donec nam. \nAliquet risus felis scelerisque tempor mauris cras ac, tortor ligula cubilia hendrerit ut metus libero, lacus porta nulla tortor nisl lacinia. \nPretium vivamus senectus ad litora dictum senectus, vulputate donec placerat congue pulvinar non, tellus condimentum amet litora aenean. \nEst conubia risus litora primis ut etiam venenatis mollis laoreet gravida, mauris porttitor dictum massa potenti mollis consectetur sit sed, ultrices sodales litora ad dapibus ultricies curabitur volutpat amet. \n</p>\n<p>\nNunc quis cras rhoncus potenti nulla lectus a, aenean vivamus orci molestie dictum adipiscing donec, augue est euismod sit est tempus, vel quisque taciti lacus convallis euismod. \nUt duis tincidunt lacinia massa luctus pellentesque ad integer, quis pulvinar eget quis aenean lobortis gravida lorem, adipiscing non porta adipiscing neque aliquam aenean. \nSodales erat a augue mauris senectus hendrerit gravida, facilisis fusce dictumst sodales dolor diam, consectetur suscipit diam vel ultricies phasellus. \nTortor dictum risus vitae donec dapibus libero diam suscipit torquent conubia, ullamcorper curae scelerisque aliquam felis quis integer elementum tellus lacinia netus, erat lectus magna venenatis gravida taciti lorem leo condimentum. \n</p>\n<p>\nLeo libero platea luctus tempor integer urna pulvinar egestas dui egestas erat, velit at posuere enim nunc aliquet habitasse curae ultricies diam blandit, fringilla viverra inceptos magna habitant fames vitae egestas duis condimentum. \nUrna semper nullam purus aliquet suspendisse aliquam curabitur, venenatis habitasse metus molestie donec platea neque rhoncus, fusce molestie eleifend conubia cursus sodales. \nErat non eu vitae sociosqu vehicula risus rhoncus tellus, primis blandit habitant gravida nullam hac donec iaculis, augue aenean praesent hendrerit litora leo litora. \nMalesuada donec potenti ut sapien potenti netus viverra luctus, mollis hendrerit dui donec amet magna eros faucibus a, nostra mattis sapien malesuada condimentum praesent torquent. \n</p>\n<p>\nAenean at feugiat blandit varius sollicitudin fames bibendum litora erat cras, a ornare pharetra etiam quisque nibh consequat aenean iaculis nam sollicitudin, enim etiam cras torquent augue dapibus malesuada donec eget. \nMauris vel sagittis faucibus a sodales lobortis libero id mattis aenean, curabitur himenaeos nostra cubilia etiam tempus fringilla gravida. \nId scelerisque nostra condimentum netus luctus fames suscipit pretium, id dictum consectetur lacinia condimentum ultricies aenean urna sapien, dictum sapien ullamcorper netus auctor gravida non. \nScelerisque tincidunt commodo arcu curabitur iaculis semper nisl tristique, cubilia blandit integer gravida eget imperdiet laoreet eget curabitur, faucibus ultrices senectus platea ligula curae feugiat. \n</p>\n<p>\nCongue erat bibendum ad feugiat odio varius massa egestas quis, rhoncus massa ultricies tempus mauris leo lectus. \nDui leo augue mollis blandit venenatis aenean sed lectus, mauris curabitur aliquam imperdiet potenti viverra vestibulum mauris vestibulum, tellus mauris duis tellus tortor feugiat curabitur. \nCongue aliquam elit amet fringilla cubilia tempor fusce facilisis, senectus faucibus vel commodo imperdiet leo magna mauris, tortor hendrerit congue erat litora sodales etiam. \nUltricies integer risus elit donec cras per justo, mattis mauris condimentum mauris donec. \nRisus turpis nec class iaculis gravida, aliquam enim adipiscing at, condimentum risus auctor senectus. \n</p>\n<p>\nLitora cubilia hac duis, convallis. \n</p>', 0, 1, 2),
(4, '2020-06-21 19:19:20', '2020-06-21 19:19:20', 'Post 4', 'post-4', '<img alt=\"\" src=\"/filemanager/userfiles/user2/rouge-shyguy.png\" style=\"float:left; height:128px; width:128px\" /><p>\nLorem ipsum per dolor taciti varius sed orci morbi hendrerit tempor imperdiet consequat aliquet posuere, pulvinar sit pellentesque congue sollicitudin erat lacinia augue libero molestie luctus convallis. \nMaecenas placerat class varius nostra rhoncus eget libero dictum aenean fusce libero mauris, diam lacinia per curabitur nam magna donec consectetur inceptos integer. \n</p>', '<p>\nLorem ipsum mollis egestas a faucibus pharetra ipsum, tempor volutpat cursus fringilla semper ut sapien elit, class a hac vitae sociosqu donec. \nNullam phasellus lacinia euismod malesuada habitant gravida quis potenti, in fermentum suscipit tempus nibh magna cubilia condimentum, donec hac viverra hendrerit facilisis ullamcorper feugiat. \nNetus velit elit fames primis est molestie, habitant augue hac ultricies egestas. \nPretium convallis potenti pretium aliquet dictum velit, eget fermentum facilisis consequat nisi egestas metus, maecenas nulla turpis sem sapien. \nVestibulum class tempus purus accumsan senectus nunc egestas ligula aptent velit elementum leo, semper vehicula vitae placerat tempus etiam posuere metus ante diam. \n</p>\n<p>\nFames vitae sociosqu vehicula eu libero eleifend netus placerat risus, commodo lacinia nec libero ipsum mollis curabitur accumsan, ut placerat nulla orci porta id etiam auctor. \nSenectus metus amet at commodo lobortis habitant platea vel molestie dapibus, in platea quisque etiam luctus ut hendrerit mollis rhoncus, vel eleifend eget venenatis etiam tortor et vulputate vel. \nVarius nec feugiat ornare magna faucibus ut proin, sit cursus interdum pellentesque nam posuere malesuada pellentesque, aptent in porta fusce quisque risus. \nTristique ornare nostra condimentum fringilla aenean tristique feugiat placerat nullam massa interdum, consequat duis risus libero porttitor bibendum mi morbi blandit mi. \n</p>\n<p>\nLacinia curabitur vestibulum non venenatis aenean neque semper nibh vulputate, vel quis donec eget ad facilisis nam libero mi, volutpat lacinia egestas metus facilisis laoreet erat adipiscing. \nOdio luctus imperdiet eu luctus class conubia a amet dui, gravida aenean suscipit rutrum metus etiam primis lectus, amet sit aliquam ad fusce eros etiam elit. \nLacus netus sem semper phasellus a mi vitae id feugiat, posuere vivamus pellentesque odio suscipit est dictumst. \nVestibulum nisi quis augue amet litora mollis nulla dui eros, imperdiet commodo nisl curabitur nisl dictum dictumst arcu. \n</p>\n<p>\nPretium nunc nec iaculis eros aliquam inceptos fusce consectetur tempor volutpat vulputate, vel ut massa eleifend vel malesuada cubilia magna porta lacinia velit, taciti auctor mauris arcu tincidunt lacus posuere platea convallis praesent. \nUllamcorper curabitur varius suspendisse massa metus aliquam purus arcu integer, eros gravida cubilia aenean fusce arcu class habitasse venenatis, auctor sagittis nullam lacus velit fusce et eleifend. \nNam iaculis quisque commodo aenean quisque metus nullam tincidunt venenatis orci netus inceptos lorem, netus etiam urna nisi nam feugiat adipiscing ipsum quisque vulputate ut. \nMauris mi nulla etiam primis curabitur condimentum nostra, tempus et ipsum viverra aptent senectus ullamcorper, sodales faucibus interdum varius sodales rhoncus. \n</p>\n<p>\nPosuere lacinia vel aliquam vivamus lobortis netus vulputate, fames lorem non aliquet gravida. \nFringilla vitae vivamus ultrices magna tempus vivamus accumsan aliquam habitant, phasellus elementum elit vestibulum donec est nullam sed, venenatis duis est quisque felis platea aenean ultrices. \nLobortis nullam phasellus arcu consequat condimentum adipiscing dolor vitae, semper venenatis suscipit ullamcorper posuere sit ante etiam euismod, lobortis pellentesque risus inceptos nulla faucibus id. \nPraesent litora purus adipiscing condimentum orci posuere orci adipiscing, per ante turpis orci et molestie porta phasellus, primis pharetra feugiat non aenean condimentum torquent. \n</p>\n<p>\nFringilla id senectus suspendisse erat ultrices purus, ut ornare tortor vehicula hac accumsan potenti, tellus tortor nisi dolor neque. \n</p>', 0, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1),
(4, 2, 2),
(5, 2, 3),
(6, 3, 1),
(7, 3, 2),
(8, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', '2020-06-21 19:19:19', '2020-06-21 19:19:19'),
(2, 'Redactor', 'redac', '2020-06-21 19:19:19', '2020-06-21 19:19:19'),
(3, 'User', 'user', '2020-06-21 19:19:19', '2020-06-21 19:19:19');

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
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tag` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `created_at`, `updated_at`, `tag`) VALUES
(1, '2020-06-21 19:19:20', '2020-06-21 19:19:20', 'Tag1'),
(2, '2020-06-21 19:19:20', '2020-06-21 19:19:20', 'Tag2'),
(3, '2020-06-21 19:19:20', '2020-06-21 19:19:20', 'Tag3'),
(4, '2020-06-21 19:19:20', '2020-06-21 19:19:20', 'Tag4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `valid` tinyint(1) NOT NULL DEFAULT 0,
  `confirmed` tinyint(1) NOT NULL DEFAULT 0,
  `confirmation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role_id`, `seen`, `valid`, `confirmed`, `confirmation_code`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'GreatAdmin', 'admin@la.fr', '$2y$10$nceIewhR6CzwDQiJ6/F.LOoR4YxotWxcO0KIUKeUxO5tYjhwBcbB.', 1, 1, 0, 1, NULL, '2020-06-21 19:19:20', '2020-06-21 19:19:20', NULL),
(2, 'GreatRedactor', 'redac@la.fr', '$2y$10$qHL9JmloVSIq9Hp3Rr9R2unVtvzmM6aeU0ddVDiDCfYxpxmPBj3My', 2, 1, 1, 1, NULL, '2020-06-21 19:19:20', '2020-06-21 19:19:20', NULL),
(3, 'Walker', 'walker@la.fr', '$2y$10$V.xRdKmMlb1YJn5l5IYzZuweaH9V.C8G6LlZvT/AlAHz2u70j/5Si', 3, 0, 0, 1, NULL, '2020-06-21 19:19:20', '2020-06-21 19:19:20', NULL),
(4, 'Slacker', 'slacker@la.fr', '$2y$10$huLfpeQTr/tDfZF/vkJRgeFS2U/bCddzxU6aJRthWrV6Yn1r3D3qO', 3, 0, 0, 1, NULL, '2020-06-21 19:19:20', '2020-06-21 19:19:20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_tag_post_id_foreign` (`post_id`),
  ADD KEY `post_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_tag_unique` (`tag`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
