<?php
include("header.html"); // uses header.html to give format and style to the page
echo "<font size=\"5\"><b> Update an Artist! </b><br>"; //add a new artist
?>

<form action="updateartist.php" method=post>
	Artist ID: <input type=text name="artist_id" size=20><br><br>
	Artist Name: <input type=text name="aname" size=20><br><br>
	Artist Date of birth: <input type=text name="dob" size=20><br><br>
	Artist email: <input type=text name="email" size=20><br><br>
	Artist phone: <input type=text name="phone" size=20><br><br>
	Artist address: <input type=text name="address" size=20><br><br>
	Artist species: <input type=text name="species" size=20><br><br>
<input type=submit name="submit" value="Update"></form>

</div> <!-- closes the 'div' in the header so we can have a new card (or box) for content -->
	</div>
		<div class="row"> 
			<div class="box">
				<div class="col-lg-12 text-center">
					<hr>
						<h2 class="intro-text text-center">TABLE:
							<strong>ARTIST</strong>
						</h2>
					<hr>
					<?php // select artist
					if(isset($_COOKIE["username"])){
						//echo "<p>Showig all the Artists called $_POST[aname]:</p>"; 

						$username = $_COOKIE["username"];
						$password = $_COOKIE["password"];	

						$conn = mysql_connect("17carson.cs.uleth.ca",$username,$password) 
						or die(mysql_error());
						
						mysql_select_db("group12",$conn); 
						
						$query = 'SELECT * FROM ARTIST;';
						$result = mysql_query($query) or die('Failed query: ' . mysql_error());
						//print the results on html
						echo "<table>\n";
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
			</div>

<?php include("footer.html"); ?>