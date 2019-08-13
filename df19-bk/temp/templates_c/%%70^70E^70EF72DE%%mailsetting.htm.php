<?php /* Smarty version 2.6.26, created on 2012-07-30 10:21:21
         compiled from mailsetting.htm */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $this->_config[0]['vars']['website_title']; ?>
</title>
<script src="js/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="css/style1.css" rel="stylesheet" type="text/css">
</head>
<!--
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	mailsetting.htm		後台郵件伺服器設定	htm頁面
	│	開發者		│	玉玲
	│	版本		│	v1.0.1.0070201
	├=======================================================================================┤
	│	1.	v1.0.1.0070301	2010/07/03	廷俊	驗證郵件伺服器所有欄位的格式、空值
	│	2.	v1.0.1.0081001	2010/08/10	廷俊	修改成功訊息
	│	3.	v2.0.8.1022201	2011/02/22	廷俊	1.新增寄送測試信件功能觸發函數
	│											2.寄送測試信件前，需先經過smtp設定的欄位驗證函數
	│											3.smtp設定的欄位值，利用隱藏內嵌框架，GET傳值至MAIL寄發頁面
	│											4.寄件人名稱需把URI字串，採用UTF-8编碼轉成escape编碼
	│											5.新增寄送測試信件功能介面
	│											6.新增寄送測試信件的隱藏內嵌框架
	│											7.新增寄送測試信件功能觸發函數
	│	4.	v2.0.8.1030201	2011/03/02	廷俊	1.修改寄送測試郵件使用PHPMailer
	│											2.修正smtp設定的欄位值，利用隱藏內嵌框架，GET傳值至MAIL寄發頁面
	│											3.修改版面配置
	│	5.	v03.00.01.1031801	2011/03/28	廷俊	1.郵件伺服器設定加入SMTP驗證欄位
	│												2.修正版面配置
	│												3.寄發測試信件加入SMTP驗證欄位
	│	6.	v03.00.07.1053001	2011/06/01	廷俊	1.修正SMTP驗證欄位的ID值，避免IE7造成name與id誤判
	│												2.修改欄位名稱以及備註說明訊息
	│												3.新增顯示寄送失敗訊息
	│												4.新增必須測試寄發信件成功，才可儲存SMTP設定
	│												5.新增驗證測試郵件的主旨與內容不為空值
	│												6.測試郵件的主旨與內容，利用隱藏內嵌框架，GET傳值至MAIL寄發頁面
	└=======================================================================================┘
*/-->
<script language="javascript">

/*配合語系定義名詞*/
var smtp_server_sp="<?php echo $this->_tpl_vars['smtp_server_sp']; ?>
";
var smtp_port_sp="<?php echo $this->_tpl_vars['smtp_port_sp']; ?>
";
var smtp_userid_sp="<?php echo $this->_tpl_vars['smtp_userid_sp']; ?>
";
var smtp_password_sp="<?php echo $this->_tpl_vars['smtp_password_sp']; ?>
";
var smtp_reply_sp="<?php echo $this->_tpl_vars['smtp_reply_sp']; ?>
";
var smtp_from_sp="<?php echo $this->_tpl_vars['smtp_from_sp']; ?>
";
var smtp_fromna_sp="<?php echo $this->_tpl_vars['smtp_fromna_sp']; ?>
";
var test_subject_sp="<?php echo $this->_tpl_vars['test_subject_sp']; ?>
";
var test_body_sp="<?php echo $this->_tpl_vars['test_body_sp']; ?>
";

var smtp_server_err="<?php echo $this->_tpl_vars['smtp_server_err']; ?>
";
var smtp_port_err="<?php echo $this->_tpl_vars['smtp_port_err']; ?>
";
var smtp_reply_err="<?php echo $this->_tpl_vars['smtp_reply_err']; ?>
";
var smtp_from_err="<?php echo $this->_tpl_vars['smtp_from_err']; ?>
";

var Success_Test="<?php echo $this->_tpl_vars['Success_Test']; ?>
";

