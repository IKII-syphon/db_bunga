<?php include 'includes/header.php'; ?>

<div class="content">
    <h2>Tambah Data Mahasiswa</h2>
    
    <form action="proses_tambah.php" method="POST">
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" required>
        </div>
        
        <div class="form-group">
            <label>NIM</label>
            <input type="text" name="nim" required>
        </div>
        
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" required>
        </div>
        
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" required></textarea>
        </div>
        
        <div class="form-group">
            <label>Program Studi</label>
            <input type="text" name="prodi" required>
        </div>
        
        <button type="submit" class="btn btn-tambah">Simpan Data</button>
        <a href="index.php" class="btn btn-kembali">Kembali</a>
    </form>
</div>

<?php include 'includes/footer.php'; ?>