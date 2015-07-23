<?php
//defines a function that stores neccassary html for a product, should be used in a foreach loop for multiple

function get_list_view_html_necklaces($product_id, $product) {
    
    $output = "";
    $output = $output . '<li class="product columns small-10 small-offset-1 medium-5 medium-offset-1 large-3 large-offset-1 placeholder ' . $product["row"] . ' animated">';
    $output = $output . '<a href="necklace.php?id=' . $product_id . '" class="animsition-link productLink">';
    $output = $output . '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';
    $output = $output . '<a href="necklace.php?id=' . $product_id . '" class="animsition-link productLink"><div class="prodOverlay promo-text"><h5>' . $product["name"] . '</h5><strong><span>price: $</span>' . $product["price"] . '</strong></div></a>';
    $output = $output . "</a>";
    $output = $output . "</li>";

    return $output;
}

function get_list_view_html_bracelets($product_id, $product) {
    
    $output = "";
    $output = $output . '<li class="product columns small-10 small-offset-1 medium-5 medium-offset-1 large-3 large-offset-1 placeholder ' . $product["row"] . ' animated">';
    $output = $output . '<a href="bracelet.php?id=' . $product_id . '" class="animsition-link productLink">';
    $output = $output . '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';
    $output = $output . '<a href="bracelet.php?id=' . $product_id . '" class="animsition-link productLink"><div class="prodOverlay promo-text"><h5>' . $product["name"] . '</h5><strong><span>price: $</span>' . $product["price"] . '</strong></div></a>';
    $output = $output . "</a>";
    $output = $output . "</li>";

    return $output;
}

function get_list_view_html_others($product_id, $product) {
    
    $output = "";
    $output = $output . '<li class="product columns small-10 small-offset-1 medium-5 medium-offset-1 large-3 large-offset-1 placeholder ' . $product["row"] . ' animated">';
    $output = $output . '<a href="other.php?id=' . $product_id . '" class="animsition-link productLink">';
    $output = $output . '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';
    $output = $output . '<a href="other.php?id=' . $product_id . '" class="animsition-link productLink"><div class="prodOverlay promo-text"><h5>' . $product["name"] . '</h5><strong><span>price: $</span>' . $product["price"] . '</strong></div></a>';
    $output = $output . "</a>";
    $output = $output . "</li>";

    return $output;
}

function get_list_view_html_gifts($product_id, $product) {
    
    $output = "";
    $output = $output . '<li class="product columns small-10 small-offset-1 medium-5 medium-offset-1 large-3 large-offset-1 placeholder ' . $product["row"] . ' animated">';
    $output = $output . '<a href="gift.php?id=' . $product_id . '" class="animsition-link productLink">';
    $output = $output . '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';
    $output = $output . '<a href="gift.php?id=' . $product_id . '" class="animsition-link productLink"><div class="prodOverlay promo-text"><h5>' . $product["name"] . '</h5><strong><span>price: $</span>' . $product["price"] . '</strong></div></a>';
    $output = $output . "</a>";
    $output = $output . "</li>";

    return $output;
}
// this lists all the necassary information about our necklaces, including palpal button code 

