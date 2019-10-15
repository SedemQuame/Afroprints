<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta charset="UTF-8">
<head>
<title>Password Reset</title>
  <!--    StyleSheet links.-->
  <?php
    include 'php/custom/sessions.php';
    include 'php/custom/included_pages/common_styles.php';
  ?>
  <link rel="stylesheet" href="css/custom/signup.css"/>
  <link rel="stylesheet" href="css/custom/password_reset.css">
</head>
<body>
  <?php
      // Nav Bar.
      include 'php/custom/included_pages/nav.php';
  ?>

  <?php
    if(isset($_GET['msg'])){
      echo '
      <div id="error-alert" class="alert alert-danger text-center" role="alert">
        '. $_GET['msg'] .'
      </div>
      ';
    }
  ?>

<!-- Password reset using sms. -->
<p class="sign-up-page-header login-page-header text-center"> Password Reset </p>
<p class="text-center">
    Enter your email address<br />
    To get a reset link.
    <!-- replace with text header specifying  reset password link. -->
</p>

<div class="row">
  <form action="php/custom/pwsd_reset.php?callertype=sms" method="post" enctype="" class="col-9 col-md-6 col-lg-3">
    <!--This is the login page.-->
    <div>
        <label for="phone_number">Phone number</label>
        <br>
        <input class="form-control" name="phone_number" type="text" id="phone_number" placeholder="Phone number">
    </div>

    <div>
        <input id="form-submit-btn"  class="btn btn-block" name="submit" type="submit" value="Submit">
    </div>

    <hr>

    <p class="text-center">
      Reset Password With <a href="password_reset_with_email.php"> Email </a> .
    </p>

  </form>
</div>


  <?php
      // Footer.
      include 'php/custom/included_pages/footer.php';
  ?>

  <!--JavaScript Files.-->
  <!-- Custom JavaScript Files. -->
  <script src="js/custom/password_reset.js"></script>

  <!-- JavaScript Frameworks and libraries. -->
  <script src="js/framework/holder.js" charset="utf-8"></script>

  <!-- JavaScript Frameworks and libraries. -->
  <?php include 'php/custom/included_pages/common_js.php'; ?>
  <script src="js/custom/modal.js" charset="utf-8"></script>
  </body>
</html>
