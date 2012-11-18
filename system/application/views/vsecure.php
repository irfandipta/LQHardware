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
						<li class="first"><a href="">WELCOME TO ADMINISTRATOR PAGE</a></li>
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
                        <h2>USER LOGIN</h2>
                        <br><br>
                        <?php echo form_open('csecure/usermasuk'); ?>
                        <table>
                        <tr class="username">
                            <td width="100px"><label for="name">Username</label></td>
                            <td><?php echo form_input('username'); ?></td>
                        </tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        <tr class="password">
                            <td width="100px"><label for="password">Password</label></td>
                            <td><?php echo form_password('password'); ?></td>
                        </tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        <tr class="submit">
                            <td>&nbsp;</td>
                            <td colspan="2"><?php echo form_submit('submit','LOGIN'); ?></td>
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