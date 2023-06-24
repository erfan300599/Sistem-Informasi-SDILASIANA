<?php

  $sql = $koneksi->query("SELECT COUNT(id_berita) as berita  from tb_berita");
  while ($data= $sql->fetch_assoc()) {
    $berita=$data['berita'];
  }
   $sql = $koneksi->query("SELECT COUNT(id_kegiatan) as kegiatan  from tb_kegiatan");
  while ($data= $sql->fetch_assoc()) {
    $kegiatan=$data['kegiatan'];
  }
   $sql = $koneksi->query("SELECT COUNT(id_ekstrakurikuler) as ekstrakurikuler  from tb_ekstrakurikuler");
  while ($data= $sql->fetch_assoc()) {
    $ekstrakurikuler=$data['ekstrakurikuler'];
  }


?>

<div class="row">
	<!-- Berita -->
	<div class="col-lg-4 col-6">
		<!-- small box -->
		<div class="small-box bg-success">
			<div class="inner">
				<h3>
					<?php echo $berita;  ?>
				</h3>

				<p>Berita</p>
			</div>
			<div class="icon text-white">
				<i class="ion ion-social-designernews"></i>
			</div>
		</div>
	</div>
	<!-- Kegiatan -->
	<div class="col-lg-4 col-6">
		<!-- small box -->
		<div class="small-box bg-secondary">
			<div class="inner">
				<h3>
					<?php echo $kegiatan;  ?>
				</h3>

				<p>Kegiatan</p>
			</div>
			<div class="icon text-white">
				<i class="ion ion-document-text"></i>
			</div>
		</div>
	</div>
	<!-- Ektrakurikuler -->
	<div class="col-lg-4 col-6">
		<!-- small box -->
		<div class="small-box bg-primary">
			<div class="inner">
				<h3>
					<?php echo $ekstrakurikuler;  ?>
				</h3>

				<p>Ekstrakurikuler</p>
			</div>
			<div class="icon text-white">
				<i class="ion ion-ios-football"></i>
			</div>
		</div>
	</div>

</div>