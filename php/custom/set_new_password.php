<?php
  if (isset($_GET['reset_pin'])) {
    $reset_pin = htmlspecialchars($_GET['reset_pin']);
    $new_password = htmlspecialchars($_GET['new_password']);
    $confirm_new_password = htmlspecialchars($_GET['confirm_new_password']);

    // Checking if reset_pin matches random number generated and stored in sessions.
    if ($reset_pin == $_SESSION['secret_random_pin']) {
      // TODO: Update password in database.
      // TODO: Log user unto page or redirect to login page. READ: Best practices to choose.
    }
  } else {
    // Return error message.
  }

?>
