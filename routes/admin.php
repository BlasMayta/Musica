<?php

use App\Http\Controllers\CancionController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EstrofaController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\EvaluacionController;
use App\Http\Controllers\InstrumentoController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\RadioController;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\TeoriaController;
use App\Http\Controllers\TextoController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\controllersGame\GameInicialController;
use App\Http\Controllers\ControllerContenido\ContenidoController;
use App\Http\Controllers\ChatgptController;
// use App\Http\Controllers\Admin\UserController;


use App\Http\Controllers\AudioController;

use App\Http\Controllers\Admin\HomeController;
use App\http\Controllers\PermissionController;
use App\http\Controllers\UserController;
use App\http\Controllers\RolesController;
use App\Http\Controllers\ChatController;


use App\Http\Controllers\FormController;



use Illuminate\Support\Facades\Route;


use App\Http\Controllers\NoteController;

use App\Http\Controllers\EvainstrumentoController;


use App\Http\Controllers\TeoriaQuizController;
use App\Http\Controllers\Teoriap1QuizController;

use App\Http\Controllers\ReconocimientoSonidoController;




// Route::get('/subir-audio', function () {
//     return view('recosonido.upload');
// })->name('mostrar.formulario');

// Route::post('/subir-audio', [ReconocimientoSonidoController::class, 'subirAudio'])->name('subir.audio');


Route::get('/teoriap1-quiz', [Teoriap1QuizController::class, 'menu'])->name('teoriap1.quiz.menu');
Route::get('/teoriap1-quiz/{level}', [Teoriap1QuizController::class, 'form'])->name('teoriap1.quiz.form');
Route::post('/teoriap1-quiz/{level}', [Teoriap1QuizController::class, 'evaluate'])->name('teoriap1.quiz.evaluate');


///------------------------------------------------------------------------
Route::get('/teoria-quiz', [TeoriaQuizController::class, 'index'])->name('teoria.quiz.index');
Route::post('/teoria-quiz', [TeoriaQuizController::class, 'evaluate'])->name('teoria.quiz.evaluate');

/////____________________________________________________________
Route::get('/instru', [EvainstrumentoController::class, 'menu'])->name('instru.menu');
Route::get('/instru/{nivel}', [EvainstrumentoController::class, 'form'])->name('instru.form');
Route::post('/instru/{nivel}', [EvainstrumentoController::class, 'evaluate'])->name('instru.evaluate');

//////________________________________________________
Route::get('/detector', [NoteController::class, 'index'])->name('notes.index');
Route::post('/guardar-nota', [NoteController::class, 'store'])->name('notes.store');
Route::get('/historial', [NoteController::class, 'show'])->name('notes.history');
// use App\Models\Audio;

// Route::get('/test-insert', function () {
//     $audio = Audio::create([
//         'features' => ['mfcc' => [1.23, 4.56, 7.89]]
//     ]);
//     return $audio;
// });

// use Illuminate\Support\Facades\Log;

// Route::get('/test-log', function () {
//     Log::error('Este es un mensaje de prueba para verificar los logs.');
//     return 'Log generado, revisa storage/logs/laravel.log';
// });

/**Route::any('instrumento', function(){
    return request('search');
});**/
/*Route::get('/', function(){
    return view('ejemplo3');
});
*/

// Route::get('/', function(){ return view('dashboard');});
// Route::get('/admin/dashboard', 'App\Http\Controllers\Admin\HomeController@dashboard');

//Route::get('/admin/dashboard', [HomeController::class, 'dashboard']);




// Route::resource('users',UserController::class)->only('index','edit','update')->names('admin.users');
//Route::get('instrumentos/piano', [App\Http\Controllers\InstrumentoController::class,'piano'])->name('instrumentos.piano');
//Route::get('/instrumentos/', [InstrumentoController::class, 'piano']);

// Route::resource('audios', AudioController::class)->names('audio');
// Route::post('/audios', [AudioController::class, 'store'])->name('audio.store');


// Grupo de rutas para el recurso "audios"
//Route::prefix('audio')->group(function () {
    // Si deseas listar los audios almacenados (opcional)
   // Route::get('/', [AudioController::class, 'index'])->name('audio.index');

    // Ruta para guardar un nuevo registro de audio
   // Route::post('/', [AudioController::class, 'store'])->name('audio.store');

    // Si deseas ver un audio en particular (opcional)
    // Route::get('/{audio}', [AudioController::class, 'show'])->name('audio.show');
