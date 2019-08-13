<?php /* Smarty version 2.6.26, created on 2012-07-09 16:11:55
         compiled from modules/catalog_content.tpl.htm */ ?>
<!--標題-->
<table width="100%" valign="top" border="0" cellpadding="2" cellspacing="2"> 	
	<tr>
		<td class="catalog_content_title" align="left" valign="middle"><img src="themes/<?php echo $this->_tpl_vars['themes_na']; ?>
/images/catalog.gif" align="absmiddle"><?php echo $this->_tpl_vars['infos_na']; ?>
</td>
	</tr>
</table>

<!--內容STAR-->
<table width="100%" valign="top" border="0" cellpadding="2" cellspacing="2" class="catalog_content_table">
		
	<!--資訊-->
	<?php if ($this->_tpl_vars['type'] == 0): ?>
		<!--圖置上-->
		<?php if ($this->_tpl_vars['infodetail_display_type'] == 'imageup'): ?>
			<?php if ($this->_tpl_vars['infos_pic_big'] != ''): ?>
			<tr>
				<td align="center" valign="middle" class="catalog_content_img"><?php echo $this->_tpl_vars['infos_pic_big']; ?>
</td>
			</tr>
			<?php endif; ?>
			<tr>
				<td valign="middle"><?php echo $this->_tpl_vars['infos_detail_text']; ?>
</td>
			</tr>
		  
		<!--文繞圖：圖置左-->  
		<?php elseif ($this->_tpl_vars['infodetail_display_type'] == 'imageleft'): ?>  
		  <tr>
			<td valign="middle" rowspan="2">
				<table border="0">
				<tr>
					<td>				
						<?php echo $this->_tpl_vars['infos_pic_big']; ?>
<?php echo $this->_tpl_vars['infos_detail_text']; ?>

					</td>
				</tr>
				</table>
			</td>
		  </tr>
		  
		<!--文繞圖：圖置右-->
		<?php elseif ($this->_tpl_vars['infodetail_display_type'] == 'imageright'): ?>   
		  <tr>
			<td valign="middle">
				<table border="0">
				<tr>
					<td>				
						<?php echo $this->_tpl_vars['infos_pic_big']; ?>
<?php echo $this->_tpl_vars['infos_detail_text']; ?>

					</td>
				</tr>
				</table>
			</td>
		  </tr>
		<?php endif; ?>
		
	<!--商品-->	
	<?php else: ?>
<!-- 
	2010-09-07 edit by 廷俊
	----------------------------------------------------
	a.售價顯示
	b.顯示會員價=售價*會員折扣*商品折扣
	c.顯示購物車(庫存>安全庫存and售價>0)
	d.顯示需求單(售價=0)
	e.到達需求標準(庫存<=安全庫存)時，顯示需求單or無庫存	
	----------------------------------------------------
	2010-09-17 edit by 廷俊
	----------------------------------------------------
	1.售價、會員價二擇一出現
	2.會員價=0 or 售價=0，則不顯示售價以及會員價
	3.明細大圖框架靠左，標題、價錢、簡單介紹的框架靠右
	4.所有框架要有標題且明確
	5.資訊分頁不顯示大圖，商品分頁則顯示大圖與價錢
	6.分頁頁碼往上移
	----------------------------------------------------
	2010-12-02 edit by 廷俊
	----------------------------------------------------
	若商品定價=0，則前台不顯示定價
	----------------------------------------------------
	2010-12-10 edit by 廷俊
	----------------------------------------------------
	修正中間欄位區域的table標籤少了tr、td，造成右欄區域跑版的問題
	----------------------------------------------------
	2011-02-10 edit by 廷俊
	------------------------------------------------------
	顯示幣別
	------------------------------------------------------		
