<?php
include('../includes/autoloader.php');

if($_SESSION['user']['role'] == 'admin') {
	echo 'hoi';
	
} else {
	header('location: ../index.php');
}


?>