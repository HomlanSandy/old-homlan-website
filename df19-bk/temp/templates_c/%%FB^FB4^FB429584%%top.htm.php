<?php /* Smarty version 2.6.26, created on 2012-07-09 15:58:35
         compiled from top.htm */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無標題文件</title>
<link href="css/style1.css" rel="stylesheet" type="text/css">
</head>
<!-- /*
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	top.htm	後台首頁top_banner HTML顯示頁面
	│	開發者		│	玉玲
	│	版本		│	v2.0.0.0110801
	├=======================================================================================┤
	│	1.	v2.0.0.0110801	2010/11/08	廷俊	測試版top_banner顯示"此為測試版，測試期限:XXXX-XX"，並以紅字標記
	│	2.	v2.0.0.0110901	2010/11/09	廷俊	top_banner顯示更改
	│	3.	v2.0.8.1011401	2011/01/14	廷俊	a.EZPORTAL版顯示後台LOGO，欲設/hmanager/images/hmanager_logo.gif
	│											b.OEM版顯示後台LOGO，欲設/hyfiles/hmanager_logo.gif
	└=======================================================================================┘
*/ -->
<body>
<div id="top">
<form name="topfrm" method="post" action="<?php echo $this->_tpl_vars['topfrm_act']; ?>
">

<div id="logo"><img border="0" alt="" align="absMiddle" src="<?php echo $this->_tpl_vars['hmanager_logo']; ?>
"/></div>
<!--
	2010-06-04,10 edit by 廷俊
	------------------------------------------------------
	top_banner顯示更改
	------------------------------------------------------		
	2010-11-08 edit by 廷俊
	------------------------------------------------------
	測試版top_banner顯示"此為測試版，測試期限:XXXX-XX"，並以紅字標記
	------------------------------------------------------	
	2010-11-09 edit by 廷俊
	------------------------------------------------------
	top_banner顯示更改
	------------------------------------------------------	
-->
<table width="50%" border="0" align="left" cellpadding="1" cellspacing="1" id="hyshop_version">
  <tr>
    <td colspan=2 align="left" valign="middle"><?php echo $this->_tpl_vars['Ezportal_Title']; ?>
</td>
  </tr>
  <tr>
    <td align="left" valign="middle" class="dateline"><?php echo $this->_tpl_vars['Ezportal_prd_version']; ?>
 : <?php echo $this->_tpl_vars['Ezportal_Version']; ?>
</td> 
    <td align="left" valign="middle" class="dateline"><?php echo $this->_tpl_vars['Ezportal_DateTitle']; ?>
</td>    
  </tr>
</table>

<table id="login_msg" width="50%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="middle"><p align="center">Welcom,<?php echo $this->_tpl_vars['manager_na']; ?>
</p></td>
    <td align="center" valign="middle">
    <input type="button" class="login_btn" value="<?php echo $this->_tpl_vars['clear_tempfile']; ?>
" onclick="parent.window.open('<?php echo $this->_tpl_vars['clear_tempfile_url']; ?>
','_self','');">
    <input type="submit" class="login_btn" value="<?php echo $this->_tpl_vars['Logout_hmanager']; ?>
">
    </td>
  </tr>
</table>
</form>
</div>
<div id="prm"></span>
<?php echo $this->_tpl_vars['temp_log']; ?>
</body>
</html>