// JavaScript Document
<!--
//跳頁選單
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}

//移除模組
function delgroup(){ //移除相關資訊
		var selgroupid = document.all.read_group.options[document.all.read_group.selectedIndex].value;
		var groupid = document.getElementById("ReadGroupId").value;
		var arrgroupid = new Array();
		arrgroupid = groupid.split(",");
		var s='';
		for (var i = 0; i < arrgroupid.length; i++){
			if(arrgroupid[i] != selgroupid){s+=arrgroupid[i]+",";}
		}
		document.getElementById("ReadGroupId").innerText=s.substring(0,s.length-1);
		var quesCon=document.getElementById('read_group');
		var selIdx=quesCon.selectedIndex;
		quesCon.remove(selIdx);
}

//移除模組
function delgroup2(){ 
		var selgroupid = document.all.read_group2.options[document.all.read_group2.selectedIndex].value;
		var groupid = document.getElementById("ReadGroupId2").value;
		var arrgroupid = new Array();
		arrgroupid = groupid.split(",");
		var s='';
		for (var i = 0; i < arrgroupid.length; i++){
			if(arrgroupid[i] != selgroupid){s+=arrgroupid[i]+",";}
		}
		document.getElementById("ReadGroupId2").innerText=s.substring(0,s.length-1);
		var quesCon=document.getElementById('read_group2');
		var selIdx=quesCon.selectedIndex;
		quesCon.remove(selIdx);
}

//移除模組
function delgroup3(){ 
		var selgroupid = document.all.read_group3.options[document.all.read_group3.selectedIndex].value;
		var groupid = document.getElementById("ReadGroupId3").value;
		var arrgroupid = new Array();
		arrgroupid = groupid.split(",");
		var s='';
		for (var i = 0; i < arrgroupid.length; i++){
			if(arrgroupid[i] != selgroupid){s+=arrgroupid[i]+",";}
		}
		document.getElementById("ReadGroupId3").innerText=s.substring(0,s.length-1);
		var quesCon=document.getElementById('read_group3');
		var selIdx=quesCon.selectedIndex;
		quesCon.remove(selIdx);
}

//加入模組
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
			if (groupid==''){
				document.getElementById("ReadGroupId").innerText=selgroupid;
			}else{
				document.getElementById("ReadGroupId").innerText=groupid + "," + selgroupid;
			}
		}
	}
	
//加入模組
function addgroup2(){ 
		var selgroupid = document.all.users_group2.options[document.all.users_group2.selectedIndex].value;
		var groupid = document.getElementById("ReadGroupId2").value;
		var arrgroupid = new Array();
		arrgroupid = groupid.split(",");
		var a=0;
		for (var i = 0; i < arrgroupid.length; i++){
			if(arrgroupid[i] == selgroupid){a=1;}
		}
		if(a==0){
			document.all.read_group2.options.add(new Option(document.all.users_group2.options[document.all.users_group2.selectedIndex].text,selgroupid));
			if (groupid==''){
				document.getElementById("ReadGroupId2").innerText=selgroupid;
			}else{
				document.getElementById("ReadGroupId2").innerText=groupid + "," + selgroupid;
			}
		}
	}	

//加入模組
function addgroup3(){ 
		var selgroupid = document.all.users_group3.options[document.all.users_group3.selectedIndex].value;
		var groupid = document.getElementById("ReadGroupId3").value;
		var arrgroupid = new Array();
		arrgroupid = groupid.split(",");
		var a=0;
		for (var i = 0; i < arrgroupid.length; i++){
			if(arrgroupid[i] == selgroupid){a=1;}
		}
		if(a==0){
			document.all.read_group3.options.add(new Option(document.all.users_group3.options[document.all.users_group3.selectedIndex].text,selgroupid));
			if (groupid==''){
				document.getElementById("ReadGroupId3").innerText=selgroupid;
			}else{
				document.getElementById("ReadGroupId3").innerText=groupid + "," + selgroupid;
			}
		}
	}

//水平排列順序
function movea() {
		var selgroupid = document.all.read_group.options[document.all.read_group.selectedIndex].value;
		var groupid = document.getElementById("ReadGroupId2").value;
		var arrgroupid = new Array();
		arrgroupid = groupid.split(",");
		var a=0;
		for (var i = 0; i < arrgroupid.length; i++){
			if(arrgroupid[i] == selgroupid){a=1;}
		}
		if(a==0){
			document.all.read_group2.options.add(new Option(document.all.read_group.options[document.all.read_group.selectedIndex].text,selgroupid));
			if (groupid==''){
				document.getElementById("ReadGroupId2").innerText=selgroupid;
			}else{
				document.getElementById("ReadGroupId2").innerText=groupid + "," + selgroupid;
			}			
		}
		delgroup();
}

