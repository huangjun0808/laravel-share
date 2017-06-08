/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50635
 Source Host           : localhost
 Source Database       : share

 Target Server Type    : MySQL
 Target Server Version : 50635
 File Encoding         : utf-8

 Date: 06/08/2017 11:38:27 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `admin_permission`
-- ----------------------------
DROP TABLE IF EXISTS `admin_permission`;
CREATE TABLE `admin_permission` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(125) NOT NULL DEFAULT '' COMMENT '权限规则',
  `uri` varchar(125) NOT NULL DEFAULT '' COMMENT '路由地址',
  `label` varchar(125) NOT NULL DEFAULT '' COMMENT '权限解释名称',
  `description` varchar(255) NOT NULL DEFAULT '' COMMENT '描述与备注',
  `cid` int(11) NOT NULL DEFAULT '0' COMMENT '父ID',
  `level` tinyint(4) NOT NULL DEFAULT '0' COMMENT '级别',
  `type` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0权限（默认） 1左侧菜单 2顶部菜单 3左侧+顶部菜单',
  `icon` varchar(125) NOT NULL DEFAULT '' COMMENT '图标',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `admin_permission_name_index` (`name`),
  KEY `admin_permission_cid_index` (`cid`),
  KEY `admin_permission_level_index` (`level`),
  KEY `admin_permission_type_index` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `admin_permission`
-- ----------------------------
BEGIN;
INSERT INTO `admin_permission` VALUES ('1', 'admin.permission', '', '权限管理', '', '0', '1', '0', 'fa-users', '2017-05-11 10:12:39', '2017-05-11 10:12:39'), ('2', 'admin.permission.create', 'admin/permission/create', '添加权限', '', '1', '2', '0', 'fa-plus-square', '2017-05-11 10:12:39', '2017-05-11 10:12:39'), ('3', 'admin.permission.destroy', 'admin/permission/{permission}', '删除权限', '', '1', '2', '0', 'fa-circle-o', '2017-05-11 10:12:39', '2017-05-11 10:12:39'), ('4', 'admin.permission.edit', 'admin/permission/{permission}/edit', '编辑权限', '', '1', '2', '0', 'fa-circle-o', '2017-05-11 10:12:39', '2017-05-11 10:12:39'), ('5', 'admin.permission.index', 'admin/permission/index', '权限列表', '', '1', '2', '1', 'fa-circle-o', '2017-05-11 10:12:39', '2017-05-11 10:12:39'), ('6', 'admin.permission.show', 'admin/permission/{role}', '权限详情', '', '1', '2', '0', 'fa-circle-o', '2017-05-11 10:12:39', '2017-05-11 10:12:39'), ('7', 'admin.role.create', 'admin/role/create', '添加角色', '', '1', '2', '0', 'fa-circle-o', '2017-05-11 10:12:39', '2017-05-11 10:12:39'), ('8', 'admin.role.destory', 'admin/role/{role}', '删除角色', '', '1', '2', '0', 'fa-circle-o', '2017-05-11 10:12:39', '2017-05-11 10:12:39'), ('9', 'admin.role.edit', 'admin/role/{role}/edit ', '编辑角色', '', '1', '2', '0', 'fa-circle-o', '2017-05-11 10:12:39', '2017-05-11 10:12:39'), ('10', 'admin.role.index', 'admin/role/index', '角色列表', '', '1', '2', '1', 'fa-circle-o', '2017-05-11 10:12:39', '2017-05-11 10:12:39'), ('11', 'admin.role.show', 'admin/role/index', '角色详情', '', '1', '2', '0', 'fa-circle-o', '2017-05-11 10:12:39', '2017-05-11 10:12:39'), ('12', 'admin.user.create', 'admin/user/create', '添加用户', '', '1', '2', '0', 'fa-circle-o', '2017-05-11 10:12:39', '2017-05-11 10:12:39'), ('13', 'admin.user.destory', 'admin/user/{user}', '删除用户', '', '1', '2', '0', 'fa-circle-o', '2017-05-11 10:12:39', '2017-05-11 10:12:39'), ('14', 'admin.user.edit', 'admin/user/{user}/edit', '编辑用户', '', '1', '2', '0', 'fa-circle-o', '2017-05-11 10:12:39', '2017-05-11 10:12:39'), ('15', 'admin.user.index', 'admin/user/index', '用户列表', '', '1', '2', '1', 'fa-circle-o', '2017-05-11 10:12:39', '2017-05-11 10:12:39'), ('16', 'admin.user.show', 'admin/user/{user}', '用户详情', '', '1', '2', '0', 'fa-circle-o', '2017-05-11 10:12:39', '2017-05-11 10:12:39'), ('17', 'log-viewer::dashboard', 'admin/log-viewer', '日志面板', '', '18', '2', '0', 'fa-circle-o', '2017-05-11 10:12:39', '2017-05-11 10:12:39'), ('18', 'log-viewer::logs', '', '日志管理', '系统日志', '0', '1', '0', 'fa-files-o', '2017-05-11 10:12:39', '2017-05-11 10:12:39'), ('19', 'log-viewer::logs.delete', 'admin/log-viewer/logs/delete', '删除日志', '', '18', '2', '0', 'fa-circle-o', '2017-05-11 10:12:39', '2017-05-11 10:12:39'), ('20', 'log-viewer::logs.download', 'admin/log-viewer/logs/{date}/download', '日志下载', '', '18', '2', '0', 'fa-circle-o', '2017-05-11 10:12:39', '2017-05-11 10:12:39'), ('21', 'log-viewer::logs.list', 'admin/log-viewer/logs', '日志列表', '', '18', '2', '1', 'fa-circle-o', '2017-05-11 10:12:39', '2017-05-11 10:12:39'), ('22', 'log-viewer::logs.show#log-viewer::logs.filter', 'admin/log-viewer/logs/{date}||admin/log-viewer/logs/{date}/{level}', '日志详情', '', '18', '2', '0', 'fa-circle-o', '2017-05-11 10:12:39', '2017-05-11 10:12:39');
COMMIT;

