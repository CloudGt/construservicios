$(function(){
	var ENV_WEBROOT = "../";
	$(".visitagalerias").off("click");
	$(".visitagalerias").on("click", function(e) {
		var href = $(this).attr("diregal");          
        console.log(href);
        $("#galeria").load(href);
		$('#Modal').modal('show');         
	});
});