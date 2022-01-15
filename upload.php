<?php
    require 'db/functions.php';
    session_start();

   // data list chapter
    $data_chapter = selectFirst("SELECT * from `chapter` JOIN `komik` ON chapter.komik_id = komik.komik_id WHERE chapter.chapter_id = 10");

    $dir = "img/".$data_chapter["nama_komik"]."/".$data_chapter["nama_chapter"];

    function inputGambar($data) {
        global $conn;
        global $dir;

        $tes = scandir($dir);
        $id_chapter = $data["chapter_id"];
        var_dump($tes);
        foreach($tes as $datates) {
            if(is_file($dir."/".$datates)) {
                $query = "INSERT INTO gambar (gambar_id, chapter_id, file_gambar) VALUES (NULL, $id_chapter, '$datates')";

                // echo $datates;
                if (!(mysqli_query($conn, $query))) {
                    echo "Error: " . $query . "<br>" . mysqli_error($conn);
                }
            }
        }
    }

    if(isset($_POST["inputDB"]) && $_POST["checker"] == $_SESSION["resubmit"]) {
        inputGambar($data_chapter);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TES</h1>
    <form method="post">
        <?php
            
            $checker = microtime();
            $_SESSION["resubmit"] = $checker;
        ?>
        <input type="hidden" name="checker" value="<?= $checker ?>">
        <input type="submit" name="inputDB" value="tes">
    </form>
</body>
</html>