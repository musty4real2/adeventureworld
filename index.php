<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include("class.php");
$object=new pclass();
session_start();
include("connect.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<title>:: Adventure World :: Welcome to Adventure!</title>
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="favicon.png" type="images/png" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.slidepanel.setup.js"></script>
<script type="text/javascript" src="scripts/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="scripts/jquery.tabs.setup.js"></script>
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

<img src="images/logo.gif" style="margin:0" width="232" height="92" />

    </div>
    <div class="fl_right">
      <ul>
        <li  class="last"><a style="color:#09F;" href="single/single_registration.php">Single Registration</a></li>
        <li><a  style="color: #F90;" href="couple/male_couple_reg.php">Couple Registration</a></li>
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
          <li><a href="couple/male_couple_reg.php" style="color:#fad608">Couple Registration</a></li>
          <li><a href="adventura2013.php">About Adventura 2013</a></li>
        </ul>
      </li>
      <li><a href="about_us.php">About Us</a>
        <ul>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li class="last"><a href="#"></a></li>
        </ul>
      </li>
      <li><a href="contact.php">Contact</a>
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
  <div id="featured_slide">
    <div id="featured_wrap">
      <ul id="featured_tabs">
        <li><a style="color:#02a2d2;" href="#fc1">SINGLE REGISTRATION<br />
          <span style="color:#FFF;">Nullamlacus dui ipsum conseqlo borttis.</span></a></li>
        <li><a style="color:#fac20a;" href="#fc2">COUPLE REGISTRATION<br />
          <span style="color:#FFF;">Nullamlacus dui ipsum conseqlo borttis.</span></a></li>
        <li><a  style="color:#7fc030;"href="#fc3">About Adventura 2013<br />
          <span style="color:#FFF;">Nullamlacus dui ipsum conseqlo borttis.</span></a></li>
        <li class="last"><a style="color:#f60606" href="#fc4">Contact Us<br />
          <span style="color:#FFF;">Nullamlacus dui ipsum conseqlo borttis.</span></a></li>
      </ul>
      <div id="featured_content">
        <div class="featured_box" id="fc1"><img src="images/1.gif" alt="" />
          <div class="floater"><a href="single/single_registration.php">CLICK HERE &raquo;</a></div>
        </div>
        <div class="featured_box" id="fc2"><img src="images/2.gif" alt="" />
          <div class="floater"><a href="couple/male_couple_reg.php">CLICK HERE &raquo;</a></div>
        </div>
        <div class="featured_box" id="fc3"><img src="images/3.gif" alt="" />
          <div class="floater"><a href="adventura2013.php">CLICK HERE &raquo;</a></div>
        </div>
        <div class="featured_box" id="fc4"><img src="images/4.gif" alt="" />
          <div class="floater"><a href="contact.php">CLICK HERE &raquo;</a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="container">
    <div id="hpage">
      <ul>
        <li>
          <div class="imgholder"><a href="#"><img src="images/fest.gif" alt="" /></a></div>
          <p>Have  you always wished to be at the Brazil Carnival in Rio De Janero or the Calabar  Street Carnival but don&rsquo;t know how to go about it? Well, we are here to fulfill  your wish! We organize yearly trip to these carnival. We ensure that the  travelling plans and itineraries suit your pocket.</p>
        </li>
        <li>
          <div class="imgholder"><a href="#"><img src="images/honey.gif" alt="" /></a></div>
          <p>We  organize honeymoon trips for married couples who desire to have adventure and  fun.&nbsp; Our recommended destinations have  been carefully handpicked so as to ensure that nothing but the best is what our  client gets.</p>
        </li>
        <li>
          <div class="imgholder"><a href="#"><img src="images/fam.gif" alt="" /></a></div>
          <p>Families  who intend travelling for holidays can choose us for their desired travelling  agent. We handle all preparations, plans and itenary planning. Our team  carefully plans the holiday trip tailored to best suit the excitement,  adventure and fun you desire.&nbsp; </p>
        </li>
        <li class="last">
          <div class="imgholder"><a href="#"><img src="images/plane.gif" alt="" /></a></div>
          <p>Annual  student adventure trips targeted for students in tertiary institution. We  carefully plan the trip itineraries that best suits students at a very  affordable price. We ensure that adequate plans are put in place to ensure that throughout  the trip is never a dulling moment.</p>
        </li>
      </ul>
      <br class="clear" />
    </div>
  </div>
</div>
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
        <li><a href="single/single_registration.php">Single Registration</a></li>
        <li><a href="couple/male_couple_reg.php">Couple Registration</a></li>
        <li><a href="adventura2013.php">About Adventura 2013</a></li>
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
