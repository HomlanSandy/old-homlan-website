<?php /* Smarty version 2.6.26, created on 2012-07-09 16:04:03
         compiled from modules/cmdmod.tpl.htm */ ?>
<?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['cmdmodList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	<?php if ($this->_tpl_vars['cmdmodList'][$this->_sections['k']['index']]['md_id'] == $this->_tpl_vars['page_left'][$this->_sections['a']['index']]['md_id'] && $this->_tpl_vars['cmdmodList'][$this->_sections['k']['index']]['page_id'] == $this->_tpl_vars['page_left'][$this->_sections['a']['index']]['page_id'] && $this->_tpl_vars['cmdmodList'][$this->_sections['k']['index']]['page_position'] == $this->_tpl_vars['page_left'][$this->_sections['a']['index']]['page_position']): ?>
		<div><?php echo $this->_tpl_vars['cmdmodList'][$this->_sections['k']['index']]['commend_content']; ?>
</div>
	<?php endif; ?>
<?php endfor; endif; ?>

<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['cmdmodList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	<?php if ($this->_tpl_vars['cmdmodList'][$this->_sections['i']['index']]['md_id'] == $this->_tpl_vars['page_center'][$this->_sections['b']['index']]['md_id'] && $this->_tpl_vars['cmdmodList'][$this->_sections['i']['index']]['page_id'] == $this->_tpl_vars['page_center'][$this->_sections['b']['index']]['page_id'] && $this->_tpl_vars['cmdmodList'][$this->_sections['i']['index']]['page_position'] == $this->_tpl_vars['page_center'][$this->_sections['b']['index']]['page_position']): ?>
		<div><?php echo $this->_tpl_vars['cmdmodList'][$this->_sections['i']['index']]['commend_content']; ?>
</div>
	<?php endif; ?>
<?php endfor; endif; ?>

<?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['cmdmodList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	<?php if ($this->_tpl_vars['cmdmodList'][$this->_sections['j']['index']]['md_id'] == $this->_tpl_vars['page_right'][$this->_sections['c']['index']]['md_id'] && $this->_tpl_vars['cmdmodList'][$this->_sections['j']['index']]['page_id'] == $this->_tpl_vars['page_right'][$this->_sections['c']['index']]['page_id'] && $this->_tpl_vars['cmdmodList'][$this->_sections['j']['index']]['page_position'] == $this->_tpl_vars['page_right'][$this->_sections['c']['index']]['page_position']): ?>
		<div><?php echo $this->_tpl_vars['cmdmodList'][$this->_sections['j']['index']]['commend_content']; ?>
</div>
	<?php endif; ?>
<?php endfor; endif; ?>