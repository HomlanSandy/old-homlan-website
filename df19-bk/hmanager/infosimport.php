<?php
/*
	2010-06-09 edit by �ʫT
	------------------------------------------------------
	PHP�{����X��r����(text/html)�A���~�T���s�X��utf-8
	----------------------------------------------------	
*/	
header("Content-type:text/html; charset=utf-8");

require(dirname(__FILE__) . '/inc/init_start.php');

/*���J�y����*/
require('../languages/zh_tw/hmanager/lang_infosimport.php');

//�n�J����
require("hmanager_chk.php");

//�ҥ� Zend ���� 1 (PHP 4) �ۮe�Ҧ��C 
ini_set('zend.ze1_compatibility_mode', '0');

/*
	�z======================================�z�w�w�w�w�w�w�w�{========================================�{
	�u======================================�x �� �i �x========================================�t
	�u======================================�|�w�w�w�w�w�w�w�}========================================�t
	�x	�{���γ~	�x	infosimport.php		��x�妸�פJ���� �� PHP�B�z����
	�x	�}�o��		�x	�ʫT
	�x	����		�x	v2.0.5.0122301
	�u=======================================================================================�t
	�x	1.	v2.0.5.0122301	2010/12/23	�ʫT	�s�W�妸�פJ���Ӫ��\�୶��
	�|=======================================================================================�}
*/

if ($_REQUEST['act']==''){$_REQUEST['act']='list';}

