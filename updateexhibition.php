<?php
include("header.html"); // uses header.html to give format and style to the page

if (isset($_COOKIE["username"])) { 
	
	$username = $_COOKIE["username"];
	$password = $_COOKIE["password"];

	$conn = mysql_connect("17carson.cs.uleth.ca",$username,$password)
	or die(mysql_error());

	mysql_select_db("group12",$conn) 
	or die(mysql_error());

	$sql = "update EXHIBITION set 
	s_date = '$_POST[s_date]',
	e_date = '$_POST[e_date]',
	curator = '$_POST[curator]',
	room_no = '$_POST[room_no]'
	where ename = '$_POST[ename]';";

	$artistnamevariable = $_POST["ename"];

	if(mysql_query($sql,$conn)) 
	{ 
		echo "<h3> Exhibition $artistnamevariable updated!</h3>";

	} else {
	   $err = mysql_errno(); 
	   if($err == 1062)
	   {
	      echo "<p>Exhibition $_POST[ename] doesnt exists!</p>"; 
	   } else {
	      echo "<p>MySQL error code $err </p>"; 

	   } 
	}

	echo "<a href=home.php>Return to Home.</a>";

} else {
   echo "<h3>You are not logged in!</h3><p> <a href=index.php>Login First</a></p>"; 
}
?>