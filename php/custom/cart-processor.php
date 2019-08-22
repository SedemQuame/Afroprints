<?php
  session_start();

  $action = $_GET['action'];
  $item_id = $_GET['item_id'];

  echo "action type: " . $action . "<br />";
  echo "item id: " . $item_id;

  // Store the appropriate variable in a session_variable
  // responsible for holding the and array of the sselected items.
  if (empty($_SESSION['cart-items'])){
      // add item to cart-items array;
      $_SESSION['cart-items'] = [$item_id];
  }else{
      array_push($_SESSION['cart-items'], $item_id);
  }

  print_r($_SESSION['cart-items']);

  // header("location:shop.php");
?>
