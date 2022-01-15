<?php
    require 'db/functions.php';
    
    $id = $_GET['id'];

    $select_gambar = mysqli_query($conn, "SELECT file_gambar, chapter.nama_chapter, komik.nama_komik FROM `gambar` JOIN `chapter` ON gambar.chapter_id = chapter.chapter_id JOIN `komik` ON komik.komik_id = chapter.komik_id WHERE chapter.chapter_id = $id");
    $data_gambar = [];
    while($row = mysqli_fetch_assoc($select_gambar)) {
        $data_gambar[] = $row;
    }
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
        <li><a href="genre.html">Genre</a></li>
        <li><a href="release.html">Latest Release</a></li>
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