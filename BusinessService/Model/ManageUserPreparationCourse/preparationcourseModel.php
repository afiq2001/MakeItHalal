<?php
require_once 'C:\xampp\xam\htdocs\MakeItHalal\BusinessService\Model\db_conn.php';

class useraddcourseModel extends Connection
{
    public function addUserCourse($user_noIC, $user_name, $user_gender, $user_DOB, $user_citizenship, $user_state, $user_notel, $user_emel, $user_paymentproof)
    {
        $connection = $this->getConnection();
        $query = "INSERT INTO application VALUES (0, '$user_noIC', '$user_name', '$user_gender', '$user_DOB', '$user_citizenship', '$user_state', '$user_notel', '$user_emel','$user_paymentproof')";

        $useraddcourseresult = mysqli_query($connection, $query);
        if (!$useraddcourseresult) {
            return false;
        } else {
            return $useraddcourseresult;
        }
    }
}