*/	-->
	<tr>
		<td valign="middle">
		<table width="100%" border="0" valign="top" cellpadding="2" cellspacing="2">
			<tr>
				<!--商品大圖-->	
				<td align="center" valign="middle" width="50%">
					<?php echo $this->_tpl_vars['infos_pic_big']; ?>

				</td>
				<td valign="bottom" class="product_price_title" width="50%">
					<!--標題-->	
					<font size="4"><img src="themes/<?php echo $this->_tpl_vars['themes_na']; ?>
/images/sale_title.gif" width="15px" height="15px">&nbsp;&nbsp;<?php echo $this->_tpl_vars['infos_na']; ?>
</font><br><br>
					<div align="right">
					<!--定價-->	
					<?php if ($this->_tpl_vars['price_fix'] != 0): ?>
							<div id="aaa"></div>
							<img src="themes/<?php echo $this->_tpl_vars['themes_na']; ?>
/images/sale_left.png" width="8px" height="8px">
							<?php echo $this->_tpl_vars['Selling_fix']; ?>

							<img src="themes/<?php echo $this->_tpl_vars['themes_na']; ?>
/images/sale_right.png" width="8px" height="8px">
							<?php echo $this->_tpl_vars['currency']; ?>
<?php echo $this->_tpl_vars['price_fix']; ?>
<?php echo $this->_tpl_vars['Dollar']; ?>

					<?php endif; ?>
					<!--售價-->	
					<?php if ($this->_tpl_vars['price_sale'] != ''): ?>
							<div id="aaa"></div>
							<img src="themes/<?php echo $this->_tpl_vars['themes_na']; ?>
/images/sale_left.png" width="8px" height="8px">
							<?php echo $this->_tpl_vars['Selling_price']; ?>

							<img src="themes/<?php echo $this->_tpl_vars['themes_na']; ?>
/images/sale_right.png" width="8px" height="8px">
							<?php echo $this->_tpl_vars['currency']; ?>
<?php echo $this->_tpl_vars['price_sale']; ?>
<?php echo $this->_tpl_vars['Dollar']; ?>

					<?php endif; ?>
					<!--會員價-->	
					<?php if ($this->_tpl_vars['member_price'] != ''): ?>
							<div id="aaa"></div>
							<img src="themes/<?php echo $this->_tpl_vars['themes_na']; ?>
/images/sale_left.png" width="8px" height="8px">
							<?php echo $this->_tpl_vars['Member_price']; ?>

							<img src="themes/<?php echo $this->_tpl_vars['themes_na']; ?>
/images/sale_right.png" width="8px" height="8px"> 
							<?php echo $this->_tpl_vars['currency']; ?>
<font color="red"><?php echo $this->_tpl_vars['member_price']; ?>
</font><?php echo $this->_tpl_vars['Dollar']; ?>

					<?php endif; ?>
					<!--購物車or需求單-->
					<div id="aaa"></div>
					<br><?php echo $this->_tpl_vars['Shopping']; ?>
<br>
					</div>
					<div id="aaa"></div>
					<!--簡單說明-->
					<?php echo $this->_tpl_vars['infos_simple_text']; ?>

					<div id="aaa"></div>
				</td>
			</tr>
		</table>
		</td>
	</tr>	
	<tr>
		<td>
			<!--詳細說明-->
			<table width="100%" border="0" valign="top" cellpadding="2" cellspacing="2" class="catalog_detail_content_table">
				<tr>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td><?php echo $this->_tpl_vars['infos_detail_text']; ?>
</td>
				</tr>
			</table>
		</td>
	</tr>
	<?php endif; ?>
	
	<tr>
		<td valign="top">
			<!--資訊分頁-->
			<?php if ($this->_tpl_vars['infospages'] == 1): ?>
				<div class="pagination badoo" align="center">
				<ul>
				<?php unset($this->_sections['p']);
