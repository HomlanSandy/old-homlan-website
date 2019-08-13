<?php /* Smarty version 2.6.26, created on 2011-02-11 10:07:06
         compiled from install.htm */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>EZPortal<?php echo $this->_tpl_vars['PageTitle']; ?>
</title>
<link href="themes/css/style1.css" rel="stylesheet" type="text/css">
<!--
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	install.php	ezportal安裝流程
	│	開發者		│	玉玲
	│	版本		│	v1.0.0.0062201
	├=======================================================================================┤
	│	1.	v1.0.1.0062201	2010/06/22	廷俊	安裝歡迎 → 安裝需知 → 安裝ing → 歡迎使用畫面	
	│	2.	v1.0.1.0062202	2010/06/22	廷俊	註解：使用者輸入設定值，後端用POST取值	
	│	3.	v1.0.1.0070601	2010/07/06	廷俊	歡迎安裝內容、安裝環境需知內容、歡迎使用內容	
	│	4.	v1.0.1.0070602	2010/07/06	廷俊	顯示建議瀏覽器and解析度
	│	5.	v1.0.1.0070603	2010/07/06	廷俊	同意條款功能
	│	6.	v1.0.1.0070604	2010/07/06	廷俊	增加判斷	重複安裝、新增資料庫失敗、資料庫連線失敗畫面	
	│	7.	v1.0.1.0070801	2010/07/08	廷俊	更改安裝流程	
	│	8.	v1.0.1.0070901	2010/07/09	廷俊	安裝時讓使用者輸入DB密碼、更改安裝流程
	│	9.	v1.0.1.0070902	2010/07/09	廷俊	利用index.php的框架包install.php的安裝流程
	│	10.	v1.0.1.0071401	2010/07/14	廷俊	驗證IE7以上版本
	│	11.	v2.0.2.0112901	2010/11/29	廷俊	1.安裝歡迎畫面，新增選擇進皆設定or標準安裝
	│											2.安裝歡迎畫面，調整版面設定
	│											3.安裝歡迎畫面，按鈕更改為submit用post帶欄位值
	│											4.安裝歡迎畫面選擇模式後，觸發可點選下一步按鈕
	│											5.安裝同意畫面，依造所選擇的安裝模式來指定所需的設定欄位
	│												i.進皆設定：主機名稱；DB帳密、名稱；管理者名稱、帳密、mail、電話
	│												ii.標準安裝：DB密碼
	│												iii.並加入欄位備註說明
	│											6.安裝同意畫面，調整版面設定
	│											7.安裝同意畫面，按鈕更改為submit用post帶欄位值
	│											8.安裝同意畫面，新增hidden欄位，儲存選擇安裝模式的資訊
	│											9.安裝同意畫面，驗證表單欄位：
	│												i.驗證資料庫密碼，空白、英文字母及數字
	│												ii.進階設定新增驗證：
	│													a.驗證主機名稱，空白、英文字母及數字
	│													b.驗證資料庫帳號，空白、英文字母及數字
	│													c.驗證資料庫，空白、英文字母及數字
	│													d.驗證管理者名稱，空白
	│													e.驗證管理者帳號，空白、英文字母及數字
	│													f.驗證管理者密碼，空白、英文字母及數字
	│													g.驗證管理者電子郵件，空白、有效的mail格式
	│													h.驗證管理者電話，空白
	│											10.安裝中畫面，若非選擇進階設定安裝，則採用系統預設值
	│											11.執行安裝搬移至載入安裝中畫面時執行
	│											12.產生管理員資料，加入管理者電子郵件、聯絡電話
	│											13.修正config檔寫入內容
	│	12.	v2.0.2.0113001	2010/11/30	廷俊	a.遮蔽管理者電子郵件、聯絡電話欄位
	│											b.調整安裝流程版面設定
	└=======================================================================================┘
-->	
</head>

