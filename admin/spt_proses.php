<?php
include('_koneksi.php');

$sql = "";

//Seluruh Variabel Kolom
$id = '';
$tahun = '';
$nomor = '';
$nama = '';
$jabatan = '';
$kategori = '';
$tujuan = '';
$transportasi = '';
$berangkat = '';
$sampai = '';
$kegiatan = '';
//**AWAL BLOK KHUSUS UNTUK FILE
include('_fungsi_file.php'); //Include Fungsi File
$dokumen = '';
$dokumen_file = '';

$status_upload = false;
$status_hapus = false;
//**AKHIR BLOK KHUSUS UNTUK FILE//Khusus untuk File
$post = '';

$pesan = 'SPT';
$aksi = 'success';
if (isset($_POST['mode'])) {
    //Seluruh Variabel Kolom yang terdaftar dan dikirm dari form
    $id = $_POST['id'];
    $tahun = $_POST['tahun'];
    $nomor = $_POST['nomor'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $kategori = $_POST['kategori'];
    $tujuan = $_POST['tujuan'];
    $transportasi = $_POST['transportasi'];
    $berangkat = $_POST['berangkat'];
    $sampai = $_POST['sampai'];
    $kegiatan = $_POST['kegiatan'];

    //**AWAL BLOK KHUSUS UNTUK FILE
    if(trim($_FILES['dokumen']['name']) != null){
        $dokumen = $_FILES['dokumen']['name'];
        $dokumen_file = $_FILES['dokumen'];

        $status_upload = true;
    } else {
        $dokumen = $_POST['dokumen_old'];
        $status_upload = false;
    }
    //**AKHIR BLOK KHUSUS UNTUK FILE
    $post = $_POST['post'];

    if ($_POST['mode'] == 'tambah') {
        $sql = "INSERT INTO spt(
                    tahun,
                    nomor,
                    nama,
                    jabatan,
                    kategori,
                    tujuan,
                    transportasi,
                    berangkat,
                    sampai,
                    kegiatan,
                    dokumen,
                    post

                ) VALUES(
                    '" . $tahun . "',
                    '" . $nomor . "',
                    '" . $nama . "',
                    '" . $jabatan . "',
                    '" . $kategori . "',
                    '" . $tujuan . "',
                    '" . $transportasi . "',
                    '" . $berangkat . "',
                    '" . $sampai . "',
                    '" . $kegiatan. "',
                    '" . $dokumen . "',
                    '" . $post. "'
                    
                    )";
        $pesan = "Tambah " . $pesan;

    } else if ($_POST['mode'] == 'edit') {
        $sql = "UPDATE spt SET
                    tahun= '" . $tahun . "',
                    nomor = '" . $nomor . "',
                    nama = '" . $nama . "',
                    jabatan = '" . $jabatan . "',
                    kategori = '" . $kategori . "',
                    tujuan = '" . $tujuan . "',
                    transportasi = '" . $transportasi . "',
                    berangkat = '" . $berangkat . "',
                    sampai = '" . $sampai . "',
                    kegiatan = '" . $kegiatan . "',
                    dokumen = '" . $dokumen . "',
                    post = '" . $post . "'
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
    $sql = "DELETE FROM spt WHERE id='" . $id . "'";
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

header('location:spt.php?aksi=' . $aksi . '&pesan=' . $pesan);

//Jika error, ketik tanda */ di baris di atas ini

echo $sql;
?>
