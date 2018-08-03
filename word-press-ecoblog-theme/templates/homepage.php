<?php

/* Template Name: Homepage */

get_header();

//PRIJUNGIAME VISUS HOMEPAGE DALIS APRASANCIUS FAILUS, kurie yra templates folderyje:

get_template_part('partials/hero'); //prijungiame hero.php faila
get_template_part('partials/intro-ideas'); //prijungiame about-us.php faila
get_template_part('partials/news');
get_template_part('partials/other-sources');
get_template_part('partials/facts');
get_template_part('partials/map');

?>


<!-- Start Point -->

<?php get_footer(); ?>