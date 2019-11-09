/*
 Navicat Premium Data Transfer

 Source Server         : 阿里云
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : 47.94.213.205:3306
 Source Schema         : school

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 09/11/2019 17:49:26
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for image
-- ----------------------------
DROP TABLE IF EXISTS `image`;
CREATE TABLE `image`  (
  `img_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sch_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `img_url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(4) NOT NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`img_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 34 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of image
-- ----------------------------
INSERT INTO `image` VALUES (19, '唐河英才蒙氏小学', '20191102/S0RjvXyId0XQUD3jpp0plcIeEMAjiyJBjqXXfZe1.jpeg', 1, '2019-11-02 17:32:35', '2019-11-05 09:10:35');
INSERT INTO `image` VALUES (25, '旭日学校', '20191105/xUpXsP2iRSYZSf6akyd7fwYuLlRovbyG9k83Gk5t.jpeg', 1, '2019-11-05 13:14:31', '2019-11-05 13:14:31');
INSERT INTO `image` VALUES (22, '盘古小学', '20191105/X4mU2wwbcmn8aDu8nMiQdzovCKQ9eMaru2EapPXT.jpeg', 1, '2019-11-05 09:36:23', '2019-11-08 10:23:11');
INSERT INTO `image` VALUES (23, '盘古小学', '20191105/V3yfPct7iTZcEzv8AtZr6G0xOtCo63p4s6kfKJV9.jpeg', 1, '2019-11-05 10:54:21', '2019-11-05 10:54:21');
INSERT INTO `image` VALUES (24, '旭日学校', '20191105/07YQlabnAM83d16rhtMAGxAgZFEFnMoiVz8iUEbZ.jpeg', 1, '2019-11-05 13:14:23', '2019-11-05 13:14:23');
INSERT INTO `image` VALUES (16, '唐河英才红枫校区', '20191102/FdQZJiem85Fu5GjRIuDorfDdjcD4kQJ3uEDwiUah.jpeg', 1, '2019-11-02 15:09:31', '2019-11-05 09:10:55');
INSERT INTO `image` VALUES (20, '唐河英才蒙氏小学', '20191102/OHYvYTpcJ9JWVghWRAg89ZO93CPAR3cFfd4C3OwF.jpeg', 1, '2019-11-02 17:32:55', '2019-11-05 09:32:52');
INSERT INTO `image` VALUES (21, '盘古小学', '20191103/0eCcbe8jxW0dtXv2qykl4Xlu8FARUKn2ZBiDmCc2.jpeg', 1, '2019-11-03 12:47:59', '2019-11-08 10:23:14');
INSERT INTO `image` VALUES (26, '唐河英才蒙氏小学', '20191106/fqH9ejTG4TPIdCHb3KQI0kQdovantWrSwxfLJqNL.jpeg', 1, '2019-11-06 12:54:11', '2019-11-06 12:54:11');
INSERT INTO `image` VALUES (27, '旭日学校', '20191106/vSnFPEC7aWfADpusqMgCYZ97tv9sBGDqllNqCjyO.jpeg', 1, '2019-11-06 12:54:18', '2019-11-06 12:54:18');
INSERT INTO `image` VALUES (28, '书院学校', '20191106/Zb0KPVSl46Edn8IzRUnljZlUl1e4cGNon6pXrVQX.jpeg', 1, '2019-11-06 12:54:25', '2019-11-06 12:54:25');
INSERT INTO `image` VALUES (29, '卧龙学校', '20191106/jUCPVtDhGD69cjFJWEkmWATQAlAGNGJ31P8ITVF6.jpeg', 1, '2019-11-06 12:54:33', '2019-11-06 12:54:33');
INSERT INTO `image` VALUES (30, '示范学校', '20191106/OqkCXP5SQawAciecbBfuQPjnFywNUbc6pNuxabLT.jpeg', 1, '2019-11-06 12:54:43', '2019-11-06 12:54:43');
INSERT INTO `image` VALUES (31, '唐河英才学校', '20191108/pnDQN7PHRDsaD76mQZcMiav5B7TE0h41eBVtYFJ3.jpeg', 1, '2019-11-06 14:08:41', '2019-11-08 10:43:52');
INSERT INTO `image` VALUES (33, '盘古小学', '20191108/rRudjwyX2Ohch6eI0Yrp39k71qvRiDSqXWI22wdg.jpeg', 1, '2019-11-08 10:48:44', '2019-11-08 10:48:44');

-- ----------------------------
-- Table structure for members
-- ----------------------------
DROP TABLE IF EXISTS `members`;
CREATE TABLE `members`  (
  `m_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `m_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `money` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`m_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_10_14_200717_create_members_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_10_16_002953_create_cates_table', 1);

-- ----------------------------
-- Table structure for new
-- ----------------------------
DROP TABLE IF EXISTS `new`;
CREATE TABLE `new`  (
  `n_id` int(8) NOT NULL AUTO_INCREMENT,
  `sch_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `n_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `n_content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `status` int(4) NULL DEFAULT 1,
  PRIMARY KEY (`n_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 23 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of new
-- ----------------------------
INSERT INTO `new` VALUES (4, '盘古小学', '1崔龙洙首尔告别战率队崔龙洙或将现场看苏宁站恒大 称被球队诚意2-1胜 赛后向球迷挥手作别', '<p>1崔龙洙首尔告别战率队崔龙洙或将现场看苏宁站恒大 称被球队诚意2-1胜 赛后向球迷挥手作别</p>', '2019-11-05 16:53:15', '2019-11-05 16:53:15', 1);
INSERT INTO `new` VALUES (5, '盘古小学', '2崔龙洙首尔告别战率队崔龙洙或将现场看苏宁站恒大 称被球队诚意2-1胜 赛后向球迷挥手作别', '<p>2崔龙洙首尔告别战率队崔龙洙或将现场看苏宁站恒大 称被球队诚意2-1胜 赛后向球迷挥手作别</p>', '2019-11-05 16:53:25', '2019-11-05 16:53:25', 1);
INSERT INTO `new` VALUES (6, '盘古小学', '3崔龙洙首尔告别战率队崔龙洙或将现场看苏宁站恒大 称被球队诚意2-1胜 赛后向球迷挥手作别', '<p>3崔龙洙首尔告别战率队崔龙洙或将现场看苏宁站恒大 称被球队诚意2-1胜 赛后向球迷挥手作别</p>', '2019-11-05 16:53:35', '2019-11-05 16:53:35', 1);
INSERT INTO `new` VALUES (7, '盘古小学', '4崔龙洙首尔告别战率队崔龙洙或将现场看苏宁站恒大 称被球队诚意2-1胜 赛后向球迷挥手作别', '<p>4崔龙洙首尔告别战率队崔龙洙或将现场看苏宁站恒大 称被球队诚意2-1胜 赛后向球迷挥手作别</p>', '2019-11-05 16:53:44', '2019-11-05 16:53:44', 1);
INSERT INTO `new` VALUES (8, '盘古小学', '5崔龙洙首尔告别战率队崔龙洙或将现场看苏宁站恒大 称被球队诚意2-1胜 赛后向球迷挥手作别', '<p>5崔龙洙首尔告别战率队崔龙洙或将现场看苏宁站恒大 称被球队诚意2-1胜 赛后向球迷挥手作别</p>', '2019-11-05 16:53:53', '2019-11-05 16:53:53', 1);
INSERT INTO `new` VALUES (9, '盘古小学', '6崔龙洙首尔告别战率队崔龙洙或将现场看苏宁站恒大 称被球队诚意2-1胜 赛后向球迷挥手作别', '<p>6崔龙洙首尔告别战率队崔龙洙或将现场看苏宁站恒大 称被球队诚意2-1胜 赛后向球迷挥手作别</p>', '2019-11-05 16:54:01', '2019-11-05 16:54:01', 1);
INSERT INTO `new` VALUES (10, '盘古小学', '7崔龙洙首尔告别战率队崔龙洙或将现场看苏宁站恒大 称被球队诚意2-1胜 赛后向球迷挥手作别', '<p>7崔龙洙首尔告别战率队崔龙洙或将现场看苏宁站恒大 称被球队诚意2-1胜 赛后向球迷挥手作别</p>', '2019-11-05 16:54:11', '2019-11-05 16:54:11', 1);
INSERT INTO `new` VALUES (11, '盘古小学', '8崔龙洙首尔告别战率队崔龙洙或将现场看苏宁站恒大 称被球队诚意2-1胜 赛后向球迷挥手作别', '<p>8崔龙洙首尔告别战率队崔龙洙或将现场看苏宁站恒大 称被球队诚意2-1胜 赛后向球迷挥手作别</p>', '2019-11-05 16:54:20', '2019-11-07 19:23:06', 1);
INSERT INTO `new` VALUES (12, '盘古小学', '9崔龙洙首尔告别战率队崔龙洙或将现场看苏宁站恒大 称被球队诚意2-1胜 赛后向球迷挥手作别', '<p>9崔龙洙首尔告别战率队崔龙洙或将现场看苏宁站恒大 称被球队诚意2-1胜 赛后向球迷挥手作别</p>', '2019-11-05 16:54:28', '2019-11-05 16:54:28', 1);
INSERT INTO `new` VALUES (13, '盘古小学', '10崔龙洙首尔告别战率队崔龙洙或将现场10崔龙洙首尔告别战率队崔龙洙或将现场', '<p style=\"white-space: normal; font-family: &quot;Microsoft YaHei&quot;; font-size: 14px;\">&nbsp; &nbsp; &nbsp; &nbsp; 公交车沿路行驶在利客来、利群、维客、苏州路市场……这是全市一流的购物超市和农贸市场，大小商品应有尽有，各类蔬菜花样齐全，吸引着许多市民乘坐公交车前来购物。常发现购物者中大都是不会开车又行走不太方便的中老年人，每每到了超市、市场，大都会有人上车、下车，上车的，是满载而归的，提着大包小包的物品；下车的，是正在往超市去的，行动缓慢。这个时候凭直觉感到，司机师傅都练出了好性子，就会慢慢把车停稳，待上车的中老年人坐稳才开车，待下车的中老年人双脚踏到地上再关车门。常见一对老年夫妻，每天都坐公交车到了超市旁边就下车，几乎天天如此，从他们的执著劲头和精神头看来，坐公交车日日逛超市，还蛮<a href=\"http://www.duwenzhang.com/huati/xingfu/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">幸福</a>的。</p><p style=\"white-space: normal; font-family: &quot;Microsoft YaHei&quot;; font-size: 14px;\">　　 公交车满载着乘客的<a href=\"http://www.duwenzhang.com/huati/xinyuan/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">心愿</a>在平稳地行驶，刚拐过利客来超市，就到了植物园、颐和园、公园，这是市民休闲、健身的好去处，植物繁多的植物园里、幽静舒适的公园里，常有敲锣打鼓的、拉胡琴的、弹钢琴的、吹唢呐的、打太极拳的、唱歌的、跳广场舞的、练剑的、练武的，还有当听众、观众的。常常见三五成群甚或更多的男女老者一个挨一个地上车，每人都刷着老年卡，“老年卡，扫码<a href=\"http://www.duwenzhang.com/huati/chenggong/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">成功</a>。”他们一上车就打破了公交车上的沉寂，先前宁静的氛围顿然热闹起来，有时带有感激之情述说着坐公交车的方便，这是政府照顾老年人；有时兴高采烈地述说着逛公园、休闲、健身的感受，“你说上了年纪蹲家里干什么？不如出来逛逛公园、健健身，<a href=\"http://www.duwenzhang.com/wenzhang/xinqingriji/\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">心情</a>好。”每每见到他们，我感触颇深，市里开放了公园、植物园，又为65岁以上老年人办理了“老年人免费乘市内公交车卡”，公交车把他们载到了幸福<a href=\"http://www.duwenzhang.com/huati/kuaile/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">快乐</a>的乐园</p><p><br/></p>', '2019-11-05 16:54:37', '2019-11-05 21:26:38', 1);
INSERT INTO `new` VALUES (15, '唐河英才红枫校区', '1崔龙洙首尔告别战率队崔龙洙或将现场看苏宁站恒大 称被球队诚意2-1胜 赛后向球迷挥手作别', '<p>1崔龙洙首尔告别战率队崔龙洙或将现场看苏宁站恒大 称被球队诚意2-1胜 赛后向球迷挥手作别</p>', '2019-11-05 17:02:26', '2019-11-08 10:51:34', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for school
-- ----------------------------
DROP TABLE IF EXISTS `school`;
CREATE TABLE `school`  (
  `sch_id` int(11) NOT NULL AUTO_INCREMENT,
  `sch_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sch_content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `sch_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sch_tel` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sch_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`sch_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 17 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of school
-- ----------------------------
INSERT INTO `school` VALUES (7, '盘古小学', '<p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">当我听到这句话时，刹那间痛哭出声，在专家的办公室，哭的那么的痛快淋漓， 哭的那么的欣喜若狂。要知道，儿子，当我初晓你可能有先天性心脏病时，我没有哭，那时，我必须<a href=\"http://www.duwenzhang.com/huati/jianqiang/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">坚强</a>面对，我不能哭；当你母亲在我怀里痛哭失声时，我没有哭，我必须安慰好你母亲，那时的她的身心俱疲72小时不眠的我美美的睡了一个下。儿子，现在想来，如果我和你母亲的心有那么一点点自私，有那么一点点胡思乱想，意志有那么一点点不坚定，今天的你会在那里？还会不会在我和你母亲身边？即便只是想想，也是不寒而泣。儿子，现在想来，定是你一不小心跟我们开的一个玩笑，因为，你的<a href=\"http://www.duwenzhang.com/huati/shengri/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">生日</a>， 4月1日，是愚人节/儿子，我要用手中的笔，<a href=\"http://www.duwenzhang.com/huati/nuli/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">努力</a>的记录你的点<img src=\"/ueditor/php/upload/image/20191105/1572948825.jpg\" title=\"1572948825.jpg\" alt=\"timg21.jpg\" width=\"171\" height=\"113\"/>点滴滴，我想要一一留下有你光阴的痕迹了你不感冒，少感冒，不发烧，少发烧，整整的一个夏天，我们没有开过空调，只是准备了一台电风扇，慢腾腾的吹着。这城市郊区的乡村的蚊蝇特别多，怕你被叮咬，睡不安稳觉，我会用蒲扇赶着蚊子，不让它们惊醒你的美梦。只是，你还是睡不好，或者是贪念我和你母亲的臂弯，每天非要我们哼着不知明的小夜曲，在<a href=\"http://www.duwenzhang.com/huati/wennuan/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">温暖</a>臂弯中摇晃中才会睡去。就这一个夏天，我廋身了5公斤，以至于到现在，你母亲还在笑话我，这辈子也只有这次能减肥成功。</p><p><br/></p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\"><span style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px;\"><span style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px;\"><span style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px;\"><span style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px;\"><br/></span></span></span></span><br/></p>', '2019-10-31 14:47:41', '2019-11-06 13:52:07', 'xxxxxxxxxxxxxxxxxxxxxxxqqq', '13034003710', '1398152207@qq.com');
INSERT INTO `school` VALUES (8, '唐河英才蒙氏小学', '<p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　&nbsp; &nbsp; 那天，下着细雨，已是黄昏，我抱着你穿梭在这小城市最好的医院-人民医院，小小的你是如此的沉重。随着各种检查结果的不断重复，最后，医院专家给出的建议是：回家静养，6个月后做手术，<a href=\"http://www.duwenzhang.com/huati/chenggong/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">成功</a>率不会高过50%。</p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　　已经有很多安慰的话语传达给我和你母亲，更多的建议却是<a href=\"http://www.duwenzhang.com/huati/fangqi/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">放弃</a>，让我们放弃一条刚刚降临人世间鲜活的<a href=\"http://www.duwenzhang.com/huati/shengming/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">生命</a>。那天，我的心已绝绝望到了冰点，你的母亲已哭红了眼。</p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　　只是，我和你母亲十指紧扣，目光坚定，我们绝不会边轻易放弃一个活生生的生命，只要有一丝的<a href=\"http://www.duwenzhang.com/huati/xiwang/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">希望</a>，那怕在以后的日子里，会有更多的磨砺，困难，那怕在以后的某一天，你会突然<a href=\"http://www.duwenzhang.com/huati/likai/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">离开</a>……。</p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　　第三天，我抱着你来到了长沙湘雅三医院（找人挂了一个儿科权威专家号），带去所有的病历资料，我紧握拳头，绝望中又渴望出现奇迹。是的，奇迹终于出现，专家做出最后的结论是：小孩有点心律不齐，左胸室和右胸室有几个不规则小孔，当他慢慢长大，可能会渐渐愈合，6个月后来复查，三年后再检查一次，如还没有愈合，可以做手术，成功率很高。所以，请安安心心回去，只是在<a href=\"http://www.duwenzhang.com/wenzhang/shenghuosuibi/\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">生活</a>中注意一些，不要让孩子过多的感冒，发烧。</p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　　当我听到这句话时，刹那间痛哭出声，在专家的办公室，哭的那么的痛快淋漓， 哭的那么的欣喜若狂。要知道，儿子，当我初晓你可能有先天性心脏病时，我没有哭，那时，我必须<a href=\"http://www.duwenzhang.com/huati/jianqiang/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">坚强</a>面对，我不能哭；当你母亲在我怀里痛哭失声时，我没有哭，我必须安慰好你母亲，那时的她的身心俱疲。</p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　　那天，72小时不眠的我美美的睡了一个下午。</p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　　儿子，现在想来，如果我和你母亲的心有那么一点点自私，有那么一点点胡思乱想，意志有那么一点点不坚定，今天的你会在那里？还会不会在我和你母亲身边？即便只是想想，也是不寒而泣。</p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　　儿子，现在想来，定是你一不小心跟我们开的一个玩笑，因为，你的<a href=\"http://www.duwenzhang.com/huati/shengri/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">生日</a>， 4月1日，是愚人节。</p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　　 　 二</p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　　儿子，我要用手中的笔，<a href=\"http://www.duwenzhang.com/huati/nuli/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">努力</a>的记录你的点点滴滴，我想要一一留下有你光阴的痕迹。</p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　　为了你不感冒，少感冒，不发烧，少发烧，整整的一个夏天，我们没有开过空调，只是准备了一台电风扇，慢腾腾的吹着。这城市郊区的乡村的蚊蝇特别多，怕你被叮咬，睡不安稳觉，我会用蒲扇赶着蚊子，不让它们惊醒你的美梦。只是，你还是睡不好，或者是贪念我和你母亲的臂弯，每天非要我们哼着不知明的小夜曲，在<a href=\"http://www.duwenzhang.com/huati/wennuan/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">温暖</a>臂弯中摇晃中才会睡去。就这一个夏天，我廋身了5公斤，以至于到现在，你母亲还在笑话我，这辈子也只有这次能减肥成功。</p><p><br/></p>', '2019-10-31 14:47:47', '2019-11-05 21:13:10', 'xxxxxxxxxxxxxxxx', '13034003710', '13034003710@qq.com');
INSERT INTO `school` VALUES (9, '唐河英才红枫校区', '<p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\"><span style=\"color:#000000\">　&nbsp; &nbsp; 可是好景不长，女孩发现男孩这几天对她越来越冷谈了，很少来找她，就连电话信息都很少了。女孩慌了，她觉得自己的幸福好像快溜走了。终于，女孩忍不住去了男孩的教室找他了。女孩去的时候男孩趴在桌上睡觉，女孩很生气，男孩宁愿睡觉也不愿意理她，同桌看到女孩，推了推男孩，男孩抬头看到女孩，慵懒的起身从座位上走出教室来到女孩面前，女孩抬头问男孩：“</span><a href=\"http://www.duwenzhang.com/huati/laogong/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\"><span style=\"color:#000000\">老公</span></a><span style=\"color:#000000\">，你为什么不理我了啊？你是不是不要我了啊？”男孩冷漠的眼眸划过一丝</span><a href=\"http://www.duwenzhang.com/huati/beishang/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\"><span style=\"color:#000000\">悲伤</span></a><span style=\"color:#000000\">，随即又马上被冷漠所代替，他低下头看着女孩，看着女孩，说：“是，所以你以后别再来找我了！我们结束了！”这些话如同晴天霹雳，使得女孩猛的一怔，</span><a href=\"http://www.duwenzhang.com/huati/yanlei/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\"><span style=\"color:#000000\">眼泪</span></a><span style=\"color:#000000\">马上就决堤而下，她拉住男孩的手；“老公，你骗我的对不对？你说过会一辈子都呵护我的啊，你说过不会让我受伤的，不是吗？！你说过我是你的小傻瓜，你会好好疼小傻瓜的啊！你怎么可能会忘了这些啊？老公，你一定是骗我的对吧？”男孩别过脸不看女孩，他闭上眼睛，狠狠地甩开了女孩的手，力道之大，以至于女孩跌倒在地。他对女孩说：“我说的还不够清楚吗？！我不要你了！不喜欢你了！以后不要再来找我了！”四周围满了看笑话的人，大家都对男孩的反应吓了一跳。女孩</span><a href=\"http://www.duwenzhang.com/huati/shangxin/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\"><span style=\"color:#000000\">伤心</span></a><span style=\"color:#000000\">欲绝，但她抬起来脸，看着男孩问；“为什么？”男孩一手搂住旁边一个漂亮女生的肩膀：“这就是理由”漂亮女生可能没想到男孩会喜欢上她，她一开始愣了一下，随后回过神，故意往男生身上靠了靠。女孩看着这一幕，</span><a href=\"http://www.duwenzhang.com/huati/xintong/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\"><span style=\"color:#000000\">心痛</span></a><span style=\"color:#000000\">得快不能呼吸。她捂住胸口，是吗？原来一切都是骗人的，他也只是玩玩我的而已…既然这样，我又何必像个像个小丑一样，让所有人笑话呢？可是怎么办，我的心，好痛…女孩擦干眼泪，平静的对男孩说了句：“我知道了，以后我不会来烦你”说完便转身</span><a href=\"http://www.duwenzhang.com/huati/likai/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\"><span style=\"color:#000000\">离开</span></a><span style=\"color:#000000\">了。男孩没有看到女孩转身的那一刻，她哭得有多悲伤。同样，女孩也没有看到，她转身后，男孩一脸厌恶的推开漂亮女生后回到座位上继续睡觉，没有人看到，男孩趴到桌上的那一刻，他的眼眶红了。男孩再也忍不住了，他的心痛得快死，就连呼吸都变得有刺痛感，他真的不想伤害她的，他给她的承诺他也从来没有忘记过，他也想实现这些承诺啊！他也是真的爱他的小傻瓜的啊，他也好想好想疼她一辈子的啊，可是自从接到医院那张癌症晚期的单子后这一切就不可能了…亲爱的小傻瓜，我可爱的</span><a href=\"http://www.duwenzhang.com/huati/laopo/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\"><span style=\"color:#000000\">老婆</span></a><span style=\"color:#000000\">，以后没有了我在身边，你一个人也要开开心心的活下去，老公我会在天堂爱你。老婆，原谅老公的自私，我宁愿伤害你，也不能让你看着我死，就算让你恨我一辈子，我也不能让你承受那么大的</span><a href=\"http://www.duwenzhang.com/huati/tongku/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\"><span style=\"color:#000000\">痛苦</span></a><span style=\"color:#000000\">。老婆，对不起，我爱你。</span></p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\"><span style=\"color:#000000\">　　第二天，男孩转学了，没有人知道他去了哪儿。</span></p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\"><span style=\"color:#000000\">　　女孩回到宿舍，把音响开到最大，一个人躲在被子里哭了好久好久，整整两天，不吃也不喝，无论谁劝都没有用。她就那样躺了两天。第三天早上，她终于起床了，正常的刷牙，正常的洗脸，正常的吃饭，正常的上学，跟个没事人一样。朋友都关心的问她是不是没事了，她只是一笑而过；“你们觉得我像是有事吗？”朋友们告诉女孩，男孩转学了，女孩无所谓的耸耸肩:“哦”。看着女孩无所谓的</span><a href=\"http://www.duwenzhang.com/huati/taidu/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\"><span style=\"color:#000000\">态度</span></a><span style=\"color:#000000\">，大家都以为女孩已经忘了男孩，其实只有女孩心里知道，她这辈子都别想忘了男孩，即使他骗了她，可是她还是不争气的忘不掉…</span></p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\"><span style=\"color:#000000\">　　男孩走了以后，女孩就没有再谈过</span><a href=\"http://www.duwenzhang.com/huati/lianai/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\"><span style=\"color:#000000\">恋爱</span></a><span style=\"color:#000000\">，心思都用到了学习上。半年后，女孩考上了上海交大。在</span><a href=\"http://www.duwenzhang.com/wenzhang/xiaoyuanwenzhang/daxueshenghuo/\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\"><span style=\"color:#000000\">大学</span></a><span style=\"color:#000000\">里女孩也没有谈过恋爱，因为她的心里仍然有着另一个人，虽然那个人对她残忍，但她始终都忘不掉男孩。而她也不想忘记，那些</span><a href=\"http://www.duwenzhang.com/huati/huiyi/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\"><span style=\"color:#000000\">回忆</span></a><span style=\"color:#000000\">是</span><a href=\"http://www.duwenzhang.com/huati/meihao/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\"><span style=\"color:#000000\">美好</span></a><span style=\"color:#000000\">的，她不想因为时间而将它们</span><a href=\"http://www.duwenzhang.com/huati/yiwang/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\"><span style=\"color:#000000\">遗忘</span></a><span style=\"color:#000000\">，即使这些回忆参杂着欺骗…</span></p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\"><span style=\"color:#000000\">　　六年后的一天，女孩回到这所高中，这个学校还和以前一样，一草一木都没有什么变化。踏进学校大门，回忆如潮水般涌来，她和男孩的点点滴滴此刻就像一场电影，在她的脑海里放映。没走一步，她的心就多痛一次。学校后的小树林，她还清晰的记得他们曾在这里牵手一起散步，他对她说；“傻瓜老婆，我要爱你一辈子”那时的她，羞红了脸，心里是甜滋滋的。这些画面仿佛是昨天发生的一样，她还记得如此清晰。</span></p><p><br/></p>', '2019-10-31 14:47:57', '2019-11-05 21:11:57', 'xxxxxxxxxxxxxxxxxxxxxx', '13034003710', '13034003710@qq.com');
INSERT INTO `school` VALUES (10, '唐河英才学校', '<p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">&nbsp; &nbsp; &nbsp; 若，人生只是一场美丽的梦，我，愿做风中的一节寒枝。静守一片天空，不为绽放不为华美，慢慢历练；默然一方清宁，不去追逐不去弄姿，淡淡沉寂；纯澈一汪心境，不想颂扬不想歌唱，只为来过。季节在岁月中交替，寒暑在时光中缤纷，美丽在生命中次第。空山无人水流花深，自飘零；疏林晚钟松涛渊默，自寻觅；晨风晚霞望月守心，自静思！</p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　　若，人生只是一场美丽的梦，我，愿做清晨里的一滴露珠。尽管微小但不懦弱，因为知道世界的<a href=\"http://www.duwenzhang.com/huati/chunjie/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">纯洁</a>来自<a href=\"http://www.duwenzhang.com/huati/xinling/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">心灵</a>的透明；尽管短暂但不落魄，因为晓得岁月的无悔源于执著的经历；尽管简单但不卑微，因为懂得生命<a href=\"http://www.duwenzhang.com/huati/jiazhi/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">价值</a>在于一瞬间的滑落一瞬间的精彩一瞬间的永恒。</p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　　我的存在，证实了阳光的明媚，阳光的魅力，阳光的神奇；我的存在，也证实了生命的长度，生命的宽度，生命的深度；我的存在，更证实了大自然、大世界，大人生的美丽无限！</p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　　若，人生只是一场美丽的梦，我，愿做路上的一朵小花。独自绽放，只为曾经生存过，尽管只是一孑流影；独自飘零，只为曾经美丽过，尽管只是一抹残香；独自<a href=\"http://www.duwenzhang.com/huati/dengdai/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">等待</a>，只为那生命中注定的<a href=\"http://www.duwenzhang.com/huati/yuanfen/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">缘分</a>，尽管只是一个幻影。花，只为欣赏的人开放，只为心里的人凋谢，只为自己的梦飞翔。</p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　　独守一隅，微弱而不怯弱，寒微而不卑微，<a href=\"http://www.duwenzhang.com/huati/jianqiang/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">坚强</a>而不逞强。在我的生命里，一样有风，一样有雨，一样也有灿烂的阳光！</p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　　若，人生只是一场美丽的梦，我们，既要学会<a href=\"http://www.duwenzhang.com/huati/zhenxi/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">珍惜</a>生命，又要学会欣赏生命。欣赏生命，需要一份平和一份淡雅一份轻松；欣赏生命，需要一种坦荡一种从容一种穿越；欣赏生命，是对生命的一种解读一种尊重一种睿智。一株小草就是一个生命，一朵小花就是一道风景，一缕阳光就是一份<a href=\"http://www.duwenzhang.com/huati/wennuan/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">温暖</a>。</p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　　其实，生命就是一杯清茶，就是一支歌谣，就是一首耐人寻味的小诗！让我们一路行走，一路品味，一路经历，静静享受这美丽的人生！</p><p><br/></p>', '2019-10-31 14:48:02', '2019-11-05 21:12:07', 'xxxxxxxxxxxxxxxxxxxxxx', '13034003710', '13034003710@qq.com');
INSERT INTO `school` VALUES (11, '旭日学校', '<p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">&nbsp; &nbsp; &nbsp; &nbsp; 敌人往往是自己树立的。历史上的<a href=\"http://www.duwenzhang.com/huati/chenggong/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">成功</a>人士则都具有化敌为友的本事，容人、识人、用人的胸怀和雅量着实令人钦佩。春秋五霸之首的齐桓公、唐太宗李世民都有是这样具有“大气”风范的人。</p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　　 其二，对事，要超脱，不要深陷其中。</p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　　人的一生，碰到的事太多了。几乎眼睛一闭，一睁，碰到的都是事。猝不及防的打击，始料未及的<a href=\"http://www.duwenzhang.com/huati/cuozhe/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">挫折</a>，从天而降的好处，唾手可得的利益，随时发生。事无论大小，不管好坏，都不要太在意，太当回事儿。切莫一见好事就喜形于色，乐颠颠兴奋得不得了，一遇坏事就愁眉苦脸，霜打茄子一样蔫头耷脑。遇事不敢担当，怎么能成大器？</p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　　 其三，对已，要豁达，不要小肚鸡肠。</p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　　 一个人，<a href=\"http://www.duwenzhang.com/wenzhang/shenghuosuibi/\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">生活</a>在<a href=\"http://www.duwenzhang.com/huati/xianshi/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">现实</a><a href=\"http://www.duwenzhang.com/huati/shehui/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">社会</a>中，吃亏啦，受委屈啦，想不通啦，常有的事。同事出言不逊轻慢了你，单位办事不公<a href=\"http://www.duwenzhang.com/huati/shanghai/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">伤害</a>了你，领导举止言谈没给你面子，这都算不得什么，都要豁达以对，淡然处之。倘若整天围着自己那点儿小九九打转转，时时算计自个儿的利害<a href=\"http://www.duwenzhang.com/huati/deshi/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">得失</a>，甚至以一已得与失作为好与坏、喜与忧的标准，心胸如此狭窄，怎么能成大器？</p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　　 大气是一种糊涂。不因贪小利而失大节，保持<a href=\"http://www.duwenzhang.com/huati/neixin/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">内心</a>的大原则，看似糊涂，内心亮堂。大气是一种忍让。厚德载物，雅量容人，屈已尊人，以德报怨，不轻易拿自己的涵养挑战别人的浅薄。大气是一种淡薄。坦坦荡荡，身正为范，壁立千仞无欲则刚，<a href=\"http://www.duwenzhang.com/huati/jinqian/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">金钱</a><a href=\"http://www.duwenzhang.com/huati/mingli/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">名利</a>浮云过，我心自有明月在，心如止水观日月，目似明镜看春秋。</p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　　 大气是一种从容。<a href=\"http://www.duwenzhang.com/huati/xintai/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">心态</a>阳光看得开，拿得起放得下，当进则进，当退则退，稳重沉静，坚忍不拔，泰山崩于前而面不改色。大气是一种境界。战胜小我，成熟大我；高调做事，<a href=\"http://www.duwenzhang.com/huati/didiao/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">低调</a>做人；制怠戒惰，常思<a href=\"http://www.duwenzhang.com/huati/zeren/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">责任</a>；宠辱不惊，戒骄戒躁。一个大气的人，不是无原则，无气节，而是小事不挂怀，世间无大事。胸如大海，只藏真纳善，拒绝虚假。懂得忘却，不计得失，活一种精神气质，活一种品位境界。</p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　　 一个大气的人，不是没有七情六欲，而是世事洞明，人情练达。知进退，懂人心，自求多福，宽容是金。不管多么大的不愉快，也能够做到一笑了之，事过了心随空，不让污浊之气在自己的心里驻足，内心永远保存新鲜的空气，一尘不染，化腐朽为养分，让它们滋润自己的心田。一个大气的人，不是不食人间烟火，而是长久地浸泡在俗世中，有了一种顿悟，<a href=\"http://www.duwenzhang.com/huati/shengming/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">生命</a>得以升华，明白了<a href=\"http://www.duwenzhang.com/huati/fannao/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">烦恼</a>愁苦是一世，<a href=\"http://www.duwenzhang.com/huati/kaixin/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">开心</a><a href=\"http://www.duwenzhang.com/huati/kuaile/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">快乐</a>也一生。愿意分享，不怕付出。舍去半升，终得一斗，退一步海阔天空……</p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　　 一个大气的人，不<a href=\"http://www.duwenzhang.com/huati/zibei/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">自卑</a>，不倨傲，温柔敦厚，不失纯真。气定神闲，稳如泰山，深沉如山，透彻如水。能够透过现象准确把握事物的本质，不固执，不<a href=\"http://www.duwenzhang.com/huati/mishi/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">迷失</a>，恬淡自省，俯仰无愧，得一份大自在、大欢喜。一个大气的人，愁苦的阴云从来不会飘浮在他的天空，而欢喜的花儿却会常年盛开在他明亮的心田里，“问渠哪得清如许，为有源头活水来。”大气就是喜神，自然常聚<a href=\"http://www.duwenzhang.com/huati/xingfu/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">幸福</a>，大气就是活水，滋润百花盛开。</p><p><br/></p>', '2019-10-31 14:48:07', '2019-11-05 21:12:15', 'xxxxxxxxxxxxxxxxxxxxxx', '13034003710', '13034003710@qq.com');
INSERT INTO `school` VALUES (12, '示范学校', '<p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">&nbsp; &nbsp; &nbsp; &nbsp;公交车沿路行驶在利客来、利群、维客、苏州路市场……这是全市一流的购物超市和农贸市场，大小商品应有尽有，各类蔬菜花样齐全，吸引着许多市民乘坐公交车前来购物。常发现购物者中大都是不会开车又行走不太方便的中老年人，每每到了超市、市场，大都会有人上车、下车，上车的，是满载而归的，提着大包小包的物品；下车的，是正在往超市去的，行动缓慢。这个时候凭直觉感到，司机师傅都练出了好性子，就会慢慢把车停稳，待上车的中老年人坐稳才开车，待下车的中老年人双脚踏到地上再关车门。常见一对老年夫妻，每天都坐公交车到了超市旁边就下车，几乎天天如此，从他们的执著劲头和精神头看来，坐公交车日日逛超市，还蛮<a href=\"http://www.duwenzhang.com/huati/xingfu/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">幸福</a>的。</p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　　 公交车满载着乘客的<a href=\"http://www.duwenzhang.com/huati/xinyuan/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">心愿</a>在平稳地行驶，刚拐过利客来超市，就到了植物园、颐和园、公园，这是市民休闲、健身的好去处，植物繁多的植物园里、幽静舒适的公园里，常有敲锣打鼓的、拉胡琴的、弹钢琴的、吹唢呐的、打太极拳的、唱歌的、跳广场舞的、练剑的、练武的，还有当听众、观众的。常常见三五成群甚或更多的男女老者一个挨一个地上车，每人都刷着老年卡，“老年卡，扫码<a href=\"http://www.duwenzhang.com/huati/chenggong/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">成功</a>。”他们一上车就打破了公交车上的沉寂，先前宁静的氛围顿然热闹起来，有时带有感激之情述说着坐公交车的方便，这是政府照顾老年人；有时兴高采烈地述说着逛公园、休闲、健身的感受，“你说上了年纪蹲家里干什么？不如出来逛逛公园、健健身，<a href=\"http://www.duwenzhang.com/wenzhang/xinqingriji/\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">心情</a>好。”每每见到他们，我感触颇深，市里开放了公园、植物园，又为65岁以上老年人办理了“老年人免费乘市内公交车卡”，公交车把他们载到了幸福<a href=\"http://www.duwenzhang.com/huati/kuaile/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">快乐</a>的乐园。</p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　　市区12路有19辆公交车，都是红色的，车上标配一样的，给人以规范的<a href=\"http://www.duwenzhang.com/huati/ganjue/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">感觉</a>。据我观察了解，行车中的19名司机师傅，有从部队转业回来的，有从单位内退休后招聘来的，有经过驾驶员严格培训出来的，并且经过了严格规范的服务礼仪培训。他们中有男、有女，有老、有少，他们也像一个<a href=\"http://www.duwenzhang.com/huati/wenxin/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">温馨</a>的大<a href=\"http://www.duwenzhang.com/huati/jiating/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">家庭</a>。都使用规范的行车服务用语，大都有自己的一套安全服务用语，如：“下车先报站，下车后往后看。”“到哪去，先报站，别坐过了站。”“小心，看着车！”每到一站，他们就按下了警示提醒：“右转弯，请注意！”转入正规车道，又提醒着：“左转弯，请注意！”公交车自始至终行驶在规范的理念和操作之中。</p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　　&nbsp;<a href=\"http://www.duwenzhang.com/huati/shijian/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">时间</a>长了，差不多天天乘车，我与19名司机师傅彼此很熟了，他们熟悉到知我从哪上车，从哪下车。我熟悉他们，熟得还能叫上名字来，无论姓袁的、姓滕的、姓侯的、姓郭的，还是姓王的、姓孙的、即使叫不上名字来的，彼此交流的也都很好，很贴心。他们在我脑海里组成了一个生动的画面，他们的音容笑貌常浮现在我眼前，他们的车中有我，我的心中有他们。也都进行了深切交流，有的还当作了<a href=\"http://www.duwenzhang.com/huati/zhiji/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">知己</a>，都非常了解。譬如在和袁师傅的深度交流中，他激动地说：“我儿子在武警部队，今年选拔参加建国70周年阅兵。”我听了真为他高兴，此后每次乘他驾驶的公交车，我差不多都要问一问选拔情况，他儿子因为训练紧张、选拔严，已经好久没给他打电话了，他给儿子打电话也打不通，只好默默地为他祝福。直到国庆节前夕，儿子的电话终于通了，参加国庆节阅兵也基本定了，但不敢肯定，只有到国庆节那天才能“一槌定音”，我对袁师傅说：“那就基本没问题了，等着儿子的好消息吧，好好为他祝贺吧！”</p><p><br/></p>', '2019-10-31 14:48:13', '2019-11-05 21:12:25', 'xxxxxxxxxxxxxxxxxxxxxx', '13034003710', '13034003710@qq.com');
INSERT INTO `school` VALUES (13, '书院学校', '<p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">&nbsp; &nbsp; &nbsp; &nbsp; 一张张笑颜，却分不清真或假。<a href=\"http://www.duwenzhang.com/huati/yongheng/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">永恒</a>与执念在刹那分离，站在欲望迷离之处。虽身怀不世之才，但更多的却是迷惑与不解。宛意诚转是飞扬的少年，慎意持重是宰割天下的智者。那一笔笔飞扬意气的华少，那副副宰割天下血腥！身浴阳光之中，心却沉浸阴霭之内。阳光照在身上让我感到<a href=\"http://www.duwenzhang.com/huati/xingfu/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">幸福</a>与快乐，但纠结与痴迷始终纠结于<a href=\"http://www.duwenzhang.com/huati/neixin/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">内心</a>。血腥的欲念让我恶心想吐，但现实的需要又迫我再下一城。兵戈铁马中又是一场欲念的痴迷，红尘反复中你又静默在那方世界。纵拥天下也不过是囚笼困索而已，宰割群雄无过无痕春梦。 那薄衫、那轻衣、那霓虹、那彩霞、那烟云、那浮生、那幻世都成这刻的舞姿，翩翩而来的你已近在我眼前。我站在湖边，水映照你这刻的笑颜。恍惚间爱盛开这刻开出最美的时光，我不愿醒来这刻情景。因我知道一但醒来又是兵临的困倦，山河破碎。天下纷纷，我坐困于迷城中。手掌利剑，脚踏乾坤。但是腐臭的欲念肮脏<a href=\"http://www.duwenzhang.com/huati/zhizhuo/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">执着</a>与影而至，相伴而生。你是否与我一样，也困惑<a href=\"http://www.duwenzhang.com/huati/mimang/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">迷茫</a>失落无助。 枯萎的<a href=\"http://www.duwenzhang.com/huati/xinling/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">心灵</a>需要甘泉的滋润，止不住的因缘又结凄迷的欲花。此羡彼岸之繁华，但今始知彼岸的孤寂。若再有选择，生生世世不饮彼岸之泉。花开于繁华之一季，谁又见叶落之倾殇。</p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　　一场喧嚣过后，凝视残亘断壁山河破碎。扪心而问可曾为此心悔，当年一念为执，半世成魔，造就今日山河破碎，故人凋零。心可曾为之悔！万花开遍，姹紫嫣红。群芳争艳，故人情深，你在何方。不过是一瞬的分别，为何会变永恒的过去。错了吗？当年毅然拿起，却换来如此结果。纵曾坐拥天下，今却只剩下寂寞与<a href=\"http://www.duwenzhang.com/huati/wunai/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">无奈</a>。当年不是约定好了吗？你说你在奈何等我，为何今日我上穷碧穷到黄泉你都不在。你可知为践约我等了多久吗？曾听闻彼岸花的传说，花叶相恋千年。结果却是花开叶落，花开叶落。此名却是彼岸花，我放下一切在这等你。那怕天下顷覆，黄泉水干。也不易心。但为何这么久，都没你的消息。外间过了多少年，是千年、或万年，苍海为之桑田了吧。当年一念成魔，使天下顷覆。报应！一念间又等了如许年，外面曾传闻，你我的传说都曾神话吧。也是曾经的你我，想当年你我嬉戏于江南烟雨之中。你曾说过如有一天，所有一切了断。我们就归甲于此园中。我答应了你，却没想到大漠戈壁瀚海之中，那最后一战……落日、余晖、大漠、孤鹜，一怒而起，一念为魔。就是天下顷覆，众生皆亡。与我何关，佛劝又如何。他换不来你明眸的笑颜，那我就让这天地变色。山河皆亡为你陪葬！只是这么多年过去了，我也被压了这么多年。不能轮回之台，也不进九天之地。只能像孤魂一样徘徊，又走到这园林。只是昔日的繁华景色，今日只剩残壁断亘！故人你在何方，故人你知道，我在等你吗</p><p><br/></p>', '2019-10-31 14:48:20', '2019-11-05 21:12:32', 'xxxxxxxxxxxxxxxxxxxxxx', '13034003710', '13034003710@qq.com');
INSERT INTO `school` VALUES (14, '卧龙学校', '<p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">&nbsp; &nbsp; &nbsp; &nbsp;相爱相知中的你已经离我去了远方，我不知道远方那座城市的名字，那座城市没有我忆起你时的<a href=\"http://www.duwenzhang.com/huati/wennuan/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">那一种温暖</a>，守候无期的我只有在<a href=\"http://www.duwenzhang.com/huati/xiangsi/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">相思无眠</a>的日子里苦度时光，<a href=\"http://www.duwenzhang.com/huati/meili/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">美丽</a>的往事常常会触动我们<a href=\"http://www.duwenzhang.com/huati/xinling/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">年轻的心灵</a>！是你那来自远在远方的问候，常常抚慰着我一颗受伤的心。是谁说过：“爱情就像一面旗帜，在<a href=\"http://www.duwenzhang.com/huati/qingchun/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">青春</a>的城堡上高高飘扬。”我一直想知道这是哪位哲人说过的话！但我一直都无法知道，就好像我一直到现在无法知道你现在的处境一样。</p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　　我一直都相信缘份，相信生命中那一种冥冥之中的注定，正如我永远都相信你我那次美丽的邂逅来自与命运的安排。</p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　　春天来了，栽在我身边的那株绿色小植物吐出了新芽，不知你是否会为了我当初的<a href=\"http://www.duwenzhang.com/huati/chongdong/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">冲动</a>和莽撞而耿耿于怀？怀念过去，往事是一杯陈年的老酒，醉人醉已。当记忆成了一片片枯黄的落叶时，在那清风冷雨中，你是否能够承受那份你不该接受的无言结局呢？</p><p style=\"font-family: &quot;Microsoft YaHei&quot;; font-size: 14px; white-space: normal;\">　　为了告别昨日的无奈，我学会了<a href=\"http://www.duwenzhang.com/huati/yiwang/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">遗忘</a>，学会了忘记，如果说忘记仅仅是为了不再怀念不再<a href=\"http://www.duwenzhang.com/huati/shanggan/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">伤感</a>不再<a href=\"http://www.duwenzhang.com/huati/xintong/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">心痛</a>，不再<a href=\"http://www.duwenzhang.com/huati/sinian/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">思念</a>与<a href=\"http://www.duwenzhang.com/huati/qiangua/index1.html\" style=\"color: rgb(51, 51, 51); text-decoration-line: none;\">牵挂</a>的话，那么，我想记住恰恰是为了不再重复，对吗？</p><p><br/></p>', '2019-10-31 14:48:25', '2019-11-05 21:12:40', 'xxxxxxxxxxxxxxxxxxxxxx', '13034003710', '13034003710@qq.com');

-- ----------------------------
-- Table structure for sign
-- ----------------------------
DROP TABLE IF EXISTS `sign`;
CREATE TABLE `sign`  (
  `s_id` int(8) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `s_sex` varchar(4) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `s_age` int(4) NOT NULL,
  `s_sfz` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `s_jhr` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `s_tel` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sch_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `s_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`s_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 15 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sign
-- ----------------------------
INSERT INTO `sign` VALUES (14, 'www', '男', 12, '342222199803050456', 'www', '13034003334', '盘古小学', '2019-11-08 10:51:22', '2019-11-08 10:51:22', 'xxxxxxxxxxxxxxxxxxxxxxxxxxx');
INSERT INTO `sign` VALUES (3, '张三', '男', 24, '452222199803050435', '张大', '13034003710', '盘古小学', '2019-11-01 15:46:33', '2019-11-05 09:21:32', 'xxxxxxxxxxxxxxxxxxxxxxxxxxx');
INSERT INTO `sign` VALUES (4, '李四', '男', 21, '232222199803050436', '李大', '13034003710', '盘古小学', '2019-11-01 15:47:24', '2019-11-05 09:21:25', 'zzzzzzzzzzzzzzzzzzz');
INSERT INTO `sign` VALUES (5, '妞儿ya', '男', 8, '342222199803050438', 'nnn', '13034003334', '旭日学校', '2019-10-30 16:05:57', '2019-11-05 09:21:47', 'nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn');
INSERT INTO `sign` VALUES (6, 'qqq', '男', 12, '342222199803050431', 'QQQ', '13034003334', '旭日学校', '2019-11-02 10:17:25', '2019-11-05 09:21:11', 'null');
INSERT INTO `sign` VALUES (7, 'qqqqaa', '男', 21, '342222199807050342', 'dgdfg', '13034003710', '盘古小学', '2019-11-02 16:17:04', '2019-11-05 09:36:48', 'dsfddsfsdgffdg');
INSERT INTO `sign` VALUES (8, 'qqq', '男', 21, '342222199803050434', 'trtre', '13034003710', '唐河英才红枫校区', '2019-11-05 09:18:15', '2019-11-05 09:20:56', '11w1w');
INSERT INTO `sign` VALUES (9, 'asd', '男', 31, '342222199803050436', 'www', '13034003710', '盘古小学', '2019-11-05 15:00:01', '2019-11-05 21:41:22', 'xxxxxxxxxxxxxxxxxxxxxxxxxxx');
INSERT INTO `sign` VALUES (10, 'sad', '男', 32, '342222199803050437', '1w1w1w', '13034003710', '盘古小学', '2019-11-05 15:01:39', '2019-11-05 15:01:39', 'dsfdsf');
INSERT INTO `sign` VALUES (11, 'qqqq', '女', 23, '342222199807050315', 'dgdfg', '13034003710', '唐河英才学校', '2019-11-05 15:15:05', '2019-11-05 15:15:05', 'dsfddsfsdgffdg');
INSERT INTO `sign` VALUES (12, 'dsad', '女', 42, '342222199807050352', '423423', '13034003710', '盘古小学', '2019-11-05 17:46:37', '2019-11-05 17:46:37', 'dsfddsfsdgffdg');
INSERT INTO `sign` VALUES (13, '111', '男', 21, '342222199803050445', 'fdsf', '13034003710', '盘古小学', '2019-11-05 21:38:46', '2019-11-05 21:38:46', 'zzzzzzzzzzzzzzzzzzz');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `sch_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', 'admin@qq.com', NULL, '$2y$10$LOg3tN9PUDOIyv7XCoW1V.mbS8t3Gus4qnEH3HlwDAnU37.3JMxvi', 'EKdUGZPP74FlGYfKzRmZZcCsi2PFSn2uk5dCCuKcEma3BrgzNQkM527icj1C', '2019-11-01 10:35:45', '2019-11-08 10:43:21', '超级管理员');
INSERT INTO `users` VALUES (15, 's33', 's33@qq.com', NULL, '$2y$10$mYqQftdJrV2JYCEUqFUUROVcTxHBmVUKOQPU166n7.3QmCUCzpHMO', NULL, '2019-11-01 19:48:32', '2019-11-08 10:43:09', '示范学校');
INSERT INTO `users` VALUES (24, '1111', 'admin@1q.com', NULL, '$2y$10$sIHV.s82AZDEqWgY2tXM/u.0yFpntAnzjOyn0MIT1j/jBtocOwnDO', 'fJO1xemY5Gy7FPzIkqx4YmJrHvRb5v1F2Kx8AEWtNdMZEN2ace20BuEiRS4A', '2019-11-05 09:27:35', '2019-11-08 10:31:06', '唐河英才红枫校区');
INSERT INTO `users` VALUES (21, 's2教务处', 's2@163.com', NULL, '$2y$10$xEB4uUxgv0GAyixtr4LtPeWi3wsd7y1ZgyeeuQth2CaxQFbS4u0oG', 'BlJokKtAli0PcPtH0BC9qSszFj58Vg0KZWD0qtYY1ZlHJFfkfv1aVZyZegxp', '2019-11-02 15:51:26', '2019-11-05 09:36:39', '盘古小学');
INSERT INTO `users` VALUES (23, 'admin111', 'admin@qqq.com', NULL, '$2y$10$qlBIeN1p/I0FdxJKHZCp7.RkVLLJslBYXQyVWrHDX933YwkB4piAa', 'pMMp1QuVIavZHZgLXWoQBNWeUimkQL5G7CFcHQzE4XmaHMWB6PTp78PGal0b', '2019-11-05 09:26:40', '2019-11-08 10:53:46', '盘古小学');
INSERT INTO `users` VALUES (16, 's44', 's44@qq.com', NULL, '$2y$10$W5lDOdmEjwQpzgVnrMm7d.9CE288vFyTDgKZAnuKVtPMe37L2lgX.', NULL, '2019-11-01 19:49:02', '2019-11-05 09:32:20', '唐河英才学校');
INSERT INTO `users` VALUES (17, 's55', 's55@qq.com', NULL, '$2y$10$ifXBgV/oU1I9h90SCxzT2eHxJzKt85etmdSN/QJX1r270bPytWvQW', NULL, '2019-11-01 19:49:18', '2019-11-05 09:32:11', '示范学校');
INSERT INTO `users` VALUES (18, 's66', 's66@qq.com', NULL, '$2y$10$jHbrydlCLeBLcSqtDL6njuyFI9XcCLDacYodGEZYyYjilGdSlEJMq', NULL, '2019-11-01 19:49:46', '2019-11-05 09:32:02', '卧龙学校');
INSERT INTO `users` VALUES (19, 's77', 's77@qq.com', NULL, '$2y$10$zY5Itij/rRhpk8B/qAuAHuhUzBof4uIAn7.CJzw5zevCI3AIcfLt.', NULL, '2019-11-01 19:50:05', '2019-11-05 09:31:54', '书院学校');
INSERT INTO `users` VALUES (20, 's88', 's88@qq.com', NULL, '$2y$10$w9VdkudjFrQzXP7KGr9Jt.7NIwF/V9Eez1VJUwNhLICnjTUZcJ7R6', NULL, '2019-11-01 19:52:55', '2019-11-05 09:31:45', '唐河英才蒙氏小学');
INSERT INTO `users` VALUES (25, 'ffrf', 'admin@11q.com', NULL, '$2y$10$6oz6/fnSfTOapkvCddecH.aQXalF.1pBiW75pa8fFgL9UkadczuvC', NULL, '2019-11-08 10:50:45', '2019-11-08 10:51:01', '唐河英才红枫校区');

SET FOREIGN_KEY_CHECKS = 1;
