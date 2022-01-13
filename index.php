<?php
require 'db/functions.php';

$select_komik = mysqli_query($conn, "SELECT * FROM komik");
$select_komik_sort_view = mysqli_query($conn, "SELECT * FROM komik ORDER BY total_views");

$list_komik = [];
$row = mysqli_fetch_assoc($select_komik_sort_view);
// while($row = mysqli_fetch_assoc($select_komik_sort_view)) {
//   $list_komik[] = $row; 
// }

// var_dump($list_komik);
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->


  <title>Home Page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="home.css">
</head>

<body>

  <ul class="tulisanNav">
    <li><img src="logo.webp" width="200px" alt=""></li>
    <li><a href="index.php">Home</a></li>
    <li><a href="genre.html">Genre</a></li>
    <li><a href="release.html">Latest Release</a></li>
    <label class="switch" style="margin-top: 12px; float: right; margin-right: 10px;">
      <input type="checkbox" onclick="darkMode()">
      <span class="slider round"></span>
    </label>
    <input type="text" placeholder="Search.." class="Searchbox">
  </ul>

  <div class="badan">
    <div class="grid-container" style="border-bottom:solid black 5px">
      <h1>Most View</h1>
    </div>
    <div class="flex-container">
      <?php
      $i = 1;
      while ($row = mysqli_fetch_assoc($select_komik_sort_view)) {
        $max_char = 60;
        if (strlen($row["deskripsi"]) > $max_char) {
          $deskripsi = substr($row["deskripsi"], 0, $max_char) . "...";
        } else {
          $deskripsi = $row["deskripsi"];
        }
      ?>
        <div class="list-produk">
          <div class=""><?= $row["kategori"] ?></div>
          <img src="img/komik1.webp" style="object-fit:contain; height:233px !important;">
          <div class="">
            <h5 class=""><?= $row["nama_komik"] ?></h5>
            <p class=""><?= $deskripsi ?></p>
          </div>
          <div class="" style="background-color:white; border-top:none">
            <small class="" style="float:right"><?= $row["total_chapter"] ?> Chapter</small>
            <a href="detail.html" class="btn btn-primary">Details</a>
          </div>
        </div>
      <?php
        $i++;
        if ($i > 5) {
          break;
        }
      }
      ?>
    </div>

    <h1>Komik List</h1>
    <div class="flex-container" id="daftar-komik" style="border-top:solid black 5px; padding-top: 10px;">

      <?php
      while ($row = mysqli_fetch_assoc($select_komik)) {
        $max_char = 60;
        if (strlen($row["deskripsi"]) > $max_char) {
          $deskripsi = substr($row["deskripsi"], 0, $max_char) . "...";
        } else {
          $deskripsi = $row["deskripsi"];
        }
      ?>
        <div class="list-produk">
          <div class=""><?= $row["kategori"] ?></div>
          <img src="img/${data.gambar}" style="object-fit:contain; height:233px !important;">
          <div class="">
            <h5 class=""><?= $row["nama_komik"] ?></h5>
            <p class=""><?= $deskripsi ?></p>
          </div>
          <div class="" style="background-color:white; border-top:none">
            <small class="" style="float:right"><?= $row["total_chapter"] ?> Chapter</small>
            <a href="detail.html" class="btn btn-primary">Details</a>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>

  <!-- <script src="home.js"></script>
  <script src="isi_komik.js"></script> -->
</body>

</html>