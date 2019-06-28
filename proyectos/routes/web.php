<?php

    Auth::routes();
    Route::get('/', function () {return view('auth.login');});

    Route::get('administrador',function(){return view('administradores.inicio_administrador');})->name('administrador');
    Route::get('instituciones',function(){return view('instituciones.inicio_institucion');})->name('instituciones');
    Route::resource('institucion','institucionesController');
    Route::post('institucion/{id}','institucionesController@disable')->name('institucion.estado');;
    //USUARIOS
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
    Route::get('usuario','OfertasController@listar');
    Route::get('administradores','UsuariosController@listarUsu');
    Route::post('CrearAdmin','UsuariosController@stores');
    Route::get('oferta/{idoferta}/mostrar','OfertasController@mostraroferta')->name('oferta.mostrar');
    Route::get('buscar/instituciones','institucionesController@list')->name('instituciones.listar');
    Route::get('buscar/instituciones/{idinstitucion}','OfertasController@mostrarDatosIntitucion');
    Route::post('datos','institucionesController@Datos');
