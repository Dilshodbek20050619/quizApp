<?php

namespace App\Http\Controllers\API;

use Src\Auth;


class QuizController
{
    public function storeQuiz()
    {
            apiResponse(['message' => 'User not logged in successfully',],201);
    }
}