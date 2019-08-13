<?php /* Smarty version 2.6.26, created on 2015-04-07 20:50:14
         compiled from fareconfig.htm */ ?>
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
	│	程式用途	│	fareconfig.htm		運費設定 的 HTM頁面
	│	開發者		│	廷俊
	│	版本		│	v1.0.1.0081901
	├=======================================================================================┤
	│	1.	v1.0.1.0081901	2010/08/19	廷俊	新增 參數設定→運費設定、手續費設定
	│	2.	v1.0.1.0082401	2010/08/24	廷俊	a.動態新增、移除運費設定的欄位
	│											b.驗證輸入金額皆為大於0的整數
	│											c.驗證消費總額的區間格式
	│											d.若運費無輸入則自動補0
	│	3.	v1.0.1.0082601	2010/08/26	廷俊	a.除了最後一項的上限金額，其餘驗證大於等於0的整數數值
	│											b.驗證價錢區間輸入隔式，後者金額需大於前者
	│											c.若是第一個項目，前者價錢一開始欲設為0
	│											d.新增的項目，前者的價錢為上個項目的後者+1
	│											e.判斷上個項目的後者是否有輸入值
	│											f.移除項目後，更新下個項目前者的價錢為上個項目的後者+1
	│											g.改變價錢項目後者的數值時，觸發下個項目前者的數值+1
	│											h.消費總額區間的前者，大於100000000，則不儲存
	│											i.消費總額區間的後者，大於99999999，則儲存99999999
	│											j.消費總額區間的上限為99999999
	│	4.	v2.0.8.1020901	2011/02/09	廷俊	1.幣值最小單位的設定值
	│											2.統一正整數的正規表示式
	│											3.統一浮點數的正規表示式
	│											4.依幣值最小單位的設定值，決定幣值驗證的正規表示式
	│											5.驗證價錢區間的前者，需符合幣值最小單位的設定值
	│											6.驗證價錢區間的後者，需符合幣值最小單位的設定值
	│											7.運費需符合幣值最小單位的設定值
	│											8.驗證價錢區間輸入的浮點數隔式，後者金額需大於前者
	│											9.新增的項目，前者的價錢為上個項目的後者，使用符點數計算幣值最小單位值+1
	│											10.修正動態新增項目時，需顯示目前所使用的幣別設定
	│											11.移除項目後，更新下個項目前者的價錢為上個項目的後者，使用符點數計算幣值最小單位值+1
	│											12.改變價錢項目後者的數值時，觸發下個項目前者的數值，使用符點數計算幣值最小單位值+1
	│											13.下個項目前者的價錢為這個區間後者的數值，使用符點數計算幣值最小單位值+1
	│	5.	v03.00.10.1062001	2011-06-29	玉玲	1.新增css樣式項目說明text_note。
	└=======================================================================================┘
-->
<script language="javascript">
<!--
var fare_set="<?php echo $this->_tpl_vars['fare_set']; ?>
";
var Fare="<?php echo $this->_tpl_vars['Fare']; ?>
";
var Total="<?php echo $this->_tpl_vars['Total']; ?>
";
var Dollar="<?php echo $this->_tpl_vars['Dollar']; ?>
";
var Chk_Del="<?php echo $this->_tpl_vars['Chk_Del']; ?>
";
var warming_delitem="<?php echo $this->_tpl_vars['warming_delitem']; ?>
";
var warming_int_Interval="<?php echo $this->_tpl_vars['warming_int_Interval']; ?>
";
var warming_int_Fare="<?php echo $this->_tpl_vars['warming_int_Fare']; ?>
";
var warming_interval_Fare="<?php echo $this->_tpl_vars['warming_interval_Fare']; ?>
";
var currency="<?php echo $this->_tpl_vars['currency']; ?>
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


	function Item(){
		document.getElementById("fare_set").innerHTML=fare_set;
	}
