<?php /* Smarty version 2.6.26, created on 2012-07-27 14:08:47
         compiled from form_reply.tpl.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="title" content="<?php echo $this->_tpl_vars['website_title']; ?>
<?php echo $this->_tpl_vars['website_info']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['website_descript']; ?>
" />
<meta name="keywords" content="<?php echo $this->_tpl_vars['websitw_keyword']; ?>
<?php echo $this->_tpl_vars['website_info']; ?>
" />
<title><?php echo $this->_tpl_vars['website_info']; ?>
<?php echo $this->_tpl_vars['website_title']; ?>
</title>
<script src="themes/<?php echo $this->_tpl_vars['themes_na']; ?>
/css/MenuToDown.js" type="text/javascript"></script>
<script src="themes/<?php echo $this->_tpl_vars['themes_na']; ?>
/css/MenuToRight.js" type="text/javascript"></script>
<script src="themes/<?php echo $this->_tpl_vars['themes_na']; ?>
/css/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="themes/<?php echo $this->_tpl_vars['themes_na']; ?>
/css/style.css" rel="stylesheet" type="text/css">
<!--
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	form_reply.tpl.htm		前台內嵌視窗的表單回應內容
	│	開發者		│	玉玲、Fish、智倩
	│	版本		│	v1.0.0.0062101
	├=======================================================================================┤
	│	1.	v1.0.1.0062101	2010/06/21	廷俊	前台送出表單，先顯示表單內容，再按確定送出，最後才顯示回應訊息	
	│	2.	v1.0.1.0062401	2010/06/24	廷俊	表單資料要用hidden和POST傳值	
	│	3.	v1.0.1.0062402	2010/06/24	廷俊	表單內容若有輸入MAIL欄位資料，又不是會員$_SESSION['users_email']，也必須寄發MAIL	
	│	4.	v1.0.1.0080401	2010/08/04	廷俊	前台確認表單內容頁面，因為特殊符號的關係，顯示表單內容 與 用hidden帶表單內容值的SMATRY要分開	
	│	5.	v03.00.02.1040801	2011/04/20	廷俊		1.動態顯示付款方式的詳細資料
	│													2.驗證付款方式(防空白)
	│													3.若啟用付款設定，則顯示選擇付款方式的區塊
	│	6.	v03.00.02.1040801	2011/04/21	廷俊		1.確認付款表單資料頁面，需用hidden帶值至儲存、回應表單資訊
	│													2.若表單啟用付款設定，回應表單資訊頁面則需增加顯示表單基本資訊、付款資訊、付款表單動作
	│													3.新增列印表單框架的函數
	│	7.	v03.00.02.1040801	2011/04/22	廷俊		1.若付款表單的付款方式選擇玉山-信用卡，則需API拋轉至收單系統
	│													2.使用HTML POST傳值，FORM不可重疊
	│	8.	v03.00.02.1040801	2011/04/28	廷俊		a.修改表單流程頁面設定為獨立頁面設定
	│													b.修正表單流程頁面設定需使用網頁中間區域模組列表
	│	9.	v03.00.02.1040801	2011/05/03	廷俊		a.若付款表單只設定一種付款方式，則已預設勾選不需驗證
	│													b.取得付款表單的付款方式數量，驗證是否使用勾選付款方式
	│	10.	v03.00.06.1052301	2011/05/30	廷俊		若無啟用付款方式的表單，則不需驗證付款方式
	│	11.  v03.00.10.1062001	2011-06-22	玉玲	新增判斷螢幕解析度大小函式 container_js。
	└=======================================================================================┘
-->
</head>
<script type="text/javascript">
<!--
var payment_detail_1='<?php echo $this->_tpl_vars['payment_detail_1']; ?>
';
var payment_detail_2='<?php echo $this->_tpl_vars['payment_detail_2']; ?>
';
var payment_detail_3='<?php echo $this->_tpl_vars['payment_detail_3']; ?>
';
var payment_count='<?php echo $this->_tpl_vars['payment_count']; ?>
';
var Select_Payment='<?php echo $this->_tpl_vars['Select_Payment']; ?>
';
<?php echo '
/*
	2011-04-20 edit by 廷俊
	-------------------------------------------
	動態顯示付款方式的詳細資料
	-------------------------------------------
*/	
//動態顯示付款方式的詳細資料
function dynamic(){
	if(document.getElementsByName("payment_mode")[0].checked){
		document.getElementById("payment_detail").innerHTML=payment_detail_1;
	}else if(document.getElementsByName("payment_mode")[1].checked){
		document.getElementById("payment_detail").innerHTML=payment_detail_2;
	}else if(document.getElementsByName("payment_mode")[2].checked){
		document.getElementById("payment_detail").innerHTML=payment_detail_3;
	}
}

