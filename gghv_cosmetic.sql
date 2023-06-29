-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th6 29, 2023 lúc 02:32 PM
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
-- Cơ sở dữ liệu: `gghv_cosmetic`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `address`
--

CREATE TABLE `address` (
  `id` int NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `postal_code` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `hotline` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`id`, `name`, `address`, `hotline`) VALUES
(1, 'L\'Oréal', NULL, NULL),
(2, 'Senka', NULL, NULL),
(3, 'Simple', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_item`
--

CREATE TABLE `cart_item` (
  `id` int NOT NULL,
  `cart_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `image` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `image`) VALUES
(1, 'Sữa rửa mặt', '', NULL),
(2, 'Kem chống nắng', '', NULL),
(3, 'Nước hoa', NULL, NULL),
(4, 'Nước tẩy trang', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `body` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `payment_method_id` int NOT NULL,
  `address_id` int NOT NULL,
  `create_date` datetime NOT NULL,
  `total` decimal(12,6) NOT NULL,
  `shipping_method_id` int NOT NULL,
  `order_status_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_status`
--

CREATE TABLE `order_status` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment_method`
--

CREATE TABLE `payment_method` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `payment_type_id` int NOT NULL,
  `provider` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `account_number` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `expire_date` date NOT NULL,
  `is_default` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment_type`
--

CREATE TABLE `payment_type` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `long_description` text COLLATE utf8mb4_general_ci,
  `image` text COLLATE utf8mb4_general_ci,
  `category_id` int NOT NULL,
  `user_id` int NOT NULL,
  `published_date` datetime NOT NULL,
  `brand_id` int NOT NULL,
  `price` decimal(16,0) NOT NULL,
  `stock` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `long_description`, `image`, `category_id`, `user_id`, `published_date`, `brand_id`, `price`, `stock`) VALUES
