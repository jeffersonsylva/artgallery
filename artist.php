<?php
include("header.html"); // uses header.html to give format and style to the page
?>

		<div class="col-lg-12 text-center">
			<hr>
				<?php
					echo "<font size=\"5\"><a href=insert_artist.php> Insert a new artist. </a> <br>"; //add a new artist
					echo "<a href=delete_artist.php> Delete an artist. </a> <br>"; //delete an artist
					echo "<a href=select_artist.php> Select a specific artist. </a> <br>";
					echo "<a href=update_artist.php> Update an artist. </a> <br><br>";
				?>
			<hr>
		</div>

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

						<?php // DISPLAY TABLE
						if(isset($_COOKIE["username"])){
							$username = $_COOKIE["username"];
							$password = $_COOKIE["password"];	
							$conn = mysql_connect("17carson.cs.uleth.ca",$username,$password) 
							or die(mysql_error());
							mysql_select_db("group12",$conn);
							//display a table	
							$query = 'SELECT * FROM ARTIST;';
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
				</div>
<?php include("footer.html"); ?>