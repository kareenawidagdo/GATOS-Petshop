<?php
    include_once("koneksi.php");

    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM pets WHERE id = '$id' ");
    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data</title>
    <link rel="icon" href="favicon.ico">
    <style>
        .form-baru {
            font-family: Segoe UI;
            border: 3px solid #4B0082;
            padding: 10px 15px;
        }
        .garis {
            border: 3px solid #4B0082;
            padding: 10px;
            width: 300px;
        }
        .edit {
            font-size: 30px;
            font-weight: bolder;
            color: red;
            background-color: white;
        }
        .btn {
            background-color: black;
            border: none;
            padding: 7px 10px;
            color: white;
            text-align: center;
            text-decoration: none;
            font-size: 12px;
            border-radius:0.5em;
        }
        body {
            margin-left: 39%;
            margin-top: 3.5%;
        }
    </style>
</head>
<body bgcolor="#E6E6FA">
    <div class="garis">
        <center>
            <p class="edit">Edit Data</p>
        </center>
        <div class="form-baru">
            <form action="prosesEdit.php?id=<?php echo $id;?>" method="POST">
                <p>
                    <label>Nama</label><br>
                    <input type="text" name="nama" value="<?php echo $row['nama']?>">
                </p>
                <p>
                    <label>Jenis Hewan</label><br>
                    <input type="text" name="jenis" value="<?php echo $row['jenis']?>">
                </p>
                <p>
                    <label>Pemilik Hewan</label><br>
                    <input type="text" name="pemilik" value="<?php echo $row['pemilik']?>">
                </p>
                <p>
                    <label>Order</label><br>
                    <input type="text" name="orderan" value="<?php echo $row['orderan']?>">
                </p>
                <p>
                    <label>Keterangan</label><br>
                    <input type="text" name="keterangan" value="<?php echo $row['keterangan']?>">
                </p>
                <p>
                    <input type="submit" name="tombol-add" value="Edit Data" class="btn">
                </p>
            </form>
        </div>
</body>
</html>