<?php

if (isset($_COOKIE["username"])) {
      
$username = $_COOKIE["username"];
$password = $_COOKIE["password"];

$conn = mysql_connect("17carson.cs.uleth.ca",$username,$password) or 
die(mysql_error());
mysql_select_db($username,$conn) or die(mysql_error());

$sql = "delete from dept where name='$_POST[name]'"; 
if(mysql_query($sql,$conn)) 
{ 
	echo "<h3> Department deleted!</h3>";

} else {
   $err = mysql_errno(); 
   $errtxt = mysql_error(); 
   echo "you got an error code of $err. $errtxt"; 
}
echo "<a href=\"main.php\">Return</a> to Home Page."; 
   } else {
      
   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>"; 
      
   }
?>