<?php
require 'db/functions.php';

$select_komik = mysqli_query($conn, "SELECT * FROM komik");
$select_komik_sort_view = mysqli_query($conn, "SELECT * FROM komik ORDER BY total_views DESC");

function showKomik($queryKomik, $loop)
{
  $i = 1;
  while ($row = mysqli_fetch_assoc($queryKomik)) {
    $max_char = 100;
    if (strlen($row["deskripsi"]) > $max_char) {
      $deskripsi = substr($row["deskripsi"], 0, $max_char) . "...";
    } else {
      $deskripsi = $row["deskripsi"];
    }
    echo "<div class=\"list-produk\">";
    echo "  <div class=\"kategori\">";
    echo "    <div>" . $row["kategori"] . "</div>";
    echo "    <div>" . $row["total_views"] . " Total Pembaca</div>";
    echo "  </div>";
    echo "  <img src=\"img/" . $row["nama_komik"] . "/" . $row["cover_komik"] . "\"  style=\"object-fit:contain; height:233px !important; align:center\">";
    echo "    <div class=\"judul\">" . $row["nama_komik"] . "</div>";
    echo "    <p class=\"deskripsi\">" . $deskripsi . "</p>";
    echo "  <div class=\"footer\">";
    echo "    <a href=\"detail.php?id=" . $row["komik_id"] . "\" class=\"detail-button\"> Details </a>";
    echo "    <div class=\"detail-chapter\">" . $row["total_chapter"] . " Chapter</div>";
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

    <ul class="tulisanNav">
        <li><img src="img/logo.webp" width="200px" alt=""></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="genre.php">Genre</a></li>
        <li><a href="Release.php">Latest Release</a></li>
        <label class="switch" style="margin-top: 12px; float: right; margin-right: 10px;">
            <input type="checkbox" onclick="darkMode()">
            <span class="slider round"></span>
        </label>
        <input type="text" placeholder="Search.." class="Searchbox">
    </ul>

    <div class="badan">
        <h1 class="grid-container">Most View</h1>
        <div class="flex-container" id="most-view">
            <?php
      showKomik($select_komik_sort_view, 4);
      ?>
        </div>

        <h1 class="grid-container">Komik List</h1>
        <div class="flex-container" id="daftar-komik">
            <?php
      showKomik($select_komik, -1);
      ?>
        </div>
    </div>


    <script src="home.js"></script>
</body>

</html>