//§éÅ|¦¡¿ï³æ
var currentMenu = 1;
function ShowSubMenu(id) {
  if (document.all["SubMenu" + id].style.display == "")
  {
     document.all["SubMenu" + id].style.display = "none";
     currentMenu = 0;
  }
  else
  {
     if (currentMenu != 0) {document.all["SubMenu" + currentMenu].style.display = "none";}  
     document.all["SubMenu" + id].style.display = "";
     currentMenu = id;
  }
}