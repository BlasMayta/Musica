<?php

namespace App\Http\Controllers\controllersHimno;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HimnoChuquisaca extends Controller
{
    //
    public function index()
    {
        return view('himdepartamento.chuquisaca', [
            'title' => ' Himno a Chuquisaca',
            'letra' => 'Ricardo Mujía',
            'musica' => ' Eduardo Berdecio',

            'estrofas' => [
                'Veinticinco de mayo en oriente',
                'del sol brilla en el carro triunfal.',
                'Deja ¡oh! Charcas que irradie en tu frente',
                'de la gloria el laurel inmortal.',
                '-',
                'Libertad, libertad es el grito',
                'que se escucha doquier resonar',
                'de las grietas andinas al llano',
                'y del llano a las ondas del mar.',
                '-',
                'A la luz sonrosada de oriente',
                'que acaricia tu sien virginal',
               ' alza ¡oh Charcas! dichosa la frente',
              '  y recuerda tu gloria inmortal.',
                '-',
                'El pampero le lleva en sus alas',
                'hasta el antro en que ruge el jaguar',
                'y en las rocas los nidos de cóndores',
                'se estremecen al oírle vibrar.',
                '-',
                'Libertad, libertad y descienden',
                'las legiones al campo a luchar,',
                'y sucumben los héroes clamando:',
                '"Nuestra vida por ti, libertad".',
                '-',
                'Vencedoras las huestes altivas',
               ' forman pueblos, familia y hogar',
                'y en el cielo dibujase el iris,',
                'que cobija su dulce heredad.',

                '-----0-----',


              
                // Añadir más estrofas según sea necesario
            ],


            'imagePath' => '/path/to/image.jpg',
            'videoPath' => '/path/to/video.mp4',
            'audioPath' => '/path/to/audio.mp3'
        ]);
    }
}
