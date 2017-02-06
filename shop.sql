-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jan 05, 2013 at 02:15 PM
-- Server version: 6.0.4
-- PHP Version: 6.0.0-dev

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `shop`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `goods`
-- 

CREATE TABLE `goods` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `type1` varchar(20) NOT NULL,
  `type2` varchar(20) NOT NULL,
  `type3` varchar(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` varchar(200) NOT NULL,
  `photo1` varchar(50) DEFAULT NULL,
  `photo2` varchar(50) DEFAULT NULL,
  `photo3` varchar(50) DEFAULT NULL,
  `place` varchar(50) NOT NULL,
  `condition` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `pattern` varchar(20) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(100) CHARACTER SET gbk NOT NULL DEFAULT 'guoshijie_hi@yeah.net',
  `name` varchar(20) NOT NULL,
  `fabutime` varchar(100) NOT NULL,
  `type` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=74 ;

-- 
-- Dumping data for table `goods`
-- 

INSERT INTO `goods` VALUES (1, 'ss', 'files/images/touxiang/1356674274.jpg', '发布出售', '数码产品', '电脑', '个人闲置二手电脑转手', '二手电脑', 'files/images/photos/1356704272.jpg', 'files/images/photos/1356704273.jpg', 'files/images/photos/1356704274.jpg', '尖草坪区', '九成新以上', 1000, '见面交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-28 23:38:06', '0');
INSERT INTO `goods` VALUES (2, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '二手手机', '小米', '二手小米手机两块耐用电池', '二手小米手机', 'files/images/photos/1356705164.jpg', 'files/images/photos/1356705165.jpg', 'files/images/photos/1356705166.jpg', '尖草坪区', '九成新以上', 500, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-28 23:38:06', '1');
INSERT INTO `goods` VALUES (3, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '文体乐器', '学习用品', '尺子', '尺子', 'files/images/photos/1356709132.jpg', 'files/images/photos/1356709133.jpg', 'files/images/photos/1356709134.jpg', '尖草坪区', '九成新以上', 5, '见面交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-28 23:38:06', '1');
INSERT INTO `goods` VALUES (4, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '二手手机', '小米', '不到一年二手小米，转让，有意者联系', '二手小米', 'files/images/photos/1356709820.jpg', 'files/images/photos/1356709821.jpg', 'files/images/photos/1356709822.jpg', '', '九成新以上', 889, '见面交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-28 23:49:33', '0');
INSERT INTO `goods` VALUES (5, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '图书软件', '图书消遣', '莫言作品――生死疲劳(电子书)', '莫言作品――生死疲劳(电子书)', 'files/images/photos/1356747507.jpg', '', '', '尖草坪区', '九成新以上', 50.5, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-29 10:17:54', '0');
INSERT INTO `goods` VALUES (6, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '文体乐器', '球类用品', 'spalding篮球', '个人闲置spalding篮球', 'files/images/photos/1356747771.png', 'files/images/photos/1356747772.jpg', 'files/images/photos/1356747773.jpg', '杏花岭区', '九成新以上', 70.2, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-29 10:21:26', '0');
INSERT INTO `goods` VALUES (7, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '文体乐器', '球类用品', '九成新乒乓球拍', '九成新乒乓球拍', 'files/images/photos/1356748002.jpg', 'files/images/photos/1356748003.jpg', 'files/images/photos/1356748004.jpg', '尖草坪区', '九成新以上', 101.5, '见面交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-29 10:25:11', '0');
INSERT INTO `goods` VALUES (8, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '图书软件', '图书消遣', '利比亚战地日记 (电子书)', '利比亚战地日记(电子书)', 'files/images/photos/1356748111.jpg', '', '', '尖草坪区', '九成新以上', 2, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-29 10:28:06', '0');
INSERT INTO `goods` VALUES (9, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '生活用品', '电脑桌椅', '八成新电脑桌椅', '八成新电脑桌椅', 'files/images/photos/1356748420.jpg', 'files/images/photos/1356748421.jpg', 'files/images/photos/1356748422.jpg', '万柏林区', '八成新以上', 150, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-29 10:32:55', '0');
INSERT INTO `goods` VALUES (10, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '服装箱包', '箱包', '低价处理旅行箱', '低价处理旅行箱', 'files/images/photos/1356748642.jpg', 'files/images/photos/1356748643.jpg', 'files/images/photos/1356748644.jpg', '', '九成新以上', 500, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-29 10:36:09', '0');
INSERT INTO `goods` VALUES (11, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '数码产品', 'U盘', '金士顿16g优盘DT101G2 16gu盘16G金属旋转创意u盘', '金士顿16g优盘DT101 G2 16gu盘16G金属旋转创意u盘', 'files/images/photos/1356750266.jpg', 'files/images/photos/1356750267.jpg', 'files/images/photos/1356750268.jpg', '迎泽区', '九成新以上', 79, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-29 11:03:40', '0');
INSERT INTO `goods` VALUES (12, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '数码产品', 'U盘', 'HP/惠普 v250w U 盘 16G/优盘 16GB 金属U盘 虎克盘 正品特价包邮', 'HP/惠普 v250w U 盘 16G/优盘 16GB 金属U盘 虎克盘 正品特价包邮', 'files/images/photos/1356750411.jpg', 'files/images/photos/1356750412.jpg', 'files/images/photos/1356750413.jpg', '万柏林区', '九成新以上', 150, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-29 11:06:06', '0');
INSERT INTO `goods` VALUES (13, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '数码产品', 'U盘', '包邮 u盘 16g 16gu盘 猫爪u盘 可爱u盘 创意正品u盘 16g猫爪upan', '包邮 u盘 16g 16gu盘 猫爪u盘 可爱u盘 创意正品u盘 16g猫爪upan', 'files/images/photos/1356750573.jpg', 'files/images/photos/1356750574.jpg', '', '尖草坪区', '九成新以上', 68, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-29 11:08:34', '0');
INSERT INTO `goods` VALUES (14, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '数码产品', 'U盘', '活动特价 索尼SONY 16gu盘16g16u盘商务高档u盘 特价 包邮', '活动特价 索尼SONY 16gu盘16g 16u盘商务高档u盘 特价 包邮', 'files/images/photos/1356750692.jpg', '', '', '万柏林区', '九成新以上', 101.5, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-29 11:11:09', '0');
INSERT INTO `goods` VALUES (15, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '数码产品', 'U盘', '包邮 台电u盘 16g U盘加密杀毒优盘 可爱U盘16G 16GU盘幻彩 特价', '包邮 台电u盘 16g U盘 加密杀毒优盘 可爱U盘16G 16GU盘幻彩 特价', 'files/images/photos/1356750894.jpg', '', '', '晋源区', '九成新以上', 65.4, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-29 11:14:30', '0');
INSERT INTO `goods` VALUES (16, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '数码产品', 'U盘', '包邮 东芝新款 隼系列 THUHYBS-016G 16G 16GB U盘 商务优盘 有赠', '包邮 东芝新款 隼系列 THUHYBS-016G 16G 16GB U盘 商务优盘 有赠', 'files/images/photos/1356756068.jpg', 'files/images/photos/1356756069.jpg', 'files/images/photos/1356756070.jpg', '万柏林区', '九成新以上', 38.4, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-29 12:40:37', '0');
INSERT INTO `goods` VALUES (17, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '数码产品', 'U盘', '福晴 u-5 u盘16g正品特价包邮 创意防水礼品优盘 金属u盘 送链子', '福晴 u-5 u盘16g正品特价包邮 创意防水礼品优盘 金属u盘 送链子', 'files/images/photos/1356756188.jpg', 'files/images/photos/1356756189.jpg', 'files/images/photos/1356756190.jpg', '杏花岭区', '九成新以上', 57.9, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-29 12:42:36', '0');
INSERT INTO `goods` VALUES (18, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '数码产品', 'U盘', 'SanDisk闪迪商务U盘CZ60 16gU盘 加密云 u盘16g 16gU盘 特价包邮', 'SanDisk闪迪商务U盘CZ60 16g U盘 加密云 u盘16g 16gU盘 特价包邮', 'files/images/photos/1356756316.jpg', 'files/images/photos/1356756317.jpg', 'files/images/photos/1356756318.jpg', '尖草坪区', '九成新以上', 101.5, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-29 12:44:44', '0');
INSERT INTO `goods` VALUES (19, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '数码产品', 'U盘', '权王 QW201 小胖子 优盘 U盘 128M256M512M 1G2G 4G 8G 16G 32G', '权王 QW201 小胖子 优盘 U盘 128M256M512M 1G2G 4G 8G 16G 32G', 'files/images/photos/1356756494.jpg', 'files/images/photos/1356756495.jpg', 'files/images/photos/1356756496.jpg', '', '九成新以上', 101.5, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-29 12:47:41', '0');
INSERT INTO `goods` VALUES (20, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '数码产品', 'U盘', '威刚s102 pro u盘 16g usb 3.0 高速优盘创意 u盘16g正品特价个性', '威刚s102 pro u盘 16g usb 3.0 高速优盘创意 u盘16g正品特价个性', 'files/images/photos/1356756621.jpg', 'files/images/photos/1356756620.jpg', 'files/images/photos/1356756622.jpg', '万柏林区', '九成新以上', 78.4, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-29 12:49:43', '0');
INSERT INTO `goods` VALUES (21, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '数码产品', 'U盘', '淘金币 台电 16G U盘 骑士usb3.0系列 高速个性加密U盘 正品包邮', '淘金币 台电 16G U盘 骑士usb3.0系列 高速个性加密U盘 正品包邮', 'files/images/photos/1356756841.jpg', 'files/images/photos/1356756842.jpg', 'files/images/photos/1356756843.jpg', '尖草坪区', '九成新以上', 59.2, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-29 12:53:25', '0');
INSERT INTO `goods` VALUES (22, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '数码产品', 'U盘', 'SSK飚王大拇哥u盘 16g U盘 创意防水金属优盘 u盘16g正品特价包邮', 'SSK飚王大拇哥u盘 16g U盘 创意防水金属优盘 u盘16g正品特价包邮', 'files/images/photos/1356757058.jpg', 'files/images/photos/1356757059.jpg', 'files/images/photos/1356757060.jpg', '万柏林区', '九成新以上', 56.9, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-29 12:57:07', '0');
INSERT INTO `goods` VALUES (23, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '数码产品', 'U盘', '新年促销立体创意卡通U盘可爱暴力熊足量16G 16GBU盘 特价包邮', '新年促销立体创意卡通U盘可爱暴力熊足量16G 16GBU盘 特价包邮', 'files/images/photos/1356757200.jpg', 'files/images/photos/1356757201.jpg', 'files/images/photos/1356757202.jpg', '万柏林区', '九成新以上', 68, '见面交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-29 12:59:15', '0');
INSERT INTO `goods` VALUES (24, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '二手手机', '苹果', 'iPhone5苹果5代 原装正品 双蛋促销送好礼', 'Apple/苹果 iPhone 5 苹果5代 现货包邮 原装正品 双蛋促销送好礼', 'files/images/photos/1356775339.jpg', 'files/images/photos/1356775340.jpg', 'files/images/photos/1356775341.jpg', '', '九成新以上', 2999, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-29 17:57:18', '0');
INSERT INTO `goods` VALUES (25, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '二手手机', '三星', '促销 Samsung/三星I9220 Galaxy Note/N7000 送原装皮套！', '现货！促销 Samsung/三星 I9220 Galaxy Note/N7000 送原装皮套！', 'files/images/photos/1356775589.jpg', '', '', '万柏林区', '九成新以上', 2162, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-29 18:06:02', '0');
INSERT INTO `goods` VALUES (26, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '二手手机', 'HTC', '圣诞节特价 送电源 HTC X515m G17 EVO 3D裸眼3D电信CDMA智能手机', '圣诞节特价 送电源 HTC X515m G17 EVO 3D裸眼3D电信CDMA智能手机', 'files/images/photos/1356775962.jpg', '', '', '尖草坪区', '九成新以上', 1755, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-29 18:12:19', '0');
INSERT INTO `goods` VALUES (27, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '二手手机', '索尼', 'Sony/索尼 LT28H Xperia ion', 'Sony/索尼 LT28H Xperia ion', 'files/images/photos/1356776090.jpg', '', '', '万柏林区', '九成新以上', 2001, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-29 18:14:30', '0');
INSERT INTO `goods` VALUES (73, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '二手手机', '其他', '元旦送神秘礼未拆封ROOT纯净版ZTE/中兴 u795 送联保章 现发', '【元旦送神秘礼】未拆封 ROOT纯净版ZTE/中兴 u795 送联保章 现发', 'files/images/photos/1357140704.jpg', '', '', '杏花岭区', '九成新以上', 101.5, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2013-01-02 23:31:08', '0');
INSERT INTO `goods` VALUES (30, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '二手手机', '三星', 'Samsung/三星 GALAXY Note II', 'Samsung/三星 GALAXY Note II', 'files/images/photos/1356776515.jpg', '', '', '尖草坪区', '九成新以上', 3156, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-29 18:21:28', '0');
INSERT INTO `goods` VALUES (31, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '文体乐器', '乐器', '卢森 Rosen 2系高品质民谣吉他 40寸41寸初学木吉它 美邦乐器', '卢森 Rosen 2系 高品质民谣吉他 40寸41寸初学木吉它 美邦乐器', 'files/images/photos/1356777462.jpg', 'files/images/photos/1356777463.jpg', 'files/images/photos/1356777464.jpg', '尖草坪区', '九成新以上', 238, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-29 18:36:36', '0');
INSERT INTO `goods` VALUES (32, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '服装箱包', '衣服', '新款薄新品羽绒服男正品清仓短款修身男款男装反季特价外套潮', '新款薄新品羽绒服男正品清仓 短款修身男款男装反季特价外套潮', 'files/images/photos/1356778309.jpg', '', '', '尖草坪区', '九成新以上', 196, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-29 18:49:00', '0');
INSERT INTO `goods` VALUES (33, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '数码产品', '数码相机', '【金牌店】佳能单反相机 650D/18-55 II 套机 正品 佳能 650D', '【金牌店】佳能单反相机 650D/18-55 II 套机 正品 佳能 650D', 'files/images/photos/1356926455.jpg', 'files/images/photos/1356926456.jpg', '', '万柏林区', '九成新以上', 4659, '见面交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-31 11:59:16', '0');
INSERT INTO `goods` VALUES (34, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '生活用品', '台灯', '正品久量666LED充电台灯护眼学习台灯 工作阅读 卧室床头写字灯', '正品久量666 LED充电台灯 护眼学习台灯 工作阅读 卧室床头写字灯', 'files/images/photos/1356931800.jpg', 'files/images/photos/1356931801.jpg', 'files/images/photos/1356931802.jpg', '万柏林区', '九成新以上', 33, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-31 13:29:19', '0');
INSERT INTO `goods` VALUES (35, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '生活用品', '日用品', '当珍日用品韩国创意家居生活用品新奇特商务小礼品批发实用小商品', '当珍日用品韩国创意家居生活用品新奇特商务小礼品批发实用小商品', 'files/images/photos/1356932085.jpg', 'files/images/photos/1356932086.jpg', 'files/images/photos/1356932087.jpg', '万柏林区', '九成新以上', 6, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-31 13:34:14', '0');
INSERT INTO `goods` VALUES (36, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '图书软件', '游戏装备', '空白名新手号绝版 2个空格最短名字 无任何绑定 秒改密码', '[空白名新手号]绝版2个空格 最短名字 无任何绑定 秒改密码', 'files/images/photos/1356932270.jpg', '', '', '杏花岭区', '九成新以上', 10, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-31 13:37:17', '0');
INSERT INTO `goods` VALUES (37, 'mm', 'files/images/touxiang/1356697293.jpg', '发布出售', '数码产品', 'MP3 MP4', '新品mp5正品HD高清5寸8G/16G触摸屏mp4行货包邮特价 外放 播放器', '新品mp5正品 HD高清5寸8G/16G触摸屏mp4行货包邮特价 外放 播放器', 'files/images/photos/1356956552.jpg', '', '', '万柏林区', '九成新以上', 196.35, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-31 20:22:01', '0');
INSERT INTO `goods` VALUES (38, 'mm', 'files/images/touxiang/1356697293.jpg', '发布出售', '数码产品', '移动硬盘', '东芝slim 500G 移动硬盘 金属超薄2.5寸USB3.0送原装包正品包邮', '东芝 slim 500G 移动硬盘 金属超薄2.5寸USB3.0送原装包正品包邮', 'files/images/photos/1356957346.jpg', 'files/images/photos/1356957347.jpg', 'files/images/photos/1356957348.jpg', '尖草坪区', '九成新以上', 539, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2012-12-31 20:35:11', '0');
INSERT INTO `goods` VALUES (39, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '图书软件', '教材用书', '中学教材全解七年级语文上', '中学教材全解-七年级语文上(人民教育出版社实验教科书)（2012年6月印刷）工具版', 'files/images/photos/1357089262.jpg', '', '', '迎泽区', '九成新以上', 13.5, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2013-01-02 09:13:40', '0');
INSERT INTO `goods` VALUES (40, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '图书软件', '复习资料', '考研数学名师名家高分复习全书', '考研数学名师名家高分复习全书', 'files/images/photos/1357089890.jpg', '', '', '娄烦县', '九成新以上', 29, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2013-01-02 09:24:04', '0');
INSERT INTO `goods` VALUES (41, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '图书软件', '其它1', 'Java从入门到精通（附光盘)', 'Java从入门到精通（附光盘)', 'files/images/photos/1357090065.jpg', '', '', '万柏林区', '九成新以上', 39.5, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2013-01-02 09:26:56', '0');
INSERT INTO `goods` VALUES (42, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '文体乐器', '健身器材', '力动炫彩时尚多功能折叠家用静音电动跑步机TR5100M', '力动炫彩时尚多功能折叠家用静音电动跑步机TR5100M', 'files/images/photos/1357090501.jpg', 'files/images/photos/1357090502.jpg', 'files/images/photos/1357090503.jpg', '万柏林区', '九成新以上', 1999, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2013-01-02 09:34:24', '0');
INSERT INTO `goods` VALUES (43, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '文体乐器', '运动装备', '骆驼户外防水运动休闲双显功能 登山多功能电子手表 2SA488A', '骆驼户外 防水运动休闲 双显功能 登山多功能电子手表 2SA488A', 'files/images/photos/1357090743.jpg', 'files/images/photos/1357090744.jpg', 'files/images/photos/1357090745.jpg', '万柏林区', '九成新以上', 199, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2013-01-02 09:37:20', '0');
INSERT INTO `goods` VALUES (44, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '文体乐器', '各种球拍', '海德 Head Ti Tour Two 网球拍红色', '海德 Head Ti Tour Two 网球拍 红色', 'files/images/photos/1357090882.jpg', '', '', '杏花岭区', '九成新以上', 238, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2013-01-02 09:40:46', '0');
INSERT INTO `goods` VALUES (45, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '文体乐器', '其它2', '护腕高弹性羽毛球护具加长吸汗护手腕', '护腕高弹性 羽毛球护具加长 吸汗护手腕', 'files/images/photos/1357091223.jpg', '', '', '万柏林区', '九成新以上', 142, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2013-01-02 09:46:19', '0');
INSERT INTO `goods` VALUES (46, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '数码产品', '万能充', '飞毛腿原装万能充飞毛腿万能充充电器 充电器 自动检测极性', '飞毛腿 原装 万能充 飞毛腿 万能充充电器 充电器 自动检测极性', 'files/images/photos/1357091342.jpg', '', '', '万柏林区', '九成新以上', 101.5, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2013-01-02 09:48:30', '0');
INSERT INTO `goods` VALUES (47, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '数码产品', '读卡器', 'SSK 飚王机器人多合一读卡器 全能王/CF/SD/MMC读卡器SCRM025', 'SSK飚王机器人多合一读卡器 全能王/CF/SD/MMC读卡器SCRM025', 'files/images/photos/1357091467.jpg', '', '', '尖草坪区', '九成新以上', 10, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2013-01-02 09:50:38', '0');
INSERT INTO `goods` VALUES (48, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '数码产品', '其它3', '飞利浦时钟收音机音箱', '飞利浦（PHILIPS） AJ3270D /93 Ipod/Iphone时钟收音机 音箱', 'files/images/photos/1357091556.jpg', '', '', '杏花岭区', '九成新以上', 458, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2013-01-02 09:52:06', '0');
INSERT INTO `goods` VALUES (49, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '生活用品', '毛绒娃娃', '咪蜜儿毛绒玩具压床娃娃大码1.6 米瞌睡熊抱抱熊生日圣诞节礼物', '咪蜜儿毛绒玩具压床娃娃大码1.6米瞌睡熊抱抱熊生日圣诞节礼物', 'files/images/photos/1357091814.jpg', '', '', '杏花岭区', '九成新以上', 132, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2013-01-02 09:56:19', '0');
INSERT INTO `goods` VALUES (50, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '生活用品', '玩具', '智力拼插玩具防暴特警特种机动队 M38-B2100 (塑料拼插玩具 乐高式拼装玩具积木)', '【益智玩具】 小鲁班 智力拼插玩具 防暴特警－特种机动队 M38-B2100 (塑料拼插玩具 乐高式拼装玩具积木)', 'files/images/photos/1357091976.jpg', 'files/images/photos/1357091977.jpg', '', '尖草坪区', '九成新以上', 69, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2013-01-02 09:58:45', '0');
INSERT INTO `goods` VALUES (51, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '生活用品', '自行车', 'BVIOR 百威尔 M530 山地自行车 深黑丹霞红', 'BVIOR 百威尔 M530 山地自行车 深黑丹霞红', 'files/images/photos/1357092201.jpg', 'files/images/photos/1357092202.jpg', '', '万柏林区', '九成新以上', 1399, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2013-01-02 10:02:42', '0');
INSERT INTO `goods` VALUES (52, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '生活用品', '其它4', 'TAFUCO泰福高真空保温广口壶1500ML', 'TAFUCO泰福高 next系列T-1210真空保温广口壶1500ML', 'files/images/photos/1357092410.jpg', '', '', '尖草坪区', '九成新以上', 101.5, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2013-01-02 10:06:10', '0');
INSERT INTO `goods` VALUES (53, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '服装箱包', '男鞋女鞋', '商务休闲皮鞋低帮正品男鞋真皮套脚鞋C82506117', '商务休闲皮鞋低帮正品男鞋真皮套脚鞋C82506117', 'files/images/photos/1357092565.jpg', 'files/images/photos/1357092566.jpg', '', '晋源区', '九成新以上', 238, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2013-01-02 10:09:00', '0');
INSERT INTO `goods` VALUES (54, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '服装箱包', '裤子', '秋装新品男休闲裤韩版修身男裤 男 CK07', '秋装新品男休闲裤 韩版修身男裤 男 CK07', 'files/images/photos/1357092797.jpg', '', '', '杏花岭区', '九成新以上', 99, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2013-01-02 10:12:37', '0');
INSERT INTO `goods` VALUES (55, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '服装箱包', '连衣裙', '茵曼秋装新款大码女装碎花V 领纯棉收腰中袖连衣裙823102668', '茵曼秋装新款大码女装 碎花V领纯棉收腰中袖连衣裙823102668', 'files/images/photos/1357092919.jpg', '', '', '晋源区', '九成新以上', 56.9, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2013-01-02 10:14:47', '0');
INSERT INTO `goods` VALUES (56, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '服装箱包', '饰品', '宝宝银饰品纯银长命锁+S990手镯一对', '宝宝银饰品 纯银长命锁+S990手镯一对', 'files/images/photos/1357093146.jpg', 'files/images/photos/1357093147.jpg', '', '万柏林区', '九成新以上', 237, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2013-01-02 10:18:37', '0');
INSERT INTO `goods` VALUES (58, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '服装箱包', '其它5', '男女秋冬针织帽套头帽韩版潮流毛线帽冬天1341', '男女秋冬针织帽套头帽韩版潮流毛线帽冬天1341', 'files/images/photos/1357093439.jpg', '', '', '尖草坪区', '九成新以上', 67, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2013-01-02 10:23:29', '0');
INSERT INTO `goods` VALUES (59, 'steven', 'files/images/touxiang/1356697515.jpg', '发布出售', '二手手机', '其它6', 'ZTE中兴 N970 3G手机 CDMA2000/CDMA（黑色）', 'ZTE中兴 N970 3G手机 CDMA2000/CDMA（黑色）', 'files/images/photos/1357093662.jpg', 'files/images/photos/1357093663.jpg', '', '杏花岭区', '九成新以上', 567, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2013-01-02 10:27:05', '0');
INSERT INTO `goods` VALUES (60, 'steven', 'files/images/touxiang/1356697515.jpg', '发布求购', '数码产品', '电脑', '求购一台联想二手电脑', '求购一台联想二手电脑', '', '', '', '', '九成新以上', 101.5, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2013-01-02 12:17:32', '0');
INSERT INTO `goods` VALUES (61, 'mm', 'files/images/touxiang/1356697293.jpg', '发布求购', '数码产品', '电脑', '我想要一台能玩游戏的电脑，最好不要超过1500元', '我想要一台能玩游戏的电脑，最好不要超过1500元', '', '', '', '', '九成新以上', 1500, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2013-01-02 12:30:19', '0');
INSERT INTO `goods` VALUES (62, 'ss', 'files/images/touxiang/1356674274.jpg', '发布求购', '数码产品', '电脑', '最近想买一台二手的dell笔记本电脑，有意者联系我', '最近想买一台二手的dell笔记本电脑，有意者联系我', '', '', '', '', '九成新以上', 101.5, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2013-01-02 12:36:43', '0');
INSERT INTO `goods` VALUES (63, 'aa', 'files/images/touxiang/1356610919.jpg', '发布求购', '数码产品', '电脑', '谁有闲置的笔记本呀，我想买', '谁有闲置的笔记本呀，我想买', '', '', '', '', '九成新以上', 1000, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2013-01-02 12:40:49', '0');
INSERT INTO `goods` VALUES (64, 'rr', 'files/images/touxiang/1357101785.jpg', '发布求购', '数码产品', '电脑', '求购一台500以内的笔记本，要求能打CF', '求购一台500以内的笔记本，要求能打CF', '', '', '', '', '九成新以上', 1999, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2013-01-02 12:43:16', '0');
INSERT INTO `goods` VALUES (65, 'xx', 'files/images/touxiang/1357102034.jpg', '发布求购', '数码产品', '电脑', '本人想买一二手电脑，有卖的没', '本人想买一二手电脑，有卖的没', '', '', '', '', '九成新以上', 1999, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2013-01-02 12:47:24', '0');
INSERT INTO `goods` VALUES (66, 'zz', 'files/images/touxiang/1357102121.jpg', '发布求购', '数码产品', '电脑', '学习需要买一笔记本电脑，有卖的联系我哦', '学习需要买一笔记本电脑，有卖的联系我哦', '', '', '', '', '九成新以上', 1999, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2013-01-02 12:48:51', '0');
INSERT INTO `goods` VALUES (67, 'steven', 'files/images/touxiang/1356697515.jpg', '发布求购', '数码产品', '电脑', '最近要买一二手电脑，编程用', '最近要买一二手电脑，编程用', '', '', '', '', '九成新以上', 1999, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2013-01-02 12:52:02', '0');
INSERT INTO `goods` VALUES (68, 'steven', 'files/images/touxiang/1356697515.jpg', '发布求购', '图书软件', '图书消遣', '想买一本《意林》2012年版的，谁有，卖我呗', '想买一本《意林》2012年版的，谁有，卖我呗', '', '', '', '', '九成新以上', 101.5, '线上交易', '18734915338', 'guoshijie_hi@yeah.net', '小郭', '2013-01-02 12:53:26', '0');

-- --------------------------------------------------------

-- 
-- Table structure for table `message`
-- 

CREATE TABLE `message` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` varchar(800) NOT NULL,
  `time` datetime NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=15 ;

-- 
-- Dumping data for table `message`
-- 

INSERT INTO `message` VALUES (1, '界面', '界面不友好，需改进哦，加油', '2012-12-14 20:07:54', 'steven', 'files/images/touxiang/1356697515.jpg');
INSERT INTO `message` VALUES (2, '新年快乐', '哎呀，这么长时间了，2012年第一条留言还是我的，新年快乐', '2012-12-14 20:35:29', 'steven', 'files/images/touxiang/1356697515.jpg');
INSERT INTO `message` VALUES (3, '手机', '手机快没电了，呃.....', '2012-12-14 20:36:40', 'steven', 'files/images/touxiang/1356697515.jpg');
INSERT INTO `message` VALUES (4, '早上起来下雨了', '早上起来下雨了', '2012-12-14 20:37:57', 'steven', 'files/images/touxiang/1356697515.jpg');
INSERT INTO `message` VALUES (5, '今天起的好早哦 ', '今天起的好早哦 ', '2012-12-14 20:38:41', 'steven', 'files/images/touxiang/1356697515.jpg');
INSERT INTO `message` VALUES (6, '留言板', '今天我的留言板终于竣工了，嘿嘿', '2012-12-14 20:45:00', 'steven', 'files/images/touxiang/1356697515.jpg');
INSERT INTO `message` VALUES (7, '下雪', '昨天下了一整天的雪', '2012-12-14 20:45:42', 'steven', 'files/images/touxiang/1356697515.jpg');
INSERT INTO `message` VALUES (8, '好累', '今天下午编了一下午，好累哦', '2012-12-14 20:46:11', 'steven', 'files/images/touxiang/1356697515.jpg');
INSERT INTO `message` VALUES (9, '晚饭', '晚饭吃了油条和老豆腐', '2012-12-14 20:46:51', 'steven', 'files/images/touxiang/1356697515.jpg');
INSERT INTO `message` VALUES (10, '时间', '时间过的真快，一转眼一天就过去了', '2012-12-14 20:54:53', 'steven', 'files/images/touxiang/1356697515.jpg');
INSERT INTO `message` VALUES (11, '下雪后', '路上好滑哦', '2012-12-15 19:49:20', 'steven', 'files/images/touxiang/1356697515.jpg');
INSERT INTO `message` VALUES (12, '晚饭', '今晚吃了大盘鸡和两串肉', '2012-12-28 21:15:15', 'mm', 'files/images/touxiang/1356697293.jpg');
INSERT INTO `message` VALUES (13, '无聊的生活', '今天的暴雪哪去了呢，天气预报太不准了也', '2012-12-28 21:19:13', 'aa', 'files/images/touxiang/1356610919.jpg');
INSERT INTO `message` VALUES (14, '元旦', '元旦快乐哦', '2012-12-28 21:23:11', 'ss', 'files/images/touxiang/1356674274.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `user`
-- 

CREATE TABLE `user` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `sex` varchar(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `truepwd` varchar(20) NOT NULL,
  `usertype` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=10 ;

-- 
-- Dumping data for table `user`
-- 

INSERT INTO `user` VALUES (6, 'steven', 'a11860bb4e30b2c16ad8', '男', 'guoshijie_hi@yeah.net', '18734915338', 'files/images/touxiang/1356697515.jpg', '我就读的第一所学校的名称？', '中北大学', 'guoshijie', 1);
INSERT INTO `user` VALUES (3, 'aa', 'a11860bb4e30b2c16ad8', '男', 'guoshijie_hi@yeah.net', '18734915338', 'files/images/touxiang/1356610919.jpg', '我最爱的电影？', '2012', 'guoshijie', 0);
INSERT INTO `user` VALUES (4, 'ss', 'a11860bb4e30b2c16ad8', '男', 'guoshijie_hi@yeah.net', '18734915338', 'files/images/touxiang/1356674274.jpg', '我最喜欢的歌曲？', '爱', 'guoshijie', 0);
INSERT INTO `user` VALUES (5, 'mm', 'a11860bb4e30b2c16ad8', '男', 'guoshijie_hi@yeah.net', '18734915338', 'files/images/touxiang/1356697293.jpg', '我最喜欢的歌曲？', '爱', 'guoshijie', 0);
INSERT INTO `user` VALUES (7, 'rr', '44f437ced647ec3f40fa', '男', 'guoshijie_hi@yeah.net', '18734915338', 'files/images/touxiang/1357101785.jpg', '我最喜欢的休闲运动是什么？', '篮球', 'rrr', 0);
INSERT INTO `user` VALUES (8, 'xx', 'f561aaf6ef0bf14d4208', '男', 'guoshijie_hi@yeah.net', '18734915338', 'files/images/touxiang/1357102034.jpg', '我最喜欢的运动员是谁？', '科比', 'xxx', 0);
INSERT INTO `user` VALUES (9, 'zz', 'f3abb86bd34cf4d52698', '男', 'guoshijie_hi@yeah.net', '18734915338', 'files/images/touxiang/1357102121.jpg', '我最喜欢的歌曲？', '爱', 'zzz', 0);
