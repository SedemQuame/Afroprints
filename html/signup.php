<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign up</title>
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

  <p class="sign-up-page-header text-center"> Sign Up </p>
  <p class="text-center">
    Lorem ipsum dolor sit amet
                <br>
    consectetur adipiscing elit, sed do eiusmod
                <br>
    tempor incididunt ut labore et dolore magna aliqua.
  </p>

  <form action="" method="post" enctype="" class="">
      <div>
          <label for="first_name">First Name</label>
          <br>
          <input class="form-control" name="text" type="text" id="first_name" class="" placeholder="First Name">
      </div>

      <div>
          <label for="last_name">Last Name</label>
          <br>
          <input class="form-control" name="last_name" type="text" id="last_name" class="" placeholder="Last name">
      </div>

      <div>
          <label for="email_address">Email Address</label>
          <br>
          <input class="form-control" name="email_address" type="text" id="email_address" class="" placeholder="Email Address">
      </div>

      <div>
          <label for="users_country">Country</label>
          <br>
          <input class="form-control" name="users_country" type="text" id="users_country" class="" placeholder="Country">
      </div>

      <div>
          <label for="phone_number">Phone number</label>
          <br>
          <input class="form-control" name="phone_number" type="tel" id="phone_number" class="" placeholder="Phone Number">
      </div>

      <div>
          <label for="user_password">Password</label>
          <br>
          <input class="form-control" name="password" type="password" id="user_password" class="" placeholder="Password">
      </div>

      <div>
          <label for="user_password_confirmation">Confirm Password</label>
          <br>
          <input class="form-control" name="password" type="password" id="user_password_confirmation" class="" placeholder="Confirm Password">
      </div>

      <div>
          <input id="form-submit-btn" class="btn btn-block" name="submit" type="submit" id="submit_btn" class="" value="Submit">
      </div>

      <hr>

      <p class="text-center">
        Already a registered user?
                  <br>
        <a href="login.php">Log In</a>
      </p>

  </form>


  <?php
      // Footer
      include '../php/custom/included_pages/footer.php';
  ?>

  <!--JavaScript Files.-->
  <!-- Custom JavaScript Files. -->
  <script src="../js/custom/signup.js"></script>
</body>
</html>
