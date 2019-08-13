<?php /* Smarty version 2.6.26, created on 2017-04-11 17:36:27
         compiled from modules/payment_login.tpl.htm */ ?>
<!--
	2010-05-05 edit by yuling
	-------------------------------------------------------
	登入時判斷是否有輸入帳號與密碼，若未輸入出現警示訊息。	
	-------------------------------------------------------
-->
<script>
var errLoginId_null2="<?php echo $this->_tpl_vars['errLoginId_null']; ?>
";
var errLoginPwd_null2="<?php echo $this->_tpl_vars['errLoginPwd_null']; ?>
";
<?php echo '
function userlogin_chk(){
	var msg="";
	if (document.getElementById(\'Login_Id2\').value==""){
		msg+=errLoginId_null2+"\\n\\n";
	}
	if (document.getElementById(\'Login_pwd2\').value==""){
		msg+=errLoginPwd_null2+"\\n\\n";
	}
	if (msg!=""){
		
		alert(msg); return false;
	} else {		
		return true;
	}
}
'; ?>

</script>
<table width="100%" border="0" cellpadding="1" cellspacing="1">
<tr>
<td width="50%">
<form name="user_login" id="user_login" action="user.php?act=loginchk" method="post" onSubmit="return userlogin_chk();">
<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" class="user_login_table">
  <tr>
	<td class="user_login_title"><B><?php echo $this->_tpl_vars['Member_Login']; ?>
</B></td>
  </tr>
  <tr>
    <td align="center" valign="middle" class="user_login_title">
	  <span class="user_login_content">
	    <img src="themes/<?php echo $this->_tpl_vars['themes_na']; ?>
/images/userid.png" alt="<?php echo $this->_tpl_vars['loginid']; ?>
" align="absmiddle" />
	    <?php echo $this->_tpl_vars['userloginid2']; ?>

        <input name="Login_Id" type="text" id="Login_Id2" class="user_login_textfield" style="width:70px; height:12px;" />
      </span>
    </td>
  </tr>
  <tr>
    <td align="center" valign="middle" class="user_login_title">
      <span class="user_login_content">
        <img src="themes/<?php echo $this->_tpl_vars['themes_na']; ?>
/images/userpw.png" alt="<?php echo $this->_tpl_vars['pwd']; ?>
" align="absmiddle" />
		<?php echo $this->_tpl_vars['userloginpwd2']; ?>

        <input name="Login_pwd" type="password" id="Login_pwd2" class="user_login_textfield" style="width:70px; height:12px;" />
      </span>
	</td>
  </tr>
  <tr>
    <td align="center" valign="middle" class="user_login_content">     
      <input type="submit" name="button" id="button" value="<?php echo $this->_tpl_vars['login']; ?>
" class="user_login_btn" style="width:60px; height:25px;" />
	</td>
  </tr>
</table>
</form>
</td>
<td width="50%">		
		<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" class="user_login_table">		
			<tr>
				<td class="user_login_title"><B><?php echo $this->_tpl_vars['Express_Checkout']; ?>
</B></td>
			</tr>
			<tr>
				<td class="user_login_title"><?php echo $this->_tpl_vars['Express_Checkout_Memo']; ?>
</td>
			</tr>
			<tr><td class="user_login_title">&nbsp;</td></tr>
			<tr>
				 <td align="center" valign="middle" class="user_login_content"> 
					<input type="submit" name="button" id="button" value="<?php echo $this->_tpl_vars['Express_Checkout_Continue']; ?>
" class="user_login_btn" style="width:60px; height:25px;" onclick="location.href='payment.php?Express_Checkout_Continue=1';"/>
				</td>
			</tr>
		</table>
</td>
</tr>
</table>