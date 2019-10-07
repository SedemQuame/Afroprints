<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!--    StyleSheet links.-->
    <?php
      include '../../php/custom/included_pages/meta_data.php';
      // include '../../php/custom/sessions.php';
      include '../../php/custom/included_pages/admin_common_styles.php';
    ?>
    <link rel="stylesheet" href="../../css/custom/admin_index.css">
    <!-- <link rel="stylesheet" href="../../css/custom/index.css"> -->
  </head>
  <body class="row">
    <div class="col-2 col-md-3 pane">
      <?php include '../../php/custom/included_pages/admin_dashboard.php'; ?>
    </div>

    <div class="col-10 col-md-9 dashboard">
      <!-- Place various, tabs here. -->
      <p>Orders Page.</p>
      <table class="table table-striped">
        <thead class="thead-dark">
          <tr class="row">
            <th class="col-1 col-lg-1" scope="col">Order Id</th>
            <th class="col-4 col-lg-4" scope="col">Customer Info</th>
            <th class="col-3 col-lg-3" scope="col">Order Info</th>
            <th class="col-1 col-lg-1" scope="col">Payment Mode</th>
            <th class="col-1 col-lg-1" scope="col">Status</th>
            <th class="col-2 col-lg-2" scope="col">Order FulFilled</th>
          </tr>
        </thead>
        <tbody>
          <tr class="row">
            <th class="col-1 col-lg-1" scope="row">1</th>
            <td class="col-4 col-lg-4">
              <ul>
                <li class="text-left">Customer Name</li>
                <li class="text-left">Customer Email</li>
                <li class="text-left">Customer Phone Number</li>
                <li class="text-left">Customer Postal Address</li>
                <li class="text-left">Customer Shipping Address</li>
              </ul>
            </td>
            <td class="col-3 col-lg-3">
              <ul>
                <li class="text-left">Product ID</li>
                <li class="text-left">Product Name(s)</li>
                <li class="text-left">Product Quantity</li>

              </ul>
            </td>
            <td class="col-1 col-lg-1">Credit Card</td>
            <td class="col-1 col-lg-1">Pending</td>
            <td class="col-2 col-lg-2">
              <form class="" action="index.html" method="post">
                <label for="">Order FulFilled</label>
                <!-- Set Value to be the order id of the given field. -->
                <input type="checkbox" name="" value="fulfilled">
              </form>
            </td>
          </tr>
          <tr class="row">
            <th class="col-1 col-lg-1" scope="row">2</th>
            <td class="col-4 col-lg-4">
              <ul>
                <li class="text-left">Customer Name</li>
                <li class="text-left">Customer Email</li>
                <li class="text-left">Customer Phone Number</li>
                <li class="text-left">Customer Postal Address</li>
                <li class="text-left">Customer Shipping Address</li>
              </ul>
            </td>
            <td class="col-3 col-lg-3">
              <ul>
                <li class="text-left">Product ID</li>
                <li class="text-left">Product Name(s)</li>
                <li class="text-left">Product Quantity</li>
                <!-- <li class="text-left"></li>
                <li class="text-left"></li> -->
              </ul>
            </td>
            <td class="col-2 col-lg-1">BTC</td>
            <td class="col-1 col-lg-1">Pending</td>
            <td class="col-2 col-lg-2">
              <form class="" action="index.html" method="post">
                <label for="">Order FulFilled</label>
                <!-- Set Value to be the order id of the given field. -->
                <input type="checkbox" name="" value="fulfilled">
              </form>
            </td>
          </tr>
          <tr class="row">
            <th class="col-1 col-lg-1" scope="row">3</th>
            <td class="col-4 col-lg-4">
              <ul>
                <li class="text-left">Customer Name</li>
                <li class="text-left">Customer Email</li>
                <li class="text-left">Customer Phone Number</li>
                <li class="text-left">Customer Postal Address</li>
                <li class="text-left">Customer Shipping Address</li>
              </ul>
            </td>
            <td class="col-3 col-lg-3">
              <ul>
                <li class="text-left">Product ID</li>
                <li class="text-left">Product Name(s)</li>
                <li class="text-left">Product Quantity</li>
                <!-- <li class="text-left"></li>
                <li class="text-left"></li> -->
              </ul>
            </td>
            <td class="col-1 col-lg-1">Momo</td>
            <td class="col-1 col-lg-1">Pending</td>
            <td class="col-2 col-lg-2">
              <form class="" action="index.html" method="post">
                <label for="">Order FulFilled</label>
                <!-- Set Value to be the order id of the given field. -->
                <input type="checkbox" name="" value="fulfilled">
              </form>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

  </body>
</html>
