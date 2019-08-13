<?php /* Smarty version 2.6.26, created on 2012-07-09 16:04:03
         compiled from modules/pages.tpl.htm */ ?>
<?php if ($this->_tpl_vars['recordcount'] > 0): ?>
<div class="pagination badoo">
<ul>
<?php if ($this->_tpl_vars['nowPage'] == 1): ?>
<li class="disabled"><?php echo $this->_tpl_vars['firstpage']; ?>
</li>
<?php else: ?>
<li><a href="?<?php echo $this->_tpl_vars['PageUrl']; ?>
&page=1"><?php echo $this->_tpl_vars['firstpage']; ?>
</a></li>
<?php endif; ?>

<?php if ($this->_tpl_vars['prePage'] != 0): ?>
<li><a href="?<?php echo $this->_tpl_vars['PageUrl']; ?>
&page=<?php echo $this->_tpl_vars['prePage']; ?>
"><?php echo $this->_tpl_vars['upperpage']; ?>
</a></li>
<?php else: ?>
<li class="disabled"><?php echo $this->_tpl_vars['upperpage']; ?>
</li>
<?php endif; ?>

<?php $_from = $this->_tpl_vars['pagesList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
<?php if ($this->_tpl_vars['nowPage'] == $this->_tpl_vars['i']): ?>
<li class="current"><?php echo $this->_tpl_vars['i']; ?>
</li>
<?php else: ?>
<li><a href="?<?php echo $this->_tpl_vars['PageUrl']; ?>
&page=<?php echo $this->_tpl_vars['i']; ?>
"><?php echo $this->_tpl_vars['i']; ?>
</a></li>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>

<?php if ($this->_tpl_vars['nextPage'] != 0): ?>
<li><a href="?<?php echo $this->_tpl_vars['PageUrl']; ?>
&page=<?php echo $this->_tpl_vars['nextPage']; ?>
"><?php echo $this->_tpl_vars['nextpage']; ?>
</a></li>
<?php else: ?>
<li class="disabled"><?php echo $this->_tpl_vars['nextpage']; ?>
</li>
<?php endif; ?>

<?php if ($this->_tpl_vars['nowPage'] == $this->_tpl_vars['PagesCount']): ?>
<li class="disabled"><?php echo $this->_tpl_vars['lastpage']; ?>
</li>
<?php else: ?>
<li><a href="?<?php echo $this->_tpl_vars['PageUrl']; ?>
&page=<?php echo $this->_tpl_vars['PagesCount']; ?>
"><?php echo $this->_tpl_vars['lastpage']; ?>
</a></li>
<?php endif; ?>
</ul>
</div>
<?php endif; ?>