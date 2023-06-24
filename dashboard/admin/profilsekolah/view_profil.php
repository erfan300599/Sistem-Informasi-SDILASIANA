<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from tb_profil where id_sekolah ='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);


   if ($data_cek['gambar_sekolah']) {
      $gambar = "admin/gambar/" . $data_cek['gambar_sekolah'];
    } else {
      $gambar = "admin/gambar/noimage.png";
    }
    }
?>

<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-info-circle"></i> Detail Sekolah</h3>
		</h3>
		<div class="card-tools">
		</div>
	</div>
	<div class="card-body p-0">
		<table class="table">
			<tbody>
				<tr>
					  <td>
            <?php $gambar="admin/gambar/" . $data_cek['gambar_sekolah'];?>
              <div class="text-center">
                <img src="<?php echo $gambar; ?>" style="width: 200px;">
              </div>
            </td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Nama Sekolah</b>
					</td>
					<td>:
						<?php echo $data_cek['nama_sekolah']; ?>
					</td>
				</tr>

				<tr>
					<td style="width: 150px">
						<b>Akreditasi</b>
					</td>
					<td>:
						<?php echo $data_cek['akreditasi_sekolah']; ?>
					</td>
				</tr>

				<tr>
					<td style="width: 150px">
						<b>Alamat</b>
					</td>
					<td>:
						<?php echo $data_cek['alamat_sekolah']; ?>
					</td>
				</tr>

				<tr>
					<td style="width: 150px">
						<b>Kelurahan</b>
					</td>
					<td>:
						<?php echo $data_cek['kel_sekolah']; ?>
					</td>
				</tr>

				<tr>
					<td style="width: 150px">
						<b>Kecamatan</b>
					</td>
					<td>:
						<?php echo $data_cek['kec_sekolah']; ?>
					</td>
				</tr>

				<tr>
					<td style="width: 150px">
						<b>Kabupaten</b>
					</td>
					<td>:
						<?php echo $data_cek['kab_sekolah']; ?>
					</td>
				</tr>


				<tr>
					<td style="width: 150px">
						<b>Provinsi</b>
					</td>
					<td>:
						<?php echo $data_cek['prov_sekolah']; ?>
					</td>
				</tr>

				<tr>
					<td style="width: 150px">
						<b>No. Telepon</b>
					</td>
					<td>:
						<?php echo $data_cek['no_telepon']; ?>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						<b>Email</b>
					</td>
					<td>:
						<?php echo $data_cek['email_sekolah']; ?>
					</td>
				</tr>

			</tbody>
		</table>
	<div class="card">
      <div class="card-header bg-secondary">
        <b> Visi Sekolah</b>
      </div>
      <div class="card-body">
        <p class="card-text"><?php echo $data_cek['visi_sekolah']; ?></p>
      </div>
 	 </div>

 	 <div class="card">
      <div class="card-header bg-secondary">
        <b> Misi Sekolah</b>
      </div>
      <div class="card-body">
        <p class="card-text"><?php echo $data_cek['misi_sekolah']; ?></p>
      </div>
 	 </div>

 	 <div class="card">
      <div class="card-header bg-secondary">
        <b> Sejarah Sekolah</b>
      </div>
      <div class="card-body">
        <p class="card-text"><?php echo $data_cek['sejarah_sekolah']; ?></p>
      </div>
 	 </div>

		<div class="card-footer">
			<a href="?page=data-profil" class="btn btn-warning">Kembali</a>
		</div>
	</div>
</div>