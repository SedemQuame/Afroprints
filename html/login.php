<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!--    Stylesheets.-->
    <?php
      include '../php/custom/sessions.php';
      include '../php/custom/included_pages/common_styles.php';
    ?>
    <link rel="stylesheet" href="../css/custom/signup.css"/>
</head>
<body>
  <?php
      // Nav Bar.
      include '../php/custom/included_pages/nav.php';
  ?>

  <p class="sign-up-page-header text-center"> Log In </p>
  <p class="text-center">
      Enter your login credentials
      <br>
      to get access to your account.
  </p>


  <div class="row">
    <form action="../php/custom/loginScript.php" method="post" enctype="" class="col-9 col-md-6 col-lg-3">
      <!--This is the login page.-->
      <div>
          <label for="email_address">Email Address</label>
          <br>
          <input class="form-control" name="email" type="text" id="email_address" placeholder="Email Address" required>
      </div>

      <div>
          <label for="user_password">Password</label>
          <br>
          <input class="form-control" name="password" type="password" id="user_password" placeholder="Password" required>
      </div>

      <div>
          <input id="form-submit-btn"  class="btn btn-block" name="submit" type="submit" value="Submit">
      </div>

      <hr>

      <p class="text-center">
        Haven't got an account?
                <br>
        <a href="signup.php">Sign up</a>
      </p>

      <hr>

      <p class="text-center">
        Reset Password with <a href="password_reset_with_sms.php">SMS</a> or <a href="password_reset_with_email.php">Email</a>.
      </p>

    </form>
  </div>


  <?php
      // Footer.
      include '../php/custom/included_pages/footer.php';
  ?>

  <!--JavaScript Files.-->
  <!-- Custom JavaScript Files. -->
  <script src="../js/custom/login.js"></script>
  
  <!-- JavaScript Frameworks and libraries. -->
  <?php include '../php/custom/included_pages/common_js.php'; ?>
  <script src="../js/custom/modal.js" charset="utf-8"></script>
</body>
</html>
