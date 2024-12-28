<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dziqqir</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <!-- <a href="#">Waqqir Humaid</a> -->
            <!-- <img src="style/assets/Dziqqir Logo.png" alt="Logo-Dziqqir" class="logo" > -->
            <img src="style/assets/Dziqqir Logo.png" alt="Judul-Dziqqir">
        </div>
        <div class="burger-menu" id="burger-menu" onclick="">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <ul class="navbar-list" id="navbar-list">
            <li><a href="index.php" class="nav-link">Beranda</a></li>
            <!-- <li><a href="index.html" class="nav-link">Tentang Kami</a></li> -->
            <li><a href="Admin/login.php" class="nav-link">login</a></li>
        </ul>
    </nav>

    <article>
        <div class="produk" id="produk">
            <div data-aos="fade-right" data-aos-duration="1000">
                <h3 class="judul-deks">Hewan-Hewan Yang tersedia</h3>
            </div>


            <!-- tambahkan logika jika udah 3 produk tamahkan br -->
            <div class="isi-produk">
            <?php 
                include("Admin/koneksi.php");
                $result = mysqli_query($koneksi, "select * from produk;");
                while ($baris = mysqli_fetch_array($result)) {
                ?>
            <div class="isi-produk">
            <table class="kartu-produk">
                <tr>
                    <td><img src="style/assets/<?php echo $baris['gambar']?>" alt="gambar-domba" class="domba-kaertu"></td>
                </tr>
                <tr>
                    <td class="isi-kartu"><strong>Jenis : </strong><?php echo $baris['jenis_produk']?></td>
                </tr>
                <tr>
                    <td class="isi-kartu"><strong>berat : </strong><?php echo $baris['berat_produk']?></td>
                </tr>
                <tr>
                    <td class="isi-kartu"><strong>status : </strong><?php echo $baris['status_produk'] ?></td>
                </tr>
                <tr>
                    <td class="isi-kartu"><strong>harga : </strong><?php echo $baris['harga_produk'] ?></td>
                </tr>
                <tr>
                    <td><a href="https://wa.me/081111116994" class="WA-WA-WA">Hubungi Admin</a></td>
                </tr>
            </table>
            <?Php
                }
                ?>
            </div>
        </div>

        <h4 class="buat-estetik"><strong>Dziqqir Akikah & Qurban</strong></h4>
    </article>

    <footer>
        &copy; Dibuat oleh Waqqir 2024.
    </footer>

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
                        <button id="prev"><</button>
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