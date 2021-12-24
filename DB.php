<?php

class DB
{
    private $conn = null;

    public function __construct()
    {
    }

    public function getConn()
    {
        if ($this->conn == null) {
            try {
                $this->conn = new PDO("mysql:host=127.0.0.1;port=3306;dbname=android_notes", "root", "koodinh@");
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getTraceAsString();
            }
        }
        return $this->conn;
    }

    public function getAllNotes()
    {
        $conn = $this->getConn();
        $stmt = $conn->prepare("SELECT * FROM notes");
        try {
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    public function addNote($inputTitle, $inputContent)
    {
        $conn = $this->getConn();
        $stmt = $conn->prepare("INSERT INTO notes (title, content) VALUES (:title, :content)");
        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":content", $content);
        $title = $inputTitle;
        $content = $inputContent;
        try {
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        return true;
    }

    public function deleteNote($id)
    {
        $conn = $this->getConn();
        $stmt = $conn->prepare("DELETE FROM notes WHERE id = :id");
        $stmt->bindParam(":id", $id);
        try {
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        return true;
    }

    public function findById($id)
    {
        $conn = $this->getConn();
        $stmt = $conn->prepare("SELECT * FROM notes WHERE id = :id");
        $stmt->bindParam(":id", $id);
        try {
            $stmt->execute();
        } catch (Exception $e) {
            $e->getTrace();
        }
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateNote($id, $inputTitle, $inputContent)
    {
        $conn = $this->getConn();
        $stmt = $conn->prepare("UPDATE notes SET title = :title, content = :content WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":content", $content);
        $title = $inputTitle;
        $content = $inputContent;
        try {
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        return true;
    }
}