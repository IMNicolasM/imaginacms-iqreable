<?php

use Illuminate\Routing\Router;

/** @var Router $router */
$router->group(['prefix' => '/qrs'], function (Router $router) {

  $router->get("public/redirect/{qrId}", [
    'as' => 'qr.public.redirect',
    'uses' => 'QrController@redirectToContentQR',
  ]);
});

