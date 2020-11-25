<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="icon" href="favicon.ico">
    <style>
        .login {
            width: 200pt;
            height:200pt;
            margin-left: 39%;
            margin-top: 10%;
            padding: 20px;
            border: 2pt solid #4B0082;
        }
        .eror {
            font-style: italic;
            color: red;
            font-weight: bold;
            padding: 10pt;
            width: 200pt;
            margin-left:39%;
        }
        .isi {
            font-family: Segoe UI;
        }
        .btn {
            background-color: #CBAACB;
            border: none;
            padding: 7px 10px;
            text-align: center;
            text-decoration: none;
            font-size: 12px;
            border-radius:0.5em;
            font-weight: bold;
        }
    </style>
</head>
<body bgcolor="#E6E6FA">
    <div class="login">
        <p style="font-size: 30px; font-weight: bolder;">LOGIN</p>
        <div class="isi">
            <form action="cek_login.php" method="post">
                <p>Username<br>
                    <input type="text" name="username" placeholder="Enter username..">
                </p>
                <p>Password<br>
                    <input type="password" name="password" placeholder="Enter password..">
                </p>
                <p>
                    <input type="submit" value="Log In" class="btn">
                </p>
            </form>
        </div>
    </div>
    <br/>
    <!-- cek pesan notifikasi -->
    <div class="eror">
            <?php 
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "gagal"){
                    echo "Login gagal! username dan password salah!";
                }else if($_GET['pesan'] == "logout"){
                    echo "Anda telah berhasil logout";
                }
            }
            ?>
    </div>
</body>
</html>