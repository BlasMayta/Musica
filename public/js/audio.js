let audioContext, analyser, microphone;

document.getElementById('startMic').addEventListener('click', async () => {
    try {
        const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
        audioContext = new (window.AudioContext || window.webkitAudioContext)();
        microphone = audioContext.createMediaStreamSource(stream);

        analyser = Meyda.createMeydaAnalyzer({
            audioContext: audioContext,
            source: microphone,
            bufferSize: 2048, // ¡Debe ser 1024, 2048, 4096, etc!
            featureExtractors: ["pitch"],
            callback: (features) => {
                if (features.pitch) {
                    const note = frequencyToNote(features.pitch);
                    const cents = calculateCents(note.frequency, features.pitch);
                    updateUI(note.name, cents);
                }
            }
        });

        analyser.start();
    } catch (error) {
        alert('Error al acceder al micrófono: ' + error.message);
    }
});

function frequencyToNote(freq) {
    const A4 = 440;
    const semitones = Math.round(12 * Math.log2(freq / A4)) + 69;
    const notes = ['C', 'C#', 'D', 'D#', 'E', 'F', 'F#', 'G', 'G#', 'A', 'A#', 'B'];
    return {
        name: notes[semitones % 12] + Math.floor(semitones / 12 - 1),
        frequency: A4 * Math.pow(2, (semitones - 69) / 12)
    };
}

function calculateCents(targetFreq, actualFreq) {
    return 1200 * Math.log2(actualFreq / targetFreq);
}

function updateUI(noteName, cents) {
    document.getElementById('note').textContent = noteName;
    document.getElementById('accuracy').textContent = cents.toFixed(2);
    document.getElementById('inputNote').value = noteName;
    document.getElementById('inputAccuracy').value = cents;
}

// Guardar datos
document.getElementById('saveForm').addEventListener('submit', async (e) => {
    e.preventDefault();
    const response = await fetch(window.NOTE_STORE_ROUTE, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({
            note: document.getElementById('inputNote').value,
            accuracy: document.getElementById('inputAccuracy').value
        })
    });

    if (response.ok) {
        alert('Nota guardada correctamente!');
    }
});