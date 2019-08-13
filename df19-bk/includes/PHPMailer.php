<?php
/*
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	Swift.php		後端寄送郵件功能處理頁
	│	開發者		│	廷俊
	│	版本		│	v2.0.8.1030201
	├=======================================================================================┤
	│	1.	v2.0.8.1030201	2011/03/02	廷俊	1.修正使用PHPMailer套件
	│											2.載入設定檔
	│											3.載入語言檔
	│											4.測試信件需用GET接收smtp設定資料
	│											5.開始載入PHPMailer
	│											6.設定時區
	│											7.設定語系
	│											8.設定錯誤訊息顯示的語言與語言包位置
	│											9.使用SMTP寄送信件
	│											10.遮蔽所有錯誤訊息
	│	2.	v03.00.01.1031801	2011/03/24	廷俊	啟用 Zend 引擎 1 (PHP 4) 相容模式。
	│	3.	v03.00.01.1031801	2011/03/28	廷俊	郵件伺服器設定加入SMTP驗證欄位
	│	4.	v03.00.07.1053001	2011/06/01	廷俊	a.回傳後端寄送郵件函數，新增是否為測試信件
	│												b.若為測試信件，則顯示錯誤訊息
	└=======================================================================================┘
*/

/*smtp_mail
**@param  string mailto 電子郵件網址
**@param  string mailsubject 郵件主旨
**@param  string mailbody 郵件內容

	2011-03-02 edit by 廷俊
	------------------------------------------------------
	修正使用PHPMailer套件
	------------------------------------------------------
	2011-03-28 edit by 廷俊
	------------------------------------------------------
	郵件伺服器設定加入SMTP驗證欄位
	------------------------------------------------------	
	2011-06-01 edit by 廷俊
	------------------------------------------------------
	1.回傳後端寄送郵件函數，新增是否為測試信件
	2.若為測試信件，則顯示錯誤訊息
	------------------------------------------------------	
*/
function PHPMailerSend($mhost,$mport,$smtpchk,$muser,$mpwd,$maddreply,$musermail,$muserna,$mailto,$mailsubject,$mailbody,$type){

	//啟用 Zend 引擎 1 (PHP 4) 相容模式。 
	ini_set('zend.ze1_compatibility_mode', '0');
	
	$SentOK=false;
	
	error_reporting(E_STRICT);	//開始載入PHPMailer
	date_default_timezone_set('Asia/Taipei');	//設定時區
	require_once('../includes/PHPMailer/class.phpmailer.php');

	$mail = new PHPMailer(true); 	// the true param means it will throw exceptions on errors, which we need to catch
	$mail->CharSet = "utf-8"; 	//設定語系
	$mail->SetLanguage("zh", '../includes/PHPMailer/language/'); 	//設定錯誤訊息顯示的語言與語言包位置
	$mail->IsSMTP(); 	// telling the class to use SMTP, 使用SMTP寄送信件

	try {
		
		//$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing), 允許的SMTP調試信息（用於測試）
		/* if ($mssl=="Y"){
			$mail->SMTPSecure = "ssl";                // sets the prefix to the servier, 是否採用SSL加密
		} */
		$mail->Host       = $mhost;					// sets GMAIL as the SMTP server
		$mail->Port       = $mport;                  // set the SMTP port for the GMAIL server
		if ($smtpchk=="1"){
			$mail->SMTPAuth   = true;                  // enable SMTP authentication, 是否使用SMTP驗證
		}		
		$mail->Username   = $muser;					// GMAIL username
		$mail->Password   = $mpwd;					// GMAIL password
		$mail->AddAddress($mailto, $mailto);
		$mail->SetFrom($musermail, $muserna);
		$mail->AddReplyTo($maddreply, $maddreply);
		$mail->Subject = $mailsubject;
		$mail->IsHTML(true);
		$mail->Body = $mailbody;		  
		//$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
		//$mail->MsgHTML(file_get_contents('contents.html'));
		//$mail->AddAttachment('images/phpmailer.gif');      // attachment file
		//$mail->AddAttachment('images/phpmailer_mini.gif'); // attachment file
		$mail->Send();
		$SentOK=true;
	
	//若為測試信件，則顯示錯誤訊息
	} catch (phpmailerException $e) {
		if($type=="test"){
			echo $e->errorMessage(); //Pretty error messages from PHPMailer
		}
	} catch (Exception $e) {
		if($type=="test"){
			echo $e->getMessage(); //Boring error messages from anything else!
		}
	}
	return $SentOK;
}

?>