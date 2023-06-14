<?php
//require_once 'C:\xampp\xam\htdocs\cobaan\Controller\ManageUserCourseController\useraddcourseController.php';
//require_once 'C:\xampp\xam\htdocs\cobaan\ManageUserController\loginuserController.php';
require_once 'C:\xampp\xam\htdocs\make_it_halal\page\Module2\ManagePreparationCourseStaff\controller\staffmarriagecourseController.php';
require_once 'C:\xampp\xam\htdocs\make_it_halal\page\Module2\ManageUserPreparationCourse\controller\preparationcourseController.php';
require_once 'C:\xampp\xam\htdocs\make_it_halal\page\Module2\ManageUserMarriageRequest\controller\marriagerequestController.php';
// if (isset($_POST['addcourse'])) {
//     $noIC = $_POST['noIC'];
//     $nama = $_POST['nama'];
//     $jantina = $_POST['jantina'];
//     $tarikhlahir = $_POST['tarikhlahir'];
//     $warganegara = $_POST['warganegara'];
//     $negeri = $_POST['negeri'];
//     $notel = $_POST['notel'];
//     $emel = $_POST['emel'];

//     $usercourse = new useraddcourseController();
//     $usercourse->useraddcourse($noIC, $nama, $jantina, $tarikhlahir, $warganegara, $negeri, $notel, $emel);
// }

if(isset($_POST['adminaddcourse'])){
            $Course_nosiries = $_POST['Course_nosiries'];
            $Course_organizer = $_POST['Course_organizer'];
            $Course_address= $_POST['Course_address'];
            $Course_price = $_POST['Course_price'];
                $Course_startdate = $_POST['Course_startdate'];
                $Course_enddate = $_POST['Course_enddate'];
                $Course_capacity = $_POST['Course_capacity'];
                $Course_organizer_noPhone= $_POST['Course_organizer_noPhone'];
                $accountnum = $_POST['accountnum'];
                $banktype = $_POST['banktype'];
                $bankname = $_POST['bankname'];

    $adminaddcourse = new adminaddcourseController();
    $adminaddcourse->adminaddcourse($Course_nosiries, $Course_organizer, $Course_address, $Course_price, $Course_startdate, $Course_enddate, $Course_capacity, $Course_organizer_noPhone,$accountnum,$banktype,$bankname);

}
if (isset($_POST["useraddcourse"])) {
    $user_noIC = $_POST['user_noIC'];
    $user_name = $_POST['user_name'];
    $user_gender = $_POST['user_gender'];
    $user_DOB = $_POST['user_DOB'];
    $user_citizenship = $_POST['user_citizenship'];
    $user_state = $_POST['user_state'];
    $user_notel = $_POST['user_notel'];
    $user_emel = $_POST['user_emel'];
    $user_paymentproof = $_POST['user_paymentproof'];


    $useraddcourse = new useraddcourseController();
    $useraddcourse->useraddcourse($user_noIC, $user_name, $user_gender, $user_DOB, $user_citizenship, $user_state, $user_notel, $user_emel, $user_paymentproof);
}

if (isset($_POST["addapplicantinfo"])) {
    $user_IC = $_POST['user_IC'];
    $user_name = $_POST['user_name'];
    $user_DOB = $_POST['user_DOB'];
    $user_race = $_POST['user_race'];
    $user_citizenship = $_POST['user_citizenship'];
    $user_address= $_POST['user_address'];
    $user_phone = $_POST['user_phone'];
    $user_edu_level = $_POST['user_edu_level']; 
    $user_sect_employ = $_POST['user_sect_employ']; 
    $user_job_position = $_POST['user_job_position'];
    $user_salary = $_POST['user_salary'];
    $user_certPreCourse = $_POST['user_certPreCourse'];


    $useraddapplicantinfo = new addinfoController();
    $useraddapplicantinfo->addapplicantinfo($user_IC, $user_name, $user_DOB, $user_race,$user_citizenship, $user_address, $user_phone, $user_edu_level, $user_sect_employ, $user_job_position, $user_salary,$user_certPreCourse);
}

if (isset($_POST["addspouseinfo"])) {
    $user_IC = $_POST['user_IC'];
    $user_name = $_POST['user_name'];
    $user_DOB = $_POST['user_DOB'];
    $user_race = $_POST['user_race'];
    $user_citizenship = $_POST['user_citizenship'];
    $user_address= $_POST['user_address'];
    $user_phone = $_POST['user_phone'];
    $user_edu_level = $_POST['user_edu_level']; 
    $user_sect_employ = $_POST['user_sect_employ']; 
    $user_job_position = $_POST['user_job_position'];
    $user_salary = $_POST['user_salary'];
    $user_certPreCourse = $_POST['user_certPreCourse'];


    $useraddspouseinfo = new addinfoController();
    $useraddspouseinfo->addspouseinfo($user_IC, $user_name, $user_DOB, $user_race,$user_citizenship, $user_address, $user_phone, $user_edu_level, $user_sect_employ, $user_job_position, $user_salary,$user_certPreCourse);
}

if (isset($_POST["addmarriageinfo"])) {
    $datereq = $_POST['datereq'];
    $applicantname = $_POST['applicantname'];
    $spousename = $_POST['spousename'];
    $marriageplace = $_POST['marriageplace'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $marriagedate = $_POST['marriagedate'];
    $marriageaddress = $_POST['marriageaddress'];
    $dowrytype = $_POST['dowrytype'];
    $amount = $_POST['amount'];
    $weddinggift = $_POST['weddinggift'];
    $waliname = $_POST['waliname'];
    $waliIC = $_POST['waliIC'];
    $waliaddress = $_POST['waliaddress'];
    $dobwali = $_POST['dobwali'];
    $waliage = $_POST['waliage'];
    $notelwali = $_POST['notelwali'];
    $relationship = $_POST['relationship'];
    $parentsmarriagedate = $_POST['parentsmarriagedate'];
    $parentsmarcertnumber = $_POST['parentsmarcertnumber'];
    $paymentproof = $_POST['paymentproof'];

    $useraddmarriageinfo = new addinfoController();
    $useraddmarriageinfo->addmarriageinfo($datereq, $applicantname, $spousename, $marriageplace, $country, $state, $marriagedate, $marriageaddress, $dowrytype, $amount, $weddinggift, $waliname, $waliIC,$waliaddress, $dobwali, $waliage, $notelwali, $relationship, $parentsmarriagedate, $parentsmarcertnumber, $paymentproof);
}

if (isset($_POST["adddocumentinfo"])) {
    $requestfile = $_POST['requestfile'];
    $waliagreementfile = $_POST['waliagreementfile'];
    $residentfile= $_POST['residentfile'];
    $hivfile = $_POST['hivfile'];
    $paymentproof = $_POST['paymentproof'];

    $useradddocumentinfo = new addinfoController();
    $useradddocumentinfo->adddocumentinfo($requestfile, $waliagreementfile, $residentfile, $hivfile, $paymentproof);

}
?>

