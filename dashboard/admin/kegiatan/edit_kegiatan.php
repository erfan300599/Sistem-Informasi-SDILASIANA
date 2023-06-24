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
					<input type="text" class="form-control" id="id_kegiatan" name="id_kegiatan" value="<?php echo $data_cek['id_kegiatan']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Judul Kegiatan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="judul_kegiatan" name="judul_kegiatan" value="<?php echo $data_cek['judul_kegiatan']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Konten Kegiatan</label>
				<div class="col-sm-6">
					<textarea class="ckeditor" id="konten_kegiatan" name="konten_kegiatan"><?php echo $data_cek['konten_kegiatan']; ?></textarea> 
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Posting</label>
				<div class="col-sm-6">
					<input type="date" class="form-control" id="tanggal_postingan" name="tanggal_postingan" value="<?php echo $data_cek['tanggal_postingan']; ?>"  required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">User Posting</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="user_postingan" name="user_postingan" value="<?php echo $data_cek['user_postingan']; ?>" readonly>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Gambar</label>
				<div class="col-sm-6">
					<input type="file" class="form-control" id="upload" name="gambar_kegiatan" value="<?php echo $data_cek['gambar_kegiatan']; ?>"/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label"></label>
				<div class="col-sm-6">
					<img  id="preview" src="<?php echo $gambar; ?>" width="200px">
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-kegiatan" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
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
   $fileName = $_FILES['gambar_kegiatan']['name'];
   if ($fileName) {
 move_uploaded_file($_FILES['gambar_kegiatan']['tmp_name'], "admin/gambar/kegiatan/" . $_FILES['gambar_kegiatan']['name']);
     $sql_ubah = "UPDATE tb_kegiatan SET 
		judul_kegiatan='".$_POST['judul_kegiatan']."',
		konten_kegiatan='".$_POST['konten_kegiatan']."',
		tanggal_postingan='".$_POST['tanggal_postingan']."',
		user_postingan='".$_POST['user_postingan']."',
		gambar_kegiatan='$fileName'
		WHERE id_kegiatan='".$_POST['id_kegiatan']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-kegiatan';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-kegiatan';
        }
      })</script>";
    }
   }
}
