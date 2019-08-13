<?php /* Smarty version 2.6.26, created on 2012-07-09 15:59:31
         compiled from modules/catalog_list.tpl.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'modules/catalog_list.tpl.htm', 71, false),)), $this); ?>
<?php if ($this->_tpl_vars['infocat_show_reccord'] > 0): ?>

<table width="100%" id="catalog_list_table" align="left" border="0" cellpadding="0" cellspacing="0">
  <!--
  <tr>
    <td class="catalog_list_title" align="left" valign="middle">
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
    </td>
  </tr>
  -->
	<tr>
		<td align="left" valign="top">
<!--	
	2010-09-07 edit by 廷俊
	----------------------------------------------------
	a.售價顯示
	b.顯示會員價=售價*會員折扣*商品折扣
	c.顯示購物車(庫存>安全庫存and售價>0)
	d.顯示需求單(售價=0)
	e.到達需求標準(庫存<=安全庫存)時，顯示需求單or無庫存
	f.更改商品明細的連結
	----------------------------------------------------
	2010-09-17 edit by 廷俊
	----------------------------------------------------
	資訊列表圖文顯示與列表顯示，重新排版，無資料者空白
	----------------------------------------------------
	2010-09-20 edit by 廷俊
	----------------------------------------------------
	判斷明細為資訊，則不顯示優惠價格與操作；明細為商品，則顯示優惠價格與操作
	----------------------------------------------------
	2010-12-02 edit by 廷俊
	----------------------------------------------------
	1.明細列表顯示方式，新增圖片顯示
	2.調整版面
	3.一列顯示三筆明細資料
	4.更改CSS樣式，調整顯示明細的寬度設定
	----------------------------------------------------
	2010-12-16 edit by 廷俊
	----------------------------------------------------
	1.修正前台分類內頁的明細三種列表方式的版面配置
	2.判斷資訊(商品)顯示設定：明細列表顯示設定->簡單說明，設定簡單說明的標題與內容
	3.若明細列表顯示設定->圖片顯示方式時，則起用明細列表顯示設定->每列筆數
	4.依圖片顯示方式的每列筆數，來設定明細的寬度
	5.依圖片顯示方式的每列筆數，來設定明細每列的明細筆數，筆數超過即換列
	6.判斷最後一列的剩餘明細筆數，來設定需要補齊多少空白欄位
	----------------------------------------------------
	2011-02-10 edit by 廷俊
	------------------------------------------------------
	1.顯示幣別
	2.修正版面配置
	------------------------------------------------------		
	2011-07-26 edit by 玉玲
	------------------------------------------------------
	1.資訊商品明細列表的標題改為使用者自訂與判斷是否顯示
	------------------------------------------------------				
*/	-->  		
			<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" class="catalog_list_content"　border="0">

			<!--圖片顯示-->
			<?php if ($this->_tpl_vars['infocat_show_type'] == image): ?>
				<tr>	
				<?php unset($this->_sections['x']);
