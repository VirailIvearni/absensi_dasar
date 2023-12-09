<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['absen'])){

    // ambil data dari formulir
    $tanggal = $_POST['tanggal'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $absensi = $_POST['absensi'];

    // buat query
    $sql = "INSERT INTO absen_siswa (tanggal, nis, nama, absensi) VALUE ('$tanggal', '$nis', '$nama', '$absensi')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}
if(isset($_POST['kembali'])){
    }

?>