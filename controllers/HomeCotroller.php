<?php
class HomeCotroller {
    public function index(){
        $product = new Product;
        //Danh sách sản phẩm theo danh mục
        $tables = $product->listProductCategoryHome(2);
        $cupboards = $product->listProductCategoryHome(4);
        $title = "Trang chủ website nội thất";
        $categories=(new Category)-> all();
        return view("clients.home", compact('tables','cupboards', 'title','categories'));


    }

}