<?php
// TODO: Make code, object oriented.
  session_start();

  if (isset($_GET['item_id']) || isset($_GET['action'])) {
    $item_id = $_GET['item_id'];
    $action = $_GET['action'];
  }

  switch ($action) {
    case 'add':
      $obj->id = $item_id;

      // Store the appropriate variable in a session_variable
      // responsible for holding the and array of the sselected items.
      if (empty($_SESSION['cart-items'])){
          // add item to cart-items array;
          $obj->quantity = 1;
          $obJson = json_encode($obj);
          $_SESSION['cart-items'] = [];
          array_push($_SESSION['cart-items'], $obJson);
        break;
      }else{
      // check if item with item_id exists
      // if true
      // get item count, and increament
      // store new quantity in the SESSIONS.
      for ($i=0; $i < sizeof($_SESSION['cart-items']); $i++) { 
        $returnObj = json_decode($_SESSION['cart-items'][$i], true);
        if($item_id == $returnObj['id']){
          $obj->quantity = $returnObj['quantity'] + 1;
          $obJson = json_encode($obj);
          $_SESSION['cart-items'][$i] = $obJson;
          break;
        }
      }

      }
      break;

    case 'remove':
        // remove the given id from the array or ids.
        $cartitems = $_SESSION['cart-items'];
        print_r($cartitems);
        $temp_arr = [];

        foreach($cartitems as $cartitem){
          if($item_id == json_decode($cartitem, true)['id']){
            $key = array_search($cartitem, $cartitems);
            for ($i=0; $i < sizeof($cartitems); $i++) { 
              # code...
              if($i !== $key){
                array_push($temp_arr, $cartitem);
              }
            }
          }
        }

        $_SESSION['cart-items'] = $temp_arr;

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
