<?php

class Task {

    private $pdo;

    public function __construct($db){
        $this->pdo = $db;
    }

    public function GetAll() {
        $sql = "SELECT * FROM tasks";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function Create(string $name, string $text){
        $sql = "INSERT INTO tasks (name, text) VALUES (?,?)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([$name, $text]);
        return $this->pdo->lastInsertId();
    }

    public function Delete(string $id){
        $sql = "DELETE FROM tasks WHERE id = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([$id]);
    }

    public function GetByID(string $id) {
        $sql = "SELECT * FROM tasks WHERE id = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([$id]);
        return $statement->fetch();
    }

    public function Update(string $id, string $name, string $text){
        $sql = "UPDATE tasks SET name = ?, text = ? WHERE id = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([$name, $text, $id]);
    }

};


?>