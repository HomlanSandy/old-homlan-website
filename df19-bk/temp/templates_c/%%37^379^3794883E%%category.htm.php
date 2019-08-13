<?php /* Smarty version 2.6.26, created on 2012-07-09 16:12:22
         compiled from category.htm */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無標題文件</title>
<script src="js/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="css/style1.css" rel="stylesheet" type="text/css">
</head> 
<!--
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	category.htm	資訊(商品)分類編輯 的 htm檔
	│	開發者		│	玉玲
	│	版本		│	v1.0.0.0072701
	├=======================================================================================┤
	│	1.	v1.0.1.0072701	2010/07/27	廷俊	a.新增分類的屬性，資訊or商品	
	│											b.上級分類的下拉式選單，動態disabled屬性功能，限最上級可選擇	
	│	2.	v1.0.1.0072801	2010/07/28	廷俊	a.按下重設reset按鈕時，要重新整理頁面，動態表單才會恢復預設值
	│											b.依照上級分類的下拉式選單，動態變更屬性值
	│											c.新增、修改分類成功提示訊息
	│	3.	v2.0.8.1030401	2011/03/04	廷俊	1.新增分類選單圖示功能
	│											2.按下移除圖片按鈕，觸發移除圖片的function
	│											3.跳出警告訊息”確定移除圖片？”
	│											4.記錄欲移除的圖片檔名至移除圖片的hidden欄位
	│											5.隱藏欲移除的圖片
	│	4.	v2.0.8.1030801	2011/03/08	廷俊	1.分類選單圖示新增是否啟用功能
	│											2.新增分類選單圖像大小設定的備註訊息
	│	5.	v03.00.01.1031801	2011/04/06	廷俊	1.按下移除圖片按鈕，觸發移除圖片的function
	│												2.跳出警告訊息”確定移除圖片？”
	│												3.記錄欲移除的圖片檔名至移除圖片的hidden欄位
	│												4.隱藏欲移除的圖片
	│												5.新增預設選單圖示的欄位配置
	│												6.新增動態展示標題圖片的欄位配置
	│												7.調整分類編輯的版面配置
	│	6.	v03.00.10.1062001	2011-06-29	玉玲	1.新增css樣式項目說明text_note。
	└=======================================================================================┘
*/-->
<script type="text/javascript">
<!--
var warming_na="<?php echo $this->_tpl_vars['warming_na']; ?>
";
var warming_gp="<?php echo $this->_tpl_vars['warming_gp']; ?>
";
var warming_cat="<?php echo $this->_tpl_vars['warming_cat']; ?>
";
var warming_delpic="<?php echo $this->_tpl_vars['warming_delpic']; ?>
";
var warming_title1="<?php echo $this->_tpl_vars['warming_title1']; ?>
";
var warming_title2="<?php echo $this->_tpl_vars['warming_title2']; ?>
";
var warming_title3="<?php echo $this->_tpl_vars['warming_title3']; ?>
";
var warming_title4="<?php echo $this->_tpl_vars['warming_title4']; ?>
";
var warming_title5="<?php echo $this->_tpl_vars['warming_title5']; ?>
";
<?php echo '

