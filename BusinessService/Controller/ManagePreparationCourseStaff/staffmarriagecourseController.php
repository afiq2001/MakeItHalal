<?php
require_once 'C:\xampp\xam\htdocs\MakeItHalal\BusinessService\Model\ManagePreparationCourseStaff\staffmarriagecourseModel.php';

class adminaddcourseController extends adminaddcourseModel
{
    public function adminaddcourse($Course_nosiries, $Course_organizer, $Course_address, $Course_price, $Course_startdate, $Course_enddate, $Course_capacity, $Course_organizer_noPhone,$accountnum,$banktype,$bankname)
    {
        $adminaddcourseModel = new adminaddcourseModel();
        $adminaddcourseResult = $adminaddcourseModel->addAdminCourse($Course_nosiries, $Course_organizer, $Course_address, $Course_price, $Course_startdate, $Course_enddate, $Course_capacity, $Course_organizer_noPhone,$accountnum,$banktype,$bankname);
        //admin insert the course into Stafflistcourse
        if (!$adminaddcourseResult) {
            echo "Afiq"; // Debugging statement
        } else {
            // echo "Afiqhensem angat2";
            header("Location: /MakeItHalal/App/ManagePreparationCourseStaff/Stafflistcourse.php");
            exit();
        }
    }
    public function  displaycourse()
    {
        // $displaycourseModel = new adminaddcourseModel();
        // $displayResult = $displaycourseModel->displayCourse();
        $displayResult = $this->displayCourseModel();

        if (!$displayResult) {
            echo "Afiq hensem"; // Debugging statement
        } else {
            // // echo "Afiqhensem angat2";
            // header("Location: page/Module2/StaffManagePreparationCourse/view/adminmarriagecourse.php");
            // exit();
            return $displayResult;
        }
    }
    public function displaylist()
{
    $displaylist = $this->displayListApplicantModel();

    if (!$displaylist) {
        echo "Afiq hensem"; // Debugging statement
    } else {
        return $displaylist;
    }
}
}
?>


