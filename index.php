<?php 
session_start();
require_once __DIR__ . "/env.php";
require_once __DIR__ ."/common/function.php";

require_once __DIR__ ."/models/BaseModel.php";
require_once __DIR__ ."/models/Category.php";
require_once __DIR__ ."/models/Product.php";
require_once __DIR__ ."/models/User.php";

require_once __DIR__ ."/controllers/HomeCotroller.php";
require_once __DIR__ ."/controllers/ProductController.php";
require_once __DIR__ . "/controllers/CartController.php";
require_once __DIR__ . "/controllers/AuthController.php";

$ctl=$_GET['ctl']??'';
match ($ctl){
    ''=>(new HomeCotroller)->index(),
    'category' => (new ProductController)->list(),
    'details' => (new ProductController)->show(),
    'add-cart'=>(new CartController)->addToCart(),
    'search' => (new ProductController)->searchs(),
    'view-cart'=>(new CartController)->viewCart(),
    'register'=>(new AuthController)->register(),
    'login'=>(new AuthController)->login(),
    'logout'=>(new AuthController)->logout(),
    'delete-cart'=>(new CartController)->deleteProductInCart(),
    'update-cart'=>(new CartController)->updateCart(),
};