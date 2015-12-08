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
$app->get('/', 'Auth\AuthController@getLogin');

// Authentication routes...
$app->get('auth/login', 'Auth\AuthController@getLogin');
$app->post('auth/login', 'Auth\AuthController@postLogin');
$app->get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
$app->get('auth/register', 'Auth\AuthController@getRegister');
$app->post('auth/register', 'Auth\AuthController@postRegister');


// $app->get('/', function () use ($app) {
//     return view('admin.dashboard.home');
// });


// 管理员后台
$app->group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => ['auth.login', 'auth.admin']], function($app){
    $app->get('/',  function () use ($app) {
        return view('admin.dashboard.home');
    });

    $app->get('dict',  'DictController@lists');
    $app->get('dict/add',  'DictController@add');
    $app->post('dict/add',  'DictController@add');
    $app->get('dict/edit/{id}',  'DictController@edit');
    $app->post('dict/edit/{id}',  'DictController@edit');
    $app->post('dict/delete/{id}',  'DictController@delete');
    $app->get('dict/search', 'DictController@search');
    
    $app->get('constant',  'ConstantController@lists');
    $app->get('constant/add',  'ConstantController@add');
    $app->post('constant/add',  'ConstantController@add');
    $app->get('constant/edit/{id}',  'ConstantController@edit');
    $app->post('constant/edit/{id}',  'ConstantController@edit');
    $app->post('constant/delete/{id}',  'ConstantController@delete');
    $app->get('constant/search', 'ConstantController@search');
    
    $app->get('table',  'TableController@lists');
    $app->get('table/add',  'TableController@add');
    $app->post('table/add',  'TableController@add');
    $app->get('table/edit/{id}',  'TableController@edit');
    $app->post('table/edit/{id}',  'TableController@edit');
    $app->post('table/delete/{id}',  'TableController@delete');
    $app->get('table/search', 'TableController@search');
    $app->post('table/translate/{id}',  'TableController@translate');
    
    
    $app->get('column',  'ColumnController@lists');
    $app->get('column/add',  'ColumnController@add');
    $app->post('column/add',  'ColumnController@add');
    $app->get('column/edit/{id}',  'ColumnController@edit');
    $app->post('column/edit/{id}',  'ColumnController@edit');
    $app->post('column/delete/{id}',  'ColumnController@delete');
    $app->get('column/search', 'ColumnController@search');
    $app->post('column/translate/{id}',  'ColumnController@translate');
    
    $app->get('gen/db/{id}',  'GenController@db');
    $app->get('gen/web/{id}',  'GenController@web');
    $app->get('gen/{method}/{id}',  'GenController@gen');
    // $app->get('gen/controller/{id}',  'GenController@controller');
    // $app->get('gen/model/{id}',  'GenController@model');
    
    $app->get('talent',  'TalentController@lists');
    $app->get('talent/add',  'TalentController@add');
    $app->post('talent/add',  'TalentController@add');
    $app->get('talent/edit/{id}',  'TalentController@edit');
    $app->post('talent/edit/{id}',  'TalentController@edit');
    $app->post('talent/delete/{id}',  'TalentController@delete');
    $app->get('talent/search', 'TalentController@search');
    $app->post('talent/upload',  'TalentController@upload');
    $app->post('talent/batchUpdate', 'TalentController@batchUpdate');
    $app->post('talent/batchDelete', 'TalentController@batchDelete');
    $app->post('talent/parse', 'TalentController@parse');
    $app->post('talent/recommend', 'TalentController@recommend');
    $app->get('talent/testApi', 'TalentController@testApi');
    $app->post('talent/testApi', 'TalentController@testApi');
    $app->get('talent/test', 'TalentController@test');
        
    $app->get('demand',  'DemandController@lists');
    $app->get('demand/add',  'DemandController@add');
    $app->post('demand/add',  'DemandController@add');
    $app->get('demand/edit/{id}',  'DemandController@edit');
    $app->post('demand/edit/{id}',  'DemandController@edit');
    $app->post('demand/delete/{id}',  'DemandController@delete');
    $app->get('demand/search', 'DemandController@search');
    
    $app->get('recommend',  'RecommendController@lists');
    $app->get('recommend/add',  'RecommendController@add');
    $app->post('recommend/add',  'RecommendController@add');
    $app->get('recommend/edit/{id}',  'RecommendController@edit');
    $app->post('recommend/edit/{id}',  'RecommendController@edit');
    $app->post('recommend/delete/{id}',  'RecommendController@delete');
    $app->get('recommend/search', 'RecommendController@search');
    
    $app->get('user',  'UserController@lists');
    $app->get('user/add',  'UserController@add');
    $app->post('user/add',  'UserController@add');
    $app->get('user/edit/{id}',  'UserController@edit');
    $app->post('user/edit/{id}',  'UserController@edit');
    $app->post('user/delete/{id}',  'UserController@delete');
    $app->get('user/search', 'UserController@search');


    $app->get('job',  'JobController@lists');
    $app->get('job/add',  'JobController@add');
    $app->post('job/add',  'JobController@add');
    $app->get('job/edit/{id}',  'JobController@edit');
    $app->post('job/edit/{id}',  'JobController@edit');
    $app->post('job/delete/{id}',  'JobController@delete');
    $app->get('job/search', 'JobController@search');    
});