/*
	2010-08-26 edit by 廷俊
	----------------------------------------------------
	a.除了最後一項的上限金額，其餘驗證大於等於0的整數數值
	b.驗證價錢區間輸入隔式，後者金額需大於前者
	----------------------------------------------------
*/
//驗證欄位
	function chkpost(){
		msg=\'\';
		fare_sun=document.getElementById("fare_sun").value;
		for(i=1;i<=fare_sun;i++){
			var fare_a=document.getElementById("fare_a" + i).value;
			var fare_b=document.getElementById("fare_b" + i).value;
			var fare_c=document.getElementById("fare_c" + i).value;
			//驗證價錢區間的前者，需符合幣值最小單位的設定值
			if(fare_a != \'\'){
				if(!ck_currency.test(fare_a)){
					msg = warming_int_Interval + "\\r\\n";
				}
			}
			//驗證價錢區間的後者，需符合幣值最小單位的設定值
			if(fare_b != \'\'){
				if(!ck_currency.test(fare_b)){
					msg = warming_int_Interval + "\\r\\n";
				}
			//除了最後一項的上限金額，其餘需符合幣值最小單位的設定值
			}else{
				if(i != fare_sun){		
					msg = warming_int_Interval + "\\r\\n";
				}
			}
			//運費需符合幣值最小單位的設定值
			if(fare_c != \'\'){
				if(!ck_currency.test(fare_c)){
					msg += warming_int_Fare + "\\r\\n";
				}
			}
			//驗證價錢區間輸入的浮點數隔式，後者金額需大於前者
			if(fare_a != \'\' && fare_b != \'\'){	
				if(parseFloat(fare_a) >= parseFloat(fare_b)){
					msg += warming_interval_Fare + "\\r\\n";
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
/*
	2010-08-26 edit by 廷俊
	----------------------------------------------------
	c.若是第一個項目，前者價錢一開始欲設為0
	d.新增的項目，前者的價錢為上個項目的後者+1
	e.判斷上個項目的後者是否有輸入值
	----------------------------------------------------
*/
//觸發動態新增項目
	function ItemAdd(){
		//記錄項目數+1
		var sun = ++ document.getElementById("fare_sun").value;		
		//取得動態表單
		var fare_set = document.getElementById("fare_set").innerHTML;	
		//若是第一個項目，前者價錢一開始欲設為0
		if(sun==1){		
			fare_a = "value=0";
		
		}else{		
			//判斷上個項目的後者是否有輸入值
			fare_b = document.getElementById("fare_b"+ (sun-1)).value
			if(fare_b != ""){	
				//新增的項目，前者的價錢為上個項目的後者，使用符點數計算幣值最小單位值+1
				fare_a = "value=" + (parseFloat(fare_b)*Math.pow(10,currency_units)+1)/Math.pow(10,currency_units);
			}else{
				fare_a = "";
			}
		}
		//用壘加方式新增動態表單
		//修正動態新增項目時，需顯示目前所使用的幣別設定
		fare_set += " <br><span name=fare_s" + sun + " id=fare_s" + sun + "> ";
		fare_set += Total + currency;
		fare_set += " <input type=text name=fare_a" + sun + " id=fare_a" + sun + " size=5 " + fare_a + " readonly style=\'color: gray\'> ";
		fare_set += Dollar;
		fare_set += " ~ ";
		fare_set += " <input type=text name=fare_b" + sun + " id=fare_b" + sun + " size=5  onblur=\'return change(" + sun + ");\'> ";
		fare_set += Dollar;
		fare_set += " , ";
		fare_set += Fare + currency;
		fare_set += " <input type=text name=fare_c" + sun + " id=fare_c" + sun + " size=5 > ";
		fare_set += Dollar;
		fare_set += " , ";
		fare_set += " <span style=color:blue;> ";
		fare_set += " <a onclick=\'return ItemDel(" + sun + ");\'> ";
		fare_set += Chk_Del;
		fare_set += " </a></span></span><br>&nbsp; ";
		document.getElementById("fare_set").innerHTML=fare_set;
	}
/*
	2010-08-26 edit by 廷俊
	----------------------------------------------------
	f.移除項目後，更新下個項目前者的價錢為上個項目的後者+1
	----------------------------------------------------
*/	
//觸發動態刪除項目	
	function ItemDel(val){
		if(confirm(warming_delitem)){
			var fare_set = "";	
			//記錄項目數-1
			var sun = -- document.getElementById("fare_sun").value;		
			//document.getElementById("fare_s"+val).removeNode(1);
			//document.getElementById("fare_s1").id="xxxxxx";
			//document.getElementById("xxxxxx").name="xxxxxx";
			//取得並切割動態表單
			var ar_fare = document.getElementById("fare_set").innerHTML.split("&nbsp;");				
			for(i=0;i<=sun;i++){
				//非移除的項目rename
				if(i+1 != val){		
					if(i+1 > val){
						ar_fare[i]=ar_fare[i].replace("fare_s" + (i+1) , "fare_s" + i);
						ar_fare[i]=ar_fare[i].replace("fare_s" + (i+1) , "fare_s" + i);
						ar_fare[i]=ar_fare[i].replace("fare_a" + (i+1) , "fare_a" + i);
						ar_fare[i]=ar_fare[i].replace("fare_a" + (i+1) , "fare_a" + i);
						ar_fare[i]=ar_fare[i].replace("fare_b" + (i+1) , "fare_b" + i);
						ar_fare[i]=ar_fare[i].replace("fare_b" + (i+1) , "fare_b" + i);
						ar_fare[i]=ar_fare[i].replace("fare_c" + (i+1) , "fare_c" + i);
						ar_fare[i]=ar_fare[i].replace("fare_c" + (i+1) , "fare_c" + i);
						ar_fare[i]=ar_fare[i].replace("change(" + (i+1) , "change(" + i);
						ar_fare[i]=ar_fare[i].replace("ItemDel(" + (i+1) , "ItemDel(" + i);
					}
					fare_set += ar_fare[i]+"&nbsp;";	
				}
			}
			document.getElementById("fare_set").innerHTML=fare_set;
			//移除項目後，更新下個項目前者的價錢為上個項目的後者，使用符點數計算幣值最小單位值+1
			for(i=0;i<=sun;i++){	
				if(i+1 == val){
					change(i);
				}
			}
			return true;
		}else{
			return false;		
		}
	}
/*
	2010-08-26 edit by 廷俊
	----------------------------------------------------
	g.改變價錢項目後者的數值時，觸發下個項目前者的數值+1
	----------------------------------------------------
*/
//觸發動態改變價錢區間	
	//改變價錢項目後者的數值時，觸發下個項目前者的數值，使用符點數計算幣值最小單位值+1
	function change(val){	
		//判斷下個區間是否存在
		if (document.getElementById("fare_a" + (val+1)) != null){	
			//傳入值為0，則第一個項目，前者價錢一開始欲設為0
			if(val == 0){	
				document.getElementById("fare_a1").value=0;
			//下個項目前者的價錢為這個區間後者的數值，使用符點數計算幣值最小單位值+1	
			}else if(document.getElementById("fare_b" + val).value != ""){	
				document.getElementById("fare_a" + (val+1)).value=(document.getElementById("fare_b" + val).value * Math.pow(10,currency_units) +1)/Math.pow(10,currency_units);
			}																
		}
	}
'; ?>

-->
</script>
<body onload="Item();">
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
				<th align="right" width="150">&nbsp;</th>
				<td align="left" colspan="2">
					<input type="hidden" name="fare_sun" id="fare_sun" value="<?php echo $this->_tpl_vars['fare_sun']; ?>
">
				</td>
			</tr>
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['PageTitle']; ?>
</th>
				<td align="left">
					<span class="text_note"><?php echo $this->_tpl_vars['Fare_Text']; ?>
</span>
				</td>
				<td align="left">
					<input type="button" value="<?php echo $this->_tpl_vars['ItemAdd']; ?>
" onclick="ItemAdd();">
				</td>
			</tr>
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['Item']; ?>
</th>
				<td align="left" colspan="2">
					<span id="fare_set"></span>
				</td>
			</tr>
			<tr>
				<th colspan="3" align="center">
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