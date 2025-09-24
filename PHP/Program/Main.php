<?php
require_once "Pelanggan.php";
require_once "PelangganPremium.php";

// Data awal
if (!isset($_SESSION['daftarPelanggan'])) {
    $_SESSION['daftarPelanggan'] = [
        new Pelanggan("11111", "Julia", "Riau", "P001", "081111", "Beli Laptop", "https://static.retailworldvn.com/Products/Images/12217/321630/laptop-lenovo-ideapad-slim-3-14iah8-i5-12450h-16gb-512gb-win11-83eq003jid-blue-1.jpg"),
        new Pelanggan("22222", "Putri", "Medan", "P002", "082222", "Beli HP", "data:image/jpeg;base64,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"),
        new PelangganPremium("33333", "Firda", "Parongpong", "P003", "083333", "Beli TV", "data:image/jpeg;base64,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", "Platinum", 20, 300),
        new PelangganPremium("44444", "Shakila", "Bandung", "P004", "084444", "Beli Kamera", "https://sentradigital.com/images/Article/NewsDetail-202401/40857/kamera-dslr-26115039734-small.webp", "Emas", 15, 400),
        new PelangganPremium("55555", "Farah", "Depok", "P005", "085555", "Beli Kamera", "https://sentradigital.com/images/Article/NewsDetail-202401/40857/kamera-dslr-26115039734-small.webp", "Perak", 10, 250)
    ];
}
// Jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $noktp = $_POST["noktp"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $id = $_POST["id"];
    $telp = $_POST["telp"];
    $riwayat = $_POST["riwayat"];
    $jenis = $_POST["jenis"];

    // Upload file foto
    $fotoProduk = "";
    if (isset($_FILES["foto"]) && $_FILES["foto"]["error"] == 0) {
        $targetDir = "uploads/";
        if (!is_dir($targetDir)) mkdir($targetDir);
        $targetFile = $targetDir . basename($_FILES["foto"]["name"]);
        move_uploaded_file($_FILES["foto"]["tmp_name"], $targetFile);
        $fotoProduk = $targetFile;
    }

    // Jika Premium, ambil input tambahan
    if ($jenis == "premium") {
        $level = $_POST["level"];
        $diskon = intval($_POST["diskon"]);
        $point = intval($_POST["point"]);
        $p = new PelangganPremium($noktp, $nama, $alamat, $id, $telp, $riwayat, $fotoProduk, $level, $diskon, $point);
    } else {
        $p = new Pelanggan($noktp, $nama, $alamat, $id, $telp, $riwayat, $fotoProduk);
    }

    $_SESSION['daftarPelanggan'][] = $p;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Pelanggan</title>
</head>
<body>
    <h2>Tambah Pelanggan</h2>
    <form method="post" enctype="multipart/form-data">
        <label>No KTP: <input type="text" name="noktp" required></label><br>
        <label>Nama: <input type="text" name="nama" required></label><br>
        <label>Alamat: <input type="text" name="alamat" required></label><br>
        <label>ID Pelanggan: <input type="text" name="id" required></label><br>
        <label>No. Telepon: <input type="text" name="telp" required></label><br>
        <label>Riwayat: <input type="text" name="riwayat" required></label><br>
        <label>Foto Produk: <input type="file" name="foto"></label><br>
        <label>Jenis: 
            <select name="jenis">
                <option value="biasa">Biasa</option>
                <option value="premium">Premium</option>
            </select>
        </label><br>
        <!-- Field Premium (tetap muncul) -->
        <label>Level: <input type="text" name="level"></label><br>
        <label>Diskon (%): <input type="number" name="diskon"></label><br>
        <label>Point: <input type="number" name="point"></label><br>
        <button type="submit">Tambah</button>
    </form>

    <h2>Daftar Pelanggan</h2>
    <table border="1" cellpadding="5">
        <tr>
            <th>No</th><th>Nama</th><th>NoKTP</th><th>Alamat</th>
            <th>ID</th><th>Telepon</th><th>Riwayat</th><th>Foto</th>
            <th>Level</th><th>Diskon</th><th>Point</th>
        </tr>
        <?php foreach ($_SESSION['daftarPelanggan'] as $i => $p): ?>
            <tr>
                <td><?= $i+1 ?></td>
                <td><?= $p->getNama() ?></td>
                <td><?= $p->getNoktp() ?></td>
                <td><?= $p->getAlamat() ?></td>
                <td><?= $p->getIdPelanggan() ?></td>
                <td><?= $p->getNoTelp() ?></td>
                <td><?= $p->getRiwayat() ?></td>
                <td><img src="<?= $p->getFotoProduk() ?>" width="80"></td>
                <?php if ($p instanceof PelangganPremium): ?>
                    <td><?= $p->getLevel() ?></td>
                    <td><?= $p->getDiskon() ?>%</td>
                    <td><?= $p->getPoint() ?></td>
                <?php else: ?>
                    <td>-</td><td>-</td><td>-</td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>