/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100122
 Source Host           : localhost:3306
 Source Schema         : hdh_team

 Target Server Type    : MySQL
 Target Server Version : 100122
 File Encoding         : 65001

 Date: 19/09/2022 21:27:34
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for banner
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `group_id` int NOT NULL COMMENT 'nhóm banner',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT 'Tên banner',
  `path` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL COMMENT 'Đường dẫn ảnh',
  `name_image` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL COMMENT 'tên ảnh',
  `status` tinyint NULL DEFAULT NULL COMMENT 'Trạng thái',
  `link` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL COMMENT 'Đường dẫn ',
  `target` tinyint NULL DEFAULT NULL COMMENT 'Có link sang địa chỉ khác',
  `created_at` int NULL DEFAULT NULL COMMENT 'Thời gian tạo',
  `updated_at` int NULL DEFAULT NULL COMMENT 'Thời gian cập nhật',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of banner
-- ----------------------------

-- ----------------------------
-- Table structure for group_banner
-- ----------------------------
DROP TABLE IF EXISTS `group_banner`;
CREATE TABLE `group_banner`  (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT 'Tên nhóm banner',
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL COMMENT 'Mô tả chi tiết',
  `created_at` int NULL DEFAULT NULL COMMENT 'Thời gian tạo',
  `updated_at` int NULL DEFAULT NULL COMMENT 'Thời gian cập nhật',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of group_banner
-- ----------------------------

-- ----------------------------
-- Table structure for group_menu
-- ----------------------------
DROP TABLE IF EXISTS `group_menu`;
CREATE TABLE `group_menu`  (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT 'Tên nhóm menu',
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL COMMENT 'Mô tả chi tiết',
  `created_at` int NULL DEFAULT NULL COMMENT 'Thời gian tạo',
  `updated_at` int NULL DEFAULT NULL COMMENT 'Thời gian cập nhật',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of group_menu
-- ----------------------------

-- ----------------------------
-- Table structure for log
-- ----------------------------
DROP TABLE IF EXISTS `log`;
CREATE TABLE `log`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NULL DEFAULT NULL COMMENT 'người thay đổi',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT 'Tên lịch sử',
  `type` tinyint NULL DEFAULT NULL COMMENT 'Loại lịch sử',
  `status` tinyint NULL DEFAULT NULL COMMENT 'Trạng thái lịch sử',
  `content_after` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL COMMENT 'Nội dung sau khi thay đổi',
  `content_before` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL COMMENT 'Nội dung trước khi thay đổi',
  `created_at` int NULL DEFAULT NULL COMMENT 'Thời gian thay đổi',
  `updated_at` int NULL DEFAULT NULL COMMENT 'thời gian cập nhật thay đổi',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of log
-- ----------------------------

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `group_id` int NOT NULL COMMENT 'nhóm menu',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT 'Tên menu',
  `path` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL COMMENT 'Đường dẫn ảnh',
  `name_image` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL COMMENT 'tên ảnh',
  `status` tinyint NULL DEFAULT NULL COMMENT 'Trạng thái',
  `link` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL COMMENT 'Đường dẫn ',
  `target` tinyint NULL DEFAULT NULL COMMENT 'Có link sang địa chỉ khác',
  `active` tinyint NULL DEFAULT NULL COMMENT 'active',
  `created_at` int NULL DEFAULT NULL COMMENT 'Thời gian tạo',
  `updated_at` int NULL DEFAULT NULL COMMENT 'Thời gian cập nhật',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of menu
-- ----------------------------

-- ----------------------------
-- Table structure for site_info
-- ----------------------------
DROP TABLE IF EXISTS `site_info`;
CREATE TABLE `site_info`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT 'Tên',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `path` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL COMMENT 'Đường dẫn ảnh',
  `avatar` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL COMMENT 'Ảnh đại diện',
  `coppyright` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT 'coppyright',
  `favicon` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` int NULL DEFAULT NULL COMMENT 'Thời gian tạo',
  `updated_at` int NULL DEFAULT NULL COMMENT 'Thời gian cập nhật',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of site_info
-- ----------------------------
INSERT INTO `site_info` VALUES (1, 'adfaf', 'ádfsdaf', '/site_info', '1663128356_jXYiS_49d9fe0ef9bae2b482292f89e43b6f07.png', '@Copyright 2022 Team Hải Hiếu Đức Ngân Thắng- All Rights Reserved', '1663128364_Nxwxm_ef9c02ec8c66d111ea8b51972e20aa43.png', 'ádaf', 'aa', 1663126358, 1663129249);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT 'Tên đăng nhập',
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT 'Mật khẩu',
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT 'email',
  `phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT 'Số điện thoại',
  `on_last_time` int NULL DEFAULT NULL COMMENT 'Lần đăng nhập gần nhất',
  `password_last_time` int NULL DEFAULT NULL COMMENT 'Thay đổi password gần nhất',
  `remake_password` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL COMMENT 'Mã hóa check mật khẩu',
  `type` tinyint NULL DEFAULT NULL COMMENT 'loại tài khoản',
  `status` tinyint NULL DEFAULT NULL COMMENT 'Trạng thái hoạt động',
  `created_at` int NULL DEFAULT NULL COMMENT 'Thời gian tạo',
  `updated_at` int NULL DEFAULT NULL COMMENT 'Thời gian cập nhật',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user
-- ----------------------------

-- ----------------------------
-- Table structure for user_admin
-- ----------------------------
DROP TABLE IF EXISTS `user_admin`;
CREATE TABLE `user_admin`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT 'Tên đăng nhập',
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT 'Mật khẩu',
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT 'email',
  `phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT 'Số điện thoại',
  `type` tinyint NULL DEFAULT NULL COMMENT 'loại tài khoản',
  `status` tinyint NULL DEFAULT NULL COMMENT 'Trạng thái hoạt động',
  `created_at` int NULL DEFAULT NULL COMMENT 'Thời gian tạo',
  `updated_at` int NULL DEFAULT NULL COMMENT 'Thời gian cập nhật',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user_admin
-- ----------------------------
INSERT INTO `user_admin` VALUES (1, 'admin', '$2y$10$VVacOikajUA69ln785J5q.c/oZ59zk/.F6EQViEpzI2Aimz5j794m', 'mmrhai2000@gmail.com', '0911307049', 1, 1, 0, 1661877051);
INSERT INTO `user_admin` VALUES (2, 'haivip', '$2y$10$EnYjtug8ntEyR9Nh06Y2E.Ofqwbtg.DKiiwY0m22NKxd9BSFP/jSm', 'hihi@gmail.com', '1234567895', 1, 0, 0, 1661876178);
INSERT INTO `user_admin` VALUES (3, 'hihi', '$2y$10$6T3d1Wk5eY9byWRxyQ5bP.u8FDZwF4spPCfDScSrEVvmxrrapaNom', 'hihi@fsmasj.com', '1234578921', 1, 0, 1661510368, 1661874258);
INSERT INTO `user_admin` VALUES (4, 'vip1', '$2y$10$LOGWlmafi/mHN3QEZzYJwey6cjKp7j33zSvMPuj6OcbPAwvjwD2Aa', 'vip1@gmail.com', '1234567897', 1, 0, 1661510468, 1661882464);
INSERT INTO `user_admin` VALUES (6, 'admin111', '$2y$10$FkwAzjcCZ3dXltC0Il7aM.q4r62f2OLm2OfKzNLqROaEhgkpY5Mvy', 'haha@gmilac.com', '1548455684', 1, 1, 1661510724, 1661882391);

-- ----------------------------
-- Table structure for user_info
-- ----------------------------
DROP TABLE IF EXISTS `user_info`;
CREATE TABLE `user_info`  (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên đầy đủ',
  `subname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT 'tên phụ, tên khác',
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT 'Email',
  `phone` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT 'Số điện thoại',
  `avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT 'Ảnh đại diện',
  `image_cover` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT 'Ảnh bìa',
  `introduce` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT 'Giới thiệu',
  `relationship` tinyint NULL DEFAULT NULL COMMENT 'Tình trạng hôn nhân',
  `birthday` int NULL DEFAULT NULL COMMENT 'Ngày sinh',
  `hometown` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT 'Quê quán',
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT 'Địa chỉ',
  `story` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT 'Tiểu sử',
  `created_at` int NULL DEFAULT NULL COMMENT 'Thời gian tạo',
  `updated_at` int NULL DEFAULT NULL COMMENT 'Thời gian cập nhật',
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user_info
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
