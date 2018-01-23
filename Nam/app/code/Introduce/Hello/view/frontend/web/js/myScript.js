jQuery(function(){
	imageSliderWidgetButton();
})


function imageSliderWidgetButton(){
	var fintOwlButton = setInterval(function(){
		if(jQuery(".imageslider-widget .owl-nav .owl-prev").length){
			jQuery(".imageslider-widget .owl-nav .owl-prev").append("<i class='fa fa-angle-left'></i>");
			jQuery(".imageslider-widget .owl-nav .owl-next").append("<i class='fa fa-angle-right'></i>");
			clearInterval(fintOwlButton);
		}
	},100);
}