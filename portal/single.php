<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include("../connect.php");
include("../class.php");
$object=new pclass();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<title>:: Adventura 2013 :: Registered Single</title>
<link rel="shortcut icon" href="../favicon.ico" />
<link rel="icon" href="../favicon.png" type="images/png" />

<meta charset="utf-8">

</head>
<body onload="MM_preloadImages('../images/sinle_reg_hover.gif','../images/double_reg_hover.gif','../images/about_hover.gif','../images/contact_hover.gif')">
<div id="wrapper">



<div id="div">
<h1>REGISTERED SINGLE</h1>

<p style="text-align:right"><a href="index.php" title="Go home">home</a></p>


  <div id="flash+menu">
    <!--FLASH DIV-->
    <div id="menu"></div>
    <!--MENU DIV-->
    <div style="clear:both"></div>
    </div>
  <!--FLASH+MENU END-->

  <img src="../images/colored_line.gif" width="100%" height="8" />

</div>
<div id="homebody">
  
  
  
  
  
  
  
  
  <h3>Single : <?php echo $object->countclient('single_registration');?> </h3>
  <p>Below are records for Single Registration:</p>
  <table width='930' border='0' class="listable" >
    <tr  class="thead">
      <th>SN</th>
      <th>Name</th>
      <th>Sex</th>
      <th>Email</th>
      <th>Tel</th>
      <th>Reg No</th>
      <th></th>
      </tr>
    <?php
//SQL query to pull out all registered students
$fetch="SELECT * FROM `single_registration`  ORDER BY `date`";
$fetch=@mysql_query($fetch) or die("<p class='msg error'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".mysql_error()."</p>");

//FETCH AND SPIT IT OUT
$sn=1;
while($row=mysql_fetch_array($fetch)){
$bg = ($bg=='#ebeae7' ? '#fff' :
'#ebeae7'); // Switch the background
 echo "<tr bgcolor='$bg' class='tr'>";  ?>
    <td style="text-align:center;"><?php echo $sn++;?></td>
      
      <td style="padding-left:5px;"><?php echo $row['surname'] .", ". $row['firstname'];?></td>
      <td style="padding-left:5px;"><?php echo $row['sex'];?></td>
      <td style="padding-left:5px;"><?php echo $row['email'];?></td>
      <td style="text-align:center;"><?php echo $row['tel'];?></td>
      <td style="text-align:center;"><?php echo $row['regno'];?></td>
      <td style="text-align:center;"><?php echo "<a href='view_single.php?id={$row['id']}' target='_blank' title='click to see deatil'>view</a>";?></td>
      </tr>
    <?php
	}
?>
    </table></th>
  </tr>
  </table>
</div>
  
  
  <p>&nbsp;</p>


  
  
  <p>&nbsp;</p>
 
 
<center>   <SCRIPT LANGUAGE="JavaScript">
<!-- Begin
if (window.print) {
document.write('<form>'
+ '<input type="button" name="print" value="  Print  " '
+ 'onClick="javascript:window.print()"></form>');
}
// End -->
</SCRIPT>
</center>
 <br/>
 <br/>

  <img src="../images/colored_line.gif" width="100%" height="8" />

</div><!--WRAPER DIV-->

</body>
</html>