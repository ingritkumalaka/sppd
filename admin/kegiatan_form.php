<?php
$mode = 'tambah';
$cap = 'Tambah';
$_nama_file_proses = 'kegiatan_proses.php';

//Seluruh Variabel Kolom
$id = '';
$nama = '';
$kegiatan = '';
$waktu = '';

if (isset($_GET['mode']) && $_GET['mode'] == 'edit') {
    include('_koneksi.php');
    $mode = 'edit';
    $cap = 'Update';

    //Variabel dikirim (Penamaan harus sesuai nama kolom primary)
    $id = $_GET['id'];

    $sql = "SELECT * FROM kegiatan WHERE id =" . $id;

    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($query);

    //Variabel Kolom Selain Primary Key
    $nama = $data['nama'];
    $kegiatan = $data['kegiatan'];
    $waktu = $data['waktu'];
}
?>
<form action="<?php echo $_nama_file_proses;?>" method="POST">
    <div class="modal-header">
        <h4 class="modal-title"><?php echo $cap; ?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="form-group">
            <label>Id</label>
            <input type="number" class="form-control" value="<?php echo $id; ?>" name="id" placeholder="Id" readonly>
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" value="<?php echo $nama; ?>" name="nama" placeholder="Nama">
        </div>
        <div class="form-group">
            <label>Kegiatan</label>
            <input type="text" class="form-control" value="<?php echo $kegiatan; ?>" name="kegiatan" placeholder="Kegiatan">
        </div>
        <div class="form-group">
            <label>Waktu</label>
            <input type="date" class="form-control" value="<?php echo $waktu; ?>" name="waktu" placeholder="Waktu">
    </div>
    <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary"><?php echo $cap; ?></button>
        <input type="hidden" name="mode" value="<?php echo $mode; ?>" />
    </div>
</form>