(2, 'Nước Tẩy Trang Simple Cấp Ẩm Nhẹ Nhàng Làm Sạch Trang Điểm Micellar Cleasing Water 400Ml', 'Nước tẩy trang cấp ẩm , làm sạch nhẹ nhàng đến từ thương hiệu Simple chứa Vitamin B3, Vitamin C và nước cất 3 lần tinh khiết giúp nhẹ nhàng tẩy sạch lớp trang điểm, kem chống nắng và bụi bẩn trên da hiệu quả. Đồng thời nước tẩy trang Simple Micellar Cleasing Water còn giúp cung cấp thêm dưỡng chất cần thiết cho làn da thêm ẩm mượt, mịn màng và rạng rỡ', 'Nước Tẩy Trang Simple Cấp Ẩm Nhẹ Nhàng Làm Sạch Trang Điểm Micellar Cleasing Water 400Ml\r\n</br>\r\nNước tẩy trang cấp ẩm , làm sạch nhẹ nhàng đến từ thương hiệu Simple chứa Vitamin B3, Vitamin C và nước cất 3 lần tinh khiết giúp nhẹ nhàng tẩy sạch lớp trang điểm, kem chống nắng và bụi bẩn trên da hiệu quả. Đồng thời nước tẩy trang Simple Micellar Cleasing Water còn giúp cung cấp thêm dưỡng chất cần thiết cho làn da thêm ẩm mượt, mịn màng và rạng rỡ\r\n</br>\r\nSản phẩm không chứa: 2000 hóa chất gây hại cho da, hương liệu nhân tạo, phẩm màu nhân tạo, cồn, dầu khoáng hạn chế làm da khô - căng rát hay kích ứng\r\n</br>\r\n\r\n\r\n \r\n\r\nCÔNG DỤNG CHÍNH – MAIN FUNCTION\r\n</br>\r\nGiúp nhẹ nhàng tẩy sạch lớp trang điểm, kem chống nắng và bụi bẩn trên da hiệu quả\r\nCung cấp thêm dưỡng chất cần thiết cho làn da thêm ẩm mượt, mịn màng và rạng rỡ\r\n\r\n</br>\r\n \r\n\r\nTham khảo thêm các sản phẩm tẩy trang khác tại đây. \r\n</br>\r\nCÁCH DÙNG – DIRECTION FOR USE\r\n</br>\r\n- Cho một lượng nước tẩy trang vừa đủ ra bông tẩy trang. Nhẹ nhàng lau sạch lớp trang điểm và bụi bẩn. Không cần chà xát lên da. Không cần rửa lại với nước\r\n- Để đạt được hiệu quả tốt nhất, sau khi tẩy trang  kết hợp cùng sữa rửa mặt và nước hoa hồng\r\n</br>\r\nThành phần: Aqua, Hexylene Glycol, Glycerin, PEG-6 Caprylic/Capric Glycerides,Phenoxyethanol, Cetrimonium Chloride, Tetrasodium EDTA,Propylene Glycol, Citric Acid, Cetylpyridinium Chloride, Sodium Chloride, Niacinamide, Sodium Ascorbyl, Phosphate, Potassium chloride, Panthenol\r\n</br>\r\nĐối tượng sử dụng: Phù hợp cho mọi loại da, kể cả làn da nhạy cảm \r\n</br>\r\nBảo quản: Bảo quản nơi khô ráo, thoáng mát, tránh ánh sáng trực tiếp\r\n</br> \r\nQuy cách: Chai, 400Ml\r\n</br> \r\nXuất xứ thương hiệu: Anh Quốc\r\n</br> \r\nHSD: 3 năm kể từ ngày sản xuất\r\n</br> \r\nXem thêm các sản phẩm khác cùng với nhiều chương trình khuyến mãi hấp dẫn tại website Guardian\r\n</br>\r\n---', 'https://product.hstatic.net/200000061028/product/hi_4_e509d477ec5f421f886a51d66b792ffb_grande.jpg', 4, 3, '2023-06-22 23:12:00', 3, 151000, 99),
(3, 'Nước Tẩy Trang 3 In 1 Micellar Làm Sạch Sâu L\'Oréal Paris 400Ml', 'Với công nghệ mới nhất, Nước tẩy trang L\'Oreal Paris 3-in-1 Micellar Water đa tác dụng vừa giúp làm sạch lấy đi sạch cặn trang điểm những vẫn giúp da giữ ẩm, thông thoáng và mềm mượt chỉ trong một bước', 'Với công nghệ mới nhất, Nước tẩy trang L\'Oreal Paris 3-in-1 Micellar Water đa tác dụng vừa giúp làm sạch lấy đi sạch cặn trang điểm những vẫn giúp da giữ ẩm, thông thoáng và mềm mượt chỉ trong một bước\r\n \r\nCÔNG DỤNG CHÍNH – MAIN FUNCTION \r\n \r\n- Có hai lớp chất lỏng giúp hòa tan chất bẩn và loại bỏ toàn bộ lớp trang điểm hiệu quả, kể cả lớp trang điểm lâu trôi và không thấm nước chỉ trong một bước\r\n- Lớp Micellar chứa các hạt mixen siêu nhỏ để len lỏi sâu và dễ dàng lấy đi bụi bẩn, dầu thừa, lớp trang điểm và chất bẩn khác mà không làm khô da\r\n- Thích hợp cho mọi loại da, kể cả da nhạy cảm\r\n \r\nCÁCH DÙNG – DIRECTION FOR USE\r\n \r\n- Lắc đều\r\n- Cho sản phẩm vào bông tẩy trang rồi nhẹ nhàng lau lên mặt, mắt và môi theo chuyển động tròn\r\n- Không cần rửa lại với nước\r\n \r\nThành phần: Xem trên bao bì sản phẩm\r\n \r\nQuy cách: Chai, 400Ml\r\n \r\nBảo quản: Nơi khô ráo, thoáng mát. Tránh ánh nắng trực tiếp\r\n \r\nXuất xứ: Pháp\r\n \r\nHSD: 3 năm từ NSX\r\n \r\nLưu ý: L’Oréal Paris là nhãn hiệu mỹ phẩm hàng đầu tại Châu Âu được sản xuất tại nhiều nhà máy trên toàn thế giới như Trung Quốc, Mỹ, Indonesia… Dù được sản xuất ở đâu, các sản phẩm đều tuân theo quy trình kiểm soát chất lượng nghiêm ngặt và đồng đều của L’Oréal Toàn Cầu. Các sản phẩm chính hãng đều có tem nhãn tiếng Việt phía sau và nhập khẩu trực tiếp từ công ty TNHH L’oreal Việt Nam nên các bạn hoàn toàn yên tâm về chất lượng sản phẩm nhé', 'https://product.hstatic.net/200000061028/product/3017119_1_9917ff9dcb0747fc9c72908e074848fa_grande.jpg', 4, 3, '2023-06-22 23:15:55', 1, 219000, 88),
(4, 'Nước Tẩy Trang Sạch Thoáng Senka All Clear Water Fresh 230Ml', 'Nước Tẩy Trang Sạch Thoáng All Clear Water Fresh Senka 230Ml\r\nNước Tẩy Trang Sạch Thoáng All clear water Micellar Fresh với công nghệ Nhật Bản nhẹ nhàng làm sạch lớp trang điểm, bụi bẩn và bã nhờn sâu bên trong lỗ chân lông, loại bỏ dầu thừa và không gây kích ứng trên da', 'Nước Tẩy Trang Sạch Thoáng All Clear Water Fresh Senka 230Ml\r\nNước Tẩy Trang Sạch Thoáng All clear water Micellar Fresh với công nghệ Nhật Bản nhẹ nhàng làm sạch lớp trang điểm, bụi bẩn và bã nhờn sâu bên trong lỗ chân lông, loại bỏ dầu thừa và không gây kích ứng trên da\r\n\r\nCÔNG DỤNG CHÍNH – MAIN FUNCTION\r\n\r\n- Không chỉ đóng vai trò làm sạch lớp makeup, sản phẩm còn đảm bảo duy trì lớp màng dưỡng ẩm tự nhiên cho da. Loại bỏ dầu thừa trên da sau mỗi lần sử dụng\r\n- Với chiết xuất từ lá trà xanh và  tơ tằm trắng, sản phẩm làm sạch sâu lớp cặn trang điểm bám trong lỗ chân lông và loại bỏ dầu thừa đáng ghét nữa nhé\r\n- Sản phẩm cũng không hề để lại lớp bóng dầu như các loại tẩy trang khác. Nên dù các nàng có bận rộn đến mức không thể rửa lại ngay với nước sau khi tẩy trang, làn da của bạn cũng sẽ không nhờn dính và không khô căng\r\n- Đặc biệt, sản phẩm còn có hương thơm dịu nhẹ lưu lại cảm giác tươi mát, dễ chịu ngay sau khi sử dụng\r\n \r\nCÁCH DÙNG – DIRECTION FOR USE \r\n \r\n- Lấy một lượng sản phẩm vừa đủ ra bông tẩy trang. Nhẹ nhàng lau sạch lớp trang điểm\r\n \r\nThành phần: Water (Aqua), Dipropylene Glycol, Peg/Ppg-50/40 Dimethyl Ether, Peg-8, Glycerin, Phenoxyethanol, Methylparaben, Sodium Citrate, Potassium Cocoyl Glutamate, Citric Acid, Butylene Glycol, Sodium Metaphosphate, Sericin, Potassium Sorbate, Camellia Sinensis Leaf Extract, Sodium Acetylated Hyaluronate, Sodium Hyaluronate, Xanthan Gum\r\n \r\nQuy cách: Chai, 230Ml\r\n\r\nBảo quản: Nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp. Đậy nắp kín sau khi sử dụng\r\n\r\nXuất xứ thương hiệu: Việt Nam\r\n \r\nXuất xứ: Việt Nam \r\n \r\nHSD: 3 năm kể từ ngày sản xuất\r\n \r\nLưu ý: Để xa tầm tay trẻ em. Ngưng sử dụng ngay khi có biểu hiện kích ứng và hỏi ý kiến bác sĩ (nếu cần)\r\n \r\n---', 'https://product.hstatic.net/200000061028/product/3018717-1_9794957282304613911d3b9420fcbad2_grande.jpg', 4, 3, '2023-06-22 23:17:18', 2, 119000, 11),
(5, 'Sữa Rửa Mặt Dịu Nhẹ Cho Da Nhạy Cảm Simple Kind To Skin Refreshing Facial Wash 150Ml', 'Sữa rửa mặt dịu nhẹ dành cho da nhạy cảm đến từ thương hiệu Simple có công thức dịu nhẹ và thành phần lành tính phù hợp cho mọi loại da, đặc biệt là da nhạy cảm. Sản phẩm giúp làm sạch da, loại bỏ lớp trang điểm, bụi bẩn hay những tạp chất còn sót lại sau bước tẩy trang một cách nhẹ nhàng nhất, đem lại làn da tươi mát và tràn đầy sức sống sau mỗi lần sử dụng. ', '0', 'https://product.hstatic.net/200000061028/product/gdn2_176c55b9424f41f294ccdfe2fdb51d5f_64a35645b525428c9bd80436a28cdec2_bf41bd3c5d5241aaa2c59888a861da4f_grande.jpg', 1, 3, '2023-06-22 23:19:58', 3, 105000, 23),
(6, 'Sữa Rửa Mặt Dành Cho Da Mụn Senka Perfect Whip Acne Care 100Gr', 'Sữa Rửa Mặt Dành Cho Da Mụn Perfect Whip Acne Care Senka 100Gr có công thức cải tiến tạo bọt cực mịn và đàn hồi như một mạng lưới giúp rửa sạch hoàn hảo trên bề mặt da và cả bên trong lỗ chân lông, cho làn da sạch tinh khiết, giúp làm sáng. Ngoài ra, sản phẩm còn chứa chiết xuất hoa cúc vùng Kyoto Nhật Bản giúp da Giúp Sạch Khuẩn, hỗ trợ làm chậm quá trình oxy hóa, cung cấp độ ẩm cần thiết và trả lại sự mịn màng cho làn da. Sản phẩm được chứng minh lâm sàng, giảm mụn đáng kể chỉ sau 4 tuần', '0', 'https://product.hstatic.net/200000061028/product/3020341-1_bcc5d324a4b64649a1806351882dfaf8_grande.jpg', 1, 3, '2023-06-22 23:19:58', 2, 85000, 999);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `name`, `description`) VALUES
(3, 'user', 'Customer Role'),
(4, 'admin', 'Admin Role');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shipping_method`
--

CREATE TABLE `shipping_method` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` decimal(12,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `is_manager` tinyint(1) NOT NULL,
  `role_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `create_date`, `is_manager`, `role_id`) VALUES
(3, 'admin', '0192023a7bbd73250516f069df18b500', '2023-06-22 23:10:21', 1, 4),
(4, 'user', '6ad14ba9986e3615423dfca256d04e3f', '2023-06-22 23:10:21', 0, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_address`
--

CREATE TABLE `user_address` (
  `user_id` int NOT NULL,
  `address_id` int NOT NULL,
  `is_default` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_status_id` (`order_status_id`),
  ADD KEY `address_id` (`address_id`),
  ADD KEY `payment_method_id` (`payment_method_id`),
  ADD KEY `shipping_method_id` (`shipping_method_id`);

--
-- Chỉ mục cho bảng `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `payment_type_id` (`payment_type_id`);

--
-- Chỉ mục cho bảng `payment_type`
--
ALTER TABLE `payment_type`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `shipping_method`
--
ALTER TABLE `shipping_method`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Chỉ mục cho bảng `user_address`
--
ALTER TABLE `user_address`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `address_id` (`address_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `address`
--
ALTER TABLE `address`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `payment_type`
--
ALTER TABLE `payment_type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `shipping_method`
--
ALTER TABLE `shipping_method`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `cart_item`
--
ALTER TABLE `cart_item`
  ADD CONSTRAINT `cart_item_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `cart_item_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`order_status_id`) REFERENCES `order_status` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_method` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `order_ibfk_4` FOREIGN KEY (`shipping_method_id`) REFERENCES `shipping_method` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `payment_method`
--
ALTER TABLE `payment_method`
  ADD CONSTRAINT `payment_method_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `payment_method_ibfk_2` FOREIGN KEY (`payment_type_id`) REFERENCES `payment_type` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `user_address`
--
ALTER TABLE `user_address`
  ADD CONSTRAINT `user_address_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `user_address_ibfk_2` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
