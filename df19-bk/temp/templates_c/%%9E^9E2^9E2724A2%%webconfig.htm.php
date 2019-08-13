<?php /* Smarty version 2.6.26, created on 2013-07-16 14:56:00
         compiled from webconfig.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<script src="js/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="css/style1.css" rel="stylesheet" type="text/css" />
</head>
<!--
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	webconfig.htm	後台網站設定 的 htm顯示頁面
	│	開發者		│	玉玲
	│	版本		│	v1.0.0.0071901
	├=======================================================================================┤
	│	1.	v1.0.1.0071901	2010/07/19	廷俊	資訊明細列表排序方式，新增按照管理者自訂排序的功能
	│	2.	v1.0.1.0081001	2010/08/10	廷俊	a.擷取出網站設定中的所有資訊設定，設置成獨立的資訊設定
	│											b.修改成功訊息
	│	3.	v2.0.0.0111001	2010/11/10	廷俊	新增保留管理者記錄天數的設定功能
	│	4.	v2.0.8.1012001	2011/01/20	廷俊	a.備註訊息修正為紅色字體
	│											b.新增語言別切換連結的功能欄位設定
	│	5.	v2.0.8.1021601	2011/02/16	廷俊	新增頁首自定義功能的備註說明
	│	6.	v03.00.10.1062001	2011-06-29	玉玲	1.新增css樣式項目說明text_note。
	└=======================================================================================┘
*/-->	
<script type="text/javascript">
<!--
/*
	2010-05-07 edit by 廷俊
	------------------------------------------------------
	修改圖片上傳模式：加入移除照片的警告視窗
	------------------------------------------------------		
*/	
var cheDelete="<?php echo $this->_tpl_vars['cheDelete']; ?>
";
<?php echo '
	function del_images(fileid,image_name){		
		if(confirm(cheDelete)){
			document.getElementById(\'mv_image\'+fileid).value=image_name;
			document.getElementById(\'image1_\'+fileid).style.display=\'none\';
			return true;
		}else{
			return false;
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

<form name="frm" method="post" action="<?php echo $this->_tpl_vars['frm_save']; ?>
" enctype="multipart/form-data"> 

<div id="show_table2">
<!-- 頁籤起 -->
<div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0"><?php echo $this->_tpl_vars['umTITLE1']; ?>
</li>
    <li class="TabbedPanelsTab" tabindex="0"><?php echo $this->_tpl_vars['umTITLE2']; ?>
</li>
  </ul>
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent">	
		<table border="0" cellpadding="2" cellspacing="2" width="85%" height="100%" align="center">			
<!--
	2010-06-10 edit by 廷俊
	------------------------------------------------------
	後台網站標題，限制字數：中文15、英文45，驗證並說明
	------------------------------------------------------	
	2011-01-20 edit by 廷俊
	------------------------------------------------------
	備註訊息修正為紅色字體
	新增語言別切換連結的功能欄位設定
	------------------------------------------------------	
	2011-02-16 edit by 廷俊
	------------------------------------------------------
	新增頁首自定義功能的備註說明
	------------------------------------------------------	
*/	-->
			<tr>
				<td colspan="2" align="center">&nbsp;</td>
			</tr>
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['umInfoname']; ?>
</th>
				<td align="left">
					<INPUT TYPE="text" NAME="<?php echo $this->_tpl_vars['website_na']; ?>
" size="50" value="<?php echo $this->_tpl_vars['website_na_value']; ?>
">
					<br>
					<span class="text_note"><?php echo $this->_tpl_vars['umInfonameps']; ?>
</span>
				</td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['umInfoTitle']; ?>
</th>
				<td align="left"><INPUT TYPE="text" NAME="<?php echo $this->_tpl_vars['website_title']; ?>
" size="50" value="<?php echo $this->_tpl_vars['website_title_value']; ?>
"></td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['umInfoMemo']; ?>
</th>
				<td align="left"><INPUT TYPE="text" NAME="<?php echo $this->_tpl_vars['website_descript']; ?>
" size="50" value="<?php echo $this->_tpl_vars['website_descript_value']; ?>
"></td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['umInfoKeyword']; ?>
</th>
				<td align="left"><INPUT TYPE="text" NAME="<?php echo $this->_tpl_vars['websitw_keyword']; ?>
" size="50" value="<?php echo $this->_tpl_vars['websitw_keyword_value']; ?>
"></td>
			</tr>		
					
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['umInfoAddress']; ?>
</th>
				<td align="left"><INPUT TYPE="text" NAME="<?php echo $this->_tpl_vars['websitw_addr']; ?>
" size="50" value="<?php echo $this->_tpl_vars['websitw_addr_value']; ?>
"></td>
			</tr>			
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['umInfoEmail']; ?>
</th>
				<td align="left"><INPUT TYPE="text" NAME="<?php echo $this->_tpl_vars['websitw_email']; ?>
" size="50" value="<?php echo $this->_tpl_vars['websitw_email_value']; ?>
"></td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['umInfoTel']; ?>
</th>
				<td align="left"><INPUT TYPE="text" NAME="<?php echo $this->_tpl_vars['websitw_tel']; ?>
" size="50" value="<?php echo $this->_tpl_vars['websitw_tel_value']; ?>
"></td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['umInfoLogo']; ?>
</th>
				<!-- <td align="left"><INPUT TYPE="file" NAME="<?php echo $this->_tpl_vars['websitw_logo']; ?>
" size="50"></td>-->
				<td align="left"><?php echo $this->_tpl_vars['websitw_logo']; ?>
</td>
			</tr>
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['umIsHeaderCust']; ?>
</th>
				<td align="left">
					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['header_cust']; ?>
" value="1" <?php echo $this->_tpl_vars['header_cust_yes']; ?>
><?php echo $this->_tpl_vars['umIsHeaderCustYes']; ?>

					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['header_cust']; ?>
" value="0" <?php echo $this->_tpl_vars['header_cust_no']; ?>
><?php echo $this->_tpl_vars['umIsHeaderCustNo']; ?>

					<br>
					<span class="text_note"><?php echo $this->_tpl_vars['umIsHeaderCustps']; ?>
</span>
				</td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['umIsHeaderLang']; ?>
</th>
				<td align="left">
					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['header_lang']; ?>
" value="1" <?php echo $this->_tpl_vars['header_lang_yes']; ?>
><?php echo $this->_tpl_vars['umIsHeaderCustYes']; ?>

					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['header_lang']; ?>
" value="0" <?php echo $this->_tpl_vars['header_lang_no']; ?>
><?php echo $this->_tpl_vars['umIsHeaderCustNo']; ?>

				</td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['umInfoWebState']; ?>
</th>
				<td align="left">
					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['websitw_close']; ?>
" value="1" <?php echo $this->_tpl_vars['websitw_close_yes']; ?>
><?php echo $this->_tpl_vars['umInfoWebOpen']; ?>

					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['websitw_close']; ?>
" value="0" <?php echo $this->_tpl_vars['websitw_close_no']; ?>
><?php echo $this->_tpl_vars['umInfoWebClose']; ?>

				</td>
			</tr>
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['umInfoWebReason']; ?>
</th>
				<td align="left"><textarea name="<?php echo $this->_tpl_vars['close_memo']; ?>
" rows="5" cols="40"><?php echo $this->_tpl_vars['close_memo_value']; ?>
</textarea></td>
			</tr>
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['PageHeightDefault']; ?>
</th>
				<td align="left">
					<INPUT TYPE="text" NAME="<?php echo $this->_tpl_vars['page_height_default']; ?>
" size="4" value="<?php echo $this->_tpl_vars['page_height_default_value']; ?>
">
					<br>
					<span class="text_note"><?php echo $this->_tpl_vars['PageHeightDefault_ps']; ?>
</span>			
			</td>
			</tr>
			<tr>
				<td colspan="2" align="center">&nbsp;</td>
			</tr>
<!--
	2010-06-11 edit by 廷俊
	------------------------------------------------------
	測試版要遮蔽"網站設定"的功能按鈕
	------------------------------------------------------		
-->
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

    <div class="TabbedPanelsContent">
		<table border="0" cellpadding="2" cellspacing="2" width="80%" align="center">						
			<tr>
				<td colspan="2" align="center">&nbsp;</td>
			</tr>
			<tr>
				<th align="right" width="150"><?php echo $this->_tpl_vars['umFileUploadMax']; ?>
</th>
				<td align="left">
					<?php echo $this->_tpl_vars['file_upload_max']; ?>
					
				</td>
			</tr>	
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['umUsersEmailCheck']; ?>
</th>
				<td align="left">
					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['user_email_chk']; ?>
" value="1" <?php echo $this->_tpl_vars['user_email_chk_yes']; ?>
><?php echo $this->_tpl_vars['umUsersEmailCheckYes']; ?>

					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['user_email_chk']; ?>
" value="0" <?php echo $this->_tpl_vars['user_email_chk_no']; ?>
><?php echo $this->_tpl_vars['umUsersEmailCheckNo']; ?>

				</td>
			</tr>	
<!--
	2012-12-15 edit by 健嘉
	------------------------------------------------------
	新增 新會員通知管理員
	------------------------------------------------------	
-->
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['umNewMemberSentMail']; ?>
</th>
				<td align="left">
					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['NewMemberSentMail']; ?>
" value="1" <?php echo $this->_tpl_vars['NewMemberSentMail_yes']; ?>
><?php echo $this->_tpl_vars['NewMemberSentMailYes']; ?>

					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['NewMemberSentMail']; ?>
" value="0" <?php echo $this->_tpl_vars['NewMemberSentMail_no']; ?>
><?php echo $this->_tpl_vars['NewMemberSentMailNo']; ?>

				</td>
			</tr>	
			
			
			
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['umUsersEmailCheckDays']; ?>
</th>
				<td align="left">
					<INPUT TYPE="text" NAME="<?php echo $this->_tpl_vars['email_chk_days']; ?>
" size="3" maxlength="3" value="<?php echo $this->_tpl_vars['email_chk_days_value']; ?>
" style="text-align:right;">
				</td>
			</tr>
<!--
	2010-11-10 edit by 廷俊
	------------------------------------------------------
	新增保留管理者記錄天數的設定功能
	------------------------------------------------------	
-->
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['umRetainHistoryDays']; ?>
</th>
				<td align="left">
					<INPUT TYPE="text" NAME="<?php echo $this->_tpl_vars['retain_history_days']; ?>
" size="3" maxlength="3" value="<?php echo $this->_tpl_vars['retain_history_days_value']; ?>
" style="text-align:right;">
				</td>

			</tr>
			<tr>
				<td colspan="2" align="center">&nbsp;</td>
			</tr>			
				
<!--
	2010-06-11 edit by 廷俊
	------------------------------------------------------
	測試版要遮蔽"網站設定"的功能按鈕
	------------------------------------------------------		
-->
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
  </div>
  </form>
</div>
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
//-->
</script>
<!-- 頁籤終 -->
</div>

<?php echo $this->_tpl_vars['temp_log']; ?>
</body>
</html>