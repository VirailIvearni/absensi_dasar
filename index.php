<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Data Siswa </title>
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 align="center">DATA SISWA
            <!-- <image src="image/tutwuri.png" alt="absen" align="right" width="3.4%" height="3.4%"></image> -->
            </h1>
        </div>
        <div class="main">
            <div class="left">
                <h3 align="center" style="background-color: pink;">Menu</h3>
                <ul>
                    <li><a href="formdaftar.php" style="text-align:center;">Absen Siswa</a></li>
                    <li><a href="listsiswa.php" style="text-align:center;">Data Siswa</a></li>
                </ul>
            </div>
        </div>
        <td align="middle">
        <center><image src="image/tutwuri.png" alt="absen" width="18%" height="18%"></image></center>
        <h1 align="center"><marquee width="100%" style="margin: 10px" bgcolor="#9E9AFB">
        <?php if(isset($_GET['status'])): ?>
                <?php
                    if($_GET['status'] == 'sukses'){
                        echo "Absensi Siswa Berhasil Ditambahkan!";
                    } else {
                        echo "Absensi Siswa gagal Ditambahkan!";
                    }
                ?>
            <?php endif; ?>
                </marquee></h1>
        </td>        
        </div>
    </div>
</body>
</html>