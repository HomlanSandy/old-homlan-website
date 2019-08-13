<?php /* Smarty version 2.6.26, created on 2012-07-10 09:18:49
         compiled from product.htm */ ?>
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
	│	程式用途	│	product.htm		商品明細編輯 的 htm檔
	│	開發者		│	廷俊
	│	版本		│	v1.0.0.0073001
	├=======================================================================================┤
	│	1.	v1.0.1.0073001	2010/07/30	廷俊	新增、修改資訊明細成功提示訊息
	│	2.	v1.0.1.0080501	2010/08/05	廷俊	a.折扣設定、庫存設定觸發radio的動態表單處理
	│											b.商品折扣設定：動態產生會員等級，供商品個別設定使用
	│											c.商品定價、售價、庫存量：驗證空白、和整數型態
	│	3.	v1.0.1.0080601	2010/08/06	廷俊	a.當商品安全庫存管制時，驗證安全庫存的整數型態
	│											b.當商品折扣為個別設定時，會員折扣等級必須為0~100的數值	
	│											c.商品的折扣設定是參照會員等級，而非會員群組
	│	4.	v1.0.1.0081001	2010/08/10	廷俊	判斷是否入輸入折扣、安全庫存後，再驗證數值
	│	5.	v1.0.1.0081201	2010/08/12	廷俊	a.更改明細編輯頁的頁籤順序
	│											b.變更會員折扣、安全庫存的版面配置
	│											c.不需驗證庫存量，若無輸入庫存量系統將預設為0。
	│	6.	v1.0.1.0081301	2010/08/13	廷俊	a.商品明細的會員折扣等級設定、安全庫存管制設定，權限需要再參數設定→商品設定中才可設定
	│											b.disabled會員折扣等級設定、安全庫存管制設定
	│	7.	v1.0.1.0090201	2010/09/02	廷俊	a.基本資料頁籤中的定價、售價，拉到會員折扣設定頁籤
	│											b.會員價試算：會員價=售價*會員折扣*分類折扣*商品折扣
	│											c.更改售價時，動態改變售價、會員價
	│											d.更改會員折扣等級時，動態改變會員折扣、會員價
	│	8.	v1.0.1.0090301	2010/09/03	廷俊	遮蔽分類折扣
	│	9.	v1.0.1.0090601	2010/09/06	廷俊	售價警告：售價不可低於定價的設定%數
	│	10.	v1.0.1.0090701	2010/09/07	廷俊	a.當售價設定為-1時，前台將不開放購買此商品。
	│											b.售價警示和資料儲存時，不驗證售價=-1
	│											c.試算會員價，動態觸發會員折扣等級、售價的輸入格式有誤時，預設為0
	│	11.	v1.0.1.0092401	2010/09/24	廷俊	a.當售價設定為0時，前台只顯示定價以及需求單功能，將不開放購物車功能。
	│											b.當售價設定為-1時，前台則不顯示任何價格、以及不開放購物車與需求單功能。
	│	12.	v1.0.1.0092701	2010/09/27	廷俊	後台會員價試算中，顯示會員價的TEXT文字顏色為黑色
	│	13.	v2.0.1.0111501	2010/11/15	廷俊	a.編輯明細頁面時，新增另存新檔的功能按鈕
	│											b.另存新檔時，觸發儲存新檔時需要的欄位條件與欄位ID值
	│											c.增加另存新檔的警示訊息
	│											d.各頁籤增加另存新檔的功能按鈕
	│											e.欲設新增的infos_id(另存新檔可用)
	│	14.	v2.0.2.0120301	2010/12/03	廷俊	當定價設定為0時，前台將不顯示定價
	│	15.	v2.0.8.1020901	2011/02/09	廷俊	1.幣值最小單位的設定值
	│											2.統一正整數的正規表示式
	│											3.統一浮點數的正規表示式
	│											4.依幣值最小單位的設定值，決定幣值驗證的正規表示式
	│											5.驗證訂價，需符合幣值最小單位的設定值
	│											6.驗證售價，需符合幣值最小單位的設定值
	│											7.更改商品售價時，觸發折扣設定的動態表單，但需符合商品售價的驗證格式
	│											8.更改會員折扣等級時，動態改變會員折扣、會員價，但需符合浮點數的正規表示式
	│											9.會員價的幣值計算，幣值計算四捨五入至小數點後的幾位數，依幣值最小單位的設定值決定
	│	16.	v2.0.8.1030801	2011/03/08	廷俊	新增商品明細大小圖圖像設定的備註說明
	│	17.	v03.00.01.1031801	2011/03/31	廷俊	新增簡單說明的備註說明，需提示字串擷取的長度
	│	18.	v03.00.10.1062001	2011-06-29	玉玲	1.新增css樣式項目說明text_note。
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
	2010-08-05 edit by 廷俊
	------------------------------------------------------
	折扣設定、庫存設定觸發radio的動態表單處理
	------------------------------------------------------		
	2010-11-15 edit by 廷俊
	------------------------------------------------------
	1.編輯明細頁面時，新增另存新檔的功能按鈕
	2.另存新檔時，觸發儲存新檔時需要的欄位條件與欄位ID值
	3.增加另存新檔的警示訊息
	4.各頁籤增加另存新檔的功能按鈕
	------------------------------------------------------		
