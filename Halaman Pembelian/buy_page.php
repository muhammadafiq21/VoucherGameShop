<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TokoTokoTok Voucher Game Shop</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="head-up">
            <div class="left-corner">
                <img class="corner-logo" src="assets/Logo/TokoTokoTok Logo-wide.png">
                <!--<h2>Bapakku.com</h2> -->
            </div>

            <nav>
                <a href="../Code/Homepage.html"> Home </a>
                <!-- <a href="#"> Kontak Kami </a> 
                <a href="#"> Mulai Belanja </a> -->

            </nav>
        </div>

        <div class="monitor">
            <div class="information-game">
                <h3 class="game-name" id="nama-game">Nama Game</h3>
                <div id="banner-blue">
                    <img src="assets/banner/Mobile Legend.png" class="banner-game">
                </div>
                <P class="desc-game" id="desk-game">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta omnis laboriosam alias officia.
                    Minus quae ratione illum veniam molestiae fuga voluptatem perferendis?
                    Recusandae ipsa iste aspernatur adipisci. Dolor, similique inventore.

                </P>
            </div>

            <!--Input ID Game-->
            <?php
            if (isset($_POST['submit'])) {
                $id =  $_POST["id-game"];
                $voucher =  $_POST["opsi-voucher"];
                $email = $_POST["email"];
                $Game = $_POST["nameGame"];
                $Payment = $_POST["payment"];
            }

            ?>

            <form action="../Konfirmasi Pilihan/confirm.php" method="post">
                <div class="detail-pembayaran">
                    <div class="detail-id" id="game-game-game">
                        <h2>Id Kamu Kawan! </h2>
                        <input type="text" name="id-game">
                        <p>
                            ID yang dimasukan adalah ID pada game
                        </p>
                    </div>

                    <!--Pemilihan Variasi-->
                    <div class="detail-varian">
                        <h2>Pilih Varian Voucher kamu kawan</h2>
                        <div class="detail-varian-voc" id="voucher-game">

                            <div class="card-voc">
                                <label>
                                    <input class="opsi" type="radio" name="opsi">
                                    <span class="opsi-sider"> <span>200</span> <span>Diamond</span> </span>
                                </label>
                            </div>



                        </div>
                    </div>

                    <!--Metode Pembayaran-->
                    <div class="detail-beli">
                        <h2>Pilih Pembayaran Pakai Apa Kawan</h2>
                        <div class="detail-beli-voc" id="beli-voc-qq">

                            <div class="card-buy" id="bayar1">
                                <label>
                                    <input class="opsi" type="radio" name="opsi-bayar-gopay" value="GOPAY">
                                    <span class="opsi-sider">
                                        <img src="assets/stone-free/Frame 1.svg" class="mechant">
                                        <div> <span>Harga</span> <span>Rp. </span> <span id="harga-game-gopay"></span> </div>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--Email-->
                    <div class="detail-email">
                        <h2>Email Kamu Kawan! </h2>
                        <p>
                            Masukan Email untuk bukti pembayaran dan lain - lain.
                        </p>

                        <input type="text" name="email"> <br>
                        <div class="btn">
                            <button class="btn-detail" name="submit">Beli sekarang</button>
                        </div> <br>
                    </div>
                </div>
        </div>
        </form>

    </div>

    <script src="stuff.js"> </script>

</body>

</html>