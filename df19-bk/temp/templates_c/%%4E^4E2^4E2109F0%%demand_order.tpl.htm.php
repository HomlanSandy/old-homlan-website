<?php /* Smarty version 2.6.26, created on 2012-07-11 09:44:39
         compiled from demand_order.tpl.htm */ ?>
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
</head>
<!-- /*
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	demand_order.tpl.htm		前台 需求單同購物車 的HTML處理頁面
	│	開發者		│	健嘉
	│	版本		│	
	├=======================================================================================┤
	│	1.				    2011/12/23	健嘉	
	└=======================================================================================┘
*/-->
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

<?php if ($this->_tpl_vars['center'] != 0): ?>
<!-- 頁身 中間 主要區域位置設定 --> 
<td id="main" valign="top" style="width:<?php echo $this->_tpl_vars['center']; ?>
;">

	<!-- 需求單列表 START --> 
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td valign="top">
<!--
	2011-12-20 edut by 健嘉
	-----------------------------------------
	判斷需求單設定為單一或多個來include樣版
	-----------------------------------------
-->		
	
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/demand_order_list.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		
		</td>
	  </tr>
	</table>
	<!-- 需求單列表 END --> 

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
<?php endif; ?>

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