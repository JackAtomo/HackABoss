'use strict'
//nombro los arrays a unir
let nombres = ['Pepe', 'Juan', 'Jose', 'Pedro'];
let edades = [18, 5, 10, 14];
//le agrego a rray un valor en su ultima celda
nombres.push('Lola');
edades.push(20);

//aqui nombro la variable en la que voy a guardar el resultado
let resultado;
//llamo a la funcion y le paso las variables que necesita para trabajar
resultado = unirArrays(nombres, edades);
//muestro el resultado en consola
console.log(resultado);


//nombro la funcion
function unirArrays(nombres, edades) {
    // nombro la variable en la que voy a guardar el resultado
    let resultado = [];
//miro cual es el array mas largo (esto en un + para cuando los arrays son de diferente largo)
    let largo = edades.length;
    if (nombres.length < edades.length) {
        largo = nombres.length;
    }
    // aqui creo el for que me va agregando valores al aray resultado  
    for (let cont = 0; cont < largo; cont++) {
        resultado.push({ nombre: nombres[cont] }, { edad: edades[cont] });
        console.log(nombres[cont], edades[cont]);
    }
    //devuelvo el resultado
    return resultado;

}