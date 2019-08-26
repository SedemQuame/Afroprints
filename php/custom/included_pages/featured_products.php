<main role="main" class="bg-light">

  <div class="container">
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link" href="#">All</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Men</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Women</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Kids</a>
      </li>
    </ul>
  </div>

  <div class="album py-5">
      <?php
        $category = ['men', 'women', 'kids'];
        include_once 'db_connection.php';
        $i = 0;

        for ($i=0; $i < sizeof($category); $i++) {
          $sql = "SELECT * FROM brand  WHERE brand_type ='".$page_name."' AND brand_category = '".$category[$i]."';";
          // $stmt = $pdo->query($sql);
          $stmt = $pdo->prepare($sql);
          $stmt->execute();
          $stmt = $stmt->fetchAll();

          if (!empty($stmt)) {
            // Instantiating variable to hold populated pages.
            $element = "";
            $element .= '<div class="container mt-3">
                            <h1 class="dress-section text-capitalize">'.$category[$i].'\'s Collection. </h1>
                            <hr />
                            <div class="row">';
            foreach ($stmt as $row) {

              $element .= '<div class="col-sm-12 col-md-6 col-lg-4">
                              <div class="card mb-4 shadow-sm">
                                <img class="bd-placeholder-img card-img-top" src="'.$row['brand_image'].'" alt="" ';

              $element .= '" alt="" width="100%" height="225">
                          <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <form class="btn-group" action="../php/custom/cart-processor.php?action=add&item_id='.$row['brand_id'].'" method="post">
                                <button onclick="openModal()" type="button" class="openBtn btn btn-sm btn-outline-secondary" data-number="'.$row['brand_id'].'">View Item</button>
                                <button onclick="addToCart(this)" type="submit" class="btn btn-sm btn-outline-secondary" data-product-id="'.$row['brand_id'].'">Add To Cart</button>
                              </form>
                              <small class="text-muted">Ghc '.$row['brand_price'].'</small>
                            </div>
                          </div></div></div>';
            }
            $element .= '</div></div>';

            echo $element;
          }
        }
      ?>
</main>
