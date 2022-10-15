<?php
	//Database Name
	$db='db_perpus';
	//Connection Process
	$con=mysqli_connect('localhost','root','',$db);
//Crosscheck Connection
if (mysqli_connect_error()) {
	printf("Connecting to DB FAILED! :", mysqli_connect_error());
	exit();
}
?>