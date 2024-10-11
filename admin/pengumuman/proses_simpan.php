<?php
//load koneksi database
include '../../koneksi.php';

//ambil data dari form
$judul_post = $_POST['judul_post'];
$isi_post = $_POST['isi_post'];
$tanggal_post = $_POST['tanggal_post'];


//proses upload gambar
$nama_file = $_FILES['gambar_post']['name'];
$source = $_FILES['gambar_post']['tmp_name'];
$folder = './gambar/';

move_uploaded_file($source, $folder . $nama_file);
//
//si

// Jika tipe kolom pengumuman_tanggal adalah DATETIME, tambahkan waktu

// Simpan data ke database
$insert = mysqli_query($koneksi, "INSERT INTO pengumuman (
  id, 
  judul, 
  isi, 
  gambar, 
  pengumuman_tanggal
) VALUES (
  NULL, 
  '$judul_post', 
  '$isi_post', 
  '$nama_file', 
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
