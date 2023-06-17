<?php
require_once 'C:\xampp\xam\htdocs\MakeItHalal\BusinessService\Model\db_conn.php';

class userinfoModel extends Connection
{
    public function userAddapplicantCinfo($user_ID, $user_name, $user_DOB, $user_race, $user_address, $user_phone, $user_sect_employ, $user_job_position, $user_salary, $user_edu_level, $applicant_nikah_count)
    {
        $connection = $this->getConnection();
        $query = "INSERT INTO user_profile VALUES ('$user_ID', '$user_name', '$user_DOB', '$user_race', '$user_address', '$user_phone', '$user_sect_employ', '$user_job_position', '$user_salary', '$user_edu_level', '$applicant_nikah_count')";
        //inser applicant info into database
        $userapplicantinforesult = mysqli_query($connection, $query);
        if (!$userapplicantinforesult) {
            return false;
        } else {
            return $userapplicantinforesult;
        }
    }
    public function userAddSpouseCInfo($spouseName, $spouseDOB, $spouseRace, $spouseAddress, $spousePhoneNum, $spouseSectEmploy, $spouseJobPosition, $spouseSalary, $spouselvlEdu, $spouse_nikah_count)
    {
        $connection = $this->getConnection();
        $query = "INSERT INTO spouse VALUES ('$spouseName', '$spouseDOB', '$spouseRace', '$spouseAddress', '$spousePhoneNum', '$spouseSectEmploy', '$spouseJobPosition', '$spouseSalary', '$spouselvlEdu', '$spouse_nikah_count')";
        //inser spouse info into database
        $userspouseinforesult = mysqli_query($connection, $query);
        if (!$userspouseinforesult) {
            return false;
        } else {
            return $userspouseinforesult;
        }
    }
    public function userAddmarriageCinfo($spouse_dateofmarriage, $spouse_typeofmarriage, $spousePosition, $spouseMarriagePolicy, $spouseNoOfChild, $spouseDivorce)
    {
        $connection = $this->getConnection();
        $query = "INSERT INTO spouse VALUES ('$spouse_dateofmarriage', '$spouse_typeofmarriage', '$spousePosition', '$spouseMarriagePolicy', '$spouseNoOfChild', '$spouseDivorce')";

        $usermarriageinforesult = mysqli_query($connection, $query);
        if (!$usermarriageinforesult) {
            return false;
        } else {
            return $usermarriageinforesult;
        }
    }
    public function userAddConsultationInfo ($consultPurpose, $consultDescription, $consultDatetime, $counsultPreferred, $counsultChoosen)
    {
        $connection = $this->getConnection();
        $query = "INSERT INTO consultation VALUES ('$consultPurpose', '$consultDescription', '$consultDatetime', '$counsultPreferred', '$counsultChoosen')";

        $userconsultationinforesult = mysqli_query($connection, $query);
        if (!$userconsultationinforesult) {
            return false;
        } else {
            return $userconsultationinforesult;
        }
    }
}