<?php

use Illuminate\Routing\Router;

/** @var Router $router */
Route::prefix('/qrs')->group(function (Router $router) {

  $router->get("public/redirect/{qrId}", [
    'as' => 'qr.public.redirect',
    'uses' => 'PublicController@redirectToContentQR',
  ]);
});

