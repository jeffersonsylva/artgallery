<?php
include("header.html"); // uses header.html to give format and style to the page
?>
<?php
if (isset($_COOKIE["username"])) { 
	
	$username = $_COOKIE["username"];
	$password = $_COOKIE["password"];

	$conn = mysql_connect("17carson.cs.uleth.ca",$username,$password)
	or die(mysql_error());

	mysql_select_db("group12",$conn) 
	or die(mysql_error());

	$sql = "update ARTIST set 
	aname = '$_POST[aname]',
	dob = '$_POST[dob]',
	email = '$_POST[email]',
	phone = '$_POST[phone]',
	address = '$_POST[address]',
	species = '$_POST[species]'
	where artist_id = '$_POST[artist_id]';";

	$artistnamevariable = $_POST["aname"];

	if(mysql_query($sql,$conn)) 
	{ 
		echo "<h3> Artist $artistnamevariable updated!</h3>";

	} else {
	   $err = mysql_errno(); 
	   if($err == 1062)
	   {
	      echo "<p>Artist with ID $_POST[artist_id] doesnt exists!</p>"; 
	   } else {
	      echo "<p>MySQL error code $err </p>"; 

	   } 
	}

	echo "<a href=home.php>Return to Home.</a>";

} else {
   echo "<h3>You are not logged in!</h3><p> <a href=index.php>Login First</a></p>"; 
}
?>