// });
////////////////////////
 Route::prefix('audio')->group(function () {
     Route::post('/', [AudioController::class, 'store'])->name('audio.store'); // Guardar audio
     Route::get('/', [AudioController::class, 'index'])->name('audio.index');   // Listar audios
 });

Route::resource('instrumentos', InstrumentoController:: class)->names('piano');

Route::resource('docentes', DocenteController:: class)->names('docente');
Route::resource('estudiantes', EstudianteController::class)->names('estudiante');
Route::resource('tutors', TutorController::class)->names('tutor');
Route::resource('materias', MateriaController::class)->names('materia');
Route::resource('temas', TemaController::class)->names('tema');
Route::resource('teorias', TeoriaController::class)->names('teoria');
Route::resource('cancions', CancionController::class)->names('cancion');
Route::resource('estrofas', EstrofaController::class)->names('estrofa');
Route::resource('evaluacions', EvaluacionController::class)->names('evaluacion');
Route::resource('preguntas', PreguntaController::class)->names('pregunta');
/*
Route::resource('radios', RadioController:: class)->names('radio');
Route::resource('checks', CheckController:: class)->names('check');
Route::resource('textos', TextoController:: class)->names('texto');

*/
 // FORMULARIO DE TEST 
Route::get('/formulario', [FormularioController::class, 'index']);
Route::post('/formulario', [FormularioController::class, 'store']);


Route::resource('forms', FormController::class)->names('forms');
Route::post('/forms/{form}/responses', [FormController::class, 'storeResponse'])->name('forms.responses.store');
Route::get('/thankyou', [FormController::class, 'thankYou'])->name('forms.thankyou');

Route::get('/forms/{id}/edit', [FormController::class, 'edit'])->name('forms.edit');
Route::put('/forms/{id}', [FormController::class, 'update'])->name('forms.update');
//--------------------------------------------------------------------------
/*
Route::get('/', [FormController::class, 'index'])->name('forms.index');
Route::get('/forms/create', [FormController::class, 'create'])->name('forms.create');
Route::post('/forms', [FormController::class, 'store'])->name('forms.store');
Route::get('/forms/{form}', [FormController::class, 'show'])->name('forms.show');
Route::post('/forms/{form}/responses', [FormController::class, 'storeResponse'])->name('forms.responses.store');
Route::get('/thankyou', [FormController::class, 'thankYou'])->name('forms.thankyou');
*/
// CONTENIDOS RUTA

//Route::get('/himno', [App\Http\Controllers\controllersHimno\HimnoNacionalController::class, 'index']);
Route::get('/himno',[App\Http\Controllers\controllersHimno\InicioController::class, 'index']);

Route::get('/himno/himnonacional', [App\Http\Controllers\controllersHimno\HimnoNacionalController::class, 'index'])->name('himno.himnonacional');
Route::get('/himno/salveopatria', [App\Http\Controllers\controllersHimno\SalveOpatriaController::class, 'index'])->name('himno.salveopatria');
Route::get('/himno/himnobandera', [App\Http\Controllers\controllersHimno\HimnoBandera::class, 'index'])->name('himno.himnobandera');


Route::get('/himdepartamento',[App\Http\Controllers\controllersHimno\InicioController::class, 'departamento']);


Route::get('/himdepartamento/beni', [App\Http\Controllers\controllersHimno\HimnoBeni::class, 'index'])->name('himdepartamento.beni');

// Route::get('/', [GameController::class, 'index']);


Route:: get('/contenidoinicio',[ContenidoController:: class, 'index'])->name('contenidoinicio.index');

Route:: get('/iniciomusica',[ContenidoController:: class, 'iniciomusica'])->name('contenidoinicio.iniciomusica');

Route::get('/iniciosonoro',[ContenidoController:: class, 'sonoro'])->name('contenidoinicio.iniciosonoro');

