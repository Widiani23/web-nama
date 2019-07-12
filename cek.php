<?php 
$nama= $_POST ['nama'];
$alamat= $_POST['alamat'];
$tempat=$_POST['tempat'];
$jk= $_POST['jk'];
$usia= $_POST['usia'];

if ($nama=="") {
	header("location:form.php?nama=kosong");
	}else {
		echo "Nama:".$nama ."<BR>";
		echo "Alamat:".$alamat ."<BR>";
		echo "Tempat:".$tempat ."<BR>";
		echo "Jenis Kelamin:".$jk ."<BR>";
		echo "Usia:".$usia ."<BR>";
		# code...
	}
	# code...

 ?>