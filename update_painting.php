<?php
include("header.html"); // uses header.html to give format and style to the page
echo "<font size=\"5\"><b> Update an Painting! </b><br>"; //add a new artist
?>

<form action="updatepainting.php" method=post>
	
	Artwork ID: <input type=text name="id_no" size=10><br><br>
	Artwork Year: <input type=number name="year" size=20><br><br>
	Artwork Title: <input type=text name="title" size=20><br><br>
	Artwork Description: <input type=text name="description" size=20><br><br>
	In storage? (Yes/No): <input type=text name="storage" size=20><br><br>
	Artist ID: <input type=text name="artist_id_fk" size=10><br><br>
	<!-- HERE STARTS THE UPDATE OF A PAINTING -->
	Painting media: <input type=text name="media" size=20><br><br>
	Painting type: <input type=text name="type" size=20><br><br>
	Painting Dimentions: <input type=text name="dimensions" size=20><br><br>

<input type=submit name="submit" value="Update"></form>

</div> <!-- closes the 'div' in the header so we can have a new card (or box) for content -->
	</div>
		<div class="row"> 
			<div class="box">
				<div class="col-lg-12 text-center">
					<hr>
						<h2 class="intro-text text-center">TABLE:
							<strong>PAINTING</strong>
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
						
						$query = 'SELECT * FROM ARTWORK inner join PAINTING on ARTWORK.id_no = PAINTING.id_no;';
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