import Meyda from 'meyda';

document.addEventListener('DOMContentLoaded', () => {
  // Buscamos el contenedor donde insertar el botón y resultados
  const container = document.getElementById('audioContainer') || document.body;

  // Creamos el botón para iniciar la detección
  const startButton = document.createElement('button');
  startButton.textContent = "Iniciar Detección de Audio";
  startButton.style.padding = "10px";
  startButton.style.fontSize = "16px";
  startButton.style.marginBottom = "10px";
  container.appendChild(startButton);

  // Contenedor para mostrar resultados en pantalla
  const resultDiv = document.createElement('div');
  resultDiv.id = 'resultados';
  resultDiv.style.marginTop = '20px';
  container.appendChild(resultDiv);

  // Variables para throttling: envía solo una petición cada 1 segundo
  let lastSent = 0;
  const throttleInterval = 1000; // 1000 ms = 1 segundo

  startButton.addEventListener('click', () => {
    const AudioContext = window.AudioContext || window.webkitAudioContext;
    const audioContext = new AudioContext();

    if (audioContext.state === 'suspended') {
      audioContext.resume();
    }

    navigator.mediaDevices.getUserMedia({ audio: true })
      .then(stream => {
        const source = audioContext.createMediaStreamSource(stream);

        const analyzer = Meyda.createMeydaAnalyzer({
          audioContext: audioContext,
          source: source,
          bufferSize: 512,
          featureExtractors: ['mfcc'],
          callback: features => {
            console.log('Características detectadas:', features);
            resultDiv.textContent = JSON.stringify(features, null, 2);

            const now = Date.now();
            if (now - lastSent > throttleInterval && features && features.mfcc) {
              lastSent = now;
              // Usa la URL absoluta para apuntar al backend
              fetch('audio.store', {
                method: 'POST',
                headers: {
                  'Content-Type': 'application/json',
                  'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                  features: features
                })
              })
              .then(response => response.json())
              .then(data => {
                console.log('Registro guardado:', data);
              })
              .catch(error => {
                console.error('Error al guardar el registro:', error);
              });
            } else {
              console.warn('Throttle activo o no se detectaron datos válidos.');
            }
          }
        });

        analyzer.start();
      })
      .catch(err => {
        console.error("Error al acceder al micrófono:", err);
      });
  });
});
