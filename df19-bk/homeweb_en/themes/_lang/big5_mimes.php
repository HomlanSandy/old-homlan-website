<?php

// English Language Module for v2.3 (translated by the QuiX project)

$GLOBALS["charset"] = "big5";
$GLOBALS["text_dir"] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$GLOBALS["date_fmt"] = "Y/m/d H:i";
$GLOBALS["error_msg"] = array(
	// error
	"error"			=> "���~",
	"back"			=> "�^�W�@��",
	
	// root
	"home"			=> "The home directory doesn't exist, �ˬd�A���]�w.",
	"abovehome"		=> "The current directory may not be above the home directory.",
	"targetabovehome"	=> "The target directory may not be above the home directory.",
	
	// exist
	"direxist"		=> "�o�ӥؿ����s�b.",
	//"filedoesexist"	=> "�o���ɮפw�g�s�s.",
	"fileexist"		=> "�o���ɮפ��s�b.",
	"itemdoesexist"		=> "�o�Ӷ��ؤw�s�b.",
	"itemexist"		=> "�o�Ӷ��ؤ��s�b.",
	"targetexist"		=> "�ؿ����s�b.",
	"targetdoesexist"	=> "���إؼФw�s�b.",
	
	// open
	"opendir"		=> "�L�k�}�ҥؿ�.",
	"readdir"		=> "�L�kŪ���ؿ�.",
	
	// access
	"accessdir"		=> "�A�L�v��Ū���ؿ�.",
	"accessfile"		=> "�A�L�v��Ū���ɮ�.",
	"accessitem"		=> "�A�L�v���i�J�o�ӥؿ�.",
	"accessfunc"		=> "�A�L�v������R�O.",
	"accesstarget"		=> "�A�L�v������ؿ�.",
	
	// actions
	"permread"		=> "�L�k���o�P�N����.",
	"permchange"		=> "�ק異��.",
	"openfile"		=> "�ɮ׶}�ҥ���.",
	"savefile"		=> "�ɮ��x�s����.",
	"createfile"		=> "�ɮ׫إߥ���.",
	"createdir"		=> "��Ƨ��إߥ���.",
	"uploadfile"		=> "�ɮפW�ǥ���.",
	"copyitem"		=> "�ƻs�ɮץ���.",
	"moveitem"		=> "�h������.",
	"delitem"		=> "�R������.",
	"chpass"		=> "�ק�K�X����.",
	"deluser"		=> "���m�ϥΪ̥���.",
	"adduser"		=> "�s�W�ϥΪ̥���.",
	"saveuser"		=> "�x�s�ϥΪ̥���.",
	"searchnothing"		=> "You must supply something to search for.",
	
	// misc
	"miscnofunc"		=> "�L�k����.",
	"miscfilesize"		=> "�W�L�ɮ׮e�q.",
	"miscfilepart"		=> "�u���������ɮפW��.",
	"miscnoname"		=> "�A������J�W��.",
	"miscselitems"		=> "�A�S����ܥ��󶵥�.",
	"miscdelitems"		=> "�A�T�w�n�R���o�Ӷ��� \"+num+\" item(s)?",
	"miscdeluser"		=> "�A�T�w�n�R���o�ӨϥΪ� '\"+user+\"'?",
	"miscnopassdiff"	=> "�K�X���ۦP.",
	"miscnopassmatch"	=> "�K�X���P.",
	"miscfieldmissed"	=> "�A�����@�ӭ��n���ɮ�.",
	"miscnouserpass"	=> "�ϥΪ̦W�٩αK�X�����T.",
	"miscselfremove"	=> "�A���ಾ�ʦۤw.",
	"miscuserexist"		=> "�ϥΪ̤w�s�b.",
	"miscnofinduser"	=> "��M����ϥΪ�.",
);
$GLOBALS["messages"] = array(
	// links
	"permlink"		=> "�ק��v��",
	"editlink"		=> "�s��",
	"downlink"		=> "�U��",
	"uplink"		=> "�W�@��",
	"homelink"		=> "����",
	"reloadlink"		=> "���s��z",
	"copylink"		=> "�ƻs",
	"movelink"		=> "�h��",
	"dellink"		=> "�R��",
	"comprlink"		=> "�O��",
	"adminlink"		=> "�޲z",
	"logoutlink"		=> "�n�X",
	"uploadlink"		=> "�W��",
	"searchlink"		=> "�j�M",
	
	// list
	"nameheader"		=> "�W��",
	"sizeheader"		=> "�j�p",
	"typeheader"		=> "����",
	"modifheader"		=> "�ק���",
	"permheader"		=> "�ݩ�",
	"actionheader"		=> "�ʧ@",
	"pathheader"		=> "���|",
	
	// buttons
	"btncancel"		=> "����",
	"btnsave"		=> "�s��",
	"btnchange"		=> "���",
	"btnreset"		=> "���m",
	"btnclose"		=> "����",
	"btncreate"		=> "�إ�",
	"btnsearch"		=> "���",
	"btnupload"		=> "�W��",
	"btncopy"		=> "�ƻs",
	"btnmove"		=> "�h��",
	"btnlogin"		=> "�n�J",
	"btnlogout"		=> "�n�X",
	"btnadd"		=> "�W�[",
	"btnedit"		=> "�s��",
	"btnremove"		=> "�R���ϥΪ�",
	
	// actions
	"actdir"		=> "��Ƨ�",
	"actperms"		=> "�ק��v��",
	"actedit"		=> "�s���ɮ�",
	"actsearchresults"	=> "�j�M���G",
	"actcopyitems"		=> "�ƻs����(s)",
	"actcopyfrom"		=> "�ƻs�q /%s �� /%s ",
	"actmoveitems"		=> "�h���ؿ�(s)",
	"actmovefrom"		=> "�h���q /%s �� /%s ",
	"actlogin"		=> "�n�J",
	"actloginheader"	=> "�n�J�ϥΪ� QuiXplorer",
	"actadmin"		=> "�t�κ޲z��",
	"actchpwd"		=> "�ק�K�X",
	"actusers"		=> "�ϥΪ�",
	"actarchive"		=> "Archive ����(s)",
	"actupload"		=> "�W���ɮ�(s)",
	
	// misc
	"miscitems"		=> "����(s)",
	"miscfree"		=> "�i�ΪŶ�",
	"miscusername"		=> "�ϥΪ̦W��",
	"miscpassword"		=> "�K�X",
	"miscoldpass"		=> "�±K�X",
	"miscnewpass"		=> "�s�K�X",
	"miscconfpass"		=> "�T�{�K�X",
	"miscconfnewpass"	=> "�T�{�K�X",
	"miscchpass"		=> "�ק�K�X",
	"mischomedir"		=> "�����ؿ�",
	"mischomeurl"		=> "�������}",
	"miscshowhidden"	=> "��� ���� ����",
	"mischidepattern"	=> "���üҦ�",
	"miscperms"		=> "�v��",
	"miscuseritems"		=> "(�W��, �^��Ƨ�, ��� ���� ����, �v��, active)",
	"miscadduser"		=> "�s�W�ϥΪ�",
	"miscedituser"		=> "�s��ϥΪ� '%s'",
	"miscactive"		=> "Active",
	"misclang"		=> "�y��",
	"miscnoresult"		=> "No results available.",
	"miscsubdirs"		=> "Search subdirectories",
	"miscpermnames"		=> array("��Ū","�ק�","���K�X","�ק� & ���K�X",
					"�t�κ޲z��"),
	"miscyesno"		=> array("Yes","No","Y","N"),
	"miscchmod"		=> array("�޲z��", "�s��", "�@��"),
);
?>