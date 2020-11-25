<?php
    include_once("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Data | GATOS Petshop</title>
    <link rel="icon" href="favicon.ico">
    <style>
        table {
            font-family: Segoe UI;
            font-size: 20px;
        }
        a {
            text-decoration: none;
        }
        .opsi {
            text-align: center;
            width: 85px;
            background-color: #FFDBCC;
        }
        .opsi a {
            color: brown;
            font-weight: 500;
        }
        .opsi a:hover {
            color: red;
            font-weight: 500;
            background-color: white;
        }
        .judul {
            font-size: 40px;
            font-weight: bolder;
            color: #8B0000;
        }
        .back {
            background-color: black;
            border: none;
            padding: 10px;
            color: white;
            text-align: center;
            text-decoration: none;
            font-size: 14px;
            border-radius:0.5em;
        }
    </style>
</head>
<body bgcolor="#F0F0F0">
    <center>
        <p class="judul">•΅•΅•΅&emsp;GATOS Petshop&emsp;΅•΅•΅•</p>
        <table border="1" cellspacing="0" cellpadding="5" bgcolor="#CCE2CB">
            <tr style="background-color: #B6CFB6; color: black;">
                <th>No.</th>
                <th width="100px">Nama</th>
                <th width="150px">Jenis Hewan</th>
                <th width="100px">Pemilik</th>
                <th width="150px">Orderan</th>
                <th width="120px">Keterangan</th>
                <th colspan="2" width="170px" style="background-color: #FF968A">Options</th>
            </tr>
            <?php
                $query = mysqli_query($koneksi, "SELECT * FROM pets");

                $no = 1;
                while($row = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td align='center'>$no</td>
                    <td>$row[nama]</td>
                    <td>$row[jenis]</td>
                    <td>$row[pemilik]</td>
                    <td>$row[orderan]</td>
                    <td align='center'>$row[keterangan]</td>
                    <td class='opsi'><a href='formEdit.php?id=$row[id]';>Edit</a></td>
                    <td class='opsi'><a href='prosesDelete.php?id=$row[id]';>Delete</a></td>";
                    echo "</tr>";
                    $no++;
                }
            ?>
        </table>
        <p>
            <a href="awalan.php">
                <button class="back">Back to Home</button>
            </a>
        </p>
    </center>
</body>
</html>