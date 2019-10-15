<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      Thank You
    </title>
    <!-- Customize, head sub elements to be SEO compliant. -->
    <!--    StyleSheet links.-->
    <?php
      include 'php/custom/included_pages/meta_data.php';
      include 'php/custom/sessions.php';
      include 'php/custom/included_pages/common_styles.php';
    ?>
    <link rel="stylesheet" href="css/custom/thank_you_page.css">
    <link rel="stylesheet" href="css/custom/glitch.css">
  </head>
  <body>
    <?php
        // Nav Bar.
        include 'php/custom/included_pages/nav.php';
    ?>
    <div class="glitch-container">
      <div id="thank_you_text" class="glitch" data-text="Thank You.">Thank You.</div>
    </div>
    <br>
    <p id="call_to_action" class="text-center">Share What You Bought.</p>
    <br>

    <!-- data-url, is the url that shows a link to the page in question. -->
    <div class="addthis_inline_share_toolbox mx-auto" data-url="https://onezero.medium.com/could-a-robot-have-a-mystical-experience-10fa374c3f86"
      data-description="THE DESCRIPTION" data-media="C:\\xampp\\htdocs\\AfricanPrintSite\\africanfashion\\tops\\top (6).jpg">
    </div>

    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d851ed86afd3dce"></script>

    <!-- JavaScript Frameworks and libraries. -->
    <?php include 'php/custom/included_pages/common_js.php'; ?>
    <script src="js/custom/modal.js" charset="utf-8"></script>
  </body>
</html>
