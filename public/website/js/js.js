$(function(){

	setHeight()
	setAdsHeight()
	// setRelatedPostHeight()

	$(window).resize(function() {
		setHeight()
		setAdsHeight()
	})


	$("#nav-menu").click(function(){
		$("#sidebar-container").addClass("active")
		$("body").css("overflow-y", "hidden")
	})

	$("#sidebar-container > #sidebar").click(function(e){
		if (e.target !== this){return;}
		$("#sidebar-container").removeClass("active")
		$("body").css("overflow-y", "auto")
	})


	function setHeight() {
		var itemTop_width = parseFloat($(".item .item-top").css("width"));
		$(".item .item-top").css("height", itemTop_width * 1.5)
	}

	function setAdsHeight(){
		var ads_width = parseFloat($("#carouselAds").css("width"));
		$("#carouselAds").css("height", ads_width/4)
	}

	/*function setRelatedPostHeight() {
		var relatedPost_width = parseFloat($(".related-post-img").css("width"));
		$(".related-post-img").css("height", relatedPost_width)
	}*/
})