function BumpUpa() {
		var selgroupid = document.all.read_group2.options[document.all.read_group2.selectedIndex].value;
		var groupid = document.getElementById("ReadGroupId").value;
		var arrgroupid = new Array();
		arrgroupid = groupid.split(",");
		var a=0;
		for (var i = 0; i < arrgroupid.length; i++){
			if(arrgroupid[i] == selgroupid){a=1;}
		}
		if(a==0){
			document.all.read_group.options.add(new Option(document.all.read_group2.options[document.all.read_group2.selectedIndex].text,selgroupid));
			if (groupid==''){
				document.getElementById("ReadGroupId").innerText=selgroupid;
			}else{
				document.getElementById("ReadGroupId").innerText=groupid + "," + selgroupid;
			}
		}
	delgroup2();
}

//水平排列順序
function moveb() {
		var selgroupid = document.all.read_group2.options[document.all.read_group2.selectedIndex].value;
		var groupid = document.getElementById("ReadGroupId3").value;
		var arrgroupid = new Array();
		arrgroupid = groupid.split(",");
		var a=0;
		for (var i = 0; i < arrgroupid.length; i++){
			if(arrgroupid[i] == selgroupid){a=1;}
		}
		if(a==0){
			document.all.read_group3.options.add(new Option(document.all.read_group2.options[document.all.read_group2.selectedIndex].text,selgroupid));
			if (groupid==''){
				document.getElementById("ReadGroupId3").innerText=selgroupid;
			}else{
				document.getElementById("ReadGroupId3").innerText=groupid + "," + selgroupid;
			}
		}
		delgroup2();
}

function BumpUpb() {
		var selgroupid = document.all.read_group3.options[document.all.read_group3.selectedIndex].value;
		var groupid = document.getElementById("ReadGroupId2").value;
		var arrgroupid = new Array();
		arrgroupid = groupid.split(",");
		var a=0;
		for (var i = 0; i < arrgroupid.length; i++){
			if(arrgroupid[i] == selgroupid){a=1;}
		}
		if(a==0){
			document.all.read_group2.options.add(new Option(document.all.read_group3.options[document.all.read_group3.selectedIndex].text,selgroupid));
			if (groupid==''){
				document.getElementById("ReadGroupId2").innerText=selgroupid;
			}else{
				document.getElementById("ReadGroupId2").innerText=groupid + "," + selgroupid;
			}
		}
	delgroup3();
}

//垂直排列順序
/* 
	2010-05-27 edit by 廷俊
	------------------------------------------------------
	(已更正)自訂義模組上移下移名稱會重複或是消失。
	------------------------------------------------------
*/
function move(n,p_type) {  
  if (p_type==1){
	var read_group = document.form.read_group;
  }
  if (p_type==2){	
	var read_group = document.form.read_group2;
  }
  if (p_type==3){
	var read_group = document.form.read_group3;
  }
  var index = read_group.selectedIndex;  
  var tmp_text=read_group.options[index].text;
  var tmp_value=read_group.options[index].value;
  var tmp_text1="";
  var tmp_text2="";   
  var total = read_group.options.length - 1;
  if (n == "-") to = -1;
  else to = 1;
  if (index == -1) return;
  if (to == 1 && index == total) return;
  if (to == -1 && index == 0) return;  
  
  var items = new Array;
  var values = new Array;
  for (i = total; i >= 0; i--) {
    items[i] = read_group.options[i].text;
    values[i] = read_group.options[i].value;
  }
  for (i = total; i >= 0; i--) {
    if (index == i) {     
	  tmp_text1=read_group.options[i+to].text;
	  tmp_value1=read_group.options[i+to].value;
	  read_group.options[i + to] = new Option(tmp_text,tmp_value, 0, 1);
      read_group.options[i] = new Option(tmp_text1, tmp_value1);
      i--;
    } else read_group.options[i] = new Option(items[i], values[i]);
  }
  
  //重新填值
  sval="";
  for(var j=0;j<=total;j++){	
		sval+=read_group.options[j].value+',';	
  }
  sval=sval.substring(0,sval.length-1);
  if (p_type==1){
	document.getElementById('ReadGroupId').value=sval;
  }
  if (p_type==2){
	document.getElementById('ReadGroupId2').value=sval;
  }
   if (p_type==3){
	document.getElementById('ReadGroupId3').value=sval;
  }  
  read_group.focus();
}


-->