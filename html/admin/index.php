<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!--    StyleSheet links.-->
    <?php
      include '../../php/custom/included_pages/meta_data.php';
      include '../../php/custom/sessions.php';
      include '../../php/custom/included_pages/admin_common_styles.php';
    ?>
    <link rel="stylesheet" href="../../css/custom/admin_index.css">
    <link rel="stylesheet" href="../../css/custom/index.css">
  </head>
  <body class="row">
    <div class="col-2 col-md-3 pane">
      <?php include '../../php/custom/included_pages/admin_dashboard.php'; ?>
    </div>

    <div class="col-10 col-md-9 dashboard">
      <?php
        if(isset($_GET['msg'])){
          if ($_GET['msg'] == "An error occurred somewhere. Try again") {
            echo '
            <div id="error-alert" class="alert alert-danger text-center" role="alert">
              '. $_GET['msg'] .'
            </div>
            ';
          } else {
            echo '
            <div id="error-alert" class="alert alert-success text-center" role="alert">
              '. $_GET['msg'] .'
            </div>
            ';
          }
        }
      ?>

      <!-- Place various, tabs here. -->
      <!-- <p>Index Page &lt; Page for adding new products. &gt;</p> -->
      <div class="item_form_submission">
        <div class="">
          <img id="img_element" src="holder.js/300x200" alt="">
        </div>

        <form action="../../php/custom/upload_items.php" method="post" enctype="multipart/form-data">
          <div class="">
            <label for="">Item Name </label>
            <input class="form-control" type="text" id="" name="item_name" required>
          </div>

          <div class="">
            <label for="">Item Price </label>
            <input class="form-control" type="text" id="" name="item_price" required>
          </div>

          <div class="">
            <label for="">Item Type </label>
            <select class="custom-select" id="" name="item_type" required>
              <option selected>Open this select menu</option>
              <option value="tops">Tops</option>
              <option value="shoes">Shoes</option>
              <option value="bags">Bags</option>
              <option value="accessories">Accessories</option>
            </select>
          </div>

          <div class="">
            <label for="">Item Category </label>
            <select class="custom-select" id="" name="item_category" required>
              <option selected>Open this select menu</option>
              <option value="men">Men</option>
              <option value="women">Women</option>
              <option value="kids">Kids</option>
            </select>
          </div>

          <div class="">
            <label for="">Item Description </label>
            <input class="form-control" type="text" id="" name="item_description" required>
          </div>

          <div class="">
            <label for="">Image Uploads </label>
            <br>
            <input class="" id="image_upload" type="file" name="myfile" required>
          </div>
          <br>

          <div class="">
            <input class="btn btn-outline-secondary btn-block" type="submit" name="submit" value="Add Item">
          </div>
        </form>
      </div>
      <br>
    </div>
    <!-- JavaScript Frameworks and libraries. -->
    <script src="../../js/framework/holder.js" charset="utf-8"></script>
    <?php include '../../php/custom/included_pages/common_js.php'; ?>
    <script src="../../js/custom/modal.js" charset="utf-8"></script>
    <script src="../../js/custom/admin.js" charset="utf-8"></script>
  </body>
</html>
