<?php
//buat koneksi database
$koneksi = mysqli_connect("localhost", "root", "", "pariwisata");
//cek koneksi database
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}
