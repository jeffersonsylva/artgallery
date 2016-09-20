<?php

$IdConexion = mysql_connect("17carson.cs.uleth.ca", $_POST["username"], $_POST["password"]) 
or die ("Error trying to connect.");
// bako3660
// pznrzh

echo "<p>Connected successfully.</p><p>Welcome: $username.</p>";

$username = $_POST["username"];
$password = $_POST["password"]; 

setcookie("username",$username,time()+3600);
setcookie("password",$password,time()+3600);

header('Location: home.php');
?>