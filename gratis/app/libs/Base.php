<?php


class Base
{
    protected $user;
    protected $password;
    protected $database;
    protected $server;
    protected $con;

    public function __construct()
    {
        $this->user = USER;
        $this->password = PASSWORD;
        $this->database = DATABASE;
        $this->server = SERVER;
        $this->con = mysqli_connect($this->server, $this->user, $this->password, $this->database, 3307) or die("Could not connect to the database.");
    }
    //RETURN A QUERY
    public function query($sql)
    {
        return mysqli_query($this->con, $sql);
    }
    //RETURN AN ASSOCIATE ARRAY
    public function associate($sql)
    {
        return mysqli_fetch_assoc($this->query($sql));
    }
    //RETURN THE CONNECTION
    public function con()
    {
        return $this->con;
    }
}