*/	
var users_rank_sun="<?php echo $this->_tpl_vars['users_rank_sun']; ?>
";
var DiscountSet_user_text="<?php echo $this->_tpl_vars['DiscountSet_user_text']; ?>
";
var DiscountSet_sys_text="<?php echo $this->_tpl_vars['DiscountSet_sys_text']; ?>
";
var DiscountSet_off_text="<?php echo $this->_tpl_vars['DiscountSet_off_text']; ?>
";
var StockSet_on_text="<?php echo $this->_tpl_vars['StockSet_on_text']; ?>
";
var StockSet_off_text="<?php echo $this->_tpl_vars['StockSet_off_text']; ?>
";
var warming_na="<?php echo $this->_tpl_vars['warming_na']; ?>
";
var warming_fix="<?php echo $this->_tpl_vars['warming_fix']; ?>
";
var warming_sale="<?php echo $this->_tpl_vars['warming_sale']; ?>
";
var warming_int_fix="<?php echo $this->_tpl_vars['warming_int_fix']; ?>
";
var warming_int_sale="<?php echo $this->_tpl_vars['warming_int_sale']; ?>
";
var warming_int_stock="<?php echo $this->_tpl_vars['warming_int_stock']; ?>
";
var warming_int_stock_safe="<?php echo $this->_tpl_vars['warming_int_stock_safe']; ?>
";
var warming_int_DiscountRank="<?php echo $this->_tpl_vars['warming_int_DiscountRank']; ?>
";
var warming_id="<?php echo $this->_tpl_vars['warming_id']; ?>
";
var warming_delfile="<?php echo $this->_tpl_vars['warming_delfile']; ?>
";
var warming_delpic="<?php echo $this->_tpl_vars['warming_delpic']; ?>
";
var warming_date="<?php echo $this->_tpl_vars['warming_date']; ?>
";
var price_alerts="<?php echo $this->_tpl_vars['price_alerts']; ?>
";
var rate="<?php echo $this->_tpl_vars['rate']; ?>
";
var warming_PriceAlerts="<?php echo $this->_tpl_vars['warming_PriceAlerts']; ?>
";
var SaveNew_id="<?php echo $this->_tpl_vars['SaveNew_id']; ?>
";
var warming_SaveNew="<?php echo $this->_tpl_vars['warming_SaveNew']; ?>
";
var currency_units="<?php echo $this->_tpl_vars['currency_units']; ?>
";		//幣值最小單位的設定值

<?php echo '

//統一正整數的正規表示式
var ck_int = /^\\d+$/;
//統一浮點數的正規表示式
var ck_float=/^\\d+(\\.\\d+)?$/;

