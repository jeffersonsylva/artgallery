<?php
include("header.html");

if (isset($_COOKIE["username"])) { 
	
	$username = $_COOKIE["username"];
	$password = $_COOKIE["password"];

	$conn = mysql_connect("17carson.cs.uleth.ca",$username,$password)
	or die(mysql_error());

	mysql_select_db("group12",$conn) 
	or die(mysql_error());

	$sql = "insert into ARTWORK values 
	(
	'$_POST[id_no]',
	'$_POST[year]',
	'$_POST[title]',
	'$_POST[description]',
	'$_POST[storage]',
	'$_POST[artist_id_fk]',
	'$_POST[ename]'
	)";

	$sql2 = "insert into PAINTING values 
	(
	'$_POST[id_no]',
	'$_POST[media]',
	'$_POST[type]',
	'$_POST[dimensions]'
	)"; 

	if(mysql_query($sql,$conn) && mysql_query($sql2,$conn)) 
	{ 
		echo "<h3> Arwork '$_POST[title]' added!</h3>";

	} else {
	   $err = mysql_errno(); 
	   if($err == 1062)
	   {
	      echo "<p>Artwork name $_POST[title] already exists!</p>"; 
	   } 
	   else if($err == 1452 )
	   {
	      echo "<p>Exhibition Name doesn't match an existing exhibition.</p>"; 
	   }
	   else
	   {
	      echo "<p>MySQL error code $err </p>"; 
	   } 
	}

	echo "<a href=home.php>Return to Home Page.</a>";

} else {
   echo "<h3>You are not logged in!</h3><p> <a href=index.php>Login First</a></p>"; 
}

include("footer.html");
?>