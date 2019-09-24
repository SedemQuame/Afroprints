<?php
  // This page implements simple sessions.
  // =====================================

  /*USE SCRIPT TO ACKNOWLEDGE NEW VISITORS, AND WELCOME THEM.
  *==========================================================
  */

  session_start();

// Create visits SESSION if it exists.
  if (!isset($_SESSION['visits'])) {
    // Create a new visits session.
    $_SESSION['visits'] = 0;
  }

  // Check if visits was set.
  $bool = $_SESSION['visits'] > 1;
  if (!$bool) {
    // welcome new user.
    // TODO: Change static text and substitute it with something fancy and more informative.
    echo "<p class='text-center'>WELCOME NEW USER. WE'RE PROUD TO HAVE YOU!!!</p>";
  }
  $_SESSION['visits'] = $_SESSION['visits'] + 1;
?>
