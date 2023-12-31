<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_profil WHERE id_sekolah='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);

   if ($data_cek['gambar_sekolah']) {
      $gambar = "admin/gambar/" . $data_cek['gambar_sekolah'];
    } else {
      $gambar = "admin/gambar/noimage.png";
    }
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No Sistem</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="id_sekolah" name="id_sekolah" value="<?php echo $data_cek['id_sekolah']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Sekolah</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" value="<?php echo $data_cek['nama_sekolah']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Akreditasi</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="akreditasi_sekolah" name="akreditasi_sekolah" value="<?php echo $data_cek['akreditasi_sekolah']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="alamat_sekolah" name="alamat_sekolah" value="<?php echo $data_cek['alamat_sekolah']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kelurahan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="kel_sekolah" name="kel_sekolah" value="<?php echo $data_cek['kel_sekolah']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kecamatan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="kec_sekolah" name="kec_sekolah" value="<?php echo $data_cek['kec_sekolah']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kabupaten</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="kab_sekolah" name="kab_sekolah" value="<?php echo $data_cek['kab_sekolah']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Provinsi</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="prov_sekolah" name="prov_sekolah" value="<?php echo $data_cek['prov_sekolah']; ?>"
					/>
			</div>
		</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No. Telepon</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="no_telepon" name="no_telepon" value="<?php echo $data_cek['no_telepon']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Email Sekolah</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="email_sekolah" name="email_sekolah" value="<?php echo $data_cek['email_sekolah']; ?>"
					/>
			</div>
			</div>

 			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Gambar Sekolah</label>
				<div class="col-sm-6">
					<input type="file" class="form-control" id="upload" name="gambar_sekolah" value="<?php echo $data_cek['gambar_sekolah']; ?>"
					/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label"></label>
				<div class="col-sm-6">
					<img  id="preview" src="<?php echo $gambar; ?>" width="200px">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Visi</label>
				<div class="col-sm-6">
						<textarea class="ckeditor" id="visi_sekolah" name="visi_sekolah"><?php echo $data_cek['visi_sekolah']; ?></textarea>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Misi</label>
				<div class="col-sm-6">
						<textarea class="ckeditor" id="misi_sekolah" name="misi_sekolah"><?php echo $data_cek['misi_sekolah']; ?></textarea>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Sejarah Singkat</label>
				<div class="col-sm-6">
						<textarea class="ckeditor" id="sejarah_singkat" name="sejarah_singkat"><?php echo $data_cek['sejarah_singkat']; ?></textarea>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Sejarah Sekolah</label>
				<div class="col-sm-6">
						<textarea class="ckeditor" id="sejarah_sekolah" name="sejarah_sekolah"><?php echo $data_cek['sejarah_sekolah']; ?></textarea>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-profil" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>
<script type="text/javascript" src="admin/ckeditor/ckeditor.js"></script>
<script>
  function readURL(input) {

    if (input.files &&
      input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#preview').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#upload").change(function() {
    readURL(this);
  });

  $(function() {
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
    CKEDITOR.replace('editor1a');
    CKEDITOR.replace('editor2a');
  })
</script>
<?php

    if (isset ($_POST['Ubah'])){
   $fileName = $_FILES['gambar_sekolah']['name'];
   if ($fileName) {
 move_uploaded_file($_FILES['gambar_sekolah']['tmp_name'], "admin/gambar/" . $_FILES['gambar_sekolah']['name']);
     $sql_ubah = "UPDATE tb_profil SET 
		nama_sekolah='".$_POST['nama_sekolah']."',
		akreditasi_sekolah='".$_POST['akreditasi_sekolah']."',
		alamat_sekolah='".$_POST['alamat_sekolah']."',
		kel_sekolah='".$_POST['kel_sekolah']."',
		kec_sekolah='".$_POST['kec_sekolah']."',
		kab_sekolah='".$_POST['kab_sekolah']."',
		prov_sekolah='".$_POST['prov_sekolah']."',
		no_telepon='".$_POST['no_telepon']."',
		email_sekolah='".$_POST['email_sekolah']."',
		gambar_sekolah='$fileName',
		visi_sekolah='".$_POST['visi_sekolah']."',
		misi_sekolah='".$_POST['misi_sekolah']."',
		sejarah_singkat='".$_POST['sejarah_singkat']."',
		sejarah_sekolah='".$_POST['sejarah_sekolah']."'
		WHERE id_sekolah='".$_POST['id_sekolah']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-profil';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-profil';
        }
      })</script>";
	    } } }
?>