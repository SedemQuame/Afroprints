<main role="main">

  <section class="jumbotron jumbotron-fluid text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Album example</h1>
      <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
      <p>
        <a href="#" class="btn btn-primary my-2">Main call to action</a>
        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">

      <?php
        include_once 'db_connection.php';
        $sql = "SELECT * FROM brand  WHERE brand_type ='".$page_name."';";
        // $stmt = $pdo->query($sql);
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $stmt = $stmt->fetchAll();

        // Instantiating variable to hold populated pages.
        $element = "";
        foreach ($stmt as $row) {
          $element .= '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
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
                      </div>
                    </div>
                  </div>';
        }

        echo $element;
      ?>
</main>
