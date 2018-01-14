<?php

  require_once 'libfunsi.php';
  //DEFIINISI VARIABEL
  $proses =$_POST['proses'];
  $nama =$_POST['nama'];
  $matkul =$_POST['matkul'];
  $UTS =$_POST['UTS'];
  $UAS =$_POST['UAS'];
  $TUGAS =$_POST['TUGAS'];

  $total = $UTS*30/100 + $UAS*35/100 + $TUGAS*35/100;

  $hasil_ujian = kelulusan($total);
  $grade = grade($total);
  $predikat = predikat($grade);

  //TAMPILAN
  echo 'proses : ' .$proses;
  echo '<br> nama : ' .$nama;
  echo '<br> Mata kuliah : '  .$matkul;
  echo '<br> Nilai UTS : ' .$UTS;
  echo '<br> Nilai UAS : ' .$UAS;
  echo '<br> Nilai tugas kelompok : ' .$TUGAS;
  echo '<br> nilai total : '.$total;
  echo '<br> dinyatakan : '.$hasil_ujian;
  echo '<br> grade : '.$grade;
  echo '<br> predikat : '.$predikat;
?>
