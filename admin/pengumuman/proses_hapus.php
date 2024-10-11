<?php
//load koneksi database
include '../../koneksi.php';
//ambil id dari url
$id = $_GET['id'];
//hapus file gambar dari folder gambar
$query = mysqli_query($koneksi, "SELECT * FROM pengumuman WHERE id 
= '$id'");
$data = mysqli_fetch_array($query);
//
//hapus data dari database
$hapus = mysqli_query($koneksi, "DELETE FROM pengumuman WHERE id = 
'$id'");
//cek apakah proses hapus data berhasil
if ($hapus) {
  //jika berhasil tampilkan pesan berhasil hapus data
  echo "<script>
 alert('Data Berhasil Dihapus');
 window.location.href='index.php?page=pengumuman';
 </script>";
} else {
  //jika gagal tampilkan pesan gagal hapus data
  echo "<script>
 alert('Data Gagal Dihapus');
 window.location.href='index.php?page=pengumuman';
 </script>";
}
