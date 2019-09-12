'use strict'

const ejemplo1 = [ 1 , 2 , 3 ,4 ,5 ,6 ,7 ,8 ,9 ,10 ];
10
let arrayF2 = darVuelta(ejemplo1);
console.log(arrayF2);



function darVuelta (ejemplo2){
let largo = ejemplo2.length ;
let arrayF1 = [];

while ( largo >= 0){
arrayF1.push(ejemplo2[largo]);
console.log(ejemplo2[largo]);
largo = largo - 2 ;
}
return arrayF1
}

