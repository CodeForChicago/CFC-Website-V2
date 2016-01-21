$(document).ready(function(){
	$('.menu > li').mouseover(function(){
		$(this).find('ul').css('visibility','visible');
	});
	$('.menu >li').mouseout(function(){
		$(this).find('ul').css('visibility','hidden');
	});
})