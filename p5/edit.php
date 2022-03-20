<?php

include 'config.php';
$query = "SELECT * FROM siswa WHERE id='" . $_GET["id"] . "'"; 
$result = mysqli_query($db, $query);
$siswa = mysqli_fetch_assoc($result); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
  <div class="page-header mb-4">
      <h2>Update Data Siswa</h2>
  </div>
    <div class="row">
        <div class="col-md-12">
            <form action="proses_edit.php" method="POST">
              <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" class="form-control" required="">
              <div class="form-group">
                <label for="nama">Nama </label>
                <input type="text" name="nama" class="form-control" value="<?php echo $siswa['nama']; ?>" required="">
              </div>                
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" value="<?php echo $siswa['alamat']; ?>" required="">
              </div>              
              <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" value="<?php echo $siswa['jurusan']; ?>" required="">
              </div>
              <div class="form-group">
                <label for="asal_sekolah">Asal Sekolah</label>
                <input type="text" name="asal_sekolah" class="form-control" value="<?php echo $siswa['asal_sekolah']; ?>" required="">
              </div>
              <button type="submit" class="btn btn-primary" value="submit">Update</button>
            </form>
        </div>
    </div>        
</div>
</body>
</html>