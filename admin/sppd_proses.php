<?php
include('_koneksi.php');

$sql = "";

//Seluruh Variabel Kolom
$id = '';
$nomor = '';
$tanggal = '';
$nama = '';
$jabatan = '';
$tujuan = '';
$berangkat = '';
$kembali = '';
$ket = '';

$pesan = 'Sppd';
$aksi = 'success';
if (isset($_POST['mode'])) {
    //Seluruh Variabel Kolom yang terdaftar dan dikirm dari form
    $id = $_POST['id'];
    $nomor = $_POST['nomor'];
    $tanggal = $_POST['tanggal'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $tujuan = $_POST['tujuan'];
    $berangkat = $_POST['berangkat'];
    $kembali = $_POST['kembali'];
    $ket = $_POST['ket'];

    if ($_POST['mode'] == 'tambah') {
        $sql = "INSERT INTO sppd(
                    nomor,
                    tanggal,
                    nama,
                    jabatan,
                    tujuan,
                    berangkat,
                    kembali,
                    ket
                ) VALUES(
                    '" . $nomor . "',
                    '" . $tanggal . "',
                    '" . $nama . "',
                    '" . $jabatan . "',
                    '" . $tujuan . "',
                    '" . $berangkat . "',
                    '" . $kembali . "',
                    '" . $ket . "'
                    )";
        $pesan = "Tambah " . $pesan;

    } else if ($_POST['mode'] == 'edit') {
        $sql = "UPDATE sppd SET
                    nomor = '" . $nomor . "',
                    tanggal = '" . $tanggal . "',
                    nama = '" . $nama . "',
                    jabatan = '" . $jabatan . "',
                    tujuan = '" . $tujuan . "',
                    berangkat = '" . $berangkat . "',
                    kembali = '" . $kembali . "',
                    ket = '" . $ket . "'
                WHERE id = " . $id;
        $pesan = "Update " . $pesan;
    }
}

if (isset($_GET['mode']) && $_GET['mode'] == 'hapus') {
    $id = $_GET['id'];
    $sql = "DELETE FROM sppd WHERE id=" . $id;
    $pesan = "Hapus " . $pesan;
}


//Jika error, ketik tanda /* di baris di bawah ini
if (mysqli_query($conn, $sql)) {
    $pesan = "Berhasi " . $pesan;
} else {
    $pesan = "Gagal " . $pesan;
    $aksi = 'error';
}

header('location:sppd.php?aksi=' . $aksi . '&pesan=' . $pesan);

//Jika error, ketik tanda */ di baris di atas ini

echo $sql;
?>
