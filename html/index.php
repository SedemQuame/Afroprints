<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
<!--    StyleSheet links.-->
    <?php
      include '../php/custom/included_pages/common_styles.php';
    ?>
    <link rel="stylesheet" href="../css/custom/index.css">
</head>
<body>


    <?php
        // Nav Bar.
        include '../php/custom/included_pages/nav.php';
    ?>

    <div class="banner-container">
        <!--        This div will act as the banner.-->
        <img class="banner-img" alt="" data-src="holder.js/1349x400">
    </div>


    <div class="sections">
        <!--        This div will act as the content pane.-->

        <div class="category">
                <!--            This div will act as the section header that allows
                                users to switch between sections.
                -->
                <a href="#" class="btn btn-light product-categories"> Men </a>
                <a href="#" class="btn btn-light product-categories"> Women </a>
                <a href="#" class="btn btn-light product-categories"> Kids </a>
        </div>


        <div>
              <!--            This div will act as the section to hold featured products.-->

              <div class="row">
                      <div class="col-3 product">
                          <img class="product-img" alt="" data-src="holder.js/274x350">
                          <p class="product-info caption"> Lorem Ipsum</p>
                          <p class="product-info price"> Lorem Ipsum</p>
                      </div>

                      <div class="col-3 product">
                          <img class="product-img" alt="" data-src="holder.js/274x350">
                          <p class="product-info caption"> Lorem Ipsum</p>
                          <p class="product-info price"> Lorem Ipsum</p>
                      </div>

                      <div class="col-3 product">
                        <img class="product-img" alt="" data-src="holder.js/274x350">
                        <p class="product-info caption"> Lorem Ipsum</p>
                        <p class="product-info price"> Lorem Ipsum</p>
                      </div>

                      <div class="col-3 product">
                        <img class="product-img" alt="" data-src="holder.js/274x350">
                        <p class="product-info caption"> Lorem Ipsum</p>
                        <p class="product-info price"> Lorem Ipsum</p>
                      </div>
                      <!-- <div class="text-center"> pagination </div> -->
              </div>


              <div class="row">
                      <div class="col-3 product">
                          <img class="product-img" alt="" data-src="holder.js/274x350">
                          <p class="product-info caption"> Lorem Ipsum</p>
                          <p class="product-info price"> Lorem Ipsum</p>
                      </div>

                      <div class="col-3 product">
                          <img class="product-img" alt="" data-src="holder.js/274x350">
                          <p class="product-info caption"> Lorem Ipsum</p>
                          <p class="product-info price"> Lorem Ipsum</p>
                      </div>

                      <div class="col-3 product">
                        <img class="product-img" alt="" data-src="holder.js/274x350">
                        <p class="product-info caption"> Lorem Ipsum</p>
                        <p class="product-info price"> Lorem Ipsum</p>
                      </div>

                      <div class="col-3 product">
                        <img class="product-img" alt="" data-src="holder.js/274x350">
                        <p class="product-info caption"> Lorem Ipsum</p>
                        <p class="product-info price"> Lorem Ipsum</p>
                      </div>
                      <!-- <div class="text-center"> pagination </div> -->
              </div>


              <div class="row">
                      <div class="col-3 product">
                          <img class="product-img" alt="" data-src="holder.js/274x350">
                          <p class="product-info caption"> Lorem Ipsum</p>
                          <p class="product-info price"> Lorem Ipsum</p>
                      </div>

                      <div class="col-3 product">
                          <img class="product-img" alt="" data-src="holder.js/274x350">
                          <p class="product-info caption"> Lorem Ipsum</p>
                          <p class="product-info price"> Lorem Ipsum</p>
                      </div>

                      <div class="col-3 product">
                        <img class="product-img" alt="" data-src="holder.js/274x350">
                        <p class="product-info caption"> Lorem Ipsum</p>
                        <p class="product-info price"> Lorem Ipsum</p>
                      </div>

                      <div class="col-3 product">
                        <img class="product-img" alt="" data-src="holder.js/274x350">
                        <p class="product-info caption"> Lorem Ipsum</p>
                        <p class="product-info price"> Lorem Ipsum</p>
                      </div>
                      <!-- <div class="text-center"> pagination </div> -->
              </div>

        </div>


    </div>


    <div id="user-email-insertion">

        <p class="text-center">Sign Up For Newsletters.</p>
        <!--This div will act as place to get user email-address (reference: ohemmma ohene.)-->


        <form class="" action="" type="">
            <label for="get-user-email">
                <input class="" id="get-user-email" type="text" placeholder="Email Address" >
            </label>

            <input class="" type="submit" value="submit">
        </form>
    </div>

    <br>


<!-- Do not remove this footer page and replace with included footer using .php file yet yet. -->
<?php // TODO: Must fix the positioning of the footer to work universally in all templates. ?>
    <!-- <footer>
        <p class="text-center">footer</p>

        <div>
            <p class="text-center">footer s2</p>
        </div>
    </footer> -->
    <?php
        // Footer.
        include '../php/custom/included_pages/footer.php';
    ?>


    <!--JavaScript Files.-->
    <!-- Custom JavaScript Files. -->
    <script src="../js/custom/index.js"></script>


    <!-- JavaScript Frameworks and libraries. -->
    <script src="../js/framework/holder.js" charset="utf-8"></script>
</body>
</html>
