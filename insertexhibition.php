<?php
include("header.html");

if (isset($_COOKIE["username"])) { 
	
	$username = $_COOKIE["username"];
	$password = $_COOKIE["password"];

	$conn = mysql_connect("17carson.cs.uleth.ca",$username,$password)
	or die(mysql_error());

	mysql_select_db("group12",$conn) 
	or die(mysql_error());

	$sql = "insert into EXHIBITION values 
	(
	'$_POST[ename]',
	'$_POST[s_date]',
	'$_POST[e_date]',
	'$_POST[curator]',
	'$_POST[room_no]'
	)";

	if(mysql_query($sql,$conn)) 
	{ 
		echo "<h3> Exhibition '$_POST[ename]' added!</h3>";

	} else {
	   $err = mysql_errno(); 
	   if($err == 1062)
	   {
	      echo "<p>Exhibition name $_POST[ename] already exists!</p>"; 
	   } else {
	      echo "<p>MySQL error code $err </p>"; 

	   } 
	}

	echo "<a href=home.php>Return to Home Page.</a>";

} else {
   echo "<h3>You are not logged in!</h3><p> <a href=index.php>Login First</a></p>"; 
}

include("footer.html");
?>