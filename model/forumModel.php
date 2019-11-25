<?php

include_once("conf/database.php");

class forumModel
{
    public function __construct()
    {
        $this->connect = connect();
    }

    function createPost($param)
    {
        $query = "INSERT INTO forum_table(userID, title, description) VALUES ('".$param['id']."','".$param['title']."','".$param['description']."')";

        $ret = mysqli_query($this->connect, $query);

        if ($ret > 0) {
            return true;
        } else {
            $_SESSION['message'] = 'Gagal membuat postingan';
            return false;
        }
    }

    function selectPost()
    {
        $query = "SELECT
                        t1.id,
                        t1.userID,
                        t1.title,
                        t1.description,
                        t2.id as userID,
                        t2.firstName
                    FROM
                        forum_table t1
                    JOIN user_table t2 ON
                        t2.id = t1.userID";

        $ret = mysqli_query($this->connect, $query);

        $i = 0;
        if ($ret->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($ret)) {
                $data[$i]['id'] = $row['id'];
                $data[$i]['userID'] = $row['userID'];
                $data[$i]['title'] = $row['title'];
                $data[$i]['description'] = $row['description'];
                $data[$i]['userID'] = $row['userID'];
                $data[$i]['firstName'] = $row['firstName'];

                $i++;
            }

            return $data;
        }
        return null;
    }

    function selectOnePost($id)
    {
        $query = "SELECT
                        t1.id,
                        t1.userID,
                        t1.title,
                        t1.description,
                        t2.id as userID,
                        t2.firstName
                    FROM
                        forum_table t1
                    JOIN user_table t2 ON
                        t2.id = t1.userID WHERE t1.id= " . $id . " ";

        $ret = mysqli_query($this->connect, $query);


        if ($ret->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($ret)) {
                $data['id'] = $row['id'];
                $data['userID'] = $row['userID'];
                $data['title'] = $row['title'];
                $data['description'] = $row['description'];
                $data['userID'] = $row['userID'];
                $data['firstName'] = $row['firstName'];
            }
            return $data;
        }
        return null;
    }

    function editPost($param)
    {
        $query = "UPDATE forum_table SET title='" . $param['title'] . "',description='" . $param['description'] . "' WHERE id= " . $param['id'] . " ";

        $ret = mysqli_query($this->connect, $query);

        if ($ret > 0) {
            return true;
        } else {
            $_SESSION['message'] = 'Gagal edit postingan';
            return false;
        }
    }

    function deletePost($id)
    {
        $query = "DELETE FROM forum_table WHERE id = " . $id . " ";

        $ret = mysqli_query($this->connect, $query);

        if ($ret > 0) {
            return true;
        } else {
            $_SESSION['message'] = 'Gagal delete postingan';
            return false;
        }
    }

}