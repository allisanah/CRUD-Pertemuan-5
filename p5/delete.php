<?php


include 'config.php';

$id = $_GET["id"];

$query = "DELETE FROM siswa WHERE id='" . $id . "'";
if (mysqli_query($db, $query)) {
  $message = 3;
} else {
  $message = 4;
}
header ("Location: index.php?message=".$message."");