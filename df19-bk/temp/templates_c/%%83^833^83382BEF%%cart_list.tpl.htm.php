<?php /* Smarty version 2.6.26, created on 2017-04-11 17:34:02
         compiled from modules/cart_list.tpl.htm */ ?>
<script>
<?php echo '
function edit_quantity(ifid,quantity){
	document.location="cart.php?act=edit&ifid="+ifid+"&quantity="+quantity;
}
'; ?>

</script>
<table width="100%" class="car_list_table" align="left" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td class="car_list_head" align="left" valign="middle"><img src="themes/<?php echo $this->_tpl_vars['themes_na']; ?>
/images/basket.gif" border="0" align="absmiddle" /><?php echo $this->_tpl_vars['Shopping_Cart']; ?>
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
    <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" class="car_list_content"　border="0">
<?php if ($this->_tpl_vars['Empty'] == ""): ?>
	<tr>
			<td align="center" class="car_list_title" width=""><?php echo $this->_tpl_vars['Product_details']; ?>
</td>
			<td align="center" class="car_list_title" width="150"><?php echo $this->_tpl_vars['Price']; ?>
</td>
			<td align="center" class="car_list_title" width="60"><?php echo $this->_tpl_vars['Quantity']; ?>
</td>
			<td align="center" class="car_list_title" width="90"><?php echo $this->_tpl_vars['Subtotal']; ?>
</td>
			<td align="center" class="car_list_title" width="60"><?php echo $this->_tpl_vars['Change_Details']; ?>
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
			<td align="left" class="car_list">
				<del><?php echo $this->_tpl_vars['Selling_price']; ?>
<?php echo $this->_tpl_vars['currency']; ?>
<?php echo $this->_tpl_vars['umCartList'][$this->_sections['i']['index']]['price_sale']; ?>
<?php echo $this->_tpl_vars['Dollar']; ?>
</del><br>
				<?php echo $this->_tpl_vars['Member_price']; ?>
<?php echo $this->_tpl_vars['currency']; ?>
<font color="red"><b><?php echo $this->_tpl_vars['umCartList'][$this->_sections['i']['index']]['member_price']; ?>
</b></font><?php echo $this->_tpl_vars['Dollar']; ?>
				
			</td>
			<td align="center" class="car_list">
				<?php echo $this->_tpl_vars['umCartList'][$this->_sections['i']['index']]['stock_list']; ?>
<br>
			</td>
			<td align="center" class="car_list">
				<?php echo $this->_tpl_vars['currency']; ?>
<?php echo $this->_tpl_vars['umCartList'][$this->_sections['i']['index']]['subtotal']; ?>
<?php echo $this->_tpl_vars['Dollar']; ?>

			</td>
			<td align="center" class="car_list">
				<input type="button" value="<?php echo $this->_tpl_vars['btn_cancle']; ?>
" class="car_cancel_btn" onClick="JavaScript:document.location='cart.php?act=edit&ifid=<?php echo $this->_tpl_vars['umCartList'][$this->_sections['i']['index']]['cart_id']; ?>
&quantity=0';"/>
			</td>
		</tr>
	<?php endfor; endif; ?> 
		<tr>
			<td align="center" class="car_list" colspan="4">				
				<input type="button" value="<?php echo $this->_tpl_vars['Continue_shopping']; ?>
" class="car_continue_btn" onClick="history.go(-1);"/>
				<input type="submit" value="<?php echo $this->_tpl_vars['Start_Checkout']; ?>
" class="car_start_btn" onClick="JavaScript:document.location='payment.php';"/>
			</td>
			<td align="center" class="car_list" colspan="1">
				<input type="button" value="<?php echo $this->_tpl_vars['Clear_Cart']; ?>
" class="car_btn" onClick="JavaScript:document.location='cart.php?act=delete';"/>
			</td>
		</tr>
<?php else: ?>
	  <tr>
		<td align="center" class="car_list">
			<?php echo $this->_tpl_vars['Empty']; ?>
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