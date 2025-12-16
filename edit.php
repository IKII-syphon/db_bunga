<?php
require_once 'config/database.php';
include 'includes/header.php';

$id = $_GET['id'];
$query = "SELECT * FROM mahasiswa WHERE id = $id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
?>

<div class="content">
    <h2>Edit Data Mahasiswa</h2>
    
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" value="<?= $data['nama'] ?>" required>
        </div>
        
        <div class="form-group">
            <label>NIM</label>
            <input type="text" name="nim" value="<?= $data['nim'] ?>" required>
        </div>
        
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" value="<?= $data['tanggal_lahir'] ?>" required>
        </div>
        
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" required><?= $data['alamat'] ?></textarea>
        </div>
        
        <div class="form-group">
            <label>Program Studi</label>
            <input type="text" name="prodi" value="<?= $data['prodi'] ?>" required>
        </div>
        
        <button type="submit" class="btn btn-tambah">Update Data</button>
        <a href="index.php" class="btn btn-kembali">Kembali</a>
    </form>
</div>

<?php include 'includes/footer.php'; ?>