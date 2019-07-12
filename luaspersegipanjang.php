<?php 
function luasperpanjang($panjang, $lebar)
{
	$luas= $panjang * $lebar;
	return $luas;
	# code...
}
$panjang= 10;
$lebar= 6.5;
echo "Luas Persegi Panjang dengan panjang ".$panjang." cm dan lebar ".$lebar." cm ";
echo " adalah ". luasperpanjang($panjang, $lebar)." cm";

 ?>

 <br>
 <br>

 <?php 
function luassetlingkaran($phi, $diameter)
{
	$jari_jari= $diameter/2;
	$hasil = ($phi*$jari_jari*$jari_jari)/2;
	return $hasil;
	# code...
}
$diameter=6;
echo "Luas setengah lingkaran yang berdiameter ".$diameter." ";
echo " adalah ". luassetlingkaran(3.14, $diameter)." cm";

 ?>