<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include("../connect.php");
include("../class.php");
$object=new pclass();
$fetch="SELECT * FROM `single_registration` WHERE `regno`='{$_GET['regNo']}'";
$q=mysql_query($fetch) or die(mysql_error());
 while($row=mysql_fetch_array($q)){
	 
/*========================================SEND EMAIL ===========================================================================================
*****************************************************************************************************************
***********************************************************************************************************************************************************/
	$body="<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<body>



<div  style='color:#333; font-family:Tahoma, Geneva, sans-serif; font-size:12px; margin:auto; width:960px;'>

  <img src='images/MAIL_HEAD.gif' width='100%' height='229'>
  
  <table border='0' width='800' style='margin:auto; color:#000; border:1px solid #000;' id='tabtwo'>
  <tr>
    <td style='padding:10px;'><h1>Dear    {$row['surname']} {$row['firstname']}  , </h1>
  
  
  <p>Your Registration for the Adventura 2013 was  <b style='color:#5f881f'>successful</b>! We have recieved all your details.</p>
   
   <P>A Registration Confirmation mail has been sent to the email you provided. Please you are advised to print this page, as you will be required to present  <b>the printout</b>, together with a photocopy of your <b>School ID card</b> and the Duplicate of the <b>Bank deposit slip</b> for confirmation.</p>

   <table width='100%' border='0' style='margin:auto; font-size:14px;' id='tabtwo' height='300' >
     <tr>
       <td width='20%'>Reg Number:</td>
       <td width='28%'><b>   {$row['regno']}  </b></td>
       <td width='20%'>Registration type:</td>
       <td width='32%'><b>COUPLE</b></td>
     </tr>
     <tr>
       <td>Surname:</td>
       <td><b>   strtoupper({$row['surname']})  </b></td>
       <td>Firstname:</td>
       <td><b>    strtoupper({$row['firstname']})  </b></td>
     </tr>
     <tr>
       <td>Sex</td>
       <td><b>   {$row['sex']}  </b></td>
       <td>Reg. Date:</td>
       <td><b>   {$row['date']}  </b></td>
     </tr>
     <tr>
       <td>Email:</td>
       <td><b>   {$row['email']}  </b></td>
       <td>Tel:</td>
       <td><b>   {$row['tel']}  </b></td>
     </tr>
       <tr>
       <td>Institution:</td>
       <td><b>   {$row['inst']}  </b></td>
       <td>Program</td>
       <td><b>   {$row['study']}  </b></td>
     </tr>
     <tr>
       <td>Address:</td>
       <td><b>   {$row['add']}  </b></td>
       
     </tr>
     <tr>
       <td>State of Origin:</td>
       <td><b>   {$row['state']}   state</b></td>
     </tr>
   
     <tr>
       <td>Level:</td>
       <td><b>   {$row['level']}  </b></td>
     </tr>
   </table>
   
<center><img style='margin-top:10px;' src='   '../barcodegen.1d-php5.v5.0.1/test.php?code={$row['regno']}}'  ' alt='barcode' height='47' width='365' /> </center>
   <p style='font-weight:bold; color:#F60;'>NOTE:</p>
        
          <p>This Registration does not confirm your eligibilty to be part of Adventura 2013 until <b>payments</b> are made.</p>
          <p>Do NOT make payment until you recieve an <b>EMAIL</b> and <b>SMS</b> from Us. </p>
          <p>Depositors NAME should be:  <b> ".strtoupper($row['surname'])." " .strtoupper($row['firstname'])."{$row['regno']}</b></p>
  <p>Payments  should be made to the following account deatils:</p>
  </ul>
  <br/>
        <div style='margin-left:30px;'>
          <img src='../images/gtbank-logo.jpg' width='45' height='45' style='float:left; margin-right:5px;' />
         
            <p>Guarantee Trust Bank<br/>
            Acc Name: <b>Adventure World Concept</b><br/>
            Acc No: 0128396541</p>
          </div>
   <div style='clear:both;'></div>
   <center> <img src='../images/okk.jpg' width='91' height='94' /></center>
<p style='color:#000; font-family:Verdana, Geneva, sans-serif; font-size:12px;'>Best Regards,<br/>
  <b>Adventura Team.<br/> 0703 738 5018</b></p>

