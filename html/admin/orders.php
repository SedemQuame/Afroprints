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

          <?php
          include '../../php/custom/included_pages/db_connection.php';

          $sql = "SELECT purchase_id, total_price, product_list, purchase_date, cust_id,
                  ordering_address, recipient_address, payment_method
	                FROM public.purchases;";

         $stmt = $pdo->query($sql);
         $customers = [];

         while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
           $customers[] = [
            'purchase_id' => $row['purchase_id'],
            'total_price' => $row['total_price'],
            'product_list' => $row['product_list'],
            'purchase_date' => $row['purchase_date'],
            'customer_id' => $row['cust_id'],
            'ordering_address' => $row['ordering_address'],
            'recipient_address' => $row['recipient_address'],
            'payment_method' => $row['payment_method']
          ];
         }

         $order = "";
         $count = 0;

         foreach ($customers as $customer) {
          $id = $customer['customer_id'];
          $sql = "SELECT cust_name, cust_email, cust_address, cust_contact
	                FROM public.customer WHERE cust_id = $id;";

          $stmt = $pdo->query($sql);
          $credentials = [];

          while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $credentials = [
             'name' => $row['cust_name'],
             'email' => $row['cust_email'],
             'country' => $row['cust_address'],
             'phone_number' => $row['cust_contact']
           ];
          }

           $count += 1;
           $order .= '<tr class="row">
                         <th class="col-1 col-lg-1" scope="row">'.$count.'</th>
                         <td class="col-4 col-lg-4">
                           <ul>
                             <li class="text-left">
                             Customer Name <br />
                             '.htmlspecialchars($credentials['name']).'</li>
                             <hr />
                             <li class="text-left">
                             Customer Email Address <br />
                             '.htmlspecialchars($credentials['email']).'</li>
                             <hr />
                             <li class="text-left">
                             Customer Phone Number <br />
                             '.htmlspecialchars($credentials['phone_number']).'</li>
                             <hr />
                             <li class="text-left">
                             Ordering Address <br/>
                             '.htmlspecialchars($customer['ordering_address']).'</li>
                             <hr />
                             <li class="text-left">
                             Shipping Address <br/>
                             '.htmlspecialchars($customer['recipient_address']).'</li>
                           </ul>
                         </td>
                         <td class="col-3 col-lg-3">
                           <ul>
                             <li class="text-left">Product ID</li>
                             <li class="text-left">Product Name(s)</li>
                             <li class="text-left">Product Quantity</li>
                           </ul>
                         </td>
                         <td class="col-1 col-lg-1">'.htmlspecialchars($customer['payment_method']).'</td>
                         <td class="col-1 col-lg-1">Pending</td>
                         <td class="col-2 col-lg-2">
                           <form class="" action="index.html" method="post">
                             <label for="">Order FulFilled</label>
                             <!-- Set Value to be the order id of the given field. -->
                             <input type="checkbox" name="" value="fulfilled">
                           </form>
                         </td>
                     </tr>';
         }

         echo $order;
       ?>
        </tbody>
      </table>
    </div>

  </body>
</html>
