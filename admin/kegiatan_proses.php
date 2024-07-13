<?php
include('_koneksi.php');

$sql = "";

//Seluruh Variabel Kolom
$id = '';
$nama = '';
$kegiatan = '';
$waktu = '';


$pesan = 'Kegiatan';
$aksi = 'success';
if (isset($_POST['mode'])) {
    //Seluruh Variabel Kolom yang terdaftar dan dikirm dari form
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kegiatan = $_POST['kegiatan'];
    $waktu = $_POST['waktu'];

    if ($_POST['mode'] == 'tambah') {
        $sql = "INSERT INTO kegiatan(
                    nama,
                    kegiatan,
                    waktu
                ) VALUES(
                    '" . $nama . "',
                    '" . $kegiatan . "',
                    '" . $waktu . "'
                    )";
        $pesan = "Tambah " . $pesan;

    } else if ($_POST['mode'] == 'edit') {
        $sql = "UPDATE kegiatan SET
                    nama = '" . $nama . "',
                    kegiatan = '" . $kegiatan . "',
                    waktu = '" . $waktu . "'
                WHERE id = " . $id;
        $pesan = "Update " . $pesan;
    }
}

if (isset($_GET['mode']) && $_GET['mode'] == 'hapus') {
    $id = $_GET['id'];
    $sql = "DELETE FROM kegiatan WHERE id=" . $id;
    $pesan = "Hapus " . $pesan;
}


//Jika error, ketik tanda /* di baris di bawah ini
if (mysqli_query($conn, $sql)) {
    $pesan = "Berhasi " . $pesan;
} else {
    $pesan = "Gagal " . $pesan;
    $aksi = 'error';
}

header('location:kegiatan.php?aksi=' . $aksi . '&pesan=' . $pesan);

//Jika error, ketik tanda */ di baris di atas ini

echo $sql;
?>
