<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_kegiatan WHERE id_kegiatan='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);


    if ($data_cek['gambar_kegiatan']) {
      $gambar = "admin/gambar/kegiatan/" . $data_cek['gambar_kegiatan'];
    } else {
      $gambar = "admin/gambar/kegiatan/noimage.png";
    }
    }
    $satu_hari        = mktime(0,0,0,date("n"),date("j"),date("Y"));
    function tglIndonesia2($str){
             $tr   = trim($str);
             $str    = str_replace(array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'), array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'), $tr);
             return $str;
         }
?>
<div class="card card-info">
  <div class="card-header">
    <h3 class="card-title">
      <i class="fa fa-info-circle"></i> Detail Kegiatan</h3>
    </h3>
    <div class="card-tools">
    </div>
  </div>
  <div class="card-body p-0">
    <table class="table">
      <tbody>
        <tr>
          <td>
            <?php $gambar="admin/gambar/kegiatan/" . $data_cek['gambar_kegiatan'];?>
              <div class="text-center">
                <img src="<?php echo $gambar; ?>" style="width: 200px;">
              </div>
            </td>
          </tr>
          <tr>
          <td style="width: 150px">
            <b>Judul</b>
          </td>
          <td>: 
              <?php echo $data_cek['judul_kegiatan']; ?>
          </td>
        </tr>
        <tr>
          <td style="width: 150px">
            <b>Tanggal Posting</b>
          </td>
          <td>:
              <?php echo tglIndonesia2(date('d F Y', strtotime($data_cek['tanggal_postingan']))); ?>
          </td>
        </tr>
        <tr>
          <td style="width: 150px">
            <b>User Posting</b>
          </td>
          <td>:
              <?php echo $data_cek['user_postingan']; ?>
          </td>
        </tr>
      </tbody>
    </table>

  <div class="card">
      <div class="card-header bg-secondary">
        <b> Konten Kegiatan</b>
      </div>
      <div class="card-body">
        <p class="card-text"><?php echo $data_cek['konten_kegiatan']; ?></p>
      </div>
  </div>
    <div class="card-footer">
      <a href="?page=data-kegiatan" class="btn btn-warning">Kembali</a>
    </div>
  </div>
</div>