$this->_sections['x']['name'] = 'x';
$this->_sections['x']['loop'] = is_array($_loop=$this->_tpl_vars['umCatInfoList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
					<?php echo smarty_function_math(array('equation' => "100/w",'w' => $this->_tpl_vars['PerPageRow'],'assign' => 'width'), $this);?>
				
					<td align="center" valign="top" width="<?php echo $this->_tpl_vars['width']; ?>
%">
						<table border="0" cellpadding="0" cellspacing="0" width="100%">
							<tr>
								<td align="left" class="show_list_text">
									<a href="<?php echo $this->_tpl_vars['umCatInfoList'][$this->_sections['x']['index']]['href']; ?>
" target="_self"><b><?php echo $this->_tpl_vars['umCatInfoList'][$this->_sections['x']['index']]['infos_na']; ?>
</b></a>
								</td>
							</tr>
							<tr>
								<td align="center">
									<a href="<?php echo $this->_tpl_vars['umCatInfoList'][$this->_sections['x']['index']]['href']; ?>
" target="_self"><?php echo $this->_tpl_vars['umCatInfoList'][$this->_sections['x']['index']]['smallpic']; ?>
</a>
								</td>
							</tr>
							<?php if ($this->_tpl_vars['cats_type'] == 1): ?>
								<tr>
									<td align="right">
										<?php echo $this->_tpl_vars['umCatInfoList'][$this->_sections['x']['index']]['price_fix']; ?>

										<?php echo $this->_tpl_vars['umCatInfoList'][$this->_sections['x']['index']]['price_sale']; ?>

										<?php echo $this->_tpl_vars['umCatInfoList'][$this->_sections['x']['index']]['member_price']; ?>

									</td>
								</tr>
								<tr>
									<td align="right">
										<?php echo $this->_tpl_vars['umCatInfoList'][$this->_sections['x']['index']]['Shopping']; ?>

									</td>
								</tr>
							<?php endif; ?>
							<?php if ($this->_tpl_vars['infocat_show_simple'] == 1): ?>
								<tr>
									<td align="left">
										<a href="<?php echo $this->_tpl_vars['umCatInfoList'][$this->_sections['x']['index']]['href']; ?>
" target="_self"><?php echo $this->_tpl_vars['umCatInfoList'][$this->_sections['x']['index']]['infos_simple_text1']; ?>
</a>
									</td>
								</tr>
							<?php endif; ?>
						</table>	
					</td>
					<?php echo smarty_function_math(array('equation' => "m%w",'m' => $this->_sections['x']['rownum'],'w' => $this->_tpl_vars['PerPageRow'],'assign' => 'line'), $this);?>

					<?php if ($this->_tpl_vars['line'] == 0): ?></tr><tr><?php endif; ?>
				<?php endfor; endif; ?>
					<?php echo smarty_function_math(array('equation' => "w-l",'w' => $this->_tpl_vars['PerPageRow'],'l' => $this->_tpl_vars['line'],'assign' => 'nbsp'), $this);?>

					<?php if ($this->_tpl_vars['line'] != 0): ?><td colspan="<?php echo $this->_tpl_vars['nbsp']; ?>
">&nbsp;</td><?php endif; ?>
				</tr>

			<!--圖文顯示-->
			<?php elseif ($this->_tpl_vars['infocat_show_type'] == photo): ?>
				<tr>
					<td align="center" class="catalog_list" width="15%"><?php echo $this->_tpl_vars['Pictures']; ?>
</td>
					<td align="center" class="catalog_list" width=""><?php echo $this->_tpl_vars['Title']; ?>
</td>
					<?php if ($this->_tpl_vars['cats_type'] == 1): ?>
						<td align="center" class="catalog_list" width="25%"><?php echo $this->_tpl_vars['Price']; ?>
</td>
						<td align="center" class="catalog_list" width="15%"><?php echo $this->_tpl_vars['Operation']; ?>
</td>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['infocat_show_simple'] == 1): ?>
						<td align="center" class="catalog_list" width=""><?php echo $this->_tpl_vars['Briefly']; ?>
</td>
					<?php endif; ?>
				</tr>
				<?php unset($this->_sections['x']);
$this->_sections['x']['name'] = 'x';
$this->_sections['x']['loop'] = is_array($_loop=$this->_tpl_vars['umCatInfoList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<tr>
					<td align="left" class="catalog_list">
						<a href="<?php echo $this->_tpl_vars['umCatInfoList'][$this->_sections['x']['index']]['href']; ?>
" target="_self"><?php echo $this->_tpl_vars['umCatInfoList'][$this->_sections['x']['index']]['smallpic']; ?>
</a>
					</td>
					<td align="left" class="catalog_list">
						<a href="<?php echo $this->_tpl_vars['umCatInfoList'][$this->_sections['x']['index']]['href']; ?>
" target="_self"><b><?php echo $this->_tpl_vars['umCatInfoList'][$this->_sections['x']['index']]['infos_na']; ?>
</b></a><br>
					</td>
					<?php if ($this->_tpl_vars['cats_type'] == 1): ?>
						<td align="left" class="catalog_list">
							<?php echo $this->_tpl_vars['umCatInfoList'][$this->_sections['x']['index']]['price_fix']; ?>

							<?php echo $this->_tpl_vars['umCatInfoList'][$this->_sections['x']['index']]['price_sale']; ?>

							<?php echo $this->_tpl_vars['umCatInfoList'][$this->_sections['x']['index']]['member_price']; ?>

						</td>
						<td align="center" class="catalog_list">
							<?php echo $this->_tpl_vars['umCatInfoList'][$this->_sections['x']['index']]['Shopping']; ?>

						</td>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['infocat_show_simple'] == 1): ?>
						<td align="left" class="catalog_list">
							<a href="<?php echo $this->_tpl_vars['umCatInfoList'][$this->_sections['x']['index']]['href']; ?>
" target="_self"><?php echo $this->_tpl_vars['umCatInfoList'][$this->_sections['x']['index']]['infos_simple_text1']; ?>
</a>
						</td>	
					<?php endif; ?>
				</tr>
				<?php endfor; endif; ?>  
			
			<!--文字顯示-->
			<?php elseif ($this->_tpl_vars['infocat_show_type'] == text): ?>		
				<?php if ($this->_tpl_vars['title_type'] == 0): ?>
				<tr>		
					<?php if ($this->_tpl_vars['title_used1'] == 1): ?><td align="center" class="catalog_list" width="30"><?php echo $this->_tpl_vars['No']; ?>
</td><?php endif; ?>
					<?php if ($this->_tpl_vars['title_used2'] == 1): ?><td align="center" class="catalog_list" width=""><?php echo $this->_tpl_vars['Title']; ?>
</td><?php endif; ?>
					<?php if ($this->_tpl_vars['cats_type'] == 1): ?>
						<?php if ($this->_tpl_vars['title_used4'] == 1): ?><td align="center" class="catalog_list" width="20%"><?php echo $this->_tpl_vars['Price']; ?>
</td><?php endif; ?>
						<?php if ($this->_tpl_vars['title_used5'] == 1): ?><td align="center" class="catalog_list" width="15%"><?php echo $this->_tpl_vars['Operation']; ?>
</td><?php endif; ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['infocat_show_simple'] == 1): ?>
						<?php if ($this->_tpl_vars['title_used3'] == 1): ?><td align="center" class="catalog_list" width=""><?php echo $this->_tpl_vars['Briefly']; ?>
</td><?php endif; ?>
					<?php endif; ?>
				</tr> 
				<?php else: ?>
				<tr>							
					<?php if ($this->_tpl_vars['title_used1'] == 1): ?><td align="center" class="catalog_list" width="30"><?php echo $this->_tpl_vars['title_list1']; ?>
</td><?php endif; ?>
					<?php if ($this->_tpl_vars['title_used2'] == 1): ?><td align="center" class="catalog_list"><?php echo $this->_tpl_vars['title_list2']; ?>
</td><?php endif; ?>
					<?php if ($this->_tpl_vars['cats_type'] == 1): ?>
						<?php if ($this->_tpl_vars['title_used4'] == 1): ?><td align="center" class="catalog_list" width="20%"><?php echo $this->_tpl_vars['title_list4']; ?>
</td><?php endif; ?>
						<?php if ($this->_tpl_vars['title_used5'] == 1): ?><td align="center" class="catalog_list" width="15%"><?php echo $this->_tpl_vars['title_list5']; ?>
</td><?php endif; ?>						
					<?php endif; ?>
					<?php if ($this->_tpl_vars['infocat_show_simple'] == 1): ?>
						<?php if ($this->_tpl_vars['title_used3'] == 1): ?><td align="center" class="catalog_list"><?php echo $this->_tpl_vars['title_list3']; ?>
</td><?php endif; ?>
					<?php endif; ?>
				</tr>
				<?php endif; ?>
				<?php unset($this->_sections['x']);
$this->_sections['x']['name'] = 'x';
$this->_sections['x']['loop'] = is_array($_loop=$this->_tpl_vars['umCatInfoList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<tr>
					<?php if ($this->_tpl_vars['title_used1'] == 1): ?>
					<td align="center" class="catalog_list" valign="middle">
						<?php echo smarty_function_math(array('equation' => 'x','x' => $this->_sections['x']['rownum']), $this);?>

					</td>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['title_used2'] == 1): ?>
					<td align="left" class="catalog_list">
						<a href="<?php echo $this->_tpl_vars['umCatInfoList'][$this->_sections['x']['index']]['href']; ?>
" target="_self"><?php echo $this->_tpl_vars['umCatInfoList'][$this->_sections['x']['index']]['infos_na']; ?>
</a><br>
					</td>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['cats_type'] == 1): ?>
						<?php if ($this->_tpl_vars['title_used4'] == 1): ?>
						<td align="left" class="catalog_list">
							<?php echo $this->_tpl_vars['umCatInfoList'][$this->_sections['x']['index']]['price_fix']; ?>

							<?php echo $this->_tpl_vars['umCatInfoList'][$this->_sections['x']['index']]['price_sale']; ?>

							<?php echo $this->_tpl_vars['umCatInfoList'][$this->_sections['x']['index']]['member_price']; ?>

						</td>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['title_used5'] == 1): ?>
						<td align="center" class="catalog_list">
							<?php echo $this->_tpl_vars['umCatInfoList'][$this->_sections['x']['index']]['Shopping']; ?>

						</td>
						<?php endif; ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['infocat_show_simple'] == 1): ?>
						<?php if ($this->_tpl_vars['title_used3'] == 1): ?>
						<td align="left" class="catalog_list">
							<a href="<?php echo $this->_tpl_vars['umCatInfoList'][$this->_sections['x']['index']]['href']; ?>
