<?php

namespace App\Http\Controllers\controllersHimno;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HimnoPando extends Controller
{
    //
    public function index()
    {
        return view('himdepartamento.pando', [
            'title' => ' Himno a Pando',
            'letra' => 'Wálter Fernández Calvimontes',
            'musica' => 'Fortunato D. Uribe',

            'estrofas' => [
                'Tierra santa vestida de gloria,',
               'en tus venas hay sangre de sol.',
                'Ahora es tuya por siempre la historia,',
                'aunque doble y redoble el tambor.',
                '-',
                'En tus cinco provincias unidas',
                'suena el yunque de tu corazón.',
                'Jamás ellas podrán ser vencidas',
                'ni humilladas al son del cañón.',
                '-',
                'Tahuamanu...¡Abuná...! Centinelas',
                'afilando el clarín de su voz.',
                'Manuripi, un brochazo de estrellas',
                'sobre el lienzo del Madre de Dios.',
                '-',
                'Todos juntos, la paz levantemos',
                'sin temor de paisajes ni edad.',
                'Y a los cuatro horizonte cantemos',
                'libertad... libertad... libertad...!',
                '-',
                'El jardín de las flores es Pando,',
                'su riqueza es de bosques y cristal,',
                'donde el hombre defiende sangrando',
                'palmo a palmo el honor nacional.',
                '-',
                'Sacrosanto pedazo de suelo',
                'Yo te ofrezco mi amor, porque se',
                'Que los tres atributos de un pueblo',
                'Son: La Fuerza, el Trabajo y la Fe … … !',
                
                '----- 0 -----',


              
                // Añadir más estrofas según sea necesario
            ],


            'imagePath' => '/path/to/image.jpg',
            'videoPath' => '/path/to/video.mp4',
            'audioPath' => '/path/to/audio.mp3'
        ]);
    }

}
