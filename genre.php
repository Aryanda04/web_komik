<?php
require 'db/db.php';
require 'php/functions.php';
// data list komik semua
$select_komik = selectALL("SELECT komik.*, COUNT(komik.komik_id) AS total_chapter FROM komik JOIN chapter ON komik.komik_id = chapter.komik_id GROUP BY komik.komik_id");
function showKomik($list_komik, $loop)
{
  $i = 1;
  foreach ($list_komik as $komik) {
    komikCard($komik);
    $i++;
    // var_dump($komik['komik_id']);
    if ($i > $loop && $loop != -1) {
      break;
    }
  }
}
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

  <title>Genre Komik</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="stylesheet" type="text/css" href="genre.css" />
</head>

<body>
  <?php include 'template/header.php' ?>

  <div class="badan">
    <div class="filter">
      <h1 class="grid-container">Genres</h1>
      <div class="grid-container2">

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
      </div>
    </div>
  </div>

  <div class="badan">
    <div class="flex-container" id="daftar-komik">
      <?php showKomik($select_komik, -1) ?>
    </div>
  </div>
  <script src="genre.js"></script>
  <script src="isi_komik.js"></script>
</body>

</html>