<?php
include("header.html"); // uses header.html to give format and style to the page
echo "<font size=\"5\"><b> Select an Artist! </b><br>"; //add a new artist
?>

<form action="select_artist.php" method=post>
	Artist ID: <input type=text name="artist_id" size=20>
<input type=submit name="submit" value="Display"></form>

<br>
<?php // select artist
if(isset($_COOKIE["username"])){
	//echo "<p>Showig all the Artists called $_POST[aname]:</p>"; 

	$username = $_COOKIE["username"];
	$password = $_COOKIE["password"];	

	$conn = mysql_connect("17carson.cs.uleth.ca",$username,$password) 
	or die(mysql_error());
	
	mysql_select_db("group12",$conn); 
	
	$query = 'SELECT * FROM ARTIST where artist_id = "'.$_POST[artist_id].'";';
	$result = mysql_query($query) or die('Failed query: ' . mysql_error());
	//print the results on html
	echo "<table>\n";
	echo '<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Birth</th>
	<th>Email</th>
	<th>Phone</th>
	<th>Address</th>
	<th>Species</th>
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
?>
<?php include("footer.html"); ?>