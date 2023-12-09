<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $tanggal = $_POST['tanggal'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $absensi = $_POST['absensi'];

    // buat query update
    $sql = "UPDATE absen_siswa SET tanggal='$tanggal', nis='$nis', nama='$nama', absensi='$absensi' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: listsiswa.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>