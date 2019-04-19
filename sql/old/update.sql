alter table sqlmng_authrules add cron tinyint(1) default 0 comment '0 未定时，1 定时';
alter table account_user add mail_list_extend varchar(500) default '' comment '邮件列表';
alter table sqlmng_inceptsql add execute_time varchar(32) default '' comment '执行时间';
alter table sqlmng_inceptsql add rollback_time varchar(32) default '' comment '回滚时间';
alter table sqlmng_inceptsql add affected_rows varchar(32) default '' comment '执行影响行数';
alter table sqlmng_inceptsql add cron_time varchar(64) default '' comment '定时时间';
CREATE TABLE `sqlmng_sqlsettings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `createtime` datetime(6) NOT NULL,
  `updatetime` datetime(6) NOT NULL,
  `remark` longtext,
  `forbidden_words` varchar(1000) DEFAULT '' COMMENT '敏感词',
  `sql_count_limit` int(11) NOT NULL DEFAULT '1000' COMMENT 'sql限制的条数',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
INSERT INTO `account_user`(`password`,`last_login`,`is_superuser`,`username`,`first_name`,`last_name`,`email`,`is_staff`,`is_active`,`date_joined`,`remark`,`leader_id`,`admin_mail_id`,`phone`,`mail_list_extend`) VALUES ('', '0', '定时处理器', '', '', '', '0', '1', '2019-04-17 11:48:19.724211', 'developer', '', null, null, '', null);
INSERT INTO `sqlmng_mailactions`(`name`,`createtime`,`updatetime`,`remark`,`value`,`desc_cn`) VALUES ('select', '2019-04-18 17:24:04.000000', '2019-04-18 17:24:09.000000', null, '0', '查询');
UPDATE `sqlmng_mailactions` SET name = 'execute' WHERE desc_cn = '执行';
UPDATE `sqlmng_authrules` SET cron = 1 WHERE is_manual_review = 1 AND role = 'admin' AND env = 'prd';
UPDATE `sqlmng_authrules` SET cron = 1 WHERE is_manual_review = 0 AND role != 'developer' AND env = 'prd';