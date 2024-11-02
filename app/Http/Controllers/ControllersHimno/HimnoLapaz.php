<?php

namespace App\Http\Controllers\controllersHimno;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HimnoLapaz extends Controller
{
    //
    public function index()
    {
        return view('himdepartamento.lapaz', [
            'title' => 'Himno a La Paz',
            'letra' => 'José Ricardo Bustamante',
            'musica' => 'Eloy Salmón Ampuero',

            'estrofas' => [
                'La Paz que en este día',
                'de julio se engalana,',
                'con timbres de que ufana',
               ' recuerda a su esplendor.',
                '-',
                'Patriótica armonía',
                'de pueblos cuya historia,',
                'ligada está en la gloria',
                'de su ínclito valor.',
                
                'Coro:',
                'Saludando de julio el gran día',
                'que es el pueblo paceño blasón.',
                'Celebremos con grata armonía',
               ' de valientes y libres la unión.',
                '-',
                'Los timbres de su fama,',
                'la América en un templo',
                'conserva como ejemplo',
                'de honor y de virtud.',
                '-',
                'Y al fuego que la inflama,',
                'su suelo viendo hollado,',
                'se inspira en el pasado',
                'su heroica juventud',
                
                'Coro:',
                'Saludando de julio... etc.',
                'Titánicos guerreros',
                'del cielo como gracia la invicta democracia',
               ' nos dieron por pendón.',
                '-',
                'Si alguno hollar sus fueros',
                'intenta en lo futuro,',
                'será de bronce un muro',
                'de América la unión.',
                '-',
                'Coro:',
                'Saludando de julio... etc.',
                '-',
               ' De América al destino',
                'bendiga siempre el cielo',
                'que aquí en su noble suelo',
                'nació la libertad.',
                '-',
                'Y admire quien hoy sueña',
               ' tenernos por esclavos,',
                'de libres y de bravos',
                'la historia ya inmortal.',
                
                'Coro:',
                'Saludando de julio... etc.',
                '-',
                'De unión la santa enseña',
                'de hoy, más el continente',
                'coloque allá en la frente',
                'del Andes colosal.',
                '-',
                'Su cetro diamantino',
               ' radiante en nuestras zonas',
                'deslumbre a las coronas',
                'que aún odian la igualdad.',
                
               ' Coro:',
               ' Saludando de julio... etc.',

                '-----0-----',


              
                // Añadir más estrofas según sea necesario
            ],


            'imagePath' => '/path/to/image.jpg',
            'videoPath' => '/path/to/video.mp4',
            'audioPath' => '/path/to/audio.mp3'
        ]);
    }
}
