<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Password Reset</title>
    <!--    StyleSheet links.-->
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

    <p class="login-page-header text-center">Reset Password</p>
    <p class="text-center">
        Lorem ipsum dolor sit amet
                    <br>
        consectetur adipiscing elit, sed do eiusmod
                    <br>
        tempor incididunt ut labore et dolore magna aliqua.
    </p>


    <form action="" method="post" enctype="" class="">
      <div>
          <label for="reset_pin">Reset Pin</label>
          <br>
          <input class="form-control" name="reset_pin" type="text" id="reset_pin" placeholder="Reset Pin">
      </div>

      <div>
          <label for="new_password">New Password</label>
          <br>
          <input class="form-control" name="new_password" type="password" id="new_password" placeholder="New Password">
      </div>

      <div>
          <label for="confirm_new_password">Confirm Password</label>
          <br>
          <input class="form-control" name="confirm_new_password" type="password" id="confirm_new_password" placeholder="Confirm Password">
      </div>

      <div>
          <input id="form-submit-btn"  class="btn btn-block" name="submit_reset_pin" type="submit" value="Submit">
      </div>
    </form>

  </body>
</html>
