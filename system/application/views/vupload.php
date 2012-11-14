<html>
<head>
	<title> Teknik Upload </title>
	<link rel="stylesheet" href="<?php echo base_url();?>system/css/gallery.css" type="text/css">
</head>

<body>
<p> &nbsp; </p>
<div align="center">

<ul class="gallery">
<h2> Web Gallery </h2>
<?php if (isset($hasil) && count($hasil)):
	foreach($hasil as $row):
?>
<li> <a href="cupload/download/<?php echo $row->gambar;?>"/>
<em> <?php echo $row->nama; ?> </em>
<img src="<?php echo base_url();?>system/gambar/thumbnails/<?php echo $row->gambar;?>"/></a>
</li>
<?php endforeach;?>
<?php else :?>
<h4> Upload File </h4>
<?php endif; ?>

<?php
echo form_open_multipart('cupload');
echo form_input('nama');
echo form_upload('userfile');
echo form_submit('upload','Upload');
echo form_close();
?>   
</ul></div>
</body>
</div>
</html>