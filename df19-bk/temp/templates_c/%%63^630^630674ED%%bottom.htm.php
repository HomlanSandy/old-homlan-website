<?php /* Smarty version 2.6.26, created on 2012-07-09 15:58:38
         compiled from bottom.htm */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link href="css/style1.css" rel="stylesheet" type="text/css">
</head>
<!--
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	bottom.htm	後台bottom的htm頁面
	│	開發者		│	玉玲
	│	版本		│	v1.0.1.0070601
	├=======================================================================================┤
	│	1.	v1.0.1.0070601	2010/07/06	廷俊	新增bottom語言別、顯示建議瀏覽器and解析度
	│	2.	v1.0.1.0101101	2010/10/11	廷俊	後台LOGO跟商標，設計可使經銷商做更改
	│	3.	v2.0.0.0101201	2010/10/12	廷俊	軟體名稱為EZPORTAL時，顯示錯誤回報
	│	4.	v2.0.0.0110901	2010/11/09	廷俊	暫先隱藏錯誤回報功能按鈕
	│	5.	v2.0.0.0110901	2010/11/09	廷俊	加入顯示前台線上人數
	│	6.	v2.0.8.1011401	2011/01/14	廷俊	修正下方bottom的前台首頁按鈕，依目前所在語言分別連結至前台首頁
	│	7.	v2.0.8.1011801	2011/01/18	廷俊	1.修正下方bottom的前台首頁按鈕，依目前所在語言分別連結至前台首頁
	│											2.首頁下方bottom，增加顯示目前所在語言別
	│											3.將下方bottom放入語言頁籤內
	│											4.因下方bottom放入語言頁籤內，則需調整語言頁籤的版面配置
	│	8.	v2.0.8.1011901	2011/01/19	廷俊	點選後台首頁按鈕，則執行父視窗整個頁面(修正為最上層父視窗)重新整理，並連結至後台首頁
	│	9.	v03.00.09.1060901	2011/06/20	廷俊	1.EZPORTAL後台首頁，顯示錯誤回報
	│												2.錯誤回報固定連結至faq.hyware.com.tw/faq/index.php
	└=======================================================================================┘
*/-->
<body>
<div id="bottom_style">
<!--
	2010-07-06 edit by 廷俊
	------------------------------------------------------
	1.新增bottom語言別
	2.後台顯示建議瀏覽器and解析度
	------------------------------------------------------	
	2010-10-12 edit by 廷俊
	------------------------------------------------------
	軟體名稱為EZPORTAL時，顯示錯誤回報
	------------------------------------------------------
	2010-11-09 edit by 廷俊
	------------------------------------------------------
	暫先隱藏錯誤回報功能按鈕
	------------------------------------------------------	
	2010-11-09 edit by 娜娜
	------------------------------------------------------
	加入顯示前台線上人數
	------------------------------------------------------	
	2011-01-14 edit by 廷俊
	------------------------------------------------------
	修正下方bottom的前台首頁按鈕，依目前所在語言分別連結至前台首頁
	------------------------------------------------------	
	2011-01-18 edit by 廷俊
	------------------------------------------------------
	1.修正下方bottom的前台首頁按鈕，依目前所在語言分別連結至前台首頁
	2.首頁下方bottom，增加顯示目前所在語言別
	3.將下方bottom放入語言頁籤內
	4.因下方bottom放入語言頁籤內，則需調整語言頁籤的版面配置
	------------------------------------------------------
	2011-01-19 edit by 廷俊
	------------------------------------------------------
	點選後台首頁按鈕，則執行父視窗整個頁面(修正為最上層父視窗)重新整理，並連結至後台首頁
	------------------------------------------------------
	2011-06-20 edit by 廷俊
	-----------------------------------------------------	
	1.EZPORTAL後台首頁，顯示錯誤回報
	2.錯誤回報固定連結至faq.hyware.com.tw/faq/index.php
	------------------------------------------------------
-->
<table width="100%" height="100%" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>   
    <td align="center" valign="middle" class="powered_by"><?php echo $this->_tpl_vars['powered_by']; ?>
</td>
    <td width="90" align="center" valign="middle" class="bottom_btn_style" onClick="top.location='index.php'" style="cursor:hand;"><?php echo $this->_tpl_vars['hmanager_index']; ?>
</td>
    <td width="90" align="center" valign="middle" class="bottom_btn_style" onClick="window.open('../homeweb<?php echo $this->_tpl_vars['lang_dir']; ?>
/index.php')" style="cursor:hand;"><?php echo $this->_tpl_vars['homeweb_index']; ?>
</td>
	<?php if ($this->_tpl_vars['hyware'] == true): ?>
		<td width="90" align="center" valign="middle" class="bottom_btn_style" onClick="window.open('http://faq.hyware.com.tw/faq')" style="cursor:hand;"><?php echo $this->_tpl_vars['return_bug']; ?>
</td>
    <?php endif; ?>
	<td width="" style="color:#F60;"><?php echo $this->_tpl_vars['ps']; ?>
</td>
	<th width="160" style="color:#F00;"><?php echo $this->_tpl_vars['languages']; ?>
</th>
	<td width="110" align="right" style="color:#36f"><?php echo $this->_tpl_vars['useronline']; ?>
</td>
  </tr>
</table>


</div>
<?php echo $this->_tpl_vars['temp_log']; ?>
</body>
</html>