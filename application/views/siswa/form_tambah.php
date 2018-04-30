<html>
  <head>
    <title>Form Tambah - CRUD Codeigniter</title>
  </head>
  <body>
<div class="card card-default" style="border-radius: 0px;margin: 20px 0;">
     <div class="card-header" align="center">
      <h3>Tambah Data Siswa</h3>
     </div>
  <div class="card-body">

    <!-- Menampilkan Error jika validasi tidak valid -->
    <div style="color: red;"><?php echo validation_errors(); ?></div>

    <?php echo form_open("siswa/tambah"); ?>
    <div align="center">
      <table class="table table-stiped"  style="width: 500px; height: 400px">
        <tr>
          <td>NIS</td>
          <td><input type="text" name="input_nis" value="<?php echo set_value('input_nis'); ?>" style="width: 230px;"></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="input_nama" value="<?php echo set_value('input_nama'); ?>" style="width: 230px;"></td>
        </tr>
        <tr>
          <td>Tanggal Lahir</td>
          <td><input type="date" name="input_tanggallahir" value="<?php echo set_value('input_tanggallahir'); ?>" style="width: 230px;">
          </td>
        </tr>
        <tr>
          <td >Jenis Kelamin</td>
          <td id="jk">
          <input  type="radio" name="input_jeniskelamin" value="Laki-laki" for="jk" <?php echo set_radio('jeniskelamin', 'Laki-laki'); ?>> Laki-laki
          <input type="radio" name="input_jeniskelamin" value="Perempuan" for="jk" <?php echo set_radio('jeniskelamin', 'Perempuan'); ?>> Perempuan
          </td>
        </tr>
        <tr>
          <td>Jurusan</td>
          <td >
            <?php 
             echo form_open();
              $option = array(
                ""=>"- Pilih Jurusan -",
                "PG" => "Pesiapan Grafika",
                "TPM"=> "Teknik Permesinan",
                "TSM" => "Teknik Sepeda Motor",
                "RPL" => "Rekayasa Perangkat Lunak",
                "TKJ" => "Teknik Komputer Jaringan",
                "AP"  => "Administrasi Perkantoran",
                "AK" => "Akuntansi",
                "PS" => "Pemasaran"
              );
              echo form_dropdown('input_jurusan',$option,'','style="width: 230px;"');           
             ?>            
          </td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><textarea name="input_alamat" style="width: 230px;"><?php echo set_value('input_alamat'); ?></textarea></td>
        </tr>
        <tr>
          <td>            
            <input type="submit" name="submit" value="Simpan" class="btn btn-success">
            <a href="<?php echo base_url('siswa'); ?>" class="btn btn-danger">Batal</a>
            <?php echo form_close(); ?>
          </td>
          <td></td>
        </tr>
      </table> 
    </div>        
  </div>
</div>
  </body>
</html>