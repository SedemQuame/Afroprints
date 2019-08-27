<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Check Out</title>
    <?php
      include '../php/custom/included_pages/meta_data.php';
      include '../php/custom/sessions.php';
      include '../php/custom/included_pages/common_styles.php';
    ?>
    <link rel="stylesheet" href="../css/custom/checkout.css">
  </head>
  <body>
    <?php
        // Nav Bar.
        include '../php/custom/included_pages/nav.php';

        // Featured products.
        // TODO: Change the outlook of the index page, to look different from the other pages.
        // TODO: Let it feature other product types with extra saucy design and outlook.
        // TODO: Add minimalist and sophisticated animations to the various pages.
        // TODO: CREATE A CUSTOM LAYOUT FOR THE INDEX.PHP PAGE.
        // include '../php/custom/included_pages/featured_products.php';
    ?>
    
    <div class="container">
      <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                Billing Address.
              </button>
            </h2>
          </div>
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              <!-- Get user address and other information for shipping. -->
              <form class="" action="" method="">
                <!--This is the login page.-->
                <div class="row">
                  <div class="col-10 col-md-6">
                      <label for="first_name">First Name</label>
                      <br>
                      <input class="form-control" name="first_name" type="text" id="first_name" placeholder="First Name" required>
                  </div>

                  <div class="col-10 col-md-6">
                      <label for="last_name">Last Name</label>
                      <br>
                      <input class="form-control" name="last_name" type="text" id="last_name" placeholder="Last Name" required>
                  </div>
                </div>

                <div class="checkout_inputs">
                    <div>
                        <label for="address">Specific Address/Location (Fedex Shipping)</label>
                        <br>
                        <input class="form-control" name="address" type="text" id="address" placeholder="eg. CFAO main office, opposite Aviance. Airport by-pass road, Accra." required>
                        <input class="form-control" name="address_extra_info" type="text" id="address_extra_info" placeholder=" Enter a prominent landmark. (Optional) eg. Adjacent the Traditional Council Office." required>
                    </div>

                    <div>
                        <label for="locale">Town/City</label>
                        <br>
                        <input class="form-control" name="locale" type="text" id="locale" placeholder="" required>
                    </div>

                    <div>
                        <label for="phone_number">Phone Number (In international format.)</label>
                        <br>
                        <input class="form-control" name="phone_number" type="text" id="phone_number" placeholder="+23385946152" required>
                    </div>

                    <div>
                        <label for="email_address">Email Address</label>
                        <br>
                        <input class="form-control" name="email_address" type="text" id="email_address" placeholder="" required>
                    </div>

                    <div>
                        <label for="estimated_dev_date">Estimated Delivery Date</label>
                        <br>
                        <input class="form-control" name="estimated_dev_date" type="text" id="estimated_dev_date" placeholder="" required>
                    </div>

                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Shipping Address.
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              <div class="">
                <input type="checkbox" name="new_destination" value="">
                <label for="">Ship to different destination?</label>
              </div>
              <div class="row">
                <div class="col-10 col-md-6">
                    <label for="first_name">First Name</label>
                    <br>
                    <input class="form-control" name="first_name" type="text" id="first_name" placeholder="First Name" required>
                </div>

                <div class="col-10 col-md-6">
                    <label for="last_name">Last Name</label>
                    <br>
                    <input class="form-control" name="last_name" type="text" id="last_name" placeholder="Last Name" required>
                </div>
              </div>

              <div class="checkout_inputs">
                <div>
                    <label for="locale">Town/City</label>
                    <br>
                    <input class="form-control" name="locale" type="text" id="locale" placeholder="">
                </div>

                <div>
                    <label for="locale">Order Notes (Optional)</label>
                    <br>
                    <textarea class="form-control" name="name" rows="8" cols="80"></textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Do not remove this footer page and replace with included footer using .php file yet yet. -->
    <?php
        // TODO: Must fix the positioning of the footer to work universally in all templates.
        // Footer.
        // include '../php/custom/included_pages/footer.php';
    ?>


    <!--JavaScript Files.-->
    <!-- Custom JavaScript Files. -->
    <script src="../js/custom/index.js"></script>

    <!-- JavaScript Frameworks and libraries. -->
    <?php include '../php/custom/included_pages/common_js.php'; ?>

    <script type="text/javascript">
      $('#collapseTwo').collapse({
        toggle: false
      })

      $('#collapseTwo').collapse({
        toggle: false
      })
    </script>
  </body>
</html>
