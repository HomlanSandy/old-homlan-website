<?php

// English Language Module for v2.3 (translated by the QuiX project)

$GLOBALS["charset"] = "big5";
$GLOBALS["text_dir"] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$GLOBALS["date_fmt"] = "Y/m/d H:i";
$GLOBALS["error_msg"] = array(
	// error
	"error"			=> "����",
	"back"			=> "����һҳ",
	
	// root
	"home"			=> "The home directory doesn't exist, �������趨.",
	"abovehome"		=> "The current directory may not be above the home directory.",
	"targetabovehome"	=> "The target directory may not be above the home directory.",
	
	// exist
	"direxist"		=> "���Ŀ¼������.",
	//"filedoesexist"	=> "��������Ѿ����.",
	"fileexist"		=> "�������������.",
	"itemdoesexist"		=> "�����Ŀ�Ѵ���.",
	"itemexist"		=> "�����Ŀ������.",
	"targetexist"		=> "Ŀ¼������.",
	"targetdoesexist"	=> "��ĿĿ���Ѵ���.",
	
	// open
	"opendir"		=> "�޷�����Ŀ¼.",
	"readdir"		=> "�޷���ȡĿ¼.",
	
	// access
	"accessdir"		=> "����Ȩ�޶�ȡĿ¼.",
	"accessfile"		=> "����Ȩ�޶�ȡ����.",
	"accessitem"		=> "����Ȩ�޽������Ŀ¼.",
	"accessfunc"		=> "����Ȩ��ִ������.",
	"accesstarget"		=> "����Ȩ��ִ��Ŀ¼.",
	
	// actions
	"permread"		=> "�޷�ȡ��ͬ��ʧ��.",
	"permchange"		=> "�޸�ʧ��.",
	"openfile"		=> "��������ʧ��.",
	"savefile"		=> "��������ʧ��.",
	"createfile"		=> "��������ʧ��.",
	"createdir"		=> "���ϼн���ʧ��.",
	"uploadfile"		=> "�����ϴ�ʧ��.",
	"copyitem"		=> "���Ƶ���ʧ��.",
	"moveitem"		=> "����ʧ��.",
	"delitem"		=> "ɾ��ʧ��.",
	"chpass"		=> "�޸�����ʧ��.",
	"deluser"		=> "����ʹ����ʧ��.",
	"adduser"		=> "����ʹ����ʧ��.",
	"saveuser"		=> "����ʹ����ʧ��.",
	"searchnothing"		=> "You must supply something to search for.",
	
	// misc
	"miscnofunc"		=> "�޷�ִ��.",
	"miscfilesize"		=> "������������.",
	"miscfilepart"		=> "ֻ�в��ֵĵ����ϴ�.",
	"miscnoname"		=> "�������������.",
	"miscselitems"		=> "��û��ѡ���κ���Ŀ.",
	"miscdelitems"		=> "��ȷ��Ҫɾ�������Ŀ \"+num+\" item(s)?",
	"miscdeluser"		=> "��ȷ��Ҫɾ�����ʹ���� '\"+user+\"'?",
	"miscnopassdiff"	=> "���벻��ͬ.",
	"miscnopassmatch"	=> "���벻ͬ.",
	"miscfieldmissed"	=> "����ʧһ����Ҫ�ĵ���.",
	"miscnouserpass"	=> "ʹ�������ƻ����벻��ȷ.",
	"miscselfremove"	=> "�㲻���ƶ�����.",
	"miscuserexist"		=> "ʹ�����Ѵ���.",
	"miscnofinduser"	=> "��Ѱ����ʹ����.",
);
$GLOBALS["messages"] = array(
	// links
	"permlink"		=> "�޸�Ȩ��",
	"editlink"		=> "�༭",
	"downlink"		=> "����",
	"uplink"		=> "��һҳ",
	"homelink"		=> "��ҳ",
	"reloadlink"		=> "��������",
	"copylink"		=> "����",
	"movelink"		=> "����",
	"dellink"		=> "ɾ��",
	"comprlink"		=> "��¼",
	"adminlink"		=> "����",
	"logoutlink"		=> "�ǳ�",
	"uploadlink"		=> "�ϴ�",
	"searchlink"		=> "��Ѱ",
	
	// list
	"nameheader"		=> "����",
	"sizeheader"		=> "��С",
	"typeheader"		=> "����",
	"modifheader"		=> "�޸�����",
	"permheader"		=> "����",
	"actionheader"		=> "����",
	"pathheader"		=> "·��",
	
	// buttons
	"btncancel"		=> "ȡ��",
	"btnsave"		=> "�浵",
	"btnchange"		=> "����",
	"btnreset"		=> "����",
	"btnclose"		=> "�ر�",
	"btncreate"		=> "����",
	"btnsearch"		=> "ѡ��",
	"btnupload"		=> "�ϴ�",
	"btncopy"		=> "����",
	"btnmove"		=> "����",
	"btnlogin"		=> "����",
	"btnlogout"		=> "�ǳ�",
	"btnadd"		=> "����",
	"btnedit"		=> "�༭",
	"btnremove"		=> "ɾ��ʹ����",
	
	// actions
	"actdir"		=> "���ϼ�",
	"actperms"		=> "�޸�Ȩ��",
	"actedit"		=> "�༭����",
	"actsearchresults"	=> "��Ѱ���",
	"actcopyitems"		=> "������Ŀ(s)",
	"actcopyfrom"		=> "���ƴ� /%s �� /%s ",
	"actmoveitems"		=> "����Ŀ¼(s)",
	"actmovefrom"		=> "���ƴ� /%s �� /%s ",
	"actlogin"		=> "����",
	"actloginheader"	=> "����ʹ���� QuiXplorer",
	"actadmin"		=> "ϵͳ����Ա",
	"actchpwd"		=> "�޸�����",
	"actusers"		=> "ʹ����",
	"actarchive"		=> "Archive ��Ŀ(s)",
	"actupload"		=> "�ϴ�����(s)",
	
	// misc
	"miscitems"		=> "��Ŀ(s)",
	"miscfree"		=> "���ÿռ�",
	"miscusername"		=> "ʹ��������",
	"miscpassword"		=> "����",
	"miscoldpass"		=> "������",
	"miscnewpass"		=> "������",
	"miscconfpass"		=> "ȷ������",
	"miscconfnewpass"	=> "ȷ������",
	"miscchpass"		=> "�޸�����",
	"mischomedir"		=> "��ҳĿ¼",
	"mischomeurl"		=> "��ҳ��ַ",
	"miscshowhidden"	=> "��ʾ ���� ��Ŀ",
	"mischidepattern"	=> "���ط�ʽ",
	"miscperms"		=> "Ȩ��",
	"miscuseritems"		=> "(����, �����ϼ�, ��ʾ ���� ��Ŀ, Ȩ��, active)",
	"miscadduser"		=> "����ʹ����",
	"miscedituser"		=> "�༭ʹ���� '%s'",
	"miscactive"		=> "Active",
	"misclang"		=> "����",
	"miscnoresult"		=> "No results available.",
	"miscsubdirs"		=> "Search subdirectories",
	"miscpermnames"		=> array("Ψ��","�޸�","��������","�޸� & ��������",
					"ϵͳ����Ա"),
	"miscyesno"		=> array("Yes","No","Y","N"),
	"miscchmod"		=> array("����Ա", "Ⱥ��", "һ��"),
);
?>