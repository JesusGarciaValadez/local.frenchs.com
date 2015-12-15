//variables
var seccion,slider,url='http://'+document.location.hostname+'/';
var player, viewed = false, moved = false;

init = function(){	
	
	var tag = document.createElement('script');
  	tag.src = "https://www.youtube.com/player_api";
  	var firstScriptTag = document.getElementsByTagName('script')[0];
  	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

	medidas = function(){
		altura = $(window).height();
		anchura = $(window).width();
		alturaScroll = $(window).scrollTop();
		return;
	}

	seccion = $('section').attr('class');
	seccion = seccion.split(' ');
	seccion = seccion[0];
	
	if(seccion == "seleccionar"){
		medidas();
		$('header').remove();
		$('footer').remove();
	}

	$('.redes a.fa-facebook, .fb').on('click',function(e){
	    e.preventDefault();
	    var url = $(this).data('url');
	    FB.ui(
	     {
	      method: 'share',
	      href: url
	    }, function(response){});
  	});

	$('#pais').on('change', function(){
		valor = $(this).val();
		$('.paises label').removeClass();
		$('.paises label').addClass(valor);
	});

	$('.hamburguesa').on('click',function(){
		$('.head .menu ul').slideToggle( "slow" );
		$('.hamburguesa').toggleClass('activo');
		$('.head .menu ul .redes ul').fadeIn( "slow" );
	});

	$('.btn-share').on('click',function(){
		$('.detalle-receta .redes ul').fadeIn();
		$('.btn-share').hide();
	});

	$('.subir-receta .container a').on('click',function(e){
		e.preventDefault();
		$('.modal').fadeIn();
		slider = $('.galeria .bxslider').bxSlider({
			mode: 'fade',
			controls: false,
			pagerCustom: '#bx-pager'
		});
		$('body').addClass('hidden');
	});

	$('.fa-times').on('click',function(){
		$('.modal').fadeOut('normal',function(){
			slider.destroySlider();
		});
		$('body').removeClass('hidden');
	});

	$('.modal .container, .modal').on('click',function(e){

		if(e.target !== this) return;
		
		$('.modal').fadeOut('normal',function(){
			slider.destroySlider();
		});
		$('body').removeClass('hidden');
	});

	setSize = function(){
		medidas();
		headeralto = $('header').height();
		footeralto = $('footer').height();

		$('.modal').css("width", anchura).css("height", altura);
		if(anchura <= 767){

		}
		else if(anchura >= 768){
			
		}
	}

	inicio = function(){
		setSize();
	}

	$(window).resize(setSize);
		inicio();

	/**
	 * jTinder initialization
	 */
	$("#tinderslide").jTinder({
		// dislike callback
	    onDislike: function (item) {
		    // set the status text
	        $('#status').html('Dislike image ' + (item.index()+1));
	    },
		// like callback
	    onLike: function (item) {
		    // set the status text
	        $('#status').html('Like image ' + (item.index()+1));
	    },
		animationRevertSpeed: 200,
		animationSpeed: 400,
		threshold: 1,
		likeSelector: '.like',
		dislikeSelector: '.dislike'
	});

	/**
	 * Set button action to trigger jTinder like & dislike.
	 */
	$('.actions .like, .actions .dislike').click(function(e){
		e.preventDefault();
		$("#tinderslide").jTinder($(this).attr('class'));
	});

	(function ($) { 
		$('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
		
		$('.tab ul.tabs li a').click(function (g) { 
			var tab = $(this).closest('.tab'), 
				index = $(this).closest('li').index();
			
			tab.find('ul.tabs > li').removeClass('current');
			$(this).closest('li').addClass('current');
			
			tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
			tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
			
			g.preventDefault();
		} );
	})(jQuery);
	

};

$(document).on('ready',init);

$(window).on('load',function(){
	if(! /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

		$( "header .head .facebook" ).appendTo( ".menu " );
		$( "header .head .busqueda" ).appendTo( ".menu " );

		$( ".detalle-inspiracion .descripcion .right").prependTo( ".descripcion" );

	}
	else{
		if(! /iPad/i.test(navigator.userAgent) ) {

			$( ".head .redes " ).appendTo( ".menu ul" );
			$('.head .menu ul .redes ul').fadeOut( "slow" );

		}
		else{

		}
	}
})

$(window).on('mousemove', function(e) {
        var w = $(window).width();
        var h = $(window).height();
        var offsetX = 0.5 - e.pageX / w;
        var offsetY = 0.5 - e.pageY / h;

        $(".parallax").each(function(i, el) {
            var offset = parseInt($(el).data('offset'));
            var translate = "translate3d(" + Math.round(offsetX * offset) + "px," + Math.round(offsetY * offset) + "px, 0px)";

            $(el).css({
                '-webkit-transform': translate,
                'transform': translate,
                'moz-transform': translate
            });
        });
    });



