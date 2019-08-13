<?php

// English Language Module for v2.3 (translated by the QuiX project)

$GLOBALS["charset"] = "big5";
$GLOBALS["text_dir"] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$GLOBALS["date_fmt"] = "Y/m/d H:i";
$GLOBALS["error_msg"] = array(
	// error
	"error"			=> "錯誤",
	"back"			=> "回上一頁",
	
	// root
	"home"			=> "The home directory doesn't exist, 檢查你的設定.",
	"abovehome"		=> "The current directory may not be above the home directory.",
	"targetabovehome"	=> "The target directory may not be above the home directory.",
	
	// exist
	"direxist"		=> "這個目錄不存在.",
	//"filedoesexist"	=> "這個檔案已經存存.",
	"fileexist"		=> "這個檔案不存在.",
	"itemdoesexist"		=> "這個項目已存在.",
	"itemexist"		=> "這個項目不存在.",
	"targetexist"		=> "目錄不存在.",
	"targetdoesexist"	=> "項目目標已存在.",
	
	// open
	"opendir"		=> "無法開啟目錄.",
	"readdir"		=> "無法讀取目錄.",
	
	// access
	"accessdir"		=> "你無權限讀取目錄.",
	"accessfile"		=> "你無權限讀取檔案.",
	"accessitem"		=> "你無權限進入這個目錄.",
	"accessfunc"		=> "你無權限執行命令.",
	"accesstarget"		=> "你無權限執行目錄.",
	
	// actions
	"permread"		=> "無法取得同意失敗.",
	"permchange"		=> "修改失敗.",
	"openfile"		=> "檔案開啟失敗.",
	"savefile"		=> "檔案儲存失敗.",
	"createfile"		=> "檔案建立失敗.",
	"createdir"		=> "資料夾建立失敗.",
	"uploadfile"		=> "檔案上傳失敗.",
	"copyitem"		=> "複製檔案失敗.",
	"moveitem"		=> "搬移失敗.",
	"delitem"		=> "刪除失敗.",
	"chpass"		=> "修改密碼失敗.",
	"deluser"		=> "重置使用者失敗.",
	"adduser"		=> "新增使用者失敗.",
	"saveuser"		=> "儲存使用者失敗.",
	"searchnothing"		=> "You must supply something to search for.",
	
	// misc
	"miscnofunc"		=> "無法執行.",
	"miscfilesize"		=> "超過檔案容量.",
	"miscfilepart"		=> "只有部分的檔案上傳.",
	"miscnoname"		=> "你必須輸入名稱.",
	"miscselitems"		=> "你沒有選擇任何項目.",
	"miscdelitems"		=> "你確定要刪除這個項目 \"+num+\" item(s)?",
	"miscdeluser"		=> "你確定要刪除這個使用者 '\"+user+\"'?",
	"miscnopassdiff"	=> "密碼不相同.",
	"miscnopassmatch"	=> "密碼不同.",
	"miscfieldmissed"	=> "你移失一個重要的檔案.",
	"miscnouserpass"	=> "使用者名稱或密碼不正確.",
	"miscselfremove"	=> "你不能移動自已.",
	"miscuserexist"		=> "使用者已存在.",
	"miscnofinduser"	=> "找尋不到使用者.",
);
$GLOBALS["messages"] = array(
	// links
	"permlink"		=> "修改權限",
	"editlink"		=> "編輯",
	"downlink"		=> "下載",
	"uplink"		=> "上一頁",
	"homelink"		=> "首頁",
	"reloadlink"		=> "重新整理",
	"copylink"		=> "複製",
	"movelink"		=> "搬移",
	"dellink"		=> "刪除",
	"comprlink"		=> "記錄",
	"adminlink"		=> "管理",
	"logoutlink"		=> "登出",
	"uploadlink"		=> "上傳",
	"searchlink"		=> "搜尋",
	
	// list
	"nameheader"		=> "名稱",
	"sizeheader"		=> "大小",
	"typeheader"		=> "類型",
	"modifheader"		=> "修改日期",
	"permheader"		=> "屬性",
	"actionheader"		=> "動作",
	"pathheader"		=> "路徑",
	
	// buttons
	"btncancel"		=> "取消",
	"btnsave"		=> "存檔",
	"btnchange"		=> "更改",
	"btnreset"		=> "重置",
	"btnclose"		=> "關閉",
	"btncreate"		=> "建立",
	"btnsearch"		=> "選擇",
	"btnupload"		=> "上傳",
	"btncopy"		=> "複製",
	"btnmove"		=> "搬移",
	"btnlogin"		=> "登入",
	"btnlogout"		=> "登出",
	"btnadd"		=> "增加",
	"btnedit"		=> "編輯",
	"btnremove"		=> "刪除使用者",
	
	// actions
	"actdir"		=> "資料夾",
	"actperms"		=> "修改權限",
	"actedit"		=> "編輯檔案",
	"actsearchresults"	=> "搜尋結果",
	"actcopyitems"		=> "複製項目(s)",
	"actcopyfrom"		=> "複製從 /%s 到 /%s ",
	"actmoveitems"		=> "搬移目錄(s)",
	"actmovefrom"		=> "搬移從 /%s 到 /%s ",
	"actlogin"		=> "登入",
	"actloginheader"	=> "登入使用者 QuiXplorer",
	"actadmin"		=> "系統管理員",
	"actchpwd"		=> "修改密碼",
	"actusers"		=> "使用者",
	"actarchive"		=> "Archive 項目(s)",
	"actupload"		=> "上傳檔案(s)",
	
	// misc
	"miscitems"		=> "項目(s)",
	"miscfree"		=> "可用空間",
	"miscusername"		=> "使用者名稱",
	"miscpassword"		=> "密碼",
	"miscoldpass"		=> "舊密碼",
	"miscnewpass"		=> "新密碼",
	"miscconfpass"		=> "確認密碼",
	"miscconfnewpass"	=> "確認密碼",
	"miscchpass"		=> "修改密碼",
	"mischomedir"		=> "首頁目錄",
	"mischomeurl"		=> "首頁網址",
	"miscshowhidden"	=> "顯示 隱藏 項目",
	"mischidepattern"	=> "隱藏模式",
	"miscperms"		=> "權限",
	"miscuseritems"		=> "(名稱, 回資料夾, 顯示 隱藏 項目, 權限, active)",
	"miscadduser"		=> "新增使用者",
	"miscedituser"		=> "編輯使用者 '%s'",
	"miscactive"		=> "Active",
	"misclang"		=> "語言",
	"miscnoresult"		=> "No results available.",
	"miscsubdirs"		=> "Search subdirectories",
	"miscpermnames"		=> array("唯讀","修改","更改密碼","修改 & 更改密碼",
					"系統管理員"),
	"miscyesno"		=> array("Yes","No","Y","N"),
	"miscchmod"		=> array("管理員", "群組", "一般"),
);
?>