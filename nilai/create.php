<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

// $mahasiswa = mysqli_query($connection, "SELECT nim,nama FROM matakuliah");
$matkul = mysqli_query($connection, "SELECT nama_matkul FROM matakuliah");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Tambah Data KHS</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="./store.php" method="POST">
            <table cellpadding="8" class="w-100">
              <tr>
                <td>Kode Mata Kuliah</td>
                <td><input class="form-control" type="text" name="kode_matakuliah" required></td>
              </tr>
              <tr>
                <td>Mata Kuliah</td>
                <td>
                  <select class="form-control" name="nama_matakuliah" id="matkul" required>
                    <option value="">--Pilih Matakuliah--</option>
                    <?php
                    while ($r = mysqli_fetch_array($matkul)) :
                    ?>
                      <option value="<?= $r['nama_matkul'] ?>"><?= $r['nama_matkul'] ?></option>
                    <?php
                    endwhile;
                    ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Kelas</td>
                <td>
                  <select class="form-control" name="kelas" id="semester" required>
                    <option value="">--Pilih Kelas--</option>
                    <option value="PSIK 23 A">PSIK 23 A</option>
                    <option value="PSIK 23 B">PSIK 23 B</option>
                    <option value="PSIK 23 C">PSIK 23 C</option>
                    <option value="PSIK 23 D">PSIK 23 D</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>SKS</td>
                <td>
                <select class="form-control" name="sks" required>
                    <option value="">--Jumlah SKS--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Bobot Nilai</td>
                <td>
                <select class="form-control" name="grade" required>
                    <option value="">--Grade--</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="E">E</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>
                  <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
                  <input class="btn btn-danger" type="reset" name="batal" value="Bersihkan">
                </td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>