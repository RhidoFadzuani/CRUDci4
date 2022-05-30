<?= $this->extend('dashboard_layout') ?>

<?= $this->Section('Css') ?>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<?= $this->endSection('Css') ?>


<?= $this->section('judulform') ?>


<div class="text-center">
  <h1>DATA MAHASISWA</h1>

</div>
<?= $this->endSection('judulform') ?>

<?= $this->section('content') ?>
<?php if (!empty(session()->getFlashdata('message'))) : ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  <?php echo session()->getFlashdata('message'); ?>
</div>
<?php endif; ?>

<?php if (!empty(session()->getFlashdata('messagehapus'))) : ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  <?php echo session()->getFlashdata('messagehapus'); ?>
</div>
<?php endif; ?>
<a href="<?= base_url('/tambahdata') ?>" class="btn btn-info">tambah data</a>
<table id="Table" class="table table-striped table-hover">
  <thead style="align-content: center;">
    <tr>
      <th>No</th>
      <th>NPM</th>
      <th>Nama</th>
      <th>Jenis Kelamin</th>
      <th>No telp</th>
      <th>tanggal lahir</th>
      <th>alamat</th>
      <th>Edit</th>
    </tr>
  </thead>
  <tbody>
    <?php
foreach ($data as $k => $v) {
  // var_dump($user);
?>
    <tr>
      <td><?php echo $k +=1; ?></td>
      <td><?php echo $v['NPM']; ?></td>
      <td><?php echo $v['Nama']; ?></td>
      <td><?php echo $v['jenis_kelamin']; ?></td>
      <td><?php echo $v['no_telp']; ?></td>
      <td><?php echo $v['tanggal_lahir']; ?></td>
      <td><?php echo $v['alamat']; ?></td>
      <td>
        <a href="<?= base_url("/editdata/{$v['id']}") ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="<?= base_url("/hapusdata/{$v['id']}") ?>" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin?')">Hapus</a>
    
      </td>
    </tr>
    <?php
}
?>

  </tbody>
</table>






<?= $this->endSection('content') ?>
<?= $this->Section('Js') ?>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function () {
    $('#Table').DataTable();
  });
</script>
<?= $this->endSection('Js') ?>