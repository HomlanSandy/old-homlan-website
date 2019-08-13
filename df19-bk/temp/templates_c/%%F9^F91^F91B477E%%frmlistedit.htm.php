<?php /* Smarty version 2.6.26, created on 2012-07-30 09:56:20
         compiled from frmlistedit.htm */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無標題文件</title>
<script src="js/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="css/style1.css" rel="stylesheet" type="text/css">
</head>
<!--
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	frmlistedit.htm		後台表單編輯儲存htm頁面
	│	開發者		│	玉玲
	│	版本		│	v1.0.1.0063001
	├=======================================================================================┤
	│	1.	v1.0.1.0063001	2010/06/30	廷俊	更改說明文字、按鈕顯示文字
	│	2.	v1.0.1.0070101	2010/07/01	廷俊	驗證"表單名稱"、"其他收件者"、"表單欄位名稱"
	│	3.	v1.0.1.0070102	2010/07/01	廷俊	email通知更改為checkbox："前台使用者"、"網站管理員"、"其他收件者"
	│	4.	v1.0.1.0070103	2010/07/01	廷俊	"email通知"、"其他收件者"的顯示預設值
	│	5.	v1.0.1.0070104	2010/07/01	廷俊	動態span顯示"其他收件者"
	│	6.	v1.0.1.0080301	2010/08/03	廷俊	表單欄位行、列的下拉式選單值，要比原先的欄位數多1
	│	7.	v03.00.02.1040801	2011/04/14	廷俊	a.表單新增付款設定頁籤
	│												b.新增付款設定、選擇付款方式功能欄位
	│												c.表單編輯頁面調整版面配置
	│	8.	v03.00.02.1040801	2011/04/18	廷俊	a.新增付款表單的系統預設欄位
	│												b.表單欄位行、列的下拉式選單值，若啟用付款設定，則需要比原先的欄位數多6
	│												c.若啟用付款設定，動態觸發付款表單的系統預設欄位資料
	│	9.	v03.00.02.1040801	2011/04/19	廷俊	點選重設按鈕，修正為重新載入此頁面
	│	10.	v03.00.07.1053001	2011/06/02	廷俊	1.新增郵件設定的功能頁籤
	│												2.將表單email通知修正搬移至郵件設定
	│												3.表單新增，表單回覆信件、付款結果信件的主旨與內容功能欄位
	└=======================================================================================┘
*/-->
<script language="javascript">
/* 
	2011-06-02 edit by 廷俊
	----------------------------------------------------
	表單新增，表單回覆信件、付款結果信件的主旨與內容功能欄位
	----------------------------------------------------
*/
/*配合語系定義名詞*/
var lang_text="<?php echo $this->_tpl_vars['input_type_text']; ?>
";
var lang_textarea="<?php echo $this->_tpl_vars['input_type_textarea']; ?>
";
var lang_option="<?php echo $this->_tpl_vars['input_type_option']; ?>
";
var lang_radio="<?php echo $this->_tpl_vars['input_type_radio']; ?>
";
var lang_checkbox="<?php echo $this->_tpl_vars['input_type_checkbox']; ?>
";
var lang_size="<?php echo $this->_tpl_vars['input_type_size']; ?>
";
var lang_line="<?php echo $this->_tpl_vars['input_type_line']; ?>
";
var lang_chkchar="<?php echo $this->_tpl_vars['input_check_char']; ?>
";
var lang_chkinteger="<?php echo $this->_tpl_vars['input_check_integer']; ?>
";
var lang_chkdate="<?php echo $this->_tpl_vars['input_check_date']; ?>
";
var lang_chkanyint="<?php echo $this->_tpl_vars['input_check_anyint']; ?>
";
var lang_chkemail="<?php echo $this->_tpl_vars['input_check_email']; ?>
";
var lang_allow_yes="<?php echo $this->_tpl_vars['check_null_yes']; ?>
";
var lang_allow_no="<?php echo $this->_tpl_vars['check_null_no']; ?>
";
var lang_value_null="<?php echo $this->_tpl_vars['lang_value_null']; ?>
";
var form_na_err="<?php echo $this->_tpl_vars['form_na_err']; ?>
";
var notify_email_err="<?php echo $this->_tpl_vars['notify_email_err']; ?>
";
var notify_subject_err="<?php echo $this->_tpl_vars['notify_subject_err']; ?>
";
var payment_subject_err="<?php echo $this->_tpl_vars['payment_subject_err']; ?>
";
var TB_frd_na_err="<?php echo $this->_tpl_vars['TB_frd_na_err']; ?>
";
<?php echo '
/*
	2010-07-01 edit by 廷俊
	-------------------------------------------
	1.驗證"表單名稱"是否空白、空值
	2.驗證"其他收件者"欄位，多email格式是否正確
	3.驗證"表單欄位名稱"是否空白、空值
	-------------------------------------------
	2011-06-02 edit by 廷俊
	----------------------------------------------------
	表單新增，表單回覆信件、付款結果信件的主旨與內容功能欄位
	----------------------------------------------------
*/
	function chkrepost(){
		var msg="";
		var form_na=document.getElementById("form_na").value;
		var form_notify_email=document.getElementById("form_notify_email").value;
		var rows_count=document.getElementById("rows_count").value;
		var notify_subject=document.getElementById("notify_subject").value;
		var payment_subject=document.getElementById("payment_subject").value;
		var ck_mail = /^[^@^\\s]+@[^\\.@^\\s]+(\\.[^\\.@^\\s]+)+$/;
		//驗證表單名稱是否空白、空值
		if(form_na.replace(/\\s/g,"")==""){
			msg += form_na_err + "\\r\\n";
		}
		//驗證多MAIL欄位是否正確
		if(form_notify_email !=""){
			emails=form_notify_email.split(","); 
			for(i=0;i<=emails.length-1;i++){
				if(!ck_mail.test(emails[i])){
					msg += notify_email_err + "\\r\\n";
				}
			}
		}
		//驗證表單欄位名稱是否空白、空值
		for(i=0;i<rows_count;i++){
			var TB_frd_na=document.getElementById("TB_frd_na"+i).value;
			if(TB_frd_na.replace(/\\s/g,"")==""){
				msg += TB_frd_na_err + "\\r\\n";
			}
		}
		//驗證郵件主旨不為空值
		if(notify_subject.replace(/\\s/g,"")==""){
			msg += notify_subject_err + "\\r\\n";
		}
		if(payment_subject.replace(/\\s/g,"")==""){
			msg += payment_subject_err + "\\r\\n";
		}

		if(msg==\'\'){
			return true;
		}else{
			alert(msg);
			return false;
		}	
	}

