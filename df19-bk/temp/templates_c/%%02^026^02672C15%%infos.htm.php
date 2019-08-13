<?php /* Smarty version 2.6.26, created on 2012-07-09 16:12:45
         compiled from infos.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<script src="js/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="../includes/fckeditor/fckeditor.js" type="text/javascript"></script>
<script src="js/calendar.js" type="text/javascript"></script>
<script src="js/calendar-en.js" type="text/javascript"></script>
<script src="js/calendar-setup.js" type="text/javascript"></script>
<link href="css/calendar-win2k-cold-1.css" rel="stylesheet" type="text/css" />
<link href="css/style1.css" rel="stylesheet" type="text/css" />
</head> 
<!--
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	infos.htm	資訊明細編輯 的 htm檔
	│	開發者		│	玉玲
	│	版本		│	v1.0.0.0073001
	├=======================================================================================┤
	│	1.	v1.0.1.0073001	2010/07/30	廷俊	新增、修改資訊明細成功提示訊息
	│	2.	v1.0.1.0081201	2010/08/12	廷俊	更改明細編輯頁的頁籤順序
	│	3.	v2.0.1.0111501	2010/11/15	廷俊	a.編輯明細頁面時，新增另存新檔的功能按鈕
	│											b.另存新檔時，觸發儲存新檔時需要的欄位條件與欄位ID值
	│											c.增加另存新檔的警示訊息
	│											d.各頁籤增加另存新檔的功能按鈕
	│											e.欲設新增的infos_id(另存新檔可用)
	│	4.	v2.0.8.1030801	2011/03/08	廷俊	新增資訊明細大小圖圖像設定的備註說明
	│	5.	v03.00.01.1031801	2011/03/31	廷俊	新增簡單說明的備註說明，需提示字串擷取的長度
	│	6.	v03.00.10.1062001	2011-06-29	玉玲	1.新增css樣式項目說明text_note。
	│	7.	v03.00.20.			2011-12-30	玉玲	1.新增大圖顯示寬度與高度。使用者自訂模式下可自行設定顯示寬度與高度。
													2.新增小圖顯示寬度與高度。使用者自訂模式下可自行設定顯示寬度與高度。
	└=======================================================================================┘
*/-->
<script type="text/javascript">
<!--
/*
	2010-05-10 edit by 廷俊
	------------------------------------------------------
	修改圖片上傳模式：
		1.加入移除照片的button
		2.顯示上傳瀏覽
		3.限制後台圖片，防止表格變型
		4.加入移除照片的警告視窗
	------------------------------------------------------		
	2010-11-15 edit by 廷俊
	------------------------------------------------------
	1.編輯明細頁面時，新增另存新檔的功能按鈕
	2.另存新檔時，觸發儲存新檔時需要的欄位條件與欄位ID值
	3.增加另存新檔的警示訊息
	4.各頁籤增加另存新檔的功能按鈕
	------------------------------------------------------		
*/		

