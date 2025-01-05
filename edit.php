<!DOCTYPE html>
<?php 
include'koneksi.php';
  if(isset($_GET['ubah'])){
    $id_siswa = $_GET['ubah'];
     $query = "SELECT * FROM inputmhs WHERE id = '$id_siswa';";
     $query_makul = "SELECT * FROM jwl_matakuliah ORDER BY matakuliah ASC";
     $query_mhs = "SELECT * FROM jwl_mhs WHERE mhs_id = '$id_siswa';";
     $sql = mysqli_query($conn , $query);
     $sql_makul = $conn->query($query_makul);
     $sql_mhs = $conn->query($query_mhs);
     $no = 0;
     
  }
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <!--bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <script src="js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>uasbengkod</title>
  </head>
  <body>
    <div class="container-md mt-2">
      <div class="card">
        
          <div class="text-center">
            <h1>Sistem Input Kartu Rencana Studi (KRS)</h1>
            <p>Input Data Mahasiswa Disini!</p>
          </div>
          <?php
                while($result = mysqli_fetch_assoc($sql)){
                ?>
          <div class="container text-center">
            <div class="alert alert-primary " role="alert">
                <p><b>Mahasiswa:</b><?php echo$result['namaMhs'];?>   |   <b>NIM:</b><?php echo$result['nim'];?>   |   <b>IPK:</b><?php echo$result['ipk'];?></p> 
                <a href="index.php" type="button" class="btn btn-warning">Kembali Ke Data Mahasiswa</a>
          </div>
          
        </div>
          
          <form action="proses.php" method="POST">
          <input hidden type="text" value="<?php echo$result['id'];?>" name="id">
          
          <?php
                }
                ?>
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label class="form-label" for="exampleDataList">Mata Kuliah</label>
                  <select name="makul" id="makul" class="form-select" aria-label="Default select example">
                    <option selected>Pilih Mata Kuliah</option>
                    <?php
                      foreach($sql_makul as $row){
                          echo '<option value="'.$row["id"].'">'.$row["matakuliah"].'</option>';
                      }
                  ?>
                  </select>
                </div>
              </div>
              
              <div class="d-grid gap-2">
                <button class="btn btn-primary" class="btn btn-primary" name="aksi" value="edit" type="submit">Simpan</button>
              </div>
            </div>
          </div>
          </form>
          <div class="container mt-4 text-center">
            <table class="table table-bordered table-striped table-hover">
              <thead>
                
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Mata Kuliah</th>
                  <th scope="col">SKS</th>
                  <th scope="col">Kelp</th>
                  <th scope="col">Ruangan</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while($result = mysqli_fetch_assoc($sql_mhs)){
                ?>
                <tr>
                  <th scope="row"><?php echo ++$no; ?></th>
                  <td><?php echo$result['matakuliah'];?></td>
                  <td><?php echo$result['sks'];?></td>
                  <td><?php echo$result['kelp'];?></td>
                  <td><?php echo$result['ruangan'];?></td>
                  <td>
                    <a href="proses.php?hapus=1" type="button" class="btn btn-danger">Hapus</a>
                    
                  </td>
                </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
