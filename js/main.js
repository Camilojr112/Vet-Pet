/*Inicia modulos/pestañas de la consulta.*/
$(document).ready(function(){
	$('ul.tabs li a:first').addClass('active');
	$('.secciones section').hide();
	$('.secciones section:first').show();

	$('ul.tabs li a').click(function(){
		$('ul.tabs li a').removeClass('active');
		$(this).addClass('active');
		$('.secciones section').hide();

		var activeTab = $(this).attr('href');
		$(activeTab).show();
		return false;
	});
});
/*Finaliza modulos/pestañas de la consulta.*/


/* Inicia Popup ventana emergente "Información almacenada con éxito".*/
$(document).ready(function (){

	function showPopup(){
		$('.pop-up').addClass('show');
		$('.pop-wrap').addClass('show');
	}	

	$("#close").click(function(){
		$('.pop-up').removeClass('show');
		$('.pop-wrap').removeClass('show');
	});

	$(".btn1").click(showPopup);
	$(".btn3").click(showPopup);

	/*setTimeout(showPopup, 5000);*/

});
/* Finaliza Popup ventana emergente "Información almacenada con éxito".*/

/*Inicia Popup ventana emergente "Cancelar registro - Respuesta: No".*/
$(document).ready(function (){

	function showCancelar(){
		$('.cancelar-pop-up').addClass('show');
		$('.cancelar-pop-wrap').addClass('show');
	}	

	$("#close-cancelar").click(function(){
		$('.cancelar-pop-up').removeClass('show');
		$('.cancelar-pop-wrap').removeClass('show');
	});

	$(".btn4").click(showCancelar);

	/*setTimeout(showPopup, 5000);*/

});
/*Finaliza Popup ventana emergente "Cancelar registro".*/

$(document).ready(function() {
       $('#limpiar').click(function() {
              $('.descripcion').val('');
              $('.antecedentes').val('');
              $('.cirugias').val('');
              $('.estadoMedico').val('');
              $('.procedimiento').val('');
              $('.cancelar-pop-up').removeClass('show');
			  $('.cancelar-pop-wrap').removeClass('show');
        });
});

/* Inicia Popup ventana emergente visualizar paciente.*/
$(document).ready(function (){

	function showVispac(){
		$('.vis-pac-pop-up').addClass('show');
		$('.vis-pac-pop-wrap').addClass('show');
	}	

	$("#close-vis-pac").click(function(){
		$('.vis-pac-pop-up').removeClass('show');
		$('.vis-pac-pop-wrap').removeClass('show');
	});

	$(".icon.icon-tabler.icon-tabler-eye-pac").click(showVispac);

});
/* Finaliza Popup ventana emergente visualizar paciente.*/

/* Inicia Popup ventana emergente visualizar propietario.*/
$(document).ready(function (){

	function showVispac(){
		$('.vis-pro-pop-up').addClass('show');
		$('.vis-pro-pop-wrap').addClass('show');
	}	

	$("#close-vis-pro").click(function(){
		$('.vis-pro-pop-up').removeClass('show');
		$('.vis-pro-pop-wrap').removeClass('show');
	});

	$(".icon.icon-tabler.icon-tabler-eye-pro").click(showVispac);

});
/* Finaliza Popup ventana emergente visualizar propietario.*/