<?php



Route::get('/', function () {
    return view('agregar');
});

Route::get('notas', function () {
    $notas = [
        'Primer Nota',
        'Segunda Nota',
        'Tercera Nota',
        'Cuarta Nota',
    ]
    return view('notas', ['notas' => $notas]);
});

Route::get('agregar', function () {
    return view('agregar');
});

Route::get('editar', function () {
    return view('editar');
});
