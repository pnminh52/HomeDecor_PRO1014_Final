<?php
class HomeCotroller {
    public function index(){
        $product = new Product;
        $tables = $product->listProductCategoryHome(2);
        $cupboards = $product->listProductCategoryHome(4);
        $alls=$product->showAllProducts();
        $title = "Trang chủ website nội thất";
        $categories=(new Category)-> all();
        return view("clients.home", compact('tables','cupboards', 'title','categories','alls'));


    }

}