<?php
include("header.html"); // uses header.html to give format and style to the page
?>

		<div class="col-lg-12 text-center">
			<hr>
				<?php
					echo "<font size=\"5\"><a href=insert_exhibition.php> Insert an exhibition. </a> <br>"; //add a new exhibition
					//echo "<a href=delete_exhibition.php> Delete an exhibition. </a> <br>";
					echo "<a href=select_exhibition.php> Select a specific exhibition. </a> <br>";
					echo "<a href=update_exhibition.php> Update an exhibition. </a> <br><br>";
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
							<strong>EXHIBITION</strong>
						</h2>
					<hr>

						<?php // DISPLAYS TABLE
						if(isset($_COOKIE["username"])){
							$username = $_COOKIE["username"];
							$password = $_COOKIE["password"];	
							$conn = mysql_connect("17carson.cs.uleth.ca",$username,$password) 
							or die(mysql_error());
							mysql_select_db("group12",$conn); 
							//display a table	
							$query = 'SELECT * FROM EXHIBITION;';
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
						?>
				</div>

<?php include("footer.html"); ?>