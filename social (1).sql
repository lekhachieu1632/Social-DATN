-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: mysql
-- Thời gian đã tạo: Th12 19, 2022 lúc 04:18 PM
-- Phiên bản máy phục vụ: 8.0.31
-- Phiên bản PHP: 8.0.24

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
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `post_id` int NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `likes` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `post_id`, `image`, `content`, `likes`, `created_at`, `updated_at`, `deleted_at`) VALUES
(33, 4, 45, '', '1', 0, '2022-10-28 00:18:26', '2022-10-28 00:18:26', NULL),
(34, 4, 45, 'meo3.jpeg', '123123', 0, '2022-10-28 00:18:44', '2022-10-28 00:18:44', NULL),
(35, 4, 45, '', '2345643', 0, '2022-10-28 00:19:01', '2022-10-28 00:19:01', NULL),
(36, 4, 45, 'meo4.jpeg', 'meo luoi', 0, '2022-10-28 00:30:07', '2022-10-28 00:30:07', NULL),
(37, 4, 51, 'meo1.jpeg', 'binh luan 1', 0, '2022-10-28 01:32:30', '2022-10-28 01:32:30', NULL),
(38, 4, 51, 'meo3.jpeg', 'binh luan 23', 0, '2022-10-28 01:32:42', '2022-10-28 01:53:39', NULL),
(39, 4, 51, '', 'binh luan 3', 0, '2022-10-28 01:35:09', '2022-10-28 01:35:09', NULL),
(40, 4, 52, 'meo4.jpeg', '123', 0, '2022-10-28 02:19:10', '2022-10-28 02:19:34', NULL),
(41, 4, 52, 'meo2.jpeg', '123', 0, '2022-10-28 02:19:18', '2022-10-28 02:19:44', '2022-10-28 02:19:44'),
(42, 4, 53, 'meo3.jpeg', '123123', 0, '2022-10-28 02:37:17', '2022-10-28 02:37:37', '2022-10-28 02:37:37'),
(43, 4, 53, '', 'ahihi', 0, '2022-10-28 02:52:35', '2022-10-28 02:52:35', NULL),
(44, 1, 53, '', 'ghdfghdfg', 0, '2022-10-28 02:52:49', '2022-10-28 02:52:49', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `friend_groups`
--

CREATE TABLE `friend_groups` (
  `id` int NOT NULL,
  `user_id_1` int DEFAULT NULL COMMENT 'Id Người kết bạn',
  `user_id_2` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'Id Người được kết bạn',
  `status` tinyint DEFAULT NULL COMMENT 'Trạng thái kết bạn',
  `created_at` int NOT NULL COMMENT 'Thời gian tạo',
  `updated_at` int DEFAULT NULL COMMENT 'Thời gian cập nhật',
  `deleted_at` int DEFAULT NULL COMMENT 'Thời gian xóa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci ROW_FORMAT=COMPACT;

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

--
-- Đang đổ dữ liệu cho bảng `group_banner`
--

INSERT INTO `group_banner` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Banner home test', 'Hiển thị chi tiết banner home', 1666243512, 1666765224);

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
-- Cấu trúc bảng cho bảng `like`
--

CREATE TABLE `like` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `post_id` int DEFAULT NULL,
  `comment_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `like`
--

INSERT INTO `like` (`id`, `user_id`, `post_id`, `comment_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 4, 71, NULL, '2022-12-19 21:39:14', '2022-12-19 21:39:20', '2022-12-19 21:39:20'),
(2, 4, 71, NULL, '2022-12-19 21:42:04', '2022-12-19 21:46:14', '2022-12-19 21:46:14'),
(3, 4, 71, NULL, '2022-12-19 21:46:18', '2022-12-19 21:46:51', '2022-12-19 21:46:51'),
(4, 4, 71, NULL, '2022-12-19 21:46:57', '2022-12-19 21:46:59', '2022-12-19 21:46:59'),
(5, 4, 71, NULL, '2022-12-19 21:47:01', '2022-12-19 21:47:12', '2022-12-19 21:47:12'),
(6, 4, 70, NULL, '2022-12-19 21:47:05', '2022-12-19 21:47:05', NULL),
(7, 4, 68, NULL, '2022-12-19 21:47:07', '2022-12-19 21:47:10', '2022-12-19 21:47:10'),
(8, 4, 71, NULL, '2022-12-19 21:47:14', '2022-12-19 22:06:22', '2022-12-19 22:06:22'),
(9, 4, 71, NULL, '2022-12-19 22:06:26', '2022-12-19 22:06:26', NULL);

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
  `user_id` int DEFAULT NULL COMMENT 'Người gửi',
  `message` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci COMMENT 'Nội dung ',
  `status` tinyint DEFAULT NULL COMMENT 'Trạng thái chát',
  `created_at` int DEFAULT NULL COMMENT 'Thời gian tạo',
  `updated_at` int DEFAULT NULL COMMENT 'Thời gian cập nhật'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `message`
--

INSERT INTO `message` (`id`, `group_id`, `user_id`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'hello chào cậu', 1, 1666710336, 1666710336),
(2, 1, 1, 'Tớ là hải', 1, 1666710448, 1666710448),
(3, 1, 1, 'hải thật là đẹp trai', 1, 1666710535, 1666710535),
(4, 1, 1, 'hihi', 1, 1666710633, 1666710633),
(5, 1, 1, 'hii', 1, 1666710673, 1666710673),
(6, 1, 4, 'chào lại cậu', 1, 1666716342, 1666716342),
(7, 1, 1, 'Ừ hello cậu nha', 1, 1666716393, 1666716393),
(8, 1, 1, 'hihi', 1, 1666730595, 1666730595),
(9, 1, 1, 'chào', 1, 1666730605, 1666730605),
(10, 1, 4, 'Tớ cũng chào cậu nhé', 1, 1666730625, 1666730625),
(11, 1, 4, 'Tớ là hiếu hihi', 1, 1666730638, 1666730638),
(12, 1, 1, 'Tớ đây là', 1, 1666730868, 1666730868),
(13, 1, 1, 'hải hihi', 1, 1666730878, 1666730878),
(14, 1, 1, 'hhi', 1, 1666732116, 1666732116),
(15, 1, 1, 'hải', 1, 1666732555, 1666732555),
(16, 1, 4, 'hihi ahsidhsaidhíadhíad', 1, 1666732580, 1666732580),
(17, 1, 1, 'sad', 1, 1666732634, 1666732634),
(18, 1, 1, 'haià', 1, 1666732722, 1666732722),
(19, 1, 1, 'hay', 1, 1666732783, 1666732783),
(20, 1, 1, 'hayhyahádskjdla', 1, 1666732801, 1666732801),
(21, 1, 1, 'hihi', 1, 1666732900, 1666732900),
(22, 1, 1, 'hải', 1, 1666732928, 1666732928),
(23, 1, 1, 'hihi', 1, 1666733005, 1666733005),
(24, 1, 1, 'hihihhhhh', 1, 1666733029, 1666733029),
(25, 1, 1, 'haidhíađía', 1, 1666733100, 1666733100),
(26, 1, 4, 'hay hay', 1, 1666733160, 1666733160),
(27, 1, 1, 'hừm hải đẹp xai', 1, 1666733197, 1666733197),
(28, 1, 1, 'ấ', 1, 1666733477, 1666733477),
(29, 1, 1, 'hihih', 1, 1666733529, 1666733529),
(30, 1, 1, 'hihiô', 1, 1666733559, 1666733559),
(31, 1, 1, 'ádfdsa', 1, 1666733569, 1666733569),
(32, 1, 1, 'adsfádf', 1, 1666733607, 1666733607),
(33, 1, 1, 'àdsàdsàdsà', 1, 1666733677, 1666733677),
(34, 1, 1, 'dsàdsàdsà', 1, 1666733711, 1666733711),
(35, 1, 1, 'adsads', 1, 1666733736, 1666733736),
(36, 1, 1, 'dsàdsàds', 1, 1666733752, 1666733752),
(37, 1, 1, 'ádfdà', 1, 1666733768, 1666733768),
(38, 1, 1, 'hải siêu nhận vip pro', 1, 1666733791, 1666733791),
(39, 1, 1, 'hải siêu nhâp ạdjksạdlksa', 1, 1666733816, 1666733816),
(40, 1, 1, 'hải siêu nhâp ạdjksạdlksa', 1, 1666733816, 1666733816),
(41, 1, 1, 'hihihi', 1, 1666733907, 1666733907),
(42, 1, 1, 'hải đẹp trai khoai to', 1, 1666733919, 1666733919),
(43, 1, 1, 'chào cậu', 1, 1666734014, 1666734014),
(44, 1, 4, 'Cậu tên gì', 1, 1666734026, 1666734026),
(45, 1, 4, 'Cậu đi chơi khum', 1, 1666734034, 1666734034),
(46, 1, 1, 'hihi', 1, 1666735096, 1666735096),
(47, 1, 4, 'Chào cậu nè', 1, 1666735927, 1666735927),
(48, 1, 4, 'Tớ là hiếu á', 1, 1666735931, 1666735931),
(49, 1, 1, 'hi tớ là hải bad boy', 1, 1666735954, 1666735954),
(50, 1, 4, 'hihihihi haiai', 1, 1666736251, 1666736251),
(51, 1, 4, 'đồ đấn', 1, 1666736256, 1666736256),
(52, 3, 4, 'hai', 1, 1666778741, 1666778741),
(53, 1, 4, 'do ngu', 1, 1666799070, 1666799070),
(54, 1, 1, 'ngu vl', 1, 1666799126, 1666799126);

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
(1, '2022_10_27_173548_add_column_location_post_at_table_post', 1),
(2, '2022_12_14_102711_create_like_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `location_post` int DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `likes` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `user_id`, `location_post`, `image`, `content`, `likes`, `created_at`, `updated_at`, `deleted_at`) VALUES
(47, 4, 4, '', '123123', 0, '2022-10-28 01:21:49', '2022-10-28 01:25:40', '2022-10-28 01:25:40'),
(48, 4, 4, 'meo2.jpeg', '33333', 0, '2022-10-28 01:24:28', '2022-10-28 01:25:36', '2022-10-28 01:25:36'),
(49, 4, 4, 'meo3.jpeg', '123123', 0, '2022-10-28 01:25:49', '2022-10-28 02:22:59', '2022-10-28 02:22:59'),
(50, 4, 4, 'meo2.jpeg', 'meo 12', 0, '2022-10-28 01:26:22', '2022-10-28 02:22:05', '2022-10-28 02:22:05'),
(51, 4, 4, 'meo3.jpeg', 'meo 23', 0, '2022-10-28 01:28:31', '2022-10-28 02:22:47', '2022-10-28 02:22:47'),
(52, 4, 4, 'meo3.jpeg', '123123', 0, '2022-10-28 02:16:19', '2022-10-28 02:21:30', '2022-10-28 02:21:30'),
(53, 4, 4, 'download.jpeg', '1111', 0, '2022-10-28 02:23:06', '2022-10-28 05:08:03', NULL),
(54, 4, 4, 'meo3.jpeg', '33333', 0, '2022-10-28 02:23:47', '2022-10-28 02:37:05', '2022-10-28 02:37:05'),
(55, 4, 4, '', '3333', 0, '2022-10-28 02:28:37', '2022-10-28 02:35:36', '2022-10-28 02:35:36'),
(56, 4, 4, '', '5555', 0, '2022-10-28 02:28:54', '2022-10-28 02:35:19', '2022-10-28 02:35:19'),
(57, 4, 4, '', '123123123', 0, '2022-10-28 02:36:08', '2022-10-28 02:36:13', '2022-10-28 02:36:13'),
(58, 4, 4, 'meo3.jpeg', NULL, 0, '2022-10-28 02:36:54', '2022-10-28 02:36:58', '2022-10-28 02:36:58'),
(59, 1, 4, '', '123123', 0, '2022-10-28 02:39:00', '2022-10-28 02:39:00', NULL),
(60, 1, 1, 'meo4.jpeg', NULL, 0, '2022-10-28 03:21:49', '2022-10-28 03:21:49', NULL),
(61, 1, 4, '', 'ahihih', 0, '2022-10-28 03:22:10', '2022-10-28 03:27:39', '2022-10-28 03:27:39'),
(62, 4, 2, '', 'ádfsdfs', 0, '2022-10-28 06:15:12', '2022-10-28 06:15:12', NULL),
(63, 4, 4, '', 'ahihi', 0, '2022-11-27 23:02:39', '2022-12-09 00:35:37', NULL),
(64, 4, 4, 'anh meo 4.jpeg', '123123', 0, '2022-12-09 00:52:27', '2022-12-09 00:52:27', NULL),
(65, 4, 4, 'anh meo 1.jpeg', 'asdasd', 0, '2022-12-10 14:13:27', '2022-12-10 14:13:27', NULL),
(66, 4, 4, 'anh meo 1.jpeg', 'qwe', 0, '2022-12-10 14:18:52', '2022-12-10 14:18:52', NULL),
(67, 4, NULL, 'anh meo 3.png', '333333', 0, '2022-12-19 01:29:31', '2022-12-19 01:29:31', NULL),
(68, 4, NULL, 'anh meo 2.jpeg', '222111', 0, '2022-12-19 13:45:55', '2022-12-19 21:47:10', NULL),
(69, 4, NULL, 'anh meo 4.jpeg', NULL, 0, '2022-12-19 13:46:26', '2022-12-19 13:46:26', NULL),
(70, 4, NULL, '', '123123', 1, '2022-12-19 13:55:29', '2022-12-19 21:47:05', NULL),
(71, 4, NULL, '', 'ahihi', 1, '2022-12-19 17:19:27', '2022-12-19 22:06:26', NULL);

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
(2, 'viphai2k', '$2y$10$VldZYpnfNKGcdlSPhKZAm.JhrhTbLpEcWb.niCqWgJSwpdPcqR262', 'mmrhai200@gmail.com', '09113070492', 1663726378, 1663726379, '1663726379_$2y$10$XUIebCO/3ecIRcLuowyPVOgvxqMLmZeMl4x082IzwECYygOZNBgY2', 1, 1, 1663726379, 1663726379),
(4, 'lekhachieu', '$2y$10$urYLCEv73nXI17m6gseO/ukN7XUFcP/6C0YkfVQUmZg3OpUCsfJ1i', 'lekhachieu@gmail.com', '1341521354', 1663815645, 1663815044, '1663815044_$2y$10$X1GiCVmFJYhcKF2NN3IcVexG9G2e1j0DbR0oavgZisa7BmpYQe8mu', 1, 1, 1663815044, 1663815645),
(5, 'lekhachieu1', '$2y$10$LphrhuJf5ONSkadknwYgHuDBfhyzFzP/iynIcH3.zKzidpxkCK/6O', 'lekhachieu1632@gmail.com', '0988888888', 1666883297, 1666883297, '$2y$10$w2UuBtL/pQ34NwvN/7iGXuk2Y1J8hdORh2xAomAZ82cQQ9BdcohXW', 1, 1, 1666883297, 1666883297);

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
  `address` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'Địa chỉ',
  `story` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'Tiểu sử',
  `created_at` int DEFAULT NULL COMMENT 'Thời gian tạo',
  `updated_at` int DEFAULT NULL COMMENT 'Thời gian cập nhật',
  `path` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'đường dẫn ảnh',
  `sex` tinyint DEFAULT NULL COMMENT 'Giới tính'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `user_info`
--

INSERT INTO `user_info` (`user_id`, `fullname`, `subname`, `email`, `phone`, `avatar`, `image_cover`, `introduce`, `relationship`, `birthday`, `address`, `story`, `created_at`, `updated_at`, `path`, `sex`) VALUES
(1, 'Đặng Văn Hải', 'hari', 'mmrhai2000@gmail.com', '0911307049', '1664380573_72ao5_ảnh cv.jpeg', NULL, NULL, NULL, 957114000, 'Hà Nội', NULL, NULL, 1663745610, '/user', NULL),
(2, 'hau', '213', NULL, NULL, '1664380573_72ao5_ảnh cv.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Lê Khắc Hiếu', 'Hiếu Thứ 2', 'lekhachieu@gmail.com', '1341521354', 'meo4.jpeg', 'meo4.jpeg', 'Đây là hiếu đẹp trai Hà Nội', 2, 947005200, 'Hà Nội', 'hihi', 1663815044, 1663815645, '/user', NULL),
(5, 'Lê Khắc Hiếu', NULL, 'lekhachieu1632@gmail.com', '0988888888', NULL, NULL, NULL, NULL, NULL, 'ádasd', NULL, 1666883297, 1666883297, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `friend_groups`
--
ALTER TABLE `friend_groups`
  ADD PRIMARY KEY (`id`) USING BTREE;

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
-- Chỉ mục cho bảng `like`
--
ALTER TABLE `like`
  ADD PRIMARY KEY (`id`);

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
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`) USING BTREE;

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
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `friend_groups`
--
ALTER TABLE `friend_groups`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `group_banner`
--
ALTER TABLE `group_banner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `group_menu`
--
ALTER TABLE `group_menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'ID';

--
-- AUTO_INCREMENT cho bảng `like`
--
ALTER TABLE `like`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

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
