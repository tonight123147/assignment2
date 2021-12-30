<?php
	// $hostname = 'localhost';
    // $username = 'mydatebase';
	// $password = '123456';
	// $database = 'shoponline';
	// $port = '3306';
	$conn = mysqli_connect("localhost", "mydatebase", "123456", "shoponline", "3306");
	mysqli_set_charset($conn,"utf8");
?>