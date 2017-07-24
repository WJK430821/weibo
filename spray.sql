/*
Navicat MySQL Data Transfer

Source Server         : 47.94.193.34_3306
Source Server Version : 50556
Source Host           : 47.94.193.34:3306
Source Database       : spray

Target Server Type    : MYSQL
Target Server Version : 50556
File Encoding         : 65001

Date: 2017-07-19 16:09:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `admin_name` varchar(32) NOT NULL COMMENT '管理员名称',
  `admin_id` int(32) unsigned NOT NULL AUTO_INCREMENT COMMENT '管理员id',
  `admin_password` varchar(32) NOT NULL COMMENT '管理员密码',
  `admin_time` varchar(60) DEFAULT NULL COMMENT '管理员添加时间',
  `admin_phone` char(11) DEFAULT NULL COMMENT '管理员联系方式',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('admins', '9', '21232f297a57a5a743894a0e4a801fc3', '2017-07-17 14:25:25', '16161671616');
INSERT INTO `admin` VALUES ('admin', '11', '21232f297a57a5a743894a0e4a801fc3', '2017-07-18 14:49:06', '0000000');
INSERT INTO `admin` VALUES ('admin4', '13', '21232f297a57a5a743894a0e4a801fc3', '2017-07-19 12:00:12', '18311456816');

-- ----------------------------
-- Table structure for admin_department
-- ----------------------------
DROP TABLE IF EXISTS `admin_department`;
CREATE TABLE `admin_department` (
  `admin_id` int(10) unsigned DEFAULT NULL,
  `did` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_department
-- ----------------------------
INSERT INTO `admin_department` VALUES ('9', '14');
INSERT INTO `admin_department` VALUES ('11', '4');

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `comments_id` int(32) unsigned NOT NULL AUTO_INCREMENT COMMENT '评论内容id',
  `message_id` int(32) DEFAULT NULL COMMENT '所评论的微博id',
  `nickname` varchar(50) DEFAULT NULL,
  `user_id` int(32) DEFAULT NULL COMMENT '评论用户id',
  `comments_content` varchar(255) DEFAULT NULL COMMENT '评论内容',
  `comments_time` varchar(60) DEFAULT NULL COMMENT '评论时间',
  `status` int(1) DEFAULT '0',
  PRIMARY KEY (`comments_id`)
) ENGINE=InnoDB AUTO_INCREMENT=138 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comments
-- ----------------------------
INSERT INTO `comments` VALUES ('127', '138', '庞颖虎', '6', '222', '2017-07-19 10:19:01', '0');
INSERT INTO `comments` VALUES ('128', '133', '赵伊飞', '1', '2222222222222', '2017-07-19 10:19:29', '0');
INSERT INTO `comments` VALUES ('130', '136', '庞颖虎', '6', '2222', '2017-07-19 10:22:35', '0');
INSERT INTO `comments` VALUES ('131', '138', '王之新', '2', '333', '2017-07-19 10:23:47', '0');
INSERT INTO `comments` VALUES ('132', '135', '王之新', '2', '213123123', '2017-07-19 10:27:35', '0');
INSERT INTO `comments` VALUES ('133', '140', '赵伊飞', '1', '1', '2017-07-19 11:15:31', '0');
INSERT INTO `comments` VALUES ('134', '143', '王之新', '2', '约吗？', '2017-07-19 11:28:40', '0');
INSERT INTO `comments` VALUES ('136', '140', '学峰姐姐', '12', '22222', '2017-07-19 11:37:08', '0');

-- ----------------------------
-- Table structure for department
-- ----------------------------
DROP TABLE IF EXISTS `department`;
CREATE TABLE `department` (
  `id` int(32) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '部门名称',
  `status` int(1) unsigned DEFAULT '1' COMMENT '当前状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of department
-- ----------------------------
INSERT INTO `department` VALUES ('4', '超级管理员', '1');
INSERT INTO `department` VALUES ('14', '友情链接管理员', '1');
INSERT INTO `department` VALUES ('15', '微博管理员', '1');

-- ----------------------------
-- Table structure for department_privileges
-- ----------------------------
DROP TABLE IF EXISTS `department_privileges`;
CREATE TABLE `department_privileges` (
  `did` int(10) unsigned DEFAULT NULL,
  `pid` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of department_privileges
-- ----------------------------
INSERT INTO `department_privileges` VALUES ('4', '6');
INSERT INTO `department_privileges` VALUES ('4', '1');
INSERT INTO `department_privileges` VALUES ('4', '3');
INSERT INTO `department_privileges` VALUES ('4', '2');
INSERT INTO `department_privileges` VALUES ('4', '4');
INSERT INTO `department_privileges` VALUES ('4', '5');
INSERT INTO `department_privileges` VALUES ('4', '7');
INSERT INTO `department_privileges` VALUES ('4', '8');
INSERT INTO `department_privileges` VALUES ('4', '9');
INSERT INTO `department_privileges` VALUES ('4', '10');
INSERT INTO `department_privileges` VALUES ('4', '11');
INSERT INTO `department_privileges` VALUES ('4', '12');
INSERT INTO `department_privileges` VALUES ('4', '13');
INSERT INTO `department_privileges` VALUES ('4', '15');
INSERT INTO `department_privileges` VALUES ('4', '16');
INSERT INTO `department_privileges` VALUES ('4', '17');
INSERT INTO `department_privileges` VALUES ('4', '18');
INSERT INTO `department_privileges` VALUES ('4', '19');
INSERT INTO `department_privileges` VALUES ('4', '20');
INSERT INTO `department_privileges` VALUES ('4', '21');
INSERT INTO `department_privileges` VALUES ('4', '22');
INSERT INTO `department_privileges` VALUES ('4', '23');
INSERT INTO `department_privileges` VALUES ('4', '24');
INSERT INTO `department_privileges` VALUES ('4', '25');
INSERT INTO `department_privileges` VALUES ('4', '26');
INSERT INTO `department_privileges` VALUES ('14', '1');
INSERT INTO `department_privileges` VALUES ('14', '7');
INSERT INTO `department_privileges` VALUES ('14', '8');
INSERT INTO `department_privileges` VALUES ('14', '9');
INSERT INTO `department_privileges` VALUES ('4', '27');

-- ----------------------------
-- Table structure for follow
-- ----------------------------
DROP TABLE IF EXISTS `follow`;
CREATE TABLE `follow` (
  `id` int(32) DEFAULT NULL,
  `suser_id` int(16) DEFAULT NULL COMMENT '被关注人id',
  `user_id` int(11) DEFAULT NULL,
  `follow_count` int(11) DEFAULT NULL,
  `fans_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of follow
-- ----------------------------
INSERT INTO `follow` VALUES ('1', '7', '7', '1', '1');
INSERT INTO `follow` VALUES ('2', '7', '7', '1', '1');
INSERT INTO `follow` VALUES ('3', '7', '7', '1', '1');
INSERT INTO `follow` VALUES ('4', '7', '7', '1', '1');
INSERT INTO `follow` VALUES ('5', '7', '7', '1', '1');
INSERT INTO `follow` VALUES ('6', '7', '7', '1', '1');
INSERT INTO `follow` VALUES ('5', '1', null, '2', null);
INSERT INTO `follow` VALUES ('1', null, '5', null, '2');

-- ----------------------------
-- Table structure for forward
-- ----------------------------
DROP TABLE IF EXISTS `forward`;
CREATE TABLE `forward` (
  `user_id` int(32) unsigned NOT NULL COMMENT '被转发发布者id',
  `message_id` int(32) NOT NULL COMMENT '被转发微博id',
  `su_id` int(11) NOT NULL COMMENT '转发用户id',
  `forward_time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `forward_content` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of forward
-- ----------------------------
INSERT INTO `forward` VALUES ('12', '135', '1', '2017-07-19 11:35:17', '不说');

-- ----------------------------
-- Table structure for message
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `message_id` int(32) unsigned NOT NULL AUTO_INCREMENT COMMENT '微博消息id',
  `praise_count` int(32) DEFAULT '0' COMMENT '点赞数',
  `user_id` int(32) DEFAULT NULL COMMENT '发布者id',
  `content` mediumtext COMMENT '内容',
  `picname` varchar(255) DEFAULT NULL COMMENT '图片',
  `foward_count` int(32) DEFAULT NULL COMMENT '转发数',
  `publish_time` timestamp NULL DEFAULT NULL COMMENT '发表时间',
  `status` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of message
-- ----------------------------
INSERT INTO `message` VALUES ('130', '0', '6', 'qqqq', null, null, '2017-07-17 20:11:01', '1');
INSERT INTO `message` VALUES ('131', '0', '6', 'aadasd as da', null, null, '2017-07-17 20:24:55', '1');
INSERT INTO `message` VALUES ('133', '0', '4', '111', null, null, '2017-07-18 14:09:56', '1');
INSERT INTO `message` VALUES ('134', '1', '4', '111', null, null, '2017-07-18 14:10:06', '1');
INSERT INTO `message` VALUES ('135', '0', '1', '123123213', null, null, '2017-07-18 15:18:20', '1');
INSERT INTO `message` VALUES ('136', '0', '1', '123', null, null, '2017-07-18 15:18:28', '1');
INSERT INTO `message` VALUES ('138', '0', '3', 'ei', null, null, '2017-07-19 08:48:01', '1');
INSERT INTO `message` VALUES ('139', '0', '6', 'a', null, null, '2017-07-19 10:21:18', '1');
INSERT INTO `message` VALUES ('140', '0', '6', 'aa', null, null, '2017-07-19 10:22:23', '1');
INSERT INTO `message` VALUES ('141', '0', '2', '123123123', null, null, '2017-07-19 10:26:48', '0');
INSERT INTO `message` VALUES ('142', '1', '2', '约否？', null, null, '2017-07-19 11:27:56', '0');
INSERT INTO `message` VALUES ('143', '1', '12', '今天放假啦!', null, null, '2017-07-19 11:28:13', '0');

-- ----------------------------
-- Table structure for opinion
-- ----------------------------
DROP TABLE IF EXISTS `opinion`;
CREATE TABLE `opinion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `opinion_id` int(3) NOT NULL COMMENT '发布意见者id',
  `opinion_content` varchar(255) NOT NULL COMMENT '意见内容',
  `opinion_time` datetime DEFAULT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of opinion
-- ----------------------------
INSERT INTO `opinion` VALUES ('6', '6', 'aaaaa', '2017-07-19 10:19:38');
INSERT INTO `opinion` VALUES ('7', '4', '比某浪微博好多了', '2017-07-19 10:33:34');
INSERT INTO `opinion` VALUES ('8', '12', '嗯嗯嗯呃', '2017-07-19 11:38:06');
INSERT INTO `opinion` VALUES ('9', '4', '界面有点low', '2017-07-19 11:55:21');

-- ----------------------------
-- Table structure for praise
-- ----------------------------
DROP TABLE IF EXISTS `praise`;
CREATE TABLE `praise` (
  `message_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `praise_count` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of praise
-- ----------------------------
INSERT INTO `praise` VALUES ('115', '1', '0');
INSERT INTO `praise` VALUES ('112', '1', '0');
INSERT INTO `praise` VALUES ('115', '3', '1');
INSERT INTO `praise` VALUES ('116', '6', '0');
INSERT INTO `praise` VALUES ('115', '6', '1');
INSERT INTO `praise` VALUES ('121', '6', '0');
INSERT INTO `praise` VALUES ('132', '2', '0');
INSERT INTO `praise` VALUES ('134', '5', '1');
INSERT INTO `praise` VALUES ('142', '12', '1');
INSERT INTO `praise` VALUES ('143', '2', '1');
INSERT INTO `praise` VALUES ('143', '3', '0');

-- ----------------------------
-- Table structure for privileges
-- ----------------------------
DROP TABLE IF EXISTS `privileges`;
CREATE TABLE `privileges` (
  `id` int(32) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL COMMENT '权限描述',
  `method` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `state` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of privileges
-- ----------------------------
INSERT INTO `privileges` VALUES ('1', '网站首页', 'get', 'admin', '1');
INSERT INTO `privileges` VALUES ('2', '编辑会员状态', 'get', 'admin/userinfo/*/edit', '1');
INSERT INTO `privileges` VALUES ('3', '查看注册信息', 'get', 'admin/register', '1');
INSERT INTO `privileges` VALUES ('4', '编辑微博状态', 'get', 'admin/message/*/edit', '1');
INSERT INTO `privileges` VALUES ('5', '查看微博内容', 'get', 'admin/message', '1');
INSERT INTO `privileges` VALUES ('6', '查看会员信息', 'get', 'admin/userinfo', '1');
INSERT INTO `privileges` VALUES ('7', '增加友情链接', 'get', 'admin/url/create', '1');
INSERT INTO `privileges` VALUES ('8', '编辑友情链接', 'get', 'admin/url/*/edit', '1');
INSERT INTO `privileges` VALUES ('9', '查看友情链接', 'get', 'admin/url', '1');
INSERT INTO `privileges` VALUES ('10', '查看管理员信息', 'get', 'admin/admin', '1');
INSERT INTO `privileges` VALUES ('11', '查看节点信息', 'get', 'admin/privileges', '1');
INSERT INTO `privileges` VALUES ('12', '查看角色信息', 'get', 'admin/department', '1');
INSERT INTO `privileges` VALUES ('13', '查看用户详情', 'get', 'admin/userinfo/*', '1');
INSERT INTO `privileges` VALUES ('14', '编辑用户', 'get', 'admin/userinfo/*/edit', '1');
INSERT INTO `privileges` VALUES ('16', '增加管理员', 'get', 'admin/admin/create', '1');
INSERT INTO `privileges` VALUES ('17', '编辑管理员', 'get', 'admin/admin/*/edit', '1');
INSERT INTO `privileges` VALUES ('19', '管理员分配角色', 'get', 'admin/admin/loadRole/*', '1');
INSERT INTO `privileges` VALUES ('20', '添加节点', 'get', 'admin/privileges/create', '1');
INSERT INTO `privileges` VALUES ('21', '编辑节点', 'get', 'admin/privileges/*/edit', '1');
INSERT INTO `privileges` VALUES ('23', '增加角色', 'get', 'admin/department/create', '1');
INSERT INTO `privileges` VALUES ('24', '编辑角色', 'get', 'admin/department/*/edit', '1');
INSERT INTO `privileges` VALUES ('26', '角色分配节点', 'get', 'admin/admin/loadNode/*', '1');
INSERT INTO `privileges` VALUES ('27', '执行角色添加', 'get', 'admin/deparement', '1');

