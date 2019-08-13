<?php /* Smarty version 2.6.26, created on 2012-07-09 15:58:35
         compiled from tabbed.htm */ ?>
<html>
<head>
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="js/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="css/style1.css" rel="stylesheet" type="text/css" />
<!-- /*
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	tabbed.htm	後台首頁-語言別頁籤
	│	開發者		│	廷俊
	│	版本		│	v2.0.8.1010601
	├=======================================================================================┤
	│	1.	v2.0.8.1010601	2011/01/06	廷俊	1.新增語言別頁籤切換頁
	│											2.頁籤內使用iframe內嵌式視窗顯示主畫面
	│	2.	v2.0.8.1011001	2011/01/10	廷俊	a.新增語言別驗證模組
	│											b.修正測試版、正式版首頁顯示的內容差異
	│											c.將整個視窗(left+main)都加入語言別頁籤底下
	│											d.所有語言別頁籤嵌iframe
	│											e.點選語言別頁籤時，觸發iframe的連結帶GET值給子視窗，告之所在語言
	│											f.判斷子視窗點選菜單時，觸發語言別驗證模組，使語言別頁籤判斷是否有該語言與該權限，否則disabled
	│	3.	v2.0.8.1011101	2011/01/11	廷俊	a.語言別頁籤切換頁網址傳get值，至子畫面的主畫面切割顯示頁
	│											b.點選語言別標籤時，呼叫副程式，將語言別id存入session
	│											c.新增一個隱藏的iframe，將語言別id導入後端執行入session
	│											d.session的語言別id，預設載入為第一個顯示的語言別id
	│	4.	v2.0.8.1011801	2011/01/18	廷俊	因下方bottom放入語言頁籤內，則需調整語言頁籤的版面配置
	│	5.	v03.00.01.1031801	2011/03/30	廷俊	1.若ezportal為有效的登入帳號，則取得經銷商專區的語言別設定
	│												2.語言別頁籤只顯示經銷商專區中，語言別頁籤顯示設定的項目
	│												3.若有經銷商專區的語言別設定，則驗證該語言是否有開放語言別頁籤顯示設定
	│												4.若有設定顯示，序號卻未開通的語言別，頁籤以灰階處理
	│	6.	v03.00.08.1060201	2011/06/08	廷俊	設定主視窗中iframe的高度，為螢幕解析度的視窗高度-288
	└=======================================================================================┘
*/ -->
<title></title>
</head>
<script type="text/javascript">
<!--
<?php echo '
/* 
	2011-01-11 edit by 廷俊
	------------------------------------------------------
	1.點選語言別標籤時，呼叫副程式，將語言別id存入session
	2.新增一個隱藏的iframe，將語言別id導入後端執行入session
	------------------------------------------------------
*/
//點選語言別標籤時，呼叫副程式，將語言別id存入session
function lang_session(lang_id){
	document.getElementById("ifm").src="mem_chk.php?act=lang_session&lang_id=" + lang_id;
}
'; ?>

//-->
</script>
<!-- /* 
	2011-01-11 edit by 廷俊
	------------------------------------------------------
	點選語言別標籤時，呼叫副程式，將語言別id存入session
	------------------------------------------------------
*/ -->
	<!-- 頁籤起 -->
	<div id="TabbedPanels1" class="TabbedPanels">
	  <!-- 語言別標籤 -->
	  <ul class="TabbedPanelsTabGroup">
		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['languages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<?php if ($this->_tpl_vars['languages'][$this->_sections['i']['index']]['info_state']): ?>
				<li class="TabbedPanelsTab" tabindex="0" id="TabbedPanelsTab<?php echo $this->_tpl_vars['languages'][$this->_sections['i']['index']]['lang_id']; ?>
" onclick="lang_session(<?php echo $this->_tpl_vars['languages'][$this->_sections['i']['index']]['lang_id']; ?>
)">
			<?php else: ?>
				<li class="TabbedPanelsTab" disabled>		
			<?php endif; ?>
			<?php echo $this->_tpl_vars['languages'][$this->_sections['i']['index']]['lang_na']; ?>

			</li>
		<?php endfor; endif; ?>
	  </ul>
<!-- /* 
	2011-01-11 edit by 廷俊
	------------------------------------------------------
	1.語言別頁籤切換頁網址傳get值，至子畫面的主畫面切割顯示頁
	2.新增一個隱藏的iframe，將語言別id導入後端執行入session
	3.session的語言別id，預設載入為第一個顯示的語言別id
	------------------------------------------------------
	2011-01-18 edit by 廷俊
	------------------------------------------------------
	因下方bottom放入語言頁籤內，則需調整語言頁籤的版面配置
	------------------------------------------------------	
*/ -->
	  <!-- 語言別內容 -->
	  <div class="TabbedPanelsContentGroup">
		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['languages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<?php if ($this->_tpl_vars['languages'][$this->_sections['i']['index']]['info_state']): ?>
				<div class="TabbedPanelsContent">
					<iframe width=00% height=00% id="ifm" src="mem_chk.php?act=lang_session&lang_id=<?php echo $this->_tpl_vars['languages'][0]['lang_id']; ?>
"></iframe>
					<iframe id="iframe<?php echo $this->_tpl_vars['languages'][$this->_sections['i']['index']]['lang_id']; ?>
" src="?act=pan&lang=<?php echo $this->_tpl_vars['languages'][$this->_sections['i']['index']]['lang_id']; ?>
" width="100%" height="100%" framespacing="0" frameborder="no" border="0" scrolling="no"></iframe>
				</div>
			<?php endif; ?>
		<?php endfor; endif; ?>
	  </div>
	</div>
	<!-- 頁籤終 -->
	
	<script type="text/javascript">
	<!--
	var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
	//-->
	</script>
	
<!-- 
	2011-06-08 edit by 廷俊
	------------------------------------------------------
	設定主視窗中iframe的高度，為螢幕解析度的視窗高度-288
	------------------------------------------------------
-->	
	<!-- 調整主視窗高度 -->
	<script type="text/javascript">
	<!--	
	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['languages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		<?php if ($this->_tpl_vars['languages'][$this->_sections['i']['index']]['info_state']): ?>
			document.getElementById("iframe<?php echo $this->_tpl_vars['languages'][$this->_sections['i']['index']]['lang_id']; ?>
").height = screen.height-288;
		<?php endif; ?>
	<?php endfor; endif; ?>
	//-->
	</script>
</html>