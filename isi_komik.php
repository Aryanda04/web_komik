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
if ($key_array + 1 > count($data_chapter) - 1) {
    $next_chapter = NULL;
} else {
    $next_chapter = $data_chapter[$key_array + 1];
}

if ($key_array - 1 < 0) {
    $prev_chapter = NULL;
} else {
    $prev_chapter = $data_chapter[$key_array - 1];
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
        <select id="chapter" class="chapterList" onchange="location = this.value;">
            <option value="">Chapter</option>
            <?php foreach ($data_chapter as $data) { ?>
                <option value="isi_komik.php?id= <?= $data["chapter_id"]; ?>"><?= $data["nama_chapter"]; ?></option>
            <?php } ?>
        </select>
    </div>

    <!-- <div>
        <button class="chapterNext">Next Chapter »</button>
        <button class="chapterPrevious">« Previous Chapter</button>
    </div> -->

    <?php

    //var_dump($data_chapter);
    //var_dump($data["chapter_id"]);

    ?>

    <?php
    $data_next = $key_array;
    if ($key_array + 1 > count($data_chapter) - 1) {
        $data_next = NULL;
    } else {
        $data_next = $data_next + 2;
        echo '<button class="chapterNext"><a href="isi_komik.php?id=' . $data_next . '"> Next Chapter »</a></button>';
    }

    if ($key_array - 1 < 0) {
        $data_prev = NULL;
    } else {
        $data_prev = $key_array;
        echo '<button class="chapterPrevious"><a href="isi_komik.php?id=' . $data_prev . '">« Previous Chapter</a></button>';
    }
    ?>

    <br><br>
    <div id="chapterGambar" class="chapterGambar">
        <?php foreach ($data_gambar as $data) { ?>
            <img src="img/<?= $data["nama_komik"] ?>/<?= $data["nama_chapter"] ?>/<?= $data["file_gambar"] ?>" alt="" class="center">
        <?php } ?>
    </div>

    <script src="isi_komik.js"></script>
</body>

</html>