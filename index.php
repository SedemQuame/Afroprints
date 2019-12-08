<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!--    StyleSheet links.-->
    <?php
      include 'php/custom/included_pages/meta_data.php';
      include 'php/custom/sessions.php';
      include 'php/custom/included_pages/common_styles.php';
    ?>
    <link rel="stylesheet" href="css/custom/index.css">
    <link rel="stylesheet" href="css/custom/glitch.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
        // Nav Bar.
        include 'php/custom/included_pages/nav.php';
        // Featured products.
        // TODO: Change the outlook of the index page, to look different from the other pages.
        // TODO: Let it feature other product types with extra saucy design and outlook.
        // TODO: Add minimalist and sophisticated animations to the various pages.
        // TODO: CREATE A CUSTOM LAYOUT FOR THE INDEX.PHP PAGE.
        // include 'php/custom/included_pages/featured_products.php';
    ?>


    <div class="glitch-wrapper">
      <p class="glitch" data-text="fashion.">fashion.</p>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 infograph">
          <img class="design_images" src="africanfashion/africanbags/handbag.png" alt="">
        </div>
        <div class="col-12 col-md-6 infograph">
          <h1 class="home-page-section-header"> Get beautiful hand crafted Ghanaian Bags.</h1>
          <p class="text-center">
            Find the most interesting patterns in bags, to
            compliment your outfit for any occasion.
            Be the first in your circle to rock, the latest
            African handbags and accessories, rep the
            culture anywhere.
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col-12 order-6 order-md-1 col-md-6 infograph">
          <h1 class="home-page-section-header"> African Inspired Tees.</h1>
          <p class="text-center">
            Get the latest african tees on the market delivered right onto your door step.
            Add a color to your wordrobe, rock dresses with witty quotes,mild profanity,
            and some of our best jokes.
            Take the african culture with you, everywhere you go.
          </p>
        </div>
        <div class="col-12 order-1 order-md-6 col-md-6 infograph">
          <img class="design_images" src="africanfashion/tops/african_top.jpg" alt="">
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-md-6 infograph">
          <img class="design_images" src="africanfashion/africanshoes/africanshoe.jpg" alt="">
        </div>
        <div class="col-12 col-md-6 infograph">
          <h1 class="home-page-section-header"> Shoes and accessories.</h1>
          <p class="text-center">
             Get the latest shoes and accessories, and help
             support the amazing designers of Africa
             who possess limitless potential, and creativity.
          </p>
        </div>
      </div>
    </div>

    <p class="text-center sign-up-header">Sign Up For Our Newsletters.</p>
    <div id="user-email-insertion">
        <!--This div will act as place to get user email-address (reference: ohemmma ohene.)-->
        <form class="" action="php\custom\included_pages\email_list.php" method="POST">
            <label for="get-user-email">
                <input class="form-control index-form-elements" id="get-user-email" type="text" placeholder="Email Address" name="emailAddress">
            </label>
            <button id="email-submission-newsletter" class="btn index-form-elements" type="submit" value="submit">Submit</button>
        </form>
    </div>


    <br>

    <!-- Do not remove this footer page and replace with included footer using .php file yet yet. -->
    <?php
        // TODO: Must fix the positioning of the footer to work universally in all templates.
        // Footer.
        include 'php/custom/included_pages/footer.php';
    ?>

    <!-- JavaScript Frameworks and libraries. -->
    <?php include 'php/custom/included_pages/common_js.php'; ?>
    <script src="js/custom/modal.js" charset="utf-8"></script>
</body>
</html>