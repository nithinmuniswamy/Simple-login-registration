<?php
    session_start();

    $username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

    $link = mysqli_connect("localhost", "root", "root", "php", "3308");
    
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>