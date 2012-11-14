<html>
<head>
	<title> View Latihan 1 </title>
</head>
<body>
<h3> <?php echo anchor('ckomentar/tambahdata', 'Tambah Data'); ?> </h3>
<?php
if (empty ($hasil)) {
	echo "Tidak ada data";
}
else {
?>

<h3> Daftar Komentar </h3>
<table border=1 cellpadding=5>
<tr>
	<th> No </th>
	<th> Nama </th>
	<th> URL </th>
	<th> Pesan </th>
	<th> Aksi </th>
</tr>
<?php 
$no = 1;
foreach ($hasil as $data): 
?>
<tr>
	<td> <?php echo $no; ?> </td>
	<td> <?php echo $data->nama; ?> </td>
	<td> <?php echo $data->url; ?> </td>
	<td> <?php echo $data->pesan; ?> </td>
  <td> <a href="updatedata/<?php echo $data->id; ?>">Ubah</a> | <a href="hapusdata/<?php echo $data->id; ?>">Hapus</a> </td>
</tr>
<?php 
$no++;
endforeach; 
?>
</table>
<?php
}
?>
</body>
</html>
