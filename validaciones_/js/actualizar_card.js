	$(document).ready(function() {
		var refreshId = setInterval(function() {
			$("#numero").load("validaciones_/actualizar_card");
		}, 1000);			
	});

	$(document).ready(function() {
		var refreshId = setInterval(function() {
			$("#detalle").load("validaciones_/actualizar_card2");
		}, 1000);			
	});
