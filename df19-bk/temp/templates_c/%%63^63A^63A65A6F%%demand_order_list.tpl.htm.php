<?php /* Smarty version 2.6.26, created on 2012-07-11 09:44:39
         compiled from modules/demand_order_list.tpl.htm */ ?>
<!-- /*
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	demand_order_list.tpl.htm		前台 需求單同購物車 的HTML處理頁面
	│	開發者		│	健嘉
	│	版本		│	
	├=======================================================================================┤
	│	1.					2011/12/23	健嘉	
	└=======================================================================================┘
*/ -->
<script>
var Warming_DemandQuantity="<?php echo $this->_tpl_vars['Warming_DemandQuantity']; ?>
";
var Warming_DemandNa="<?php echo $this->_tpl_vars['Warming_DemandNa']; ?>
";
var Warming_DemandMail="<?php echo $this->_tpl_vars['Warming_DemandMail']; ?>
";
var Warming_DemandTel="<?php echo $this->_tpl_vars['Warming_DemandTel']; ?>
";
var Warming_DemandAddress="<?php echo $this->_tpl_vars['Warming_DemandAddress']; ?>
";
var EnterChk="<?php echo $this->_tpl_vars['EnterChk']; ?>
";
var Error_int_Quantity="<?php echo $this->_tpl_vars['Error_int_Quantity']; ?>
";
var Error_DemandMail="<?php echo $this->_tpl_vars['Error_DemandMail']; ?>
";
<?php echo '
//會員可動態勾選聯絡電話
function dynamic(value){
	document.getElementById("demand_tel").value=value;
}
//驗證需求單表單欄位
function chkpost(){	
	var msg="";
	var ck_int = /^[1-9]+[0-9]*]*$/;
	var ck_mail = /^[^@^\\s]+@[^\\.@^\\s]+(\\.[^\\.@^\\s]+)+$/;
	var demand_na=document.getElementById(\'demand_na\').value;
	var demand_mail=document.getElementById(\'demand_mail\').value;
	var demand_tel=document.getElementById(\'demand_tel\').value;
	var demand_address=document.getElementById(\'demand_address\').value;
	
	//驗證需求者空白
	if (demand_na=="")
	{
		msg += Warming_DemandNa + "\\r\\n";
	}
	//驗證需求者的mail空白、有效mail格式
	if (demand_mail=="")
	{
		msg += Warming_DemandMail + "\\r\\n";
	}else if(!ck_mail.test(demand_mail)){
		msg += Error_DemandMail + "\\r\\n";
	}
	//驗證需求者的聯絡電話空白
	if (demand_tel=="")
	{
		msg += Warming_DemandTel + "\\r\\n";
	}
	//驗證需求者的聯絡地址空白
	if (demand_address=="")
	{
		msg += Warming_DemandAddress + "\\r\\n";
	}	
	//驗證碼防空白
	if (document.getElementById(\'captcha_num\').value=="")
	{
		msg += EnterChk + "\\r\\n";
	}
	if (msg!="")
	{
		alert(msg);
		return false;
	} else {
		return true;
	}
}
'; ?>

</script>

<table width="100%" class="car_list_table" align="left" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td class="demand_list_title" align="left" valign="middle"><img src="themes/<?php echo $this->_tpl_vars['themes_na']; ?>
/images/demand3.gif" border="0" align="absmiddle" /><?php echo $this->_tpl_vars['Demand_single']; ?>
</td>
  </tr>
  <tr>
    <td align="center" valign="top">  
<!-- /*
	2010-12-07 edit by 廷俊
	-------------------------------------------
	1.需求單設定開放可不限會員
	2.需求單新增需求者、電子郵件、聯絡電話、聯絡地址欄位
	3.會員可動態勾選聯絡電話
	-------------------------------------------
*/ -->  
	<form method="post" action="demand_order.php?act=save" onsubmit="return chkpost();">
	<table width="100%" align="center" border="0" cellpadding="2" cellspacing="2" class="demand_list_content">
	<!--需求者資訊-->
		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['umCartList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		<tr>
			<td align="right" class="demand_list_head" width="10%"><?php echo $this->_tpl_vars['DemandProduct']; ?>
</td>
			<td align="left" class="demand_list"width="40%"><?php echo $this->_tpl_vars['umCartList'][$this->_sections['i']['index']]['smallpic']; ?>
<?php echo $this->_tpl_vars['umCartList'][$this->_sections['i']['index']]['cart_na']; ?>
</td>
			<td align="right" class="demand_list_head" width="10%"><?php echo $this->_tpl_vars['DemandQuantity']; ?>
</td>
			<td align="left" class="demand_list"width="40%">
				<?php echo $this->_tpl_vars['umCartList'][$this->_sections['i']['index']]['stock_list']; ?>

				<INPUT TYPE="hidden" NAME="demand_id[]" id="demand_id" value="<?php echo $this->_tpl_vars['umCartList'][$this->_sections['i']['index']]['cart_id']; ?>
">
				<INPUT TYPE="hidden" NAME="demanad_num[]" id="infos_num" value="<?php echo $this->_tpl_vars['umCartList'][$this->_sections['i']['index']]['stock_list']; ?>
">
			</td>
		</tr>
		<?php endfor; endif; ?>
		
		<tr>
			<td align="right" class="demand_list_head"><?php echo $this->_tpl_vars['DemandNa']; ?>
</td>
			<td align="left" class="demand_list"colspan="3">
				<INPUT TYPE="text" NAME="demand_na" id="demand_na" value="<?php echo $this->_tpl_vars['demand_na']; ?>
">
			</td>
		</tr>
		<tr>
			<td align="right" class="demand_list_head"><?php echo $this->_tpl_vars['DemandMail']; ?>
</td>
			<td align="left" class="demand_list"colspan="3">
				<INPUT TYPE="text" NAME="demand_mail" id="demand_mail" value="<?php echo $this->_tpl_vars['demand_mail']; ?>
" size="50">
			</td>
		</tr>
		<tr>
			<td align="right" class="demand_list_head" valign="top"><?php echo $this->_tpl_vars['DemandTel']; ?>
</td>
			<td align="left" class="demand_list"colspan="3">
				<?php echo $this->_tpl_vars['demand_users_tel']; ?>

				<INPUT TYPE="text" NAME="demand_tel" id="demand_tel" value="<?php echo $this->_tpl_vars['demand_tel']; ?>
" size="50">
			</td>
		</tr>
		<tr>
			<td align="right" class="demand_list_head" valign="top"><?php echo $this->_tpl_vars['DemandAddress']; ?>
</td>
			<td align="left" class="demand_list"colspan="3">
				<INPUT TYPE="text" NAME="demand_address" id="demand_address" value="<?php echo $this->_tpl_vars['demand_address']; ?>
" size="50">
			</td>
		</tr>
		<tr>
			<td align="right" class="demand_list_head"><?php echo $this->_tpl_vars['EnterChk']; ?>
</td>
			<td align="left" class="demand_list"colspan="3">
				<img src="<?php echo $this->_tpl_vars['capcha_url']; ?>
" border="0" align="absmiddle">
				<input name="captcha_num" type="text" id="captcha_num" size="4" maxlength="4" style="text-align:center;" />
			</td>
		</tr>
		<!--按鈕-->
		<tr>
			<td align="center" class="demand_list" colspan="4">
				<input type="submit" class="demand_btn" value="<?php echo $this->_tpl_vars['btn_saveout']; ?>
">
				<input type="button" class="demand_btn" value="<?php echo $this->_tpl_vars['btn_cancle']; ?>
" onClick="JavaScript:document.location='index.php';"/>
			</td>
		</tr>
    </table>
	</form>
    </td>
  </tr>
</table>