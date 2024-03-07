<?php
	$server = "localhost";
	$user	= "root";
	$pass = "";
	$database = "db_pusdig";
	$koneksi = mysqli_connect($server, $user, $pass, $database);
	if(!koneksi){
	  echo "terhubung ke database";
}
?>