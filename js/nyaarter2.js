jQuery(document).ready(function () {
    
  jQuery(".c-hamburger").click(function(){
      jQuery('#main-navigation').toggleClass('open');
      jQuery('.c-hamburger').toggleClass('is-active');
  });
  jQuery('#main-navigation > ul').click(function(){
    jQuery('#main-navigation').toggleClass('open');
    jQuery('.c-hamburger').toggleClass('is-active');
    console.log("main");
  });
    jQuery(".scroll-top").click(function() {
        jQuery("html, body").animate({scrollTop: 0 }, "slow");
        return false;

    });
    
    var offset = 120;
    var duration = 500;

    jQuery('.scroll-top').hide();
    
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.scroll-top').fadeIn(duration);
        } else {
            jQuery('.scroll-top').fadeOut(duration);
        }
    });
    
    
//    jQuery(this).find('#edit-field-art-und-actions-ief-add').text('Lägg till art');
//    jQuery(this).find('#edit-field-art-und-form-actions-ief-add-save--2').text('Lägg till art');
    

});
