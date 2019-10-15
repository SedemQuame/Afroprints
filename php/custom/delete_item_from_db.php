<?php
echo "deleting product_from db_now";
$item_to_delete = $_POST['prdt_id'];

include 'included_pages/db_connection.php';

$sql = "DELETE FROM public.brand
	      WHERE brand_id = :id;";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $item_to_delete);

$msg = "";
if ($stmt->execute()) {
  $msg = "Item deletion, successful.";
}else {
  $msg = "Item deletion, failed.";
}

// Return to calling page.
header("location: ../../admin/product_category.php?msg=".$msg);
?>
