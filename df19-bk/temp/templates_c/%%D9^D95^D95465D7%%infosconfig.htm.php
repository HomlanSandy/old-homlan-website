<?php /* Smarty version 2.6.26, created on 2015-04-07 20:50:16
         compiled from infosconfig.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<script src="js/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="css/style1.css" rel="stylesheet" type="text/css" />
</head>
<!--
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	infosconfig.htm		後台資訊明細設定 的 htm顯示頁面
	│	開發者		│	廷俊
	│	版本		│	v1.0.0.0081001
	├=======================================================================================┤
	│	1.	v1.0.1.0071901	2010/07/19	廷俊	資訊明細列表排序方式，新增按照管理者自訂排序的功能
	│	2.	v1.0.1.0081001	2010/08/10	廷俊	a.擷取出網站設定中的所有資訊設定，設置成獨立的資訊設定
	│											b.修改成功訊息
	│	3.	v1.0.1.0091501	2010/09/15	廷俊	目前"文章分類列表每頁筆數"與"文章標題顯示字數"暫無動作
	│	4.	v2.0.2.0120201	2010/12/02	廷俊	a.列表顯示方式加入圖片顯示功能
	│											b.列表顯示方式：修改為圖片顯示、圖文顯示、文字顯示
	│											c.新增  列表顯示簡單說明功能
	│	5.	v2.0.4.0121501	2010/12/15	廷俊	a.更動明細顯示設定頁籤裡的項目
	│											b.修改備註說明文字	
	│											c.新增標籤 圖文顯示區模組設定
	│											d.新增標籤 明細列表顯示設定
	│											e.依標籤分類，整理語言包
	│											f.明細顯示設定：預設圖片、大小圖長寬、內容顯示方式
	│											g.圖文顯示區模組設定：首頁筆數、排序方式、每列筆數、簡單說明
	│											h.明細列表顯示設定：分類頁筆數、排序方式、顯示方式、每列筆數、簡單說明
	│											i.明細列表顯示設定：註明每列筆數限用於『顯示方式』設定為『圖片顯示』
	│	6.	v2.0.8.1021601	2011/02/16	廷俊	a.新增預設圖片、內容顯示方式的備註說明
	│											b.修正小大圖像長寬、每列筆數的備註說明
	│											c.新增明細顯示設定、圖文顯示區模組設定、明細列表顯示設定的提醒事項
	│	7.	v2.0.8.1030801	2011/03/08	廷俊	a.頁籤『明細列表顯示設定』修改為『分類顯示設定』
	│											b.修改頁籤顯示排序	
	│											c.分類顯示設定新增分類選單圖像設定功能
	│											d.新增分類選單圖像設定備註說明
	│											e.修改分類顯示設定備註說明
	│	8.	v03.00.10.1062001	2011-06-29	玉玲	1.新增css樣式項目說明text_note。
	└=======================================================================================┘
*//-->	
<script type="text/javascript">
<!--
/*
	2010-05-07 edit by 廷俊
	------------------------------------------------------
	修改圖片上傳模式：加入移除照片的警告視窗
	------------------------------------------------------		
*/	
var cheDelete="<?php echo $this->_tpl_vars['cheDelete']; ?>
";
<?php echo '
	function del_images(fileid,image_name){		
		if(confirm(cheDelete)){
			document.getElementById(\'mv_image\'+fileid).value=image_name;
			document.getElementById(\'image1_\'+fileid).style.display=\'none\';
			return true;
		}else{
			return false;
		}
	}
-->
</script>
'; ?>

<body>
<div id="use_title">
  <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>      
      <td width="72%" align="left"><?php echo $this->_tpl_vars['PageTitle']; ?>
</td>
      <td width="12%" align="left">&nbsp;</td>
    </tr>
  </table>
</div>
<!--
	2010-08-10 edit by 廷俊
	----------------------------------------------------
	修改成功訊息
	---------------------------------------------------- 			
-->
<?php echo $this->_tpl_vars['Message']; ?>

<form name="frm" method="post" action="<?php echo $this->_tpl_vars['frm_save']; ?>
" enctype="multipart/form-data"> 
<div id="show_table2">
<!-- /*	
	2010-12-15 edit by 廷俊
	----------------------------------------------------
	1.新增標籤 圖文顯示區模組設定
	2.新增標籤 明細列表顯示設定
	---------------------------------------------------- 			
*/	 -->
<!-- 頁籤起 -->
<div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
  <!-- //*****************************************************************************************// -->
    <li class="TabbedPanelsTab" tabindex="0"><?php echo $this->_tpl_vars['TITLE1']; ?>
</li>
    <li class="TabbedPanelsTab" tabindex="0"><?php echo $this->_tpl_vars['TITLE2']; ?>
</li>
    <li class="TabbedPanelsTab" tabindex="0"><?php echo $this->_tpl_vars['TITLE3']; ?>
</li>

  </ul>
  <div class="TabbedPanelsContentGroup">
 	
<!-- /*	
	2010-06-11 edit by 廷俊
	------------------------------------------------------
	測試版要遮蔽"網站設定"的功能按鈕
	------------------------------------------------------	
	2010-07-19 edit by 廷俊
	------------------------------------------------------
	資訊明細列表排序方式，新增按照管理者自訂排序的功能
	------------------------------------------------------	
	2010-12-02 edit by 廷俊
	------------------------------------------------------
	1.列表顯示方式加入圖片顯示功能
	2.列表顯示方式：修改為圖片顯示、圖文顯示、文字顯示
	3.新增  列表顯示簡單說明功能
	------------------------------------------------------
	2010-12-15 edit by 廷俊
	----------------------------------------------------
	1.明細列表顯示設定：分類頁筆數、排序方式、顯示方式、每列筆數、簡單說明
	2.明細列表顯示設定：註明每列筆數限用於『顯示方式』設定為『圖片顯示』
	---------------------------------------------------- 
 	2011-03-08 edit by 廷俊
	----------------------------------------------------
	1.頁籤『明細列表顯示設定』修改為『分類顯示設定』
	2.修改頁籤顯示排序
	3.分類顯示設定新增分類選單圖像設定功能
	4.新增分類選單圖像設定備註說明
	5.修改分類顯示設定備註說明
	----------------------------------------------------		
*/	 -->
<!-- 分類顯示設定 -->
    <div class="TabbedPanelsContent">	
		<table border="0" cellpadding="2" cellspacing="2" width="90%" align="center">
			<tr>
				<td colspan="2" align="center">&nbsp;</td>
			</tr>
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['umImgCatsWidth']; ?>
</th>
				<td align="left">
					<INPUT TYPE="text" NAME="<?php echo $this->_tpl_vars['catspic_width']; ?>
" size="3" maxlength="5" value="<?php echo $this->_tpl_vars['catspic_width_value']; ?>
" style="text-align:right;">
					<B><?php echo $this->_tpl_vars['umImgCatsHeight']; ?>
</B>
					<INPUT TYPE="text" NAME="<?php echo $this->_tpl_vars['catspic_height']; ?>
" size="3" maxlength="5" value="<?php echo $this->_tpl_vars['catspic_height_value']; ?>
" style="text-align:right;">
					<br>
					<span class="text_note"><?php echo $this->_tpl_vars['umImgCatsText']; ?>
</span>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">&nbsp;</td>
			</tr>		
			<tr>
				<td colspan="2" align="left"><?php echo $this->_tpl_vars['umInfoCatListText']; ?>
</td>
			</tr>	
			<tr>
				<td colspan="2" align="center">&nbsp;</td>
			</tr>				
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['umInfoCatListRecord']; ?>
</th>
				<td align="left">
					<INPUT TYPE="text" NAME="<?php echo $this->_tpl_vars['infocat_list_record']; ?>
" size="3" maxlength="3" value="<?php echo $this->_tpl_vars['infocat_list_record_value']; ?>
">
				</td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['umInfoCatListPageMethod']; ?>
</th>
				<td align="left">
					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['infocat_order_type']; ?>
" value="posttime" <?php echo $this->_tpl_vars['posttimechecked']; ?>
><?php echo $this->_tpl_vars['umOrderByPostTime']; ?>

					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['infocat_order_type']; ?>
" value="updatetime" <?php echo $this->_tpl_vars['updatetimechecked']; ?>
><?php echo $this->_tpl_vars['umOrderByUpdateTime']; ?>

					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['infocat_order_type']; ?>
" value="number" <?php echo $this->_tpl_vars['numberchecked']; ?>
><?php echo $this->_tpl_vars['umOrderByNumber']; ?>

				</td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['umInfoCatDisplay']; ?>
</th>
				<td align="left">
					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['infocat_show_type']; ?>
" value="image" <?php echo $this->_tpl_vars['imagechecked']; ?>
><?php echo $this->_tpl_vars['umImageDisplay']; ?>

					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['infocat_show_type']; ?>
" value="photo" <?php echo $this->_tpl_vars['photochecked']; ?>
><?php echo $this->_tpl_vars['umPhotoDisplay']; ?>

					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['infocat_show_type']; ?>
" value="text" <?php echo $this->_tpl_vars['textchecked']; ?>
><?php echo $this->_tpl_vars['umTextDisplay']; ?>

				</td>
			</tr>
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['umInfoCatListRowRecord']; ?>
</th>
				<td align="left">
					<?php echo $this->_tpl_vars['infocat_list_row_record']; ?>

					<br>
					<span class="text_note"><?php echo $this->_tpl_vars['umInfoCatListRowRecordText']; ?>
</span>
				</td>
			</tr>	
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['umInfoCatListSimpleText']; ?>
</th>
				<td align="left">
					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['infocat_show_simple']; ?>
" value="1" <?php echo $this->_tpl_vars['infocat_show_simple_yes']; ?>
><?php echo $this->_tpl_vars['umDisplay']; ?>

					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['infocat_show_simple']; ?>
" value="0" <?php echo $this->_tpl_vars['infocat_show_simple_no']; ?>
><?php echo $this->_tpl_vars['umNotDisplay']; ?>

				</td>
			</tr>		
<!--
	2010-09-15 edit by 廷俊
	------------------------------------------------------
	目前"文章分類列表每頁筆數"與"文章標題顯示字數"暫無動作
	------------------------------------------------------					
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['umArticleCatListRecord']; ?>
</th>
				<td align="left">
					<?php echo $this->_tpl_vars['article_list_record']; ?>
					
				</td>
			</tr>		
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['umArticleTitleRang']; ?>
</th>
				<td align="left">
					<?php echo $this->_tpl_vars['article_title_range']; ?>
					
				</td>
			</tr>
-->		
			<tr>
				<td colspan="2" align="center">&nbsp;</td>
			</tr>		
			<tr>
				<td colspan="2" align="center">
					<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
" <?php echo $this->_tpl_vars['dis']; ?>
>
					<INPUT TYPE="reset">
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">&nbsp;</td>
			</tr>
		</table>
	</div>

<!-- 
	2010-06-11 edit by 廷俊
	------------------------------------------------------
	測試版要遮蔽"網站設定"的功能按鈕
	------------------------------------------------------
	2010-12-15 edit by 廷俊
	----------------------------------------------------
	1.更動明細顯示設定頁籤裡的項目
	2.修改備註說明文字
	3.明細顯示設定：預設圖片、大小圖長寬、內容顯示方式
	---------------------------------------------------- 
 --> 
<!-- 明細顯示設定 -->
	<div class="TabbedPanelsContent">	
		<table border="0" cellpadding="2" cellspacing="2" width="90%" align="center">
			<tr>
				<td colspan="2" align="center">&nbsp;</td>
			</tr>
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['umInfoDefaultImg']; ?>
</th>
				<td align="left">
					<?php echo $this->_tpl_vars['info_default_pic']; ?>

					<br>
					<span class="text_note"><?php echo $this->_tpl_vars['umInfoDefaultImgText']; ?>
</span>				
				</td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['ImgSmallSet']; ?>
</th>
				<td align="left">
					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['smallpicset']; ?>
" value="1" <?php echo $this->_tpl_vars['smallpicset_yes']; ?>
><?php echo $this->_tpl_vars['ImgSmallSetYes']; ?>

					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['smallpicset']; ?>
" value="0" <?php echo $this->_tpl_vars['smallpicset_no']; ?>
><?php echo $this->_tpl_vars['ImgSmallSetNo']; ?>

				</td>
			</tr>			
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['umImgSmallWidth']; ?>
</th>
				<td align="left" valign="middle">
					<INPUT TYPE="text" NAME="<?php echo $this->_tpl_vars['smallpic_width']; ?>
" size="3" maxlength="5" value="<?php echo $this->_tpl_vars['smallpic_width_value']; ?>
" style="text-align:right;">
					<B><?php echo $this->_tpl_vars['umImgSmallHeight']; ?>
</B>
					<INPUT TYPE="text" NAME="<?php echo $this->_tpl_vars['smallpic_height']; ?>
" size="3" maxlength="5" value="<?php echo $this->_tpl_vars['smallpic_height_value']; ?>
" style="text-align:right;">
					<br>
					<span class="text_note"><?php echo $this->_tpl_vars['umImgSmallText']; ?>
</span>
				</td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['ImgBigSet']; ?>
</th>
				<td align="left">
					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['bigpicset']; ?>
" value="1" <?php echo $this->_tpl_vars['bigpicset_yes']; ?>
><?php echo $this->_tpl_vars['ImgBigSetYes']; ?>

					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['bigpicset']; ?>
" value="0" <?php echo $this->_tpl_vars['bigpicset_no']; ?>
><?php echo $this->_tpl_vars['ImgBigSetNo']; ?>

				</td>
			</tr>		
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['umImgBigWidth']; ?>
</th>
				<td align="left" valign="middle">
					<INPUT TYPE="text" NAME="<?php echo $this->_tpl_vars['bigpic_width']; ?>
" size="3" maxlength="5" value="<?php echo $this->_tpl_vars['bigpic_width_value']; ?>
" style="text-align:right;">
					<B><?php echo $this->_tpl_vars['umImgBigHeight']; ?>
</B>
					<INPUT TYPE="text" NAME="<?php echo $this->_tpl_vars['bigpic_height']; ?>
" size="3" maxlength="5" value="<?php echo $this->_tpl_vars['bigpic_height_value']; ?>
" style="text-align:right;">
					<br>
					<span class="text_note"><?php echo $this->_tpl_vars['umImgBigText']; ?>
</span>
				</td>
			</tr>						
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['umInfoDetailDisplay']; ?>
</th>
				<td align="left">
					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['infodetail_dispaly_type']; ?>
" value="imageup" <?php echo $this->_tpl_vars['imageupchecked']; ?>
><?php echo $this->_tpl_vars['umImageUp']; ?>

					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['infodetail_dispaly_type']; ?>
" value="imageleft" <?php echo $this->_tpl_vars['imageleftchecked']; ?>
><?php echo $this->_tpl_vars['umImageLeft']; ?>

					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['infodetail_dispaly_type']; ?>
" value="imageright" <?php echo $this->_tpl_vars['imagerightchecked']; ?>
><?php echo $this->_tpl_vars['umImageRight']; ?>

					<br>
					<span class="text_note"><?php echo $this->_tpl_vars['umInfoDetailDisplayText']; ?>
</span>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2" align="left"><?php echo $this->_tpl_vars['umInfoListText']; ?>
</td>
			</tr>
			<tr>
				<td colspan="2" align="center">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
" <?php echo $this->_tpl_vars['dis']; ?>
>
					<INPUT TYPE="reset">
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">&nbsp;</td>
			</tr>
		</table>
	</div>
	
<!-- /*	
	2010-06-11 edit by 廷俊
	------------------------------------------------------
	測試版要遮蔽"網站設定"的功能按鈕
	------------------------------------------------------	
	2010-07-19 edit by 廷俊
	------------------------------------------------------
	資訊明細列表排序方式，新增按照管理者自訂排序的功能
	------------------------------------------------------	
	2010-12-02 edit by 廷俊
	------------------------------------------------------
	新增  列表顯示簡單說明功能
	------------------------------------------------------		
	2010-12-15 edit by 廷俊
	----------------------------------------------------
	圖文顯示區模組設定：首頁筆數、排序方式、每列筆數、簡單說明
	---------------------------------------------------- 			
*/ -->	
<!-- 圖文顯示區模組設定 -->
    <div class="TabbedPanelsContent">	
		<table border="0" cellpadding="2" cellspacing="2" width="90%" align="center">
			<tr>
				<td colspan="2" align="left">&nbsp;</td>
			</tr>			
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['umInfoCatListRecord']; ?>
</th>
				<td align="left">
					<INPUT TYPE="text" NAME="<?php echo $this->_tpl_vars['infoindex_list_record']; ?>
" size="3" maxlength="3" value="<?php echo $this->_tpl_vars['infoindex_list_record_value']; ?>
">
				</td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['umInfoCatListPageMethod']; ?>
</th>
				<td align="left">
					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['infoindex_order_type']; ?>
" value="index_posttime" <?php echo $this->_tpl_vars['index_posttimechecked']; ?>
><?php echo $this->_tpl_vars['umOrderByPostTime']; ?>

					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['infoindex_order_type']; ?>
" value="index_updatetime" <?php echo $this->_tpl_vars['index_updatetimechecked']; ?>
><?php echo $this->_tpl_vars['umOrderByUpdateTime']; ?>

					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['infoindex_order_type']; ?>
" value="index_number" <?php echo $this->_tpl_vars['index_numberchecked']; ?>
><?php echo $this->_tpl_vars['umOrderByNumber']; ?>

				</td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['umInfoCatListRowRecord']; ?>
</th>
				<td align="left"><?php echo $this->_tpl_vars['infoindex_list_row_record']; ?>
</td>
			</tr>	
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['umInfoCatListSimpleText']; ?>
</th>
				<td align="left">
					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['infoindex_show_simple']; ?>
" value="1" <?php echo $this->_tpl_vars['infoindex_show_simple_yes']; ?>
><?php echo $this->_tpl_vars['umDisplay']; ?>

					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['infoindex_show_simple']; ?>
" value="0" <?php echo $this->_tpl_vars['infoindex_show_simple_no']; ?>
><?php echo $this->_tpl_vars['umNotDisplay']; ?>

				</td>
			</tr>
			
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['umImageShowType']; ?>
</th>
				<td align="left">
					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['infoindex_show_image']; ?>
" value="ImageShowDown" <?php echo $this->_tpl_vars['ImageShowDownchecked']; ?>
><?php echo $this->_tpl_vars['umImageShowDown']; ?>

					<INPUT TYPE="radio" NAME="<?php echo $this->_tpl_vars['infoindex_show_image']; ?>
" value="ImageShowUp" <?php echo $this->_tpl_vars['ImageShowUpchecked']; ?>
><?php echo $this->_tpl_vars['umImageShowUp']; ?>

				</td>
			</tr>
			
			<tr>
				<td colspan="2" align="center">&nbsp;</td>
			</tr>			
			<tr>
				<td colspan="2" align="left"><?php echo $this->_tpl_vars['umIndexListText']; ?>
</td>
			</tr>			
			<tr>
				<td colspan="2" align="center">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
" <?php echo $this->_tpl_vars['dis']; ?>
>
					<INPUT TYPE="reset">
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">&nbsp;</td>
			</tr>
		</table>
	</div>
	
  </div>
  </form>
</div>
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
//-->
</script>
<!-- 頁籤終 -->
</div>

<?php echo $this->_tpl_vars['temp_log']; ?>
</body>
</html>