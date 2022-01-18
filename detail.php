<?php
require 'db/functions.php';

$id = $_GET['id'];

/// data detail komik
$data_detail = selectFirst("SELECT komik.*,MAX(chapter.waktu_update) AS waktu_update,total_views,COUNT(komik.komik_id) AS total_chapter FROM `komik` JOIN `chapter` ON komik.komik_id = chapter.komik_id WHERE komik.komik_id = $id GROUP BY komik.komik_id");

/// data list genre di detail komik
$data_genre_list = selectALL("SELECT * FROM `list_genre` JOIN `genre` ON list_genre.genre_id = genre.genre_id WHERE list_genre.komik_id = $id");

/// data list chapter
$data_chapter = selectALL("SELECT chapter.* from `chapter` JOIN `komik` ON chapter.komik_id = komik.komik_id WHERE chapter.komik_id = $id ORDER BY chapter_id DESC");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Detail Komik</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="detail.css">
</head>

<body>
    <?php include 'template/header.php' ?>
    <div class="flex-container">
        <div class="cover">
            <img src="img/<?= $data_detail["nama_komik"] . "/" . $data_detail["cover_komik"] ?>" alt="" class="image" width="100%">
        </div>
    </div>
    <br>
    <div class="flex-container" style="justify-content: space-between;">
        <div>
            <img src="img/<?= $data_detail["nama_komik"] . "/" . $data_detail["cover_komik"] ?>" alt="" width="200" style="border: black 5pt solid; margin-left: 20px ;margin-top: -70px;">
        </div>
        <div class="info">
            <div class="content">
                <p class="title"><strong><?= $data_detail["nama_komik"] ?></strong></p>
                <p>
                    Genre :
                    <?php foreach ($data_genre_list as $data) { ?>
                        <a href="genre.php?=" class="genre"><?= ucwords($data["nama_genre"]) ?></button>
                        <?php } ?></a>
                </p>
                <br><br>
                <table border="0" cellpadding="5">
                    <tr>
                        <td style="padding-right: 250px;"><strong>Released : </strong><?= $data_detail["waktu_rilis"] ?></td>
                        <td><strong>Type : </strong><?= $data_detail["kategori"] ?></td>
                    </tr>
                    <tr>
                        <td style="padding-right: 250px;"><strong>Total Chapter : </strong><?= $data_detail["total_chapter"] ?></td>
                        <td><strong>Updated on : </strong><?= date_format(date_create($data_detail["waktu_update"]), "Y F d") ?></td>
                    </tr>
                </table>
            </div>

        </div>
        <div class="rating">
            <p>Jumlah Pembaca</p>
            <p><?= $data_detail["total_views"] ?></p>
        </div>
    </div>

    <div class="flex-container">
        <div class="chapter">
            <p style="font-size: 25px; padding: 0px 20px 0px;"><strong>Sinopsis</strong></p>
            <hr>
            <p class="teks"><?= $data_detail["deskripsi"] ?></p>
            <br><br>
            <p style="color: teal;" class="teks">CHAPTER <?= strtoupper($data_detail["nama_komik"]) ?></p>
            <hr>
            <div class="scroll">
                <table cellpadding="5" id="table">
                    <?php foreach ($data_chapter as $chapter) { ?>
                        <tr>
                            <td style="padding-right: 850px;">
                                <a href="isi_komik.php?id=<?= $chapter["chapter_id"] ?>"><?= $chapter["nama_chapter"] ?></a>
                            </td>
                            <td><?= $chapter["waktu_update"] ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>

        </div>
    </div>

</body>
<script src="detail.js"></script>
<!--  -->

</html>