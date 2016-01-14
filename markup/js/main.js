//variables
var seccion,slider,url='http://'+document.location.hostname+'/';
var player, viewed = false, moved = false;

init = function(){	
	
	medidas = function(){
		altura = $(window).height();
		anchura = $(window).width();
		alturaScroll = $(window).scrollTop();
		return;
	}

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
		$('body').addClass('hidden');
	});

	$('.fa-times').on('click',function(){
		$('.modal').fadeOut();
		$('body').removeClass('hidden');
	});

	$('.modal .container, .modal').on('click',function(e){

		if(e.target !== this) return;
		
		$('.modal').fadeOut();
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
	        //$('#status').html('Dislike image ' + (item.index()+1));
	    },
		// like callback
	    onLike: function (item) {
		    // set the status text
	        //$('#status').html('Like image ' + (item.index()+1));
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




