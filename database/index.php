<?php
    //memanggil file functions.php
    require 'function.php';

    //memanggil function query pengambilan data pada table mahasiswa
    //lalu ditampung kedalam variable mahasiswa
    $payment = query("SELECT * FROM payment");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List TOP-UP</title>
</head>
<body>
    <h2>Daftar TOP-UP</h2>

    <br>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <tr>
            <th>
                No.
            </th>
            <th>Id-Game</th>
            <th>Pilihan Voucher</th>
            <th>Harga</th>
            <th>Methode Pembayaran</th>
            <th>Email</th>
        </tr>

        <?php foreach($payment as $item) : ?>
        <tr>
            <td><?= $item["id"] ?></td>
            <td><?= $item["id-game"] ?></td>
            <td><?= $item["opsi"] ?></td>
            <td><?= $item["opsi-bayar"] ?></td>
            <td><?= $item["pembayaran"] ?></td>
            <td><?= $item["email"] ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>