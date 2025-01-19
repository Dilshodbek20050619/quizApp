<?php

namespace App\Models;

use App\Models\DB;

class Quiz extends DB
{
    public function create(int $user_id, string $title, string $description, int $time_limit):int
    {
        $query = "INSERT INTO quizzes (user_id, title, description, time_limit, updated_at, created_at) 
                    VALUES (:user_id, :title, :description, :time_limit, NOW(), NOW())";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([
            "user_id" => $user_id,
            "title" => $title,
            "description" => $description,
            "time_limit" => $time_limit,
        ]);
        return $this->conn->lastInsertId();
    }

    public function getByUserId(int $userId): array|bool
    {
        $query="SELECT * FROM quizzes WHERE user_id=:userId";
        $stmt=$this->conn->prepare($query);
        $stmt->execute([
            ':userId'=>$userId
        ]);
        return $stmt->fetchAll();
    }

    public function delete(int $quizId): bool
    {
        $query = "DELETE FROM quizzes WHERE id = :quizId";
        $stmt = $this->conn->prepare($query);

        // PDO execute() method is called here
        return $stmt->execute([
            ':quizId' => $quizId
        ]);
    }


}