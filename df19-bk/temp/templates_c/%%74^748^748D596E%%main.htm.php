<?php /* Smarty version 2.6.26, created on 2012-07-09 15:58:39
         compiled from main.htm */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Hmanager</title>
<link href="css/style1.css" rel="stylesheet" type="text/css">
</head>
<!-- /*
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	main.php	後台首頁最新消息 的 PHP處理頁面
	│	開發者		│	廷俊
	│	版本		│	v1.0.1.0101101
	├=======================================================================================┤
	│	1.	v1.0.1.0101101	2010/10/11	廷俊	a.後台首頁最新消息加入語言包
	│											b.規劃可記錄最新消息的流程顯示方法		
	│											c.顯示更新消息，最新的五筆		
	│	2.	v2.0.0.0101801	2010/10/18	廷俊	a.更新內容加入完整版本別
	│											b.更新內容可顯示所有歷史更新資訊		
	│	3.	v2.0.0.0102001	2010/10/20	廷俊	軟體名稱為EZPORTAL時，顯示更新消息
	└=======================================================================================┘
*/ -->
<body>
<div id="home_version">
<table width="600" border="0" align="center" cellpadding="1" cellspacing="0">
	<tr>
		<td width="400" height="30" align="left" class="home_version_title"><?php echo $this->_tpl_vars['hmanager']; ?>
</td>
		<td width="200" height="30" align="right" class="home_version_date"><?php echo $this->_tpl_vars['Now']; ?>
 <?php echo $this->_tpl_vars['now_time']; ?>
</td>
	</tr>
</table>
<!-- 顯示網站資訊筆數 -->
<table width="600" height="200" border="0" align="center" cellpadding="1" cellspacing="0" background="images/version.gif">
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td class="config_total"><?php echo $this->_tpl_vars['infos_category_Plots']; ?>
：<span class="config_total_rlt"><?php echo $this->_tpl_vars['infocats']; ?>
</span></td>
	</tr>
	<tr>
		<td class="config_total"><?php echo $this->_tpl_vars['infos_list_Plots']; ?>
：<span class="config_total_rlt"><?php echo $this->_tpl_vars['infolist']; ?>
</span></td>
	</tr>
	<tr>
		<td class="config_total"><?php echo $this->_tpl_vars['users_data_Plots']; ?>
：<span class="config_total_rlt"><?php echo $this->_tpl_vars['userdata']; ?>
</span></td>
	</tr>
	<tr>
		<td class="config_total"><?php echo $this->_tpl_vars['frm_column_value_Plots']; ?>
：<span class="config_total_rlt"><?php echo $this->_tpl_vars['frmvalue']; ?>
</span></td>
	</tr>
	<tr>
		<td class="config_total"><?php echo $this->_tpl_vars['discuss_data_Plots']; ?>
：<span class="config_total_rlt"><?php echo $this->_tpl_vars['discussdata']; ?>
</span></td>
	</tr>
	<tr>
		<td class="config_total"><?php echo $this->_tpl_vars['discuss_reply_Plots']; ?>
：<span class="config_total_rlt"><?php echo $this->_tpl_vars['discussreply']; ?>
</span></td>
	</tr>
	<tr>
	<td>&nbsp;</td>
	</tr>
</table>
<!-- END -->
<!-- 更新資訊 -->
<!-- /*	
	2010-10-18 edit by 廷俊
	------------------------------------------------------
	a.更新內容加入完整版本別
	b.更新內容可顯示所有歷史更新資訊
	------------------------------------------------------
	2010-10-20 edit by 廷俊
	------------------------------------------------------
	軟體名稱為EZPORTAL時，顯示更新消息
	------------------------------------------------------	
*/	 -->
<?php if ($this->_tpl_vars['hyware'] == true): ?>
<table border="0" cellspacing="2" cellpadding="5" width="590" align="center">
    <tbody>
        <tr>
            <td bgcolor="#eeeeee" width="80" align="center"><?php echo $this->_tpl_vars['Updated_title']; ?>
</td>
            <td bgcolor="#eeeeee" width="60" align="center"><?php echo $this->_tpl_vars['Version_title']; ?>
</td>
            <td width="440" align="center" bgcolor="#eeeeee"><?php echo $this->_tpl_vars['Updates_title']; ?>
</td>
        </tr>
        <?php echo $this->_tpl_vars['Update_Information']; ?>

        <tr>
            <td colspan="3" align="right"><?php echo $this->_tpl_vars['other']; ?>
</td>
        </tr>
	</tbody>
</table>
<?php endif; ?>
<!-- END -->
</div>
<?php echo $this->_tpl_vars['temp_log']; ?>
</body>
</html>