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

	$sql = "update ARTWORK set 
	year = '$_POST[year]',
	title = '$_POST[title]',
	description = '$_POST[description]',
	storage = '$_POST[storage]',
	artist_id_fk = '$_POST[artist_id_fk]'
	where id_no = '$_POST[id_no]';";

	$sql2 = "update PAINTING set 
	media = '$_POST[media]',
	type = '$_POST[type]',
	dimensions = '$_POST[dimensions]'
	where id_no = '$_POST[id_no]';";

	$artworktitle = $_POST["title"];

	if(mysql_query($sql,$conn) && mysql_query($sql2,$conn)) 
	{ 
		echo "<h3> Artwork $artworktitle updated!</h3>";

	} else {
	   $err = mysql_errno(); 
	   if($err == 1062)
	   {
	      echo "<p>Artwork with ID $_POST[id_no] doesnt exists!</p>"; 
	   } else {
	      echo "<p>MySQL error code $err </p>"; 

	   } 
	}

	echo "<a href=home.php>Return to Home.</a>";

} else {
   echo "<h3>You are not logged in!</h3><p> <a href=index.php>Login First</a></p>"; 
}
?>