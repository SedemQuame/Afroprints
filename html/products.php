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

            // echo '<p class=""> ' . $page_name . ' </p>';

            echo '<!-- List of contents pertaining to a given product category. -->';

            include '../php/custom/included_pages/featured_products.php';
        ?>



        <?php
            // Footer.
            include '../php/custom/included_pages/footer.php';
        ?>

        <!--JavaScript Files.-->
        <!-- Custom JavaScript Files. -->
        <script src="../js/custom/products.js"></script>


        <!-- JavaScript Frameworks and libraries. -->
        <script src="../js/framework/holder.js" charset="utf-8"></script>
  </body>
</html>
