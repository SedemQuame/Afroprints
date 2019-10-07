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
      <!-- Place various, tabs here. -->
      <p>Product Categories Page
         this page, will allow the admins to view the various products,
         and perform operations such as product deletions, price updates, image changes
         (<?php // TODO: adding more images, in the future ?>).
         and other changes to product meta-data.
      </p>
      <p>Orders Page.</p>
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

          <?php // TODO:
            /*
            *Connect to the database.
            *Get product, details from the databae an populate them, in here.
            *
            */

            include '../../php/custom/included_pages/db_connection.php';

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
           foreach ($stocks as $stock) {

            $product .= '<tr class="row">
                         <th class="col-1 col-lg-1" scope="row">'."1".'</th>
                         <td class="col-2 col-lg-2">'.htmlspecialchars($stock['name']).'</td>
                         <td class="col-2 col-lg-2">'.htmlspecialchars($stock['description']).'</td>
                         <td class="col-2 col-lg-2">'.htmlspecialchars($stock['image']).'</td>
                         <td class="col-2 col-lg-2">'.htmlspecialchars($stock['category']).'</td>
                         <td class="col-1 col-lg-1">'.htmlspecialchars($stock['type']).'</td>
                         <td class="col-1 col-lg-1">'.htmlspecialchars($stock['price']).'</td>
                         <td class="col-1 col-lg-1">
                           <form class="" action="../../php/custom/php/custom/delete_item_from_db.php" method="post">
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
    <?php include '../../php/custom/included_pages/common_js.php'; ?>
    <script src="../../js/custom/modal.js" charset="utf-8"></script>
  </body>
</html>
