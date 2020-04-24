/*
Navicat MySQL Data Transfer

Source Server         : host_thesis
Source Server Version : 50643
Source Host           : 163.44.198.63:3306
Source Database       : cp486987_blog_game

Target Server Type    : MYSQL
Target Server Version : 50643
File Encoding         : 65001

Date: 2020-04-24 14:40:55
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
  `status` int(11) NOT NULL DEFAULT '1',
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
  `link` text,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_banner
-- ----------------------------
INSERT INTO `tbl_banner` VALUES ('6', 'banner-1586940122.jpg', 'https://www.youtube.com/watch?v=UofV9ZN5Mb0&t=122s', '2020-04-24 09:56:04', '2020-04-24 04:56:05');

-- ----------------------------
-- Table structure for `tbl_comment`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_comment`;
CREATE TABLE `tbl_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(11) DEFAULT NULL,
  `post_id` varchar(11) DEFAULT NULL,
  `comment` text,
  `file_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_comment
-- ----------------------------
INSERT INTO `tbl_comment` VALUES ('1', '4', '4', '<p>โตรสวยมากเลยครับ</p>', null, '2020-04-23 20:07:17', null);
INSERT INTO `tbl_comment` VALUES ('2', '4', '1', '<p>คนมันเหี้ยยยย</p>', null, '2020-04-23 20:21:26', null);
INSERT INTO `tbl_comment` VALUES ('3', '3', '4', '<p>สวยกว่าหนูหน่อยนึ่ง อิอิ ค่ะ</p>', null, '2020-04-23 20:33:36', null);

-- ----------------------------
-- Table structure for `tbl_contact`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_contact`;
CREATE TABLE `tbl_contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` mediumtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_contact
-- ----------------------------
INSERT INTO `tbl_contact` VALUES ('1', 'Test', 'ครับผม', 'test@gmail.com', '0887744555', 'พละศึกษา', 'การศึกษา Test', '2020-04-22 16:56:31', '2020-04-22 16:56:31');
INSERT INTO `tbl_contact` VALUES ('2', 'test', 'ทดสอบ', 'boss3075030750@gmail.com', '0882614049', 'ตัดต่อรูปภาพ', 'ทดสอบ', '2020-04-23 16:38:15', '2020-04-23 16:38:15');

-- ----------------------------
-- Table structure for `tbl_pdf`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_pdf`;
CREATE TABLE `tbl_pdf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
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
  `detail` text,
  `date_post` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `cheat` varchar(200) DEFAULT NULL COMMENT 'คนโกง',
  `status` varchar(200) DEFAULT '0',
  `file_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_post
-- ----------------------------
INSERT INTO `tbl_post` VALUES ('1', '3', 'อย่าให้คน \'โกง\' ลอยนวล', 'ทุจริตกองทุนเสมาฯ\r\n\r\n \r\n\r\n\"สินน้ำใจ\" หรือ \"ส่วย\" อยู่คู่สังคมไทยมาช้านาน เห็นได้ชัดจาก \"พระยาโกษาเหล็ก\" รับสินน้ำใจและถูกโบยจนตรอมใจเสียชีวิตและมีพัฒนาการมาจนถึงปัจจุบัน เห็นได้จากเมื่อมีกรณีตรวจสอบ \"ทุจริต-คอร์รัปชัน\" พบคนที่กระทำการเป็น \"ข้าราชการ\" ของแผ่นดินกันทั้งสิ้น\r\n\r\n \r\n\r\nไม่ว่าจะเป็นการทุจริตเงินกองทุนเสมาพัฒนาชีวิต ยักยอกโอนเงินไปใส่บัญชีบุคคลอื่นถึง 22 บัญชีแทนบัญชีสถานศึกษา เป็นระยะเวลา 10 ปี ตั้งแต่ปี 2551-2561 เป็นเงินทั้งสิ้นกว่า 88 ล้านบาท ล่าสุดพบอีกว่าในปี 2551 และ 2553 มีการโอนเงินออกจริง 30 ล้านบาท แต่ไม่มีข้อมูลแจ้งว่าถูกโอนไปที่ใด\r\n\r\n \r\n\r\n\"รจนา สินที\" คือผู้ที่กระทำการดังกล่าว ทั้งๆ ที่เป็นผู้ริเริ่มโครงการเสมาพัฒนาชีวิตมาตั้งแต่ปี 2538 ถึงปัจจุบัน รับผิดชอบในการจัดทำข้อมูล รายละเอียดเสนอการขออนุมัติทุน และจะเกษียณอายุราชการ ปี 2561 ล่าสุดคณะกรรมการ อ.ก.พ.สป.ศธ. ทั้ง 7 คน มีมติเป็นเอกฉันท์ ลงโทษไล่ออกจากราชการ เพราะถือเป็นความผิดวินัยอย่างร้ายแรง ไม่ได้รับบำเหน็จ บำนาญ มีผลทันที โดยสามารถยื่นอุทธรณ์ได้ภายใน 30 วัน\r\n\r\n \r\n\r\nโกงเงินคนจน 53 จังหวัด\r\n\r\n \r\n\r\nป.ป.ท.ตรวจสอบเงินสงเคราะห์ครอบครัวผู้มีรายได้น้อยและ คนไร้ที่พึ่ง ของศูนย์คุ้มครองคนไร้ที่พึ่ง กรมพัฒนาสังคมและสวัสดิการ ที่ได้รับงบประมาณจำนวน 76 ศูนย์ ที่ได้รับงบประมาณตั้งแต่ 1 ล้านบาทขึ้นไป พบความผิดปกติทั้งหมด 53 จังหวัด งบประมาณ 107,049,000 บาท คิดเป็น 87% ของงบประมาณที่ได้รับ\r\n\r\n \r\n\r\nว่ากันว่าลึกๆ แล้วหน่วยงานที่มีการโกงเหล่านี้มีการทำเป็นขบวนการ ทุกตำแหน่งล้วนมีส่วนสัมพันธ์กันตั้งแต่ผู้อำนวยการในศูนย์พักพิงคนไร้ที่พึ่ง และศูนย์พัฒนาพื้นที่สูง เห็นได้จากที่ พม.มีคำสั่งโยกย้ายข้าราชการระดับซี 9 จำนวน 14 รายออกจากตำแหน่งเป็นการชั่วคราว หลังพบว่ามีส่วนเกี่ยวข้องในการช่วยเหลือให้ข้าราชการในสังกัดของตนเข้าดำรงตำแหน่งผู้อำนวยการ ต้องรอดูว่า ป.ป.ช.จะเอาผิดกับข้าราชการเหล่านั้นได้หรือไม่\r\n\r\n \r\n\r\nวัคซีนพิษสุนัขบ้าไม่ได้คุณภาพ?\r\n\r\n \r\n\r\nหลัง นพ.ธีรวัฒน์ เหมะจุฑา ผู้อำนวยการศูนย์วิทยาศาสตร์สุขภาพโรคอุบัติใหม่ คณะแพทยศาสตร์ โรงพยาบาลจุฬาลงกรณ์ สภากาชาดไทย ได้ออกมาตั้งข้อสงสัยวัคซีนโรคพิษสุนัขบ้า ว่ามีการหักเหของงบประมาณหรือไม่ เนื่องจากมีตัวเลขการควบคุมและการแพร่ระบาดของโรคสวนทางกัน ในที่สุดกรมปศุสัตว์ก็ยอมรับว่า ปี 2559 ไม่มีการฉีดวัคซีน พิษสุนัขบ้า เพราะองค์การอาหารและยา (อย.) ตรวจพบวัคซีนไม่มีคุณภาพและเรียกคืน และสำนักงานการตรวจเงินแผ่นดินได้ทักท้วงเรื่องของอำนาจของท้องถิ่นว่าไม่สามารถใช้งบประมาณในการซื้อวัคซีน จึงทำให้ในปีนั้นมีการฉีดวัคซีนไม่ครบตามเป้าหมายที่กำหนดไว้\r\n\r\n \r\n\r\nส่วนปี 2560 มีการฉีดเพียง 3 ล้านตัว ในส่วนกรมปศุสัตว์ ฉีด 9.5 แสนตัว องค์การปกครองส่วนท้องถิ่น 1.9 ล้านตัว จากจำนวนสุนัขประมาณ 8.24 ล้านตัว จึงเป็นสาเหตุที่ทำให้มีการระบาดอย่างมากในปีนี้ ทั้งหมดทั้งปวงนี้อยู่ในความรับผิดชอบของ \"ข้าราชการ\" ทั้งสิ้น', '2020-04-23 20:37:31', null, '2', 'post-1587618155.jpg', '2020-04-23 20:37:31', '2020-04-23 20:37:31');
INSERT INTO `tbl_post` VALUES ('4', '4', 'โปรโมชั่น Kiss Time (12:00-13:00 น.)', '<p>A few configuration options are available to fine-tune this feature, including setting a minimum and maximum height that the editor can reach when automatically adjusting its size to content. Refer to the&nbsp;<a href=\"https://ckeditor.com/docs/ckeditor4/latest/features/autogrow.html\">Automatic Editor Height Adjustment to Content</a>&nbsp;article to learn more about this feature.</p>', '2020-04-23 19:14:27', 'มิกิ', '1', 'post-1587643831.png', '2020-04-23 19:14:27', '2020-04-23 19:14:27');

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
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

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
INSERT INTO `tbl_session` VALUES ('22', '::1', 'admin', '2020-04-18 19:45:18');
INSERT INTO `tbl_session` VALUES ('23', '::1', 'admin', '2020-04-21 08:59:34');
INSERT INTO `tbl_session` VALUES ('24', '::1', 'admin', '2020-04-21 09:10:57');
INSERT INTO `tbl_session` VALUES ('25', '::1', 'admin', '2020-04-21 12:02:26');
INSERT INTO `tbl_session` VALUES ('26', '::1', 'admin', '2020-04-21 12:13:44');
INSERT INTO `tbl_session` VALUES ('27', '::1', 'admin', '2020-04-21 14:58:30');
INSERT INTO `tbl_session` VALUES ('28', '::1', 'admin', '2020-04-21 15:39:09');
INSERT INTO `tbl_session` VALUES ('29', '::1', 'admin', '2020-04-22 04:58:01');
INSERT INTO `tbl_session` VALUES ('30', '::1', 'admin', '2020-04-23 09:53:32');
INSERT INTO `tbl_session` VALUES ('31', '::1', 'admin', '2020-04-23 11:06:38');
INSERT INTO `tbl_session` VALUES ('32', '::1', 'admin', '2020-04-23 11:38:49');
INSERT INTO `tbl_session` VALUES ('33', '::1', 'admin', '2020-04-23 11:49:35');
INSERT INTO `tbl_session` VALUES ('34', '::1', 'admin', '2020-04-23 12:26:54');
INSERT INTO `tbl_session` VALUES ('35', '::1', 'admin', '2020-04-23 13:21:39');
INSERT INTO `tbl_session` VALUES ('36', '::1', 'admin', '2020-04-23 13:25:28');
INSERT INTO `tbl_session` VALUES ('37', '::1', 'admin', '2020-04-23 13:28:37');
INSERT INTO `tbl_session` VALUES ('38', '::1', 'admin', '2020-04-23 14:05:11');
INSERT INTO `tbl_session` VALUES ('39', '::1', 'admin', '2020-04-23 14:22:27');
INSERT INTO `tbl_session` VALUES ('40', '::1', 'admin', '2020-04-23 14:45:44');
INSERT INTO `tbl_session` VALUES ('41', '::1', 'admin', '2020-04-23 18:55:32');
INSERT INTO `tbl_session` VALUES ('42', '::1', 'admin', '2020-04-24 04:53:56');
INSERT INTO `tbl_session` VALUES ('43', '::1', 'admin', '2020-04-24 05:29:49');
INSERT INTO `tbl_session` VALUES ('44', '::1', 'admin', '2020-04-24 05:52:00');
INSERT INTO `tbl_session` VALUES ('45', '184.22.65.197', 'admin', '2020-04-24 14:38:43');

-- ----------------------------
-- Table structure for `tbl_slider`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_slider`;
CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_slider
-- ----------------------------
INSERT INTO `tbl_slider` VALUES ('6', 'slider-1587463448.jpg', '2020-04-21 20:07:33', '2020-04-21 20:07:33');
INSERT INTO `tbl_slider` VALUES ('7', 'Banner-03.jpg', '2020-04-21 20:08:06', '2020-04-21 20:08:06');

-- ----------------------------
-- Table structure for `tbl_user`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(100) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `oauth_provider` varchar(255) DEFAULT NULL,
  `oauth_uid` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES ('2', 'TEST999', 'IP', 'test@ipsoft.com', '99999999', 'test12', 'e10adc3949ba59abbe56e057f20f883e', '2020-04-23 10:29:50', '2020-04-23 10:29:50', 'profile-1587612590.jpg', null, null);
INSERT INTO `tbl_user` VALUES ('3', 'วสุพร', 'มนีวงค์', 'famnoii2550@gmail.com', '0968138751', 'cat123', 'e10adc3949ba59abbe56e057f20f883e', '2020-04-23 10:31:34', '2020-04-23 13:11:20', 'profile-1587616534.jpg', null, null);
INSERT INTO `tbl_user` VALUES ('4', 'Nattaphon', 'Kiattikul', 'jame0925623256@gmail.com', '0925623256', 'jimmyner', 'e10adc3949ba59abbe56e057f20f883e', '2020-04-23 18:35:22', '2020-04-23 18:35:22', 'profile-1587641722.png', null, null);
INSERT INTO `tbl_user` VALUES ('5', 'Pongsiri', 'Virojsasithon', 'boss_30750@hotmail.com', null, 'Pongsiri Virojsasithon', null, '2020-04-24 13:51:42', '2020-04-24 14:25:34', 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=10213604172178096&height=50&width=50&ext=1590305138&hash=AeS6ZK5REF18KGdT', 'facebook', '10213604172178096');
