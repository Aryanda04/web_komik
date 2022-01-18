<?php
    require 'db/functions.php';

    $key_pencarian = $_GET["pencarian"];

    // die(var_dump($key_pencarian));

    $select_komik = "SELECT komik.*, COUNT(komik.komik_id) AS total_chapter FROM komik JOIN chapter ON komik.komik_id = chapter.komik_id WHERE komik.nama_komik LIKE '%$key_pencarian%' GROUP BY komik.komik_id";

    // die(var_dump($select_komik));

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

        echo "<div class=\"komik-card\">";
        echo "  <div class=\"kategori\">";
        echo "    <div>" . $komik["kategori"] . "</div>";
        echo "    <div>" . $komik["total_views"] . " Viewer</div>";
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Komik</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="search.css">
</head>
<body>
    <?php include 'template/header.php' ?>
    
    <div class="badan">
        <h1 class="grid-container">Hasil Pencarian :</h1>
        <div class="flex-container" id="most-view">
            <?php showKomik($select_komik, -1); ?>
        </div>
    </div>

    <script src="search.js"></script>
</body>
</html>