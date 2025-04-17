<?php
//error_reporting(E_ALL);
require_once('class.phpmailer.php');
include("class.smtp.php");
//$from_page=getenv('HTTP_REFERER'); 
$from_page = "https://www.aafmindia.org/wealth-management-convention/";
$errorMSG = "";

if(isset($_POST["Become"])) {
    // NAME
    if (empty($_POST["name"])) {
        $errorMSG = "Name is required ";
    } else {
        $name = $_POST["name"];
    }

    // EMAIL
    if (empty($_POST["email"])) {
        $errorMSG .= "Email is required ";
    } else {
        $email = $_POST["email"];
    }

    // phone
    if (empty($_POST["phone"])) {
        $errorMSG .= "phone number is required ";
    } else {
        $mobile = $_POST["phone"];
    }

      // MSG SUBJECT
      if (empty($_POST["message"])) {
        $errorMSG .= "Meassage is required ";
    } else {
        $message = $_POST["message"];
    }
    $subject = $name . " has submitted a request in the wealth-management-convention Event Page";
    $body = "<html><head><title>Event Subscribe</title></head><body>
        <table width='450' border='1' rules='none' frame='box'>
        <tr bgcolor='#b0e1c6'><td align='center' colspan='2'>Become Sponser Form</td></tr>
        <tr><td>Name</td><td>" . $name . "</td></tr>
        <tr><td>Email</td><td>" . $email . "</td></tr>
        <tr><td>Contact No</td><td>" . $mobile . "</td></tr>
        <tr><td>Message</td><td>" . $message . "</td></tr>
        <tr><td>From URL</td><td>" . $from_page . "</td></tr>
        <tr bgcolor='#b0e1c6'><td colspan='2' align='center'>Thanks</td></tr>
        </table></body></html>";

    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->CharSet = "UTF-8";
    $mail->SMTPSecure = 'tls';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->Username = "feedback@aafmindia.co.in";
    $mail->Password = "admin_123456";
    $mail->SMTPAuth = true;
    $mail->SetFrom("aafmevents@aafm.co.in", "AAFM India");
    //$mail->AddAddress('aafmevents@aafm.co.in');
    
    $mail->AddCC('info@aafmindia.co.in');
    $mail->AddCC('memberships@aafm.club');
    $mail->AddCC('corporaterelations@aafm.co.in');
    //$mail->AddCC('technicalsupport1@aafm.co.in');
    //$mail->AddCC('technicalsupport1@aafm.co.in');
    //$mail->AddCC('sarvesh@aafm.co.in');
    $mail->IsHTML(true);
    $mail->Subject = $name . " has submitted a request in the wealth-management-convention India Event Page";
    $mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
    $mail->Body = $body;

    if ($mail->send() && $errorMSG == "") {
        /*echo "<script>alert('Message Submitted!');
        window.location.href='https://aafmindia.org/wealth-management-convention/Northzone/';
        </script>";
        */
        header("location:https://www.aafmindia.org/wealth-management-convention/thankupage.php");
        exit;
    } else {
        if ($errorMSG == "") {
            echo "Something went wrong :(";
        } else {
            echo $errorMSG;
            //exit;
        }
    }
}


elseif (isset($_POST["contactus"])) {
    // NAME
    // NAME
    if (empty($_POST["name"])) {
        $errorMSG = "Name is required ";
    } else {
        $name = $_POST["name"];
    }

    // EMAIL
    if (empty($_POST["email"])) {
        $errorMSG .= "Email is required ";
    } else {
        $email = $_POST["email"];
    }

    // phone
    if (empty($_POST["phone"])) {
        $errorMSG .= "phone number is required ";
    } else {
        $mobile = $_POST["phone"];
    }

      // MSG SUBJECT
    /*  if (empty($_POST["message"])) {
        $errorMSG .= "Meassage is required ";
    } else {
        $message = $_POST["message"];
    }
    */
    $message = $_POST["message"];

    $subject = $name . " has submitted a request in the wealth-management-convention Event Page";
    $body = "<html><head><title>Event Subscribe</title></head><body>
        <table width='450' border='1' rules='none' frame='box'>
        <tr bgcolor='#b0e1c6'><td align='center' colspan='2'>Become-exhibitor Form</td></tr>
        <tr><td>Name</td><td>" . $name . "</td></tr>
        <tr><td>Email</td><td>" . $email . "</td></tr>
        <tr><td>Contact No</td><td>" . $mobile . "</td></tr>
        <tr><td>Message</td><td>" . $message . "</td></tr>
        <tr><td>From URL</td><td>" . $from_page . "</td></tr>
        <tr bgcolor='#b0e1c6'><td colspan='2' align='center'>Thanks</td></tr>
        </table></body></html>";

    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->CharSet = "UTF-8";
    $mail->SMTPSecure = 'tls';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->Username = "feedback@aafmindia.co.in";
    $mail->Password = "admin_123456";
    $mail->SMTPAuth = true;
    $mail->SetFrom("aafmevents@aafm.co.in", "AAFM India");
    //$mail->AddAddress('aafmevents@aafm.co.in');
    $mail->AddCC('info@aafmindia.co.in');
    $mail->AddCC('memberships@aafm.club');
    $mail->AddCC('corporaterelations@aafm.co.in');
  
    //$mail->AddCC('technicalsupport1@aafm.co.in');
    //$mail->AddCC('sarvesh@aafm.co.in');
    $mail->IsHTML(true);
    $mail->Subject = $name . " has submitted a request in the wealth-management-convention India Event Page";
    $mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
    $mail->Body = $body;

    if ($mail->send() && $errorMSG == "") {
       /* echo "<script>alert('Message Submitted!');
        window.location.href='https://aafmindia.org/wealth-management-convention/Northzone/';
        </script>";
        */
        header("location:https://www.aafmindia.org/wealth-management-convention/thankupage.php");
        exit;
    } else {
        if ($errorMSG == "") {
            echo "Something went wrong :(";
        } else {
            echo $errorMSG;
            //exit;
        }
    }
}



?>