</td>
</tr>
</table>



<p>&nbsp;</p>
</div>
</body>




</html>";	

?>

<?php


$email=$row['email'];



	$body=wordwrap($body, 80);
  $headers .= 'Reply-To: The Sender <adventura2013@adventureworld.com.ng>\r\n'; 
  $headers .= 'Return-Path: The Sender <adventura2013@adventureworld.com.ng>\r\n'; 
  $headers .= 'From: The Sender <adventura2013@adventureworld.com.ng>\r\n';
  $headers .= 'Organization: Adventure World\r\n';
  $headers .= 'MIME-Version: 1.0\r\n';
  $headers .= 'Content-type: text/plain; charset=iso-8859-1\r\n';
  $headers .= 'X-Priority: 3\r\n';
  $headers .= 'X-Mailer: PHP'. phpversion() .'\r\n' ;
  
  $subject='Adventura 2013 Registration Confirmation!!';
 
//send confirmation email to MALE**********************************************************************************************************
 
	mail('$email', '$subject', '$body', $headers); 	
	
//*****************************************************************************************************************************************	
	
	
	   
	   
/*========================================SEND EMAIL ===========================================================================================*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<title>Registration successful</title>
<link rel="stylesheet" href="../styles/layout.css" type="text/css" />
<link href="../styles/style.css" rel="stylesheet" type="text/css" />

<link rel="shortcut icon" href="../favicon.ico" />
<link rel="icon" href="../favicon.png" type="images/png" />
<script type="text/javascript" src="../scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="../scripts/jquery.slidepanel.setup.js"></script>
<script type="text/javascript" src="../scripts/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="../scripts/jquery.tabs.setup.js"></script>
</head>
<body>
<div class="wrapper col0">
  <div id="topbar">
    <div id="slidepanel">
      <div class="topbox">
        <h2>Nullamlacus dui ipsum</h2>
        <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat. Adipisciniapellentum leo ut consequam ris felit elit id nibh sociis malesuada.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
      <br class="clear" />
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
    <div id="logo">

<img src="../images/logo.gif" style="margin:0" width="232" height="92" />

    </div>
    <div class="fl_right">
      <ul>
        <li  class="last"><a style="color:#09F;" href="single_registration.php">Single Registration</a></li>
        <li></li>
      </ul>
      <p>Tel: 0703 738 5018 Mail: info@adventureworld.com.ng</p>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topnav">
   <ul>
      <li class="active"><a href="../index.php">Home</a>
        <ul>
          <li><a href="#" style="color:#24abe4">Single Registration</a></li>
          <li><a href="../couple/male_couple_reg.php" style="color:#fad608">Couple Registration</a></li>
          <li><a href="../adventura2013.php">About Adventura 2013</a></li>
        </ul>
      </li>
      <li><a href="../about_us.php">About Us</a>
        <ul>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li class="last"><a href="#"></a></li>
        </ul>
      </li>
      <li><a href="../contact.php">Contact</a>
        <ul>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li class="last"><a href="#"></a></li>
        </ul>
      </li>
      <li><a href="#">Our Services</a></li>
      <li class="last"><a href="#"></a></li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="featured_slide"></div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="container">
    <div id="hpage">
  <h3>Confirmation</h3>
  
  <table border="0" width="800" style="margin:auto; color:#000; border:1px solid #000;" id="tabtwo">
    <tr>
      <td style="padding:10px;"><h1>Dear <?php echo $_GET['name'];?>, </h1>
        
        
        <p>Your Registration for Adventura 2013 was  <b style="color:#5f881f">successful</b>! We have recieved all your details.</p>
        
        <P>A Registration Confirmation mail has been sent to the email you provided. Please you are advised to print this page, as you will be required to present  <b>the printout</b>, together with a photocopy of your <b>School ID card</b> and the Duplicate of the <b>Bank deposit slip</b> for confirmation.</p>
        
        <table width='100%' border='0' style='margin:auto; font-size:14px;' id="tabtwo" height="300" >
          <tr>
            <td width="17%">Reg Number:</td>
            <td width="39%"><b><?php echo $row['regno'];?></b></td>
            <td width="18%">Registration type:</td>
            <td width="26%"><b>SINGLE</b></td>
            </tr>
          <tr>
            <td>Surname:</td>
            <td><b><?php echo strtoupper($row['surname']);?></b></td>
            <td>Firstname:</td>
            <td><b><?php echo  strtoupper($row['firstname']);?></b></td>
            </tr>
          <tr>
            <td>Sex:</td>
            <td><b><?php echo $row['sex'];?></b></td>
            <td>Reg. Date:</td>
            <td><b><?php echo $row['date'];?></b></td>
            </tr>
          <tr>
            <td>Email:</td>
            <td><b><?php echo $email;?></b></td>
            <td>Tel:</td>
            <td><b><?php echo $row['tel'];?></b></td>
            </tr>
          <tr>
            <td>Institution:</td>
            <td><b><?php echo $row['inst'];?></b></td>
            <td>Program:</td>
            <td><b><?php echo $row['study'];?></b></td>
            </tr>
          <tr>
            <td>Address:</td>
            <td><b><?php echo $row['add'];?></b></td>
            
            </tr>
          <tr>
            <td>State of Origin:</td>
            <td><b><?php echo $row['state'];?> state</b></td>
            </tr>
          
          <tr>
            <td>Level:</td>
            <td><b><?php echo $row['level'];?></b></td>
            </tr>
          </table>
        
  <center><img style="margin-top:10px;" src="<?php echo "../barcodegen.1d-php5.v5.0.1/test.php?code={$_GET['regNo']}";?>" alt="barcode" height="47" width="365" /> </center>
        <p style="font-weight:bold; color:#F60;">NOTE:</p>
        
          <p>This Registration does not confirm your eligibilty to be part of Adventura 2013 until <b>payments</b> are made.</p>
          <p>Do NOT make payment until you recieve an <b>EMAIL</b> and <b>SMS</b> from Us. </p>
          <p>Depositors NAME should be:  <b><?php echo strtoupper($row['surname'])." ". strtoupper($row['firstname'])." ". $row['regno'];?></b></p>
  <p>Payments  should be made to the following account deatils:</p>
  </ul>
  <br/>
        <div style="margin-left:30px;">
          <img src="../images/gtbank-logo.jpg" width="45" height="45" style="float:left; margin-right:5px;" />
         
            <p>Guarantee Trust Bank<br/>
            Acc Name: <b>Adventure World Concept</b><br/>
            Acc No: 0128396541</p>
          </div>
        <div style="clear:both;"></div>
        
        <center> <img src="../images/okk.jpg" width="91" height="94" /></center>
  <p style="color:#000; font-family:Verdana, Geneva, sans-serif; font-size:12px;">Best Regards,<br/>
  <b>Adventura Team.<br/> 0703 738 5018</b></p>
        
  </td>
  </tr>
  </table>
  <?php } ?>
  
  
  <br/>
  <br/>
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
  
  </div></div></div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="footer">
    <div id="newsletter">
      <h2>News Letter</h2>
      <p>Please enter your email to join our mailing list</p>
      <form action="#" method="post">
        <fieldset>
          <legend>News Letter</legend>
          <input type="text" value="Enter Email Here&hellip;"  onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
          <input type="submit" name="news_go" id="news_go" value="GO" />
        </fieldset>
      </form>
      <p>&nbsp;</p>
    </div>
    <div class="footbox">
      <h2>Our Partners</h2>
      <ul>
        <li><a href="#">GMU 360 Concept</a></li>
        <li><a href="#">Techtower</a></li>
        <li><a href="#">Berbzz Photography</a></li>
        <li><a href="#">GT Bank</a></li>
        <li class="last"><a href="#">SUG, FUTMINNA</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Adventura 2013</h2>
      <ul>
        <li><a href="#">Single Registration</a></li>
        <li><a href="../couple/male_couple_reg.php">Couple Registration</a></li>
        <li><a href="../adventura2013.php">About Adventura 2013</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Quick Links</h2>
      <ul>
        <li>Our Tours</li>
        <li>Our Services</li>
        <li><a href="#">Our Team</a></li>
        <li><a href="www.twitter.com/adventureng">twitter:@adventureng</a></li>
        <li class="last"><a href="www.facebook.com/Adventure World">Facebook: Adventure World</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col6">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2013 - All Rights Reserved - <a href="#">Adventure World </a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>
