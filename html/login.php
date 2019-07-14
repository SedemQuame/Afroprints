<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!--    Stylesheets.-->
    <?php
      include '../php/custom/included_pages/common_styles.php';
    ?>
    <link rel="stylesheet" href="../css/custom/signup.css"/>
</head>
<body>
  <?php
      // Nav Bar.
      include '../php/custom/included_pages/nav.php';
  ?>

  <p class="login-page-header text-center"> Log In </p>
  <p class="text-center">
      Lorem ipsum dolor sit amet
                  <br>
      consectetur adipiscing elit, sed do eiusmod
                  <br>
      tempor incididunt ut labore et dolore magna aliqua.
  </p>


  <form action="" method="post" enctype="" class="">
    <!--This is the login page.-->
    <div>
        <label for="email_address">Email Address</label>
        <br>
        <input class="form-control" name="email" type="text" id="email_address" placeholder="Email Address">
    </div>

    <div>
        <label for="user_password">Password</label>
        <br>
        <input class="form-control" name="password" type="password" id="user_password" placeholder="Password">
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

  </form>


  <?php
      // Footer.
      include '../php/custom/included_pages/footer.php';
  ?>

  <!--JavaScript Files.-->
  <!-- Custom JavaScript Files. -->
  <script src="../js/custom/login.js"></script>
</body>
</html>
