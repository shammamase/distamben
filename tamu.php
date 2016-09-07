<?php 
	include 'fungsi.php';
	switch (@$_GET['act']) {
		
		default:
?>
		<div class="judul">Berita Terkini</div>
 		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
<?php
		// steril

		// bagian pagination membuat halaman dan read halaman
					if(!isset($_GET['hal'])){
		@$page = 1;
		@$hal = 1;
	} else {
		@$page = $_GET['hal'];
	}
	$jmlperhalaman = 5;  // jumlah record per halaman
	$offset = (($page * $jmlperhalaman) - $jmlperhalaman);
	
	$tampil=mysql_query("SELECT * FROM berita ORDER BY id_berita desc LIMIT $offset, $jmlperhalaman");
    
	$no = 1;
    while ($r=mysql_fetch_array($tampil)){
      
    $lebar=strlen($no);
    switch($lebar){
      case 1:
      {
        $g="0".$no;
        break;     
      }
      case 2:
      {
        $g=$no;
        break;     
      }      
    } 
	?>
		
 		
			<div class="berita">
 			<h3><?php echo $r['title'] ?></h3>
 			<hr>
 			<p><?php echo substr($r['konten'], 0,250) ?></p>
 			<a href="?page=tamu&act=detailberita&id=<?php echo $r['id_berita'] ?>"><button type="button" class="btn btn-info">Selengkapnya</button></a>
 			</div>
 	<?php
 		$no++;
		}
	 ?>
	 <?php
// membuat nomor halaman
	$total_record = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM berita"),0);
	$total_halaman = ceil($total_record / $jmlperhalaman);
	echo "<center>";
	echo "<ul class='pagination'>";
	$perhal=4;
	if(@$hal > 1){
		$prev = ($page - 1);
		
		echo "<li><a href=?page=tamu&hal=$prev> &laquo; </a></li> ";
	}
	if($total_halaman<=10){
	$hal1=1;
	$hal2=$total_halaman;
	}else{
	$hal1=$hal-$perhal;
	$hal2=$hal+$perhal;
	}
	if(@$hal<=5){
	$hal1=1;
	}
	if(@$hal<$total_halaman){
	$hal2=@$hal+$perhal;
	}else{
	$hal2=@$hal;
	}
	for($i = $hal1; $i <= $hal2; $i++){
		if((@$hal) == $i){
			echo "<li><a href=#>$i</a></li>";
			} else {
		if($i<=$total_halaman){
				echo "<li><a href=?page=tamu&hal=$i>$i</a></li> ";
		}
		}
	}
	if(@$hal < $total_halaman){
		$next = ($page + 1);
		echo "<li><a href=?page=tamu&hal=$next>&raquo;</a>";
		
	}
	echo "</ul>";
	echo "</center><br/>";
	// penutup bagian pagination dan read halaman berita
?>
 			
 		</div>
 		<?php kanan() ?>
	<?php
			break;
			case "uud":
			?>
			<div class="judul">Undang Undang</div>
 		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
 			<div class="berita">
 			<h3>Undang-Undang</h3>
 			<hr>
 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt in enim illo aliquam corporis cumque quibusdam, quam 
 			similique rerum est aliquid, provident placeat doloremque, iste aut! Obcaecati, qui maxime? Ullam.
 			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, debitis, libero. Sit delectus quas illum. Maxime sint ipsa impedit officiis hic quisquam exercitationem, sed, error, numquam, quasi eius veritatis voluptate.
 			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore magnam temporibus vel fugit exercitationem fugiat delectus ullam amet omnis dignissimos laudantium illum aut beatae modi quasi cum, vitae corrupti voluptates.</p>
 			</div>
 		</div>
 		<?php kanan() ?>
	<?php
		break;
		case "permen":
		?>
		<div class="judul">Peraturan Menteri</div>
 		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
 			<div class="berita">
 			<h3>Peraturan Menteri</h3>
 			<hr>
 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt in enim illo aliquam corporis cumque quibusdam, quam 
 			similique rerum est aliquid, provident placeat doloremque, iste aut! Obcaecati, qui maxime? Ullam.
 			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, debitis, libero. Sit delectus quas illum. Maxime sint ipsa impedit officiis hic quisquam exercitationem, sed, error, numquam, quasi eius veritatis voluptate.
 			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore magnam temporibus vel fugit exercitationem fugiat delectus ullam amet omnis dignissimos laudantium illum aut beatae modi quasi cum, vitae corrupti voluptates.</p>
 			</div>
 		</div>
 		<?php kanan() ?>
	<?php
		break;
		case "pp":
		?>
		<div class="judul">Peraturan Pemerintah</div>
 		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
 			<div class="berita">
 			<h3>Peraturan Pemerintah</h3>
 			<hr>
 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt in enim illo aliquam corporis cumque quibusdam, quam 
 			similique rerum est aliquid, provident placeat doloremque, iste aut! Obcaecati, qui maxime? Ullam.
 			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, debitis, libero. Sit delectus quas illum. Maxime sint ipsa impedit officiis hic quisquam exercitationem, sed, error, numquam, quasi eius veritatis voluptate.
 			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore magnam temporibus vel fugit exercitationem fugiat delectus ullam amet omnis dignissimos laudantium illum aut beatae modi quasi cum, vitae corrupti voluptates.</p>
 			</div>
 		</div>
 		<?php kanan() ?>
	<?php
		break;
		case "latarbelakang":
		?>
		<div class="judul">Latar Belakang</div>
 		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
 			<div class="berita">
 			<h3>Sejarah</h3>
 			<hr>
 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt in enim illo aliquam corporis cumque quibusdam, quam 
 			similique rerum est aliquid, provident placeat doloremque, iste aut! Obcaecati, qui maxime? Ullam.
 			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, debitis, libero. Sit delectus quas illum. Maxime sint ipsa impedit officiis hic quisquam exercitationem, sed, error, numquam, quasi eius veritatis voluptate.
 			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore magnam temporibus vel fugit exercitationem fugiat delectus ullam amet omnis dignissimos laudantium illum aut beatae modi quasi cum, vitae corrupti voluptates.</p>
 			</div>
 		</div>
 		<?php kanan() ?>
	<?php
		break;
		case "tugas":
		?>
		<div class="judul">Tugas Dan Fungsi</div>
 		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
 			<div class="berita">
 			<h3>Tugas</h3>
 			<hr>
 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt in enim illo aliquam corporis cumque quibusdam, quam 
 			similique rerum est aliquid, provident placeat doloremque, iste aut! Obcaecati, qui maxime? Ullam.
 			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, debitis, libero. Sit delectus quas illum. Maxime sint ipsa impedit officiis hic quisquam exercitationem, sed, error, numquam, quasi eius veritatis voluptate.
 			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore magnam temporibus vel fugit exercitationem fugiat delectus ullam amet omnis dignissimos laudantium illum aut beatae modi quasi cum, vitae corrupti voluptates.</p>
 			<h3>Fungsi</h3>
 			<hr>
 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt in enim illo aliquam corporis cumque quibusdam, quam 
 			similique rerum est aliquid, provident placeat doloremque, iste aut! Obcaecati, qui maxime? Ullam.
 			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, debitis, libero. Sit delectus quas illum. Maxime sint ipsa impedit officiis hic quisquam exercitationem, sed, error, numquam, quasi eius veritatis voluptate.
 			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore magnam temporibus vel fugit exercitationem fugiat delectus ullam amet omnis dignissimos laudantium illum aut beatae modi quasi cum, vitae corrupti voluptates.</p>
 			</div>
 		</div>
 		<?php kanan() ?>
	<?php
		break;
		case "struktur":
		?>
		<div class="judul">Struktur Organisasi</div>
 		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
 			<div class="berita">
 			<h3>Struktur Organisasi</h3>
 			<hr>
 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt in enim illo aliquam corporis cumque quibusdam, quam 
 			similique rerum est aliquid, provident placeat doloremque, iste aut! Obcaecati, qui maxime? Ullam.
 			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, debitis, libero. Sit delectus quas illum. Maxime sint ipsa impedit officiis hic quisquam exercitationem, sed, error, numquam, quasi eius veritatis voluptate.
 			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore magnam temporibus vel fugit exercitationem fugiat delectus ullam amet omnis dignissimos laudantium illum aut beatae modi quasi cum, vitae corrupti voluptates.</p>
 			</div>
 		</div>
 		<?php kanan() ?>
	<?php
		break;
		case "visimisi":
		?>
		<div class="judul">Visi Dan Misi</div>
 		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
 			<div class="berita">
 			<h3>Visi</h3>
 			<hr>
 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt in enim illo aliquam corporis cumque quibusdam, quam 
 			similique rerum est aliquid, provident placeat doloremque, iste aut! Obcaecati, qui maxime? Ullam.
 			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, debitis, libero. Sit delectus quas illum. Maxime sint ipsa impedit officiis hic quisquam exercitationem, sed, error, numquam, quasi eius veritatis voluptate.
 			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore magnam temporibus vel fugit exercitationem fugiat delectus ullam amet omnis dignissimos laudantium illum aut beatae modi quasi cum, vitae corrupti voluptates.</p>
 			<h3>Misi</h3>
 			<hr>
 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt in enim illo aliquam corporis cumque quibusdam, quam 
 			similique rerum est aliquid, provident placeat doloremque, iste aut! Obcaecati, qui maxime? Ullam.
 			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, debitis, libero. Sit delectus quas illum. Maxime sint ipsa impedit officiis hic quisquam exercitationem, sed, error, numquam, quasi eius veritatis voluptate.
 			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore magnam temporibus vel fugit exercitationem fugiat delectus ullam amet omnis dignissimos laudantium illum aut beatae modi quasi cum, vitae corrupti voluptates.</p>
 			</div>
 		</div>
 		<?php kanan() ?>
	<?php
		break;
		case "kegiatan";
		?>
		<div class="judul">Kegiatan</div>
 		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
 			<div class="berita">
 			<h3>Kegiatan</h3>
 			<hr>
 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt in enim illo aliquam corporis cumque quibusdam, quam 
 			similique rerum est aliquid, provident placeat doloremque, iste aut! Obcaecati, qui maxime? Ullam.
 			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, debitis, libero. Sit delectus quas illum. Maxime sint ipsa impedit officiis hic quisquam exercitationem, sed, error, numquam, quasi eius veritatis voluptate.
 			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore magnam temporibus vel fugit exercitationem fugiat delectus ullam amet omnis dignissimos laudantium illum aut beatae modi quasi cum, vitae corrupti voluptates.</p>
 			</div>
 		</div>
 		<?php kanan() ?>
	<?php
		break;
		case "kontak";
		?>
		<div class="judul">Kontak</div>
 		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
 			<div class="berita">
 			<h3>Kontak</h3>
 			<hr>
 			
 			</div>
 		</div>
 		<?php kanan() ?>
	<?php
	break;
	case "detailberita";
	$edit = mysql_query("SELECT * FROM berita WHERE id_berita='$_GET[id]'");
	$redit = mysql_fetch_array($edit);
	?>
		<div class="judul">Berita</div>
 		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
			<div class="well">
				<h3 align="center"><?php echo $redit['title']; ?></h3>
				<p align="justify"><?php echo $redit['konten']; ?></p>
			</div>
		</div>
		<?php kanan() ?>
	<?php
	}
 ?>