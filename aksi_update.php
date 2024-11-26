<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kode_buku = $_POST['kode_buku'];
$judul = $_POST['judul'];
$genre= $_POST['genre'];
$kuantitas = $_POST['kuantitas'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE data_buku SET judul='$judul', genre='$genre', kuantitas='$kuantitas' WHERE kode_buku='$kode_buku' ");
// mengalihkan halaman kembali ke index.php
header("location:anggota.php");
 
?>