( function( $ ) {

	var bgcolorlist=new Array("#212952", "#7a1f53", "#f50051", "#f68335")

	$(".random-color-bg").css("background-color",bgcolorlist[Math.floor(Math.random()*bgcolorlist.length)]);

} )( jQuery );


