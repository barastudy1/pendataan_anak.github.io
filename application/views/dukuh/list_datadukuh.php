<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Daftar Padukuhan</title>
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
	<h2>Daftar Padukuhan Kelurahan Wedomartani</h2>
	<table border="1">
		<thead>
			<th>No</th>
			<th>Nama Padukuhan</th>
			<th>Aksi</th>
		</thead>
		<tbody>
			<?php $i=1; foreach ($datadukuh as $datadukuh){?>
			<tr>

				<td><?php echo $i ?></td>
				<td><?php echo $datadukuh['nama_padukuhan']?></td>
				<td>
					<a href="<?php echo site_url('dukuh/update/'.$datadukuh['kd_padukuhan'])?>">Edit</font></a>
					<a onclick="return confirm('Apa anda yakin?')" href="<?php echo site_url('dukuh/delete/'.$datadukuh['kd_padukuhan']) ?>">Delete</a>
				</td>
			</tr>
		<?php $i++;} ?>
		</tbody>
	</table>

</body>
</html>
