<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$prodi = mysqli_query($connection, "SELECT * FROM krs");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Tambah data KRS</h1>
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
                <td>Mata Kuliah</td>
                <td><input class="form-control" type="text" name="matkul"></td>
              </tr>
              <tr>
              <td>Kelas</td>
                <td>
                  <select class="form-control" name="kelas" id="jenkel" required>
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
                  <select class="form-control" name="sks" id="jenkel" required>
                    <option value="">--Pilih Jumlah SKS--</option>
                    <option value="1">1 SKS</option>
                    <option value="2">2 SKS</option>
                    <option value="3">3 SKS</option>
                  </select>
                </td>
              </tr>
              <tr>
              <td>Hari</td>
                <td>
                  <select class="form-control" name="hari" id="jenkel" required>
                    <option value="">--Pilih Hari--</option>
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Jam</td>
                <td><input class="form-control" type="text" id="datepicker" name="jam"></td>
              </tr>
              <tr>
                <td>Ruang</td>
                <td><input type="text" name="ruang" class="form-control"></input></td>
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