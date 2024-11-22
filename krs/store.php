<?php
session_start();
require_once '../helper/connection.php';

$matkul = $_POST['matkul'];
$kelas = $_POST['kelas'];
$sks = $_POST['sks'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$ruang = $_POST['ruang'];

$query = mysqli_query($connection, "insert into krs (matkul, kelas, sks, hari, jam, ruang) value('$matkul', '$kelas', '$sks', '$hari', '$jam', '$ruang')");
if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil menambah data'
  ];
  header('Location: ./index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./index.php');
}
