<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari from
$kode_buku=$_POST['kode_buku'];
$judul=$_POST['judul'];
$genre=$_POST['genre'];
$kuantitas=$_POST['kuantitas'];
  
// menginput data ke database
mysqli_query($koneksi,"insert into data_buku values('$kode_buku','$judul','$genre','$kuantitas')");

// mengalihkan halaman kembali ke anggota.php
header("location:anggota.php");

?>