<?php
include("../koneksi.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tambah'])) {
    // Mendapatkan input dan melakukan sanitasi
        $jenis = $_POST['jenis'];
        $berat = $_POST['berat'];
        $status = $_POST['status'];
        $harga = $_POST['harga'];

        $newImageName = $_FILES["image"]["name"];
        $temp = $_FILES["image"]["tmp_name"];

        move_uploaded_file($temp, '../../style/assets/' . $newImageName);
        $cari = "insert into produk values ('','$jenis','$berat','$status','$harga','$newImageName')";
        $hasil = mysqli_query($koneksi, $cari);

        if (!$hasil) {
            echo "<script>alert('tidak berasil')</script>";
        } else {
            echo "<script>alert('Berasill di tambahkan')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dziqqir</title>
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <!-- <a href="#">Waqqir Humaid</a> -->
            <!-- <img src="style/assets/Dziqqir Logo.png" alt="Logo-Dziqqir" class="logo" > -->
            <img src="../../style/assets/Dziqqir Logo.png" alt="Judul-Dziqqir">
        </div>
        <div class="burger-menu" id="burger-menu" onclick="">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <ul class="navbar-list" id="navbar-list">
            <li><a href="../../index.php" class="nav-link">Batal</a></li>
            <li><a href="../dashboard.php" class="nav-link">tambah produk</a></li>
        </ul>
    </nav>

    <div class="form-login">
        <h1 class="judul-login">Tambah Produk</h1>

<form action="#" method="POST" enctype="multipart/form-data">
            <table class="pilih-opsi">
                <tr>
                    <td>
                        <label for="jenis">jenis produk :</label>
                        <select name="jenis" id="jenis" required>
                            <option selected disabled>silahkan pilih</option>
                            <option value="Domba">Domba</option>
                            <option value="Kambing">Kambing</option>
                            <option value="Sapi">Sapi</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="berat">berat produk  :</label>
                        <input type="number" name="berat" placeholder="berat produk" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="status">status produk  :</label>
                        <select name="status" id="status" required>
                            <option selected disabled>status prosuk</option>
                            <option value="ready">Ready</option>
                            <option value="notready"> Not Ready</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="harga">harga produk :</label>
                        <input type="number" name="harga" placeholder="harga produk" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="gambar">gambar</label>
                        <input type="file" name="image" required>
                    </td>
                </tr>
                <tr>
                    <td class="input_form">
                        <input type="submit" name="tambah">
                    </td>    
                </tr>
            </table>
        </form>
    </div>

    <script src="script/main.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>