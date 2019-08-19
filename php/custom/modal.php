 <?php
  include_once 'included_pages\db_connection.php';

  $id = $_GET['id'];
  $sql = "SELECT * FROM brand WHERE brand_id=$id";

  $stmt = $pdo->query($sql);

  $template = '  <div class="row">
                  <div class="col-md-7">
                    <img class="card-img-top" width="100%" height="450px" src="';

  foreach ($stmt as $row) {

    $template .= $row['brand_image'].'" alt="add some alternate text here"/>';
    $template .=  '</div>';
    $template .= '<div class="col-md-5">
                    <p><strong>'.$row['brand_name'].'</strong></p><hr />';
    $template .=   '<p>'.$row['brand_description'].'<p/><hr />';
    $template .=   '<p>'.$row['brand_price'].'<p/>
                    <hr />
                    <button class="btn btn-primary buyBtn" type="button" name="button">Buy</button>
                    <button class="btn btn-primary cartBtn" type="button" name="button">Add to cart</button>
                  </div>
                  </div>';

  }

  echo $template;
?>
