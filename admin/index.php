<?php
session_start();
require_once __DIR__ . "/../views/env.php";
require_once __DIR__ ."/../common/function.php";
require_once __DIR__ ."/../models/BaseModel.php";
require_once __DIR__ ."/../models/Category.php";
require_once __DIR__ ."/../models/Product.php";
require_once __DIR__ ."/../controllers/Admin/DashboardController.php";
require_once __DIR__ ."/../controllers/Admin/AdminCategoryController.php";


$ctl = $_GET['ctl'] ?? '';
match ($ctl){
    ''=>(new DashboardController)->index(),
    'listdm'=> (new AdminCategoryController)->index(),
    'adddm'=> (new AdminCategoryController)->create(),
    'storedm' => (new AdminCategoryController)->store(),
    'editdm' => (new AdminCategoryController)->edit(),
    'updatedm' => (new AdminCategoryController)->update(),
};

