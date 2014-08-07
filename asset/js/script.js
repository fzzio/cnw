/*function animUp() {
	$(".flecha-scroll").animate({
		top: "0"
	}, {
		duration: "slow",
		queue: false,
		easing: "swing",
		complete: animDown
	});
}

function animDown() {
	$(".flecha-scroll").animate({
		top: "40px"
	}, {
		duration: "slow",
		queue: false,
		easing: "swing",
		complete: animDown
	});
}*/

var scrolled=0;

function centrarVert(elemento){
	altura1=elemento.parent().height();
	altura2=elemento.height();
	elemento.css("margin-top",(altura1/2)-(altura2/2)+"px");
}
function centrarVertPad(elemento){
	altura1=elemento.parent().height();
	altura2=elemento.height();
	elemento.css("padding-top",(altura1/2)-(altura2/2)+"px");
}
function centrarHor(elemento){
	ancho1=elemento.parent().width();
	ancho2=elemento.width();
	elemento.css("margin-left",(ancho1/2)-(ancho2/2)+"px");
}
function enviarAlFondo(elemento){
	altura1=elemento.parent().height();
	altura2=elemento.height();
	elemento.css("margin-top",(altura1)-(altura2)+"px");
}
function enviarAlFondoPad(elemento){
	altura1=elemento.parent().height();
	altura2=elemento.height();
	elemento.css("padding-top",(altura1)-(altura2)+"px");
}
$(function() {
	$('.page-scroll a').bind('click', function(event) {
		var $anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top
		}, 1500, 'easeInOutExpo');
		event.preventDefault();
	});
});

