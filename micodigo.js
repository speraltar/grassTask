$(document).bind("mobileinit", function() {
	// Código de inicio para jQM
	
	$.mobile.ajaxEnabled = false;
	$.mobile.defaultPageTransition = "slideup";
	$.mobile.defaultDialogTransition = "flip";
	$.mobile.loadingMessage = "Por favor espere...";
	$.mobile.pageLoadErrorMessage = "No se ha podido cargar la página";
	
	// Eventos de gestos
	
	$("zona").bind("tap", function() {
		
	});
	
	$("zona").bind("taphold", function() {
		
	});
	
	$("zona").bind("swipeleft", function() {
		
	});
	
	$("zona").bind("swiperight", function() {
		
	});
	
	// Eventos de mouse virtuales
	
	$("zona").bind("vclick", function() {
		
	});
	
	// Eventos de orientación
	
	$(document).bind("orientationchange", function() {
		
	});
	
	// Eventos de scroll
	
	$(document).bind("scrollstart", function() {
		
	});
	
	$(document).bind("scrollstop", function() {
		
	});
	
	// Eventos de página
	
	$("pagina1").bind("pageinit", function() {
		
	});
	
	// Eventos de página externa
	$(document).bind("pageloadfailed", function() {
		alert("Falló la carga de la página");
	});
	
	$("pagina1").bind("pagechange", function() {
		
	});
	
	$("pagina1").bind("pageshow", function() {
		
	});
	
	$("pagina1").bind("pagehide", function() {
		
	});
	
	
	// Eventos layout
	
	$(document).bind("updatelayout", function() {
		
	});
	
	$(document).bind("animacionComplete", function() {
		
	});
	
	
	
});