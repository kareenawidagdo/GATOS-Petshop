<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Baru | GATOS Petshop</title>
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
        .add {
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
            margin-top: 2.5%;
        }
    </style>
</head>
<body bgcolor="#E6E6FA">
    <div class="garis">
        <center>
            <p class="add">Tambah Data</p>
        </center>
        <div class="form-baru">
            <form action="prosesBaru.php" method="POST">
                <p>
                    <label>Nama</label><br>
                    <input type="text" name="nama" placeholder="Enter name.."><br>
                </p>
                <p>
                    <label>Jenis Hewan</label><br>
                    <input type="text" name="jenis" placeholder="Enter species.."><br>
                </p>
                <p>
                    <label>Pemilik Hewan</label><br>
                    <input type="text" name="pemilik" placeholder="Enter owner.."><br>
                </p>
                <p>
                    <label>Order</label><br>
                    <input type="text" name="orderan" placeholder="Enter orders.."><br>
                </p>
                <p>
                    <label>Keterangan</label><br>
                    <input type="text" name="keterangan" placeholder="Enter information.."><br><br>
                </p>
                <p>
                    <input type="submit" name="tombol-add" value="Tambah Baru" class="btn">
                </p>
            </form>
        </div>
    </div>
</body>
</html>