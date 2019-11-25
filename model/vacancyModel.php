<?php

include_once("conf/database.php");

class vacancyModel
{
    public function __construct()
    {
        $this->connect = connect();
    }

    function createVacancy($param)
    {
        $query = "INSERT INTO vacancy_table(companyID, vacancyTitle, position, location, salary, specialization, information) VALUES ('" . $param['companyID'] . "','" . $param['title'] . "','" . $param['position'] . "','" . $param['location'] . "'," . $param['salary'] . ",'" . $param['specialization'] . "','" . $param['information'] . "')";
//        print_r($query);

        $ret = mysqli_query($this->connect, $query);

        if ($ret > 0) {
            return true;
        } else {
            $_SESSION['message'] = 'Gagal membuat lowongan';
            return false;
        }
    }

    function selectVacancy()
    {
        $query = "SELECT
                        t1.id AS vacancyID,
                        t1.companyID,
                        t1.vacancyTitle,
                        t1.position,
                        t1.location,
                        t1.salary,
                        t1.specialization,
                        t1.information,
                        t2.companyName,
                        t2.logo,
                        t2.subsidiary
                    FROM
                        vacancy_table t1
                    JOIN company_table t2 ON
                        t2.id = t1.companyID";

        $ret = mysqli_query($this->connect, $query);

        $i = 0;
        if ($ret->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($ret)) {
                $data[$i]['vacancyID'] = $row['vacancyID'];
                $data[$i]['companyID'] = $row['companyID'];
                $data[$i]['vacancyTitle'] = $row['vacancyTitle'];
                $data[$i]['position'] = $row['position'];
                $data[$i]['location'] = $row['location'];
                $data[$i]['salary'] = $row['salary'];
                $data[$i]['specialization'] = $row['specialization'];
                $data[$i]['information'] = $row['information'];
                $data[$i]['companyName'] = $row['companyName'];
                $data[$i]['subsidiary'] = $row['subsidiary'];
                $data[$i]['logo'] = $row['logo'];

                $i++;
            }

            return $data;
        }
        return null;
    }

    function selectOneVacancy($id)
    {
        $query = "SELECT
                        t1.id AS vacancyID,
                        t1.companyID,
                        t1.vacancyTitle,
                        t1.position,
                        t1.location,
                        t1.salary,
                        t1.specialization,
                        t1.information,
                        t2.companyName,
                        t2.logo,
                        t2.city,
                        t2.address,
                        t2.information AS companyInfo,
                        t2.subsidiary
                    FROM
                        vacancy_table t1
                    JOIN company_table t2 ON
                        t2.id = t1.companyID WHERE t1.id=" . $id . " ";

        $ret = mysqli_query($this->connect, $query);

        if ($ret->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($ret)) {
                $data['vacancyID'] = $row['vacancyID'];
                $data['companyID'] = $row['companyID'];
                $data['vacancyTitle'] = $row['vacancyTitle'];
                $data['position'] = $row['position'];
                $data['location'] = $row['location'];
                $data['salary'] = $row['salary'];
                $data['specialization'] = $row['specialization'];
                $data['information'] = $row['information'];
                $data['companyName'] = $row['companyName'];
                $data['subsidiary'] = $row['subsidiary'];
                $data['city'] = $row['city'];
                $data['address'] = $row['address'];
                $data['logo'] = $row['logo'];
                $data['companyInfo'] = $row['companyInfo'];

            }

            return $data;
        }
        return null;
    }

    function editVacancy($param)
    {
        $query = "UPDATE vacancy_table SET vacancyTitle='" . $param['title'] . "',position='" . $param['position'] . "',location='" . $param['location'] . "',salary=" . $param['salary'] . ",specialization='" . $param['specialization'] . "',Information='" . $param['information'] . "' WHERE id = " . $param['id'] . " ";
//        print_r($query);die();
        $ret = mysqli_query($this->connect, $query);

        if ($ret > 0) {
            return true;
        } else {
            $_SESSION['message'] = 'Gagal edit lowongan';
            return false;
        }
    }

    function deleteVacancy($id)
    {
        $query = "DELETE FROM vacancy_table WHERE id = " . $id . " ";

        $ret = mysqli_query($this->connect, $query);

        if ($ret > 0) {
            return true;
        } else {
            $_SESSION['message'] = 'Gagal delete lowongan';
            return false;
        }
    }

}

?>
