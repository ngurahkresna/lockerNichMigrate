<?php

function connect()
{
    $connect = mysqli_connect('remotemysql.com', 'fl8YbRSExe', 'rniKCoElx1', 'fl8YbRSExe');

    if ($connect) {
        return $connect;
    } else {
        die('Connection Failed');
    }
}

?>