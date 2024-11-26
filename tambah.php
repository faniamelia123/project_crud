<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>From Tambah Buku</title>
</head>
<body>
    <h2>CRUD DATA BUKU</h2>     
    <br/>
    <a href="anggota.php">KEMBALI</a>
    <br/>                                         
    <br/>
    <h3>TAMBAH DATA BUKU</h3> 
    <form method="POST" action="tambah_aksi.php">
       <table>
          <tr>
            <td>kode_buku</td> 
            <td><input type="number" name="kode_buku"></td>                                      
          </tr>  
          <tr>
            <td>judul</td> 
            <td><input type="text" name="judul"></td>                                      
          </tr>  
          <tr>
            <td>genre</td> 
            <td><input type="text" name="genre"></td>                                      
          </tr> 
           <tr>
            <td>kuantitas</td> 
            <td><input type="number" name="kuantitas"></td>                                      
          </tr> 
          <tr>
          <td></td>  
          <td><input type="submit" value="SIMPAN"></td>  
          </tr>                                       
       </table>                                             
    </form>
</body>
</html>