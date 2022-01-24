<?php
    // var_dump(dirname(__FILE__, 2));
    require dirname(__FILE__, 2).'/db/db.php';
    // session_start();

   // data list chapter
    // $data_chapter = selectFirst("SELECT * from `chapter` JOIN `komik` ON chapter.komik_id = komik.komik_id WHERE chapter.chapter_id = 10");

    // $dir = "img/".$data_chapter["nama_komik"]."/".$data_chapter["nama_chapter"];

    // function inputGambar($data) {
    //     global $conn;
    //     global $dir;

    //     $tes = scandir($dir);
    //     $id_chapter = $data["chapter_id"];
    //     var_dump($tes);
    //     foreach($tes as $datates) {
    //         if(is_file($dir."/".$datates)) {
    //             $query = "INSERT INTO gambar (gambar_id, chapter_id, file_gambar) VALUES (NULL, $id_chapter, '$datates')";

    //             // echo $datates;
    //             if (!(mysqli_query($conn, $query))) {
    //                 echo "Error: " . $query . "<br>" . mysqli_error($conn);
    //             }
    //         }
    //     }
    // }

    // if(isset($_POST["inputDB"]) && $_POST["checker"] == $_SESSION["resubmit"]) {
    //     inputGambar($data_chapter);
    // }

    if(isset($_POST["searchbar"])) {
        $search_data = $_POST["searchbar"];
        var_dump($search_data);
    } else {
        var_dump("ga ada isinya :(");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style></style>
</head>
<body>
    <h1>TES</h1>
    <!-- <form method="post"> -->
        <?php
            
            // $checker = microtime();
            // $_SESSION["resubmit"] = $checker;
        ?>
        <!-- <input type="hidden" name="checker" value="<?php //$checker ?>">
        <input type="submit" name="inputDB" value="tes"> -->
        <div style="margin-left: 30px; width: 300px;">
            <input type="text" id="searchbar" name="searchbar" placeholder="Search.." class="Searchbox">
            <div id="test" style="border: 1px solid black; display:block; z-index:1; position:absolute; background-color:aqua"></div>
        </div>
        <h1>TES YA</h1>
    <!-- </form> -->
    
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<!-- <script src="<?php //dirname(__FILE__, 2) ?>/template/header.js"></script> -->
<script>
    $(document).ready(function(){
        $("#searchbar").keyup(function(event){
            // event.preventDefault();

            var $form = $(this);
            var serializedData = $form.serialize();
            
            request = $.ajax({
                method: "post",
                url: "tes2.php",
                data: serializedData,
                dataType: "html",
                success: function(response) {
                    console.log(serializedData);
                    $("#test").html(response);
                }
            })

            // request.done(function (response, textStatus, jqXHR){
            //     // Log a message to the console
            //     console.log(serializedData);
            // });

            // request = $.post({})
        });
    })
</script>
</html>