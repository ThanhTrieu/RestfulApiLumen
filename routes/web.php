<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    //return $router->app->version();
    return "Hello word";
});

// truy cap route bang method post
$router->post('/demo-method-post', function() use ($router) {
	// tra ve kieu du lieu - kieu text
	return "Thid is method post";
});

// truy cap route bang method put
$router->put('/demo-method-put', function() use ($router) {
	// tra ve kieu du lieu json
	return response()->json(['name'=>'abc', 'age' => 20]);
});

// tham so truyen vao router
$router->get('/sam-sung[/{name}]', function($nameProduct = null) use ($router) {
	// tham so khong bat buoc
	return "this is sam sung - " . $nameProduct;
});

// kiem tra tinh hop le cho tham so
$router->get('/iphone/{id:[0-9]+}', function($id) use($router) {
	return "Id of iphone - " . $id;
});

// router group
$router->group([
	'prefix' => 'admin',
	'namespace' => 'Admin'
], function() use($router) {
	// su dung controller cho router
	$router->get('/product','ProductController@index');
	$router->get('/view','ProductController@view');
});




