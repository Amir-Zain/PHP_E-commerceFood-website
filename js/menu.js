$(document).ready(function(){
	$("#menuBar").click(function(){
		$(this).toggleClass("open");
		$("#headerMenu").slideToggle();
	});
});