//LECCIONES
Route::get ('/principal',[ContenidoController:: class, 'principal'])->name('contenidoinicio.principal');
//PRIMER TRIMESTRE
Route::get ('/ptecvocal',[ContenidoController:: class, 'ptecvocal'])->name('contenidoinicio.ptecvocal');
Route::get ('/pentonacion',[ContenidoController:: class, 'pentonacion'])->name('contenidoinicio.pentonacion');
Route::get ('/pparametro',[ContenidoController:: class, 'pparametro'])->name('contenidoinicio.pparametro');


Route::get ('/pentagrama',[ContenidoController:: class, 'pentagrama'])->name('contenidoinicio.pentagrama');
Route:: get('/lasnotas', [ContenidoController:: class,'nota'])->name('contenidoinicio.lasnotas');
Route::get('/figuras', [ContenidoController:: class, 'figura'])->name('contenidoinicio.figuras');
Route::get('/claves',[ContenidoController::class, 'clave'])->name('contenidoinicio.claves');
Route::get('/puntillos',[ContenidoController::class,'puntillo'])->name('contenidoinicio.puntillos');
Route::get('/laligadura',[ContenidoController::class, 'ligadura'])->name('contenidoinicio.laligadura');
Route::get('/eltrisillo',[ContenidoController::class, 'trisillo'])->name('contenidoinicio.eltrisillo');

// RUTA DE MENU EVALUACION
Route::get ('/menuevalu',[ContenidoController:: class, 'menueva'])->name('contenidoinicio.menuevalu');


// INICIO DE LA MUSICA

Route::get('/naturaleza',[ContenidoController::class, 'naturaleza'])->name('sonoro.naturaleza');
Route::get('/animales',[ContenidoController::class, 'animales'])->name('sonoro.animales');
Route::get('/instrumentos',[ContenidoController::class, 'instrumentos'])->name('sonoro.instrumentos');
// -------------------------------------------------------------------------------------------
// INSTRUMENTOS
// --------------------------------------------------------------------------------
Route::get('/piano',[InstrumentoController::class, 'index'])->name('piano.index');
Route::get('/zampona',[InstrumentoController::class, 'zampona'])->name('piano.zampona');

// -------------------------------------------------------------------------------------------
// DEBATE
// --------------------------------------------------------------------------------

// Rutas protegidas por autenticación
// Route::middleware('auth')->group(function () {
//      Route::prefix('chat')->group(function () {
         Route::get('/chat', [ChatController::class, 'index'])->name('debate.chat');
        Route::post('/enviar-mensaje', [ChatController::class, 'enviarMensaje'])->name('chat.enviar');
         Route::get('/limpiar-chat', [ChatController::class, 'limpiarChat'])->name('chat.limpiar');
//      });
//  });
//----------------------------------------------------------------
// NOTA
// -------------------------------------------------------------------------------------------

// --------------------------------------------------------------------------------

//JUEGOS 
Route::get('/juego',[GameInicialController:: class, 'index'])->name('juego.index');

Route::get('/gameuno',[GameInicialController::class,'gameuno'])->name('juego.gameuno');

Route::get('/juegomental', [GameInicialController:: class, 'mental'])->name('juego.juegomental');

Route::get('/juegomenta1',[GameInicialController:: class, 'mental1'])->name('juego.juegomenta1');

Route::get('/juegocompa',[GameInicialController:: class, 'comparar'])->name('juego.juegocompa');

Route::get('/juegocompara1',[GameInicialController:: class,'compara1'])->name('juego.juegocompara1');



//--------------------------------------------------------

// CHATGPT
Route::get('/chatgpt',[ChatgptController:: class, 'index'])->name('chatgpt.index');

//-------------------------------------------------------------
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'

])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard');

    Route::get('/welcome', function () { return view('welcome'); })->name('welcome');
    // Route::resource('welcome',HomeController::class);

    Route::resource('permissions', PermissionController::class);
    Route::resource('roles', RolesController::class);
    Route::resource('users', UserController::class);

    
});



// Route::group(['middleware' => 'auth'], function () {
   
//     //Auth::routes(['register'=>false,'reset'=>false]);
//     Route::get('/', [HomeController::class, 'index'])->name('dashboard');

//     Route::resource('permissions', PermissionController::class);
//     Route::resource('roles', RolesController::class);
//     Route::resource('users', UserController::class);
//     //Auth::routes(['register'=>false,'reset'=>false]);
//     //Route::resource('users', [UserController::class, 'mostrar']);
    
// });