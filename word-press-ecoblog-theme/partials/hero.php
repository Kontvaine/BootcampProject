

<?php  

//$image=get_field('hero_slide');


?>
<!--    karusele hero-->
<div id="owl-demo" class=" hero owl-carousel owl-theme">

<?php

// check if the repeater field has rows of data
if( have_rows('hero_slides_repeater') ):

 	// loop through the rows of data
    while (have_rows('hero_slides_repeater')) : the_row();
?> 
    
<!--         Slides-->
    <div class="item" style="background: url( <?php echo do_shortcode(get_sub_field('hero_slide')['url']) ?>)">

            <div class="text ">            
                <div class="container main-message">
                    <h2 class="slogan"><?php echo do_shortcode(get_sub_field('hero_slide_big_text'));?> </h2>

                    <h3><?php echo do_shortcode(get_sub_field('hero_slide_small_text'));?></h3>    

                </div>
            </div>  
    </div>  
        
<?php            
     endwhile;


 endif;

?>        
        
         
</div>
   
        