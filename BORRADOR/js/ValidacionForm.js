/**
 * Puesto que ya hay validaciones HTML5 con pattern no serán necesarias
 * validar a traves de funciones si estan rellenos o no los campos obligatorios
 * Por lo que solo tendremos que comprobar que haya un asunto selecionado y que este activado y selecionado el boton
 * de terminos y condiciones
 */

function validar(){
	return Terminos() && Asunto();	
}

function comprobarCampos(){
	
	var rellenos = true;
	/**Cogemos el boton que necesitaremos para deshabilitarlo**/
	var boton = document.getElementById("boton");
	/**Cogemos el checkbox de las condiciones**/
	var condiciones = document.getElementById("condiciones");
	
	/**Recogemos todos los campos obligatorios reunidos bajo el name obligatorios**/
	var obligados = document.getElementsByName("obligatorios");
	/**Para cada uno de ellos comprobamos si su longitud es >0 (tienen algo) o menor (no tienen nada)**/
	for(var i=0; i<obligados.length;i++){
		/**Si alguno de ellos no contiene nada entra dentro del if acaba la funcion**/
		if(obligados[i].value.length == 0){
			rellenos = false;
			condiciones.checked=rellenos;
			condiciones.disabled=!rellenos;
			boton.disabled=!rellenos;	
		}
	}	
	condiciones.disabled=!rellenos;
	document.getElementById("escondido").value=document.getElementById("nombre").value;
}

function Asunto(){
	var opciones = document.getElementById("asunto").options;
	if(opciones.selectedIndex==0){
		return false;
	}else{
		return true;
	}
}

function Terminos(){
	var boton = document.getElementById("boton");
	if(document.getElementById("condiciones").checked){
		boton.disabled=false;	
	}else{
		boton.disabled=true;
	}
	
}