//按下移除圖片按鈕，觸發移除圖片的function
function delphoto(Obj,image_name){	
	//跳出警告訊息”確定移除圖片？”
	if(confirm(warming_delpic)){
		//記錄欲移除的圖片檔名至移除圖片的hidden欄位
		document.getElementById(Obj+\'_unfile\').value=image_name;
		//隱藏欲移除的圖片
		document.getElementById(Obj+\'_span\').style.display=\'none\';
		return true;
	}else{
		return false;
	}
}	


function delgroup(){
	var selgroupid = document.all.read_group.options[document.all.read_group.selectedIndex].value;
	var groupid = document.getElementById("ReadGroupId").value;
	var arrgroupid = new Array();
	arrgroupid = groupid.split(",");
	var s=\'\';
	for (var i = 0; i < arrgroupid.length; i++){
		if(arrgroupid[i] != selgroupid){s+=arrgroupid[i]+",";}
	}
	document.getElementById("ReadGroupId").innerText=s.substring(0,s.length-1);
	var quesCon=document.getElementById(\'read_group\');
	var selIdx=quesCon.selectedIndex;
	quesCon.remove(selIdx);
}

function addgroup(){
	var selgroupid = document.all.users_group.options[document.all.users_group.selectedIndex].value;
	var groupid = document.getElementById("ReadGroupId").value;
	var arrgroupid = new Array();
	arrgroupid = groupid.split(",");
	var a=0;
	for (var i = 0; i < arrgroupid.length; i++){
		if(arrgroupid[i] == selgroupid){a=1;}
	}
	if(a==0){
		document.all.read_group.options.add(new Option(document.all.users_group.options[document.all.users_group.selectedIndex].text,selgroupid));
		if (groupid==\'\'){
			document.getElementById("ReadGroupId").innerText=selgroupid;
		}else{
			document.getElementById("ReadGroupId").innerText=groupid + "," + selgroupid;
		}
	}
}

function chkcatna(){
	var dataid=document.getElementById("CatId").value;
	var datana=document.getElementById("CatsNa").value;
	var catid=document.getElementById("selcateid").options[document.getElementById("selcateid").selectedIndex].value;
/*
  	2010-07-27 edit by 廷俊
	----------------------------------------------------
	上級分類的下拉式選單，動態disabled屬性功能，限最上級可選擇
	---------------------------------------------------- 	
  	2010-07-28 edit by 廷俊
	----------------------------------------------------
	依照上級分類的下拉式選單，動態變更屬性值
	---------------------------------------------------- 	
*/
	document.getElementById("ifm").src="mem_chk.php?act=catna&dataid="+dataid+"&data=" + datana + "&id=" + catid;
	if(document.getElementById("selcateid").value!=0){
		document.getElementById("CategoryType_td").disabled=true;
	}else{
		document.getElementById("CategoryType_td").disabled=false;	
	}		
}

function chkpost(){
	msg="";
	if(document.getElementById("CatsNa").value==\'\'){
		msg += warming_na + "\\r\\n";
	}
	if(document.getElementById("ReadGroupId").value==\'\'){
		msg += warming_gp + "\\r\\n";
	}
	if(document.getElementById("catnatxt").innerText!=\'\'){
		msg += warming_cat + "\\r\\n";
	}
	if(document.getElementById("title1").value==\'\'){
		msg += warming_title1 + "\\r\\n";
	}
	if(document.getElementById("title2").value==\'\'){
		msg += warming_title2 + "\\r\\n";
	}
	if(document.getElementById("title3").value==\'\'){
		msg += warming_title3 + "\\r\\n";
	}
	if(document.getElementById("title4").value==\'\'){
		msg += warming_title4 + "\\r\\n";
	}
	if(document.getElementById("title5").value==\'\'){
		msg += warming_title5 + "\\r\\n";
	}
	if(msg==\'\'){
		return true;
	}else{
		alert(msg);
		return false;
	}
}

/*
	2011-07-26 玉玲
	判斷分類類別，若為資訊，標題僅顯示title1、title2、title3
	若為商品，標題全部顯示
*/
function title_display(selval){
	if (selval==0){ 	//資訊
		document.getElementById(\'titleheader\').style.display=\'none\';
		document.getElementById(\'titlelist1\').style.display=\'none\';
		document.getElementById(\'titlelist2\').style.display=\'none\';		
	} else {	//商品
		document.getElementById(\'titleheader\').style.display=\'\';
		document.getElementById(\'titlelist1\').style.display=\'\';
		document.getElementById(\'titlelist2\').style.display=\'\';	
	}
}
'; ?>

//-->
</script>
<body onfocus="chkcatna()">

<div id="use_title">
  <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="72%" align="left"><?php echo $this->_tpl_vars['PageTitle2']; ?>
</td>
      <td width="12%" align="right">
        <input name="button" type="submit" class="set_new_btn" id="button" value="<?php echo $this->_tpl_vars['CategoryList']; ?>
" onclick="location.href='<?php echo $this->_tpl_vars['CategoryListUrl']; ?>
';">
      </td>
    </tr>
  </table>
</div>
<!--
	2010-07-28 edit by 廷俊
	----------------------------------------------------
	新增、修改分類成功提示訊息
	---------------------------------------------------- 			
-->
<?php echo $this->_tpl_vars['Message']; ?>

<div id="show_table2">
<!-- 頁籤起 -->
	<div id="TabbedPanels1" class="TabbedPanels">
	  <ul class="TabbedPanelsTabGroup">
		<li class="TabbedPanelsTab" tabindex="0"><?php echo $this->_tpl_vars['CategoryBaseInfo']; ?>
</li>
		<li class="TabbedPanelsTab" tabindex="0"><?php echo $this->_tpl_vars['CategoryDetail']; ?>
</li>	
		<li class="TabbedPanelsTab" tabindex="0"><?php echo $this->_tpl_vars['CategoryRead']; ?>
</li>
		<li class="TabbedPanelsTab" tabindex="0"><?php echo $this->_tpl_vars['CategoryTitle']; ?>
</li>		
	  </ul>
	  <div class="TabbedPanelsContentGroup">
<!--

  	2010-07-27 edit by 廷俊
	----------------------------------------------------
	新增分類的屬性，資訊or商品
	----------------------------------------------------
  	2010-07-28 edit by 廷俊
	----------------------------------------------------
	按下重設reset按鈕時，要重新整理頁面，動態表單才會恢復預設值
	----------------------------------------------------  
  	2011-03-04 edit by 廷俊
	----------------------------------------------------
	新增分類選單圖示功能
	---------------------------------------------------- 
 	2011-03-08 edit by 廷俊
	----------------------------------------------------
	1.分類選單圖示新增是否啟用功能
	2.新增分類選單圖像大小設定的備註訊息
	---------------------------------------------------- 
	2011-04-07 edit by 廷俊
	----------------------------------------------------
	1.新增預設選單圖示的欄位配置
	2.新增動態展示標題圖片的欄位配置
	3.調整分類編輯的版面配置
	---------------------------------------------------- 	
-->		
	  <div class="TabbedPanelsContent">
	  <iframe width=00% height=00% id="ifm"></iframe>
	  <form method="post" action="category.php?act=save" onsubmit="return chkpost();" enctype="multipart/form-data">
		
		<table border="0" cellpadding="2" cellspacing="2" align="center" width="90%" height="100%">
			<tr>
				<td width="120" align="right">&nbsp;</td>
				<td align="left">&nbsp;<input type="hidden" value="<?php echo $this->_tpl_vars['cats_id']; ?>
" name="CatId" id="CatId"></td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['CategoryNa']; ?>
</th>
				<td align="left">
					<INPUT TYPE="text" onblur="chkcatna()" NAME="CatsNa" id="CatsNa" size="50" value="<?php echo $this->_tpl_vars['cats_na']; ?>
">
					<span class="text_note">*</span><br>
					<span class="text_note" id="catnatxt"></span>
				</td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['UpCategory']; ?>
</th>
				<td align="left"><?php echo $this->_tpl_vars['umCates']; ?>
</td>
			</tr>
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['CategoryType']; ?>
</th>
				<td align="left">
					<span id="CategoryType_td" <?php echo $this->_tpl_vars['disabled']; ?>
>
						<INPUT TYPE="radio" NAME="CategoryType" id="CategoryType1" value="0" checked onclick="title_display(0);"><?php echo $this->_tpl_vars['CategoryInfo']; ?>

						<INPUT TYPE="radio" NAME="CategoryType" id="CategoryType2" value="1" <?php if ($this->_tpl_vars['cats_type'] == '1'): ?>checked<?php endif; ?> onclick="title_display(1);"><?php echo $this->_tpl_vars['CategoryProdct']; ?>

					</span><br>
					<span class="text_note"><?php echo $this->_tpl_vars['CategoryType_ps']; ?>
</span>
				</td>
			</tr>
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['SimpleShow']; ?>
</th>
				<td align="left"><TEXTAREA NAME="SimpleText" ROWS="5" COLS="40"><?php echo $this->_tpl_vars['simple_text']; ?>
</TEXTAREA></td>
			</tr>
			<tr style="display:none">
				<th align="right"><?php echo $this->_tpl_vars['Keyword']; ?>
</th>
				<td align="left"><INPUT TYPE="text" NAME="CatKeyword" size="50" value="<?php echo $this->_tpl_vars['cat_keyword']; ?>
"></td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['CategoryOrder']; ?>
</th>
				<td align="left"><INPUT TYPE="text" NAME="GdsOrder" size="16" value="<?php echo $this->_tpl_vars['gds_order_no']; ?>
"></td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['CategoryDiaplay']; ?>
</th>
				<td align="left">
					<INPUT TYPE="radio" NAME="CatShow" value="1" checked><?php echo $this->_tpl_vars['DiaplayY']; ?>

					<INPUT TYPE="radio" NAME="CatShow" value="0" <?php if ($this->_tpl_vars['cat_show'] == '0'): ?>checked<?php endif; ?>><?php echo $this->_tpl_vars['DiaplayN']; ?>

				</td>
			</tr>
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['PhotoUpload']; ?>
</th>
				<td align="left">
					<INPUT TYPE="radio" NAME="PhotoState" value="1" checked><?php echo $this->_tpl_vars['PhotoUploadY']; ?>

					<INPUT TYPE="radio" NAME="PhotoState" value="0" <?php if ($this->_tpl_vars['pic_state'] == '0'): ?>checked<?php endif; ?>><?php echo $this->_tpl_vars['PhotoUploadN']; ?>

					<br><span class="text_note"><?php echo $this->_tpl_vars['PhotoUploadText']; ?>
</span>
				</td>
			</tr>
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['PhotoDefault']; ?>
</th>
				<td align="left"><?php echo $this->_tpl_vars['tblstr'][0]; ?>
</td>
			</tr>
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['PhotoDynamic']; ?>
</th>
				<td align="left"><?php echo $this->_tpl_vars['tblstr'][1]; ?>
</td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['CategoryInTy']; ?>
</th>
				<td align="left">
					<INPUT TYPE="radio" NAME="InfoState" value="1" checked><?php echo $this->_tpl_vars['mainCateY']; ?>

					<INPUT TYPE="radio" NAME="InfoState" value="0" <?php if ($this->_tpl_vars['info_state'] == '0'): ?>checked<?php endif; ?>><?php echo $this->_tpl_vars['mainCateN']; ?>

				</td>
			</tr>
			<tr>				
				<td align="center" colspan="2">&nbsp;</td>
			</tr>
			<tr>				
				<td align="center" colspan="2">
					<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
">
					<INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
" onclick="window.location.reload();">
				</td>
			</tr>
			<tr>				
				<td align="center" colspan="2">&nbsp;</td>
			</tr>
		</table>		
		</div>
<!--
  	2010-07-28 edit by 廷俊
	----------------------------------------------------
	按下重設reset按鈕時，要重新整理頁面，動態表單才會恢復預設值
	----------------------------------------------------  
-->	
		<div class="TabbedPanelsContent">
		<!-- 線上編輯器 -->
		<table border="0" cellpadding="2" cellspacing="2" align="center" width="95%">
			<tr>				
				<td align="center" colspan="2">&nbsp;</td>
			</tr>			
			<tr>				
				<td align="center"><?php echo $this->_tpl_vars['FckEditor']; ?>
</td>
			</tr>
			<tr>				
				<td align="center" colspan="2">&nbsp;</td>
			</tr>
			<tr>				
				<td align="center">
					<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
">
					<INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
" onclick="window.location.reload();">
				</td>
			</tr>
			<tr>				
				<td align="center" colspan="2">&nbsp;</td>
			</tr>
		</table>
		</div>
<!--
  	2010-07-28 edit by 廷俊
	----------------------------------------------------
	按下重設reset按鈕時，要重新整理頁面，動態表單才會恢復預設值
	----------------------------------------------------  
-->		
		<div class="TabbedPanelsContent">
		<table border="0" cellpadding="2" cellspacing="2" align="center" width="">			
			<tr>				
				<td align="center" colspan="3">&nbsp;</td>
			</tr>
			<tr>				
				<th align="center" width=""><?php echo $this->_tpl_vars['MemberGroup']; ?>
</th>
				<th align="center" width="50">&nbsp;</th>
				<th align="center" width=""><?php echo $this->_tpl_vars['GroupImitate']; ?>
</th>
			</tr>
			<tr>				
				<td align="center"><?php echo $this->_tpl_vars['usergroupsel']; ?>
</td>
				<td align="center" valign="middle">
					<input type="button" value="<?php echo $this->_tpl_vars['GroupIn']; ?>
" onClick="addgroup();"><p>
					<input type="button" value="<?php echo $this->_tpl_vars['GroupOut']; ?>
" onClick="delgroup();">
				</td>
				<td align="center">
					<input type="hidden" name="ReadGroupId" id="ReadGroupId" value="<?php echo $this->_tpl_vars['read_group']; ?>
"><?php echo $this->_tpl_vars['selectedgp']; ?>

				</td>
			</tr>
			<tr>				
				<td align="center" colspan="3">&nbsp;</td>
			</tr>
			<tr>				
				<td align="center" colspan="3">
					<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
">
					<INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
" onclick="window.location.reload();">
				</td>
			</tr>
			<tr>				
				<td align="center" colspan="3">&nbsp;</td>
			</tr>
		</table>
		</div>
		<!-- 標題管理 -->
		<div class="TabbedPanelsContent">
			<table border="0" cellpadding="2" cellspacing="2" align="center" width="">	
				<tr>
					<td align="right"><input type="radio" name="titletype" id="titletype1" value="0" checked></td>
					<th align="right"><?php echo $this->_tpl_vars['title_default']; ?>
</th>
					<td align="left"><?php echo $this->_tpl_vars['title1']; ?>
</td>
					<td align="left"><?php echo $this->_tpl_vars['title2']; ?>
</td>					
					<td align="left"><?php echo $this->_tpl_vars['title3']; ?>
</td>
					<span id="titleheader" style="<?php echo $this->_tpl_vars['style_titleheader']; ?>
">
					<td align="left"><?php echo $this->_tpl_vars['title4']; ?>
</td>
					<td align="left"><?php echo $this->_tpl_vars['title5']; ?>
</td>				
					</span>
				</tr>
				<tr>
					<td align="right"><input type="radio" name="titletype" id="titletype2" value="1" <?php echo $this->_tpl_vars['titletype_user']; ?>
></td>
					<th align="right"><?php echo $this->_tpl_vars['title_user']; ?>
</th>
					<td align="left"><input type="text" name="title1" id="title1" size="8" value="<?php echo $this->_tpl_vars['title1_value']; ?>
"></td>
					<td align="left"><input type="text" name="title2" id="title2" size="8" value="<?php echo $this->_tpl_vars['title2_value']; ?>
"></td>
					<td align="left"><input type="text" name="title3" id="title3" size="8" value="<?php echo $this->_tpl_vars['title3_value']; ?>
"></td>
					<span id="titlelist1"  style="<?php echo $this->_tpl_vars['style_titlelist1']; ?>
">
					<td align="left"><input type="text" name="title4" id="title4" size="8" value="<?php echo $this->_tpl_vars['title4_value']; ?>
"></td>
					<td align="left"><input type="text" name="title5" id="title5" size="8" value="<?php echo $this->_tpl_vars['title5_value']; ?>
"></td>				
					</span>
				</tr>
				<tr>
					<td align="right">&nbsp;</td>
					<th align="right"><?php echo $this->_tpl_vars['title_enabled']; ?>
</th>
					<td align="left">
						<input type="radio" name="enabled1" id="enabled11" value="1" checked><?php echo $this->_tpl_vars['title_yes']; ?>

						<input type="radio" name="enabled1" id="enabled12" value="0" <?php echo $this->_tpl_vars['enabled1_no']; ?>
><?php echo $this->_tpl_vars['title_no']; ?>

					</td>
					<td align="left">
						<input type="radio" name="enabled2" id="enabled21" value="1" checked><?php echo $this->_tpl_vars['title_yes']; ?>

						<input type="radio" name="enabled2" id="enabled22" value="2" <?php echo $this->_tpl_vars['enabled2_no']; ?>
><?php echo $this->_tpl_vars['title_no']; ?>

					</td>					
					<td align="left">
						<input type="radio" name="enabled3" id="enabled31" value="1" checked><?php echo $this->_tpl_vars['title_yes']; ?>

						<input type="radio" name="enabled3" id="enabled32" value="0" <?php echo $this->_tpl_vars['enabled3_no']; ?>
><?php echo $this->_tpl_vars['title_no']; ?>

					</td>		
					<span id="titlelist2" style="<?php echo $this->_tpl_vars['style_titlelist2']; ?>
">					
					<td align="left">
						<input type="radio" name="enabled4" id="enabled41" value="1" checked><?php echo $this->_tpl_vars['title_yes']; ?>

						<input type="radio" name="enabled4" id="enabled42" value="0" <?php echo $this->_tpl_vars['enabled4_no']; ?>
><?php echo $this->_tpl_vars['title_no']; ?>

					</td>					
					<td align="left">
						<input type="radio" name="enabled5" id="enabled51" value="1" checked><?php echo $this->_tpl_vars['title_yes']; ?>

						<input type="radio" name="enabled5" id="enabled52" value="0" <?php echo $this->_tpl_vars['enabled5_no']; ?>
><?php echo $this->_tpl_vars['title_no']; ?>

					</td>	
					</span>
				</tr>
				<tr>				
					<td align="center" colspan="6">&nbsp;</td>
				</tr>
				<tr>				
					<td align="center" colspan="6">
						<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
">
						<INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
" onclick="window.location.reload();">
					</td>
				</tr>
				<tr>				
					<td align="center" colspan="6">&nbsp;</td>
				</tr>
			</table>
		</div>
		</form>		
	  </div>
	</div>  
<?php echo '  
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
//-->
</script>
'; ?>


<!-- 頁籤終 -->
</div>
 
<?php echo $this->_tpl_vars['temp_log']; ?>
</body>
</html>