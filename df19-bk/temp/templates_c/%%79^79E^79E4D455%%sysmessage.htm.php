<?php /* Smarty version 2.6.26, created on 2012-08-08 13:17:02
         compiled from sysmessage.htm */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $this->_config[0]['vars']['website_title']; ?>
</title>
<link href="css/style1.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="use_title">
  <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="72%" align="left"><?php echo $this->_tpl_vars['PageTitle_message']; ?>
</td>
      <td width="12%" align="right">&nbsp;</td>
    </tr>
  </table>
</div>

<div id="show_table3">	
    <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
    <td valign="top">

		<table border="0" cellpadding="1" cellspacing="1" align="center"  width="80%" height="100%">
			<tr>				
				<td align="left">&nbsp;</td>
			</tr>
			<tr>
				
				<td align="left">
					<?php echo $this->_tpl_vars['msg_detail']; ?>

				</td>
			</tr>					
			<tr>
				<th align="right">&nbsp;</th>
				<td align="left"><INPUT TYPE="button" value="<?php echo $this->_tpl_vars['Btn_return']; ?>
" onclick="location.href='<?php echo $this->_tpl_vars['back_url']; ?>
';"></td>
			</tr>
			<tr>				
				<td align="left">&nbsp;</td>
			</tr>			
		</table>
    </td>
    </tr>
    </table>
	 </form>
</div>

<?php echo $this->_tpl_vars['temp_log']; ?>
</body>
</html>