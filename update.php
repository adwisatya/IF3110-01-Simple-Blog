<?php
	include("connect.php");
	$nomor	=	$_POST['nomor'];
	$judul	=	$_POST['judul'];
	$tanggal = $_POST['tanggal'];
	$konten	=	$_POST['konten'];

	$query	=	mysql_query("UPDATE post SET judul='$judul',tanggal='$tanggal',konten='$konten' WHERE no=$nomor");
	echo "<script>alert('Posting berhasil diedit');window.location.assign('".$_SERVER['HTTP_REFERER']."');</script>";
?>
