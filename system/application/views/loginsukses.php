<html>
<head>
	<title> Login Sukses </title>
</head>
<body>

<?php foreach($tampil as $row): ?>
<h4> Anda Login sebagai <b> <?php echo $row->nama; ?> </b> </h4>
<?php endforeach; ?><br>
Anda berhasil login <br>
<a href="<?php echo site_url(); ?>/clogin/logout"> Logout </a>

</body>
</html>