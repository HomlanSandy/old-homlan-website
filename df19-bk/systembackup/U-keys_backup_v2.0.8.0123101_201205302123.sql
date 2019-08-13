DROP TABLE IF EXISTS `adspalyimg`;
CREATE TABLE `adspalyimg` (
  `adsimg_id` int(11) NOT NULL auto_increment,
  `adsimg_locaiton` varchar(200) NOT NULL,
  `adsimg_url` varchar(200) NOT NULL,
  `adsimg_text` varchar(200) NOT NULL,
  `winopen_type` tinyint(4) NOT NULL default '0',
  `info_state` tinyint(4) NOT NULL default '1',
  PRIMARY KEY  (`adsimg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `adspalyimg` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `article_id` int(11) NOT NULL auto_increment,
  `article_title` varchar(200) NOT NULL,
  `articlecat_id` int(11) NOT NULL,
  `articlecat_rank` int(11) NOT NULL default '1',
  `article_post` int(11) NOT NULL,
  `membercat_id` int(11) NOT NULL,
  `info_state` int(11) NOT NULL default '1',
  `article_date_start` varchar(20) NOT NULL,
  `article_date_stop` varchar(20) NOT NULL,
  `article_file_name` varchar(200) NOT NULL,
  `article_file_url` varchar(200) NOT NULL,
  `article_text` text NOT NULL,
  `order` int(11) NOT NULL,
  `article_author` varchar(200) NOT NULL,
  `article_authormail` varchar(200) NOT NULL,
  `article_sourceurl` varchar(200) NOT NULL,
  `createuser_id` int(11) NOT NULL,
  `createuser_date` varchar(200) NOT NULL,
  `edituser_id` int(11) NOT NULL,
  `edituser_date` varchar(200) NOT NULL,
  PRIMARY KEY  (`article_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `article` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `articlecat`;
CREATE TABLE `articlecat` (
  `articlecat_id` int(11) NOT NULL auto_increment,
  `articlecat_na` varchar(200) NOT NULL,
  `articlecat_text` text NOT NULL,
  `parent_id` int(11) NOT NULL default '0',
  `articlecat_type` int(11) NOT NULL default '1',
  `info_state` int(11) NOT NULL default '1',
  `order` int(11) NOT NULL,
  PRIMARY KEY  (`articlecat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `articlecat` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `commend_info`;
CREATE TABLE `commend_info` (
  `cmdinfo_id` int(10) NOT NULL auto_increment,
  `commend_id` varchar(10) default NULL,
  `infos_id` int(11) NOT NULL,
  `cmdinfo_order` int(11) NOT NULL,
  `createuser_id` int(11) NOT NULL,
  `createuser_date` datetime NOT NULL,
  `edituser_id` int(11) NOT NULL,
  `edituser_date` datetime NOT NULL,
  PRIMARY KEY  (`cmdinfo_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `commend_info` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `commend_module`;
CREATE TABLE `commend_module` (
  `commend_id` varchar(10) NOT NULL default '',
  `commend_title` varchar(200) NOT NULL,
  `commend_startdate` date NOT NULL,
  `commend_enddate` date NOT NULL,
  `command_show_type` tinyint(4) NOT NULL default '1',
  `command_rownum` tinyint(4) NOT NULL default '1',
  `command_recordmax` tinyint(4) default '0',
  `command_more` varchar(20) NOT NULL,
  `command_md_type` varchar(20) NOT NULL default 'common',
  `marquee_height` smallint(6) NOT NULL default '230',
  `marquee_speed` tinyint(4) NOT NULL default '50',
  `commend_order` int(11) NOT NULL,
  `info_state` tinyint(4) NOT NULL default '1',
  `createuser_id` int(11) NOT NULL,
  `createuser_date` datetime NOT NULL,
  `edituser_id` int(11) NOT NULL,
  `edituser_date` datetime NOT NULL,
  PRIMARY KEY  (`commend_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `commend_module` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `demand_list`;
CREATE TABLE `demand_list` (
  `demand_id` varchar(200) NOT NULL,
  `demand_date` varchar(200) NOT NULL,
  `infos_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `demand_na` varchar(200) NOT NULL,
  `demand_mail` varchar(200) NOT NULL,
  `demand_tel` varchar(200) NOT NULL,
  `demand_address` varchar(200) NOT NULL,
  `demand_state` int(11) NOT NULL,
  `demand_text` text NOT NULL,
  `create_date` varchar(50) NOT NULL,
  `create_user` varchar(20) NOT NULL,
  `create_ip` varchar(20) NOT NULL,
  `alter_date` varchar(50) NOT NULL,
  `alter_user` varchar(20) NOT NULL,
  `alter_ip` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `demand_list` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `discount_list`;
CREATE TABLE `discount_list` (
  `discount_id` int(11) NOT NULL auto_increment,
  `discount_type` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `discount` float NOT NULL,
  `discount_star` varchar(50) NOT NULL,
  `discount_end` varchar(50) NOT NULL,
  `discount_state` int(11) NOT NULL,
  `create_date` varchar(50) NOT NULL,
  `create_user` varchar(20) NOT NULL,
  `create_ip` varchar(20) NOT NULL,
  `alter_date` varchar(50) NOT NULL,
  `alter_user` varchar(20) NOT NULL,
  `alter_ip` varchar(20) NOT NULL,
  PRIMARY KEY  (`discount_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `discount_list` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `discuss_data`;
CREATE TABLE `discuss_data` (
  `discuss_id` int(11) NOT NULL auto_increment,
  `discuss_title` varchar(200) NOT NULL,
  `discusstype_id` int(11) NOT NULL,
  `discuss_post` int(11) NOT NULL default '1',
  `membercat_id` int(11) NOT NULL,
  `info_state` int(11) NOT NULL default '1',
  `discuss_date_stop` varchar(20) NOT NULL,
  `discuss_date_start` varchar(20) NOT NULL,
  `discuss_file_name` varchar(200) NOT NULL,
  `discuss_file_url` varchar(200) NOT NULL,
  `discuss_text` text NOT NULL,
  `order` int(11) NOT NULL,
  `createuser_id` int(11) NOT NULL,
  `post_na` varchar(200) NOT NULL,
  `post_email` varchar(50) NOT NULL,
  `post_ip` varchar(20) NOT NULL,
  `createuser_date` varchar(50) NOT NULL,
  `edituser_id` int(11) NOT NULL,
  `edituser_date` varchar(50) NOT NULL,
  PRIMARY KEY  (`discuss_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `discuss_data` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `discuss_reply`;
CREATE TABLE `discuss_reply` (
  `discussreply_id` int(11) NOT NULL auto_increment,
  `discuss_id` int(11) NOT NULL,
  `info_state` int(11) NOT NULL default '1',
  `discussreply_file_name` varchar(200) NOT NULL,
  `discussreply_file_url` varchar(200) NOT NULL,
  `discussreply_text` text NOT NULL,
  `createuser_id` int(11) NOT NULL,
  `createuser_na` varchar(200) NOT NULL,
  `createuser_mail` varchar(50) NOT NULL,
  `createuser_ip` varchar(20) NOT NULL,
  `createuser_date` varchar(50) NOT NULL,
  PRIMARY KEY  (`discussreply_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `discuss_reply` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `discuss_type`;
CREATE TABLE `discuss_type` (
  `discusstype_id` int(11) NOT NULL auto_increment,
  `discusstype_na` varchar(200) NOT NULL,
  `discuss_date_start` date NOT NULL,
  `discuss_date_stop` date NOT NULL,
  `showipornot` varchar(2) NOT NULL default '0',
  `homewebpost` varchar(2) NOT NULL,
  `permitfile` varchar(2) NOT NULL default '0',
  `info_state` int(11) NOT NULL default '1',
  `order` int(11) NOT NULL,
  `createuser_id` int(11) NOT NULL,
  `createuser_date` datetime NOT NULL,
  `edituser_id` int(11) NOT NULL,
  `edituser_date` datetime NOT NULL,
  PRIMARY KEY  (`discusstype_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `discuss_type` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `fare_config`;
CREATE TABLE `fare_config` (
  `fare_id` int(11) NOT NULL auto_increment,
  `fare_set` text NOT NULL,
  PRIMARY KEY  (`fare_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `fare_config` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `fee_config`;
CREATE TABLE `fee_config` (
  `fee_set` int(11) NOT NULL,
  `fee_fix` int(11) NOT NULL,
  `fee_ratio` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `fee_config` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `footer`;
CREATE TABLE `footer` (
  `footer_countent` text NOT NULL,
  `edituser_id` int(11) NOT NULL,
  `edituser_date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `footer` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `frm_column_value`;
CREATE TABLE `frm_column_value` (
  `frmlist_id` int(11) NOT NULL,
  `frm_create_date` datetime NOT NULL,
  `form_char1` text NOT NULL,
  `form_char2` text NOT NULL,
  `form_char3` text NOT NULL,
  `form_char4` text NOT NULL,
  `form_char5` text NOT NULL,
  `form_char6` text NOT NULL,
  `form_char7` text NOT NULL,
  `form_char8` varchar(200) NOT NULL,
  `form_char9` text NOT NULL,
  `form_char10` text NOT NULL,
  `form_char11` varchar(200) NOT NULL,
  `form_char12` varchar(200) NOT NULL,
  `form_char13` varchar(200) NOT NULL,
  `form_char14` varchar(200) NOT NULL,
  `form_char15` varchar(200) NOT NULL,
  `form_char16` varchar(200) NOT NULL,
  `form_char17` varchar(200) NOT NULL,
  `form_char18` varchar(200) NOT NULL,
  `form_char19` varchar(200) NOT NULL,
  `form_char20` varchar(200) NOT NULL,
  `form_char21` varchar(200) NOT NULL,
  `form_char22` varchar(200) NOT NULL,
  `form_char23` varchar(200) NOT NULL,
  `form_char24` varchar(200) NOT NULL,
  `form_char25` varchar(200) NOT NULL,
  `form_char26` varchar(200) NOT NULL,
  `form_char27` varchar(200) NOT NULL,
  `form_char28` varchar(200) NOT NULL,
  `form_char29` varchar(200) NOT NULL,
  `form_char30` varchar(200) NOT NULL,
  `form_text1` text NOT NULL,
  `form_text2` text NOT NULL,
  `form_text3` text NOT NULL,
  `form_text4` text NOT NULL,
  `form_text5` text NOT NULL,
  `form_text6` text NOT NULL,
  `form_text7` text NOT NULL,
  `form_text8` text NOT NULL,
  `form_text9` text NOT NULL,
  `form_text10` text NOT NULL,
  `form_text11` text NOT NULL,
  `form_text12` text NOT NULL,
  `form_text13` text NOT NULL,
  `form_text14` text NOT NULL,
  `form_text15` text NOT NULL,
  `form_text16` text NOT NULL,
  `form_text17` text NOT NULL,
  `form_text18` text NOT NULL,
  `form_text19` text NOT NULL,
  `form_text20` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `frm_column_value` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `frmcat`;
CREATE TABLE `frmcat` (
  `frmcat_id` int(11) NOT NULL auto_increment,
  `frmcat_na` varchar(200) NOT NULL,
  `info_state` tinyint(4) NOT NULL default '1',
  PRIMARY KEY  (`frmcat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `frmcat` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `frmcolumns`;
CREATE TABLE `frmcolumns` (
  `frmlist_id` int(11) NOT NULL,
  `list_order` tinyint(4) NOT NULL,
  `td_id` int(11) NOT NULL auto_increment,
  `td_row` tinyint(4) NOT NULL,
  `td_col` tinyint(4) NOT NULL,
  `td_input_na` varchar(200) NOT NULL,
  `td_input_field` varchar(20) NOT NULL,
  `td_input_type` varchar(20) NOT NULL,
  `td_input_size` tinyint(4) NOT NULL,
  `td_input_line` tinyint(4) NOT NULL,
  `td_input_value` varchar(200) NOT NULL,
  `input_check_type` varchar(20) NOT NULL,
  `input_check_null` tinyint(4) NOT NULL default '1',
  `input_check_only` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`td_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `frmcolumns` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `frmlist`;
CREATE TABLE `frmlist` (
  `frmlist_id` int(11) NOT NULL auto_increment,
  `frm_md_id` varchar(10) NOT NULL,
  `frmlist_create_time` varchar(20) NOT NULL,
  `frmlist_na` varchar(200) NOT NULL,
  `frmcat_id` int(11) NOT NULL,
  `frmlist_text1` text NOT NULL,
  `frmlist_text2` text NOT NULL,
  `frmlist_memo` text NOT NULL,
  `frmlist_button` varchar(200) NOT NULL,
  `frmlist_reply` text NOT NULL,
  `frmlist_notify` varchar(20) NOT NULL,
  `frmlist_notify_email` text NOT NULL,
  `frm_form` text NOT NULL,
  `info_state` tinyint(4) NOT NULL default '1',
  PRIMARY KEY  (`frmlist_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `frmlist` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `func_group`;
CREATE TABLE `func_group` (
  `group_id` int(11) NOT NULL auto_increment,
  `group_na` varchar(200) NOT NULL,
  `sys_default` varchar(3) NOT NULL default 'usr',
  `info_state` tinyint(4) NOT NULL default '1',
  PRIMARY KEY  (`group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

LOCK TABLES `func_group` WRITE;
INSERT INTO func_group VALUES('1','admin','sys','1');

UNLOCK TABLES;

DROP TABLE IF EXISTS `func_list`;
CREATE TABLE `func_list` (
  `list_id` int(10) unsigned NOT NULL auto_increment,
  `list_na` varchar(200) NOT NULL,
  `list_url` varchar(200) NOT NULL,
  `list_order` tinyint(3) unsigned default '1',
  `func_id` int(10) unsigned NOT NULL,
  `info_state` tinyint(4) default '1',
  PRIMARY KEY  (`list_id`)
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=utf8;

LOCK TABLES `func_list` WRITE;
INSERT INTO func_list VALUES('2','分類清單','category.php','1','1','1');
INSERT INTO func_list VALUES('3','新增資訊明細','infoslist.php?act=add','2','1','1');
INSERT INTO func_list VALUES('4','資訊明細列表','infoslist.php','3','1','1');
INSERT INTO func_list VALUES('6','會員資料列表','userslist.php','4','2','1');
INSERT INTO func_list VALUES('8','新增會員','userslist.php?act=add','3','2','1');
INSERT INTO func_list VALUES('15','網站設定','webconfig.php','1','8','1');
INSERT INTO func_list VALUES('18','功能分類','mainfunc.php ','5','9','1');
INSERT INTO func_list VALUES('19','功能清單','funclist.php','6','9','1');
INSERT INTO func_list VALUES('20','群組權限設定','group_funclist.php','4','9','1');
INSERT INTO func_list VALUES('21','帳號管理','func_manager.php','2','9','1');
INSERT INTO func_list VALUES('23','表單分類列表','frmcat.php','1','5','1');
INSERT INTO func_list VALUES('24','表單管理','frmlist.php','2','5','1');
INSERT INTO func_list VALUES('28','閱讀權限','usersgroup.php','1','2','1');
INSERT INTO func_list VALUES('30','會員註冊條款','usersregister.php','5','2','1');
INSERT INTO func_list VALUES('56','前台樣板套用','themes_select.php','1','16','1');
INSERT INTO func_list VALUES('32','表單紀錄查詢','frmrecordlist.php','3','5','1');
INSERT INTO func_list VALUES('54','郵件伺服器設定','mailsetting.php','3','8','1');
INSERT INTO func_list VALUES('35','主題分類','discusstype.php','1','12','1');
INSERT INTO func_list VALUES('36','主題列表','discusslist.php','2','12','1');
INSERT INTO func_list VALUES('40','計數器','syscountmt.php','5','8','1');
INSERT INTO func_list VALUES('55','會員登記項目','usrconfig.php','4','8','1');
INSERT INTO func_list VALUES('46','網站連結列表','websitelink.php','3','10','1');
INSERT INTO func_list VALUES('52','首頁廣告輪播','adsplay.php','3','17','1');
INSERT INTO func_list VALUES('48','頁首連結分類','uplinkcat.php','1','10','1');
INSERT INTO func_list VALUES('49','頁首連結明細','uplinklist.php','2','10','1');
INSERT INTO func_list VALUES('50','群組管理','func_group.php','3','9','1');
INSERT INTO func_list VALUES('67','密碼修改','func_pwd.php','1','9','1');
INSERT INTO func_list VALUES('53','頁面底部設定','footer.php','2','18','1');
INSERT INTO func_list VALUES('57','樣板上傳','themes_upload.php','2','16','1');
INSERT INTO func_list VALUES('58','頁首自定義設定','header_cust.php','1','18','1');
INSERT INTO func_list VALUES('59','序號註冊','lcsregister.php','2','8','1');
INSERT INTO func_list VALUES('63','預設頁面設定','module_position.php','3','18','1');
INSERT INTO func_list VALUES('60','推薦模組','commendmodulelist.php','1','17','1');
INSERT INTO func_list VALUES('61','自訂模組','selfmodulelist.php','2','17','1');
INSERT INTO func_list VALUES('66','個別頁面設定','module_position_all.php','4','18','1');
INSERT INTO func_list VALUES('64','投票資料列表','votelist.php','1','19','1');
INSERT INTO func_list VALUES('65','投票結果查詢','voteresultlist.php','2','19','1');
INSERT INTO func_list VALUES('68','備份資料庫','database.php','6','8','1');
INSERT INTO func_list VALUES('69','新增商品明細','productlist.php?act=add','4','1','1');
INSERT INTO func_list VALUES('70','商品明細列表','productlist.php','5','1','1');
INSERT INTO func_list VALUES('71','折扣等級','usersrank.php','2','2','1');
INSERT INTO func_list VALUES('72','線上更新','sysupload.php','7','8','1');
INSERT INTO func_list VALUES('73','資訊(商品)顯示設定','infosconfig.php','11','8','1');
INSERT INTO func_list VALUES('74','商品設定','productconfig.php','21','8','1');
INSERT INTO func_list VALUES('77','付款設定','paymentconfig.php','22','8','1');
INSERT INTO func_list VALUES('86','商品折扣','discount_productlist.php','1','20','1');
INSERT INTO func_list VALUES('79','出貨設定','shipconfig.php','23','8','1');
INSERT INTO func_list VALUES('81','訂單列表','orderlist.php','1','21','1');
INSERT INTO func_list VALUES('83','需求單列表','demandlist.php','1','22','1');
INSERT INTO func_list VALUES('84','運費設定','fareconfig.php','24','8','1');
INSERT INTO func_list VALUES('85','手續費設定','feeconfig.php','25','8','1');
INSERT INTO func_list VALUES('87','會員名單匯入','usersimport.php','6','2','1');
INSERT INTO func_list VALUES('88','分類瀏覽排行','batch_catvisitors.php','1','23','1');
INSERT INTO func_list VALUES('89','明細瀏覽排行',' batch_listvisitors.php ','2','23','1');
INSERT INTO func_list VALUES('90','管理者記錄','records_management.php','7','9','1');

UNLOCK TABLES;

DROP TABLE IF EXISTS `func_main`;
CREATE TABLE `func_main` (
  `func_id` int(10) unsigned NOT NULL auto_increment,
  `func_na` varchar(200) NOT NULL,
  `func_describe` varchar(200) NOT NULL,
  `order` tinyint(4) default '1',
  `info_state` tinyint(4) default '1',
  PRIMARY KEY  (`func_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

LOCK TABLES `func_main` WRITE;
INSERT INTO func_main VALUES('1','資訊(商品)管理','','1','1');
INSERT INTO func_main VALUES('2','會員管理','','6','1');
INSERT INTO func_main VALUES('19','投票管理','','8','1');
INSERT INTO func_main VALUES('5','表單管理','','7','1');
INSERT INTO func_main VALUES('8','參數設定','','11','1');
INSERT INTO func_main VALUES('9','系統管理','','15','1');
INSERT INTO func_main VALUES('10','頁首連結','','13','1');
INSERT INTO func_main VALUES('16','樣板管理','','14','1');
INSERT INTO func_main VALUES('12','討論區','','9','1');
INSERT INTO func_main VALUES('21','訂單管理','','3','1');
INSERT INTO func_main VALUES('20','商品折扣管理','','2','1');
INSERT INTO func_main VALUES('17','模組管理','','5','1');
INSERT INTO func_main VALUES('18','版面設定','','12','1');
INSERT INTO func_main VALUES('22','需求單管理','','4','1');
INSERT INTO func_main VALUES('23','批次作業管理','','10','1');

UNLOCK TABLES;

DROP TABLE IF EXISTS `func_manager`;
CREATE TABLE `func_manager` (
  `login_id` varchar(50) NOT NULL,
  `login_pwd` varchar(50) NOT NULL,
  `manager_id` tinyint(4) NOT NULL auto_increment,
  `manager_na` varchar(50) NOT NULL,
  `manager_tel` varchar(50) NOT NULL,
  `manager_email` varchar(50) NOT NULL,
  `group_id` tinyint(4) NOT NULL,
  `info_state` tinyint(4) NOT NULL default '1',
  `sys_default` varchar(3) NOT NULL default 'usr',
  PRIMARY KEY  (`manager_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

LOCK TABLES `func_manager` WRITE;
INSERT INTO func_manager VALUES('admin','c480a2c721b7418f4455a3423c2bfbcb','1','admin','','','1','1','sys');
INSERT INTO func_manager VALUES('subnet5','fc9e2023ea951f7eef27540b0829674d','2','subnet5','02-87801555','allen@subnet.com.tw','1','1','usr');

UNLOCK TABLES;

DROP TABLE IF EXISTS `good_category`;
CREATE TABLE `good_category` (
  `gds_cat_id` int(11) NOT NULL auto_increment,
  `gds_cat_na` varchar(200) NOT NULL,
  `gds_simple_text` text NOT NULL,
  `gds_detail_text` text NOT NULL,
  `gds_text_type` int(11) NOT NULL,
  `gds_date_limit` varchar(20) NOT NULL,
  `info_type` int(11) NOT NULL,
  `gds_order_no` int(11) NOT NULL,
  `create_user` varchar(20) NOT NULL,
  `create_date` varchar(20) NOT NULL,
  `create_ip` varchar(20) NOT NULL,
  `alter_user` varchar(20) NOT NULL,
  `alter_date` varchar(20) NOT NULL,
  `alter_ip` varchar(20) NOT NULL,
  PRIMARY KEY  (`gds_cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `good_category` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `goods_info`;
CREATE TABLE `goods_info` (
  `gds_id` int(11) NOT NULL auto_increment,
  `gds_na` varchar(200) NOT NULL,
  `gds_simple_text1` varchar(200) NOT NULL,
  `gds_simple_text2` varchar(200) NOT NULL,
  `gds_detail_text` text NOT NULL,
  `gds_org_price` int(11) NOT NULL,
  `gds_sell_price` int(11) NOT NULL,
  `gds_no` varchar(200) NOT NULL,
  `gds_pic_small` varchar(200) NOT NULL,
  `gds_pic_big` varchar(200) NOT NULL,
  `gds_pic_3d` varchar(200) NOT NULL,
  `gds_brand_id` int(11) NOT NULL,
  `gds_type_id` int(11) NOT NULL,
  `gds_weight` int(11) NOT NULL,
  `gds_stocks` int(11) NOT NULL,
  `gds_stocks_warm` int(11) NOT NULL,
  `gds_show_type` int(11) NOT NULL,
  `info_type` int(11) NOT NULL,
  PRIMARY KEY  (`gds_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `goods_info` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `group_list`;
CREATE TABLE `group_list` (
  `list_id` tinyint(4) NOT NULL,
  `group_id` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `group_list` WRITE;
INSERT INTO group_list VALUES('2','1');
INSERT INTO group_list VALUES('3','1');
INSERT INTO group_list VALUES('4','1');
INSERT INTO group_list VALUES('6','1');
INSERT INTO group_list VALUES('8','1');
INSERT INTO group_list VALUES('15','1');
INSERT INTO group_list VALUES('18','1');
INSERT INTO group_list VALUES('19','1');
INSERT INTO group_list VALUES('20','1');
INSERT INTO group_list VALUES('21','1');
INSERT INTO group_list VALUES('23','1');
INSERT INTO group_list VALUES('24','1');
INSERT INTO group_list VALUES('28','1');
INSERT INTO group_list VALUES('30','1');
INSERT INTO group_list VALUES('56','1');
INSERT INTO group_list VALUES('32','1');
INSERT INTO group_list VALUES('54','1');
INSERT INTO group_list VALUES('35','1');
INSERT INTO group_list VALUES('36','1');
INSERT INTO group_list VALUES('40','1');
INSERT INTO group_list VALUES('55','1');
INSERT INTO group_list VALUES('46','1');
INSERT INTO group_list VALUES('52','1');
INSERT INTO group_list VALUES('48','1');
INSERT INTO group_list VALUES('49','1');
INSERT INTO group_list VALUES('50','1');
INSERT INTO group_list VALUES('67','1');
INSERT INTO group_list VALUES('53','1');
INSERT INTO group_list VALUES('57','1');
INSERT INTO group_list VALUES('58','1');
INSERT INTO group_list VALUES('59','1');
INSERT INTO group_list VALUES('63','1');
INSERT INTO group_list VALUES('60','1');
INSERT INTO group_list VALUES('61','1');
INSERT INTO group_list VALUES('66','1');
INSERT INTO group_list VALUES('64','1');
INSERT INTO group_list VALUES('65','1');
INSERT INTO group_list VALUES('68','1');
INSERT INTO group_list VALUES('69','1');
INSERT INTO group_list VALUES('70','1');
INSERT INTO group_list VALUES('71','1');
INSERT INTO group_list VALUES('72','1');
INSERT INTO group_list VALUES('73','1');
INSERT INTO group_list VALUES('74','1');
INSERT INTO group_list VALUES('77','1');
INSERT INTO group_list VALUES('86','1');
INSERT INTO group_list VALUES('79','1');
INSERT INTO group_list VALUES('81','1');
INSERT INTO group_list VALUES('83','1');
INSERT INTO group_list VALUES('84','1');
INSERT INTO group_list VALUES('85','1');
INSERT INTO group_list VALUES('87','1');
INSERT INTO group_list VALUES('88','1');
INSERT INTO group_list VALUES('89','1');
INSERT INTO group_list VALUES('90','1');

UNLOCK TABLES;

DROP TABLE IF EXISTS `header_cust`;
CREATE TABLE `header_cust` (
  `header_text` text NOT NULL,
  `edituser_id` tinyint(4) NOT NULL,
  `edituser_date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `header_cust` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `homeweb_page`;
CREATE TABLE `homeweb_page` (
  `page_id` varchar(20) NOT NULL,
  `page_na` varchar(200) NOT NULL,
  `page_tpl` varchar(200) NOT NULL,
  `container` varchar(20) default '950px',
  `left` varchar(20) default '200px',
  `center` varchar(20) default '550px',
  `right` varchar(20) default '200px',
  `create_user` varchar(20) default NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY  (`page_id`),
  UNIQUE KEY `page_id` (`page_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `homeweb_page` WRITE;
INSERT INTO homeweb_page VALUES('1','首頁','index','480px','0px','480px','0px','admin','2011-12-23 20:03:38');
INSERT INTO homeweb_page VALUES('2','資訊分類頁面','catalog','100%','0%','100%','0%','admin','2011-12-23 19:54:03');
INSERT INTO homeweb_page VALUES('3','資訊明細頁面','catalog_detail','100%','0%','100%','0%','admin','2011-12-23 19:54:17');
INSERT INTO homeweb_page VALUES('4','推薦分類頁面','news','100%','0%','100%','0%','admin','2011-12-23 19:54:42');
INSERT INTO homeweb_page VALUES('5','搜尋結果頁面','search','950px','200px','750px','0px','admin','2010-09-20 11:59:44');
INSERT INTO homeweb_page VALUES('6','購物流程頁面','cart','100%','0%','100%','0%','admin','2010-09-27 17:18:07');
INSERT INTO homeweb_page VALUES('7','會員資訊頁面','user','100%','0%','100%','0%','admin','2011-12-23 19:55:08');

UNLOCK TABLES;

DROP TABLE IF EXISTS `infos_category`;
CREATE TABLE `infos_category` (
  `cats_id` int(11) NOT NULL auto_increment,
  `cats_na` varchar(200) NOT NULL,
  `simple_text` text NOT NULL,
  `detail_text` text NOT NULL,
  `text_type` smallint(6) NOT NULL default '2',
  `info_state` int(11) NOT NULL default '1',
  `gds_order_no` int(11) NOT NULL default '1',
  `parent_id` int(11) NOT NULL,
  `cat_keyword` varchar(200) NOT NULL,
  `cat_show` int(11) NOT NULL default '1',
  `visitors` int(11) NOT NULL,
  `visitors_date` varchar(20) NOT NULL,
  `read_group` varchar(200) NOT NULL,
  `create_user` varchar(20) NOT NULL,
  `create_date` varchar(20) NOT NULL,
  `create_ip` varchar(20) NOT NULL,
  `alter_user` varchar(20) NOT NULL,
  `alter_date` varchar(20) NOT NULL,
  `alter_ip` varchar(20) NOT NULL,
  `cats_type` int(11) NOT NULL default '0',
  PRIMARY KEY  (`cats_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

LOCK TABLES `infos_category` WRITE;
INSERT INTO infos_category VALUES('1','A1','A1','','2','1','1','0','','1','4','','0','1','2011-12-23 19:56:43','60.250.156.136','','','','0');
INSERT INTO infos_category VALUES('2','B1','B1','','2','1','1','0','','1','0','','0','1','2011-12-23 19:57:07','60.250.156.136','','','','0');

UNLOCK TABLES;

DROP TABLE IF EXISTS `infos_config`;
CREATE TABLE `infos_config` (
  `data_id` int(11) NOT NULL auto_increment,
  `parent_id` varchar(200) NOT NULL,
  `col_name` varchar(200) NOT NULL,
  `input_type` varchar(200) NOT NULL,
  `store_range` varchar(200) NOT NULL,
  `store_folder` varchar(200) NOT NULL,
  `col_value` varchar(200) NOT NULL,
  `col_unit` varchar(20) NOT NULL,
  `order_num` varchar(200) NOT NULL,
  `info_state` tinyint(4) NOT NULL default '1',
  PRIMARY KEY  (`data_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

LOCK TABLES `infos_config` WRITE;
INSERT INTO infos_config VALUES('1','','info_default_pic','file','','/hyfiles/no_picture.jpg','no_picture.gif','','','1');
INSERT INTO infos_config VALUES('2','','smallpic_width','text','','','80','','','1');
INSERT INTO infos_config VALUES('3','','smallpic_height','text','','','100','','','1');
INSERT INTO infos_config VALUES('4','','bigpic_width','text','','','200','','','1');
INSERT INTO infos_config VALUES('5','','bigpic_height','text','','','200','','','1');
INSERT INTO infos_config VALUES('6','','infocat_list_record','text','','','9','','','1');
INSERT INTO infos_config VALUES('13','','infoindex_list_record','text','','','9','','','1');
INSERT INTO infos_config VALUES('7','','infocat_order_type','radio','posttime,updatetime,number','','number','','','1');
INSERT INTO infos_config VALUES('8','','infocat_show_type','radio','image,photo,text','','image','','','1');
INSERT INTO infos_config VALUES('9','','infodetail_dispaly_type','radio','imageup,imageleft,imageright','','imageleft','','','1');
INSERT INTO infos_config VALUES('10','','article_list_record','select','1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30','','','','','1');
INSERT INTO infos_config VALUES('11','','article_title_range','select','1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30','','','','','1');
INSERT INTO infos_config VALUES('12','','infocat_show_simple','radio','1,0','','1','','','1');
INSERT INTO infos_config VALUES('14','','infoindex_order_type','radio','index_posttime,index_updatetime,index_number','','index_number','','','1');
INSERT INTO infos_config VALUES('15','','infoindex_show_simple','radio','1,0','','0','','','1');
INSERT INTO infos_config VALUES('16','','infocat_list_row_record','select','1,2,3,4,5,6','','3','','','1');
INSERT INTO infos_config VALUES('17','','infoindex_list_row_record','select','1,2,3,4,5,6','','3','','','1');

UNLOCK TABLES;

DROP TABLE IF EXISTS `infos_files`;
CREATE TABLE `infos_files` (
  `data_id` int(11) NOT NULL auto_increment,
  `infos_id` int(11) NOT NULL,
  `files_na` varchar(200) NOT NULL,
  `files_text` varchar(200) NOT NULL,
  `files_url` varchar(200) NOT NULL,
  PRIMARY KEY  (`data_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `infos_files` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `infos_list`;
CREATE TABLE `infos_list` (
  `infos_id` int(11) NOT NULL auto_increment,
  `infos_cusrid` varchar(200) NOT NULL,
  `infos_na` varchar(200) NOT NULL,
  `infos_simple_text1` text NOT NULL,
  `infos_simple_text2` text NOT NULL,
  `infos_detail_text` text NOT NULL,
  `infos_pic_small` varchar(200) NOT NULL,
  `infos_pic_big` varchar(200) NOT NULL,
  `infos_order` int(11) NOT NULL,
  `infos_state` int(11) NOT NULL,
  `homeweb` smallint(6) default '1',
  `visitors` int(11) NOT NULL,
  `visitors_date` varchar(20) NOT NULL,
  `infos_date_start` varchar(20) NOT NULL,
  `infos_date_stop` varchar(20) NOT NULL,
  `create_date` varchar(50) NOT NULL,
  `create_user` varchar(20) NOT NULL,
  `create_ip` varchar(20) NOT NULL,
  `alter_date` varchar(50) NOT NULL,
  `alter_user` varchar(20) NOT NULL,
  `alter_ip` varchar(20) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `price_fix` int(10) NOT NULL,
  `price_sale` int(10) NOT NULL,
  `discount_rank_groups` text NOT NULL,
  `discount_groups` text NOT NULL,
  `stock` int(10) NOT NULL,
  `stock_safe` int(10) NOT NULL,
  `infos_type` int(1) NOT NULL default '0',
  PRIMARY KEY  (`infos_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `infos_list` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `infos_others`;
CREATE TABLE `infos_others` (
  `infos_id` int(11) NOT NULL,
  `other_id` int(11) NOT NULL,
  `other_order` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `infos_others` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `infos_page`;
CREATE TABLE `infos_page` (
  `data_id` int(11) NOT NULL auto_increment,
  `infos_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `page_text` text NOT NULL,
  PRIMARY KEY  (`data_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `infos_page` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `infoscat_list`;
CREATE TABLE `infoscat_list` (
  `cat_id` int(11) NOT NULL,
  `infos_id` int(11) NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `infoscat_list` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `inside_module`;
CREATE TABLE `inside_module` (
  `md_id` varchar(20) NOT NULL,
  `md_na` varchar(200) NOT NULL,
  `md_tpl` varchar(200) NOT NULL,
  `md_state` int(11) NOT NULL default '1',
  `md_order` int(11) NOT NULL,
  `create_user` varchar(20) default NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY  (`md_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `inside_module` WRITE;
INSERT INTO inside_module VALUES('A1','廣告輪播','modules/commercial','1','1','admin','2010-02-28 16:58:04');
INSERT INTO inside_module VALUES('A2','資訊選單','modules/catalog_menu','1','2','admin','2010-02-28 16:58:04');
INSERT INTO inside_module VALUES('A3','訪客人數','modules/counter','1','3','admin','2010-02-28 16:58:04');
INSERT INTO inside_module VALUES('A4','資訊搜尋功能','modules/header_search','1','4','admin','2010-02-28 16:58:04');
INSERT INTO inside_module VALUES('A5','外部超連結','modules/outside_link','1','5','admin','2010-02-28 16:58:04');
INSERT INTO inside_module VALUES('A6','圖文顯示區','modules/show_list','1','6','admin','2010-02-28 16:58:04');
INSERT INTO inside_module VALUES('A7','會員登入區','modules/user_login','1','7','admin','2010-02-28 16:58:04');
INSERT INTO inside_module VALUES('A8','推薦頁嵌模組','modules/news_list','1','8','admin','2010-02-28 16:58:04');
INSERT INTO inside_module VALUES('A9','投票模組','modules/vote_list','0','9','admin','2010-02-28 16:58:04');
INSERT INTO inside_module VALUES('A10','會員功能清單','modules/user_menu','1','7','admin','2010-12-08 13:57:07');

UNLOCK TABLES;

DROP TABLE IF EXISTS `lcs_register`;
CREATE TABLE `lcs_register` (
  `prd_sn` varchar(50) NOT NULL,
  `prd_usn` varchar(50) NOT NULL,
  `prd_udate` varchar(20) NOT NULL,
  `create_date` varchar(20) NOT NULL,
  `prd_type` varchar(20) NOT NULL,
  `prd_version` varchar(20) NOT NULL,
  `verify` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `lcs_register` WRITE;
INSERT INTO lcs_register VALUES('AAA535-G2H2LM-GZPFJ9','52M-9H6-42V','2013-05','','BEG','v2.0.8.0123101','');

UNLOCK TABLES;

DROP TABLE IF EXISTS `manager_log`;
CREATE TABLE `manager_log` (
  `log_time` varchar(20) NOT NULL,
  `log_ip` varchar(50) NOT NULL,
  `log_func` varchar(200) NOT NULL,
  `log_operate` varchar(200) NOT NULL,
  `log_content` varchar(200) NOT NULL,
  `login_id` varchar(50) NOT NULL,
  `manager_id` int(11) NOT NULL,
  `manager_na` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `manager_log` WRITE;
INSERT INTO manager_log VALUES('2012-05-30 21:19:46','211.20.77.221','webconfig.php','edit','','admin','1','admin');

UNLOCK TABLES;

DROP TABLE IF EXISTS `module_position`;
CREATE TABLE `module_position` (
  `md_id` varchar(20) NOT NULL,
  `page_id` varchar(20) NOT NULL,
  `page_position` varchar(20) NOT NULL,
  `vertical_order` int(11) NOT NULL,
  `create_user` varchar(20) default NULL,
  `create_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `module_position` WRITE;
INSERT INTO module_position VALUES('A2','1','center','1','admin','2011-12-23 20:03:38');

UNLOCK TABLES;

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `news_id` int(11) NOT NULL auto_increment,
  `news_title` varchar(200) NOT NULL,
  `newscat_id` int(11) NOT NULL,
  `news_post` int(11) NOT NULL,
  `membercat_id` int(11) NOT NULL,
  `info_state` int(11) NOT NULL default '1',
  `news_date_start` varchar(20) NOT NULL,
  `news_date_stop` varchar(20) NOT NULL,
  `news_file_name` varchar(200) NOT NULL,
  `news_file_url` varchar(200) NOT NULL,
  `news_text` text NOT NULL,
  `order` int(11) NOT NULL,
  `createuser_id` int(11) NOT NULL,
  `createuser_date` varchar(200) NOT NULL,
  `edituser_id` int(11) NOT NULL,
  `edituser_date` varchar(200) NOT NULL,
  PRIMARY KEY  (`news_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `news` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `newscat`;
CREATE TABLE `newscat` (
  `newscat_id` int(11) NOT NULL auto_increment,
  `newscat_na` varchar(200) NOT NULL,
  `newscat_text` varchar(200) NOT NULL,
  `info_state` int(11) NOT NULL default '1',
  `order` int(11) NOT NULL,
  PRIMARY KEY  (`newscat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `newscat` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `order_list`;
CREATE TABLE `order_list` (
  `order_id` varchar(200) NOT NULL,
  `order_date` varchar(200) NOT NULL,
  `order_data` text NOT NULL,
  `order_total` int(11) NOT NULL,
  `order_price` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `receive_na` varchar(200) NOT NULL,
  `receive_mail` varchar(200) NOT NULL,
  `receive_tel` varchar(200) NOT NULL,
  `receive_address` varchar(200) NOT NULL,
  `receive_date` varchar(200) NOT NULL,
  `order_state` int(11) NOT NULL,
  `payment_mode` int(11) NOT NULL,
  `payment_state` int(11) NOT NULL,
  `payment_text` text NOT NULL,
  `ship_mode` int(11) NOT NULL,
  `ship_state` int(11) NOT NULL,
  `ship_text` text NOT NULL,
  `create_date` varchar(50) NOT NULL,
  `create_user` varchar(20) NOT NULL,
  `create_ip` varchar(20) NOT NULL,
  `alter_date` varchar(50) NOT NULL,
  `alter_user` varchar(20) NOT NULL,
  `alter_ip` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `order_list` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `payment_config`;
CREATE TABLE `payment_config` (
  `payment_id` int(11) NOT NULL auto_increment,
  `payment_na` varchar(200) NOT NULL,
  `fare_set` int(11) NOT NULL default '1',
  `fee_set` int(11) NOT NULL default '1',
  `payment_order` int(11) NOT NULL,
  `info_state` int(11) NOT NULL default '1',
  `payment_detail` text NOT NULL,
  PRIMARY KEY  (`payment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

LOCK TABLES `payment_config` WRITE;
INSERT INTO payment_config VALUES('1','匯款','1','0','1','1','');
INSERT INTO payment_config VALUES('2','貨到付款','1','1','2','1','');
INSERT INTO payment_config VALUES('3','自取','0','0','3','1','');

UNLOCK TABLES;

DROP TABLE IF EXISTS `product_config`;
CREATE TABLE `product_config` (
  `data_id` int(11) NOT NULL auto_increment,
  `parent_id` varchar(200) NOT NULL,
  `col_name` varchar(200) NOT NULL,
  `input_type` varchar(200) NOT NULL,
  `store_range` varchar(200) NOT NULL,
  `store_folder` varchar(200) NOT NULL,
  `col_value` varchar(200) NOT NULL,
  `col_unit` varchar(20) NOT NULL,
  `order_num` varchar(200) NOT NULL,
  `info_state` tinyint(4) NOT NULL default '1',
  PRIMARY KEY  (`data_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

LOCK TABLES `product_config` WRITE;
INSERT INTO product_config VALUES('1','','discount_set','radio','user,sys,off','','sys','','','1');
INSERT INTO product_config VALUES('2','','demand_set','radio','1,0','','1','','','1');
INSERT INTO product_config VALUES('3','','stock_set','radio','1,0','','1','','','1');
INSERT INTO product_config VALUES('4','','price_alerts','radio','1,0','','1','','','1');
INSERT INTO product_config VALUES('5','','rate','text','','','50','','','1');
INSERT INTO product_config VALUES('6','','demand_login','radio','1,0','','1','','','1');
INSERT INTO product_config VALUES('7','','demand_notify','checkbox','sys,usr,other','','','','','1');
INSERT INTO product_config VALUES('8','','demand_notify_mail','text','','','','','','1');
INSERT INTO product_config VALUES('9','','order_notify','checkbox','sys,usr,other','','','','','1');
INSERT INTO product_config VALUES('10','','order_notify_mail','text','','','','','','1');

UNLOCK TABLES;

DROP TABLE IF EXISTS `self_module`;
CREATE TABLE `self_module` (
  `selfcmd_id` varchar(200) NOT NULL default '',
  `selfcmd_title` varchar(200) NOT NULL,
  `selfcmd_startdate` date NOT NULL,
  `selfcmd_enddate` date NOT NULL,
  `selfcmd_content` text NOT NULL,
  `selfcmd_order` int(11) default NULL,
  `home_position` int(11) NOT NULL default '0',
  `createuser_id` int(11) NOT NULL,
  `createuser_date` datetime NOT NULL,
  `edituser_id` int(11) NOT NULL,
  `edituser_date` datetime NOT NULL,
  `info_state` tinyint(4) NOT NULL default '1',
  PRIMARY KEY  (`selfcmd_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `self_module` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `ship_config`;
CREATE TABLE `ship_config` (
  `ship_id` int(11) NOT NULL auto_increment,
  `ship_na` varchar(200) NOT NULL,
  `ship_order` int(11) NOT NULL,
  `info_state` int(11) NOT NULL default '1',
  `ship_detail` text NOT NULL,
  PRIMARY KEY  (`ship_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `ship_config` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `smtp_setting`;
CREATE TABLE `smtp_setting` (
  `smtp_server` varchar(100) NOT NULL,
  `smtp_port` int(11) NOT NULL,
  `smtp_userid` varchar(50) NOT NULL,
  `smtp_passwd` varchar(50) NOT NULL,
  `smtp_reply_mail` varchar(100) NOT NULL,
  `smtp_from` varchar(100) NOT NULL,
  `smtp_fromna` varchar(50) NOT NULL,
  `edituser_id` varchar(20) NOT NULL,
  `edituser_date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `smtp_setting` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `syscountmt`;
CREATE TABLE `syscountmt` (
  `count_open` tinyint(4) NOT NULL default '1',
  `count_visit` int(4) NOT NULL default '0',
  `count_style` tinyint(4) NOT NULL default '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `syscountmt` WRITE;
INSERT INTO syscountmt VALUES('1','4','3');

UNLOCK TABLES;

DROP TABLE IF EXISTS `temp_log`;
CREATE TABLE `temp_log` (
  `log_time` varchar(20) NOT NULL,
  `log_ip` varchar(50) NOT NULL,
  `log_path` varchar(200) NOT NULL,
  `login_id` varchar(50) NOT NULL,
  `manager_id` int(11) NOT NULL,
  `manager_na` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `temp_log` WRITE;
INSERT INTO temp_log VALUES('2012-05-30 21:19:18','211.20.77.221','/home/manager/df19/html/df19/hmanager/index.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:19:18','211.20.77.221','/home/manager/df19/html/df19/hmanager/index.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:19:18','211.20.77.221','/home/manager/df19/html/df19/hmanager/index.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:19:18','211.20.77.221','/home/manager/df19/html/df19/hmanager/index.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:19:18','211.20.77.221','/home/manager/df19/html/df19/hmanager/index.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:19:18','211.20.77.221','/home/manager/df19/html/df19/hmanager/main.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:19:36','211.20.77.221','/home/manager/df19/html/df19/hmanager/webconfig.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:19:42','211.20.77.221','/home/manager/df19/html/df19/hmanager/webconfig.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:19:46','211.20.77.221','/home/manager/df19/html/df19/hmanager/webconfig.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:19:46','211.20.77.221','/home/manager/df19/html/df19/hmanager/webconfig.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:19:47','211.20.77.221','/home/manager/df19/html/df19/hmanager/webconfig.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:19:51','211.20.77.221','/home/manager/df19/html/df19/hmanager/webconfig.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:20:02','211.20.77.221','/home/manager/df19/html/df19/hmanager/sysupload.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:20:05','211.20.77.221','/home/manager/df19/html/df19/hmanager/sysupload.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:20:36','211.20.77.221','/home/manager/df19/html/df19/hmanager/sysupload.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:20:40','211.20.77.221','/home/manager/df19/html/df19/hmanager/sysupload.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:21:32','211.20.77.221','/home/manager/df19/html/df19/hmanager/sysupload.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:21:59','211.20.77.221','/home/manager/df19/html/df19/hmanager/sysupload.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:23:10','211.20.77.221','/home/manager/df19/html/df19/hmanager/sysupload.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:19:18','211.20.77.221','/home/manager/df19/html/df19/hmanager/index.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:19:18','211.20.77.221','/home/manager/df19/html/df19/hmanager/login.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:19:05','211.20.77.221','/home/manager/df19/html/df19/hmanager/lcsregister.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:23:41','211.20.77.221','/home/manager/df19/html/df19/hmanager/sysupload.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:18:44','211.20.77.221','/home/manager/df19/html/df19/hmanager/lcsregister.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:18:45','211.20.77.221','/home/manager/df19/html/df19/hmanager/lcsregister.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:18:46','211.20.77.221','/home/manager/df19/html/df19/hmanager/lcsregister.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:18:46','211.20.77.221','/home/manager/df19/html/df19/hmanager/lcsregister.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:18:53','211.20.77.221','/home/manager/df19/html/df19/hmanager/lcsregister.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:18:55','211.20.77.221','/home/manager/df19/html/df19/hmanager/lcsregister.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:18:55','211.20.77.221','/home/manager/df19/html/df19/hmanager/lcsregister.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:18:55','211.20.77.221','/home/manager/df19/html/df19/hmanager/lcsregister.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:19:00','211.20.77.221','/home/manager/df19/html/df19/hmanager/lcsregister.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:19:01','211.20.77.221','/home/manager/df19/html/df19/hmanager/lcsregister.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:19:02','211.20.77.221','/home/manager/df19/html/df19/hmanager/lcsregister.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:19:02','211.20.77.221','/home/manager/df19/html/df19/hmanager/lcsregister.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:19:05','211.20.77.221','/home/manager/df19/html/df19/hmanager/lcsregister.php','admin','1','admin');
INSERT INTO temp_log VALUES('2012-05-30 21:23:36','211.20.77.221','/home/manager/df19/html/df19/hmanager/sysupload.php','admin','1','admin');

UNLOCK TABLES;

DROP TABLE IF EXISTS `themes`;
CREATE TABLE `themes` (
  `themes_id` int(11) NOT NULL auto_increment,
  `themes_na` varchar(200) NOT NULL,
  `sys_default` varchar(3) NOT NULL default 'usr',
  `is_show` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`themes_id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

LOCK TABLES `themes` WRITE;
INSERT INTO themes VALUES('1','default','sys','1');
INSERT INTO themes VALUES('2','green','sys','0');
INSERT INTO themes VALUES('4','orange','sys','0');
INSERT INTO themes VALUES('3','red','sys','0');
INSERT INTO themes VALUES('8','gray','sys','0');
INSERT INTO themes VALUES('5','fashion','sys','0');
INSERT INTO themes VALUES('6','pure','sys','0');
INSERT INTO themes VALUES('7','simple','sys','0');
INSERT INTO themes VALUES('9','rainbow','sys','0');

UNLOCK TABLES;

DROP TABLE IF EXISTS `uplinkcat`;
CREATE TABLE `uplinkcat` (
  `uplinkcat_id` int(11) NOT NULL auto_increment,
  `uplinkcat_na` varchar(200) NOT NULL,
  `uplinkcat_url` varchar(200) NOT NULL,
  `sys_detault` varchar(5) NOT NULL default 'usr',
  `order_no` tinyint(4) NOT NULL default '1',
  `winopen_type` tinyint(4) NOT NULL default '0',
  `info_state` tinyint(4) NOT NULL default '1',
  PRIMARY KEY  (`uplinkcat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

LOCK TABLES `uplinkcat` WRITE;
INSERT INTO uplinkcat VALUES('1','首頁','index.php','sys','1','0','0');
INSERT INTO uplinkcat VALUES('2','最新消息','news.php','sys','3','0','0');
INSERT INTO uplinkcat VALUES('3','討論區','board.php','sys','4','0','0');
INSERT INTO uplinkcat VALUES('4','後台管理','../hmanager/index.php','sys','4','1','0');

UNLOCK TABLES;

DROP TABLE IF EXISTS `uplinklist`;
CREATE TABLE `uplinklist` (
  `uplink_id` int(11) NOT NULL auto_increment,
  `uplink_na` varchar(200) NOT NULL,
  `uplinkcat_id` int(11) NOT NULL,
  `winopen_type` tinyint(4) NOT NULL default '0',
  `linkurl_type` varchar(200) NOT NULL,
  `infolist_id` int(11) NOT NULL,
  `infocat_id` int(11) NOT NULL,
  `form_id` int(4) NOT NULL,
  `other_url` varchar(200) NOT NULL,
  `info_state` tinyint(4) NOT NULL default '1',
  PRIMARY KEY  (`uplink_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `uplinklist` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `user_register`;
CREATE TABLE `user_register` (
  `register_content` text NOT NULL,
  `register_default` text NOT NULL,
  `info_state` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `user_register` WRITE;
INSERT INTO user_register VALUES('<p>&nbsp;</p>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>1. 認知與接受條款<br />\nEZPORTAL股份有限公司(以下簡稱「EZPORTAL」)係依據本服務條款提供EZPORTAL（http://www.XXXX.com.tw）服務 (以下簡稱「本服務」)。當您完成EZPORTAL之會員註冊手續、或開始使用本服務時，即表示您已閱讀、瞭解並同意接受本服務條款之所有內容。EZPORTAL公司有權於任何時間修改或變更本約定書之內容，建議您隨時注意該等修改或變更。您於任何修改或變更後繼續使用本服務時，視為您已閱讀、瞭解並同意接受該等修改或變更。 若您為未滿二十歲之未成年人，應於您的家長（或監護人）閱讀、瞭解並同意本約定書之所有內容及其後修改變更後，方得註冊為會員、使用或繼續使用本服務。當您使用或繼續使用EZPORTAL時，即推定您的家長（或監護人）已閱讀、瞭解並同意接受本約定書之所有內容及其後修改變更。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>2. 您的註冊義務<br />\n為了能使用本服務，您同意以下事項：</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>依本服務註冊表之提示提供您本人正確、最新的資料，且無重覆註冊登錄等情事。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>即時維持並更新您個人資料，確保其正確性，以獲取最佳之服務。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>若您提供任何錯誤或不實的資料、或未按指示提供資料、或欠缺必要之資料時，EZPORTAL有權不經事先通知，逕行暫停或終止您的帳號，並拒絕您使用本服務之全部或一部。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>3. EZPORTAL隱私權政策<br />\n關於您的會員註冊以及其他特定資料依EZPORTAL「<span>隱私權政策」受到保護與規範。</span></div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>4. 會員帳號、密碼及安全<br />\n完成本服務的登記程序之後，您自行設定之會員帳號及密碼，為維持密碼及帳號之機密安全，是您的責任，任何依照規定方法輸入會員帳號及密碼與登入資料一致時，無論是否由本人親自輸入，均將視為會員本人所使用。利用該密碼及帳號所進行的一切行動，您將負完全的責任。您並同意以下事項：</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>您的密碼或帳號遭到盜用或有其他任何安全問題發生時，您將立即通知EZPORTAL。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>每次連線完畢，均結束您的帳號使用。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>您的帳號、密碼及會員權益均僅供您個人使用及享有，不得轉借、轉讓他人或與他人合用。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>帳號及密碼遭盜用、不當使用或其他EZPORTAL無法辯識是否為本人親自使用之情況時，EZPORTAL對此所致之損害，概不負責。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>5. 兒童及青少年之保護<br />\n為確保兒童及青少年使用網路的安全，並避免隱私權受到侵犯，家長（或監護人）應盡到下列義務： 未滿十二歲之兒童使用本服務時，應全程在旁陪伴，十二歲以上未滿十八歲之青少年使用本服務前亦應斟酌是否給予同意。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>6. 使用者的守法義務及承諾<br />\n您承諾絕不為任何非法目的或以任何非法方式使用本服務，並承諾遵守中華民國相關法規及一切使用網際網路之國際慣例。您若係中華民國以外之使用者，並同意遵守所屬國家或地域之法令。您同意並保證不得利用本服務從事侵害他人權益或違法之行為，包括但不限於：</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>公布或傳送任何誹謗、侮辱、具威脅性、攻擊性、不雅、猥褻、不實、違反公共秩序或善良風俗或其他不法之文字、圖片或任何形式的檔案</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>侵害或毀損EZPORTAL或他人名譽、隱私權、營業秘密、商標權、著作權、專利權、其他智慧財產權及其他權利</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>違反依法律或契約所應負之保密義務</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>冒用他人名義使用本服務</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>傳輸或散佈電腦病毒</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>從事未經EZPORTAL事前授權的商業行為</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>刊載、傳輸、發送垃圾郵件、連鎖信、違法或未經EZPORTAL許可之多層次傳銷訊息及廣告等；或儲存任何侵害他人智慧財產權或違反法令之資料</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>對本服務其他用戶或第三人產生困擾、不悅或違反一般網路禮節致生反感之行為</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>其他不符本服務所提供的使用目的之行為或EZPORTAL有正當理由認為不適當之行為</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>7. EZPORTAL得依實際執行情形，增加、修改或終止相關活動，並選擇最適方式告知會員。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>8. 於發生下列情形之一時，EZPORTAL有權可以停止、中斷提供本服務：</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>EZPORTAL網站電子通信設備進行必要之保養及施工時</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>發生突發性之電子通信設備故障時</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>EZPORTAL網站申請之電子通信服務被停止，無法提供服務時</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>由於天災等不可抗力之因素或其他不可歸責於EZPORTAL致使EZPORTAL網站無法提供服務時</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>9. 交易行為<br />\n您同意使用本服務訂購產品時，於EZPORTAL通知確認交易成立前，EZPORTAL仍保有不接受訂單或取消出貨之權利。您向EZPORTAL發出訂購通知後，系統將自動發出接受通知，但此通知並非訂單確認通知，關於交易成立與否EZPORTAL將另行告知。<br />\n您若於使用本服務訂購產品後倘任意退換貨、取消訂單、或有任何EZPORTAL認為不適當而造成EZPORTAL作業上之困擾或損害之行為，EZPORTAL均可視情況採取拒絕交易或永久取消會員資格辦理。若您訂購之產品若屬於以下情形：（１）預購類商品（２）商品頁顯示無庫存（３）須向供應商調貨（４）轉由廠商出貨，因商品交易特性之故，倘商品缺絕、或廠商因故無法順利供貨之情況下，您同意EZPORTAL得視情況取消或修改交易（訂單）內容、或延遲交貨時間，並選擇以最適方式告知。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>10. 責任之限制與排除<br />\n您使用本服務瀏覽到的所有廣告內容、文字與圖片之說明、展示樣品或其他銷售資訊，均由各該廣告商、產品與服務的供應商所設計與提出。您對於廣告之正確性與可信度應自行斟酌與判斷。EZPORTAL僅接受委託予以刊登，不對前述廣告負擔保責任。 本服務所提供之各項功能，均依該功能當時之現況提供使用，EZPORTAL對於其效能、速度、完整性、可靠性、安全性、正確性等，皆不負擔任何明示或默示之擔保責任。 EZPORTAL並不保證本服務之網頁、伺服器、網域等所傳送的電子郵件或其內容不會含有電腦病毒等有害物；亦不保證郵件、檔案或資料之傳輸儲存均正確無誤不會斷線和出錯等，因各該郵件、檔案或資料傳送或儲存失敗、遺失或錯誤等所致之損害，EZPORTAL不負賠償責任。 您同意於使用本服務過程中所有資料記錄，均以EZPORTAL資料庫所儲存之電子資料為準，如有糾紛或訴訟，並以該電子資料為認定標準。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>11. 智慧財產權的保護<br />\nEZPORTAL所使用之軟體或程式、網站上所有內容，包括但不限於著作、圖片、檔案、資訊、資料、網站架構、網站畫面的安排、網頁設計，均由EZPORTAL或其他權利人依法擁有其智慧財產權，包括但不限於商標權、專利權、著作權、營業秘密與專有技術等。任何人不得逕自使用、修改、重製、公開播送、改作、散布、發行、公開發表、進行還原工程、解編或反向組譯。若您欲引用或轉載前述軟體、程式或網站內容，必須依法取得EZPORTAL或其他權利人的事前書面同意。尊重智慧財產權是您應盡的義務，如有違反，您應對EZPORTAL負損害賠償責任（包括但不限於訴訟費用及律師費用等）。<br />\n在尊重他人智慧財產權之原則下，會員同意在使用EZPORTAL之服務時，不作侵害他人智慧財產權之行為。<br />\n若會員有涉及重覆侵權之情事，EZPORTAL可暫停全部或部份之服務，或逕自以取消會員帳號之方式處理。<br />\n若有發現智慧財產權遭侵害之情事，請將所遭侵權之情形及聯絡方式，並附具真實陳述及擁有合法智慧財產權之聲明，並以下列方式聯絡EZPORTAL：<br />\n<b>以電子郵件</b><b>(E-mail)</b><b>寄送至：</b><b><u> XXXX@XXX.com.tw</u></b> (請注意！此為限定用途之信箱，非關侵權事項通知之信件寄送至此將不獲受理，EZPORTAL會員有任何疑問請至<span>客服中心詢問</span>)</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>12. 您對EZPORTAL之授權<br />\n對於會員所登錄或留存之個人資料，會員同意EZPORTAL網站得於合理之範圍內蒐集、處理、保存、傳遞及使用該等資料，以提供使用者其他資訊或服務、或作成會員統計資料、或進行關於網路行為之調查或研究，或為任何之合法使用。 若您無合法權利得授權他人使用、修改、重製、公開播送、改作、散布、發行、公開發表某資料，並將前述權利轉授權第三人，請勿擅自將該資料上載、傳送、輸入或提供至EZPORTAL。任何資料一經您上載、傳送、輸入或提供至EZPORTAL時，視為您已允許EZPORTAL無條件使用、修改、重製、公開播送、改作、散布、發行、公開發表該等資料，並得將前述權利轉授權他人，您對此絕無異議。您並應保證EZPORTAL使用、修改、重製、公開播送、改作、散布、發行、公開發表、轉授權該等資料，不致侵害任何第三人之智慧財產權，否則應對EZPORTAL負損害賠償責任（包括但不限於訴訟費用及律師費用等）。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>13. 特別授權事項<br />\n因使用本服務所提供之網路交易或活動，可能須透過宅配或貨運業者始能完成貨品(或贈品等)之配送或取回，因此，您同意並授權EZPORTAL得視該次網路交易或活動之需求及目的，將由您所提供且為配送所必要之個人資料(如收件人姓名、配送地址、連絡電話等)，提供予宅配或貨運業者，以利完成該次貨品(或贈品等)之配送、取回。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>14. 拒絕或終止您的使用<br />\n您同意EZPORTAL得基於維護交易安全之考量，因任何理由，包含但不限於缺乏使用，或違反本服務條款的明文規定及精神，終止您的密碼、帳號（或其任何部分）或本服務之使用，並將本服務內任何「會員內容」加以移除並刪除，亦得已通知之情形下，隨時終止本服務或任何部分。此外，您同意若本服務之使用被終止，EZPORTAL對您或任何第三人均不承擔責任。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>15. 準據法與管轄法院<br />\n本約定書之解釋與適用，以及與本約定書有關的爭議，均應依照中華民國法律予以處理，並以台灣台北地方法院為第一審管轄法院。</div>\n<div>&nbsp;</div>','<p>&nbsp;</p>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>1. 認知與接受條款<br />\nezportal股份有限公司(以下簡稱「ezportal」)係依據本服務條款提供ezportal（http://www.XXXX.com.tw）服務 (以下簡稱「本服務」)。當您完成ezportal之會員註冊手續、或開始使用本服務時，即表示您已閱讀、瞭解並同意接受本服務條款之所有內容。ezportal公司有權於任何時間修改或變更本約定書之內容，建議您隨時注意該等修改或變更。您於任何修改或變更後繼續使用本服務時，視為您已閱讀、瞭解並同意接受該等修改或變更。 若您為未滿二十歲之未成年人，應於您的家長（或監護人）閱讀、瞭解並同意本約定書之所有內容及其後修改變更後，方得註冊為會員、使用或繼續使用本服務。當您使用或繼續使用ezportal時，即推定您的家長（或監護人）已閱讀、瞭解並同意接受本約定書之所有內容及其後修改變更。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>2. 您的註冊義務<br />\n為了能使用本服務，您同意以下事項：</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>依本服務註冊表之提示提供您本人正確、最新的資料，且無重覆註冊登錄等情事。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>即時維持並更新您個人資料，確保其正確性，以獲取最佳之服務。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>若您提供任何錯誤或不實的資料、或未按指示提供資料、或欠缺必要之資料時，ezportal有權不經事先通知，逕行暫停或終止您的帳號，並拒絕您使用本服務之全部或一部。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>3. ezportal隱私權政策<br />\n關於您的會員註冊以及其他特定資料依ezportal「<span>隱私權政策」受到保護與規範。</span></div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>4. 會員帳號、密碼及安全<br />\n完成本服務的登記程序之後，您自行設定之會員帳號及密碼，為維持密碼及帳號之機密安全，是您的責任，任何依照規定方法輸入會員帳號及密碼與登入資料一致時，無論是否由本人親自輸入，均將視為會員本人所使用。利用該密碼及帳號所進行的一切行動，您將負完全的責任。您並同意以下事項：</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>您的密碼或帳號遭到盜用或有其他任何安全問題發生時，您將立即通知ezportal。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>每次連線完畢，均結束您的帳號使用。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>您的帳號、密碼及會員權益均僅供您個人使用及享有，不得轉借、轉讓他人或與他人合用。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>帳號及密碼遭盜用、不當使用或其他ezportal無法辯識是否為本人親自使用之情況時，ezportal對此所致之損害，概不負責。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>5. 兒童及青少年之保護<br />\n為確保兒童及青少年使用網路的安全，並避免隱私權受到侵犯，家長（或監護人）應盡到下列義務： 未滿十二歲之兒童使用本服務時，應全程在旁陪伴，十二歲以上未滿十八歲之青少年使用本服務前亦應斟酌是否給予同意。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>6. 使用者的守法義務及承諾<br />\n您承諾絕不為任何非法目的或以任何非法方式使用本服務，並承諾遵守中華民國相關法規及一切使用網際網路之國際慣例。您若係中華民國以外之使用者，並同意遵守所屬國家或地域之法令。您同意並保證不得利用本服務從事侵害他人權益或違法之行為，包括但不限於：</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>公布或傳送任何誹謗、侮辱、具威脅性、攻擊性、不雅、猥褻、不實、違反公共秩序或善良風俗或其他不法之文字、圖片或任何形式的檔案</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>侵害或毀損ezportal或他人名譽、隱私權、營業秘密、商標權、著作權、專利權、其他智慧財產權及其他權利</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>違反依法律或契約所應負之保密義務</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>冒用他人名義使用本服務</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>傳輸或散佈電腦病毒</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>從事未經ezportal事前授權的商業行為</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>刊載、傳輸、發送垃圾郵件、連鎖信、違法或未經ezportal許可之多層次傳銷訊息及廣告等；或儲存任何侵害他人智慧財產權或違反法令之資料</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>對本服務其他用戶或第三人產生困擾、不悅或違反一般網路禮節致生反感之行為</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>其他不符本服務所提供的使用目的之行為或ezportal有正當理由認為不適當之行為</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>7. ezportal得依實際執行情形，增加、修改或終止相關活動，並選擇最適方式告知會員。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>8. 於發生下列情形之一時，ezportal有權可以停止、中斷提供本服務：</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>ezportal網站電子通信設備進行必要之保養及施工時</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>發生突發性之電子通信設備故障時</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>ezportal網站申請之電子通信服務被停止，無法提供服務時</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>由於天災等不可抗力之因素或其他不可歸責於ezportal致使ezportal網站無法提供服務時</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>9. 交易行為<br />\n您同意使用本服務訂購產品時，於ezportal通知確認交易成立前，ezportal仍保有不接受訂單或取消出貨之權利。您向ezportal發出訂購通知後，系統將自動發出接受通知，但此通知並非訂單確認通知，關於交易成立與否ezportal將另行告知。<br />\n您若於使用本服務訂購產品後倘任意退換貨、取消訂單、或有任何ezportal認為不適當而造成ezportal作業上之困擾或損害之行為，ezportal均可視情況採取拒絕交易或永久取消會員資格辦理。若您訂購之產品若屬於以下情形：（１）預購類商品（２）商品頁顯示無庫存（３）須向供應商調貨（４）轉由廠商出貨，因商品交易特性之故，倘商品缺絕、或廠商因故無法順利供貨之情況下，您同意ezportal得視情況取消或修改交易（訂單）內容、或延遲交貨時間，並選擇以最適方式告知。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>10. 責任之限制與排除<br />\n您使用本服務瀏覽到的所有廣告內容、文字與圖片之說明、展示樣品或其他銷售資訊，均由各該廣告商、產品與服務的供應商所設計與提出。您對於廣告之正確性與可信度應自行斟酌與判斷。ezportal僅接受委託予以刊登，不對前述廣告負擔保責任。 本服務所提供之各項功能，均依該功能當時之現況提供使用，ezportal對於其效能、速度、完整性、可靠性、安全性、正確性等，皆不負擔任何明示或默示之擔保責任。 ezportal並不保證本服務之網頁、伺服器、網域等所傳送的電子郵件或其內容不會含有電腦病毒等有害物；亦不保證郵件、檔案或資料之傳輸儲存均正確無誤不會斷線和出錯等，因各該郵件、檔案或資料傳送或儲存失敗、遺失或錯誤等所致之損害，ezportal不負賠償責任。 您同意於使用本服務過程中所有資料記錄，均以ezportal資料庫所儲存之電子資料為準，如有糾紛或訴訟，並以該電子資料為認定標準。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>11. 智慧財產權的保護<br />\nezportal所使用之軟體或程式、網站上所有內容，包括但不限於著作、圖片、檔案、資訊、資料、網站架構、網站畫面的安排、網頁設計，均由ezportal或其他權利人依法擁有其智慧財產權，包括但不限於商標權、專利權、著作權、營業秘密與專有技術等。任何人不得逕自使用、修改、重製、公開播送、改作、散布、發行、公開發表、進行還原工程、解編或反向組譯。若您欲引用或轉載前述軟體、程式或網站內容，必須依法取得ezportal或其他權利人的事前書面同意。尊重智慧財產權是您應盡的義務，如有違反，您應對ezportal負損害賠償責任（包括但不限於訴訟費用及律師費用等）。<br />\n在尊重他人智慧財產權之原則下，會員同意在使用ezportal之服務時，不作侵害他人智慧財產權之行為。<br />\n若會員有涉及重覆侵權之情事，ezportal可暫停全部或部份之服務，或逕自以取消會員帳號之方式處理。<br />\n若有發現智慧財產權遭侵害之情事，請將所遭侵權之情形及聯絡方式，並附具真實陳述及擁有合法智慧財產權之聲明，並以下列方式聯絡ezportal：<br />\n<b>以電子郵件</b><b>(E-mail)</b><b>寄送至：</b><b><u> XXXX@XXX.com.tw</u></b> (請注意！此為限定用途之信箱，非關侵權事項通知之信件寄送至此將不獲受理，ezportal會員有任何疑問請至<span>客服中心詢問</span>)</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>12. 您對ezportal之授權<br />\n對於會員所登錄或留存之個人資料，會員同意ezportal網站得於合理之範圍內蒐集、處理、保存、傳遞及使用該等資料，以提供使用者其他資訊或服務、或作成會員統計資料、或進行關於網路行為之調查或研究，或為任何之合法使用。 若您無合法權利得授權他人使用、修改、重製、公開播送、改作、散布、發行、公開發表某資料，並將前述權利轉授權第三人，請勿擅自將該資料上載、傳送、輸入或提供至ezportal。任何資料一經您上載、傳送、輸入或提供至ezportal時，視為您已允許ezportal無條件使用、修改、重製、公開播送、改作、散布、發行、公開發表該等資料，並得將前述權利轉授權他人，您對此絕無異議。您並應保證ezportal使用、修改、重製、公開播送、改作、散布、發行、公開發表、轉授權該等資料，不致侵害任何第三人之智慧財產權，否則應對ezportal負損害賠償責任（包括但不限於訴訟費用及律師費用等）。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>13. 特別授權事項<br />\n因使用本服務所提供之網路交易或活動，可能須透過宅配或貨運業者始能完成貨品(或贈品等)之配送或取回，因此，您同意並授權ezportal得視該次網路交易或活動之需求及目的，將由您所提供且為配送所必要之個人資料(如收件人姓名、配送地址、連絡電話等)，提供予宅配或貨運業者，以利完成該次貨品(或贈品等)之配送、取回。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>14. 拒絕或終止您的使用<br />\n您同意ezportal得基於維護交易安全之考量，因任何理由，包含但不限於缺乏使用，或違反本服務條款的明文規定及精神，終止您的密碼、帳號（或其任何部分）或本服務之使用，並將本服務內任何「會員內容」加以移除並刪除，亦得已通知之情形下，隨時終止本服務或任何部分。此外，您同意若本服務之使用被終止，ezportal對您或任何第三人均不承擔責任。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>15. 準據法與管轄法院<br />\n本約定書之解釋與適用，以及與本約定書有關的爭議，均應依照中華民國法律予以處理，並以台灣台北地方法院為第一審管轄法院。</div>\n<div>&nbsp;</div>','1');

UNLOCK TABLES;

DROP TABLE IF EXISTS `useronline`;
CREATE TABLE `useronline` (
  `timestamp` int(15) NOT NULL default '0',
  `ip` varchar(40) NOT NULL default '',
  `file` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`timestamp`),
  KEY `ip` (`ip`),
  KEY `file` (`file`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `useronline` WRITE;
INSERT INTO useronline VALUES('1338383765','211.20.77.221','/df19/homeweb/catalog.php');
INSERT INTO useronline VALUES('1338383756','211.20.77.221','/df19/homeweb/index.php');

UNLOCK TABLES;

DROP TABLE IF EXISTS `users_columns`;
CREATE TABLE `users_columns` (
  `cols_id` int(11) NOT NULL auto_increment,
  `sys_na` varchar(200) NOT NULL,
  `usr_na` varchar(200) NOT NULL,
  `cols_na` varchar(50) NOT NULL,
  `cols_type` varchar(20) NOT NULL default 'text',
  `cols_size` tinyint(11) NOT NULL default '20',
  `cols_row` tinyint(4) NOT NULL default '3',
  `cols_rang` varchar(200) NOT NULL,
  `sys_dafault` varchar(10) NOT NULL default 'usr',
  `only_state` tinyint(4) NOT NULL default '0',
  `null_state` tinyint(4) NOT NULL default '0',
  `cols_html` varchar(200) NOT NULL,
  `show_state` tinyint(4) NOT NULL default '1',
  `cols_order_no` tinyint(4) NOT NULL default '1',
  PRIMARY KEY  (`cols_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

LOCK TABLES `users_columns` WRITE;
INSERT INTO users_columns VALUES('1','會員姓名','會員暱稱','users_name','text','50','3','','sys','0','0','','1','1');
INSERT INTO users_columns VALUES('2','會員帳號','帳號','users_account','text','50','3','','sys','0','0','','1','2');
INSERT INTO users_columns VALUES('3','登入密碼','登入密碼','users_password','text','50','3','','sys','0','0','','1','3');
INSERT INTO users_columns VALUES('4','確認密碼','確認密碼','password_confirm','text','50','3','','sys','0','0','','1','4');
INSERT INTO users_columns VALUES('7','折扣等級','折扣等級','users_rank','select','50','0','','sys','0','0','','1','7');
INSERT INTO users_columns VALUES('8','會員性別','性別','users_sex','radio','50','0','0~***~保密~@@@~ 1~***~先生~@@@~ 2~***~小姐','usr','0','0','','1','8');
INSERT INTO users_columns VALUES('5','會員email','電子郵件信箱','users_email','text','50','0','','sys','0','0','','1','5');
INSERT INTO users_columns VALUES('6','閱讀權限','閱讀權限','users_group','select','50','0','','sys','0','0','','1','6');
INSERT INTO users_columns VALUES('9','會員生日','出生日期','users_birth','date','50','0','','usr','0','0','','1','9');
INSERT INTO users_columns VALUES('10','MSN','MSN','users_msn','text','50','0','','usr','0','0','','1','10');
INSERT INTO users_columns VALUES('11','Yahoo即時通','Yahoo即時通','users_yahoo','text','50','0','','usr','0','0','','1','11');
INSERT INTO users_columns VALUES('12','SKYPE','SKYPE','users_skype','text','50','0','','usr','0','0','','1','12');
INSERT INTO users_columns VALUES('13','家裡電話','家裡電話','users_tel_home','text','50','0','','usr','0','0','','1','13');
INSERT INTO users_columns VALUES('14','公司電話','公司電話','users_tel_comp','text','50','0','','usr','0','0','','1','14');
INSERT INTO users_columns VALUES('15','行動電話','行動電話','users_cell','text','50','0','','usr','0','0','','1','15');
INSERT INTO users_columns VALUES('16','住址','住址','users_address','text','50','0','','usr','0','0','','1','16');
INSERT INTO users_columns VALUES('17','自訂欄位1','工作地點','users_text1','text','50','0','','usr','0','0','','0','17');
INSERT INTO users_columns VALUES('18','自訂欄位2','自定義2','users_text2','text','50','0','','usr','0','0','','0','18');
INSERT INTO users_columns VALUES('19','自訂欄位3','自定義3','users_text3','text','50','0','','usr','0','0','','0','19');
INSERT INTO users_columns VALUES('20','自訂欄位4','自定義4','users_text4','text','50','0','','usr','0','0','','0','20');
INSERT INTO users_columns VALUES('21','自訂欄位5','自定義5','users_text5','text','50','0','','usr','0','0','','0','21');
INSERT INTO users_columns VALUES('22','自訂欄位6','自定義6','users_text6','text','50','0','','usr','0','0','','0','22');
INSERT INTO users_columns VALUES('23','自訂欄位7','自定義7','users_text7','text','50','0','','usr','0','0','','0','23');
INSERT INTO users_columns VALUES('24','自訂欄位8','自定義8','users_text8','text','50','0','','usr','0','0','','0','24');
INSERT INTO users_columns VALUES('25','自訂欄位9','自定義9','users_text9','text','50','0','','usr','0','0','','0','25');
INSERT INTO users_columns VALUES('26','自訂欄位10','自定義10','users_text10','text','50','0','','usr','0','0','','0','26');
INSERT INTO users_columns VALUES('27','自訂欄位11','自定義11','users_text11','text','50','0','','usr','0','0','','0','27');
INSERT INTO users_columns VALUES('28','自訂欄位12','自定義12','users_text12','text','50','0','','usr','0','0','','0','28');

UNLOCK TABLES;

DROP TABLE IF EXISTS `users_data`;
CREATE TABLE `users_data` (
  `users_id` int(11) NOT NULL auto_increment,
  `users_account` varchar(200) NOT NULL,
  `users_password` varchar(200) NOT NULL,
  `users_name` varchar(200) NOT NULL,
  `users_level` int(11) NOT NULL,
  `users_group` varchar(200) NOT NULL,
  `users_sex` varchar(200) NOT NULL,
  `users_birth` varchar(200) NOT NULL,
  `info_state` tinyint(4) default '1',
  `users_email` varchar(200) NOT NULL,
  `users_country` varchar(200) NOT NULL,
  `users_msn` varchar(200) NOT NULL,
  `users_yahoo` varchar(200) NOT NULL,
  `users_skype` varchar(200) NOT NULL,
  `users_tel_home` varchar(200) NOT NULL,
  `users_tel_comp` varchar(200) NOT NULL,
  `users_cell` varchar(200) NOT NULL,
  `users_address` varchar(200) NOT NULL,
  `create_user` int(11) NOT NULL,
  `users_register` varchar(50) NOT NULL,
  `users_emailchk` tinyint(4) NOT NULL default '0',
  `users_emailchkno` varchar(20) NOT NULL,
  `users_emailchkdate` varchar(20) NOT NULL,
  `users_logindate` varchar(20) NOT NULL,
  `alter_user` int(11) NOT NULL,
  `alter_date` varchar(50) NOT NULL,
  `users_text1` varchar(200) NOT NULL,
  `users_text2` varchar(200) NOT NULL,
  `users_text3` varchar(200) NOT NULL,
  `users_text4` varchar(200) NOT NULL,
  `users_text5` varchar(200) NOT NULL,
  `users_text6` varchar(200) NOT NULL,
  `users_text7` varchar(200) NOT NULL,
  `users_text8` varchar(200) NOT NULL,
  `users_text9` varchar(200) NOT NULL,
  `users_text10` varchar(200) NOT NULL,
  `users_text11` varchar(200) NOT NULL,
  `users_text12` varchar(200) NOT NULL,
  PRIMARY KEY  (`users_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `users_data` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `users_group`;
CREATE TABLE `users_group` (
  `group_id` int(11) NOT NULL auto_increment,
  `group_na` varchar(200) NOT NULL,
  `info_state` tinyint(4) default '1',
  PRIMARY KEY  (`group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

LOCK TABLES `users_group` WRITE;
INSERT INTO users_group VALUES('1','一般會員','1');

UNLOCK TABLES;

DROP TABLE IF EXISTS `users_rank`;
CREATE TABLE `users_rank` (
  `rank_id` int(11) NOT NULL auto_increment,
  `rank_na` varchar(200) NOT NULL,
  `discount` float NOT NULL,
  `info_state` tinyint(4) default '1',
  PRIMARY KEY  (`rank_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `users_rank` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `vote_assistant`;
CREATE TABLE `vote_assistant` (
  `votemain_id` int(11) NOT NULL,
  `voteassistant_id` int(11) NOT NULL auto_increment,
  `choicename` varchar(200) NOT NULL,
  `ticketnum` varchar(200) NOT NULL,
  `choice_order` int(11) NOT NULL default '1',
  `picture` varchar(200) NOT NULL,
  PRIMARY KEY  (`voteassistant_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `vote_assistant` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `vote_main`;
CREATE TABLE `vote_main` (
  `votemain_id` int(11) NOT NULL auto_increment,
  `vote_md_id` varchar(10) NOT NULL,
  `vote_title` varchar(200) NOT NULL,
  `vote_startdate` date NOT NULL,
  `vote_enddate` date NOT NULL,
  `vote_introduce` varchar(200) NOT NULL,
  `oneormanychoice` varchar(2) NOT NULL,
  `vote_order` int(11) NOT NULL default '1',
  `info_state` int(11) NOT NULL default '1',
  `column_plots` int(11) NOT NULL default '1',
  `createuser_id` int(11) NOT NULL,
  `createuser_date` datetime NOT NULL,
  `edituser_id` int(11) NOT NULL,
  `edituser_date` datetime NOT NULL,
  PRIMARY KEY  (`votemain_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `vote_main` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `weblink`;
CREATE TABLE `weblink` (
  `weblink_id` int(11) NOT NULL auto_increment,
  `weblink_na` varchar(200) NOT NULL,
  `weblink_image` varchar(200) NOT NULL,
  `weblink_addr` varchar(200) NOT NULL,
  `open_target` tinyint(4) NOT NULL default '0',
  `date_from` varchar(20) NOT NULL,
  `date_end` varchar(20) NOT NULL,
  `info_state` tinyint(4) NOT NULL default '1',
  PRIMARY KEY  (`weblink_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `weblink` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `website_config`;
CREATE TABLE `website_config` (
  `data_id` int(11) NOT NULL auto_increment,
  `parent_id` varchar(200) NOT NULL,
  `col_name` varchar(200) NOT NULL,
  `input_type` varchar(200) NOT NULL,
  `store_range` varchar(200) NOT NULL,
  `store_folder` varchar(200) NOT NULL,
  `col_value` varchar(200) NOT NULL,
  `col_unit` varchar(20) NOT NULL,
  `order_num` varchar(200) NOT NULL,
  `info_state` tinyint(4) NOT NULL default '1',
  PRIMARY KEY  (`data_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

LOCK TABLES `website_config` WRITE;
INSERT INTO website_config VALUES('1','','website_na','text','','','U-keys hmanager','','','1');
INSERT INTO website_config VALUES('2','','website_title','text','','','U-keys 測試版','','','1');
INSERT INTO website_config VALUES('3','','website_descript','text','','','U-keys','','','1');
INSERT INTO website_config VALUES('4','','websitw_keyword','text','','','U-keys','','','1');
INSERT INTO website_config VALUES('5','','websitw_addr','text','','','U-keys','','','1');
INSERT INTO website_config VALUES('6','','websitw_email','text','','','U-keys@U-keys','','','1');
INSERT INTO website_config VALUES('7','','websitw_tel','text','','','U-keys','','','1');
INSERT INTO website_config VALUES('8','','websitw_logo','file','','/hyfiles/logo.png','logo.png','','','1');
INSERT INTO website_config VALUES('9','','websitw_close','radio','1,0','','0','','','1');
INSERT INTO website_config VALUES('10','','close_memo','textarea','','','暫時關閉網站，請洽管理員!!','','','1');
INSERT INTO website_config VALUES('12','','user_email_chk','radio','1,0','','1','','','1');
INSERT INTO website_config VALUES('13','','email_chk_days','text','','','3','','','1');
INSERT INTO website_config VALUES('14','','file_upload_max','select','2,4,6,8,10,20,30,50','','4','Mb','','1');
INSERT INTO website_config VALUES('11','','header_cust','radio','1,0','','1','','','1');
INSERT INTO website_config VALUES('15','','retain_history_days','text','','','10','','','1');

UNLOCK TABLES;

