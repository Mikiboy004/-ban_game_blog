/*
Navicat MySQL Data Transfer

Source Server         : db
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : ban_blog_game

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-04-17 17:35:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tbl_admin`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE `tbl_admin` (
  `Id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `create_times` datetime NOT NULL,
  `update_times` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_admin
-- ----------------------------
INSERT INTO `tbl_admin` VALUES ('1', 'test', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'test@test.com', null, null, '1', '2020-04-07 14:20:56', '2020-04-07 14:20:59', null, null);

-- ----------------------------
-- Table structure for `tbl_banner`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_banner`;
CREATE TABLE `tbl_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_banner
-- ----------------------------
INSERT INTO `tbl_banner` VALUES ('5', 'banner-1586940122.png', '2020-04-15 10:42:03', null);

-- ----------------------------
-- Table structure for `tbl_comment`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_comment`;
CREATE TABLE `tbl_comment` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) DEFAULT NULL,
  `post_id` varchar(11) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_comment
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_contact`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_contact`;
CREATE TABLE `tbl_contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `message` text CHARACTER SET utf8 DEFAULT NULL,
  `create_times` datetime NOT NULL,
  `update_times` datetime DEFAULT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_contact
-- ----------------------------
INSERT INTO `tbl_contact` VALUES ('1', 'names kid', 'jame0925623256@gmail.com', '123654785', 'asd', '2020-04-07 16:02:29', null);
INSERT INTO `tbl_contact` VALUES ('2', 'Nattaphon Kiattikul', 'jame0925623256@gmail.com', '0925623256', 'sdf', '2020-04-07 16:02:42', null);
INSERT INTO `tbl_contact` VALUES ('3', 'Nattaphon Kiattikul', 'jame0925623256@gmail.com', '0925623256', 'asdasd', '2020-04-07 16:02:48', null);
INSERT INTO `tbl_contact` VALUES ('4', 'asd', 'asd', 'asd', 'asd', '2020-04-07 16:03:13', null);
INSERT INTO `tbl_contact` VALUES ('5', 'Nattaphon Kiattikul', 'jame0925623256@gmail.com', '0925623256', 'asd', '2020-04-07 16:05:04', null);

-- ----------------------------
-- Table structure for `tbl_pdf`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_pdf`;
CREATE TABLE `tbl_pdf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_pdf
-- ----------------------------
INSERT INTO `tbl_pdf` VALUES ('1', 'แบบรูปภาพ (ขนาดไฟล์เท่ากับ A4 เท่านั้น)', 'poster-1586599903.png', '2020-04-11', '2020-04-11 17:11:51', '2020-04-11 12:11:43');
INSERT INTO `tbl_pdf` VALUES ('3', 'แบบไฟล์ PDF (ขนาดไฟล์เท่ากับ A4 เท่านั้น)', 'Post-1586764848.pdf', '2020-04-15', '2020-04-13 10:00:48', null);
INSERT INTO `tbl_pdf` VALUES ('4', 'แบบไฟล์ PDF (ขนาดไฟล์เท่ากับ A4 เท่านั้น)', 'Post-1586766859.pdf', '2020-04-13', '2020-04-13 10:34:19', null);
INSERT INTO `tbl_pdf` VALUES ('5', 'แบบไฟล์ PDF (ขนาดไฟล์เท่ากับ A4 เท่านั้น)', 'Post-1586766904.pdf', '2020-04-13', '2020-04-13 10:35:04', null);
INSERT INTO `tbl_pdf` VALUES ('6', 'แบบไฟล์PDF', 'pdf-1586935087.pdf', '0000-00-00', '2020-04-15 14:18:07', null);

-- ----------------------------
-- Table structure for `tbl_post`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_post`;
CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) DEFAULT NULL,
  `topic` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `date_post` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `status` varchar(200) DEFAULT '0',
  `file_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_post
-- ----------------------------
INSERT INTO `tbl_post` VALUES ('1', '1', 'ทดสอบ', 'รายละเอียดการทดสอบ', '2020-04-16 13:42:18', '0', 'test.pnf', '2020-04-16 13:42:15', '2020-04-16 13:42:17');

-- ----------------------------
-- Table structure for `tbl_session`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_session`;
CREATE TABLE `tbl_session` (
  `Id_session` int(11) NOT NULL AUTO_INCREMENT,
  `Ip_address` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `create_times` datetime DEFAULT NULL,
  PRIMARY KEY (`Id_session`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_session
-- ----------------------------
INSERT INTO `tbl_session` VALUES ('1', '127.0.0.1', 'admin', '2020-04-07 09:21:12');
INSERT INTO `tbl_session` VALUES ('2', '::1', 'admin', '2020-04-08 05:45:50');
INSERT INTO `tbl_session` VALUES ('3', '::1', 'admin', '2020-04-08 06:45:19');
INSERT INTO `tbl_session` VALUES ('4', '::1', 'admin', '2020-04-08 10:14:41');
INSERT INTO `tbl_session` VALUES ('5', '::1', 'admin', '2020-04-09 06:42:15');
INSERT INTO `tbl_session` VALUES ('6', '::1', 'admin', '2020-04-10 05:57:14');
INSERT INTO `tbl_session` VALUES ('7', '::1', 'admin', '2020-04-11 09:04:45');
INSERT INTO `tbl_session` VALUES ('8', '::1', 'admin', '2020-04-13 05:46:37');
INSERT INTO `tbl_session` VALUES ('9', '::1', 'admin', '2020-04-13 06:25:58');
INSERT INTO `tbl_session` VALUES ('10', '::1', 'admin', '2020-04-13 06:27:08');
INSERT INTO `tbl_session` VALUES ('11', '::1', 'admin', '2020-04-13 10:00:01');
INSERT INTO `tbl_session` VALUES ('12', '::1', 'admin', '2020-04-13 10:33:23');
INSERT INTO `tbl_session` VALUES ('13', '::1', 'admin', '2020-04-14 06:09:43');
INSERT INTO `tbl_session` VALUES ('14', '::1', 'admin', '2020-04-14 10:46:53');
INSERT INTO `tbl_session` VALUES ('15', '::1', 'admin', '2020-04-15 06:13:03');
INSERT INTO `tbl_session` VALUES ('16', '::1', 'admin', '2020-04-15 08:18:56');
INSERT INTO `tbl_session` VALUES ('17', '::1', 'admin', '2020-04-15 08:41:42');
INSERT INTO `tbl_session` VALUES ('18', '::1', 'admin', '2020-04-15 09:22:40');
INSERT INTO `tbl_session` VALUES ('19', '::1', 'admin', '2020-04-15 14:22:45');
INSERT INTO `tbl_session` VALUES ('20', '::1', 'admin', '2020-04-16 06:42:09');
INSERT INTO `tbl_session` VALUES ('21', '::1', 'admin', '2020-04-17 11:07:53');

-- ----------------------------
-- Table structure for `tbl_slider`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_slider`;
CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_slider
-- ----------------------------
INSERT INTO `tbl_slider` VALUES ('3', 'silder-1587114540.png', '2020-04-17 16:09:00', '2020-04-17 11:09:00');

-- ----------------------------
-- Table structure for `tbl_user`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `id_taxs` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `point` varchar(255) DEFAULT '0',
  `create_times` datetime NOT NULL,
  `update_times` datetime DEFAULT NULL,
  `time_forgot_password` varchar(255) DEFAULT NULL,
  `forgot_password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES ('1', 'jame0925623256@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '050505050505050', 'Infinity Phenomenal Software', '247/5 M.4\r\nNong Han, San Sai, Chiang Mai, 50290.', '0', '2020-04-07 15:14:52', null, null, null);
