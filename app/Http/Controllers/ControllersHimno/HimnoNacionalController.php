<?php

namespace App\Http\Controllers\controllersHimno;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HimnoNacionalController extends Controller
{
    //
    public function index()
    {
        return view('himno.himnonacional', [
            'title' => 'Himno Nacional de Bolivia',
            'letra' => 'José Ignacio de Sanjinés',
            'musica' => 'Benedetto Vincentti Franti',

            'estrofas' => [
                'I',
                'Bolivianos, el hado propicio',
                'coronó nuestros votos y anhelo;',
                'es ya libre, ya libre este suelo,',
                'ya cesó su servil condición.',
                "-",
                
                'Al estruendo marcial que ayer fuera',
                'y al clamor de la guerra horroroso',
                'siguen hoy en contraste armonioso',
                'dulces himnos de paz y de unión.',
                
                'Coro:',
                'De la patria, el alto nombre',
                'en glorioso esplendor conservemos',
               ' y en sus aras de nuevo juremos',
                '¡Morir antes que esclavos vivir!',

                'II',
                'Loor eterno a los bravos guerreros,',
                'cuyo heroico valor y firmeza',
               'conquistaron las glorias que empieza',
                'hoy Bolivia feliz a gozar.',
                "-",
                'Que sus nombres el mármol y el bronce',
                'a remotas edades transmitan',
                'y en sonoros cantares repitan:',
                'Libertad, libertad, libertad.',
                
                'Coro:',
                'De la patria, el alto nombre',
                'en glorioso esplendor conservemos',
               ' y en sus aras de nuevo juremos',
                '¡Morir antes que esclavos vivir!',

                'III',
                'Aquí alzó la justicia su trono,',
                'que la vil opresión desconoce,',
                'y en su timbre glorioso se goce',
                'libertad, libertad, libertad.',
                "-",
                'Esta tierra inocente y hermosa',
                'que ha debido a Bolívar su nombre',
                'es la patria feliz donde el hombre',
                'goza el bien de la dicha y la paz.',
                
                'Coro:',
                'De la patria el alto nombre',
                'en glorioso esplendor conservemos',
               ' y en sus aras de nuevo juremos',
                '¡Morir antes que esclavos vivir!',
                
                'IV',
                'Si extranjero poder algún día',
                'sojuzgar a Bolivia intentare,',
                'al destino fatal se prepare',
                'que amenaza a soberbio invasor.',
                "-",
                'Que los hijos del grande Bolívar',
                'han ya mil y mil veces jurado',
                'morir antes que ver humillado',
                'de la patria el augusto pendón.',
                
                'Coro:',
                'De la patria, el alto nombre',
                'en glorioso esplendor conservemos',
               ' y en sus aras de nuevo juremos',
                '¡Morir antes que esclavos vivir!',

                'Segunda estrofa: ...',
                'Segunda estrofa: ...',
                // Añadir más estrofas según sea necesario
            ],


            'imagePath' => '/path/to/image.jpg',
            'videoPath' => '/path/to/video.mp4',
            'audioPath' => '/path/to/audio.mp3'
        ]);
    }
}
