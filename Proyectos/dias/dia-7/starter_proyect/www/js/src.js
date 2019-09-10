'use string'
/*
function adivinarNumero(){
const  aleatorio = Math.round(Math.random()*10);
console.log(aleatorio) ;
let intentos = 5
for (let cont = 0; cont < 5 ; cont++) {
    let numero
    
    numero = parseInt(prompt(`Dame un numero quedan ${intentos} intentos`));
   
    if ( numero === aleatorio){
        
        return true
    } else {
        intentos =  5 - cont;
        console.log (`Intentalo de nuevo te quedan ${intentos} intentos`);
    }
    
}  
return false
}

let acerte = adivinarNumero()

if (acerte === true){
    console.log('Consegido');
}else if (acerte === false) {
    console.log('BUUUMMM!');
}
*/
let cont = 0;
var  aleatorio = Math.round(Math.random()*10);
console.log(aleatorio)
function calcu(numero){

if (cont < 5){
    numero = document.getElementById("numero").value ;
    if(numero == aleatorio){
        desactivar();
    }else {
        intentos = 5 - cont
        document.getElementById("salida").value = `Fallaste intenta te quedan ${intentos} intentos`;
        cont++ ;
    }
}else{
    explotar();
}
}




function desactivar(){
    document.getElementById("salida").value ='Lo Conseguiste' ;
    cont = 7
    
}
function explotar(){
    document.getElementById("salida").value = 'BUMMM!!';
    document.getElementById("image").src = "/images/bum.jpeg" ;
    document.getElementById("numero").hidden = true;
    

}





