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

// ***** Authentication *****
Auth::routes();

// ***** Quiz *****

// Let users take a quiz of all entered questions
Route::get('/', 'QuizController@index')->name('quiz.index');
Route::get('/home', 'QuizController@index')->name('quiz.index');

// Save posted data from quiz
Route::post('/quiz', 'QuizController@take')->name('quiz.take');

// Show quiz results from various attempts (for current user)
Route::get('/quiz/results/{attempt}', 'QuizController@results')->name('quiz.results');

// ***** Questions *****

//List all question
Route::get('/questions', 'QuestionsController@index')->name('questions.index');

//Show create questions form:
Route::get('/questions/create', 'QuestionsController@create')->name('questions.create');

//Save a new question to the database (via POST)
Route::post('/questions', 'QuestionsController@store')->name('questions.store');

//Show answers for a particular question
Route::get('/questions/{question}', 'QuestionsController@show')->name('questions.show');

// ***** Answers *****

// Create answers for a question

// Show create answer form:
Route::get('/answers/create/{question}', 'AnswersController@create');

//Save a new answer to the database (via POST)
Route::post('/answers', 'AnswersController@store');

// ***** Trends *****

// Trends home page
Route::get('/trends', 'TrendsController@index')->name('trends.index');

// Show aggregate trends (for answers to a question from all users over time)
Route::get('/trends/{question}', 'TrendsController@show')->name('trends.show');

// ***** vue components *****
// Route::view('vue', 'vue');


