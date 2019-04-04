function val(){
    
var nombre, correo, celular, empresa, telefono, expresion;
    nombre = document.getElementById("nombre1").value;
    correo = document.getElementById("correo1").value;
    celular = document.getElementById("celular1").value;
	empresa = document.getElementById("empresa1").value;
	telefono = document.getElementById("telefono1").value;
  
	expresion =/\w+@\w+\.+[a-z]/;
	
	if(nombre==="" )
		{
			alert("El Campos Nombre es obligatorio");
			return false;
		}
	if(correo==="" )
		{
			alert("El Campos Correo es obligatorio");
			return false;
		}
	if(celular===""  )
		{
			alert("El Campos Celular es obligatorio");
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
	else if(!expresion.test(correo))
		{
			alert("El correo no es válido");
			return false;
			
		}
	else if(celular.length>12){
		alert("El Celular es muy largo");
			return false;
		
	}
	else if(isNaN(celular)){
		alert("El Celular ingresado no es un número");
			return false;
		
	}
	else if(empresa.length>50){
		
		alert("La empresa ingresada es muy larga");
			return false;
	}
    
    else if(telefono.length>12){
		alert("El teléfono es muy largo");
			return false;
		
	}
	else if(isNaN(telefono)){
		alert("El teléfono ingresado no es un número");
			return false;
		
	}
}
