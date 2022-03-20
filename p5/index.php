<?php

include 'config.php';
    
$query = "select * from siswa limit 200";
$result = mysqli_query($db, $query); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php include 'message.php';  ?>
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <span aria-hidden="true"></span>
                </button>
            </div>
        </div>
        <div class="col-md-12">
            <div class="float-left mb-4">
                <h2>Daftar Siswa </h2>
            </div>            
            <div class="float-right">
                <a href="tambah.php" class="btn btn-success">Tambah</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Asal Sekolah</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <!-- Fetch data customer dengan array assosiative -->
                <?php if ($result->num_rows > 0): ?>
                <?php while($siswa_data = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <th scope="row"><?php echo $siswa_data['id'];?></th>
                        
                        <td><?php echo $siswa_data['nama'];?></td>
                        <td><?php echo $siswa_data['alamat'];?></td>
                        <td><?php echo $siswa_data['jurusan'];?></td>
                        <td><?php echo $siswa_data['asal_sekolah'];?></td>
                        <td> 
                            <a href="edit.php?id=<?php echo $siswa_data['id'];?>" class="btn btn-primary">Edit</a>
                            <a href="delete.php?id=<?php echo $siswa_data['id'];?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                <?php else: ?>
                <tr>
                    <td colspan="3" rowspan="1" headers="">Tidak ada data ditemukan!</td>
                </tr>
                <?php endif; ?>
                <?php mysqli_free_result($result); ?>
              </tbody>
            </table>
        </div>
    </div>        
</div>
</body>
</html>