<?php 
session_start();
require_once __DIR__ . "/env.php";
require_once __DIR__ ."/common/function.php";
require_once __DIR__ ."/models/BaseModel.php";
require_once __DIR__ ."/models/Category.php";
require_once __DIR__ ."/models/Product.php";
require_once __DIR__ ."/models/User.php";
require_once __DIR__ ."/models/Order.php";
require_once __DIR__ ."/models/Comment.php";
require_once __DIR__ ."/controllers/HomeCotroller.php";
require_once __DIR__ ."/controllers/ProductController.php";
require_once __DIR__ . "/controllers/CartController.php";
require_once __DIR__ . "/controllers/AuthController.php";
require_once __DIR__ ."/controllers/OrderController.php";

$ctl=$_GET['ctl']??'';
match ($ctl){
    ''=>(new HomeCotroller)->index(),
    //!!Product
    'category' => (new ProductController)->list(),
    'details' => (new ProductController)->show(),
    'shop'=> (new ProductController)->showAllProducts(),
    'search' => (new ProductController)->searchs(),
    //!!Cart
    'add-cart'=>(new CartController)->addToCart(),
    'view-cart'=>(new CartController)->viewCart(),
    'delete-cart'=>(new CartController)->deleteProductInCart(),
    'update-cart'=>(new CartController)->updateCart(),
    'view-checkout'=>(new CartController)->viewCheckout(),
    'checkout'=>(new CartController)->checkOut(),
    'success'=>(new CartController)->success(),
    //!!Auth
    'register'=>(new AuthController)->register(),
    'login'=>(new AuthController)->login(),
    'logout'=>(new AuthController)->logout(),
    //!!User
    'list-order'=>(new OrderController)->showOrderUser(),
    'order-detail-users'=>(new OrderController)->detailOrderUser(),

};