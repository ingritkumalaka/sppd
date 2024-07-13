<?php
include('_koneksi.php');

$sql = "";

//Seluruh Variabel Kolom
$id = '';
$nomor = '';
$tanggal = '';
$nama = '';
//**AWAL BLOK KHUSUS UNTUK FILE
include('_fungsi_file.php'); //Include Fungsi File
$dokumen = '';
$dokumen_file = '';

$status_upload = false;
$status_hapus = false;
//**AKHIR BLOK KHUSUS UNTUK FILE//Khusus untuk File
$jabatan = '';
$kegiatan = '';

$pesan = 'Laporan';
$aksi = 'success';
if (isset($_POST['mode'])) {
    //Seluruh Variabel Kolom yang terdaftar dan dikirm dari form
    $id = $_POST['id'];
    $nomor = $_POST['nomor'];
    $tanggal = $_POST['tanggal'];
    $nama = $_POST['nama'];

    //**AWAL BLOK KHUSUS UNTUK FILE
    if(trim($_FILES['dokumen']['name']) != null){
        $dokumen = $_FILES['dokumen']['name'];
        $dokumen_file = $_FILES['dokumen'];
        $status_upload = true;
    } else {
        $file = $_POST['file_old'];
        $status_upload = false;
    }
    //**AKHIR BLOK KHUSUS UNTUK FILE
    $jabatan= $_POST['jabatan'];
    $kegiatan = $_POST['kegiatan'];

    if ($_POST['mode'] == 'tambah') {
        $sql = "INSERT INTO laporan(
                    nomor,
                    tanggal,
                    nama,
                    dokumen,
                    jabatan,
                    kegiatan
                ) VALUES(
                    '" . $nomor . "',
                    '" . $tanggal . "',
                    '" . $nama . "',
                    '" . $dokumen . "',
                    '" . $jabatan . "',
                    '" . $kegiatan. "'
                    )";
        $pesan = "Tambah " . $pesan;

    } else if ($_POST['mode'] == 'edit') {
        $sql = "UPDATE laporan SET
                    nomor = '" . $nomor . "',
                    tanggal = '" . $tanggal . "',
                    nama = '" . $nama . "',
                    dokumen = '" . $dokumen . "',
                    jabatan = '" . $jabatan . "',
                    kegiatan = '" . $kegiatan . "'
                WHERE id = " . $id;
        $pesan = "Update " . $pesan;
    }
}

if (isset($_GET['mode']) && $_GET['mode'] == 'hapus') {
    $id = $_GET['id'];
    //**AWAL BLOK KHUSUS UNTUK FILE
    $dokumen = $_GET['dokumen'];
    $status_hapus = true;
    //**AKHIR BLOK KHUSUS UNTUK FILE
    $sql = "DELETE FROM laporan WHERE id='" . $id . "'";
    $pesan = "Hapus " . $pesan;
    
}


//Jika error, ketik tanda /* di baris di bawah ini

if (mysqli_query($conn, $sql)) {
    $pesan = "Berhasi " . $pesan;

    //**AWAL BLOK KHUSUS UNTUK FILE
    if($status_upload == true){
        fungsi_upload_file($dokumen_file);
    }
    if($status_hapus == true){
        fungsi_hapus_file($dokumen);   }
    //**AKHIR BLOK KHUSUS UNTUK FILE

} else {
    $pesan = "Gagal " . $pesan;
    $aksi = 'error';
}

header('location:laporan.php?aksi=' . $aksi . '&pesan=' . $pesan);

//Jika error, ketik tanda */ di baris di atas ini

echo $sql;
?>
