-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th7 20, 2023 lúc 01:35 PM
-- Phiên bản máy phục vụ: 8.0.31
-- Phiên bản PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `gghv_cosmestic`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `name`) VALUES
(1, 'Skin1004'),
(2, 'Klairs'),
(3, 'Nature Republic'),
(4, 'Nacific'),
(5, '9 Wishes'),
(6, 'Dr.G'),
(7, 'Bioderma'),
(8, 'Cocoon'),
(9, 'Prettyskin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Nước tẩy trang'),
(2, 'Sữa rửa mặt'),
(3, 'Kem chống nắng'),
(4, 'Mặt nạ'),
(5, 'Nước hoa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int NOT NULL,
  `firstname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lastname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone_number` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `subject_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `note` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `order_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `customer_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `customer_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `order_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int DEFAULT NULL,
  `total_money` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` int NOT NULL,
  `order_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `price` int DEFAULT NULL,
  `num` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `category_id` int NOT NULL,
  `brand_id` int NOT NULL,
  `title` varchar(350) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `price` int DEFAULT NULL,
  `stock` int NOT NULL,
  `discount` int DEFAULT NULL,
  `thumbnail` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `long_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `title`, `price`, `stock`, `discount`, `thumbnail`, `description`, `long_description`, `created_at`, `updated_at`, `deleted`) VALUES
