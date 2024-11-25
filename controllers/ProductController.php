<?php
 class ProductController{
  public function list(){
    $id = $_GET["id"];
    $products = (new Product)->listProductCategory($id);
    $category_name= (new Category)-> find($id)['cate_name'];
    $tittle = $category_name;
    return view (
        'clients.products.list',
        compact('products', 'category_name', 'tittle')
    );
  }
 }