<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$kode_buku = $_GET['kode_buku'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from data_buku where kode_buku ='$kode_buku'");
 
// mengalihkan halaman kembali ke index.php
header("location:anggota.php");
 
?>