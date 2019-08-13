<?php /* Smarty version 2.6.26, created on 2012-07-12 13:58:46
         compiled from modules/user_register.tpl.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_select_date', 'modules/user_register.tpl.htm', 130, false),)), $this); ?>
<script src="js/calendar.js" type="text/javascript"></script>
<script src="js/calendar-en.js" type="text/javascript"></script>
<script src="js/calendar-setup.js" type="text/javascript"></script>
<link href="js/calendar-win2k-cold-1.css" rel="stylesheet" type="text/css" />
<?php echo ' 
<!-- 
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	user_register.tpl.htm		新增會員資料 的 HTM編輯頁面
	│	開發者		│	玉玲
	│	版本		│	v1.0.0.0090101
	├=======================================================================================┤
	│	1.	v1.0.1.0090101	2010/09/01	廷俊	新增會員時，驗證會員帳號只能輸入英文字母及數字
	│	2.	v2.0.8.1031701	2011/03/17	廷俊	1.調整版面配置
	│											2.開放會員名稱、帳號、密碼、MAIL的欄位長度設定
	└=======================================================================================┘
-->
'; ?>

<form id="user_register" name="user_register" action="user_apply.php?act=save" method="post" onsubmit="return chkalldata();">
<div id="frameregister">

<table width="100%" height="100%" border="0" class="user_register_table" align="center" cellpadding="0" cellspacing="0">
  <tr>
	<td align="left" class="user_register_title">
		<img src="themes/<?php echo $this->_tpl_vars['themes_na']; ?>
/images/user_register.gif" alt="<?php echo $this->_tpl_vars['memberapply']; ?>
">
	</td>
  </tr>
  <tr>
    <td align="left">
<!--
	2010-05-14 edit by 廷俊
	------------------------------------------------------
	增加使用者輸入提示<?php echo $this->_tpl_vars['input_char_text']; ?>

	------------------------------------------------------
	2011-03-17 edit by 廷俊
	------------------------------------------------------
	開放會員名稱、帳號、密碼、MAIL的欄位長度設定
	------------------------------------------------------			
-->	    
    <table width="100%" border="0" class="user_rregister_content" cellpadding="2" cellspacing="2">
	  <tr>
        <td width="20%" align="right" class="user_register_list">*<?php echo $this->_tpl_vars['users_name']; ?>
</td>
        <td width="80%" align="left">
			<input name="UserId" type="hidden" id="UserId" value="<?php echo $this->_tpl_vars['users_id']; ?>
" />
			<input name="UserNa" type="text" id="UserNa" size="<?php echo $this->_tpl_vars['users_name_size']; ?>
" class="user_register_textfield" value="<?php echo $this->_tpl_vars['users_name_value']; ?>
" />
		</td>
      </tr>
	<!--
	2011-11-16 edit by 健嘉
	------------------------------------------------------
	會員模式設定為推薦人模式才顯示推薦人性名欄位
	------------------------------------------------------		
	-->	 
	 <?php if ($this->_tpl_vars['users_id'] != '' && $this->_tpl_vars['manager_mode'] == '1'): ?>
	  <tr>
        <td width="20%" align="right" class="user_register_list">*<?php echo $this->_tpl_vars['users_referee_name']; ?>
</td>
        <td width="80%" align="left">
			<input name="UserReferName2" type="label" id="UserReferName2" size="<?php echo $this->_tpl_vars['users_account_size']; ?>
" class="user_register_textfield" value="<?php echo $this->_tpl_vars['UserReferName_value']; ?>
" disabled>
		</td>
      </tr> 
	  <?php endif; ?>
<!--
	2010-09-01 edit by 廷俊
	----------------------------------------------------
	新增會員時，驗證會員帳號只能輸入英文字母及數字
	---------------------------------------------------- 					
-->
<?php if ($this->_tpl_vars['users_id'] == ''): ?>
<!--
	2011-11-09 edit by 健嘉
	------------------------------------------------------
	1.新增 會員模式設定 依照模式顯示欄位 推薦模式時增加推薦人姓名、推薦人手機號碼欄位
	------------------------------------------------------	
-->
	  <?php if ($this->_tpl_vars['manager_mode'] == '1' && $this->_tpl_vars['lang_db'] == ''): ?>
	  <tr>
        <td width="20%" align="right" class="user_register_list">*<?php echo $this->_tpl_vars['users_referee_name']; ?>
</td>
        <td width="80%" align="left">
			<input name="UserReferName" type="text" id="UserReferName" size="<?php echo $this->_tpl_vars['users_account_size']; ?>
" class="user_register_textfield" onBlur="refermember();">
			<span style="color:red;" id="refereeidtxt"></span>
		</td>
      </tr> 
	  <tr>
        <td width="20%" align="right" class="user_register_list">*<?php echo $this->_tpl_vars['users_referee_phone']; ?>
</td>
        <td width="80%" align="left">
			<input name="UserReferPhone" type="text" id="UserReferPhone" size="<?php echo $this->_tpl_vars['users_account_size']; ?>
" class="user_register_textfield" onBlur="refermember();">
			<input name="UserReferID" type="hidden" id="UserReferID" class="user_register_textfield" value="">
		</td>
      </tr>
	  <?php endif; ?>
	  
	  <tr>
        <td width="20%" align="right" class="user_register_list">*<?php echo $this->_tpl_vars['users_account']; ?>
</td>
        <td width="80%" align="left">
			<input name="UserLoginid" type="text" id="UserLoginid" size="<?php echo $this->_tpl_vars['users_account_size']; ?>
" class="user_register_textfield" onblur="chkloginid();value_type_chk(this);">
			<?php echo $this->_tpl_vars['input_char_text']; ?>

			<span style="color:red;" id="loginidtxt" ></span>
		</td>
      </tr>
      <tr>
        <td width="20%" align="right" class="user_register_list">*<?php echo $this->_tpl_vars['users_password']; ?>
</td>
        <td width="80%" align="left">
			<input name="UserPwd" type="password" id="UserPwd" size="<?php echo $this->_tpl_vars['users_password_size']; ?>
" class="user_register_textfield" onBlur="value_type_chk(this);"/>
			<?php echo $this->_tpl_vars['input_char_text']; ?>

		</td>
      </tr>
      <tr>
        <td width="20%" align="right" class="user_register_list">*<?php echo $this->_tpl_vars['password_confirm']; ?>
</td>
        <td width="80%" align="left">
			<input name="chkUserPwd" type="password" id="chkUserPwd" size="<?php echo $this->_tpl_vars['password_confirm_size']; ?>
" class="user_register_textfield" onBlur="value_type_chk(this);"/>
			<?php echo $this->_tpl_vars['input_char_text']; ?>

		</td>
      </tr>
<?php endif; ?>	 
<!--
	2010-05-20 edit by 廷俊
	------------------------------------------------------
	1.會員性別radio必須更改為非預設(使用者可定義是否顯示)
	2.會員生日，必須更改為非預設(使用者可定義是否顯示)
	3.會員生日使用小日期模組
	------------------------------------------------------		
	  <tr>
		<td align="right" class="user_register_list"><?php echo $this->_tpl_vars['users_sex']; ?>
</td>
		<td align="left"><INPUT TYPE="radio" NAME="UserSex" value="0" checked /><?php echo $this->_tpl_vars['UserSexSecret']; ?>
<INPUT TYPE="radio" NAME="UserSex" value="1" <?php if ($this->_tpl_vars['users_sex_value'] == '1'): ?>checked<?php endif; ?> /><?php echo $this->_tpl_vars['UserSexMale']; ?>
<INPUT TYPE="radio" NAME="UserSex" value="2" <?php if ($this->_tpl_vars['users_sex_value'] == '2'): ?>checked<?php endif; ?> /><?php echo $this->_tpl_vars['UserSexFemale']; ?>
</td>
	  </tr>
	  <tr>
		<td align="right" class="user_register_list"><?php echo $this->_tpl_vars['users_birth']; ?>
</td>
		<td align="left">
			<?php echo smarty_function_html_select_date(array('start_year' => '-90','month_format' => '%m','field_order' => 'YMD','revers_years' => 'yes','time' => $this->_tpl_vars['users_birth_value']), $this);?>

		</td>
	  </tr>
-->
<!--
	2010-05-14 edit by 廷俊
	------------------------------------------------------
	1.驗證會員email重複
	2.更改驗證會員email
	------------------------------------------------------		
-->	
<!--
	20101-11-16 edit by 健嘉
	------------------------------------------------------
	1.修改email驗證，在編輯會員時不做驗證
	------------------------------------------------------		
-->	
	  <tr>
        <td width="20%" align="right" class="user_register_list">*<?php echo $this->_tpl_vars['users_email']; ?>
</td>
		<td width="80%" align="left">
			<INPUT TYPE="text" NAME="UserMail" id="UserMail" size="<?php echo $this->_tpl_vars['users_email_size']; ?>
" class="user_register_textfield" value="<?php echo $this->_tpl_vars['users_email_value']; ?>
" <?php if ($this->_tpl_vars['users_email_value'] != ''): ?> readonly <?php endif; ?> <?php if ($this->_tpl_vars['users_id'] == ''): ?>onBlur="chkmail();"<?php endif; ?>>
			<span style="color:red;" id="mailre" ></span>
		</td>
	  </tr>
	  <?php unset($this->_sections['p']);
$this->_sections['p']['name'] = 'p';
$this->_sections['p']['loop'] = is_array($_loop=$this->_tpl_vars['umcolsList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['p']['show'] = true;
$this->_sections['p']['max'] = $this->_sections['p']['loop'];
$this->_sections['p']['step'] = 1;
$this->_sections['p']['start'] = $this->_sections['p']['step'] > 0 ? 0 : $this->_sections['p']['loop']-1;
if ($this->_sections['p']['show']) {
    $this->_sections['p']['total'] = $this->_sections['p']['loop'];
    if ($this->_sections['p']['total'] == 0)
        $this->_sections['p']['show'] = false;
} else
    $this->_sections['p']['total'] = 0;
if ($this->_sections['p']['show']):

            for ($this->_sections['p']['index'] = $this->_sections['p']['start'], $this->_sections['p']['iteration'] = 1;
                 $this->_sections['p']['iteration'] <= $this->_sections['p']['total'];
                 $this->_sections['p']['index'] += $this->_sections['p']['step'], $this->_sections['p']['iteration']++):
$this->_sections['p']['rownum'] = $this->_sections['p']['iteration'];
$this->_sections['p']['index_prev'] = $this->_sections['p']['index'] - $this->_sections['p']['step'];
$this->_sections['p']['index_next'] = $this->_sections['p']['index'] + $this->_sections['p']['step'];
$this->_sections['p']['first']      = ($this->_sections['p']['iteration'] == 1);
$this->_sections['p']['last']       = ($this->_sections['p']['iteration'] == $this->_sections['p']['total']);
?>
		<tr>
			<td align="right" class="user_register_list"><?php echo $this->_tpl_vars['umcolsList'][$this->_sections['p']['index']]['usr_na']; ?>
</td>
			<td align="left"><?php echo $this->_tpl_vars['umcolsList'][$this->_sections['p']['index']]['usr_text']; ?>
</td>
		</tr>
	  <?php endfor; endif; ?>
    </table>
    
    </td>
  </tr>

 <!--
	2010-05-14 edit by 廷俊
	------------------------------------------------------
	更改按鈕順序
	------------------------------------------------------		
-->	
  <tr>
    <td align="center">
		<input type="submit" name="button4" id="button4" value="<?php echo $this->_tpl_vars['btn_ok']; ?>
" class="user_register_btn" style="width:60px; height:25px;" />
		<input type="reset" name="button3" id="button3" value="<?php echo $this->_tpl_vars['btn_reset']; ?>
" class="user_register_btn" style="width:60px; height:25px;" />
    </td>
  </tr>
  <tr>
    <td align="center" colspan="2">&nbsp;</td>
  </tr>
</table>
<?php echo '
<script type="text/javascript">
<!--
if(isNaN(document.getElementById("users_birth"))){
  	today = new Date();
	function catcald(cal) {      
		var date = cal.date;
        var time = date.getTime()
        var date2 = new Date(time);
        //field.value = date2.print("%Y/%m/%d");
		document.getElementById("users_birth").innerText=date2.print("%Y-%m-%d");
    }
 	Calendar.setup({	
		inputField     :    "users_birth",   // id of the input field    
		ifFormat       :    "%Y-%m-%d",       // format of the input field
		showsTime      :    false,
		timeFormat     :    "24",
		range          :    [today.getYear()-100,today.getYear()+100],
		onUpdate       :    catcald
    });  
}
//-->
</script>
'; ?>

</div>
</form>