//依幣值最小單位的設定值，決定幣值驗證的正規表示式
switch(currency_units){
	case "0":
		var ck_currency = ck_int;
		break;
	case "1":
		var ck_currency = /^\\d+(\\.\\d{1,1})?$/;
		break;
	case "2":
		var ck_currency = /^\\d+(\\.\\d{1,2})?$/;
		break;
	case "3":
		var ck_currency = /^\\d+(\\.\\d{1,3})?$/;
		break;
}

	//新增商品分頁
	function AddInfocats(){ 
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
	
	//刪除商品分頁
	function DelInfocats(){ 
		var infocatnum = document.getElementById("InfocatNum").value;
		var rowsCount=document.all(\'TableInfocat\').rows.length;
		if (rowsCount>1){
			document.all(\'TableInfocat\').deleteRow(rowsCount-1);
			document.getElementById("InfocatNum").innerText = infocatnum-1;
		}
	}
	
	//刪除附檔
	function deldoc(id){ 
		if (confirm(warming_delfile)){
			var td = event.srcElement.parentElement;
			var tr = td.parentElement;
			var tbl = tr.parentElement;
			tbl.deleteRow(tr.rowIndex);
			document.getElementById("outputTarget").src = "productlist.php?act=deldoc&id="+id;
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
/* 	function delbigphoto(){ 
		document.getElementById("unlinkfile1").innerText=event.srcElement.value;
		var td = event.srcElement.parentElement;
		var tr = td.parentElement;
		var tbl = tr.parentElement;
		tbl.deleteRow(tr.rowIndex);
		document.getElementById("putbigfile").innerHTML="<INPUT TYPE=file id=Pic_Big NAME=Pic_Big size=50>";
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
/* 	function delsmallphoto(){ 
		document.getElementById("unlinkfile2").innerText=event.srcElement.value;
		var td = event.srcElement.parentElement;
		var tr = td.parentElement;
		var tbl = tr.parentElement;
		tbl.deleteRow(tr.rowIndex);
		document.getElementById("putsmallfile").innerHTML="<INPUT TYPE=file id=Pic_Small NAME=Pic_Small size=50>";
	} */
	
	//相關商品搜尋
	function getinfolist(){ 
		var selinfocatid = document.getElementById("selrelateid").options[document.getElementById("selrelateid").selectedIndex].value;
		var txtna = document.getElementById("textfield").value;		
		document.getElementById("outputTarget").src = "productlist.php?act=getlist&cid=" + selinfocatid + "&na=" + txtna;
	}
	
	//移除相關商品
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

	//加入相關商品
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
	
/*
	2010-08-05 edit by 廷俊
	------------------------------------------------------
	商品定價、售價、庫存量：驗證空白、和整數型態
	------------------------------------------------------	
	2010-08-06 edit by 廷俊
	------------------------------------------------------
	a.當商品安全庫存管制時，驗證安全庫存的整數型態
	b.當商品折扣為個別設定時，會員折扣等級必須為0~100的數值
	------------------------------------------------------		
	2010-08-10 edit by 廷俊
	------------------------------------------------------
	判斷是否入輸入折扣、安全庫存後，再驗證數值
	------------------------------------------------------		
	2010-08-12 edit by 廷俊
	------------------------------------------------------
	不需驗證庫存量，若無輸入庫存量系統將預設為0。
	------------------------------------------------------	
	2010-09-06 edit by 廷俊
	------------------------------------------------------
	售價警告：售價不可低於定價的設定%數
	------------------------------------------------------		
	2010-09-07 edit by 廷俊
	------------------------------------------------------
	售價警示和資料儲存時，不驗證售價=-1
	------------------------------------------------------		
	2010-09-24 edit by 廷俊
	------------------------------------------------------	
	1.當售價設定為0時，前台只顯示定價以及需求單功能，將不開放購物車功能。
	2.當售價設定為-1時，前台則不顯示任何價格、以及不開放購物車與需求單功能。
	------------------------------------------------------
*/

	//存檔防呆
	function chkpost(){
		msg="";
		var Info_Na=document.getElementById("Info_Na").value;
		var price_fix=document.getElementById("price_fix").value;
		var price_sale=document.getElementById("price_sale").value;
		var stock=document.getElementById("stock").value;
		var stock_safe=document.getElementById("stock_safe").value;
		//驗證商品名稱
		if(Info_Na==\'\'){
			msg += warming_na + "\\r\\n";
		}
		//驗證訂價，需符合幣值最小單位的設定值
		if(price_fix==\'\'){
			msg += warming_fix + "\\r\\n";
		}else if(!ck_currency.test(price_fix)){
			msg += warming_int_fix + "\\r\\n";
		}
		//驗證售價，需符合幣值最小單位的設定值
		if(price_sale==\'\'){
			msg += warming_sale + "\\r\\n";
		}else if(!ck_currency.test(price_sale) && price_sale!="-1"){
			msg += warming_int_sale + "\\r\\n";
		}
		//驗證庫存
		if(stock!=\'\'){
			if(!ck_int.test(stock)){
				msg += warming_int_stock + "\\r\\n";
			}
		}
		//驗證上、下架日期
		if(document.getElementById("f_date_b").value > document.getElementById("f_date_a").value){
			msg += warming_date + "\\r\\n";
		}
		//驗證個別設定的會員折扣等級的折扣率
		var chk=false;
		if(document.getElementsByName("discount_set")[0].checked){
			for(i=1;i<=users_rank_sun;i++){
				users_rank=document.getElementById("users_rank"+i).value;
				if(users_rank!=""){
					if(!ck_float.test(users_rank) || users_rank<0 || users_rank>100){
						chk=true;
					}
				}
			}
			if(chk==true){
				msg += warming_int_DiscountRank + "\\r\\n";
			}
		}
		//驗證管制安全庫存的安全庫存量
		if(document.getElementsByName("stock_set")[0].checked){
			if(stock_safe!=""){
				if(!ck_int.test(stock_safe)){
					msg += warming_int_stock_safe + "\\r\\n";
				}
			}
		}
		//驗證售價警示
		if(price_alerts==1 && price_sale!="-1" && price_sale!="0"){
			if(price_sale < price_fix*parseFloat(rate)/100){
				msg += warming_PriceAlerts.replace("%Rate%",rate); + "\\r\\n";
			}
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
		if (source.length>0){
			for(var i=0;i<=source.length-1;i++){
				for(var j=0;j<=dest.length-1;j++){
					if (source.options[i].value==dest.options[j].value){						
						source.remove(i);			
					}
				}			
			}
		}
*/

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
	2010-08-05 edit by 廷俊
	------------------------------------------------------
	折扣設定、庫存設定觸發radio的動態表單處理
	------------------------------------------------------		
	2010-08-12 edit by 廷俊
	------------------------------------------------------
	變更會員折扣、安全庫存的版面配置
	------------------------------------------------------		
	2010-09-02 edit by 廷俊
	------------------------------------------------------	
	a.基本資料頁籤中的定價、售價，拉到會員折扣設定頁籤
	b.會員價試算：會員價=售價*會員折扣*分類折扣*商品折扣
	c.更改售價時，動態改變售價、會員價
	d.更改會員折扣等級時，動態改變會員折扣、會員價
	------------------------------------------------------
	2010-09-03 edit by 廷俊
	------------------------------------------------------	
	遮蔽分類折扣
	------------------------------------------------------
	2010-09-07 edit by 廷俊
	------------------------------------------------------	
	試算會員價，動態觸發會員折扣等級、售價的輸入格式有誤時，預設為0
	------------------------------------------------------
	2010-09-27 edit by 廷俊
	------------------------------------------------------	
	後台會員價試算中，顯示會員價的TEXT文字顏色為黑色
	------------------------------------------------------
*/
	//觸發radio的動態處理
	function dynamic(){
	
	//折扣設定的動態表單
		//更改商品售價時，觸發折扣設定的動態表單，但需符合商品售價的驗證格式
		price_sale=document.getElementById("price_sale").value;
		if(!ck_currency.test(price_sale)){
			price_sale=0;
		}
		//更改售價時，動態改變售價、會員價
		for(i=1;i<=users_rank_sun;i++){		
			document.getElementById("price_sale"+i).value=price_sale;
			rank_value=document.getElementById("rank_value"+i).value;
			//遮蔽分類折扣price_category=document.getElementById("price_category"+i).value;
			price_product=document.getElementById("price_product"+i).value;
			//遮蔽分類折扣price_a=parseFloat(price_sale)*parseFloat(rank_value)/100*parseFloat(price_category)/100*parseFloat(price_product)/100;
			price_a=parseFloat(price_sale) * parseFloat(rank_value)/100 * parseFloat(price_product)/100;
			//會員價的幣值計算，四捨五入至小數點後的幾位數，依幣值最小單位的設定值決定
			price_a=Math.round(price_a * Math.pow(10,currency_units)) / Math.pow(10,currency_units);
			document.getElementById("users_price"+i).value=price_a;
		}
		//個別設定
		if(document.getElementsByName("discount_set")[0].checked){		
			for(i=1;i<=users_rank_sun;i++){
				document.getElementById("users_rank"+i).disabled=false;
				//更改會員折扣等級時，動態改變會員折扣、會員價，但需符合浮點數的正規表示式
				rank_value=document.getElementById("users_rank"+i).value;
				if(!ck_float.test(rank_value)){
					rank_value=0;
				}
				document.getElementById("rank_value"+i).value=rank_value+"%";
				//遮蔽分類折扣price_a=parseFloat(price_sale)*parseFloat(rank_value)/100*parseFloat(price_category)/100*parseFloat(price_product)/100;	
				price_a=parseFloat(price_sale) * parseFloat(rank_value)/100 * parseFloat(price_product)/100;
				//會員價的幣值計算，幣值計算四捨五入至小數點後的幾位數，依幣值最小單位的設定值決定
				price_a=Math.round(price_a * Math.pow(10,currency_units)) / Math.pow(10,currency_units);
				document.getElementById("users_price"+i).value=price_a;
			}
			document.getElementById("DiscountRankText").innerHTML=DiscountSet_user_text;
			
		//統一、啟用	
		}else{		
			for(i=1;i<=users_rank_sun;i++){
				document.getElementById("users_rank"+i).disabled=true;
			}
			//統一
			if(document.getElementsByName("discount_set")[1].checked){		
				document.getElementById("DiscountRankText").innerHTML=DiscountSet_sys_text;
			//不啟用	
			}else{		
				document.getElementById("DiscountRankText").innerHTML=DiscountSet_off_text;
			}
		}
		
	//庫存設定的動態表單
		if(document.getElementsByName("stock_set")[0].checked){
			document.getElementById("StockSafe").disabled=false;
			document.getElementById("stock_safe").disabled=false;
			document.getElementById("StockSafeSetText").innerHTML=StockSet_on_text;
		}else{
			document.getElementById("StockSafe").disabled=true;
			document.getElementById("stock_safe").disabled=true;
			document.getElementById("StockSafeSetText").innerHTML=StockSet_off_text;
		}
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
<body onload="dynamic();">
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
	新增、修改商品明細成功提示訊息
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
	2011-03-31 edit by 廷俊
	------------------------------------------------------
	新增簡單說明的備註說明，需提示字串擷取的長度
	------------------------------------------------------	
*/	-->
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
    <li class="TabbedPanelsTab" tabindex="0"><?php echo $this->_tpl_vars['DiscountSet']; ?>
</li>
    <li class="TabbedPanelsTab" tabindex="0"><?php echo $this->_tpl_vars['StockSet']; ?>
</li>
	<li class="TabbedPanelsTab" tabindex="0"><?php echo $this->_tpl_vars['InfoUpload']; ?>
</li>
  </ul>
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent">
	<!-- 基本資料 -->
	<FORM METHOD="POST" enctype="multipart/form-data" ACTION="productlist.php?act=save" onsubmit="return chkpost();">
		<table border="0" cellpadding="2" cellspacing="2" align=""  width="80%" height="100%">
			<tr>
				<th align="right"></th>
				<td align="left">
					<INPUT TYPE="hidden" NAME="infos_id" id="infos_id" value="<?php echo $this->_tpl_vars['infos_id']; ?>
">
					<INPUT TYPE="hidden" NAME="updocs_id" id="updocs_id" value="<?php echo $this->_tpl_vars['updocs_id']; ?>
">
				</td>
			</tr>
			<tr style="display:none">
				<th align="right"><?php echo $this->_tpl_vars['InfoId']; ?>
</th>
				<td align="left">
					<INPUT TYPE="text" NAME="Info_CusId" value="<?php echo $this->_tpl_vars['infos_cusrid']; ?>
">
					<span style="color:red;">*</span>
				</td>
			</tr>	
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['InfoNa']; ?>
</th>
				<td align="left">
					<INPUT TYPE="text" NAME="Info_Na" id="Info_Na" size="50" value="<?php echo $this->_tpl_vars['infos_na']; ?>
">
					<span style="color:red;">*</span>
				</td>
			</tr>	
<!--
	2010-08-02 edit by 廷俊
	----------------------------------------------------
	新增商品明細：貨號、定價、售價、折扣、庫存等功能
	---------------------------------------------------- 			
-->
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['ProductId']; ?>
</th>
				<td align="left">
					<INPUT TYPE="text" NAME="product_id" id="product_id" size="50" value="<?php echo $this->_tpl_vars['product_id']; ?>
"><br>
					<span class="text_note"><?php echo $this->_tpl_vars['ProductId_text']; ?>
</span>
				</td>
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
				<table border=0 cellpadding=0 cellspacing=0>
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
						<td align="center">
							<input type="button" value="<?php echo $this->_tpl_vars['BtnAdd']; ?>
=&gt;" class="button" onclick="addSelect(1);"><br>
							<input type="button" value="&lt;=<?php echo $this->_tpl_vars['BtnOut']; ?>
" class="button" onclick="rmSelect(1);"><br>
						</td>
						<td><?php echo $this->_tpl_vars['infocatSelected']; ?>

							<input type="hidden" name="selcatidlist" id="selcatidlist" value="<?php echo $this->_tpl_vars['selcatidlist_value']; ?>
">
						</td>
						<tr>				
							<td colspan="3"><span class="text_note"><?php echo $this->_tpl_vars['allinfocatslistmemo']; ?>
</span></td>
						</tr>	
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
						<td align="center">
							<input type="button" value="<?php echo $this->_tpl_vars['BtnAdd']; ?>
=&gt;" class="button" onclick="addSelect(2);"><br>
							<input type="button" value="&lt;=<?php echo $this->_tpl_vars['BtnOut']; ?>
" class="button" onclick="rmSelect(2);"><br>
						</td>
						<td><?php echo $this->_tpl_vars['cmdmoduleselsel']; ?>

							<input type="hidden" name="selcmdidlist" id="selcmdidlist" value="<?php echo $this->_tpl_vars['selcmdidlist_value']; ?>
">
						</td>
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
				<td align="left">
					<INPUT TYPE="text" NAME="Info_Order" size="16" value="<?php echo $this->_tpl_vars['infos_order']; ?>
">
				</td>
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
	新增商品明細大小圖圖像設定的備註說明
	------------------------------------------------------		
-->			
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
				<td align="left">
					<INPUT TYPE="radio" NAME="Info_State" value="1" checked><?php echo $this->_tpl_vars['InfoStateY']; ?>

					<INPUT TYPE="radio" NAME="Info_State" value="0" <?php if ($this->_tpl_vars['infos_state'] == '0'): ?>checked<?php endif; ?>><?php echo $this->_tpl_vars['InfoStateN']; ?>

				</td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['HomeWebShow']; ?>
</th>
				<td align="left">
					<INPUT TYPE="radio" NAME="homeweb" value="1" checked><?php echo $this->_tpl_vars['HomeWebY']; ?>

					<INPUT TYPE="radio" NAME="homeweb" value="0" <?php if ($this->_tpl_vars['homeweb'] == '0'): ?>checked<?php endif; ?>><?php echo $this->_tpl_vars['HomeWebN']; ?>

				</td>
			</tr>
			<tr>
				<th align="right">&nbsp;</th>
				<td align="center">
					<?php echo $this->_tpl_vars['SaveNew']; ?>

					<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
">
					<INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
">
				</td>
			</tr>
		</table>
	</div>
	
    <div class="TabbedPanelsContent">
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
">
				<INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
">
			</td>
		</tr>
	</table>
	</div>		
	
	<div class="TabbedPanelsContent">
	<!-- 商品分頁 -->
	<table width="100%">
		<tr><td>
			<table border="0" cellpadding="1" cellspacing="1" align="" width="100%" height="100%" id="TableInfocat">
				<tr>
					<td valign="center" width="95%">
						<input id="InfocatNum" name="InfocatNum" type="hidden" value="<?php echo $this->_tpl_vars['InfocatNum']; ?>
"><?php echo $this->_tpl_vars['FCKeditor1']; ?>

					</td>
					<td width="5%" align="right" valign="top">
						<input type="button" value="<?php echo $this->_tpl_vars['Btn_Add']; ?>
" onclick="AddInfocats();">
						<input type="button" value="<?php echo $this->_tpl_vars['Btn_Delete']; ?>
" onclick="DelInfocats();">
					</td>
				</tr>
				<?php echo $this->_tpl_vars['str_infopage']; ?>

			</table>
		</td></tr>
		<tr><td align="center">
			<?php echo $this->_tpl_vars['SaveNew']; ?>

			<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
">
			<INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
">
		</td></tr>
	</table>
	</div>
	
	<div class="TabbedPanelsContent">
	<!-- 相關商品 -->
		<table border="0" cellpadding="0" cellspacing="0" align="">	
			<tr>
			<td colspan="4">
				<b><?php echo $this->_tpl_vars['Category']; ?>
</b><?php echo $this->_tpl_vars['infoSel']; ?>
<b><?php echo $this->_tpl_vars['InfoNa']; ?>
</b>
				<input name="textfield" type="text" id="textfield" size="30">
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
								<div id="putselinfo">
									<select name="users_group" size="10" style="width:260px;"></select>
								</div>
							</td>
							<td align="center" valign="middle">
								<input type="button" value="<?php echo $this->_tpl_vars['BtnAdd']; ?>
=&gt;" onClick="addgroup();"><br>
								<input type="button" value="&lt;=<?php echo $this->_tpl_vars['BtnOut']; ?>
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
">
					<INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
">
				</td>
			</tr>
		</table>
	</div>	
		
<!--
	2010-08-05 edit by 廷俊
	------------------------------------------------------
	a.折扣設定、庫存設定觸發radio的動態表單處理
	b.商品折扣設定：動態產生會員等級，供商品個別設定使用
	------------------------------------------------------		
	2010-08-12 edit by 廷俊
	------------------------------------------------------
	變更會員折扣、安全庫存的版面配置
	------------------------------------------------------		
	2010-08-13 edit by 廷俊
	------------------------------------------------------
	a.商品明細的會員折扣等級設定、安全庫存管制設定，權限需要再參數設定→商品設定中才可設定
	b.disabled會員折扣等級設定、安全庫存管制設定
	------------------------------------------------------		
	2010-09-07 edit by 廷俊
	------------------------------------------------------	
	當售價設定為-1時，前台將不開放購買此商品。
	------------------------------------------------------
	2010-12-03 edit by 廷俊
	------------------------------------------------------	
	當定價設定為0時，前台將不顯示定價。
	------------------------------------------------------
*/-->
    <div class="TabbedPanelsContent">
	<!-- 折扣設定 -->
		<table border="0" cellpadding="2" cellspacing="2" align="" width="100%" height="100%">			
			<tr>
				<th align="right" width="100px"><?php echo $this->_tpl_vars['PriceFix']; ?>
</th>
				<td align="left" colspan="2">
					<INPUT TYPE="text" NAME="price_fix" id="price_fix" value="<?php echo $this->_tpl_vars['price_fix']; ?>
">
					<span class="text_note">*<br><?php echo $this->_tpl_vars['PriceFix_text']; ?>
</span>
				</td>
			</tr>	
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['PriceSale']; ?>
</th>
				<td align="left" colspan="2">
					<INPUT TYPE="text" NAME="price_sale" id="price_sale" value="<?php echo $this->_tpl_vars['price_sale']; ?>
" onkeyup="dynamic();">
					<span class="text_note">*<br><?php echo $this->_tpl_vars['PriceSale_text']; ?>
</span>
				</td>
			</tr>	
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['DiscountRank']; ?>
</th>
				<td align="left" colspan="2">
					<INPUT TYPE="radio" NAME="discount_set" value="1" onclick="dynamic();" disabled <?php if ($this->_tpl_vars['discount_set'] == 'user'): ?>checked<?php endif; ?>><?php echo $this->_tpl_vars['DiscountSet_user']; ?>

					<INPUT TYPE="radio" NAME="discount_set" value="2" onclick="dynamic();" disabled <?php if ($this->_tpl_vars['discount_set'] == 'sys'): ?>checked<?php endif; ?>><?php echo $this->_tpl_vars['DiscountSet_sys']; ?>

					<INPUT TYPE="radio" NAME="discount_set" value="0" onclick="dynamic();" disabled <?php if ($this->_tpl_vars['discount_set'] == 'off'): ?>checked<?php endif; ?>><?php echo $this->_tpl_vars['DiscountSet_off']; ?>
<br>
					<span class="text_note" id="DiscountRankText"><?php echo $this->_tpl_vars['DiscountSet_user_text']; ?>
</span>
				</td>
			</tr>
			<tr>
				<th>&nbsp;</th>
				<td>&nbsp;</td>
				<td><?php echo $this->_tpl_vars['UsersPrice']; ?>
</td>
			</tr>
			<?php echo $this->_tpl_vars['users_rank']; ?>
		
			<tr>	
				<td align="center" colspan="3">
					<?php echo $this->_tpl_vars['SaveNew']; ?>

					<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
">
					<INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
">
				</td>
			</tr>
		</table>
	
	</div>
<!-- /*
	2010-08-05 edit by 廷俊
	------------------------------------------------------
	折扣設定、庫存設定觸發radio的動態表單處理
	------------------------------------------------------		
	2010-08-12 edit by 廷俊
	------------------------------------------------------
	a.變更會員折扣、安全庫存的版面配置
	b.不需驗證庫存量，若無輸入庫存量系統將預設為0。
	------------------------------------------------------
	2010-08-13 edit by 廷俊
	------------------------------------------------------
	a.商品明細的會員折扣等級設定、安全庫存管制設定，權限需要再參數設定→商品設定中才可設定
	b.disabled會員折扣等級設定、安全庫存管制設定
	------------------------------------------------------		
*/-->
    <div class="TabbedPanelsContent">
	<!-- 庫存設定 -->
		<table border="0" cellpadding="2" cellspacing="2" align="" width="80%" height="100%">			
			<tr>
				<th align="right" valign="top" width="100px"><?php echo $this->_tpl_vars['Stocks']; ?>
</th>
				<td align="left">
					<INPUT TYPE="text" NAME="stock" id="stock" value="<?php echo $this->_tpl_vars['stock']; ?>
"><br>
					<span class="text_note"><?php echo $this->_tpl_vars['Stocks_text']; ?>
</span>
				</td>
			</tr>
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['StockSafeSet']; ?>
</th>
				<td align="left">
					<INPUT TYPE="radio" NAME="stock_set" value="1" onclick="dynamic();" disabled <?php if ($this->_tpl_vars['stock_set'] == '1'): ?>checked<?php endif; ?>><?php echo $this->_tpl_vars['StockSet_on']; ?>

					<INPUT TYPE="radio" NAME="stock_set" value="0" onclick="dynamic();" disabled <?php if ($this->_tpl_vars['stock_set'] == '0'): ?>checked<?php endif; ?>><?php echo $this->_tpl_vars['StockSet_off']; ?>
<br>
					<span  class="text_note" id="StockSafeSetText"><?php echo $this->_tpl_vars['StockSet_on_text']; ?>
</span><br>
				</td>
			</tr>			
			<tr id="StockSafe">
				<th align="right" valign="top"><?php echo $this->_tpl_vars['StockSafe']; ?>
</th>
				<td align="left">
					<INPUT TYPE="text" NAME="stock_safe" id="stock_safe" value="<?php echo $this->_tpl_vars['stock_safe']; ?>
">
				</td>
			</tr>				
			<tr>				
				<td align="center" colspan="2">
					<?php echo $this->_tpl_vars['SaveNew']; ?>

					<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
">
					<INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
">
				</td>
			</tr>
		</table>
	</div>

	<div class="TabbedPanelsContent">
	<!-- 檔案上傳 -->
		<table border="0" cellpadding="2" cellspacing="2" width="100%" height="100%">			
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['FileText']; ?>
</th>
				<td align="left" colspan="2">
					<INPUT TYPE="text" NAME="File_Text" size="50">
				</td>
			</tr>	
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['UploadFile']; ?>
</th>
				<td align="left" colspan="2">
					<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $this->_tpl_vars['maxfilesize']; ?>
">
					<INPUT TYPE="file" NAME="myfile" size="50">
					<input type="submit" value="<?php echo $this->_tpl_vars['BtnUpload']; ?>
">
				</td>
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