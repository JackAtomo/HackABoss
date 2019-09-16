'use stric'
function contruirPiramides(alto) {
/* let asterisco = '*';
 let espacio = ' ';
 let salida = "";
 let medio = Math.round(alto / 2);
 let veces = medio - 1 ;
 let index = 0 ;
 let cont = 1;
 let veces1 = 1 







while (index <= alto) {
salida = salida + espacio;
while (index === veces || cont > 0  ){
salida = salida + asterisco;
cont --
veces1 ++
}
if (cont = 0){

    cont = veces1
veces --
}
index++;
}
return salida

}*/

    let medio = 0;
    let t_veces = 0;
    let veces = 0;
    let espacio = " ";
    let asterisco = "*";
    let salida = "";
    let salida2= "";
    let numero = 1 ;
    let hola = 0;
    medio = Math.round(alto / 2)
    medio = medio - 1;
    t_veces = alto * 2 ;
    for (let index = 0; index < t_veces ; index++) {
        
    while (medio>veces){
    salida = salida + espacio;    
    veces++;
    }
    while(medio>=veces ){
        salida = salida + asterisco ;
        hola ++
        if(hola == numero){
        medio --;
        veces = 1;
        hola=0;
        numero++
        }
    }
        
veces = 0 ;
     console.log(salida);   
    salida = "";        
    }
    
}
contruirPiramides(3)

let i= 0;