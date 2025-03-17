<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./compara/css/styles.css">
    <title>Juego de Comparacion</title>
</head>
<body>
    <Main class="main-container">
        <h1>Adivina las Figuras musicales!</h1>
        <div class="figura-musicales">
            <div class="musica">
                <img class="image" src="./compara/img/negra.png" alt="" draggable="true" ondragstart="drag(event)" id="negra">

            </div>
            <div class="musica">
                <img class="image" src="./compara/img/blanca.png" alt="" draggable="true" ondragstart="drag(event)" id="blanca">

            </div>
            <div class="musica">
                <img class="image" src="./compara/img/redonda.png" alt="" draggable="true" ondragstart="drag(event)" id="redonda">

            </div>
            <div class="musica">
                <img class="image" src="./compara/img/corchea.png" alt="" draggable="true" ondragstart="drag(event)" id="corchea">

            </div>
            <div class="musica">
                <img class="image" src="./compara/img/semicorchea.png" alt="" draggable="true" ondragstart="drag(event)" id="semicorchea">

            </div>
            <div class="musica">
                <img class="image" src="./compara/img/fusa.png" alt="" draggable="true" ondragstart="drag(event)" id="fusa">

            </div>
            <div class="musica">
                <img class="image" src="./compara/img/semifusa.png" alt="" draggable="true" ondragstart="drag(event)" id="semifusa">

            </div>
            
            

        </div>
        <h2>Arraztra y Suelta</h2>
        <div class="Container">

       
        <!-- <div class="figuras2-musicales"> -->
            <div class="figura">
            <div class="names" id="0" ondrop="drop(event)" ondragover="allowDrop(event)">
            <h2>Negra </h2>
                
            </div>
            </div>
          
            <div class="figura">
            <div class="names" id="1" ondrop="drop(event)" ondragover="allowDrop(event)">
            <h2>Blanca</h2>
                
            </div>
            </div>
            <div class="figura">
            <div class="names" id="2" ondrop="drop(event)" ondragover="allowDrop(event)">
            <h2>Redonda</h2>
                
            </div>
            </div>
            <div class="figura">
            <div class="names" id="3" ondrop="drop(event)" ondragover="allowDrop(event)">
            <h2>Corchea</h2>
              
            </div>
            </div>
            
            <div class="figura">
            <div class="names" id="4" ondrop="drop(event)" ondragover="allowDrop(event)">
            <h2>Semicorchea</h2>
                
            </div>
            </div>
            <div class="figura">
            <div class="names" id="5" ondrop="drop(event)" ondragover="allowDrop(event)">
            <h2>Fusa</h2>
              
            </div>
            </div>
            <div class="figura">
            <div class="names" id="6" ondrop="drop(event)" ondragover="allowDrop(event)">
            <h2>Semifusa</h2>
                
            </div>
            </div>

            </div>

        </div>

    </Main>
    <script src="./compara/js/main.js"></script>
</body>
</html>