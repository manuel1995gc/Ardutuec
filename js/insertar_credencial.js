var insertar_credencial = function(){
	var host ="http://localhost/Ardutuec/insertar_credencial.php"
	var rfid=$("#rfid").val().trim();
	var nombre1=$("#nombre").val().trim();
	var apellido1=$("#apellido").val().trim();
	var carrera_escuela1=$("#carrera").val().trim();
	var ncontrol1=$("#ncontrol").val().trim();
	//var fecha_Hora=$("#FyH").val().trim();
	
$.post(host,
{
ID:rfid,
nombre:nombre1,
apellido:apellido1,
carrera_escuela:carrera_escuela1,
N_control:ncontrol1,
//Fecha_Hora:fecha_Hora,
},
function(data)
{
alert(data);
});
};


var cargar=function(){
	$("#btn_guardar1").on("click",insertar_credencial);
};



$(document).ready(cargar);