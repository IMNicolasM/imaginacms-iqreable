<?php

use Illuminate\Routing\Router;

Route::prefix('/iqreable/v1')->group(function (Router $router) {
    $router->apiCrud([
      'module' => 'iqreable',
      'prefix' => 'qrs',
      'controller' => 'QrApiController',
      //'middleware' => ['create' => [], 'index' => [], 'show' => [], 'update' => [], 'delete' => [], 'restore' => []],
      // 'customRoutes' => [ // Include custom routes if needed
      //  [
      //    'method' => 'post', // get,post,put....
      //    'path' => '/some-path', // Route Path
      //    'uses' => 'ControllerMethodName', //Name of the controller method to use
      //    'middleware' => [] // if not set up middleware, auth:api will be the default
      //  ]
      // ]
    ]);
// append

});
