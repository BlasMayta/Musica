<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dictado Rítmico</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.game-container {
    background-color: white;
    border: 2px solid #ccc;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    width: 400px;
}

.instruction-box {
    background-color: #f7d84a;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 20px;
    font-size: 16px;
}

.audio-button {
    margin: 20px 0;
}

.audio-button img {
    width: 50px;
    height: 50px;
}

.note-guess {
    display: flex;
    justify-content: space-around;
    margin-bottom: 20px;
}

.note-mark {
    background-color: #ccc;
    width: 50px;
    height: 50px;
    line-height: 50px;
    font-size: 30px;
    border-radius: 5px;
    color: #888;
}

.note-options {
    display: flex;
    justify-content: space-around;
}

.note-button {
    background-color: #fffbcc;
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 5px;
}

.note-button img {
    width: 50px;
    height: 50px;
}
</style>

</head>
<body>

    <div class="game-container">
        <div class="instruction-box">
            <p>Escucha el ritmo y pulsa en el botón que corresponde.</p>
        </div>
        <div class="audio-button">
            <button id="play-audio">
                <img src="/images/speaker-icon.png" alt="Play Audio">
            </button>
        </div>
        <div class="note-guess">
            <div class="note-mark">?</div>
            <div class="note-mark">?</div>
        </div>
        <div class="note-options">
            <button class="note-button">
                <img src="/images/note1.png" alt="Note 1">
            </button>
            <button class="note-button">
                <img src="/images/note2.png" alt="Note 2">
            </button>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
