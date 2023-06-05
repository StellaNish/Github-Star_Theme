<!DOCTYPE html>
<html lang="en">
<head>
<title>The Star Theme</title>

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/bootstrap.min.js'; ?>"></script>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.min.css'; ?>">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

<?php wp_head(); ?>

</head>

<body>
<div class="header">
<div id="ttr_header" class="jumbotron">
<h1>THE GRADSHOW</h1>
</div>

<br>
<div class="container-fluid">

   <div id="logo-image" class="jumlogo"> 
   <center><img src="<?php echo get_template_directory_uri(); ?>/img/giphy3.gif" alt="logo" class="center-logo"></center.
   </div>
   
	  <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light bg-nav ">
   	 
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		
    	<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav justify-content-center ">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="<?php echo site_url(); ?>">Home</a>
					</li>
					<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="<?php echo site_url('/about'); ?>">About</a>
					</li>
					<li class="nav-item active">
					<a class="nav-link active" aria-current="page" href="<?php echo site_url('/projects'); ?>">Projects</a>
				</li>
			</ul>
    	</div>
 
	</nav>   -->
	
	<?php
	wp_nav_menu(array(
	'theme location'=>'my-custom-menu',
	'depth'=>2,
	'container'=> false,
	'menu_class'=>'list-unstyled',
	'item_spacing'=> 'perserve'
	));
	?>
	
	
</div>

</div>
	
	

	
	

