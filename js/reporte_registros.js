var mostrar_registros=function(){
	var url="http://localhost/Ardutuec/registros.php";
	
	$.get(url, function(datos){
		
		var json = JSON.parse(datos);
		
		$("#lista_registros").text("");
		for(var i=0; i<json.length; i++){
			var ID = $("<td></td>").text(json[i].ID);
			var nombre = $("<td></td>").text(json[i].nombre);
			var apellido = $("<td></td>").text(json[i].apellido);
			var carrera_escuela = $("<td></td>").text(json[i].carrera_escuela);
			var N_control = $("<td></td>").text(json[i].N_control);
			var fila_registros = $("<tr></tr>").append(ID)
											  .append(nombre)
											  .append(apellido)
											  .append(carrera_escuela)
												.append(N_control);
			$("#lista_registros").append(fila_registros);
			
		};
	
	});
	
}


var cargar=function(){
	mostrar_registros();

};


$(document).ready(cargar);