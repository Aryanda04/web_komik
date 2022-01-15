<?php
    require 'db/functions.php';
    
    $id = $_GET['id'];

    // data kumpulan gambar dari chapter yang halaman saat itu dibuka
    $data_gambar = selectALL("SELECT file_gambar, chapter.nama_chapter, komik.nama_komik, komik.komik_id FROM `gambar` JOIN `chapter` ON gambar.chapter_id = chapter.chapter_id JOIN `komik` ON komik.komik_id = chapter.komik_id WHERE chapter.chapter_id = $id");

    // data list chapter
    $id_komik = $data_gambar[0]["komik_id"];
    $data_chapter = selectALL("SELECT * from `chapter` JOIN `komik` ON chapter.komik_id = komik.komik_id WHERE chapter.komik_id = $id_komik")
?>

<!doctype html>
<html lang="en">

<head>

    <title>Isi Komik</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <ul class="tulisanNav">
        <li><img src="img/logo.webp" width="200px" alt=""></li>
        <li><a href="home.php">Home</a></li>
        <li><a href="genre.php">Genre</a></li>
        <li><a href="release.php">Latest Release</a></li>
        <label class="switch" style="margin-top: 12px; float: right; margin-right: 10px;">
            <input type="checkbox" onclick="darkMode()">
            <span class="slider round"></span>
          </label>
        <input type="text" placeholder="Search.." class="Searchbox">
    </ul>
    <br><br><br>

    <div>
        <select id="chapter" class="chapterList" onchange="chapterDropDown()">
          <option value="">Chapter</option>
      </select>
    </div>

    <div>
        <button class="chapterNext" role="button">Next Chapter »</button>
        <button class="chapterPrevious" role="button">« Previous Chapter</button>
    </div><br><br>
    <div id="chapterGambar">
        <?php foreach($data_gambar as $data) { ?>
            <img src="img/<?= $data["nama_komik"] ?>/<?= $data["nama_chapter"] ?>/<?= $data["file_gambar"] ?>" alt="" class = "center">
        <?php } ?>
    </div>

    <script src="isi_komik.js"></script>
</body>

</html>