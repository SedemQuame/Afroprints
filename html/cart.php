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

          if(!isset($_SESSION['cart-items'])){
            // Show empty message and encourage, users to shop.
            echo '<div class="style-caption"><p class="lead">Shopping cart.</p></div>
                  <div class="empty-cart">
                    <img src="../media/images/cart.svg" alt="cart-image" height="170vh" width="170vw">
                    <p class="lead empty-cart-text">Empty Cart</p>
                  </div>';
          }else{
            $cart_items = $_SESSION['cart-items'];

            if(empty($cart_items)){
              echo '<div class="style-caption"><p class="lead">Shopping cart.</p></div>
                    <div class="empty-cart">
                      <img src="../media/images/cart.svg" alt="cart-image" height="170vh" width="170vw">
                      <p class="lead empty-cart-text">Empty Cart</p>
                    </div>';
            } else{

              $placeholder = "";
              foreach ($cart_items as $value) {
                $placeholder .= $value.",";
              }
              $placeholder = trim($placeholder, ',');

              $sql = "SELECT * FROM brand WHERE brand_id in ($placeholder);";

              $stmt = $pdo->prepare($sql);
              $stmt->execute();
              $stmt = $stmt->fetchAll();

              $total = 0;

              $element = '<div class="style-caption"><p class="lead">Shopping cart.</p></div>

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

                            <tbody>';

              if ($stmt !== null){
                foreach ($stmt as $row) {
                  $element .= '<tr>
                                  <td class="table-items">'.$row['brand_name'].'</td>
                                  <td class="table-price">Ghc '.$row['brand_price'].'</td>
                                  <td class="table-quantity">1</td>
                                  <td class="table-total">Ghc '.($row['brand_price']*1).'</td>
                                  <td class="remove">
                                    <form class="" action="../php/custom/cart-processor.php?action=remove&item_id='.$row['brand_id'].'" method="post">
                                      <button class="btn remove-btn" type="submit" name="button">
                                       <img src="../media/images/dustbin.png" alt="remove-item" width="32px" height="32px">
                                      </button>
                                    </form>
                                  </td>
                                </tr>';
                  $total += $row['brand_price'];
                }

              $element .= '</tbody>
                            <tfoot>
                              <tr class="table-footer">
                                <td colspan="2"></td>
                                <th class="text-center">Total</th>
                                <th class="text-center">Ghc ';

            $element .= $total;

             $element .=  '</th>
                                <td class="remove clear-btn-container">
                                   <form class="remove-all-form" action="../php/custom/cart-processor.php?action=remove_all" method="post">
                                     <button class="btn cart-remove-button" type="submit" name="button">Clear Cart</button>
                                   </form>
                                </td>
                              </tr>
                            </tfoot>
                          </table>';
            }

            echo $element;
          }




          }

          ?>


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
