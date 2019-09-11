'use strict'

let nombres = ['Pepe', 'Juan', 'Jose', 'Pedro'];
let edades = [18, 5, 10, 14];
nombres.push('Lola');
edades.push(20);

let resultado;
resultado = unirArrays(nombres, edades);
console.log(resultado);



function unirArrays(nombres, edades) {
    let resultado = [];
    let largo = edades.length;
    if (nombres.length < edades.length) {
        largo = nombres.length;
    }
    for (let cont = 0; cont < largo; cont++) {
        resultado.push({ nombre: nombres[cont] }, { edad: edades[cont] });
        console.log(nombres[cont], edades[cont]);
    }
    return resultado;

}