if ($_REQUEST['act']=="list"){
/*
	2010-09-14 edit by �ʫT
	----------------------------------------------------
	�x�s���\���ܰT��
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
	
	//���JPHPExcel
 	error_reporting(E_ALL);  //�}�ҿ��~���
	set_include_path(get_include_path() . PATH_SEPARATOR . '../includes/PHPExcel/Classes/');  //�]�wclass���|
	include 'PHPExcel.php';  //include���n�{��
	include 'PHPExcel/Writer/Excel5.php';  //�ϥ�Excel 2003�H�U������

	$objPHPExcel = new PHPExcel();  //�ե�PHPExcel class
	$objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);  //�ե�Excel 2003�H�U������
	$objPHPExcel->setActiveSheetIndex(0);  //�]�w�ʧ@Sheet  
	
	//���w���ӶפJ�����W�ټ��D�x�s�椺�e
	//$objPHPExcel->getActiveSheet()->setCellValue("A1","���ӽs��");
	//$objPHPExcel->getActiveSheet()->setCellValue("A1","���Ӧ۩w�s��");
	$objPHPExcel->getActiveSheet()->setCellValue("A1","���ӦW��");
	$objPHPExcel->getActiveSheet()->setCellValue("B1","²�满��");
	//$objPHPExcel->getActiveSheet()->setCellValue("A1","²�满��2");
	$objPHPExcel->getActiveSheet()->setCellValue("C1","�Բӻ���");
	$objPHPExcel->getActiveSheet()->setCellValue("D1","��T�Y��");
	$objPHPExcel->getActiveSheet()->setCellValue("E1","��T�j��");
	$objPHPExcel->getActiveSheet()->setCellValue("A1","�ӫ~�Ƨ�");
	$objPHPExcel->getActiveSheet()->setCellValue("A1","��T���A");
	$objPHPExcel->getActiveSheet()->setCellValue("A1","�����O�_���");
	//$objPHPExcel->getActiveSheet()->setCellValue("A1","�s���H��");
	//$objPHPExcel->getActiveSheet()->setCellValue("A1","�s���H�Ʋέp�_�l���");
	$objPHPExcel->getActiveSheet()->setCellValue("A1","�W�[���");
	$objPHPExcel->getActiveSheet()->setCellValue("A1","�U�[���");
	//$objPHPExcel->getActiveSheet()->setCellValue("A1","�إߤ��");
	//$objPHPExcel->getActiveSheet()->setCellValue("A1","�إߪ�");
	//$objPHPExcel->getActiveSheet()->setCellValue("A1","�إ�IP");
	//$objPHPExcel->getActiveSheet()->setCellValue("A1","�ק���");
	//$objPHPExcel->getActiveSheet()->setCellValue("A1","�ק��");
	//$objPHPExcel->getActiveSheet()->setCellValue("A1","�ק�IP");
	$objPHPExcel->getActiveSheet()->setCellValue("A1","�ӫ~�f��");
	$objPHPExcel->getActiveSheet()->setCellValue("A1","�q��");
	$objPHPExcel->getActiveSheet()->setCellValue("A1","���");
	$objPHPExcel->getActiveSheet()->setCellValue("A1","�|�����Ÿs��");
	$objPHPExcel->getActiveSheet()->setCellValue("A1","�馩�s��");
	$objPHPExcel->getActiveSheet()->setCellValue("A1","�w�s");
	$objPHPExcel->getActiveSheet()->setCellValue("A1","�w���w�s");
	$objPHPExcel->getActiveSheet()->setCellValue("A1","�ݩ�");

	$objPHPExcel->getActiveSheet()->setTitle('Simple');  //���wSheet�W��
	$objWriter->save('../temp/Simple_Users.xls');  //�t�s�פJ�W��d��Excel�ɡA��TEMP��Ƨ�

	$smarty->display("infosimport.htm");	

} else if ($_REQUEST['act']=="save"){

	//�]�w PHP ����ɶ��L����
	set_time_limit(0); 

	//����O����
	ini_set("memory_limit","240M");
/*
	2010-11-24 edit by �ʫT
	----------------------------------------------------
	Ū��Excel�x�s�檺�ȡA�ഫ���¤�r�榡setReadDataOnly(true)
	---------------------------------------------------- 
*/	
	set_include_path(get_include_path() . PATH_SEPARATOR . '../includes/PHPExcel/Classes/');
	include 'PHPExcel/IOFactory.php';
	$reader = PHPExcel_IOFactory::createReader('Excel5'); // Ū���ª� excel �ɮ�
	$reader->setReadDataOnly(true);	//Ū���x�s�欰�¤�r
	$PHPExcel = $reader->load($_FILES['upfile']['tmp_name']); // �ɮצW��
	$sheet = $PHPExcel->getSheet(0); // Ū���Ĥ@�Ӥu�@��(�s���q 0 �}�l)
	$highestRow = $sheet->getHighestRow(); // ���o�`�C��
	$highestColumn = $sheet->getHighestColumn(); // ���o�`���	
	
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
	2010-11-24 edit by �ʫT
	----------------------------------------------------
	Ū��Excel�x�s�檺�ȡA�P�_�O�_���¤�r�榡instanceof PHPExcel_RichText
	---------------------------------------------------- 
*/	
	$all_account=array();
	$all_mail=array();	
	$lines=array();
	
	//Ū�����--star--
	for ($row = 2; $row <= $highestRow; $row++){
	
		$all_val = "";
		//�걵�Ҧ�����
		for ($column = 0; $column <= ord($highestColumn)-65; $column++){
			$val = trim($sheet->getCellByColumnAndRow($column,$row)->getValue());
			$val = ($val instanceof PHPExcel_RichText)?$val->getPlainText():$val;
			$all_val .= $val;
		}
		
		//�ư��Ҧ����Ȭ��Ū����--star--
		if(trim($all_val)!=""){
		
			//Ū������
			for ($column = 0; $column <= ord($highestColumn)-65; $column++){
				$val = trim($sheet->getCellByColumnAndRow($column,$row)->getValue());
				$val = ($val instanceof PHPExcel_RichText)?$val->getPlainText():$val;
				
				//�Y���|���b�����
				if($column == 1){
					//���ұb���榡
					if (!eregi("^[_\.0-9a-z-]+$",$val)){
						$strcmd ="<script>";
						$strcmd.="alert('".str_replace("%row%",$row,$_LANG['err_account'])."');";
						$strcmd.="location.href='usersimport.php?act=list';";
						$strcmd.="</script>";					
						echo $strcmd;
						exit;						
					}
					//���ұb���O�_����
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
					//�s�W�O������ƪ��b���A������Ҫ��b���}�C
					$all_account[]=$val;
			
				//�|��email���
				}else if($column == 2){
					//����email�榡
					if (!eregi("^[_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3}$",$val)){
						$strcmd ="<script>";
						$strcmd.="alert('".str_replace("%row%",$row,$_LANG['err_mail'])."');";
						$strcmd.="location.href='usersimport.php?act=list';";
						$strcmd.="</script>";					
						echo $strcmd;	
						exit;						
					}
					//����email�O�_����
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
					//�s�W�O������ƪ�email�A������Ҫ�email�}�C
					$all_mail[]=$val;
				}
				
				//�s�W����ƪ��Ҧ����ȡA����s�JDB���}�C
				$lines[$column] = $val; 
			}
			
			$sql .= "(";
			$sql .= "NULL ,";									//users_id �s���w�]��
			$sql .= "'".$lines[1]."',";							//users_account �b��
			$sql .= "'".md5("0000")."',";						//users_password �K�X�w�]0000
			$sql .= "'".$lines[0]."',";							//users_name �m�W
			$sql .= "'0',";										//users_level �馩���Źw�]0
			$sql .= "'1',";										//users_group �\Ū�v���w�]���@��|��
			$sql .= "'0',";										//users_sex �ʧO�w�]�O�K
			$sql .= "'".$lines[3]."',";							//users_birth �ͤ�
			$sql .= "'0',";										//info_state
			$sql .= "'".$lines[2]."',";							//users_email �|��email 
			$sql .= "'',";										//users_country
			$sql .= "'".$lines[4]."',";							//users_msn MSN 
			$sql .= "'".$lines[5]."',";							//users_yahoo Yahoo�Y�ɳq 
			$sql .= "'".$lines[6]."',";							//users_skype SKYPE 
			$sql .= "'".$lines[7]."',";							//users_tel_home �a�̹q��
			$sql .= "'".$lines[8]."',";							//users_tel_comp ���q�q�� 
			$sql .= "'".$lines[9]."',";							//users_cell ��ʹq��
			$sql .= "'".$lines[10]."',";						//users_address �a�}
			$sql .= "'".$_SESSION[$path]['manager_id']."',";//create_user �إߪ�
			$sql .= "'".date('Y-m-d H:i:s')."',";				//users_register �|�����U�ɶ�
			$sql .= "'1',";										//users_emailchk email���Ҷ}��
			$sql .= "'',";										//users_emailchkno email���Ҹ��X
			$sql .= "'".date('Y-m-d H:i:s')."',";				//users_emailchkdate �|�����Үɶ�
			$sql .= "'',";										//users_logindate �n�J�ɶ�
			$sql .= "'0',";										//alter_user �ק��
			$sql .= "'',";										//alter_date �ק�ɶ�
			$sql .= "'".$lines[11]."',";						//users_text1 �ۭq���1 
			$sql .= "'".$lines[12]."',";						//users_text2 �ۭq���2 
			$sql .= "'".$lines[13]."',";						//users_text3 �ۭq���3 
			$sql .= "'".$lines[14]."',";						//users_text4 �ۭq���4
			$sql .= "'".$lines[15]."',";						//users_text5 �ۭq���5 
			$sql .= "'".$lines[16]."',";						//users_text6 �ۭq���6 
			$sql .= "'".$lines[17]."',";						//users_text7 �ۭq���7 
			$sql .= "'".$lines[18]."',";						//users_text8 �ۭq���8 
			$sql .= "'".$lines[19]."',";						//users_text9 �ۭq���9
			$sql .= "'".$lines[20]."',";						//users_text10 �ۭq���10 
			$sql .= "'".$lines[21]."',";						//users_text11 �ۭq���11 
			$sql .= "'".$lines[22]."'),";						//users_text12 �ۭq���12 			
		}
		//�ư��Ҧ����Ȭ��Ū����--end--
	}
	//Ū�����--end--
	$sql=substr($sql,0,-1).";";
	mysql_query($sql);

	$strcmd="<script>location.href='usersimport.php?act=list&na=".$_FILES['upfile']['name']."';</script>";					
	echo $strcmd;
/*
	2010-11-25 edit by �ʫT
	----------------------------------------------------
	�޲z�̰O��->�s�W
	---------------------------------------------------- 			
	2010-12-01 edit by �ʫT
	----------------------------------------------------
	superadmin�]�n�x�s��޲z�̰O��
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