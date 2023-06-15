<?php
require_once 'C:\xampp\xam\htdocs\MakeItHalal\BusinessService\Model\ManageMariageRequestStaff\staffmarriagerequestModel.php';

class admininfoController extends admininfoModel
{
    public function displayinfoapplicant()
    {
        // $displaycourseModel = new adminaddcourseModel();
        // $displayResult = $displaycourseModel->displayCourse();
        $displayapplicantresult = $this->displayapplicantinfoModel();
//display applicant info
        if (!$displayapplicantresult) {
            echo "Afiq hensem"; // Debugging statement
        } else {
            // // echo "Afiqhensem angat2";
            // header("Location: page/Module2/StaffManagePreparationCourse/view/adminmarriagecourse.php");
            // exit();
            return $displayapplicantresult;
        }
    }
}
?>


