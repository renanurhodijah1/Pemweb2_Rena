<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <form class="p-5" action="" method="GET">
      <div class="form-group row">
        <label for="name" class="col-4 col-form-label">Nama Lengkap</label> 
        <div class="col-8">
          <input id="name" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
        <div class="col-8">
          <select id="matkul" name="matkul" class="custom-select">
            <option value="DDP">Dasar - Dasar Pemrograman</option>
            <option value="BDI">Basis Data</option>
            <option value="Web1">Pemrograman Web</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
        <div class="col-8">
          <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
        <div class="col-8">
          <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
        <div class="col-8">
          <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas " type="text" class="form-control">
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" name="submit" value="Simpan" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
    <?php
    if(!empty($_GET['submit'])){
    $proses = $_GET['submit'];
    $nama_siswa = $_GET['nama'];
    $mata_kuliah = $_GET['matkul'];
    $nilai_uts = $_GET['nilai_uts'];
    $nilai_uas = $_GET['nilai_uas'];
    $nilai_tugas= $_GET['nilai_tugas'];

     echo 'Proses : '.$proses;
     echo '<br/>Nama : '.$nama_siswa;
     echo '<br/>Mata Kuliah : '.$mata_kuliah;
     echo '<br/>Nilai UTS : '.$nilai_uts;
     echo '<br/>Nilai UAS : '.$nilai_uas;
     echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
    }
    ?>
  </body>
</html>
