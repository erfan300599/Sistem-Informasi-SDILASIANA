<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Guru</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_guru" name="nama_guru" placeholder="Nama Guru" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Bidang Studi</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="bidang_guru" name="bidang_guru" placeholder="Bidang Guru" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Gambar Guru</label>
				<div class="col-sm-6">
					<input type="file" class="form-control" id="gambar_guru" name="gambar_guru" placeholder="Gambar Guru" required>
				</div>
			</div>


		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-guru" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>
<script type="text/javascript" src="admin/ckeditor/ckeditor.js"></script>
<?php

    if (isset ($_POST['Simpan'])){
    //mulai proses simpan data
    	$nama_guru=$_POST['nama_guru'];
    	$bidang_guru=$_POST['bidang_guru'];
    	$fileName = $_FILES['gambar_guru']['name'];
    	move_uploaded_file($_FILES['gambar_guru']['tmp_name'], "admin/gambar/guru/" . $_FILES['gambar_guru']['name']);
			$sql_cek_gejala=mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_guru WHERE nama_guru='$nama_guru'"));
       
    if($sql_cek_gejala > 0){
      echo "<script>
      Swal.fire({title: 'Data Guru Yang Anda Masukkan Sudah Ada!',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-guru';
          }
      })</script>";
     }else{
     	 $sql_simpan = "INSERT INTO tb_guru (nama_guru, bidang_guru,  gambar_guru) VALUES (
      		'".$_POST['nama_guru']."',
      		'".$_POST['bidang_guru']."',
		'$fileName')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);
    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-guru';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-guru';
          }
      })</script>";
    }}}
     //selesai proses simpan data
