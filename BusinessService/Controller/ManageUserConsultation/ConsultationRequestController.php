<?php
require_once "D:\xamp\htdocs\MakeItHalal\BusinessService\Model\ManageUserConsultation\consultationrequestModel.php";

class addinfoController extends userinfoModel
{
    public function applicantCinfo($user_ID, $user_name, $user_DOB, $user_race, $user_address, $user_phone, $user_sect_employ, $user_job_position, $user_salary, $user_edu_level, $applicant_nikah_count)
    {
        $useraddapplicantinfoModel = new userinfoModel();
        $addapplicantinfoResult = $useraddapplicantinfoModel->userAddapplicantCinfo($user_ID, $user_name, $user_DOB, $user_race, $user_address, $user_phone, $user_sect_employ, $user_job_position, $user_salary, $user_edu_level, $applicant_nikah_count);
        
        if (!$addapplicantinfoResult) {
            echo "mmmmnb"; //debugging statement
        }else{
            // echo
            header("Location:D:\xamp\htdocs\MakeItHalal\App\ManageUserConsultation\SpouseCForm.php");
        }
    }
    
    
    public function spouseCinfo($spouseName, $spouseDOB, $spouseRace, $spouseAddress, $spousePhoneNum, $spouseSectEmploy, $spouseJobPosition, $spouseSalary, $spouselvlEdu, $spouse_nikah_count)
    {
        $userspouseCinfoModel = new userinfoModel();
        $addspouseinfoResult = $userspouseCinfoModel->userAddspouseCinfo($spouseName, $spouseDOB, $spouseRace, $spouseAddress, $spousePhoneNum, $spouseSectEmploy, $spouseJobPosition, $spouseSalary, $spouselvlEdu, $spouse_nikah_count);
        
        if (!$addspouseinfoResult) {
            echo "mmmmnb"; //debugging statement
        }else{
            // echo
            header("Location:D:\xamp\htdocs\MakeItHalal\App\ManageUserConsultation\MarriageCForm.php");
        }
    }

    public function marriageCinfo($spouse_dateofmarriage, $spouse_typeofmarriage, $spousePosition, $spouseMarriagePolicy, $spouseNoOfChild, $spouseDivorce)
    {
        $usermarriageinfoModel = new userinfoModel();
        $addmarriageinfoResult = $usermarriageinfoModel ->userAddmarriageCinfo($spouse_dateofmarriage, $spouse_typeofmarriage, $spousePosition, $spouseMarriagePolicy, $spouseNoOfChild, $spouseDivorce);
        
        if (!$addmarriageinfoResult) {
            echo "mmmmnb"; //debugging statement
        }else{
            // echo
            header("Location:D:\xamp\htdocs\MakeItHalal\App\ManageUserConsultation\ConsultationForm.php");
        }
    }


    public function consultationCinfo($consultPurpose, $consultDescription, $consultDatetime, $counsultPreferred, $counsultChoosen)
    {
        $userconsultationinfoModel = new userinfoModel();
        $addconsultationinfoResult = $userconsultationinfoModel->userAddconsultationinfo($consultPurpose, $consultDescription, $consultDatetime, $counsultPreferred, $counsultChoosen);
        
        if (!$addconsultationinfoResult) {
            echo "mmmmnb"; //debugging statement
        }else{
            // echo
            header("Location:D:\xamp\htdocs\MakeItHalal\App\ManageUserConsultation\RequestConsultation.php");
        }
    }
    
    
    
}
?>