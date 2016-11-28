/*
Navicat MySQL Data Transfer

Source Server         : hcy数据库
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : feihe

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-06-30 16:54:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ad
-- ----------------------------
DROP TABLE IF EXISTS `ad`;
CREATE TABLE `ad` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) DEFAULT NULL,
  `title` varchar(10) DEFAULT NULL,
  `content` varchar(20) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `sort` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of ad
-- ----------------------------
INSERT INTO `ad` VALUES ('1', 'milk1', 'freshMilk', null, null, 'img/01.jpg', null);
INSERT INTO `ad` VALUES ('2', 'milk2', 'fanxian', null, null, 'img/02.jpg', null);
INSERT INTO `ad` VALUES ('3', 'milk3', 'freeMlik', null, null, 'img/03.jpg', null);
INSERT INTO `ad` VALUES ('4', 'milk4', 'goldMilk', null, null, 'img/04.jpg', null);
INSERT INTO `ad` VALUES ('5', 'milk5', 'height-end', null, null, 'img/05.jpg', null);

-- ----------------------------
-- Table structure for img
-- ----------------------------
DROP TABLE IF EXISTS `img`;
CREATE TABLE `img` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of img
-- ----------------------------
INSERT INTO `img` VALUES ('1', 'img/headPortrait1.jpg');
INSERT INTO `img` VALUES ('2', 'img/headPortrait1.jpg');
INSERT INTO `img` VALUES ('3', 'img/headPortrait2.jpg');

-- ----------------------------
-- Table structure for newcenter
-- ----------------------------
DROP TABLE IF EXISTS `newcenter`;
CREATE TABLE `newcenter` (
  `newsId` int(4) NOT NULL AUTO_INCREMENT,
  `集团新闻` varchar(255) NOT NULL,
  `新闻报道` varchar(255) NOT NULL,
  `视频报道` varchar(255) NOT NULL,
  `专家讲堂` varchar(255) NOT NULL,
  `育儿知识堂` varchar(255) NOT NULL,
  PRIMARY KEY (`newsId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of newcenter
-- ----------------------------
INSERT INTO `newcenter` VALUES ('1', '心系江苏龙卷风灾区 飞鹤人奔波在灾后援助第一线', '飞鹤奶粉-更适合中国宝宝体质【十省销量连续两年遥遥领先】', '飞鹤登上央视新闻', '王丽霞讲堂【宝宝左撇子的原因是什么】', '科学饮食可以提高精子质量');
INSERT INTO `newcenter` VALUES ('2', '乳业首家“生态原产地产品”保护认证落户飞鹤', '飞鹤全产业链获得立陶宛驻华使馆考察团赞誉', '爱没有距离-男演员拜年VCR', '王丽霞讲堂【1-2岁孩子生长发育特点】', '怀孕能增加十年的免疫力');
INSERT INTO `newcenter` VALUES ('3', '飞鹤乳业联手南方周末 共同举办2016新食局公开课', '安全可见创新呵护 飞鹤打造可视化全产业链', '爱没有距离-女演员拜年VCR', '王丽霞讲堂【2-3岁孩子生长发育的特点】', '准妈妈应留意的十大反常现象');
INSERT INTO `newcenter` VALUES ('4', '飞鹤亮相第七届中国奶业大会 鲜奶品质树中国乳业正能量', '乳品行业迎来新契机 飞鹤可视化全产业链“树新风”', '飞鹤与哈佛大学医学院BIDMC联合成立飞鹤营养实验室', '王丽霞讲堂【3-4岁生长发育有哪些特点】', '孕妇的睡姿');
INSERT INTO `newcenter` VALUES ('5', '更适合中国宝宝体质的奶粉缘何受国际大奖青睐？', '飞鹤奶粉因更适合中国宝宝体质而让飞鹤倍受青睐', '飞鹤与哈佛大学医学院BIDMC医学中心合作', '王丽霞讲堂【3岁孩子神经精神各方面发育特点】', '语音胎教');
INSERT INTO `newcenter` VALUES ('6', '飞鹤乳业蝉联世界食品品质评鉴大会金奖', '飞鹤互联网营销渐入佳境 揽获2015广告节两项大奖', '飞鹤视频广告', '王丽霞讲堂【宝宝不爱走路的原因】', '母乳不足怎么办？');
INSERT INTO `newcenter` VALUES ('7', '种养加一体化构建大产业生态圈 飞鹤全产业化模式受关注', '', '【甘南电视台】飞鹤-哈佛医学院BIDMC联合成立实验室签约', '王丽霞讲堂【宝宝特别爱哭的原因有哪些 该怎么办】', '怀了双胞胎应该怎么办');
INSERT INTO `newcenter` VALUES ('8', '以“鲜”呵护宝宝健康生长 飞鹤送给妈妈们最好的礼物', '', '【黑龙江电视台新闻联播】飞鹤-哈佛医学院BIDMC联合成立实验室', '王丽霞讲堂【宝宝走路内八字外八字的原因】', '产后一周的生活日程');
INSERT INTO `newcenter` VALUES ('9', '为什么走遍全世界的他，只说这儿好？', '', '飞鹤-哈佛医学院BIDMC联合成立实验室', '', '');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `image` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('1', '新闻资讯', 'img/newspaper.jpg');
INSERT INTO `news` VALUES ('2', '热点视频', 'img/shipin.jpg');
INSERT INTO `news` VALUES ('3', '母婴知识', 'img/mc.jpg');

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `pid` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `content` varchar(255) NOT NULL,
  `price` int(4) DEFAULT NULL,
  `amount` int(10) NOT NULL,
  `hot` int(10) DEFAULT NULL,
  `is_index` varchar(10) DEFAULT NULL,
  `image` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', '产品1', '星飞帆', '233', '222', '222', '是', 'img/feihe1.jpg');
INSERT INTO `products` VALUES ('2', '产品2', '星飞帆 ', '123', '3434', '3434', '是', 'img/feihe2.jpg');
INSERT INTO `products` VALUES ('3', '产品3', '星飞帆', '123', '123', '123', '是', 'img/feihe3.jpg');
INSERT INTO `products` VALUES ('4', '产品4', '星飞帆', '123', '123', '123', '是', 'img/feihe4.jpg');
INSERT INTO `products` VALUES ('5', '产品5', '超级飞帆', '123', '123', '123', '是', 'img/feihe5.jpg');
INSERT INTO `products` VALUES ('6', '产品6', '超级飞帆', '123', '123', '123', '是', 'img/feihe6.jpg');
INSERT INTO `products` VALUES ('7', '产品7', '星阶优护', '123', '123', '123', '是', 'img/feihe7.jpg');
INSERT INTO `products` VALUES ('8', '产品8', '星阶优护', '123', '123', '123', '是', 'img/feihe8.jpg');
INSERT INTO `products` VALUES ('9', '产品9', '星阶优护', '123', '123', '123', '是', 'img/feihe9.jpg');
INSERT INTO `products` VALUES ('10', '产品10', '飞帆', '123', '123', '123', '是', 'img/feihe10.jpg');
INSERT INTO `products` VALUES ('11', '产品11', '飞帆', '123', '123', '123', '是', 'img/feihe11.jpg');
INSERT INTO `products` VALUES ('12', '产品12', '飞帆', '123', '123', '123', '是', 'img/feihe12.jpg');
INSERT INTO `products` VALUES ('13', '产品13', '舒贝诺', '123', '123', '123', '是', 'img/feihe13.jpg');
INSERT INTO `products` VALUES ('14', '产品14', '舒贝诺', '123', '123', '123', '是', 'img/feihe14.jpg');
INSERT INTO `products` VALUES ('15', '产品15', '舒贝诺', '123', '123', '123', '是', 'img/feihe15.jpg');
INSERT INTO `products` VALUES ('16', '产品16', '舒贝诺', '123', '123', '123', '是', 'img/feihe16.jpg');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `uid` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `userpass` varchar(15) NOT NULL,
  `mobile` int(10) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `address` varchar(10) DEFAULT NULL,
  `qq` int(10) DEFAULT NULL,
  `avatar` varchar(225) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '张三', '1', '0', '0000-00-00', '', '0', 'img/headPortrait2.jpg', '三啊');
INSERT INTO `users` VALUES ('2', '李四', '', '0', '0000-00-00', '', '0', 'img/headPortrait2.jpg', '四');
INSERT INTO `users` VALUES ('3', '王五', '111', '0', '0000-00-00', '', '0', 'img/headPortrait1.jpg', '五');
INSERT INTO `users` VALUES ('4', '马六', '1111', '0', '0000-00-00', '', '0', 'img/headPortrait2.jpg', '六');
INSERT INTO `users` VALUES ('5', '田七', '11111', '0', '0000-00-00', '', '0', 'img/headPortrait1.jpg', '七');
INSERT INTO `users` VALUES ('6', '小八', '222', '0', '0000-00-00', '', '0', '', '八');
INSERT INTO `users` VALUES ('7', '徐彬', '1', '0', '0000-00-00', '', '0', '', '便便');
INSERT INTO `users` VALUES ('8', '大彬', '1', '0', '0000-00-00', '', '0', '', '');
