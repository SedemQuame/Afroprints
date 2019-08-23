<?php
  session_start();

  if (isset($_GET['item_id']) || isset($_GET['action'])) {
    // code...
    $item_id = $_GET['item_id'];
    $action = $_GET['action'];
  }


  switch ($action) {
    case 'add':
      // code...
      // Store the appropriate variable in a session_variable
      // responsible for holding the and array of the sselected items.
      if (empty($_SESSION['cart-items'])){
          // add item to cart-items array;
          $_SESSION['cart-items'] = [$item_id];
      }else{
          array_push($_SESSION['cart-items'], $item_id);
      }

      print_r($_SESSION['cart-items']);
      header('location:../../html/cart.php');
      break;

    case 'remove':
        // code...
      break;

    case 'remove_all':
      unset($_SESSION['cart-items']);
      header('location:../../html/cart.php');
      break;

    default:
      // code...
      break;
  }


  echo "action type: " . $action . "<br />";
  echo "item id: " . $item_id;


?>
