<?php
	$servername = "localhost";
	$username = "root";
	$password = "";

	$conn = mysqli_connect($servername, $username, $password);
	$db = "USE db_oneasia;";
	mysqli_query($conn, $db);

	/*$table = "CREATE TABLE tbl_transaction(
			 transaction_id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
			 customer_id INT(10) NOT NULL,
			 services_ordered NVARCHAR(50) NOT NULL,
			 booking_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL);";

	mysqli_query($conn, $table);*/

	$select = "SELECT customer_id FROM tbl_customer ORDER BY customer_id DESC LIMIT 1;";
	$result = mysqli_query($conn, $select);

	$select1 = "SELECT room_name FROM tbl_list ORDER BY room_name DESC;";
	$result1 = mysqli_query($conn, $select1);

	$insert = "INSERT INTO tbl_transaction (transaction_id, customer_id, services_ordered, booking_date)
				VALUES ('','$result', '$result1','NOW()');";
	mysqli_query($conn, $insert);

	mysqli_close($conn);

?>