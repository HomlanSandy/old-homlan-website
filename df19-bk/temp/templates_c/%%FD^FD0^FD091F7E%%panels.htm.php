<?php /* Smarty version 2.6.26, created on 2012-07-09 15:58:36
         compiled from panels.htm */ ?>
<html>
<head>
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- /*
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	panels.htm	後台首頁-語言別頁籤的內容
	│	開發者		│	廷俊
	│	版本		│	v2.0.8.1010601
	├=======================================================================================┤
	│	1.	v2.0.8.1010601	2011/01/06	廷俊	1.新增主畫面切割顯示頁
	│											2.將主畫面frameset切割為左右三等份，設定為左方選單(left)、收合線(arrow)、內容頁(main)
	│	2.	v2.0.8.1011101	2011/01/11	廷俊	主畫面切割顯示頁網址傳get值，至後台左方選單頁面
	│	3.	v2.0.8.1011801	2011/01/18	廷俊	1.將下方bottom放入語言頁籤內
	│											2.主畫面切割顯示頁網址傳get值，至後台下方bottom頁面
	│											3.主畫面切割顯示頁網址傳get值，至後台內容頁main頁面
	└=======================================================================================┘
*/ -->
<title></title>
</head>
<!--
	2011-01-18 edit by 廷俊
	------------------------------------------------------
	將下方bottom放入語言頁籤內
	------------------------------------------------------		
-->
<frameset rows="*,25" framespacing="0" frameborder="no" border="0">
	<frameset cols="200,10,*" framespacing="0" frameborder="no" border="0" id="menu">
		<frame name="leftframe" id="leftframe" src="?act=left&lang=<?php echo $this->_tpl_vars['lang']; ?>
" framespacing="0" frameborder="no" border="0" scrolling="auto">
		<frame name="arrowframe" id="arrowframe" src="arrow.html"  framespacing="0" frameborder="no" border="0" scrolling="no">
		<frame name="mainframe" id="mainframe" src="?act=main&lang=<?php echo $this->_tpl_vars['lang']; ?>
" framespacing="0" frameborder="no" border="0" scrolling="auto">
	</frameset>
	<frame name="bottomframe" id="bottomframe" src="?act=bottom&lang=<?php echo $this->_tpl_vars['lang']; ?>
" framespacing="0" frameborder="no" border="0" scrolling="no">
</frameset>
</html>