<!DOCTYPE HTML>
<html <?php language_attributes();?>>
    
   <head>
         
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title> Blogas </title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

     
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600i,700i,800&amp;subset=latin-ext" rel="stylesheet">
            
                    <link rel="stylesheet" href="assets/css/style_blog.css" rel="stylesheet">
        

          <?php wp_head();?>

    </head>
    <body>

        
			<header class="header flex" id="mainpage">

       
				<div class="container flex menu "> 

						<?php $image=get_field('logo_image','option');?>

						<div class="logo-container">  

								<a href="<?php echo home_url();?>" class="logo"><img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php  bloginfo('name'); ?>"></a>
							
								<h1 itemprop="about">EKOlogiškai</h1>

						</div>

								<nav class=" header-nav">
									
										<div class="burger">
											<i class="fas fa-bars"></i>
										</div>
									
										<div>

										<?php  
												$args=[
												'container'=>false,
												'theme_location'=>'primary-navigation',
												'menu_class'=> 'mainmenu pull-left nav flex'    

												];

												wp_nav_menu($args);
										?>                        

				<!--
									<ul class="nav flex" >
										<li class="menu-item"><a href="#mainpage">home</a></li>
										<li class="menu-item"><a href="#idejos">Idėjos</a></li>
										<li class="menu-item"><a href="#tekstai">Patarimai</a></li>
										<li class="menu-item"><a href="#kiti">Skaitiniai</a></li>
										<li class="menu-item"><a href="#facts">Faktai</a></li>
										<li class="menu-item"><a href="#contact">Kontaktai</a></li>
									</ul>
				-->

										</div>

								</nav>

						</div>

    </header>
 
        