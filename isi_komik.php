<?php
require 'db/functions.php';

$id = $_GET['id'];

// data kumpulan gambar dari chapter yang halaman saat itu dibuka
$data_gambar = selectALL("SELECT file_gambar, chapter.nama_chapter, komik.nama_komik, komik.komik_id FROM `gambar` JOIN `chapter` ON gambar.chapter_id = chapter.chapter_id JOIN `komik` ON komik.komik_id = chapter.komik_id WHERE chapter.chapter_id = $id");

// data list chapter
$id_komik = $data_gambar[0]["komik_id"];
$data_chapter = selectALL("SELECT chapter_id, nama_chapter, total_views FROM `chapter` JOIN `komik` ON chapter.komik_id = komik.komik_id WHERE chapter.komik_id = $id_komik ORDER BY chapter_id DESC");
// var_dump($data_chapter[0]["total_views"]);
updateTotalView($id_komik);

$key_array = array_search($id, array_column($data_chapter, 'chapter_id'));
if ($key_array + 1 > count($data_chapter) - 1) {
    $prev_chapter = NULL;
} else {
    $prev_chapter = $data_chapter[$key_array + 1];
}

if ($key_array - 1 < 0) {
    $next_chapter = NULL;
} else {
    $next_chapter = $data_chapter[$key_array - 1];
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

    <h1 id="judulBacaan" class="judulBacaan"><?= $data_gambar[0]["nama_komik"] ?> <?= $data_gambar[0]["nama_chapter"] ?></h1>

    <div>
        <select id="chapter" class="chapterList" onchange="location = this.value;">
            <option value="">Chapter</option>
            <?php foreach ($data_chapter as $data) { ?>
                <option value="isi_komik.php?id=<?= $data["chapter_id"]; ?>"><?= $data["nama_chapter"]; ?></option>
            <?php } ?>
        </select>
    </div>

    <?php
    if ($next_chapter != NULL) {
        echo '<a href="isi_komik.php?id=' . $next_chapter["chapter_id"] . '" class="buttonNext"> Next Chapter »</a>';
    }

    if ($prev_chapter != NULL) {
        echo '<a href="isi_komik.php?id=' . $prev_chapter["chapter_id"] . '" class="buttonNext"> « Previous Chapter</a>';
    }
    ?>

    <br><br>
    <div id="chapterGambar" class="chapterGambar">
        <?php foreach ($data_gambar as $data) { ?>
            <img src="<?= $data["file_gambar"] ?>" alt="" class="center">
        <?php } ?>
    </div>

    <script src="isi_komik.js"></script>
</body>

</html>