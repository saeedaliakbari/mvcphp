<?php


class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASSWORD;
    private $dbname = DB_NAME;

    private $dbh;
    private $stmt;
    private $error;

    public function __construct()
    {
        $dns = 'mysql:host=' . $this->host . ';dbname:' . $this->dbname . ';charset=utf-8';
        try {
            $this->dbh = new PDO($dns, $this->user, $this->pass);
            //change retrun data from array to object :
            $this->dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    public function query($sql)
    {
        $this->stmt = $this->dbh->prepare($sql);
    }

    public function  bind($param, $value)
    {
        $this->stmt->bindParam($param, $value);
    }

    public function execute()
    {
        return $this->stmt->execute();
    }

    public function fetchAll()
    {
        $this->execute();
        return $this->stmt->fetchAll();
    }
    public function fetch()
    {
        $this->execute();
        return $this->stmt->fetch();
    }
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
}
