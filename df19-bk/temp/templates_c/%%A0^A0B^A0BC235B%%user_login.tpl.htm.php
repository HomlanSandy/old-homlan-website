<?php /* Smarty version 2.6.26, created on 2012-07-20 13:11:51
         compiled from modules/user_login.tpl.htm */ ?>
<!--
	2010-05-05 edit by yuling
	-------------------------------------------------------
	登入時判斷是否有輸入帳號與密碼，若未輸入出現警示訊息。	
	-------------------------------------------------------
-->
<script>
var errLoginId_null="<?php echo $this->_tpl_vars['errLoginId_null']; ?>
";
var errLoginPwd_null="<?php echo $this->_tpl_vars['errLoginPwd_null']; ?>
";
<?php echo '
function userlogin_chk(){
	var msg="";
	if (document.getElementById(\'Login_Id\').value==""){
		msg+=errLoginId_null+"\\n\\n";
	}
	if (document.getElementById(\'Login_pwd\').value==""){
		msg+=errLoginPwd_null+"\\n\\n";
	}
	if (msg!=""){
		
		alert(msg); return false;
	} else {		
		return true;
	}
}
'; ?>

</script>
<form name="user_login" id="user_login" action="user.php?act=loginchk" method="post" onSubmit="return userlogin_chk();">
<?php if ($this->_tpl_vars['loguserna'] == ''): ?>
<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" class="user_login_table">
  <tr>
    <td align="center" valign="middle" class="user_login_title">
	  <span class="user_login_content">
	    <img src="themes/<?php echo $this->_tpl_vars['themes_na']; ?>
/images/userid.png" alt="<?php echo $this->_tpl_vars['loginid']; ?>
" align="absmiddle" />
	    <?php echo $this->_tpl_vars['userloginid']; ?>

        <input name="Login_Id" type="text" id="Login_Id" class="user_login_textfield" style="width:70px; height:12px;" />
      </span>
    </td>
  </tr>
  <tr>
    <td align="center" valign="middle" class="user_login_title">
      <span class="user_login_content">
        <img src="themes/<?php echo $this->_tpl_vars['themes_na']; ?>
/images/userpw.png" alt="<?php echo $this->_tpl_vars['pwd']; ?>
" align="absmiddle" />
		<?php echo $this->_tpl_vars['userloginpwd']; ?>

        <input name="Login_pwd" type="password" id="Login_pwd" class="user_login_textfield" style="width:70px; height:12px;" />
      </span>
	</td>
  </tr>
  <tr>
    <td align="center" valign="middle" class="user_login_content">
      <a href="user_apply.php?todo=reg" target="_self"><?php echo $this->_tpl_vars['register']; ?>
</a>&nbsp;
      <a href="user_apply.php?todo=fog" target="_self"><?php echo $this->_tpl_vars['forgetpwd']; ?>
</a>&nbsp;
      <input type="submit" name="button" id="button" value="<?php echo $this->_tpl_vars['login']; ?>
" class="user_login_btn" style="width:60px; height:25px;" />
	</td>
  </tr>
</table>
<?php else: ?>
<table width="100%" align="center" cellpadding="0" cellspacing="0"  class="user_login_table">
  <tr>
    <td class="user_login_title" align="center">Welcome,<?php echo $this->_tpl_vars['loguserna']; ?>
</td>
  </tr>
  <tr>
	<td class="user_login_title" align="center">
		<a href="user.php?act=all"><?php echo $this->_tpl_vars['membercenter']; ?>
</a>&nbsp;
		<input type="button" class="user_login_btn" value="<?php echo $this->_tpl_vars['btn_logout']; ?>
" onclick="location.href='user.php?act=logout';">
	</td>
  </tr>
</table>
<?php endif; ?>
</form>