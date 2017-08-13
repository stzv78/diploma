<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('templates.questions.user_question');
});

Route::get('/admin', function () {
    return view('templates.questions.admin_question');
});


//работа с категориями
Route::resource('category', 'CategoryController', ['except' => 'show']);



//Route::get('/', 'CategoryController@seedCategory'); //первое создание категорий
//Route::get('/', 'CategoryController@addQuestions'); //создание вопросов для категорий
Route::get('/getquestion/{id}', 'CategoryController@getCategoriesQuestion');//получение вопросов для категории с id, отсортированный по created_at
//Route::get('/getquestion/{id}/{status}', 'CategoryController@getCategoriesStatusQuestion');//получение вопросов для категории с id и статуса status
Route::get('/delete/{id}', 'CategoryController@deleteCategories');//удаление вопросов для категории с id
Route::get('/list/{id}', 'CategoryController@listCategory'); //количество вопросов $count в категории c $id



//работа с вопросами
Route::get('/listq/', 'QuestionController@listQuestion'); //список всех вопросов без ответа во всех темах в порядке их добавления
Route::get('/updateq/{id}', 'QuestionController@updateQuestion'); //обновить вопрос
Route::get('/setstatusq/{id}/{status}', 'QuestionController@setStatusQuestion'); //обновить статус вопроса

//работать с ответами
Route::get('/answer/{id}', 'AnswerController@addAnswer'); //добавить ответ к вопросу с id
/*
Route::get('/', 'PageController@index');
Route::get('/list', 'PageController@listContacts');
Route::post('/add', 'PageController@add');
Route::get('/edit/{id}', 'PageController@edit');
Route::get('/delete/{id}', 'PageController@delete');
*/