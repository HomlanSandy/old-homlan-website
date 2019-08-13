<?php
/*
	2010-06-09 edit by 廷俊
	------------------------------------------------------
	PHP程式輸出文字網頁(text/html)，錯誤訊息編碼為utf-8
	----------------------------------------------------	
*/	
header("Content-type:text/html; charset=utf-8");

require(dirname(__FILE__) . '/inc/init_start.php');

/*載入語言檔*/
require('../languages/zh_tw/hmanager/lang_infosimport.php');

//登入驗證
require("hmanager_chk.php");

//啟用 Zend 引擎 1 (PHP 4) 相容模式。 
ini_set('zend.ze1_compatibility_mode', '0');

/*
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	infosimport.php		後台批次匯入明細 的 PHP處理頁面
	│	開發者		│	廷俊
	│	版本		│	v2.0.5.0122301
	├=======================================================================================┤
	│	1.	v2.0.5.0122301	2010/12/23	廷俊	新增批次匯入明細的功能頁面
	└=======================================================================================┘
*/

if ($_REQUEST['act']==''){$_REQUEST['act']='list';}

if ($_REQUEST['act']=="list"){
/*
	2010-09-14 edit by 廷俊
	----------------------------------------------------
	儲存成功提示訊息
	---------------------------------------------------- 
*/
	if($_REQUEST['na']!=""){
		$UpData=str_replace("%infos_import%",$_REQUEST['na'],$_LANG['UpData']);
		$smarty->assign('Message',$UpData);
	}

	$smarty->assign("PageTitle_infosimport",$_LANG['PageTitle_infosimport']);
	$smarty->assign("infosUpload",$_LANG['infosUpload']);
	$smarty->assign("infosdownload",$_LANG['infosdownload']);
	$download_url="../temp/Simple_Infos.xls";
	$smarty->assign("download_url",$download_url);	
	$smarty->assign("downloaded",$_LANG['downloaded']);
	$savefrm_url="infosimport.php?act=save";
	$smarty->assign("savefrm_url",$savefrm_url);	
	$smarty->assign("Btn_Save",$_LANG['Btn_Save']);
	$smarty->assign("upload_select",$_LANG['upload_select']);
	$smarty->assign("upload_format",$_LANG['upload_format']);
	$smarty->assign("ps",$_LANG['ps']);
	
	//載入PHPExcel
 	error_reporting(E_ALL);  //開啟錯誤顯示
	set_include_path(get_include_path() . PATH_SEPARATOR . '../includes/PHPExcel/Classes/');  //設定class路徑
	include 'PHPExcel.php';  //include必要程式
	include 'PHPExcel/Writer/Excel5.php';  //使用Excel 2003以下的版本

	$objPHPExcel = new PHPExcel();  //調用PHPExcel class
	$objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);  //調用Excel 2003以下的版本
	$objPHPExcel->setActiveSheetIndex(0);  //設定動作Sheet  
	
	//指定明細匯入的欄位名稱標題儲存格內容
	//$objPHPExcel->getActiveSheet()->setCellValue("A1","明細編號");
	//$objPHPExcel->getActiveSheet()->setCellValue("A1","明細自定編號");
	$objPHPExcel->getActiveSheet()->setCellValue("A1","明細名稱");
	$objPHPExcel->getActiveSheet()->setCellValue("B1","簡單說明");
	//$objPHPExcel->getActiveSheet()->setCellValue("A1","簡單說明2");
	$objPHPExcel->getActiveSheet()->setCellValue("C1","詳細說明");
	$objPHPExcel->getActiveSheet()->setCellValue("D1","資訊縮圖");
	$objPHPExcel->getActiveSheet()->setCellValue("E1","資訊大圖");
	$objPHPExcel->getActiveSheet()->setCellValue("A1","商品排序");
	$objPHPExcel->getActiveSheet()->setCellValue("A1","資訊狀態");
	$objPHPExcel->getActiveSheet()->setCellValue("A1","首頁是否顯示");
	//$objPHPExcel->getActiveSheet()->setCellValue("A1","瀏覽人數");
	//$objPHPExcel->getActiveSheet()->setCellValue("A1","瀏覽人數統計起始日期");
	$objPHPExcel->getActiveSheet()->setCellValue("A1","上架日期");
	$objPHPExcel->getActiveSheet()->setCellValue("A1","下架日期");
	//$objPHPExcel->getActiveSheet()->setCellValue("A1","建立日期");
	//$objPHPExcel->getActiveSheet()->setCellValue("A1","建立者");
	//$objPHPExcel->getActiveSheet()->setCellValue("A1","建立IP");
	//$objPHPExcel->getActiveSheet()->setCellValue("A1","修改日期");
	//$objPHPExcel->getActiveSheet()->setCellValue("A1","修改者");
	//$objPHPExcel->getActiveSheet()->setCellValue("A1","修改IP");
	$objPHPExcel->getActiveSheet()->setCellValue("A1","商品貨號");
	$objPHPExcel->getActiveSheet()->setCellValue("A1","訂價");
	$objPHPExcel->getActiveSheet()->setCellValue("A1","售價");
	$objPHPExcel->getActiveSheet()->setCellValue("A1","會員等級群組");
	$objPHPExcel->getActiveSheet()->setCellValue("A1","折扣群組");
	$objPHPExcel->getActiveSheet()->setCellValue("A1","庫存");
	$objPHPExcel->getActiveSheet()->setCellValue("A1","安全庫存");
	$objPHPExcel->getActiveSheet()->setCellValue("A1","屬性");

	$objPHPExcel->getActiveSheet()->setTitle('Simple');  //指定Sheet名稱
	$objWriter->save('../temp/Simple_Users.xls');  //另存匯入名單範例Excel檔，至TEMP資料夾

	$smarty->display("infosimport.htm");	

} else if ($_REQUEST['act']=="save"){

	//設定 PHP 執行時間無限制
	set_time_limit(0); 

	//釋放記憶體
	ini_set("memory_limit","240M");
/*
	2010-11-24 edit by 廷俊
	----------------------------------------------------
	讀取Excel儲存格的值，轉換為純文字格式setReadDataOnly(true)
	---------------------------------------------------- 
*/	
	set_include_path(get_include_path() . PATH_SEPARATOR . '../includes/PHPExcel/Classes/');
	include 'PHPExcel/IOFactory.php';
	$reader = PHPExcel_IOFactory::createReader('Excel5'); // 讀取舊版 excel 檔案
	$reader->setReadDataOnly(true);	//讀取儲存格為純文字
	$PHPExcel = $reader->load($_FILES['upfile']['tmp_name']); // 檔案名稱
	$sheet = $PHPExcel->getSheet(0); // 讀取第一個工作表(編號從 0 開始)
	$highestRow = $sheet->getHighestRow(); // 取得總列數
	$highestColumn = $sheet->getHighestColumn(); // 取得總行數	
	
	$sql = "INSERT INTO `users_data` (";
	$sql .= "`users_id` ,";
	$sql .= "`users_account` ,";
	$sql .= "`users_password` ,";
	$sql .= "`users_name` ,";
	$sql .= "`users_level` ,";
	$sql .= "`users_group` ,";
	$sql .= "`users_sex` ,";
	$sql .= "`users_birth` ,";
	$sql .= "`info_state` ,";
	$sql .= "`users_email` ,";
	$sql .= "`users_country` ,";
	$sql .= "`users_msn` ,";
	$sql .= "`users_yahoo` ,";
	$sql .= "`users_skype` ,";
	$sql .= "`users_tel_home` ,";
	$sql .= "`users_tel_comp` ,";
	$sql .= "`users_cell` ,";
	$sql .= "`users_address` ,";
	$sql .= "`create_user` ,";
	$sql .= "`users_register` ,";
	$sql .= "`users_emailchk` ,";
	$sql .= "`users_emailchkno` ,";
	$sql .= "`users_emailchkdate` ,";
	$sql .= "`users_logindate` ,";
	$sql .= "`alter_user` ,";
	$sql .= "`alter_date` ,";
	$sql .= "`users_text1` ,";
	$sql .= "`users_text2` ,";
	$sql .= "`users_text3` ,";
	$sql .= "`users_text4` ,";
	$sql .= "`users_text5` ,";
	$sql .= "`users_text6` ,";
	$sql .= "`users_text7` ,";
	$sql .= "`users_text8` ,";
	$sql .= "`users_text9` ,";
	$sql .= "`users_text10` ,";
	$sql .= "`users_text11` ,";
	$sql .= "`users_text12` ";
	$sql .= ")VALUES ";

/*
	2010-11-24 edit by 廷俊
	----------------------------------------------------
	讀取Excel儲存格的值，判斷是否為純文字格式instanceof PHPExcel_RichText
	---------------------------------------------------- 
*/	
	$all_account=array();
	$all_mail=array();	
	$lines=array();
	
	//讀取行數--star--
	for ($row = 2; $row <= $highestRow; $row++){
	
		$all_val = "";
		//串接所有欄位值
		for ($column = 0; $column <= ord($highestColumn)-65; $column++){
			$val = trim($sheet->getCellByColumnAndRow($column,$row)->getValue());
			$val = ($val instanceof PHPExcel_RichText)?$val->getPlainText():$val;
			$all_val .= $val;
		}
		
		//排除所有欄位值為空的行數--star--
		if(trim($all_val)!=""){
		
			//讀取欄位值
			for ($column = 0; $column <= ord($highestColumn)-65; $column++){
				$val = trim($sheet->getCellByColumnAndRow($column,$row)->getValue());
				$val = ($val instanceof PHPExcel_RichText)?$val->getPlainText():$val;
				
				//若為會員帳號欄位
				if($column == 1){
					//驗證帳號格式
					if (!eregi("^[_\.0-9a-z-]+$",$val)){
						$strcmd ="<script>";
						$strcmd.="alert('".str_replace("%row%",$row,$_LANG['err_account'])."');";
						$strcmd.="location.href='usersimport.php?act=list';";
						$strcmd.="</script>";					
						echo $strcmd;
						exit;						
					}
					//驗證帳號是否重複
					$sql_chk="select users_account from users_data where users_account='".$val."';";
					$result_chk=mysql_query($sql_chk);
					if ($result_chk){$num_chk=mysql_num_rows($result_chk);} else {$num_chk=0;}
					for ($i = 0; $i <= count($all_account); $i++){
						if($val==$all_account[$i] || $num_chk>0){
							$strcmd ="<script>";
							$strcmd.="alert('".str_replace("%row%",$row,$_LANG['Repeat_account'])."');";
							$strcmd.="location.href='usersimport.php?act=list';";
							$strcmd.="</script>";					
							echo $strcmd;
							exit;
						}
					}
					//新增記錄此行數的帳號，到待驗證的帳號陣列
					$all_account[]=$val;
			
				//會員email欄位
				}else if($column == 2){
					//驗證email格式
					if (!eregi("^[_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3}$",$val)){
						$strcmd ="<script>";
						$strcmd.="alert('".str_replace("%row%",$row,$_LANG['err_mail'])."');";
						$strcmd.="location.href='usersimport.php?act=list';";
						$strcmd.="</script>";					
						echo $strcmd;	
						exit;						
					}
					//驗證email是否重複
					$sql_chk="select users_email from users_data where users_email='".$val."';";
					$result_chk=mysql_query($sql_chk);
					if ($result_chk){$num_chk=mysql_num_rows($result_chk);} else {$num_chk=0;}
					for ($i = 0; $i <= count($all_mail); $i++){
						if($val==$all_mail[$i] || $num_chk>0){
							$strcmd ="<script>";
							$strcmd.="alert('".str_replace("%row%",$row,$_LANG['Repeat_mail'])."');";
							$strcmd.="location.href='usersimport.php?act=list';";
							$strcmd.="</script>";					
							echo $strcmd;
							exit;
						}
					}
					//新增記錄此行數的email，到待驗證的email陣列
					$all_mail[]=$val;
				}
				
				//新增此行數的所有欄位值，到欲存入DB的陣列
				$lines[$column] = $val; 
			}
			
			$sql .= "(";
			$sql .= "NULL ,";									//users_id 編號預設值
			$sql .= "'".$lines[1]."',";							//users_account 帳號
			$sql .= "'".md5("0000")."',";						//users_password 密碼預設0000
			$sql .= "'".$lines[0]."',";							//users_name 姓名
			$sql .= "'0',";										//users_level 折扣等級預設0
			$sql .= "'1',";										//users_group 閱讀權限預設為一般會員
			$sql .= "'0',";										//users_sex 性別預設保密
			$sql .= "'".$lines[3]."',";							//users_birth 生日
			$sql .= "'0',";										//info_state
			$sql .= "'".$lines[2]."',";							//users_email 會員email 
			$sql .= "'',";										//users_country
			$sql .= "'".$lines[4]."',";							//users_msn MSN 
			$sql .= "'".$lines[5]."',";							//users_yahoo Yahoo即時通 
			$sql .= "'".$lines[6]."',";							//users_skype SKYPE 
			$sql .= "'".$lines[7]."',";							//users_tel_home 家裡電話
			$sql .= "'".$lines[8]."',";							//users_tel_comp 公司電話 
			$sql .= "'".$lines[9]."',";							//users_cell 行動電話
			$sql .= "'".$lines[10]."',";						//users_address 地址
			$sql .= "'".$_SESSION[$path]['manager_id']."',";//create_user 建立者
			$sql .= "'".date('Y-m-d H:i:s')."',";				//users_register 會員註冊時間
			$sql .= "'1',";										//users_emailchk email驗證開關
			$sql .= "'',";										//users_emailchkno email驗證號碼
			$sql .= "'".date('Y-m-d H:i:s')."',";				//users_emailchkdate 會員驗證時間
			$sql .= "'',";										//users_logindate 登入時間
			$sql .= "'0',";										//alter_user 修改者
			$sql .= "'',";										//alter_date 修改時間
			$sql .= "'".$lines[11]."',";						//users_text1 自訂欄位1 
			$sql .= "'".$lines[12]."',";						//users_text2 自訂欄位2 
			$sql .= "'".$lines[13]."',";						//users_text3 自訂欄位3 
			$sql .= "'".$lines[14]."',";						//users_text4 自訂欄位4
			$sql .= "'".$lines[15]."',";						//users_text5 自訂欄位5 
			$sql .= "'".$lines[16]."',";						//users_text6 自訂欄位6 
			$sql .= "'".$lines[17]."',";						//users_text7 自訂欄位7 
			$sql .= "'".$lines[18]."',";						//users_text8 自訂欄位8 
			$sql .= "'".$lines[19]."',";						//users_text9 自訂欄位9
			$sql .= "'".$lines[20]."',";						//users_text10 自訂欄位10 
			$sql .= "'".$lines[21]."',";						//users_text11 自訂欄位11 
			$sql .= "'".$lines[22]."'),";						//users_text12 自訂欄位12 			
		}
		//排除所有欄位值為空的行數--end--
	}
	//讀取行數--end--
	$sql=substr($sql,0,-1).";";
	mysql_query($sql);

	$strcmd="<script>location.href='usersimport.php?act=list&na=".$_FILES['upfile']['name']."';</script>";					
	echo $strcmd;
/*
	2010-11-25 edit by 廷俊
	----------------------------------------------------
	管理者記錄->新增
	---------------------------------------------------- 			
	2010-12-01 edit by 廷俊
	----------------------------------------------------
	superadmin也要儲存到管理者記錄
	----------------------------------------------------
*/
	if ($_SESSION[$path]['superadmin_id']=="superadmin"){
		$LoginId=$_SESSION[$path]['superadmin_id'];
	}else{
		$LoginId=$_SESSION[$path]['login_id'];
	}
	$manager_log="insert into manager_log (";
	$manager_log.="log_time,";
	$manager_log.="log_ip,";
	$manager_log.="log_func,";
	$manager_log.="log_operate,";
	$manager_log.="log_content,";
	$manager_log.="login_id,";
	$manager_log.="manager_id,";
	$manager_log.="manager_na";
	$manager_log.=")values(";
	$manager_log.="'".date('Y-m-d H:i:s')."',";
	$manager_log.="'".$host."',";
	$manager_log.="'".basename($_SERVER['PHP_SELF'])."',";
	$manager_log.="'insert',";
	$manager_log.="'',";
	$manager_log.="'".$LoginId."',";
	$manager_log.="'".$_SESSION[$path]['manager_id']."',";
	$manager_log.="'".$_SESSION[$path]['manager_na']."'";
	$manager_log.=");";
	mysql_query($manager_log);	

}
?>