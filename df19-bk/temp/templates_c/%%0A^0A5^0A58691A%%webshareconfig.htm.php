<?php /* Smarty version 2.6.26, created on 2014-08-22 10:19:13
         compiled from webshareconfig.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<link href="css/style1.css" rel="stylesheet" type="text/css" />
</head>
<!--/*
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	webshareconfig.htm		後台網站共用設定 的 HTML檔
	│	開發者		│	廷俊
	│	版本		│	v2.0.8.1011901
	├=======================================================================================┤
	│	1.	v2.0.8.1011901	2011/01/19	廷俊	新增網站共用設定的功能頁面
	│	2.	v2.0.8.1012001	2011/01/20	廷俊	a.顯示網站共用設定值
	│											b.顯示預設語言的設定值
	│											c.預設語言的欄位後方，備註不啟用前導頁時執行
	│											d.預設語言的欄位列出所有語言
	│											e.disabled序號無效的語言
	│	3.	v2.0.8.1021401	2011/02/14	廷俊	1.移除前台會員新增、後台會員新增的設定方式，修正為前台、後台統一新增會員資料
	│											2.新增會員資料庫設定的功能欄位，分為統一、個別設定
	│											3.新增會員資料庫設定的備註說明
	│	4.	v2.0.8.1021401	2011/02/14	廷俊	1.寄送表單觸發的驗證函數
	│											2.若網站共用設定，會員資料庫設定由個別設定更改為統一
	│											3.警告提醒視窗，請確定執行會員資料整合？
	│											4.新增前導頁設定的備註說明
	│	5.	v03.00.06.1052301	2011/05/27	廷俊	新增前導頁標題的功能設定
	│	6.	v03.00.10.1062001	2011-06-29	玉玲	1.新增css樣式項目說明text_note。
	└=======================================================================================┘
*/-->	
<script type="text/javascript">
<!--
var warming_UsersDBInsert="<?php echo $this->_tpl_vars['warming_UsersDBInsert']; ?>
";
<?php echo '
//寄送表單觸發的驗證函數
function chkpost(){
	//若網站共用設定，會員資料庫設定由個別設定更改為統一
	if(document.getElementById("s3").value==0 && document.getElementsByName("s3")[0].checked==true){	
 		//警告提醒視窗，請確定執行會員資料整合？
		if(confirm(warming_UsersDBInsert)){
			return true;
		}else{
			return false;
		} 
	}
}
-->
</script>
'; ?>

<div id="use_title">
  <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>      
      <td width="72%" align="left"><?php echo $this->_tpl_vars['PageTitle']; ?>
</td>
      <td width="12%" align="right">&nbsp;</td>
    </tr>
  </table>
</div>
<!--
	2010-08-10 edit by 廷俊
	----------------------------------------------------
	修改成功訊息
	---------------------------------------------------- 			
-->
<?php echo $this->_tpl_vars['Message']; ?>

<!--
	2010-08-10 edit by 廷俊
	----------------------------------------------------
	新增寄送表單觸發的驗證函數
	----------------------------------------------------
	2011-01-20 edit by 廷俊
	----------------------------------------------------
	a.顯示網站共用設定值
	b.顯示預設語言的設定值
	c.預設語言的欄位後方，備註不啟用前導頁時執行
	d.預設語言的欄位列出所有語言
	e.disabled序號無效的語言
	---------------------------------------------------- 			
	2011-02-14 edit by 廷俊
	----------------------------------------------------
	1.移除前台會員新增、後台會員新增的設定方式，修正為前台、後台統一新增會員資料
	2.新增會員資料庫設定的功能欄位，分為統一、個別設定
	3.新增會員資料庫設定的備註說明
	---------------------------------------------------- 			
	2011-02-16 edit by 廷俊
	----------------------------------------------------
	新增前導頁設定的備註說明
	---------------------------------------------------- 
	2011-05-27 edit by 廷俊
	------------------------------------------------------
	新增前導頁標題的功能設定
	------------------------------------------------------		
