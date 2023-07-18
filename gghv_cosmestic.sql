-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th7 18, 2023 lúc 03:45 PM
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
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `name`) VALUES
(1, 'Senka'),
(2, 'L\'Oreal'),
(3, 'Simple');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
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
  `firstname` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lastname` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `subject_name` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `note` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `order_address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
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
  `title` varchar(350) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `price` int DEFAULT NULL,
  `stock` int NOT NULL,
  `discount` int DEFAULT NULL,
  `thumbnail` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `long_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `title`, `price`, `stock`, `discount`, `thumbnail`, `description`, `long_description`, `created_at`, `updated_at`, `deleted`) VALUES
(2, 1, 3, 'Nước Tẩy Trang Simple Cấp Ẩm Nhẹ Nhàng Làm Sạch Trang Điểm Micellar Cleasing Water 400Ml', 132000, 99, NULL, 'https://product.hstatic.net/200000061028/product/hi_4_e509d477ec5f421f886a51d66b792ffb_grande.jpg', 'Nước tẩy trang cấp ẩm , làm sạch nhẹ nhàng đến từ thương hiệu Simple chứa Vitamin B3, Vitamin C và nước cất 3 lần tinh khiết giúp nhẹ nhàng tẩy sạch lớp trang điểm, kem chống nắng và bụi bẩn trên da hiệu quả. Đồng thời nước tẩy trang Simple Micellar Cleasing Water còn giúp cung cấp thêm dưỡng chất cần thiết cho làn da thêm ẩm mượt, mịn màng và rạng rỡ', 'Nước Tẩy Trang Simple Cấp Ẩm Nhẹ Nhàng Làm Sạch Trang Điểm Micellar Cleasing Water 400Ml\r\n \r\nNước tẩy trang cấp ẩm , làm sạch nhẹ nhàng đến từ thương hiệu Simple chứa Vitamin B3, Vitamin C và nước cất 3 lần tinh khiết giúp nhẹ nhàng tẩy sạch lớp trang điểm, kem chống nắng và bụi bẩn trên da hiệu quả. Đồng thời nước tẩy trang Simple Micellar Cleasing Water còn giúp cung cấp thêm dưỡng chất cần thiết cho làn da thêm ẩm mượt, mịn màng và rạng rỡ\r\n \r\nSản phẩm không chứa: 2000 hóa chất gây hại cho da, hương liệu nhân tạo, phẩm màu nhân tạo, cồn, dầu khoáng hạn chế làm da khô - căng rát hay kích ứng\r\n \r\n\r\n\r\n \r\n\r\nCÔNG DỤNG CHÍNH – MAIN FUNCTION\r\n \r\nGiúp nhẹ nhàng tẩy sạch lớp trang điểm, kem chống nắng và bụi bẩn trên da hiệu quả\r\nCung cấp thêm dưỡng chất cần thiết cho làn da thêm ẩm mượt, mịn màng và rạng rỡ\r\n\r\n\r\n \r\n\r\nTham khảo thêm các sản phẩm tẩy trang khác tại đây. \r\n\r\nCÁCH DÙNG – DIRECTION FOR USE\r\n \r\n- Cho một lượng nước tẩy trang vừa đủ ra bông tẩy trang. Nhẹ nhàng lau sạch lớp trang điểm và bụi bẩn. Không cần chà xát lên da. Không cần rửa lại với nước\r\n- Để đạt được hiệu quả tốt nhất, sau khi tẩy trang  kết hợp cùng sữa rửa mặt và nước hoa hồng\r\n \r\nThành phần: Aqua, Hexylene Glycol, Glycerin, PEG-6 Caprylic/Capric Glycerides,Phenoxyethanol, Cetrimonium Chloride, Tetrasodium EDTA,Propylene Glycol, Citric Acid, Cetylpyridinium Chloride, Sodium Chloride, Niacinamide, Sodium Ascorbyl, Phosphate, Potassium chloride, Panthenol\r\n \r\nĐối tượng sử dụng: Phù hợp cho mọi loại da, kể cả làn da nhạy cảm \r\n \r\nBảo quản: Bảo quản nơi khô ráo, thoáng mát, tránh ánh sáng trực tiếp\r\n \r\nQuy cách: Chai, 400Ml\r\n \r\nXuất xứ thương hiệu: Anh Quốc\r\n \r\nHSD: 3 năm kể từ ngày sản xuất\r\n \r\nXem thêm các sản phẩm khác cùng với nhiều chương trình khuyến mãi hấp dẫn tại website Guardian\r\n\r\n---\r\n\r\nTHÔNG TIN THÊM - ADDITIONAL INFORMATION\r\n\r\n- Để biết thêm thông tin chi tiết về sản phẩm hoặc chương trình khuyến mãi Quý khách hàng vui lòng liên hệ bộ phận CSKH qua Hotline 19004449 hoặc fanpage Guardian Việt Nam để được hỗ trợ\r\n\r\n- Nếu quý khách hàng có nhu cầu xuất hóa đơn, vui lòng điền thông tin xuất hóa đơn vào mục Ghi chú đơn hàng, Bộ phận CSKH sẽ gửi hóa đơn điện tử vào email Quý Khách hàng đã đăng ký với Guardian\r\n\r\nGuardian xin chân thành cảm ơn Quý khách!', '2023-07-17 13:35:15', '2023-07-17 13:35:15', NULL),
(3, 1, 1, 'Nước Tẩy Trang Sạch Thoáng Senka All Clear Water Fresh 230Ml', 83000, 99, NULL, 'https://product.hstatic.net/200000061028/product/fresh_2__1__1f2dd9f61ba9480493bee3e66c1276d8_grande.jpg', 'Nước Tẩy Trang Sạch Thoáng All Clear Water Fresh Senka 230Ml\r\nNước Tẩy Trang Sạch Thoáng All clear water Micellar Fresh với công nghệ Nhật Bản nhẹ nhàng làm sạch lớp trang điểm, bụi bẩn và bã nhờn sâu bên trong lỗ chân lông, loại bỏ dầu thừa và không gây kích ứng trên da\r\n', 'MÔ TẢ SẢN PHẨM – DESCRIPTION\r\nNước Tẩy Trang Sạch Thoáng All Clear Water Fresh Senka 230Ml\r\nNước Tẩy Trang Sạch Thoáng All clear water Micellar Fresh với công nghệ Nhật Bản nhẹ nhàng làm sạch lớp trang điểm, bụi bẩn và bã nhờn sâu bên trong lỗ chân lông, loại bỏ dầu thừa và không gây kích ứng trên da\r\n\r\nCÔNG DỤNG CHÍNH – MAIN FUNCTION\r\n\r\n- Không chỉ đóng vai trò làm sạch lớp makeup, sản phẩm còn đảm bảo duy trì lớp màng dưỡng ẩm tự nhiên cho da. Loại bỏ dầu thừa trên da sau mỗi lần sử dụng\r\n- Với chiết xuất từ lá trà xanh và  tơ tằm trắng, sản phẩm làm sạch sâu lớp cặn trang điểm bám trong lỗ chân lông và loại bỏ dầu thừa đáng ghét nữa nhé\r\n- Sản phẩm cũng không hề để lại lớp bóng dầu như các loại tẩy trang khác. Nên dù các nàng có bận rộn đến mức không thể rửa lại ngay với nước sau khi tẩy trang, làn da của bạn cũng sẽ không nhờn dính và không khô căng\r\n- Đặc biệt, sản phẩm còn có hương thơm dịu nhẹ lưu lại cảm giác tươi mát, dễ chịu ngay sau khi sử dụng\r\n \r\nCÁCH DÙNG – DIRECTION FOR USE \r\n \r\n- Lấy một lượng sản phẩm vừa đủ ra bông tẩy trang. Nhẹ nhàng lau sạch lớp trang điểm\r\n \r\nThành phần: Water (Aqua), Dipropylene Glycol, Peg/Ppg-50/40 Dimethyl Ether, Peg-8, Glycerin, Phenoxyethanol, Methylparaben, Sodium Citrate, Potassium Cocoyl Glutamate, Citric Acid, Butylene Glycol, Sodium Metaphosphate, Sericin, Potassium Sorbate, Camellia Sinensis Leaf Extract, Sodium Acetylated Hyaluronate, Sodium Hyaluronate, Xanthan Gum\r\n \r\nQuy cách: Chai, 230Ml\r\n\r\nBảo quản: Nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp. Đậy nắp kín sau khi sử dụng\r\n\r\nXuất xứ thương hiệu: Việt Nam\r\n \r\nXuất xứ: Việt Nam \r\n \r\nHSD: 3 năm kể từ ngày sản xuất\r\n \r\nLưu ý: Để xa tầm tay trẻ em. Ngưng sử dụng ngay khi có biểu hiện kích ứng và hỏi ý kiến bác sĩ (nếu cần)\r\n \r\n---\r\n \r\nTHÔNG TIN THÊM - ADDITIONAL INFORMATION\r\n \r\n- Để biết thêm thông tin chi tiết về sản phẩm hoặc chương trình khuyến mãi Quý khách hàng vui lòng liên hệ bộ phận CSKH qua Hotline 19004449 hoặc fanpage https://www.facebook.com/guardianvn để được hỗ trợ\r\n \r\n- Nếu quý khách hàng có nhu cầu xuất hóa đơn, vui lòng điền thông tin xuất hóa đơn vào mục Ghi chú đơn hàng, Bộ phận CSKH sẽ gửi hóa đơn điện tử vào email Quý Khách hàng đã đăng ký với Guardian\r\n \r\nGuardian xin chân thành cảm ơn Quý khách!', '2023-07-18 15:18:29', '2023-07-18 15:18:29', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
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
  `address` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
