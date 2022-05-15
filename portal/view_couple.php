<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include("../class.php");
$object=new pclass();
session_start();
include("../connect.php");

$male=@mysql_query("SELECT * FROM `male_couple` WHERE `id`='{$_GET['id']}'") or die("<p class='msg error'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".mysql_error()."</p>");

//FETCH AND SPIT IT OUT
while($row=mysql_fetch_array($male)){

$female=$object->registeredFemaleCouple($row['id']);
while($x=mysql_fetch_array($female)){
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
<title><?php echo $row['surname']." & ". $x['surname'];?> Info</title>
<link rel="shortcut icon" href="../favicon.ico" />
<link rel="icon" href="../favicon.png" type="images/png" />

<meta charset="utf-8">

</head>
<body onload="MM_preloadImages('../images/sinle_reg_hover.gif','../images/double_reg_hover.gif','../images/about_hover.gif','../images/contact_hover.gif')">
<div id="wrapper">



<div id="div">
<p style="text-align:right"><a href="single.php" title="Go back">back</a>&nbsp; | &nbsp; <a href="index.php"  title="Go home">home</a></p>
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
  <h3>:: DETAILS ::</h3>
  <fieldset>
    <h1><?php echo $row['surname'].", ". $row['firstname'];?> Info</h1>
    <table width='80%' border='0' style='margin:auto; font-size:14px;' id="tabtwo" height="300" >
      <tr>
  <td>Reg Number:</td>
  <td><b><?php echo $row['regno'];?></b></td>
  <td>Registration type:</td><td><b>SINGLE</b></td>
  </tr>
      
  <tr>
  <td>Surname:</td><td><b><?php echo strtoupper($row['surname']);?></b></td><td>Firstname:</td><td><b><?php echo  strtoupper($row['firstname']);?></b></td>
  </tr>
      
  <tr>
  <td>Sex</td><td><b><?php echo $row['sex'];?></b></td>
  <td>Reg. Date:</td><td><b><?php echo $row['date'];?></b></td>
  </tr>
      
  <tr>
  <td>Email:</td><td><b><?php echo $row['email'];?></b></td>
  <td>Tel:</td><td><b><?php echo $row['tel'];?></b></td>
  </tr>
  <tr>
  <td>Address:</td><td><b><?php echo $row['add'];?></b></td>
  </tr>
  <tr>
  <td>State of Origin:</td><td><b><?php echo $row['state'];?> state</b></td>
  </tr>
  <tr>
  <td>Institution:</td><td><b><?php echo $row['inst'];?></b></td>
  </tr>
  <tr>
  <td>Level:</td><td><b><?php echo $row['level'];?></b></td>
  </tr>
      
  <tr>
  <td><p>&nbsp;</p></td>
  </tr>
      
  </table>
    <table width='80%' border='0' style='margin:auto;' id="tabtwo"  height="200">
  <tr>
  <td>Communication skill:</td><td><b><?php echo $row['comskill'];?></b></td>
  </tr>
      
  <tr>
  <td>Have you ever gone on a trip with a travel agency before :</td><td><b><?php echo $row['travelb4'];?></b></td>
  </tr>
      
  <tr>
  <td>Have you ever gone on a student trip/excursion :</td><td><b><?php echo $row['exb4'];?></b></td>
  <td>If Yes where did you go?</td><td><b><?php echo $row['wherego'];?></b></td>
  </tr>
      
      
  <tr>
  <td>Entertinment Talent:</td>
  <td><b><?php echo $row['entskill'];?></b></td>
  </tr>
      
  <tr>
  <td>Phobia:</td>
  <td><b><?php echo $row['phobia'];?></b></td>
  </tr>
      
  <tr>
  <td>How did you know about us:</td>
  <td><b><?php echo $row['know'];?></b></td>
  </tr>
      
      
  </table>
    
  <br/>
    <center> <img src="<?php echo "../barcodegen.1d-php5.v5.0.1/test.php?code={$row['regno']}";?>" alt="barcode" height="53" width="445" /></center>
    <center> <img src="images/okk.jpg" width="91" height="94" /></center>
    
    
    
    
  </fieldset>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <fieldset>
    
    
    <h1><?php echo $x['surname'].", ". $x['firstname'];?> Info</h1>
    
    
    
    
    <table width='80%' border='0' style='margin:auto; font-size:14px;' id="tabtwo" height="300" >
      <tr>
  <td>Reg Number:</td>
  <td><b><?php echo $x['regno'];?></b></td>
  <td>Registration type:</td><td><b>SINGLE</b></td>
  </tr>
      
  <tr>
  <td>Surname:</td><td><b><?php echo strtoupper($x['surname']);?></b></td><td>Firstname:</td><td><b><?php echo  strtoupper($x['firstname']);?></b></td>
  </tr>
      
  <tr>
  <td>Sex</td><td><b><?php echo $x['sex'];?></b></td>
  <td>Reg. Date:</td><td><b><?php echo $x['date'];?></b></td>
  </tr>
      
  <tr>
  <td>Email:</td><td><b><?php echo $x['email'];?></b></td>
  <td>Tel:</td><td><b><?php echo $x['tel'];?></b></td>
  </tr>
  <tr>
  <td>Address:</td><td><b><?php echo $x['add'];?></b></td>
  </tr>
  <tr>
  <td>State of Origin:</td><td><b><?php echo $x['state'];?> state</b></td>
  </tr>
  <tr>
  <td>Institution:</td><td><b><?php echo $x['inst'];?></b></td>
  </tr>
  <tr>
  <td>Level:</td><td><b><?php echo $x['level'];?></b></td>
  </tr>
      
  <tr>
  <td><p>&nbsp;</p></td>
  </tr>
      
  </table>
    <table width='80%' border='0' style='margin:auto;' id="tabtwo"  height="200">
  <tr>
  <td>Communication skill:</td><td><b><?php echo $x['comskill'];?></b></td>
  </tr>
      
  <tr>
  <td>Have you ever gone on a trip with a travel agency before :</td><td><b><?php echo $x['travelb4'];?></b></td>
  </tr>
      
  <tr>
  <td>Have you ever gone on a student trip/excursion :</td><td><b><?php echo $x['exb4'];?></b></td>
  <td>If Yes where did you go?</td><td><b><?php echo $x['wherego'];?></b></td>
  </tr>
      
      
  <tr>
  <td>Entertinment Talent:</td>
  <td><b><?php echo $x['entskill'];?></b></td>
  </tr>
      
  <tr>
  <td>Phobia:</td>
  <td><b><?php echo $x['phobia'];?></b></td>
  </tr>
      
  <tr>
  <td>How did you know about us:</td>
  <td><b><?php echo $x['know'];?></b></td>
  </tr>
      
      
  </table>
    
    <br/>
    <center> <img src="<?php echo "../barcodegen.1d-php5.v5.0.1/test.php?code={$x['regno']}";?>" alt="barcode" height="53" width="445" /></center>
    
    </fieldset>
  
  <?php
	}//male
?>
  
  
  
  <?php
	}//female
?>
  
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
  
</div>
<img src="../images/colored_line.gif" width="100%" height="8" />

</div><!--WRAPER DIV-->

</body>
</html>