$necklaces = array();
$necklaces[101] = array(
	"name" => "Necklace1",
	"img" => "assets/img/product.jpeg",
	"price" => 18,
	"paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowOne",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$necklaces[102] = array(
	"name" => "Neckalce2",
    "img" => "assets/img/product.jpeg",
    "price" => 28,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowOne",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$necklaces[103] = array(
    "name" => "Neckalce3",
    "img" => "assets/img/product.jpeg",
    "price" => 12,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowOne",
    "paypal" => "",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$necklaces[104] = array(
    "name" => "Neckalce4",
    "img" => "assets/img/product.jpeg",
    "price" => 18,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowTwo",
    "paypal" => "",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$necklaces[105] = array(
    "name" => "Neckalce5",
    "img" => "assets/img/product.jpeg",
    "price" => 12,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowTwo",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$necklaces[106] = array(
    "name" => "Neckalce6",
    "img" => "assets/img/product.jpeg",
    "price" => 19,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowTwo",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$necklaces[107] = array(
    "name" => "Neckalce7",
    "img" => "assets/img/product.jpeg",
    "price" => 18,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowThree",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$necklaces[108] = array(
    "name" => "Neckalce8",
    "img" => "assets/img/product.jpeg",
    "price" => 23,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowThree",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$necklaces[109] = array(
    "name" => "Neckalce9",
    "img" => "assets/img/product.jpeg",
    "price" => 18,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowThree",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$necklaces[110] = array(
    "name" => "Neckalce10",
    "img" => "assets/img/product.jpeg",
    "price" => 28,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowFour",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);


$bracelets = array();
$bracelets[101] = array(
    "name" => "bracelet1",
    "img" => "assets/img/product.jpeg",
    "price" => 18,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowOne",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$bracelets[102] = array(
    "name" => "bracelet2",
    "img" => "assets/img/product.jpeg",
    "price" => 28,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowOne",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$bracelets[103] = array(
    "name" => "bracelet3",
    "img" => "assets/img/product.jpeg",
    "price" => 12,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowOne",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$bracelets[104] = array(
    "name" => "bracelet4",
    "img" => "assets/img/product.jpeg",
    "price" => 18,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowTwo",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$bracelets[105] = array(
    "name" => "bracelet5",
    "img" => "assets/img/product.jpeg",
    "price" => 12,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowTwo",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$bracelets[106] = array(
    "name" => "bracelet6",
    "img" => "assets/img/product.jpeg",
    "price" => 19,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowTwo",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$bracelets[107] = array(
    "name" => "bracelet7",
    "img" => "assets/img/product.jpeg",
    "price" => 18,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowThree",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$bracelets[108] = array(
    "name" => "bracelet8",
    "img" => "assets/img/product.jpeg",
    "price" => 23,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowThree",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$bracelets[109] = array(
    "name" => "bracelet9",
    "img" => "assets/img/product.jpeg",
    "price" => 18,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowThree",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$bracelets[110] = array(
    "name" => "bracelet10",
    "img" => "assets/img/product.jpeg",
    "price" => 28,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowFour",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);


$gifts = array();
$gifts[101] = array(
    "name" => "gift1",
    "img" => "assets/img/product.jpeg",
    "price" => 18,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowOne",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$gifts[102] = array(
    "name" => "gift2",
    "img" => "assets/img/product.jpeg",
    "price" => 28,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowOne",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$gifts[103] = array(
    "name" => "gift3",
    "img" => "assets/img/product.jpeg",
    "price" => 12,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowOne",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$gifts[104] = array(
    "name" => "gift4",
    "img" => "assets/img/product.jpeg",
    "price" => 18,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowTwo",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$gifts[105] = array(
    "name" => "gift5",
    "img" => "assets/img/product.jpeg",
    "price" => 12,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowTwo",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$gifts[106] = array(
    "name" => "gift6",
    "img" => "assets/img/product.jpeg",
    "price" => 19,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowTwo",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$gifts[107] = array(
    "name" => "gift7",
    "img" => "assets/img/product.jpeg",
    "price" => 18,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowThree",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$gifts[108] = array(
    "name" => "gift8",
    "img" => "assets/img/product.jpeg",
    "price" => 23,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowThree",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$gifts[109] = array(
    "name" => "gift9",
    "img" => "assets/img/product.jpeg",
    "price" => 18,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowThree",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$gifts[110] = array(
    "name" => "gift10",
    "img" => "assets/img/product.jpeg",
    "price" => 28,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowFour",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);


$others = array();
$others[101] = array(
    "name" => "other1",
    "img" => "assets/img/product.jpeg",
    "price" => 18,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowOne",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$others[102] = array(
    "name" => "other2",
    "img" => "assets/img/product.jpeg",
    "price" => 28,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowOne",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$others[103] = array(
    "name" => "other3",
    "img" => "assets/img/product.jpeg",
    "price" => 12,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowOne",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$others[104] = array(
    "name" => "other4",
    "img" => "assets/img/product.jpeg",
    "price" => 18,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowTwo",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$others[105] = array(
    "name" => "other5",
    "img" => "assets/img/product.jpeg",
    "price" => 12,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowTwo",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$others[106] = array(
    "name" => "other6",
    "img" => "assets/img/product.jpeg",
    "price" => 19,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowTwo",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$others[107] = array(
    "name" => "other7",
    "img" => "assets/img/product.jpeg",
    "price" => 18,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowThree",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$others[108] = array(
    "name" => "other8",
    "img" => "assets/img/product.jpeg",
    "price" => 23,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowThree",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$others[109] = array(
    "name" => "other9",
    "img" => "assets/img/product.jpeg",
    "price" => 18,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowThree",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);
$others[110] = array(
    "name" => "other10",
    "img" => "assets/img/product.jpeg",
    "price" => 28,
    "paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large"),
    "paypal" => "",
    "row" => "productRowFour",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et"
);

?>