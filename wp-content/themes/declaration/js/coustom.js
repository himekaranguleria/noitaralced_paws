//swap changes
(function ($) {
    
    $(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop() > 100){
            $('#scroll').fadeIn();
        }else{
            $('#scroll').fadeOut();
        }
    });
    $('.back-to-top-arrow').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
    
    
    $('.footer-top-reserv .carousel-item:nth-child(1)').addClass('active');
    $('.slide-sec .carousel-item:nth-child(1)').addClass('active');
    $('.slide-sec .carousel-caption:nth-child(1)').addClass('text-left');
    
    
   $('.es_widget_form #es_txt_button').val('>');
   
   $('#es_txt_email').attr('placeholder','Email');
   
   if($('body').hasClass('page-template-template-about'))
   {
       $('body').addClass('about-pattern');
   }
});
    
}(jQuery));

