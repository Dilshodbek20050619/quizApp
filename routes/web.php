<?php

use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\UserController;
use src\Router;


Router::get('/', [HomeController::class, 'home']);
Router::get('/about', [HomeController::class, 'about']);
Router::get('/login', [HomeController::class, 'login']);
Router::get('/register', [HomeController::class, 'register']);
Router::get('/dashboard', [UserController::class, 'home']);
Router::get('/quizzes', [HomeController::class, 'quizzes']);
Router::get('/statistics', [HomeController::class, 'statistics']);
Router::get('/createquiz', [HomeController::class, 'createquiz']);

Router::notFound();