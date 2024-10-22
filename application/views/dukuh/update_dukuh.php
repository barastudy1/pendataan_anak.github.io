<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Update Data Padukuhan</title>
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
  <h2><center>HALAMAN UPDATE DATA PADUKUHAN</center></h2>
	<form method="post">
<table width="600" border="0" align="center" cellpadding="8px">
  <tr>
    <td valign="middle" bgcolor="#008080"><div align="left" class="style3">Kode Padukuhan</div></td>
	<td>:</td>
    <td bgcolor="#40E0D0"><input type="text" name="kd_padukuhan"  value="<?php $datadukuh['kd_padukuhan']?>" size="54"required="" /></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#008080"><div align="left" class="style3">Nama Padukuhan</div></td>
	<td>:</td>
    <td bgcolor="#40E0D0"><input type="text" name="nama_padukuhan"  value="<?php $datadukuh['nama_padukuhan']?>"size="54" required="" /></td>
  </tr>
  <tr>
    <td valign="middle"><span class="style4"></span></td>
	<td></td>
    <td><input type="submit" name="update" value="Update" required=""/>
	<input type="hidden" name="asal" id="asal" value="<?php echo $_SERVER['PHP_SELF'];?>" /></td>
  </tr>
</table>

</body>
</html>