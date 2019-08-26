 <?php
  include_once 'included_pages\db_connection.php';

  $id = $_GET['id'];
  $sql = "SELECT * FROM brand WHERE brand_id=$id";

  $stmt = $pdo->query($sql);

  $template = '  <div class="row">
                  <div class="col-12 col-sm-12 col-lg-6">
                    <img class="card-img-top" width="100%" height="450px" src="';

  foreach ($stmt as $row) {

    $template .= $row['brand_image'].'" alt="add some alternate text here"/>';
    $template .=  '</div>';
    $template .= '<div class="col-12 col-sm-12 col-lg-6">
                    <p class="item-name"><strong>'.$row['brand_name'].'</strong></p><hr />';
    $template .=   '<div class="description-box">
                      <p class="item-description lead">'.$row['brand_description'].'<p/>
                    </div>';
    $template .=   '<p class="item-price"><strong> Ghc '.$row['brand_price'].' </strong><p/>
                    <form id="modal-form-btns" class="btn-group" action="../php/custom/cart-processor.php?action=add&item_id='.$row['brand_id'].'" method="post">
                      <button class="btn btn-lg btn-outline-secondary modal-btns" type="button" name="button">Buy</button>
                      <button class="btn btn-lg btn-outline-secondary modal-btns" onclick="addToCart(this)" type="button" name="button">Add to cart</button>
                    </form>
                  </div>
                  </div>';

  }

  echo $template;
?>
