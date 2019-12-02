<nav class="site-header sticky-top py-1 navbar navbar-expand-lg">
  <a class="navbar-brand py-2" href="index.php">
      <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false">
        <title>Product</title>
        <circle cx="12" cy="12" r="10"></circle><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path></svg></span>
      <span class="banner">Afroprints</span>
  </a> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#toggler" aria-control="toggler" aria-expand="false" aria-label="Toggle navigation">
    <!-- <span class="navbar-toggler-icon"></span>
    <span class="navbar-toggler-icon"></span> -->
  </button>
  <div class="collapse navbar-collapse" id="toggler">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="products.php?item=tops">T-shirts</a></li>
      <li class="nav-item"><a class="nav-link" href="products.php?item=accessories">Accessories</a></li>
      <li class="nav-item"><a class="nav-link" href="products.php?item=shoes">Shoes</a></li>
      <li class="nav-item"><a class="nav-link" href="products.php?item=bags">Bags</a></li>
      <li class="nav-item">
      <a class="nav-link" href="cart.php">Cart
        <span id="itemsInCart" class="badge badge-light">
          <?php
            if (isset($_SESSION['cart-items'])) {
              echo sizeof($_SESSION['cart-items']);
            }else {
              echo 0;
            }
          ?>
        </span></a>
      </li>
    </ul>
  </div>
</nav>