/*
	2011-04-20 edit by 廷俊
	-------------------------------------------
	驗證付款方式(防空白)
	-------------------------------------------
	2011-05-03 edit by 廷俊
	------------------------------------------------------
	1.若付款表單只設定一種付款方式，則已預設勾選不需驗證
	2.取得付款表單的付款方式數量，驗證是否使用勾選付款方式
	------------------------------------------------------
	2011-05-30 edit by 廷俊
	------------------------------------------------------
	若無啟用付款方式的表單，則不需驗證付款方式
	------------------------------------------------------
*/	
//驗證付款方式(防空白)
function chkrepost(){
	var msg="";
	var chk1=false;
	//若付款表單只設定一種付款方式，則已預設勾選不需驗證
	//若無啟用付款方式的表單，則不需驗證付款方式
	if(payment_count==1 || payment_count==""){
		chk1=true;
	}else{
		//取得付款表單的付款方式數量，驗證是否使用勾選付款方式
		for(i=0;i<payment_count;i++){
			if(document.getElementsByName("payment_mode")[i].checked){
				chk1=true;
			}
		}
	}
	if(chk1==false){
		msg += Select_Payment + "\\r\\n";
	}
	if(msg==\'\'){
		return true;
	}else{
		alert(msg);
		return false;
	}
}
/*
	2011-04-21 edit by 廷俊
	-------------------------------------------
	新增列印表單框架的函數
	-------------------------------------------
*/	
//新增列印表單框架的函數
function printScreen(){
	var value = document.form1.innerHTML;
	var printPage = window.open("","printPage","");
	printPage.document.open();
	printPage.document.write("<HTML><head></head><BODY onload=\'window.print();window.close()\'>");
	printPage.document.write("<PRE>");
	printPage.document.write(value);
	printPage.document.write("</PRE>");
	printPage.document.close("</BODY></HTML>");
}
'; ?>

//-->
</script>
<body>
<?php if ($this->_tpl_vars['container'] != 0): ?>
<!-- 頁面置中及寬度設定 -->
<div id="container" style="width:<?php echo $this->_tpl_vars['container']; ?>
;">

<!-- 頁頭位置設定 -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/header.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!-- 上方MENU位置設定 -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/toplink_menu.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<iframe src="javascript:void(0);" name="outputTarget" height="0" width="0" style="display:none;" id="outputTarget"></iframe>

<table width="100%" height="<?php echo $this->_tpl_vars['PageHeightDefault']; ?>
" border="0" cellspacing="0" cellpadding="0">
	<tr>
	  
		<?php if ($this->_tpl_vars['left'] != 0): ?>  
		<!-- 頁身 左方 區域位置設定 -->
		<td id="left" valign="top" style="width:<?php echo $this->_tpl_vars['left']; ?>
;">
			<table cellpadding="0" cellspacing="0" border="0" width="100%">
				<?php unset($this->_sections['a']);
