<?php
require_once 'config/database.php';
include 'includes/header.php';

$query = "SELECT * FROM mahasiswa ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>

<div class="content">
    <h2>Daftar Mahasiswa</h2>
    <a href="tambah.php" class="btn btn-tambah">+ Tambah Mahasiswa Baru</a>
    
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            while($row = mysqli_fetch_assoc($result)): 
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['nim'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['prodi'] ?></td>
                <td>
                    <a href="detail.php?id=<?= $row['id'] ?>" class="btn btn-detail">Detail</a>
                    <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-edit">Edit</a>
                    <a href="proses_hapus.php?id=<?= $row['id'] ?>" class="btn btn-hapus" 
                       onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<?php include 'includes/footer.php'; ?>