<?php echo '
/*
	2010-07-03 edit by 廷俊
	-------------------------------------------
	1.驗證郵件伺服器所有欄位空白、空值
	2.驗證郵件伺服器SMTP、連接埠、EMAIL的欄位格式是否正確
	-------------------------------------------
	2011-06-01 edit by 廷俊
	------------------------------------------------------
	新增驗證測試郵件的主旨與內容不為空值
	------------------------------------------------------	
*/
	function chkrepost(){

		var msg="";
		var mail_server=document.getElementById("mail_server").value;
		var mail_port=document.getElementById("mail_port").value;
		var mail_userid=document.getElementById("mail_userid").value;
		var mail_passwd=document.getElementById("mail_passwd").value;
		var mail_reply=document.getElementById("mail_reply").value;
		var mail_from=document.getElementById("mail_from").value;
		var mail_fromna=document.getElementById("mail_fromna").value;
		var test_subject=document.getElementById("test_subject").value;
		var test_body=document.getElementById("test_body").value;
		
		var ck_server = /^[^\\.@^\\s]+(\\.[^\\.@^\\s]+)+$/;
		var ck_int = /^[0-9]*[1-9][0-9]*$/;
		var ck_mail = /^[^@^\\s]+@[^\\.@^\\s]+(\\.[^\\.@^\\s]+)+$/;
		
		//驗證是否空白、空值、格式錯誤
		if(!ck_server.test(mail_server)){
			if(mail_server.replace(/\\s/g,"")==""){
				msg += smtp_server_sp + "\\r\\n";
			}else{			
				msg += smtp_server_err + "\\r\\n";
			}
		}
		if(!ck_int.test(mail_port)){
			if(mail_port.replace(/\\s/g,"")==""){
				msg += smtp_port_sp + "\\r\\n";			
			}else{		
				msg += smtp_port_err + "\\r\\n";
			}
		}
		if(mail_userid.replace(/\\s/g,"")==""){
			msg += smtp_userid_sp + "\\r\\n";
		}
		if(mail_passwd.replace(/\\s/g,"")==""){
			msg += smtp_password_sp + "\\r\\n";
		}
		if(!ck_mail.test(mail_reply)){
			if(mail_reply.replace(/\\s/g,"")==""){			
				msg += smtp_reply_sp + "\\r\\n";
			}else{
				msg += smtp_reply_err + "\\r\\n";
			}			
		}
		if(!ck_mail.test(mail_from)){
			if(mail_from.replace(/\\s/g,"")==""){
				msg += smtp_from_sp + "\\r\\n";
			}else{
				msg += smtp_from_err + "\\r\\n";
			}
		}		
		if(mail_fromna.replace(/\\s/g,"")==""){
			msg += smtp_fromna_sp + "\\r\\n";
		}		
		if(test_subject.replace(/\\s/g,"")==""){
			msg += test_subject_sp + "\\r\\n";
		}		
		if(test_body.replace(/\\s/g,"")==""){
			msg += test_body_sp + "\\r\\n";
		}		
		if(msg==\'\'){
			return true;
		}else{
			alert(msg);
			return false;
		}	
	}
