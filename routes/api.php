<?php

use App\Http\Controllers\API\UserController;

use App\Http\Controllers\API\QuizController;

use src\Router;

Router::get('/api/users/{id}',[UserController::class,'show'],'auth:api');

Router::post('/api/register', [UserController::class , 'store']);
Router::post('/api/login', [UserController::class , 'login']);
Router::delete('/api/delete', [UserController::class , 'delete']);


Router::post('/api/quizzes',[QuizController::class,'storeQuiz','auth:api']);

Router::notFound();