$(document).ready(function(){
	$(this).find('.mascara').stop(true, true).fadeOut();
		$(this).find('.img-icono-mas').stop(true, true).fadeOut();
	ajustarHome();
	$("#bajar").click(function () {
		$(this).addClass("oculto");
	});
	$("#btn-navegacion").hover(
		function(){
			$(this).find("#bajar.oculto").show();
			// $(this).parent().parent().find(".noticia_subtitulo").addClass("pSelected");
			},
		function(){
	    	$(this).find("#bajar.oculto").hide();
	    	// $(this).find(".noticia_subtitulo").removeClass("pSelected");
            }
            );
	$("img.equisCerveza").hover(
		function(){
			$(this).attr("src","asset/img/desarrollo-sostenible/programasinfo/2-cerrar-pequenio-normal.png");
			// $(this).parent().parent().find(".noticia_subtitulo").addClass("pSelected");
			},
		function(){
	    	$(this).attr("src","asset/img/desarrollo-sostenible/programasinfo/1-cerrar-pequenio-normal.png");
	    	// $(this).find(".noticia_subtitulo").removeClass("pSelected");
            }
            );
$('.carousel').bind('slid', function () {
    //alert("Slide Event");
    console.log('slid event');
    $('.contenedor-centrar').each(function () {
		centrarVert($(this));
	});
	$('.contenedor-centrarPad').each(function () {
			centrarVertPad($(this));
		});
	});
// 	$('.navegar').click(function(){
// 		// alert("Si");
//     $('html, body').animate({
//         scrollTop: $( $(this).attr('href') ).offset().top
//     }, 1000);
//     return false;
// });
	/*Plugin Boton*/
	$(".imagenFichaTrabajo").hover(
		function(){
			$(this).parent().parent().find(".tituloFichaTrabajo").addClass("ficharoja");
			// $(this).parent().parent().find(".noticia_subtitulo").addClass("pSelected");
			},
		function(){
	    	$(this).parent().parent().find(".tituloFichaTrabajo").removeClass("ficharoja");
	    	// $(this).find(".noticia_subtitulo").removeClass("pSelected");
            }
            );
	var $document = $(document);
	 $('#btn-navegacion').hover(function () {
	 	if ($('#navegacion').length==1) {
	 		var elementoSig=$('.badge.active').next('.badge');
	 		if (elementoSig.length==1){
	 			var texto=elementoSig.find('.lista').text();
               // alert(texto);
               $('#btn-navegacion').find('.texto-naveg').text(texto);
               $('#btn-navegacion').find('#bajar').attr("href",$('.badge.active').next('.badge').find('a').attr("href"));
              
	 		}
	 		else{
	 			$('#btn-navegacion').find('.texto-naveg').text("Ir abajo");
	 		// 	 	$('#btn-navegacion').click(function(e){
				// 	e.preventDefault();
				// 	scrolled=scrolled+( $(window).height() );

				// 	$('html, body').animate({
				// 		scrollTop: scrolled
				// 	}, 800, function(){
				// 		//
				// 	});
				// });
	 		}
	 		
	 	};
               
            });
            
          $('#btn-navegacion').on('click', function(event){
          	event.preventDefault();
            // $('.stage').each(function() {
            	if (!($('#navegacion').length==0)) {
            		
            		$('html, body').animate({
			        scrollTop: $( $('.navegar').attr('href') ).offset().top
			    }, 800);
            		// var pos = $(this).offset().top;  
                // console.log("pos: " + pos, "$window.scrollTop(): " + $window.scrollTop());
                var texto=$('.badge.active').next('.badge').find('.lista').text();
                $('#btn-navegacion').find('#bajar').attr("href",$('.badge.active').next('.badge').find('a').attr("href"));
               // alert(texto);
               $('#btn-navegacion').find('.texto-naveg').text(texto);

                // if ($window.scrollTop() < pos) {
                //     $('html, body').animate({
                //         scrollTop: pos
                //     }, 200);
                //     // alert($('this').attr("id"));
                //     // $('#btn-navegacion').find('.texto-naveg').text($('.badge.active').next('.badge').find('.lista').text());
                //     return false;
                // }
            	}else{
            		// alert("no hay");
            			// e.preventDefault();
						scrolled=scrolled+( $(window).height() );

						$('html, body').animate({
							scrollTop: scrolled
						}, 800, function(){
							//
						});
            	}
                
            // });
        });
	//FInal boton
	$('.slide.slideFull').each(function () {
		$(this).height($(this).parent().height());
	});
	$("#flechascroll").hover(
		function (event) {
			event.preventDefault();
			$(this).find("img").attr('src','asset/img/Scroll-Flecha-Hover.png');
		}, 
		function (event) {
			event.preventDefault();
			$(this).find("img").attr('src','asset/img/Scroll-Negro.png');
		}
	);
	$("li").hover(
		function (event) {
			event.preventDefault();
			$(this).stop(true, true).addClass('hover',500);
		}, 
		function (event) {
			event.preventDefault();
			$(this).stop(true, true).removeClass('hover',500);
		}
	);
	$("#btn-navegacion").hover(
		function (event) {
			event.preventDefault();
			$(this).find(".img-naveg").stop(true, true).hide();
			$(this).find(".texto-naveg").stop(true, true).show();
		}, 
		function (event) {
			event.preventDefault();
			$(this).find(".img-naveg").stop(true, true).show();
			$(this).find(".texto-naveg").stop(true, true).hide();
		}
	);

	$(".proyecto-block").hover(function(){
		$(this).find(".proyecto-contenido").stop(true, true).show('slow');

	},function(){
		$(this).find(".proyecto-contenido").stop(true, true).hide('fast');
	});
	$(".proyecto-block5").hover(function(){
		$(this).find(".proyecto-contenido5").stop(true, true).show('300',function () {
			$(this).find('.mascara').stop(true, true).fadeIn();
			$(this).find('.img-icono-mas').stop(true, true).fadeIn();
			$('.contenedor-centrar').each(function () {
				centrarVert($(this));
			});
		});

	},function(){
		$(this).find(".proyecto-contenido5").stop(true, true).hide('fast');
		$(this).find('.mascara').stop(true, true).fadeOut();
		$(this).find('.img-icono-mas').stop(true, true).fadeOut();
	});

	$("#navegacion ul li a[href^='#']").on('click', function(e) {
		// prevent default anchor click behavior
		e.preventDefault();

		// store hash
		var hash = this.hash;

		// animate
		$('html, body').stop().animate({
			scrollTop: $(this.hash).offset().top
		}, 500, function(){
			// when done, add hash to url
			// (default click behaviour)
			window.location.hash = hash;
			//window.location.hash = target
		});
	});


 	/*$('.input-nac').keyup(function () {     
		this.value = this.value.replace(/[^1-9\.]/g,'');
	});*/



$(".integer").numeric(false, function() { alert("Solo números"); this.value = ""; this.focus(); });

$('#btn-politicas').click(function(e){
	e.preventDefault();



	var miclave = $('#miclave').val();
	clave="celmedia";
	    if (clave == miclave) {
	    	//alert("ok");
	    	window.location = "politicasCN.php";
	    }else{
	    	alert("Clave Erronea.");
	    	window.location = "trabajaencn.php";
	    };
	




});
$('#btn-edad').click(function(e){
	e.preventDefault();

		var day = parseInt($('#nac-dia').val());
		var month = parseInt($('#nac-mes').val());
		var year0 = parseInt($('#nac-anio').val());
		var year = 0;
		if (year0 >= 40 && year0 <= 99) {
			year = 1900 + year0;
		}else if (year0 >= 0 && year0 < 40){
			year = 2000 + year0;
		}

		    // alert("year: " + year);

		    var age =  18;

		    // var mydate = new Date();
		    // mydate.setFullYear(year, month-1, day);
		    var mydate = new Date(year,month-1,day);
			// alert("mydate: " + mydate);
			if (!(mydate.getFullYear() == year && mydate.getMonth() + 1 == month && mydate.getDate() == day)) {
				alert('Por favor Ingrese una fecha Valida');
			} else {
				var currdate = new Date();	
				currdate.setFullYear(currdate.getFullYear() - age);
		    // alert("currdate: " + currdate);
		    
		    if (currdate > mydate) {
		    	//alert("ok");
		    	window.location = "cervezas.php";
		    }else{
		    	alert("No tienes la edad requerida para acceder a este conenido. Gracias.");
		    	window.location = "productos.php";
		    };
		}
	});

	$(".texto-chat").hide();
	// $(".menu-icon-final").hover(
	// 	function (event) {
	// 		event.preventDefault();
	// 		$(this).stop(true, true).addClass('menu-icon-final-abierto-fondo',600);
	// 		$(this).find(".texto-chat").stop(true, true).show();
	// 		$(this).stop(true, true).addClass('menu-icon-final-abierto',600);
	// 	}, 
	// 	function (event) {
	// 		event.preventDefault();
	// 		$(this).stop(true, true).removeClass('menu-icon-final-abierto',600);
	// 		$(this).find(".texto-chat").stop(true, true).hide();
	// 		$(this).stop(true, true).removeClass('menu-icon-final-abierto-fondo',600);
	// 	}
	// 	);
	$('.contenedor-centrar').each(function () {
		centrarVert($(this));
	});
	$('.contenedor-centrarPad').each(function () {
		centrarVertPad($(this));
	});
	$('.contenedor-ancho').each(function () {
		centrarHor($(this));
	});

 	//animUp();
 // 	$('#btn-navegacion').click(function(e){
	// 	e.preventDefault();
	// 	scrolled=scrolled+( $(window).height() );

	// 	$('html, body').animate({
	// 		scrollTop: scrolled
	// 	}, 800, function(){
	// 		//
	// 	});
	// });

	// $('#btn-navegacion-up').click(function(e){
	// 	e.preventDefault();
	// 	scrolled=scrolled-( $(window).height() );

	// 	$('html, body').animate({
	// 		scrollTop: scrolled
	// 	}, 800, function(){
	// 		//
	// 	});
	// });

 });


