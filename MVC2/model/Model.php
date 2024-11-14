<?php
class Model {

    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    // Метод для получения списка всех книг
    public function getBookList() {
        $query = "SELECT * FROM books";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Метод для получения информации о книге по названию
    public function getBook($title) {
        $query = "SELECT * FROM books WHERE bookname = :title";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':title', $title);
        $stmt->execute();
        $book = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($book) {
            return [true, $book];
        }
        
        return [false];
    }
}
?>
