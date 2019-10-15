<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!--    StyleSheet links.-->
    <?php
      include 'php/custom/sessions.php';
      include 'php/custom/included_pages/common_styles.php';
    ?>
    <link rel="stylesheet" href="css/custom/help.css">
</head>
<body>
  <?php
      // Nav Bar.
      include 'php/custom/included_pages/nav.php';
  ?>

  <div class="row">
    <!-- Enter help text here. -->
  </div>

  <?php
      // Footer.
      include 'php/custom/included_pages/footer.php';
  ?>

  <!--JavaScript Files.-->
  <script src="js/custom/help.js"></script>

  <!-- JavaScript Frameworks and libraries. -->
  <?php include 'php/custom/included_pages/common_js.php'; ?>
  <script src="js/custom/modal.js" charset="utf-8"></script>
</body>
</html>
