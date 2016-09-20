<?php
include("header.html"); // uses header.html to give format and style to the page
echo "<font size=\"5\"><b> Select an Exhibition! </b><br>"; //add a new artist
?>

<form action="select_exhibition.php" method=post>
	Exhibition name: <input type=text name="ename" size=20>
<input type=submit name="submit" value="Display"></form>

<br>
<?php // DISPLAYS TABLE
if(isset($_COOKIE["username"])){
	$username = $_COOKIE["username"];
	$password = $_COOKIE["password"];	
	$conn = mysql_connect("17carson.cs.uleth.ca",$username,$password) 
	or die(mysql_error());
	mysql_select_db("group12",$conn); 
	//display a table	
	$query = 'SELECT * FROM EXHIBITION where ename = "'.$_POST[ename].'";';
	$result = mysql_query($query) or die('Failed query: ' . mysql_error());
	//print the results on html
	echo "<table>\n";
	echo '<tr>
		<th>Exhibition name</th>
		<th>Start date</th>
		<th>Ending date</th>
		<th>Curator</th>
		<th>Room Number</th>
	</tr>';
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
	    echo "\t<tr>\n";
	    foreach ($line as $col_value) {
	        echo "\t\t<td>$col_value</td>\n";
	    }
	    echo "\t</tr>\n";
	}
	echo "</table>\n";
}

include("footer.html");
?>