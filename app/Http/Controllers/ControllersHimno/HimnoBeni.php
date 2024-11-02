<?php

namespace App\Http\Controllers\controllersHimno;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HimnoBeni extends Controller
{
    //
    public function index()
    {
        return view('himdepartamento.beni', [
            'title' => 'Himno a Beni',
            'letra' => 'Alfredo Pereyra Lanza',
            'musica' => 'Rafael Seghers',

            'estrofas' => [
                'Canto victorioso pueblo de leyenda,',
                'tu himno de trabajo, libertad y unión;',
                'y en misterioso rumor de su selva,',
               'con eco vibrante suena tu canción.',
                '-',
                'El verde que flamea en mi bandera,',
                'emblema de esperanza y de grandeza,',
                'es la imagen del Beni, la riqueza',
                'de esta tierra feliz de promisión.',
                '-',
                'Y como el sol que surge en el oriente',
                'e ilumina los llanos y la sierra,',
                'será para Bolivia nuestra tierra,',
                'promesa de ventura, paz y unión.',
                '-',
                'Si la ambición bastarda de un vecino',
                'humillar a mi patria pretendiera',
                'bajo el verde listón de mi bandera',
                'iremos con orgullo a combatir.',
                '-',
                'Y nuestro himno de paz y trabajo,',
                'tornárase en rugido de venganza',
                'y, puesta en la victoria la esperanza,',
                'gritaremos ser libres o morir.',
                
                '----- 0 -----',



              
                // Añadir más estrofas según sea necesario
            ],


            'imagePath' => '/path/to/image.jpg',
            'videoPath' => '/path/to/video.mp4',
            'audioPath' => '/path/to/audio.mp3'
        ]);
    }
}
