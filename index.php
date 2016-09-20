<!DOCTYPE html>
<html>
<head>
 <title>Simple CRUD</title>
</head>
<body>
 <h2>Simple CRUD</h2>
 
 <p><a href="index.php">Beranda</a> / <a href="index.php">Tambah Data</a>/ <a href="index.php">Edit</a></p>
 
 <h3>Tambah Data Mahasiswa</h3>
 
 <form action="tambah-proses.php" method="post">
  <table cellpadding="3" cellspacing="0">
   <tr>
    <td>NIM</td>
    <td>:</td>
    <td><input type="text" name="nim" required></td>
   </tr>
   <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="nama" size="30" required></td>
   </tr>
   <tr>
    <td>Kelas</td>
    <td>:</td>
    <td>
     <select name="kelas" required>
      <option value="">Pilih Kelas</option>
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="C">C</option>
   <option value="D">D</option>
   <option value="E">E</option>
     </select>
    </td>
   </tr>
   <tr>
    <td>Jurusan</td>
    <td>:</td>
    <td>
     <select name="jurusan" required>
      <option value="">Pilih Jurusan</option>
      <option value="Teknik Informatika">Teknik Informatika</option>
      <option value="Manajemen Informatika">Manajemen Informatika</option>
     </select>
    </td>
   </tr>
   <tr>
    <td>&nbsp;</td>
    <td></td>
    <td><input type="submit" name="tambah" value="Tambah"></td>
   </tr>
  </table>
 </form>
</body>
</html>
