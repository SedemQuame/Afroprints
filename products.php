<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!--    StyleSheet links.-->
    <?php
      // include 'php/custom/sessions.php';
      include 'php/custom/included_pages/common_styles.php';
    ?>
    <link rel="stylesheet" href="css/framework/animate.css">
    <link rel="stylesheet" href="css/custom/products.css">
    <link rel="stylesheet" href="css/custom/index.css">

  </head>
  <body>
    <?php
        // Nav Bar.
        include 'php/custom/included_pages/nav.php';
        $page_name = $_GET['item'];
        // Features_products.php
        include 'php/custom/included_pages/featured_products.php';
    ?>

    <?php
        // Footer.
        include 'php/custom/included_pages/footer.php';
    ?>


    <!-- Modal box for the dsiplaying selected items. -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog modal-dialog-scrollable modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title modal-header-text">Afriprints Collections.</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
              </div>
          </div>
      </div>
    </div>

    <!-- Container for message notifications. -->
    <div id="notification-pane"></div>

    <!--JavaScript Files.-->
    <!-- JavaScript Frameworks and libraries. -->
    <?php include 'php/custom/included_pages/common_js.php'; ?>
    <!-- Custom JavaScript Files. -->
    <script src="js/custom/cart.js" charset="utf-8"></script>
    <script src="js/custom/modal.js" charset="utf-8"></script>
  </body>
</html>
