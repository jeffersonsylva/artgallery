<?php
include("header.html"); // uses header.html to give format and style to the page
echo "<font size=\"5\"><b> Update an Sculpture! </b><br>"; //add a new artist
?>

<form action="updatesculpture.php" method=post>
	
	Artwork ID: <input type=text name="id_no" size=10><br><br>
	Artwork Year: <input type=number name="year" size=20><br><br>
	Artwork Title: <input type=text name="title" size=20><br><br>
	Artwork Description: <input type=text name="description" size=20><br><br>
	In storage? (Yes/No): <input type=text name="storage" size=20><br><br>
	Artist ID: <input type=text name="artist_id_fk" size=10><br><br>
	<!-- HERE STARTS THE UPDATE OF A PAINTING -->
	Sculpture material: <input type=text name="material" size=20><br><br>
	Sculpture style: <input type=text name="style" size=20><br><br>
	Sculpture height: <input type=number name="height" size=11><br><br>
	Sculpture weight: <input type=number name="weight" size=11><br><br>

<input type=submit name="submit" value="Update"></form>

</div> <!-- closes the 'div' in the header so we can have a new card (or box) for content -->
	</div>
		<div class="row"> 
			<div class="box">
				<div class="col-lg-12 text-center">
					<hr>
						<h2 class="intro-text text-center">TABLE:
							<strong>SCULPTURE</strong>
						</h2>
					<hr>
					<?php // DISPLAY TABLE
						if(isset($_COOKIE["username"])){
							$username = $_COOKIE["username"];
							$password = $_COOKIE["password"];
							$conn = mysql_connect("17carson.cs.uleth.ca",$username,$password) 
							or die(mysql_error());
							mysql_select_db("group12",$conn); 
							//display a table	
							$query = 'SELECT * FROM ARTWORK inner join SCULPTURE on SCULPTURE.id_no = ARTWORK.id_no;';
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
			</div>

<?php include("footer.html"); ?>