<!--facts.php-->
<div class="antraste ">
        <div> <h2><?php the_field('header_of_section');?> </h2></div>
</div>   

<section class="facts" id="facts">



    <div class="container all-facts flex ">

            <?php
                // check if the repeater field has rows of data
            if( have_rows('facts_table_repeater') ):

            // loop through the rows of data
            while (have_rows('facts_table_repeater')) : the_row();
            ?>

                    <div class="single fact">

                        <div class="icon-center"><?php the_sub_field('fact_icon')?></div> 
                        
                        <div>
                            <p class="number count"><?php echo do_shortcode(get_sub_field('fact_number'));?></p>
                        </div>
                        
                        <div>
                            <p class="description"><?php echo do_shortcode(get_sub_field('fact_summary'));?></p>
                        </div>


                    </div>

                        <?php            
            endwhile;


            endif;

            ?>

    </div>



</section>
