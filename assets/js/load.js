$(document).ready(function(){
	$('a:not(#logo)').click(function(event){
		event.preventDefault();
		$("#main-content").load($(this).attr("href"));
		$('html,body').scrollTop(0);
	});
});
