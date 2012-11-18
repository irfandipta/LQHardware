<html>
<head>
	<title> Integrasi CKEditor </title>
</head>
<body>

<?php echo form_open('cckeditor/simpan'); ?>
<?php echo $editor; ?>
<?php echo form_submit('submit', 'Submit'); ?>
<?php echo form_close(); ?>

</body>
</html>