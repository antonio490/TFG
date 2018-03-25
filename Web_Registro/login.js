




function clean(){
	document.getElementById('usuario').value = null;
	document.getElementById('pass').value = null;

}

function check(){
	var nombre = document.getElementById("usuario").value;
	var pass = document.getElementById("pass").value;
	
	nombre = nombre.trim();
	pass = pass.trim();
	if(pass.length == 0)
		window.alert("Introduzca una contraseña");
	else if(nombre.length == 0)
		window.alert("El nombre de usuario no puede estar vacio")
	
	else
		window.alert("Ok!")
	
		
}



