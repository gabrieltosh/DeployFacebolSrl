<?php
// pagina principal
Route::post('codigo/{ci}','controllerInicio@codigoUsuario')->name('codigoUsuario');
Route::post('registrar/{codigo}','controllerInicio@crearUsuario')->name('crearUsuario');
Route::get('registro/{codigo}','controllerInicio@registroUsuario')->name('registroUsuario');
Route::get('empresa/{slug}','controllerInicio@detalleEmpresa')->name('detalleEmpresa');
Route::get('noticia','controllerInicio@noticia')->name('noticia');
Route::post('preregistro','controllerInicio@preRegistro')->name('preregistro');
Route::get('equipo','controllerInicio@equipo')->name('equipo');
Route::get('empresa','controllerInicio@empresa')->name('empresa');
Route::get('ciudad/{slug}','controllerInicio@ciudad')->name('ciudad');
Route::get('categoria/{slug}','controllerInicio@categoria')->name('categoria');
Route::get('actividad','controllerInicio@actividad')->name('actividad');
Route::get('contacto','controllerInicio@contactanos')->name('contactanos');
Route::get('/','controllerInicio@inicio')->name('inicio');
//envio de emails de la pagina principal
Route::post('suscribir','controllerInicio@suscribir')->name('suscribir');
Route::post('email_post','controllerInicio@emailPost')->name('email_post');

//login
Route::post('log','controllerLogin@log')->name('log');
Route::get('logout','controllerLogin@logout')->name('logout');
Route::post('reset/password/save','controllerInicio@passwordSave')->name('passwordSave');
Route::get('reset/password/{codigo}','controllerInicio@passwordReset')->name('passwordReset');
Route::post('reset','controllerInicio@emailReset')->name('reset');
//panel de galeria
Route::group(['prefix'=>'panel','namespace'=>'Panel'],function(){
    Route::get('galeria/{slug}','controllerGaleria@indexGaleria')->name('galeria');
    //
    Route::get('reset/{codigo}','controllerInicio@passwordReset')->name('passwordReset');
    //panel de planes
    Route::resource('planes','controllerPlanes');
    //panel de preregistro
    Route::resource('preregistro','controllerPreRegistro');
    //panel de categoria
    Route::resource('categorias','controllerCategoria');
    //pandel de equipo
    Route::resource('equipos','controladorEquipo');
    //panel de actividad
    Route::resource('noticias','controllerNoticias');

    Route::resource('actividades','controladorActividades');
    //pandel de ciudad
    Route::resource('ciudades','controladorCiudad');
    //panel de pais
    Route::resource('pais','controladorPais');
    //panel de productos
    Route::resource('productos','controllerProductos');
    //panel de empresas
    Route::resource('empresas','controllerEmpresa');
    //panel de emails subscritos
    Route::resource('email','controllerEmail');
    //panel de usuarios
    Route::resource('administradores','controllerAdmin');

    Route::resource('usuarios/empresa','controllerUsuEmpre');
    //panel de publicaciones o index
    Route::get('publicacion/download/{file}' , 'controllerPublicacion@downloadFile')->name('downloadFile');
    Route::get('publicaciones/active/{publicacion_id}/{usuario_id}','controllerPublicacion@active')->name('active');
    Route::get('publicaciones/like/{id}','controllerPublicacion@like');

    Route::resource('publicaciones','controllerPublicacion');

    Route::resource('usuarios','controllerUsuario');
    //panel administracion de datos de pagina web
    Route::post('institucion/datos/{tag}','controllerInstitucion@updateDatos')->name('updateDatos');
    Route::post('institucion/imagen/{tag}','controllerInstitucion@updateImagen')->name('updateImagen');
    Route::resource('institucion','controllerInstitucion');
    //panel de compras(mostrar empresas ,productos)
    Route::get('shop/empresas/categoria/{slug}','controllerCompras@empresasCategoria')->name('shopEmpresasCategoria');
    Route::get('shop/empresas/ciudad/{slug}','controllerCompras@empresasCiudad')->name('shopEmpresasCiudad');
    Route::get('shop/empresas/{slug}','controllerCompras@productos')->name('shopProductos');
    Route::get('shop/empresas','controllerCompras@empresasAll')->name('shopEmpresas');
    //ppanel de adinistracion
    Route::get('/','controllerPanel@startAdmin')->name('start-a');
});

