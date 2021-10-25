<?php
class DbHandler {
    private $servername;
    private $database;
    private $username;
    private $password;

    function __construct($servername, $database, $username, $password){
        $this->servername = $servername;
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;
    }

    public function connect(){
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->database, 3306);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error . "<br>");
        }
        echo("Connected successfully<br>");
    }
}