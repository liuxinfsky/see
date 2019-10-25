/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : sqlweb

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2019-10-25 16:12:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `sqlmng_dbtablecount`
-- ----------------------------
DROP TABLE IF EXISTS `sqlmng_dbtablecount`;
CREATE TABLE `sqlmng_dbtablecount` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '默认自增id',
  `db_name` varchar(80) CHARACTER SET utf8mb4 NOT NULL COMMENT '数据库名',
  `table_name` varchar(150) CHARACTER SET utf8mb4 NOT NULL COMMENT '表名',
  `counter` bigint(30) NOT NULL COMMENT '表的数据量',
  `table_info` text CHARACTER SET utf8mb4 COMMENT '表结构',
  `table_comment` varchar(200) CHARACTER SET utf8mb4 DEFAULT NULL,
  `incrementer` bigint(20) DEFAULT NULL COMMENT '增量',
  `yesincrementer` bigint(20) DEFAULT NULL COMMENT '昨天天增量',
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_counter` (`counter`) USING BTREE,
  KEY `idx_dtable` (`db_name`,`table_name`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4;