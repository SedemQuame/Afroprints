<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <!--    StyleSheet links.-->
    <?php
      include '../php/custom/included_pages/meta_data.php';
      include '../php/custom/sessions.php';
      include '../php/custom/included_pages/common_styles.php';
    ?>
    <link rel="stylesheet" href="../css/custom/index.css">
</head>
<body>
    <?php
        // Nav Bar.
        include '../php/custom/included_pages/nav.php';
    ?>
<!--
    <div class="container-fluid jumbotron jumbotron-fluid banner-container">
        <h1 class="display-4 text-center header">Hello, world!</h1>
        <p class="lead text-center sub-header">This is a simple hero unit, a simple jumbotron-style component for calling extra.</p>
        <p class="lead text-center sub-header">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    </div> -->

    <?php
        // Featured products.
        // TODO: Change the outlook of the index page, to look different from the other pages.
        // TODO: Let it feature other product types with extra saucy design and outlook.
        // TODO: Add minimalist and sophisticated animations to the various pages.
        include '../php/custom/included_pages/featured_products.php';
    ?>


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

    <?php
        // Footer.
        include '../php/custom/included_pages/footer.php';
    ?>

    <!--JavaScript Files.-->
    <!-- Custom JavaScript Files. -->
    <script src="../js/custom/index.js"></script>


    <!-- JavaScript Frameworks and libraries. -->
    <script src="../js/framework/holder.js" charset="utf-8"></script>
    <script src="../js/framework/bootstrap.bundle.js" charset="utf-8"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
</body>
</html>
