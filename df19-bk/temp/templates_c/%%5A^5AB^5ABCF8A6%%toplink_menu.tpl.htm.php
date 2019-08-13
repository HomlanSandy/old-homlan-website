<?php /* Smarty version 2.6.26, created on 2012-07-09 15:59:31
         compiled from modules/toplink_menu.tpl.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'modules/toplink_menu.tpl.htm', 1, false),)), $this); ?>
<?php if (count($this->_tpl_vars['umMenuTitle']) != 0): ?>
<div id="top_menu">
<table class="top_menu_table" width="100%" align="right" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="right">

    <ul id="MenuBar0" class="MenuBarHorizontal">
    
<!-- 上方LINK選單第一層開始 -->
 	  <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['umMenuTitle']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
		<?php if ($this->_tpl_vars['umMenuTitle'][$this->_sections['k']['index']]['next'] == 0): ?>
		<li><a href="<?php echo $this->_tpl_vars['umMenuTitle'][$this->_sections['k']['index']]['cat_url']; ?>
" target="<?php echo $this->_tpl_vars['umMenuTitle'][$this->_sections['k']['index']]['cat_target']; ?>
"><?php echo $this->_tpl_vars['umMenuTitle'][$this->_sections['k']['index']]['cat_na']; ?>
</a></li>
		<?php else: ?>
		<li><a href="<?php echo $this->_tpl_vars['umMenuTitle'][$this->_sections['k']['index']]['cat_url']; ?>
" target="<?php echo $this->_tpl_vars['umMenuTitle'][$this->_sections['k']['index']]['cat_target']; ?>
"><?php echo $this->_tpl_vars['umMenuTitle'][$this->_sections['k']['index']]['cat_na']; ?>
</a> 
<!-- 上方LINK選單第二層開始 -->			
         <ul>
		 <?php unset($this->_sections['p']);
$this->_sections['p']['name'] = 'p';
$this->_sections['p']['loop'] = is_array($_loop=$this->_tpl_vars['umMenuItem'][$this->_sections['k']['index']]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
         <li><a href="<?php echo $this->_tpl_vars['umMenuItem'][$this->_sections['k']['index']][$this->_sections['p']['index']]['link_url']; ?>
" target="<?php echo $this->_tpl_vars['umMenuItem'][$this->_sections['k']['index']][$this->_sections['p']['index']]['link_target']; ?>
"><?php echo $this->_tpl_vars['umMenuItem'][$this->_sections['k']['index']][$this->_sections['p']['index']]['link_na']; ?>
</a></li>         
		 <?php endfor; endif; ?>
		 </ul>
<!-- 上方LINK選單第二層結束 -->
      </li>
	  <?php endif; ?>
	  <?php endfor; endif; ?>     
<!-- 上方LINK選單第一層結束 -->
    </ul>
<?php echo '
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar0", {imgDown:"themes/default/images/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
'; ?>

    </td>
  </tr>
</table>
</div>
<?php endif; ?>