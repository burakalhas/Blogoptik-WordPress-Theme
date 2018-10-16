
$(document).ready(function() {
			$(".eleman_manset").hover(function() {
				$(".eleman_manset_aciklama", this).animate({
					"bottom": "0"
				}, 200);
				$(".yazi_tur", this).css({
					"background": "rgba(231, 76, 60,1.0)"
				}, 200);
			}, function() {
				$(".eleman_manset_aciklama", this).animate({
					"bottom": "-45px"
				}, 200);
				$(".yazi_tur", this).css({
					"background": "rgba(52, 73, 94,1.0)"
				}, 200);
			});

			$(".kat_video_ozel").hover(function() {
				$(".video_icon", this).fadeIn(400);
			}, function() {
				$(".video_icon", this).fadeOut(400);
			});

			$("aside").hover(function() {
				$("h3", this).addClass("efekt_border");
			}, function() {
				$("h3", this).removeClass("efekt_border");
			});
			$('.bxslider').bxSlider();
			$(".menu_ac").click(function() {
				$("ul.nav").slideToggle(400);
			});


		});
		
		
		