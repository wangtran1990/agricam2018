jQuery(document).ready(function($) {
    
    if( numinous_data.rtl == '1' ){
        var rtl = true;
        var nrtl = 'rtl';
    }else{
        var rtl = false;
        var nrtl = 'ltr';
    }
    /** Breaking News Ticker */
    $('#news-ticker').ticker({
        controls: false,        // Whether or not to show the jQuery News Ticker controls
        titleText: '',
        direction: nrtl,
    });            
            
    /** Search Form */
    $('html').click(function() {
        $('.example').hide(); 
    });

    $('.form-section').click(function(event){
        event.stopPropagation();
    });
    
    $("#search-btn").click(function(){
	   $(".example").slideToggle();
	   return false 
    });            
            
    /** Responsive Menu */
    $('#responsive-menu-button').sidr({
      name: 'sidr-main',
      source: '#site-navigation',
      side: 'left'
    });        
            
    /** Footer Slider */
    /** Variables from Customizer for Slider settings */
    if( numinous_data.auto == '1' ){
        var slider_auto = true;
    }else{
        slider_auto = false;
    }
    
    if( numinous_data.loop == '1' ){
        var slider_loop = true;
    }else{
        var slider_loop = false;
    }
    
    if( numinous_data.control == '1' ){
        var slider_control = true;
    }else{
        slider_control = false;
    }

    if( numinous_data.rtl == '1' ){
        var rtl = true;
    }else{
        var rtl = false;
    }
            
    $("#lightSlider").lightSlider({
        item        : 4,
        slideMargin : 0,
        auto        : slider_auto,
        loop        : slider_loop,
        enableDrag  :false,
        controls    : slider_control,
        rtl         : rtl,
        responsive  : [
            {
                breakpoint:800,
                settings: {
                    item:3,
                    slideMove:1,
                    slideMargin:0,
                  }
            },
            {
                breakpoint:480,
                settings: {
                    item:1,
                    slideMove:1
                  }
            }
        ]
   	});
    
    $('.newsticker-wrapper').fadeIn('slow');            
});