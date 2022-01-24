<?php
    require 'db/db.php';
    require 'php/functions.php';

    $key_pencarian = $_GET["pencarian"];

    $select_komik = selectALL("SELECT komik.*, COUNT(komik.komik_id) AS total_chapter FROM komik JOIN chapter ON komik.komik_id = chapter.komik_id WHERE komik.nama_komik LIKE '%$key_pencarian%' GROUP BY komik.komik_id");
    // var_dump(count($select_komik));

    function showKomik($list_komik, $loop)
    {
        $i = 1;
        if(count($list_komik) > 0) {
            foreach ($list_komik as $komik) {
                komikCard($komik);
                $i++;
                // var_dump($komik['komik_id']);
                if ($i > $loop && $loop != -1) {
                    break; 
                }
            }
        } else {
            echo "<h1>Komik Tidak Ditemukan</h1>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Komik</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="search.css">
</head>
<body>
    <?php include 'template/header.php' ?>
    
    <div class="badan">
        <h1 class="grid-container">Hasil Pencarian (<?= $key_pencarian ?>):</h1>
        <div class="flex-container" id="most-view">
            <?php showKomik($select_komik, -1); ?>
        </div>
    </div>

    <script src="search.js"></script>
</body>
</html>