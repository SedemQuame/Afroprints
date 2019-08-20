<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Title</title>
    <!--    StyleSheet links.-->
    <?php
      include '../php/custom/included_pages/meta_data.php';
      include '../php/custom/sessions.php';
      include '../php/custom/included_pages/common_styles.php';
    ?>
    <!-- Custom Style Sheets. -->
    <link rel="stylesheet" href="../css/custom/cart.css">
</head>
<body>
    <?php
        // Nav Bar.
        include '../php/custom/included_pages/nav.php';
    ?>


    <div class="container">

          <caption>Shopping cart.</caption>
          <table class="table table-hover table-responsive-sm">

            <thead class="thead-light">
              <tr>
                <th class="table-items" scope="col">Items</th>
                <th class="table-price" scope="col">Price</th>
                <th class="table-quantity" scope="col">Quantity</th>
                <th class="table-total" scope="col">Total</th>
                <th class="remove" scope="col">Remove</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td class="table-items">Item 1</td>
                <td class="table-price">Ghc 250.00</td>
                <td class="table-quantity">3</td>
                <td class="table-total">Ghc 750.00</td>
                <td class="remove"></td>
              </tr>

              <tr>
                <td class="table-items">Item 2</td>
                <td class="table-price">Ghc 180.00</td>
                <td class="table-quantity">2</td>
                <td class="table-total">Ghc 360.00</td>
                <td class="remove"></td>
              </tr>

              <tr>
                <td class="table-items">Item 3</td>
                <td class="table-price">Ghc 280.00</td>
                <td class="table-quantity">6</td>
                <td class="table-total">Ghc 1680.00</td>
                <td class="remove"></td>
              </tr>

              <tr>
                <td class="table-items">Item 2</td>
                <td class="table-price">Ghc 180.00</td>
                <td class="table-quantity">2</td>
                <td class="table-total">Ghc 360.00</td>
                <td class="remove"></td>
              </tr>

              <tr>
                <td class="table-items">Item 3</td>
                <td class="table-price">Ghc 280.00</td>
                <td class="table-quantity">6</td>
                <td class="table-total">Ghc 1680.00</td>
                <td class="remove"></td>
              </tr>

            </tbody>


            <tfoot>
              <tr class="table-footer">
                <td colspan="2"></td>
                <th class="text-center">Total</th>
                <th class="text-center">Ghc 2790.00</th>
                <td></td>
              </tr>
            </tfoot>
          </table>

    </div>

















    <!-- Do not remove this footer page and replace with included footer using .php file yet yet. -->
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
    <script src="../js/custom/modal.js" charset="utf-8"></script>
</body>
  </body>
</html>
