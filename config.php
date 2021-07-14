<?php
	$servername="localhost";
	$username="root";
	$password="";
	$database="maze_bank";
	$conn=new mysqli($servername, $username, $password, $database);
	if(!$conn){
		echo "Connection failed";
	}
?>