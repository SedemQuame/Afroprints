<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Thank You</title>
    <!--    StyleSheet links.-->
    <?php
      include '../php/custom/included_pages/meta_data.php';
      include '../php/custom/sessions.php';
      include '../php/custom/included_pages/common_styles.php';
    ?>
    <link rel="stylesheet" href="../css/custom/thank_you_page.css">
    <link rel="stylesheet" href="../css/custom/glitch.css">
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

        <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <div class="glitch-container">
      <div id="thank_you_text" class="glitch" data-text="Thank You.">Thank You.</div>
    </div>
    <br>
    <p id="call_to_action" class="text-center">Share What You Bought.</p>
    <br>
    <div class="addthis_inline_share_toolbox mx-auto"></div>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d851ed86afd3dce"></script>
    <script type="text/javascript">
    // TODO: Change this and make it a little bit more dynamic.
      var addthis_share = {
         url: "C:\\xampp\\htdocs\\AfricanPrintSite\\html\\index.php",
         title: "Sedem here.",
         description: "THE DESCRIPTION",
         media: "C:\\xampp\\htdocs\\AfricanPrintSite\\africanfashion\\tops\\top (5).jpg"
      }
    </script>
  </body>
</html>
