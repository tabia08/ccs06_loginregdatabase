<?php

require "../config.php";

use App\User;

try {
	User::register('Apolinario', 'Mabini', 'apolinario@mabini.ph', 'FILIPINAS');
	echo "<li>Added 1 record";

	$users = [
		[
			'first_name' => 'Jose',
			'last_name' => 'Rizal',
			'email' => 'jose@rizal.ph',
			'pass' => 'TAGAILOG'
		],
		[
			'first_name' => 'Antonio',
			'last_name' => 'Luna',
			'email' => 'antonio@luna.ph',
			'pass' => 'ARTIKULOUNO'
		]
	];
	User::registerMany($users);
	echo "<li>Added " . count($users) . " more records";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

