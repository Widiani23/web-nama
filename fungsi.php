<?php
function hitungUmur($thn_lahir, $thn_sekarang){
  $umur = $thn_sekarang - $thn_lahir;
  return $umur;
}

function perkenalan($nama, $salam="Assalamualaikum"){
  echo $salam.", "."<br/>";
  echo "Perkenalkan, nama saya ".$nama."<br/>";

  echo "Saya berusia ". hitungUmur(1997, 2019) ." tahun<br/>";
  echo "Senang berkenalan dengan anda<br/>";
}


perkenalan("Zulfa");

?>

<br>
<hr>

<?php

function faktorial($angka) {
  if ($angka < 2) {
    return 1;
  } else {

  return ($angka * faktorial($angka-1));
  }
}

echo "faktorial 4 adalah " . faktorial(4);

?>