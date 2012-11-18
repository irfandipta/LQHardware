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
					<div class="row">
                      <section id="content">
                            <h2>LIST ITEM</h2>
                            <br><br>
                           	<table class="hovertable">
                            	<tr>
                                	<th width="100px">NO</th>
                                    <th width="500px">Item Name</th>
                                    <th width="100px">Price</th>
                                    <th width="100px">Category</th>
                                    <th width="100px">Stock</th>
                                    <th width="100px">Discount</th>
                                    <th width="200px">Action</th>
                                </tr>
                                <?php
									$i = 1;
									if($daftarbarang->result() == NULL){
										?>
										<tr>
                                        	<td align="center" colspan="7"><p>Empty Table</p></td>
                                        </tr>
										<?php
									}
									foreach($daftarbarang->result() as $row) :
									?>
                                    	<tr>
                                        	<td align="center"><p><?php echo $i; ?></p></td>
                                            <td><p><?php echo $row->nama; ?></p></td>
                                            <td align="center"><p><?php echo $row->harga; ?></p></td>
                                            <td><p><?php echo $row->kategori; ?></p></td>
                                            <td align="center"><p><?php echo $row->stok; ?></p></td>
                                            <td align="center"><p><?php echo $row->diskon; ?></p></td>
                                            <td align="center">
                                            	<p>
													<?php echo anchor('csecure/editbarang/'.$row->id,'Edit') ?>
                                                    &nbsp;&nbsp;|&nbsp;&nbsp;
													<?php echo anchor('csecure/deletebarang/'.$row->id,'Delete') ?>
                                                </p>
                                            </td>
                                        </tr>
                                    <?php
									$i++;
									endforeach;
								?>
                            </table>
                            <br><br>
                            <?php echo $this->pagination->create_links();?>
                        </section>
					</div>
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