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

CREATE TABLE `Roles` (
  `id` int primary key AUTO_INCREMENT,
  `name` varchar(20) not null

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `Users` (
  `id` int primary key AUTO_INCREMENT,
  `fullname` varchar(50) ,
  `email` varchar(150) ,
  `phone_number` varchar(20) ,
  `address` varchar(200),
  `password` varchar(32),
  `role_id` int,
  `created_at` date,
  `updated_at` date,
  `deleted` int

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `Categories` (
    `id` int primary key AUTO_INCREMENT,
    `name` varchar(100) not null
);



CREATE TABLE `Products` (
  `id` int primary key AUTO_INCREMENT,
  `category_id` int,
  `title` varchar(350),
  `price` int,
  `discount` int,
  `thumbnail` varchar(500),
  `description` varchar(500),
  `created_at` date,
  `updated_at` date,
  `deleted` int
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `Galleries` (
  `id` int primary key AUTO_INCREMENT,
  `product_id` int not null ,
  `thumbnail` varchar(500) not null
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `Feedback` (
  `id` int primary key AUTO_INCREMENT,
  `firstname` varchar(30),
  `lastname` varchar(30),
  `email` varchar(150),
  `phone_number` varchar(20),
  `subject_name` varchar(200),
  `note` varchar(500)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `Orders` (
    `id` int primary key AUTO_INCREMENT,
    `user_id` int,
    `full_name` varchar(50),
    `email` varchar(150),
    `phone_number` varchar(20),
    `address` varchar(200),
    `note` varchar(255),
    `order_date` date,
    `status` int,
    `total_money` int
);

CREATE TABLE `Order_details` (
    `id` int primary key AUTO_INCREMENT,
    `order_id` int,
    `product_id` int,
    `price` int,
    `num` int,
    `total_money` int
);



ALTER TABLE `Users` ADD FOREIGN KEY (`role_id`) REFERENCES `Roles` (`id`);

ALTER TABLE `Products` ADD FOREIGN KEY (`category_id`) REFERENCES `Categories` (`id`);

ALTER TABLE `Order_details` ADD FOREIGN KEY (`product_id`) REFERENCES `Products` (`id`);

ALTER TABLE `Galleries` ADD FOREIGN KEY (`product_id`) REFERENCES `Products` (`id`);

ALTER TABLE `Order_details` ADD FOREIGN KEY (`order_id`) REFERENCES `Orders` (`id`);

ALTER TABLE `Orders` ADD FOREIGN KEY (`user_id`) REFERENCES `Users` (`id`);
