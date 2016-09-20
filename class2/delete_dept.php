<html>
<head><title>University of Wendy</title></head>
<body>



<?php

if(isset($_COOKIE["username"])){

echo "<form action=\"deletedept.php\" method=post>";

	$username = $_COOKIE["username"];
	$password = $_COOKIE["password"];	

	$conn = mysql_connect("17carson.cs.uleth.ca",$username,$password) or die(mysql_error());
	mysql_select_db($username,$conn); 

	$sql = "select name from dept"; 
	$result = mysql_query($sql,$conn);
        if(mysql_num_rows($result) != 0)
	{
	   echo "Department Name: <select name=\"name\">";
	      
	        while($val = mysql_fetch_row($result))
		{
			echo "<option value=$val[0]>$val[0]</option>"; 

		}
		echo "</select>"; 
		echo "<input type=submit name=\"submit\" value=\"Delete\">"; 
	}
	else
	{
		echo "<p>Umm... Wendy.. you may want to enter some data. ;) </p>"; 
	}

	echo "</form>";
} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>"; 

}
?>


 
</body>
</html>
