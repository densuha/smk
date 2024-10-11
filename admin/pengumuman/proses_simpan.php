<?php
//load koneksi database
include '../../koneksi.php';

//ambil data dari form
$judul_post = $_POST['judul_post'];
$isi_post = $_POST['isi_post'];
$tanggal_post = $_POST['tanggal_post'];



$insert = mysqli_query($koneksi, "INSERT INTO pengumuman (
  id, 
  judul, 
  isi, 
  pengumuman_tanggal
) VALUES (
  NULL, 
  '$judul_post', 
  '$isi_post', 
  '$tanggal_post' -- Gunakan tanggal yang diambil dari form
)");

//
//cek apakah proses simpan ke database berhasil
if ($insert) {
  //jika berhasil tampilkan pesan berhasil simpan data
  echo "<script>
 alert('Data Berhasil Ditambahkan');
 window.location.href='index.php?page=pengumuman';
 </script>";
} else {
  //jika gagal tampilkan pesan gagal simpan data
  echo "<script>
 alert('Data Gagal Ditambahkan');
 window.location.href='index.php?page=pengumuman';
 </script>";
}
 //
