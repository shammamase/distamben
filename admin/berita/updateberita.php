<?php 

	$queryupdate = mysql_query("UPDATE berita SET title = '$_POST[title]', konten = '$_POST[konten]' WHERE id_berita = '$_POST[id_berita]'");
			if ($queryupdate) {
			?> <script language="javascript">alert("Data Sudah Diubah")</script> <?php
			?> <script language="javascript">document.location.href="?page=./admin/berita/berita"</script> <?php
}
 ?>