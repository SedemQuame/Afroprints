<?php
  // echo "In the password reset controller.";
  /*
  *     PSEUDO - LOGIC.
  *    ===================================
  *  - CREATE AN EIGHT DIGIT RANDOM NUMBER.
  *  - Pass the given number to page where the user will type the given number.
  *  - Compare entered random number and the generated number passed from this controller.
  *  - Check if entered string is valid.
  *  - Give user access to change his password in the database and then redirect him
  *  - to the login page

  */
  session_start();
  $caller_type = htmlspecialchars($_GET['callertype']);
  $min = 1000;
  $max = 9999;

  /* TODO: determine between which of the two statements will be most efficient.
  *1. exec('wget http://<url to the php script>')
  *2. include 'b.php';
  */
  $randomly_generated_number = random_int($min, $max);
  $page = '../../final_pwsd_reset.php';

  if($caller_type == "sms"){

    // Getting phone number for SMS.
    // TODO: Add phone number validator here, and display error message if provided number fails test.
    $phone_number = htmlspecialchars($_POST['phone_number']);

    $_SESSION['secret_random_pin'] = $randomly_generated_number;
    // echo $_SESSION['secret_random_pin'];
    // include statement.
    if(include __DIR__.'\send_sms.php'){
      // redirect to page reset page using header.
      header('Location: ' . $page);
    } else {
      // return error message.
    }

  }elseif ($caller_type == "email") {
    // Getting email addresses for email.
    // TODO: Add an email address validator here, and display error message if provided number fails test.
    $to = htmlspecialchars($_POST['email']);

    $_SESSION['secret_random_pin'] = $randomly_generated_number;
    $msg = "Generated random number is: " . $randomly_generated_number;

    // include statement.
    if(include __DIR__.'\send_email.php'){
      // redirect to page reset page using header.
      header('Location: ' . $page);
    }else {
      // return error message.
      $msg =  "Couldn't Run Email Script. Try Again In a Few Minutes";
      if  ($caller_type == "sms"){
        $page = "../../../password_reset_with_sms.php?msg=".$msg;
      }else{
        $page = "../../../password_reset_with_email.php?msg=".$msg;
      }
      header('Location: ' . $page);
    }

  }else{
    // TODO: Think of this usecase and how to account for this.
  }

?>
