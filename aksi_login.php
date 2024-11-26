<?php

  include 'koneksi.php';

  $username = $_POST['username'];
  $password = $_POST['password'];


  $data=mysqli_query($koneksi,"SELECT * FROM perpustaka WHERE username='$username' AND password='$password'");
 
  $cek = mysqli_num_rows($data);

  if($cek > 0){
     header("location:anggota.php");                                             
  }else{
   header("location:anggota.php");
  }
 ?>