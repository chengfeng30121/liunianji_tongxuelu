set names 'utf8';
DROP TABLE IF EXISTS `ssnh_users`;
CREATE TABLE `ssnh_users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `daili` tinyint(1) DEFAULT '0',
  `vip` tinyint(1) DEFAULT '0',
  `vipstart` date DEFAULT NULL,
  `vipend` date DEFAULT NULL,
  `rmb` int(5) DEFAULT '0',
  `peie` tinyint(2) DEFAULT '1',
  `pwd` varchar(40) NOT NULL,
  `sid` varchar(50) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  `fuzhan` tinyint(1) DEFAULT '0',
  `login` tinyint(255) DEFAULT '1',
  `mail` varchar(100) DEFAULT NULL,
  `qq` varchar(255) DEFAULT '0',
  `phone` varchar(255) DEFAULT '0',
  `city` varchar(50) DEFAULT NULL,
  `regip` varchar(50) DEFAULT NULL,
  `lastip` varchar(50) DEFAULT NULL,
  `regtime` datetime DEFAULT NULL,
  `lasttime` datetime DEFAULT NULL,
  `ah` text,
  `zz` varchar(255) NOT NULL,
  `lxdh` varchar(255) NOT NULL,
   `tc` varchar(255) NOT NULL,
   `xz` varchar(255) NOT NULL,
   `sr` varchar(255) NOT NULL,
   `xm` varchar(255) NOT NULL,
   `ch` varchar(255) NOT NULL,
   `xb` varchar(255) NOT NULL,
   `xh` varchar(255) NOT NULL,
   `zw` varchar(255) NOT NULL,
   `ktc` varchar(255) NOT NULL,
   `gxqm` varchar(255) NOT NULL,
   `tj` varchar(255) NOT NULL,
   `xtj` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `ssnh_webconfigs`;
CREATE TABLE `ssnh_webconfigs` (
  `vkey` varchar(255) NOT NULL,
  `value` text,
  PRIMARY KEY (`vkey`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `ssnh_users` (`uid`, `user`, `daili`, `vip`, `vipstart`, `vipend`, `rmb`, `peie`, `pwd`, `sid`, `active`, `fuzhan`, `login`, `mail`, `qq`, `phone`, `city`, `regip`, `lastip`, `regtime`, `lasttime`, `ah`, `zz`, `lxdh`, `tc`, `xz`, `sr`, `xm`, `ch`, `xb`, `xh`, `zw`, `ktc`, `gxqm`, `tj`, `xtj`) VALUES
(1, 'admin', 0, 1, NULL, '2020-12-30', 9999, 127, '4d3ea8f0d1aa6fa07b6c0a5375645c48', '0b484609853c70cd87c8d1e3b2f5f34a', 9, 1, 1, '351244716@qq.com', '351244716', '15051619380', NULL, NULL, '111.121.85.149', NULL, '2016-05-02 20:21:47', '动漫', '贵州省贵阳市', '15051619380', 'IT', '狮子座', '3月31日', '余闻' , '余闻', '1', '11', '无', '下次一定比你强', '梦想是要有的，万一实现了呢？' , '全网最帅', '1');
INSERT INTO `ssnh_webconfigs` VALUES ('cronrand', '1234');
INSERT INTO `ssnh_webconfigs` VALUES ('regpeie', '1');
INSERT INTO `ssnh_webconfigs` VALUES ('zannet', '3');
INSERT INTO `ssnh_webconfigs` VALUES ('netnum', '200');
INSERT INTO `ssnh_webconfigs` VALUES ('mail_email', '');
INSERT INTO `ssnh_webconfigs` VALUES ('mail_pwd', '');
INSERT INTO `ssnh_webconfigs` VALUES ('mail_host', '');
INSERT INTO `ssnh_webconfigs` VALUES ('mail_port', '');
INSERT INTO `ssnh_webconfigs` VALUES ('do', 'set');
INSERT INTO `ssnh_webconfigs` VALUES ('price_1vip', '8');
INSERT INTO `ssnh_webconfigs` VALUES ('price_3vip', '20');
INSERT INTO `ssnh_webconfigs` VALUES ('price_6vip', '30');
INSERT INTO `ssnh_webconfigs` VALUES ('price_12vip', '50');
INSERT INTO `ssnh_webconfigs` VALUES ('price_1peie', '20');
INSERT INTO `ssnh_webconfigs` VALUES ('price_3peie', '40');
INSERT INTO `ssnh_webconfigs` VALUES ('price_5peie', '50');
INSERT INTO `ssnh_webconfigs` VALUES ('price_10peie', '66');
INSERT INTO `ssnh_webconfigs` VALUES ('submit', '确认修改');
INSERT INTO `ssnh_webconfigs` VALUES ('webfoot', 'All Right Reserved');
INSERT INTO `ssnh_webconfigs` VALUES ('webkey', '');
INSERT INTO `ssnh_webconfigs` VALUES ('web_quanquanjk', '');
INSERT INTO `ssnh_webconfigs` VALUES ('webname', '余闻同学录v3.2');
INSERT INTO `ssnh_webconfigs` VALUES ('webdomain', 'sq.34ban.top');
INSERT INTO `ssnh_webconfigs` VALUES ('webqq', '351244716');
INSERT INTO `ssnh_webconfigs` VALUES ('symb', '1');
INSERT INTO `ssnh_webconfigs` VALUES ('web_index_gg', '');
INSERT INTO `ssnh_webconfigs` VALUES ('web_control_gg', '');
INSERT INTO `ssnh_webconfigs` VALUES ('web_shop_gg', '');
INSERT INTO `ssnh_webconfigs` VALUES ('webfree', '1');
INSERT INTO `ssnh_webconfigs` VALUES ('price_1dvip', '1');
INSERT INTO `ssnh_webconfigs` VALUES ('regrmb', '1');
INSERT INTO `ssnh_webconfigs` VALUES ('web_rmb_gg', '');
INSERT INTO `ssnh_webconfigs` VALUES ('name', '余闻同学录v3.2');
INSERT INTO `ssnh_webconfigs` VALUES ('syyy', '351244716');
INSERT INTO `ssnh_webconfigs` VALUES ('bjys', '余闻同学纪念册v3.2');
INSERT INTO `ssnh_webconfigs` VALUES ('bjzy', '余闻同学纪念册v3.2');
INSERT INTO `ssnh_webconfigs` VALUES ('bjss', '余闻同学纪念册v3.2');
INSERT INTO `ssnh_webconfigs` VALUES ('wzgg', '此版本我要感谢似水年华的支持，没有他们的帮助，我的这个版本也无法完成。当然，毕竟这个程序是我一个人的，所以会有很多bug，我还是推荐你们使用似水的同学录');
INSERT INTO `ssnh_webconfigs` VALUES ('bjgg', '余闻同学纪念册v3.2');
INSERT INTO `ssnh_webconfigs` VALUES ('jhhd', '余闻同学纪念册v3.2');
INSERT INTO `ssnh_webconfigs` VALUES ('bjhd', '余闻同学纪念册v3.2');
INSERT INTO `ssnh_webconfigs` VALUES ('webmail', '351244716@qq.com');
INSERT INTO `ssnh_webconfigs` VALUES ('webphone', '15051619380');
INSERT INTO `ssnh_webconfigs` VALUES ('webaddress', '江苏省苏州市');
INSERT INTO `ssnh_webconfigs` VALUES ('sfbfq', '1');
INSERT INTO `ssnh_webconfigs` VALUES ('bjmm', '26');
INSERT INTO `ssnh_webconfigs` VALUES ('zc', '1');
INSERT INTO `ssnh_webconfigs` VALUES ('qqjk', 'http://lqq.25ak.com/quan.php?jx=');
INSERT INTO `ssnh_webconfigs` VALUES ('smusic', 'http://api.qq-admin.cn/?mod=QQMusicJs&qq=');
INSERT INTO `ssnh_webconfigs` VALUES ('zxyy', 'ff0efda626436595165d733f77c7d6870bc7bbe4802caa3edaadc3d0a07a073b');
INSERT INTO `ssnh_webconfigs` VALUES ('gfqq', 'http://shang.qq.com/wpa/qunwpa?idkey=d9d7110cc76428fd831fbaa450bc43373705ee497f903589b5487608b35f2e6a');
INSERT INTO `ssnh_webconfigs` VALUES ('spvid', 'u00139g552o');
INSERT INTO `ssnh_webconfigs` VALUES ('dlzc', '余');
INSERT INTO `ssnh_webconfigs` VALUES ('webbq', '王者-余闻');
INSERT INTO `ssnh_webconfigs` VALUES ('sqq', 'http://www.xzfuli.cn/index.php?url=');
INSERT INTO `ssnh_webconfigs` VALUES ('sqwz', 'http://sq.34ban.top');
INSERT INTO `ssnh_webconfigs` VALUES ('yx3', '游戏3');
INSERT INTO `ssnh_webconfigs` VALUES ('yx4', '游戏4');
INSERT INTO `ssnh_webconfigs` VALUES ('yx3wl', '#');
INSERT INTO `ssnh_webconfigs` VALUES ('yx4wl', '#');
INSERT INTO `ssnh_webconfigs` VALUES ('ywzy', '无');
INSERT INTO `ssnh_webconfigs` VALUES ('sxzy', '无');
INSERT INTO `ssnh_webconfigs` VALUES ('yyzy', '无');
INSERT INTO `ssnh_webconfigs` VALUES ('wlzy', '无');
INSERT INTO `ssnh_webconfigs` VALUES ('hxzy', '无');
INSERT INTO `ssnh_webconfigs` VALUES ('lszy', '无');
INSERT INTO `ssnh_webconfigs` VALUES ('zzzy', '无');
INSERT INTO `ssnh_webconfigs` VALUES ('bzsj', '1970-1-1 0：0：0');
INSERT INTO `ssnh_webconfigs` (`vkey`, `value`) VALUES ('web_ifreg', '1');
INSERT INTO `ssnh_webconfigs` (`vkey`, `value`) VALUES ('web_iflogin', '1');
DROP TABLE IF EXISTS `ssnh_xc`;
CREATE TABLE `ssnh_xc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dz` varchar(255) NOT NULL,
  `ms` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `ssnh_lyb`;
CREATE TABLE `ssnh_lyb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qq` text,
  `user` text,
  `info` text,
  `time` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
