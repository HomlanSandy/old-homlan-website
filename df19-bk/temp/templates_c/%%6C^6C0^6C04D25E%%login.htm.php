<?php /* Smarty version 2.6.26, created on 2012-07-09 17:40:17
         compiled from login.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_config[0]['vars']['website_title']; ?>
</title>
<link href="css/style1.css" rel="stylesheet" type="text/css">
</head>
<!--
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	login.htm	後台LOGIN 的 htm檔
	│	開發者		│	玉玲
	│	版本		│	v2.0.8.1011401
	├=======================================================================================┤
	│	1.	v2.0.8.1011401	2011/01/14	廷俊	a.將CSS設定背景圖，修改至login的PHP處理頁
	│											b.EZPORTAL版顯示後台LOGIN背景圖，欲設/hmanager/images/hmanager_login.gif
	│											c.OEM版顯示後台LOGIN背景圖，欲設/hyfiles/hmanager_login.gif
	└=======================================================================================┘
*/-->
<script>
var id_null_error="<?php echo $this->_tpl_vars['id_null_error']; ?>
";
var pwd_null_error="<?php echo $this->_tpl_vars['pwd_null_error']; ?>
";
var logpwd_null_error="<?php echo $this->_tpl_vars['logpwd_null_error']; ?>
";
<?php echo '
function chkpost(){	
	var errorMsg="";
	if (document.getElementById(\'textfield\').value=="")
	{
		errorMsg+=id_null_error+"\\n";
	}
	if (document.getElementById(\'textfield2\').value=="")
	{
		errorMsg+=pwd_null_error+"\\n";
	}
	if (document.getElementById(\'textfield3\').value=="")
	{
		errorMsg+=logpwd_null_error+"\\n";
	}
	if (errorMsg!="")
	{
		alert(errorMsg);
		return false;
	} else {
		return true;
	}
}
'; ?>

</script>
<body id="login_bg">
<p>&nbsp;</p>
<p>&nbsp;</p>
<form name="loginfrm" method="post" action="<?php echo $this->_tpl_vars['loginfrm_cat']; ?>
" onsubmit="return chkpost();">
<table width="600" height="400" border="0" align="center" cellpadding="0" cellspacing="0" class="login_table" background="<?php echo $this->_tpl_vars['hmanager_login']; ?>
">
  <tr>
    <td width="250" height="320" align="right" valign="middle"></td>
    <td width="350" height="320" align="left" valign="top">
      <table width="300" height="250" border="0" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td height="25" align="left" valign="top">&nbsp;</td>
          </tr>
        <tr>
          <td height="35" align="center" valign="top">H-manager 後台管理系統</td>
        </tr>
        <tr>
          <td align="left" valign="middle"><?php echo $this->_tpl_vars['Login_Account']; ?>

            <input name="Login_Id" type="text" class="login_textfield" id="textfield" style="width:120px;" /></td>
        </tr>
        <tr>
          <td align="left" valign="middle"><?php echo $this->_tpl_vars['Login_Pwd']; ?>

            <input name="Login_pwd" type="password" class="login_textfield" id="textfield2" style="width:120px;" /></td>
          </tr>
        <tr>
          <td align="left" valign="middle"><?php echo $this->_tpl_vars['Login_EnterChk']; ?>
&nbsp;<img src="<?php echo $this->_tpl_vars['capcha_url']; ?>
" border="0" align="absmiddle">
            <input name="login_passwd" type="text" class="login_textfield" id="textfield3" size="4" maxlength="4" style="text-align:center;" /></td>
          </tr>
        <tr>
          <td align="center" valign="middle"><input name="button" type="submit" class="login_btn" id="button" value="<?php echo $this->_tpl_vars['Btn_Login']; ?>
" />
            <input name="button2" type="button" class="login_btn" id="button2" value="<?php echo $this->_tpl_vars['Btn_PwdLost']; ?>
" onclick="javascript:location.href='login.php?act=fgtpwd';" /></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td height="75" colspan="2" align="center" valign="top" class="login_vision"></td>
  </tr>
</table>
</form>
<?php echo $this->_tpl_vars['temp_log']; ?>
</body>
</html>