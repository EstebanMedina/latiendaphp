<?php

use Illuminate\Support\Facades\Route;

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

//Primera ruta
Route::get('hola' , function(){ 
    echo "hola 2465852";
});

Route::get('arreglo' , function(){
    $estudiantes = [
        "ME" => "Medina",
        "ZA" => "Zapata",
        "AV" => "Avila"
    ];
    echo "<pre>";
    var_dump($estudiantes);
    echo"</pre>";
    echo "<hr />";
    //Agregar un elemento a un arreglo
    $estudiantes["CR"] = "Esteban";
    echo "<pre>";
    var_dump($estudiantes);
    echo"</pre>";
    //Eliminar un elemento del arreglo
    echo "<hr />";
    unset($estudiantes["AV"]);
    echo "<pre>";
    var_dump($estudiantes);
    echo"</pre>";
});

Route::get('paises' , function(){
    $paises = [
         "Colombia" => [
             "capital" => "Bogota",
             "moneda" => "Peso",
             "poblacion" => 51.6,
             "ciudades" => [
                 "cali",
                 "medellin",
                 "barranquilla"
             ]
         ],
         "Peru" => [
             "capital" => "Lima",
             "moneda" => "Sol",
             "poblacion" => 32.9,
             "ciudades" => [
                 "arequipa",
                 "cusco",
                 "lima"
             ]
         ],
         "Paraguay" => [
             "capital" => "Asuncion",
             "moneda" => "Guarani",
             "poblacion" => 7.1,
             "ciudades" => [
                 "luque",
                 "ciudad del este",
                 "asuncion"
             ]
         ],
         "chile" => [
             "capital" => "Santiago",
             "moneda" => "Peso",
             "poblacion" => 19.4,
             "ciudades" => [
                 "santiago",
                 "la florida",
                 "puente alto"
             ]
         ]
    ];

    //mostrar vista de paises
    return view("paises")->with("paises" , $paises);
});