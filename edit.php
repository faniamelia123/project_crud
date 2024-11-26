<!DOCTYPE html>
<html lang="en">
<head>
  <title>edit data</title>
</head>
<body>
   
   <h2>EDIT DATA BUKU</h2>    
   <?php
     include 'koneksi.php';
     $kode_buku = $_GET['kode_buku'];  
     $data = mysqli_query($koneksi,"select * from data_buku WHERE kode_buku ='$kode_buku' ");
     while($d = mysqli_fetch_array($data)){
     ?>

      <form method="post" action="aksi_update.php">
      <table> 
          <tr>
            <td>kode_buku</td> 
            <td><input type="text" name="kode_buku" value="<?php echo $d['kode_buku']; ?>"></td>                                      
          </tr>
          <tr>
            <td>judul</td> 
            <td><input type="text" name="judul" value="<?php echo $d['judul']; ?>"></td>                                      
          </tr>  
          <tr>
            <td>genre</td> 
            <td><input type="text" name="genre"  value="<?php echo $d['genre']; ?>"></td>                                      
          </tr> 
           <tr>
            <td>kuantitas</td> 
            <td><input type="number" name="kuantitas"  value="<?php echo $d['kuantitas']; ?>"></td>                                      
          </tr> 
          <tr>
          <td></td>  
          <td><input type="submit" value="SIMPAN"></td>  
          </tr>
                                              
       </table>                                                 
      </form> 
      <?php
}
?>                                       
</body>
</html>