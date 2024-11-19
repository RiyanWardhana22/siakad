<?php
session_start();
require_once '../helper/connection.php';

$kode_matkul = $_POST['kode_matakuliah'];
$matkul = $_POST['nama_matakuliah'];
$kelas = $_POST['kelas'];
$sks = $_POST['sks'];
$grade = $_POST['grade'];

$query = mysqli_query($connection, "insert into khs (kode_matakuliah, nama_matakuliah, kelas, sks, grade) value('$kode_matkul', '$matkul', '$kelas', '$sks', '$grade')");

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
