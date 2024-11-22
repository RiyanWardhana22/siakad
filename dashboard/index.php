<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$matakuliah = mysqli_query($connection, "SELECT COUNT(*) FROM matakuliah");
$nilai = mysqli_query($connection, "SELECT COUNT(*) FROM khs");
$krs = mysqli_query($connection, "SELECT COUNT(*) FROM krs");

$total_matakuliah = mysqli_fetch_array($matakuliah)[0];
$total_nilai = mysqli_fetch_array($nilai)[0];
$total_krs = mysqli_fetch_array($krs)[0];
?>

<section class="section ">
  <div class="section-header">
    <h1>Dashboard</h1>
  </div>
  <div class="column">
    <div class="row">
      <div class="col-lg-5 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <a href="../matakuliah/">
          <div class="card-icon bg-primary">
            <i class="far fa-file"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Mata Kuliah Ditawarkan</h4>
            </div>
            <div class="card-body">
              <?= $total_matakuliah ?>
            </div>
          </div>
        </div>
      </a>
      </div>
      <a href="../nilai/">
        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-success">
              <i class="far fa-newspaper"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Kartu Hasil Studi</h4>
              </div>
            <div class="card-body">
                <?= $total_nilai ?>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-5 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <a href="../krs/">
          <div class="card-icon bg-warning">
          <i class="far fa-id-card"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Kartu Rencana Studi</h4>
            </div>
            <div class="card-body">
              <?= $total_krs ?>
            </div>
          </div>
        </div>
      </a>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>