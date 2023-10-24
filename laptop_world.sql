-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 11:08 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laptop_world`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Tlinh', 'dvtlinh26@gmail.com', '123456a@', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `headquarter` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `email`, `phone_number`, `headquarter`, `description`, `logo`, `created_at`, `updated_at`) VALUES
(5, 'VinGroup', 'vingroup@gmail.com', 243974999, '2WX8+RM5, Đối diện TTTM Vincom, Khu đô thị Vinhomes Riverside, Long Biên, Hà Nội', 'Tiền thân của Vingroup là Tập đoàn Technocom, thành lập năm 1993 tại Ucraina. Đầu những năm 2000, Technocom trở về Việt Nam, tập trung đầu tư vào lĩnh vực du lịch và bất động sản với hai thương hiệu chiến lược ban đầu là Vinpearl và Vincom. Đến tháng 1/2012, công ty CP Vincom và Công ty CP Vinpearl sáp nhập, chính thức hoạt động dưới mô hình Tập đoàn với tên gọi Tập đoàn Vingroup – Công ty CP.  3 nhóm hoạt động trọng tâm của Tập đoàn bao gồm:  - Công nghệ - Công nghiệp - Thương mại Dịch vụ - Thiện nguyện Xã hội  Với mong muốn đem đến cho thị trường những sản phẩm - dịch vụ theo tiêu chuẩn quốc tế và những trải nghiệm hoàn toàn mới về phong cách sống hiện đại, ở bất cứ lĩnh vực nào Vingroup cũng chứng tỏ vai trò tiên phong, dẫn dắt sự thay đổi xu hướng tiêu dùng.', 'avatar/aWKyk2WaXmBazc5Qcvx8t0pdrekM0oGB8Ohcn7fZ.png', '2023-10-16 20:20:02', '2023-10-16 20:42:48'),
(6, 'ASUS Business', 'asus@gmail.com', 2012835792, 'Beitou (Bắc Đầu), Đài Bắc, Đài Loan', 'Thế giới kinh doanh luôn biến đổi và chúng tôi luôn sẵn sàng giúp bạn tiến tới tương lai. Ngày nay các doanh nghiệp cần sự đáng tin cậy. Một đối tác chiến lược mà họ có thể tin tưởng. Những công nghệ linh hoạt có thể phát triển song hành cùng họ. Một chuyên gia tay trong am hiểu tường tận về giải pháp sáng tạo - để họ được rảnh tay lo phần việc của mình. Đó chính là ASUS Business. Các giải pháp của chúng tôi trao quyền cho các tổ chức khai thác hoạt động thương mại trong thế giới hiện đại. Với sự hỗ trợ của chúng tôi, bạn sẽ làm việc nhanh hơn, cộng tác liền mạch, tại văn phòng, ở nhà cũng như trong khi di chuyển và tận hưởng hiệu suất làm việc tốc độ cho mọi tác vụ.', 'avatar/SMt25uAC04FpUGPPOsHxJMMvM3pHUFvVRlUKPZp1.svg', '2023-10-16 20:28:44', '2023-10-16 20:28:44'),
(7, 'Dell Technologies', 'dell@gmail.com', 1800282848, 'Round Rock, Texas, Hoa Kỳ', 'The power to do the more', 'avatar/gyZArg1ljpDApy8FxZGXnG5hs3GoLoa6ZXwGBMiC.png', '2023-10-16 20:49:20', '2023-10-16 20:51:23'),
(8, 'Hewlett-Packard (HP)', 'HewlettPackard@gmail.com', 1829345678, 'Palo Alto, California, Hoa Kỳ', 'Chúng tôi là một công ty công nghệ được sinh ra từ niềm tin rằng các công ty nên làm nhiều hơn là chỉ tạo ra lợi nhuận. Họ nên làm cho thế giới trở thành một nơi tốt đẹp hơn.  Những nỗ lực của chúng tôi trong hành động khí hậu, nhân quyền và công bằng kỹ thuật số chứng minh rằng chúng tôi đang làm mọi thứ trong khả năng của mình để biến nó thành như vậy.     Với hơn 80 năm hành động chứng minh ý định của chúng tôi, chúng tôi có sự tự tin để hình dung một thế giới nơi sự đổi mới thúc đẩy những đóng góp phi thường cho nhân loại.     Và công nghệ của chúng tôi - một danh mục sản phẩm và dịch vụ gồm các hệ thống cá nhân, máy in và giải pháp in 3D - được tạo ra để truyền cảm hứng cho tiến bộ có ý nghĩa này.  Chúng tôi biết rằng những ý tưởng chu đáo có thể đến từ bất cứ ai, bất cứ nơi nào, bất cứ lúc nào.     Và tất cả những gì cần làm là một để thay đổi thế giới.', 'avatar/VW4LFHwonikZbQOeq1kYkF1kCHMucOPFIr2domej.png', '2023-10-16 20:54:00', '2023-10-16 20:54:00'),
(9, 'Lenovo Group Ltd', 'lenovo@gmail.com', 1829345678, 'Hải Điến, Bắc Kinh, Trung Quốc', 'Câu chuyện của Lenovo luôn là về việc định hình trí thông minh máy tính để tạo ra một thế giới tốt đẹp hơn. Với danh mục sản phẩm công nghệ đa dạng nhất thế giới, chúng tôi mang đến tầm nhìn về Công nghệ thông minh hơn cho tất cả mọi người thông qua các sản phẩm, giải pháp, phần mềm và dịch vụ mà các cá nhân, cộng đồng, doanh nghiệp và toàn bộ dân số cần để phát huy tiềm năng của họ.', 'avatar/3CkbckhTIZB3EqMNuxyTwpW2moPRUoFL11ghPWx6.png', '2023-10-16 20:56:38', '2023-10-16 20:56:38'),
(10, 'Acer Inc.', 'acer@gmail.com', 2131754632, 'Tân Bắc, Đài Loan', 'Chúng tôi muốn đảm bảo rằng mọi khoảnh khắc quan trọng đều dễ dàng và bổ ích cho người dùng cuối. Chúng tôi muốn hỗ trợ họ dễ dàng nhất có thể trong quá trình chuyển đổi kỹ thuật số của họ.  Đây là một trong những lý do tại sao Acer đã xây dựng được danh tiếng vững chắc như một thương hiệu đáng tin cậy với danh mục sản phẩm đầy đủ, các giải pháp hiện đại và dịch vụ và hỗ trợ vô song.', 'avatar/v0tt7a1Y8z557cPVaZyXsYNPbC39CevwzH22oKVM.png', '2023-10-16 20:58:49', '2023-10-16 20:58:49'),
(11, 'Apple Inc', 'apple@gmail.com', 837054928, 'Cupertino, California, Hoa Kỳ', 'Công nghệ tốt nhất là công nghệ mà mọi người đều có thể sử dụng. Đó là lý do các sản phẩm và dịch vụ của chúng tôi được thiết kế hướng đến yếu tố hòa nhập, tích hợp các tính năng trợ năng để giúp bạn kết nối, sáng tạo và làm mọi thứ bạn yêu thích theo cách phù hợp nhất với bạn.', 'avatar/AL44r6xLxdc31o4oj94kmjoXylxuzJY5gujn1kWX.png', '2023-10-16 21:01:07', '2023-10-16 21:01:07'),
(12, 'Microsoft', 'microsoft@gmail.com', 1231563234, 'Khuôn viên Microsoft Redmond Redmond, Washington, Hoa Kỳ', 'Xem cách chúng tôi sử dụng công nghệ để xây dựng nền tảng và tài nguyên nhằm giúp tạo ra tác động tích cực lâu dài.', 'avatar/e8vmtZPDCdLw1r7orb7tz9Wx4fiT4fAmvafDRteV.png', '2023-10-16 21:07:01', '2023-10-16 21:07:01'),
(13, 'Samsung Electronics', 'samsung@gmail.com', 847834929, '129 Samseong-ro, Yeongtong-gu, Suwon-si, Gyeonggi-do (Maetan-dong)', 'Samsung Electronics liên tục tái tạo tương lai. Chúng tôi khám phá những điều chưa biết để khám phá các công nghệ giúp mọi người trên khắp thế giới có cuộc sống hạnh phúc hơn, khỏe mạnh hơn.', 'avatar/pqCGwwGUcfnBp3fqx8Jgi60A7U69hdPYWk6rbFxo.png', '2023-10-16 21:09:04', '2023-10-16 21:09:04'),
(14, 'Xiaomi Inc', 'xiaomi@gmail.com', 838736378, 'Hải Điến, Bắc Kinh, Trung Quốc', '\"Chỉ dành cho người hâm mộ\" - đó là niềm tin của chúng tôi. Những người hâm mộ Mi khó tính của chúng tôi dẫn đầu từng bước trên con đường. Trên thực tế, nhiều nhân viên Xiaomi là người hâm mộ Mi đầu tiên trước khi gia nhập đội. Là một nhóm, chúng tôi chia sẻ cùng một sự theo đuổi không ngừng về sự hoàn hảo, không ngừng tinh chỉnh và nâng cao sản phẩm của mình để tạo ra trải nghiệm người dùng tốt nhất có thể. Chúng tôi cũng không sợ hãi trong việc thử nghiệm những ý tưởng mới và vượt qua ranh giới của chính mình. Sự cống hiến và niềm tin của chúng tôi vào sự đổi mới, cùng với sự hỗ trợ của người hâm mộ Mi, là động lực đằng sau các sản phẩm Mi độc đáo của chúng tôi.', 'avatar/Zsn2cSr5W60FHaO5H9NUdtRijcVfKR6uYmOCouNE.png', '2023-10-16 21:12:23', '2023-10-16 21:12:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_10_15_155735_create_companies_table', 1),
(3, '2023_10_15_161400_create_admins_table', 2),
(4, '2023_10_17_101143_create_products_table', 3),
(5, '2023_10_18_102231_create_users_table', 4),
(6, '2023_10_23_180511_create_orders_table', 5),
(7, '2023_10_23_184312_create_orders__details_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `receiver_name` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `receiver_address` varchar(255) NOT NULL,
  `receiver_phone_number` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `total_payment` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `receiver_name`, `user_id`, `receiver_address`, `receiver_phone_number`, `status`, `total_payment`, `created_at`, `updated_at`) VALUES
(1, 'Dang Tuan Minh', 1, 'Cầu Giấy Hà Nội', 8496631, 1, 32580000, '2023-10-23 12:03:27', '2023-10-24 02:06:29');

-- --------------------------------------------------------

--
-- Table structure for table `orders__details`
--

CREATE TABLE `orders__details` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders__details`
--

