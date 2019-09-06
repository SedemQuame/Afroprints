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
    <div class="glitch-container">
      <div class="glitch" data-text="Thank You.">Thank You.</div>
    </div>
    <p id="call_to_action" class="text-center">
      Share What You Bought <br>
      On <br>
      Social Media.
    </p>
  </body>
</html>