<script language="javascript">
<!--
var mode="<?php echo $this->_tpl_vars['mode']; ?>
";
var error_host="<?php echo $this->_tpl_vars['error_host']; ?>
";
var error_hostType="<?php echo $this->_tpl_vars['error_hostType']; ?>
";
var error_user="<?php echo $this->_tpl_vars['error_user']; ?>
";
var error_userType="<?php echo $this->_tpl_vars['error_userType']; ?>
";
var error_dbpasswd="<?php echo $this->_tpl_vars['error_dbpasswd']; ?>
";
var error_dbpasswdType="<?php echo $this->_tpl_vars['error_dbpasswdType']; ?>
";
var error_Database="<?php echo $this->_tpl_vars['error_Database']; ?>
";
var error_DatabaseType="<?php echo $this->_tpl_vars['error_DatabaseType']; ?>
";
var error_ManagerName="<?php echo $this->_tpl_vars['error_ManagerName']; ?>
";
var error_LoginId="<?php echo $this->_tpl_vars['error_LoginId']; ?>
";
var error_LoginIdType="<?php echo $this->_tpl_vars['error_LoginIdType']; ?>
";
var error_LoginPwd="<?php echo $this->_tpl_vars['error_LoginPwd']; ?>
";
var error_LoginPwdType="<?php echo $this->_tpl_vars['error_LoginPwdType']; ?>
";
var error_ManagerEmail="<?php echo $this->_tpl_vars['error_ManagerEmail']; ?>
";
var error_EmailType="<?php echo $this->_tpl_vars['error_EmailType']; ?>
";
var error_ManagerTel="<?php echo $this->_tpl_vars['error_ManagerTel']; ?>
";