INSERT INTO `orders__details` (`order_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 2, 2, '2023-10-23 12:03:27', '2023-10-23 12:03:27');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `producer` bigint(20) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_second` varchar(255) NOT NULL,
  `image_third` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `type`, `producer`, `description`, `image`, `image_second`, `image_third`, `created_at`, `updated_at`) VALUES
(1, 'Lenovo ThinkBook 14', 16900000, 'laptop', 9, 'CPU:AMD Ryzen 5 7530U \r\nRAM:16GB (8GB Onboard + 8GB) DDR4 3200Mhz (Tối đa 16GB) \r\nỔ cứng : SSD 512GB M.2 NVMe™ PCIe® 3.0 \r\nVGA : AMD Radeon Graphics \r\nMàn hình : 14\" 16:10, LED Backlit, IPS-level Panel, 300nits, 45% NTSC color gamut, Glossy display, TÜV Rheinland-certified \r\nMàu: Bạc \r\nOS : Windows 11 Home', 'avatar/eqdyafdJkbrZmokWNHkKyityxKalaFaph11euxMa.jpg', 'avatar/7WPSFYIcIIyYrxMJ6NJnmneVn4xgMd10GXWnfmID.jpg', 'avatar/qm1s7fyObFB0APfSVgr1ONamqFiSBFzN4JM7sI6p.jpg', '2023-10-17 04:18:11', '2023-10-17 04:18:11'),
(2, 'LAPTOP ASUS VIVOBOOK X1504VA-NJ070W', 16290000, 'laptop', 6, 'CPU : Intel® Core™ i5-1335U \r\nRam : 8GB DDR4 on board + 8GB DDR4 SO-DIMM \r\nỔ cứng : SSD 512GB M.2 NVMe™ PCIe® 3.0 \r\nVGA : Intel® Iris® Xe Graphics \r\nMàn hình : 15.6\" Full HD,60Hz,250nits, 45% NTSC \r\nMàu: Xanh \r\nOS : Windows 11 Home', 'avatar/Ibuum7fdqBr0bTeHrz0MJ7mH4GyYvgPWvVhqt5CN.jpg', 'avatar/XL2zX8ThlvTe6uJW0Hs1jDMCuRbvOVIQWgKnjKxW.jpg', 'avatar/W8f8wXra3qhuiTjGwbRnjX1CUBsqZnrykcLwslSy.jpg', '2023-10-17 04:51:34', '2023-10-17 04:51:34'),
(3, 'LAPTOP HP 14S-EP0110TU', 20849000, 'laptop', 8, 'CPU: Intel® Core i7 1355U \r\nRAM: 16GB DDR4 3200Mhz \r\nỔ cứng: 512GB SSD M.2 2280 PCIe NVMe \r\nVGA: Intel UHD Graphics \r\nMàn hình: 14\"FHD,IPS,narrow bezel,anti-glare,250 nits,45% NTSC,60Hz \r\nMàu: Bạc \r\nOS: Windows 11 Home', 'avatar/iXaZKjwnMRCNj895zmVeXqtRglgrq2odNY2WHr1A.jpg', 'avatar/rnTN2YVDccB26NR9Hhepwelfhie7HHWHiTaxtBYr.jpg', 'avatar/RU8gKH9VqdmVVuY2bUfqkJtqSjcZ22TSljPUIMMJ.jpg', '2023-10-17 04:52:55', '2023-10-17 04:52:55'),
(4, 'LAPTOP ACER ASPIRE A514-54-5127', 14990000, 'laptop', 10, 'CPU: Intel Core i5 1135G7 RAM: 8GB Ổ cứng: 512GB SSD VGA: Onboard Màn hình: 14 inch FHD HĐH: Win 11 Màu: Bạc', 'avatar/8PvBqRKJeGCpHeothS6D596hOeN2O9Gt9Rfc39us.jpg', 'avatar/HP8sJ4YBtqtHPDWxLujD9rcAyqyX9P7AuhcxYRMs.jpg', 'avatar/6yh7MDQfSmtsT16H0AlP6YxPGIkqzopV2eBJ3y3f.jpg', '2023-10-17 04:54:12', '2023-10-17 04:54:12'),
(5, 'LAPTOP ACER ASPIRE 5 A514-55-5954', 16290000, 'laptop', 10, 'CPU: Intel Core i5-1235U (3.30Ghz upto 4.40 GHz, 12MB) RAM: 8GB (4GB onboard + 4GB So-dim) DDR4 (1 khe, Nâng cấp tối đa 20GB) Ổ cứng: 512GB PCIe NVMe SSD (nâng cấp tối đa 1 TB HDD và 1 TB SSD PCIe Gen3 8 Gb/s up to 4 lanes, NVMe) VGA: Intel Iris Xe Graphics Màn hình: 14.0 inch FHD(1920 x 1080), 60Hz Acer ComfyView™ IPS LED LCD Màu: Xám Tính năng: Đèn nền bàn phím OS: Windows 11 Home', 'avatar/gFYbcTdqsfIK3W7NmKwkiCoKPqlKDgtgMsaHxjna.png', 'avatar/MIFKoFlq9tiaCkBsHJRspMgAqg0ypaIobnoHUo3k.png', 'avatar/wN2LtC4OT8rK6GTT8A9usyw74lDesiJtirKg6sYz.png', '2023-10-17 04:55:44', '2023-10-17 04:55:44'),
(6, 'LAPTOP LENOVO IDEAPAD SLIM 5 PRO 16ARH7', 23290000, 'laptop', 9, 'CPU: AMD Ryzen™ 5 6600HS Creator Edition RAM: 16GB Soldered LPDDR5-6400 (Không nâng cấp được) Ổ cứng: 512GB SSD M.2 2242 PCIe® 4.0x4 NVMe® VGA: NVIDIA® GeForce RTX™ 3050 Ti 4GB GDDR6 Màn hình: 16\" 2.5K (2560x1600) IPS 350nits Anti-glare, 100% sRGB, 120Hz, G-SYNC®, TÜV Low Blue Light, TCON Chất liệu: Nhôm Màu: Xám', 'avatar/swB5hCd8PpL1SdRULLB2m2flHXLXdyaGw1x347jV.jpg', 'avatar/fEuIg5sQzsMzyWPz3Hygqy3NPhGGQf5pHEHmOTih.jpg', 'avatar/S5wx2kAwvdvt5bLLhmHRQktqvha8JnpjmX8QB7wJ.jpg', '2023-10-17 04:57:12', '2023-10-17 04:57:12'),
(7, 'LAPTOP DELL INSPIRON 14 5430 (20DY31)', 25999000, 'laptop', 7, 'CPU: Intel® Core i7 1360P RAM: 16GB LPDDR5 4800Mhz ( Hàn liền, không nâng cấp được ) Ổ cứng: 1TB M.2 PCIe NVMe SSD VGA: Intel® Iris Xe Graphics Màn hình: 14.0-inch 16:10 FHD+ (1920 x 1200) Anti-Glare Non-Touch 250nits WVA Display Màu: Bạc Vỏ : Nhôm OS: Windows 11 Home', 'avatar/9vp7RYJpeEdaXUqogKhbmCE9RawSuIMVTl6T5h85.jpg', 'avatar/WSNjQ4GHhtUyxdQbcF0Ko5mGML4thhDJdNsW3zAE.jpg', 'avatar/8IVODN659Y92tqR004x5NpavZ0HDAvTHfC40gYGp.jpg', '2023-10-17 04:58:24', '2023-10-17 04:58:24'),
(8, 'LAPTOP LENOVO THINKPAD T16 GEN 2', 28490000, 'laptop', 9, 'I7 1355U/16GB RAM/512GB SSD/16 WUXGA/DOS/ĐEN', 'avatar/9sAWjX94mye2AudR5dykJ7LGXILehLjQXxztsWQ5.jpg', 'avatar/hMSQta2lVnEWS91mkU7KTgoNFj44w9JhmlOAYcsv.jpg', 'avatar/NksUCXu2zbuZPwypEFeU89U52H40MmJmDyr2e9Do.jpg', '2023-10-17 04:59:50', '2023-10-17 04:59:50'),
(9, 'LAPTOP APPLE MACBOOK AIR 13', 18990000, 'laptop', 11, 'CPU: Apple M1 RAM: 8GB Ổ cứng: 256GB SSD VGA: Onboard Màn hình: 13.3 inch Retina IPS HĐH: Mac OS Màu: Bạc', 'avatar/jRlzbe8DssqMgOOiK0uK0tg4mbVS0HALPlYv2yle.png', 'avatar/rQSrI4Ed1OZpE0yDbh1DgaEx8wsEiPYtR1eMJmMH.png', 'avatar/KNcS0Dqntq2P2nH9dNH9O1sQ3UP7nNO4sc5DvfVB.png', '2023-10-17 05:01:30', '2023-10-17 05:01:30'),
(10, 'LAPTOP DELL VOSTRO 16 5630', 23990000, 'laptop', 7, 'CPU: Intel Core i5-1335u RAM: 16GB Onboard LPDDR5 4800MHz (Hàn liền,không nâng cấp được) Ổ cứng: 512GB M.2 PCIe NVMe SSD VGA: RTX 2050 4GB GDDR6 / Intel Iris Xe Graphics Màn hình: 16.0 inch FHD+ WVA Anti-glare 16:10 250nits Màu sắc: Xám Chất liệu : Vỏ nhôm OS: Windows 11 Home + Office HS 2021', 'avatar/AG7D4dYDFI7cx3eVPUmo9EtU7yAFBxB3RDBzIPfK.jpg', 'avatar/SlB5ne80kWRDpelHGfkQLTrwfdWQCAed0LbRSgKj.jpg', 'avatar/bPBJBnlA2RQOCv6izqcKGSiWA28ooyANvsILBrSJ.jpg', '2023-10-17 05:02:49', '2023-10-17 05:02:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birth_of_date` date NOT NULL,
  `phone_number` int(11) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `address`, `gender`, `birth_of_date`, `phone_number`, `avatar`, `created_at`, `updated_at`) VALUES
(1, '20010908@st.phenikaa-uni.edu.vn', '123456a@', 'Dang Tuan Minh', 'Cầu Giấy Hà Nội', 'male', '2007-05-27', 8496631, 'avatar/TdR96O3tQbt8n7yjc5FI7vX5jPr4cdhXjS6o8B5z.jpg', '2023-10-19 02:48:47', '2023-10-19 02:48:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `orders__details`
--
ALTER TABLE `orders__details`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producer` (`producer`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders__details`
--
ALTER TABLE `orders__details`
  ADD CONSTRAINT `orders__details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `orders__details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`producer`) REFERENCES `companies` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
