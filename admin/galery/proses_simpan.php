<?php
//load koneksi database
include '../../koneksi.php';

//ambil data dari form
$nama_gambar_post = $_POST['nama_gambar_post'];


//proses upload gambar
$nama_file = $_FILES['gambar_post']['name'];
$source = $_FILES['gambar_post']['tmp_name'];
$folder = './gambar/';

move_uploaded_file($source, $folder . $nama_file);

//simpan data ke database
$insert = mysqli_query($koneksi, "INSERT INTO galery VALUES (
 NULL,
'$nama_gambar_post', '$nama_file'
 )");
//
//cek apakah proses simpan ke database berhasil
if ($insert) {
  //jika berhasil tampilkan pesan berhasil simpan data
  echo "<script>
 alert('Data Berhasil Ditambahkan');
 window.location.href='index.php?page=galery';
 </script>";
} else {
  //jika gagal tampilkan pesan gagal simpan data
  echo "<script>
 alert('Data Gagal Ditambahkan');
 window.location.href='index.php?page=galery';
 </script>";
}
 //
