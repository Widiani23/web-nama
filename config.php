<?php 
$server = "localhost";
$user= "root";
$password= "";
$nama_db= "vsga";

$db= mysqli_connect($server, $user, $password, $nama_db);
if (!$db) {
	die("Gagal terhubung dengan Database: " .mysqli_connect());
}else{
	echo "connected";
	# code...
}

 ?>