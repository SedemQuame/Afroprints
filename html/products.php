<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!--    StyleSheet links.-->
    <?php
      include '../php/custom/sessions.php';
      include '../php/custom/included_pages/common_styles.php';
    ?>
    <link rel="stylesheet" href="../css/custom/products.css">
    <link rel="stylesheet" href="../css/custom/index.css">
  </head>
  <body>
        <?php
            // Nav Bar.
            include '../php/custom/included_pages/nav.php';

            $page_name = $_GET['item'];

            echo '<p class=""> ' . $page_name . ' </p>';

            echo '<!-- List of contents pertaining to a given product category. -->';

            include '../php/custom/included_pages/featured_products.php';
        ?>

        <?php
            // Footer.
            include '../php/custom/included_pages/footer.php';
        ?>

        <!-- Modal box for the dsiplaying selected items. -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog modal-lg">
              <!-- Modal content-->
              <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title">Modal with Dynamic Content</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
              </div>
          </div>
        </div>

        <!--JavaScript Files.-->
        <!-- Custom JavaScript Files. -->
        <script src="../js/custom/products.js"></script>
        <script src="../js/custom/cart.js" charset="utf-8"></script>

        <!-- JavaScript Frameworks and libraries. -->
        <?php include '../php/custom/included_pages/common_js.php'; ?>

        <script src="../js/custom/modal.js" charset="utf-8"></script>
  </body>
</html>
