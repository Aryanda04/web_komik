<?php

function komikCard($komik) {
  $max_char = 100;
    if (strlen($komik["deskripsi"]) > $max_char) {
      $deskripsi = substr($komik["deskripsi"], 0, $max_char) . "...";
    } else {
      $deskripsi = $komik["deskripsi"];
    }

    echo "<div class=\"list-produk\">";
    echo "  <div class=\"kategori\">";
    echo "    <div>" . $komik["kategori"] . "</div>";
    echo "    <div>" . $komik["total_views"] . " Views</div>";
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
}
?>