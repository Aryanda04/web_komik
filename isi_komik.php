<?php
    require 'db/functions.php';
    
    $id = $_GET['id'];

    // data kumpulan gambar dari chapter yang halaman saat itu dibuka
    $data_gambar = selectALL("SELECT file_gambar, chapter.nama_chapter, komik.nama_komik, komik.komik_id FROM `gambar` JOIN `chapter` ON gambar.chapter_id = chapter.chapter_id JOIN `komik` ON komik.komik_id = chapter.komik_id WHERE chapter.chapter_id = $id");

    // data list chapter
    $id_komik = $data_gambar[0]["komik_id"];
    $data_chapter = selectALL("SELECT chapter_id, nama_chapter FROM `chapter` JOIN `komik` ON chapter.komik_id = komik.komik_id WHERE chapter.komik_id = $id_komik");

    // var_dump($data_chapter);
    $key_array = array_search($id, array_column($data_chapter, 'chapter_id'));
    // var_dump($key_array);
    if($key_array+1 > count($data_chapter)-1) {
        $next_chapter = NULL;
    } else {
        $next_chapter = $data_chapter[$key_array+1];
    }

    if($key_array-1 < 0) {
        $prev_chapter = NULL;
    } else {
        $prev_chapter = $data_chapter[$key_array-1];
    }
?>

<!doctype html>
<html lang="en">

<head>

    <title>Isi Komik</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php include 'template/header.php' ?>

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