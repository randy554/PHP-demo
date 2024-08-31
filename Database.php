<?php

class Database {

    public $connection;

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
        $statement = $this->connection->prepare($query);
        $statement->execute($params);


        return $statement;

    }

}