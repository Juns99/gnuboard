
$(function() {

  $(window).scroll(function(){
   if( $(window).scrollTop() > 0){
     $('body').addClass('scroll');
   }else{
     $('body').removeClass('scroll');
   }

  });


  $(function() {
      $(window).scroll(function() {
          if ($(this).scrollTop() > 500) {
              $('#topLink').fadeIn();
          } else {
              $('#topLink').fadeOut();
          }
      });

      $("#topLink").click(function() {
          $('html, body').animate({
              scrollTop : 0
          }, 1000);
          return false;
      });
  });
  $(window).scroll(function(){
     if($(window).scrollTop() > 0){
       $('#top_scroll').addClass('active');
    }else{
       $('#top_scroll').removeClass('active');
    }
  });



});
