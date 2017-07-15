$(document).ready(function(){
  $('#font_logo').hide();  
  var scrollTop = 0;
  $(window).scroll(function(){
    scrollTop = $(window).scrollTop();
     $('.counter').html(scrollTop);
    
    if (scrollTop >= 100) {
      $('.navbar-brand').addClass('scrolled-nav');
      $('.navbar-collapse').addClass('scrolled-nav-collapse');
      $('#font_logo').show();  
      $('#img_logo').hide();  
    } else if (scrollTop < 100) {
      $('.navbar-brand').removeClass('scrolled-nav');
      $('.navbar-collapse').removeClass('scrolled-nav-collapse');
      $('#font_logo').hide();  
      $('#img_logo').show(); 
    } 
    
  }); 
  
});