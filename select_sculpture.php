<?php
include("header.html"); // uses header.html to give format and style to the page
echo "<font size=\"5\"><b> Select an Sculpture! </b><br>"; //add a new artist
?>

<form action="select_sculpture.php" method=post>
	Artwork ID: <input type=text name="id_no" size=10>
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
	
	$query = 'SELECT * FROM ARTWORK inner join SCULPTURE on ARTWORK.id_no = SCULPTURE.id_no 
				where ARTWORK.id_no = "'.$_POST[id_no].'";';
	
	$result = mysql_query($query) or die('Failed query: ' . mysql_error());
	//print the results on html
	echo "<table>\n";
	echo '<tr>
	<th>Artwork ID</th>
	<th>Year</th>
	<th>Name</th>
	<th>Description</th>
	<th>Is it in storage?</th>
	<th>Artist ID</th>
	<th>Exhibition Name</th>
	<th>Material</th>
	<th>Style</th>
	<th>Height (m)</th>
	<th>Weight (kg)</th>
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