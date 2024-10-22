<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah Sekolah</title>
  <style>
    * {
  box-sizing: border-box;
  }

  body {
  background-color: #808000;
  padding: 20px;
  font-family: Arial;
  }
  .btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #BDB76B;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #556B2F;
  color: black;
}
  </style>
</head>
<body>
  <center>
	<h1>INPUT DATA SEKOLAH</h1>
  <a href="<?php echo base_url('beranda')?>" type="button" class="btn btn-Success">Home</button></a>
  <a href="<?php echo base_url('CekLogin/Logout')?>" type="button" class="btn btn-Success">Logout</button></a>
</center><br><br>
	<form method="post">
<table width="600" border="0" align="center" cellpadding="8px">
   <tr>
    <td valign="middle" bgcolor="#66CDAA"><div align="left" class="style3">Kode Sekolah</div></td>
	<td>:</td>
    <td bgcolor="#00FA9A"><input type="text" name="kd_sekolah" id="kd_sekolah" size="54" required="" /></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#66CDAA"><div align="left" class="style3">Nama Sekolah</div></td>
	<td>:</td>
    <td bgcolor="#00FA9A"><input type="text" name="nama_sekolah" id="nama_sekolah" size="54" required="" /></td>
  </tr>
   <tr>
    <td valign="middle" bgcolor="#66CDAA"><div align="left" class="style3">Alamat Sekolah</div></td>
  <td>:</td>
    <td bgcolor="#00FA9A"><input type="text" name="alamat_sekolah" id="alamat_sekolah" size="54" required="" /></td>
  </tr>
  <tr>
    <td valign="middle"><span class="style4"></span></td>
	<td></td>
    <td><input type="submit" name="simpan" value="Simpan" id="simpan" />
	<input type="hidden" name="asal" id="asal" value="<?php echo $_SERVER['PHP_SELF'];?>" /></td>
  </tr>
</table>
</form>
</body>
</html>