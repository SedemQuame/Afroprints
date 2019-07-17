<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta charset="UTF-8">
<head>
<title>Password Reset</title>
  <!--    StyleSheet links.-->
  <?php
    include '../php/custom/sessions.php';
    include '../php/custom/included_pages/common_styles.php';
  ?>
  <link rel="stylesheet" href="../css/custom/signup.css"/>
  <link rel="stylesheet" href="../css/custom/password_reset.css">
</head>
<body>
  <?php
      // Nav Bar.
      include '../php/custom/included_pages/nav.php';
  ?>

<!-- Password reset using email. -->
  <p class="login-page-header text-center"> Password Reset </p>
  <p class="text-center">
      Lorem ipsum dolor sit amet
                  <br>
      consectetur adipiscing elit, sed do eiusmodto
      <!-- replace with text header specifying  reset password link. -->
  </p>

  <form action="../php/custom/pwsd_reset.php?callertype=email" method="post" enctype="" class="">
    <!--This is the login page.-->
    <div>
        <label for="phone_number">Email</label>
        <br>
        <input class="form-control" name="email" type="email" id="phone_number" placeholder="Email Address">
    </div>

    <div>
        <input id="form-submit-btn"  class="btn btn-block" name="submit" type="submit" value="Submit">
    </div>

    <hr>

    <p class="text-center">
      Reset Password With <a href="password_reset_with_sms.php"> SMS </a> .
    </p>

  </form>


  <?php
      // Footer.
      include '../php/custom/included_pages/footer.php';
  ?>

  <!--JavaScript Files.-->
  <!-- Custom JavaScript Files. -->
  <script src="../js/custom/password_reset.js"></script>

  <!-- JavaScript Frameworks and libraries. -->
  <script src="../js/framework/holder.js" charset="utf-8"></script>
  </body>
</html>
