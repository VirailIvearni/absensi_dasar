<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: listsiswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM absen_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="css/edit.css">
</head>

<body style="background-color: #9E9AFB;">
        <header style="margin-top: 30px; margin-bottom: 25px;">
            <h2 style="text-align: center;">ABSENSI DATA SISWA</h2>
        </header>
        
        <form style="padding-left: 75px;" action="prosesedit.php" method="POST">
          <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

            <p>
            <label for="tanggal" style="font-family: monospace; font-size: 25px;">Tanggal </label><br>
                <input style="border-radius: 10px; width: 60%; height: 45px;" type="date" name="tanggal" id="tanggal"/>
            </p><br>
            <p>
                <label for="nis" style="font-family: monospace; font-size: 25px;">NIS </label><br>
                <input style="border-radius: 10px; width: 60%; height: 45px;" type="int" name="nis" id="nis" placeholder="Masukkan NIS" />
            </p><br>
            <p>
                <label for="nama" style="font-family: monospace; font-size: 25px;">Nama </label><br>
                <input style="border-radius: 10px; width: 60%; height: 45px;" type="text" name="nama" id="nama" placeholder="Masukkan nama lengkap" />
            </p><br>
            <p>
                <label for="absensi" style="font-size:25px;">Absensi </label><br>
                <?php $absensi = $siswa['Absensi']; ?>
                <label style="font-size:20px;"><input type="radio" name="absensi" value="hadir" <?php echo ($absensi == 'hadir') ? "checked": "" ?>> Hadir</label>
                <label style="font-size:20px;"><input type="radio" name="absensi" value="izin" <?php echo ($absensi == 'izin') ? "checked": "" ?>> Izin</label>
                <label style="font-size:20px;"><input type="radio" name="absensi" value="sakit" <?php echo ($absensi == 'sakit') ? "checked": "" ?>> Sakit</label>
            </p><br>

                <a href="listsiswa.php" type="button" id="kembali" class="btn btn-success"> Kembali</a>
                <input type="submit" value="Simpan" name="simpan" id="simpan">

        </form>

    </body>
</html>