var operador1 = 20;
var operador2 = 30;

function sumar2(){
	
	var dato1, dato2, resultado;
	dato1 = prompt ("¿Cuál es el primer numero a sumar? ");
	dato2 = prompt ("¿Cuál es el segundo numero a sumar? ");
	
	resultado = parseInt(dato1) + parseInt(dato2);
	resultado = 'El resultado de la suma es: ' + resultado;
	alert (resultado);
	
}

function datos(){
	var inicio = 'Hola ', nombre, final = ' !', resultado;
	nombre = prompt ("¿Cuál es tu nombre? ");
	resultado = inicio + nombre + final
	alert (resultado);
}