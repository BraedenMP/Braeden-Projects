<?php  
$pageTitle = "Just Wired - Handmade Beaded Jewelry and Unique Gifts"; 
$pageDescription = "Our handmade beaded jewelry mixes quality and aesthetics into a single creative process. The result is jewelry that is as unique as the people who wear them."; 
$pageCanonical = "http://justwired.com/";
include("include/head.php");
?>


<body>
  <div class="fullPage animsition">
    <header id="mainHead" class="jumbotron">
      <div class="sticky navBar">
        <nav class="nav top-bar row" data-topbar role="navigation" data-options="sticky_on: small, medium, large"> 
          <ul class="left columns small-2">
            <li class="left"><a href="index.php" class="selected"><span class="icon icon-home"></span></a></li>  
          </ul>  
          <section>
          <div >
          <ul class="columns small-2 small-offset-3">
            <li class=""><a href="necklaces.php" class="animsition-link"><span>Jewelry</span></a></li>
          </ul>
          </div>
          </section>
          <ul class="right columns small-2 ">  
            <li><a target="paypal" href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&amp;business=9C73ZARD2ZEES&amp;display=1"><span class="icon icon-cart"></a></li>
          </ul>
        </nav>
      </div>
      <div class="headings mainHeading paraHead">
        <h1 class="page-header fontfx">Just Wired</h1>
        <span class="titles">Handmade Beaded Jewelry and Unique Gifts</span>
        <a href="necklaces.php" class="window-cta productButton animsition-link">View Products</a>
      </div>
    </header>
    <div class="page">
      <div class="row firstRow" data-equalizer>
        <div class="section columns medium-5 animated animeUp" data-equalizer-watch>
          <h3>Our Jewelry</h3>
          <p class="lead">Just Wired handmade jewelry uses authentic art to express your unique beauty.</p> 
          <p class="para">Each handcrafted piece is authentic in design and creation. We believe good jewelry is produced through artistic design and careful creation. To stay true to our artistic process and authentic reputation, we avoid wholesale and mass production. Each piece is handcrafted with passion, beauty and quality in mind. Our jewelry is created only with high quality beads and gemstones. The materials are collected from all over the world to produce unique aesthetic designs. The quality of our pieces will attract eyes to your elegance, while the authentic designs express your unique style. Browse our <a href="necklaces.php" class="wordLinks">selection</a> to see for yourself!
          </p>
        </div>
        <div class="section medium-5 columns animated animeUp" data-equalizer-watch>
          <h3>The Designer</h3>
          <p class="lead">Our handcrafted beaded jewelry speaks beauty through quality and design.</p>
          <p class="para">The artist of Just Wired jewelry, Barbara Main, designs and creates each piece of beaded jewelry by hand. Her work with beaded jewelry and her background in other creative professions allows her to have an uncommon, artistic style. Her experience has also resulted in a refined creative process, causing passion and quality to become a major her work. Just Wired was created in her vision for aesthetic jewelry for individual taste. This is why most of her jewelry is one of a kind and will not be recreated. This also means that unless otherwise requested all jewelry is available for a limited time. Her authentic jewelry can only be found <a href="necklaces.php" class="wordLinks">here</a>!
          </p>
        </div>
      </div>
      <hr />
      <div class="row secondRow">
        <div class="section columns medium-10 medium-offset-1 animated animeUpTwo">
          <h3>The Just Wired Selection</h3>
          <p class="lead">Browse through our selection to discover jewelry that will be treasured and enjoyed for years to come.</p>
          <p class="para">At Just Wired jewelry we offer a variety of handmade beaded jewelry. Most commonly we offer <a href="necklaces.php" class="wordLinks">necklaces</a>, and <a href="bracelets.php" class="wordLinks">bracelets</a>. We also make available a selection of jewelry that would make great <a href="gifts.php" class="wordLinks">gifts</a>. We make buying for others easy by creating a page of popular styles that are sure to be loved and cherished by those who receive them. We also offer <a href="others.php" class="wordLinks">other</a> jewelry which at times may include pendants, earrings and uncommon jewelry which will appeal to unique tastes.
          </p>
        </div>
      </div> 
      <div class="showcase row animated animeUpThree thirdRow">
        <div class="necklace productCategory productCategoryOne cat-row-one columns medium-5 medium-offset-1">
          <div class="window-tint ">
            <div class="promo-text">Necklaces<strong><span>from</span> $10</strong><a href="necklaces.php" class="window-cta animsition-link">Shop Now</a></div>
          </div>
        </div>  
        <div class="bracelet productCategory productCategoryOne cat-row-one columns medium-5 medium-offset-1">
          <div class="window-tint ">
            <div class="promo-text">Braclets<strong><span>from</span> $10</strong><a href="bracelets.php" class="window-cta animsition-link">Shop Now</a></div>
          </div>
        </div>  
        <div class="gift productCategory productCategoryTwo cat-row-two columns medium-5 medium-offset-1">
          <div class="window-tint ">
            <div class="promo-text">Gifts<strong><span>from</span> $15</strong><a href="gifts.php" class="window-cta animsition-link">Shop Now</a></div>
          </div>
        </div>  
        <div class="other productCategory productCategoryTwo cat-row-two columns medium-5 medium-offset-1">
          <div class="window-tint">
            <div class="promo-text">Other<strong><span>from</span> $20</strong><a href="others.php" class="window-cta animsition-link">Shop Now</a></div>
          </div>
        </div>
      </div>    
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
<script src="assets/js/functions.js" type="text/javascript"></script>
</body>
</html>
