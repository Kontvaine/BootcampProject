
<?php
get_header();


 $image=get_field('single_page_top_image','option');

?>


<div class="news-pic" ><img src="<?php echo $image['sizes']['single_page_top_image'] ?> " alt="<?php echo $image['alt']?>" >
</div>

		<div class="news-heading-icon">
		<div class="centerIcon"><i class="fas fa-bullhorn"></i></div> 
		</div>

				<?php 

				if (have_posts()) :
								while (have_posts()) :
												the_post(); 


				?>


        <div class=news-item> 
               <div > <h2><?php the_title(); ?></h2></div>
                    <div class="container flex">
                    <div class="image-center"> <img src='<?php the_post_thumbnail_url('medium');?>);'></div>

                    <div><h5 class='news-item-text'><?php the_content(); ?></h5> </div>
                    </div>    
        </div>

				<?php 


									endwhile;//end while
					endif;//end if 

get_footer();

?>