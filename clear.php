<?php
	$servername = "localhost";
	$username = "root";
	$password = "";

	$conn = mysqli_connect($servername, $username, $password);
	$db = "USE db_oneasia;";
	mysqli_query($conn, $db);

	$truncate = "TRUNCATE tbl_list;";
	mysqli_query($conn, $truncate);

	mysqli_close($conn);

	include("services.html");
?>