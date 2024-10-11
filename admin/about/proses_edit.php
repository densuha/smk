<?php
//load koneksi database
include '../../koneksi.php';

//ambil data dari form
$id = $_POST['id'];
$judul_post = $_POST['judul_post'];
$isi_post = $_POST['isi_post'];

//proses upload icon
$nama_file = $_FILES['gambar_post']['name'];
$source = $_FILES['gambar_post']['tmp_name'];
$folder = './gambar/';
move_uploaded_file($source, $folder . $nama_file);
//
//update data ke database
$update = mysqli_query($koneksi, "UPDATE about SET 
 judul = '$judul_post',
 isi = '$isi_post',
 gambar = '$nama_file'

 WHERE id = '$id'");
//cek apakah proses edit ke database berhasil
if ($update) {
  //jika berhasil tampilkan pesan berhasil edit data
  echo "<script>
 alert('Data Berhasil Diubah');
 window.location.href='index.php?page=about';
 </script>";
} else {
  //jika gagal tampilkan pesan gagal edit data
  echo "<script>
 alert('Data Gagal Diubah');
 window.location.href='index.php?page=about';
 </script>";
}
 //
