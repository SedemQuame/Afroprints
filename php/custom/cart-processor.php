<?php
// TODO: Make code, object oriented.
  session_start();

  if (isset($_GET['item_id']) || isset($_GET['action'])) {
    $item_id = $_GET['item_id'];
    $action = $_GET['action'];
  }

  switch ($action) {
    case 'add':
      // Store the appropriate variable in a session_variable
      // responsible for holding the and array of the sselected items.
      if (empty($_SESSION['cart-items'])){
          // add item to cart-items array;
          $_SESSION['cart-items'] = [$item_id];
      }else{
          array_push($_SESSION['cart-items'], $item_id);
      }
      header('location:../../cart.php');
      break;

    case 'remove':
        // remove the given id from the array or ids.
        $cart = $_SESSION['cart-items'];
        if(in_array($item_id, $cart)){
          // create new array and set it to the given values
          // except the one selected.
          $temp_arr = [];
          $key = array_search($item_id, $cart);
          $arr_length = sizeof($cart);

          for ($i=0; $i < $arr_length; $i++) {
            if ($i !== $key) {
              array_push($temp_arr, $cart[$i]);
            }
          }
          $_SESSION['cart-items'] = $temp_arr;
        }
        header('location:../../cart.php');
      break;

    case 'remove_all':
      unset($_SESSION['cart-items']);
      header('location:../../cart.php');
      break;

    default:
      // code...
      break;
  }
?>
