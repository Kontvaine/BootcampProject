$(document).ready(function(){



$(".temos a").click(function(){


console.log($(this).attr('id'));


var mygtukas=$(this).attr('id');


//        hide all:
					 $('.news-text-content .col').hide();

//show according to the class name:        
		$('.news-text-content .'+ mygtukas).show();

//         console.log('.news-text-content .'+mygtukas);


		if ( mygtukas=="all" ){
						$('.news-text-content .col').show();

		}

});

    
    
// burgeris    
    
$('.burger').click(function(){
		$('.nav').toggleClass('show');
});
    
    // skaiciu animacija
                

$('.count').each(function () {
	$(this).prop('Counter',0).animate({
Counter: $(this).text()
}, {
    duration: 8000,
    easing: 'swing',
    step: function (now) {
        $(this).text(Math.ceil(now));
    }
});
});
    
    
//karusele:s

    
//autoplay    
    
    var owl = $('.owl-carousel');
owl.owlCarousel({
    items:1,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:5000
    
});
    
$("#owl-demo").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
//      singleItem:true
 
//       "singleItem:true" is a shortcut for:
       items : 1, 
       itemsDesktop : false,
       itemsDesktopSmall : false,
       itemsTablet: false,
       itemsMobile : false
 
  });
        
    

    
    
//---map---    
    
    
    function myMap() {
    var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.12),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.HYBRID
    }
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);
    }
    
    

//closing--->

}) ; 


    

