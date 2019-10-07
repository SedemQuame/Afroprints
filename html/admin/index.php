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
      <p>Index Page &lt; Page for adding new products. &gt;</p>
      <!--
      Things to include.
      * Brand name
      * Brand description
      * Brand images
      * Item type
      * Item Price
      * Item category
      -->

      <div class="">
        <img src="holder.js/300x200">
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
          <input class="" type="file" id="" name="myfile" required>
        </div>
        <br>

        <div class="">
          <input class="btn btn-outline-secondary" type="submit" name="submit" value="Add Item">
        </div>
      </form>

      <br>
      <br>
      <p>Index Page &lt; Page for removing new products. &gt;</p>
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="card mb-4 shadow-sm">
            <!-- <img class="bd-placeholder-img card-img-top" src="../../AfricanPrintSite/africanfashion/tops/top%20(9).jpg" alt="" width="100%" height="225"> -->
            <img src="holder.js/335x250">
            <div class="card-body">
              <p class="card-text">Item Name</p>
              <p class="card-text">Item description</p>
              <div class="d-flex justify-content-between align-items-center">
                <form class="" action="" method="post">
                  <button type="button" class="openBtn btn btn-sm btn-outline-secondary">Delete Item</button>
                </form>
                <small class="text-muted">Ghc 76.74</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="card mb-4 shadow-sm">
            <!-- <img class="bd-placeholder-img card-img-top" src="../../AfricanPrintSite/africanfashion/tops/top%20(9).jpg" alt="" width="100%" height="225"> -->
            <img src="holder.js/335x250">
            <div class="card-body">
              <p class="card-text">Item Name</p>
              <p class="card-text">Item description</p>
              <div class="d-flex justify-content-between align-items-center">
                <form class="" action="" method="post">
                  <button type="button" class="openBtn btn btn-sm btn-outline-secondary">Delete Item</button>
                </form>
                <small class="text-muted">Ghc 76.74</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="card mb-4 shadow-sm">
            <!-- <img class="bd-placeholder-img card-img-top" src="../../AfricanPrintSite/africanfashion/tops/top%20(9).jpg" alt="" width="100%" height="225"> -->
            <img src="holder.js/335x250">
            <div class="card-body">
              <p class="card-text">Item Name</p>
              <p class="card-text">Item description</p>
              <div class="d-flex justify-content-between align-items-center">
                <form class="" action="" method="post">
                  <button type="button" class="openBtn btn btn-sm btn-outline-secondary">Delete Item</button>
                </form>
                <small class="text-muted">Ghc 76.74</small>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- JavaScript Frameworks and libraries. -->
    <script src="../../js/framework/holder.js" charset="utf-8"></script>
    <?php include '../../php/custom/included_pages/common_js.php'; ?>
    <script src="../../js/custom/modal.js" charset="utf-8"></script>
  </body>
</html>
