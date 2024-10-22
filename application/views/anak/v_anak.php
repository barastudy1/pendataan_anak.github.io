<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Olah Data Anak</title>
  <link rel="stylesheet" href="asesoris/css/style.css">
  <link href="<?= base_url(); ?>asesoris/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
  body {
  background-color: #808000;
  padding: 20px;
  font-family: Arial;
}

</style>
<body>

 <main role="main" class="flex-shrink-0">
  <div class="container">
   <h3>OLAH DATA ANAK DESA WEDOMARTANI</h3>
    <hr>
    <a href="<?= base_url('Beranda')?>" class="btn btn-warning" style="margin-bottom: 10px">Home</button></a>
    <a href="<?= base_url('anak/tambah');?>" class="btn btn-warning" style="margin-bottom: 10px">Tambah Data</a> 
    <a href="<?= base_url('CekLogin/Logout')?>" class="btn btn-warning" style="margin-bottom: 10px">Logout</button></a>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>No.</th>
          <th>NIK</th>
          <th>Nama Anak</th>
          <th>Tempat Lahir</th>
          <th>Tanggal Lahir</th>
          <th>Usia</th>
          <th>Jenis Kelamin</th>
          <th>Agama</th>
          <th>Alamat</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; foreach($tb_anak as $row) { ?>
          <tr>
            <td class="text-center"><?= $no ?></td>
            <td><?= $row->NIK; ?></td>
            <td><?= $row->nama_anak; ?></td>
            <td><?= $row->tempat_lahir; ?></td>
            <td><?= $row->tanggal_lahir; ?></td>
            <td><?= $row->usia; ?></td>
            <td><?= $row->Jenis_kelamin; ?></td>
            <td><?= $row->agama; ?></td>
            <td><?= $row->alamat; ?></td>
            <td>
              <a href="<?= base_url('Anak/edit/').$row->NIK;?>" class="btn btn-warning">Edit</a>
              <a href="<?= base_url('Anak/hapus/').$row->NIK; ?>" class="btn btn-warning">Hapus</a>
            </td>
          </tr>
        <?php $no++; } ?> 
      </tbody>
    </table>
  </div>
</main> 
  <center>
</body>
</html>