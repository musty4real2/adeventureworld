<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include("../class.php");
$object=new pclass();
session_start();
include("../connect.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<title>:: Adventura 2013 :: Couple(Female) Registration</title>
<link rel="stylesheet" href="../styles/layout.css" type="text/css" />
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
        <li  class="last"></li>
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
          <li><a href="single/single_registration.php" style="color:#24abe4">Single Registration</a></li>
          <li><a href="#" style="color:#fad608">Couple Registration</a></li>
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
    
    <h1>COUPLE(FEMALE) REGISTRATION</h1>
    
   <?php
 
 if(isset($_POST['register'])){
	 include("../connect.php");
	 
	$wherego=addslashes($_POST['wherego']);			 
	$sname=addslashes($_POST['sname']);			 
	$fname=addslashes($_POST['fname']);			 
	$sex=$_POST['sex'];			 
	$add=addslashes($_POST['add']);			 
	$tel=addslashes($_POST['tel']);			 
	$email=addslashes($_POST['email']);			 
	$state=addslashes($_POST['state']);			 
	$inst=addslashes($_POST['inst']);			 
	$study=addslashes($_POST['study']);			 
	$level=addslashes($_POST['level']);			 
	$commskill=addslashes($_POST['commskill']);			 
	$travelb4=addslashes($_POST['travelb4']);			 
	$exb4=addslashes($_POST['exb4']);			 
	$entskill=addslashes($_POST['entskill']);			 
	$phobia=addslashes($_POST['phobia']);
	$know=addslashes($_POST['know']);
	
	
	
	
	
	
//VALIDATE
	if($sname==""){
		$error[]="Your Surname is Required";
		}
			if($fname==""){
		$error[]="Your Firstame is Required";
		}				

	if($email==""){
		$error[]="Please enter your email address";
		}	
		
		$regex="/^[_a-zA-Z0-9-]+(\.[_a-z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-z]{2,3})$/";
		if(!preg_match($regex, $email)){
				$error[]="Please enter a valid email address";
	
			}
 	
	if($state==""){
		$error[]="Your State of Origin is required";
		}
	if($inst==""){
		$error[]="Your Institution is required";
		}
		if(!is_numeric($tel)){
		$error[]="Phone number must be in digits";
		}
				if($sex==""){
		$error[]="Your sex is required";
		}
				if($add==""){
		$error[]="Your home address is required";
		}
				if($tel==""){
		$error[]="Your telephone number is required";
		}
		if($level==""){
		$error[]="Your level is required";
		}
		if($entskill==""){
		$error[]="Please specify your Entertainment Talent";
		}
		if($exb4==""){
		$error[]="Please specify if you have gone on a trip before";
		}
		if($know==""){
		$error[]="Please specify how you got to know about us";
		}
		
		if(($exb4=='Yes') and ($wherego=="")){
		$error[]="Please specify where you went to on your perivous trip";
		}

	if(!empty($error)){
		echo "<p class='msg warning'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oops! ERROR:</p>";
		foreach($error as $oops){
			echo "<p class='msg error'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$oops</p>";
			}//foreach loop
		}//if !empty error
		
		
		//if $error variable is empty, continue with the script
		elseif(empty($error)){
	
									//echo "<img src='../uploads/".$actual_image_name."'  class='preview'>";


/*********************** *****************************************************************************************************************
************************************************************************************************************************************************************/
	
	
	
	
	
	

$token=$_POST['token'];
$sql="INSERT INTO `female_couple` (`regid`,`surname`, `firstname`, `sex`, `add`, `tel`, `email`, `state`, `inst`, `study`, `level`, `comskill`, `travelb4`, `exb4`, `entskill`, `phobia`, `wherego`, `know`, `date`, `regno`) 
VALUES ('{$_SESSION['regid']}', '$sname', '$fname', '$sex', '$add', '$tel', '$email', '$state', '$inst', '$study', '$level', '$commskill', '$travelb4', '$exb4', '$entskill', '$phobia', '$wherego', '$know', NOW(), '{$_SESSION['regno']}')";


$query=mysql_query($sql) or die("<p class='msg error'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".mysql_error()."</p>");


header("location:reg_confirm.php");


}
 
 }
  

 ?>
 
 
 <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"  enctype="multipart/form-data" id="regform">
   <table border="0" width="100%">
     
  <tr>
<td width="33%">Surname:<br/>
  <input class="input" style="text-transform:uppercase;" type="text" name="sname" size="40" value="<?php if(isset($_POST['sname'])){echo $_POST['sname']; }?>"/><span style="color:#F00; font-weight:bold;"> *</span></td><td width="67%">
 Firstname:<br/>
    <input name="fname" style="text-transform:uppercase;" type="text" class="input"value="<?php if(isset($_POST['fname'])){echo $_POST['fname']; }?>" size="40" /><span style="color:#F00; font-weight:bold"> *</span></td>
</tr>
<tr>
<td>Sex:<span style="color:#F00; font-weight:bold;">*</span><br/>
  <label>
    <input type="radio" name="sex" value="female" id="sex_0"  checked="checked" />
    female</label></td><td>State or Origin:<br/>
      <select name="state">
        <option value="">select</option>
        <option value="">select</option>
        <option value="">..................</option>
        <?php
      $states=array('Abia', 'Adamawa',  'Adamawa','Akwa-Ibom', 'Anambra',
					' Bauchi',' Bayelsa', 'Benue','Borno', 'Cross River', 
					'Delta', 'Ebonyi', 'Edo','Ekiti','Enugu',  'Gombe', 
					'Imo','Jigawa','Kaduna', 'Kano', 'Katsina','Kebbi','Kogi','Kwara',
					'Lagos','Nasarawa','Niger','Ogun','Ondo','Osun','Oyo', 'Plateau','Rivers',
					'Sokoto','Taraba','Yobe','Zamfara', 'Abija');
	  foreach($states as $key => $stat){
		  echo "<option value='$stat'>$stat</option>";
		  }
  

	
      
      ?>
        <?php if($_POST['state']){echo "<option  value='{$_POST['state']}' selected='selected'>{$_POST['state']}</option>"; }?>
      </select>
      <span style="color:#F00; font-weight:bold;">*</span><br/></td>
</tr>

<tr>
<td>Tel:<br/>
  <input type="text" size="40"class="input" name="tel" value="<?php if(isset($_POST['tel'])){echo $_POST['tel']; }?>" />
  <span style="color:#F00; font-weight:bold;">*</span></td><td>Email:<br/>
    <input type="text" size="70"  name="email" class="input" value="<?php if(isset($_POST['email'])){echo $_POST['email']; }?>"/>
    <span style="color:#F00; font-weight:bold;">*</span></td>
 </tr>
 <tr>
 <td>Entertainment Talent<br/>
   <select name="entskill">
     <option value="">select</option>
     <option value="">................</option>
     <option value="Singing">Singing</option>
     <option value="Acting">Acting</option>
     <option value="Comedy">Comedy</option>
     <option value="Dance">Dancing</option>
     <option value="Rapping">Rapping</option>
     <option value="Song Writing">Song Writing</option>
     <option value="MC">MC</option>
     <option value="other">other</option>
     <?php if($_POST['entskill']){echo "<option  value='{$_POST['entskill']}' selected='selected'>{$_POST['entskill']}</option>"; }?>
   </select>
   <span style="color:#F00; font-weight:bold;">*</span></td>
 <td>Address:<br/>
   <input type="text" size="70" name="add"  class="input" value="<?php if(isset($_POST['add'])){echo $_POST['add']; }?>" />
   <span style="color:#F00; font-weight:bold;">*</span></td>
 </tr>
 <tr><td>Program of study:<br/>
     <input name="study" type="text"  class="input"  value="<?php if(isset($_POST['study'])){echo $_POST['study']; }?>" size="50"/>
     <span style="color:#F00; font-weight:bold;">*</span></td>
   <td>Institution:<br/>
     <input name="inst" type="text" class="input" value="<?php if(isset($_POST['inst'])){echo $_POST['inst']; }?>" size="70" />
     <span style="color:#F00; font-weight:bold;">*</span></td>
 </tr>
 <tr>
 <td>&nbsp;</td><td>Level:<br/>
   <select name="level">
     <option value="">Select</option>
     <option value="">............</option>
     <option value="100">100</option>
     <option value="200">200</option>
     <option value="300">300</option>
     <option value="400">400</option>
     <option value="500">500</option>
     <option value="other">other</option>
     <?php if(isset($_POST['level'])){echo "<option  value='{$_POST['level']}' selected='selected'>{$_POST['level']}</option>"; }?>
   </select>
   <span style="color:#F00; font-weight:bold;">*</span></td>
 </tr>

 
 <tr>
<td>&nbsp;</td>
            <td>Any Phobia? If yes list:<br/>
            <span style="color:#F00; font-weight:bold;">
            <input type="text" size="70" name="phobia" class="input" value="<?php if(isset($_POST['phobia'])){echo $_POST['phobia']; }?>" />
            *</span></td>

</tr>









</table>
<br/>
<table width="70%" border="0">

<tr>
<td width="30%" align="left" valign="top">How well do you socialize?<span style="color:#F00; font-weight:bold;"> *</span></td>
<td width="26%">
  <label>
    <input type="radio" name="commskill" value="Excellent " id="RadioGroup1_0" <?php if(isset($_POST['commskill'])=='Excellent'){echo "checked='checked'"; }?> />
Excellent </label>
  <br />
  <label>
    <input type="radio" name="commskill" value="Good" id="RadioGroup1_1" <?php if(isset($_POST['commskill'])=='Good'){echo "checked='checked'"; }?>/>
     Good </label>
  <br />
  <label>
    <input type="radio" name="commskill" value="Fair" id="RadioGroup1_2" <?php if(isset($_POST['commskill'])=='Fair'){echo "checked='checked'"; }?> />
    Fair </label>
  <br />
  <label>
    <input type="radio" name="commskill" value="Poor" id="RadioGroup1_3"  <?php if(isset($_POST['commskill'])=='Poor'){echo "checked='checked'"; }?>/>
   Poor</label>
  <br />
</td>


<td>Have you ever gone on a trip with a travel agency before? <span style="color:#F00; font-weight:bold;">*</span></td>
<td width="11%"><label>
  <br/><input type="radio" name="travelb4" value="Yes" id="RadioGroup2_2" <?php if(isset($_POST['travelb4'])=='Yes'){echo "checked='checked'"; }?> />
  Yes</label>
  <br />
  <label>
    <input type="radio" name="travelb4" value="No" id="RadioGroup2_3"  <?php if(isset($_POST['travelb4'])=='No'){echo "checked='checked'"; }?>/>
    No</label></td>
</tr>
<tr>

</tr>

<tr>
<td>Have you ever gone on a student trip/excursion ? <span style="color:#F00; font-weight:bold;">*</span> <br/><br/></td>
<td><p>
  <label>
   <br/> <input type="radio" name="exb4" value="Yes" id="RadioGroup2_0" <?php if(isset($_POST['exb4'])=='Yes'){echo "checked='checked'"; }?>/>
    Yes</label>
  <br />
  <label>
    <input type="radio" name="exb4" value="No" id="RadioGroup2_1" <?php if(isset($_POST['exb4'])=='No'){echo "checked='checked'"; }?>/>
    No</label><br/>
  If Yes where did you go?<br/>
  <input class="input" size="30" type="text" name="wherego" value="<?php if(isset($_POST['wherego'])){echo $_POST['wherego']; }?>" />
  <br />
</p></td>


 <td width="33%">How did you know about us? <span style="color:#F00; font-weight:bold;">*</span></td>
 <td><label>
  <br/> <input type="radio" name="know" value="Friend " id="RadioGroup1_4" <?php if(isset($_POST['know'])=='Friend'){echo "checked='checked'"; }?>/>
   Friend </label>
   <br />
   <label>
     <input type="radio" name="know" value="Poster" id="RadioGroup1_5" <?php if(isset($_POST['know'])=='Poster'){echo "checked='checked'"; }?>/>
     Poster </label>
   <br />
   <label>
     <input type="radio" name="know" value="Flyer" id="RadioGroup1_6"<?php if(isset($_POST['know'])=='Flyer'){echo "checked='checked'"; }?> />
     Flyer </label>
   <br />
   <label>
     <input type="radio" name="know" value="Radio" id="RadioGroup1_7" <?php if(isset($_POST['know'])=='Radio'){echo "checked='checked'"; }?>/>
     Radio</label></td>
 </tr>



 


 </table>
 
    <p align="center"><input type="submit" name="register" class="register"  value="REGISTER" style=" background-color:#000; width:150px; height:30px;
      color:#fff; cursor:pointer;" /></p>
                  
	  </form>
  
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
        <li><a href="../single/single_registration.php">Single Registration</a></li>
        <li><a href="#">Couple Registration</a></li>
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
