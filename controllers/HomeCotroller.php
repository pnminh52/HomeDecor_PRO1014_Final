<?php
class HomeCotroller {
    public function index(){
        $product = new Product;
        $tables = $product->listProductCategoryHome(2);
        $cupboards = $product->listProductCategoryHome(4);
        $alls=$product->showAllProducts();
        $title = "Nội thất Việt";
        $categories=(new Category)-> all();
        return view("clients.home", compact('tables','cupboards', 'title','categories','alls'));


    }

}