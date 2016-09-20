<?php
include("header.html"); // uses header.html to give format and style to the page
echo "<font size=\"5\"><b> Insert a new Artist! </b><br>"; //add a new artist
?>

<form action="insertartist.php" method=post>
	Artist ID: <input type=text name="artist_id" size=20><br><br>
	Artist Name: <input type=text name="aname" size=20><br><br>
	Artist Date of birth: <input type=text name="dob" size=20><br><br>
	Artist email: <input type=text name="email" size=20><br><br>
	Artist phone: <input type=text name="phone" size=20><br><br>
	Artist address: <input type=text name="address" size=20><br><br>
	Artist species: <input type=text name="species" size=20><br><br>
<input type=submit name="submit" value="Insert"></form> 

<?php include("footer.html"); ?>