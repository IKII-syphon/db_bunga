<?php
require_once 'config/database.php';
include 'includes/header.php';

$id = $_GET['id'];
$query = "SELECT * FROM mahasiswa WHERE id = $id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
?>

<div class="content">
    <h2>Detail Data Mahasiswa</h2>
    
    <div class="detail-box">
        <div class="detail-row">
            <div class="detail-label">Nama Lengkap</div>
            <div class="detail-value"><?= $data['nama'] ?></div>
        </div>
        <div class="detail-row">
            <div class="detail-label">NIM</div>
            <div class="detail-value"><?= $data['nim'] ?></div>
        </div>
        <div class="detail-row">
            <div class="detail-label">Tanggal Lahir</div>
            <div class="detail-value"><?= date('d F Y', strtotime($data['tanggal_lahir'])) ?></div>
        </div>
        <div class="detail-row">
            <div class="detail-label">Alamat</div>
            <div class="detail-value"><?= nl2br($data['alamat']) ?></div>
        </div>
        <div class="detail-row">
            <div class="detail-label">Program Studi</div>
            <div class="detail-value"><?= $data['prodi'] ?></div>
        </div>
    </div>
    
    <a href="edit.php?id=<?= $data['id'] ?>" class="btn btn-edit">Edit Data</a>
    <a href="index.php" class="btn btn-kembali">Kembali</a>
</div>

<?php include 'includes/footer.php'; ?>