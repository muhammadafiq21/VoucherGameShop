<?php

$conn = mysqli_connect("localhost", "root", "", "vc_shop");


function input_data($data)
{
    global $conn;


    $gameid = mysqli_real_escape_string($conn, $data["id"]);
    $voucher = mysqli_real_escape_string($conn, $data["voucher"]);
    $harga = mysqli_real_escape_string($conn, $data["harga"]);
    $payment = mysqli_real_escape_string($conn, $data["payment"]);
    $email = strtolower(stripslashes($data["email"]));
    $game = mysqli_real_escape_string($conn, $data["game"]);



    mysqli_query($conn, "INSERT INTO payment VALUE('', '$gameid', '$voucher','$harga', '$payment', '$email')");

    return mysqli_affected_rows($conn);
}
