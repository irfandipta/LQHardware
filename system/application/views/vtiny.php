<html>
<head>
	<title> Integrasi TinyMCE </title>
</head>
<body>
<?php echo $this->tinyMce; ?>
<?php echo form_open('halo'); ?>
<?php echo form_textarea('keterangan'); ?>
<?php echo form_submit('submit', 'Submit'); ?>
<?php echo form_close(); ?>
</body>
</html>