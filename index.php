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

$ctl=$_GET['ctl']??'';
match ($ctl){
    ''=>(new HomeCotroller)->index(),
    'category' => (new ProductController)->list(),
<<<<<<< HEAD
    'details' => (new ProductController)->show(),
    'add-cart'=>(new CartController)->addToCart(),
    'search' => (new ProductController)->searchs(),
    'view-cart'=>(new CartController)->viewCart(),


=======
    'detail' => (new ProductController)->show(),
    'search'=> (new ProductController)->searchs(),
>>>>>>> b38846c17bbd0164d32fba846513539f415ad0b9

};