<?php
include 'koneksi.php';

if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "add") {
        $nama = mysqli_real_escape_string($conn, trim($_POST['nama']));
        $nim = mysqli_real_escape_string($conn, trim($_POST['nim']));
        $ipk = floatval($_POST['ipk']);

        $cek = mysqli_query($conn, "SELECT * FROM inputmhs WHERE nim = '$nim'");

        if (mysqli_num_rows($cek) > 0) {
            echo "<script type='text/javascript'>alert('NIM Sudah Terdaftar!'); window.location.href='index.php';</script>";
        } else {
            $sks = $ipk < 3 ? 20 : 24; // SKS berdasarkan IPK
            $query = "INSERT INTO inputmhs (namaMhs, nim, ipk, sks) VALUES ('$nama', '$nim', '$ipk', '$sks')";
            $sql = mysqli_query($conn, $query);

            if ($sql) {
                header("location: index.php");
            } else {
                echo "<script type='text/javascript'>alert('Gagal menambahkan data!'); window.location.href='index.php';</script>";
            }
        }
    } elseif ($_POST['aksi'] == "edit") {
        $mhs_id = intval($_POST['id']);
        $makul_id = intval($_POST['makul']);

        // Ambil data mata kuliah berdasarkan ID
        $query = "SELECT * FROM jwl_matakuliah WHERE id = '$makul_id'";
        $sql = mysqli_query($conn, $query);

        while ($result = mysqli_fetch_assoc($sql)) {
            $matakuliah = mysqli_real_escape_string($conn, $result['matakuliah']);
            $sks = intval($result['sks']);
            $kelp = mysqli_real_escape_string($conn, $result['kelp']);
            $ruangan = mysqli_real_escape_string($conn, $result['ruangan']);

            $query_input = "INSERT INTO jwl_mhs (mhs_id, matakuliah, sks, kelp, ruangan) 
                            VALUES ('$mhs_id', '$matakuliah', '$sks', '$kelp', '$ruangan')";
            $sql_input = mysqli_query($conn, $query_input);

            if ($sql_input) {
                header("location: index.php");
            } else {
                echo "<script type='text/javascript'>alert('Gagal menyimpan data mata kuliah!'); window.location.href='index.php';</script>";
            }
        }
    }
} elseif (isset($_GET['hapus'])) {
    $id = intval($_GET['hapus']);

    // Hapus data mahasiswa dan mata kuliah terkait
    $delete_mhs = "DELETE FROM inputmhs WHERE id = '$id'";
    $delete_related = "DELETE FROM jwl_mhs WHERE mhs_id = '$id'";

    $sql_related = mysqli_query($conn, $delete_related);
    $sql_mhs = mysqli_query($conn, $delete_mhs);

    if ($sql_mhs) {
        header("location: index.php");
    } else {
        echo "<script type='text/javascript'>alert('Gagal menghapus data!'); window.location.href='index.php';</script>";
    }
}
?>
