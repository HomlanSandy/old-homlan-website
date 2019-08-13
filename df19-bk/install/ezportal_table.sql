-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Dec 31, 2010, 07:17 AM
-- 伺服器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 資料庫: `test`
-- 

-- --------------------------------------------------------

-- 
-- 資料表格式： `adspalyimg`
-- 

DROP TABLE IF EXISTS `adspalyimg`;
CREATE TABLE IF NOT EXISTS `adspalyimg` (
  `adsimg_id` int(11) NOT NULL auto_increment,
  `adsimg_locaiton` varchar(200) NOT NULL,
  `adsimg_url` varchar(200) NOT NULL,
  `adsimg_text` varchar(200) NOT NULL,
  `winopen_type` tinyint(4) NOT NULL default '0',
  `info_state` tinyint(4) NOT NULL default '1',
  PRIMARY KEY  (`adsimg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `article`
-- 

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `articlecat`
-- 

DROP TABLE IF EXISTS `articlecat`;
CREATE TABLE IF NOT EXISTS `articlecat` (
  `articlecat_id` int(11) NOT NULL auto_increment,
  `articlecat_na` varchar(200) NOT NULL,
  `articlecat_text` text NOT NULL,
  `parent_id` int(11) NOT NULL default '0',
  `articlecat_type` int(11) NOT NULL default '1',
  `info_state` int(11) NOT NULL default '1',
  `order` int(11) NOT NULL,
  PRIMARY KEY  (`articlecat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `commend_info`
-- 

DROP TABLE IF EXISTS `commend_info`;
CREATE TABLE IF NOT EXISTS `commend_info` (
  `cmdinfo_id` int(10) NOT NULL auto_increment,
  `commend_id` varchar(10) default NULL,
  `infos_id` int(11) NOT NULL,
  `cmdinfo_order` int(11) NOT NULL,
  `createuser_id` int(11) NOT NULL,
  `createuser_date` datetime NOT NULL,
  `edituser_id` int(11) NOT NULL,
  `edituser_date` datetime NOT NULL,
  PRIMARY KEY  (`cmdinfo_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `commend_module`
-- 

DROP TABLE IF EXISTS `commend_module`;
CREATE TABLE IF NOT EXISTS `commend_module` (
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

-- --------------------------------------------------------

-- 
-- 資料表格式： `demand_list`
-- 

DROP TABLE IF EXISTS `demand_list`;
CREATE TABLE IF NOT EXISTS `demand_list` (
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

-- --------------------------------------------------------

-- 
-- 資料表格式： `discount_list`
-- 

DROP TABLE IF EXISTS `discount_list`;
CREATE TABLE IF NOT EXISTS `discount_list` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `discuss_data`
-- 

DROP TABLE IF EXISTS `discuss_data`;
CREATE TABLE IF NOT EXISTS `discuss_data` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `discuss_reply`
-- 

DROP TABLE IF EXISTS `discuss_reply`;
CREATE TABLE IF NOT EXISTS `discuss_reply` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `discuss_type`
-- 

DROP TABLE IF EXISTS `discuss_type`;
CREATE TABLE IF NOT EXISTS `discuss_type` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `fare_config`
-- 

DROP TABLE IF EXISTS `fare_config`;
CREATE TABLE IF NOT EXISTS `fare_config` (
  `fare_id` int(11) NOT NULL auto_increment,
  `fare_set` text NOT NULL,
  PRIMARY KEY  (`fare_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `fee_config`
-- 

DROP TABLE IF EXISTS `fee_config`;
CREATE TABLE IF NOT EXISTS `fee_config` (
  `fee_set` int(11) NOT NULL,
  `fee_fix` int(11) NOT NULL,
  `fee_ratio` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- 資料表格式： `footer`
-- 

DROP TABLE IF EXISTS `footer`;
CREATE TABLE IF NOT EXISTS `footer` (
  `footer_countent` text NOT NULL,
  `edituser_id` int(11) NOT NULL,
  `edituser_date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- 資料表格式： `frmcat`
-- 

DROP TABLE IF EXISTS `frmcat`;
CREATE TABLE IF NOT EXISTS `frmcat` (
  `frmcat_id` int(11) NOT NULL auto_increment,
  `frmcat_na` varchar(200) NOT NULL,
  `info_state` tinyint(4) NOT NULL default '1',
  PRIMARY KEY  (`frmcat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `frmcolumns`
-- 

DROP TABLE IF EXISTS `frmcolumns`;
CREATE TABLE IF NOT EXISTS `frmcolumns` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `frmlist`
-- 

DROP TABLE IF EXISTS `frmlist`;
CREATE TABLE IF NOT EXISTS `frmlist` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `frm_column_value`
-- 

DROP TABLE IF EXISTS `frm_column_value`;
CREATE TABLE IF NOT EXISTS `frm_column_value` (
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

-- --------------------------------------------------------

-- 
-- 資料表格式： `func_group`
-- 

DROP TABLE IF EXISTS `func_group`;
CREATE TABLE IF NOT EXISTS `func_group` (
  `group_id` int(11) NOT NULL auto_increment,
  `group_na` varchar(200) NOT NULL,
  `sys_default` varchar(3) NOT NULL default 'usr',
  `info_state` tinyint(4) NOT NULL default '1',
  PRIMARY KEY  (`group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `func_list`
-- 

DROP TABLE IF EXISTS `func_list`;
CREATE TABLE IF NOT EXISTS `func_list` (
  `list_id` int(10) unsigned NOT NULL auto_increment,
  `list_na` varchar(200) NOT NULL,
  `list_url` varchar(200) NOT NULL,
  `list_order` tinyint(3) unsigned default '1',
  `func_id` int(10) unsigned NOT NULL,
  `info_state` tinyint(4) default '1',
  PRIMARY KEY  (`list_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=93 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `func_main`
-- 

DROP TABLE IF EXISTS `func_main`;
CREATE TABLE IF NOT EXISTS `func_main` (
  `func_id` int(10) unsigned NOT NULL auto_increment,
  `func_na` varchar(200) NOT NULL,
  `func_describe` varchar(200) NOT NULL,
  `order` tinyint(4) default '1',
  `info_state` tinyint(4) default '1',
  PRIMARY KEY  (`func_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `func_manager`
-- 

DROP TABLE IF EXISTS `func_manager`;
CREATE TABLE IF NOT EXISTS `func_manager` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `goods_info`
-- 

DROP TABLE IF EXISTS `goods_info`;
CREATE TABLE IF NOT EXISTS `goods_info` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `good_category`
-- 

DROP TABLE IF EXISTS `good_category`;
CREATE TABLE IF NOT EXISTS `good_category` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `group_list`
-- 

DROP TABLE IF EXISTS `group_list`;
CREATE TABLE IF NOT EXISTS `group_list` (
  `list_id` tinyint(4) NOT NULL,
  `group_id` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- 資料表格式： `header_cust`
-- 

DROP TABLE IF EXISTS `header_cust`;
CREATE TABLE IF NOT EXISTS `header_cust` (
  `header_text` text NOT NULL,
  `edituser_id` tinyint(4) NOT NULL,
  `edituser_date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- 資料表格式： `homeweb_page`
-- 

DROP TABLE IF EXISTS `homeweb_page`;
CREATE TABLE IF NOT EXISTS `homeweb_page` (
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

-- --------------------------------------------------------

-- 
-- 資料表格式： `infoscat_list`
-- 

DROP TABLE IF EXISTS `infoscat_list`;
CREATE TABLE IF NOT EXISTS `infoscat_list` (
  `cat_id` int(11) NOT NULL,
  `infos_id` int(11) NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- 資料表格式： `infos_category`
-- 

DROP TABLE IF EXISTS `infos_category`;
CREATE TABLE IF NOT EXISTS `infos_category` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `infos_config`
-- 

DROP TABLE IF EXISTS `infos_config`;
CREATE TABLE IF NOT EXISTS `infos_config` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `infos_files`
-- 

DROP TABLE IF EXISTS `infos_files`;
CREATE TABLE IF NOT EXISTS `infos_files` (
  `data_id` int(11) NOT NULL auto_increment,
  `infos_id` int(11) NOT NULL,
  `files_na` varchar(200) NOT NULL,
  `files_text` varchar(200) NOT NULL,
  `files_url` varchar(200) NOT NULL,
  PRIMARY KEY  (`data_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `infos_list`
-- 

DROP TABLE IF EXISTS `infos_list`;
CREATE TABLE IF NOT EXISTS `infos_list` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `infos_others`
-- 

DROP TABLE IF EXISTS `infos_others`;
CREATE TABLE IF NOT EXISTS `infos_others` (
  `infos_id` int(11) NOT NULL,
  `other_id` int(11) NOT NULL,
  `other_order` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- 資料表格式： `infos_page`
-- 

DROP TABLE IF EXISTS `infos_page`;
CREATE TABLE IF NOT EXISTS `infos_page` (
  `data_id` int(11) NOT NULL auto_increment,
  `infos_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `page_text` text NOT NULL,
  PRIMARY KEY  (`data_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `inside_module`
-- 

DROP TABLE IF EXISTS `inside_module`;
CREATE TABLE IF NOT EXISTS `inside_module` (
  `md_id` varchar(20) NOT NULL,
  `md_na` varchar(200) NOT NULL,
  `md_tpl` varchar(200) NOT NULL,
  `md_state` int(11) NOT NULL default '1',
  `md_order` int(11) NOT NULL,
  `create_user` varchar(20) default NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY  (`md_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- 資料表格式： `lcs_register`
-- 

DROP TABLE IF EXISTS `lcs_register`;
CREATE TABLE IF NOT EXISTS `lcs_register` (
  `prd_sn` varchar(50) NOT NULL,
  `prd_usn` varchar(50) NOT NULL,
  `prd_udate` varchar(20) NOT NULL,
  `create_date` varchar(20) NOT NULL,
  `prd_type` varchar(20) NOT NULL,
  `prd_version` varchar(20) NOT NULL,
  `verify` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- 資料表格式： `manager_log`
-- 

DROP TABLE IF EXISTS `manager_log`;
CREATE TABLE IF NOT EXISTS `manager_log` (
  `log_time` varchar(20) NOT NULL,
  `log_ip` varchar(50) NOT NULL,
  `log_func` varchar(200) NOT NULL,
  `log_operate` varchar(200) NOT NULL,
  `log_content` varchar(200) NOT NULL,
  `login_id` varchar(50) NOT NULL,
  `manager_id` int(11) NOT NULL,
  `manager_na` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- 資料表格式： `module_position`
-- 

DROP TABLE IF EXISTS `module_position`;
CREATE TABLE IF NOT EXISTS `module_position` (
  `md_id` varchar(20) NOT NULL,
  `page_id` varchar(20) NOT NULL,
  `page_position` varchar(20) NOT NULL,
  `vertical_order` int(11) NOT NULL,
  `create_user` varchar(20) default NULL,
  `create_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- 資料表格式： `news`
-- 

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `newscat`
-- 

DROP TABLE IF EXISTS `newscat`;
CREATE TABLE IF NOT EXISTS `newscat` (
  `newscat_id` int(11) NOT NULL auto_increment,
  `newscat_na` varchar(200) NOT NULL,
  `newscat_text` varchar(200) NOT NULL,
  `info_state` int(11) NOT NULL default '1',
  `order` int(11) NOT NULL,
  PRIMARY KEY  (`newscat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `order_list`
-- 

DROP TABLE IF EXISTS `order_list`;
CREATE TABLE IF NOT EXISTS `order_list` (
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

-- --------------------------------------------------------

-- 
-- 資料表格式： `payment_config`
-- 

DROP TABLE IF EXISTS `payment_config`;
CREATE TABLE IF NOT EXISTS `payment_config` (
  `payment_id` int(11) NOT NULL auto_increment,
  `payment_na` varchar(200) NOT NULL,
  `fare_set` int(11) NOT NULL default '1',
  `fee_set` int(11) NOT NULL default '1',
  `payment_order` int(11) NOT NULL,
  `info_state` int(11) NOT NULL default '1',
  `payment_detail` text NOT NULL,
  PRIMARY KEY  (`payment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `product_config`
-- 

DROP TABLE IF EXISTS `product_config`;
CREATE TABLE IF NOT EXISTS `product_config` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `self_module`
-- 

DROP TABLE IF EXISTS `self_module`;
CREATE TABLE IF NOT EXISTS `self_module` (
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

-- --------------------------------------------------------

-- 
-- 資料表格式： `ship_config`
-- 

DROP TABLE IF EXISTS `ship_config`;
CREATE TABLE IF NOT EXISTS `ship_config` (
  `ship_id` int(11) NOT NULL auto_increment,
  `ship_na` varchar(200) NOT NULL,
  `ship_order` int(11) NOT NULL,
  `info_state` int(11) NOT NULL default '1',
  `ship_detail` text NOT NULL,
  PRIMARY KEY  (`ship_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `smtp_setting`
-- 

DROP TABLE IF EXISTS `smtp_setting`;
CREATE TABLE IF NOT EXISTS `smtp_setting` (
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

-- --------------------------------------------------------

-- 
-- 資料表格式： `syscountmt`
-- 

DROP TABLE IF EXISTS `syscountmt`;
CREATE TABLE IF NOT EXISTS `syscountmt` (
  `count_open` tinyint(4) NOT NULL default '1',
  `count_visit` int(4) NOT NULL default '0',
  `count_style` tinyint(4) NOT NULL default '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- 資料表格式： `temp_log`
-- 

DROP TABLE IF EXISTS `temp_log`;
CREATE TABLE IF NOT EXISTS `temp_log` (
  `log_time` varchar(20) NOT NULL,
  `log_ip` varchar(50) NOT NULL,
  `log_path` varchar(200) NOT NULL,
  `login_id` varchar(50) NOT NULL,
  `manager_id` int(11) NOT NULL,
  `manager_na` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- 資料表格式： `themes`
-- 

DROP TABLE IF EXISTS `themes`;
CREATE TABLE IF NOT EXISTS `themes` (
  `themes_id` int(11) NOT NULL auto_increment,
  `themes_na` varchar(200) NOT NULL,
  `sys_default` varchar(3) NOT NULL default 'usr',
  `is_show` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`themes_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `uplinkcat`
-- 

DROP TABLE IF EXISTS `uplinkcat`;
CREATE TABLE IF NOT EXISTS `uplinkcat` (
  `uplinkcat_id` int(11) NOT NULL auto_increment,
  `uplinkcat_na` varchar(200) NOT NULL,
  `uplinkcat_url` varchar(200) NOT NULL,
  `sys_detault` varchar(5) NOT NULL default 'usr',
  `order_no` tinyint(4) NOT NULL default '1',
  `winopen_type` tinyint(4) NOT NULL default '0',
  `info_state` tinyint(4) NOT NULL default '1',
  PRIMARY KEY  (`uplinkcat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `uplinklist`
-- 

DROP TABLE IF EXISTS `uplinklist`;
CREATE TABLE IF NOT EXISTS `uplinklist` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `useronline`
-- 

DROP TABLE IF EXISTS `useronline`;
CREATE TABLE IF NOT EXISTS `useronline` (
  `timestamp` int(15) NOT NULL default '0',
  `ip` varchar(40) NOT NULL default '',
  `file` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`timestamp`),
  KEY `ip` (`ip`),
  KEY `file` (`file`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- 資料表格式： `users_columns`
-- 

DROP TABLE IF EXISTS `users_columns`;
CREATE TABLE IF NOT EXISTS `users_columns` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `users_data`
-- 

DROP TABLE IF EXISTS `users_data`;
CREATE TABLE IF NOT EXISTS `users_data` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `users_group`
-- 

DROP TABLE IF EXISTS `users_group`;
CREATE TABLE IF NOT EXISTS `users_group` (
  `group_id` int(11) NOT NULL auto_increment,
  `group_na` varchar(200) NOT NULL,
  `info_state` tinyint(4) default '1',
  PRIMARY KEY  (`group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `users_rank`
-- 

DROP TABLE IF EXISTS `users_rank`;
CREATE TABLE IF NOT EXISTS `users_rank` (
  `rank_id` int(11) NOT NULL auto_increment,
  `rank_na` varchar(200) NOT NULL,
  `discount` float NOT NULL,
  `info_state` tinyint(4) default '1',
  PRIMARY KEY  (`rank_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `user_register`
-- 

DROP TABLE IF EXISTS `user_register`;
CREATE TABLE IF NOT EXISTS `user_register` (
  `register_content` text NOT NULL,
  `register_default` text NOT NULL,
  `info_state` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- 資料表格式： `vote_assistant`
-- 

DROP TABLE IF EXISTS `vote_assistant`;
CREATE TABLE IF NOT EXISTS `vote_assistant` (
  `votemain_id` int(11) NOT NULL,
  `voteassistant_id` int(11) NOT NULL auto_increment,
  `choicename` varchar(200) NOT NULL,
  `ticketnum` varchar(200) NOT NULL,
  `choice_order` int(11) NOT NULL default '1',
  `picture` varchar(200) NOT NULL,
  PRIMARY KEY  (`voteassistant_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `vote_main`
-- 

DROP TABLE IF EXISTS `vote_main`;
CREATE TABLE IF NOT EXISTS `vote_main` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `weblink`
-- 

DROP TABLE IF EXISTS `weblink`;
CREATE TABLE IF NOT EXISTS `weblink` (
  `weblink_id` int(11) NOT NULL auto_increment,
  `weblink_na` varchar(200) NOT NULL,
  `weblink_image` varchar(200) NOT NULL,
  `weblink_addr` varchar(200) NOT NULL,
  `open_target` tinyint(4) NOT NULL default '0',
  `date_from` varchar(20) NOT NULL,
  `date_end` varchar(20) NOT NULL,
  `info_state` tinyint(4) NOT NULL default '1',
  PRIMARY KEY  (`weblink_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- 資料表格式： `website_config`
-- 

DROP TABLE IF EXISTS `website_config`;
CREATE TABLE IF NOT EXISTS `website_config` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;
