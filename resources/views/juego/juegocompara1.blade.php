<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="compara1/css/style.css">
  
    <title>Document</title>
</head>
<body>
    <h1>Arrastra donde corresponde</h1>
    <div class="container">
    <img src="compara1/img/blanca.png" alt="" draggable="true" ondragstart="drag(event)" id="blanca">
    <img src="compara1/img/negra.png" alt="" draggable="true" ondragstart="drag(event)" id="negra">
    <img src="compara1/img/redonda.png" alt="" draggable="true" ondragstart="drag(event)" id="redonda">

    </div>
    <div class="container">
        <div class="figura">
            <div class="box" id="0" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
            <h2>Blanca</h2>
        </div>
    </div>

</body>
</html>