function scrollToTop() {
  window.scrollTo(0, 0); // Scroll to the top instantly without animation
}

// Call the scrollToTop function when the page loads
window.addEventListener('load', scrollToTop);








$(document).ready(function(){ 
    function _slider(id){
      var slidewidth = $('.slider ul li').width();
      var slideheight = $('.slider ul li').outerHeight();
  
      $('.slider').css({'height':slideheight,'width':slidewidth});
      $('.slider ul li:not(.active)').css({'left':slidewidth});
      
      var autoSlideInterval; // Variable to store the auto slide interval
      
      function startAutoSlide() {
        clearInterval(autoSlideInterval); // Clear any existing interval
        autoSlideInterval = setInterval(function() {
          moveright(); // Move to the next slide automatically
        }, 6000); // Change slide every 3 seconds
      }
      
      // Start auto slide when the page loads
      startAutoSlide();
      
      // Pause auto slide when hovering over the slider
      $('.slider').hover(function() {
        clearInterval(autoSlideInterval);
      }, function() {
        startAutoSlide();
      });
      
      function moveright(){
        var slideheight = $('.slider ul li.active').next().height();
        var slidewidth = $('.slider ul li.active').next().width();
        $('.slider').animate({height:slideheight,width:slidewidth},200);
        
        if ($('.slider ul li:nth-last-child(2)').hasClass('active')) {
          $('.slider ul li:first-child').css({left: slidewidth}).appendTo('.slider ul');
        }
        $('.slider ul li.active').css({left: -slidewidth}).removeClass('active').next().addClass('active').css({left: 0});
      }
      
      function moveleft(){
        var slideheight = $('.slider ul li.active').prev().height();
        var slidewidth = $('.slider ul li.active').prev().width();
        $('.slider').animate({height:slideheight,width:slidewidth},200);
        
        if ($('.slider ul li:nth-child(2)').hasClass('active')) {
          $('.slider ul li:last-child').css({left: -slidewidth}).prependTo('.slider ul');
        }
        $('.slider ul li.active').removeClass('active').css({left: slidewidth}).prev().addClass('active').css({left: 0});
      }
      
      $('.control_next').on('click', function(){ 
        moveright();
      });
      
      $('.control_prev').on('click', function(){ 
        moveleft();
      });
    } 
    
    _slider('slider_');
  });

  
  $('a').click(function(e){
    var href = $(this).attr('href');
    if (href.startsWith('#')) {
        e.preventDefault(); // Prevent default behavior for internal links.
        $('body, html').animate({
            scrollTop: $(href).offset().top - 120
        }, 1000);
    }
});


