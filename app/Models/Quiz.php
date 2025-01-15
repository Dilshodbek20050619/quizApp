<?php

namespace App\Models;

use App\Models\DB;
class Quiz extends DB
{
    public function create(int $user_id,string $tittle,string $description,int $time_limit):bool
    {
        $query="INSERT INTO quizzes(user_id,tittle,describtion,time_limit,update_at,create_at) VALUES (:user_id,:tittle,:description,:time_limit,NOW(),NOW())";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([
            ':user_id'=>$user_id,
            ':tittle'=>$tittle,
            ':description'=>$description,
            ':time_limit'=>$time_limit
        ]);


    }

}