var warming_na="<?php echo $this->_tpl_vars['warming_na']; ?>
";
var warming_id="<?php echo $this->_tpl_vars['warming_id']; ?>
";
var warming_delfile="<?php echo $this->_tpl_vars['warming_delfile']; ?>
";
var warming_date="<?php echo $this->_tpl_vars['warming_date']; ?>
";
var warming_delpic="<?php echo $this->_tpl_vars['warming_delpic']; ?>
";
var SaveNew_id="<?php echo $this->_tpl_vars['SaveNew_id']; ?>
";
var warming_SaveNew="<?php echo $this->_tpl_vars['warming_SaveNew']; ?>
";
<?php echo '

	function AddInfocats(){ //新增資訊分頁
		var infocatnum = document.getElementById("InfocatNum").value;
		var ro = document.getElementById("TableInfocat").rows.length;
		var ne = TableInfocat.insertRow(ro);
		var so = ne.insertCell(0);
		infocatnum++;
		var oFCKeditor = new FCKeditor(\'FCKeditor\'+infocatnum); 
        oFCKeditor.BasePath = "../includes/fckeditor/";
		oFCKeditor.Width = \'95%\';
		oFCKeditor.Height = \'300\';
		oFCKeditor.ToolbarSet = "Basic";
		oFCKeditor.Config[\'SkinPath\'] = \'skins/silver/\';
        so.innerHTML = oFCKeditor.CreateHtml();
		document.getElementById("InfocatNum").innerText = infocatnum;
	}
	
	function DelInfocats(){ //刪除資訊分頁
		var infocatnum = document.getElementById("InfocatNum").value;
		var rowsCount=document.all(\'TableInfocat\').rows.length;
		if (rowsCount>1){
			document.all(\'TableInfocat\').deleteRow(rowsCount-1);
			document.getElementById("InfocatNum").innerText = infocatnum-1;
		}
	}
	
	function deldoc(id){ //刪除附檔
		if (confirm(warming_delfile)){
			var td = event.srcElement.parentElement;
			var tr = td.parentElement;
			var tbl = tr.parentElement;
			tbl.deleteRow(tr.rowIndex);
			document.getElementById("outputTarget").src = "infoslist.php?act=deldoc&id="+id;
		} else {
			return false;			
		}
		
	}
	

/*
	2010-05-10 edit by 廷俊
	------------------------------------------------------
	修改圖片上傳模式：
		1.加入移除照片的button
		2.顯示上傳瀏覽
		3.限制後台圖片，防止表格變型
		4.加入移除照片的警告視窗
	------------------------------------------------------		
*/
/* 	function delbigphoto(){ 
		document.getElementById("unlinkfile1").innerText=event.srcElement.value;
		var td = event.srcElement.parentElement;
		var tr = td.parentElement;
		var tbl = tr.parentElement;
		tbl.deleteRow(tr.rowIndex);
		document.getElementById("putbigfile").innerHTML="<INPUT TYPE=file id=Pic_Big NAME=Pic_Big size=50>";
	} */
	//移除大圖
	function delbigphoto(image_name){	
		if(confirm(warming_delpic)){
			document.getElementById(\'unlinkfile1\').value=image_name;
			document.getElementById(\'image1\').style.display=\'none\';
			document.getElementById(\'pic_big_display\').style.display=\'none\';			
			return true;
		}else{
			return false;
		}
	}	
/* 	function delsmallphoto(){ 
		document.getElementById("unlinkfile2").innerText=event.srcElement.value;
		var td = event.srcElement.parentElement;
		var tr = td.parentElement;
		var tbl = tr.parentElement;
		tbl.deleteRow(tr.rowIndex);
		document.getElementById("putsmallfile").innerHTML="<INPUT TYPE=file id=Pic_Small NAME=Pic_Small size=50>";
	} */
	//移除小圖
	function delsmallphoto(image_name){	
		if(confirm(warming_delpic)){
			document.getElementById(\'unlinkfile2\').value=image_name;
			document.getElementById(\'image2\').style.display=\'none\';
			document.getElementById(\'pic_small_display\').style.display=\'none\';
			return true;
		}else{
			return false;
		}
	}	
	function getinfolist(){ //相關資訊搜尋
		var selinfocatid = document.getElementById("selrelateid").options[document.getElementById("selrelateid").selectedIndex].value;
		var txtna = document.getElementById("textfield").value;		
		document.getElementById("outputTarget").src = "infoslist.php?act=getlist&cid=" + selinfocatid + "&na=" + txtna;
	}
	
	function delgroup(){ //移除相關資訊
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

	function addgroup(){ //加入相關資訊
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
	
	//存檔防呆
	function chkpost(){
		msg="";
		if(document.getElementById("Info_Na").value==\'\'){
			msg += warming_na + "\\r\\n";
		}
		if(document.getElementById("f_date_b").value > document.getElementById("f_date_a").value){
			msg += warming_date + "\\r\\n";
		}		
		if(msg==\'\'){
			return true;
		}else{
			alert(msg);
			return false;
		}
	}
	
	//新增選項
	function addSelect(p_type){	
		if (p_type==1){
			var source=eval(document.getElementById(\'selcatid\'));
			var dest=eval(document.getElementById(\'selcatid2\'));
		}
		if (p_type==2){
			var source=eval(document.getElementById(\'selcmdid\'));
			var dest=eval(document.getElementById(\'selcmdid2\'));
		}
		for(var i=0;i<=source.length-1;i++){
			if (source.options[i].selected){
				var new_option=new Option(source.options[i].text,source.options[i].value);				  
				dest.options.add(new_option);
				if (source.selectedIndex!=-1){
					source.remove(i);
				}
			}
		}	
		//寫入隱藏欄位
		insertdestvalue(p_type);
	}
	
	//移除選項
	function rmSelect(p_type){
		if (p_type==1){
			var source=eval(document.getElementById(\'selcatid\'));
			var dest=eval(document.getElementById(\'selcatid2\'));
		}
		if (p_type==2){
			var source=eval(document.getElementById(\'selcmdid\'));
			var dest=eval(document.getElementById(\'selcmdid2\'));
		}
		for(var i=0;i<=dest.length-1;i++){
			if (dest.options[i].selected){				
				var new_option=new Option(dest.options[i].text,dest.options[i].value);				  
				source.options.add(new_option);
				if (dest.selectedIndex!=-1){
					dest.remove(i);
				}
			}
		}
		//寫入隱藏欄位
		insertdestvalue(p_type);
	}
	
	//寫入隱藏值
	function insertdestvalue(p_type){		
		var selidlist="";
		if (p_type==1){			
			var dest=eval(document.getElementById(\'selcatid2\'));
		}
		if (p_type==2){			
			var dest=eval(document.getElementById(\'selcmdid2\'));
		}
		for(var j=0;j<=dest.length-1;j++){			
			selidlist+=dest.options[j].value+\',\';
		}
		selidlist=selidlist.substring(0,selidlist.length-1);		
		if (p_type==1){document.getElementById(\'selcatidlist\').value=selidlist;}
		if (p_type==2){document.getElementById(\'selcmdidlist\').value=selidlist;}		
	}
	
	//排除重複的名稱
	function repeatchk(p_type){
		if (p_type==1){
			var source=eval(document.getElementById(\'selcatid\'));
			var dest=eval(document.getElementById(\'selcatid2\'));
		}
		if (p_type==2){
			var source=eval(document.getElementById(\'selcmdid\'));
			var dest=eval(document.getElementById(\'selcmdid2\'));
		}
/*
        2012-12-13 edit by 健嘉
        ------------------------------------------------------
        1.修改 排除重複的方法 原始的會因為刪除 所以沒有再比對該位置之值
        ------------------------------------------------------             
*/
        var s_len=source.length;
        var d_len=dest.length;
        var i=0;
        while(i<source.length)
        {
            var k="Y";
            var j=0;
            while(j<d_len)
            {
                if(source.length!=""){
                    if (source.options[i].value==dest.options[j].value){
                        source.remove(i);
                        k="N";
                    }
                 }
                 j++;
            }            
			if(k=="N"){
              i=0;
            } else {
              i++;
            }
        }
		
		//寫入隱藏欄位
		insertdestvalue(p_type);		
	}
	
/*
	2010-11-15 edit by 廷俊
	------------------------------------------------------
	1.編輯明細頁面時，新增另存新檔的功能按鈕
	2.另存新檔時，觸發儲存新檔時需要的欄位條件與欄位ID值
	3.增加另存新檔的警示訊息
	4.各頁籤增加另存新檔的功能按鈕
	------------------------------------------------------		
*/	
	//另存新檔
	function SaveNew(){
		if(confirm(warming_SaveNew)){
			document.getElementById("infos_id").value="";
			document.getElementById("updocs_id").value=SaveNew_id;
			return true;
		}else{
			return false;
		}
	}
	
'; ?>

//-->
</script>
<body>
<div id="use_title">
  <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
  <iframe name="outputTarget" height="0" width="0" style="display:none;" id="outputTarget"></iframe>
	<tr>
      <td width="72%" align="left"><?php echo $this->_tpl_vars['PageTitle2']; ?>
</td>
      <td width="12%" align="right">
        <input name="button" type="submit" class="set_new_btn" id="button" value="<?php echo $this->_tpl_vars['InfoList']; ?>
" onclick="location.href='<?php echo $this->_tpl_vars['BtnUnfoListUrl']; ?>
';" />
      </td>
    </tr>
  </table>
</div>
<!--
	2010-07-30 edit by 廷俊
	----------------------------------------------------
	新增、修改資訊明細成功提示訊息
	---------------------------------------------------- 			
-->
<?php echo $this->_tpl_vars['Message']; ?>

<div id="show_table2">
<!--
	2010-08-12 edit by 廷俊
	----------------------------------------------------
	更改明細編輯頁的頁籤順序
	----------------------------------------------------
	2010-11-15 edit by 廷俊
	------------------------------------------------------
	1.編輯明細頁面時，新增另存新檔的功能按鈕
	2.各頁籤增加另存新檔的功能按鈕
	------------------------------------------------------	
-->
<!-- 頁籤起 -->
<div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0"><?php echo $this->_tpl_vars['InfoBaseInfo']; ?>
</li>
    <li class="TabbedPanelsTab" tabindex="0"><?php echo $this->_tpl_vars['InfoDetail']; ?>
</li>
	<li class="TabbedPanelsTab" tabindex="0"><?php echo $this->_tpl_vars['InfoPage']; ?>
</li>
	<li class="TabbedPanelsTab" tabindex="0"><?php echo $this->_tpl_vars['InfoRead']; ?>
</li>
	<li class="TabbedPanelsTab" tabindex="0"><?php echo $this->_tpl_vars['InfoUpload']; ?>
</li>
  </ul>
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent" id="TabbedPanelsContent">
	<!-- 基本資料 -->
	<FORM METHOD="POST" enctype="multipart/form-data" ACTION="infoslist.php?act=save" onsubmit="return chkpost();">
		<table border="0" cellpadding="2" cellspacing="2" align=""  width="80%" height="100%">
			<tr>
				<th align="right"></th>
				<td align="left"><INPUT TYPE="hidden" NAME="infos_id" id="infos_id" value="<?php echo $this->_tpl_vars['infos_id']; ?>
"><INPUT TYPE="hidden" NAME="updocs_id" id="updocs_id" value="<?php echo $this->_tpl_vars['updocs_id']; ?>
"></td>
			</tr>
			<tr style="display:none">
				<th align="right"><?php echo $this->_tpl_vars['InfoId']; ?>
</th>
				<td align="left"><INPUT TYPE="text" NAME="Info_CusId" value="<?php echo $this->_tpl_vars['infos_cusrid']; ?>
"><span class="text_note">*</span></td>
			</tr>	
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['InfoNa']; ?>
</th>
				<td align="left"><INPUT TYPE="text" NAME="Info_Na" id="Info_Na" size="50" value="<?php echo $this->_tpl_vars['infos_na']; ?>
"><span class="text_note">*</span></td>
			</tr>					
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['InfoType']; ?>
</th>
				<!--<td align="left"><?php echo $this->_tpl_vars['infocatsel']; ?>
<?php echo $this->_tpl_vars['infocatsel2']; ?>
&nbsp;<input type="button" value="<?php echo $this->_tpl_vars['Btn_Add']; ?>
" class="button" onclick="addGroup();"><span style="color:red;">*<?php echo $this->_tpl_vars['warming_btnadd']; ?>
</span>
				<span id=UserallGroup><?php echo $this->_tpl_vars['strgroup']; ?>
</span>				
				</td>-->
				<td align="left">
				<table border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td align="center" bgcolor="#96C3F0"><?php echo $this->_tpl_vars['allinfocatslist1']; ?>
</td>
						<td>&nbsp;</td>
						<td align="center" bgcolor="#96C3F0"><?php echo $this->_tpl_vars['allinfocatslist2']; ?>
</td>
					</tr>					
					<tr>
						<td><?php echo $this->_tpl_vars['infocatsel']; ?>
</td>
						<td align="center"><input type="button" value="<?php echo $this->_tpl_vars['BtnAdd']; ?>
=&gt;" class="button" onclick="addSelect(1);">
						<br>
						<input type="button" value="&lt;=<?php echo $this->_tpl_vars['BtnOut']; ?>
" class="button" onclick="rmSelect(1);"><br></td>
						<td><?php echo $this->_tpl_vars['infocatSelected']; ?>
<input type="hidden" name="selcatidlist" id="selcatidlist" value="<?php echo $this->_tpl_vars['selcatidlist_value']; ?>
"></td>
					</tr>
					<tr>				
						<td colspan="3"><span class="text_note"><?php echo $this->_tpl_vars['allinfocatslistmemo']; ?>
</span></td>
					</tr>					
				</table>	
				</td>
			</tr>						
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['CommendModule']; ?>
</th>			
				<td>
					<table border=0 cellpadding=0 cellspacing=0>
					<tr>
						<td align="center" bgcolor="#96C3F0"><?php echo $this->_tpl_vars['allcmdmodlist1']; ?>
</td>
						<td>&nbsp;</td>
						<td align="center" bgcolor="#96C3F0"><?php echo $this->_tpl_vars['allcmdmodlist2']; ?>
</td>
					</tr>
					<tr>
						<td><?php echo $this->_tpl_vars['cmdmodulesel']; ?>
</td>
						<td align="center"><input type="button" value="<?php echo $this->_tpl_vars['BtnAdd']; ?>
=&gt;" class="button" onclick="addSelect(2);">
						<br>
						<input type="button" value="&lt;=<?php echo $this->_tpl_vars['BtnOut']; ?>
" class="button" onclick="rmSelect(2);"><br></td>
						<td><?php echo $this->_tpl_vars['cmdmoduleselsel']; ?>
<input type="hidden" name="selcmdidlist" id="selcmdidlist" value="<?php echo $this->_tpl_vars['selcmdidlist_value']; ?>
"></td>
					</tr>
				</table>						
				</td>
			</tr>
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['DateStart']; ?>
</th>
				<td align="left">									
					 <input type="text" name="newsDateStart" id="f_date_b" value="<?php echo $this->_tpl_vars['infos_date_start']; ?>
" readonly>
				</td>
			</tr>
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['DateStop']; ?>
</th>
				<td align="left">					
					<input type="text" name="newsDateStop" id="f_date_a" value="<?php echo $this->_tpl_vars['infos_date_stop']; ?>
" readonly> 
				</td>
			</tr>
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['SimpleText']; ?>
</th>
				<td align="left">
					<TEXTAREA NAME="Simple_Text" ROWS="5" COLS="50"><?php echo $this->_tpl_vars['infos_simple_text1']; ?>
</TEXTAREA>
					<br><span class="text_note"><?php echo $this->_tpl_vars['SimpleText_PS']; ?>
</span>
				</td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['InfoOrder']; ?>
</th>
				<td align="left"><INPUT TYPE="text" NAME="Info_Order" size="16" value="<?php echo $this->_tpl_vars['infos_order']; ?>
"></td>
			</tr>
<!--
	2010-05-10 edit by 廷俊
	------------------------------------------------------
	修改圖片上傳模式：
		1.加入移除照片的button
		2.顯示上傳瀏覽
		3.限制後台圖片，防止表格變型
		4.加入移除照片的警告視窗
	------------------------------------------------------
	2011-03-08 edit by 廷俊
	------------------------------------------------------
	新增資訊明細大小圖圖像設定的備註說明
	------------------------------------------------------		
	2011-03-31 edit by 廷俊
	------------------------------------------------------
	新增簡單說明的備註說明，需提示字串擷取的長度
	------------------------------------------------------	
*/	-->			
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['PhotoUpload']; ?>
</th>
				<td align="left">
					<?php echo $this->_tpl_vars['image_big']; ?>

					<span class="text_note"><?php echo $this->_tpl_vars['PhotoUploadText']; ?>
</span>
				</td>
			</tr>
			<?php if ($this->_tpl_vars['image_big_display'] == '1'): ?>
			<tr id="pic_big_display">
				<th align="right"><?php echo $this->_tpl_vars['PhotoUploadDisplySize']; ?>
</th>				
				<td align="left">
					<?php echo $this->_tpl_vars['ImgWidth']; ?>
<input type="text" name="pic_big_width" size="3" value="<?php echo $this->_tpl_vars['pic_big_width_value']; ?>
" <?php if ($this->_tpl_vars['bigpicset'] == '1'): ?> readonly <?php endif; ?> style="text-align:right;">
					<?php echo $this->_tpl_vars['ImgHeight']; ?>
<input type="text" name="pic_big_height" size="3" value="<?php echo $this->_tpl_vars['pic_big_height_value']; ?>
" <?php if ($this->_tpl_vars['bigpicset'] == '1'): ?> readonly <?php endif; ?> style="text-align:right;">					
				</td>
			</tr>
			<?php endif; ?>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['PhoUploSmall']; ?>
</th>
				<!--<td align="left"><table><tr><td><?php if ($this->_tpl_vars['infos_pic_small'] != ''): ?><input type="checkbox" id="smallfileNa" value="<?php echo $this->_tpl_vars['infos_pic_small']; ?>
" name="smallfileNa" onclick="delsmallphoto();" checked><img src="<?php echo $this->_tpl_vars['picsmallurl']; ?>
" width="50" height="50" border="0" /><?php echo $this->_tpl_vars['infos_pic_small']; ?>
<?php else: ?><INPUT TYPE="file" id="Pic_Small" NAME="Pic_Small" size="50"><?php endif; ?></td></tr><tr><td><div id="putsmallfile"></div><INPUT TYPE="hidden" NAME="unlinkfile2" id="unlinkfile2" value=""></tr></td></table></td>-->
				<td align="left">
					<?php echo $this->_tpl_vars['image_small']; ?>
	
					<span class="text_note"><?php echo $this->_tpl_vars['PhoUploSmallText']; ?>
</span>					
				</td>
			</tr>
			<?php if ($this->_tpl_vars['image_small_display'] == '1'): ?>			
			<tr id="pic_small_display">
				<th align="right"><?php echo $this->_tpl_vars['PhoUploSmallDisplySize']; ?>
</th>				
				<td align="left">
					<?php echo $this->_tpl_vars['ImgWidth']; ?>
<input type="text" name="pic_small_width" size="3" value="<?php echo $this->_tpl_vars['pic_small_width_value']; ?>
" <?php if ($this->_tpl_vars['smallpicset'] == '1'): ?> readonly <?php endif; ?> style="text-align:right;">
					<?php echo $this->_tpl_vars['ImgHeight']; ?>
<input type="text" name="pic_small_height" size="3" value="<?php echo $this->_tpl_vars['pic_small_height_value']; ?>
" <?php if ($this->_tpl_vars['smallpicset'] == '1'): ?> readonly <?php endif; ?> style="text-align:right;">					
				</td>
			</tr>
			<?php endif; ?>			
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['InfoState']; ?>
</th>
				<td align="left"><INPUT TYPE="radio" NAME="Info_State" value="1" checked><?php echo $this->_tpl_vars['InfoStateY']; ?>
<INPUT TYPE="radio" NAME="Info_State" value="0" <?php if ($this->_tpl_vars['infos_state'] == '0'): ?>checked<?php endif; ?>><?php echo $this->_tpl_vars['InfoStateN']; ?>
</td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['HomeWebShow']; ?>
</th>
				<td align="left"><INPUT TYPE="radio" NAME="homeweb" value="1" checked><?php echo $this->_tpl_vars['HomeWebY']; ?>
<INPUT TYPE="radio" NAME="homeweb" value="0" <?php if ($this->_tpl_vars['homeweb'] == '0'): ?>checked<?php endif; ?>><?php echo $this->_tpl_vars['HomeWebN']; ?>
</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<?php echo $this->_tpl_vars['SaveNew']; ?>
<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
"><INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
">
				</td>
			</tr>
		</table>
	</div>

    <div class="TabbedPanelsContent" id="TabbedPanelsContent2">
	<!-- 詳細說明 -->
		<table border="0" cellpadding="0" cellspacing="0" align=""  width="98%">			
		<tr>				
			<td align="center"><?php echo $this->_tpl_vars['FckEditor']; ?>
</td>
		</tr>
		<tr>				
			<td align="center">
				<?php echo $this->_tpl_vars['SaveNew']; ?>
<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
"><INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
">
			</td>
		</tr>
	</table>
	</div>
	
	<div class="TabbedPanelsContent" id="TabbedPanelsContent3">
	<!-- 資訊分頁 -->	
		<table width="100%">
		<tr><td>
			<table border="0" cellpadding="1" cellspacing="1" align="" width="100%" height="100%" id="TableInfocat">
				<tr>
					<td valign="center" width="95%"><input id="InfocatNum" name="InfocatNum" type="hidden" value="<?php echo $this->_tpl_vars['InfocatNum']; ?>
"><?php echo $this->_tpl_vars['FCKeditor1']; ?>
</td>
					<td width="5%" align="right" valign="top"><input type="button" value="<?php echo $this->_tpl_vars['Btn_Add']; ?>
" onclick="AddInfocats();"><input type="button" value="<?php echo $this->_tpl_vars['Btn_Delete']; ?>
" onclick="DelInfocats();"></td>
				</tr>
				<?php echo $this->_tpl_vars['str_infopage']; ?>

			</table>
		</td></tr>
		<tr><td align="center">
			<?php echo $this->_tpl_vars['SaveNew']; ?>
<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
"><INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
">
		</td></tr>
	</table>
	</div>
	
	<div class="TabbedPanelsContent" id="TabbedPanelsContent4">
	<!-- 相關資訊 -->
			<table border="0" cellpadding="0" cellspacing="0" align="">	
			<tr>
			<td colspan="4">
				<b><?php echo $this->_tpl_vars['Category']; ?>
</b><?php echo $this->_tpl_vars['infoSel']; ?>
<b><?php echo $this->_tpl_vars['InfoNa']; ?>
</b><input name="textfield" type="text" id="textfield" size="30">
				<input name="btn_getinfolist" type="button" class="search_btn" id="btn_getinfolist" value="<?php echo $this->_tpl_vars['InfoSearch']; ?>
" onclick="getinfolist();">
			</td>
			</tr>
			
			<tr>					
				<td align="left" colspan="3" valign="top">&nbsp;</td>
			</tr>					
			<tr>
				<td align="left">
					<table border="0" cellpadding="0" cellspacing="0">
						<tr>
							<th align="center" bgcolor="#96C3F0">===<?php echo $this->_tpl_vars['InfoRelated']; ?>
===</th>
							<th align="center">&nbsp;</th>
							<th align="center" bgcolor="#96C3F0">===<?php echo $this->_tpl_vars['InfoRead']; ?>
===</th>
						</tr>
						<tr>
							<td align="center">
								<div id="putselinfo"><select name="users_group" size="10" style="width:260px;"></select></div>
							</td>
							<td align="center" valign="middle">
								<input type="button" value="<?php echo $this->_tpl_vars['BtnAdd']; ?>
=&gt;" onClick="addgroup();"><br><input type="button" value="&lt;=<?php echo $this->_tpl_vars['BtnOut']; ?>
" onClick="delgroup();">
							</td>
							<td align="center">
								<input type="hidden" name="ReadGroupId" id="ReadGroupId" value="<?php echo $this->_tpl_vars['readgroupid']; ?>
"><?php echo $this->_tpl_vars['selectedgp']; ?>

							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>				
				<td align="center" colspan="3">
					<?php echo $this->_tpl_vars['SaveNew']; ?>
<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
"><INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
">
				</td>
			</tr>
		</table>
	</div>	
	
	<div class="TabbedPanelsContent" id="TabbedPanelsContent5">
	<!-- 檔案上傳 -->
		<table border="0" cellpadding="2" cellspacing="2" width="100%" height="100%">			
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['FileText']; ?>
</th>
				<td align="left" colspan="2"><INPUT TYPE="text" NAME="File_Text" size="50"></td>
			</tr>	
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['UploadFile']; ?>
</th>
				<td align="left" colspan="2"><input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $this->_tpl_vars['maxfilesize']; ?>
"><INPUT TYPE="file" NAME="myfile" size="50"><input type="submit" value="<?php echo $this->_tpl_vars['BtnUpload']; ?>
"></td>
			</tr>				
			<tr><td colspan=3><table id="allfiletable" width="80%">
				<tr>
					<th align="center" width="200"><?php echo $this->_tpl_vars['FileNa']; ?>
</th>
					<th align="center" width="800"><?php echo $this->_tpl_vars['FileText']; ?>
</th>
					<th align="center" width="50"><?php echo $this->_tpl_vars['InfoOperator']; ?>
</th>
				</tr>
				<?php echo $this->_tpl_vars['str_infofile']; ?>

			</table></td></tr>
		</table>
	</div>
	</FORM>	
  </div>
</div>
<?php echo '
<script type="text/javascript">
<!--
	var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
	
	today = new Date();
	
	function catcalc(cal) {
        var date = cal.date;
        var time = date.getTime()
        var date1 = new Date(time);
        //field.value = date2.print("%Y/%m/%d");
		document.getElementById("f_date_a").innerText=date1.print("%Y-%m-%d");
    }
    Calendar.setup({
    inputField     :    "f_date_a",   // id of the input field
    ifFormat       :    "%Y-%m-%d",       // format of the input field
    showsTime      :    false,
    timeFormat     :    "24",
    range          :    [today.getYear()-100,today.getYear()+100],
    onUpdate       :    catcalc
    });
	
	function catcald(cal) {
        var date = cal.date;
        var time = date.getTime()
        var date2 = new Date(time);
        //field.value = date2.print("%Y/%m/%d");
		document.getElementById("f_date_b").innerText=date2.print("%Y-%m-%d");
    }
    Calendar.setup({
    inputField     :    "f_date_b",   // id of the input field
    ifFormat       :    "%Y-%m-%d",       // format of the input field
    showsTime      :    false,
    timeFormat     :    "24",
    range          :    [today.getYear()-100,today.getYear()+100],
    onUpdate       :    catcald
    });	

//-->
</script>
'; ?>

<!-- 頁籤終 -->

</div>
<script>repeatchk(1);</script>
<script>repeatchk(2);</script>
<?php echo $this->_tpl_vars['temp_log']; ?>
</body>
</html>