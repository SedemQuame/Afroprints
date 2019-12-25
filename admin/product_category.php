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
      <!-- <p>Product Categories Page
         this page, will allow the admins to view the various products,
         <br>and perform operations such as product deletions,
         <br> price updates, image changes
         (<?php // TODO: adding more images, in the future ?>).
         and other changes to product meta-data.
      </p> -->
      <?php
        if(isset($_GET['msg'])){
          if ($_GET['msg'] == "Item deletion, failed.") {
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
      <p>Products Page.</p>
      <table class="table table-striped">
        <thead class="thead-dark">
          <tr class="row">
            <th class="col-1 col-lg-1" scope="col">Id</th>
            <th class="col-2 col-lg-2" scope="col">Name</th>
            <th class="col-2 col-lg-2" scope="col">Description</th>
            <th class="col-2 col-lg-2" scope="col">Image</th>
            <th class="col-2 col-lg-2" scope="col">Category</th>
            <th class="col-1 col-lg-1" scope="col">Type</th>
            <th class="col-1 col-lg-1" scope="col">Price</th>
            <th class="col-1 col-lg-1" scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>

          <?php
            include '../php/custom/included_pages/db_connection.php';

            $sql = "SELECT brand_id, brand_name, brand_description, brand_image, brand_type, brand_price, brand_category
	                 FROM public.brand;";

           $stmt = $pdo->query($sql);
           $stocks = [];
           while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
             $stocks[] = [
              'id' => $row['brand_id'],
              'name' => $row['brand_name'],
              'description' => $row['brand_description'],
              'image' => $row['brand_image'],
              'type' => $row['brand_type'],
              'price' => $row['brand_price'],
              'category' => $row['brand_category']
            ];
           }

           $product = "";
           $count = 0;
           foreach ($stocks as $stock) {
            $count += 1;
            $product .= '<tr class="row">
                         <th class="col-1 col-lg-1" scope="row">'.$count.'</th>
                         <td class="col-2 col-lg-2">'.htmlspecialchars($stock['name']).'</td>
                         <td class="col-2 col-lg-2">'.htmlspecialchars($stock['description']).'</td>
                         <td class="col-2 col-lg-2">
                           <img class="admin_product_view" src="..\\'.htmlspecialchars($stock['image']).'" alt="product_iamge" />
                         </td>
                         <td class="col-2 col-lg-2">'.htmlspecialchars($stock['category']).'</td>
                         <td class="col-1 col-lg-1">'.htmlspecialchars($stock['type']).'</td>
                         <td class="col-1 col-lg-1">'.htmlspecialchars($stock['price']).'</td>
                         <td class="col-1 col-lg-1">
                           <form class="" action="../php/custom/delete_item_from_db.php" method="post">
                             <input class="btn btn-danger" type="submit" name="" value="Delete">
                             <input type="hidden" name="prdt_id" value="'.htmlspecialchars($stock['id']).'">
                           </form>
                         </td>
                         </tr>';
           }

           echo $product;
          ?>
        </tbody>
      </table>
    </div>
    <!-- JavaScript Frameworks and libraries. -->
    <?php include '../php/custom/included_pages/common_js.php'; ?>
    <script src="../js/custom/modal.js" charset="utf-8"></script>
    <script src="../js/custom/admin.js" charset="utf-8"></script>

    <!-- bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
