<?php

namespace App\Http\Controllers\controllersHimno;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HimnoOruro extends Controller
{
    //
    public function index()
    {
        return view('himdepartamento.oruro', [
            'title' => ' Himno a Oruro',
            'letra' => 'José Encinas Nieto',
            'musica' => 'César Achaval',

            'estrofas' => [
               ' Cuando irradia el fulgor de la aurora',
                'al morir en la tierra de capuz,',
               ' todo el mundo de pie te saluda',
                'porque nace en tus cumbres la luz.',
                '-',
                'El Sajama es el trono sublime',
                'do se asienta la hermosa deidad,',
               ' la que vino radiante del cielo,',
                'coronada de luz y libertad.',
                '-',
               ' Pagador, el titán de los Andes',
                'ante quien humillóse el león,',
                'como Dios separando tinieblas',
                'con su genio forjó otra creación.',
                '-',
                'Él, también en el mar de la vida',
                'cual Colón otro mundo nos da:',
                'Libertad, que es el mundo bendito',
                'donde vive feliz el mortal.',

                '----- 0 -----',


              
                // Añadir más estrofas según sea necesario
            ],


            'imagePath' => '/path/to/image.jpg',
            'videoPath' => '/path/to/video.mp4',
            'audioPath' => '/path/to/audio.mp3'
        ]);
    }
}
