<?php
require 'db/db.php';
require 'php/functions.php';

$select_komik = selectALL("SELECT komik.*, COUNT(komik.komik_id) AS total_chapter FROM komik JOIN chapter ON komik.komik_id = chapter.komik_id GROUP BY komik.komik_id");
$select_komik_sort_view = selectALL("SELECT komik.*, COUNT(komik.komik_id) AS total_chapter FROM komik JOIN chapter ON komik.komik_id = chapter.komik_id GROUP BY komik.komik_id ORDER BY total_views DESC");

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

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home Page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="home.css">
</head>

<body>
  <?php include 'template/header.php' ?>

  <div class="badan">
    <h1 class="grid-container">Most View</h1>
    <div class="flex-container" id="most-view">
      <?php showKomik($select_komik_sort_view, 4) ?>
    </div>
  </div>
  <div class="badan">
    <h1 class="grid-container">Komik List</h1>
    <div class="flex-container" id="daftar-komik">
      <?php showKomik($select_komik, -1) ?>
    </div>
  </div>



  <script src="home.js"></script>
</body>

</html>