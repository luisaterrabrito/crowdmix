/**
 * Created by Henrique Ferreira on 30/07/2016.
 */

var PlaylistModule = (function () {
    return {
        initAddView: function () {
            console.log("PlaylistModule add init.");
            $('input[data-handler="youtube_query"]').on("change", function () {
                console.log("change:" + $(this).val());
                $.ajax({
                    type: 'GET',
                    url: youtubeQueryRoute,
                    data: {
                        query: $(this).val()
                    }
                }).done(function (data) {
                    data.data.forEach(function(item){
                        console.log(item.snippet);
                    });
                });
            });
        }
    }
})();
var fixed_menu = true;
window.jQuery = window.$ = jQuery;

jQuery(document).ready(function() {
	//MobileMenu
	if ($(window).width() < 768){
		jQuery('.menu_block .container').prepend('<a href="javascript:void(0)" class="menu_toggler"><span class="fa fa-align-justify"></span></a>');
		jQuery('header .navmenu').hide();
		jQuery('.menu_toggler, .navmenu ul li a').click(function(){
			jQuery('header .navmenu').slideToggle(300);
		});
	}
		
	// if single_page
	if (jQuery("#page").hasClass("single_page")) {			
	}
	else {
		$(window).scroll(function(event) {
			calculateScroll();
		});
		$('.navmenu ul li a, .mobile_menu ul li a, .btn_down').click(function() {  
			$('html, body').animate({scrollTop: $(this.hash).offset().top - 80}, 1000);
			return false;
		});
	};
});




//# sourceMappingURL=all.js.map
