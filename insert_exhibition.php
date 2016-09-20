<?php
include("header.html"); // uses header.html to give format and style to the page
echo "<font size=\"5\"><b> Insert a new Exhibition! </b><br>"; //add a new artist
?>

<form action="insertexhibition.php" method=post>
	Exhibition name: <input type=text name="ename" size=20><br><br>
	Start date: <input type=text name="s_date" size=20><br><br>
	Ending date: <input type=text name="e_date" size=20><br><br>
	Curator: <input type=text name="curator" size=30><br><br>
	Room No. <input type=text name="room_no" size=20><br><br>
<input type=submit name="submit" value="Insert"></form> 

<?php include("footer.html"); ?>