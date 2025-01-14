<?php

namespace App\Http\Controllers\Web;
class HomeController
{
    public function home(): void{ view('home');}
    public function about(): void{ view('about');}
    public function login(): void{ view('auth/login');}
    public function register(): void{ view('auth/register');}
    public function quizzes(): void{ view('dashboard/myquize');}
    public function statistics(): void{ view('dashboard/statistics');}
    public function createquiz(): void{ view('dashboard/createquiz');}

}
