<?php
    require 'db/functions.php';

    $id = $_GET['id'];
    
    $select_komik = mysqli_query($conn, "SELECT * FROM `komik` WHERE komik_id = $id");
    $data_detail = mysqli_fetch_assoc($select_komik);

    $select_list_genre = mysqli_query($conn, "SELECT * FROM `list_genre` JOIN `genre` ON list_genre.genre_id = genre.genre_id WHERE list_genre.komik_id = $id");
    $data_genre_list = [];
    while($row_list = mysqli_fetch_assoc($select_list_genre)) {
        $data_genre_list[] = $row_list;
    }

    $select_komik_chapter = mysqli_query($conn, "SELECT * from `chapter` JOIN `komik` ON chapter.komik_id = komik.komik_id WHERE chapter.komik_id = $id");
    $data_chapter = [];
    while($row_list = mysqli_fetch_assoc($select_komik_chapter)) {
        $data_chapter[] = $row_list;
    }

    // var_dump($data_chapter[0]["nama_chapter"]);

    var_dump($data_detail["total_chapter"])
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    </style>
</head>

<body>
    <ul class="tulisanNav">
        <li><img src="img/logo.webp" width="200px" alt=""></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="genre.html">Genre</a></li>
        <li><a href="release.html">Latest Release</a></li>
        <label class="switch" style="margin-top: 12px; float: right; margin-right: 10px;">
            <input type="checkbox" onclick="darkMode()">
            <span class="slider round"></span>
        </label>
        <input type="text" placeholder="Search.." class="Searchbox">
    </ul>

    <div style="width: 1100px;height:450px;overflow:hidden;margin: auto; opacity: 0.7;background-size: contain;">
        <img src="img/<?= $data_detail["nama_komik"] . "/" . $data_detail["cover_komik"] ?>" width="1100" height="" />
    </div>
    <br>
    <div class="flex-container">
        <div>
            <img src="img/<?= $data_detail["nama_komik"] . "/" . $data_detail["cover_komik"] ?>" alt="" width="200" style="border: black 5pt solid;">
        </div>
        <div class="content">
            <p class="title"><strong><?= $data_detail["nama_komik"] ?></strong></p>
            <p>
                Genre :
                <?php foreach($data_genre_list as $data) { ?>
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
                    <?php foreach($data_chapter as $chapter) {?>
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
    <!-- <div class="komik_info-cover-box">
        <div class="komik_info-cover-image">
          <img width="824" height="1172" src="https://komikcast.com/wp-content/uploads/2021/07/E6p48uFUYAM9A_3-e1626830020974.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy">      </div>
      </div> -->
</body>
<!-- <script>
    console.log("tes");
    var table = document.getElementById('table');    
    var i =3;
    while (i != 0) {
        table.innerHTML += `
                    <tr>
                        <td style="padding-right: 850px;">
                            <a href="isi_komik.html">Chapter ${i}</a>
                        </td>
                        <td>2 weeks ago</td>
                    </tr>`
        i -= 1;
    }
</script> -->
<!-- <script src="isi_komik.js"></script> -->

</html>