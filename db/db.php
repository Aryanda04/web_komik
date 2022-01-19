<?php
    //koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "komik_tubes");

    //fungsi untuk mengambil data dari database
    function selectALL($query){
        global $conn;
        $data = mysqli_query($conn, $query);
        $mahasiswas = [];
        while( $mahasiswa = mysqli_fetch_assoc($data) ) {
            $mahasiswas[] = $mahasiswa;
        }
        return $mahasiswas;
    }

    function selectFirst($query) {
        global $conn;
        $data = mysqli_query($conn, $query);
        return mysqli_fetch_assoc($data);
    }

    function updateTotalView($id_komik) {
        global $conn;

        $query = "UPDATE `komik` SET `total_views`=`total_views`+1 WHERE komik_id = $id_komik";

        mysqli_query($conn, $query);
    }

    //fungsi untuk menambah data
    function tambah($data){
        global $conn;

        $nim = $data["nim"];
        $nama = $data["nama"];
        $jurusan = $data["jurusan"];
        $email = $data["email"];

        $query = "INSERT INTO mahasiswa
                VALUES
                ('', '$nim', '$nama', '$jurusan', '$email')
            ";
        //menggunakan query untuk menambah data yaitu memerlukan parameter penghubung database dan query sql
        mysqli_query($conn, $query);
        //mengembalikan jumlah pada database,
        //contoh: jika id = 3 terdapat pada database maka akan mereturn nilai 1, jika tidak ada maka return 0
        return mysqli_affected_rows($conn);
    }
