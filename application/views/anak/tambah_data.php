   <head>
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
                $('#usia').val(age);
            });
        }
 
    </script>
</head>
<body>
  <center>
  <h1>INPUT DATA ANAK</h1>
  <a href="<?php echo base_url('beranda')?>" type="button" class="btn btn-Success">Home</button></a>
  <a href="<?php echo base_url('CekLogin/Logout')?>" type="button" class="btn btn-Success">Logout</button></a>
  </center>
    <hr>

    <!-- form tambah Data Anak -->
  <form method="post" action="<?= base_url('Anak/tambah_aksi');?>">
  <table width="600" border="0" align="center" cellpadding="8px">
	<tr>
    <td width="175" valign="middle" bgcolor="#BDB76B"><div align="left" class="style3">NIK </div></td>
	<td>:</td>
    <td bgcolor="#BDB76B"><input type="text" name="NIK" value="<?= set_value('NIK');?>" size="54" required=""/></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#BDB76B"><div align="left" class="style3">Kode Sekolah  </div></td>
	<td>:</td>
    <td bgcolor="#BDB76B"><input type="text" name="kd_sekolah" value="<?= set_value('kd_sekolah');?>" size="54" required="" /></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#BDB76B"><div align="left" class="style3">Kode Padukuhan</div></td>
	<td>:</td>
    <td bgcolor="#BDB76B"><input type="text" name="kd_padukuhan" value="<?= set_value('kd_padukuhan');?>" size="54" required="" /></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#BDB76B"><div align="left" class="style3">Nama Anak</div></td>
	<td>:</td>
    <td bgcolor="#BDB76B"><input type="text" name="nama_anak" value="<?= set_value('nama_anak');?>" size="54" required="" /></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#BDB76B"><div align="left" class="style3">Tempat Lahir</div></td>
	<td>:</td>
    <td bgcolor="#BDB76B"><input type="text" name="tempat_lahir" value="<?= set_value('tempat_lahir');?>" size="54" required=""/></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#BDB76B"><div align="left" class="style3">Tanggal Lahir </div></td>
	<td>:</td>
    <td bgcolor="#BDB76B"><input type="text" name="tanggal_lahir" id="datepicker" value="<?= set_value('tanggal_lahir');?>" size="54" required=""/></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#BDB76B"><div align="left" class="style3">Usia </div></td>
  <td>:</td>
    <td bgcolor="#BDB76B"><input type="text" name="usia" id="usia" value="<?= set_value('usia');?>" size="54" required=""/></td>
  </tr>
  <td valign="middle" bgcolor="#BDB76B"><div align="left" class="style3">Jenis Kelamin</div></td>
  <td>:</td>
    <td bgcolor="#BDB76B" size="54"><select name="Jenis_kelamin" value="<?= set_value('Jenis_kelamin');?>">
                    <option value="-">- Pilih Jenis Kelamin -
                    <option value="Laki-Laki">Laki-Laki
                    <option value="Perempuan">Perempuan
          </select></td>
  </tr>
  <tr>
  <td valign="middle" bgcolor="#BDB76B"><div align="left" class="style3">Agama</div></td>
  <td>:</td>
    <td bgcolor="#BDB76B" size="54"><select name="agama" value="<?= set_value('agama');?>">
                    <option value="-">- Pilih Agama -
                    <option value="Islam">Islam
                    <option value="Kristen">Kristen
                    <option value="Katholik">Katholik
                    <option value="Hindu">Hindu
                    <option value="Budha">Budha
          </select></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#BDB76B"><div align="left" class="style3">Alamat </div></td>
  <td>:</td>
    <td bgcolor="#BDB76B"><input type="text" name="alamat" value="<?= set_value('alamat');?>" size="54" required=""/></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#BDB76B"><div align="left" class="style3">Nama Ibu </div></td>
  <td>:</td>
    <td bgcolor="#BDB76B"><input type="text" name="nama_ibu" value="<?= set_value('nama_ibu');?>" size="54" required=""/></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#BDB76B"><div align="left" class="style3">Nama Ayah </div></td>
  <td>:</td>
    <td bgcolor="#BDB76B"><input type="text" name="nama_ayah" value="<?= set_value('nama_ayah');?>" size="54" required=""/></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#BDB76B"><div align="left" class="style3">Pekerjaan Ibu </div></td>
  <td>:</td>
    <td><select name="pekerjaan_ibu" value="<?= set_value('pekerjaan_ibu');?>">
                    <option value="-">- Pilih Pekerjaan -
                    <option value="Ibu Rumah Tangga">Ibu Rumah Tangga
                    <option value="Wiraswasta">Wiraswasta
                    <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil
                    <option value="Karyawan">Karyawan
                    <option value="Tidak Bekerja">Tidak Bekerja
          </select></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#BDB76B"><div align="left" class="style3">Pekerjaan Ayah</div></td>
  <td>:</td>
      <td><select name="pekerjaan_ayah" value="<?= set_value('pekerjaan_ayah');?>">
                    <option value="-">- Pilih Pekerjaan -
                    <option value="Wiraswasta">Wiraswasta
                    <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil
                    <option value="Karyawan">Karyawan
                    <option value="Tidak Bekerja">Tidak Bekerja
          </select></td>
          <small><span class="text-danger"><i><?= form_error('jml_pendapatan'); ?></i></span></small>

  </tr>
  <tr>
    <td valign="middle" bgcolor="#BDB76B"><div align="left" class="style3">Jumlah Pendapatan Keluarga(/bln)</div></td>
  <td>:</td>
    <td bgcolor="#BDB76B"><input type="text" name="jml_pendapatan" value="<?= set_value('jml_pendapatan');?>" size="54" required=""/></td>
    <small><span class="text-danger"><i><?= form_error('jml_pendapatan'); ?></i></span></small>
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