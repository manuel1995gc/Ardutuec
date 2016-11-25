var Optener_usuario= function(){
	var url="http://localhost/Ardutuec/mantener_usuario.php";
	
	$.get(url, function(usuario){
		

			$("#usuario").append("<p>"+usuario+"</p>");
	});
}


var registros= function(){
   $("#ver_registros").toggleClass("hidden");
}

var validar= function(){
   $("#validacion").toggleClass("hidden");
}
var registrar_usuarios= function(){
   $("#registrar").toggleClass("hidden");
}






var cargar=function(){
	Optener_usuario();
	$("#c6").on("click",registros);
	$("#c1").on("click",validar);
	$("#c2").on("click",registrar_usuarios);
	};

$(document).ready(cargar);