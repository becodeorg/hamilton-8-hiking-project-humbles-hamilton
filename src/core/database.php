<?php

/*namespace Core;

use PDO;

class Database
{

    public $connection;

    public $statement;

    public function __construct($config, $username = 'humbles-admin', $password = 'xpjJMDkf1i92fY2h')
    {

        $dsn = "mysql:" . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [

            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC

        ]);

        $this->connection->exec("USE hamilton-8-humbles");
    }

    public function query($query, $params = [])
    {

        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    }
}
*/