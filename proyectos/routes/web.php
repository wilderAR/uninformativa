<?php

    Auth::routes();
    Route::get('/', function () {
        return view('auth.login');
    });

    Route::get('administrador',function(){return view('administradores.inicio_administrador');})->name('administrador');
    Route::get('instituciones',function(){return view('instituciones.inicio_institucion');})->name('instituciones');
    Route::resource('institucion','institucionesController');
    Route::get('welcome',function(){return view('base');});
    Route::get('editar',function(){
        return view('instituciones.modificar_ofertas_institucion');
    });
    Route::post('institucion/{id}','institucionesController@disable')->name('institucion.estado');;
    //USUARIOS
    Route::get('usuario','anunciosController@list')->name('usuario');
    Route::resource('usuarios','UsuariosController');
    Route::post('usuarios/{id}','UsuariosController@disable')->name('usuario.estado');
    Route::resource('oferta','OfertasController');
    Route::post('ofertas/{id}','OfertasController@disable')->name('oferta.estado');
    Route::resource('categoria','CategoriasController');
    Route::post('categoria/{id}','CategoriasController@disable')->name('categoria.estado');
    Route::resource('anuncio','AnunciosController');
    Route::post('anuncios/{id}','AnunciosController@disable')->name('anuncio.estado');
    Route::resource('examen','ExamenesController');
    Route::post('examen/{id}','ExamenesController@disable')->name('examen.estado');
    // usuario
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/buscar','OfertasController@listar');
