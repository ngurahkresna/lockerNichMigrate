<?php

include_once("conf/database.php");

class companyModel
{
    public function __construct()
    {
        $this->connect = connect();
    }

    function selectCompany($id)
    {
        $query = "SELECT
                        t1.id AS companyID,
                        t1.userID,
                        t1.companyName,
                        t1.subsidiary,
                        t1.logo,
                        t1.city,
                        t1.address,
                        t1.information,
                        t2.firstName
                    FROM
                        company_table t1
                    JOIN user_table t2 ON
                        t2.id = t1.userID WHERE t2.id = " . $id . " ";

        $ret = mysqli_query($this->connect, $query);

        $i = 0;
        if ($ret->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($ret)) {
                $data[$i]['companyID'] = $row['companyID'];
                $data[$i]['userID'] = $row['userID'];
                $data[$i]['companyName'] = $row['companyName'];
                $data[$i]['subsidiary'] = $row['subsidiary'];
                $data[$i]['logo'] = $row['logo'];
                $data[$i]['city'] = $row['city'];
                $data[$i]['address'] = $row['address'];
                $data[$i]['information'] = $row['information'];
                $data[$i]['fName'] = $row['firstName'];

                $i++;
            }

            return $data;
        }
        return null;
    }

    function createCompany($param)
    {
        $query = "INSERT INTO company_table (userID, companyName, subsidiary, logo, city, address, information) VALUES ('" . $param['userID'] . "','" . $param['company'] . "','" . $param['subsidiary'] . "','" . $param['logo'] . "','" . $param['city'] . "','" . $param['address'] . "','" . $param['information'] . "')";
//        print_r($query);

        $ret = mysqli_query($this->connect, $query);

        if ($ret > 0) {
            return true;
        } else {
            $_SESSION['message'] = 'Gagal input artikel';
            return false;
        }
    }

    function editCompany($param)
    {
        $query = "UPDATE company_table SET companyName='" . $param['companyName'] . "',subsidiary='" . $param['subsidiary'] . "',logo='" . $param['logo'] . "',city='" . $param['city'] . "',address='" . $param['address'] . "',information='" . $param['information'] . "' WHERE id=" . $param['id'] . " ";
//        print_r($query);
        $ret = mysqli_query($this->connect, $query);

        if ($ret > 0) {

            return true;
        } else {
            $_SESSION['message'] = 'Gagal update tipe I';
            return false;
        }

    }

    function selectOneCompany($id)
    {
        $query = "SELECT * FROM company_table WHERE id= " . $id . " ";

        $ret = mysqli_query($this->connect, $query);

        if ($ret->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($ret)) {
                $data['companyID'] = $row['id'];
                $data['userID'] = $row['userID'];
                $data['companyName'] = $row['companyName'];
                $data['subsidiary'] = $row['subsidiary'];
                $data['logo'] = $row['logo'];
                $data['city'] = $row['city'];
                $data['address'] = $row['address'];
                $data['information'] = $row['information'];
            }

            return $data;
        }
        return null;
    }

    function deleteCompany($param)
    {
        $query = "DELETE FROM company_table WHERE id= " . $param . " ";
//        print_r($query);
        $ret = mysqli_query($this->connect, $query);

        if ($ret > 0) {
            return true;
        } else {
            $_SESSION['message'] = 'Gagal delete perusahaan';
            return false;
        }
    }
}

?>