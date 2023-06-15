<?php
require_once 'C:\xampp\xam\htdocs\MakeItHalal\BusinessService\Model\ManageUserPreparationCourse\preparationcourseModel.php';

class useraddcourseController extends useraddcourseModel
{
    public function useraddcourse($user_noIC, $user_name, $user_gender, $user_DOB, $user_citizenship, $user_state, $user_notel, $user_emel, $user_paymentproof)
    {
        $useraddcourseModel = new useraddcourseModel();
        $useraddcourseResult = $useraddcourseModel->addUserCourse($user_noIC, $user_name, $user_gender, $user_DOB, $user_citizenship, $user_state, $user_notel, $user_emel, $user_paymentproof);

        if (!$useraddcourseResult) {
            echo "Afiq hensem";
            
             // Debugging statement
        } else {
            header("Location:/MakeItHalal/App/ManageUserPreparationCourse/Courseapplication.php");
            exit();
        }
    }
}
?>


