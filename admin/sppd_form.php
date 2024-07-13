<?php
$mode = 'tambah';
$cap = 'Tambah';
$_nama_file_proses = 'sppd_proses.php';

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

if (isset($_GET['mode']) && $_GET['mode'] == 'edit') {
    include('_koneksi.php');
    $mode = 'edit';
    $cap = 'Update';

    //Variabel dikirim (Penamaan harus sesuai nama kolom primary)
    $id = $_GET['id'];

    $sql = "SELECT * FROM sppd WHERE id =" . $id;

    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($query);

    //Variabel Kolom Selain Primary Key
    $nomor = $data['nomor'];
    $tanggal = $data['tanggal'];
    $nama= $data['nama'];
    $jabatan = $data['jabatan'];
    $tujuan = $data['tujuan'];
    $berangkat = $data['berangkat'];
    $kembali = $data['kembali'];
    $ket = $data['ket'];
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
            <label>Jabatan</label>
            <input type="text" class="form-control" value="<?php echo $jabatan; ?>" name="jabatan" placeholder="Jabatan">
        </div>
        <div class="form-group">
            <label>tujuan</label>
            <input type="text" class="form-control" value="<?php echo $tujuan; ?>" name="tujuan" placeholder="Tujuan">
        </div>
        <div class="form-group">
            <label>Berangkat</label>
            <input type="date" class="form-control" value="<?php echo $berangkat; ?>" name="berangkat" placeholder="Berangkat">
        </div>
        <div class="form-group">
            <label>Kembali</label>
            <input type="date" class="form-control" value="<?php echo $kembali; ?>" name="kembali" placeholder="Kembali">
        </div>
        <div class="form-group">
            <label>Ket</label>
            <input type="text" class="form-control" value="<?php echo $ket; ?>" name="ket" placeholder="Ket">
        </div>
    </div>
    <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary"><?php echo $cap; ?></button>
        <input type="hidden" name="mode" value="<?php echo $mode; ?>" />
    </div>
</form>