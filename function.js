const displayValorAnterior = document.getElementById('valor-anterior');
const displayValorAtual = document.getElementById('valor-actual');
const botonesNumeros = document.querySelectorAll('.numero');
const botonesOperadores = document.querySelectorAll('.operador');

const display = new Display(displayValorAnterior, displayValorAtual);

botonesNumeros.forEach(boton => {
    boton.addEventListener('click', () => display.agregarNumero(boton.innerHTML));
});

botonesOperadores.forEach(boton => {
    boton.addEventListener('click', () => display.computar(boton.value))
});

function calcserver(reqType,num1,num2) {

var return_first = function () {
    var tmp = null;
    $.ajax({
        'async': false,
        'type': "POST",
        'global': false,
        'dataType': 'html',
        'url': "servercalc.php",
        'data': {  req:reqType, n1:num1, n2:num2 },
        'success': function (data) {
            tmp = data;
        }
    });
    return tmp;
}();

const text = return_first;
const obj = JSON.parse(text);


if (obj.resultado == 0){	
	return "0";
}else {
   	return obj.resultado;
} 


}