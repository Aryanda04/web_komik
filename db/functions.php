<?php
        //koneksi ke database
        $conn = mysqli_connect("localhost", "root", "", "komik_tubes");

        //fungsi untuk mengambil data dari database
        function query($query){
            global $conn;
            $data = mysqli_query($conn, $query);
            $mahasiswas = [];
            while( $mahasiswa = mysqli_fetch_assoc($data) ) {
                $mahasiswas[] = $mahasiswa;
            }
            return $mahasiswas;
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

        //fungsi untuk menghapus data
        function hapus($id){
            global $conn;
            mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
            //mengembalikan jumlah pada database,
            //contoh: jika id = 3 terdapat pada database maka akan mereturn nilai 1, jika tidak ada maka return 0
            return mysqli_affected_rows($conn);
        }
