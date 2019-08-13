<?php /* Smarty version 2.6.26, created on 2012-07-13 07:59:35
         compiled from modules/user_referpw.tpl.htm */ ?>
<form id="user_referpw" name="user_referpw" method="post" action="user_apply.php?act=fgt">
<div id="framereferpw">

<table width="100%" align="center" class="user_referpw_table" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td colspan="2" align="center" class="user_referpw_title"><img src="themes/<?php echo $this->_tpl_vars['themes_na']; ?>
/images/user_referpw.gif" alt="<?php echo $this->_tpl_vars['lookuppwd']; ?>
"></td>
  </tr>
  <tr>
    <td width="25%" align="right"><?php echo $this->_tpl_vars['loginid']; ?>
：</td>
    <td width="75%" align="left"><input name="loginid" type="text" id="loginid" class="user_referpw_textfield" /></td>
  </tr>
  <tr>
    <td width="25%" align="right"><?php echo $this->_tpl_vars['email']; ?>
：</td>
    <td width="75%" align="left"><input type="text" name="useremail" id="useremail" class="user_referpw_textfield" style="width:98%;" /></td>
  </tr>
  <tr>
<!--
	2010-05-28 edit by 廷俊
	------------------------------------------------------	
	更改忘記密碼頁面的按鈕位址
	------------------------------------------------------
-->		
    <td colspan="2" align="center"><input type="submit" name="button2" id="button2" class="user_referpw_btn" value="<?php echo $this->_tpl_vars['btn_lookup']; ?>
">
	<input type="reset" name="button1" id="button1" class="user_referpw_btn" value="<?php echo $this->_tpl_vars['btn_clear']; ?>
"></td>
  </tr>
</table>

</div>
</form>