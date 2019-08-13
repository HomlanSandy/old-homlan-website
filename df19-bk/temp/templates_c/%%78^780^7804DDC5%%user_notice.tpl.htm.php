<?php /* Smarty version 2.6.26, created on 2012-07-17 03:55:34
         compiled from modules/user_notice.tpl.htm */ ?>
<div class="user_register">
<table width="100%" height="400" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
		<td height="10%" align="center" valign="middle"><?php echo $this->_tpl_vars['menber_register_text']; ?>
</td>
	</tr>
    <tr>
    <td align="center" valign="top">
		<!--<textarea cols="80" rows="20" readonly class="user_notice"><?php echo $this->_tpl_vars['menber_register_content']; ?>
</textarea> -->
		<div  class="user_notice" style="text-align:left; width: 85%; height: 400px; overflow: auto;">
		
		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr><td><?php echo $this->_tpl_vars['menber_register_content']; ?>
</td></tr>
		</table>
		
		</div>
    </td>
  </tr>
   <tr>
    <td height="10%" align="center" valign="middle">
    <br><p align="center">
		<input type="button" name="Btn_Yes" value="<?php echo $this->_tpl_vars['Btn_Yes']; ?>
" onclick="location.href='<?php echo $this->_tpl_vars['Btn_Yes_Action']; ?>
';" class="user_register_btn" style="width:100px; height:30px;">&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="button" name="Btn_No" value="<?php echo $this->_tpl_vars['Btn_No']; ?>
" onclick="location.href='<?php echo $this->_tpl_vars['Btn_No_Action']; ?>
';" class="user_register_btn" style="width:100px; height:30px;">
    </p><br>
    </td>
  </tr>
</table>
</div>