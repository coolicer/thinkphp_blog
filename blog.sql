-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 12 月 10 日 10:39
-- 服务器版本: 5.5.34-0ubuntu0.13.04.1
-- PHP 版本: 5.4.9-4ubuntu2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `blog`
--

-- --------------------------------------------------------

--
-- 表的结构 `think_post`
--

CREATE TABLE IF NOT EXISTS `think_post` (
  `id` smallint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `tag` varchar(50) NOT NULL,
  `artical_category` varchar(25) NOT NULL,
  `artical_property` varchar(25) NOT NULL,
  `author` varchar(10) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `think_post`
--

INSERT INTO `think_post` (`id`, `title`, `content`, `tag`, `artical_category`, `artical_property`, `author`, `create_time`) VALUES
(4, '案例：移动设备和桌面', '是否不希望在小屏幕设备上所有列都堆叠在一起？那就使用针对超小屏幕和中等屏幕设备所定义的class吧，即.col-xs-*、.col-md-*。请看下面的案例。', 'Bootstrap', 'default', '', 'lily', '2013-12-04 09:06:47'),
(5, '24省份去年收取社会抚养费近200亿元', '社会抚养费从未主动公开\r\n\r\n社会抚养费，早年被称为超生罚款或计划外生育罚款，与我国的计划生育制度伴生。\r\n\r\n2002年，国务院《社会抚养费征收管理办法》明确，社会抚养费是指为调节自然资源的利用和保护环境，适当补偿政府的社会事业公共投入的经费，而对不符合法定条件生育子女的公民征收的费用。\r\n\r\n根据这一定义，律师吴有水认为，社会抚养费应用于“补偿政府的社会事业公共投入”，其收支情况无疑应向社会公开。\r\n\r\n然而多年来，各级计生、财政部门从未主动向社会公开过社会抚养费的收支情况。今年9月，国家审计署首次明确表示，对社会抚养费关注度不够，近年来未组织过全面审计，也未能全面掌握这些资金底数。', '社会抚养费征收', 'default', '', 'lily', '2013-12-05 01:43:03'),
(6, '习近平晤拜登 重申涉藏涉台及识别区立场', '央视网消息：12月4日，国家主席习近平在人民大会堂同美国副总统拜登举行会谈。双方就中美关系及共同关心的国际和地区问题深入交换意见，一致认为，中美双方要加强对话、交流、合作，努力推进中美新型大国关系建设。\r\n\r\n习近平表示，今年我同奥巴马总统两次会晤一致同意努力构建不冲突不对抗、相互尊重、合作共赢的中美新型大国关系，明确了两国关系未来发展方向。近来，双方在双边、地区、全球各层面积极拓展协调与合作，推动两国关系取得了重要进展。\r\n\r\n习近平指出，当今世界并不安宁。中美在维护世界和平稳定、促进人类发展进步方面肩负共同责任，加强对话与合作是两国唯一正确选择。双方要牢牢把握两国关系正确方向不动摇，尊重彼此核心利益和重大关切，积极拓展务实合作，妥善处理敏感问题和分歧，确保中美关系持续健康稳定向前发展。\r\n\r\n习近平强调，中美双方要保持高层战略沟通，引领好两国关系，维护好、发展好中美战略与经济对话、人文交流高层磋商等机制，加强各层级交往。双方要保持两军密切交往和对话，推进传统和非传统安全领域合作，加强反恐、执法、防扩散等领域合作。\r\n\r\n习近平指出，经贸合作是中美关系的推进器。双方要拓展经贸、基础设施建设、城镇化、食品药品安全、地方等领域合作，争取启动一批大项目，加快推进双边投资协定谈判，开好第二十四届中美商贸联委会。希望美方放宽民用高技术物项对华出口。我们欢迎更多美国企业来华投资兴业，鼓励更多中国企业走出去。希望美方为中资企业赴美投资提供公平竞争环境。双方要继续通过双边渠道和多边机制加强宏观经济政策协调。中美都在努力向绿色低碳经济转型，可以将清洁能源、环境保护作为新的合作增长点，为全球应对气候变化、推进可持续发展作出积极贡献。\r\n\r\n拜登表示，美中关系是二十一世纪最重要的双边关系。美方赞赏习近平主席为推动美中关系体现出的战略远见和务实态度，积极致力于同中方一道，在相互尊重、相互信任、平等相待基础上，建设美中新型大国关系。这种关系充满希望和机遇，可以避免守成大国和新兴大国之间发生冲突的历史定律重演。我相信我们有能力实现这一目标。一年来，两国关系在双边及多边层面都取得了积极进展。美方对中共十八届三中全会作出全面深化改革的决定印象深刻，相信在习近平主席领导下，中国人民一定能够在建设伟大强国进程中不断迈上新高度。中国保持发展完全符合美国的利益。美方愿同中方完善各种机制，保持经常性对话和交往，加强务实合作，加强两军交流与合作，以建设性方式管控分歧，排除各种干扰，不使他们影响两国整体关系。美方希望同中方加强在重大国际和地区问题上沟通与合作，共同应对各种挑战。', '发展', 'default', '', 'lemon', '2013-12-05 02:09:24'),
(7, '中移动3G升4G不换号 iPhone年内免费用4G', '以下是中国移动公布的4G网络升级须知：\r\n\r\n1、USIM卡都是小卡，目前大部分的4G手机都支持小卡。如果你原来手机不是小卡，那建议你一定要保留好卡托，这样当你需要使用原来手机时，就不用再去营业厅换卡了。直接把USIM卡嵌入卡托，就可以在原来手机上使用了。\r\n\r\n2、4G手机可以使用3G或2G卡，4G的USIM卡也可以放到3G或2G手机里使用，但是都不能使用4G网络，只能使用3G或2G网络。\r\n\r\n3、在有4G信号的地方，手机信号格子上有“4G”字样。在没有4G信号的地方，手机信号格会显示2G或3G。\r\n\r\n4、目前还没有与手机号码绑定的4G套餐，执行的是原来3G套餐，按照3G套餐的资费使用。如果你原来3G套餐的流量很小，建议你悠着点用4G啊。\r\n\r\n5、移动老用户办理4G业务，不用登记更不用换号，还是使用原来的号码，但是记得带身份证去营业厅办理啊，虽然不登记，但是要验证。很快，中国移动就会正式推出4G套餐，而且肯定比3G的资费更加便宜。\r\n\r\n据悉，目前中国移动TD-LTE覆盖已经超过100个大中城市，基站数量超过20万，下一步将把覆盖城市扩展到300个以上。', '', 'default', '', 'lemon', '2013-12-05 02:10:19'),
(8, '置顶文章与非置顶文章的列表分离_金励君_新浪博客', '置顶文章与非置顶文章的列表分离_金励君_新浪博客\r\n置顶文章与非置顶文章的列表分离_金励君_新浪博客\r\n置顶文章与非置顶文章的列表分离_金励君_新浪博客', '', 'default', '', 'lemon', '2013-12-05 02:25:59'),
(9, 'php的文章置顶是如何做的- CSDN论坛- CSDN.NET', 'php的文章置顶是如何做的- CSDN论坛- CSDN.NET\r\nphp的文章置顶是如何做的- CSDN论坛- CSDN.NET', '', 'default', '', 'lemon', '2013-12-05 02:26:10'),
(10, 'wordpress置顶文章按需调用：全文输出或列表输出 ... - CSDN blog', 'wordpress置顶文章按需调用：全文输出或列表输出 ... - CSDN blog', '', 'default', '', 'lemon', '2013-12-05 02:26:25'),
(11, 'ThinkPHP验证码问题解决方法汇总_网志博客', '关于验证码无法显示或者显示为一个红叉，我被折腾了好几天，真的很郁闷。我在thinkphp官方论坛搜索了好多帖子都没有解决，最后发了一篇求助帖子“ thinkphp3.1顽固不化的验证码红叉！”，在这里感谢水平凡（ ... 验证码: 看不清楚请点击刷新验证码 ...', '', 'default', '', 'lily', '2013-12-06 02:11:11'),
(12, 'ThinkPHP 验证码详解及实例- 人生若只如初见的日志- 网易博客', 'blog.163.com/qiuxinke2006@126/blog/.../24885580201111172154964...‎\r\n2011年12月17日 - ThinkPHP 内置了验证码的支持，可以直接使用。 ... 点击验证码图片时，触发JavaScript changeVerify() 函数重新读取验证码，从而实现验证码刷新。', '', 'default', '', 'lily', '2013-12-06 02:11:28'),
(14, 'ThinkPHP框架，专注于WEB应用快速开发的最佳实践PHP开源框架', 'ThinkPHP框架- 是由上海顶想公司开发维护的MVC结构的开源PHP框架，遵循Apache2开源协议发布，是为了敏捷WEB应用开发和简化企业应用开发而诞生的。', '', 'default', '', 'lily', '2013-12-06 02:12:17');

-- --------------------------------------------------------

--
-- 表的结构 `think_upload`
--

CREATE TABLE IF NOT EXISTS `think_upload` (
  `id` smallint(20) NOT NULL AUTO_INCREMENT,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `think_upload`
--

INSERT INTO `think_upload` (`id`, `file`) VALUES
(4, '52a034bd1741d.gif'),
(5, '52a035cb79015.jpg'),
(6, '52a035e0c3249.jpg52a035e0c6872.gif'),
(7, '52a0360cbccb7.jpg,52a0360cc1f9a.png,52a0360cca069.jpg,'),
(8, '52a1891c7519f.jpg,'),
(9, '52a1894523af4.jpg,'),
(10, '52a18bc7b549a.jpg,52a18bc7c19a7.jpg,52a18bc7cd83a.jpg,52a18bc7da83f.jpg,'),
(11, '52a18c456c71c.jpg,52a18c4576dac.jpg,52a18c4581347.jpg,'),
(12, '52a18c5b1f885.jpg,52a18c5b2d0d1.jpg,52a18c5b39665.jpg,52a18c5b42497.jpg,52a18c5b4d09e.jpg,52a18c5b5b522.jpg,'),
(13, '52a18d41e6f08.jpg,52a18d42003d3.jpg,52a18d420d0b0.jpg,52a18d421bfb0.jpg,');

-- --------------------------------------------------------

--
-- 表的结构 `think_user`
--

CREATE TABLE IF NOT EXISTS `think_user` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `think_user`
--

INSERT INTO `think_user` (`id`, `username`, `email`, `create_time`, `password`) VALUES
(1, 'lemon', 'lemon@qq.com', '2013-12-02 08:14:47', '123123'),
(2, '123', 'coolicer@foxmail.com', '2013-12-02 08:13:48', '123'),
(3, 'aabb', '123@aaa.com', '2013-12-02 08:40:05', '123'),
(4, 'aabb', '123@aaa.com', '2013-12-02 08:51:49', '123'),
(5, 'Ryan123', 'coolicer@foxmail.com', '2013-12-03 01:45:54', '123'),
(6, 'lily', 'liyi@163.com', '2013-12-03 02:59:17', '123123'),
(7, '123aa', '123@qq.com', '2013-12-03 06:04:17', '123123'),
(8, 'yipiao', 'yi@yi.com', '2013-12-03 07:40:55', '123123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
