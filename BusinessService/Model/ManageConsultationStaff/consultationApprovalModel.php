<?php
require_once '../db_conn.php';

class admininfoModel extends Connection
{
    public function displayapplicantinfoModel()
    {
        $connection = $this->getConnection();
        $query = "SELECT * FROM user_profile";

        $displayapplicantresult = mysqli_query($connection, $query);
        if (!$displayapplicantresult) {
            return false;
        } else {
            return $displayapplicantresult;
        }
    }
}


?>