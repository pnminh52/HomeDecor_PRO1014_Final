<?php
session_start();
require_once __DIR__ . "/../env.php";
require_once __DIR__ ."/../common/function.php";
require_once __DIR__ ."/../models/BaseModel.php";
require_once __DIR__ ."/../models/Category.php";
require_once __DIR__ ."/../models/Product.php";
require_once __DIR__ ."/../models/User.php";
require_once __DIR__ ."/../models/Order.php";
require_once __DIR__ ."/../models/Comment.php";
require_once __DIR__ ."/../controllers/Admin/DashboardController.php";
require_once __DIR__ ."/../controllers/Admin/AdminCategoryController.php";
require_once __DIR__ ."/../controllers/Admin/AdminProductController.php";
require_once __DIR__ ."/../controllers/AuthController.php";
require_once __DIR__ ."/../controllers/OrderController.php";
require_once __DIR__ ."/../controllers/CommentController.php";

$ctl = $_GET['ctl'] ?? '';
match ($ctl){
    ''=>(new DashboardController)->index(),
    //!!Category
    'listdm'=> (new AdminCategoryController)->index(),
    'adddm'=> (new AdminCategoryController)->create(),
    'storedm' => (new AdminCategoryController)->store(),
    'editdm' => (new AdminCategoryController)->edit(),
    'updatedm' => (new AdminCategoryController)->update(),
    'deletedm' => (new AdminCategoryController)->delete(),
    //!!Product
    'listsp'=> (new AdminProductController)->index(),
    'addsp'=> (new AdminProductController)->add(),
    'storesp'=> (new AdminProductController)->store(),
    'editsp'=> (new AdminProductController)->edit(),
    'updatesp'=> (new AdminProductController)->update(),
    'deletesp'=> (new AdminProductController)->delete(),
    //!!User
    'listuser' => (new AuthController)->index(),
    'updateuser' => (new AuthController)->updateActive(),
    //!!Order
    'list-order' => (new OrderController)->index(),
    'detail-order' => (new OrderController)->showOrder(),
    //!!Comment
    'product-comment' => (new CommentController)->index(),
    'comment-detail' => (new CommentController)->list(),

};

