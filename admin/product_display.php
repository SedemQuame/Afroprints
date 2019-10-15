<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!--    StyleSheet links.-->
    <?php
      include '../php/custom/included_pages/meta_data.php';
      include '../php/custom/sessions.php';
      include '../php/custom/included_pages/admin_common_styles.php';
    ?>
    <link rel="stylesheet" href="../css/custom/admin_index.css">
    <link rel="stylesheet" href="../css/custom/index.css">
  </head>
  <body class="row">
    <div class="col-2 col-md-3 pane">
      <?php include '../php/custom/included_pages/admin_dashboard.php'; ?>
    </div>

    <div class="col-10 col-md-9 dashboard">
      <!-- Place various, tabs here. -->
      <p>Product Display Page.</p>
    </div>
    <!-- JavaScript Frameworks and libraries. -->
    <?php include '../php/custom/included_pages/common_js.php'; ?>
    <script src="../js/custom/modal.js" charset="utf-8"></script>
  </body>
</html>
