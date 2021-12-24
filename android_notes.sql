/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 80026
 Source Host           : localhost:3306
 Source Schema         : android_notes

 Target Server Type    : MySQL
 Target Server Version : 80026
 File Encoding         : 65001

 Date: 24/12/2021 19:35:40
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for notes
-- ----------------------------
DROP TABLE IF EXISTS `notes`;
CREATE TABLE `notes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of notes
-- ----------------------------
BEGIN;
INSERT INTO `notes` VALUES (2, 'title', 'content');
INSERT INTO `notes` VALUES (3, 'title', 'content');
INSERT INTO `notes` VALUES (4, 'title', 'content');
INSERT INTO `notes` VALUES (5, 'ĐI chợ mua rau', 'Đi chợ mua rau vào tuần sau ăn cả tháng');
INSERT INTO `notes` VALUES (6, 'w', 's');
INSERT INTO `notes` VALUES (7, 'dasdasdasdasdasdasd', 'ádasdasdasásdasdasdasdasdsaádasdasdasdd');
INSERT INTO `notes` VALUES (8, 'Sang ra lam ba pho is da best', 'sdhjksd hsjkdsdh sjkd');
INSERT INTO `notes` VALUES (9, 't2 di hoc', 'hoc de bao ve to quoc');
INSERT INTO `notes` VALUES (10, 'Hoc hanh la hinh thuc giai tri sau nhung h vui choi cang thang', 'Hoc hoc nua hoc mai');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
