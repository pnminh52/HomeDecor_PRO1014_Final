<?php 
require_once __DIR__ . "/env.php";
require_once __DIR__ ."/common/function.php";

require_once __DIR__ ."/models/BaseModel.php";
require_once __DIR__ ."/models/Category.php";
require_once __DIR__ ."/models/Product.php";

require_once __DIR__ ."/controllers/HomeCotroller.php";
require_once __DIR__ ."/controllers/ProductController.php";
require_once __DIR__ ."/controllers/CartController.php";
$ctl=$_GET['ctl']??'';
match ($ctl){
    ''=>(new HomeCotroller)->index(),
    'category' => (new ProductController)->list(),
    'details' => (new ProductController)->show(),
    'add-cart'=>(new CartController)->addToCart(),
    'search' => (new ProductController)->searchs(),



};