<?php

class Database {

    public $connection;
    public $statement;

    public function __construct($config, $username = 'root', $password = '') {

        // Build DSN String For PDO Function
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        // Connect To My MySQL Database
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

    }

    public function query ($query, $params = []) {


        // Prepare & Execute SQL Query To Database
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);


        return $this;

    }

    // Find in DB
    public function find () {

        return $this->statement->fetch();

    }

    // Find in DB
    public function findAll () {

        return $this->statement->fetchAll();

    }

    // Show 404, If Note Doesn't Exist In DB
    public function findOrFail () {

        $result = $this->find();

        if (! $result) {
            abort();
        }

        return $result;

    }



}