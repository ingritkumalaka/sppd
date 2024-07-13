<?php
include('_koneksi.php');

$mode = 'tambah';
$cap = 'Tambah';
$_nama_file_proses = 'laporan_proses.php';

// Variabel untuk menyimpan data form
$id = '';
$nomor = '';
$tanggal = '';
$nama = '';
$dokumen = '';
$dokumen_old = ''; // Menambah variabel untuk menyimpan nama file dokumen lama
$jabatan = '';
$kegiatan = '';

// Jika mode edit, ambil data laporan dari database
if (isset($_GET['mode']) && $_GET['mode'] == 'edit' && isset($_GET['id'])) {
    $mode = 'edit';
    $cap = 'Update';

    $id = $_GET['id'];

    $sql = "SELECT * FROM laporan WHERE id = '" . mysqli_real_escape_string($conn, $id) . "'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        $data = mysqli_fetch_assoc($query);

        // Mengisi variabel dengan nilai dari database
        if ($data) {
            $nomor = $data['nomor'];
            $tanggal = $data['tanggal'];
            $nama = $data['nama'];
            $dokumen = $data['dokumen'];
            $jabatan = $data['jabatan'];
            $kegiatan = $data['kegiatan'];
            $dokumen_old = $data['dokumen']; // Menyimpan nama file dokumen lama
        } else {
            // Jika data tidak ditemukan, redirect ke halaman laporan
            header('Location: laporan.php');
            exit;
        }
    } else {
        // Jika query gagal, redirect ke halaman laporan
        header('Location: laporan.php');
        exit;
    }
}
?>

<!-- Form untuk input data laporan -->
<form action="<?php echo $_nama_file_proses;?>" method="POST" enctype="multipart/form-data">
    <div class="modal-header">
        <h4 class="modal-title"><?php echo $cap; ?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="form-group">
            <label>Id</label>
            <input type="number" class="form-control" value="<?php echo $id; ?>" name="id" placeholder="Id">
        </div>
        <div class="form-group">
            <label>Nomor</label>
            <input type="number" class="form-control" value="<?php echo $nomor; ?>" name="nomor" placeholder="Nomor">
        </div>
        <div class="form-group">
            <label>Tanggal</label>
            <input type="date" class="form-control" value="<?php echo $tanggal; ?>" name="tanggal" placeholder="Tanggal">
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" value="<?php echo $nama; ?>" name="nama" placeholder="Nama">
        </div>
        <div class="form-group">
            <label>Dokumen</label>
            <input type="file" class="form-control" name="dokumen" placeholder="Dokumen">
            <input type="hidden" name="dokumen_old" value="<?php echo $dokumen_old; ?>">
            <?php if (!empty($dokumen)) : ?>
                <p>Dokumen saat ini: <a href="path/to/your/files/<?php echo $dokumen; ?>" target="_blank"><?php echo $dokumen; ?></a></p>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label>Jabatan</label>
            <input type="text" class="form-control" value="<?php echo $jabatan; ?>" name="jabatan" placeholder="Jabatan">
        </div>
        <div class="form-group">
            <label>Kegiatan</label>
            <input type="text" class="form-control" value="<?php echo $kegiatan; ?>" name="kegiatan" placeholder="Kegiatan">
        </div>
    </div>
    <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary"><?php echo $cap; ?></button>
        <input type="hidden" name="mode" value="<?php echo $mode; ?>" />
    </div>
</form>
