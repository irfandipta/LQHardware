<?php 
switch ($jenis)
{
	case "Admin": include ("admin/vdasboard.php");break;
	case "Manajemen_Barang": include ("admin/vdasboard.php");break;
	case "Edit_Barang": include ("admin/veditbarang.php");break;
	case "Insert_Barang": include ("admin/vinsertbarang.php");break;
}
?>