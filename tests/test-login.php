<?php

require "../config.php";

use App\User;

try {
	$result = User::attemptLogin('apolinario@mabini.ph', 'FILIPINAS');
	echo "<pre>";
	var_dump($result);
	echo "</pre>";

	$result = User::attemptLogin('jose@rizal.ph', 'WRONG PASSWORD');
	echo "<pre>";
	var_dump($result);
	echo "</pre>";

	$result = User::attemptLogin('antonio@luna.ph', 'ARTIKULOUNO');
	echo "<pre>";
	var_dump($result);
	echo "</pre>";
} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

