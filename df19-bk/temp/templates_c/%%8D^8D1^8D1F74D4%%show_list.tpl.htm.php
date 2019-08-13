<?php /* Smarty version 2.6.26, created on 2012-07-09 16:04:03
         compiled from modules/show_list.tpl.htm */ ?>
<?php echo ' 
<!--
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	show_list.tpl.htm	前台首頁圖文顯示區引入html頁面
	│	開發者		│	玉玲
	│	版本		│	v1.0.0.0072201
	├=======================================================================================┤
	│	1.	v1.0.1.0072201	2010/07/22	廷俊	前台首頁圖文顯示區debug頁碼、顯示篇數	
	└=======================================================================================┘
-->	
'; ?>
 
<table width="100%" valign="top" border="0" cellpadding="0" cellspacing="0">
<tr>
	<td valign="top">
	<?php unset($this->_sections['p']);
$this->_sections['p']['name'] = 'p';
$this->_sections['p']['loop'] = is_array($_loop=$this->_tpl_vars['uminfoshowlist']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['p']['show'] = true;
$this->_sections['p']['max'] = $this->_sections['p']['loop'];
$this->_sections['p']['step'] = 1;
$this->_sections['p']['start'] = $this->_sections['p']['step'] > 0 ? 0 : $this->_sections['p']['loop']-1;
if ($this->_sections['p']['show']) {
    $this->_sections['p']['total'] = $this->_sections['p']['loop'];
    if ($this->_sections['p']['total'] == 0)
        $this->_sections['p']['show'] = false;
} else
    $this->_sections['p']['total'] = 0;
if ($this->_sections['p']['show']):

            for ($this->_sections['p']['index'] = $this->_sections['p']['start'], $this->_sections['p']['iteration'] = 1;
                 $this->_sections['p']['iteration'] <= $this->_sections['p']['total'];
                 $this->_sections['p']['index'] += $this->_sections['p']['step'], $this->_sections['p']['iteration']++):
$this->_sections['p']['rownum'] = $this->_sections['p']['iteration'];
$this->_sections['p']['index_prev'] = $this->_sections['p']['index'] - $this->_sections['p']['step'];
$this->_sections['p']['index_next'] = $this->_sections['p']['index'] + $this->_sections['p']['step'];
$this->_sections['p']['first']      = ($this->_sections['p']['iteration'] == 1);
$this->_sections['p']['last']       = ($this->_sections['p']['iteration'] == $this->_sections['p']['total']);
?>
	<table width="100%" border="0" cellpadding="2" cellspacing="2" class="show_list_table">
	  <tr> 
		<?php echo $this->_tpl_vars['uminfoshowlist'][$this->_sections['p']['index']]['list_show']; ?>

	  </tr>
	</table>
	<?php endfor; endif; ?>
	</td>
</tr>
<tr>
	<td valign="top">
<!--
  	2010-07-22 edit by 廷俊
	----------------------------------------------------
	前台首頁圖文顯示區debug頁碼、顯示篇數
	----------------------------------------------------  
-->
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/pages.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</td>
</tr>
</table>