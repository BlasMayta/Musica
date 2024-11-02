<?php

namespace App\Http\Controllers\controllersHimno;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HimnoTarija extends Controller
{
    //
    public function index()
    {
        return view('himdepartamento.tarija', [
            'title' => 'Himno a Tarija',
            'letra' => 'Tomás O"Connor D"Arlach',
            'musica' => 'Juan Fiori',

            'estrofas' => [
                'Tarijeños, la fama pregona',
                'nuestra gloría y heroico valor;',
                'bravos hijos de Méndez nos llaman',
                'de la patria, el orgullo y honor.',
                '-',
                'De los héroes del quince de abril',
               ' tremolemos el bello pendón',
                'y llevamos la noble divisa:',
                'patria, ley, libertad, religión.',
                '-',
                'Ni tiranos ni déspotas nunca',
                'nuestro orgullo podrán abatir;',
                'somos libres y a ser iay! esclavos,',
                'preferimos mil veces morir.',
                '-',
                'Somos libres, cual libre es el cóndor',
                'que el espacio recorre veloz;',
                'tarijeños, más rey no tenemos',
                'en la tierra y el cielo que Dios.',
                '-',
                'Sólo amamos la industria, el trabajo',
               ' dulces bienes que brinda la paz;',
               ' con amor para todos, con odio',
                'para nadie en el pedio jamás.',
                '-',
                'De Tarija, la estrella algún día',
               ' brillará con más vivo fulgor;',
                'entre tanto a la patria cantemos',
                'dulces himnos de paz y de amor.',
                '-',
                'La alba, sien de Tarija se ostenta,',
                'coronada de verde laurel,',
               ' y el escudo que España le diera',
               ' con su lema: "Muy leal y muy fiel".',

                '----- 0 -----',



              
                // Añadir más estrofas según sea necesario
            ],


            'imagePath' => '/path/to/image.jpg',
            'videoPath' => '/path/to/video.mp4',
            'audioPath' => '/path/to/audio.mp3'
        ]);
    }
}
