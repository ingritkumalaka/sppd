<?php
$mode = 'tambah';
$cap = 'Tambah';
$_nama_file_proses = 'spt_proses.php';

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
$dokumen = '';
$post = '';

if (isset($_GET['mode']) && $_GET['mode'] == 'edit') {
    include('_koneksi.php');
    $mode = 'edit';
    $cap = 'Update';

    //Variabel dikirim (Penamaan harus sesuai nama kolom primary)
    $id = $_GET['id'];

    $sql = "SELECT * FROM spt WHERE id ='" . $id . "'";

    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($query);

    //Variabel Kolom Selain Primary Key
    $tahun = $data['tahun'];
    $nomor = $data['nomor'];
    $nama = $data['nama'];
    $jabatan = $data['jabatan'];
    $kategori = $data['kategori'];
    $tujuan = $data['tujuan'];
    $transportasi = $data['transportasi'];
    $berangkat = $data['berangkat'];
    $sampai = $data['sampai'];
    $kegiatan = $data['kegiatan'];
    $dokumen = $data['dokumen'];
    $post = $data['post'];
}
?>

<!-- Apabila ada upload file, tambahkan
enctype="multipart/form-data"
pada form -->
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
            <input type="number" class="form-control" value="<?php echo $id; ?>" name="id" placeholder="Id" placeholder="Id">
        </div>
        <div class="form-group">
            <label>Tahun</label>
            <input type="year" class="form-control" value="<?php echo $tahun; ?>" name="tahun"  placeholder="Tahun">
        </div>
        <div class="form-group">
            <label>Nomor</label>
            <input type="text" class="form-control" value="<?php echo $nomor; ?>" name="nomor" placeholder="Nomor">
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
            <label>Kategori</label>
            <input type="text" class="form-control" value="<?php echo $kategori; ?>" name="kategori" placeholder="Kategori">
        </div>
        <div class="form-group">
            <label>Tujuan</label>
            <input type="text" class="form-control" value="<?php echo $tujuan; ?>" name="tujuan" placeholder="Tujuan">
        </div>
        <div class="form-group">
            <label>Transportasi</label>
            <input type="text" class="form-control" value="<?php echo $transportasi; ?>" name="transportasi" placeholder="Transportasi">
        </div>
        <div class="form-group">
            <label>Berangkat</label>
            <input type="datetime" class="form-control" value="<?php echo $berangkat; ?>" name="berangkat" placeholder="Berangkat">
        </div>
        <div class="form-group">
            <label>Sampai</label>
            <input type="datetime" class="form-control" value="<?php echo $sampai; ?>" name="sampai" placeholder="Sampai">
        </div>
        <div class="form-group">
            <label>Kegiatan</label>
            <input type="text" class="form-control" value="<?php echo $kegiatan; ?>" name="kegiatan" placeholder="Kegiatan">
        </div>
        <div class="form-group">
            <label>Dokumen</label>
            <input type="file" class="form-control" value="<?php echo $dokumen; ?>" name="dokumen" placeholder="Dokumen">
            <input type="hidden" name="dokumen_old" value="<?php echo $dokumen;?>"/>
        </div>
        <div class="form-group">
            <label>Post</label>
            <input type="datetime" class="form-control" value="<?php echo $post; ?>" name="post" placeholder="Post">
        </div>
    </div>
    <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary"><?php echo $cap; ?></button>
        <input type="hidden" name="mode" value="<?php echo $mode; ?>" />
    </div>
</form>