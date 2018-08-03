<!--       ==============VISOKIE PATARIMAI=============== -->        
  
        
    <section class="trumpai content" id="tekstai">
        <div  class="container" >
            <div class="trumpai center">
                <h2><?php the_field('news_section_title'); ?></h2>
                <div class="centerIcon"><i class="fas fa-tree"></i> </div> 
                <div class="center"><?php echo do_shortcode(get_field('section_news_intro'));?></div>
            </div>
        </div>    

    </section>
        
<!--       ============NAVIGATION OF TOPICS================== -->
        
    <section class="news-nav">
        
        
   <?php  $categories= get_field('theme_name');
//        print_r($categories);
 
    ?>        

        <div  class="container temos" >
            <ul class="flex">
                
                <?php   
//            
                foreach ($categories as $category ){
//                    print_r($category);

                    $termObject=  get_category($category);
//                    print_r($termObject);
                    echo   '<li ><a id="'.$termObject->slug.'" >'.$termObject->name.'</a></li>';
                } 
                
//                echo above can get li elements' id and name:              
//                4<li ><a id="food" >Food</a></li>
                
                ?>

                            <li ><a id="all">Visi</a></li>
             

            </ul>

        </div> 

    </section>
     <!--       ============TEKSTAI============= -->
        
    <section class="news-text">
				
        <div class="container-news ">

            <div class="news-text-content flex ">
                
                <?php 
                 
                $query = new WP_Query( array( 'cat' => implode(",",$categories ) ) );

                if ($query->have_posts()) :
                    while ($query->have_posts()) :
                        $query->the_post(); 
                
                
                $image=get_field('news-image');
                
//                print_r($post);
                
                $postCategory=get_the_category();
//                print_r ($postCategory);
                ?>
                
                
                <!--  to give the class to the text div according to chosen category   -->
                    <div class="col 1 <?php echo ($postCategory[0]->slug) ?> ">
                        <div>
                            <div class="news-pic">  <a href="<?php the_permalink();?>" target="_blank" class="blog-bg" > <img src="<?php the_post_thumbnail_url('news-image');?>"  alt="#" > </a>
                            </div>
                                <h4 itemprop="name" class="sizing"><a href="<?php the_permalink();?>" target="_blank"><?php the_title(); ?></a></h4>
                                <div class="news-item-text"><?php the_excerpt(); ?></div>
                        </div>

                    </div>
                
                 <?php
                       endwhile;//end while
                
                	endif;//end if 
                   
									wp_reset_postdata(); //TO RESET DATA!!!!!
                
                
                ?>
                
                

            </div>
            
        </div>

    </section>
   <!--       ============TEKSTAI============= -->