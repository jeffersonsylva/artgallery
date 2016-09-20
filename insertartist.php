<?php
if (isset($_COOKIE["username"])) { 

	include("header.html"); // uses header.html to give format and style to the page
	
	$username = $_COOKIE["username"];
	$password = $_COOKIE["password"];

	$conn = mysql_connect("17carson.cs.uleth.ca",$username,$password)
	or die(mysql_error());

	mysql_select_db("group12",$conn) 
	or die(mysql_error());

	$sql = "insert into ARTIST values 
	(
	'$_POST[artist_id]',
	'$_POST[aname]',
	'$_POST[dob]',
	'$_POST[email]',
	'$_POST[phone]',
	'$_POST[address]',
	'$_POST[species]'
	)"; 

	if(mysql_query($sql,$conn)) 
	{ 
		echo "<font size=\"5\"><b> Artist '$_POST[aname]' added! </b><br>";

	} else {
	   $err = mysql_errno(); 
	   if($err == 1062)
	   {
	      echo "<p>Artist name $_POST[aname] already exists!</p>"; 
	   } else if ($err == 1062) {

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