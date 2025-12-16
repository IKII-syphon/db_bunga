<?php
require_once 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $nim = mysqli_real_escape_string($conn, $_POST['nim']);
    $tanggal_lahir = mysqli_real_escape_string($conn, $_POST['tanggal_lahir']);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
    $prodi = mysqli_real_escape_string($conn, $_POST['prodi']);
    
    $query = "UPDATE mahasiswa SET 
              nama = '$nama',
              nim = '$nim',
              tanggal_lahir = '$tanggal_lahir',
              alamat = '$alamat',
              prodi = '$prodi'
              WHERE id = $id";
    
    if (mysqli_query($conn, $query)) {
        header('Location: index.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>