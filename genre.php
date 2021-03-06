<?php
require 'db/db.php';
require 'php/functions.php';

/* kumpulan data */
// data list komik semua
$data_komik = selectALL("SELECT komik.*,MAX(chapter.waktu_update) AS waktu_update,total_views,COUNT(komik.komik_id) AS total_chapter FROM `komik` JOIN `chapter` ON komik.komik_id = chapter.komik_id GROUP BY komik.komik_id");
foreach ($data_komik as $key => $komik) {
  $id = $komik["komik_id"];
  $list_genre_komik = array_column(selectALL("SELECT nama_genre FROM `genre` JOIN `list_genre` ON list_genre.genre_id = genre.genre_id WHERE list_genre.komik_id = $id"), "nama_genre");
  $data_komik[$key]["list_genre"] = $list_genre_komik;
}

// data list genre
$data_genre = selectALL("SELECT * FROM `genre`");
/* kumpulan data */

function showKomik($list_komik, $loop)
{
  $i = 1;
  foreach ($list_komik as $komik) {
    if (isset($_GET["pilihan_genre"])) {
      if(gettype($_GET["pilihan_genre"]) == "array") {
        if (cekGenre($komik)) {
          komikCard($komik);
        } else {
          continue;
        }
      } else {
        if (in_array($_GET["pilihan_genre"], $komik["list_genre"])) {
          komikCard($komik);
        } else {
          continue;
        }
      }
    } else {
      komikCard($komik);
    }
    $i++;
    // var_dump($komik['komik_id']);
    if ($i > $loop && $loop != -1) {
      break;
    }
  }
}

function cekGenre($komik)
{
  foreach ($_GET["pilihan_genre"] as $pilihan_genre) {
    if (in_array($pilihan_genre, $komik["list_genre"])) {
      return TRUE;
    }
  }
  return FALSE;
}
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

      <form method="GET">
        <div class="grid-container2">
          <?php foreach ($data_genre as $genre) { ?>

            <label class="grid-item"><input type="checkbox" name="pilihan_genre[]" rel="<?= $genre["nama_genre"] ?>" value="<?= $genre["nama_genre"] ?>"><?= ucwords($genre["nama_genre"]) ?></label>

          <?php } ?>

        </div>
        <div class="grid-container3">
          <input class="detail-button" type="submit" value="Pilih Genre">
        </div>
    </div>
  </div>
  </div>

  <div class="badan">
    <div class="flex-container" id="daftar-komik">
      <?php showKomik($data_komik, -1) ?>
    </div>
  </div>
  <script src="genre.js"></script>

</body>

</html>