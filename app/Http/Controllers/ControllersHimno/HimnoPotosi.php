<?php

namespace App\Http\Controllers\controllersHimno;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HimnoPotosi extends Controller
{
    //
    public function index()
    {
        return view('himdepartamento.potosi', [
            'title' => 'Himno a Potosí',
            'letra' => 'Daniel Campos',
            'musica' => 'Manuel Romero',

            'estrofas' => [
                'Hogar seas bendito',
                'de paz y libertad,',
                'asilo del proscrito',
                'que lucha en la verdad.',
                '-',
                'De Bolivia en el suelo fecundo',
                'el pendón del hogar se alza aquí,',
                'contemplad que ondea ante el mundo',
                'en la cima del gran Potosí.',
                '-',
                'En la misma montaña en que hiciera,',
                'escalando con paso triunfal,',
                'tremolar nuestra patria bandera,',
                'de Bolívar el brazo inmortal.',
                '-',
               ' Cuando un tiempo la América bella',
                'sus cadenas forjó la maldad,',
                'de ti ¡oh pueblo! brotó la centella',
                'que primero escribió: Libertad.',
                '-',
                'Fue un Ibáñez el mártir y el bravo',
                'que, retando el poder español,',
                'las tinieblas rasgó del esclavo',
                'como rasga las nubes el sol.',
                '-',
                'Ahora ¡oh pueblo! que es tuyo el destino',
                'de luz del alba fulgura en tu sien,',
                'adelante, adelante... al camino',
                'digno atleta a luchar por el bien.',
                '-',
               ' Que aquí tengan la ley y el derecho',
                'el trabajo y virtud, noble altar,',
                'cuyo augusto dintel sepa el pecho',
                'como muro de bronce guardar.',
                
                '----- 0 -----',


              
                // Añadir más estrofas según sea necesario
            ],


            'imagePath' => '/path/to/image.jpg',
            'videoPath' => '/path/to/video.mp4',
            'audioPath' => '/path/to/audio.mp3'
        ]);
    }

}