$app->group(['namespace' => 'App\Http\Controllers\Front', 'prefix' => 'front', 'middleware' => ['auth.login']], function($app){
   
    $app->get('/index',  'DemandController@lists');
    
    $app->get('demand',  'DemandController@lists');
    $app->get('demand/add',  'DemandController@add');
    $app->post('demand/add',  'DemandController@add');
    $app->get('demand/edit/{id}',  'DemandController@edit');
    $app->post('demand/edit/{id}',  'DemandController@edit');
    $app->post('demand/delete/{id}',  'DemandController@delete');
    $app->get('demand/search', 'DemandController@search');
    $app->get('demand/queryPostName', 'DemandController@queryPostName');
    $app->get('demand/view/{id}', 'DemandController@view');
    $app->get('demand/queryMyDemand', 'DemandController@queryMyDemand');
    $app->post('demand/open/{id}',  'DemandController@open');
    $app->get('demand/talentSearch',  'DemandController@talentSearch');
    
    $app->get('recommend',  'RecommendController@lists');
    $app->get('recommend/add',  'RecommendController@add');
    $app->post('recommend/add',  'RecommendController@add');
    $app->get('recommend/edit/{id}',  'RecommendController@edit');
    $app->post('recommend/edit/{id}',  'RecommendController@edit');
    $app->post('recommend/delete/{id}',  'RecommendController@delete');
    $app->get('recommend/search', 'RecommendController@search');
    $app->post('recommend/comment',  'RecommendController@comment');
    $app->get('recommend/recommend',  'RecommendController@recommend');
    $app->post('recommend/recommend',  'RecommendController@recommend');
    $app->post('recommend/recommendHR',  'RecommendController@recommendHR');
    $app->get('recommend/queryTalent', 'RecommendController@queryTalent');
    
    $app->get('mytalent',  'MyTalentController@lists');
    $app->get('mytalent/add',  'MyTalentController@add');
    $app->post('mytalent/add',  'MyTalentController@add');
    $app->get('mytalent/edit/{id}',  'MyTalentController@edit');
    $app->post('mytalent/edit/{id}',  'MyTalentController@edit');
    $app->post('mytalent/delete/{id}',  'MyTalentController@delete');
    $app->get('mytalent/search', 'MyTalentController@search');
    $app->get('mytalent/recommend/{id}',  'MyTalentController@recommend');
    $app->post('mytalent/recommend/{id}',  'MyTalentController@recommend');
    $app->get('mytalent/demandSearch/{id}',  'MyTalentController@demandSearch');
    $app->get('mytalent/view/{id}',  'MyTalentController@view');
    
    $app->get('myrecommend',  'MyRecommendController@lists');
    $app->get('myrecommend/add',  'MyRecommendController@add');
    $app->post('myrecommend/add',  'MyRecommendController@add');
    $app->get('myrecommend/edit/{id}',  'RecommendController@edit');
    $app->post('myrecommend/edit/{id}',  'MyRecommendController@edit');
    $app->post('myrecommend/delete/{id}',  'MyRecommendController@delete');
    $app->get('myrecommend/search', 'MyRecommendController@search');
    
//         $app->get('profile', function () use ($app) {
//             return view('front.profile.myself');
//         });
   $app->get('profile/edit/{id}',  'ProfileController@edit');
   $app->post('profile/edit/{id}',  'ProfileController@edit');
});