<?php include("include/head.php"); ?>


<body>
  <div class="fullPage animsition recieptPage">
      <div class="sticky navBar">
        <nav class="nav top-bar" data-topbar role="navigation" data-options="sticky_on: small, medium, large"> 
          <ul class="left">
            <li class="homeNav left"><a href="index.php" class="selected"><span class="icon icon-home"></span></a></li>  
          </ul>  
          <section>
          <div class="row">
          <ul class=" column medium-2 medium-offset-4">
            <li class=""><a href="necklaces.php" class="animsition-link"><span>Jewelry</span></a></li>
          </ul>
          </div>
          </section>
          <ul class="right">  
            <li><a target="paypal" href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&amp;business=9C73ZARD2ZEES&amp;display=1"><span class="icon icon-cart"></a></li>
          </ul>
        </nav>
      </div>
    <div class="page"> 
      <div class="row secondRow">
        <div class="section columns medium-10 medium-offset-1 animated animeUpTwo">
          <h3>Thank you!</h3>
          <p class="para">Thank you for your payment. Your transaction has been completed! You may log into your paypal account at <a href="http://www.paypal.com/us" class="wordLinks">www.paypal.com</a> to view details of this transaction. For any comments of concerns feel free to contact us at <a href="mailto:contact@justwiredjewelry.com" class="wordLinks">contact@justwiredjewelry.com</a> </p>
          <p>Want to continue shopping? Visit the <a href="shirts.php" class="wordLinks">Products Pages</a> to browse our jewelry!</p>
        </div>
        <hr />
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
