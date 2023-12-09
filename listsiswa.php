<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_pendaftar.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Data Siswa</title>
    <style>
        /* Gaya Tabel */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        /* Gaya Tombol Edit dan Hapus */
        .btn-edit, .btn-delete {
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-edit {
            background-color: #4CAF50;
            color: #fff;
            margin-right: 8px;
        }

        .btn-delete {
            background-color: #f44336;
            color: #fff;
        }
    </style>
</head>
<body>
    
</body>
</html>
<body>
<div class="container">
    <header>
        <h3>ABSEN SISWA</h3>
    </header>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Absensi</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM absen_siswa";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['Tanggal']."</td>";
            echo "<td>".$siswa['NIS']."</td>";
            echo "<td>".$siswa['Nama']."</td>";
            echo "<td>".$siswa['Absensi']."</td>";

            echo "<td>";
            echo "<a href='formedit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>
    </tbody>
    <tfoot><th colspan="7" style="text-align:left;">Total: <?php echo mysqli_num_rows($query) ?></th></tfoot>
    </table>

    <!--<p>Total: <?php echo mysqli_num_rows($query) ?></p>-->
    <nav>
        <a href="index.php" type="button" style="margin: 10px 0" id="kembali" class="btn btn-success">Kembali</a>
    </nav>
    </div>
    </body>
</html>