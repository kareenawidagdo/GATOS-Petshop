<?php
    include_once('koneksi.php');

    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $pemilik = $_POST['pemilik'];
    $orderan = $_POST['orderan'];
    $ket = $_POST['keterangan'];

    $id = $_GET['id'];
    $query = "UPDATE pets SET nama = '$nama', jenis = '$jenis', pemilik = '$pemilik', orderan = '$orderan', keterangan = '$ket' WHERE id = '$id' ";
    mysqli_query($koneksi,$query);

    header("Location: tampilan.php?v1=Berhasil update");
?>