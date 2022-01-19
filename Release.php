<?php
require 'db/db.php';
require 'php/functions.php';

/* list data */
$data_komik = selectALL("SELECT komik.*,MAX(chapter.waktu_update) AS waktu_update,total_views,COUNT(komik.komik_id) AS total_chapter FROM `komik` JOIN `chapter` ON komik.komik_id = chapter.komik_id GROUP BY komik.komik_id ORDER BY waktu_update DESC");
foreach($data_komik as $key => $komik) {
  $id = $komik["komik_id"];
  $list_genre_komik = array_column(selectALL("SELECT nama_genre FROM `genre` JOIN `list_genre` ON list_genre.genre_id = genre.genre_id WHERE list_genre.komik_id = $id"), "nama_genre");
  $data_komik[$key]["list_genre"] = $list_genre_komik;
}

$data_list_genre = selectALL("SELECT * FROM `genre`");
/* list data */

function showKomik($list_komik, $loop)
{
  $i = 1;
  
  foreach ($list_komik as $komik) {
    // var_dump($komik);
    if(isset($_GET["Genre"]) || isset($_GET["Type"])) {
      if($komik["kategori"] == $_GET["Type"] || in_array($_GET["Genre"], $komik["list_genre"])) {
        komikCard($komik);
      } else {
        continue;
      }
    } else {
      komikCard($komik);
    }
    $i++;
    // var_dump($komik['komik_id']);
    if ($i > $loop && $loop != -1) {
      break;
    }
  }
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Latest Release</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="release.css">
</head>

<body>
    <?php include 'template/header.php' ?>
    <div class="badan">
        <h1 class="grid-container">Latest Release</h1>

        <div class="column" style="background-color: #394867;">
            <!-- <div style="text-align: center; ">
                <select id="Genre " name="Genre"
                    style="font-size:large; margin-left: 80px; margin-right: 80px; padding-left: 45px; padding-right: 45px;">
                    <option value="genre0 ">Genre</option>
                    <option value="genre1 ">Action</option>
                    <option value="genre2 ">Adventure</option>
                    <option value="genre3 ">Comedy</option>
                    <option value="genre4 ">Fantasi</option>
                    <option value="genre5 ">Romance</option>
                    <option value="genre6 ">Horror</option>
                </select>
                <select id="Type" name="Type"
                    style="font-size:large; margin-left: 80px; margin-right: 80px;padding-left: 45px; padding-right: 45px;">
                    <option value="type0 ">Type</option>
                    <option value="type1 ">Mahwa</option>
                    <option value="type1 ">Mahua</option>
                    <option value="type2 ">Manga</option>
                </select>
            </div> -->


            <div style="text-align: center;">
                <form method="get">
                    <select id="Genre " name="Genre"
                        style="font-size:large; margin-left: 80px; margin-right: 80px; padding-left: 45px; padding-right: 45px;">
                        <option value="genre0">Genre</option>
                        <?php
                          $iterasi_genre = 1;
                          foreach($data_list_genre as $genre) {
                      ?>
                        <option value="<?= $genre["nama_genre"] ?>"><?= ucwords($genre["nama_genre"]) ?></option>
                        <?php
                            $iterasi_genre += 1;
                          }
                      ?>
                    </select>
                    <select id="Type" name="Type"
                        style="font-size:large; margin-left: 80px; margin-right: 80px;padding-left: 45px; padding-right: 45px;">
                        <option value="type0">Type</option>
                        <option value="Manga">Manga</option>
                        <option value="Manhwa">Manhwa</option>
                        <option value="Manhua">Manhua</option>
                    </select>
                    <input type="submit" name="submit"
                        style="font-size:medium; margin-left: 80px; margin-right: 80px;padding-left: 45px; padding-right: 45px;">
                </form>

            </div>
        </div>

        <br><br><br>

        <div class="column" style="background-color: #9BA4B4;">
            <div class="flex-container" id="most-view">
                <?php showKomik($data_komik, -1) ?>
            </div>
        </div>
    </div>

    <script src="release.js"></script>
</body>

</html>