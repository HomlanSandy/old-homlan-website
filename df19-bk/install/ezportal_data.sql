-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Dec 31, 2010, 07:18 AM
-- 伺服器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 資料庫: `test`
-- 

-- 
-- 列出以下資料庫的數據： `adspalyimg`
-- 


-- 
-- 列出以下資料庫的數據： `article`
-- 


-- 
-- 列出以下資料庫的數據： `articlecat`
-- 


-- 
-- 列出以下資料庫的數據： `commend_info`
-- 


-- 
-- 列出以下資料庫的數據： `commend_module`
-- 


-- 
-- 列出以下資料庫的數據： `demand_list`
-- 


-- 
-- 列出以下資料庫的數據： `discount_list`
-- 


-- 
-- 列出以下資料庫的數據： `discuss_data`
-- 


-- 
-- 列出以下資料庫的數據： `discuss_reply`
-- 


-- 
-- 列出以下資料庫的數據： `discuss_type`
-- 


-- 
-- 列出以下資料庫的數據： `fare_config`
-- 


-- 
-- 列出以下資料庫的數據： `fee_config`
-- 


-- 
-- 列出以下資料庫的數據： `footer`
-- 


-- 
-- 列出以下資料庫的數據： `frmcat`
-- 


-- 
-- 列出以下資料庫的數據： `frmcolumns`
-- 


-- 
-- 列出以下資料庫的數據： `frmlist`
-- 


-- 
-- 列出以下資料庫的數據： `frm_column_value`
-- 


-- 
-- 列出以下資料庫的數據： `func_group`
-- 

INSERT INTO `func_group` (`group_id`, `group_na`, `sys_default`, `info_state`) VALUES (1, 'admin', 'sys', 1);

-- 
-- 列出以下資料庫的數據： `func_list`
-- 

INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (2, '分類清單', 'category.php', 1, 1, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (3, '新增資訊明細', 'infoslist.php?act=add', 2, 1, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (4, '資訊明細列表', 'infoslist.php', 3, 1, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (6, '會員資料列表', 'userslist.php', 4, 2, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (8, '新增會員', 'userslist.php?act=add', 3, 2, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (15, '網站設定', 'webconfig.php', 1, 8, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (18, '功能分類', 'mainfunc.php ', 5, 9, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (19, '功能清單', 'funclist.php', 6, 9, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (20, '群組權限設定', 'group_funclist.php', 4, 9, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (21, '帳號管理', 'func_manager.php', 2, 9, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (23, '表單分類列表', 'frmcat.php', 1, 5, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (24, '表單管理', 'frmlist.php', 2, 5, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (28, '閱讀權限', 'usersgroup.php', 1, 2, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (30, '會員註冊條款', 'usersregister.php', 5, 2, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (56, '前台樣板套用', 'themes_select.php', 1, 16, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (32, '表單紀錄查詢', 'frmrecordlist.php', 3, 5, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (54, '郵件伺服器設定', 'mailsetting.php', 3, 8, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (35, '主題分類', 'discusstype.php', 1, 12, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (36, '主題列表', 'discusslist.php', 2, 12, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (40, '計數器', 'syscountmt.php', 5, 8, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (55, '會員登記項目', 'usrconfig.php', 4, 8, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (46, '網站連結列表', 'websitelink.php', 3, 10, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (52, '首頁廣告輪播', 'adsplay.php', 3, 17, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (48, '頁首連結分類', 'uplinkcat.php', 1, 10, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (49, '頁首連結明細', 'uplinklist.php', 2, 10, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (50, '群組管理', 'func_group.php', 3, 9, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (67, '密碼修改', 'func_pwd.php', 1, 9, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (53, '頁面底部設定', 'footer.php', 2, 18, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (57, '樣板上傳', 'themes_upload.php', 2, 16, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (58, '頁首自定義設定', 'header_cust.php', 1, 18, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (59, '序號註冊', 'lcsregister.php', 2, 8, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (63, '預設頁面設定', 'module_position.php', 3, 18, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (60, '推薦模組', 'commendmodulelist.php', 1, 17, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (61, '自訂模組', 'selfmodulelist.php', 2, 17, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (66, '個別頁面設定', 'module_position_all.php', 4, 18, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (64, '投票資料列表', 'votelist.php', 1, 19, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (65, '投票結果查詢', 'voteresultlist.php', 2, 19, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (68, '備份資料庫', 'database.php', 6, 8, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (69, '新增商品明細', 'productlist.php?act=add', 4, 1, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (70, '商品明細列表', 'productlist.php', 5, 1, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (71, '折扣等級', 'usersrank.php', 2, 2, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (72, '線上更新', 'sysupload.php', 7, 8, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (73, '資訊(商品)顯示設定', 'infosconfig.php', 11, 8, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (74, '商品設定', 'productconfig.php', 21, 8, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (77, '付款設定', 'paymentconfig.php', 22, 8, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (86, '商品折扣', 'discount_productlist.php', 1, 20, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (79, '出貨設定', 'shipconfig.php', 23, 8, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (81, '訂單列表', 'orderlist.php', 1, 21, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (83, '需求單列表', 'demandlist.php', 1, 22, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (84, '運費設定', 'fareconfig.php', 24, 8, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (85, '手續費設定', 'feeconfig.php', 25, 8, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (87, '會員名單匯入', 'usersimport.php', 6, 2, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (88, '分類瀏覽排行', 'batch_catvisitors.php', 1, 23, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (89, '明細瀏覽排行', ' batch_listvisitors.php ', 2, 23, 1);
INSERT INTO `func_list` (`list_id`, `list_na`, `list_url`, `list_order`, `func_id`, `info_state`) VALUES (90, '管理者記錄', 'records_management.php', 7, 9, 1);

-- 
-- 列出以下資料庫的數據： `func_main`
-- 

INSERT INTO `func_main` (`func_id`, `func_na`, `func_describe`, `order`, `info_state`) VALUES (1, '資訊(商品)管理', '', 1, 1);
INSERT INTO `func_main` (`func_id`, `func_na`, `func_describe`, `order`, `info_state`) VALUES (2, '會員管理', '', 6, 1);
INSERT INTO `func_main` (`func_id`, `func_na`, `func_describe`, `order`, `info_state`) VALUES (19, '投票管理', '', 8, 1);
INSERT INTO `func_main` (`func_id`, `func_na`, `func_describe`, `order`, `info_state`) VALUES (5, '表單管理', '', 7, 1);
INSERT INTO `func_main` (`func_id`, `func_na`, `func_describe`, `order`, `info_state`) VALUES (8, '參數設定', '', 11, 1);
INSERT INTO `func_main` (`func_id`, `func_na`, `func_describe`, `order`, `info_state`) VALUES (9, '系統管理', '', 15, 1);
INSERT INTO `func_main` (`func_id`, `func_na`, `func_describe`, `order`, `info_state`) VALUES (10, '頁首連結', '', 13, 1);
INSERT INTO `func_main` (`func_id`, `func_na`, `func_describe`, `order`, `info_state`) VALUES (16, '樣板管理', '', 14, 1);
INSERT INTO `func_main` (`func_id`, `func_na`, `func_describe`, `order`, `info_state`) VALUES (12, '討論區', '', 9, 1);
INSERT INTO `func_main` (`func_id`, `func_na`, `func_describe`, `order`, `info_state`) VALUES (21, '訂單管理', '', 3, 1);
INSERT INTO `func_main` (`func_id`, `func_na`, `func_describe`, `order`, `info_state`) VALUES (20, '商品折扣管理', '', 2, 1);
INSERT INTO `func_main` (`func_id`, `func_na`, `func_describe`, `order`, `info_state`) VALUES (17, '模組管理', '', 5, 1);
INSERT INTO `func_main` (`func_id`, `func_na`, `func_describe`, `order`, `info_state`) VALUES (18, '版面設定', '', 12, 1);
INSERT INTO `func_main` (`func_id`, `func_na`, `func_describe`, `order`, `info_state`) VALUES (22, '需求單管理', '', 4, 1);
INSERT INTO `func_main` (`func_id`, `func_na`, `func_describe`, `order`, `info_state`) VALUES (23, '批次作業管理', '', 10, 1);

-- 
-- 列出以下資料庫的數據： `func_manager`
-- 


-- 
-- 列出以下資料庫的數據： `goods_info`
-- 


-- 
-- 列出以下資料庫的數據： `good_category`
-- 


-- 
-- 列出以下資料庫的數據： `group_list`
-- 


-- 
-- 列出以下資料庫的數據： `header_cust`
-- 


-- 
-- 列出以下資料庫的數據： `homeweb_page`
-- 

INSERT INTO `homeweb_page` (`page_id`, `page_na`, `page_tpl`, `container`, `left`, `center`, `right`, `create_user`, `create_date`) VALUES ('1', '首頁', 'index', '100%', '25%', '50%', '25%', 'admin', '2010-09-29 16:28:07');
INSERT INTO `homeweb_page` (`page_id`, `page_na`, `page_tpl`, `container`, `left`, `center`, `right`, `create_user`, `create_date`) VALUES ('2', '資訊分類頁面', 'catalog', '950px', '200px', '750px', '0px', 'admin', '2010-09-29 16:39:17');
INSERT INTO `homeweb_page` (`page_id`, `page_na`, `page_tpl`, `container`, `left`, `center`, `right`, `create_user`, `create_date`) VALUES ('3', '資訊明細頁面', 'catalog_detail', '950px', '200px', '750px', '0px', 'admin', '2010-09-27 17:25:47');
INSERT INTO `homeweb_page` (`page_id`, `page_na`, `page_tpl`, `container`, `left`, `center`, `right`, `create_user`, `create_date`) VALUES ('4', '推薦分類頁面', 'news', '950px', '200px', '550px', '200px', 'admin', '2010-03-01 00:34:26');
INSERT INTO `homeweb_page` (`page_id`, `page_na`, `page_tpl`, `container`, `left`, `center`, `right`, `create_user`, `create_date`) VALUES ('5', '搜尋結果頁面', 'search', '950px', '200px', '750px', '0px', 'admin', '2010-09-20 11:59:44');
INSERT INTO `homeweb_page` (`page_id`, `page_na`, `page_tpl`, `container`, `left`, `center`, `right`, `create_user`, `create_date`) VALUES ('6', '購物流程頁面', 'cart', '100%', '0%', '100%', '0%', 'admin', '2010-09-27 17:18:07');
INSERT INTO `homeweb_page` (`page_id`, `page_na`, `page_tpl`, `container`, `left`, `center`, `right`, `create_user`, `create_date`) VALUES ('7', '會員資訊頁面', 'user', '950px', '200px', '750px', '0px', 'admin', '2010-12-08 13:37:07');

-- 
-- 列出以下資料庫的數據： `infoscat_list`
-- 


-- 
-- 列出以下資料庫的數據： `infos_category`
-- 


-- 
-- 列出以下資料庫的數據： `infos_config`
-- 

INSERT INTO `infos_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (1, '', 'info_default_pic', 'file', '', '/hyfiles/no_picture.jpg', 'no_picture.gif', '', '', 1);
INSERT INTO `infos_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (2, '', 'smallpic_width', 'text', '', '', '80', '', '', 1);
INSERT INTO `infos_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (3, '', 'smallpic_height', 'text', '', '', '100', '', '', 1);
INSERT INTO `infos_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (4, '', 'bigpic_width', 'text', '', '', '200', '', '', 1);
INSERT INTO `infos_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (5, '', 'bigpic_height', 'text', '', '', '200', '', '', 1);
INSERT INTO `infos_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (6, '', 'infocat_list_record', 'text', '', '', '9', '', '', 1);
INSERT INTO `infos_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (13, '', 'infoindex_list_record', 'text', '', '', '9', '', '', 1);
INSERT INTO `infos_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (7, '', 'infocat_order_type', 'radio', 'posttime,updatetime,number', '', 'number', '', '', 1);
INSERT INTO `infos_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (8, '', 'infocat_show_type', 'radio', 'image,photo,text', '', 'image', '', '', 1);
INSERT INTO `infos_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (9, '', 'infodetail_dispaly_type', 'radio', 'imageup,imageleft,imageright', '', 'imageleft', '', '', 1);
INSERT INTO `infos_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (10, '', 'article_list_record', 'select', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30', '', '', '', '', 1);
INSERT INTO `infos_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (11, '', 'article_title_range', 'select', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30', '', '', '', '', 1);
INSERT INTO `infos_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (12, '', 'infocat_show_simple', 'radio', '1,0', '', '1', '', '', 1);
INSERT INTO `infos_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (14, '', 'infoindex_order_type', 'radio', 'index_posttime,index_updatetime,index_number', '', 'index_number', '', '', 1);
INSERT INTO `infos_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (15, '', 'infoindex_show_simple', 'radio', '1,0', '', '0', '', '', 1);
INSERT INTO `infos_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (16, '', 'infocat_list_row_record', 'select', '1,2,3,4,5,6', '', '3', '', '', 1);
INSERT INTO `infos_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (17, '', 'infoindex_list_row_record', 'select', '1,2,3,4,5,6', '', '3', '', '', 1);

-- 
-- 列出以下資料庫的數據： `infos_files`
-- 


-- 
-- 列出以下資料庫的數據： `infos_list`
-- 


-- 
-- 列出以下資料庫的數據： `infos_others`
-- 


-- 
-- 列出以下資料庫的數據： `infos_page`
-- 


-- 
-- 列出以下資料庫的數據： `inside_module`
-- 

INSERT INTO `inside_module` (`md_id`, `md_na`, `md_tpl`, `md_state`, `md_order`, `create_user`, `create_date`) VALUES ('A1', '廣告輪播', 'modules/commercial', 1, 1, 'admin', '2010-02-28 16:58:04');
INSERT INTO `inside_module` (`md_id`, `md_na`, `md_tpl`, `md_state`, `md_order`, `create_user`, `create_date`) VALUES ('A2', '資訊選單', 'modules/catalog_menu', 1, 2, 'admin', '2010-02-28 16:58:04');
INSERT INTO `inside_module` (`md_id`, `md_na`, `md_tpl`, `md_state`, `md_order`, `create_user`, `create_date`) VALUES ('A3', '訪客人數', 'modules/counter', 1, 3, 'admin', '2010-02-28 16:58:04');
INSERT INTO `inside_module` (`md_id`, `md_na`, `md_tpl`, `md_state`, `md_order`, `create_user`, `create_date`) VALUES ('A4', '資訊搜尋功能', 'modules/header_search', 1, 4, 'admin', '2010-02-28 16:58:04');
INSERT INTO `inside_module` (`md_id`, `md_na`, `md_tpl`, `md_state`, `md_order`, `create_user`, `create_date`) VALUES ('A5', '外部超連結', 'modules/outside_link', 1, 5, 'admin', '2010-02-28 16:58:04');
INSERT INTO `inside_module` (`md_id`, `md_na`, `md_tpl`, `md_state`, `md_order`, `create_user`, `create_date`) VALUES ('A6', '圖文顯示區', 'modules/show_list', 1, 6, 'admin', '2010-02-28 16:58:04');
INSERT INTO `inside_module` (`md_id`, `md_na`, `md_tpl`, `md_state`, `md_order`, `create_user`, `create_date`) VALUES ('A7', '會員登入區', 'modules/user_login', 1, 7, 'admin', '2010-02-28 16:58:04');
INSERT INTO `inside_module` (`md_id`, `md_na`, `md_tpl`, `md_state`, `md_order`, `create_user`, `create_date`) VALUES ('A8', '推薦頁嵌模組', 'modules/news_list', 1, 8, 'admin', '2010-02-28 16:58:04');
INSERT INTO `inside_module` (`md_id`, `md_na`, `md_tpl`, `md_state`, `md_order`, `create_user`, `create_date`) VALUES ('A9', '投票模組', 'modules/vote_list', 0, 9, 'admin', '2010-02-28 16:58:04');
INSERT INTO `inside_module` (`md_id`, `md_na`, `md_tpl`, `md_state`, `md_order`, `create_user`, `create_date`) VALUES ('A10', '會員功能清單', 'modules/user_menu', 1, 7, 'admin', '2010-12-08 13:57:07');

-- 
-- 列出以下資料庫的數據： `lcs_register`
-- 


-- 
-- 列出以下資料庫的數據： `manager_log`
-- 


-- 
-- 列出以下資料庫的數據： `module_position`
-- 


-- 
-- 列出以下資料庫的數據： `news`
-- 


-- 
-- 列出以下資料庫的數據： `newscat`
-- 


-- 
-- 列出以下資料庫的數據： `order_list`
-- 


-- 
-- 列出以下資料庫的數據： `payment_config`
-- 

INSERT INTO `payment_config` (`payment_id`, `payment_na`, `fare_set`, `fee_set`, `payment_order`, `info_state`, `payment_detail`) VALUES (1, '匯款', 1, 0, 1, 1, '');
INSERT INTO `payment_config` (`payment_id`, `payment_na`, `fare_set`, `fee_set`, `payment_order`, `info_state`, `payment_detail`) VALUES (2, '貨到付款', 1, 1, 2, 1, '');
INSERT INTO `payment_config` (`payment_id`, `payment_na`, `fare_set`, `fee_set`, `payment_order`, `info_state`, `payment_detail`) VALUES (3, '自取', 0, 0, 3, 1, '');

-- 
-- 列出以下資料庫的數據： `product_config`
-- 

INSERT INTO `product_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (1, '', 'discount_set', 'radio', 'user,sys,off', '', 'sys', '', '', 1);
INSERT INTO `product_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (2, '', 'demand_set', 'radio', '1,0', '', '1', '', '', 1);
INSERT INTO `product_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (3, '', 'stock_set', 'radio', '1,0', '', '1', '', '', 1);
INSERT INTO `product_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (4, '', 'price_alerts', 'radio', '1,0', '', '1', '', '', 1);
INSERT INTO `product_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (5, '', 'rate', 'text', '', '', '50', '', '', 1);
INSERT INTO `product_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (6, '', 'demand_login', 'radio', '1,0', '', '1', '', '', 1);
INSERT INTO `product_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (7, '', 'demand_notify', 'checkbox', 'sys,usr,other', '', '', '', '', 1);
INSERT INTO `product_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (8, '', 'demand_notify_mail', 'text', '', '', '', '', '', 1);
INSERT INTO `product_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (9, '', 'order_notify', 'checkbox', 'sys,usr,other', '', '', '', '', 1);
INSERT INTO `product_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (10, '', 'order_notify_mail', 'text', '', '', '', '', '', 1);

-- 
-- 列出以下資料庫的數據： `self_module`
-- 


-- 
-- 列出以下資料庫的數據： `ship_config`
-- 


-- 
-- 列出以下資料庫的數據： `smtp_setting`
-- 


-- 
-- 列出以下資料庫的數據： `syscountmt`
-- 

INSERT INTO `syscountmt` (`count_open`, `count_visit`, `count_style`) VALUES (1, 0, 3);

-- 
-- 列出以下資料庫的數據： `temp_log`
-- 


-- 
-- 列出以下資料庫的數據： `themes`
-- 

INSERT INTO `themes` (`themes_id`, `themes_na`, `sys_default`, `is_show`) VALUES (1, 'default', 'sys', 1);
INSERT INTO `themes` (`themes_id`, `themes_na`, `sys_default`, `is_show`) VALUES (2, 'green', 'sys', 0);
INSERT INTO `themes` (`themes_id`, `themes_na`, `sys_default`, `is_show`) VALUES (4, 'orange', 'sys', 0);
INSERT INTO `themes` (`themes_id`, `themes_na`, `sys_default`, `is_show`) VALUES (3, 'red', 'sys', 0);
INSERT INTO `themes` (`themes_id`, `themes_na`, `sys_default`, `is_show`) VALUES (8, 'gray', 'sys', 0);
INSERT INTO `themes` (`themes_id`, `themes_na`, `sys_default`, `is_show`) VALUES (5, 'fashion', 'sys', 0);
INSERT INTO `themes` (`themes_id`, `themes_na`, `sys_default`, `is_show`) VALUES (6, 'pure', 'sys', 0);
INSERT INTO `themes` (`themes_id`, `themes_na`, `sys_default`, `is_show`) VALUES (7, 'simple', 'sys', 0);
INSERT INTO `themes` (`themes_id`, `themes_na`, `sys_default`, `is_show`) VALUES (9, 'rainbow', 'sys', 0);

-- 
-- 列出以下資料庫的數據： `uplinkcat`
-- 

INSERT INTO `uplinkcat` (`uplinkcat_id`, `uplinkcat_na`, `uplinkcat_url`, `sys_detault`, `order_no`, `winopen_type`, `info_state`) VALUES (1, '首頁', 'index.php', 'sys', 1, 0, 1);
INSERT INTO `uplinkcat` (`uplinkcat_id`, `uplinkcat_na`, `uplinkcat_url`, `sys_detault`, `order_no`, `winopen_type`, `info_state`) VALUES (2, '最新消息', 'news.php', 'sys', 3, 0, 1);
INSERT INTO `uplinkcat` (`uplinkcat_id`, `uplinkcat_na`, `uplinkcat_url`, `sys_detault`, `order_no`, `winopen_type`, `info_state`) VALUES (3, '討論區', 'board.php', 'sys', 4, 0, 1);
INSERT INTO `uplinkcat` (`uplinkcat_id`, `uplinkcat_na`, `uplinkcat_url`, `sys_detault`, `order_no`, `winopen_type`, `info_state`) VALUES (4, '後台管理', '../hmanager/index.php', 'sys', 4, 1, 1);

-- 
-- 列出以下資料庫的數據： `uplinklist`
-- 


-- 
-- 列出以下資料庫的數據： `useronline`
-- 


-- 
-- 列出以下資料庫的數據： `users_columns`
-- 

INSERT INTO `users_columns` (`cols_id`, `sys_na`, `usr_na`, `cols_na`, `cols_type`, `cols_size`, `cols_row`, `cols_rang`, `sys_dafault`, `only_state`, `null_state`, `cols_html`, `show_state`, `cols_order_no`) VALUES (1, '會員姓名', '會員暱稱', 'users_name', 'text', 50, 3, '', 'sys', 0, 0, '', 1, 1);
INSERT INTO `users_columns` (`cols_id`, `sys_na`, `usr_na`, `cols_na`, `cols_type`, `cols_size`, `cols_row`, `cols_rang`, `sys_dafault`, `only_state`, `null_state`, `cols_html`, `show_state`, `cols_order_no`) VALUES (2, '會員帳號', '帳號', 'users_account', 'text', 50, 3, '', 'sys', 0, 0, '', 1, 2);
INSERT INTO `users_columns` (`cols_id`, `sys_na`, `usr_na`, `cols_na`, `cols_type`, `cols_size`, `cols_row`, `cols_rang`, `sys_dafault`, `only_state`, `null_state`, `cols_html`, `show_state`, `cols_order_no`) VALUES (3, '登入密碼', '登入密碼', 'users_password', 'text', 50, 3, '', 'sys', 0, 0, '', 1, 3);
INSERT INTO `users_columns` (`cols_id`, `sys_na`, `usr_na`, `cols_na`, `cols_type`, `cols_size`, `cols_row`, `cols_rang`, `sys_dafault`, `only_state`, `null_state`, `cols_html`, `show_state`, `cols_order_no`) VALUES (4, '確認密碼', '確認密碼', 'password_confirm', 'text', 50, 3, '', 'sys', 0, 0, '', 1, 4);
INSERT INTO `users_columns` (`cols_id`, `sys_na`, `usr_na`, `cols_na`, `cols_type`, `cols_size`, `cols_row`, `cols_rang`, `sys_dafault`, `only_state`, `null_state`, `cols_html`, `show_state`, `cols_order_no`) VALUES (7, '折扣等級', '折扣等級', 'users_rank', 'select', 50, 0, '', 'sys', 0, 0, '', 1, 7);
INSERT INTO `users_columns` (`cols_id`, `sys_na`, `usr_na`, `cols_na`, `cols_type`, `cols_size`, `cols_row`, `cols_rang`, `sys_dafault`, `only_state`, `null_state`, `cols_html`, `show_state`, `cols_order_no`) VALUES (8, '會員性別', '性別', 'users_sex', 'radio', 50, 0, '0~***~保密~@@@~ 1~***~先生~@@@~ 2~***~小姐', 'usr', 0, 0, '', 1, 8);
INSERT INTO `users_columns` (`cols_id`, `sys_na`, `usr_na`, `cols_na`, `cols_type`, `cols_size`, `cols_row`, `cols_rang`, `sys_dafault`, `only_state`, `null_state`, `cols_html`, `show_state`, `cols_order_no`) VALUES (5, '會員email', '電子郵件信箱', 'users_email', 'text', 50, 0, '', 'sys', 0, 0, '', 1, 5);
INSERT INTO `users_columns` (`cols_id`, `sys_na`, `usr_na`, `cols_na`, `cols_type`, `cols_size`, `cols_row`, `cols_rang`, `sys_dafault`, `only_state`, `null_state`, `cols_html`, `show_state`, `cols_order_no`) VALUES (6, '閱讀權限', '閱讀權限', 'users_group', 'select', 50, 0, '', 'sys', 0, 0, '', 1, 6);
INSERT INTO `users_columns` (`cols_id`, `sys_na`, `usr_na`, `cols_na`, `cols_type`, `cols_size`, `cols_row`, `cols_rang`, `sys_dafault`, `only_state`, `null_state`, `cols_html`, `show_state`, `cols_order_no`) VALUES (9, '會員生日', '出生日期', 'users_birth', 'date', 50, 0, '', 'usr', 0, 0, '', 1, 9);
INSERT INTO `users_columns` (`cols_id`, `sys_na`, `usr_na`, `cols_na`, `cols_type`, `cols_size`, `cols_row`, `cols_rang`, `sys_dafault`, `only_state`, `null_state`, `cols_html`, `show_state`, `cols_order_no`) VALUES (10, 'MSN', 'MSN', 'users_msn', 'text', 50, 0, '', 'usr', 0, 0, '', 1, 10);
INSERT INTO `users_columns` (`cols_id`, `sys_na`, `usr_na`, `cols_na`, `cols_type`, `cols_size`, `cols_row`, `cols_rang`, `sys_dafault`, `only_state`, `null_state`, `cols_html`, `show_state`, `cols_order_no`) VALUES (11, 'Yahoo即時通', 'Yahoo即時通', 'users_yahoo', 'text', 50, 0, '', 'usr', 0, 0, '', 1, 11);
INSERT INTO `users_columns` (`cols_id`, `sys_na`, `usr_na`, `cols_na`, `cols_type`, `cols_size`, `cols_row`, `cols_rang`, `sys_dafault`, `only_state`, `null_state`, `cols_html`, `show_state`, `cols_order_no`) VALUES (12, 'SKYPE', 'SKYPE', 'users_skype', 'text', 50, 0, '', 'usr', 0, 0, '', 1, 12);
INSERT INTO `users_columns` (`cols_id`, `sys_na`, `usr_na`, `cols_na`, `cols_type`, `cols_size`, `cols_row`, `cols_rang`, `sys_dafault`, `only_state`, `null_state`, `cols_html`, `show_state`, `cols_order_no`) VALUES (13, '家裡電話', '家裡電話', 'users_tel_home', 'text', 50, 0, '', 'usr', 0, 0, '', 1, 13);
INSERT INTO `users_columns` (`cols_id`, `sys_na`, `usr_na`, `cols_na`, `cols_type`, `cols_size`, `cols_row`, `cols_rang`, `sys_dafault`, `only_state`, `null_state`, `cols_html`, `show_state`, `cols_order_no`) VALUES (14, '公司電話', '公司電話', 'users_tel_comp', 'text', 50, 0, '', 'usr', 0, 0, '', 1, 14);
INSERT INTO `users_columns` (`cols_id`, `sys_na`, `usr_na`, `cols_na`, `cols_type`, `cols_size`, `cols_row`, `cols_rang`, `sys_dafault`, `only_state`, `null_state`, `cols_html`, `show_state`, `cols_order_no`) VALUES (15, '行動電話', '行動電話', 'users_cell', 'text', 50, 0, '', 'usr', 0, 0, '', 1, 15);
INSERT INTO `users_columns` (`cols_id`, `sys_na`, `usr_na`, `cols_na`, `cols_type`, `cols_size`, `cols_row`, `cols_rang`, `sys_dafault`, `only_state`, `null_state`, `cols_html`, `show_state`, `cols_order_no`) VALUES (16, '住址', '住址', 'users_address', 'text', 50, 0, '', 'usr', 0, 0, '', 1, 16);
INSERT INTO `users_columns` (`cols_id`, `sys_na`, `usr_na`, `cols_na`, `cols_type`, `cols_size`, `cols_row`, `cols_rang`, `sys_dafault`, `only_state`, `null_state`, `cols_html`, `show_state`, `cols_order_no`) VALUES (17, '自訂欄位1', '工作地點', 'users_text1', 'text', 50, 0, '', 'usr', 0, 0, '', 0, 17);
INSERT INTO `users_columns` (`cols_id`, `sys_na`, `usr_na`, `cols_na`, `cols_type`, `cols_size`, `cols_row`, `cols_rang`, `sys_dafault`, `only_state`, `null_state`, `cols_html`, `show_state`, `cols_order_no`) VALUES (18, '自訂欄位2', '自定義2', 'users_text2', 'text', 50, 0, '', 'usr', 0, 0, '', 0, 18);
INSERT INTO `users_columns` (`cols_id`, `sys_na`, `usr_na`, `cols_na`, `cols_type`, `cols_size`, `cols_row`, `cols_rang`, `sys_dafault`, `only_state`, `null_state`, `cols_html`, `show_state`, `cols_order_no`) VALUES (19, '自訂欄位3', '自定義3', 'users_text3', 'text', 50, 0, '', 'usr', 0, 0, '', 0, 19);
INSERT INTO `users_columns` (`cols_id`, `sys_na`, `usr_na`, `cols_na`, `cols_type`, `cols_size`, `cols_row`, `cols_rang`, `sys_dafault`, `only_state`, `null_state`, `cols_html`, `show_state`, `cols_order_no`) VALUES (20, '自訂欄位4', '自定義4', 'users_text4', 'text', 50, 0, '', 'usr', 0, 0, '', 0, 20);
INSERT INTO `users_columns` (`cols_id`, `sys_na`, `usr_na`, `cols_na`, `cols_type`, `cols_size`, `cols_row`, `cols_rang`, `sys_dafault`, `only_state`, `null_state`, `cols_html`, `show_state`, `cols_order_no`) VALUES (21, '自訂欄位5', '自定義5', 'users_text5', 'text', 50, 0, '', 'usr', 0, 0, '', 0, 21);
INSERT INTO `users_columns` (`cols_id`, `sys_na`, `usr_na`, `cols_na`, `cols_type`, `cols_size`, `cols_row`, `cols_rang`, `sys_dafault`, `only_state`, `null_state`, `cols_html`, `show_state`, `cols_order_no`) VALUES (22, '自訂欄位6', '自定義6', 'users_text6', 'text', 50, 0, '', 'usr', 0, 0, '', 0, 22);
INSERT INTO `users_columns` (`cols_id`, `sys_na`, `usr_na`, `cols_na`, `cols_type`, `cols_size`, `cols_row`, `cols_rang`, `sys_dafault`, `only_state`, `null_state`, `cols_html`, `show_state`, `cols_order_no`) VALUES (23, '自訂欄位7', '自定義7', 'users_text7', 'text', 50, 0, '', 'usr', 0, 0, '', 0, 23);
INSERT INTO `users_columns` (`cols_id`, `sys_na`, `usr_na`, `cols_na`, `cols_type`, `cols_size`, `cols_row`, `cols_rang`, `sys_dafault`, `only_state`, `null_state`, `cols_html`, `show_state`, `cols_order_no`) VALUES (24, '自訂欄位8', '自定義8', 'users_text8', 'text', 50, 0, '', 'usr', 0, 0, '', 0, 24);
INSERT INTO `users_columns` (`cols_id`, `sys_na`, `usr_na`, `cols_na`, `cols_type`, `cols_size`, `cols_row`, `cols_rang`, `sys_dafault`, `only_state`, `null_state`, `cols_html`, `show_state`, `cols_order_no`) VALUES (25, '自訂欄位9', '自定義9', 'users_text9', 'text', 50, 0, '', 'usr', 0, 0, '', 0, 25);
INSERT INTO `users_columns` (`cols_id`, `sys_na`, `usr_na`, `cols_na`, `cols_type`, `cols_size`, `cols_row`, `cols_rang`, `sys_dafault`, `only_state`, `null_state`, `cols_html`, `show_state`, `cols_order_no`) VALUES (26, '自訂欄位10', '自定義10', 'users_text10', 'text', 50, 0, '', 'usr', 0, 0, '', 0, 26);
INSERT INTO `users_columns` (`cols_id`, `sys_na`, `usr_na`, `cols_na`, `cols_type`, `cols_size`, `cols_row`, `cols_rang`, `sys_dafault`, `only_state`, `null_state`, `cols_html`, `show_state`, `cols_order_no`) VALUES (27, '自訂欄位11', '自定義11', 'users_text11', 'text', 50, 0, '', 'usr', 0, 0, '', 0, 27);
INSERT INTO `users_columns` (`cols_id`, `sys_na`, `usr_na`, `cols_na`, `cols_type`, `cols_size`, `cols_row`, `cols_rang`, `sys_dafault`, `only_state`, `null_state`, `cols_html`, `show_state`, `cols_order_no`) VALUES (28, '自訂欄位12', '自定義12', 'users_text12', 'text', 50, 0, '', 'usr', 0, 0, '', 0, 28);

-- 
-- 列出以下資料庫的數據： `users_data`
-- 


-- 
-- 列出以下資料庫的數據： `users_group`
-- 

INSERT INTO `users_group` (`group_id`, `group_na`, `info_state`) VALUES (1, '一般會員', 1);

-- 
-- 列出以下資料庫的數據： `users_rank`
-- 


-- 
-- 列出以下資料庫的數據： `user_register`
-- 

INSERT INTO `user_register` (`register_content`, `register_default`, `info_state`) VALUES ('<p>&nbsp;</p>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>1. 認知與接受條款<br />\nEZPORTAL股份有限公司(以下簡稱「EZPORTAL」)係依據本服務條款提供EZPORTAL（http://www.XXXX.com.tw）服務 (以下簡稱「本服務」)。當您完成EZPORTAL之會員註冊手續、或開始使用本服務時，即表示您已閱讀、瞭解並同意接受本服務條款之所有內容。EZPORTAL公司有權於任何時間修改或變更本約定書之內容，建議您隨時注意該等修改或變更。您於任何修改或變更後繼續使用本服務時，視為您已閱讀、瞭解並同意接受該等修改或變更。 若您為未滿二十歲之未成年人，應於您的家長（或監護人）閱讀、瞭解並同意本約定書之所有內容及其後修改變更後，方得註冊為會員、使用或繼續使用本服務。當您使用或繼續使用EZPORTAL時，即推定您的家長（或監護人）已閱讀、瞭解並同意接受本約定書之所有內容及其後修改變更。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>2. 您的註冊義務<br />\n為了能使用本服務，您同意以下事項：</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>依本服務註冊表之提示提供您本人正確、最新的資料，且無重覆註冊登錄等情事。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>即時維持並更新您個人資料，確保其正確性，以獲取最佳之服務。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>若您提供任何錯誤或不實的資料、或未按指示提供資料、或欠缺必要之資料時，EZPORTAL有權不經事先通知，逕行暫停或終止您的帳號，並拒絕您使用本服務之全部或一部。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>3. EZPORTAL隱私權政策<br />\n關於您的會員註冊以及其他特定資料依EZPORTAL「<span>隱私權政策」受到保護與規範。</span></div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>4. 會員帳號、密碼及安全<br />\n完成本服務的登記程序之後，您自行設定之會員帳號及密碼，為維持密碼及帳號之機密安全，是您的責任，任何依照規定方法輸入會員帳號及密碼與登入資料一致時，無論是否由本人親自輸入，均將視為會員本人所使用。利用該密碼及帳號所進行的一切行動，您將負完全的責任。您並同意以下事項：</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>您的密碼或帳號遭到盜用或有其他任何安全問題發生時，您將立即通知EZPORTAL。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>每次連線完畢，均結束您的帳號使用。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>您的帳號、密碼及會員權益均僅供您個人使用及享有，不得轉借、轉讓他人或與他人合用。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>帳號及密碼遭盜用、不當使用或其他EZPORTAL無法辯識是否為本人親自使用之情況時，EZPORTAL對此所致之損害，概不負責。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>5. 兒童及青少年之保護<br />\n為確保兒童及青少年使用網路的安全，並避免隱私權受到侵犯，家長（或監護人）應盡到下列義務： 未滿十二歲之兒童使用本服務時，應全程在旁陪伴，十二歲以上未滿十八歲之青少年使用本服務前亦應斟酌是否給予同意。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>6. 使用者的守法義務及承諾<br />\n您承諾絕不為任何非法目的或以任何非法方式使用本服務，並承諾遵守中華民國相關法規及一切使用網際網路之國際慣例。您若係中華民國以外之使用者，並同意遵守所屬國家或地域之法令。您同意並保證不得利用本服務從事侵害他人權益或違法之行為，包括但不限於：</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>公布或傳送任何誹謗、侮辱、具威脅性、攻擊性、不雅、猥褻、不實、違反公共秩序或善良風俗或其他不法之文字、圖片或任何形式的檔案</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>侵害或毀損EZPORTAL或他人名譽、隱私權、營業秘密、商標權、著作權、專利權、其他智慧財產權及其他權利</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>違反依法律或契約所應負之保密義務</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>冒用他人名義使用本服務</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>傳輸或散佈電腦病毒</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>從事未經EZPORTAL事前授權的商業行為</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>刊載、傳輸、發送垃圾郵件、連鎖信、違法或未經EZPORTAL許可之多層次傳銷訊息及廣告等；或儲存任何侵害他人智慧財產權或違反法令之資料</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>對本服務其他用戶或第三人產生困擾、不悅或違反一般網路禮節致生反感之行為</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>其他不符本服務所提供的使用目的之行為或EZPORTAL有正當理由認為不適當之行為</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>7. EZPORTAL得依實際執行情形，增加、修改或終止相關活動，並選擇最適方式告知會員。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>8. 於發生下列情形之一時，EZPORTAL有權可以停止、中斷提供本服務：</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>EZPORTAL網站電子通信設備進行必要之保養及施工時</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>發生突發性之電子通信設備故障時</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>EZPORTAL網站申請之電子通信服務被停止，無法提供服務時</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>由於天災等不可抗力之因素或其他不可歸責於EZPORTAL致使EZPORTAL網站無法提供服務時</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>9. 交易行為<br />\n您同意使用本服務訂購產品時，於EZPORTAL通知確認交易成立前，EZPORTAL仍保有不接受訂單或取消出貨之權利。您向EZPORTAL發出訂購通知後，系統將自動發出接受通知，但此通知並非訂單確認通知，關於交易成立與否EZPORTAL將另行告知。<br />\n您若於使用本服務訂購產品後倘任意退換貨、取消訂單、或有任何EZPORTAL認為不適當而造成EZPORTAL作業上之困擾或損害之行為，EZPORTAL均可視情況採取拒絕交易或永久取消會員資格辦理。若您訂購之產品若屬於以下情形：（１）預購類商品（２）商品頁顯示無庫存（３）須向供應商調貨（４）轉由廠商出貨，因商品交易特性之故，倘商品缺絕、或廠商因故無法順利供貨之情況下，您同意EZPORTAL得視情況取消或修改交易（訂單）內容、或延遲交貨時間，並選擇以最適方式告知。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>10. 責任之限制與排除<br />\n您使用本服務瀏覽到的所有廣告內容、文字與圖片之說明、展示樣品或其他銷售資訊，均由各該廣告商、產品與服務的供應商所設計與提出。您對於廣告之正確性與可信度應自行斟酌與判斷。EZPORTAL僅接受委託予以刊登，不對前述廣告負擔保責任。 本服務所提供之各項功能，均依該功能當時之現況提供使用，EZPORTAL對於其效能、速度、完整性、可靠性、安全性、正確性等，皆不負擔任何明示或默示之擔保責任。 EZPORTAL並不保證本服務之網頁、伺服器、網域等所傳送的電子郵件或其內容不會含有電腦病毒等有害物；亦不保證郵件、檔案或資料之傳輸儲存均正確無誤不會斷線和出錯等，因各該郵件、檔案或資料傳送或儲存失敗、遺失或錯誤等所致之損害，EZPORTAL不負賠償責任。 您同意於使用本服務過程中所有資料記錄，均以EZPORTAL資料庫所儲存之電子資料為準，如有糾紛或訴訟，並以該電子資料為認定標準。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>11. 智慧財產權的保護<br />\nEZPORTAL所使用之軟體或程式、網站上所有內容，包括但不限於著作、圖片、檔案、資訊、資料、網站架構、網站畫面的安排、網頁設計，均由EZPORTAL或其他權利人依法擁有其智慧財產權，包括但不限於商標權、專利權、著作權、營業秘密與專有技術等。任何人不得逕自使用、修改、重製、公開播送、改作、散布、發行、公開發表、進行還原工程、解編或反向組譯。若您欲引用或轉載前述軟體、程式或網站內容，必須依法取得EZPORTAL或其他權利人的事前書面同意。尊重智慧財產權是您應盡的義務，如有違反，您應對EZPORTAL負損害賠償責任（包括但不限於訴訟費用及律師費用等）。<br />\n在尊重他人智慧財產權之原則下，會員同意在使用EZPORTAL之服務時，不作侵害他人智慧財產權之行為。<br />\n若會員有涉及重覆侵權之情事，EZPORTAL可暫停全部或部份之服務，或逕自以取消會員帳號之方式處理。<br />\n若有發現智慧財產權遭侵害之情事，請將所遭侵權之情形及聯絡方式，並附具真實陳述及擁有合法智慧財產權之聲明，並以下列方式聯絡EZPORTAL：<br />\n<b>以電子郵件</b><b>(E-mail)</b><b>寄送至：</b><b><u> XXXX@XXX.com.tw</u></b> (請注意！此為限定用途之信箱，非關侵權事項通知之信件寄送至此將不獲受理，EZPORTAL會員有任何疑問請至<span>客服中心詢問</span>)</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>12. 您對EZPORTAL之授權<br />\n對於會員所登錄或留存之個人資料，會員同意EZPORTAL網站得於合理之範圍內蒐集、處理、保存、傳遞及使用該等資料，以提供使用者其他資訊或服務、或作成會員統計資料、或進行關於網路行為之調查或研究，或為任何之合法使用。 若您無合法權利得授權他人使用、修改、重製、公開播送、改作、散布、發行、公開發表某資料，並將前述權利轉授權第三人，請勿擅自將該資料上載、傳送、輸入或提供至EZPORTAL。任何資料一經您上載、傳送、輸入或提供至EZPORTAL時，視為您已允許EZPORTAL無條件使用、修改、重製、公開播送、改作、散布、發行、公開發表該等資料，並得將前述權利轉授權他人，您對此絕無異議。您並應保證EZPORTAL使用、修改、重製、公開播送、改作、散布、發行、公開發表、轉授權該等資料，不致侵害任何第三人之智慧財產權，否則應對EZPORTAL負損害賠償責任（包括但不限於訴訟費用及律師費用等）。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>13. 特別授權事項<br />\n因使用本服務所提供之網路交易或活動，可能須透過宅配或貨運業者始能完成貨品(或贈品等)之配送或取回，因此，您同意並授權EZPORTAL得視該次網路交易或活動之需求及目的，將由您所提供且為配送所必要之個人資料(如收件人姓名、配送地址、連絡電話等)，提供予宅配或貨運業者，以利完成該次貨品(或贈品等)之配送、取回。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>14. 拒絕或終止您的使用<br />\n您同意EZPORTAL得基於維護交易安全之考量，因任何理由，包含但不限於缺乏使用，或違反本服務條款的明文規定及精神，終止您的密碼、帳號（或其任何部分）或本服務之使用，並將本服務內任何「會員內容」加以移除並刪除，亦得已通知之情形下，隨時終止本服務或任何部分。此外，您同意若本服務之使用被終止，EZPORTAL對您或任何第三人均不承擔責任。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>15. 準據法與管轄法院<br />\n本約定書之解釋與適用，以及與本約定書有關的爭議，均應依照中華民國法律予以處理，並以台灣台北地方法院為第一審管轄法院。</div>\n<div>&nbsp;</div>', '<p>&nbsp;</p>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>1. 認知與接受條款<br />\nezportal股份有限公司(以下簡稱「ezportal」)係依據本服務條款提供ezportal（http://www.XXXX.com.tw）服務 (以下簡稱「本服務」)。當您完成ezportal之會員註冊手續、或開始使用本服務時，即表示您已閱讀、瞭解並同意接受本服務條款之所有內容。ezportal公司有權於任何時間修改或變更本約定書之內容，建議您隨時注意該等修改或變更。您於任何修改或變更後繼續使用本服務時，視為您已閱讀、瞭解並同意接受該等修改或變更。 若您為未滿二十歲之未成年人，應於您的家長（或監護人）閱讀、瞭解並同意本約定書之所有內容及其後修改變更後，方得註冊為會員、使用或繼續使用本服務。當您使用或繼續使用ezportal時，即推定您的家長（或監護人）已閱讀、瞭解並同意接受本約定書之所有內容及其後修改變更。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>2. 您的註冊義務<br />\n為了能使用本服務，您同意以下事項：</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>依本服務註冊表之提示提供您本人正確、最新的資料，且無重覆註冊登錄等情事。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>即時維持並更新您個人資料，確保其正確性，以獲取最佳之服務。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>若您提供任何錯誤或不實的資料、或未按指示提供資料、或欠缺必要之資料時，ezportal有權不經事先通知，逕行暫停或終止您的帳號，並拒絕您使用本服務之全部或一部。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>3. ezportal隱私權政策<br />\n關於您的會員註冊以及其他特定資料依ezportal「<span>隱私權政策」受到保護與規範。</span></div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>4. 會員帳號、密碼及安全<br />\n完成本服務的登記程序之後，您自行設定之會員帳號及密碼，為維持密碼及帳號之機密安全，是您的責任，任何依照規定方法輸入會員帳號及密碼與登入資料一致時，無論是否由本人親自輸入，均將視為會員本人所使用。利用該密碼及帳號所進行的一切行動，您將負完全的責任。您並同意以下事項：</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>您的密碼或帳號遭到盜用或有其他任何安全問題發生時，您將立即通知ezportal。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>每次連線完畢，均結束您的帳號使用。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>您的帳號、密碼及會員權益均僅供您個人使用及享有，不得轉借、轉讓他人或與他人合用。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>帳號及密碼遭盜用、不當使用或其他ezportal無法辯識是否為本人親自使用之情況時，ezportal對此所致之損害，概不負責。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>5. 兒童及青少年之保護<br />\n為確保兒童及青少年使用網路的安全，並避免隱私權受到侵犯，家長（或監護人）應盡到下列義務： 未滿十二歲之兒童使用本服務時，應全程在旁陪伴，十二歲以上未滿十八歲之青少年使用本服務前亦應斟酌是否給予同意。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>6. 使用者的守法義務及承諾<br />\n您承諾絕不為任何非法目的或以任何非法方式使用本服務，並承諾遵守中華民國相關法規及一切使用網際網路之國際慣例。您若係中華民國以外之使用者，並同意遵守所屬國家或地域之法令。您同意並保證不得利用本服務從事侵害他人權益或違法之行為，包括但不限於：</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>公布或傳送任何誹謗、侮辱、具威脅性、攻擊性、不雅、猥褻、不實、違反公共秩序或善良風俗或其他不法之文字、圖片或任何形式的檔案</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>侵害或毀損ezportal或他人名譽、隱私權、營業秘密、商標權、著作權、專利權、其他智慧財產權及其他權利</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>違反依法律或契約所應負之保密義務</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>冒用他人名義使用本服務</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>傳輸或散佈電腦病毒</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>從事未經ezportal事前授權的商業行為</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>刊載、傳輸、發送垃圾郵件、連鎖信、違法或未經ezportal許可之多層次傳銷訊息及廣告等；或儲存任何侵害他人智慧財產權或違反法令之資料</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>對本服務其他用戶或第三人產生困擾、不悅或違反一般網路禮節致生反感之行為</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>其他不符本服務所提供的使用目的之行為或ezportal有正當理由認為不適當之行為</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>7. ezportal得依實際執行情形，增加、修改或終止相關活動，並選擇最適方式告知會員。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>8. 於發生下列情形之一時，ezportal有權可以停止、中斷提供本服務：</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>ezportal網站電子通信設備進行必要之保養及施工時</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>發生突發性之電子通信設備故障時</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>ezportal網站申請之電子通信服務被停止，無法提供服務時</div>\n<div><span><span>&nbsp;&nbsp;&nbsp;&nbsp; </span></span>由於天災等不可抗力之因素或其他不可歸責於ezportal致使ezportal網站無法提供服務時</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>9. 交易行為<br />\n您同意使用本服務訂購產品時，於ezportal通知確認交易成立前，ezportal仍保有不接受訂單或取消出貨之權利。您向ezportal發出訂購通知後，系統將自動發出接受通知，但此通知並非訂單確認通知，關於交易成立與否ezportal將另行告知。<br />\n您若於使用本服務訂購產品後倘任意退換貨、取消訂單、或有任何ezportal認為不適當而造成ezportal作業上之困擾或損害之行為，ezportal均可視情況採取拒絕交易或永久取消會員資格辦理。若您訂購之產品若屬於以下情形：（１）預購類商品（２）商品頁顯示無庫存（３）須向供應商調貨（４）轉由廠商出貨，因商品交易特性之故，倘商品缺絕、或廠商因故無法順利供貨之情況下，您同意ezportal得視情況取消或修改交易（訂單）內容、或延遲交貨時間，並選擇以最適方式告知。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>10. 責任之限制與排除<br />\n您使用本服務瀏覽到的所有廣告內容、文字與圖片之說明、展示樣品或其他銷售資訊，均由各該廣告商、產品與服務的供應商所設計與提出。您對於廣告之正確性與可信度應自行斟酌與判斷。ezportal僅接受委託予以刊登，不對前述廣告負擔保責任。 本服務所提供之各項功能，均依該功能當時之現況提供使用，ezportal對於其效能、速度、完整性、可靠性、安全性、正確性等，皆不負擔任何明示或默示之擔保責任。 ezportal並不保證本服務之網頁、伺服器、網域等所傳送的電子郵件或其內容不會含有電腦病毒等有害物；亦不保證郵件、檔案或資料之傳輸儲存均正確無誤不會斷線和出錯等，因各該郵件、檔案或資料傳送或儲存失敗、遺失或錯誤等所致之損害，ezportal不負賠償責任。 您同意於使用本服務過程中所有資料記錄，均以ezportal資料庫所儲存之電子資料為準，如有糾紛或訴訟，並以該電子資料為認定標準。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>11. 智慧財產權的保護<br />\nezportal所使用之軟體或程式、網站上所有內容，包括但不限於著作、圖片、檔案、資訊、資料、網站架構、網站畫面的安排、網頁設計，均由ezportal或其他權利人依法擁有其智慧財產權，包括但不限於商標權、專利權、著作權、營業秘密與專有技術等。任何人不得逕自使用、修改、重製、公開播送、改作、散布、發行、公開發表、進行還原工程、解編或反向組譯。若您欲引用或轉載前述軟體、程式或網站內容，必須依法取得ezportal或其他權利人的事前書面同意。尊重智慧財產權是您應盡的義務，如有違反，您應對ezportal負損害賠償責任（包括但不限於訴訟費用及律師費用等）。<br />\n在尊重他人智慧財產權之原則下，會員同意在使用ezportal之服務時，不作侵害他人智慧財產權之行為。<br />\n若會員有涉及重覆侵權之情事，ezportal可暫停全部或部份之服務，或逕自以取消會員帳號之方式處理。<br />\n若有發現智慧財產權遭侵害之情事，請將所遭侵權之情形及聯絡方式，並附具真實陳述及擁有合法智慧財產權之聲明，並以下列方式聯絡ezportal：<br />\n<b>以電子郵件</b><b>(E-mail)</b><b>寄送至：</b><b><u> XXXX@XXX.com.tw</u></b> (請注意！此為限定用途之信箱，非關侵權事項通知之信件寄送至此將不獲受理，ezportal會員有任何疑問請至<span>客服中心詢問</span>)</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>12. 您對ezportal之授權<br />\n對於會員所登錄或留存之個人資料，會員同意ezportal網站得於合理之範圍內蒐集、處理、保存、傳遞及使用該等資料，以提供使用者其他資訊或服務、或作成會員統計資料、或進行關於網路行為之調查或研究，或為任何之合法使用。 若您無合法權利得授權他人使用、修改、重製、公開播送、改作、散布、發行、公開發表某資料，並將前述權利轉授權第三人，請勿擅自將該資料上載、傳送、輸入或提供至ezportal。任何資料一經您上載、傳送、輸入或提供至ezportal時，視為您已允許ezportal無條件使用、修改、重製、公開播送、改作、散布、發行、公開發表該等資料，並得將前述權利轉授權他人，您對此絕無異議。您並應保證ezportal使用、修改、重製、公開播送、改作、散布、發行、公開發表、轉授權該等資料，不致侵害任何第三人之智慧財產權，否則應對ezportal負損害賠償責任（包括但不限於訴訟費用及律師費用等）。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>13. 特別授權事項<br />\n因使用本服務所提供之網路交易或活動，可能須透過宅配或貨運業者始能完成貨品(或贈品等)之配送或取回，因此，您同意並授權ezportal得視該次網路交易或活動之需求及目的，將由您所提供且為配送所必要之個人資料(如收件人姓名、配送地址、連絡電話等)，提供予宅配或貨運業者，以利完成該次貨品(或贈品等)之配送、取回。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>14. 拒絕或終止您的使用<br />\n您同意ezportal得基於維護交易安全之考量，因任何理由，包含但不限於缺乏使用，或違反本服務條款的明文規定及精神，終止您的密碼、帳號（或其任何部分）或本服務之使用，並將本服務內任何「會員內容」加以移除並刪除，亦得已通知之情形下，隨時終止本服務或任何部分。此外，您同意若本服務之使用被終止，ezportal對您或任何第三人均不承擔責任。</div>\n<div><span><span>&nbsp;&nbsp;&nbsp; </span></span>15. 準據法與管轄法院<br />\n本約定書之解釋與適用，以及與本約定書有關的爭議，均應依照中華民國法律予以處理，並以台灣台北地方法院為第一審管轄法院。</div>\n<div>&nbsp;</div>', 1);

-- 
-- 列出以下資料庫的數據： `vote_assistant`
-- 


-- 
-- 列出以下資料庫的數據： `vote_main`
-- 


-- 
-- 列出以下資料庫的數據： `weblink`
-- 


-- 
-- 列出以下資料庫的數據： `website_config`
-- 

INSERT INTO `website_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (1, '', 'website_na', 'text', '', '', 'EZPORTAL hmanager', '', '', 1);
INSERT INTO `website_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (2, '', 'website_title', 'text', '', '', 'EZPORTAL 測試版', '', '', 1);
INSERT INTO `website_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (3, '', 'website_descript', 'text', '', '', 'EZPORTAL', '', '', 1);
INSERT INTO `website_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (4, '', 'websitw_keyword', 'text', '', '', 'EZPORTAL', '', '', 1);
INSERT INTO `website_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (5, '', 'websitw_addr', 'text', '', '', 'EZPORTAL', '', '', 1);
INSERT INTO `website_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (6, '', 'websitw_email', 'text', '', '', 'EZPORTAL@EZPORTAL', '', '', 1);
INSERT INTO `website_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (7, '', 'websitw_tel', 'text', '', '', 'EZPORTAL', '', '', 1);
INSERT INTO `website_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (8, '', 'websitw_logo', 'file', '', '/hyfiles/logo.png', 'logo.png', '', '', 1);
INSERT INTO `website_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (9, '', 'websitw_close', 'radio', '1,0', '', '1', '', '', 1);
INSERT INTO `website_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (10, '', 'close_memo', 'textarea', '', '', '暫時關閉網站，請洽管理員!!', '', '', 1);
INSERT INTO `website_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (12, '', 'user_email_chk', 'radio', '1,0', '', '1', '', '', 1);
INSERT INTO `website_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (13, '', 'email_chk_days', 'text', '', '', '3', '', '', 1);
INSERT INTO `website_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (14, '', 'file_upload_max', 'select', '2,4,6,8,10,20,30,50', '', '4', 'Mb', '', 1);
INSERT INTO `website_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (11, '', 'header_cust', 'radio', '1,0', '', '0', '', '', 1);
INSERT INTO `website_config` (`data_id`, `parent_id`, `col_name`, `input_type`, `store_range`, `store_folder`, `col_value`, `col_unit`, `order_num`, `info_state`) VALUES (15, '', 'retain_history_days', 'text', '', '', '10', '', '', 1);
