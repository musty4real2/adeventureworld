<?php
if(!$connect=mysql_connect("localhost", "root", "")){
	echo "<p class='msg error'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Could not connect to www.adventuraa.com.ng on localhost at this time. Please contact site administrator</p>";
	}


if(!$select=mysql_select_db("adventure", $connect)){	
echo "<p class='msg error'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sorry, could not select database at this time. Please contact site administrator</p>";
}
?>