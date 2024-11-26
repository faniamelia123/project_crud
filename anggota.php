<!DOCTYPE html>
<html>
 <head>
 <title>halaman angota</title>                                                
 </head> 
 <body>
  <div class="judul">
   <h2>SELAMAT DATANG ANGGOTA</h2>      
   <P>user dan password anda sudah benar</P>
   <br/>
   <a href="tambah.php">+ TAMBAH buku</a>
   <br/>
    <br/>
    <table border="1"><>
   <tr>
   <th>kode_buku</th>
    <th>judul</th>
    <th>genre</th>
    <th>kuantitas</th>
    <th>OPSI</th>
</tr>
<?php 
include 'koneksi.php';
$no = 1;
$data = mysqli_query($koneksi,"select * from data_buku");
while($d = mysqli_fetch_array($data)){
?>
 <tr>
<td><?php echo $d['kode_buku']; ?></td>
<td><?php echo $d['judul']; ?></td>
<td><?php echo $d['genre']; ?></td>
<td><?php echo $d['kuantitas']; ?></td>
<td>
  <a href="edit.php?kode_buku=<?php echo $d['kode_buku']; ?>">EDIT</a>
  <a href="hapus.php?kode_buku=<?php echo $d['kode_buku']; ?>">HAPUS</a>
</td>	
</tr>
<?php 
}
?>
</tabel>
 </body>                                                
</html>