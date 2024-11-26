<?php
  $host="localhost";
  $user="root";
  $pass="";
  $db="perpustakaanyuu";

  // memberikan alamat koneksi
$koneksi = mysqli_connect($host,$user,$pass,$db);
//$koneksi = mysql_connect("ocalhost","root","","akademik")

//cek koneksi
if(mysqli_connect_errno()){
  echo "koneksi ke database gagal : ".mysqli_connect_error();                                                
}
?>