-- ----------------------------
--  Table structure for `admin_role`
-- ----------------------------
DROP TABLE IF EXISTS `admin_role`;
CREATE TABLE `admin_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(125) NOT NULL DEFAULT '' COMMENT '角色名称',
  `description` varchar(125) NOT NULL DEFAULT '' COMMENT '备注',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `admin_role_permission`
-- ----------------------------
DROP TABLE IF EXISTS `admin_role_permission`;
CREATE TABLE `admin_role_permission` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  KEY `admin_role_permission_role_id_index` (`role_id`),
  KEY `admin_role_permission_permission_id_index` (`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `admin_user`
-- ----------------------------
DROP TABLE IF EXISTS `admin_user`;
CREATE TABLE `admin_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '管理员用户表ID',
  `name` varchar(125) NOT NULL DEFAULT '',
  `email` varchar(125) NOT NULL DEFAULT '',
  `password` varchar(125) NOT NULL DEFAULT '',
  `remember_token` varchar(100) DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_user_name_unique` (`name`),
  UNIQUE KEY `admin_user_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `admin_user`
-- ----------------------------
BEGIN;
INSERT INTO `admin_user` VALUES ('1', '超级管理员', 'root@admin.com', '$2y$10$n4//ZfbdKIwAwxV3caNcieUruuSl9LZR.iWGd2RVacQmXfdsLNPxG', 'yriNS51XYbU8iPduLehDT5ihJkmGiFCAbbEEU3Q6potlgeTSropucwUs6ElR', '2017-05-11 10:12:39', '2017-05-15 18:00:24');
COMMIT;

-- ----------------------------
--  Table structure for `admin_user_role`
-- ----------------------------
DROP TABLE IF EXISTS `admin_user_role`;
CREATE TABLE `admin_user_role` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  KEY `admin_user_role_user_id_index` (`user_id`),
  KEY `admin_user_role_role_id_index` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `answer`
-- ----------------------------
DROP TABLE IF EXISTS `answer`;
CREATE TABLE `answer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `content` text NOT NULL,
  `vote_num` int(11) NOT NULL COMMENT '问答答案得票数',
  `status` tinyint(4) NOT NULL COMMENT '答案状态 0初始状态 1采纳状态 2忽略状态',
  `question_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `answer_user_id_index` (`user_id`),
  KEY `answer_question_id_index` (`question_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `comment`
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `content` text NOT NULL,
  `comment_type` varchar(50) NOT NULL COMMENT '评论类型 answer问题评论 article文章评论 question问答评论',
  `answer_id` int(11) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `label`
