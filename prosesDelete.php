<?php
    include_once('koneksi.php');

    $id = $_GET['id'];
    $query = "DELETE FROM pets WHERE id = '$id' ";
    mysqli_query($koneksi,$query);

    header("Location: tampilan.php?v1=Berhasil delete");
?>