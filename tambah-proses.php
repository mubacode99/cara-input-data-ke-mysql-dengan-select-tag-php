<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
 
 //inlcude atau memasukkan file koneksi ke database
 include('koneksi.php');
 
 //jika tombol tambah benar di klik maka lanjut prosesnya
 $nim  = $_POST['nim']; //membuat variabel $nis dan datanya dari inputan NIS
 $nama  = $_POST['nama']; //membuat variabel $nama dan datanya dari inputan Nama Lengkap
 $kelas  = $_POST['kelas']; //membuat variabel $kelas dan datanya dari inputan dropdown Kelas
 $jurusan = $_POST['jurusan']; //membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
 
//melakukan pengecekan jurusan 

  if ($jurusan == "Teknik Informatika") {
  	
  	$input = mysql_query("INSERT INTO tehnik VALUES(NULL, '$nim', '$nama', '$kelas', '$jurusan')") or die(mysql_error());
  }
  else{

  	$input = mysql_query("INSERT INTO mhs VALUES(NULL, '$nim', '$nama', '$kelas', '$jurusan')") or die(mysql_error());

  }

 //melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
 
 
 //jika query input sukses
 if($input){
  
  echo 'Data berhasil di tambahkan! ';  //Pesan jika proses tambah sukses
  echo '<a href="index.php">Kembali</a>'; //membuat Link untuk kembali ke halaman tambah
  
 }else{
  
  echo 'Gagal menambahkan data! ';  //Pesan jika proses tambah gagal
  echo '<a href="index.php">Kembali</a>'; //membuat Link untuk kembali ke halaman tambah
  
 }

}else{ //jika tidak terdeteksi tombol tambah di klik

 //redirect atau dikembalikan ke halaman tambah
 echo '<script>window.history.back()</script>';

}
?>