<?php
require 'db/functions.php';

$data_komik = "SELECT komik.*,MAX(chapter.waktu_update) AS waktu_update,total_views,COUNT(komik.komik_id) AS total_chapter FROM `komik` JOIN `chapter` ON komik.komik_id = chapter.komik_id GROUP BY komik.komik_id ORDER BY waktu_update DESC";


function showKomik($queryKomik, $loop)
{
  $i = 1;
  // data list komik berdasarkan query dari variabel queryKomik
  $list_komik = selectALL($queryKomik);

  foreach ($list_komik as $komik) {
    $max_char = 100;
    if (strlen($komik["deskripsi"]) > $max_char) {
      $deskripsi = substr($komik["deskripsi"], 0, $max_char) . "...";
    } else {
      $deskripsi = $komik["deskripsi"];
    }

    echo "<div class=\"list-produk\">";
    echo "  <div class=\"kategori\">";
    echo "    <div>" . $komik["kategori"] . "</div>";
    echo "    <div>" . $komik["waktu_update"] . "</div>";
    echo "  </div>";
    echo "  <div class=\"cover\">";
    echo "  <img src=\"img/" . $komik["nama_komik"] . "/" . $komik["cover_komik"] . "\">";
    echo "  </div>";
    echo "    <div class=\"judul\">" . $komik["nama_komik"] . "</div>";
    echo "    <p class=\"deskripsi\">" . $deskripsi . "</p>";
    echo "  <div class=\"footer\">";
    echo "    <a href=\"detail.php?id=" . $komik["komik_id"] . "\" class=\"detail-button\"> Details </a>";
    echo "    <div class=\"detail-chapter\">" . $komik["total_chapter"] . " Chapter</div>";
    echo "  </div>";
    echo "</div>";
    $i++;
    // var_dump($komik['komik_id']);
    if ($i > $loop && $loop != -1) {
      break;
    }
  }
}?>

<!doctype html>
<html lang="en">

<head>

    <title>Latest Release</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="release.css">

</head>

<body>
    <?php include 'template/header.php' ?>
    <div class="badan">
        <h1 class="grid-container">Latest Release</h1>


        <br>

        <div class="column" style="background-color: #394867;">
            <div style="text-align: center; ">
                <select id="Genre " name="Genre"
                    style="font-size:large; margin-left: 80px; margin-right: 80px; padding-left: 45px; padding-right: 45px;">
                    <option value="genre0 ">Genre</option>
                    <option value="genre1 ">Action</option>
                    <option value="genre2 ">Adventure</option>
                    <option value="genre3 ">Comedy</option>
                    <option value="genre4 ">Fantasi</option>
                    <option value="genre5 ">Romance</option>
                    <option value="genre6 ">Horror</option>
                </select>
                <select id="Type" name="Type"
                    style="font-size:large; margin-left: 80px; margin-right: 80px;padding-left: 45px; padding-right: 45px;">
                    <option value="type0 ">Type</option>
                    <option value="type1 ">Mahwa</option>
                    <option value="type1 ">Mahua</option>
                    <option value="type2 ">Manga</option>
                </select>


            </div>
        </div>

        <br><br><br>

        <div class="column" style="background-color: #9BA4B4;">
            <div class="flex-container" id="most-view">
                <?php showKomik($data_komik, -1) ?>
            </div>
        </div>
    </div>




    <script src="release.js"></script>

</body>

</html>