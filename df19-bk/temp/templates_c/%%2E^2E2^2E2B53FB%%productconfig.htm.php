<?php /* Smarty version 2.6.26, created on 2013-07-16 14:56:12
         compiled from productconfig.htm */ ?>
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
	│	程式用途	│	productconfig.htm		後台商品設定 的 htm顯示頁面
	│	開發者		│	廷俊
	│	版本		│	v1.0.0.0081001
	├=======================================================================================┤
	│	1.	v1.0.1.0071901	2010/07/19	廷俊	商品明細列表排序方式，新增按照管理者自訂排序的功能
	│	2.	v1.0.1.0081001	2010/08/10	廷俊	a.擷取出網站設定中的所有商品設定，設置成獨立的商品設定
	│											b.修改成功訊息
	│	3.	v1.0.1.0081101	2010/08/11	廷俊	商品設定的明細顯示設定，COPY資訊設定的明細顯示設定
	│	4.	v1.0.1.0081201	2010/08/12	廷俊	a.會員折扣等級設定的動態表單
	│											b.新增頁籤：參數設定→商品設定→折扣設定、庫存設定、訂單設定、需求單設定
	│											c.訂單設定頁籤、需求單設定頁籤：初始畫面、增加欄位時、取消欄位時，觸發的動態表單
	│	5.	v1.0.1.0081601	2010/08/16	廷俊	取消2010-08-12的訂單設定、需求單設定，更正為編輯付款設定、出貨設定
	│	6.	v1.0.1.0081801	2010/08/18	廷俊	將付款設定、出貨設定從頁籤拉出，獨立在選單
	│	7.	v1.0.1.0090301	2010/09/03	廷俊	新增頁籤、功能：售價警示設定
	│	8.	v1.0.1.0090501	2010/09/05	廷俊	驗證售價警示輸入的比率值
	│	9.	v1.0.1.0091501	2010/09/15	廷俊	移除商品明細顯示設定
	│	10.	v2.0.4.0120701	2010/12/07	廷俊	a.新增需求單頁籤
	│											b.新增需求單是否需要登入會員的功能設定
	│	11.	v2.0.5.0122401	2010/12/24	廷俊	a.需求單新增email通知功能
	│											b.需求單email通知分為網站管理員、需求者、其他收件者
	│											c.其他收件者新增欄位，可填入多個email
	│											d.多個email請使用英數半形的逗號『,』隔開
	│											e.動態span顯示"其他收件者"
	│											f.驗證其他收件者的欄位值，多MAIL格式是否正確
	│	12.	v2.0.6.0122701	2010/12/27	廷俊	a.訂單新增email通知功能
	│											b.新增訂單頁籤
	│											c.訂單email通知分為網站管理員、訂貨人、其他收件者
	│											d.訂單email通知的其他收件者新增欄位，可填入多個email
	│											e.多個email請使用英數半形的逗號『,』隔開
	│											f.訂單email通知，驗證其他收件者的欄位值，多MAIL格式是否正確
	│											g.訂單email通知，動態span顯示"其他收件者"
	│	13.	v2.0.8.1012801	2011/01/28	廷俊	a.新增幣別設定的頁籤
	│											b.新增使用幣別的功能
	│											c.顯示使用幣別的設定值
	│											d.使用幣別的欄位列出所有語言的幣別
	│											e.disabled序號無效的幣別
	│	14.	v2.0.8.1020801	2011/02/08	廷俊	1.新增幣值最小單位的功能設定
	│											2.訊息備註幣值計算四捨五入至小數點後幾位數
	│											3.新增幣值最小單位的動態表單
	│											4.初始畫面及選擇幣值最小單位時，觸發幣值最小單位的動態表單
	│	15.	v03.00.10.1062001	2011-06-29	玉玲	1.新增css樣式項目說明text_note。
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
var CurrencyUnits_text="<?php echo $this->_tpl_vars['CurrencyUnits_text']; ?>
";
var cheDelete="<?php echo $this->_tpl_vars['cheDelete']; ?>
";
var discount_set="<?php echo $this->_tpl_vars['discount_set']; ?>
";
var DiscountSet_user_text="<?php echo $this->_tpl_vars['DiscountSet_user_text']; ?>
";
var DiscountSet_sys_text="<?php echo $this->_tpl_vars['DiscountSet_sys_text']; ?>
";
var DiscountSet_off_text="<?php echo $this->_tpl_vars['DiscountSet_off_text']; ?>
";
var price_alerts="<?php echo $this->_tpl_vars['price_alerts']; ?>
";
var rate="<?php echo $this->_tpl_vars['rate']; ?>
";
var PriceAlerts_text="<?php echo $this->_tpl_vars['PriceAlerts_text']; ?>
";
var demand_notify_mail="<?php echo $this->_tpl_vars['demand_notify_mail']; ?>
";
var order_notify_mail="<?php echo $this->_tpl_vars['order_notify_mail']; ?>
";
var warming_Rank="<?php echo $this->_tpl_vars['warming_Rank']; ?>
";
var Demand_notify_email_err="<?php echo $this->_tpl_vars['Demand_notify_email_err']; ?>
";
var Order_notify_email_err="<?php echo $this->_tpl_vars['Order_notify_email_err']; ?>
";
//var warming_fieldname="<?php echo $this->_tpl_vars['warming_fieldname']; ?>
";

