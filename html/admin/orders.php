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
      <table class="table">
        <thead class="thead-dark">
          <tr class="row">
            <th class="col-1 col-lg-1" scope="col">Order Id</th>
            <th class="col-3 col-lg-3" scope="col">Customer Info</th>
            <th class="col-4 col-lg-4" scope="col">Order Info</th>
            <th class="col-2 col-lg-2" scope="col">Payment Mode</th>
            <th class="col-1 col-lg-1" scope="col">Status</th>
            <th class="col-1 col-lg-1" scope="col">Order FulFilled</th>
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
          $list = "";

          $items = [];
          for ($i=0; $i < count($customer['product_list']); $i++) {
            $sql_statement = "SELECT brand_name, brand_image, brand_type, brand_category
	                            FROM public.brand;";

            $stmt = $pdo->query($sql_statement);

            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
              $items = [
               'name' => $row['brand_name'],
               'image' => $row['brand_image'],
               'type' => $row['brand_type'],
               'category' => $row['brand_category'],
             ];
            }

          $list .= '<tr>
                     <td class="col-1 col-lg-1" scope="col">'.($i + 1).'</td>
                     <td class="col-2 col-lg-2" scope="col">'.htmlspecialchars($items['name']).'</td>
                     <td class="col-5 col-lg-5" scope="col">
                       <img height="50" width="50" src="..\\'.htmlspecialchars($items['image']).'" alt=""/>
                     </td>
                     <td class="col-2 col-lg-2" scope="col">'.htmlspecialchars($items['type']).'</td>
                     <td class="col-1 col-lg-1" scope="col">'.htmlspecialchars($items['category']).'</th>
                     <td class="col-1 col-lg-1" scope="col">Quantity</th>
                   </tr>';
          }


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
                         <td class="col-3 col-lg-3">
                           <ul>
                             <li class="text-left">
                             <b> Customer Name </b> <br />
                             '.htmlspecialchars($credentials['name']).'</li>
                             <hr />
                             <li class="text-left">
                             <b> Customer Email Address </b> <br />
                             '.htmlspecialchars($credentials['email']).'</li>
                             <hr />
                             <li class="text-left">
                             <b> Customer Phone Number </b> <br />
                             '.htmlspecialchars($credentials['phone_number']).'</li>
                             <hr />
                             <li class="text-left">
                             <b> Ordering Address </b> <br/>
                             '.htmlspecialchars($customer['ordering_address']).'</li>
                             <hr />
                             <li class="text-left">
                             <b> Shipping Address </b> <br/>
                             '.htmlspecialchars($customer['recipient_address']).'</li>
                           </ul>
                         </td>
                         <td class="col-4 col-lg-4">
                           <table class="table table-sm">
                             <thead>
                               <tr>
                                 <th class="col-1 col-lg-1" scope="col">#</th>
                                 <th class="col-2 col-lg-2" scope="col">Name</th>
                                 <th class="col-5 col-lg-5" scope="col">Image</th>
                                 <th class="col-2 col-lg-2" scope="col">Type</th>
                                 <th class="col-1 col-lg-1" scope="col">Category</th>
                                 <th class="col-1 col-lg-1" scope="col">Quantity</th>
                               </tr>
                             </thead>
                             <tbody>
                            '.$list.'
                             </tbody>
                           </table>
                         </td>
                         <td class="col-2 col-lg-2">'.htmlspecialchars($customer['payment_method']).'</td>
                         <td class="col-1 col-lg-1">Pending</td>
                         <td class="col-1 col-lg-1">
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
