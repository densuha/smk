<?php
//load koneksi database
include '../../koneksi.php';

//ambil data dari form
$id = $_POST['id'];
$nama_post = $_POST['nama_post'];
$sambutan_post = $_POST['sambutan_post'];


//proses upload icon
$nama_file = $_FILES['gambar_post']['name'];
$source = $_FILES['gambar_post']['tmp_name'];
$folder = './gambar/';

//update data ke database
$update = mysqli_query($koneksi, "UPDATE kepala SET
nama = '$nama_post',
sambutan = '$sambutan_post',
gambar = '$nama_file'
WHERE id = '$id'");
//cek apakah proses edit ke database berhasil
if ($update) {
  //jika berhasil tampilkan pesan berhasil edit data
  echo "<script>
 alert('Data Berhasil Diubah');
 window.location.href='index.php?page=kepala';
 </script>";
} else {
  //jika gagal tampilkan pesan gagal edit data
  echo "<script>
 alert('Data Gagal Diubah');
 window.location.href='index.php?page=kepala';
 </script>";
}
 //
