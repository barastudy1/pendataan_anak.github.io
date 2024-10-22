<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Update Data Anak</title>
  <title>jQuery UI Datepicker - Default functionality</title>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script>
        $(function() {
            $( "#datepicker" ).datepicker();
        });
 
        window.onload=function(){
            $('#datepicker').on('change', function() {
                var dob = new Date(this.value);
                var today = new Date();
                var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
                $('#umur').val(age);
            });
        }
 
    </script>
    <style>
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
</head>
<body>
  <h2><center>HALAMAN UPDATE DATA ANAK</center></h2>
 
 	<form method="post">
<table width="600" border="0" align="center" cellpadding="8px">
  <tr>
    <td width="150" valign="middle" bgcolor="#008080"><div align="left" class="style3">NIK </div></td>
	<td>:</td>
    <td bgcolor="#40E0D0"><input type="text" name="nik"  value="<?php echo ($dataanak['NIK']);?>" size="54" required></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#008080"><div align="left" class="style3">Kode Sekolah  </div></td>
	<td>:</td>
    <td bgcolor="#40E0D0"><input type="text" name="kd_sekolah"  value="<?php echo ($dataanak['kd_sekolah']);?>"size="54" required></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#008080"><div align="left" class="style3">Kode Padukuhan</div></td>
	<td>:</td>
    <td bgcolor="#40E0D0"><input type="text" name="kd_padukuhan"  value="<?php echo ($dataanak['kd_padukuhan']);?>" size="54"required></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#008080"><div align="left" class="style3">Nama Anak</div></td>
	<td>:</td>
    <td bgcolor="#40E0D0"><input type="text" name="nama_anak"  value="<?php echo($dataanak['nama_anak']);?>"size="54" required></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#008080"><div align="left" class="style3">Tempat Lahir</div></td>
	<td>:</td>
    <td bgcolor="#40E0D0"><input type="text" name="tempat_lahir" value="<?php echo($dataanak['tempat_lahir']);?>" size="54" required></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#66CDAA"><div align="left" class="style3">Tanggal Lahir </div></td>
  <td>:</td>
    <td bgcolor="#00FA9A"><input type="text" name="tgl_lahir" id="datepicker" size="54" required=""/></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#66CDAA"><div align="left" class="style3">Usia </div></td>
  <td>:</td>
    <td bgcolor="#00FA9A"><input type="text" name="usia" id="umur" size="54" required=""/></td>
  </tr>
   <tr>
    <td valign="middle" bgcolor="#008080"><div align="left" class="style3">Alamat </div></td>
  <td>:</td>
    <td bgcolor="#40E0D0"><input type="text" name="alamat"  value="<?php echo($dataanak['alamat']);?>" size="54" required></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#008080"><div align="left" class="style3">Nama Ibu </div></td>
  <td>:</td>
    <td bgcolor="#40E0D0"><input type="text" name="nama_ibu"  value="<?php echo($dataanak['nama_ibu']);?>" size="54" required></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#008080"><div align="left" class="style3">Nama Ayah </div></td>
  <td>:</td>
    <td bgcolor="#40E0D0"><input type="text" name="nama_ayah"  value="<?php echo($dataanak['nama_ayah']);?>" size="54" required></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#008080"><div align="left" class="style3">Pekerjaan Ibu </div></td>
  <td>:</td>
    <td bgcolor="#40E0D0"><input type="text" name="pekerjaan_ibu" value="<?php echo($dataanak['pekerjaan_ibu']);?>"></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#008080"><div align="left" class="style3">Pekerjaan Ayah</div></td>
  <td>:</td>
      <td bgcolor="#40E0D0"><input type="text" name="pekerjaan_ayah" value="<?php echo($dataanak['pekerjaan_ayah']);?>"></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#008080"><div align="left" class="style3">Jumlah Pendapatan(/bln)</div></td>
  <td>:</td>
    <td bgcolor="#40E0D0"><input type="text" name="jml_pendapatan"  value="<?php echo($dataanak['jml_pendapatan']);?>" size="54"required></td>
  </tr>
  <tr>
    <td valign="middle"><span class="style4"></span></td>
	<td></td>
    <td><input type="submit" name="update" value="Update" required>
	<input type="hidden" name="asal" id="asal" value="<?php echo $_SERVER['PHP_SELF'];?>" /></td>
  </tr>
</table>
</form>
</body>
</html>