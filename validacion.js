function validacion(){
	
	var nombre, correo, telefono, mensaje, expresion;
	nombre = document.getElementById("nombre2").value;
	correo = document.getElementById("correo2").value;
	telefono = document.getElementById("telefono2").value;

	expresion = /\w+@\w+\.+[a-z]/;
	
	if(nombre === ""||correo === ""||telefono === ""){
		alert("Los campos  son obligatorios ");
		return false;
	}
	else if(nombre.length>30 ){
			alert("El campo  nombre es muy largo ");
			return false;}
	else if(correo.length>100 ){
			alert("El correo es muy largo ");
			return false;}
	else if(!expresion.test(correo)){
		alert("El correo no es válido");
		return false;
	}
	else if(telefono.length>10 ){
			alert("El telefono es muy largo ");
			return false;}
	else if(isNaN(telefono))
		{
			alert("El teléfono ingresado no es un número ");
			return false;
		}
}

