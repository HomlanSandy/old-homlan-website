<?php /* Smarty version 2.6.26, created on 2012-07-20 10:07:18
         compiled from modules/catalog_menu.tpl.htm */ ?>
﻿<div class="menu">
<?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['umMaininfoCats']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	<?php if ($this->_tpl_vars['umSecInfoCats'][$this->_sections['k']['index']] == ''): ?>
	<a href="catalog.php?infoscatid=<?php echo $this->_tpl_vars['umMaininfoCats'][$this->_sections['k']['index']]['cats_id']; ?>
"><?php echo $this->_tpl_vars['umMaininfoCats'][$this->_sections['k']['index']]['cats_na']; ?>
</a>
    <?php else: ?>
		<div class="open">
		<div>  
		<?php unset($this->_sections['p']);
$this->_sections['p']['name'] = 'p';
$this->_sections['p']['loop'] = is_array($_loop=$this->_tpl_vars['umSecInfoCats'][$this->_sections['k']['index']]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<?php if ($this->_tpl_vars['umThrInfoCats'][$this->_sections['k']['index']][$this->_sections['p']['index']] == ''): ?>
			<a href="catalog.php?infoscatid=<?php echo $this->_tpl_vars['umSecInfoCats'][$this->_sections['k']['index']][$this->_sections['p']['index']]['cats_id']; ?>
"><?php echo $this->_tpl_vars['umSecInfoCats'][$this->_sections['k']['index']][$this->_sections['p']['index']]['cats_na']; ?>
</a>
			<?php else: ?>
			<div class="open">
			<div>
				<?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['umThrInfoCats'][$this->_sections['k']['index']][$this->_sections['p']['index']]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['q']['show'] = true;
$this->_sections['q']['max'] = $this->_sections['q']['loop'];
$this->_sections['q']['step'] = 1;
$this->_sections['q']['start'] = $this->_sections['q']['step'] > 0 ? 0 : $this->_sections['q']['loop']-1;
if ($this->_sections['q']['show']) {
    $this->_sections['q']['total'] = $this->_sections['q']['loop'];
    if ($this->_sections['q']['total'] == 0)
        $this->_sections['q']['show'] = false;
} else
    $this->_sections['q']['total'] = 0;
if ($this->_sections['q']['show']):

            for ($this->_sections['q']['index'] = $this->_sections['q']['start'], $this->_sections['q']['iteration'] = 1;
                 $this->_sections['q']['iteration'] <= $this->_sections['q']['total'];
                 $this->_sections['q']['index'] += $this->_sections['q']['step'], $this->_sections['q']['iteration']++):
$this->_sections['q']['rownum'] = $this->_sections['q']['iteration'];
$this->_sections['q']['index_prev'] = $this->_sections['q']['index'] - $this->_sections['q']['step'];
$this->_sections['q']['index_next'] = $this->_sections['q']['index'] + $this->_sections['q']['step'];
$this->_sections['q']['first']      = ($this->_sections['q']['iteration'] == 1);
$this->_sections['q']['last']       = ($this->_sections['q']['iteration'] == $this->_sections['q']['total']);
?>				
				<?php if ($this->_tpl_vars['umThrInfoCats'][$this->_sections['k']['index']][$this->_sections['p']['index']][$this->_sections['q']['index']] == ''): ?>
				<a href="catalog.php?infoscatid=<?php echo $this->_tpl_vars['umThrInfoCats'][$this->_sections['k']['index']][$this->_sections['p']['index']][$this->_sections['q']['index']]['cats_id']; ?>
"><?php echo $this->_tpl_vars['umThrInfoCats'][$this->_sections['k']['index']][$this->_sections['p']['index']][$this->_sections['q']['index']]['cats_na']; ?>
</a>
				<?php else: ?>
					<div class="open">
					<div>
					<?php unset($this->_sections['x']);
$this->_sections['x']['name'] = 'x';
$this->_sections['x']['loop'] = is_array($_loop=$this->_tpl_vars['umForeInfoCats'][$this->_sections['k']['index']][$this->_sections['p']['index']][$this->_sections['q']['index']]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['x']['show'] = true;
$this->_sections['x']['max'] = $this->_sections['x']['loop'];
$this->_sections['x']['step'] = 1;
$this->_sections['x']['start'] = $this->_sections['x']['step'] > 0 ? 0 : $this->_sections['x']['loop']-1;
if ($this->_sections['x']['show']) {
    $this->_sections['x']['total'] = $this->_sections['x']['loop'];
    if ($this->_sections['x']['total'] == 0)
        $this->_sections['x']['show'] = false;
} else
    $this->_sections['x']['total'] = 0;
if ($this->_sections['x']['show']):

            for ($this->_sections['x']['index'] = $this->_sections['x']['start'], $this->_sections['x']['iteration'] = 1;
                 $this->_sections['x']['iteration'] <= $this->_sections['x']['total'];
                 $this->_sections['x']['index'] += $this->_sections['x']['step'], $this->_sections['x']['iteration']++):
$this->_sections['x']['rownum'] = $this->_sections['x']['iteration'];
$this->_sections['x']['index_prev'] = $this->_sections['x']['index'] - $this->_sections['x']['step'];
$this->_sections['x']['index_next'] = $this->_sections['x']['index'] + $this->_sections['x']['step'];
$this->_sections['x']['first']      = ($this->_sections['x']['iteration'] == 1);
$this->_sections['x']['last']       = ($this->_sections['x']['iteration'] == $this->_sections['x']['total']);
?>
					<?php if ($this->_tpl_vars['umForeInfoCats'][$this->_sections['k']['index']][$this->_sections['p']['index']][$this->_sections['q']['index']][$this->_sections['x']['index']] == ''): ?>
					<a href="catalog.php?infoscatid=<?php echo $this->_tpl_vars['umForeInfoCats'][$this->_sections['k']['index']][$this->_sections['p']['index']][$this->_sections['q']['index']][$this->_sections['x']['index']]['cats_id']; ?>
"><?php echo $this->_tpl_vars['umForeInfoCats'][$this->_sections['k']['index']][$this->_sections['p']['index']][$this->_sections['q']['index']][$this->_sections['x']['index']]['cats_na']; ?>
</a>
					<?php else: ?>						
						<div class="open">
						<div>
						<?php unset($this->_sections['y']);
$this->_sections['y']['name'] = 'y';
$this->_sections['y']['loop'] = is_array($_loop=$this->_tpl_vars['umFiveInfoCats'][$this->_sections['k']['index']][$this->_sections['p']['index']][$this->_sections['q']['index']][$this->_sections['x']['index']]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['y']['show'] = true;
$this->_sections['y']['max'] = $this->_sections['y']['loop'];
$this->_sections['y']['step'] = 1;
$this->_sections['y']['start'] = $this->_sections['y']['step'] > 0 ? 0 : $this->_sections['y']['loop']-1;
if ($this->_sections['y']['show']) {
    $this->_sections['y']['total'] = $this->_sections['y']['loop'];
    if ($this->_sections['y']['total'] == 0)
        $this->_sections['y']['show'] = false;
} else
    $this->_sections['y']['total'] = 0;
if ($this->_sections['y']['show']):

            for ($this->_sections['y']['index'] = $this->_sections['y']['start'], $this->_sections['y']['iteration'] = 1;
                 $this->_sections['y']['iteration'] <= $this->_sections['y']['total'];
                 $this->_sections['y']['index'] += $this->_sections['y']['step'], $this->_sections['y']['iteration']++):
$this->_sections['y']['rownum'] = $this->_sections['y']['iteration'];
$this->_sections['y']['index_prev'] = $this->_sections['y']['index'] - $this->_sections['y']['step'];
$this->_sections['y']['index_next'] = $this->_sections['y']['index'] + $this->_sections['y']['step'];
$this->_sections['y']['first']      = ($this->_sections['y']['iteration'] == 1);
$this->_sections['y']['last']       = ($this->_sections['y']['iteration'] == $this->_sections['y']['total']);
?>							
							<a href="catalog.php?infoscatid=<?php echo $this->_tpl_vars['umFiveInfoCats'][$this->_sections['k']['index']][$this->_sections['p']['index']][$this->_sections['q']['index']][$this->_sections['x']['index']][$this->_sections['y']['index']]['cats_id']; ?>
"><?php echo $this->_tpl_vars['umFiveInfoCats'][$this->_sections['k']['index']][$this->_sections['p']['index']][$this->_sections['q']['index']][$this->_sections['x']['index']][$this->_sections['y']['index']]['cats_na']; ?>
</a>							
						<?php endfor; endif; ?>
						</div>
						<a href="catalog.php?infoscatid=<?php echo $this->_tpl_vars['umForeInfoCats'][$this->_sections['k']['index']][$this->_sections['p']['index']][$this->_sections['q']['index']][$this->_sections['x']['index']]['cats_id']; ?>
"><?php echo $this->_tpl_vars['umForeInfoCats'][$this->_sections['k']['index']][$this->_sections['p']['index']][$this->_sections['q']['index']][$this->_sections['x']['index']]['cats_na']; ?>
</a>
					</div>
					<?php endif; ?>
					<?php endfor; endif; ?>
					</div>
					<a href="catalog.php?infoscatid=<?php echo $this->_tpl_vars['umThrInfoCats'][$this->_sections['k']['index']][$this->_sections['p']['index']][$this->_sections['q']['index']]['cats_id']; ?>
"><?php echo $this->_tpl_vars['umThrInfoCats'][$this->_sections['k']['index']][$this->_sections['p']['index']][$this->_sections['q']['index']]['cats_na']; ?>
</a>
					</div>
				<?php endif; ?>
				<?php endfor; endif; ?>
			</div>
			<a href="catalog.php?infoscatid=<?php echo $this->_tpl_vars['umSecInfoCats'][$this->_sections['k']['index']][$this->_sections['p']['index']]['cats_id']; ?>
"><?php echo $this->_tpl_vars['umSecInfoCats'][$this->_sections['k']['index']][$this->_sections['p']['index']]['cats_na']; ?>
</a>
			</div>
			<?php endif; ?>
		<?php endfor; endif; ?>
		</div>        
		<a href="catalog.php?infoscatid=<?php echo $this->_tpl_vars['umMaininfoCats'][$this->_sections['k']['index']]['cats_id']; ?>
"><?php echo $this->_tpl_vars['umMaininfoCats'][$this->_sections['k']['index']]['cats_na']; ?>
</a>
		</div>
    <?php endif; ?>
<?php endfor; endif; ?>
</div>