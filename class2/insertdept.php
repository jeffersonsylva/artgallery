<?php
if (isset($_COOKIE["username"])) { 
$username = $_COOKIE["username"];
$password = $_COOKIE["password"];

$conn = mysql_connect("17carson.cs.uleth.ca",$username,$password) or 
die(mysql_error());
mysql_select_db($username,$conn) or die(mysql_error());

$sql = "insert into dept values ('$_POST[name]','$_POST[loc]','$_POST[id]')"; 
if(mysql_query($sql,$conn)) 
{ 
	echo "<h3> Department added!</h3>";

} else {
   $err = mysql_errno(); 
   if($err == 1062)
   {
      echo "<p>Department name $_POST[name] already exists!</p>"; 
   } else {
      echo "<p>MySQL error code $err </p>"; 

   }
   
}

echo "<a href=\"main.php\">Return</a> to Home Page.";

} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>"; 
}
?>