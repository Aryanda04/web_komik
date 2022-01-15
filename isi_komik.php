<?php
    require 'db/functions.php';
    
    $id = $_GET['id'];

    $select_gambar = mysqli_query($conn, "SELECT * FROM `chapter` JOIN `komik` ON chapter.komik_id = komik.komik_id WHERE chapter.chapter_id = $id");
    $data_gambar = $gambar = mysqli_fetch_assoc($select_gambar);
?>

<!doctype html>
<html lang="en">

<head>

    <title>Isi Komik</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <ul class="tulisanNav">
        <li><img src="logo.webp" width="200px" alt=""></li>
        <li><a href="index.php">Home</a></li>
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
        <?php for($i = 1; $i <= $data_gambar["total_gambar"]; $i++) { ?>
            <img src="img/<?= $data_gambar["nama_komik"] ?>/<?= $data_gambar["nama_chapter"] ?>/<?= $i ?>.png" alt="" class = "center">
        <?php } ?>
    </div>

    <script src="isi_komik.js"></script>
</body>

</html>