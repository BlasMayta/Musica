<?php

namespace App\Http\Controllers\controllersHimno;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalveOpatriaController extends Controller
{
    //
    public function index()
    {
        return view('himno.salveopatria', [
            'title' => 'Salve !ho¡ Patria',
            'letra' => 'José Aguirre Achá',
            'musica' => 'Fray Bernardino Gonzáles',   
            'estrofas' => [
                    '¡Salve, salve! ¡oh! Tierra feraz, bendecida!',
                    '¡Salve, salve! ioh! Patria, fecunda en valor!',
                   ' Nuestro orgullo es deberte la vida. (BIS)',
                    'Nuestro anhelo, morir por tu honor. (BIS)',
                    '-',
                    'Salve, Oh Patria..............Salve',
                    '-',  

                    'Si atesora La Paz tu civismo,',
                    'también Charcas, la culta está en ti;',
                    'Cochabamba probó tu heroísmo;',
                    'tu riqueza sin par, Potosí.',
                    '-',
                    'Pando y Beni tu hermoso futuro;',
                    'y te brinda su edén Santa Cruz;',
                    'el poder de tus brazos Oruro,',
                    'y Tarija, su tipo andaluz.',
                    '-',
                    '¡Salve, salve! ¡oh! Tierra feraz, bendecida!',
                    '¡Salve, salve! ioh! Patria, fecunda en valor!',
                   ' Nuestro orgullo es deberte la vida. (BIS)',
                    'Nuestro anhelo, morir por tu honor. (BIS)',
                    '-',
                    'Salve, Oh Patria..............Salve',
                    '-',  
                    'Tocopilla, Cobija y Calama; ',  
                    'Mejillones en el Litoral',   
                    'nuestra Patria constante reclama ',  
                    'Antofagasta en las playas del mar',
                    '-',
                  
                    'Ni tiranos jamás, ni invasores,',
                    'oscurezcan tu gran porvenir,',
                    'o, al redoble de alegres tambores,',
                    'marcha ¡oh Pueblo! cantando, a morir.',
                    '-',
                    '¡Salve, salve! ¡oh! Tierra feraz, bendecida!',
                    '¡Salve, salve! ioh! Patria, fecunda en valor!',
                   ' Nuestro orgullo es deberte la vida. (BIS)',
                    'Nuestro anhelo, morir por tu honor. (BIS)',
                    '-',
                    'Salve, Oh Patria..............Salve',
                    '-',  



                    '----- 0 -----',

                // Añadir más estrofas según sea necesario
            ],
            'imagePath' => '/path/to/image.jpg',
            'videoPath' => '/path/to/video.mp4',
            'audioPath' => '/path/to/audio.mp3'
        ]);
    }
}
