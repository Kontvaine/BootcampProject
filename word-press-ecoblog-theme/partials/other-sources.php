
<section class="other-sources-section" id="kiti">
            
        <div class="container intro">
                <div class="headingAndText">
                    <div> <h2> <?php the_field('heading_other_sources');?></h2></div>
                    
                    <div class="centerIcon"><i class="fas fa-pencil-alt"></i> </div> 
                    
                    <div class="sources center"><?php the_field('intro_other_sources');?></div>
                </div>
        </div> 
       
            
        <div  class="container other-sources flex">
   
						<?php

					// check if the repeater field has rows of data
					if( have_rows('other_sources_list_repeater') ):

						// loop through the rows of data
							while (have_rows('other_sources_list_repeater')) : the_row();
						?>
        
            
            	<div class="col 1 ">
                <div class="uzsklanda"> 
                    
 
                    
                    <img src="<?php echo do_shortcode(get_sub_field('other_source_image')['sizes'] ['other_source_image']) ?>)" alt="<?php echo get_sub_field('other_source_image')['alt']; ?>" >
                    <div class="overlay">
                        <div class="text"><?php echo do_shortcode(get_sub_field('other_source_into'));?></div>
                    </div>
                </div>

                <div class="minHeigth"><h5><?php echo do_shortcode(get_sub_field('other_source_name'));?></h5></div>
                
         
                
                <div><h6><a href="<?php echo do_shortcode(get_sub_field('other_source_link')['url']); ?>" target="<?php echo do_shortcode(get_sub_field('other_source_link')['target'])?>" > Daugiau </a></h6></div>
                  
          
                
      
							</div>
            
                <?php            
    endwhile;


endif;

?>    
            
    

        </div>
  
                
</section> 