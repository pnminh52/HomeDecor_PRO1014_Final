-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 02, 2024 lúc 01:05 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `homedecorfinal`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cate_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `cate_name`) VALUES
(2, 'Bàn gỗ '),
(4, 'Tủ ly'),
(5, 'Sofa'),
(6, 'Đèn treo'),
(7, 'Tranh'),
(8, 'Tủ âm tường'),
(9, 'Tủ hộc kéo'),
(10, 'Bình trang trí'),
(11, 'Armchair'),
(12, 'Kệ trưng bày'),
(13, 'Tủ tivi'),
(14, 'Tủ giày'),
(15, 'Thảm trang trí');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `payment_method` varchar(60) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `status`, `payment_method`, `total_price`, `created_at`) VALUES
(1, 2, 1, 'cod', 34658000.00, '2024-12-01 16:39:13'),
(2, 2, 1, 'cod', 34658000.00, '2024-12-01 16:48:11'),
(3, 2, 1, 'cod', 34658000.00, '2024-12-01 16:48:33'),
(4, 2, 1, 'cod', 34658000.00, '2024-12-01 16:49:03'),
(5, 2, 1, 'cod', 34658000.00, '2024-12-01 16:57:50'),
(6, 2, 1, 'cod', 34658000.00, '2024-12-01 16:58:02'),
(7, 2, 1, 'cod', 34658000.00, '2024-12-01 17:26:06'),
(8, 2, 1, 'cod', 34658000.00, '2024-12-01 17:48:34'),
(9, 2, 1, 'cod', 34658000.00, '2024-12-01 17:49:35'),
(10, 2, 1, 'cod', 34658000.00, '2024-12-01 17:51:59'),
(11, 2, 1, 'cod', 34658000.00, '2024-12-01 17:56:31'),
(12, 2, 1, 'cod', 34658000.00, '2024-12-01 18:01:31'),
(13, 2, 1, 'cod', 34658000.00, '2024-12-01 18:05:13'),
(14, 2, 1, 'cod', 34658000.00, '2024-12-01 18:06:54'),
(15, 2, 1, 'cod', 34658000.00, '2024-12-01 18:10:38'),
(16, 2, 1, 'cod', 34658000.00, '2024-12-01 18:11:17'),
(17, 2, 1, 'cod', 34658000.00, '2024-12-01 18:12:38'),
(18, 2, 1, 'cod', 34658000.00, '2024-12-01 18:13:25'),
(19, 2, 1, 'vnpay', 32640000.00, '2024-12-01 18:31:21'),
(22, 2, 3, 'cod', 83615000.00, '2024-12-01 21:14:11'),
(23, 2, 4, 'cod', 16320000.00, '2024-12-01 23:09:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `price`, `quantity`) VALUES
(1, 18, 24, 1000, 3),
(2, 18, 25, 34655000, 1),
(3, 19, 20, 16320000, 2),
(4, 20, 20, 16320000, 2),
(5, 20, 25, 34655000, 3),
(6, 21, 23, 18770000, 3),
(7, 21, 24, 65320000, 1),
(8, 22, 20, 16320000, 3),
(9, 22, 25, 34655000, 1),
(10, 23, 20, 16320000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `description` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT 'status: trang thai kinh doanh, 1: dang ky, 0: ngung kinh doanh',
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `quantity`, `description`, `content`, `status`, `category_id`) VALUES
(20, 'Bàn ăn gỗ Bridge 1m8', 'product1.jpg', 16320000.00, 180, 'Bàn ăn gỗ Bridge 1m8 là một lựa chọn hoàn hảo cho không gian bếp hoặc phòng ăn của bạn, mang đến vẻ đẹp tinh tế và hiện đại. Được chế tác từ chất liệu gỗ tự nhiên cao cấp, sản phẩm không chỉ bền bỉ mà còn mang lại cảm giác ấm cúng, gần gũi cho mỗi bữa ăn ', '\"Bàn ăn gỗ Bridge 1m8 – Nâng tầm không gian bữa ăn của bạn. Được làm từ gỗ tự nhiên chất lượng cao, bàn ăn này không chỉ mang đến vẻ đẹp tinh tế mà còn bền bỉ qua thời gian. Với thiết kế hiện đại và chiều dài lý tưởng 1m8, sản phẩm sẽ là lựa chọn hoàn hảo cho những gia đình yêu thích sự tiện nghi và sang trọng. Hãy để Bàn ăn gỗ Bridge 1m8 biến mỗi bữa ăn thành một trải nghiệm thú vị, ấm cúng bên gia đình và người thân.\"', 1, 2),
(21, 'Bàn bên Mây – mẫu 2 da Fango', 'product3.jpg', 32000000.00, 180, '', '', 1, 2),
(23, 'Bàn ăn 8 chỗ Coastal', 'product6.jpg', 18770000.00, 180, '', '', 1, 2),
(24, 'Tủ Ly Barbier Walnut 410043Z', 'product7.jpg', 65320000.00, 180, '', '', 1, 4),
(25, 'Tủ ly Bridge gỗ màu Tự nhiên', 'product8.jpg', 34655000.00, 180, '', '', 1, 4),
(26, 'Bàn ăn 8 chỗ Napoli', 'product2.jpg', 49000000.00, 180, '', '', 1, 2),
(27, 'Sofa 2 chỗ Mây mới', 'product9.jpg', 34420000.00, 187, '', '', 1, 5),
(28, 'Sofa 3 chỗ PENNY vải xanh MB 08', 'product10.jpg', 24000000.00, 180, '', '', 1, 5),
(29, 'Sofa Poppy góc trái vải màu cam', 'product11.jpeg', 29998000.00, 180, '', '', 1, 5),
(30, 'Sofa 2 chỗ Sofia vải VACT3573+6130', 'product12.jpg', 18325999.90, 180, '', '', 1, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `email` varchar(199) NOT NULL,
  `password` varchar(199) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `address` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `phone`, `role`, `active`, `address`, `create_at`, `updated_at`) VALUES
(2, 'Admin', 'Admin@example.com', '$2y$10$A/wKLyKaLzvqPe2ElF5B4OWIiCoafcL1XS8vsn88aastPbIIqEh2e', '0942882225', 'admin', 1, '>', '2024-11-29 21:49:36', '2024-11-29 21:49:36'),
(3, 'Phạm Nhật Minh', 'minh@example.com', '$2y$10$dI3gTeHWO6eOn4asadTUR.UulZV5EGPYb5SVimeIJs5dSG/Pg4jB.', '0934557882', 'user', 1, 'Hà Nam', '2024-11-29 23:34:15', '2024-11-29 23:34:15'),
(4, 'newuser', 'nu@gmail.com', '$2y$10$JZW9g6Axr8PrWqcrLERkY.TNmCE7J.uCP7AJC7K9D4qWgRMyEwSEa', '0934557882', 'user', 1, 'Hà Nam', '2024-11-30 00:17:17', '2024-11-30 00:17:17');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
