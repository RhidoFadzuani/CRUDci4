<?= $this->extend('dashboard_layout') ?>

<?= $this->Section('Css') ?>

<style>
    .form-control {
        width: 700px;
        
    }
.btn{
    width: 700px;
    font-size: 20px;
    margin-bottom: 10px;
    
}


form{
    margin-left: 180px;
}
</style>
<?= $this->endSection('Css') ?>

<?= $this->section('judulform') ?>
<div class="text-center">
    <h1>TAMBAH DATA MAHASISWA</h1>
</div>
<?= $this->endSection('judulform') ?>

<?= $this->section('content') ?>


<div class="container">



    <?php if (!empty(session()->getFlashdata('error'))) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h4>Periksa lagi Form</h4>
            </hr />
            <?php echo session()->getFlashdata('error'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>


        <form  method="post" action="<?= base_url('tambahdata/store') ?>">
            <?= csrf_field(); ?>

            <div class="form-group">
                <label for="NPM">NPM</label>
                <input type="text" class="form-control" id="NPM" name="NPM" value="<?= old('NPM'); ?>">
            </div>

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="Nama" name="Nama" value="<?= old('Nama'); ?>">
            </div>

            <div class="form-group">
                <label for="Tanggal Lahir">tanggal Lahir</label>
                <input type="date" class="form-control datepicker" id="tanggal_lahir" name="tanggal_lahir" value="<?= old('tanggal_lahir'); ?>" Format="dd/mm/yyyy">
            </div>

            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                    <option value="pria">Pria</option>
                    <option value="wanita">Wanita</option>
                </select>
            </div>

            <div class="form-group">
                <label for="fakultas">Fakultas</label>
                <select name="fakultas" class="form-control" id="fakultas">
                    <option value="fakultas ilmu Komputer">fakultas ilmu Komputer</option>
                    <option value="fakultas ilmu hukum">fakultas ilmu hukum</option>
                    <option value="fakultas ilmu komunikasi">fakultas ilmu komunikasi</option>
                    <option value="fakultas keguruan & ilmu">fakultas keguruan & ilmu</option>
                    <option value="fakultas agrobisni & rekayasa">fakultas agrobisni & rekayasa</option>
                    <option value="fakultas ilmu administrasi">fakultas ilmu administrasi</option>
                    <option value="fakultas teknik">fakultas teknik</option>
                </select>
            </div>

            <div class="form-group">
                <label for="no_telp">No Telp</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= old('no_telp') ?>" />
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" name="alamat" id="alamat"><?= old('alamat') ?></textarea>
            </div>
   

            <div class="form-group" style="margin-top:50px;">
                <div class="tombol">
                <div class="position-fixed bottom-0 start-50 translate-middle-x">
                    <input type="submit" value="Simpan" class="btn btn-primary" />
                </div>
                </div>
            </div>

        </form>



    <?= $this->endSection('content') ?>
    <?= $this->Section('Js') ?>
    <?= $this->endSection('Js') ?>