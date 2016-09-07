<?php 

	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "distamben";

	mysql_connect($host,$user,$pass) or die("Gagal Koneksi");
	mysql_select_db($db) or die("Gagal Memilih Database");

 ?>