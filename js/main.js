

/* Inicia Popup ventana emergente visualizar paciente.*/
$(document).ready(function (){

	function showVispac(){
		$('.vis-pac-pop-up').addClass('show');
		$('.vis-pac-pop-wrap').addClass('show');
	}	

	$("#close-vis-pac-viv").click(function(){
		$('.vis-pac-pop-up').removeClass('show');
		$('.vis-pac-pop-wrap').removeClass('show');
	});

	$(".icon.icon-tabler.icon-tabler-eye-pac").click(showVispac);

});



/* Inicia Popup ventana emergente EDITAR paciente.*/
$(document).ready(function (){

	function showVisPacEdit(){
		$('.vis-pac-pop-up-edit').addClass('show');
		$('.vis-pac-pop-wrap-edit').addClass('show');
	}	

	$("#close-vis-pac-edit").click(function(){
		$('.vis-pac-pop-up-edit').removeClass('show');
		$('.vis-pac-pop-wrap-edit').removeClass('show');
	});

	$(".icon.icon-tabler.icon-tabler-pencil-pac").click(showVisPacEdit);

});


/*Inicia modulos/pestañas de la consulta.*/
const open = document.getElementById('open');
const modal_container = document.getElementById('modal_container');
const close = document.getElementById('close');

open.addEventListener('click', ()=>{
	modal_container.classList.add('show');
});

close.addEventListener('click', ()=>{
	modal_container.classList.remove('show');
});
