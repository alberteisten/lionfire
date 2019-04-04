function valida(){
	var nombre, correo, telefono, exprecion;
	nombre = document.getElementById("nombre1").value;
	correo = document.getElementById("correo1").value;
	telefono = document.getElementById("telefono1").value;
	
    exprecion = /\w+@\w+\.+[a-z]/;
	
	if(nombre==="" || correo==="" ||telefono===""  )
		{
			alert("Todos los  campos son obligatorios");
			return false;
		}
	else if(nombre.length>50){
		alert("El nombre es muy largo");
			return false;
		
	}
	else if(correo.length>50){
		alert("El correo es muy largo");
			return false;
		
	}
	else if(!exprecion.test(correo))
		{
			alert("El correo no es válido");
			return false;
			
		}
	else if(telefono.length>12){
		alert("El telefono es muy largo");
			return false;
		
	}
	else if(isNaN(telefono)){
		alert("El teléfono ingresado no es un número");
			return false;
		
	}
	
	
}