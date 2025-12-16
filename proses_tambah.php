<?php
require_once 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $nim = mysqli_real_escape_string($conn, $_POST['nim']);
    $tanggal_lahir = mysqli_real_escape_string($conn, $_POST['tanggal_lahir']);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
    $prodi = mysqli_real_escape_string($conn, $_POST['prodi']);
    
    $query = "INSERT INTO mahasiswa (nama, nim, tanggal_lahir, alamat, prodi) 
              VALUES ('$nama', '$nim', '$tanggal_lahir', '$alamat', '$prodi')";
    
    if (mysqli_query($conn, $query)) {
        header('Location: index.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>