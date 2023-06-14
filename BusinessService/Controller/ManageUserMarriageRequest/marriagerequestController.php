<?php
require_once '../../Model/ManageUserMarriageRequest/marriagerequestModel.php';

class addinfoController extends userinfoModel
{
    public function addapplicantinfo($user_IC, $user_name, $user_DOB, $user_race,$user_citizenship, $user_address, $user_phone, $user_edu_level, $user_sect_employ, $user_job_position, $user_salary,$user_certPreCourse)
    {
        $useraddapplicantinfoModel = new userinfoModel();
        $addapplicantinfoResult = $useraddapplicantinfoModel->userAddApplicantInfo($user_IC, $user_name, $user_DOB, $user_race,$user_citizenship, $user_address, $user_phone, $user_edu_level, $user_sect_employ, $user_job_position, $user_salary,$user_certPreCourse);

        if (!$addapplicantinfoResult) {
            echo "Afiq hensem"; // Debugging statement
        } else {
            // echo "Afiqhensem";
            header("Location: page/Module2/ManageUserMarriageRequest/view/Spouseinfo.php");
            exit();
        }
    }
    public function addspouseinfo($user_IC, $user_name, $user_DOB, $user_race,$user_citizenship, $user_address, $user_phone, $user_edu_level, $user_sect_employ, $user_job_position, $user_salary,$user_certPreCourse)
    {
        $userspouseinfoModel = new userinfoModel();
        $addspouseinfoResult = $userspouseinfoModel->userAddSpouseInfo($user_IC, $user_name, $user_DOB, $user_race,$user_citizenship, $user_address, $user_phone, $user_edu_level, $user_sect_employ, $user_job_position, $user_salary,$user_certPreCourse);

        if (!$addspouseinfoResult) {
            echo "Afiq hensem"; // Debugging statement
        } else {
            // echo "Afiqhensem";
            header("Location: page/Module2/ManageUserMarriageRequest/view/Marriageinfo.php");
            exit();
        }
    }
    public function addmarriageinfo($datereq, $applicantname, $spousename, $marriageplace, $country, $state, $marriagedate, $marriageaddress, $dowrytype, $amount, $weddinggift, $waliname, $waliIC,$waliaddress, $dobwali, $waliage, $notelwali, $relationship, $parentsmarriagedate, $parentsmarcertnumber, $paymentproof)
    {
        $usermarriageinfoModel = new userinfoModel();
        $addmarriageinfoResult = $usermarriageinfoModel->userAddMarriageInfo($datereq, $applicantname, $spousename, $marriageplace, $country, $state, $marriagedate, $marriageaddress, $dowrytype, $amount, $weddinggift, $waliname, $waliIC,$waliaddress, $dobwali, $waliage, $notelwali, $relationship, $parentsmarriagedate, $parentsmarcertnumber, $paymentproof);

        if (!$addmarriageinfoResult) {
            echo "Afiq hensem"; // Debugging statement
        } else {
            // echo "Afiqhensem";
            header("Location: page/Module2/ManageUserMarriageRequest/view/Documentinfo.php");
            exit();
        }
    }
    public function adddocumentinfo($requestfile, $waliagreementfile, $residentfile, $hivfile, $paymentproof)
    {
        $userdocumentinfoModel = new userinfoModel();
        $adddocumentinfoResult = $userdocumentinfoModel->userAddDocumentInfo($requestfile, $waliagreementfile, $residentfile, $hivfile, $paymentproof);

        if (!$adddocumentinfoResult) {
            echo "Afiq hensem"; // Debugging statement
        } else {
            // echo "Afiqhensem";
            header("Location: page/Module2/ManageUserMarriageRequest/view/RequestMarriage.php");
            exit();
        }
    }
}
?>


