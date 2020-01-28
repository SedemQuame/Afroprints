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
      $obj->quantity = 0;
      // empty cart.
      if (empty($_SESSION['cart-items'])){
        $obj->quantity += 1;
        $obJson = json_encode($obj);
        $_SESSION['cart-items'] = [];
        array_push($_SESSION['cart-items'], $obJson);
        $_SESSION['itemNumber'] = 1;
        break;
      }else{
        for ($i=0; $i < sizeof($_SESSION['cart-items']); $i++) {
          $arr = json_decode($_SESSION['cart-items'][$i], true);
          // checking item id.
          if((int)$arr['id'] == (int)$item_id){
            $objQuantity = (int)$arr['quantity'] + 1;
            $arr['quantity'] = $objQuantity;
            $_SESSION['cart-items'][$i] = json_encode($arr);
            $_SESSION['itemNumber'] += 1;
          break;
          }else if($i == sizeof($_SESSION['cart-items']) - 1){
            $obj->id = $item_id;
            $obj->quantity = 1;
            $obJson = json_encode($obj);
            array_push($_SESSION['cart-items'], $obJson);
            $_SESSION['itemNumber'] += 1;
          }
        }
      }
      break;
    case 'remove':

      if(empty($_SESSION['cart-items'])){
      break;
      }else{        
        for ($i=0; $i < sizeof($_SESSION['cart-items']); $i++) {
          $arr = json_decode($_SESSION['cart-items'][$i], true);
          // checking item id.
          if((int)$arr['id'] == (int)$item_id){
            $_SESSION['itemNumber'] -= (int)$arr['quantity'];
            array_splice($_SESSION['cart-items'], $i, 1);  
          break;
          }
        }
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
