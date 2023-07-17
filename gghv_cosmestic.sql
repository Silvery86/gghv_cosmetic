-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th7 17, 2023 lúc 01:43 PM
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
(2, 1, 3, 'Nước Tẩy Trang Simple Cấp Ẩm Nhẹ Nhàng Làm Sạch Trang Điểm Micellar Cleasing Water 400Ml', 132000, 99, NULL, 'https://product.hstatic.net/200000061028/product/hi_4_e509d477ec5f421f886a51d66b792ffb_grande.jpg', 'Nước tẩy trang cấp ẩm , làm sạch nhẹ nhàng đến từ thương hiệu Simple chứa Vitamin B3, Vitamin C và nước cất 3 lần tinh khiết giúp nhẹ nhàng tẩy sạch lớp trang điểm, kem chống nắng và bụi bẩn trên da hiệu quả. Đồng thời nước tẩy trang Simple Micellar Cleasing Water còn giúp cung cấp thêm dưỡng chất cần thiết cho làn da thêm ẩm mượt, mịn màng và rạng rỡ', 'Nước Tẩy Trang Simple Cấp Ẩm Nhẹ Nhàng Làm Sạch Trang Điểm Micellar Cleasing Water 400Ml\r\n \r\nNước tẩy trang cấp ẩm , làm sạch nhẹ nhàng đến từ thương hiệu Simple chứa Vitamin B3, Vitamin C và nước cất 3 lần tinh khiết giúp nhẹ nhàng tẩy sạch lớp trang điểm, kem chống nắng và bụi bẩn trên da hiệu quả. Đồng thời nước tẩy trang Simple Micellar Cleasing Water còn giúp cung cấp thêm dưỡng chất cần thiết cho làn da thêm ẩm mượt, mịn màng và rạng rỡ\r\n \r\nSản phẩm không chứa: 2000 hóa chất gây hại cho da, hương liệu nhân tạo, phẩm màu nhân tạo, cồn, dầu khoáng hạn chế làm da khô - căng rát hay kích ứng\r\n \r\n\r\n\r\n \r\n\r\nCÔNG DỤNG CHÍNH – MAIN FUNCTION\r\n \r\nGiúp nhẹ nhàng tẩy sạch lớp trang điểm, kem chống nắng và bụi bẩn trên da hiệu quả\r\nCung cấp thêm dưỡng chất cần thiết cho làn da thêm ẩm mượt, mịn màng và rạng rỡ\r\n\r\n\r\n \r\n\r\nTham khảo thêm các sản phẩm tẩy trang khác tại đây. \r\n\r\nCÁCH DÙNG – DIRECTION FOR USE\r\n \r\n- Cho một lượng nước tẩy trang vừa đủ ra bông tẩy trang. Nhẹ nhàng lau sạch lớp trang điểm và bụi bẩn. Không cần chà xát lên da. Không cần rửa lại với nước\r\n- Để đạt được hiệu quả tốt nhất, sau khi tẩy trang  kết hợp cùng sữa rửa mặt và nước hoa hồng\r\n \r\nThành phần: Aqua, Hexylene Glycol, Glycerin, PEG-6 Caprylic/Capric Glycerides,Phenoxyethanol, Cetrimonium Chloride, Tetrasodium EDTA,Propylene Glycol, Citric Acid, Cetylpyridinium Chloride, Sodium Chloride, Niacinamide, Sodium Ascorbyl, Phosphate, Potassium chloride, Panthenol\r\n \r\nĐối tượng sử dụng: Phù hợp cho mọi loại da, kể cả làn da nhạy cảm \r\n \r\nBảo quản: Bảo quản nơi khô ráo, thoáng mát, tránh ánh sáng trực tiếp\r\n \r\nQuy cách: Chai, 400Ml\r\n \r\nXuất xứ thương hiệu: Anh Quốc\r\n \r\nHSD: 3 năm kể từ ngày sản xuất\r\n \r\nXem thêm các sản phẩm khác cùng với nhiều chương trình khuyến mãi hấp dẫn tại website Guardian\r\n\r\n---\r\n\r\nTHÔNG TIN THÊM - ADDITIONAL INFORMATION\r\n\r\n- Để biết thêm thông tin chi tiết về sản phẩm hoặc chương trình khuyến mãi Quý khách hàng vui lòng liên hệ bộ phận CSKH qua Hotline 19004449 hoặc fanpage Guardian Việt Nam để được hỗ trợ\r\n\r\n- Nếu quý khách hàng có nhu cầu xuất hóa đơn, vui lòng điền thông tin xuất hóa đơn vào mục Ghi chú đơn hàng, Bộ phận CSKH sẽ gửi hóa đơn điện tử vào email Quý Khách hàng đã đăng ký với Guardian\r\n\r\nGuardian xin chân thành cảm ơn Quý khách!', '2023-07-17 13:35:15', '2023-07-17 13:35:15', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brand_id` (`brand_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
