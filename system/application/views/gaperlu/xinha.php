<html>
<head>
	<title> Integrasi Xinha </title>
	<?php echo $xinha_java; ?>
</head>
<body>

<?php echo form_open('cxinha/simpan'); ?>

<?php
$data = array(
  'name'  => 'txt',
  'id' => 'txt',
  'rows' => '25',
  'cols'  => '100'
   );

echo form_textarea($data);

?>
<?php echo form_submit('submit', 'Submit'); ?>
<?php echo form_close(); ?>
</form>
</body>
</html>  