<?php

$soal = array(
  "Apa singkatan dari HTML...",
  "Apa singkatan dari PHP...",
  'PHP dikembangkan oleh Rasmus Lerdorf pada tahun?',
  "Dalam membuat Variabel di PHP dimulai dengan Simbol?",
  "Dibawah ini yang merupakan dari Framework PHP adalah..."
);
$pilihanNo1 = array("Hypertext Markup Language", "Hyperlinks and Text Markup Language", "Home Tool Mark Language", "How To Make Lumpia");
$pilihanNo2 = array("Private Home Page", "Personal Hypertext Processor", "Hypertext Preprocessor", "Pembawa Harapan Palsu");
$pilihanNo3 = array("1945", "2002", "1965", "1994");
$pilihanNo4 = array("#", "@", "$", "!");
$pilihanNo5 = array("Django", "Flask", "Springboot", "Laravel");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>Tugas-2 Randy Azhar Alman Faluthi</title>
</head>

<body>
  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5 text-center">
      <h1 class="py-0"><span class="text-primary">Quiz</span><span>dotkom</span></h1>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="result.php">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" autocomplete="off" placeholder="Nama" name="nama" required>
            <label for="floatingInput" class="text-primary">Nama </label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingPassword" autocomplete="off" placeholder="semester" name="semester" required>
            <label for="floatingPassword" class="text-primary">Semester/Kelas</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingPassword" autocomplete="off" placeholder="prodi" name="prodi" required>
            <label for="floatingPassword" class="text-primary">Program Studi/Jurusan</label>
          </div>
          <hr class="my-4">
          <small class="text-muted">Silahkan masukan data diri anda sebelum mengisi Quiz.</small>
      </div>
    </div>

    <div class="container">
      <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
              Soal 1
            </button>
          </h2>
          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body">
              <strong class="text-primary"><?= $soal[0]; ?></strong>
              <?php foreach ($pilihanNo1 as $pil1) : ?>
                <div class="form-check my-2">
                  <input class="form-check-input" type="radio" name="soal1" id="soal1" value="<?= $pil1 ?>" required>
                  <label class="form-check-label text-secondary" for="soal1">
                    <?= $pil1; ?>
                  </label>
                </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
              Soal 2
            </button>
          </h2>
          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
            <div class="accordion-body">
              <strong class="text-primary"><?= $soal[1]; ?></strong>
              <?php foreach ($pilihanNo2 as $pil2) : ?>
                <div class="form-check my-2">
                  <input class="form-check-input" type="radio" name="soal2" id="soal2" value="<?= $pil2 ?>" required>
                  <label class="form-check-label text-secondary" for="soal2">
                    <?= $pil2; ?>
                  </label>
                </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
              Soal 3
            </button>
          </h2>
          <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
            <div class="accordion-body">
              <strong class="text-primary"><?= $soal[2]; ?></strong>
              <?php foreach ($pilihanNo3 as $pil3) : ?>
                <div class="form-check my-2">
                  <input class="form-check-input" type="radio" name="soal3" id="soal3" value="<?= $pil3 ?>" required>
                  <label class="form-check-label text-secondary" for="soal3">
                    <?= $pil3; ?>
                  </label>
                </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingFour">
            <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
              Soal 4
            </button>
          </h2>
          <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
            <div class="accordion-body">
              <strong class="text-primary"><?= $soal[3]; ?></strong>
              <?php foreach ($pilihanNo4 as $pil4) : ?>
                <div class="form-check my-2">
                  <input class="form-check-input" type="radio" name="soal4" id="soal4" value="<?= $pil4 ?>" required>
                  <label class="form-check-label text-secondary" for="soal4">
                    <?= $pil4; ?>
                  </label>
                </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
              Soal 5
            </button>
          </h2>
          <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
            <div class="accordion-body">
              <strong class="text-primary"><?= $soal[4]; ?></strong>
              <?php foreach ($pilihanNo5 as $pil5) : ?>
                <div class="form-check my-2">
                  <input class="form-check-input" type="radio" name="soal5" id="soal5" value="<?= $pil5 ?>" required>
                  <label class="form-check-label text-secondary" for="soal5">
                    <?= $pil5; ?>
                  </label>
                </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
        <hr class="my-4">
        <div class="text-center">
          <button class="w-50 btn btn-lg btn-primary mx-auto justify-center align-item-center" type="submit" name="submit" id="submit">Lihat Hasil</button>
        </div>
      </div>
      </form>
    </div>
  </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>