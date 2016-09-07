<?php 
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	include 'config/koneksi.php';
	include 'menu.php';

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Distamben Bolmut</title>
 	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
 	<link rel="stylesheet" href="css.css">
 	<link rel="stylesheet" type="text/css" href="css/jsdatepick.css" />
 	<link rel="stylesheet" href="summernote/summernote.css">
	<script type="text/javascript" src="js/jsdatepick.js"></script>
 	<script type="text/javascript" src="bootstrap/jquery-2.2.0.min.js"></script>
 	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
 	<script type="text/javascript" src="summernote/summernote.min.js"></script>
	<script language="javascript" type="text/javascript">
 	window.onload = function(){		
				g_globalObject2 = new JsDatePick({
					useMode:1,
					isStripped:true,
					target:"jsCalendar",
					cellColorScheme:"#eaeaea"
				});
			};
	</script>
 </head>
 <body>
 	<div class="container">
 		<div class="jumbotronku">
 			<div class="textjum">DINAS PERTAMBANGAN DAN ENERGI</div>
 			<div class="textjum">KABUPATEN BOLAANG MONGGONDOW UTARA</div>
 			<div class="logo"><img src="img/Logo Bolmut.png" height="87" width="80" alt=""></div>
 			<div class="logo2"><img src="img/Logo ESDM.png" height="81" width="80" alt=""></div>
 			<p><marquee>Dinas Pertambangan Dan Energi Kabupaten Bolmut Jln Pelabuhan No 27 Boroko Kecamatan Kaidipang</marquee></p>
 		</div>
 		<?php menu_admin() ?>
 	</div>
 	<div class="container container1">
 		<?php 
 			if (isset($_GET['page'])) {
 				$page = $_GET['page'];
 				$halaman = "$page.php";

 				if (!file_exists($halaman) || empty($page)) {
 					include "tamu.php";
 				} else {
 					include "$halaman";
 				}
 			} else {
 				include "tamu.php";
 			}
 		 ?>
 	</div>
 	<div class="container footer">
 		<p style="color:white">Copy 2016 by Dinas Pertambangan dan Energi Kabupaten Bolaang Monggondow Utara</p>
 	</div>
 </body>
 </html>