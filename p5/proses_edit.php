<?php


include 'config.php';

if(count($_POST) > 0) {

   
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jurusan = $_POST['jurusan'];
    $asal_sekolah = $_POST['asal_sekolah'];
   
    $query = "INSERT INTO siswa (nama, alamat, jurusan, asal_sekolah) VALUES ('$nama', '$alamat', '$jurusan', '$asal_sekolah')";
   
    if (mysqli_query($db, $query)) {
      $message = 2;
    } else {
      $message = 4;
    }
   }
header ("Location: index.php?message=".$message."");