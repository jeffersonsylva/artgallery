<?php
include("header.html"); // uses header.html to give format and style to the page
echo "<font size=\"5\"><b> Insert a new Sculpture! </b><br>"; //add a new artist
?>

<form action="insertsculpture.php" method=post>
	
	Artwork ID: <input type=text name="id_no" size=10><br><br>
	Artwork Year: <input type=number name="year" size=20><br><br>
	Artwork Title: <input type=text name="title" size=20><br><br>
	Artwork Description: <input type=text name="description" size=20><br><br>
	In storage? (Yes/No): <input type=text name="storage" size=20><br><br>
	Artist ID: <input type=text name="artist_id_fk" size=10><br><br>
	Exhibition name: <input type=text name="ename" size=10><br>
	Please remember, the exhibition name should already exist on the exhibition table.<br><br>
	<!-- HERE STARTS THE INSERTION OF A SCULPTURE -->
	Sculpture material: <input type=text name="material" size=20><br><br>
	Sculpture style: <input type=text name="style" size=20><br><br>
	Sculpture height: <input type=number name="height" size=11><br><br>
	Sculpture weight: <input type=number name="weight" size=11><br><br>

<input type=submit name="submit" value="Insert"></form> 

<?php include("footer.html"); ?>