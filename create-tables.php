<?php

require "config.php";

try {
	$sql_users = "
		CREATE TABLE IF NOT EXISTS users (
			id INT AUTO_INCREMENT PRIMARY KEY,
			first_name VARCHAR(50) NOT NULL,
			middle_name VARCHAR(50) NOT NULL,
			last_name VARCHAR(50) NOT NULL,
			gender VARCHAR(50) NOT NULL,
			birthdate VARCHAR(50) NOT NULL,
			address VARCHAR(50) NOT NULL,
			contact VARCHAR(50) NOT NULL,
			email VARCHAR(100) UNIQUE NOT NULL,
			pass VARCHAR(500) NOT NULL,
			created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
		)
	";
	$conn->exec($sql_users);
	echo "<li>Created users table";

	// $sql_posts = "
	// 	CREATE TABLE IF NOT EXISTS posts (
	// 		id INT AUTO_INCREMENT PRIMARY KEY,
	// 		post_message VARCHAR(500) NOT NULL,
	// 		user_id INT,
	// 		created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	// 		FOREIGN KEY (user_id) REFERENCES users(id)
	// 	)
	// ";
	// $conn->exec($sql_posts);
	// echo "<li>Created posts table";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

