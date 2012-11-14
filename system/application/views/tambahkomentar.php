<html>
<head>
	<title> Menambah Data </title>
</head>
<body>

<h3> Tambah Data </h3>

<?php echo form_open('ckomentar/tambahdata'); ?>

<table>
<tr valign="top">
	<td> Nama </td>
	<td> : </td>
	<td> <?php echo form_input('nama'); ?> <?php echo form_error('nama'); ?> </td>
</tr>
<tr valign="top">
	<td> Url </td>
	<td> : </td>
	<td> <?php echo form_input('url'); ?> <?php echo form_error('url'); ?> </td>
</tr>
<tr valign="top">
	<td> Pesan </td>
	<td> : </td>
	<td> <?php echo form_textarea('pesan'); ?> <?php echo form_error('pesan'); ?>  </td>
</tr>
<tr>
	<td> <?php echo form_submit('submit', 'Simpan', 'id="submit"'); ?> </td>
</tr>
</table>
<?php echo form_close(); ?>

</body>
</html>
