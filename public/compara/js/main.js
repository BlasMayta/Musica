// const CARDS = 10;

// peticiones del api lo poquemones
// fetch('https://pokeapi.co/api/v2/ability/1/')
// .then(res=>res.json())
// .then(data => console.log(data))

// arreglos para saber cuales divs ya estan ocupados
let arreglo =["", "", "", "", "", "",""];

function allowDrp(ev){
    ev.preventDefault();
}

//que susede cuando se arrastra un elemento
function drag(){

    ev.dataTranfer.setData("text", ev.target.id);
}
function drop(ev){
    if(arreglo[parseInt(ev.target.id)]==""){
        var data = ev.dataTranfer.getData("text");
        arreglo[parseInt(ev.target.id)]=data;
        ev.target.appendChild(document.getElementById(data));

    } 
    if(arreglo[0]!="" && arreglo[1]!=""&& arreglo[2]!="" && arreglo[3]!="" && arreglo[4]!=""&& arreglo[5]!="" && arreglo[6]!="" ){
        if(arreglo[0]!="negra" && arreglo[1]!="blanca"&& arreglo[2]!="redonda" && arreglo[3]!="corchea" && arreglo[4]!="semicorchea"&& arreglo[5]!="fusa" && arreglo[6]!="semifusa" ){
            document.querySelector("h1").innerHTML="MUY BIEN!!";

        }else{
            document.querySelector("h1").innerHTML="INTENTA NUEVAMENTE!!";
        }
    }
}