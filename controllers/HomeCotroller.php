<?php
class HomeCotroller {
    public function index(){
        $product = new Product;
        //Danh sách sản phẩm theo danh mục
        $tables = $product->listProductCategory(2);
        $cupboards = $product->listProductCategory(4);
        return view("clients.home", compact('tables','cupboards'));


    }

}