-- ----------------------------
DROP TABLE IF EXISTS `label`;
CREATE TABLE `label` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(100) NOT NULL DEFAULT '' COMMENT '标签名称',
  `icon` varchar(100) DEFAULT NULL COMMENT '标签图标',
  `type` tinyint(4) NOT NULL DEFAULT '0' COMMENT '标签类型 0父标签 1子标签',
  `pid` int(11) NOT NULL,
  `content` text NOT NULL COMMENT '标签详情',
  `follower_num` int(11) NOT NULL DEFAULT '0' COMMENT '关注人数',
  `enabled` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否可用',
  PRIMARY KEY (`id`),
  KEY `label_type_index` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `label`
-- ----------------------------
BEGIN;
INSERT INTO `label` VALUES ('1', '2017-05-16 16:17:50', '2017-05-16 16:17:52', 'IOS开发', null, '0', '0', '', '0', '1'), ('2', '2017-05-16 16:18:28', '2017-05-16 16:18:30', 'ios', null, '1', '1', '', '0', '1'), ('3', '2017-05-16 16:18:42', '2017-05-16 16:18:44', 'objective-c', null, '1', '1', '', '0', '1'), ('4', '2017-05-16 16:19:02', '2017-05-16 16:19:07', 'sqlite', null, '1', '1', '', '0', '1'), ('5', '2017-05-16 16:19:23', '2017-05-16 16:19:25', 'safari', null, '1', '1', '', '0', '1'), ('6', '2017-05-16 16:19:45', '2017-05-16 16:19:47', 'xcode', null, '1', '1', '', '0', '1'), ('7', '2017-05-16 16:19:59', '2017-05-16 16:20:01', 'phonegap', null, '1', '1', '', '0', '1'), ('8', '2017-05-16 16:20:21', '2017-05-16 16:20:22', 'cocoa', null, '1', '1', '', '0', '1'), ('9', '2017-05-16 16:20:34', '2017-05-16 16:20:42', 'javascript', null, '1', '1', '', '0', '1'), ('10', '2017-05-16 16:21:01', '2017-05-16 16:21:03', 'macos', null, '1', '1', '', '0', '1'), ('11', '2017-05-16 16:21:16', '2017-05-16 16:21:18', 'iphone', null, '1', '1', '', '0', '1'), ('12', '2017-05-16 16:21:30', '2017-05-16 16:21:32', 'ipad', null, '1', '1', '', '0', '1'), ('13', '2017-05-16 16:21:44', '2017-05-16 16:21:45', 'swift', null, '1', '1', '', '0', '1');
COMMIT;

-- ----------------------------
--  Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `migrations`
-- ----------------------------
BEGIN;
INSERT INTO `migrations` VALUES ('3', '2017_04_26_052450_create_admin_users_table', '1'), ('4', '2017_04_26_052706_create_admin_permissions_table', '1'), ('5', '2017_04_26_052742_create_admin_roles_table', '1'), ('6', '2014_10_12_000000_create_users_table', '2'), ('7', '2014_10_12_100000_create_password_resets_table', '2'), ('8', '2017_05_12_182142_create_user_profiles_table', '2'), ('9', '2017_05_16_101235_create_labels_table', '3'), ('10', '2017_05_16_143519_create_questions_table', '4'), ('11', '2017_05_16_145630_create_answers_table', '4'), ('12', '2017_05_16_150602_create_comments_table', '4');
COMMIT;

