        
        
<section class="Maps">

    <div class="antraste maps">
            <div><h2><?php the_field('map_area_heading');?></h2></div>
    </div> 
    
        <div><p class="center"><?php the_field('map_area_intro');?></p></div>
            <div class="map-container" >    

                <iframe src="<?php echo the_field('embeded_map') ;?>" style="border:0" allowfullscreen></iframe>

            </div>

</section> 
                

        