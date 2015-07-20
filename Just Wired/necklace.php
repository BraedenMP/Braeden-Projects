<?php include("include/product-list.php");


//tests to see if _GET['id'] exists and if so stores it in a variable for the html function
if (isset($_GET["id"])) {
  $product_id = $_GET["id"];
//if set the $product variable will hold the $products[$product_id] therfore will hold the entire array for one of the $products
  if (isset($necklaces[$product_id])) {
    $product = $necklaces[$product_id];
  }
}
//if it isnt set it wont display them
if (!isset($product)) {
  header("Location: product.php");
  exit();
}

$pageTitle = $product["name"]; 
$pageDescription = $product["description"]; 
$pageCanonical = "http://justwired.com/";
include("include/head.php"); ?>

<body>
  <div class="fullPage animsition">
        <div class="sticky navBar productNav">
      <nav class="nav nav-pills top-bar row" data-topbar role="navigation" data-options="sticky_on: small, medium, large">
        <ul class="left columns small-2">
            <li class="homeNav left"><a href="index.php"><span class="icon icon-home"></span></a></li>  
          </ul>
          <section class="columns small-8"> 
        <ul>
          <li><a href="necklaces.php" class="animsition-link"><span>Necklaces</span></a></li>
          <li><a href="bracelets.php" class="animsition-link"><span>Bracelets</span></a></li>
          <li><a href="others.php" class="animsition-link"><span>Other</span></a></li>
          <li><a href="gifts.php" class="animsition-link"><span>Gifts</span></a></li>
        </ul>
        </section>
          <ul class="right columns small-2">  
            <li class=""><a class="animsition-link" href="#"><span class="icon icon-cart"></span></a></li>
          </ul>
      </nav>
    </div>
    <div class="page row productPage">
      <div class="breadcrumb"><a href="necklaces.php">Necklaces</a> &gt; <?php echo $product["name"]; ?></div>
      <div class="columns medium-8">
        <img src="<?php echo $product["img"]; ?>" alt="<?php echo $product["name"]; ?>" class="productImg">
      </div>
      <div class="columns medium-4 productDescription">
        <h3><?php echo $product["name"]; ?></h3>
        <h5>$<?php echo $product["price"]; ?></h5>
        <p class="para section"><?php echo $product["description"]; ?></p>
        <a class="button small round success animsition-link">Add To Cart</a>

        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="<?php echo $product["paypal"]; ?>">
          <input type="hidden" name="item_name" value="<?php echo $product["name"]; ?>">
          <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="Payment Button">
          <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>

        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="BLZ4N46ZDVUGJ">
          <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>


      </div>
   </div>
   
<script src="foundation/js/vendor/jquery.js"></script>
<script src="foundation/js/vendor/fastclick.js"></script>
<script src="foundation/js/foundation.min.js"></script>
<script src="assets/js/jquery.animsition.min.js"></script><!-- animsition js -->
<script>
      $(document).foundation();
</script>
<script src="assets/js/jquery-letterfx.min.js"></script>
<script src="assets/js/tuxsudo.min.js"></script>
<script src="assets/js/functions.js" type="text/javascript"></script>
</body>
</html>
<a target="paypal" href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&amp;business=contact@justwiredjewelry.com&amp;display=1">Shopping Cart</a>
   