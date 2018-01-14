<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <form class="form-horizontal" method="POST" action="nilai_siswa.php">
    <fieldset>

    <!-- Form Name -->
    <legend>Form Nilai Mahasiswa</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="nama">Nama lengkap</label>
      <div class="col-md-5">
      <input id="nama" name="nama" type="text" placeholder="Nama lengkap" class="form-control input-md">

      </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="matkul">Mata kuliah</label>
      <div class="col-md-4">
        <select id="matkul" name="matkul" class="form-control">
          <option value="1">DDP</option>
          <option value="2">BD1</option>
          <option value="3">Web1</option>
        </select>
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="UTS">Nilai UTS</label>
      <div class="col-md-4">
      <input id="UTS" name="UTS" type="text" placeholder="Nilai UTS" class="form-control input-md">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="UAS">Nilai UAS</label>
      <div class="col-md-4">
      <input id="UAS" name="UAS" type="text" placeholder="Nilai UAS" class="form-control input-md">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="TUGAS">Nilai tugas/praktikum</label>
      <div class="col-md-4">
      <input id="TUGAS" name="TUGAS" type="text" placeholder="Nilai tugas/praktikum" class="form-control input-md">

      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="singlebutton"></label>
      <div class="col-md-4">
      </div>
      <button id="proses" name="proses" class="btn btn-primary">SIMPAN</button>
    </div>

    </fieldset>
    </form>

<?php
  //DEFIINISI VARIABEL
/*  $proses =$_GET['proses'];
  $nama =$_GET['nama'];
  $matkul =$_GET['matkul'];
  $UTS =$_GET['UTS'];
  $UAS =$_GET['UAS'];
  $TUGAS =$_GET['TUGAS'];

  //TAMPILAN
  echo 'proses : ' .$proses;
  echo '<br> nama : ' .$nama;
  echo '<br> Mata kuliah : '  .$matkul;
  echo '<br> Nilai UTS : ' .$UTS;
  echo '<br> Nilai UAS : ' .$UAS;
  echo '<br> Nilai tugas kelompok : ' .$TUGAS; */
?>
  </body>
</html>