$(window).bind('scroll', function() {
	if ($(window).scrollTop() > 50) {
		$('.navbar').addClass('navbar-bajar');
		//$('#top-divesquim').show();
	}
	else {
		$('.navbar').removeClass('navbar-bajar');
		//$('#top-divesquim').hide();
	}
});

function resizeLogo () {
	var width = $(window).width();
	if ((width >= 979)&&(width <= 1366)) {
      // $('<p>lesser than 600</p>').appendTo('body');
      $('img.brand-desk').attr("src","asset/img/iconos/Icono-CN.png");
  } else {
  	$('img.brand-desk').attr("src","asset/img/logo.png");
      // $('<p>greater than 600</p>').appendTo('body');
  }
}
$(window).load(function(){
	resizeLogo();
	$('.contenedor-centrar').each(function () {
		centrarVert($(this));
	});
	$('.contenedor-centrarPad').each(function () {
		centrarVertPad($(this));
	});
	$('.contenedor-ancho').each(function () {
		centrarHor($(this));
	});
	$('.contenedor-fondo').each(function () {
		enviarAlFondo($(this));
	});
	$('.contenedor-fondoPad').each(function () {
		enviarAlFondoPad($(this));
	});
	$('[id^="info-"]').hide();
	$('[id^="link1-"]').hide();
	ajustarHome();
	
	
});
$(window).resize(function(){
	$('.slide.slideFull').each(function () {
		$(this).height($(this).parent().height());
	});
	resizeLogo();
	$('.contenedor-fondo').each(function () {
		enviarAlFondo($(this));
	});
	$('.contenedor-fondoPad').each(function () {
		enviarAlFondoPad($(this));
	});
	$('.contenedor-centrar').each(function () {
		centrarVert($(this));
	});
	$('.contenedor-centrarPad').each(function () {
		centrarVertPad($(this));
	});
	$('.contenedor-ancho').each(function () {
		centrarHor($(this));
	});
	ajustarHome();
});


jQuery(document).ready(function(){
	jQuery(".lionbars").lionbars();
});
function ajustarHome() {
	$(".imagenNoticia").each(function () {
		var altura=$(".bienvenido").height();
		$(this).height(altura);
	});
}