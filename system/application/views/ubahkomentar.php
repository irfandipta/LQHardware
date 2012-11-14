<html>
<head>
	<title> Mengubah Data </title>
</head>
<body>
<h3> Ubah Data </h3>
<?php echo form_open('ckomentar/updatedata/'.$hasil->id); ?>

<table>
<tr>
	<td> Nama </td>
	<td> : </td>
	<td> <?php echo form_input('nama', $hasil->nama); ?> </td>
</tr>
<tr>
	<td> Url </td>
	<td> : </td>
	<td> <?php echo form_input('url', $hasil->url); ?> </td>
</tr>
<tr>
	<td> Pesan </td>
	<td> : </td>
	<td> <?php echo form_textarea('pesan', 
            $hasil->pesan); ?> </td>
</tr>
<tr>
	<td> <?php echo form_submit('submit', 'Ubah', 'id="submit"'); ?> </td>
</tr>
</table>
<?php echo form_close(); ?>

</body>
</html>
