<!DOCTYPE html>
<?php 
include 'koneksi.php';

// Ambil data mahasiswa berdasarkan ID
if (isset($_GET['ubah'])) {
    $id_siswa = $_GET['ubah'];
    $query = "SELECT * FROM inputmhs WHERE id = '$id_siswa';";
    $query_mhs = "SELECT * FROM jwl_mhs WHERE mhs_id = '$id_siswa';";

    $sql = mysqli_query($conn, $query);
    $sql_mhs = $conn->query($query_mhs);

    $no = 0;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <script src="js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kartu Rencana Studi</title>
</head>
<body>
    <div class="container-md mt-2">
        <div class="card">
            <div class="text-center">
                <h1>Kartu Rencana Studi</h1>
                <p>Lihat Jadwal Mata Kuliah Yang Telah Diinputkan Di sini!</p>
            </div>
            <?php while ($result = mysqli_fetch_assoc($sql)) { ?>
                <div class="container text-center">
                    <div class="alert alert-primary" role="alert">
                        <p>
                            <b>Mahasiswa:</b> <?php echo $result['namaMhs']; ?> |
                            <b>NIM:</b> <?php echo $result['nim']; ?> |
                            <b>IPK:</b> <?php echo $result['ipk']; ?>
                        </p>
                        <a href="index.php" type="button" class="btn btn-warning">Kembali Ke Data Mahasiswa</a>
                    </div>
                </div>
            <?php } ?>
            <div class="container mt-4 text-center">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Mata Kuliah</th>
                            <th scope="col">SKS</th>
                            <th scope="col">Kelp</th>
                            <th scope="col">Ruangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        while ($result_mhs = mysqli_fetch_assoc($sql_mhs)) { 
                            // Tampilkan setiap mata kuliah
                            ?>
                            <tr>
                                <th scope="row"><?php echo ++$no; ?></th>
                                <td><?php echo $result_mhs['matakuliah']; ?></td>
                                <td><?php echo $result_mhs['sks']; ?></td>
                                <td><?php echo $result_mhs['kelp']; ?></td>
                                <td><?php echo $result_mhs['ruangan']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>
</html>
