<?php

function komikCard($komik)
{
  $max_char = 100;
  if (strlen($komik["deskripsi"]) > $max_char) {
    $deskripsi = substr($komik["deskripsi"], 0, $max_char) . "...";
  } else {
    $deskripsi = $komik["deskripsi"];
  }

?>

  <div class="list-produk">
    <div class="kategori">
      <div><?= $komik["kategori"] ?></div>
      <div><?= $komik["total_views"] ?> Views</div>
    </div>
    <div class="cover">
      <a href="detail.php?id= <?= $komik["komik_id"] ?>"><img src="img/<?= $komik["nama_komik"] ?>/<?= $komik["cover_komik"] ?>"></a>

    </div>
    <a class="judul" href="detail.php?id= <?= $komik["komik_id"] ?>">
      <div><?= $komik["nama_komik"] ?></div>
    </a>
    <p class="deskripsi"><?= $deskripsi ?></p>
    <div class="footer">
      <div class="detail-chapter"><?= $komik["total_chapter"] ?> Chapter</div>
    </div>
  </div>
<?php
}
?>