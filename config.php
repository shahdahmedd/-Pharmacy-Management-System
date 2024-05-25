<?php
		$conn = mysqli_connect("localhost", "root", "", "pharmacy1");
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
?>