<?php

namespace App\Http\Controllers\controllersHimno;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HimnoBandera extends Controller
{
    //
    public function index()
    {
        return view('himno.himnonacional', [
            'title' => 'Himno a la Bandera',
            'letra' => 'Ricardo Mujías',
            'musica' => 'Manuel Benavente',

            'estrofas' => [
               ' Pabellón tricolor que te ostentas',
                'de Bolivia en el cielo radiante,',
                'como el iris de gloria triunfante,',
                'como emblema de paz y de unión.',
                '-',
                'En tus pliegues benditos acoges',
                'los anhelos del pueblo que te ama,',
                'que en las cumbres andinas te aclama',
                'y te rinde homenaje de amor.',
                    '-',
                'Si el clarín de la guerra resuena',
                'y nos llama a la cruenta batalla,',
                'nuestros pechos serán la muralla',
                'que resista con fe y con valor.',
                '-',
                'Las cornetas que dicen tu nombre',
                'desgranando a los vientos sus notas,',
                'vibrarán en las playas remotas',
                'sobre el mar que tus plantas besó.',
                '-',
                'Pabellón tricolor con tus franjas',
                'de laurel, de oro vivo y de fuego;',
                'por ti elevo a los cielos mi ruego,',
                'por ti ofrezco mi vida al Señor.',
                '-',
                'Cuando sueltas tus pliegues al viento',
                'protegiendo heredades y nidos,',
                'tuyos son los vehementes latidos',
                'de tu pueblo que es un corazón.',
                



              
                // Añadir más estrofas según sea necesario
            ],


            'imagePath' => '/path/to/image.jpg',
            'videoPath' => '/path/to/video.mp4',
            'audioPath' => '/path/to/audio.mp3'
        ]);
    }
}
