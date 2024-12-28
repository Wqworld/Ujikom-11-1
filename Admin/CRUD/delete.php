<?php
include( "../koneksi.php");
    $id = $_GET['id'];
    $delete_sql = "DELETE FROM produk WHERE id_produk = '$id'";
    if (mysqli_query($koneksi, $delete_sql)) {
        echo "<script>alert('Data berhasil dihapus'); window.location.href='../dashboard.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data');</script>";
    }
?>