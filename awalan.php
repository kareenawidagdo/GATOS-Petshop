<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to GATOS Petshop</title>
    <link rel="icon" href="favicon.ico">
    <style>
        .judul {
            color: #2F4F4F;
            font-weight: 1000;
            font-size: 80px;
        }
        .di {
            color: #2F4F4F;
            font-weight: 700;
            font-size: 60px;
        }
        .gatos {
            color: #2F4F4F;
            font-weight: 700;
            font-size: 70px;
            background-color: white;
            width: 1000px;
        }
        .layanan {
            color: #8B4513;
            font-family: Segoe UI;
            font-size: 20px;
            font-weight: bold;
        }
        .btn {
            background-color: white;
            border: none;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            border-radius:2.5em;
        }
        .btn:hover {
            background-color: #ECEAE4;
            border: none;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            border-radius:2.5em;
            font-weight: bold;
        }
        .welcome {
            margin-top: 6%;
        }
        .logout {
            margin-left: 91%;
            margin-top: 20px;
        }
        .keluar {
            text-decoration: none;
            font-family: Segoe UI;
            color: #2F4F4F;
            background-color: #ECEAE4;
            width: 100px;
            border: none;
            padding: 10px 10px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            border-radius:2.5em;
        }
        .keluar:hover {
            text-decoration: none;
            font-family: Segoe UI;
            color: white;
            background-color: #55CBCD;
            width: 100px;
            border: none;
            padding: 10px 10px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            border-radius:2.5em;
        }
    </style>
</head>
<body bgcolor="#B0E0E6">
    <div class="logout">
        <a href="login.php?pesan=logout">
            <button class="keluar">Log Out</button>
        </a>
    </div>
    <div class="welcome">
        <center>
            <div class="judul">SELAMAT DATANG</div>
            <div class="di">di</div>
            <div class="gatos">GATOS Pet Shop</div>
            <p class="layanan">Menyediakan Pet Shop, Pet Hotel, Pet Clinic, Pet Photos, Pet SPA, etc.</p>
            <p>
                <a href="formBaru.php">
                    <button class="btn">Tambah</button>
                </a>
                &emsp;
                <a href="tampilan.php">
                    <button class="btn">Lihat</button>
                </a>
            </p>
        </center>
    </div>
</body>
</html>