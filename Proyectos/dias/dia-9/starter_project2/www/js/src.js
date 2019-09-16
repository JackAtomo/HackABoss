'use strict'

function contagiar2(array22) {
    let contagiado2 = [...array22];


//Con for

    for (let index = 0; index < array22.length; index++) {
    if (array22[index] === true || index != array22) {
        contagiado2.splice(index + 1, 1, true);
        contagiado2.splice(index - 1, 1, true);
        index++
        
}
    }
    for (let index2 = 0; index2 < array22.length; index2++) {
        if (array22[index2] === true) {
        contagiado2.splice(index2, 1, false)
            
    }
        }return contagiado2;
    }

//Con While
       
   
   
    function contagiar(array2) {
let contagiado = [...array2];
let cont = 0;
let largo = array2.length
while (cont < largo) {
        if (array2[cont] === true) {
            contagiado.splice(cont + 1, 1, true);
            contagiado.splice(cont - 1, 1, true);
            
            cont=cont + 2;
        } else {
            cont++;
        }

    }
    let cont1 = 0
    while (cont1 < largo) {
        if (array2[cont1] === true) {
            contagiado.splice(cont1, 1, false);
            cont1 ++;
        } else {
            cont1++;
        }

    }

    return contagiado;

}
//llamo a las dos funciones

let array1 = [true, false, true, false, false, false, true, true];

console.log(array1, contagiar(array1));

console.log(array1, contagiar2(array1));


