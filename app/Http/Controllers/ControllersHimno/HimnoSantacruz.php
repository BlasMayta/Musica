<?php

namespace App\Http\Controllers\controllersHimno;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HimnoSantacruz extends Controller
{
    //
    public function index()
    {
        return view('himdepartamento.santacruz', [
            'title' => 'Himno a Santa Cruz',
            'letra' => 'Felipe Leonor Ribera',
            'musica' => 'Gastón Guillaux Humery',

            'estrofas' => [
                'La España grandiosa',
                'con hado benigno',
                'aquí plantó el signo',
                'de la redención.',
                '-',
                'Y surgió en su sombra',
                'un pueblo eminente',
                'de límpida frente',
                'de leal corazón.',
                '-',
                'Bajo el cielo más puro de América',
                'y en la tierra de Ñuflo de Chávez,',
                'libertad van trinando las aves',
                'de su veste ostentando el primor.',
                '-',
                'De las flores del mundo galano',
                'su ambrosía perfumada ofreciendo',
                'libertad, libertad van diciendo',
                'en efluvios de paz y de amor.',
                '-',
                'De entusiasmo y de fe rebosante',
                'venga el hombre y repita ese coro',
                'que en la tierra del árbol del oro',
                'siempre libre y feliz ha de ser.',
                '-',
                'Que natura, con pródiga mano',
                'derramó en nuestro suelo sus dones,',
               ' su grandeza, sus bellos florones',
                'sus mil fuentes de gloria y poder.',
                '-',
                'Siempre libres, cruceños, seamos',
                'cual lo son nuestras aves y flores',
               ' y sepamos vencer los rigores',
                'del que intente a la patria oprimir.',
                '-',
                'Nuestros nombres en tal hora son sangre',
                'en la historia dejemos escrito,',
                'repitiendo de Warnes el grito:',
                '"A vencer o con gloria morir".',
                
                '----- 0 -----',



              
                // Añadir más estrofas según sea necesario
            ],


            'imagePath' => '/path/to/image.jpg',
            'videoPath' => '/path/to/video.mp4',
            'audioPath' => '/path/to/audio.mp3'
        ]);
    }
}
