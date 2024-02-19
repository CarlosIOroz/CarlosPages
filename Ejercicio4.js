let banderas = ["conejos.PNG", "vacas2.PNG", "patos.PNG", "conejos6.PNG", "20gallinas.PNG","ovejas2.PNG", "8puerquitos.PNG","8caballos.PNG","4perros.PNG","8conejos.PNG","20gatos.PNG","13cabras.PNG"];

//arreglo que guardara la opcion correcta
let correcta = [2,1,0,2,0,1,2,0,1,0,1,2,0];

//arreglo que guardara los paises a mostrar en cada jugada
let opciones = [];
//cargo en el arreglo opciones las opciones a mostrar en cada jugada
opciones.push(["6 Conejos "  , "4 Conejos " , "   5 Conejos   "]);

opciones.push(["5 Vacas","3 Vacas", "4 Vacas"]);

opciones.push(["3 Patos", "4 Patos", " 5 Patos"]);
opciones.push(["7 Conejos", "5 Conejos", "6 Conejos"]);
opciones.push(["20 Gallinas", "17 Gallinas", "19 Gallinas y un pato"]);
opciones.push(["6 Ovejas", "7 Ovejas", " 10 Ovejas"]);
opciones.push(["9 Puerquitos", "10 Puerquitos", " 8 Puerquitos"]);
opciones.push(["6 Caballos", "4 Caballos", " 5 Caballos"]);
opciones.push(["3 Perros", "4 Perros", " 2 Perros"]);
opciones.push(["8 Conejos", "5 Conejos", "6 Conejos"]);
opciones.push(["21 Gatos", "20 Gatos", "19 Gatos"]);
opciones.push(["19 Cabras", "15 Cabras", "13 Cabras"]);
opciones.push(["8 Conejos", "15 Conejos", "13 Conejos"]);

//variable que guarda la posicion actual
let posActual = 0;
//variable que guarda la cantidad acertadas hasta el moemento
let cantidadAcertadas = 0;

function comenzarJuego(tiempoLimite){
    //reseteamos las variables
    posActual = 0;
    cantidadAcertadas = 0;
    tiempoExpirado = false;
    //activamos las pantallas necesarias
    document.getElementById("pantalla-inicial").style.display = "none";
    document.getElementById("pantalla-juego").style.display = "block";
    Cargargranjas(tiempoLimite);

}
let temporizadorImagen;
let preguntaComun = "Cuantos animales de granja hay en la imagen y cuales son?";
//funcion que carga la siguiente bandera y sus opciones
function Cargargranjas(tiempoLimite) {
    // Controlamos si se acabaron las banderas
    if (banderas.length <= posActual) {
        terminarJuego();
    } else {
        // Limpiamos las clases que se asignaron
        limpiarOpciones();

        document.getElementById("imagengranja").src = "imagenes/" + banderas[posActual];
        document.getElementById("n0").innerHTML = opciones[posActual][0];
        document.getElementById("n1").innerHTML = opciones[posActual][1];
        document.getElementById("n2").innerHTML = opciones[posActual][2];
        document.getElementById("preguntaComun").innerHTML = preguntaComun; // Agregamos esta línea

        // Actualizamos el nivel actual
        document.getElementById("numNivel").innerHTML = posActual + 1;
        document.getElementById("numfelicidad").innerHTML = posActual + 1;
        // Definimos mensajes y duraciones por pregunta
        

        // Mostramos el mensaje de felicitación si pasó de nivel
        if (posActual > 0 && posActual % 1 === 0) {
            document.getElementById("numNivelMensaje").innerHTML = Math.floor(posActual / 5) + 1;
            document.getElementById("mensaje-felicitacion").style.display = "block";
            
            // Ocultamos el mensaje después de 3 segundos
            setTimeout(function () {
                document.getElementById("mensaje-felicitacion").style.display = "none";
            }, 3000);
            
        }
        

        // Esperamos 30 segundos (30000 milisegundos) y luego ocultamos la imagen
        setTimeout(function () {
            // Ocultamos la imagen después de 30 segundos
            document.getElementById("imagengranja").src = "";
        }, 5000);
        setTimeout(function () {
            document.getElementById("imagengranja").src = "";
        }, tiempoLimite * 1000);
        
        let tiempoRestanteUsuario = tiempoLimite;
    const intervaloTiempoUsuario = setInterval(function () {
        tiempoRestanteUsuario--;

        // Actualizar el tiempo restante en el elemento HTML
        document.getElementById("numTiempoRestante").innerHTML = tiempoRestanteUsuario;

        if (tiempoRestanteUsuario <= 0) {
            clearInterval(intervaloTiempoUsuario);
            tiempoExpirado = true;
            document.getElementById("imagengranja").src = "";
            terminarJuego(); // Cambiado a terminarJuego() cuando se agote el tiempo
        }
    }, 1000);

        
    }
}

function limpiarOpciones(){
    document.getElementById("n0").className = "nombre";
    document.getElementById("n1").className = "nombre";
    document.getElementById("n2").className = "nombre";

    document.getElementById("l0").className = "letra";
    document.getElementById("l1").className = "letra";
    document.getElementById("l2").className = "letra";
}

function comprobarRespuesta(opElegida){
    if(opElegida==correcta[posActual]){//acertó
        //agregamos las clases para colocar el color verde a la opcion elegida
        document.getElementById("n" + opElegida).className = "nombre nombreAcertada";
        document.getElementById("l" + opElegida).className = "letra letraAcertada";
        cantidadAcertadas++;
    }else{//no acerto
        //agramos las clases para colocar en rojo la opcion elegida
        document.getElementById("n" + opElegida).className = "nombre nombreNoAcertada";
        document.getElementById("l" + opElegida).className = "letra letraNoAcertada";

        //opcion que era correcta
        document.getElementById("n" + correcta[posActual]).className = "nombre nombreAcertada";
        document.getElementById("l" + correcta[posActual]).className = "letra letraAcertada";
    }
    posActual++;
    //Esperamos 1 segundo y pasamos mostrar la siguiente bandera y sus opciones
    setTimeout(Cargargranjas,1000);
}
function terminarJuego(){
    //ocultamos las pantallas y mostramos la pantalla final
    document.getElementById("pantalla-juego").style.display = "none";
    document.getElementById("pantalla-final").style.display = "block";
    //agreamos los resultados
    document.getElementById("numCorrectas").innerHTML = cantidadAcertadas;
    document.getElementById("numIncorrectas").innerHTML = banderas.length - cantidadAcertadas;
    
}

function volverAlInicio(){
    //ocultamos las pantallas y activamos la inicial
    
    document.getElementById("pantalla-final").style.display = "none";
    document.getElementById("pantalla-inicial").style.display = "block";
    document.getElementById("pantalla-juego").style.display = "none";
}
