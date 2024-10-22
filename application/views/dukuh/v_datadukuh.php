<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Daftar Padukuhan</title>
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
	<h3>Daftar Padukuhan Kelurahan Wedomartani</h3>
	<hr>
    <a href="<?= base_url('Padukuhan')?>" class="btn btn-warning" style="margin-bottom: 10px">Home</button></a>
    <a href="<?= base_url('Dukuh/tambah');?>" class="btn btn-warning" style="margin-bottom: 10px">Tambah Data</a> 
    <a href="<?= base_url('CekLogin/Logout')?>" class="btn btn-warning" style="margin-bottom: 10px">Logout</button></a>
    <table class="table table-bordered">
		<thead>
		<tr>
			<th>No</th>
			<th>Kode Padukuhan</th>
			<th>Nama Padukuhan</th>
			<th>Aksi</th>
		</tr>
		</thead>
		<tbody>
			<?php $no=1; foreach($tb_padukuhan as $row) { ?>
          <tr>
            <td class="text-center"><?= $no ?></td>
            <td><?= $row->kd_padukuhan; ?></td>
            <td><?= $row->nama_padukuhan; ?></td>
				<td>
					<a href="<?= base_url('Dukuh/edit/').$row->kd_padukuhan;?>" class="btn btn-warning">Edit</a>
              		<a href="<?= base_url('Dukuh/hapus/').$row->kd_padukuhan; ?>" class="btn btn-warning">Hapus</a>
				</td>
			</tr>
		<?php $no++;} ?>
		</tbody>
	</table>

</body>
</html>
