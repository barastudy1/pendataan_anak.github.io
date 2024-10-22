<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Daftar Sekolah</title>
	<link rel="stylesheet" href="asesoris/css/style.css">
  	<link href="<?= base_url(); ?>asesoris/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    * {
  box-sizing: border-box;
  }

  body {
  background-color: #808000;
  padding: 20px;
  font-family: Arial;
  }
 </style>
<body>
	<main role="main" class="flex-shrink-0">
  	<div class="container">
	<h3>Daftar Sekolah Anak Desa Wedomartani</h3>
	<hr>
    <a href="<?= base_url('Sekolahan')?>" class="btn btn-warning" style="margin-bottom: 10px">Home</button></a>
    <a href="<?= base_url('Sekolah/tambah');?>" class="btn btn-warning" style="margin-bottom: 10px">Tambah Data</a> 
    <a href="<?= base_url('CekLogin/Logout')?>" class="btn btn-warning" style="margin-bottom: 10px">Logout</button></a>
    <table class="table table-bordered">
		<thead>
		<tr>
			<th>No</th>
			<th>Kode Sekolah</th>
			<th>Nama Sekolah</th>
			<th>Alamat Sekolah</th>
			<th>Aksi</th>
		</tr>
		</thead>
		<tbody>
			<?php $no=1; foreach($tb_sekolah as $row) { ?>
          <tr>
            <td class="text-center"><?= $no ?></td>
            <td><?= $row->kd_sekolah; ?></td>
            <td><?= $row->nama_sekolah; ?></td>
             <td><?= $row->alamat_sekolah; ?></td>
				<td>
					<a href="<?= base_url('Sekolah/edit/').$row->kd_sekolah;?>" class="btn btn-warning">Edit</a>
              		<a href="<?= base_url('Sekolah/hapus/').$row->kd_sekolah; ?>" class="btn btn-warning">Hapus</a>
				</td>
			</tr>
		<?php $no++;} ?>
		</tbody>
	</table>

</body>
</html>
