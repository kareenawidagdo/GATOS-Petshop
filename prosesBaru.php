<?php
    include_once('koneksi.php');

    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $pemilik = $_POST['pemilik'];
    $orderan = $_POST['orderan'];
    $ket = $_POST['keterangan'];

    $query = "INSERT INTO pets (nama, jenis, pemilik, orderan, keterangan) VALUES ('$nama','$jenis','$pemilik','$orderan','$ket')";
    mysqli_query($koneksi,$query);

    header("Location: tampilan.php?v1=Berhasil ditambahkan");
?>