-- ----------------------------
-- Table structure for register
-- ----------------------------
DROP TABLE IF EXISTS `register`;
CREATE TABLE `register` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '注册id',
  `phone` char(11) DEFAULT NULL COMMENT 'email',
  `password` varchar(32) DEFAULT NULL COMMENT '用户密码',
  `nickname` varchar(20) DEFAULT NULL COMMENT '用户昵称',
  `register_time` timestamp NULL DEFAULT NULL COMMENT '注册时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of register
-- ----------------------------
INSERT INTO `register` VALUES ('1', '17601606760', 'e10adc3949ba59abbe56e057f20f883e', '赵伊飞', '2017-07-10 19:44:37');
INSERT INTO `register` VALUES ('2', '15712837680', 'e10adc3949ba59abbe56e057f20f883e', '王之新', '2017-07-10 11:45:06');
INSERT INTO `register` VALUES ('3', '13480753707', '93279e3308bdbbeed946fc965017f67a', 'enenen', '2017-07-10 11:45:45');
INSERT INTO `register` VALUES ('4', '18634794365', 'e3ceb5881a0a1fdaad01296d7554868d', '张鑫钟', '2017-07-10 19:48:00');
INSERT INTO `register` VALUES ('5', '15270025267', 'e10adc3949ba59abbe56e057f20f883e', '涂鑫杰', '2017-07-10 11:49:09');
INSERT INTO `register` VALUES ('6', '15935790217', '28edf4120d4096279cebba9611a0102b', '庞颖虎', '2017-07-17 17:39:29');
INSERT INTO `register` VALUES ('7', '00000000000', 'e10adc3949ba59abbe56e057f20f883e', '灵步微博官方账号', '2017-07-17 10:08:07');
INSERT INTO `register` VALUES ('9', '18712753959', '3d47ed246cbfeab2b7d97a9572e79035', '李旭文啊', '2017-07-19 08:48:52');
INSERT INTO `register` VALUES ('12', '18612175264', '670b14728ad9902aecba32e22fa4f6bd', '学峰姐姐2', '2017-07-19 11:26:14');
INSERT INTO `register` VALUES ('13', '13681333005', 'e10adc3949ba59abbe56e057f20f883e', 'wqeqwe', '2017-07-19 11:49:06');

