//Inicializacion de variables
let tarjetasDestapadas= 0;
let tarjeta1 =null;
let tarjeta2 =null;
let primerResultado =null;
let segundoResultado = null;
let movimientos = 0;
let aciertos = 0;
let temporizador = false;
let timer =60;
let timerinicial = 60;
let tiempoRegresivoId=null;

//Apuntando a documentos HTML
let mostrarMovimientos = document.getElementById('movimientos');
let mostrarAciertos = document.getElementById('aciertos');
let mostrartiempo = document.getElementById('t-restante');

let numeros = [1,1,2,2,3,3,4,4,5,5,6,6,7,7,8,8];
numeros=numeros.sort(()=>{return Math.random()-0.5});
console.log(numeros);
//funciones
function contarTiempo(){
    tiempoRegresivoId = setInterval(()=>{
        timer --;
        mostrartiempo.innerHTML= `Tiempo ${timer} segundos`;
        if(timer ==0){
            clearInterval(tiempoRegresivoId);
            bloquearTarjetas();
        }
    },1000);
}
function bloquearTarjetas(){
    for(let i =0; i<=15; i++){
        let tarjetaBloqueada = document.getElementById(i);
        tarjetaBloqueada.innerHTML = numeros[i];
        tarjetaBloqueada.disabled = true;
    }
}

//funcion principal
function destapar(id){

    //Tiempo de juego
    if(temporizador == false){
        contarTiempo();
        temporizador = true;
    }

    tarjetasDestapadas ++;
    console.log(tarjetasDestapadas);

    if(tarjetasDestapadas== 1){
        //mostrar el primer numero
        tarjeta1 = document.getElementById(id);
        primerResultado = numeros[id]
        tarjeta1.innerHTML= primerResultado;

        //desabilitar el primer botton
        tarjeta1.disabled = true;
    }
    else if(tarjetasDestapadas == 2 ){
        //mostrar el sgundo resultado
        tarjeta2 = document.getElementById(id);
        segundoResultado = numeros[id];
        tarjeta2.innerHTML = segundoResultado;

        //desabilitar el segundo resultado

        tarjeta2.disabled = true;

        // incrementar movimientos
        movimientos ++;
        mostrarMovimientos.innerHTML = `Movimientos: ${movimientos}`;

        if(primerResultado == segundoResultado){
            //encerrar contador destapados
            tarjetasDestapadas = 0;

            //aumentar aciertos
            aciertos ++;
            mostrarAciertos.innerHTML = `Aciertos: ${aciertos}`;
            if(aciertos ==8){
                clearInterval(tiempoRegresivoId);
                mostrarAciertos.innerHTML = `Aciertos: ${aciertos} 😱 `;
                mostrartiempo.innerHTML= ` Muy bien solo 🎊 demoraste ⏲ ${timerinicial = timer} segundos`;
                mostrarMovimientos.innerHTML = `Movimiento: ${movimientos} 👍 🤩`
            }

        }else {
            //mostrar momentaniamente  valores y volver a tapar

            setTimeout(()=>{
                tarjeta1.innerHTML =' ';
                tarjeta2.innerHTML =' ';
                tarjeta1.disabled = false;
                tarjeta2.disabled = false;
                tarjetasDestapadas = 0;
            },800);
        }

    }
}