<?php
require 'db/functions.php';

$id = $_GET['id'];

/// data detail komik
$data_detail = selectFirst("SELECT * FROM `komik` WHERE komik_id = $id");

/// data list genre di detail komik
$data_genre_list = selectALL("SELECT * FROM `list_genre` JOIN `genre` ON list_genre.genre_id = genre.genre_id WHERE list_genre.komik_id = $id");

/// data list chapter
$data_chapter = selectALL("SELECT * from `chapter` JOIN `komik` ON chapter.komik_id = komik.komik_id WHERE chapter.komik_id = $id ORDER BY chapter_id DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Detail Komik</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .flex-container {
            display: flex;
            margin-left: 7%;
            margin-right: 7%;
        }

        .img-box {
            width: 200px;
            margin: 10px;
            text-align: center;
            line-height: 75px;
            font-size: 30px;
        }

        .content {
            width: 800px;
            margin: 10px;
        }

        .rating {
            background-color: rgb(144, 157, 160);
            width: 250px;
            margin: 10px;
            text-align: center;
            line-height: 75px;
            font-size: 30px;
        }

        .title {
            font-size: 30px;
        }

        .checked {
            color: orange;
        }

        .chapter {
            background-color: rgb(144, 157, 160);
            width: 100%;
            height: 100%;
            margin: 10px;
        }

        .teks {
            font-size: 15px;
        }

        .scroll {
            width: 100%;
            height: 100vh;
            overflow: auto;
        }

        .info-darkmode {
            background-color: #3a98f0;
        }
    </style>
</head>

<body>
    <?php include 'template/header.php' ?>

    <div style="width: 1100px;height:450px;overflow:hidden;margin: auto; opacity: 0.7;background-size: contain;">
        <img src="img/<?= $data_detail["nama_komik"] . "/" . $data_detail["cover_komik"] ?>" width="1100" height="" />
    </div>
    <br>
    <div class="flex-container">
        <div>
            <img src="img/<?= $data_detail["nama_komik"] . "/" . $data_detail["cover_komik"] ?>" alt="" width="200" style="border: black 5pt solid;">
        </div>
        <div class="info">
            <div class="content">
                <p class="title"><strong><?= $data_detail["nama_komik"] ?></strong></p>
                <p>
                    Genre :
                    <?php foreach ($data_genre_list as $data) { ?>
                        <button class="btn btn-secondary btn-sm me-3"><?= ucwords($data["nama_genre"]) ?></button>
                    <?php } ?>
                </p>
                <table border="0" cellpadding="0">
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
            <p style="font-size: 25px;"><strong>Sinopsis</strong></p>
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
                            <td>2 weeks ago</td>
                        </tr>
                    <?php } ?>
                </table>
            </div>

        </div>
    </div>

</body>
<script src="detail.js"></script>

</html>