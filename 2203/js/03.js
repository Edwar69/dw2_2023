consola.log("03.js enlazado");
consola.log("tarea 3");
consola.log("numeros del 1 al 10");
num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
total= [];
console.log(num);
for (var a = 0; a < num.length; a++) {
	var numero = num[a];
	if (numero % 2 === 0) {
		total.push(numero);
	}
}
consola.log("los numeros de la primera matriz");
consola.log(total);
