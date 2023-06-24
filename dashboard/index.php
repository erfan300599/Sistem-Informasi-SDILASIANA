<?php
    //Mulai Sesion
    session_start();
    if (isset($_SESSION["ses_username"])==""){
	header("location: login.php");
    
    }else{
    	$data_pass=$_SESSION["ses_password"];
      $data_id = $_SESSION["ses_id"];
      $data_nama = $_SESSION["ses_nama"];
      $data_nip = $_SESSION["ses_nip"];
      $data_user = $_SESSION["ses_username"];

    }
    //KONEKSI DB
    include "inc/koneksi.php";

$satu_hari        = mktime(0,0,0,date("n"),date("j"),date("Y"));
       
          function tglIndonesia($str){
             $tr   = trim($str);
             $str    = str_replace(array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'), array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'), $tr);
             return $str;
         }
         date_default_timezone_set("Asia/Ujung_Pandang")
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SD INPRES LASIANA</title>
	<link rel="icon" href="dist/img/logoo.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Alert -->
	<script src="plugins/alert.js"></script>
</head>

<body class="hold-transition sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-primary navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#">
						<i class="fas fa-bars text-white"></i>
					</a>
				</li>
				<li>
					<a href="index.php" class="nav-link">
						<font color="white">
							<b>Selamat Datang <?php echo $data_nama; ?></b>
						</font>
					</a>
				</li>
			</ul>

			<!-- SEARCH FORM -->
			<ul class="navbar-nav ml-auto">
				<li class="nav-item d-none d-sm-inline-block">
					<a href="index.php" class="nav-link">
						<font color="white">
						<i class="nav-icon fas fa-calendar-alt"></i>
							<?php $tgl=date('Y-m-d'); ?>
							<b><?php echo tglIndonesia(date('d F Y', strtotime($tgl))) ?> |</b>
							<b><span id="jam"></span></b>
						</font>
					</a>
				</li>
			</ul>

		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="index.php" class="brand-link">
				<img src="dist/img/logoo.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
				<span class="brand-text">SDI LASIANA</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						<!-- Halaman Admin -->

						<li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="nav-icon fas fa-home"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>
								<li class="nav-item">
									<a href="?page=data-profil" class="nav-link">
										<i class="nav-icon fas fa-user"></i>
										<p>Data Profil</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=data-guru" class="nav-link">
										<i class="nav-icon fas fa-chalkboard-teacher"></i>
										<p>Data Guru</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=data-berita" class="nav-link">
										<i class="nav-icon fas fa-book"></i>
										<p>Data Berita</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=data-kegiatan" class="nav-link">
										<i class="nav-icon fas fa-calendar-alt"></i>
										<p>Data Kegiatan</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=data-kalender" class="nav-link">
										<i class="nav-icon fas fa-calendar-alt"></i>
										<p>Agenda Kegiatan</p>
									</a>
								</li>
						<li class="nav-item">
							<a href="?page=data-ekstrakurikuler" class="nav-link">
								<i class="nav-icon fas fa-cloud-meatball"></i>
								<p>
									Data Ekstrakurikuler
								</p>
							</a>
						</li>

						<li class="nav-header">Setting</li>

						<li class="nav-item">
							<a href="?page=update-password" class="nav-link">
								<i class="nav-icon fas fa-cogs"></i>
								<p>
									Update Password
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="?page=view-pengguna" class="nav-link">
								<i class="nav-icon fas fa-user"></i>
								<p>
									Profile
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a onclick="return confirm('Apakah anda yakin akan keluar ?')" href="logout.php" class="nav-link">
								<i class="nav-icon fas fa-arrow-circle-right"></i>
								<p>
									Logout
								</p>
							</a>
						</li>

				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
			</section>

			<!-- Main content -->
			<section class="content">
				<!-- /. WEB DINAMIS DISINI ############################################################################### -->
				<div class="container-fluid">

					<?php 
      if(isset($_GET['page'])){
          $hal = $_GET['page'];
  
          switch ($hal) {

				//profil sekolah
				case 'data-profil':
					include "admin/profilsekolah/data_profil.php";
					break;
				case 'edit-profil':
					include "admin/profilsekolah/edit_profil.php";
					break;
				case 'view-profil':
					include "admin/profilsekolah/view_profil.php";
					break;

								//berita
							case 'data-berita':
								include "admin/berita/data_berita.php";
								break;
							case 'add-berita':
								include "admin/berita/add_berita.php";
								break;
							case 'edit-berita':
								include "admin/berita/edit_berita.php";
								break;
							case 'del-berita':
								include "admin/berita/del_berita.php";
								break;
							case 'detail-berita':
								include "admin/berita/detail_berita.php";
								break;

								//kegiatan	
							case 'data-kegiatan':
								include "admin/kegiatan/data_kegiatan.php";
								break;
							case 'add-kegiatan':
								include "admin/kegiatan/add_kegiatan.php";
								break;
							case 'edit-kegiatan':
								include "admin/kegiatan/edit_kegiatan.php";
								break;
							case 'del-kegiatan':
								include "admin/kegiatan/del_kegiatan.php";
								break;
							case 'detail-kegiatan':
								include "admin/kegiatan/detail_kegiatan.php";
								break;

							//ekstrakurikuler
							case 'data-ekstrakurikuler':
								include "admin/ekstrakurikuler/data_ekstrakurikuler.php";
								break;
							case 'add-ekstrakurikuler':
								include "admin/ekstrakurikuler/add_ekstrakurikuler.php";
								break;
							case 'edit-ekstrakurikuler':
								include "admin/ekstrakurikuler/edit_ekstrakurikuler.php";
								break;
							case 'del-ekstrakurikuler':
								include "admin/ekstrakurikuler/del_ekstrakurikuler.php";
								break;

								//guru
							case 'data-guru':
								include "admin/guru/data_guru.php";
								break;
							case 'add-guru':
								include "admin/guru/add_guru.php";
								break;
							case 'edit-guru':
								include "admin/guru/edit_guru.php";
								break;
							case 'del-guru':
								include "admin/guru/del_guru.php";
								break;

							//kalender
							case 'data-kalender':
								include "admin/kalender/data_kalender.php";
								break;
							case 'add-kalendar':
								include "admin/kalender/add_calendar.php";
								break;
							case 'edit-kalender':
								include "admin/kalender/edit_kalender.php";
								break;
							case 'del-kalender':
								include "admin/kalender/del_kalender.php";
								break;
              
				//Pengguna
				case 'data-pengguna':
					include "admin/pengguna/data_pengguna.php";
					break;
				case 'add-pengguna':
					include "admin/pengguna/add_pengguna.php";
					break;
				case 'edit-pengguna':
					include "admin/pengguna/edit_pengguna.php";
					break;
				case 'del-pengguna':
					include "admin/pengguna/del_pengguna.php";
					break;
				case 'view-pengguna':
					include "admin/pengguna/view_pengguna.php";
					break;
				case 'view-admin':
					include "admin/pengguna/view_admin.php";
					break;
				case 'update-password':
					include "admin/pengguna/update_password.php";
					break;
				
				
          
              //default
              default:
                  echo "<center><h1> ERROR !</h1></center>";
                  break;    
          }

      }else{
        // Auto Halaman Home Pengguna
              include "home/admin.php";
          }
    ?>

				</div>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
					Copyright &copy; 2023. Developer -
				<a target="_blank" href="#">
					<strong> Ervanto Andreas</strong>
				</a>.
				All rights reserved.
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Select2 -->
	<script src="plugins/select2/js/select2.full.min.js"></script>
	<!-- DataTables -->
	<script src="plugins/datatables/jquery.dataTables.js"></script>
	<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
	<!-- page script -->
	<script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

	<script>
		$(function() {
			$("#example1").DataTable();
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
			});
		});
	</script>

	<script>
		$(function() {
			//Initialize Select2 Elements
			$('.select2').select2()

			//Initialize Select2 Elements
			$('.select2bs4').select2({
				theme: 'bootstrap4'
			})
		})
	</script>
<script type="text/javascript">
	window.onload = function(){jam();}
	function jam(){
		var e = document.getElementById('jam'),
		d = new Date(), h, m, s;
		h= d.getHours();
		m= set(d.getMinutes());
		s= set(d.getSeconds());

		e.innerHTML= h+':'+ m+':'+ s;

		setTimeout('jam()',1000);
	}

	function set(e){
		e = e < 10 ? '0'+ e: e;
		return e;
	}
</script>
</body>

</html>