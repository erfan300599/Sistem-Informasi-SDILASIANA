<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_ekstrakurikuler WHERE id_ekstrakurikuler='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);

    if ($data_cek['gambar_ekstrakurikuler']) {
      $gambar = "admin/gambar/ekstrakurikuler/" . $data_cek['gambar_ekstrakurikuler'];
    } else {
      $gambar = "admin/gambar/ekstrakurikuler/noimage.png";
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
					<input type="text" class="form-control" id="id_ekstrakurikuler" name="id_ekstrakurikuler" value="<?php echo $data_cek['id_ekstrakurikuler']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Ekstrakurikuler</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_ekstrakurikuler" name="nama_ekstrakurikuler" value="<?php echo $data_cek['nama_ekstrakurikuler']; ?>"
					/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Gambar Ekstrakurikuler</label>
				<div class="col-sm-6">
					<input type="file" class="form-control" id="upload" name="gambar_ekstrakurikuler" value="<?php echo $data_cek['nama_ekstrakurikuler']; ?>"
					/>
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
			<a href="?page=data-ekstrakurikuler" title="Kembali" class="btn btn-secondary">Batal</a>
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
   $fileName = $_FILES['gambar_ekstrakurikuler']['name'];
   if ($fileName) {
 move_uploaded_file($_FILES['gambar_ekstrakurikuler']['tmp_name'], "admin/gambar/ekstrakurikuler/" . $_FILES['gambar_ekstrakurikuler']['name']);
     $sql_ubah = "UPDATE tb_ekstrakurikuler SET 
		nama_ekstrakurikuler='".$_POST['nama_ekstrakurikuler']."',
		gambar_ekstrakurikuler='$fileName'
		WHERE id_ekstrakurikuler='".$_POST['id_ekstrakurikuler']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-ekstrakurikuler';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-ekstrakurikuler';
        }
      })</script>";
	    }}}
