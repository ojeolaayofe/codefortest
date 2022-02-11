<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "something@gmail.com";
 
    $email_subject = "email request";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there was/were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['firstname']) ||
 
        !isset($_POST['lastName']) ||
 
        !isset($_POST['address']) ||
 
        !isset($_POST['refferal']) ||
 
        !isset($_POST['phone']) ||

        !isset($_POST['email']) ||

        !isset($_POST['lice']) ||

        !isset($_POST['ninnumber']) ||

        !isset($_POST['lasdri']) ||

        !isset($_POST['date']) ||

        !isset($_FILES['file']) ||

        !isset($_POST['bname']) ||

        !isset($_POST['accnumber']) ||

        !isset($_POST['accname'])) {
 
        died('We are sorry, but it appears that there is a problem with the form you submitted.');       
 
    }
 
     
 
    $fistname = $_POST['firstname']; // getting driver Fisrtname
    $lastname =  $_POST['lastName']; // getting driver LastName
    $address = $_POST['address']; // getting driver Address
    $refferal = $_POST['refferal']; // getting Referral details
    $phone = $_POST['phone']; // getting Phone Number
    $fromemail = $_POST['email']; // getting email
    $license = $_POST['lice']; // getting Lincense Number
    $ninnumber =  $_POST['ninnumber']; // getting NIN Number
    $lasdri=  $_POST['lasdri']; // getting NIN Number
    $date =  $_POST['date']; // getting NIN Number
    $file = $_FILES['file']; // getting Photograph
    $bname =  $_POST['bname']; // getting Bank Name
    $accnumber = $_POST['accnumber']; // getting Account Number
    $accname = $_POST['accname']; // getting Account Name
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$subject)) {
 
    $error_message .= 'The subject you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "firstname: ".clean_string($firstname)."\n";
 
    $email_message .= "lastname: ".clean_string($lastname)."\n";

    $email_message .= "address: ".clean_string($address)."\n";

    $email_message .= "refferal: ".clean_string($refferal)."\n";

    $email_message .= "phone: ".clean_string($phone)."\n";

    $email_message .= "email: ".clean_string($email)."\n";
    
    $email_message .= "lice: ".clean_string($lice)."\n";

    $email_message .= "ninnumber: ".clean_string($ninnumber)."\n";

    $email_message .= "lasdri: ".clean_string($lasdri)."\n";

    $email_message .= "date: ".clean_string($date)."\n";

    $target_dir .= "file: ".clean_string($file)."\n";

    $email_message .= "bname: ".clean_string($bname)."\n";

    $email_message .= "accnumber: ".clean_string($accnumber)."\n";
 
    $email_message .= "accname: ".clean_string($accname)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($mail_to, $FirstName, $LastName, $Address, $Phone, $Lincense, $lasdri, $BankName, $AccountNumber, $AccountName, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 
Registration Successful! You are advised to show up car Inspection.<meta http-equiv="Refresh" content="3; url=''" />
 
 
 
<?php
 
}
 
?>
