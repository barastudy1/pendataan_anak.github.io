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
 <!-- form tambah Data Dukuh -->
  <form method="post" action="<?= base_url('Sekolah/tambah_aksi');?>">
  <table width="600" border="0" align="center" cellpadding="8px">
   <tr>
    <td valign="middle" bgcolor="#BDB76B"><div align="left" class="style3">Kode Padukuhan</div></td>
	<td>:</td>
    <td bgcolor="#BDB76B"><input type="text" name="kd_sekolah" value="<?= set_value('kd_sekolah');?>" size="54" required="" /></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#BDB76B"><div align="left" class="style3">Nama Sekolah</div></td>
	<td>:</td>
    <td bgcolor="#BDB76B"><input type="text" name="nama_sekolah" value="<?= set_value('nama_sekolah');?>" size="54" required="" /></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#BDB76B"><div align="left" class="style3">Alamat Sekolah</div></td>
  <td>:</td>
    <td bgcolor="#BDB76B"><input type="text" name="alamat_sekolah" value="<?= set_value('alamat_sekolah');?>" size="54" required="" /></td>
  </tr>
  <tr>
    <td valign="middle"><span class="style4"></span></td>
  <td></td>
    <td>
     <button type="submit" class="btn btn-primary">Simpan Data</button></td>
  </tr>
</table>
</form>
</body>
</html>