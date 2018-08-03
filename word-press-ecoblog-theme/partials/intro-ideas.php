<?php



//get_header();


?>

<div class="container visos" id="idejos">
        <div class="idejos">
            <h2 class="plonesne"><?php the_field('intro_heading');?></h2>
            <div class="centerIcon"><i class="far fa-lightbulb"></i></div> 
        </div>
    
</div>    
        
<section class="trys idejos ">
        
    <div class="idejos-content flex">
             
    <?php

    if( have_rows('intro_ideas_repeater') ):

        while (have_rows('intro_ideas_repeater')) : the_row();

    ?>
        
        <div class="ideja pirmas flex ">
            
            <div class="icon pirma">
               <?php the_sub_field('icon');?>
            </div>
            
            <div class="idea"> <h4><?php echo do_shortcode(get_sub_field('idea_heading'));?></h4>
                <!-- text in paragraph -->
                <?php echo do_shortcode(get_sub_field('idea_text'));?>
            </div>
            
        </div>
                       
    <?php            
        endwhile;

    endif;

    ?>
 
    </div>

</section>


