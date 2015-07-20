<?php 
include("include/product-list.php"); 
$pageTitle = "Just Wired Handmade Beaded Jewelry - Gifts"; 
$pageDescription = "Our handmade beaded jewelry mixes quality and aesthetics into a single creative process. The result is jewelry that is as unique as the people who wear them."; 
$pageCanonical = "http://justwired.com/gifts/";
include("include/head.php");
?>

<body>
    <div class="fullPage animsition">
    <header id="giftsHead" class="jumbotron">
    <?php include("include/mobileNav.php"); ?>
      <div class="sticky navBar normNav">
        <nav class="nav nav-pills top-bar row" data-topbar role="navigation" data-options="sticky_on: small, medium, large">
         <ul class="left columns small-2">
            <li class="homeNav left"><a href="index.php"><span class="icon icon-home"></span></a></li>  
          </ul>
          <section class="columns small-8"> 
        <ul>
          <li><a href="necklaces.php" class="animsition-link"><span>Necklaces</span></a></li>
          <li><a href="bracelets.php" class="animsition-link"><span>Bracelets</span></a></li>
          <li><a href="others.php" class="animsition-link"><span>Other</span></a></li>
          <li><a href="gifts.php" class="animsition-link selected"><span>Gifts</span></a></li>
        </ul>
        </section>
          <ul class="right columns small-2">   
            <li class=""><a href="cart.php" class="animsition-link"><span class="icon icon-cart"></span></a></li>
          </ul>
      </nav>
    </div>
      <div class="headings paraHead">
        <h1 class="page-header fontfx">Gifts</h1>
        <span class="titles">Our handmade beaded jewelry mixes quality and aesthetics into a single creative process. The result is jewelry that is as unique as the people who wear them.</span>
        </div>
    </header>
    <div class="page productsPage">
      <div class="row firstRow" data-equalizer>
        <ul class="products row">
<!-- similar to shirt.php but the foreach makes it gather all products-->
          <?php foreach($gifts as $product_id => $product) { 
              echo get_list_view_html_gifts($product_id,$product);
            }
          ?>
        </ul>
      </div>
    </div>
        </ul>
      </div>  
   </div>
   <?php include("include/footer.php"); ?>
<script src="foundation/js/vendor/jquery.js"></script>
<script src="foundation/js/vendor/fastclick.js"></script>
<script src="foundation/js/foundation.min.js"></script>
<script>
      $(document).foundation();
</script>
<script src="assets/js/jquery.animsition.min.js"></script><!-- animsition js -->
<script src="assets/js/jquery-letterfx.min.js"></script>
<script src="assets/js/tuxsudo.min.js"></script>
<script src="assets/js/products.js" type="text/javascript"></script>
</body>
</html>
