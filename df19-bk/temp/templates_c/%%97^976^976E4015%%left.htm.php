<?php /* Smarty version 2.6.26, created on 2012-07-09 15:58:38
         compiled from left.htm */ ?>
<html>
<head>
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style1.css" rel="stylesheet" type="text/css">
<title></title>
</head>
<!-- /*
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	left.php	ezportal後台左方選單
	│	開發者		│	玉玲
	│	版本		│	v1.0.0.0071301
	├=======================================================================================┤
	│	1.	v1.0.1.0071301	2010/07/13	廷俊	後台左方選單無編碼UTF-8
	│	2.	v1.0.1.0090101	2010/09/01	廷俊	adminsuper更改為superadmin
	│	3.	v1.0.1.0090301	2010/09/03	廷俊	a.debug功能清單的資訊狀態無動作
	│											b.debug功能分類的資訊狀態無動作(未完成)
	│	4.	v1.0.1.0101101	2010/10/11	廷俊	左方選單裡的功能分類、功能清單，只限superadmin可顯示並使用
	│	5.	v2.0.0.0101901	2010/10/19	廷俊	a.DEBUG SESSION可跨後台問題
	│											b.以路徑驗證SEEION，編譯後無法使用
	│											c.重新測試其他方法驗證SESSION
	│	6.	v2.0.0.0110901	2010/11/09	廷俊	取得檔案目前目錄，供SESSION驗證並取值用
	│	7.	v2.0.1.0111601	2010/11/16	廷俊	debug左方選單權限出現問題
	│	8.	v2.0.1.0111901	2010/11/19	廷俊	debug左方選單權限出現問題，先判斷標籤是否存在，再執行
	│	9.	v2.0.8.1010601	2011/01/06	廷俊	修正版面排版
	│	10.	v2.0.8.1011101	2011/01/11	廷俊	a.將左方選單加入smarty功能
	│											b.新增\hmanager\themes\default\left.htm，為左方選單smarty的html引入頁
	└=======================================================================================┘
*/ -->
<SCRIPT language="JavaScript" type="text/JavaScript">
<!--
var currentMenu = 1;
<?php echo '
function ShowSubMenu(id) {
	if (document.all["SubMenu" + id].style.display == ""){
		document.all["SubMenu" + id].style.display = "none";
		currentMenu = 0;
	} else {
		 if (currentMenu != 0) {
			if(document.all["SubMenu" + currentMenu]){
				document.all["SubMenu" + currentMenu].style.display = "none";
			}
		 }  
		 document.all["SubMenu" + id].style.display = "";
		 currentMenu = id;
	}
}
'; ?>

-->
</SCRIPT>
<!--
	2010-06-08 edit by 廷俊
	------------------------------------------------------
	無序號者鎖所有功能
	----------------------------------------------------	
-->

<div id="left_menu" <?php echo $this->_tpl_vars['dis']; ?>
>

<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['funclist']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<!--	
	2010-09-03 edit by 廷俊
	------------------------------------------------------
	a.debug功能清單的資訊狀態無動作
	b.debug功能分類的資訊狀態無動作(未完成)
	------------------------------------------------------		
-->
	<div onclick="JavaScript:ShowSubMenu(<?php echo $this->_tpl_vars['funclist'][$this->_sections['i']['index']]['func_id']; ?>
)">
		<div id="menu_url_title">
			<img src="images/next.gif" width="30" height="30" align="absmiddle" />
			<?php echo $this->_tpl_vars['funclist'][$this->_sections['i']['index']]['func_na']; ?>

		</div>
	</div>	
	<div class="menu_url_link">
		<table id="tblist<?php echo $this->_tpl_vars['funclist'][$this->_sections['i']['index']]['func_id']; ?>
" width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
			<tr>
				<td class="menu_url">
					<div id="SubMenu<?php echo $this->_tpl_vars['funclist'][$this->_sections['i']['index']]['func_id']; ?>
" style="display:none">	
						<ul>
						<?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['funclist'][$this->_sections['i']['index']]['func_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<li>
								<a href="<?php echo $this->_tpl_vars['funclist'][$this->_sections['i']['index']]['func_list'][$this->_sections['j']['index']]['list_url']; ?>
" target="mainframe">
									<?php echo $this->_tpl_vars['funclist'][$this->_sections['i']['index']]['func_list'][$this->_sections['j']['index']]['list_na']; ?>

								</a>
							</li>
						<?php endfor; endif; ?>	
						</ul>
					</div>
				</td>
			</tr>
		</table>
	</div>
<?php endfor; endif; ?>
</div>
</html>