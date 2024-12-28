<?php
include("../koneksi.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Mendapatkan input dan melakukan sanitasi
            $id = $_GET['id'];

        $jenis = $_POST['jenis'];
        $berat = $_POST['berat'];
        $status = $_POST['status'];
        $harga = $_POST['harga'];

        // $fileSize = $_FILES["image"]["size"];
        // $tmpName = $_FILES["image"]["tmp_name"];

        // $validImageExtension = ['jpg', 'jpeg', 'png'];
        // $newImageName = uniqid();

        // move_uploaded_file($tmpName, '../../assets/' . $newImageName);
        $cari = "update produk set jenis_produk = '$jenis' , berat_produk = '$berat' , status_produk = '$status' , harga_produk = '$harga' where id_produk = '$id'";
        $hasil = mysqli_query($koneksi, $cari);

        if (!$hasil) {  
            echo "<script>alert('tidak berasil');</script>";
        } else {
            echo "<script>alert('Berasill di tambahkan');  window.location.href='../dashboard.php'</script>";
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
            <li><a href="../index.php" class="nav-link">Batal</a></li>
            <li><a href="../../index.php" class="nav-link">beranda</a></li>
        </ul>
    </nav>

    <div class="form-login">
        <h1 class="judul-login">Tambah Produk</h1>

<form action="#" method="POST">
            <table class="pilih-opsi">
                    <?php
                    include "../koneksi.php";
                    $id = $_GET['id'];
                    $sqldata = "select * from produk where id_produk = '$id'";
                    $hasil = mysqli_query($koneksi, $sqldata);

                    while ($d = mysqli_fetch_array($hasil)) {
                        ?>
                <tr>
                    <td>
                        <label for="jenis">jenis produk :</label>
                        <select name="jenis" id="jenis">
                            <option value="<?php $d['jenis_produk'] ?>"><?php echo $d['jenis_produk'] ?></option>
                            <option value="Domba">Domba</option>
                            <option value="Kambing">Kambing</option>
                            <option value="Sapi">Sapi</option>  
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="berat">berat produk  :</label>
                        <input type="number" name="berat" value="<?php echo $d['berat_produk'] ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="status">status produk  :</label>
                        <select name="status" id="status">
                            <option value="<?php $d['status_produk'] ?>"><?php echo $d['status_produk'] ?></option>
                            <option value="ready">Ready</option>
                            <option value="notready"> Not Ready</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="harga">harga produk :</label>
                        <input type="number" name="harga" value="<?php echo $d['harga_produk'] ?>" required>
                    </td>
                </tr>
                <tr>
                    <td class="input_form">
                        <input type="submit">
                    </td>    
                </tr>
                <?php
                    }
                ?>
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