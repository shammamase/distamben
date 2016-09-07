<?php 
	require_once ("config/koneksi.php");
	
	$title = $_POST['title'];
	$konten = $_POST['konten'];
	$simpan = $_POST['simpan'];
	$sql = "INSERT INTO berita (title,konten) VALUES ('$title','$konten')";
		if (isset($simpan)) {
			$query=mysql_query($sql);
			
		}
	
	switch (@$_GET['act']) {
		default:
?>
	<script type="text/javascript">
		function confirmdelete(delUrl) {
			if (confirm("Anda Yâkin Ingin Menghapus ?")) {
				document.location = delUrl;
			};
		}
	</script>
			<a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Tambah Berita</a>
			<div class="modal fade" id="modal-id">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Tambah Berita</h4>
						</div>
						<div class="modal-body">
							<form id="postForm" action="" method="post" enctype="multipart/form-data" onsubmit="return postForm()">
								<input type="text" name="title" class="form-control" placeholder="Title" required>
								<textarea name="konten" id="summernote" cols="30" rows="10"></textarea>
								  <div class="modal-footer">
									<input type="submit" name="simpan" value="Simpan" class="btn-primary">
								  </div>
							</form>
						</div>
						
					</div>
				</div>
			</div>
			 <script type="text/javascript">
					$(document).ready(function() {
						$('#summernote').summernote({
							height: "500px"
						});
					});
					var postForm = function(){
						var konten = $('textarea[name="konten"]').html($('#summernote').code());
					}
			</script>
			<br><br>
			<?php 
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
			
			<div class="panel panel-default">
				<div class="panel-body">
						<div class="col-xs-10 col-sm-10 col-md-10col-lg-10 textpanel">
							<?php echo $r['title']; ?>		
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<a href="?page=./admin/berita/berita&act=tampil&id=<?php echo $r['id_berita'];?>" title="Lihat"><span class="glyphicon glyphicon-list"></span></a>
							<a href="?page=./admin/berita/berita&act=edit&id=<?php echo $r['id_berita'];?>" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
							<a href=javascript:confirmdelete('?page=./admin/berita/berita&act=hapus&id=<?php echo $r['id_berita']; ?>') title="Hapus"><span class="glyphicon glyphicon-trash"></span></a>
						</div>
				</div>
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
		
		echo "<li><a href=?page=./admin/berita/berita&hal=$prev> &laquo; </a></li> ";
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
				echo "<li><a href=?page=./admin/berita/berita&hal=$i>$i</a></li> ";
		}
		}
	}
	if(@$hal < $total_halaman){
		$next = ($page + 1);
		echo "<li><a href=?page=./admin/berita/berita&hal=$next>&raquo;</a>";
		
	}
	echo "</ul>";
	echo "</center><br/>";
	// penutup bagian pagination dan read halaman berita
?>
			
<?php
			break;
			case "tampil":
			$edit = mysql_query("SELECT * FROM berita WHERE id_berita='$_GET[id]'");
			$redit = mysql_fetch_array($edit);
?>
			<div class="well">
				<h3 align="center"><?php echo $redit['title']; ?></h3>
				<p align="justify"><?php echo $redit['konten']; ?></p>
			</div>
<?php
			break;
			case "edit":
			$edit = mysql_query("SELECT * FROM berita WHERE id_berita='$_GET[id]'");
			$redit = mysql_fetch_array($edit);
?>
			<div class="well">
				<form action="?page=./admin/berita/updateberita" method="post" enctype="multipart/form-data">
					
					<input type="text" name="title" class="form-control" value="<?php echo $redit['title']; ?>">
					<textarea id="summernote" name="konten" cols="30" rows="10"><?php echo $redit['konten']; ?></textarea>
					<input type="submit" name="simpan" value="Ubah" class="btn-primary">
					<input type="hidden" name="id_berita" value="<?php echo $redit ['id_berita']; ?>">
				</form>
			</div>
			<script type="text/javascript">
					$(document).ready(function() {
						$('#summernote').summernote({
							height: "500px"
						});
					});
					
			</script>
<?php
			break;
			case "hapus":
			$queryhapus=mysql_query("DELETE FROM berita WHERE id_berita = '$_GET[id]'");
			if ($queryhapus) {
					?> <script type="text/javascript">alert("Data Sudah Dihapus")</script> <?php
					?> <script language="javascript">document.location.href="?page=./admin/berita/berita"</script> <?php
				}	

	}

 ?>
  

 
		
		
		
 