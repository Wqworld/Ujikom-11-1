<?php
include("koneksi.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Mendapatkan input dan melakukan sanitasi

        $name = $_POST['NM_user'];
        $pass = $_POST['PS_user'];

        $cari = "select role from admin where uName = '$name' AND pass = '$pass'";
        $hasil = mysqli_query($koneksi,$cari);
        $nama_admin = mysqli_query($koneksi,"select nama_admin from admin where uName = '$name'");
            $user = $hasil -> fetch_assoc();
            $_SESSION['role'] = $user['role'];
            
            if ($user['role'] == 'admin') {
                session_start();
                echo "<script> alert('selamat datang'); window.location.href='dashboard.php';</script>";
                $_SESSION['login'] = "asup";
            }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dziqqir</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <!-- <a href="#">Waqqir Humaid</a> -->
            <!-- <img src="style/assets/Dziqqir Logo.png" alt="Logo-Dziqqir" class="logo" > -->
            <img src="../style/assets/Dziqqir Logo.png" alt="Judul-Dziqqir">
        </div>
        <div class="burger-menu" id="burger-menu" onclick="">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <ul class="navbar-list" id="navbar-list">
            <li><a href="../index.php" class="nav-link">Batal</a></li>
            <!-- <li><a href="#tentang" class="nav-link">Tentang Kami</a></li> -->
        </ul>
    </nav>

    <div class="form-login">
        <h1 class="judul-login">Login Admin</h1>

<form action="#" method="POST">
            <table class="pilih-opsi">


                <tr>
                    <td class="input_form"><h5>Username</h5> <input type="text" name="NM_user" placeholder="Nama anda" required></td>
                </tr>

                <tr>
                    <td class="input_form"><h5>Password</h5> <input type="password" name="PS_user" placeholder="Password anda" required></td>
                </tr>

                <tr>
                    <td class="input_form">
                        <input type="submit">
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





            <!-- <div class="slider">
                <div class="list">  
                    <div class="item">
                        <img src="style/assets/Dziqqir Logo domba.png" alt="gambar-belakang">
                    </div>
                    <div class="item">
                        <img src="style/assets/2.jpg" alt="gambar-belakang">
                    </div>
                    <div class="item">
                        <img src="style/assets/3.jpg" alt="gambar-belakang">
                    </div>
                    <div class="item">
                        <img src="style/assets/4.jpg" alt="gambar-belakang">
                    </div>
                    <div class="item">
                        <img src="style/assets/5.jpg" alt="gambar-belakang">
                    </div>
                    <div class="item">
                        <img src="style/assets/6.jpg" alt="gambar-belakang">
                    </div>

                    <div class="buttons">
                        <button id="prev"><</button
                        <button id="next">next</button>
                    </div>

                    <ul class="dots">
                        <li class="active"></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div> -->