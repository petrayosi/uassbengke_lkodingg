<?php
include 'koneksi.php';

// Query untuk mengambil data mahasiswa dan daftar mata kuliah yang diambil
$query = "SELECT inputmhs.*, 
                 GROUP_CONCAT(jwl_mhs.matakuliah SEPARATOR ', ') AS matkul_diambil 
          FROM inputmhs
          LEFT JOIN jwl_mhs ON inputmhs.id = jwl_mhs.mhs_id
          GROUP BY inputmhs.id;";
$sql = mysqli_query($conn, $query);
$no = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <script src="js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Input KRS</title>
    <style>
        body {
            background-color: #ffe6f2;
            color: #800040;
        }
        .btn-primary {
            background-color: #ff66a3;
            border-color: #ff3385;
        }
        .btn-danger {
            background-color: #cc0040;
            border-color: #990030;
        }
        .btn-secondary {
            background-color: #ff99cc;
            border-color: #ff6699;
        }
        .card {
            background-color: #fff0f5;
        }
    </style>
</head>
<body>
    <div class="container-md mt-2">
        <div class="card">
            <form method="POST" action="proses.php">
                <div class="text-center">
                    <h1>Sistem Input Kartu Rencana Studi (KRS)</h1>
                    <p>Input Data Mahasiswa Disini!</p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Nama Mahasiswa</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Mahasiswa" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">NIM</label>
                                <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">IPK</label>
                                <input type="text" name="ipk" class="form-control" placeholder="Masukkan IPK" />
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" name="aksi" value="add" type="submit">Input Mahasiswa</button>
                        </div>
                    </div>
                </div>
                <div class="container mt-4 text-center">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">IPK</th>
                                <th scope="col">SKS Maksimal</th>
                                <th scope="col">Matkul yang Diambil</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($result = mysqli_fetch_assoc($sql)) { ?>
                                <tr>
                                    <th><?php echo ++$no; ?></th>
                                    <td><?php echo $result['namaMhs']; ?></td>
                                    <td><?php echo $result['ipk']; ?></td>
                                    <td><?php echo $result['sks']; ?></td>
                                    <td><?php echo $result['matkul_diambil'] ? $result['matkul_diambil'] : '-'; ?></td>
                                    <td>
                                        <a href="proses.php?hapus=<?php echo $result['id']; ?>" 
                                           class="btn btn-danger" 
                                           onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                                        <a href="edit.php?ubah=<?php echo $result['id']; ?>" 
                                           class="btn btn-primary">Edit</a>
                                        <a href="cetak.php?ubah=<?php echo $result['id']; ?>" 
                                           class="btn btn-secondary">Lihat</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
