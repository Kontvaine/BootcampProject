
<!--       =============FOOTER ============== -->           
        
<section class="footer" id='contact'>
	
		<div class="footer-container flex">
			
				<div class= "footer-column 1">


<!--                    funkcija is ACF plugino:-->
								<?php $image=get_field('logo_image','option');                        
								?>



						<div>                 
								<a href="<?php echo home_url();?>" class="logo"><img src="<?php echo $image['sizes']['medium']; ?>" alt="Eko">
								</a>

						</div>
								<div class="up"> 
										<p><?php echo do_shortcode(get_field('first_column','option')); ?></p>
								</div>   
				</div>

				<div class= "footer-column 2">
						<div class="footer-column-top"> 
								<div><h5> Prenumeruok </h5></div>

						</div>

						<div class="form">

								<form method="POST" enctype="multipart/form-data">
								<label for="email"> Tavo el. paštas</label>   

								<input type="text" id="email" name="email" placeholder="">                   

								</form>


						</div>

						<div>  <div><?php echo do_shortcode(get_field('second_column','option')); ?></div>
						</div> 

				</div>

				<div class= "footer-column 3">
						<div class="footer-column-top "> 

						<h5> Surask daugiau</h5>
						</div> 

						<div class="twoColumns flex"> 

										<?php
																// check if the repeater field has rows of data
										if( have_rows('third_column_repeater', 'option') ):

											// loop through the rows of data
												while (have_rows('third_column_repeater','option')) : the_row();


										?>
													<div class="column ">


															 <div><p><a href="<?php echo do_shortcode(get_sub_field('social_media_link'));?>" target="_blank"><?php echo do_shortcode(get_sub_field('social_media'));?></a></p></div>

													</div>

										<?php            
												endwhile;


										endif;

										?>

						</div> 

				</div>

				<div class= "footer-column 4">
						<div class="black"> <p><?php echo do_shortcode(get_field('fourth_column','option')); ?></p>
						</div>   
				</div>

		</div>
</section>
        
     
  <?php wp_footer();?>  
        
    </body>
</html>