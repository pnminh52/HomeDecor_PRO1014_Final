<?php
class HomeCotroller {
    public function index(){
        $product = new Product;
        //Danh sachsanr phẩm theo danh mục
        $tables = $product->listProductCategory(1);
        $cupboards = $product->listProductCategory(2);
        return view("clients.home", compact('tables','cupboards'));


    }

}