<?php

include_once("conf/database.php");

class articleModel
{
    public function __construct()
    {
        $this->connect = connect();
    }

    function createArticle($data)
    {
        if (!isset($_SESSION)) session_start();
        $id = $_SESSION['id'];
        $query = "INSERT INTO article(userID, title, content, date) VALUES (" . $id . ",'" . $data['title'] . "','" . $data['content'] . "', now())";
//        print_r($query);
        $ret = mysqli_query($this->connect, $query);

        if ($ret > 0) {
            return true;
        } else {
            $_SESSION['message'] = 'Gagal membuat artikel';
            return false;
        }

    }

    function selectArticle()
    {
        $query = "SELECT
                        t1.id,
                        t1.userID,
                        t1.title,
                        t1.content,
                        t1.date,
                        t2.firstName
                    FROM
                        article t1
                    JOIN user_table t2 ON
                        t2.id = t1.userID";
        $ret = mysqli_query($this->connect, $query);

        $i = 0;
        if ($ret->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($ret)) {
                $data[$i]['id'] = $row['id'];
                $data[$i]['userID'] = $row['userID'];
                $data[$i]['title'] = $row['title'];
                $data[$i]['content'] = nl2br(htmlspecialchars($row['content']));
                $data[$i]['date'] = $row['date'];
                $data[$i]['firstname'] = $row['firstName'];

                $i++;
            }

            return $data;
        }
        return null;
    }

    function detailArticle($id)
    {
        $query = "SELECT
                        t1.id,
                        t1.userID,
                        t1.title,
                        t1.content,
                        t1.date,
                        t2.firstName
                    FROM
                        article t1
                    JOIN user_table t2 ON
                            t2.id = t1.userID WHERE t1.id = " . $id . " ";

        $ret = mysqli_query($this->connect, $query);

        $i = 0;
        if ($ret->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($ret)) {
                $data[$i]['id'] = $row['id'];
                $data[$i]['userID'] = $row['userID'];
                $data[$i]['title'] = $row['title'];
                $data[$i]['content'] = nl2br(htmlspecialchars($row['content']));
                $data[$i]['normalContent'] = $row['content'];
                $data[$i]['date'] = $row['date'];
                $data[$i]['firstname'] = $row['firstName'];

                $i++;
            }

            return $data;
        }

        return null;
    }

    function editArticle($param)
    {
        $query = "UPDATE article SET title='" . $param['title'] . "', content='" . $param['content'] . "',date= now() WHERE id=" . $param['id'] . " ";
        $ret = mysqli_query($this->connect, $query);

        if ($ret > 0) {
            return true;
        } else {
            $_SESSION['message'] = 'Gagal edit artikel';
            return false;
        }
    }

    function deleteArticle($param)
    {
        $query = "DELETE FROM article WHERE id= " . $param['id'] . " ";

        $ret = mysqli_query($this->connect, $query);

        if ($ret > 0) {
            return true;
        } else {
            $_SESSION['message'] = 'Gagal delete artikel';
            return false;
        }
    }

}
