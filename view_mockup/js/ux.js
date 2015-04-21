// UX 

$(document).ready(function() {
	$('tr').on('mouseover', function(){
		$(this).find('a').css('border', 'solid 1px #FFFEAD' );
		});
	$('tr').on('mouseleave', function(){
		$(this).find('a').css('border', 'solid 1px orange' );
		});
});

$(function() {
	$("#datepicker").datepicker();
});