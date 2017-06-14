<!-- Database connectie maken -->
<?php

/**
 * Created by PhpStorm.
 * User: Loïc
 * Date: 10/04/2017
 * Time: 22:32
 */
class Database
{
    private $servername = 'dt5.ehb.be';
    private $username = 'WDA053';
    private $password = '93162854';
    private $dbname = 'WDA053';
    private $connection = null;

    public function __construct()
    {
        $this->connection = new PDO('mysql:host=' . $this->servername . ';dbname=' . $this->dbname, $this->username, $this->password);
    }

    public static function getInstance() {
        static $instance = null;
        if (is_null($instance)) {
            $instance = new Database;
        }

        return $instance;
    }

    public function query($sql) {
        return $this->connection->query($sql, PDO::FETCH_OBJ);
    }

    public function prepared($sql) {
        return $this->connection->prepare($sql);
    }
}