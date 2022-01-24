<?php
    require dirname(__FILE__, 2).'/db/db.php';

    if(isset($_POST['searchbar'])) {
        $search_data = $_POST['searchbar'];
        var_dump($search_data);
    }

    // if(strlen($search_data))
    var_dump(strlen($search_data));
    
    $select_komik = selectALL("SELECT komik.*, COUNT(komik.komik_id) AS total_chapter FROM komik JOIN chapter ON komik.komik_id = chapter.komik_id WHERE komik.nama_komik LIKE '%$search_data%' GROUP BY komik.komik_id");
    
    echo "<table>";
    echo "    <tr>";
    echo "        <th>id</th>";
    echo "        <th>nama</th>";
    echo "    </tr>";
    foreach($select_komik as $komik) {
        $id = $komik["komik_id"];
        $nama = $komik["nama_komik"];
        echo "    <tr>";
        echo "        <td>$id</td>";
        echo "        <td>$nama</td>";
        echo "    </tr>";
    }
    echo "<table>";
?>