<?php /* Smarty version 2.6.26, created on 2012-07-09 17:56:21
         compiled from modules/demand_car.tpl.htm */ ?>
<!-- /*
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	demand_car.tpl.htm		前台 需求單同購物車 的HTML處理頁面
	│	開發者		│	健嘉
	│	版本		│	
	├=======================================================================================┤
	│	1.	            	2011/12/23	健嘉	建立前台 需求單同購物車	 頁面   			│
	└=======================================================================================┘
*/ -->
<script>
var NoValue="<?php echo $this->_tpl_vars['NoValue']; ?>
";
<?php echo '

function edit_quantity(ifid,quantity){
	document.location="cart.php?act=edit&ifid="+ifid+"&quantity="+quantity;
}
function chknum(){
	var i=0;
	var j=0;
	var str="stock"+i;
	var no_value=[];
	
	while (document.getElementById(str))
	{
		if(document.getElementById(str).value==""){
			alert(NoValue);
			return false;
			no_value[j]=i;
			j+=1;
		}
		i=i+1;
		str="stock"+i;
	}
	return true;
}

'; ?>

</script>

<form method="POST" action="demand_order.php">
<table width="100%" class="car_list_table" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td class="car_list_head" align="left" valign="middle"><img src="themes/<?php echo $this->_tpl_vars['themes_na']; ?>
/images/demand3.gif" border="0" align="absmiddle" /><?php echo $this->_tpl_vars['Demand_single']; ?>
</td>
  </tr>
  <tr>
    <td align="center" valign="top">
<!-- 
	2011-02-10 edit by 廷俊
	------------------------------------------------------
	1.顯示幣別
	2.修正版面配置
	------------------------------------------------------		
*/	-->   
    <table width="100%" align="center" border="0" cellpadding="2" cellspacing="2" class="car_list_content">
<?php if ($this->_tpl_vars['Demand_Empty'] == ""): ?>
	<tr>
		<td width="60%" align="center" class="car_list_title" width=""><?php echo $this->_tpl_vars['Product_details']; ?>
</td>
		<td align="center" class="car_list_title" width="20%"><?php echo $this->_tpl_vars['Quantity']; ?>
</td>
		<td align="center" class="car_list_title" width="20%"><?php echo $this->_tpl_vars['Change_Details']; ?>
</td>
	</tr>
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
			<td align="left" class="car_list">
				<a href="<?php echo $this->_tpl_vars['umCartList'][$this->_sections['i']['index']]['href']; ?>
" target="_self"><?php echo $this->_tpl_vars['umCartList'][$this->_sections['i']['index']]['smallpic']; ?>
</a>
				<a href="<?php echo $this->_tpl_vars['umCartList'][$this->_sections['i']['index']]['href']; ?>
" target="_self"><?php echo $this->_tpl_vars['umCartList'][$this->_sections['i']['index']]['cart_na']; ?>
</a><br>	
			</td>
			<td align="center" class="car_list">
				<?php echo $this->_tpl_vars['umCartList'][$this->_sections['i']['index']]['stock_list']; ?>
<br>
			</td>
			<td align="center" class="car_list">
				<input type="button" value="<?php echo $this->_tpl_vars['btn_cancle']; ?>
" class="car_cancel_btn" onClick="JavaScript:document.location='demand.php?act=edit&ifid=<?php echo $this->_tpl_vars['umCartList'][$this->_sections['i']['index']]['cart_id']; ?>
';"/>
			</td>
		</tr>
	<?php endfor; endif; ?> 
		<tr>
			<td align="center" class="car_list" colspan="2">
				<input type="button" value="<?php echo $this->_tpl_vars['Continue_shopping']; ?>
" class="car_continue_btn" onClick="history.go(-1);"/>
				<input type="submit" value="<?php echo $this->_tpl_vars['Write_Data']; ?>
" class="car_start_btn" onclick="return chknum();"/>
			</td>
			<td align="center" class="car_list" colspan="1">
				<input type="button" value="<?php echo $this->_tpl_vars['Clear_Demand']; ?>
" class="car_btn" onClick="JavaScript:document.location='demand.php?act=delete';"/>
			</td>
		</tr>
<?php else: ?>
	  <tr>
		<td align="center" class="car_list">
			<?php echo $this->_tpl_vars['Demand_Empty']; ?>
<br><br>
			<input type="button" value="<?php echo $this->_tpl_vars['Continue_shopping']; ?>
" class="car_btn" onClick="JavaScript:document.location='index.php';"/>
		</td>
      </tr>
<?php endif; ?>	  
    </table>
    </td>
  </tr>
</table>
</form>
<br>
  