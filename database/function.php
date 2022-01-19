<?php
        //koneksi ke database
        $conn = mysqli_connect("localhost", "root", "", "sql");

        //fungsi untuk mengambil data dari database
        function query($query){
            global $conn;
            $data = mysqli_query($conn, $query);
            $payments = [];
            while( $payment = mysqli_fetch_assoc($data) ) {
                $payments[] = $payment;
            }
            return $payments;
        }

        //fungsi untuk menambah data
        function tambah($data){
            global $conn;

            $gameid = $data["id-game"];
            $voucher = $data["opsi"];
            $harga = $data["opsi-bayar"];
            $payment = $data["pembayaran"];
            $email = $data["email"];

            $query = "INSERT INTO payment
                    VALUES
                    ('', '$gameid', '$voucher', '$harga', '$payment', '$email')
                ";
            //menggunakan query untuk menambah data yaitu memerlukan parameter penghubung database dan query sql
            mysqli_query($conn, $query);
            //mengembalikan jumlah pada database,
            //contoh: jika id = 3 terdapat pada database maka akan mereturn nilai 1, jika tidak ada maka return 0
            return mysqli_affected_rows($conn);
        }

?>