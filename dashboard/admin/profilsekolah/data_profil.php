<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Sekolah</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Sekolah</th>
						<th>Akreditasi</th>
						<th>Alamat</th>
						<th>No. Telepon</th>
						<th>Email</th>
						<th>Gambar Sekolah</th>
						<th>Visi</th>
						<th>Sejarah Singkat</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			  $sql = $koneksi->query("SELECT * FROM tb_profil");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['nama_sekolah']; ?>
						</td>
						<td>
							<?php echo $data['akreditasi_sekolah']; ?>
						</td>

						<td>
							<?php echo $data['alamat_sekolah']; ?>
						</td>

						<td>
							<?php echo $data['no_telepon']; ?>
						</td>

						<td>
							<?php echo $data['email_sekolah']; ?>
						</td>

						<td>
							<?php $gambar="admin/gambar/" . $data['gambar_sekolah'];?>
							<div class="text-center">
								<img src="<?php echo $gambar; ?>" style="width: 200px;">
							</div>
							
						</td>

						<td>
							<?php echo $data['visi_sekolah']; ?>
						</td>

						<td>
							<?php echo $data['sejarah_singkat']; ?>
						</td>

						<td>
							<a href="?page=view-profil&kode=<?php echo $data['id_sekolah']; ?>" title="Detail"
							 class="btn btn-info btn-sm">
								<i class="fa fa-eye"></i>
							</a>
							<a href="?page=edit-profil&kode=<?php echo $data['id_sekolah']; ?>" title="Ubah"
							 class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
						</td>
					</tr>

					<?php
              }
            ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->