/*
	2010-05-27 edit by 廷俊
	-------------------------------------------
	表單的"格式"欄位名稱，需驗證空白、空值
	-------------------------------------------
*/	
	function add_input_list(p_nbr,p_type){
		var f_val=document.getElementById("TB_item_"+p_nbr).value;
		var f_show=document.getElementById("tb_show_"+p_nbr).innerHTML;
		if (f_val.replace(/\\s/g,"")==""){
			alert(lang_value_null);return false;
		}
		if (f_show!=\'\'){
				f_show+="<br><INPUT TYPE=\\"checkbox\\" checked onclick=\\"del_input_list("+p_nbr+",\'"+f_val+"\');\\">"+f_val;
		} else {
				f_show+="<INPUT TYPE=\\"checkbox\\" checked onclick=\\"del_input_list("+p_nbr+",\'"+f_val+"\');\\">"+f_val;
		}
		document.getElementById("tb_show_"+p_nbr).innerHTML=f_show;
		
		//將值篩入隱藏欄位
		var f_hiiden_val=document.getElementById("TB_frd_val"+p_nbr+"").value;
		if (f_hiiden_val!=""){
				f_hiiden_val+="@*@*@*"+f_val;
		} else {
				f_hiiden_val+=f_val;
		}
		document.getElementById("TB_frd_val"+p_nbr+"").value=f_hiiden_val;	
		document.getElementById("TB_item_"+p_nbr).value=\'\';		
	}

	function del_input_list(p_nbr,p_value){
		var f_val=document.getElementById("TB_frd_val"+p_nbr+"").value;
		var f_show=\'\';
		var ar_val = f_val.split(\'@*@*@*\');				
		var f_hiiden_val = \'\';					
		for(k=0;k<ar_val.length;k++) {
			if (ar_val[k]!=p_value){
				if (f_show!=\'\'){
					f_show+="<br><INPUT TYPE=\\"checkbox\\" checked onclick=\\"del_input_list("+p_nbr+",\'"+ar_val[k]+"\');\\">"+ar_val[k];
				} else {
					f_show+="<INPUT TYPE=\\"checkbox\\" checked onclick=\\"del_input_list("+p_nbr+",\'"+ar_val[k]+"\');\\">"+ar_val[k];
				}	

				if (f_hiiden_val!=""){
					f_hiiden_val+="@*@*@*"+ar_val[k];
				} else {
					f_hiiden_val+=ar_val[k];
				}
			}			
		}
		document.getElementById("tb_show_"+p_nbr).innerHTML=f_show;
		document.getElementById("TB_frd_val"+p_nbr+"").value=f_hiiden_val;
	}

	function chType(p_nbr,p_type) {
		var f_type = p_type;
		//var f_td = eval(\'document.all.Cont\'+p_nbr);
		var f_td=document.getElementById(\'Cont\'+p_nbr+\'4\');
		var f_val =document.getElementById("TB_frd_val"+p_nbr).value;
		var f_size=20;
		var f_rows=3;
/*
	2010-05-05 edit by yuling
	--------------------------------------
	將option radio checkbox的選項統一處理。
	--------------------------------------
*/
		var l_str=\'\';
		if (f_val!=""){							
			var ar_val = f_val.split(\'@*@*@*\');
			var l_str = \'\';
			for(k=0;k<ar_val.length;k++) {
				if (l_str!="")
				{
					l_str+="<br>";
				}
				if (ar_val[k]!=""){
				l_str+="<INPUT TYPE=\\"checkbox\\" checked onclick=\\"del_input_list("+p_nbr+",\'"+ar_val[k]+"\');\\">"+ar_val[k];
				}						
			}			
		}	
		switch(f_type) {
			case \'text\' :				
				f_td.innerHTML="<table width=100% cellspacing=0 cellpadding=2>";
				f_td.innerHTML+="<tr><td colspan=2 align=\'center\'nowrap>"+lang_size+" : ";
				f_td.innerHTML+="<input type=text size=2 maxlength=3 name=\'TB_frd_size"+p_nbr+"\' id=\'TB_frd_size"+p_nbr+"\' value=\'"+f_size+"\'>";
				f_td.innerHTML+="</td></tr></table>";
				break;
			case \'textarea\' :
				f_td.innerHTML="<table width=100% cellspacing=0 cellpadding=2>";
				f_td.innerHTML+="<tr><td align=\'center\' colspan=2 nowrap>"+lang_size+" :";
				f_td.innerHTML+="<input type=text size=2 maxlength=3 name=\'TB_frd_size"+p_nbr+"\' id=\'TB_frd_size"+p_nbr+"\' value=\'"+f_size+"\'>";
				f_td.innerHTML+="&nbsp;<br>"+lang_line+" : <input type=text size=2 maxlength=3 name=\'TB_frd_line"+p_nbr+"\' name=\'TB_frd_line"+p_nbr+"\' value=\'"+f_rows+"\'>";
				f_td.innerHTML+="&nbsp;</td></tr></table>";
				break;
			case \'checkbox\' :						
				f_td.innerHTML="<table width=\'100%\' cellspacing=0 cellpadding=2><tr><td width=12% align=\'center\'><input type=\\"text\\" id=\\"TB_item_"+p_nbr+"\\" size=\\"6\\"><input type=\\"button\\" value=\\"+\\" onclick=\\"add_input_list("+p_nbr+",\'"+f_type+"\');\\"></td><td width=\'88%\' id=\\"tb_show_"+p_nbr+"\\">"+l_str+"</td></tr></table>";
				break;
			case \'radio\' :										
				f_td.innerHTML="<table width=\'100%\' cellspacing=0 cellpadding=2><tr><td width=12% align=\'center\'><input type=\\"text\\" id=\\"TB_item_"+p_nbr+"\\" size=\\"6\\"><input type=\\"button\\" value=\\"+\\" onclick=\\"add_input_list("+p_nbr+",\'"+f_type+"\');\\"></td><td width=\'88%\' id=\\"tb_show_"+p_nbr+"\\">"+l_str+"</td></tr></table>";
				break;
			case \'option\' :					
				f_td.innerHTML="<table width=\'100%\' cellspacing=0 cellpadding=2><tr><td width=12% align=\'center\'><input type=\\"text\\" id=\\"TB_item_"+p_nbr+"\\" size=\\"6\\"><input type=\\"button\\" value=\\"+\\" onclick=\\"add_input_list("+p_nbr+",\'"+f_type+"\');\\"></td><td width=\'88%\' id=\\"tb_show_"+p_nbr+"\\">"+l_str+"</td></tr></table>";					
				break;
		}	
	}

/*
	2010-08-03 edit by 廷俊
	-------------------------------------------
	表單欄位行、列的下拉式選單值，要比原先的欄位數多1
	------------------------------------------- 	
	2011-04-18 edit by 廷俊
	-------------------------------------------
	動態新增表單欄位時，若啟用付款設定，表單欄位行、列的下拉式選單值，則需要比原先的欄位數多6
	-------------------------------------------
*/	
	function insertRow(){
		var inner=new Array();
		var frmtb=document.getElementById("p_table");
		var row_idx=parseInt(frmtb.rows.length);
		//去除新增按紐及欄位標題
		var idx=row_idx-2;
		//動態新增表單欄位時，若啟用付款設定，表單欄位行、列的下拉式選單值，則需要比原先的欄位數多6
 		if(document.getElementById(\'payment_state\').checked){
			row_sum=row_idx+1+6;
		}else{
			row_sum=row_idx+1;
		}
		
		inner[0]="<input type=\\"hidden\\" name=\\"frm_order[]\\" value=\\"\\"><select name=\\"TB_line_row"+idx+"\\" id=\\"TB_line_row"+idx+"\\">";
		for(var i=1;i<row_sum;i++){
			if ((i-1)==idx){
				inner[0]+="<option value="+i+" selected>"+i+"</option>";
			} else {
				inner[0]+="<option value="+i+">"+i+"</option>";
			}			
		}
		inner[0]+="</select>";
		
		inner[1]="<select name=\\"TB_line_col"+idx+"\\" id=\\"TB_line_col"+idx+"\\">";
		for(var j=1;j<row_sum;j++){
			inner[1]+="<option value="+j+">"+j+"</option>";
		}
		inner[1]+="</select>";
		
		inner[2]="<input type=\\"text\\" name=\\"TB_frd_na"+idx+"\\" id=\\"TB_frd_na"+idx+"\\" size=\\"10\\">";
		
		inner[3]="<select name=\\"TB_frd_input"+idx+"\\" id=\\"TB_frd_input"+idx+"\\"  onchange=\\"chType("+idx+",this.options[this.selectedIndex].value)\\">";
		inner[3]+="<option value=\\"text\\">"+lang_text+"</option>";
		inner[3]+="<option value=\\"textarea\\">"+lang_textarea+"</option>";
		inner[3]+="<option value=\\"option\\">"+lang_option+"</option>";
		inner[3]+="<option value=\\"radio\\">"+lang_radio+"</option>";
		inner[3]+="<option value=\\"checkbox\\">"+lang_checkbox+"</option>";
		inner[3]+="</select>";
		
		inner[4]=""+lang_size+":<input type=\\"text\\" name=\\"TB_frd_size"+idx+"\\" id=\\"TB_frd_size"+idx+"\\" size=\\"2\\" manxlength=\\"3\\" value=\\"20\\">";
		
		inner[5]="<select name=\\"TB_frd_type"+idx+"\\" id=\\"TB_frd_type"+idx+"\\">";
		inner[5]+="<option value=\\"char\\">"+lang_chkchar+"</option>";
		inner[5]+="<option value=\\"Integer\\">"+lang_chkinteger+"</option>";
		inner[5]+="<option value=\\"date\\">"+lang_chkdate+"</option>";
		inner[5]+="<option value=\\"AnyInt\\">"+lang_chkanyint+"</option>";
		inner[5]+="<option value=\\"Email\\">"+lang_chkemail+"</option>";
		inner[5]+="</select>";
		
		inner[6]="<select name=\\"TB_frd_null"+idx+"\\" id=\\"TB_frd_null"+idx+"\\">";
		inner[6]+="<option value=\\"1\\">"+lang_allow_yes+"</option>";
		inner[6]+="<option value=\\"0\\">"+lang_allow_no+"</option>";
		inner[6]+="</select>";
		
		inner[7]="<input type=\\"checkbox\\" name=\\"TB_frd_only"+idx+"\\" id=\\"TB_frd_only"+idx+"\\" value=\\"1\\">";

		inner[8]="&nbsp;";
		
		var newRow=frmtb.insertRow(row_idx);
		for(var n=0;n<=8;n++){
			newCell=newRow.insertCell(n);
			newCell.id = "Cont"+(idx)+n;
			newCell.align = "center";
			newCell.className = "table_td_02";
			newCell.innerHTML = inner[n];
		}
		
		var hidden=document.getElementById(\'hide_area\').innerHTML;
		hidden+="<br><br><input type=\\"hidden\\" name=\\"TB_frd_val"+idx+"\\" id=\\"TB_frd_val"+idx+"\\" size=\\"80\\" value=\\"\\">";
		document.getElementById(\'hide_area\').innerHTML=hidden;		
		
		document.getElementById(\'rows_count\').value=(idx+1);
		
	}
/*
	2010-07-01 edit by 廷俊
	-------------------------------------------
	動態span顯示"其他收件者"
	-------------------------------------------
*/
	function notify_email(){
		if(document.getElementById(\'form_notify3\').checked){
			document.getElementById(\'notify_email_span\').style.display=\'\';
		}else{
			document.getElementById(\'notify_email_span\').style.display=\'none\';
		}
	}
/*
	2011-04-18 edit by 廷俊
	-------------------------------------------
	若啟用付款設定，動態觸發付款表單的系統預設欄位資料
	-------------------------------------------
*/
	//若啟用付款設定，動態觸發付款表單的系統預設欄位資料
	function Payment_Config(){
		if(document.getElementById(\'payment_state\').checked){
			document.getElementById(\'frmcols_sys\').style.display=\'\';
		}else{
			document.getElementById(\'frmcols_sys\').style.display=\'none\';
		}
	}
'; ?>

</script>


<body>

<div id="use_title">
  <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>      
      <td width="72%" align="left"><?php echo $this->_tpl_vars['PageTitle2']; ?>
</td>
      <td width="12%" align="right">
        <input name="button" type="submit" class="set_new_btn" id="button" value="<?php echo $this->_tpl_vars['Btn_List']; ?>
" onclick="location.href='<?php echo $this->_tpl_vars['Btn_List_Url']; ?>
';">
      </td>
    </tr>
  </table>
</div>

<!--
	2010-09-14 edit by 廷俊
	----------------------------------------------------
	新增、修改、刪除成功提示訊息
	---------------------------------------------------- 			
-->
<?php echo $this->_tpl_vars['Message']; ?>

<!--
	2010-06-30 edit by 廷俊
	--------------------------------------
	更改按鈕語言別
	--------------------------------------
	2011-04-19 edit by 廷俊
	--------------------------------------
	點選重設按鈕，修正為重新載入此頁面
	--------------------------------------
	2011-06-02 edit by 廷俊
	----------------------------------------------------
	新增郵件設定的功能頁籤
	----------------------------------------------------
-->
<div id="show_table2">
<!-- 頁籤起 -->
	<div id="TabbedPanels1" class="TabbedPanels">
	  <ul class="TabbedPanelsTabGroup">
		<li class="TabbedPanelsTab" tabindex="0"><?php echo $this->_tpl_vars['umTitle1']; ?>
</li>
		<li class="TabbedPanelsTab" tabindex="0"><?php echo $this->_tpl_vars['umTitle2']; ?>
</li>		
		<li class="TabbedPanelsTab" tabindex="0"><?php echo $this->_tpl_vars['umTitle3']; ?>
</li>		
		<li class="TabbedPanelsTab" tabindex="0"><?php echo $this->_tpl_vars['umTitle4']; ?>
</li>		
	  </ul>
	  <div class="TabbedPanelsContentGroup">
	  <!-- 表單基本資料 -->
	  <div class="TabbedPanelsContent">
	  <form method=post action="<?php echo $this->_tpl_vars['savefrm_act']; ?>
"onsubmit="return chkrepost()">
		<table border="0" cellpadding="2" cellspacing="2" align="center" width="100%">
			<tr>
				<td width="80" align="right">&nbsp;</td>
				<td align="left"><input type=hidden value="<?php echo $this->_tpl_vars['form_id_value']; ?>
" name="form_id"></td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['form_na']; ?>
</th>
				<td align="left"><INPUT TYPE="text" NAME="form_na" id="form_na" size="50" value="<?php echo $this->_tpl_vars['form_na_value']; ?>
"></td>
			</tr>			
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['form_cat']; ?>
</th>
				<td align="left">
					<select name="form_cat">
					<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['umCat']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<option value="<?php echo $this->_tpl_vars['umCat'][$this->_sections['i']['index']]['cat_id']; ?>
" <?php echo $this->_tpl_vars['umCat'][$this->_sections['i']['index']]['cat_sel']; ?>
><?php echo $this->_tpl_vars['umCat'][$this->_sections['i']['index']]['cat_na']; ?>
</option>						
					<?php endfor; endif; ?>
					</select>
				</td>
			</tr>
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['form_text1']; ?>
</th>		
				<td align="left"><?php echo $this->_tpl_vars['fckedit_text1']; ?>
</td>
			</tr>
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['form_text2']; ?>
</th>		
				<td align="left"><?php echo $this->_tpl_vars['fckedit_text2']; ?>
</td>
			</tr>		
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['InfoState']; ?>
</th>
				<td align="left">
					<INPUT TYPE="radio" NAME="info_state" value="1" checked><?php echo $this->_tpl_vars['infostateYes']; ?>

					<INPUT TYPE="radio" NAME="info_state" value="0" <?php if ($this->_tpl_vars['info_state'] == '0'): ?>checked<?php endif; ?>><?php echo $this->_tpl_vars['infostateNo']; ?>

				</td>
			</tr>			
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['form_button']; ?>
</th>
				<td align="left"><INPUT TYPE="text" NAME="form_button" size="20" maxlength="20" value="<?php echo $this->_tpl_vars['form_button_value']; ?>
"></td>
			</tr>		
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['form_memo']; ?>
</th>
				<!--<td align="left"><TEXTAREA NAME="form_memo" ROWS="3" COLS="40"><?php echo $this->_tpl_vars['form_memo_value']; ?>
</TEXTAREA></td>-->
				<td align="left"><?php echo $this->_tpl_vars['fckedit_memo']; ?>
</td>
			</tr>	
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['form_reply']; ?>
</th>		
				<td align="left"><?php echo $this->_tpl_vars['fckedit_reply']; ?>
</td>
			</tr>			
			<tr>				
				<td align="center" colspan="2">&nbsp;</td>
			</tr>
			<tr>				
				<td align="center" colspan="2">
					<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
">
					<INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
" onclick="window.location.reload();">
				</td>
			</tr>
			<tr>				
				<td align="center" colspan="2">&nbsp;</td>
			</tr>
		</table>	
	  </div>
<!-- /*
	2011-04-14 edit by 廷俊
	----------------------------------------------------
	1.表單新增付款設定頁籤
	2.新增付款設定、選擇付款方式功能欄位
	3.表單編輯頁面調整版面配置
	---------------------------------------------------- 
*/ -->
	  <!-- 表單付款設定 -->
	  <div class="TabbedPanelsContent">
		<table border="0" cellpadding="2" cellspacing="2" align="center" width="100%">
			<tr>
				<th width="80" align="right">&nbsp;</th>
				<td align="left">&nbsp;</td>
			<tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['PaymentState']; ?>
</th>
				<td align="left">
					<INPUT TYPE="radio" NAME="payment_state" value="0" checked  onclick="Payment_Config()"><?php echo $this->_tpl_vars['NotEnabled']; ?>

					<INPUT TYPE="radio" NAME="payment_state" id="payment_state" value="1" <?php if ($this->_tpl_vars['payment_state']): ?>checked<?php endif; ?>  onclick="Payment_Config()"><?php echo $this->_tpl_vars['Enabled']; ?>

				</td>
			<tr>
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['PaymentSet']; ?>
</th>
				<td align="left"><?php echo $this->_tpl_vars['payment_set']; ?>
</td>
			<tr>
				<td align="center" colspan="2">&nbsp;</td>
			</tr>
			<tr>				
				<td align="center" colspan="2">
					<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
">
					<INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
" onclick="window.location.reload();">
				</td>
			</tr>
			<tr>				
				<td align="center" colspan="2">&nbsp;</td>
			</tr>
		</table>
	  </div>
<!-- 	
	2011-04-18 edit by 廷俊
	-------------------------------------------
	新增付款表單的系統預設欄位
	-------------------------------------------
-->
	  <!-- 表單欄位設定 -->
	  <div class="TabbedPanelsContent">
		<table border="0" cellpadding="2" cellspacing="2" align="center" width="100%">		
			<tr>				
				<td align="center">&nbsp;</td>
			</tr>
			<tr>				
				<td align="center">
					<!-- 付款表單-系統預設欄位 -->
					<table id="frmcols_sys" border="0" cellpadding="0" cellspacing="0" align="center" width="100%" <?php if (! $this->_tpl_vars['payment_state']): ?>style="display:none"<?php endif; ?>>
						<tr><th colspan="8" align="left"><?php echo $this->_tpl_vars['ColSysDefault']; ?>
<p></th></tr>
						<tr>
							<th align="center" class="table_td_01" width="50"><?php echo $this->_tpl_vars['form_line_row']; ?>
</th>
							<th align="center" class="table_td_01" width="50"><?php echo $this->_tpl_vars['form_line_col']; ?>
</th>
							<th align="center" class="table_td_01"><?php echo $this->_tpl_vars['SysDefault']; ?>
</th>
							<th align="center" class="table_td_01"><?php echo $this->_tpl_vars['form_col_na']; ?>
</th>
							<th align="center" class="table_td_01"><?php echo $this->_tpl_vars['form_col_input']; ?>
</th>
							<th align="center" class="table_td_01"><?php echo $this->_tpl_vars['form_col_value']; ?>
</th>
							<th align="center" class="table_td_01"><?php echo $this->_tpl_vars['form_input_type']; ?>
</th>
							<th align="center" class="table_td_01"><?php echo $this->_tpl_vars['form_input_null']; ?>
</th>
						</tr>
						<tr>
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['frmpay_id_row']; ?>
</td>
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['frmpay_id_col']; ?>
</td>
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['PaymentFormID']; ?>
</td>
							<td align="center" class="table_td_02"><input type="text" name="frmpay_id" value="<?php echo $this->_tpl_vars['frmpay_id']; ?>
"></td>
							<td align="center" class="table_td_02">X</td>
							<td align="center" class="table_td_02">X</td>
							<td align="center" class="table_td_02">X</td>	
							<td align="center" class="table_td_02">X</td>					
						</tr>
						<tr>
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['frmpay_time_row']; ?>
</td>
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['frmpay_time_col']; ?>
</td>
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['RecordingTime']; ?>
</td>
							<td align="center" class="table_td_02"><input type="text" name="frmpay_time" value="<?php echo $this->_tpl_vars['frmpay_time']; ?>
"></td>
							<td align="center" class="table_td_02">X</td>
							<td align="center" class="table_td_02">X</td>
							<td align="center" class="table_td_02">X</td>	
							<td align="center" class="table_td_02">X</td>					
						</tr>
						<tr>
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['frmpay_price_row']; ?>
</td>
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['frmpay_price_col']; ?>
</td>
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['Amount']; ?>
</td>
							<td align="center" class="table_td_02"><input type="text" name="frmpay_price" value="<?php echo $this->_tpl_vars['frmpay_price']; ?>
"></td>
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['input_type_text']; ?>
</td>
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['input_type_size']; ?>
：20</td>
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['input_check_anyint']; ?>
</td>	
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['check_null_no']; ?>
</td>					
						</tr>
						<tr>
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['frmpay_na_row']; ?>
</td>
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['frmpay_na_col']; ?>
</td>
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['GuidanceNa']; ?>
</td>
							<td align="center" class="table_td_02"><input type="text" name="frmpay_na" value="<?php echo $this->_tpl_vars['frmpay_na']; ?>
"></td>
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['input_type_text']; ?>
</td>
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['input_type_size']; ?>
：20</td>
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['input_check_char']; ?>
</td>	
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['check_null_no']; ?>
</td>					
						</tr>
						<tr>
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['frmpay_mail_row']; ?>
</td>
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['frmpay_mail_col']; ?>
</td>
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['GuidanceMail']; ?>
</td>
							<td align="center" class="table_td_02"><input type="text" name="frmpay_mail" value="<?php echo $this->_tpl_vars['frmpay_mail']; ?>
"></td>
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['input_type_text']; ?>
</td>
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['input_type_size']; ?>
：20</td>
							<td align="center" class="table_td_02">Email</td>	
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['check_null_no']; ?>
</td>					
						</tr>
						<tr>
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['frmpay_tel_row']; ?>
</td>
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['frmpay_tel_col']; ?>
</td>
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['GuidanceTel']; ?>
</td>
							<td align="center" class="table_td_02"><input type="text" name="frmpay_tel" value="<?php echo $this->_tpl_vars['frmpay_tel']; ?>
"></td>
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['input_type_text']; ?>
</td>
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['input_type_size']; ?>
：20</td>
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['input_check_char']; ?>
</td>	
							<td align="center" class="table_td_02"><?php echo $this->_tpl_vars['check_null_no']; ?>
</td>					
						</tr>
						<tr><td colspan="8">&nbsp;</td></tr>
					</table>
					<!-- 自訂義欄位 -->
					<table id="p_table" border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
						<tr>	
							<th colspan="8" align="left"><?php echo $this->_tpl_vars['ColUsrDefault']; ?>
<p></th>
							<td><input type="button" value="<?php echo $this->_tpl_vars['Btn_Add_Column']; ?>
" onclick="insertRow();"></td>
						</tr>
						<tr>
							<th align="center" class="table_td_01"><?php echo $this->_tpl_vars['form_line_row']; ?>
</th>
							<th align="center" class="table_td_01"><?php echo $this->_tpl_vars['form_line_col']; ?>
</th>
							<th align="center" class="table_td_01"><?php echo $this->_tpl_vars['form_col_na']; ?>
</th>
							<th align="center" class="table_td_01"><?php echo $this->_tpl_vars['form_col_input']; ?>
</th>
							<th align="center" class="table_td_01"><?php echo $this->_tpl_vars['form_col_value']; ?>
</th>
							<th align="center" class="table_td_01"><?php echo $this->_tpl_vars['form_input_type']; ?>
</th>	
							<th align="center" class="table_td_01"><?php echo $this->_tpl_vars['form_input_null']; ?>
</th>					
							<th align="center" class="table_td_01"><?php echo $this->_tpl_vars['form_input_only']; ?>
</th>
							<th align="center" class="table_td_01"><?php echo $this->_tpl_vars['form_col_remove']; ?>
</th>
						</tr>
						<?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['umformcolumns']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
$this->_sections['j']['start'] = $this->_sections['j']['step'] > 0 ? 0 : $this->_sections['j']['loop']-1;
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = $this->_sections['j']['loop'];
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);
?>
						<tr>
							<td align="center" class="table_td_02" id="<?php echo $this->_tpl_vars['umformcolumns'][$this->_sections['j']['index']]['Cell_id']; ?>
0">
								<input type="hidden" name="form_td_id[]" value="<?php echo $this->_tpl_vars['umformcolumns'][$this->_sections['j']['index']]['form_cols_td_id']; ?>
">
								<input type="hidden" name="frm_order[]" value="<?php echo $this->_tpl_vars['umformcolumns'][$this->_sections['j']['index']]['list_order']; ?>
"><?php echo $this->_tpl_vars['umformcolumns'][$this->_sections['j']['index']]['td_row']; ?>

							</td>
							<td align="center" class="table_td_02" id="<?php echo $this->_tpl_vars['umformcolumns'][$this->_sections['j']['index']]['Cell_id']; ?>
1"><?php echo $this->_tpl_vars['umformcolumns'][$this->_sections['j']['index']]['td_col']; ?>
</td>
							<td align="center" class="table_td_02" id="<?php echo $this->_tpl_vars['umformcolumns'][$this->_sections['j']['index']]['Cell_id']; ?>
2"><?php echo $this->_tpl_vars['umformcolumns'][$this->_sections['j']['index']]['td_input_na']; ?>
</td>
							<td align="center" class="table_td_02" id="<?php echo $this->_tpl_vars['umformcolumns'][$this->_sections['j']['index']]['Cell_id']; ?>
3"><?php echo $this->_tpl_vars['umformcolumns'][$this->_sections['j']['index']]['td_input_type']; ?>
</td>
							<td align="center" class="table_td_02" id="<?php echo $this->_tpl_vars['umformcolumns'][$this->_sections['j']['index']]['Cell_id']; ?>
4"><?php echo $this->_tpl_vars['umformcolumns'][$this->_sections['j']['index']]['td_input_value']; ?>
</td>
							<td align="center" class="table_td_02" id="<?php echo $this->_tpl_vars['umformcolumns'][$this->_sections['j']['index']]['Cell_id']; ?>
5"><?php echo $this->_tpl_vars['umformcolumns'][$this->_sections['j']['index']]['input_check_type']; ?>
</td>	
							<td align="center" class="table_td_02" id="<?php echo $this->_tpl_vars['umformcolumns'][$this->_sections['j']['index']]['Cell_id']; ?>
6"><?php echo $this->_tpl_vars['umformcolumns'][$this->_sections['j']['index']]['input_check_null']; ?>
</td>					
							<td align="center" class="table_td_02" id="<?php echo $this->_tpl_vars['umformcolumns'][$this->_sections['j']['index']]['Cell_id']; ?>
7"><?php echo $this->_tpl_vars['umformcolumns'][$this->_sections['j']['index']]['input_check_only']; ?>
</td>
							<td align="center" class="table_td_02" id="<?php echo $this->_tpl_vars['umformcolumns'][$this->_sections['j']['index']]['Cell_id']; ?>
8"><?php echo $this->_tpl_vars['umformcolumns'][$this->_sections['j']['index']]['td_remove']; ?>
</td>
						</tr>
						<?php endfor; endif; ?>
					</table>
				</td>
			</tr>
			<tr>				
				<td align="center">&nbsp;</td>
			</tr>
			<tr>		
				<td align="center" class="table_td_03">
					<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
">
					<INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
" onclick="window.location.reload();">
					<input type="hidden" name="rows_count" id="rows_count" size=2 value="<?php echo $this->_tpl_vars['rows_count_value']; ?>
">
				</td>
			</tr>
			<tr>
				<td align="left" id="hide_area">&nbsp;<?php echo $this->_tpl_vars['Hidden_List']; ?>
</td>
			</tr>
		</table>		
	  </div>
<!--	  
	2011-06-02 edit by 廷俊
	----------------------------------------------------
	1.將表單email通知修正搬移至郵件設定
	2.表單新增，表單回覆信件、付款結果信件的主旨與內容功能欄位
	----------------------------------------------------
-->
	  <!-- 表單郵件設定 -->
	  <div class="TabbedPanelsContent">
		<table border="0" cellpadding="2" cellspacing="2" align="center" width="100%">		
			<tr>				
				<td align="center" colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['form_notify']; ?>
</th>				
				<td align="left">
<!--
	2010-07-01 edit by 廷俊
	-------------------------------------------
	1.email通知更改為checkbox："前台使用者"、"網站管理員"、"其他收件者"
	2."email通知"、"其他收件者"的顯示預設值
	3.動態span顯示"其他收件者"
	-------------------------------------------
				<input type="radio" name="form_notify" value="1" checked><?php echo $this->_tpl_vars['form_notify_yes']; ?>

				<input type="radio" name="form_notify" value="2" <?php if ($this->_tpl_vars['email_notify_value'] == '2'): ?>checked<?php endif; ?>><?php echo $this->_tpl_vars['form_notify_usr']; ?>

				<input type="radio" name="form_notify" value="3" <?php if ($this->_tpl_vars['email_notify_value'] == '3'): ?>checked<?php endif; ?>><?php echo $this->_tpl_vars['form_notify_sys']; ?>

				<input type="radio" name="form_notify" value="0" <?php if ($this->_tpl_vars['email_notify_value'] == '0'): ?>checked<?php endif; ?>><?php echo $this->_tpl_vars['form_notify_no']; ?>
</td>
-->	
					<input type="checkbox" name="form_notify[]" value="1" <?php echo $this->_tpl_vars['form_notify_checked1']; ?>
><?php echo $this->_tpl_vars['form_notify_sys']; ?>

					<input type="checkbox" name="form_notify[]" value="2" <?php echo $this->_tpl_vars['form_notify_checked2']; ?>
><?php echo $this->_tpl_vars['form_notify_usr']; ?>

					<input type="checkbox" name="form_notify[]" value="3" <?php echo $this->_tpl_vars['form_notify_checked3']; ?>
 id="form_notify3" onclick="notify_email()"><?php echo $this->_tpl_vars['form_notify_email']; ?>

				</td>
			</tr>	
			<span id="notify_email_span" style="<?php echo $this->_tpl_vars['notify_email_display']; ?>
">
				<tr>
					<th align="right"><?php echo $this->_tpl_vars['form_notify_email']; ?>
</th>
					<!--<td align="left"><TEXTAREA NAME="form_memo" ROWS="3" COLS="40"><?php echo $this->_tpl_vars['form_memo_value']; ?>
</TEXTAREA></td>-->
					<td align="left">
						<input type="text" id="form_notify_email" name="form_notify_email" value="<?php echo $this->_tpl_vars['notify_email_value']; ?>
" size="50">
						<?php echo $this->_tpl_vars['notify_email_text']; ?>

					</td>
				</tr>
			</span>
			
			
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['form_notify_subject']; ?>
</th>
				<td align="left"><INPUT TYPE="text" NAME="notify_subject" id="notify_subject" size="50" value="<?php echo $this->_tpl_vars['notify_subject_value']; ?>
"></td>
			</tr>			
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['form_notify_body']; ?>
</th>		
				<td align="left"><?php echo $this->_tpl_vars['notify_body']; ?>
</td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['form_payment_subject']; ?>
</th>
				<td align="left"><INPUT TYPE="text" NAME="payment_subject" id="payment_subject" size="50" value="<?php echo $this->_tpl_vars['payment_subject_value']; ?>
"></td>
			</tr>			
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['form_payment_body']; ?>
</th>		
				<td align="left"><?php echo $this->_tpl_vars['payment_body']; ?>
</td>
			</tr>
			
			
			<tr>				
				<td align="center" colspan="2">&nbsp;</td>
			</tr>
			<tr>				
				<td align="center" colspan="2">
					<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
">
					<INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
" onclick="window.location.reload();">
				</td>
			</tr>
			<tr>				
				<td align="center" colspan="2">&nbsp;</td>
			</tr>
		</table>	
	  </div>
	  </form>		
	  </div>
	</div>  
<?php echo '
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
//-->
</script>
'; ?>


<!-- 頁籤終 -->
</div>
 
<?php echo $this->_tpl_vars['temp_log']; ?>
</body>
</html>