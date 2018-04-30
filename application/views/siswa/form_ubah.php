<html>
  <head>
    <title>Form Ubah - CRUD Codeigniter</title>
  </head>
  <body>
    <div class="card card-default" style="border-radius: 0px;margin: 20px 0;">
         <div class="card-header" align="center">
          <h3>Ubah Data Siswa</h3>
         </div>
      <div class="card-body">

    <!-- Menampilkan Error jika validasi tidak valid -->
    <div style="color: red;"><?php echo validation_errors(); ?></div>

    <?php echo form_open("siswa/ubah/".$siswa->nis); ?>
     <div align="center"> 
      <table class="table table-stiped"  style="width: 500px; height: 400px">
        <tr>
          <td>NIS</td>
          <td scope="col"><input type="text" name="input_nis" value="<?php echo set_value('input_nis', $siswa->nis); ?>" readonly style="width: 230px;"></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td scope="col"><input type="text" name="input_nama" value="<?php echo set_value('input_nama', $siswa->nama); ?>" style="width: 230px;"></td>
        </tr>
        <tr>
          <td>Tanggal Lahir</td>
          <td scope="col"><input type="date" name="input_tanggallahir" value="<?php echo set_value('input_tanggallahir', $siswa->tanggal_lahir); ?>" style="width: 230px;">
          </td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td scope="col" id="jk">
          <input type="radio" name="input_jeniskelamin" value="Laki-laki" for="jk"<?php echo set_radio('jeniskelamin', 'Laki-laki', ($siswa->jenis_kelamin == "Laki-laki")? true : false); ?>> Laki-laki
          <input type="radio" name="input_jeniskelamin" value="Perempuan" for="jk"<?php echo set_radio('jeniskelamin', 'Perempuan', ($siswa->jenis_kelamin == "Perempuan")? true : false); ?> > Perempuan
          </td>
        </tr>
        <tr>
          <td>Jurusan</td>
          <td scope="col">            
              <?php   

              $option = array(
                ""=>"- Pilih Jurusan -",
                "PG" => "Pesiapan Grafika",
                "TPM"=> "Teknik Permesinan",
                "TSM" => "Teknik Sepeda Motor",
                "RPL" => "Rekayasa Perangkat Lunak",
                "TKJ" => "Teknik Komputer Jaringan",
                "AP" => "Administrasi Perkantoran",
                "AK" => "Akuntansi",
                "PS" => "Pemasaran"
              );                
              echo form_dropdown('input_jurusan',$option,'','style="width: 230px;"');
             ?></p>
          </td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td scope="col"><textarea style="width: 230px;" name="input_alamat"><?php echo set_value('input_alamat', $siswa->alamat); ?></textarea></td>
        </tr>
        <tr>
          <td>
            <input type="submit" name="submit" value="Ubah" class="btn btn-success">
            <a href="<?php echo base_url('siswa'); ?>"><input type="button" value="Batal" class="btn btn-danger"></a>
            <?php echo form_close(); ?>
          </td>
          <td>
            
          </td>
        </tr>
      </table>
    </div>    
  </body>
</html>