<?php


class Database
{
    protected string $dsn;
    protected string $username;
    protected string $password;


    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=car_manager';
        $this->username = 'root';
        $this->password = '123456@Abc';
    }

    function connect(): PDO
    {
        return new PDO($this->dsn, $this->username, $this->password);
    }
}