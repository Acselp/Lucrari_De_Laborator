<?php
class DbHandler {
    private $servername;
    private $database;
    private $username;
    private $password;
    private $conn;

    function __construct($servername, $database, $username, $password){
        $this->servername = $servername;
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;
    }

    public function connect() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error . "<br>");
        }
        return $this->conn;
    }

    public function disconnect() {
        $this->conn->close();
    }
}

$db = new DbHandler("localhost", "lab6web", "root", "");