<?php

include_once("conf/database.php");

class authModel
{
    public function __construct()
    {
        $this->connect = connect();
    }

    function login($params)
    {
        $query = "SELECT * FROM user_table WHERE email = '" . $params['email'] . "' AND password = '" . hash('md5', $params['password']) . "'";
        $ret = mysqli_query($this->connect, $query);

        $data = mysqli_fetch_assoc($ret);

        session_start();
        if (!empty($data)) {
            $_SESSION['id'] = $data['id'];
            $_SESSION['fName'] = $data['firstName'];
            $_SESSION['lName'] = $data['lastName'];
            $_SESSION['email'] = $data['email'];

            return true;
        } else {
            $_SESSION['message'] = 'Write your username or password correctly!';

            return false;
        }
    }

    function register($params)
    {
        $query = "INSERT INTO user_table (firstName, lastName, email, password) VALUES ('" . $params['fName'] . "', '" . $params['lName'] . "', '" . $params['email'] . "', '" . hash('md5', $params['password']) . "')";

        $ret = mysqli_query($this->connect, $query);

        if ($ret > 0) {
            return true;
        } else {
            $_SESSION['message'] = 'Register Failed';
            return false;
        }
    }
}

?>