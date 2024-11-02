<?php

namespace App\Http\Controllers\controllersHimno;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HimnoCochabamba extends Controller
{
    //
    public function index()
    {
        return view('himdepartamento.cochabamba', [
            'title' => ' Himno a Cochabamba',
            'letra' => 'Benjamín Blanco Unzueta',
            'musica' => 'Teófilo Vargas Candia',

            'estrofas' => [
                'Brilla el sol de septiembre radiante,',
                'reflejando la gloria inmortal',
                'del gran pueblo que firme y constante',
                'fue el primero en la lucha marcial.',
                '-',
                'Libertad de Tunari en la cumbre,',
                'ya su solio por siempre fijó;',
                'la cadena de vil servidumbre',
                'Cochabamba esforzada rompió.',
                '-',
                'De sus hijos el noble ardimiento',
                'su altivez y denuedo sin par,',
                'despertaron el bélico aliento',
                'de cien pueblos que van a luchar.',
                
                'Coro:',
                'Brilla el sol... etcétera.',
                'Suena entonces el grito de gloria',
                'y se enciende la guerra por fin,',
                'Su jornada de eterna memoria',
                'son Aroma, Ayacucho y Junín.',
                '-',
                'Sus proezas la fama pregona',
                'de una en otra apartada región,',
                'y sus timbres preclaros blasona,',
               ' ley, deber, patriotismo y unión.',
                
                'Coro:',
                'Brilla el sol... etcétera.',
                'Nuestros padres tenaces lucharon',
                'anhelando un grandioso ideal;',
                'Y una patria feliz nos legaron,',
                'con el nombre de un héroe inmortal.',
                '-',
                'Y ese nombre que el mundo venera,',
                'que es emblema de patria y honor,',
                'resplandece en su hermosa bandera,',
               ' entre rayo de luz y esplendor.',
                
                'Coro:',
                'Brilla el sol... etcétera.',
                'Cochabamba la enseña bendita',
                'ya flamea, magnánima y fiel;',
                'el valor en su pecho palpita',
                'y en su frente se ostenta el laurel.',
                '-',
                'Que el gran pueblo que habita',
                'esta tierra, siempre amena florida y',
                'feraz, es tremenda y terrible en la',
                'guerra, justiciero y clemente en la paz.',

              
                // Añadir más estrofas según sea necesario
            ],


            'imagePath' => '/path/to/image.jpg',
            'videoPath' => '/path/to/video.mp4',
            'audioPath' => '/path/to/audio.mp3'
        ]);
    }
}
