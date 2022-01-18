<?php
require 'db/functions.php';

$data_komik = selectALL("SELECT komik.*,MAX(chapter.waktu_update) AS waktu_update,total_views,COUNT(komik.komik_id) AS total_chapter FROM `komik` JOIN `chapter` ON komik.komik_id = chapter.komik_id GROUP BY komik.komik_id");
?>

<!doctype html>
<html lang="en">

<head>

    <title>Latest Release</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->



    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    .column {
        float: left;
        width: 80%;
        border-radius: 20px;
        padding: 5px;
        height: auto;
        border: 2px solid #000000;
    }

    .column-2 {
        float: right;
        width: 18%;
        border-radius: 20px;
        padding: 5px;
        height: 800px;
        border: 2px solid #000000;

    }

    ul {
        list-style-type: none;
        margin: 0;
        overflow: hidden;

    }
    </style>
</head>

<body>
    <?php include 'template/header.php' ?>
    <div style="margin: left 10px; border-bottom:solid black 5px; padding-bottom: 2px">
        <h1>Latest Release</h1>
    </div>

    <br>

    <div class="column" style="background-color: #394867;">
        <div style="text-align: center; ">
            <select id="Genre " name="Genre"
                style="font-size:medium; margin-left: 80px; margin-right: 80px; padding-left: 45px; padding-right: 45px;">
                <option value="genre0 ">Genre</option>
                <option value="genre1 ">Action</option>
                <option value="genre2 ">Adventure</option>
                <option value="genre3 ">Comedy</option>
                <option value="genre4 ">Fantasi</option>
                <option value="genre5 ">Romance</option>
                <option value="genre6 ">Horror</option>
            </select>
            <select id="Type" name="Type"
                style="font-size:medium; margin-left: 80px; margin-right: 80px;padding-left: 45px; padding-right: 45px;">
                <option value="type0 ">Type</option>
                <option value="type1 ">Mahwa</option>
                <option value="type2 ">Manga</option>
            </select>
            <select id="Sort By" name="Sort By"
                style="font-size:medium; margin-left: 80px; margin-right: 80px;padding-left: 45px; padding-right: 45px;">
                <option value="sortBy0 ">Sort By</option>
                <option value="sortBy1 ">Update</option>
                <option value="sortBy2 ">A-Z</option>
                <option value="sortBy3 ">Z-A</option>
                <option value="sortBy4 ">Popular</option>
            </select>
        </div>
    </div>

    <br><br>

    <div class="column-2" style="background-color: #9BA4B4;">
        <h1>Untuk Iklan Hubungi U&din</h1>
    </div>

    <div class="column" style="background-color: #9BA4B4;">
        <div class="row" id="daftar-komik"></div>
    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="Lrelase.js"></script>
    <script src="isi_komik.js"></script>
</body>

</html>