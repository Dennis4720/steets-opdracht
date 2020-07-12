/*
 Navicat Premium Data Transfer

 Source Server         : [removed]
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : [removed]:3306
 Source Schema         : [removed]

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001

 Date: 29/11/2018 16:09:13
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for years
-- ----------------------------
DROP TABLE IF EXISTS `years`;
CREATE TABLE `years`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(4) NULL DEFAULT NULL,
  `christmas_day` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `century` int(20) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of years
-- ----------------------------
INSERT INTO `years` VALUES (1, 2018, '4b4cfef29f2b5e70643884a4aef0e9f9mMc9PjqqWw==', 21);
INSERT INTO `years` VALUES (2, 2004, '48245cebfc032efbbf8b71c49dd1694feH9e0P45ZCo=', 21);
INSERT INTO `years` VALUES (3, 1624, '4eb2ce1deaa3a5e19b17701bd60be3ed4AsZPfxrER5D', 17);
INSERT INTO `years` VALUES (4, 1111, '2bd7e9bb19d34fce12d2711e00caf21cHQyhQ7uN', 12);

SET FOREIGN_KEY_CHECKS = 1;
