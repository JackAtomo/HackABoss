'use strict'
function numeroPatas() {
    let animal
    animal = document.getElementById("animal").value;
    let patas
    switch (animal) {
        case 'perro':

            patas = 4;
            document.getElementById("faborito").value = `Tu animal faborito es ${animal} y tiene ${patas} patas`;
            document.getElementById("imagenes").src ="/images/perro.jpg" ;
            document.getElementById("imagenes").alt ="Imagen de un perro" ;

        break;
        case 'osito':

            patas = 4;
            document.getElementById("faborito").value = `Tu animal faborito es ${animal} y tiene ${patas} patas`;
            document.getElementById("imagenes").src ="/images/osito.jpg" ;
            document.getElementById("imagenes").alt ="Imagen de un osito" ;


        break;
        case 'gato':

            patas = 5;
            document.getElementById("faborito").value = `Tu animal faborito es ${animal} y tiene ${patas} patas`;
            document.getElementById("imagenes").src ="/images/gato.jpg" ;
            document.getElementById("imagenes").alt ="Imagen de un gato" ;


        break;
        case 'pez':

            patas = 1;
            document.getElementById("faborito").value = `Tu animal faborito es ${animal} y tiene ${patas} patas`;
            document.getElementById("imagenes").src ="/images/pez.jpg" ;
            document.getElementById("imagenes").alt ="Imagen de un pez" ;


        break;
        case 'periquito':

            patas = 2;
            document.getElementById("faborito").value = `Tu animal faborito es ${animal} y tiene ${patas} patas`;
            document.getElementById("imagenes").src ="/images/periquito.jpg" ;
            document.getElementById("imagenes").alt ="Imagen de un periquito" ;


        break;

        default:

            patas = 0;
            document.getElementById("faborito").value = `Seleciona un animal porfabor :) `;
            document.getElementById("imagenes").src ="/images/dito.jpg" ;
            document.getElementById("imagenes").alt ="Imagen de un Dito" ;


        break;
    }
    return patas ;
}