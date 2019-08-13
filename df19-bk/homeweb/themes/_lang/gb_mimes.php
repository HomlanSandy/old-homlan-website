<?php

// English Language Module for v2.3 (translated by the QuiX project)

$GLOBALS["charset"] = "big5";
$GLOBALS["text_dir"] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$GLOBALS["date_fmt"] = "Y/m/d H:i";
$GLOBALS["error_msg"] = array(
	// error
	"error"			=> "错误",
	"back"			=> "回上一页",
	
	// root
	"home"			=> "The home directory doesn't exist, 检查你的设定.",
	"abovehome"		=> "The current directory may not be above the home directory.",
	"targetabovehome"	=> "The target directory may not be above the home directory.",
	
	// exist
	"direxist"		=> "这个目录不存在.",
	//"filedoesexist"	=> "这个档案已经存存.",
	"fileexist"		=> "这个档案不存在.",
	"itemdoesexist"		=> "这个项目已存在.",
	"itemexist"		=> "这个项目不存在.",
	"targetexist"		=> "目录不存在.",
	"targetdoesexist"	=> "项目目标已存在.",
	
	// open
	"opendir"		=> "无法开启目录.",
	"readdir"		=> "无法读取目录.",
	
	// access
	"accessdir"		=> "你无权限读取目录.",
	"accessfile"		=> "你无权限读取档案.",
	"accessitem"		=> "你无权限进入这个目录.",
	"accessfunc"		=> "你无权限执行命令.",
	"accesstarget"		=> "你无权限执行目录.",
	
	// actions
	"permread"		=> "无法取得同意失败.",
	"permchange"		=> "修改失败.",
	"openfile"		=> "档案开启失败.",
	"savefile"		=> "档案存贮失败.",
	"createfile"		=> "档案建立失败.",
	"createdir"		=> "资料夹建立失败.",
	"uploadfile"		=> "档案上传失败.",
	"copyitem"		=> "复制档案失败.",
	"moveitem"		=> "搬移失败.",
	"delitem"		=> "删除失败.",
	"chpass"		=> "修改密码失败.",
	"deluser"		=> "重置使用者失败.",
	"adduser"		=> "新增使用者失败.",
	"saveuser"		=> "存贮使用者失败.",
	"searchnothing"		=> "You must supply something to search for.",
	
	// misc
	"miscnofunc"		=> "无法执行.",
	"miscfilesize"		=> "超过档案容量.",
	"miscfilepart"		=> "只有部分的档案上传.",
	"miscnoname"		=> "你必须输入名称.",
	"miscselitems"		=> "你没有选择任何项目.",
	"miscdelitems"		=> "你确定要删除这个项目 \"+num+\" item(s)?",
	"miscdeluser"		=> "你确定要删除这个使用者 '\"+user+\"'?",
	"miscnopassdiff"	=> "密码不相同.",
	"miscnopassmatch"	=> "密码不同.",
	"miscfieldmissed"	=> "你移失一个重要的档案.",
	"miscnouserpass"	=> "使用者名称或密码不正确.",
	"miscselfremove"	=> "你不能移动自已.",
	"miscuserexist"		=> "使用者已存在.",
	"miscnofinduser"	=> "找寻不到使用者.",
);
$GLOBALS["messages"] = array(
	// links
	"permlink"		=> "修改权限",
	"editlink"		=> "编辑",
	"downlink"		=> "下载",
	"uplink"		=> "上一页",
	"homelink"		=> "首页",
	"reloadlink"		=> "重新整理",
	"copylink"		=> "复制",
	"movelink"		=> "搬移",
	"dellink"		=> "删除",
	"comprlink"		=> "记录",
	"adminlink"		=> "管理",
	"logoutlink"		=> "登出",
	"uploadlink"		=> "上传",
	"searchlink"		=> "搜寻",
	
	// list
	"nameheader"		=> "名称",
	"sizeheader"		=> "大小",
	"typeheader"		=> "类型",
	"modifheader"		=> "修改日期",
	"permheader"		=> "属性",
	"actionheader"		=> "动作",
	"pathheader"		=> "路径",
	
	// buttons
	"btncancel"		=> "取消",
	"btnsave"		=> "存档",
	"btnchange"		=> "更改",
	"btnreset"		=> "重置",
	"btnclose"		=> "关闭",
	"btncreate"		=> "建立",
	"btnsearch"		=> "选择",
	"btnupload"		=> "上传",
	"btncopy"		=> "复制",
	"btnmove"		=> "搬移",
	"btnlogin"		=> "登入",
	"btnlogout"		=> "登出",
	"btnadd"		=> "增加",
	"btnedit"		=> "编辑",
	"btnremove"		=> "删除使用者",
	
	// actions
	"actdir"		=> "资料夹",
	"actperms"		=> "修改权限",
	"actedit"		=> "编辑档案",
	"actsearchresults"	=> "搜寻结果",
	"actcopyitems"		=> "复制项目(s)",
	"actcopyfrom"		=> "复制从 /%s 到 /%s ",
	"actmoveitems"		=> "搬移目录(s)",
	"actmovefrom"		=> "搬移从 /%s 到 /%s ",
	"actlogin"		=> "登入",
	"actloginheader"	=> "登入使用者 QuiXplorer",
	"actadmin"		=> "系统管理员",
	"actchpwd"		=> "修改密码",
	"actusers"		=> "使用者",
	"actarchive"		=> "Archive 项目(s)",
	"actupload"		=> "上传档案(s)",
	
	// misc
	"miscitems"		=> "项目(s)",
	"miscfree"		=> "可用空间",
	"miscusername"		=> "使用者名称",
	"miscpassword"		=> "密码",
	"miscoldpass"		=> "旧密码",
	"miscnewpass"		=> "新密码",
	"miscconfpass"		=> "确认密码",
	"miscconfnewpass"	=> "确认密码",
	"miscchpass"		=> "修改密码",
	"mischomedir"		=> "首页目录",
	"mischomeurl"		=> "首页网址",
	"miscshowhidden"	=> "显示 隐藏 项目",
	"mischidepattern"	=> "隐藏方式",
	"miscperms"		=> "权限",
	"miscuseritems"		=> "(名称, 回资料夹, 显示 隐藏 项目, 权限, active)",
	"miscadduser"		=> "新增使用者",
	"miscedituser"		=> "编辑使用者 '%s'",
	"miscactive"		=> "Active",
	"misclang"		=> "语言",
	"miscnoresult"		=> "No results available.",
	"miscsubdirs"		=> "Search subdirectories",
	"miscpermnames"		=> array("唯读","修改","更改密码","修改 & 更改密码",
					"系统管理员"),
	"miscyesno"		=> array("Yes","No","Y","N"),
	"miscchmod"		=> array("管理员", "群组", "一般"),
);
?>