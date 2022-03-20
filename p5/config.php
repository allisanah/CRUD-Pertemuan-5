<?php

$server = "localhost";
$user = "root";
$password = "123";
$nama_database = "db_crud";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>