/*
	2011-02-22 edit by 廷俊
	-------------------------------------------
	1.新增寄送測試信件功能觸發函數
	2.寄送測試信件前，需先經過smtp設定的欄位驗證函數
	3.smtp設定的欄位值，利用隱藏內嵌框架，GET傳值至MAIL寄發頁面
	4.寄件人名稱需把URI字串，採用UTF-8编碼轉成escape编碼
	-------------------------------------------
	2011-03-02 edit by 廷俊
	-------------------------------------------
	1.修改寄送測試郵件使用PHPMailer
	2.修正smtp設定的欄位值，利用隱藏內嵌框架，GET傳值至MAIL寄發頁面
	3.修改版面配置
	-------------------------------------------
	2011-03-28 edit by 廷俊
	------------------------------------------------------
	寄發測試信件加入SMTP驗證欄位
	------------------------------------------------------
	2011-06-01 edit by 廷俊
	------------------------------------------------------
	1.修正SMTP驗證欄位的ID值，避免IE7造成name與id誤判
	2.測試郵件的主旨與內容，利用隱藏內嵌框架，GET傳值至MAIL寄發頁面
	------------------------------------------------------		
*/	
	function smtp_test(){
		if(chkrepost()){
			var mhost=document.getElementById(\'mail_server\').value;
			var mport=document.getElementById(\'mail_port\').value;
			if (document.getElementById(\'smtp_verify\').checked==true){
				smtpchk="1";
			}else{
				smtpchk="0";
			}
			var muser=document.getElementById(\'mail_userid\').value;
			var mpwd=document.getElementById(\'mail_passwd\').value;
			var maddreply=document.getElementById(\'mail_reply\').value;
			var musermail=document.getElementById(\'mail_from\').value;
			var muserna=encodeURI(document.getElementById(\'mail_fromna\').value);//轉碼
			var mailsubject=encodeURI(document.getElementById(\'test_subject\').value);//轉碼
			var mailbody=encodeURI(document.getElementById(\'test_body\').value);//轉碼
			var mailto=document.getElementById(\'mail_test\').value;
			document.getElementById(\'Send_MAIL\').src=\'mailsetting.php?act=test&mhost=\'+mhost+\'&mport=\'+mport+\'&smtpchk=\'+smtpchk+\'&muser=\'+muser+\'&mpwd=\'+mpwd+\'&maddreply=\'+maddreply+\'&musermail=\'+musermail+\'&muserna=\'+muserna+\'&mailsubject=\'+mailsubject+\'&mailbody=\'+mailbody+\'&mailto=\'+mailto;
		}
	}
'; ?>

</script>
<body>

<div id="use_title">
  <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="72%" align="left"><?php echo $this->_tpl_vars['mailsetting']; ?>
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
	2010-06-04 edit by 廷俊
	------------------------------------------------------
	郵件伺服器設定備註說明
	------------------------------------------------------		
	2011-02-22 edit by 廷俊
	------------------------------------------------------
	1.新增寄送測試信件功能介面
	2.新增寄送測試信件的隱藏內嵌框架
	3.新增寄送測試信件功能觸發函數
	------------------------------------------------------	
	2011-03-28 edit by 廷俊
	------------------------------------------------------
	1.郵件伺服器設定加入SMTP驗證欄位
	2.修正版面配置
	------------------------------------------------------		
	2011-06-01 edit by 廷俊
	------------------------------------------------------
	1.修正SMTP驗證欄位的ID值，避免IE7造成name與id誤判
	2.修改欄位名稱以及備註說明訊息
	3.新增顯示寄送失敗訊息
	4.新增必須測試寄發信件成功，才可儲存SMTP設定
	------------------------------------------------------	
-->
<form name="savefrm" id="savefrm" method="post" action="mailsetting.php?act=save" onsubmit="return chkrepost();">

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
	
	
	<table border="0" cellpadding="1" cellspacing="1" align="center" width="98%">	
		<tr>				
			<th align="right" colspan="3">&nbsp;</th>
		</tr>	
		<tr>				
			<th align="right"><?php echo $this->_tpl_vars['smtp_server']; ?>
</th>
			<td align="left"><input type="text" name="mail_server" id="mail_server" size=50 value="<?php echo $this->_tpl_vars['mail_server_value']; ?>
"></td>
			<td align="left"><?php echo $this->_tpl_vars['smtp_server_ps']; ?>
</td>
		</tr>
		<tr>				
			<th align="right"><?php echo $this->_tpl_vars['smtp_port']; ?>
</th>
			<td align="left"><input type="text" name="mail_port" id="mail_port" size=50 value="<?php echo $this->_tpl_vars['mail_port_value']; ?>
"></td>
			<td align="left"><?php echo $this->_tpl_vars['smtp_port_ps']; ?>
</td>
		</tr>
		<tr>				
			<th align="right"><?php echo $this->_tpl_vars['smtp_verify']; ?>
</th>
			<td align="left">
				<INPUT TYPE="radio" NAME="mail_verify" value="0" checked><?php echo $this->_tpl_vars['smtp_no']; ?>

				<INPUT TYPE="radio" NAME="mail_verify" id="smtp_verify" value="1" <?php if ($this->_tpl_vars['mail_verify_value'] == '1'): ?>checked<?php endif; ?>><?php echo $this->_tpl_vars['smtp_yes']; ?>

			</td>
			<td align="left"><?php echo $this->_tpl_vars['smtp_verify_ps']; ?>
</td>
		</tr>
		<tr>				
			<th align="right"><?php echo $this->_tpl_vars['smtp_userid']; ?>
</th>
			<td align="left"><input type="text" name="mail_userid" id="mail_userid" size=50 value="<?php echo $this->_tpl_vars['mail_userid_value']; ?>
"></td>
			<td align="left"><?php echo $this->_tpl_vars['smtp_userid_ps']; ?>
</td>
		</tr>
		<tr>				
			<th align="right"><?php echo $this->_tpl_vars['smtp_password']; ?>
</th>
			<td align="left"><input type="password" name="mail_passwd" id="mail_passwd" size=50 value="<?php echo $this->_tpl_vars['mail_password_value']; ?>
"></td>
			<td align="left"><?php echo $this->_tpl_vars['smtp_password_ps']; ?>
</td>
		</tr>
		<tr>				
			<th align="right"><?php echo $this->_tpl_vars['smtp_reply']; ?>
</th>
			<td align="left"><input type="text" name="mail_reply" id="mail_reply" size=50 value="<?php echo $this->_tpl_vars['mail_reply_value']; ?>
"></td>
			<td align="left"><?php echo $this->_tpl_vars['smtp_reply_ps']; ?>
</td>
		</tr>
		<tr>				
			<th align="right"><?php echo $this->_tpl_vars['smtp_from']; ?>
</th>
			<td align="left"><input type="text" name="mail_from" id="mail_from" size=50 value="<?php echo $this->_tpl_vars['mail_from_value']; ?>
"></td>
			<td align="left"><?php echo $this->_tpl_vars['smtp_from_ps']; ?>
</td>
		</tr>
		<tr>				
			<th align="right"><?php echo $this->_tpl_vars['smtp_fromna']; ?>
</th>
			<td align="left"><input type="text" name="mail_fromna" id="mail_fromna" size=50 value="<?php echo $this->_tpl_vars['mail_fromna_value']; ?>
"></td>
			<td align="left"><?php echo $this->_tpl_vars['smtp_fromna_ps']; ?>
</td>
		</tr>
		<tr>				
			<th align="right" colspan="3">&nbsp;</th>
		</tr>	
		<tr>		
			<td colspan="3" align="center"><INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
" id="Btn_Save1" disabled></td>
		</tr>
		<tr>	
			<th align="right">&nbsp;</th>
			<td colspan="2" width="72%" align="left" valign="middle"><?php echo $this->_tpl_vars['ps']; ?>
</td>
		</tr>
	</table>		
	</div>

    <div class="TabbedPanelsContent">	
	<table border="0" cellpadding="1" cellspacing="1" align="center" width="95%">		
		<tr>				
			<th align="right" colspan="2">&nbsp;</th>
		</tr>	
		<tr>				
			<th align="right" width="90"><?php echo $this->_tpl_vars['test_subject']; ?>
</th>
			<td align="left"><input type="text" name="test_subject" id="test_subject" size=50 value="<?php echo $this->_tpl_vars['test_subject_value']; ?>
"></td>
		</tr>
		<tr>				
			<th align="right" valign="top"><?php echo $this->_tpl_vars['test_body']; ?>
</th>
			<td align="left"><TEXTAREA NAME="test_body" id="test_body" ROWS="8" COLS="75"><?php echo $this->_tpl_vars['test_body_value']; ?>
</TEXTAREA></td>
		</tr>
		<tr>				
			<th align="right" colspan="2">&nbsp;</th>
		</tr>
		<tr>				
			<th align="right"><?php echo $this->_tpl_vars['smtp_test']; ?>
</th>
			<td align="left">
				<input type="text" name="mail_test" id="mail_test" size=50 value="">
				<INPUT TYPE="button" value="<?php echo $this->_tpl_vars['Btn_Test']; ?>
" onclick="smtp_test();">
			</td>
		</tr>
		<tr>	
			<th align="right" valign="top"><?php echo $this->_tpl_vars['smtp_errorMessage']; ?>
</th>
			<th align="center"><iframe id="Send_MAIL" width="100%" height="60"></iframe>&nbsp;</th>
		</tr>
		<tr>		
			<td colspan="2" align="center"><INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
" id="Btn_Save2" disabled></td>
		</tr>
		<tr>				
			<th align="right" colspan="3">&nbsp;</th>
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