$this->_sections['a']['name'] = 'a';
$this->_sections['a']['loop'] = is_array($_loop=$this->_tpl_vars['page_left']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['a']['show'] = true;
$this->_sections['a']['max'] = $this->_sections['a']['loop'];
$this->_sections['a']['step'] = 1;
$this->_sections['a']['start'] = $this->_sections['a']['step'] > 0 ? 0 : $this->_sections['a']['loop']-1;
if ($this->_sections['a']['show']) {
    $this->_sections['a']['total'] = $this->_sections['a']['loop'];
    if ($this->_sections['a']['total'] == 0)
        $this->_sections['a']['show'] = false;
} else
    $this->_sections['a']['total'] = 0;
if ($this->_sections['a']['show']):

            for ($this->_sections['a']['index'] = $this->_sections['a']['start'], $this->_sections['a']['iteration'] = 1;
                 $this->_sections['a']['iteration'] <= $this->_sections['a']['total'];
                 $this->_sections['a']['index'] += $this->_sections['a']['step'], $this->_sections['a']['iteration']++):
$this->_sections['a']['rownum'] = $this->_sections['a']['iteration'];
$this->_sections['a']['index_prev'] = $this->_sections['a']['index'] - $this->_sections['a']['step'];
$this->_sections['a']['index_next'] = $this->_sections['a']['index'] + $this->_sections['a']['step'];
$this->_sections['a']['first']      = ($this->_sections['a']['iteration'] == 1);
$this->_sections['a']['last']       = ($this->_sections['a']['iteration'] == $this->_sections['a']['total']);
?>
					<tr><td style="width:100%;"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['page_left'][$this->_sections['a']['index']]['md_tpl'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td></tr>
				<?php endfor; endif; ?>
			</table>
		</td>
		<?php endif; ?>

		<!-- 頁身 中間 主要區域位置設定 --> 
		<td id="main" valign="top" style="width:<?php echo $this->_tpl_vars['center']; ?>
;">
			<!-- 表單回覆 START -->
			<!--
				2010-06-21 edit by 廷俊
				---------------------------------------------------------
				先顯示表單內容，再按確定送出，最後才顯示回應訊息
				---------------------------------------------------------
				2010-06-24 edit by 廷俊
				---------------------------------------------------------
				表單資料要用hidden和POST傳值
				---------------------------------------------------------
				2011-04-20 edit by 廷俊
				---------------------------------------------------------
				1.若啟用付款設定，則顯示選擇付款方式的區塊
				2.驗證付款方式(防空白)
				---------------------------------------------------------
			--> 
			<form name="form1" method="post" action="<?php echo $this->_tpl_vars['form_action']; ?>
" onsubmit="return chkrepost();">
			<table width="100%" border="0" class="form_bg" align="center" cellspacing="0" cellpadding="5">
				<tr>
					<td height="100%" align="left" valign="top" class="form_title">
						<img src="themes/<?php echo $this->_tpl_vars['themes_na']; ?>
/images/form_title.gif" width="45" height="45" border="0" align="absmiddle" />&nbsp;<?php echo $this->_tpl_vars['form_name']; ?>

					</td>
				</tr>
				<tr>
					<td height="100%" align="center" valign="middle" class="form_content">  
					<!-- 表單驗證錯誤訊息 -->
					<?php if ($this->_tpl_vars['error_str'] != ''): ?>
						<br>
						<!-- 錯誤訊息 -->
						<?php echo $this->_tpl_vars['error_str']; ?>

						<br>
						<!-- 按鈕 -->
						<INPUT TYPE="button" VALUE="<?php echo $this->_tpl_vars['btn_ok']; ?>
" OnClick="history.go( -1 );">
						<br>
						
			<!--
				2010-08-04 edit by 廷俊
				-------------------------------------------
				前台確認表單內容頁面，因為特殊符號的關係，顯示表單內容 與 用hidden帶表單內容值的SMATRY要分開
				-------------------------------------------
				2011-04-21 edit by 廷俊
				-------------------------------------------
				確認付款表單資料頁面，需用hidden帶值至儲存、回應表單資訊
				-------------------------------------------
			-->			
					<!-- 確認表單內容資訊 -->
					<?php elseif ($this->_tpl_vars['email_body'] != ''): ?>
						<br>
						<!-- 選擇付款表單 -->
						<?php echo $this->_tpl_vars['payment_set']; ?>

						<br>
						<!-- 表單基本資訊 -->
						<?php echo $this->_tpl_vars['form_body']; ?>

						<!-- 儲存欄位與資料 -->
						<INPUT TYPE="hidden" NAME="str1" VALUE="<?php echo $this->_tpl_vars['str1']; ?>
">
						<INPUT TYPE="hidden" NAME="str2" VALUE="<?php echo $this->_tpl_vars['str2']; ?>
">
						<!-- 前台收件者 -->
						<INPUT TYPE="hidden" NAME="form_mail" VALUE="<?php echo $this->_tpl_vars['form_mail']; ?>
"> 			
						<!-- MAIL內容 -->
						<INPUT TYPE="hidden" NAME="email_body" VALUE="<?php echo $this->_tpl_vars['email_body']; ?>
">
						<!-- 付款表單資料 -->
						<INPUT TYPE="hidden" NAME="frmpay_id" VALUE="<?php echo $this->_tpl_vars['frmpay_id']; ?>
">
						<INPUT TYPE="hidden" NAME="frmpay_price" VALUE="<?php echo $this->_tpl_vars['frmpay_price']; ?>
">
						<br>
						<!-- 按鈕 -->
						<INPUT TYPE="submit" VALUE="<?php echo $this->_tpl_vars['btn_saveout']; ?>
">
						<INPUT TYPE="button" VALUE="<?php echo $this->_tpl_vars['btn_cancle']; ?>
" OnClick="history.go( -1 );">
						<br>
			<!--
				2011-04-21 edit by 廷俊
				-------------------------------------------
				若表單啟用付款設定，回應表單資訊頁面則需增加顯示表單基本資訊、付款資訊、付款表單動作
				-------------------------------------------
			-->		
					<!-- 回應表單資訊 -->
					<?php else: ?>
						<br>
						<!-- 表單回應訊息 -->
						<?php echo $this->_tpl_vars['form_reply']; ?>

						<!-- 表單基本資訊 -->
						<?php echo $this->_tpl_vars['form_body']; ?>

						<!-- 表單付款資訊 -->
						<?php echo $this->_tpl_vars['form_payment']; ?>

						<!-- 付款表單動作 -->
						<?php echo $this->_tpl_vars['payment_action']; ?>

						<br>
					<?php endif; ?>
					</td>
				</tr>
			</table>
			</form>
			<!-- 表單回覆 END -->

			<!--
				2011-04-22 edit by 廷俊
				-------------------------------------------
				1.若付款表單的付款方式選擇玉山-信用卡，則需API拋轉至收單系統
				2.使用HTML POST傳值，FORM不可重疊
				-------------------------------------------
			-->	
			<!-- 傳送API至收單系統 -->
			<?php echo $this->_tpl_vars['instant_style']; ?>

			
			<table cellpadding="0" cellspacing="0" border="0" width="100%">
				<?php unset($this->_sections['b']);
$this->_sections['b']['name'] = 'b';
$this->_sections['b']['loop'] = is_array($_loop=$this->_tpl_vars['page_center']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['b']['show'] = true;
$this->_sections['b']['max'] = $this->_sections['b']['loop'];
$this->_sections['b']['step'] = 1;
$this->_sections['b']['start'] = $this->_sections['b']['step'] > 0 ? 0 : $this->_sections['b']['loop']-1;
if ($this->_sections['b']['show']) {
    $this->_sections['b']['total'] = $this->_sections['b']['loop'];
    if ($this->_sections['b']['total'] == 0)
        $this->_sections['b']['show'] = false;
} else
    $this->_sections['b']['total'] = 0;
if ($this->_sections['b']['show']):

            for ($this->_sections['b']['index'] = $this->_sections['b']['start'], $this->_sections['b']['iteration'] = 1;
                 $this->_sections['b']['iteration'] <= $this->_sections['b']['total'];
                 $this->_sections['b']['index'] += $this->_sections['b']['step'], $this->_sections['b']['iteration']++):
$this->_sections['b']['rownum'] = $this->_sections['b']['iteration'];
$this->_sections['b']['index_prev'] = $this->_sections['b']['index'] - $this->_sections['b']['step'];
$this->_sections['b']['index_next'] = $this->_sections['b']['index'] + $this->_sections['b']['step'];
$this->_sections['b']['first']      = ($this->_sections['b']['iteration'] == 1);
$this->_sections['b']['last']       = ($this->_sections['b']['iteration'] == $this->_sections['b']['total']);
?>
					<tr><td style="width:100%;"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['page_center'][$this->_sections['b']['index']]['md_tpl'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td></tr>
				<?php endfor; endif; ?>
			</table>
		</td>

		<?php if ($this->_tpl_vars['right'] != 0): ?>
		<!-- 頁身 右方 區域位置設定 -->
		<td valign="top" id="right" style="width:<?php echo $this->_tpl_vars['right']; ?>
;">
			<table cellpadding="0" cellspacing="0" border="0" width="100%">
				<?php unset($this->_sections['c']);
$this->_sections['c']['name'] = 'c';
$this->_sections['c']['loop'] = is_array($_loop=$this->_tpl_vars['page_right']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['c']['show'] = true;
$this->_sections['c']['max'] = $this->_sections['c']['loop'];
$this->_sections['c']['step'] = 1;
$this->_sections['c']['start'] = $this->_sections['c']['step'] > 0 ? 0 : $this->_sections['c']['loop']-1;
if ($this->_sections['c']['show']) {
    $this->_sections['c']['total'] = $this->_sections['c']['loop'];
    if ($this->_sections['c']['total'] == 0)
        $this->_sections['c']['show'] = false;
} else
    $this->_sections['c']['total'] = 0;
if ($this->_sections['c']['show']):

            for ($this->_sections['c']['index'] = $this->_sections['c']['start'], $this->_sections['c']['iteration'] = 1;
                 $this->_sections['c']['iteration'] <= $this->_sections['c']['total'];
                 $this->_sections['c']['index'] += $this->_sections['c']['step'], $this->_sections['c']['iteration']++):
$this->_sections['c']['rownum'] = $this->_sections['c']['iteration'];
$this->_sections['c']['index_prev'] = $this->_sections['c']['index'] - $this->_sections['c']['step'];
$this->_sections['c']['index_next'] = $this->_sections['c']['index'] + $this->_sections['c']['step'];
$this->_sections['c']['first']      = ($this->_sections['c']['iteration'] == 1);
$this->_sections['c']['last']       = ($this->_sections['c']['iteration'] == $this->_sections['c']['total']);
?>
					<tr><td style="width:100%;"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['page_right'][$this->_sections['c']['index']]['md_tpl'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td></tr>
				<?php endfor; endif; ?>
			</table>
		</td>
		<?php endif; ?>

	</tr>
</table>
<!-- 頁尾位置設定 -->
<div id="footer"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/footer.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>

</div>
<?php endif; ?>

<!-- 判斷螢幕解析度大小 -->
<?php echo $this->_tpl_vars['container_js']; ?>


</body>
</html>