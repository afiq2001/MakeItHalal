<?php
require_once 'C:\xampp\xam\htdocs\MakeItHalal\BusinessService\Model\db_conn.php';

class userinfoModel extends Connection
{
    public function userAddApplicantInfo($user_IC, $user_name, $user_DOB, $user_race,$user_citizenship, $user_address, $user_phone, $user_edu_level, $user_sect_employ, $user_job_position, $user_salary,$user_certPreCourse)
    {
        $connection = $this->getConnection();
        $query = "INSERT INTO applicantinfo VALUES (0,'$user_IC', '$user_name', '$user_DOB', '$user_race','$user_citizenship', '$user_address', '$user_phone', '$user_edu_level', '$user_sect_employ', '$user_job_position', '$user_salary','$user_certPreCourse')";
        //inser applicant info into database
        $userapplicantinforesult = mysqli_query($connection, $query);
        if (!$userapplicantinforesult) {
            return false;
        } else {
            return $userapplicantinforesult;
        }
    }
    public function userAddSpouseInfo($user_IC, $user_name, $user_DOB, $user_race,$user_citizenship, $user_address, $user_phone, $user_edu_level, $user_sect_employ, $user_job_position, $user_salary,$user_certPreCourse)
    {
        $connection = $this->getConnection();
        $query = "INSERT INTO applicantinfo VALUES (0,'$user_IC', '$user_name', '$user_DOB', '$user_race','$user_citizenship', '$user_address', '$user_phone', '$user_edu_level', '$user_sect_employ', '$user_job_position', '$user_salary','$user_certPreCourse')";
        //inser spouse info into database
        $userspouseinforesult = mysqli_query($connection, $query);
        if (!$userspouseinforesult) {
            return false;
        } else {
            return $userspouseinforesult;
        }
    }
    public function userAddMarriageInfo($datereq, $applicantname, $spousename, $marriageplace, $country, $state, $marriagedate, $marriageaddress, $dowrytype, $amount, $weddinggift, $waliname, $waliIC,$waliaddress, $dobwali, $waliage, $notelwali, $relationship, $parentsmarriagedate, $parentsmarcertnumber, $paymentproof)
    {
        $connection = $this->getConnection();
        $query = "INSERT INTO marriageinfo VALUES (0,'$datereq', '$applicantname', '$spousename', '$marriageplace', '$country', '$state', '$marriagedate', '$marriageaddress', '$dowrytype', '$amount', '$weddinggift', '$waliname', '$waliIC', '$waliaddress', '$dobwali', '$waliage', '$notelwali', '$relationship', '$parentsmarriagedate', '$parentsmarcertnumber', '$paymentproof')";

        $usermarriageinforesult = mysqli_query($connection, $query);
        if (!$usermarriageinforesult) {
            return false;
        } else {
            return $usermarriageinforesult;
        }
    }
    public function userAddDocumentInfo ($requestfile, $waliagreementfile, $residentfile, $hivfile, $paymentproof)
    {
        $connection = $this->getConnection();
        $query = "INSERT INTO documentinfo VALUES (0,'$requestfile', '$waliagreementfile', '$residentfile', '$hivfile', '$paymentproof')";

        $userdocumentinforesult = mysqli_query($connection, $query);
        if (!$userdocumentinforesult) {
            return false;
        } else {
            return $userdocumentinforesult;
        }
    }
}