(4, 4, 2, 'Dear, Klairs Mặt nạ giấy Rich Moist Soothing Tencel Sheet Mask 25ml', 48750, 99, NULL, 'https://product.hstatic.net/200000551679/product/dear__klairs_mat_na_giay_rich_moist___1__6553eb586ac74789a78996984ff81186.png', 'Mặt nạ giấy cấp ẩm Rich Moist Soothing Tencel Sheet Mask là dòng mặt nạ đến từ thương hiệu Klairs với chất mặt nạ tencel mỏng nhẹ, giúp ôm sát da và cho da hấp thụ dưỡng chất tốt nhất. Sản phẩm có khả năng cấp ẩm sâu cho da, làm dịu làn da khô ráp, mẩn cảm, dễ kích ứng do thời tiết hanh khô, khó chịu.', NULL, '2023-07-18 16:04:06', '2023-07-18 16:04:06', NULL),
(5, 3, 2, 'Dear, Klairs Kem chống nắng All-day Airy Sunscreen SPF50+ PA++++ 50g', 360000, 99, NULL, 'https://product.hstatic.net/200000551679/product/dear__klairs_kem_chong_nang_all-day__1__e3018dfb49a0428e927ede8c5e09d04d.png', 'Kem chống nắng Dear, Klairs All-day Airy Sunscreen SPF50+ PA++++ giúp bảo vệ da trước tác hại của tia UVA, UVB. Bổ sung độ ẩm nhẹ cho da mềm mượt và hỗ trợ làm dịu da.', NULL, '2023-07-18 16:04:58', '2023-07-18 16:04:58', NULL),
(6, 5, 2, 'Dear, Klairs nước hoa hồng Supple Preparation Unscented Toner 180mL', 306750, 99, NULL, 'https://product.hstatic.net/200000551679/product/dear__klairs_nuoc_hoa_hong_unscented__1__caf581f2f86f40a6974f54145bde691d.png', 'Nước hoa hồng không mùi Klairs Supple Preparation Unscented Toner dưỡng ẩm và mềm da chiết xuất từ thực vật, giúp cân bằng độ pH, tăng cường hiệu quả chăm sóc da. Toner có dạng trong suốt, không màu, lỏng, nhẹ, hơi nhớt, thấm rất nhanh trên da. Giúp loại bỏ bụi bẩn và bã nhờn dư thừa trên da sau khi rửa mặt đồng thời cân bằng độ pH để các bước skincare tiếp theo đạt hiệu quả hơn.', NULL, '2023-07-18 16:08:04', '2023-07-18 16:08:04', NULL),
(7, 1, 2, 'Dear, Klairs Dầu tẩy trang Gentle Black Deep Cleansing Oil 150mL ver 2', 318750, 99, NULL, 'https://product.hstatic.net/200000551679/product/dear__klairs_dau_tay_trang_gentle_black_deep_cleansing_oil_9551b12054e3475886630678f9c2c50e.png', 'Dầu Tẩy Trang Klairs Gentle Black Deep Cleansing Oil giúp làm sạch các lớp trang điểm trên da, kiểm soát sản xuất bã nhờn và cung cấp dinh dưỡng cho làn da, ngăn chặn tình trạng mất nước và lão hóa, cung cấp các hiệu ứng chất chống oxy hóa mạnh mẽ cho da. ', NULL, '2023-07-18 16:08:04', '2023-07-18 16:08:04', NULL),
(8, 2, 2, 'Dear, Klairs Sữa rửa mặt Rich Moist Foaming Cleanser 100ml', 374250, 99, NULL, 'https://product.hstatic.net/200000551679/product/dear__klairs_sua_rua_mat_rich_moist_foaming_cleanser_100ml_9ec8c09487264d528dda00c3ef45ca5c.png', 'Sữa rửa mặt tạo bọt dưỡng ẩm, dịu nhẹ Dear, Klairs Rich Moist Foaming Cleanser giúp loại bỏ lớp bụi bẩn, bã nhờn trên bề mặt da đồng thời kết cấu dạng bọt hạn chế ma sát gây tổn thương, kích ứng làn da.', NULL, '2023-07-18 16:08:04', '2023-07-18 16:08:04', NULL),
(13, 3, 5, '9 Wishes Kem chống nắng Sun Moisturizer SPF 50+ PA+++ 50ml', 288000, 99, NULL, 'https://product.hstatic.net/200000551679/product/9_wishes_kem_chong_nang_sun_moisturizer__1__fb62e9b47d87479a8d20e4577c69bc2e.png', 'Kem chống nắng cấp ẩm 9 Wishes Sun Moisturizer SPF50/PA+++ mang đến làn da sáng hồng, đồng thời giúp bảo vệ da khỏi tác động các tia UV cung cấp độ ẩm cần thiết cho da nhờ các chiết xuất từ thiên nhiên.', NULL, '2023-07-18 16:16:07', '2023-07-18 16:16:07', NULL),
(14, 4, 5, '9 Wishes Mặt nạ giấy Hydra Ampule Sheet Mask 25ml', 52000, 99, NULL, 'https://sammishop.com/products/9-wishes-mat-na-giay-hydra-ampule-sheet-mask-25ml-ip04#lg=1&slide=0', 'Mặt nạ giấy 9 Wishes Hydra Ampule Sheet Mask chiết xuất 51% nước dừa giúp cấp ẩm tức thì và cân bằng tỉ lệ dầu và nước trên da.', NULL, '2023-07-18 16:16:07', '2023-07-18 16:16:07', NULL),
(15, 5, 5, '9 Wishes Nước hoa hồng Pine Treatment Skin 150ml', 319200, 99, NULL, 'https://product.hstatic.net/200000551679/product/9_wishes_nuoc_hoa_hong_pine_treatment__1__d6d8f88430e74c95b4615ca667e28c13.png', 'Nước hoa hồng 9 Wishes Pine Treatment Skin với 67% chiết xuất lá thông và thành phần được cấp bằng sáng chế HuPura - THA giúp làm sạch sâu và thanh lọc làn da, loại bỏ tế bào chết cùng bã nhờn tích tụ trong lỗ chân lông, đồng thời cân bằng độ ẩm, giúp mang lại làn da thông thoáng và sẵn sàng cho bước skincare tiếp theo.', NULL, '2023-07-18 16:16:07', '2023-07-18 16:16:07', NULL),
(16, 3, 6, 'Dr.G Kem chống nắng R.E.D Blemish Soothing Up Sun SPF 50+ PA++++ 50ml', 392000, 99, NULL, 'https://product.hstatic.net/200000551679/product/dr.g_kem_chong_nang_r.e.d_blemish_soothing_up_sun_4435a974292a4937809567e65e1a4678.png', 'Kem chống nắng Dr.G R.E.D Blemish Soothing Up Sun SPF 50+ PA++++ là kem chống nắng phổ rộng bảo vệ da trước tác hại của tia UVA, UVB, ánh sáng xanh và bụi mịn.', NULL, '2023-07-18 16:21:41', '2023-07-18 16:21:41', NULL),
(17, 4, 6, 'Dr.G Mặt nạ giấy R.E.D Blemish Cool Soothing Mask 30g', 55200, 99, NULL, 'https://product.hstatic.net/200000551679/product/dr.g_mat_na_giay_r.e.d_blemish_f0bdaade03824b7eb982aa0b4da32168.png', 'Mặt nạ rau má làm dịu da mụn Dr.G R.E.D Blemish Cool Soothing Mask là mặt nạ kích thích nhiệt giúp làm mát và dịu da nhạy cảm ngay sau khi sử dụng. Mặt nạ Cool Soothing Mask có thành phần thiên nhiên cực kỳ an toàn, có chứa rau má và lô hội. Nếu để tủ lạnh, khi nhiệt độ đủ nhiệt kế trên mask sẽ chuyển màu xanh, nghĩa là bạn có thể sử dụng.', NULL, '2023-07-18 16:21:41', '2023-07-18 16:21:41', NULL),
(18, 5, 6, 'Dr.G Nước hoa hồng R.E.D Blemish Clear Soothing Toner 300ml', 412000, 99, NULL, 'https://product.hstatic.net/200000551679/product/dr.g_nuoc_hoa_hong_r.e.d_blemish__5__14b95fb03b544c66bdf1f064f378ee9c.png', 'Nước cân bằng Dr.G R.E.D Blemish Clear Soothing Toner giúp dưỡng ẩm và làm dịu làn da đang mẩn đỏ, kích ứng.', NULL, '2023-07-18 16:21:41', '2023-07-18 16:21:41', NULL),
(19, 1, 6, 'Dr.G Nước tẩy trang PH Cleansing Water 490ml', 336000, 99, NULL, 'https://product.hstatic.net/200000551679/product/dr.g_nuoc_tay_trang_ph_cleansing_6c9851662b19482ebcd130062e6876a5.png', 'Nước tẩy trang Dr.G pH Cleansing Water cho da nhạy cảm, giúp làm sạch sâu, tăng cường độ ẩm cho da và hoàn toàn không gây kích ứng.', NULL, '2023-07-18 16:21:41', '2023-07-18 16:21:41', NULL),
(20, 2, 6, 'Dr.G Sữa rửa mặt PH Cleansing Gel Foam 200ml', 336000, 99, NULL, 'https://product.hstatic.net/200000551679/product/dr.g_sua_rua_mat_ph_cleansing__5__78a0383c8a154d588365165afad0721d.png', 'Gel rửa mặt tạo bọt Dr.G pH Cleansing Gel Foam phù hợp cho da nhạy cảm, giúp làm sạch sâu, tăng cường độ ẩm cho da và hoàn toàn không gây kích ứng.', NULL, '2023-07-18 16:21:41', '2023-07-18 16:21:41', NULL),
(21, 3, 4, 'Nacific Kem chống nắng Fresh Herb Origin Sun Block Calendula 50ml', 236000, 99, NULL, 'https://product.hstatic.net/200000551679/product/sammi-07_4468889e7b9442ee9b8c1f7676961727.jpg', 'Kem chống nắng làm dịu da chiết xuất hoa cúc Nacific Fresh Herb Origin Sun Block Calendula SPF 50+/PA++++ với thành phần chính chiết xuất hoa cúc giúp làm dịu, bảo vệ da trước tác động của tia UV. Ngoài ra sản phẩm còn giúp cải thiện lỗ chân lông và mang lại cảm giác tươi mới khi sử dụng.', NULL, '2023-07-18 16:27:25', '2023-07-18 16:27:25', NULL),
(22, 4, 4, 'Nacific Mặt nạ Salicylic Acid Clarifying Mask Pack 30g', 33600, 99, NULL, 'https://product.hstatic.net/200000551679/product/sammi-17_e68ac9397c1e471bbeaf82d373f92341.jpg', 'Mặt nạ Nacific Salicylic Acid Clarifying Mask Pack được làm từ 100% cotton và chứa thành phần axit salicylic (BHA) và chiết xuất thực vật. Lớp vải của mặt nạ mỏng, ôm khít da, cung cấp khả năng thẩm thấu sâu của các thành phần hoạt tính , thúc đẩy quá trình tái tạo da, giúp làm đều màu ,làm sạch và se khít lỗ chân lông, bình thường hóa hoạt động của tuyến bã nhờn. Lý tưởng cho da dầu và da có vấn đề về mụn.', NULL, '2023-07-18 16:27:25', '2023-07-18 16:27:25', NULL),
(23, 5, 4, 'Nacific Nước hoa hồng Real Floral Toner Calendula 180ml', 316000, 99, NULL, 'https://product.hstatic.net/200000551679/product/sammi-01_fe32b1fd340048028eaa01673a6d1af3.jpg', 'Nước hoa hồng làm dịu da chiết xuất hoa cúc Nacific Real Floral Toner Calendula với thành phần chính chiết xuất hoa cúc và phức hợp 7 loại thảo mộc có nguồn gốc từ Jeju giúp làm dịu da hiệu quả, từ đó chăm sóc và cải thiện các vấn đề về lỗ chân lông, mang lại làn da tươi sáng mịn màng.\r\n\r\n', NULL, '2023-07-18 16:27:25', '2023-07-18 16:27:25', NULL),
(24, 2, 4, 'Nacific Sữa rửa mặt Fresh Herb Origin Cleansing Foam Calendula 150ml', 220000, 99, NULL, 'https://product.hstatic.net/200000551679/product/sammi-08_3bed9d6c1d4f497caacb6c817df5926f.jpg', 'Sữa rửa mặt tạo bọt làm dịu da chiết xuất hoa cúc Nacific Fresh Herb Origin Cleansing Foam Calendula với thành phần chính chiết xuất từ hoa cúc và keo ong giúp làm dịu da, bảo vệ da trước các tác nhân gây hại, khả năng tạo bọt mềm mịn, siêu nhỏ, giúp tăng cường việc làm sạch da từ sâu trong lỗ chân lông nhưng không làm khô da.', NULL, '2023-07-18 16:27:25', '2023-07-18 16:27:25', NULL),
(25, 3, 3, 'Nature Republic Sáp chống nắng California Aloe Fresh Powdery Sun Stick SPF50+PA++++', 476000, 99, NULL, 'https://product.hstatic.net/200000551679/product/untitled-2-01_370fecd795144024ab4f61668ceca3e7.png', 'Nature Republic Sáp chống nắng Nature Republic California Aloe Fresh Powdery Sun Stick SPF50+PA+++ với thành phần chiết xuất từ Lô hội vùng California dịu mát da, Hoa dâm bụt Hawaiian, nước biển sâu tinh khiết... giúp làm sáng da, cải thiện nếp nhăn, bảo vệ da tối ưu. Dạng sáp lăn tiện lợi, dễ dàng sử dụng, không gây bóng dính trên da.', NULL, '2023-07-18 16:35:41', '2023-07-18 16:35:41', NULL),
(26, 4, 3, 'Nature Republic Mặt nạ giấy Real Nature Orange Mask Sheet 23ml', 15200, 99, NULL, 'https://product.hstatic.net/200000551679/product/real_nature_organe_mask_sheet_-_thumbnail_674e4e216cbd462dbecbbdeba01e9eec.jpg', 'Mặt nạ giấy dưỡng ẩm, dưỡng sáng Nature Republic Real Nature Orange Mask Sheet chứa chiết xuất từ Cam cung cấp độ ẩm cần thiết, cải thiện là da xỉn màu trở nên tươi sáng, mịn màng.', NULL, '2023-07-18 16:35:41', '2023-07-18 16:35:41', NULL),
(27, 5, 3, 'Nature Republic Nước hoa hồng Vitapair C Toner 300ml', 316000, 99, NULL, 'https://product.hstatic.net/200000551679/product/vitapair_c_toner_-_thumbnail_b7cd72bcd02b48b5aee27a9aaab3860d.jpg', 'Nước hoa hồng dưỡng sáng da Nature Republic Vitapair C Toner chứa 10% chiết xuất từ quả chanh xanh vùng Jeju với hàm lượng Vitamin C cao giúp hỗ trợ dưỡng sáng da. Ngoài ra, có tác dụng loại bỏ tế bào chết trên da mà không gây kích ứng, nhờ đó kích thích sản sinh tế bào da mới sáng khỏe. Sản phẩm có khả năng thẩm thấu nhanh, không gây nhờn rít. ', NULL, '2023-07-18 16:35:41', '2023-07-18 16:35:41', NULL),
(28, 1, 3, 'Nature Republic Nước tẩy trang Good Skin AHA Ampoule Cleansing Water 500 ml', 174000, 99, NULL, 'https://product.hstatic.net/200000551679/product/good_skin_aha_ampoule_cleansing_water_-_thumbnail_1b65efafc8984f308a46b28023ccc70e.jpg', 'Nước tẩy trang Nature Republic Good Skin AHA Ampoule Cleansing Water với công nghệ micellar tiên tiến cùng thành phần AHA tẩy tế bào chết nhẹ nhàng, chỉ trong 1 bước làn da sạch sâu mà vẫn ẩm mịn, thông thoáng và sáng khỏe.', NULL, '2023-07-18 16:35:41', '2023-07-18 16:35:41', NULL),
(29, 2, 3, 'Nature Republic Sữa rửa mặt Soothing & Moisture Aloe Vera Foam Cleanser 150ml', 100000, 99, NULL, 'https://product.hstatic.net/200000551679/product/soothing___moisture_aloe_vera_foam_cleanser_-_thumbnail_7c2c08f8f1834b2e9d289f8f29e61701.jpg', 'Sữa rửa mặt dịu nhẹ Nature Republic Soothing & Moisture Aloe Vera Foam Cleanser giúp làm sạch sâu mà không gây tổn thương da. Chiết xuất nha đam giúp làm dịu mát da, cung cấp độ ẩm giúp da trở nên mềm mại mà không hề gây khô căng sau khi sử dụng.', NULL, '2023-07-18 16:35:41', '2023-07-18 16:35:41', NULL),
(30, 3, 1, 'Skin1004 Kem chống nắng Madagascar Centella Air-Fit SunCream Plus 50ml', 318750, 99, NULL, 'https://product.hstatic.net/200000551679/product/1-01_0b263e704c4440ffbf8fbbbba8460068.png', 'Kem chống nắng Skin1004 Madagascar Centella Air-Fit SunCream Plus là kem chống nắng chiết xuất rau má từ Madagascar. Với thành phần chọn lọc kỹ lưỡng, cùng công thức được nghiên cứu chuyên sâu, đây là sản phẩm có thể phát huy được mọi ưu điểm và cải thiện đáng kể những nhược điểm của một loại kem chống nắng vật lý thông thường.', NULL, '2023-07-18 16:43:03', '2023-07-18 16:43:03', NULL),
(31, 4, 1, 'Skin1004 Mặt nạ giấy Madagascar Centella Watergel Sheet Ampoule Mask 25ml', 49500, 99, NULL, 'https://product.hstatic.net/200000551679/product/1-01__5__90f6ad4669f144ffa0433134e7099e99.png', 'Mặt nạ làm dịu, ngừa mụn chiết xuất rau má Skin1004 Madagascar Centella Watergel Sheet Ampoule Mask với công nghệ độc quyền tạo kết cấu mặt nạ có nguồn gốc từ than tre. Kết hợp chiết xuất 51% từ rau má giúp làm dịu làn da, phục hồi và tái tạo da đang kích ứng, kiểm soát lượng dầu thừa hiệu quả.', NULL, '2023-07-18 16:43:03', '2023-07-18 16:43:03', NULL),
(32, 5, 1, 'Skin1004 Nước hoa hồng Madagascar Centella Tone Brightening Boosting Toner 210ml', 420000, 99, NULL, 'https://product.hstatic.net/200000551679/product/1-01__8__0d21c63d26734ae484c056e440efef71.png', 'Nước hoa hồng sáng da Skin1004 Madagascar Centella Tone Brightening Boosting Toner chiết xuất rau má  đến 90% tăng cường khả năng chăm sóc và làm dịu da từ sâu bên trong. Giúp dưỡng trắng, kháng viêm cho da nhạy cảm, đồng thời hỗ trợ làm dịu da hiệu quả.', NULL, '2023-07-18 16:43:03', '2023-07-18 16:43:03', NULL),
(33, 1, 1, 'Skin1004 Tẩy trang Madagascar Centella Light Cleansing Oil 200ml', 408750, 99, NULL, 'https://product.hstatic.net/200000551679/product/1-01__12__1ed2485f3c014b3088d91d3002011e31_acbe098824ae44138c38ee1870bf23d5.png', 'Dầu Tẩy Trang Skin1004 Madagascar Centella Light Cleansing Oil giúp làm sạch sâu làn da và loại bỏ lớp trang điểm cứng đầu với chiết xuất rau má Madagascar tinh khiết kết hợp cùng 6 loại dầu quý được chắt lọc kỹ lưỡng, mang lại làn da sạch tận sâu lỗ chân lông và mềm mịn ngay tức thì.', NULL, '2023-07-18 16:43:03', '2023-07-18 16:43:03', NULL),
(34, 2, 1, 'Skin1004 Sữa rửa mặt Madagascar Centella Ampoule Foam 125ml', 281250, 99, NULL, 'https://product.hstatic.net/200000551679/product/1-01__11__c69fc79e887746f19ffc4bda8406819b.png', 'Sữa rửa mặt Skin1004 Madagascar Centella Ampoule Foam với lớp bọt mềm mịn giúp lấy sạch bụi bẩn, bã nhờn, dầu thừa từ sâu lỗ chân lông. Sữa rửa mặt giúp làm sạch da mà không làm da mất nước, lưu giữ được độ ẩm mịn, mềm mại trên da. Với độ pH chuẩn 5.5,bảo vệ lớp màng tế bào mỗi ngày với công thức an toàn, hỗ trợ điều trị mụn tốt hơn.', NULL, '2023-07-18 16:43:03', '2023-07-18 16:43:03', NULL),
(35, 3, 7, 'Bioderma Kem chống nắng Photoderm Max Aquafluide SPF50+ 40ml new', 412250, 99, NULL, 'https://product.hstatic.net/200000551679/product/bioderma_photoderm_max_aquafluide_spf50__40ml_1d3b84b13f72427db61e72b5336f5b25.png', 'Kem chống nắng Bioderma Photoderm Max Aquafluide SPF50+ PA++++ là kem chống nắng khô thoáng và giảm bóng nhờn giúp bảo vệ da khỏi tác hại của tia UVA/UVB với chỉ số chống nắng cao.', NULL, '2023-07-20 13:13:10', '2023-07-20 13:13:10', NULL),
(36, 5, 7, 'Bioderma Nước hoa hồng Sensibio Tonique 250ml', 361250, 99, NULL, 'https://product.hstatic.net/200000551679/product/untitled-5-08_1f04cf335a8540699746813aa8400eb0.png', 'Nước hoa hồng Bioderma Sensibio Tonique giúp cân bằng độ pH sinh lí tự nhiên trên da, dưỡng ẩm và làm dịu da nhạy cảm, kích ứng với thành phần chính là nước, chiết xuất dưa leo, Allantoin giúp làm dịu da, cấp nước và giảm thiểu tình trạng kích ứng hiệu quả.', NULL, '2023-07-20 13:13:10', '2023-07-20 13:13:10', NULL),
(37, 1, 7, 'Bioderma Nước tẩy trang hồng Sensibio H2O 100 ml', 191250, 99, NULL, 'https://product.hstatic.net/200000551679/product/bioderma_nuoc_tay_trang_hong_sensibio_h2o_100_ml___3__7b8111e8706348ec9ad0c6a3ede77892.png', 'Nước tẩy trang Bioderma Sensibio H2O là dung dịch làm sạch và tẩy trang đầu tiên trên thế giới ứng dụng công nghệ micellar, giúp làm sạch đến 99% bụi bẩn, dầu thừa và lớp trang điểm, đồng thời vẫn tôn trọng hàng rào bảo vệ da tuyệt đối. Sản phẩm không cần rửa lại bằng nước. Ngoài ra, Sensibio H2O làm giảm cảm giác khô căng, khó chịu và cải thiện ngưỡng dung nạp của da. Là giả pháp hiệu quả lâu dài cho làn da.', NULL, '2023-07-20 13:13:10', '2023-07-20 13:13:10', NULL),
(38, 2, 7, 'Bioderma Sữa rửa mặt Sensibio Gel Moussant', 378250, 99, NULL, 'https://product.hstatic.net/200000551679/product/bioderma_sua_rua_mat_sensibio_gel_moussant__1__1f3a68fa10e3472dbd80c1f2a23679f0.png', 'Sữa rửa mặt Sensibio Gel Moussant với công nghệ micellar giúp làm sạch sâu và 100% an toàn cho da nhạy cảm. Với các thành phần sinh học được nghiên cứu kỹ lưỡng giúp tăng độ dung nạp của làn da. Bên cạnh khả năng làm sạch, làm dịu da và dưỡng ẩm, Sensibio Gel Moussant còn giúp làm sạch sâu nhưng vẫn củng cố hàng rào bảo vệ da vững chắc.', NULL, '2023-07-20 13:13:10', '2023-07-20 13:13:10', NULL),
(39, 3, 8, 'Cocoon Kem chống nắng bí đao Winter Melon Sunscreen 50ml', 355500, 99, NULL, 'https://product.hstatic.net/200000551679/product/kem_chong_nang_cocoon_2760ebaa20c7442db71acf75df66d4df.png', 'Kem chống nắng bí đao Cocoon Winter Melon Sunscreen với công thức đột phá kết hợp các màng lọc thế hệ mới, chiết xuất bí đao và các thành phần chống oxi hoá, kem chống nắng bí đao mang lại khả năng bảo vệ phổ rộng chống lại bức xạ UVA và UVB là nguyên nhân gây ra tác hại lên da như bỏng rát, cháy nắng, kích ứng, lão hoá và tổn thương tế bào da.', NULL, '2023-07-20 13:22:06', '2023-07-20 13:22:06', NULL),
(40, 4, 8, 'Mặt nạ hoa hồng Cocoon True Rose Face Mask', 130500, 99, NULL, 'https://product.hstatic.net/200000551679/product/untitled-9-06_9c0cdc71626448ad9a6f06c03487c9f3.png', 'Mặt nạ hoa hồng Cocoon True Rose Face Mask thành phần từ cánh hoa hồng hữu cơ được nghiền nhỏ hòa quyện trong lớp gel mượt mà, kết hợp cùng nam châm dưỡng ẩm Pentavitin và HA giúp làm dịu, cấp ẩm và làm mềm tức thì, mang lại làn da đầy đặn, mịn màng và tươi mới.', NULL, '2023-07-20 13:22:06', '2023-07-20 13:22:06', NULL),
(41, 5, 8, 'Cocoon Tinh chất hoa hồng Rose Serum 30ml', 238500, 99, NULL, 'https://product.hstatic.net/200000551679/product/untitled-9-14_4ae96bc4ebd145a5990562cd7b7d1e08.png', 'Tinh chất Cocoon Rose Serum với kết cấu mọng nước, tinh chất hoa hồng sẽ thẩm thấu nhanh và mang các dưỡng chất ngậm nước đi sâu vào các tầng da, giúp dưỡng ẩm sâu, phục hồi những tổn thương do sự mất nước gây ra, đồng thời trả lại sự đầy đặn và tươi mới vốn có của làn da. Đây là cách nhanh nhất để da trở nên căng mọng và ẩm mịn.', NULL, '2023-07-20 13:22:06', '2023-07-20 13:22:06', NULL),
(42, 1, 8, 'Nước tẩy trang Cocoon bí đao Winter Melon Micellar Water', 265500, 99, NULL, 'https://product.hstatic.net/200000551679/product/chua_co_ten_57bd3a4997324e4085a7_4317c18d37db492bb93924e184e75213.png', 'Nước tẩy trang Cocoon chiết xuất bí đao làm sạch da Winter Melon Micellar Water ứng dụng công nghệ Micellar với thành phần từ thiên nhiên như bí đao, rau má, tràm trà và Betaine từ củ cải đường giúp làm sạch lớp trang điểm, khói bụi trên da một cách nhẹ nhàng, thông thoáng lỗ chân lông, và kiểm soát dầu nhờn hiệu quả.', NULL, '2023-07-20 13:22:06', '2023-07-20 13:22:06', NULL),
(43, 2, 8, 'Prettyskin Sữa rửa mặt tẩy da chết Cocoon Scrub Foam 150ml', 82500, 99, NULL, 'https://product.hstatic.net/200000551679/product/untitled-3-09_8f1373afa7f9410cabf630e2634dfca3.png', 'Sữa rửa mặt tẩy da chết Prettyskin Cocoon Pore Scrub Foam là sản phẩm đến từ thương hiệu Pretty Skin. Với chiết xuất kén tằm giúp làm sạch da, loại bỏ bụi bẩn nằm sâu dưới da. Đồng thời loại bỏ mụn đầu đen và lấy đi tế bào chết giúp da mịn màng, săn khít.', NULL, '2023-07-20 13:22:06', '2023-07-20 13:22:06', NULL),
(44, 4, 9, 'Prettyskin Mặt nạ giấy Total Solution Essential Sheet mask', 9000, 99, NULL, 'https://product.hstatic.net/200000551679/product/untitled-3-01_df5a944bd0394a0caec92f1839075472.png', 'Mặt nạ giấy Prettyskin Total Solution Essential Sheet Mask không hề gây kích ứng da, giúp cho làn da mềm mại và ẩm mịn với các tinh chất từ thiên nhiên. Mặt nạ mỏng nhẹ, ôm sát khuôn mặt giúp các dưỡng chất thấm đều vào da.', NULL, '2023-07-20 13:34:35', '2023-07-20 13:34:35', NULL),
(45, 3, 9, 'Prettyskin Kem chống nắng No-Sebum Tone Up Sun Cream 70ml', 162000, 99, NULL, 'https://product.hstatic.net/200000551679/product/untitled-3-16_31d6db2b86b44254b802616066de964f.png', 'Kem chống nắng Prettyskin No-Sebum Tone Up Sun Cream là kem chống nắng vật lý phổ rộng có tác dụng nhanh (ngay khi apply lên da), có chỉ số chống nắng cao SPF 50+, PA++++ mang lại khả năng chống nắng cao lên đến 8h đồng hồ. Đồng thời bảo vệ da khỏi các tác động của tia UVA, UVB, tia hồng ngoại và ánh sáng xanh.\r\n\r\n', NULL, '2023-07-20 13:34:35', '2023-07-20 13:34:35', NULL),
(46, 5, 9, 'Prettyskin Nước hoa hồng Pure Brightening Diamond Toner 150ml (IP02)', 210000, 99, NULL, 'https://product.hstatic.net/200000551679/product/untitled-3-02_6727323fe80646a387af232e025d6238.png', 'Nước hoa hồng Prettyskin Pure Brightening Diamond Toner là nước hoa hồng dưỡng ẩm, giúp cân bằng lượng nước và dầu cho da, mang lại một làn da tươi mát trắng sáng và tràn đầy sức sống. Với chiết xuất bột ngọc trai, bột kim cương, Niaxiamide, lá trà, lô hội, rau má Centella Asiatica, vừa giúp cân bằng độ ẩm cho da, vừa có hiệu quả dưỡng trắng và làm dịu da hiệu quả.', NULL, '2023-07-20 13:34:35', '2023-07-20 13:34:35', NULL),
(47, 1, 9, 'Prettyskin Nước tẩy trang The Pure Jeju Cica Cleansing Water 500ml (IP02)', 210000, 99, NULL, 'https://product.hstatic.net/200000551679/product/untitled-3-07_805f32693f4a41998661da3fe701d50a.png', 'Nước tẩy trang rau má Pretty Skin The Pure Jeju Cica Cleansing Water với chiết xuất từ rau má Centella Asiatica từ đảo Jeju xinh đẹp, chiết xuất rễ cây bạch vi, lá cây phỷ, dầu và lá cây tràm trà. Tất cả các thành phần này đều có công dụng chống khuẩn, kháng viêm vô cùng hiệu quả.', NULL, '2023-07-20 13:34:35', '2023-07-20 13:34:35', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int NOT NULL,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `fullname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role_id` int DEFAULT '2',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `is_manager` smallint DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `phone_number`, `address`, `password`, `role_id`, `created_at`, `is_manager`) VALUES
(1, 'Admin', 'admin@admin.com', '123456789', NULL, '21232f297a57a5a743894a0e4a801fc3', 1, NULL, NULL),
(5, 'Giang', 'giang123@gmail.com', '0399388692', NULL, 'f5bb0c8de146c67b44babbf4e6584cc0', NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `brand_id` (`brand_id`) USING BTREE;

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
