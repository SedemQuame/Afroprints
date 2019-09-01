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
    ?>

    <div class="container" id="checkout">
      <div class="accordion" id="accordionExample">
        <form class="" action="../php/custom/included_pages/checkout_processor.php" method="post">
          <div class="card">
            <div class="card-header checkout-headers" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-field collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  Billing Address.
                </button>
              </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <!-- Get user address and other information for shipping. -->
                  <!--This is the login page.-->
                  <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="first_name">First Name</label>
                        <br>
                        <input class="form-control" name="first_name" type="text" id="first_name" placeholder="First Name" required>
                    </div>

                    <div class="col-12 col-md-6">
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
                          <div class="row">
                            <div class="col-3 phone_part">
                              <input class="form-control" name="format" type="text" id="phone_format" placeholder="+233" required>
                            </div>
                            <div class="col-9 phone_part">
                              <input class="form-control" name="phone_number" type="text" id="phone_number" placeholder="85946152" required>
                            </div>
                          </div>
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
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header checkout-headers" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-field collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Shipping Address.
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <div class="">
                  <input type="checkbox" name="new_destination" id="diff_shipping_destination" onclick="toogleDisablility()" value="">
                  <label for="">Ship to different destination?</label>
                </div>
                <div class="row">
                  <div class="col-10 col-md-6">
                      <label for="first_name">First Name</label>
                      <br>
                      <input class="form-control" name="diff_first_name" type="text" id="diff_first_name" placeholder="First Name" disabled>
                  </div>

                  <div class="col-10 col-md-6">
                      <label for="last_name">Last Name</label>
                      <br>
                      <input class="form-control" name="diff_last_name" type="text" id="diff_last_name" placeholder="Last Name" disabled>
                  </div>
                </div>

                <div class="checkout_inputs">
                  <div>
                      <label for="locale">Town/City</label>
                      <br>
                      <input class="form-control" name="diff_locale" type="text" id="diff_locale" placeholder="" disabled>
                  </div>

                  <div>
                      <label for="locale">Order Notes (Optional)</label>
                      <br>
                      <textarea class="form-control" name="optional_notes" rows="8" cols="80" id="diff_optional_notes" disabled></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header checkout-headers" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-field collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Check Out Review.
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <!-- Show all acquired information, in a representable formatted form. -->
                

                <!-- Order Submit Button. -->
                <input class="btn btn-outline-secondary float-right" type="submit" name="processOrderBtn" value="Process Order">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- Do not remove this footer page and replace with included footer using .php file yet. -->
    <?php
        // TODO: Must fix the positioning of the footer to work universally in all templates.
        // Footer.
        include '../php/custom/included_pages/footer.php';
    ?>

    <!--JavaScript Files.-->
    <!-- Custom JavaScript Files. -->
    <script src="../js/custom/index.js"></script>

    <!-- JavaScript Frameworks and libraries. -->
    <?php include '../php/custom/included_pages/common_js.php'; ?>

    <script type="text/javascript">
      $('#collapseOne').collapse({
        toggle: false
      })

      $('#collapseTwo').collapse({
        toggle: false
      });

      $('#collapseThree').collapse({
        toggle: false
      });

      function toogleDisablility(){
        console.log("Toogling Disability. High level abstraction.");
        let checked_input = document.getElementById('diff_shipping_destination');
    
        let diff_first_name = document.getElementById('diff_first_name');

        let diff_last_name = document.getElementById('diff_last_name');
        
        let diff_town = document.getElementById('diff_locale');
        
        let diff_order_notes = document.getElementById('diff_optional_notes');

        if(checked_input.checked){
          diff_first_name.disabled = false;
          diff_last_name.disabled = false;
          diff_town.disabled = false;
          diff_order_notes.disabled = false;
        }else{
          diff_first_name.disabled = true;
          diff_first_name.value = "";

          diff_last_name.disabled = true;
          diff_last_name.value = "";

          diff_town.disabled = true;
          diff_town.disabled.value = "";

          diff_order_notes.disabled = true;
          diff_order_notes.value = "";
        }

      }
    </script>
  </body>
</html>
