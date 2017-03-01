$(document).ready(function(){
	$('#nav li').hover(function(){
		$(this).children('ul').hide();
		$(this).children('ul').slideDown('slow');
	}, function(){
		$('ul', this).slideUp('slow');
	});
});