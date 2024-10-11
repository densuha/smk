<?php
//load koneksi database
include '../../koneksi.php';
//ambil id dari url
$id = $_GET['id'];
//hapus file gambar dari folder gambar
//
//hapus data dari database
$hapus = mysqli_query($koneksi, "DELETE FROM inbox WHERE id = 
'$id'");
//cek apakah proses hapus data berhasil
if ($hapus) {
  //jika berhasil tampilkan pesan berhasil hapus data
  echo "<script>
 alert('Data Berhasil Dihapus');
 window.location.href='index.php?page=inbox';
 </script>";
} else {
  //jika gagal tampilkan pesan gagal hapus data
  echo "<script>
 alert('Data Gagal Dihapus');
 window.location.href='index.php?page=inbox';
 </script>";
}
