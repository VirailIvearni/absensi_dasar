<!DOCTYPE html>
<html>
    <head>
    <title>Data Siswa </title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body style="background-color: #9E9AFB;">
        <header style="margin-top: 30px; margin-bottom: 25px;">
            <h2 style="text-align: center;">ABSENSI DATA SISWA</h2>
        </header>
        <form style="padding-left: 75px;" action="prosespendaftaran.php" method="POST">
            
            <p style="margin-top:20px;">
                <label for="tanggal" style="font-family: monospace; font-size: 25px;">Tanggal </label><br>
                <input style="border-radius: 10px; width: 60%; height: 45px;" type="date" name="tanggal" id="tanggal"/>
            </p>
            <p>
                <label for="nis" style="font-family: monospace; font-size: 25px;">NIS </label><br>
                <input style="border-radius: 10px; width: 60%; height: 45px;" type="int" name="nis" id="nis" placeholder="Masukkan NIS" />
            </p>
            <p>
                <label for="nama" style="font-family: monospace; font-size: 25px;">Nama </label><br>
                <input style="border-radius: 10px; width: 60%; height: 45px;" type="text" name="nama" id="nama" placeholder="Masukkan nama lengkap" />
            </p>
            <p>
                <label for="absensi" style="font-family: monospace; font-size: 25px;">Absensi </label><br>
                <label class="form-control">
                    <input type="radio" name="absensi" value="hadir">
                    Hadir
                </label>
                <label class="form-control">
                    <input type="radio" name="absensi" value="izin">
                    Izin
                </label>
                <label class="form-control">
                    <input type="radio" name="absensi" value="sakit">
                    Sakit
                </label>
            </p>

            <a href="index.php" type="button" id="kembali" class="btn btn-success">Kembali</a>
            <input type="submit" value="Absen" name="absen" id="absen"/>

        </form>
    </body>
</html>