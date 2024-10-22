<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Daftar Sekolah</title>
	<style>
    * {
  box-sizing: border-box;
  }

  body {
  background-color: #808000;
  padding: 20px;
  font-family: Arial;
  }
</head>
<body>
	<h2>Daftar Sekolahan Anak Kelurahan Wedomartani</h2>
	<table border="1">
		<thead>
			<th>No</th>
			<th>Nama Sekolah</th>
			<th>Aksi</th>
		</thead>
		<tbody>
			<?php $i=1; foreach ($datasekolah as $datasekolah){?>
			<tr>

				<td><?php echo $i ?></td>
				<td><?php echo $datasekolah['nama_sekolah']?></td>
				<td>
					<a href="<?php echo site_url('sekolah/update/'.$datasekolah['kd_sekolah'])?>">Edit</font></a>
					<a onclick="return confirm('Apa anda yakin?')" href="<?php echo site_url('sekolah/delete/'.$datasekolah['kd_sekolah']) ?>">Delete</a>
				</td>
			</tr>
		<?php $i++;} ?>
		</tbody>
	</table>

</body>
</html>
