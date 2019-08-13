<?php /* Smarty version 2.6.26, created on 2012-07-09 15:58:33
         compiled from index.htm */ ?>
<html>
<head>
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="js/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="css/style1.css" rel="stylesheet" type="text/css" />
<!-- /*
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	index.htm	後台首頁
	│	開發者		│	玉玲
	│	版本		│	v2.0.8.1010601
	├=======================================================================================┤
	│	1.	v2.0.8.1010601	2011/01/06	廷俊	將後台首頁frameset切割為上下三等份，設定為上(top)、主畫面、下(bottom)
	│	2.	v2.0.8.1011801	2011/01/18	廷俊	將下方bottom放入語言頁籤內
	└=======================================================================================┘
*/ -->
<!--
	2010-06-10 edit by 廷俊
	------------------------------------------------------
	後台title顯示更改
	------------------------------------------------------		
	2011-01-18 edit by 廷俊
	------------------------------------------------------
	將下方bottom放入語言頁籤內
	------------------------------------------------------		
-->
<title><?php echo $this->_tpl_vars['Ezportal_Title']; ?>
</title>
</head>

<frameset rows="50,*" framespacing="0" frameborder="no" border="0">
<frame name="topframe" id="topframe" src="?act=top" framespacing="0" frameborder="no" border="0" scrolling="no">
<frame name="tabsframe" id="tabsframe" src="?act=Tab" framespacing="0" frameborder="no" border="0" scrolling="no">
</frameset>

</html>