-->
<form name="frm" method="post" action="<?php echo $this->_tpl_vars['frm_save']; ?>
" enctype="multipart/form-data" onsubmit="return chkpost();"> 
<div id="show_table3">
	<table border="0" cellpadding="2" cellspacing="2" width="85%" height="100%" align="center">			
		<tr>
			<td colspan="2" align="center">&nbsp;</td>
		</tr>
		<tr>
			<th align="right" valign="top" width="150"><?php echo $this->_tpl_vars['PrecursorPage']; ?>
</th>
			<td align="left">
				<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['precursor_page']; ?>
" value="1" <?php echo $this->_tpl_vars['precursor_page_yes']; ?>
><?php echo $this->_tpl_vars['Enable']; ?>

				<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['precursor_page']; ?>
" value="0" <?php echo $this->_tpl_vars['precursor_page_no']; ?>
><?php echo $this->_tpl_vars['NotEnabled']; ?>

				<br>
				<span class="text_note"><?php echo $this->_tpl_vars['PrecursorPage_ps']; ?>
</span>
			</td>
		</tr>
		<tr>
			<th align="right" valign="top"><?php echo $this->_tpl_vars['DefaultLanguage']; ?>
</th>
			<td align="left">
			<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['languages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
				<?php if ($this->_tpl_vars['languages'][$this->_sections['i']['index']]['info_state']): ?>
				<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['default_lang']; ?>
" value="<?php echo $this->_tpl_vars['languages'][$this->_sections['i']['index']]['lang_id']; ?>
" <?php if ($this->_tpl_vars['languages'][$this->_sections['i']['index']]['lang_id'] == $this->_tpl_vars['default_lang_value']): ?>checked<?php endif; ?>>
				<?php echo $this->_tpl_vars['languages'][$this->_sections['i']['index']]['lang_na']; ?>

				<?php else: ?>
				<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['default_lang']; ?>
" value="<?php echo $this->_tpl_vars['languages'][$this->_sections['i']['index']]['lang_id']; ?>
" disabled>
				<span style="color:gray;"><?php echo $this->_tpl_vars['languages'][$this->_sections['i']['index']]['lang_na']; ?>
</span>
				<?php endif; ?>
			<?php endfor; endif; ?>
				<br>
				<span class="text_note"><?php echo $this->_tpl_vars['DefaultLanguage_ps']; ?>
</span>
			</td>
		</tr>
		<tr>
			<th align="right"><?php echo $this->_tpl_vars['WebsiteTitle']; ?>
</th>
			<td align="left"><INPUT TYPE="text" NAME="<?php echo $this->_tpl_vars['website_title']; ?>
" size="50" value="<?php echo $this->_tpl_vars['website_title_value']; ?>
"></td>
		</tr>
		<tr>
			<th align="right" valign="top"><?php echo $this->_tpl_vars['UsersDBInsert']; ?>
</th>
			<td align="left">
				<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['users_data_insert']; ?>
" value="1" <?php echo $this->_tpl_vars['users_data_insert_yes']; ?>
><?php echo $this->_tpl_vars['AllLanguage']; ?>

				<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['users_data_insert']; ?>
" value="0" <?php echo $this->_tpl_vars['users_data_insert_no']; ?>
><?php echo $this->_tpl_vars['OnlyLanguage']; ?>

				<INPUT TYPE="hidden" id="<?php echo $this->_tpl_vars['users_data_insert']; ?>
" value="<?php echo $this->_tpl_vars['users_data_insert_value']; ?>
" >
				<br>
				<span class="text_note"><?php echo $this->_tpl_vars['UsersDBInsert_ps']; ?>
</span>				
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
" <?php echo $this->_tpl_vars['dis']; ?>
>
				<INPUT TYPE="reset">
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">&nbsp;</td>
		</tr>
	</table>
</div>
</form>
<?php echo $this->_tpl_vars['temp_log']; ?>
</body>
</html>