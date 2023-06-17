<?php
require_once 'D:\xamp\htdocs\MakeItHalal\BusinessService\Model\ManageConsultationStaff\consultationApprovalModel.php';

class admininfoController extends admininfoModel
{
    public function displayCinfoapplicant()
    {
        // $displaycourseModel = new adminaddcourseModel();
        // $displayResult = $displaycourseModel->displayCourse();
        $displayapplicantresult = $this->displayapplicantinfoModel();
//display applicant info
        if (!$displayapplicantresult) {
            echo "erth"; // Debugging statement
        } else {
            
            // header("Location: page/Module2/StaffManagePreparationCourse/view/adminmarriagecourse.php");
            // exit();
            return $displayapplicantresult;
        }
    }
}
?>