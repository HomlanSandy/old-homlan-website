<?php /* Smarty version 2.6.26, created on 2012-07-09 15:59:31
         compiled from modules/header_userlink.tpl.htm */ ?>
<?php if ($this->_tpl_vars['infoscatlist'] > 0): ?>
<a href="index.php"><?php echo $this->_tpl_vars['HomePage']; ?>
</a>
<?php unset($this->_sections['p']);
$this->_sections['p']['name'] = 'p';
$this->_sections['p']['loop'] = is_array($_loop=$this->_tpl_vars['umheaduserlink']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	<?php if ($this->_tpl_vars['umheaduserlink'][$this->_sections['p']['index']]['cats_na'] != ''): ?>
		<img src="themes/<?php echo $this->_tpl_vars['themes_na']; ?>
/images/dash.gif" border="0" align="absmiddle" alt="dash" />
		<?php if ($this->_tpl_vars['umheaduserlink'][$this->_sections['p']['index']]['cats_url'] == ''): ?><?php echo $this->_tpl_vars['umheaduserlink'][$this->_sections['p']['index']]['cats_na']; ?>
<?php else: ?><a href="<?php echo $this->_tpl_vars['umheaduserlink'][$this->_sections['p']['index']]['cats_url']; ?>
"><?php echo $this->_tpl_vars['umheaduserlink'][$this->_sections['p']['index']]['cats_na']; ?>
</a><?php endif; ?>
	<?php endif; ?>
<?php endfor; endif; ?>
<?php endif; ?>