<?php

  // starting sessions.
  session_start();

  // Get all info from final_pwsd_reset pages.
  $pin = $_POST['reset_pin'];
  $password = $_POST['new_password'];
  $_POST['confirm_new_password'];

  // Perform checks on submitted pin.
  $generated_number = $_SESSION['secret_random_pin'];

  if($pin == $generated_number){
    echo "success";
    // TODO:
    /*
    * -Run database mini script to change the given users, credentials i.e passwords.
    */
    // -Redirect user to login page.
    $page = '../../html/login.php';
    header('Location: ' . $page);
  }else{
    echo "failure";
    echo "\nrandom text is: " . $generated_number;
  }
?>
