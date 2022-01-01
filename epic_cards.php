<?php
	$servername = "localhost";
	$username = "root";
	$password = "password";
	$dbName = "myDB";
	$conn = new mysqli($servername, $username, "", "epic_cards");
	$sql = "INSERT INTO epic_cards (history, examination, investigations, management, diagnosis, contibutor, likes, dislikes, dateSub) VALUES ('John', 'HR 150', 'ECG', 'GTN', 'MI', 'T F', 100, 14, '1/1/21')";
	if ($conn->query($sql) === TRUE) {
		echo "Success!";
	}
	$conn->close();

?>
