<?php
// Getting information, from item
  $name = htmlspecialchars($_POST['item_name']);
  $description = htmlspecialchars($_POST['item_description']);
  $item_type = htmlspecialchars($_POST['item_type']);
  $item_price = htmlspecialchars($_POST['item_price']);
  $item_category = htmlspecialchars($_POST['item_category']);


  // $currentDir = getcwd();
  $currentDir = __dir__;
  $uploadDirectory = "\..\..\africanfashion\\";
  $imgPath = "..\\africanfashion\\";

  if ($item_type == "tops") {
    $uploadDirectory .= "tops\\";
    $imgPath .= "tops\\";
  } elseif ($item_type == "shoes") {
    $uploadDirectory .= "africanshoes\\";
    $imgPath .= "africanshoes\\";
  } elseif ($item_type == "bags") {
    $uploadDirectory .= "bags\\";
    $imgPath .= "bags\\";
  } elseif ($item_type == "accessories") {
    $uploadDirectory .= "accessories\\";
    $imgPath .= "accessories\\";
  } else {
    // code...
    $msg = "Invalid Product Type";
    header("../../html/admin/index.php?msg=".$msg);
  }


  $errors = []; // Store all foreseen and unforseen errors here

  $fileExtensions = ['jpeg','jpg','png']; // Get all the file extensions

  $fileName = $_FILES['myfile']['name'];
  $fileSize = $_FILES['myfile']['size'];
  $fileTmpName  = $_FILES['myfile']['tmp_name'];
  $fileType = $_FILES['myfile']['type'];

  $fileExtension = explode('.',$fileName);
  $fileExtension = strtolower(end($fileExtension));

  $uploadPath = $currentDir . $uploadDirectory . basename($fileName);
  $imgPath .= basename($fileName);

 if (isset($_POST['submit'])) {

     if (! in_array($fileExtension,$fileExtensions)) {
         $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
     }

     if ($fileSize > 2000000) {
         $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
     }

     if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

         // Including connection script.
         include 'included_pages/db_connection.php';

         $sql = "INSERT INTO brand(brand_id, brand_name, brand_description, brand_image, brand_type, brand_price, brand_category)
       	        VALUES (nextval('item_brand_id'), :name, :description, :imageurl, :item_type, :item_price, :item_category);";

         $stmt = $pdo->prepare($sql);

         $stmt->execute(array(':name' => $name, ':description' => $description,
                              ':imageurl' => $imgPath, ':item_type' => $item_type,
                              ':item_price' => $item_price, ':item_category' => $item_category));

         $msg = "";
         if ($didUpload) {
             $msg .= "The file " . basename($fileName) . " has been uploaded";
             header("location: ../../html/admin/index.php?msg=".$msg);
         } else {
             $msg .= "An error occurred somewhere. Try again";
             header("location: ../../html/admin/index.php?msg=".$msg);
         }
     } else {
         foreach ($errors as $error) {
             echo $error . "These are the errors" . "\n";
         }
     }
 }





?>