$this->_sections['p']['name'] = 'p';
$this->_sections['p']['loop'] = is_array($_loop=$this->_tpl_vars['uminfospages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
					<?php if ($this->_tpl_vars['nowPage'] == $this->_tpl_vars['uminfospages'][$this->_sections['p']['index']]['page_id']): ?>
						<li class="current"><?php echo $this->_tpl_vars['uminfospages'][$this->_sections['p']['index']]['page_na']; ?>
</li>
					<?php else: ?>
						<li><a href="?<?php echo $this->_tpl_vars['PageUrl']; ?>
&ifpg=<?php echo $this->_tpl_vars['uminfospages'][$this->_sections['p']['index']]['page_id']; ?>
"><?php echo $this->_tpl_vars['uminfospages'][$this->_sections['p']['index']]['page_na']; ?>
</a></li>
					<?php endif; ?>
				<?php endfor; endif; ?>
				</ul>
				</div>
			<?php endif; ?>
		</td>
	</tr>	
	
</table>

<!--檔案下載-->
<table width="100%" border="0" valign="top" cellpadding="2" cellspacing="2" class="catalog_content_table">
	<?php if ($this->_tpl_vars['filedownload'] == 1): ?>
	<tr>
		<td valign="middle">
		<p class="catalog_like_title1"><img src="themes/<?php echo $this->_tpl_vars['themes_na']; ?>
/images/download.gif" border="0" align="absmiddle" /></p>
			<table width="80%" align="left" border="0" cellpadding="2" cellspacing="2">			
			<?php unset($this->_sections['p']);
$this->_sections['p']['name'] = 'p';
$this->_sections['p']['loop'] = is_array($_loop=$this->_tpl_vars['uminfosfiles']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<tr class="catalog_download">
					<th height="30" align="center" valign="middle"><?php echo $this->_tpl_vars['uminfosfiles'][$this->_sections['p']['index']]['files_na']; ?>
</th>
					<td height="30" align="center" valign="middle"><?php echo $this->_tpl_vars['uminfosfiles'][$this->_sections['p']['index']]['files_text']; ?>
</td>
					<td height="30" align="center" valign="middle"><a href="<?php echo $this->_tpl_vars['uminfosfiles'][$this->_sections['p']['index']]['files_url']; ?>
"><?php echo $this->_tpl_vars['infos_file_download']; ?>
</a></td>
				</tr>
			<?php endfor; endif; ?>
			</table>
		</td>
	</tr>
	<?php endif; ?>
</table>

<!--相關資訊-->
<table width="100%" border="0" cellpadding="2" cellspacing="2" class="catalog_content_table">
	<?php if ($this->_tpl_vars['infosother'] == 1): ?>
	  <tr>
		<td valign="middle">		
		<p class="catalog_like_title1">
		<img src="themes/<?php echo $this->_tpl_vars['themes_na']; ?>
/images/catalog_like.gif" border="0" align="absmiddle" /></p>
		  <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['uminfosother']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		  <table width="100%" align="left" border="0" cellpadding="2" cellspacing="2" class="catalog_like">
			<tr>
			  <td rowspan="2" width="20%" align="center" valign="middle" class="catalog_like_img">
				<a href="<?php echo $this->_tpl_vars['uminfosother'][$this->_sections['k']['index']]['href']; ?>
"><?php echo $this->_tpl_vars['uminfosother'][$this->_sections['k']['index']]['infos_pic_small']; ?>
</a>
			  </td>
			  <td align="left" valign="top" class="catalog_like_title2">
				<a href="<?php echo $this->_tpl_vars['uminfosother'][$this->_sections['k']['index']]['href']; ?>
"><?php echo $this->_tpl_vars['uminfosother'][$this->_sections['k']['index']]['infos_na']; ?>
</a>
			  </td>
			</tr>
			<tr>
			  <td align="left" valign="top"  class="catalog_like_ps">
				<a href="<?php echo $this->_tpl_vars['uminfosother'][$this->_sections['k']['index']]['href']; ?>
"><?php echo $this->_tpl_vars['uminfosother'][$this->_sections['k']['index']]['infos_simple_text1']; ?>
</a>
			  </td>
			</tr>
		  </table>
		  <?php endfor; endif; ?>      
		</td>
	  </tr>
	<?php endif; ?>
</table>
<!--內容END-->