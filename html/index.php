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
    <link rel="stylesheet" href="../css/custom/glitch.css">
</head>
<body>
    <?php
        // Nav Bar.
        include '../php/custom/included_pages/nav.php';

        // Featured products.
        // TODO: Change the outlook of the index page, to look different from the other pages.
        // TODO: Let it feature other product types with extra saucy design and outlook.
        // TODO: Add minimalist and sophisticated animations to the various pages.
        // TODO: CREATE A CUSTOM LAYOUT FOR THE INDEX.PHP PAGE.
        // include '../php/custom/included_pages/featured_products.php';
    ?>


      <div class="glitch-wrapper">
        <div class="glitch" data-text="fashion.">fashion.</div>
      </div>

      <div class="bg">
        simple
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6 infograph">
            <h1 class="home-page-section-header"> Sample Heading.</h1>
            <p class="text-center">
              Lorem Ipsum is simply dummy text of the printing and
              typesetting industry. Lorem Ipsum has been the industry's
              standard dummy text ever since the 1500s, when an unknown
              printer took a galley of type and scrambled it to make a
              type specimen book. It has survived not only five centuries,
              but also the leap into electronic typesetting, remaining
              essentially unchanged. It was popularised in the 1960s
              with the release of Letraset sheets containing Lorem
              Ipsum passages, and more recently with desktop.
            </p>
          </div>
          <div class="col-sm-12 col-md-6 infograph">
            <p class="text-center">images</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12 col-md-6 infograph">
            <p class="text-center">images</p>
          </div>
          <div class="col-sm-12 col-md-6 infograph">
            <h1 class="home-page-section-header"> Sample Heading.</h1>
            <p class="text-center">
              Lorem Ipsum is simply dummy text of the printing and
              typesetting industry. Lorem Ipsum has been the industry's
              standard dummy text ever since the 1500s, when an unknown
              printer took a galley of type and scrambled it to make a
              type specimen book. It has survived not only five centuries,
              but also the leap into electronic typesetting, remaining
              essentially unchanged. It was popularised in the 1960s
              with the release of Letraset sheets containing Lorem
              Ipsum passages, and more recently with desktop.
            </p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12 col-md-6 infograph">
            <h1 class="home-page-section-header"> Sample Heading.</h1>
            <p class="text-center">
              Lorem Ipsum is simply dummy text of the printing and
              typesetting industry. Lorem Ipsum has been the industry's
              standard dummy text ever since the 1500s, when an unknown
              printer took a galley of type and scrambled it to make a
              type specimen book. It has survived not only five centuries,
              but also the leap into electronic typesetting, remaining
              essentially unchanged. It was popularised in the 1960s
              with the release of Letraset sheets containing Lorem
              Ipsum passages, and more recently with desktop.
            </p>
          </div>
          <div class="col-sm-12 col-md-6 infograph">
            <p class="text-center">images</p>
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
    <?php
        // TODO: Must fix the positioning of the footer to work universally in all templates.
        // Footer.
        include '../php/custom/included_pages/footer.php';
    ?>

    <!--JavaScript Files.-->
    <!-- Custom JavaScript Files. -->
    <script src="../js/custom/index.js"></script>

    <!-- JavaScript Frameworks and libraries. -->
    <?php include '../php/custom/included_pages/common_js.php'; ?>
    <script src="../js/custom/modal.js" charset="utf-8"></script>
</body>
</html>
