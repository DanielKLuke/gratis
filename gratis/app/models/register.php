<?php

//THIS CLASS ACCESSES THE USERS TABLE IN THE DATABASE
class register
{
    protected $username;
    protected $password;
    protected $con;

    public function __construct()
    {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $this->username = $_POST['username'];
            $this->password = $_POST['password'];
            $this->con = new Base;
        }
    }
    //SAVE THE USERNAME IN THE SESSION AND SHOW THAT SOMEONE IS LOGGED IN
    public function setUserInfo()
    {
        $_SESSION['Username'] = $this->username;
        $_SESSION['LoggedIn'] = 1;
    }
    //RESET ALL SESSION VARIABLES
    public function signOut()
    {
        session_unset();
    }
    //CHECK THE USER TABLE TO SEE IF THE USERNAME EXISTS
    public function checkForUsername()
    {
        $sql = "SELECT Username FROM users WHERE Username = '" . $this->username . "'";
        $result = $this->con->query($sql);
        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
    //CHECK THE USER TABLE TO SEE IF THE PASSWORD IS CORRECT
    public function checkForPassword()
    {
        $sql = "SELECT * FROM users WHERE Username = '" . $this->username . "'";
        $result = $this->con->associate($sql);
        if (password_verify($this->password, $result['Password'])) {
            return true;
        } else {
            return false;
        }
    }
    //ADD A NEW USERNAME AND PASSWORD TO THE USER TABLE
    public function setUsernameAndPassword()
    {
        $sql = 'INSERT INTO users (Username, Password) VALUES ("' . $this->username . '", "' . password_hash($this->password, PASSWORD_DEFAULT) . '")';
        $result = $this->con->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
