<?php
include("header.html"); // uses header.html to give format and style to the page
echo "<font size=\"5\"><br>";
?>

		<div class="col-lg-12 text-center">
			<hr>
				<?php
					echo "<a href=insert_painting.php> Insert a painting. </a> <br>"; //add a new artwork
					echo "<a href=delete_artwork.php> Delete an artwork. </a> <br>"; //delete an artwork
					echo "<a href=select_painting.php> Select a specific painting. </a> <br>";
					echo "<a href=update_painting.php> Update a painting. </a> <br><br>";
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
							<strong>PAINTING</strong>
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
							$query = 'SELECT * FROM ARTWORK inner join PAINTING on PAINTING.id_no = ARTWORK.id_no;';
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
								<th>Media</th>
								<th>Type</th>
								<th>Dimesions</th>
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
			</div> <!-- closes the 'div' in the header so we can have a new card (or box) for content -->
	</div>
		
		<div class="row"> 
			<div class="box">
				<div class="col-lg-12 text-center">
					<hr>
						<?php
						echo "<a href=insert_sculpture.php> Insert an sculpture. </a> <br>"; //add a new artist
						echo "<a href=delete_artwork.php> Delete an artwork. </a> <br>"; //delete an artwork
						echo "<a href=select_sculpture.php> Select an especific sculpture. </a> <br>";
						echo "<a href=update_sculpture.php> Update an sculpture. </a> <br><br>";
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