jQuery(document).ready(function($)
{

	if($('.wpgis-slider-for').length > 0)
	{

		if(object_name.wpgis_arrowdisable == 1){
			var slider_arrow = false;
		}else{
			var slider_arrow = true;
		}

		if(object_name.wpgis_show_lightbox != 1){
			$('a.wpgis-popup').remove();
		}

		if(object_name.wpgis_sliderautoplay == 1){
			var slider_autoplay = true;
		}else{
			var slider_autoplay = false;
		}


		var slidetoshow = object_name.wpgis_slidetoshow;
		var arrowinfinite = object_name.wpgis_arrowinfinite;
		var sliderlayout = object_name.wpgis_slider_layout;
		var slidetoscrol = object_name.wpgis_slidetoscroll;

		if(arrowinfinite==1 && arrowinfinite!='')
		{
			var infinitescroll = true;
		}
		else
		{
			var infinitescroll = false;
		}


		if(sliderlayout!='horizontal' && sliderlayout!=' ')
		{
			var verticalslider = true;
		}
		else
		{
			var verticalslider = false;
		}

		$('.wpgis-slider-for').slick({
			fade: false,
			dots : false,
			lazyLoad: 'progressive',
			autoplay : slider_autoplay,
			arrows: slider_arrow,
			slidesToScroll:1,
			slidesToShow:1,
			infinite:infinitescroll,
			swipe:true,
			asNavFor: '.wpgis-slider-nav',
			prevArrow: '<i class="btn-prev dashicons dashicons-arrow-left-alt2"></i>',
			nextArrow: '<i class="btn-next dashicons dashicons-arrow-right-alt2"></i>',
			verticalSwiping: true,
		});

		$('.wpgis-slider-nav').slick({
			dots: false,
			arrows: false,
			centerMode: false,
			focusOnSelect: true,
			vertical:verticalslider,
			infinite:infinitescroll,
			slidesToShow: 4,
			slidesToScroll: 1,
			asNavFor: '.wpgis-slider-for',
			responsive: [
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
						vertical: false,
						draggable: true,
						autoplay: false,//no autoplay in mobile
						isMobile: true,// let custom knows on mobile
						arrows: false //hide arrow on mobile
					}
				},
			]
		});


		if(sliderlayout=='left')
		{
			$(".slider.wpgis-slider-for").addClass("vertical-img-left");
		}
		else if(sliderlayout=='right')
		{
			$(".slider.wpgis-slider-for").addClass("vertical-img-right");
		}
		else
		{
			$(".slider.wpgis-slider-for").removeClass('vertical-img-left');
			$(".slider.wpgis-slider-for").removeClass('vertical-img-right');
		}

		if(object_name.wpgis_arrowcolor!='')
		{
			$(".btn-prev, .btn-next").css("color",object_name.wpgis_arrowcolor);
		}
		if(object_name.wpgis_arrowbgcolor!='')
		{
			$(".btn-prev, .btn-next").css("background",object_name.wpgis_arrowbgcolor);
		}

		if(object_name.wpgis_show_zoom == 1){
			$('.wpgis-slider-for .slick-slide').zoom();
		}
		$('.wpgis-slider-for .slick-track').addClass('woocommerce-product-gallery__image single-product-main-image');
		$('.wpgis-slider-nav .slick-track').addClass('flex-control-nav');
		$('.wpgis-slider-nav .slick-track li img').removeAttr('srcset');

		$('.variations select').change(function(){
			$('.wpgis-slider-nav').slick('slickGoTo', 0);
			window.setTimeout( function() {
				if(object_name.wpgis_zoom == 'true'){
					$('.wpgis-slider-for .slick-track .slick-current').zoom();
				}
			}, 20 );
		});

		$('[data-fancybox="product-gallery"]').fancybox({
			slideShow  : true,
			fullScreen : false,
			transitionEffect: "slide",
			arrows: true,
			thumbs : false,
			infobar : false,
		});

	}
});