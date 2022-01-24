<?php
    require dirname(__FILE__, 2).'/db/db.php';

    if(isset($_POST['searchbar'])) {
        $search_data = $_POST['searchbar'];
    }
    
    $select_komik = selectALL("SELECT komik.*, COUNT(komik.komik_id) AS total_chapter FROM komik JOIN chapter ON komik.komik_id = chapter.komik_id WHERE komik.nama_komik LIKE '%$search_data%' GROUP BY komik.komik_id");
    
    
    if(strlen($search_data) > 0) {
        $total_komik = 1;
        foreach($select_komik as $komik) {
            $id = $komik["komik_id"];
            $nama = $komik["nama_komik"];
?>
            <a href="<?= dirname(__FILE__, 2) ?>/detail.php?id=<?= $komik["komik_id"] ?>">
                <img src="<?= dirname(__FILE__, 2) ?>/img/<?= $komik["nama_komik"] ?>/<?= $komik["cover_komik"] ?>" alt="">
                <p><?= $komik["nama_komik"] ?></p>
            </a>
<?php
            $total_komik += 1;
            if($total_komik > 3) {
                break;
            }
        }
    }
?>