-- ----------------------------
-- Table structure for reply
-- ----------------------------
DROP TABLE IF EXISTS `reply`;
CREATE TABLE `reply` (
  `reply_id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) DEFAULT NULL,
  `uname` varchar(50) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comments_id` int(11) DEFAULT NULL,
  `reply_content` varchar(255) DEFAULT NULL,
  `reply_time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`reply_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of reply
-- ----------------------------
INSERT INTO `reply` VALUES ('27', '庞颖虎', '赵伊飞', '1', '115', '22222222', '2017-07-18 19:25:47');
INSERT INTO `reply` VALUES ('28', '涂鑫杰', '庞颖虎', '6', '126', '222', '2017-07-19 10:19:08');
INSERT INTO `reply` VALUES ('29', '赵伊飞', '庞颖虎', '6', '128', '2222', '2017-07-19 10:22:43');
INSERT INTO `reply` VALUES ('30', '庞颖虎', '赵伊飞', '1', '127', '3333333333333333', '2017-07-19 10:23:50');
INSERT INTO `reply` VALUES ('31', '庞颖虎', '王之新', '2', '127', '213123', '2017-07-19 10:23:54');
INSERT INTO `reply` VALUES ('32', '庞颖虎', '赵伊飞', '1', '130', '222222222222', '2017-07-19 10:24:02');
INSERT INTO `reply` VALUES ('33', '王之新', '赵伊飞', '1', '131', '222222222222222222222222', '2017-07-19 10:27:22');
INSERT INTO `reply` VALUES ('34', '王之新', '涂鑫杰', '5', '131', '你是傻逼', '2017-07-19 10:27:47');
INSERT INTO `reply` VALUES ('35', '王之新', '赵伊飞', '1', '131', '你也是傻逼', '2017-07-19 10:55:52');
INSERT INTO `reply` VALUES ('36', '王之新', '学峰姐姐', '12', '134', '啊', '2017-07-19 11:29:10');

-- ----------------------------
-- Table structure for url
-- ----------------------------
DROP TABLE IF EXISTS `url`;
CREATE TABLE `url` (
  `id` int(32) unsigned NOT NULL AUTO_INCREMENT,
  `urlname` varchar(50) DEFAULT NULL,
  `url` varchar(32) DEFAULT NULL COMMENT '链接地址',
  `url_picname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of url
-- ----------------------------
INSERT INTO `url` VALUES ('45', '百度', 'www.baidu.com', 'osnb8r0w8.bkt.clouddn.com/056cbcea497a0b3e117f5b84869d4a68.png');
INSERT INTO `url` VALUES ('46', '微博', 'weibo.com', 'osnb8r0w8.bkt.clouddn.com/ff666bd4baff1f75666e07cca7dc5bf2.jpg');
INSERT INTO `url` VALUES ('47', '搜狐', 'www.sohu.com', 'osnb8r0w8.bkt.clouddn.com/2a5abe00e76c0345c514e5064d593770.jpg');
INSERT INTO `url` VALUES ('48', '王子新', 'www.wangzixin.com', 'osnb8r0w8.bkt.clouddn.com/bf0a094a40f405da2d9d2b545b090e6a.JPG');
INSERT INTO `url` VALUES ('49', 'xuefengjiejie', 'www.baidu.com', 'osnb8r0w8.bkt.clouddn.com/fe364f768fc46dab17d4982e7e42ea29.jpg');
INSERT INTO `url` VALUES ('50', 'tuixnjie', 'www.tuxnjie.com', 'osnb8r0w8.bkt.clouddn.com/5874e03096726cf71b27d63f1f3e4a5b.jpg');

-- ----------------------------
-- Table structure for userinfo
-- ----------------------------
DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `nickname` varchar(32) DEFAULT NULL COMMENT '用户昵称',
  `password` varchar(32) DEFAULT NULL COMMENT '密码',
  `email` varchar(32) DEFAULT NULL COMMENT 'email',
  `phone` char(11) DEFAULT NULL COMMENT '手机号',
  `age` int(3) DEFAULT NULL COMMENT '年龄',
  `sex` char(1) DEFAULT NULL COMMENT '性别',
  `signature` varchar(100) DEFAULT NULL,
  `sexual` char(1) DEFAULT NULL COMMENT '性取向',
  `picname` varchar(255) DEFAULT NULL COMMENT '头像',
  `register_time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `birthday` varchar(255) DEFAULT NULL COMMENT '生日',
  `address` varchar(64) DEFAULT NULL COMMENT '详细地址',
  `name` varchar(10) DEFAULT NULL COMMENT '用户姓名',
  `status` int(1) DEFAULT '1' COMMENT '状态',
  `QQ` char(11) DEFAULT NULL COMMENT 'QQ',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of userinfo
-- ----------------------------
INSERT INTO `userinfo` VALUES ('1', '1', '赵伊飞', 'e10adc3949ba59abbe56e057f20f883e', '2@qq.com', '17601606760', '20', 'm', '王之新是最帅的', 'w', 'osnb8r0w8.bkt.clouddn.com/6dfedac7cf5a919e38f3bfba0458154e.jpg', '2017-07-19 11:02:46', '19980808', '山西省', '赵伊飞', '1', '109898098');
INSERT INTO `userinfo` VALUES ('2', '2', '王之新', 'e10adc3949ba59abbe56e057f20f883e', null, '15712837680', null, null, null, null, 'osnb8r0w8.bkt.clouddn.com/3a98da7e66f28fd1c9ea27678be9202d.jpg', '2017-07-18 15:31:32', null, '辽宁省', null, '1', null);
INSERT INTO `userinfo` VALUES ('3', '3', '张龙龙', '93279e3308bdbbeed946fc965017f67a', '132434', '13480753707', '12', 'm', null, 'w', 'osnb8r0w8.bkt.clouddn.com/4c863d0b44eabb31166661be9accc69e.jpg', '2017-07-17 22:16:52', '567', 'ljlkj', 'k;l', '1', '876876879');
INSERT INTO `userinfo` VALUES ('4', '4', '张鑫钟', 'e3ceb5881a0a1fdaad01296d7554868d', '321240063@qq.com', '18634794365', '21', 'm', '楼上说的对', 'w', 'osnb8r0w8.bkt.clouddn.com/0c398cc3fb518aad6f3b2aff6a6676f9.gif', '2017-07-19 13:55:40', '0128', '山西临汾', '张鑫钟', '1', '321240063');
INSERT INTO `userinfo` VALUES ('5', '5', '涂鑫杰', 'e10adc3949ba59abbe56e057f20f883e', null, '15270025267', '21', 'm', null, null, 'osnb8r0w8.bkt.clouddn.com/7ce870f270c0fe24ca7575521f06767d.jpg', '2017-07-17 22:16:53', null, null, null, '1', null);
INSERT INTO `userinfo` VALUES ('6', '6', '庞颖虎', '28edf4120d4096279cebba9611a0102b', '2463640340@qq.com', '15935790217', '20', 'm', null, 'w', 'osnb8r0w8.bkt.clouddn.com/5bd33c7ca8db5ecf7ae06b5f703cf652.jpg', '2017-07-18 19:00:20', '980217', '你猜', '庞颖虎', '1', '2463640340');
INSERT INTO `userinfo` VALUES ('7', '7', '灵步微博官方账号', '0', '0', '0', null, null, null, null, 'osnb8r0w8.bkt.clouddn.com/d142cc965676f787fa5d7ff24043dff3.jpg', '2017-07-17 22:16:56', null, null, null, '1', null);
INSERT INTO `userinfo` VALUES ('9', '9', '李旭文啊', '3d47ed246cbfeab2b7d97a9572e79035', null, '18712753959', null, null, null, null, null, '2017-07-19 08:48:52', null, null, null, '1', null);
INSERT INTO `userinfo` VALUES ('12', '12', '学峰姐姐2', '670b14728ad9902aecba32e22fa4f6bd', null, '18612175264', null, null, null, null, 'osnb8r0w8.bkt.clouddn.com/e7f5fe846774dfa2be05c6fbd70825fd.jpg', '2017-07-19 11:39:52', null, null, null, '1', null);
INSERT INTO `userinfo` VALUES ('13', '13', 'wqeqwe', 'e10adc3949ba59abbe56e057f20f883e', null, '13681333005', null, null, null, null, null, '2017-07-19 11:49:06', null, null, null, '1', null);