<?php echo '
/*
  	2010-07-06 edit by 廷俊
	----------------------------------------------------
	同意條款功能
	----------------------------------------------------  
*/
	function agreed(){
		if(document.getElementById(\'agree\').checked){
			document.getElementById(\'next\').disabled=false;
		}else{
			document.getElementById(\'next\').disabled=true;
		}
	}
/*
  	2010-11-29 edit by 廷俊
	----------------------------------------------------
	安裝歡迎畫面選擇模式後，觸發可點選下一步按鈕
	----------------------------------------------------  
*/
	function change(){
		document.getElementById(\'next1\').disabled=false;
	}
/*
  	2010-11-29 edit by 廷俊
	----------------------------------------------------
	安裝同意畫面，驗證表單欄位：
	i.驗證資料庫密碼，空白、英文字母及數字
	ii.進階設定新增驗證：
		a.驗證主機名稱，空白、英文字母及數字
		b.驗證資料庫帳號，空白、英文字母及數字
		c.驗證資料庫，空白、英文字母及數字
		d.驗證管理者名稱，空白
		e.驗證管理者帳號，空白、英文字母及數字
		f.驗證管理者密碼，空白、英文字母及數字
		g.驗證管理者電子郵件，空白、有效的mail格式
		h.驗證管理者電話，空白
	----------------------------------------------------  
*/	
	function input_chk(){
		var msg="";
		//var reg_email=/^\\w+([-+.]\\w+)*@\\w+([-.]\\w+)*\\.\\w+([-.]\\w+)*$/;
		var reg_char=/^[a-zA-Z0-9_]+$/;
		//進階設定安裝模式
		if(mode=="Advanced"){
			//驗證主機名稱
			db_host=document.getElementById("db_host").value;
			if (db_host==""){
				msg+=error_host+"\\r\\n";
			}else if (!reg_char.test(db_host)){
				msg+=error_hostType+"\\r\\n";			
			}
			//驗證資料庫帳號
			db_user=document.getElementById("db_user").value;		
			if (db_user==""){
				msg+=error_user+"\\r\\n";
			}else if (!reg_char.test(db_user)){
				msg+=error_userType+"\\r\\n";	
			}
			//驗證資料庫
			db_database=document.getElementById("db_database").value;
			if (db_database==""){
				msg+=error_Database+"\\r\\n";
			}else if (!reg_char.test(db_database)){
				msg+=error_DatabaseType+"\\r\\n";		
			}
			//驗證管理者名稱
			manager_na=document.getElementById("manager_na").value;
			if (manager_na==""){
				msg+=error_ManagerName+"\\r\\n";
			}
			//驗證管理者帳號
			manager_id=document.getElementById("manager_id").value;
			if (manager_id==""){
				msg+=error_LoginId+"\\r\\n";
			}else if (!reg_char.test(manager_id)){
				msg+=error_LoginIdType+"\\r\\n";		
			}
			//驗證管理者密碼
			manager_pwd=document.getElementById("manager_pwd").value;
			if (manager_pwd==""){
				msg+=error_LoginPwd+"\\r\\n";
			}else if (!reg_char.test(manager_pwd)){
				msg+=error_LoginPwdType+"\\r\\n";		
			}
/*			//驗證管理者電子郵件
			manager_email=document.getElementById("manager_email").value;
			if (manager_email==""){
				msg+=error_ManagerEmail+"\\r\\n";
			}else if (!reg_email.test(manager_email)){
				msg+=error_EmailType+"\\r\\n";	
			}
			//驗證管理者電話
			manager_tel=document.getElementById("manager_tel").value;
			if (manager_tel==""){
				msg+=error_ManagerTel+"\\r\\n";
			}*/
		}
		//驗證資料庫密碼
		db_passwd=document.getElementById("db_passwd").value;		
		if (db_passwd==""){
			msg+=error_dbpasswd+"\\r\\n";
		}else if (!reg_char.test(db_passwd)){
			msg+=error_dbpasswdType+"\\r\\n";			
		}
		if (msg!=""){
			alert(msg);	
			return false;
		} else {
			return true;
		}
	} 
'; ?>

-->
</script>

<body id="login_bg">
<div id="show_table3">
<form name="frm" method="post" action="<?php echo $this->_tpl_vars['frm_act']; ?>
" onsubmit="return input_chk()">
	<table width="100%" valign="top" border="0" cellspacing="0" cellpadding="0" class="login_table">
		<tr>
			<td height="262" valign="top">&nbsp;</td>
		</tr> 
	</table> 
	<table border="0" cellpadding="1" cellspacing="1" align="center" width="100%" height="100%" class="login_table2">   

<!--
  	2010-06-22 edit by 廷俊
	----------------------------------------------------
	增加	安裝歡迎 → 安裝需知 → 安裝ing → 歡迎使用畫面	
	----------------------------------------------------  
  	2010-07-06 edit by 廷俊
	----------------------------------------------------
	1.歡迎安裝內容、安裝環境需知內容、歡迎使用內容
	2.同意條款功能
	3.增加判斷	重複安裝、新增資料庫失敗、資料庫連線失敗畫面	
	---------------------------------------------------- 
  	2010-07-08 edit by 廷俊
	----------------------------------------------------
	1.更改歡迎安裝畫面
	2.安裝環境需知內容，改為安裝同意畫面
	3.判斷重複安裝，直接連結至後台頁面
	4.資料庫連線、新增失敗，要標明請洽系統服務商
	----------------------------------------------------
  	2010-07-09 edit by 廷俊
	----------------------------------------------------
	1.安裝畫面要置中
	2.用GET接db_passwd的值
	3.利用index.php的框架包install.php的安裝流程
	---------------------------------------------------- 
  	2010-07-14 edit by 廷俊
	----------------------------------------------------
	驗證IE7以上版本
	---------------------------------------------------- 
  	2010-11-29 edit by 廷俊
	----------------------------------------------------
	1.安裝歡迎畫面，新增選擇進皆設定or標準安裝
	2.安裝歡迎畫面，調整版面設定
	3.安裝歡迎畫面，按鈕更改為submit用post帶欄位值
	----------------------------------------------------	
-->
  
<!--安裝歡迎 畫面-->
<?php if ($this->_tpl_vars['step'] == 'Welcome_Install'): ?>
		<tr>
			<td align="center">
				<table border="0" cellpadding="1" cellspacing="1" align="center" width="500" class="login_table2"> 
					<tr>
						<th align="center" colspan=2><?php echo $this->_tpl_vars['Welcome_Install']; ?>
</th>
					</tr>
					<tr>
						<th width="35%" align="center">&nbsp;</th>
						<td align="left">	<!--選擇安裝模式-->
							<input type="radio" name="mode" value="Simple" onClick="change()"><?php echo $this->_tpl_vars['Simple_Install']; ?>
<br>
							<input type="radio" name="mode" value="Advanced" onClick="change()"><?php echo $this->_tpl_vars['Advanced_Install']; ?>

						</td>
					</tr>
					<tr>
						<td align="center" colspan=2>
							<input type="submit" id="next1" class="login_btn" value="<?php echo $this->_tpl_vars['Btn_Next']; ?>
" disabled>
						</td>
					</tr>
				</table>
			</td>
		</tr>

<!--
   	2010-11-29 edit by 廷俊
	----------------------------------------------------
	1.安裝同意畫面，依造所選擇的安裝模式來指定所需的設定欄位
		i.進皆設定：主機名稱；DB帳密、名稱；管理者名稱、帳密、mail、電話
		ii.標準安裝：DB密碼
		iii.並加入欄位備註說明
	2.安裝同意畫面，調整版面設定
	3.安裝同意畫面，按鈕更改為submit用post帶欄位值
	4.安裝同意畫面，新增hidden欄位，儲存選擇安裝模式的資訊
	----------------------------------------------------
-->
<!--安裝同意 畫面-->
<?php elseif ($this->_tpl_vars['step'] == 'Tips'): ?>
	<tr>
		<th align="center"><?php echo $this->_tpl_vars['Tips']; ?>
</th>
	</tr> 
	<tr>
		<td align="center">	<!--安裝同意書-->
			<textarea rows="15" cols="63%"><?php echo $this->_tpl_vars['Welcome_Install_textarea']; ?>
</textarea>
			<input type="hidden" name="mode" value="<?php echo $this->_tpl_vars['mode']; ?>
">
		</td>
	</tr>
	<tr>
		<td align="center">
	<?php if ($this->_tpl_vars['mode'] == 'Advanced'): ?>	<!--進皆設定安裝模式-->
			<table border="0" cellpadding="1" cellspacing="1" align="center" width="500" class="login_table2"> 
				<tr>
					<td align="left" colspan=2>	
						<input type="checkbox" id="agree" onClick="agreed()">
						<font size="3"><?php echo $this->_tpl_vars['agree']; ?>
</font>
					</td>
				</tr>
				<tr>
					<th align="left" colspan=2>&nbsp;</th>
				</tr>
				<tr>
					<td align="left" width="20%"><font size="3"><?php echo $this->_tpl_vars['db_host']; ?>
</font></td>
					<td><input type="text" name="db_host" id="db_host" size="20" class="login_textfield">&nbsp;<span style="color:#FF0000;font-size:12px"><?php echo $this->_tpl_vars['exp_host']; ?>
</span></td>
				</tr> 
				<tr>
					<td align="left"><font size="3"><?php echo $this->_tpl_vars['db_user']; ?>
</font></td>
					<td><input type="text" name="db_user" id="db_user" size="20" class="login_textfield">&nbsp;<span style="color:#FF0000;font-size:12px"><?php echo $this->_tpl_vars['exp_user']; ?>
</span></td>
				</tr>
				<tr>
					<td align="left"><font size="3"><?php echo $this->_tpl_vars['db_passwd']; ?>
</font></td>
					<td><input type="password" name="db_passwd" id="db_passwd" size="22" class="login_textfield">&nbsp;<span style="color:#FF0000;font-size:12px"><?php echo $this->_tpl_vars['exp_passwd']; ?>
</span></td>
				</tr> 
				<tr>
					<td align="left"><font size="3"><?php echo $this->_tpl_vars['db_database']; ?>
</font></td>
					<td><input type="text" name="db_database" id="db_database" size="20" class="login_textfield">&nbsp;<span style="color:#FF0000;font-size:12px"><?php echo $this->_tpl_vars['exp_database']; ?>
</span></td>
				</tr> 
				<tr>
					<td align="left"><font size="3"><?php echo $this->_tpl_vars['manager_na']; ?>
</font></td>
					<td><input type="text" name="manager_na" id="manager_na" size="20" class="login_textfield">&nbsp;<span style="color:#FF0000;font-size:12px"><?php echo $this->_tpl_vars['exp_manager_na']; ?>
</span></td>
				</tr> 
				<tr>
					<td align="left"><font size="3"><?php echo $this->_tpl_vars['manager_id']; ?>
</font></td>
					<td><input type="text" name="manager_id" id="manager_id" size="20" class="login_textfield">&nbsp;<span style="color:#FF0000;font-size:12px"><?php echo $this->_tpl_vars['exp_manager_loginId']; ?>
</span></td>
				</tr> 
				<tr>
					<td align="left"><font size="3"><?php echo $this->_tpl_vars['manager_pwd']; ?>
</font></td>
					<td><input type="password" name="manager_pwd" id="manager_pwd" size="22" class="login_textfield">&nbsp;<span style="color:#FF0000;font-size:12px"><?php echo $this->_tpl_vars['exp_manager_pwd']; ?>
</span></td>
				</tr>
<!-- 			<tr>
					<td align="left"><font size="3"><?php echo $this->_tpl_vars['manager_email']; ?>
</font></td>
					<td><input type="text" name="manager_email" id="manager_email" size="20" class="login_textfield">&nbsp;<span style="color:#FF0000;font-size:12px"><?php echo $this->_tpl_vars['exp_manager_email']; ?>
</span></td>
				</tr>
				<tr>
					<td align="left"><font size="3"><?php echo $this->_tpl_vars['manager_tel']; ?>
</font></td>
					<td><input type="text" name="manager_tel" id="manager_tel" size="20" class="login_textfield">&nbsp;<span style="color:#FF0000;font-size:12px"><?php echo $this->_tpl_vars['exp_manager_tel']; ?>
</span></td>
				</tr> -->
				<tr>
					<th align="left" colspan=2>&nbsp;</th>
				</tr>
				<tr>
					<td align="center" colspan=2><input type="submit" id="next" class="login_btn" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
" disabled></td>
				</tr>
			</table>			
	<?php else: ?>	<!--標準安裝模式-->
			<input type="checkbox" id="agree" onClick="agreed()">
			<font size="3"><?php echo $this->_tpl_vars['agree']; ?>
</font>
		</td>
	<tr>
	<tr>
		<th align="center">&nbsp;</th>
	</tr>
	</tr>
		<td align="center">			
			<font size="3"><?php echo $this->_tpl_vars['db_passwd']; ?>
</font>
			<input type="password" name="db_passwd" id="db_passwd" size="22" class="login_textfield">&nbsp;<span style="color:#FF0000;font-size:12px"><?php echo $this->_tpl_vars['exp_passwd']; ?>
</span>
		</td>
	<tr>
	<tr>
		<th align="center">&nbsp;</th>
	</tr>
	</tr>
		<td align="center">
			<input type="submit" id="next" class="login_btn" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
" disabled>
	<?php endif; ?>		
		</td>
	</tr>

<!--安裝中 畫面-->
<?php elseif ($this->_tpl_vars['step'] == 'Install'): ?>
	<meta http-equiv="Refresh" content='15;URL=install.php?step=Welcome_Use'>
	<tr>
		<td align="center">
			<img src="themes/images/ajax-loader.gif" width="400" height="20"><br><br><?php echo $this->_tpl_vars['Install']; ?>

		</td>
	</tr>

<!--歡迎使用 畫面-->
<?php elseif ($this->_tpl_vars['step'] == 'Welcome_Use'): ?>
	<tr>
		<th align="center"><?php echo $this->_tpl_vars['Welcome_Use']; ?>
</th>
	</tr>
	<tr>
		<td align="center">
			<input type="button" class="login_btn" value="<?php echo $this->_tpl_vars['Btn_Finish']; ?>
" onclick="alert('<?php echo $this->_tpl_vars['Msg_Finish']; ?>
');parent.location.href='../hmanager';">
		</td>
	</tr>

<!--重複安裝 畫面-->	
<?php elseif ($this->_tpl_vars['step'] == 'Error'): ?>
	<tr>
		<th align="center"><?php echo $this->_tpl_vars['Install_Error']; ?>
</th>
	</tr>
	<tr>
		<td align="center">
			<input type="button" class="login_btn" value="<?php echo $this->_tpl_vars['Btn_Confirm']; ?>
" onclick="parent.location.href='../hmanager'">
		</td>
	</tr>	
	
<!--驗證IE7以上版本 畫面-->	
<?php elseif ($this->_tpl_vars['step'] == 'IE_Error'): ?>
	<tr>
		<th align="center"><?php echo $this->_tpl_vars['Install_IE_Error']; ?>
</th>
	</tr>
	<tr>
		<td align="center">
			<input type="button" class="login_btn" value="<?php echo $this->_tpl_vars['Btn_Confirm']; ?>
" onclick="location.href='install.php'">
		</td>
	</tr>	
	
<!--新增資料庫失敗 畫面-->	
<?php elseif ($this->_tpl_vars['step'] == 'DB_Create_Error'): ?>
	<tr>
		<th align="center"><?php echo $this->_tpl_vars['DataBaseCreateError']; ?>
</th>
	</tr>
	<tr>
		<td align="center">
			<input type="button" class="login_btn" value="<?php echo $this->_tpl_vars['Btn_Confirm']; ?>
" onclick="location.href='install.php'">
		</td>
	</tr>	
	
<!--資料庫連線失敗 畫面-->	
<?php elseif ($this->_tpl_vars['step'] == 'DB_Connect_Error'): ?>
	<tr>
		<th align="center"><?php echo $this->_tpl_vars['DbConnectError']; ?>
</th>
	</tr>
	<tr>
		<td align="center">
			<input type="button" class="login_btn" value="<?php echo $this->_tpl_vars['Btn_Confirm']; ?>
" onclick="location.href='install.php'">
		</td>
	</tr>	
<?php endif; ?>

<!-- 
  	2010-07-06 edit by 廷俊
	----------------------------------------------------
	顯示建議瀏覽器and解析度
	----------------------------------------------------  
-->
	<table border="0" cellpadding="1" cellspacing="1" align="left"  width="100%" height="100%" class="login_table3">
		<tr>
			<td align="center"><font color="#FFF000" size="3"><?php echo $this->_tpl_vars['ps']; ?>
</font></td>
		</tr> 
	</table>
	</table>
</form>
</div>
</body>
</html>