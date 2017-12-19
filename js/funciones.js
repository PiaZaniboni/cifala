$(document).ready(function() {

  $( ".menu-toggle" ).click(function() {
      $('.main-navigation').toggleClass( "active" );
      $('.site-header').toggleClass( "active" );
  });

   $(".main-navigation a").each(function(){
        $(this).click(function(){
          $('.main-navigation').removeClass( "active" );
          $('.site-header').removeClass( "active" );
        });
    });

  /*--------------------------------------------------------------
    ## Post
    --------------------------------------------------------------*/
  $('.your-class').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    nextArrow: '<buton class="slick-arrow slick-next" type="button"><i class="fa fa-angle-right" aria-hidden="true"></i></buton>',
    prevArrow: '<buton class="slick-arrow slick-prev" type="button"><i class="fa fa-angle-left" aria-hidden="true"></i></buton>',

    responsive: [
    {
      breakpoint: 1300,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    
     ]

  });

  $('.your-class2').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    nextArrow: '<buton class="slick-arrow slick-next" type="button"><i class="fa fa-angle-right" aria-hidden="true"></i></buton>',
    prevArrow: '<buton class="slick-arrow slick-prev" type="button"><i class="fa fa-angle-left" aria-hidden="true"></i></buton>',

  });


/*--------------------------------------------------------------
# Scroll Nice
--------------------------------------------------------------*/
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});


});