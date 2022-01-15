<!doctype html>
<html lang="en">

<head>

    <title>Isi Komik</title>
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
        /* Should be removed. Only for demonstration */
    }

    .column-2 {
        float: right;
        width: 18%;
        border-radius: 20px;
        padding: 5px;
        height: 800px;
        /* Should be removed. Only for demonstration */
    }
    </style>
</head>

<body>
    <ul class="tulisanNav">
        <li><img src="img/logo.webp" width="200px" alt=""></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="genre.php">Genre</a></li>
        <li><a href="Release.php">Latest Release</a></li>
        <label class="switch" style="margin-top: 12px; float: right; margin-right: 10px;"><input type="checkbox"
                onclick="darkMode()"><span class="slider round"></span></label>
        <input type="text" placeholder="Search.." class="Searchbox">
    </ul>
    <br><br>

    <div class="column" style="background-color:#aaa;">
        <h1>Latest Release</h1>
        <div class="row" id="daftar-komik" style="border-top:solid black 5px; padding-top: 10px;"></div>
    </div>

    <div class="column-2" style="background-color:rgb(231, 111, 111);">
        <h1>disini iklan</h1>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="Lrelase.js"></script>
    <!-- <script src="isi_komik.js"></script> -->
</body>

</html>