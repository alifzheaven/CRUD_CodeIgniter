<html>
  <head>
    <title>CRUD SISWA</title>
    
  </head>
  <body>
    <div class="card card-default" style="border-radius: 0px;margin: 20px 0;">
         <div class="card-header" align="center">
          <h3>Kelola Data Siswa</h3>
         </div>
      <div class="card-body">
          <!-- <a href='<?php echo base_url("siswa/tambah"); ?>'>Tambah Data</a><br><br> -->
          <?php 
            echo anchor('siswa/tambah','Tambah Siswa','class="btn btn-primary" style="margin:0 
              5px; margin-bottom:15px;"'); 
            /*echo anchor('siswa/cetak','Cetak Laporan','class="btn btn-info" style="margin:0 5px; margin-bottom:15px;"'); */
            echo anchor('awal','Logout','class="btn btn-warning" style=" margin:0 5px; margin-bottom:15px; margin-left:83%;"')
          ?>
          <!-- <a alogn="right" class="btn btn-info" style="margin:0 5px; margin-bottom:15px; href="<?php echo base_url('siswa/logout'); ?>">Logout</a> -->
        

          <table class="table table-striped" align="center">
            <tr >
              <th scope="col">NIS</th>
              <th scope="col">Nama</th>
              <th scope="col">Tanggal Lahir</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Jurusan</th>
              <th scope="col">Alamat</th>
              <th scope="col" >Aksi</th>
            </tr>

            <?php
            if( ! empty($siswa)){ // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
              foreach($siswa as $data){
                echo '<tr>
                <td>'.$data->nis.'</td>
                <td>'.$data->nama.'</td>
                <td>'.$data->tanggal_lahir.'</td>
                <td>'.$data->jenis_kelamin.'</td>
                <td>'.$data->jurusan.'</td>
                <td>'.$data->alamat.'</td>
                <td>
                '.anchor('siswa/ubah/'.$data->nis, 'Edit', 'class="btn btn-xs btn-success"').'
                '.anchor('siswa/hapus/'.$data->nis, 'Hapus', 'class="btn btn-xs btn-danger"').'
                </td>                
                </tr>';
              }
            }else{ // Jika data siswa kosong
              echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
            }
            ?>
          </table>
          
        </div>
        </div>
    </div>
<div align="center">&copy;Created By: Sendi Agustian</div>
  </body>
</html>