-- ----------------------------
--  Table structure for `password_reset`
-- ----------------------------
DROP TABLE IF EXISTS `password_reset`;
CREATE TABLE `password_reset` (
  `email` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_reset_email_index` (`email`),
  KEY `password_reset_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `question`
-- ----------------------------
DROP TABLE IF EXISTS `question`;
CREATE TABLE `question` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(125) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '问题状态0 待审核状态 1开放状态 4关闭状态',
  `vote_num` int(11) NOT NULL COMMENT '得票数',
  `answer_num` int(11) NOT NULL COMMENT '答案数',
  `browse_num` int(11) NOT NULL COMMENT '浏览量',
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `question_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nickname` varchar(40) NOT NULL DEFAULT '',
  `avatar` varchar(125) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `password` varchar(100) NOT NULL DEFAULT '',
  `remember_token` varchar(100) DEFAULT '',
  `is_active` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否激活',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_email_unique` (`email`),
  UNIQUE KEY `user_mobile_unique` (`mobile`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `user`
-- ----------------------------
BEGIN;
INSERT INTO `user` VALUES ('1', 'huanjun', null, null, '18651039625', '$2y$10$hPnGWk2e..OVz.r8W8gCZeOZSaEVYoEI7pzraE1KTEeSGZcjcGO1K', 'YHsMJu0bXjHApq4EvmFTbMKffAYEvzYwBuHY3Wfys7cGLHcZS4t3Ey6iJxah', '0', '2017-05-13 18:20:25', '2017-05-17 16:48:53'), ('12', 'huangjun0808', null, '357569565@qq.com', null, '', 'Rmr04coQQxqFsBET8OpygTLJZLwMFJd3t9IIzwf8GcrCf2jBb3fK27ulskEa', '0', '2017-05-14 13:55:40', '2017-05-14 14:03:57'), ('13', 'jhjkh', null, null, '18651039999', '', '8Za4YNDX2OdpIJGDvxYmlLrMJMA1bj50VsFmPWbtufC9ylbhoSLHlHu14QPC', '1', '2017-05-14 14:22:43', '2017-05-14 14:23:01'), ('14', '孔华丽', null, null, '15857197670', '', '5TV57jjfnZi92wOxxqYJ28Ya91sz4SM9HOvy4hwyYLDBE09Jd653IXBfQHM5', '1', '2017-05-15 18:34:57', '2017-05-15 18:59:41');
COMMIT;

-- ----------------------------
--  Table structure for `user_label`
-- ----------------------------
DROP TABLE IF EXISTS `user_label`;
CREATE TABLE `user_label` (
  `user_id` int(11) NOT NULL,
  `label_id` int(11) NOT NULL,
  KEY `user_label_user_id_index` (`user_id`),
  KEY `user_label_label_id_index` (`label_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `user_label`
-- ----------------------------
BEGIN;
INSERT INTO `user_label` VALUES ('1', '2'), ('1', '3');
COMMIT;

-- ----------------------------
--  Table structure for `user_profile`
-- ----------------------------
DROP TABLE IF EXISTS `user_profile`;
CREATE TABLE `user_profile` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `alias` varchar(100) NOT NULL DEFAULT '',
  `alias_updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_profile_alias_unique` (`alias`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `user_question`
-- ----------------------------
DROP TABLE IF EXISTS `user_question`;
CREATE TABLE `user_question` (
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  KEY `user_question_user_id_index` (`user_id`),
  KEY `user_question_question_id_index` (`question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS = 1;
