<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Daftar Anak</title>
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
	<h2>Daftar Anak Kelurahan Wedomartani</h2>
	<table border="1">
		<thead>
			<th>No</th>
			<th>Nama Anak</th>
			<th>Aksi</th>
		</thead>
		<tbody>
			<?php $i=1; foreach ($dataanak as $dataanak){?>
			<tr>

				<td><?php echo $i ?></td>
				<td><?php echo $dataanak['nama_anak']?></td>
				<td>
					<a href="<?php echo base_url('anak/update/'.$dataanak['NIK'])?>">Edit</font></a>
					<a onclick="return confirm('Apa anda yakin?')" href="<?php echo site_url('anak/delete/'.$dataanak['NIK']) ?>">Delete</a>
				</td>
			</tr>
		<?php $i++;} ?>
		</tbody>
	</table>

</body>
</html>