" target="_self"><?php echo $this->_tpl_vars['umCatInfoList'][$this->_sections['x']['index']]['infos_simple_text1']; ?>
</a><br>
						</td>
						<?php endif; ?>
					<?php endif; ?>
				</tr>	
				<?php endfor; endif; ?>  
			<?php endif; ?>
			</table>
			
			<!--分頁模組-->
			<?php if ($this->_tpl_vars['umPage'] == 1): ?>			
			<div class="pagination badoo" align="center">
				<ul>
					<?php unset($this->_sections['y']);
$this->_sections['y']['name'] = 'y';
$this->_sections['y']['loop'] = is_array($_loop=$this->_tpl_vars['umInfoPage']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<?php if ($this->_tpl_vars['umInfoPage'][$this->_sections['y']['index']]['Page_No'] == $this->_tpl_vars['infocat_page_now']): ?>
							<li class="current"><?php echo $this->_tpl_vars['umInfoPage'][$this->_sections['y']['index']]['Page_No']; ?>
</li>
						<?php else: ?>
							<li><a href="<?php echo $this->_tpl_vars['umInfoPage'][$this->_sections['y']['index']]['Page_Link']; ?>
"><?php echo $this->_tpl_vars['umInfoPage'][$this->_sections['y']['index']]['Page_No']; ?>
</a></li>
						<?php endif; ?>
					<?php endfor; endif; ?>
				</ul>
			</div>
			<?php endif; ?>
		</td>
	</tr>
</table>
<?php endif; ?>