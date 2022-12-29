-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: mysql
-- Thời gian đã tạo: Th10 06, 2022 lúc 05:00 PM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `social`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int NOT NULL,
  `group_id` int NOT NULL COMMENT 'nhóm banner',
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'Tên banner',
  `path` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci COMMENT 'Đường dẫn ảnh',
  `name_image` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci COMMENT 'tên ảnh',
  `status` tinyint DEFAULT NULL COMMENT 'Trạng thái',
  `link` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci COMMENT 'Đường dẫn ',
  `target` tinyint DEFAULT NULL COMMENT 'Có link sang địa chỉ khác',
  `created_at` int DEFAULT NULL COMMENT 'Thời gian tạo',
  `updated_at` int DEFAULT NULL COMMENT 'Thời gian cập nhật'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `group_banner`
--

CREATE TABLE `group_banner` (
  `id` int NOT NULL COMMENT 'ID',
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'Tên nhóm banner',
  `description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci COMMENT 'Mô tả chi tiết',
  `created_at` int DEFAULT NULL COMMENT 'Thời gian tạo',
  `updated_at` int DEFAULT NULL COMMENT 'Thời gian cập nhật'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `group_menu`
--

CREATE TABLE `group_menu` (
  `id` int NOT NULL COMMENT 'ID',
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'Tên nhóm menu',
  `description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci COMMENT 'Mô tả chi tiết',
  `created_at` int DEFAULT NULL COMMENT 'Thời gian tạo',
  `updated_at` int DEFAULT NULL COMMENT 'Thời gian cập nhật'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `log`
--

CREATE TABLE `log` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL COMMENT 'người thay đổi',
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'Tên lịch sử',
  `type` tinyint DEFAULT NULL COMMENT 'Loại lịch sử',
  `status` tinyint DEFAULT NULL COMMENT 'Trạng thái lịch sử',
  `content_after` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci COMMENT 'Nội dung sau khi thay đổi',
  `content_before` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci COMMENT 'Nội dung trước khi thay đổi',
  `created_at` int DEFAULT NULL COMMENT 'Thời gian thay đổi',
  `updated_at` int DEFAULT NULL COMMENT 'thời gian cập nhật thay đổi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `id` int NOT NULL,
  `group_id` int NOT NULL COMMENT 'nhóm menu',
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'Tên menu',
  `path` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci COMMENT 'Đường dẫn ảnh',
  `name_image` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci COMMENT 'tên ảnh',
  `status` tinyint DEFAULT NULL COMMENT 'Trạng thái',
  `link` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci COMMENT 'Đường dẫn ',
  `target` tinyint DEFAULT NULL COMMENT 'Có link sang địa chỉ khác',
  `active` tinyint DEFAULT NULL COMMENT 'active',
  `created_at` int DEFAULT NULL COMMENT 'Thời gian tạo',
  `updated_at` int DEFAULT NULL COMMENT 'Thời gian cập nhật'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `message`
--

CREATE TABLE `message` (
  `id` int NOT NULL,
  `group_id` int DEFAULT NULL COMMENT 'Nhóm chat nếu có',
  `user_id_1` int DEFAULT NULL COMMENT 'Người chat 1 ',
  `user_id_2` int DEFAULT NULL COMMENT 'Người chat 2',
  `status` tinyint DEFAULT NULL COMMENT 'Trạng thái chát',
  `created_at` int DEFAULT NULL COMMENT 'Thời gian tạo',
  `updated_at` int DEFAULT NULL COMMENT 'Thời gian cập nhật'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_10_05_160818_create_post_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `likes` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `image`, `content`, `likes`, `created_at`, `updated_at`) VALUES
(12, 'ảnh cv.jpeg', 'bai viet 2', 0, '2022-10-06 15:32:37', '2022-10-06 15:32:37'),
(13, NULL, 'bai viet 3', 0, '2022-10-06 15:39:49', '2022-10-06 15:39:49'),
(14, NULL, 'bai viet 4', 0, '2022-10-06 15:40:40', '2022-10-06 15:40:40'),
(15, NULL, 'bai viet 5', 0, '2022-10-06 16:43:32', '2022-10-06 16:43:32'),
(17, NULL, 'bai viet 6', 0, '2022-10-06 19:15:21', '2022-10-06 19:15:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `site_info`
--

CREATE TABLE `site_info` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'Tên',
  `title` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `path` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci COMMENT 'Đường dẫn ảnh',
  `avatar` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci COMMENT 'Ảnh đại diện',
  `coppyright` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'coppyright',
  `favicon` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` int DEFAULT NULL COMMENT 'Thời gian tạo',
  `updated_at` int DEFAULT NULL COMMENT 'Thời gian cập nhật'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `site_info`
--

INSERT INTO `site_info` (`id`, `name`, `title`, `path`, `avatar`, `coppyright`, `favicon`, `content`, `description`, `created_at`, `updated_at`) VALUES
(1, 'adfaf', 'ádfsdaf', '/site_info', '1663128356_jXYiS_49d9fe0ef9bae2b482292f89e43b6f07.png', '@Copyright 2022 Team Hải Hiếu Đức Ngân Thắng- All Rights Reserved', '1663734126_7E7v0_3.jpg', 'ádaf', 'aa', 1663126358, 1663734126);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'Tên đăng nhập',
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'Mật khẩu',
  `email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'email',
  `phone` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'Số điện thoại',
  `on_last_time` int DEFAULT NULL COMMENT 'Lần đăng nhập gần nhất',
  `password_last_time` int DEFAULT NULL COMMENT 'Thay đổi password gần nhất',
  `remake_password` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci COMMENT 'Mã hóa check mật khẩu',
  `type` tinyint DEFAULT NULL COMMENT 'loại tài khoản',
  `status` tinyint DEFAULT NULL COMMENT 'Trạng thái hoạt động',
  `created_at` int DEFAULT NULL COMMENT 'Thời gian tạo',
  `updated_at` int DEFAULT NULL COMMENT 'Thời gian cập nhật'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `phone`, `on_last_time`, `password_last_time`, `remake_password`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'haristore', '$2y$10$fwqUgbW8zQASFcrP2hrUrulPkK5UQrdYx/tuWThS3KCB4jx02phba', 'mmrhai2000@gmail.com', '0911307049', 1663745610, 1663659435, '1663659435_$2y$10$h7hwkY0vbr1.wbpjM5hR0uLDTwL.y.QMegtEQmucKNGX8/14IYlMG', 1, 1, 1663659435, 1663745610),
(2, 'viphai2k', '$2y$10$VldZYpnfNKGcdlSPhKZAm.JhrhTbLpEcWb.niCqWgJSwpdPcqR262', 'mmrhai200@gmail.com', '09113070492', 1663726378, 1663726379, '1663726379_$2y$10$XUIebCO/3ecIRcLuowyPVOgvxqMLmZeMl4x082IzwECYygOZNBgY2', 1, 0, 1663726379, 1663726379),
(3, 'haiuser', '$2y$10$YkJ2tc38xd42yELGvlrPwOuA7G07ZQh9jeVf5P6tZXTCW12g9.8rS', 'mmrhai2@gmail.com', '09456456456', 1663743047, 1663743047, '1663743047_$2y$10$BtsKOuB.QD.2BkbC5N/cqOphT6NN3Urtfpo9miR1kz3prIn7UDpi2', 1, 1, 1663743047, 1663743047),
(4, 'lekhachieu', '$2y$10$urYLCEv73nXI17m6gseO/ukN7XUFcP/6C0YkfVQUmZg3OpUCsfJ1i', 'lekhachieu@gmail.com', '1341521354', 1663815645, 1663815044, '1663815044_$2y$10$X1GiCVmFJYhcKF2NN3IcVexG9G2e1j0DbR0oavgZisa7BmpYQe8mu', 1, 1, 1663815044, 1663815645),
(5, 'hieulk', '$2y$10$YySpBuIZ2Ji8Fo5TsidWXOP7j16ljaKRfwAhN/FRLW98UgoLOUaya', 'hieulk@gmail.com', '0987654321', 1664381198, 1664381198, '$2y$10$hXRsifxrt15nnmT.ajxhUO5xTpIyllkrT/dssqB5KyZOeOUCGKmLa', 1, 1, 1664381198, 1664381198);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_admin`
--

CREATE TABLE `user_admin` (
  `id` int NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'Tên đăng nhập',
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'Mật khẩu',
  `email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'email',
  `phone` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'Số điện thoại',
  `type` tinyint DEFAULT NULL COMMENT 'loại tài khoản',
  `status` tinyint DEFAULT NULL COMMENT 'Trạng thái hoạt động',
  `created_at` int DEFAULT NULL COMMENT 'Thời gian tạo',
  `updated_at` int DEFAULT NULL COMMENT 'Thời gian cập nhật'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `user_admin`
--

INSERT INTO `user_admin` (`id`, `username`, `password`, `email`, `phone`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$VVacOikajUA69ln785J5q.c/oZ59zk/.F6EQViEpzI2Aimz5j794m', 'mmrhai2000@gmail.com', '0911307049', 1, 1, 0, 1663743864),
(2, 'haivip', '$2y$10$EnYjtug8ntEyR9Nh06Y2E.Ofqwbtg.DKiiwY0m22NKxd9BSFP/jSm', 'hihi@gmail.com', '1234567895', 1, 0, 0, 1661876178),
(3, 'hihi', '$2y$10$6T3d1Wk5eY9byWRxyQ5bP.u8FDZwF4spPCfDScSrEVvmxrrapaNom', 'hihi@fsmasj.com', '1234578921', 1, 0, 1661510368, 1661874258),
(4, 'vip1', '$2y$10$LOGWlmafi/mHN3QEZzYJwey6cjKp7j33zSvMPuj6OcbPAwvjwD2Aa', 'vip1@gmail.com', '1234567897', 1, 0, 1661510468, 1661882464),
(6, 'admin111', '$2y$10$FkwAzjcCZ3dXltC0Il7aM.q4r62f2OLm2OfKzNLqROaEhgkpY5Mvy', 'haha@gmilac.com', '1548455684', 1, 1, 1661510724, 1661882391);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'Tên đầy đủ',
  `subname` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'tên phụ, tên khác',
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'Email',
  `phone` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'Số điện thoại',
  `avatar` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'Ảnh đại diện',
  `image_cover` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'Ảnh bìa',
  `introduce` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'Giới thiệu',
  `relationship` tinyint DEFAULT NULL COMMENT 'Tình trạng hôn nhân',
  `birthday` int DEFAULT NULL COMMENT 'Ngày sinh',
  `hometown` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'Quê quán',
  `address` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'Địa chỉ',
  `story` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'Tiểu sử',
  `created_at` int DEFAULT NULL COMMENT 'Thời gian tạo',
  `updated_at` int DEFAULT NULL COMMENT 'Thời gian cập nhật',
  `path` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'đường dẫn ảnh'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `user_info`
--

INSERT INTO `user_info` (`user_id`, `fullname`, `subname`, `email`, `phone`, `avatar`, `image_cover`, `introduce`, `relationship`, `birthday`, `hometown`, `address`, `story`, `created_at`, `updated_at`, `path`) VALUES
(1, 'Đặng Văn Hải', 'hari', 'mmrhai2000@gmail.com', '0911307049', '1663745610_Td7QN_layer-18.jpg', NULL, NULL, NULL, 957114000, 'Nghệ An', 'Hà Nội', NULL, NULL, 1663745610, '/user'),
(2, 'hau', '213', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'hii', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Lê Khắc Hiếu', 'Hiếu Thứ 2', 'lekhachieu@gmail.com', '1341521354', '1663815044_FX77F_blog-img2.jpg', '1663815044_FatwY_blog-img4.jpg', 'Đây là hiếu đẹp trai Hà Nội', 2, 947005200, 'Hà Nội', 'Hà Nội', 'hihi', 1663815044, 1663815645, '/user'),
(5, 'hieu ahihi', 'hieulk', 'hieulk@gmail.com', '0987654321', '1664381198_FAxpj_ảnh cv.jpeg', '1664381198_F1lXw_291630570_337026021914532_8575068013494979507_n.jpeg', 'ahihi', 1, 0, 'HN', 'HN', 'ahihi', 1664381198, 1664381198, '/user');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `group_banner`
--
ALTER TABLE `group_banner`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `group_menu`
--
ALTER TABLE `group_menu`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `site_info`
--
ALTER TABLE `site_info`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `group_banner`
--
ALTER TABLE `group_banner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'ID';

--
-- AUTO_INCREMENT cho bảng `group_menu`
--
ALTER TABLE `group_menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'ID';

--
-- AUTO_INCREMENT cho bảng `log`
--
ALTER TABLE `log`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `message`
--
ALTER TABLE `message`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `site_info`
--
ALTER TABLE `site_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
