<?php
require 'db/db.php';

// data list komik semua
$data_komik = selectALL("SELECT * FROM `komik`");

// data list komik berdasarkan genri yang dipilih
$data_komik_by_genre = selectALL("SELECT * FROM `komik`
    JOIN 
        `list_genre` ON komik.komik_id = list_genre.komik_id
    JOIN
        `genre` ON list_genre.genre_id = genre.genre_id
    WHERE
        genre.nama_genre = 'action'");

// data list genre
$data_genre = selectALL("SELECT * FROM `genre`");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    /> -->
  <title>Genre Komik</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="stylesheet" type="text/css" href="genre.css" />
</head>

<body>
  <?php include 'template/header.php' ?>

  <div class="list">
    <div class="filter">
      <h1>Genres</h1>
      <div class="models">

        <div class="checkbox">
          <label><input type="checkbox" rel="action" onchange="change();" />Action</label>
        </div>

        <div class="checkbox">
          <label><input type="checkbox" rel="adven" onchange="change();" />Adventure</label>
        </div>

        <div class="checkbox">
          <label><input type="checkbox" rel="comedy" onchange="change();" />Comedy</label>
        </div>

        <div class="checkbox">
          <label><input type="checkbox" rel="fantasy" onchange="change();" />Fantasy</label>
        </div>

        <div class="checkbox">
          <label><input type="checkbox" rel="romance" onchange="change();" />Romance</label>
        </div>

        <div class="checkbox">
          <label><input type="checkbox" rel="Horror" onchange="change();" />Horror</label>
        </div>

        <div class="row" id="daftar-komik" style="border-top: solid black 5px; padding-top: 10px">
        </div>
      </div>
    </div>

    <div class="result">
      <div class="list">
        <div class="kat">
          <div class="action">
            <h1 class="title">Magic Emperor</h1>
            <div class="cover">
              <img src="img/Magic Emperor/komik1.webp" />
            </div>
            <p class="desc">Deskripsi</p>
            <a href="#" class="detail-button">Details</a>
          </div>
        </div>
      </div>

      <div class="list">
        <div class="kat">
          <div class="action">
            <h1 class="title">Talent-Swallowing Magician</h1>
            <div class="cover">
              <img src="img/Talent-Swallowing Magician/komik2.webp" />
            </div>
            <p class="desc">Deskripsi</p>
            <a href="#" class="detail-button">Details</a>
          </div>
        </div>
      </div>

      <div class="list">
        <div class="kat">
          <div class="romance">
            <h1 class="title">Regina Rena : To the Unforgiveable</h1>
            <div class="cover">
              <img src="img/Regina Rena - To the Unforgiveable/komik3.jpeg" />
            </div>
            <p class="desc">Deskripsi</p>
            <a href="#" class="detail-button">Details</a>
          </div>
        </div>
      </div>

      <div class="list">
        <div class="kat">
          <div class="adven">
            <h1 class="title">Max Level Returner</h1>
            <div class="cover">
              <img src="img/Max level returner/komik4.jpg" class="size" />
            </div>
            <p class="desc">Deskripsi</p>
            <a href="#" class="detail-button">Details</a>
          </div>
        </div>
      </div>

      <div class="list">
        <div class="kat">
          <div class="fantasy">
            <h1 class="title">Magic Emperor</h1>
            <div class="cover">
              <img src="img/Magic Emperor/komik1.webp" />
            </div>
            <p class="desc">Deskripsi</p>
            <a href="#" class="detail-button">Details</a>
          </div>
        </div>
      </div>

      <div class="list">
        <div class="kat">
          <div class="fantasy">
            <h1 class="title">Talent-Swallowing Magician</h1>
            <div class="cover">
              <img src="img/Talent-Swallowing Magician/komik2.webp" />
            </div>
            <p class="desc">Deskripsi</p>
            <a href="#" class="detail-button">Details</a>
          </div>
        </div>
      </div>

      <div class="list">
        <div class="kat">
          <div class="fantasy">
            <h1 class="title">Regina Rena : To the Unforgiveable</h1>
            <div class="cover">
              <img src="img/Regina Rena - To the Unforgiveable/komik3.jpeg" />
            </div>
            <p class="desc">Deskripsi</p>
            <a href="#" class="detail-button">Details</a>
          </div>
        </div>
      </div>

      <div class="list">
        <div class="kat">
          <div class="fantasy">
            <h1 class="title">Max Level Returner</h1>
            <div class="cover">
              <img src="img/Max Level Returner/komik4.jpg" class="size" />
            </div>
            <p class="desc">Deskripsi</p>
            <a href="#" class="detail-button">Details</a>
          </div>
        </div>
      </div>

    </div>
    <br>
    <br>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  <script src="genre.js"></script>
  <script src="isi_komik.js"></script>
</body>

</html>