<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Ekstrakurikuler</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_ekstrakurikuler" name="nama_ekstrakurikuler" placeholder="Nama Ekstrakurikuler" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Gambar Ekstrakurikuler</label>
				<div class="col-sm-6">
					<input type="file" class="form-control" id="gambar_ekstrakurikuler" name="gambar_ekstrakurikuler" placeholder="Gambar Ekstrakurikuler" required>
				</div>
			</div>


		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-ekstrakurikuler" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>
<script type="text/javascript" src="admin/ckeditor/ckeditor.js"></script>
<?php

    if (isset ($_POST['Simpan'])){
    //mulai proses simpan data
    	$nama_ekstrakurikuler=$_POST['nama_ekstrakurikuler'];
    	$fileName = $_FILES['gambar_ekstrakurikuler']['name'];
    	move_uploaded_file($_FILES['gambar_ekstrakurikuler']['tmp_name'], "admin/gambar/ekstrakurikuler/" . $_FILES['gambar_ekstrakurikuler']['name']);
			$sql_cek_gejala=mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_ekstrakurikuler WHERE nama_ekstrakurikuler='$nama_ekstrakurikuler'"));
       
    if($sql_cek_gejala > 0){
      echo "<script>
      Swal.fire({title: 'Data Ekstrakurikuler Yang Anda Masukkan Sudah Ada!',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-ekstrakurikuler';
          }
      })</script>";
     }else{
     	 $sql_simpan = "INSERT INTO tb_ekstrakurikuler (nama_ekstrakurikuler,  gambar_ekstrakurikuler) VALUES (
      		'".$_POST['nama_ekstrakurikuler']."',
		'$fileName')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);
    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-ekstrakurikuler';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-ekstrakurikuler';
          }
      })</script>";
    }}}
     //selesai proses simpan data
