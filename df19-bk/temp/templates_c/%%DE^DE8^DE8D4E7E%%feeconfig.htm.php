<?php /* Smarty version 2.6.26, created on 2015-09-21 16:23:52
         compiled from feeconfig.htm */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $this->_config[0]['vars']['website_title']; ?>
</title>
<link href="css/style1.css" rel="stylesheet" type="text/css">
</head>
<!--
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	feeconfig.htm		手續費設定 的 HTM頁面
	│	開發者		│	廷俊
	│	版本		│	v1.0.1.0081901
	├=======================================================================================┤
	│	1.	v1.0.1.0081901	2010/08/19	廷俊	新增 參數設定→運費設定、手續費設定
	│	2.	v1.0.1.0082001	2010/08/20	廷俊	a.驗證『固定金額』欄位，必須為大於等於0的整數數值
	│											b.驗證『消費總額比率』欄位，必須為0~100的數值	
	│											c.手續費的說明，使用動態表單
	│	3.	v2.0.8.1020901	2011/02/09	廷俊	1.幣值最小單位的設定值
	│											2.統一正整數的正規表示式
	│											3.統一浮點數的正規表示式
	│											4.依幣值最小單位的設定值，決定幣值驗證的正規表示式
	│											5.驗證手續費的固定金額，需符合幣值最小單位的設定值
	│											6.修正驗證手續費的消費總額比率
	│	4.	v03.00.10.1062001	2011-06-29	玉玲	1.新增css樣式項目說明text_note。
	└=======================================================================================┘
*/-->
<script language="javascript">
<!--
var FeeFix_Text="<?php echo $this->_tpl_vars['FeeFix_Text']; ?>
";
var FeeRatio_Text="<?php echo $this->_tpl_vars['FeeRatio_Text']; ?>
";
var warming_FeeFix="<?php echo $this->_tpl_vars['warming_FeeFix']; ?>
";
var warming_FeeRatio="<?php echo $this->_tpl_vars['warming_FeeRatio']; ?>
";
var currency_units="<?php echo $this->_tpl_vars['currency_units']; ?>
";		//幣值最小單位的設定值

<?php echo '

//統一正整數的正規表示式
var ck_int = /^\\d+$/;
//統一浮點數的正規表示式
var ck_float=/^\\d+(\\.\\d+)?$/;

//依幣值最小單位的設定值，決定幣值驗證的正規表示式
switch(currency_units){
	case "0":
		var ck_currency = ck_int;
		break;
	case "1":
		var ck_currency = /^\\d+(\\.\\d{1,1})?$/;
		break;
	case "2":
		var ck_currency = /^\\d+(\\.\\d{1,2})?$/;
		break;
	case "3":
		var ck_currency = /^\\d+(\\.\\d{1,3})?$/;
		break;
}

//驗證欄位
function chkpost(){
	msg=\'\';
	//驗證手續費的固定金額，需符合幣值最小單位的設定值
	if(document.getElementsByName("fee_set")[0].checked){
		var fee_fix=document.getElementById("fee_fix").value;
		if(fee_fix!=\'\'){
			if(!ck_currency.test(fee_fix)){
				msg += warming_FeeFix + "\\r\\n";
			}
		}
	//驗證手續費的消費總額比率
	}else{
		var fee_ratio=document.getElementById("fee_ratio").value;
		if(fee_ratio!=""){
			if(!ck_float.test(fee_ratio) || fee_ratio<0 || fee_ratio>100){
				msg += warming_FeeRatio + "\\r\\n";
			}
		}
	}
	if(msg==\'\'){
		return true;
	}else{
		alert(msg);
		return false;
	}
}

//觸發動態表單
function dynamic(){
	if(document.getElementsByName("fee_set")[0].checked){
		document.getElementById("Fee_Text").innerHTML=FeeFix_Text;
	}else{
		document.getElementById("Fee_Text").innerHTML=FeeRatio_Text;
	}
}

'; ?>

-->
</script>
<body onload="dynamic();">
<div id="use_title">
  <table width="100%" height="100%" border="0" cellspacing="2" cellpadding="2">
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


<div id="show_table3">
	<form name="savefrm" method="post" action="<?php echo $this->_tpl_vars['savefrm_act']; ?>
" onsubmit="return chkpost();">
		<table border="0" cellpadding="2" cellspacing="2" align="center" width="100%" height="100%">
			<tr>
				<td align="right" width="150">&nbsp;</td>
				<td align="left" >&nbsp;</td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['PageTitle']; ?>
</th>
				<td align="left">
					<INPUT TYPE="radio" NAME="fee_set" value="1" onclick="dynamic();" checked><?php echo $this->_tpl_vars['FeeFix']; ?>

					<INPUT TYPE="radio" NAME="fee_set" value="0" onclick="dynamic();" <?php if ($this->_tpl_vars['fee_set'] == '0'): ?>checked<?php endif; ?>><?php echo $this->_tpl_vars['FeeRatio']; ?>

				</td>
			</tr>
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['Fee']; ?>
</th>
				<td align="left">
					<span class="text_note" id="Fee_Text"></span>
				</td>
			</tr>
			<tr>
				<th colspan="2" align="center">
					<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
">
					<INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
" onclick="window.location.reload();">
				</th>
			</tr>					
		</table>
	 </form>
</div>
<?php echo $this->_tpl_vars['temp_log']; ?>
</body>
</html>