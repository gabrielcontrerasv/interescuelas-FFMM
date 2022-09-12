<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\AwarsController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DisciplinesController;
use App\Http\Controllers\TeamController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('welcome');

});

Auth::routes();

Route::controller(ParticipantController::class)
    ->group(function () {
        Route::get('/participantes',  'index')->name('participants');
        Route::post('/participantes/crear',  'create')->name('participants.create');
        Route::get('/participantes/registro',  'participantsregister')->name('participants.registro');
        Route::get('/participantes/mostrar',   'show')->name('participants.show');
        Route::get('/participantes/editar',   'searchToEdit')->name('components.editar');
        Route::get('/busqueda',  'search')->name('participants.search');
        Route::get('/participantes/editar',  'searchToEdit')->name('participants.searchToEdit');
        Route::patch('/participantes/{participant}',  'update')->name('participants.update');
        Route::post('/importparticipants', 'importExcel')->name('import.excel');
        Route::get('/importeExcel', 'import')->name('excel.imports');
    });

Route::controller(StaffController::class)
    ->group(function () {   
        
        Route::get('/staff', 'index')->name('staff.index');
        Route::post('/staff/create', 'create')->name('staff.create');
        Route::get('/forces/{force_id}/grade', 'grade_show')->name('staff.grade_show');

    });

Route::controller(ScoreController::class)
    ->group(function () {    
        Route::get('/resultados', 'show')->name('resultados');
        Route::get('/resultados_data', 'show_data')->name('resultados.data');
        Route::post('scores', 'store')->name('scores');
        Route::get('/medalleria', 'index')->name('medalleria');
    });




Route::get('roles', [RoleController::class, 'index'])->name('roles');
Route::get('/sports/{sport_id}/gender/{gender_id}/Disciplines', [DisciplinesController::class, 'show'])->name('cagories.show');

Route::controller(TeamController::class)
    ->group(function () {
        
        Route::get('/equipos', 'index')->name('teams');
});


