<?php
  //Definisikan konstanta
  define('PHI', '3.14');
  define('DBNAME', 'INVENTORI');
  define('DBSERVER', 'localhost');

  $r=8;
  $L=PHI * $r*$r;
  $K=2*PHI*$r;

  echo 'luas lingkaran dengan jari-jari : '.$r. ' : ' .$L;
  echo '<br> kelilinganya : ' .$K;

?>
<hr>

<?php
  echo "name databasenya : " .DBNAME;
  echo "<br>lokasi databasenya ada di : " .DBSERVER;
?>
