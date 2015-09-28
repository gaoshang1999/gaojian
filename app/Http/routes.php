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

$app->get('/', function () use ($app) {
    return view('admin.dashboard.home');
});

    

$app->get('/admin/dict',  'Admin\DictController@lists');
$app->get('/admin/dict/add',  'Admin\DictController@add');
$app->post('/admin/dict/add',  'Admin\DictController@add');
$app->get('/admin/dict/edit/{id}',  'Admin\DictController@edit');
$app->post('/admin/dict/edit/{id}',  'Admin\DictController@edit');
$app->post('/admin/dict/delete/{id}',  'Admin\DictController@delete');
$app->get('/admin/dict/search', 'Admin\DictController@search');

$app->get('/admin/constant',  'Admin\ConstantController@lists');
$app->get('/admin/constant/add',  'Admin\ConstantController@add');
$app->post('/admin/constant/add',  'Admin\ConstantController@add');
$app->get('/admin/constant/edit/{id}',  'Admin\ConstantController@edit');
$app->post('/admin/constant/edit/{id}',  'Admin\ConstantController@edit');
$app->post('/admin/constant/delete/{id}',  'Admin\ConstantController@delete');
$app->get('/admin/constant/search', 'Admin\ConstantController@search');

$app->get('/admin/table',  'Admin\TableController@lists');
$app->get('/admin/table/add',  'Admin\TableController@add');
$app->post('/admin/table/add',  'Admin\TableController@add');
$app->get('/admin/table/edit/{id}',  'Admin\TableController@edit');
$app->post('/admin/table/edit/{id}',  'Admin\TableController@edit');
$app->post('/admin/table/delete/{id}',  'Admin\TableController@delete');
$app->get('/admin/table/search', 'Admin\TableController@search');
$app->post('/admin/table/translate/{id}',  'Admin\TableController@translate');


$app->get('/admin/column',  'Admin\ColumnController@lists');
$app->get('/admin/column/add',  'Admin\ColumnController@add');
$app->post('/admin/column/add',  'Admin\ColumnController@add');
$app->get('/admin/column/edit/{id}',  'Admin\ColumnController@edit');
$app->post('/admin/column/edit/{id}',  'Admin\ColumnController@edit');
$app->post('/admin/column/delete/{id}',  'Admin\ColumnController@delete');
$app->get('/admin/column/search', 'Admin\ColumnController@search');


$app->get('/admin/gen/db/{id}',  'Admin\GenController@db');
$app->get('/admin/gen/web/{id}',  'Admin\GenController@web');

$app->get('/admin/talent',  'Admin\TalentController@lists');
$app->get('/admin/talent/add',  'Admin\TalentController@add');
$app->post('/admin/talent/add',  'Admin\TalentController@add');
$app->get('/admin/talent/edit/{id}',  'Admin\TalentController@edit');
$app->post('/admin/talent/edit/{id}',  'Admin\TalentController@edit');
$app->post('/admin/talent/delete/{id}',  'Admin\TalentController@delete');
$app->get('/admin/talent/search', 'Admin\TalentController@search');
$app->post('/admin/talent/upload',  'Admin\TalentController@upload');
$app->get('/admin/talent/batchUpdate', 'Admin\TalentController@batchUpdate');
$app->post('/admin/talent/batchUpdate', 'Admin\TalentController@batchUpdate');