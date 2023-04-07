<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/**Ruta de la pagina principal */
Route::get('/', function () {
    /*return view('welcome');*/
    return "Bienvenido a la Pagina Principal";
});

/**ruta de la pagina de Cursos */
route::get('cursos', function(){
    return "Bienvenido a la pagina de Cursos";

});
route::get('cursos/create', function(){
    return "En esta página  podrás crear un curso";
});

/**rutas con variables */
Route::get('cursos/{curso}', function($curso){
    return "Binvenido al curso: $curso";

});

Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria= null){
    
    if ($categoria){
        return "Binvenido al curso $curso de la categoria $categoria";

    }else{
         return "Binvenido al curso: $curso";
    }
});


