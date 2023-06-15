<?php
require_once 'C:\xampp\xam\htdocs\MakeItHalal\BusinessService\Model\db_conn.php';

class adminaddcourseModel extends Connection
{
    public function addAdminCourse($Course_nosiries, $Course_organizer, $Course_address, $Course_price, $Course_startdate, $Course_enddate, $Course_capacity, $Course_organizer_noPhone,$accountnum,$banktype,$bankname)
    {
        $connection = $this->getConnection();
        $query = "INSERT INTO marriagecourse VALUES (0, '$Course_nosiries', NULL, '$Course_organizer', '$Course_address', '$Course_price', '$Course_startdate', '$Course_enddate', '$Course_capacity', '$Course_organizer_noPhone','$accountnum','$banktype','$bankname',NULL,NULL)";
        //admin add course into database
        $adminaddcourseresult = mysqli_query($connection, $query);
        if (!$adminaddcourseresult ) {
            return false;
        } else {
            return $adminaddcourseresult ;
        }
    }
    public function displayCourseModel()
    {
        $connection = $this->getConnection();
        $query = "SELECT * FROM marriagecourse";

        $displayresult = mysqli_query($connection, $query);
        if (!$displayresult ) {
            return false;
        } else {
            return $displayresult ;
        }
    }

    public function displayListApplicantModel()
{
    $connection = $this->getConnection();
    $query = "SELECT * FROM applicant";

    $displaylist = mysqli_query($connection, $query);
    if (!$displaylist) {
        return false;
    } else {
        return $displaylist;
    }
}
}


?>