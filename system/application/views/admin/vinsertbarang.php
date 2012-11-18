<!DOCTYPE HTML>
<!--
	Monochromed: A responsive HTML5 website template by HTML5Templates.com
	Released for free under the Creative Commons Attribution 3.0 license (html5templates.com/license)
	Visit http://html5templates.com for more great templates or follow us on Twitter @HTML5T
-->
<html>
<title>LQ Hardware</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<noscript>
<link rel="stylesheet" href="<?php echo base_url();?>system/css/5grid/core.css" />
<link rel="stylesheet" href="<?php echo base_url();?>system/css/5grid/core-desktop.css" />
<link rel="stylesheet" href="<?php echo base_url();?>system/css/5grid/core-1200px.css" />
<link rel="stylesheet" href="<?php echo base_url();?>system/ss/5grid/core-noscript.css" />
<link rel="stylesheet" href="<?php echo base_url();?>system/css/style.css" />
<link rel="stylesheet" href="<?php echo base_url();?>system/system/css/style-desktop.css" />
<link rel="stylesheet" href="<?php echo base_url();?>system/system/css/craftyslide.css" />

</noscript>
<script src="<?php echo base_url();?>system/css/5grid/jquery.js"></script>
<script src="<?php echo base_url();?>system/css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>

<script type="text/javascript">
	var site_url = "<?php echo site_url();?>";
	function load_uri(uri,dom)
	{
		$.ajax({
			url: site_url+'/'+uri,
			success: function(response){			
			$(dom).html(response);
			},
		dataType:"html"  		
		});
		return false;
	}
	function show_extra_combo(combo,combo_level)
	{
		var id = $(combo).val();
		// buat dom '.combo-level' di dalam extra-combo jika belum ada
		var domcombo = 'combo-'+combo_level;
		if($('.'+domcombo).length == 0)
		{
			$('#extra-combo').append('&nbsp;<span class="'+domcombo+'"></span>');
		}
		load_uri("csecure/showchild/"+id+"/"+combo_level,'.'+domcombo);
	}
</script>
<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
</head><body>
<div id="header-wrapper">
	<header id="header" class="5grid-layout">
		<div class="row">
			<div class="12u" id="logo"> <!-- Logo -->
			       <h1><a><img src="<?php echo base_url();?>system/images/LQlogo.png" width="130" height="130" class="mobileUI-site-name"></a></h1>
			</div>
		</div>
		<div class="row">
			<div class="12u" id="menu">
				<nav class="mobileUI-site-nav">
					<ul>
						<li class="first"><?php echo anchor('csecure/usermasuk','List Item') ?></li>
                        <li><?php echo anchor('csecure/uploadbarang','Upload Item') ?></li>
                        <li><a href="">Setting Profile</a></li>
                        <li><a href="">Setting Category</a></li>
                        <li><a href="">Testimonial</a></li>
                        <li><a href="">Sign Out</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
</div>
<div id="page-wrapper">
	<div class="5grid-layout">
		<div id="page">
			<div class="row">
				<div class="12u">
                    <section id="content">
                        <h2>UPLOAD ITEM</h2>
                        <br><br>
                        <?php echo form_open_multipart('csecure/insertbarang'); ?>
                        <table>
                        <tr class="nama">
                            <td width="100px"><label for="name">Name</label></td>
                            <td><?php echo form_input('nama'); ?></td>
                        </tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        <tr class="harga">
                            <td width="100px"><label for="harga">Price</label></td>
                            <td><?php echo form_input('harga'); ?></td>
                        </tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        <tr class="stock">
                            <td width="100px"><label for="stock">Stock</label></td>
                            <td><?php echo form_input('stok'); ?></td>
                        </tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        <tr class="discount">
                            <td width="100px"><label for="discount">Discount (%)</label></td>
                            <td><?php echo form_input('diskon'); ?></td>
                        </tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        <tr class="category">
                            <td width="100px"><label for="category">Category</label></td>
                            <td>
								<script src="<?php echo base_url();?>system/js/jquery.js" type="text/javascript"></script>
								<?php echo form_dropdown('category',$category,'','onchange="show_extra_combo(this,1)"');?>
								<span id='extra-combo'></span>
                            </td>
                        </tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        <tr class="upload">
                            <td width="100px"><label for="upload">Image</label></td>
                            <td>
								<?php 
									$file = array(  
												'type' => 'file',
	                                  			'name'        => 'file',
	                                  			'id'          => 'file',
	                                  			'value'       => ' ',
												'class' => 'uploadfile');
									echo form_upload($file);
								?>
                            </td>
                        </tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        <tr class="submit">
                            <td>&nbsp;</td>
                            <td colspan="2"><?php echo form_submit('submit','SAVE', 'id="submit"'); ?></td>
                        </tr>
                        </table>
                        
                        <?php echo form_close(); ?>
                    </section>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="5grid-layout">
	<div id="copyright">
		<section>
			<p>&copy; LQ Hardware</p>
		</section>
	</div>
</div>
</body>
</html>