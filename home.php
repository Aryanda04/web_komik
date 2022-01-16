<?php
    require 'db/functions.php';

    $select_komik = "SELECT * FROM komik";
    $select_komik_sort_view = "SELECT * FROM komik ORDER BY total_views DESC";

    function showKomik($queryKomik, $loop)
    {
      $i = 1;
      // data list komik berdasarkan query dari variabel queryKomik
      $list_komik = selectALL($queryKomik);
      foreach($list_komik as $komik) {
        $max_char = 100;
        if (strlen($komik["deskripsi"]) > $max_char) {
          $deskripsi = substr($komik["deskripsi"], 0, $max_char) . "...";
        } else {
          $deskripsi = $komik["deskripsi"];
        }
        echo "<div class=\"list-produk\">";
        echo "  <div class=\"kategori\">";
        echo "    <div>" . $komik["kategori"] . "</div>";
        echo "    <div>" . $komik["total_views"] . " Total Pembaca</div>";
        echo "  </div>";
        echo "  <img src=\"img/" . $komik["nama_komik"] . "/" . $komik["cover_komik"] . "\"  style=\"object-fit:contain; height:233px !important; align:center\">";
        echo "    <div class=\"judul\">" . $komik["nama_komik"] . "</div>";
        echo "    <p class=\"deskripsi\">" . $deskripsi . "</p>";
        echo "  <div class=\"footer\">";
        echo "    <a href=\"detail.php?id=" . $komik["komik_id"] . "\" class=\"detail-button\"> Details </a>";
        echo "    <div class=\"detail-chapter\">" . $komik["total_chapter"] . " Chapter</div>";
        echo "  </div>";
        echo "</div>";
        $i++;
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

        <h1 class="grid-container">Komik List</h1>
        <div class="flex-container" id="daftar-komik">
            <?php showKomik($select_komik, -1) ?>
        </div>
    </div>


    <script src="home.js"></script>
</body>

</html>