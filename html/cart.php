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
          <?php
            // Get array from sessions iterate through array and display
            // in table along with price and other meta data.

            include '../php/custom/included_pages/db_connection.php';
            $cart_items = $_SESSION['cart-items'];

            $placeholder = "";
            foreach ($cart_items as $value) {
              $placeholder .= $value.",";
            }
            $placeholder = trim($placeholder, ',');

            $sql = "SELECT * FROM brand WHERE brand_id in ($placeholder);";

            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $stmt = $stmt->fetchAll();

          ?>
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
              <?php
              $element = "";
              $total = 0;
              foreach ($stmt as $row) {
                $element .= '<tr>
                                <td class="table-items">'.$row['brand_name'].'</td>
                                <td class="table-price">Ghc '.$row['brand_price'].'</td>
                                <td class="table-quantity">1</td>
                                <td class="table-total">Ghc'.($row['brand_price']*1).'</td>
                                <td class="remove"> <button class="btn" type="button" name="button"> <img src="../media/images/dustbin.png" alt="remove-item" width="32px" height="32px"> </button> </td>
                              </tr>';
                $total += $row['brand_price'];
              }

              echo $element;
              ?>
            </tbody>
            <tfoot>
              <tr class="table-footer">
                <td colspan="2"></td>
                <th class="text-center">Total</th>
                <th class="text-center"><?php echo 'Ghc ' . $total ?></th>
                <td class="remove clear-btn-container"> <button class="btn btn-primary" type="button" name="button">Clear Cart</button> </td>
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
