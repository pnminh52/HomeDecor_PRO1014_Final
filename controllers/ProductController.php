<?php
 class ProductController{
  public function list(){
    $id = $_GET["id"];
    $products = (new Product)->listProductCategory($id);
    $category_name= (new Category)-> find($id)['cate_name'];
    $categories=(new Category)-> all();
    $tittle = $category_name;
    return view (
        'clients.products.list',
        compact('products','categories', 'category_name', 'tittle')
    );
  }
   //Product details function
  public function show(){
    $id = $_GET['id'];
    $product = (new Product)->find($id);
    $title=$product['name'];
    $categories=(new Category)->all();
    return view(
      'clients.product.details',
      compact('product','title','categories')
    );
   }
 }


