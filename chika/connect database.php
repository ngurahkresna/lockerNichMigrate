<?php
    $conn = mysqli_connect("localhost","root","","lockernichsearch");

    function querySelect($query){
        global $conn;

        $result = mysqli_query($conn,$query);

        $rows = [];
        while ($rows = mysqli_fetch_assoc($result)){
        $rows [] = $rows;
    }


    return $rows;
    }

    ?>