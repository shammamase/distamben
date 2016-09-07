<?php 

	function menu_tamu(){
?>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><b>Distamben Bolmut</b></a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href=".">Beranda</a></li>
					<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Regulasi <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo "?page=tamu&act=uud";?>">Undang-Undang</a></li>
							<li><a href="<?php echo "?page=tamu&act=permen";?>">Peraturan Mentri</a></li>
							<li><a href="<?php echo "?page=tamu&act=pp";?>">Peraturan Pemerintah</a></li>
						</ul>
					</li>
					<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo "?page=tamu&act=latarbelakang";?>">Latar Belakang</a></li>
							<li><a href="<?php echo "?page=tamu&act=tugas";?>">Tugas dan Fungsi</a></li>
							<li><a href="<?php echo "?page=tamu&act=struktur";?>">Struktur Organisasi</a></li>
							<li><a href="<?php echo "?page=tamu&act=visimisi";?>">Visi Misi</a></li>
							<li><a href="<?php echo "?page=tamu&act=kegiatan";?>">Kegiatan</a></li>
						</ul>
					</li>
					<li><a href="<?php echo "?page=tamu&act=kontak";?>">Kontak</a></li>
				</ul>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Cari">
					</div>
					<button type="submit" class="btn btn-default">Cari</button>
				</form>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
<?php
	}
 ?>

 <?php 

	function menu_admin(){
?>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><b>Distamben Bolmut</b></a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo "?page=./admin/berita/berita"; ?>">Berita</a></li>
					<li><a href="<?php echo "?page=./admin/kegiatan/kegiatan"; ?>">Kegiatan</a></li>
					<li><a href="<?php echo "?page=./admin/pegawai/pegawai"; ?>">Pegawai</a></li>
				</ul>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Cari">
					</div>
					<button type="submit" class="btn btn-default">Cari</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Logout</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
<?php
	}
 ?>
