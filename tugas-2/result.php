<?php

if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $semester = $_POST['semester'];
  $prodi = $_POST['prodi'];
  $soal1 = $_POST['soal1'];
  $soal2 = $_POST['soal2'];
  $soal3 = $_POST['soal3'];
  $soal4 = $_POST['soal4'];
  $soal5 = $_POST['soal5'];
  $questions = array($soal1, $soal2, $soal3, $soal4, $soal5);
  $data_jawaban = array("Hypertext Markup Language", "Hypertext Preprocessor", "1994", "$", "Laravel");
  $nilai = 0;
  $keterangan = "";
  $text = "";
  for ($i = 0; $i < count($questions); $i++) {
    if ($questions[$i] == $data_jawaban[$i]) {
      $nilai += 20;
    }
  }
  switch ($nilai) {
    case 100:
      $keterangan = "Sangat Baik";
      $text = "success";
      break;
    case 80:
      $keterangan = "Baik";
      $text = "success";
      break;
    case 60:
      $keterangan = "Cukup";
      $text = "warning";
      break;
    case 40:
      $keterangan = "Kurang Baik";
      $text = "danger";
      break;
    case 20:
      $keterangan = "Sangat Kurang Baik";
      $text = "danger";
      break;
      default:
      $keterangan = "Silakan Belajar lagi!!";
      $text = "danger";
      break;
  }
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <div class="container col-xl-10 col-xxl-8 px-4 py-5 text-center text-secondary">
    <h2 class="text-primary">Hallo <?= ucwords($nama); ?></h2>
    <p>Ini merupakan hasil setelah anda mengisi Quiz</p>
    <div class="row align-items-center g-lg-5 py-2">
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="result.php">
          <div class="form-floating mb-3">
            <input type="text" class="form-control text-primary fw-bold bg-white" id="floatingInput" autocomplete="off" placeholder="Nama" name="nama" value="<?= ucwords($nama); ?>" disabled>
            <label for="floatingInput">Nama </label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control bg-white text-secondary fw-bold" id="floatingPassword" placeholder="semester" name="semester" value="<?= ucwords($semester); ?>" disabled>
            <label for="floatingPassword">Semester/Kelas</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control bg-white text-secondary fw-bold" id="floatingPassword" placeholder="prodi" name="prodi" value="<?= ucwords($prodi); ?>" disabled>
            <label for="floatingPassword">Program Studi/Jurusan</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control bg-white text-<?=$text;?> fw-bold" id="floatingPassword" placeholder="prodi" name="prodi" value="<?= ucwords($nilai); ?>" disabled>
            <label for="floatingPassword">Nilai</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control bg-<?=$text;?> fw-bold text-white" id="floatingPassword" placeholder="prodi" name="prodi" value="<?= ucwords($keterangan); ?>" disabled>
            <label for="floatingPassword" class="text-white">Keterangan</label>
          </div>
          <hr class="my-4">
          <a class="btn btn-primary" href="index.php">Isi Quiz Lagi</a>
      </div>
    </div>
  </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>