<?php echo '
	//移除圖片
	function del_images(fileid,image_name){		
		if(confirm(cheDelete)){
			document.getElementById(\'mv_image\'+fileid).value=image_name;
			document.getElementById(\'image1_\'+fileid).style.display=\'none\';
			return true;
		}else{
			return false;
		}
	}
/*
	2010-08-12 edit by 廷俊
	------------------------------------------------------
	a.會員折扣等級設定的動態表單
	b.訂單設定、需求單設定：初始畫面觸發的動態表單
	------------------------------------------------------		
	2010-08-16 edit by 廷俊
	------------------------------------------------------
	取消2010-08-12的訂單設定、需求單設定，更正為編輯付款設定、出貨設定
	------------------------------------------------------
	2010-09-03 edit by 廷俊
	------------------------------------------------------
	新增頁籤、功能：售價警示設定
	------------------------------------------------------	
	2010-12-24 edit by 廷俊
	------------------------------------------------------
	動態span顯示"其他收件者"
	------------------------------------------------------	
	2011-02-08 edit by 廷俊
	------------------------------------------------------
	1.新增幣值最小單位的功能設定
	2.訊息備註幣值計算四捨五入至小數點後幾位數
	3.新增幣值最小單位的動態表單
	4.初始畫面及選擇幣值最小單位時，觸發幣值最小單位的動態表單
	------------------------------------------------------
*/	
	//動態表單
	function dynamic(){
		//幣值最小單位的動態表單
		currency_units=document.getElementsByName("s12")[0].value;
		document.getElementById("currency_text").innerHTML=CurrencyUnits_text.replace("%Several%",currency_units);
		//折扣設定的動態表單
		if(document.getElementsByName(discount_set)[0].checked){
			document.getElementById("DiscountRankText").innerHTML=DiscountSet_user_text;
		}else if(document.getElementsByName(discount_set)[1].checked){
			document.getElementById("DiscountRankText").innerHTML=DiscountSet_sys_text;
		}else{
			document.getElementById("DiscountRankText").innerHTML=DiscountSet_off_text;
		}
		//售價警示設定的動態表單
		if(document.getElementsByName(price_alerts)[0].checked){
			document.getElementById("rate_tr").style.display=\'\';
			rate_value=document.getElementById(rate).value;
			document.getElementById("rate_text").innerHTML=PriceAlerts_text.replace("%Rate%",rate_value);
		}else{
			document.getElementById("rate_tr").style.display=\'none\';
		}
		//需求單email通知，動態span顯示"其他收件者"
		if(document.getElementById(\'demand_notify_other\').checked){
			document.getElementById(\'demand_notify_email_span\').style.display=\'\';
		}else{
			document.getElementById(\'demand_notify_email_span\').style.display=\'none\';
		}
		//訂單email通知，動態span顯示"其他收件者"
		if(document.getElementById(\'order_notify_other\').checked){
			document.getElementById(\'order_notify_email_span\').style.display=\'\';
		}else{
			document.getElementById(\'order_notify_email_span\').style.display=\'none\';
		}
		//動態顯示訂單快速結帳備註。		
		if(document.getElementById(\'orderloginno\').checked){
			document.getElementById(\'order_express_checkout_line\').style.display=\'\';
		}else{
			document.getElementById(\'order_express_checkout_line\').style.display=\'none\';
		}
		
	}
/*
	2010-09-05 edit by 廷俊
	------------------------------------------------------
	驗證售價警示輸入的比率值
	------------------------------------------------------	
	2010-12-24 edit by 廷俊
	------------------------------------------------------
	驗證其他收件者的欄位值，多MAIL格式是否正確
	------------------------------------------------------	
*/
	//存檔防呆
	function chkpost(){
		msg="";
		var ck_int=/^\\d+(\\.\\d+)?$/;
		var ck_mail = /^[^@^\\s]+@[^\\.@^\\s]+(\\.[^\\.@^\\s]+)+$/;
		var demand_mail_value=document.getElementById(demand_notify_mail).value;
		var order_mail_value=document.getElementById(order_notify_mail).value;
		rate_value=document.getElementById(rate).value;
		//驗證比率值
		if(rate_value!=""){
			if(!ck_int.test(rate_value) || rate_value<0 || rate_value>100){
				msg += warming_Rank + "\\r\\n";
			}
		}
		//驗證需求單email通知的其他收件者的欄位值，多MAIL格式是否正確
		if(demand_mail_value !=""){
			emails=demand_mail_value.split(","); 
			for(i=0;i<=emails.length-1;i++){
				if(!ck_mail.test(emails[i])){
					msg += Demand_notify_email_err + "\\r\\n";
				}
			}
		}
		//驗證訂單email通知的其他收件者的欄位值，多MAIL格式是否正確
		if(order_mail_value !=""){
			emails=order_mail_value.split(","); 
			for(i=0;i<=emails.length-1;i++){
				if(!ck_mail.test(emails[i])){
					msg += Order_notify_email_err + "\\r\\n";
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
	
-->
</script>
'; ?>

<body onload="dynamic();">
<div id="use_title">
  <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>      
      <td width="72%" align="left"><?php echo $this->_tpl_vars['PageTitle']; ?>
</td>
      <td width="12%" align="left">&nbsp;</td>
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

<form name="frm" id="frm" method="post" action="<?php echo $this->_tpl_vars['frm_save']; ?>
" enctype="multipart/form-data" onsubmit="return chkpost();">
<div id="show_table2">
<!-- 頁籤起 -->
<!--
	2010-08-12 edit by 廷俊
	------------------------------------------------------
	新增頁籤：參數設定→商品設定→折扣設定
	------------------------------------------------------		
-->
<div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0"><?php echo $this->_tpl_vars['umTITLE1']; ?>
</li>
    <li class="TabbedPanelsTab" tabindex="0"><?php echo $this->_tpl_vars['umTITLE2']; ?>
</li>
    <li class="TabbedPanelsTab" tabindex="0"><?php echo $this->_tpl_vars['umTITLE3']; ?>
</li>
    <li class="TabbedPanelsTab" tabindex="0"><?php echo $this->_tpl_vars['umTITLE4']; ?>
</li>
    <li class="TabbedPanelsTab" tabindex="0"><?php echo $this->_tpl_vars['umTITLE5']; ?>
</li>
    <li class="TabbedPanelsTab" tabindex="0"><?php echo $this->_tpl_vars['umTITLE6']; ?>
</li>
  </ul>
  <div class="TabbedPanelsContentGroup">
<!-- 
	2011-02-08 edit by 廷俊
	------------------------------------------------------
	1.新增幣值最小單位的功能設定
	2.訊息備註幣值計算四捨五入至小數點後幾位數
	3.初始畫面及選擇最小幣值單位時，觸發幣值最小單位的動態表單
	------------------------------------------------------
-->
	<!-- 幣別設定 -->
	<div class="TabbedPanelsContent">
		<table border="0" cellpadding="2" cellspacing="2" width="85%" align="center">
			<tr>	
				<td colspan="2" align="center">&nbsp;</td>
			</tr>		
			<tr>
				<th align="right" width="100px"><?php echo $this->_tpl_vars['Currency']; ?>
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
					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['currency']; ?>
" value="<?php echo $this->_tpl_vars['languages'][$this->_sections['i']['index']]['lang_id']; ?>
" <?php if ($this->_tpl_vars['languages'][$this->_sections['i']['index']]['lang_id'] == $this->_tpl_vars['currency_value']): ?>checked<?php endif; ?>>
					<?php echo $this->_tpl_vars['languages'][$this->_sections['i']['index']]['currency']; ?>

					<?php else: ?>
					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['currency']; ?>
" value="<?php echo $this->_tpl_vars['languages'][$this->_sections['i']['index']]['lang_id']; ?>
" disabled>
					<span style="color:gray;"><?php echo $this->_tpl_vars['languages'][$this->_sections['i']['index']]['currency']; ?>
</span>
					<?php endif; ?>
				<?php endfor; endif; ?>
				</td>
			</tr>
			<tr>
				<th align="right" width="100px"><?php echo $this->_tpl_vars['CurrencyUnits']; ?>
</th>
				<td align="left">
					<?php echo $this->_tpl_vars['currency_units']; ?>

					<span class="text_note" id="currency_text"></span>
				</td>
			</tr>
			<tr>	
				<td colspan="2" align="center">&nbsp;</td>
			</tr>
			<tr>	
				<td colspan="2" align="center">
					<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
">
					<INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
" onclick="window.location.reload();">
				</td>
			</tr>
			<tr>	
				<td colspan="2" align="center">&nbsp;</td>
			</tr>
		</table>	
	</div>
<!--
	2010-09-03 edit by 廷俊
	------------------------------------------------------
	新增頁籤、功能：售價警示設定
	------------------------------------------------------		
-->
	<!-- 售價警示設定 -->
	<div class="TabbedPanelsContent">
		<table border="0" cellpadding="2" cellspacing="2" width="85%" align="center">
			<tr>	
				<td colspan="2" align="center">&nbsp;</td>
			</tr>		
			<tr>
				<th align="right" width="100px"><?php echo $this->_tpl_vars['PriceAlerts']; ?>
</th>
				<td align="left">
					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['price_alerts']; ?>
" value="1" onclick="dynamic();" <?php echo $this->_tpl_vars['price_alerts_yes']; ?>
><?php echo $this->_tpl_vars['PriceAlertsY']; ?>

					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['price_alerts']; ?>
" value="0" onclick="dynamic();" <?php echo $this->_tpl_vars['price_alerts_no']; ?>
><?php echo $this->_tpl_vars['PriceAlertsN']; ?>
<br>
				</td>
			</tr>
			<tr id="rate_tr">
				<th align="right" valign="top" width="100px"><?php echo $this->_tpl_vars['Rate']; ?>
</th>
				<td align="left">
					<INPUT TYPE="text" NAME="<?php echo $this->_tpl_vars['rate']; ?>
" id="<?php echo $this->_tpl_vars['rate']; ?>
" value="<?php echo $this->_tpl_vars['rate_value']; ?>
" onkeyup='dynamic();'>%<br>
					<span class="text_note" id="rate_text"></span>					
				</td>
			</tr>
			<tr>	
				<td colspan="2" align="center">&nbsp;</td>
			</tr>
			<tr>	
				<td colspan="2" align="center">
					<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
">
					<INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
" onclick="window.location.reload();">
				</td>
			</tr>
			<tr>	
				<td colspan="2" align="center">&nbsp;</td>
			</tr>
		</table>			
	</div>	
	<!-- 庫存設定 -->	
	<div class="TabbedPanelsContent">
		<table border="0" cellpadding="2" cellspacing="2" width="85%" align="center">			
			<tr>	
				<td colspan="2" align="center">&nbsp;</td>
			</tr>		
			<tr>
				<th align="right" valign="top" width="100px"><?php echo $this->_tpl_vars['NoStock_Display']; ?>
</th>
				<td align="left">
					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['demand_set']; ?>
" value="1" <?php echo $this->_tpl_vars['demand_set_yes']; ?>
><?php echo $this->_tpl_vars['Demand_Single']; ?>

					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['demand_set']; ?>
" value="0" <?php echo $this->_tpl_vars['demand_set_no']; ?>
><?php echo $this->_tpl_vars['NoStock']; ?>
<br>
				</td>
			</tr>
			<tr>
				<th align="right" valign="top" width="100px"><?php echo $this->_tpl_vars['StockSafeSet']; ?>
</th>
				<td align="left">
					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['stock_set']; ?>
" value="1" <?php echo $this->_tpl_vars['stock_set_yes']; ?>
><?php echo $this->_tpl_vars['StockSet_on']; ?>

					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['stock_set']; ?>
" value="0" <?php echo $this->_tpl_vars['stock_set_no']; ?>
><?php echo $this->_tpl_vars['StockSet_off']; ?>
<br>
				</td>
			</tr>
			<tr>	
				<td colspan="2" align="center">&nbsp;</td>
			</tr>		
			<tr>	
				<td colspan="2" align="center">
					<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
">
					<INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
" onclick="window.location.reload();">
				</td>	
			</tr>
			<tr>	
				<td colspan="2" align="center">&nbsp;</td>
			</tr>		
		</table>			
	</div>
	<!-- 折扣設定 -->	
	<div class="TabbedPanelsContent">
		<table border="0" cellpadding="2" cellspacing="2" width="85%" align="center">			
			<tr>	
				<td colspan="2" align="center">&nbsp;</td>
			</tr>		
			<tr>
				<th align="right" valign="top" width="100px"><?php echo $this->_tpl_vars['DiscountSet_usersrank']; ?>
</th>
				<td align="left">
					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['discount_set']; ?>
" value="user" onclick="dynamic();" <?php echo $this->_tpl_vars['userchecked']; ?>
><?php echo $this->_tpl_vars['DiscountSet_user']; ?>

					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['discount_set']; ?>
" value="sys" onclick="dynamic();" <?php echo $this->_tpl_vars['syschecked']; ?>
><?php echo $this->_tpl_vars['DiscountSet_sys']; ?>

					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['discount_set']; ?>
" value="off" onclick="dynamic();" <?php echo $this->_tpl_vars['offchecked']; ?>
><?php echo $this->_tpl_vars['DiscountSet_off']; ?>
<br>
					<span class="text_note" id="DiscountRankText"></span>
				</td>
			</tr>
			<tr>	
				<td colspan="2" align="center">&nbsp;</td>
			</tr>		
			<tr>	
				<td colspan="2" align="center">
					<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
">
					<INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
" onClick="window.location.reload();">
				</td>
			</tr>
			<tr>	
				<td colspan="2" align="center">&nbsp;</td>
			</tr>		
		</table>	
	</div>
	<!-- 訂單設定 -->
	<div class="TabbedPanelsContent">
		<table border="0" cellpadding="2" cellspacing="2" width="85%" align="center">			
			<tr>	
				<td colspan="2" align="center">&nbsp;</td>
			</tr>	
			<tr>
				<th align="right" valign="top" width="160px"><?php echo $this->_tpl_vars['OrderLogin']; ?>
</th>
				<td align="left">
					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['order_login']; ?>
" id="orderloginyes" value="1" <?php echo $this->_tpl_vars['order_login_yes']; ?>
 onClick="dynamic();"><?php echo $this->_tpl_vars['OrderLoginYes']; ?>

					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['order_login']; ?>
" id="orderloginno" value="0" <?php echo $this->_tpl_vars['order_login_no']; ?>
 onClick="dynamic();"><?php echo $this->_tpl_vars['OrderLoginNo']; ?>
<br>
				</td>
			</tr>	
			<tr id="order_express_checkout_line">
				<th align="right" valign="top" width="160px"><?php echo $this->_tpl_vars['OrderExpressCheckOut']; ?>
</th>
				<td align="left">
					<input type="text" id="<?php echo $this->_tpl_vars['order_express_checkout']; ?>
" name="<?php echo $this->_tpl_vars['order_express_checkout']; ?>
" value="<?php echo $this->_tpl_vars['order_express_checkout_value']; ?>
" style="width:90%">					
				</td>
			</tr>
			<tr>
				<th align="right" valign="top" width="160px"><?php echo $this->_tpl_vars['Order_email_subject']; ?>
</th>
				<td align="left">
					<input type="text" id="<?php echo $this->_tpl_vars['order_email_subject']; ?>
" name="<?php echo $this->_tpl_vars['order_email_subject']; ?>
" value="<?php echo $this->_tpl_vars['order_email_subject_value']; ?>
" style="width:90%">					
				</td>
			</tr>						
			<tr>
				<th align="right" valign="top" width="160px"><?php echo $this->_tpl_vars['Order_notify']; ?>
</th>
				<td align="left">
					<input type="checkbox" name="<?php echo $this->_tpl_vars['order_notify']; ?>
" value="sys" <?php echo $this->_tpl_vars['order_notify_sys_checked']; ?>
><?php echo $this->_tpl_vars['Order_notify_sys']; ?>

					<input type="checkbox" name="<?php echo $this->_tpl_vars['order_notify']; ?>
" value="usr" <?php echo $this->_tpl_vars['order_notify_usr_checked']; ?>
><?php echo $this->_tpl_vars['Order_notify_usr']; ?>

					<input type="checkbox" name="<?php echo $this->_tpl_vars['order_notify']; ?>
" value="other" <?php echo $this->_tpl_vars['order_notify_other_checked']; ?>
 id="order_notify_other" onClick="dynamic();"><?php echo $this->_tpl_vars['Order_notify_other']; ?>

				</td>
			</tr>	
			<span id="order_notify_email_span" style="<?php echo $this->_tpl_vars['notify_email_display']; ?>
">
			<tr>
				<th align="right" valign="top" width="160px"><?php echo $this->_tpl_vars['Order_notify_other']; ?>
</th>
				<td align="left">
					<input type="text" id="<?php echo $this->_tpl_vars['order_notify_mail']; ?>
" name="<?php echo $this->_tpl_vars['order_notify_mail']; ?>
" value="<?php echo $this->_tpl_vars['order_notify_mail_value']; ?>
" style="width:90%">
					<br><?php echo $this->_tpl_vars['notify_email_text']; ?>

				</td>
			</tr>
			</span>				
			<tr>	
				<td colspan="2" align="center">&nbsp;</td>
			</tr>		
			<tr>	
				<td colspan="2" align="center">
					<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
">
					<INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
" onclick="window.location.reload();">
				</td>
			</tr>
			<tr>	
				<td colspan="2" align="center">&nbsp;</td>
			</tr>		
		</table>	
	</div>
<!-- 	
	2010-12-07 edit by 廷俊
	------------------------------------------------------
	1.新增需求單頁籤
	2.新增需求單是否需要登入會員的功能設定
	------------------------------------------------------	
	2010-12-24 edit by 廷俊
	------------------------------------------------------
	需求單新增email通知功能
	需求單email通知分為網站管理員、前台使用者、其他收件者
	其他收件者新增欄位，可填入多個email
	多個email請使用英數半形的逗號『,』隔開
	------------------------------------------------------
	2011-12-19 edit by 健嘉
	------------------------------------------------------
	新增 需求單模式為單一或多個
	------------------------------------------------------
 -->
	<!-- 需求單設定 -->
	<div class="TabbedPanelsContent">
		<table border="0" cellpadding="2" cellspacing="2" width="85%" align="center">			
			<tr>	
				<td colspan="2" align="center">&nbsp;</td>
			</tr>		
			<tr>
				<th align="right" valign="top" width="160px"><?php echo $this->_tpl_vars['DemandLogin']; ?>
</th>
				<td align="left">
					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['demand_login']; ?>
" value="1" <?php echo $this->_tpl_vars['demand_login_yes']; ?>
><?php echo $this->_tpl_vars['DemandLoginYes']; ?>

					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['demand_login']; ?>
" value="0" <?php echo $this->_tpl_vars['demand_login_no']; ?>
><?php echo $this->_tpl_vars['DemandLoginNo']; ?>
<br>
				</td>
			</tr>	
			<tr>
				<th align="right" valign="top" width="160px"><?php echo $this->_tpl_vars['DemandMode']; ?>
</th>
				<td align="left">
					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['demand_mode']; ?>
" value="1" <?php echo $this->_tpl_vars['demand_mode_yes']; ?>
><?php echo $this->_tpl_vars['DemandModeSingle']; ?>

					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['demand_mode']; ?>
" value="0" <?php echo $this->_tpl_vars['demand_mode_no']; ?>
><?php echo $this->_tpl_vars['DemandModeMany']; ?>
<br>
				</td>
			</tr>		
			<tr>
				<th align="right" valign="top" width="160px"><?php echo $this->_tpl_vars['Demand_email_subject']; ?>
</th>
				<td align="left">
					<input type="text" id="<?php echo $this->_tpl_vars['demand_email_subject']; ?>
" name="<?php echo $this->_tpl_vars['demand_email_subject']; ?>
" value="<?php echo $this->_tpl_vars['demand_email_subject_value']; ?>
" style="width:90%">					
				</td>
			</tr>				
			<tr>
				<th align="right" valign="top" width="160px"><?php echo $this->_tpl_vars['Demand_notify']; ?>
</th>
				<td align="left">
					<input type="checkbox" name="<?php echo $this->_tpl_vars['demand_notify']; ?>
" value="sys" <?php echo $this->_tpl_vars['demand_notify_sys_checked']; ?>
><?php echo $this->_tpl_vars['Demand_notify_sys']; ?>

					<input type="checkbox" name="<?php echo $this->_tpl_vars['demand_notify']; ?>
" value="usr" <?php echo $this->_tpl_vars['demand_notify_usr_checked']; ?>
><?php echo $this->_tpl_vars['Demand_notify_usr']; ?>

					<input type="checkbox" name="<?php echo $this->_tpl_vars['demand_notify']; ?>
" value="other" <?php echo $this->_tpl_vars['demand_notify_other_checked']; ?>
 id="demand_notify_other" onclick="dynamic()"><?php echo $this->_tpl_vars['Demand_notify_other']; ?>

				</td>
			</tr>	
			<span id="demand_notify_email_span" style="<?php echo $this->_tpl_vars['notify_email_display']; ?>
">
			<tr>
				<th align="right" valign="top" width="160px"><?php echo $this->_tpl_vars['Demand_notify_other']; ?>
</th>
				<td align="left">
					<input type="text" id="<?php echo $this->_tpl_vars['demand_notify_mail']; ?>
" name="<?php echo $this->_tpl_vars['demand_notify_mail']; ?>
" value="<?php echo $this->_tpl_vars['demand_notify_mail_value']; ?>
" style="width:90%">
					<br><?php echo $this->_tpl_vars['notify_email_text']; ?>

				</td>
			</tr>
			</span>					
			<tr>	
				<td colspan="2" align="center">&nbsp;</td>
			</tr>		
			<tr>	
				<td colspan="2" align="center">
					<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
">
					<INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
" onclick="window.location.reload();">
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