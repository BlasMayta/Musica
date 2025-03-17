<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zampoña Virtual con Arka e Ira</title>
    <link rel="stylesheet" href="styles.css">
    <style>
            body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f0f0f0;
    font-family: Arial, sans-serif;
}

.zampoña {
    display: flex;
    align-items: flex-end;
    height: 500px;
    background-color: #5C4033; /* Color de madera */
    padding: 20px;
    border-radius: 20px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
}

.seccion {
    display: flex;
    align-items: flex-end;
}

.arka {
    margin-right: 20px; /* Separación entre Arka e Ira */
}

.tubo {
    width: 50px;
    height: 50px;
    margin: 0 5px;
    background-color: #8B4513; /* Color de caña */
    border: 2px solid #5C4033; /* Borde para simular la unión de las cañas */
    border-radius: 50%; /* Forma circular */
    cursor: pointer;
    transition: transform 0.2s, background-color 0.3s;
    box-shadow: inset 0 -10px 10px rgba(0, 0, 0, 0.2);
}

.tubo:hover {
    background-color: #A0522D; /* Color más claro al pasar el ratón */
    transform: scale(1.1);
}

/* Ajustamos la altura de cada tubo para simular una Zampoña */
.tubo[data-note="G4"] { height: 50px; }
.tubo[data-note="A4"] { height: 60px; }
.tubo[data-note="B4"] { height: 70px; }
.tubo[data-note="C5"] { height: 80px; }
.tubo[data-note="D5"] { height: 90px; }
.tubo[data-note="E5"] { height: 100px; }
.tubo[data-note="F5"] { height: 110px; }
.tubo[data-note="G5"] { height: 120px; }
.tubo[data-note="A5"] { height: 130px; }
.tubo[data-note="B5"] { height: 140px; }
.tubo[data-note="C6"] { height: 150px; }
.tubo[data-note="D6"] { height: 160px; }
.tubo[data-note="E6"] { height: 170px; }
    </style>
</head>
<body>
    <div class="zampoña">
        <!-- Sección Arka (más tubos) -->
        <div class="seccion arka">
            <div class="tubo" data-note="G4"></div>
            <div class="tubo" data-note="A4"></div>
            <div class="tubo" data-note="B4"></div>
            <div class="tubo" data-note="C5"></div>
            <div class="tubo" data-note="D5"></div>
            <div class="tubo" data-note="E5"></div>
            <div class="tubo" data-note="F5"></div>
        </div>

        <!-- Sección Ira (menos tubos) -->
        <div class="seccion ira">
            <div class="tubo" data-note="G5"></div>
            <div class="tubo" data-note="A5"></div>
            <div class="tubo" data-note="B5"></div>
            <div class="tubo" data-note="C6"></div>
            <div class="tubo" data-note="D6"></div>
            <div class="tubo" data-note="E6"></div>
        </div>
    </div>
    <script>
            document.addEventListener('DOMContentLoaded', function() {
    const tubos = document.querySelectorAll('.tubo');

    tubos.forEach(tubo => {
        tubo.addEventListener('click', function() {
            const note = this.getAttribute('data-note');
            playNote(note);
        });
    });

    function playNote(note) {
        const audioContext = new (window.AudioContext || window.webkitAudioContext)();
        const oscillator = audioContext.createOscillator();

        oscillator.type = 'sine'; // Tipo de onda (sine, square, sawtooth, triangle)
        oscillator.frequency.setValueAtTime(getFrequency(note), audioContext.currentTime); // Frecuencia de la nota
        oscillator.connect(audioContext.destination);
        oscillator.start();
        oscillator.stop(audioContext.currentTime + 0.5); // Duración de la nota
    }

    function getFrequency(note) {
        const frequencies = {
            'G4': 392.00,
            'A4': 440.00,
            'B4': 493.88,
            'C5': 523.25,
            'D5': 587.33,
            'E5': 659.25,
            'F5': 698.46,
            'G5': 783.99,
            'A5': 880.00,
            'B5': 987.77,
            'C6': 1046.50,
            'D6': 1174.66,
            'E6': 1318.51
        };
        return frequencies[note];
    }
});
    </script>

    <script src="script.js"></script>
</body>
</html>