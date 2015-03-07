$(window).load(function(){
    $(".video-list").mCustomScrollbar();
    $(".list-album").mCustomScrollbar();
});
$(document).ready(function() {
	$(document).on('click', function(event) {
	  if (!$(event.target).closest('.btn-bar').length) {
	   $('.menu-nav').hide();
	  }
	});
	$('.btn-bar').click(function(event) {
	  $('.menu-nav').toggle();
	});
});