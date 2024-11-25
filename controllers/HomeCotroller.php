<?php
class HomeController
{
    public function index()
    {
        $product = new Product;
        $table = $product->listProductCategory(1);
        $cupboard = $product->listProductCategory(2);
        $title="Trang chủ ưebsite nội thất";
        return view("client.home", compact('table','cupboard','title'));
        
    }
}