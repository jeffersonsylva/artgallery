<?php
include("header.html"); // uses header.html to give format and style to the page
echo "<font size=\"5\"><b> Insert a new Painting! </b><br>"; //add a new artist
?>

<form action="insertpainting.php" method=post>

	Artwork ID: <input type=text name="id_no" size=10><br><br>
	Artwork Year: <input type=number name="year" size=20><br><br>
	Artwork Title: <input type=text name="title" size=20><br><br>
	Artwork Description: <input type=text name="description" size=20><br><br>
	In storage? (Yes/No): <input type=text name="storage" size=20><br><br>
	Artist ID: <input type=text name="artist_id_fk" size=10><br><br>
	Exhibition name: <input type=text name="ename" size=10><br>
	Please remember, the exhibition name should already exist on the exhibition table.<br><br>
	<!-- HERE STARTS THE INSERTION OF A PAINTING -->
	Painting media: <input type=text name="media" size=20><br><br>
	Painting type: <input type=text name="type" size=20><br><br>
	Painting Dimentions: <input type=text name="dimensions" size=20><br><br>

<input type=submit name="submit" value="Insert"></form> 

<?php include("footer.html"); ?>